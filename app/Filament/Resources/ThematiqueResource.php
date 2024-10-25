<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Set;
use Filament\Forms\Form;
use App\Models\thematique;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Section;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ThematiqueResource\Pages;
use App\Filament\Resources\ThematiqueResource\RelationManagers;

class ThematiqueResource extends Resource
{
    protected static ?string $model = thematique::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = "Domaine d'activités";
    protected static ?int $navigationSort = 4;
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
                            ->unique(thematique::class, 'slug', ignoreRecord: true),
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
                            ])
                            ->columnSpanFull(),
                        FileUpload::make('couverture')
                            ->columnSpan(12)
                            ->directory('couverturethematique')
                            ->imageEditor()
                            ->multiple()
                            ->imageEditorMode(2)
                            ->downloadable()
                            ->visibility('private')
                            ->image()
                            // ->maxSize(3024)
                            ->previewable(true),
                        // FileUpload::make('images')
                        //     ->columnSpan(6)
                        //     ->directory('thematiqueImages')
                        //     ->imageEditor()
                        //     ->multiple()
                        //     ->maxFiles(5)
                        //     ->imageEditorMode(2)
                        //     ->downloadable()
                        //     ->visibility('private')
                        //     ->image()
                        //     ->maxSize(2024)
                        //     ->previewable(true),
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
                    ->searchable(),
                TextColumn::make('slug')
                    ->searchable(),
                TextColumn::make('resume')
                    ->label('Résumer')
                    ->limit(50)
                    ->searchable(),
                IconColumn::make('is_active')
                    ->label('Est active')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListThematiques::route('/'),
            'create' => Pages\CreateThematique::route('/create'),
            'edit' => Pages\EditThematique::route('/{record}/edit'),
        ];
    }

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
    public static function getNavigationBadgeColor(): string|array|null
    {
        return static::getModel()::count() < 1 ? "danger" : "info";
    }
}
