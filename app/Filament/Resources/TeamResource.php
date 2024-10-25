<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\team;
use Filament\Tables;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\TeamResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\TeamResource\RelationManagers;

class TeamResource extends Resource
{
    protected static ?string $model = team::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Equipe';
    protected static ?int $navigationSort = 5;
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make([
                    Section::make('Info sur l\'equipe')->schema([
                        TextInput::make('nom')
                            ->required()
                            ->columnSpan(4)
                            ->maxLength(255),
                        TextInput::make('prennom')
                            ->required()
                            ->columnSpan(4)
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn(string $operation, $state, Set $set, Get $get) =>
                            $operation === 'create' || $operation === 'edit' ? $set('slug', Str::slug($state . $get('nom'))) : null),
                        TextInput::make('slug')
                            ->required()
                            ->columnSpan(4)
                            ->disabled()
                            ->dehydrated()
                            ->required()
                            ->maxLength(255)
                            ->unique(team::class, 'slug', ignoreRecord: true),
                        TextInput::make('poste')
                            ->required()
                            ->columnSpan(6)
                            ->maxLength(255),
                        Select::make(name: 'sexe')
                            ->options([
                                'Homme' => 'Homme',
                                'Femme' => 'Femme',
                            ])
                            ->label("Sexe")
                            ->searchable()->columnSpan(6),

                        RichEditor::make('biographie')
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
                            ->columnSpan(12),
                        Toggle::make('is_active')
                            ->label('Active (pour qu\'il soit afficher ou pas)')
                            ->columnSpan(12)
                            ->onColor('success')
                            ->offColor('danger')
                            ->required(),
                    ])
                ])->columnSpan(2),
                Group::make([
                    Section::make('Profil')->schema([
                        FileUpload::make('profil')
                            ->directory('profil')
                            ->label("Photo de profil")
                            ->imageEditor()
                            ->imageEditorMode(2)
                            ->downloadable()
                            ->visibility('private')
                            ->image()
                            ->maxSize(2024)
                            ->previewable(true)
                            ->reorderable(),
                    ]),
                    Section::make('Réseaux sociaux')->schema([
                        TextInput::make('fb')
                            ->columnSpan(4)
                            ->maxLength(255),
                        TextInput::make('youtube')
                            ->columnSpan(4)
                            ->maxLength(255),
                        TextInput::make('x')
                            ->columnSpan(4)
                            ->maxLength(255),
                        TextInput::make('instagram')
                            ->columnSpan(4)
                            ->maxLength(255),

                    ]),
                ])->columnSpan(1),
            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('profil')
                    ->circular()
                    ->searchable(),
                TextColumn::make('nom')
                    ->searchable(),
                TextColumn::make('prennom')
                    ->searchable(),
                TextColumn::make('slug')
                    ->searchable(),
                TextColumn::make('sexe')
                    ->searchable(),
                IconColumn::make('is_active')
                    ->label('Est active')
                    ->boolean(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
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
            'index' => Pages\ListTeams::route('/'),
            'create' => Pages\CreateTeam::route('/create'),
            'edit' => Pages\EditTeam::route('/{record}/edit'),
        ];
    }
    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
    public static function getNavigationBadgeColor(): string|array|null
    {
        return static::getModel()::count() < 1 ? "danger" : "warning";
    }
}
