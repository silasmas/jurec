<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\projet;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Filament\Resources\Resource;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Section;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ProjetResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ProjetResource\RelationManagers;

class ProjetResource extends Resource
{
    protected static ?string $model = projet::class;

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';

    protected static ?string $navigationLabel = 'Projets';
    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make([
                    Section::make('Info sur le projet')->schema([
                        Select::make('categorie_id')
                            ->label(label: 'Catégorie')
                            ->searchable()
                            ->columnSpan(6)
                            ->preload()
                            ->required()
                            ->relationship('categorie', 'nom'),
                        TextInput::make('titre')
                            ->required()
                            ->columnSpan(6)
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn(string $operation, $state, Set $set) =>
                            $operation === 'create' || $operation === 'edit' ? $set('slug', Str::slug($state)) : null),
                        TextInput::make('slug')
                            ->columnSpan(6)
                            ->disabled()
                            ->dehydrated()
                            ->required()
                            ->maxLength(255)
                            ->unique(projet::class, 'slug', ignoreRecord: true),
                        TextInput::make('resume')
                            ->columnSpan(6)
                            ->required()
                            ->maxLength(255),
                        RichEditor::make('description')
                            ->toolbarButtons([
                                'attachFiles',
                                'blockquote',
                                'bold',
                                'bulletList',
                                'codeBlock',
                                'h2',
                                'h3',
                                'italic',
                                'link',
                                'orderedList',
                                'redo',
                                'strike',
                                'underline',
                                'undo',
                                'paragraph', // Gestion de paragraphe
                                'heading',   // Gestion des titres
                                'textSize',  // Taille des textes
                                'alignLeft', // Alignement du texte
                                'alignCenter',
                                'alignRight',
                                'alignJustify',
                            ])
                            ->columnSpanFull(),
                        FileUpload::make('couverture')
                            ->columnSpan(6)
                            ->directory('couvertureProjet')
                            ->imageEditor()
                            ->multiple()
                            ->imageEditorMode(2)
                            ->downloadable()
                            ->visibility('private')
                            ->image()
                            ->maxSize(3024)
                            ->previewable(true),
                        FileUpload::make('images')
                            ->columnSpan(6)
                            ->directory('projetImages')
                            ->imageEditor()
                            ->multiple()
                            ->imageEditorMode(2)
                            ->downloadable()
                            ->visibility('private')
                            ->image()
                            ->maxSize(2024)
                            ->previewable(true),
                        Toggle::make('is_active')
                            ->label('Active (pour le rendre visible ou pas)')
                            ->columnSpanFull()
                            ->onColor('success')
                            ->offColor('danger')
                            ->required(),
                    ])->columnS(12)
                ])->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('couverture'),
                TextColumn::make('categorie.nom')
                    ->label('Catégorie')
                    ->sortable(),
                TextColumn::make('titre')
                    ->label('Titre')
                    ->limit(20)
                    ->searchable(),
                TextColumn::make('slug')
                    ->label('Slug')
                    ->limit(10)
                    ->searchable(),
                TextColumn::make('resume')
                    ->label('Résumer')
                    ->limit(10)
                    ->searchable(),
                IconColumn::make('is_active')
                    ->label('Est active')
                    ->boolean(),
                TextColumn::make(name: 'created_at')
                    ->dateTime()
                    ->since()
                    ->label('date de creation')
                    ->sortable()
                    ->sortable('Date de publication')
                    ->toggleable(isToggledHiddenByDefault: false),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                ActionGroup::make([
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                ])
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProjets::route('/'),
            'create' => Pages\CreateProjet::route('/create'),
            'edit' => Pages\EditProjet::route('/{record}/edit'),
        ];
    }

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
    public static function getNavigationBadgeColor(): string|array|null
    {
        return static::getModel()::count() < 1 ? "danger" : "primary";
    }
}
