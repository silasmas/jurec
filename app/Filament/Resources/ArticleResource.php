<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\article;
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
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ArticleResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ArticleResource\RelationManagers;
use App\Filament\Resources\ArticleResource\Widgets\StatsOverview;
use EightyNine\FilamentAdvancedWidget\AdvancedStatsOverviewWidget;

class ArticleResource extends Resource
{
    protected static ?string $model = article::class;

    protected static ?string $navigationIcon = 'heroicon-o-globe-alt';
    protected static ?string $navigationLabel = 'Articles';
    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make([
                    Section::make('Info sur l\'article')->schema([
                        Select::make('domaine_id')
                            ->label(label: 'Domaine')
                            ->searchable()
                            ->columnSpan(4)
                            ->preload()
                            ->required()
                            ->relationship('domaine', 'nom'),
                        TextInput::make('titre')
                            ->required()
                            ->columnSpan(4)
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn(string $operation, $state, Set $set) =>
                            $operation === 'create' || $operation === 'edit' ? $set('slug', Str::slug($state)) : null),
                        TextInput::make('slug')
                            ->columnSpan(4)
                            ->disabled()
                            ->dehydrated()
                            ->required()
                            ->maxLength(255)
                            ->unique(article::class, 'slug', ignoreRecord: true),
                        TextInput::make('resume')
                            ->columnSpan(12)
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
                            ->columnSpan(6)
                            ->directory('couverture')
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
                            ->directory('articleImages')
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
                TextColumn::make('domaine.nom')
                    ->label('Domaine')
                    ->sortable(),
                TextColumn::make('titre')
                    ->label('Titre')
                    ->searchable(),
                TextColumn::make('resume')
                    ->label('Résumer')
                    ->limit(50)
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
            'index' => Pages\ListArticles::route('/'),
            'create' => Pages\CreateArticle::route('/create'),
            'edit' => Pages\EditArticle::route('/{record}/edit'),
        ];
    }
    public static function getWidgets(): array
    {
        return [
            AdvancedStatsOverviewWidget::class,
            // StatsOverview::class,
        ];
    }

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
    public static function getNavigationBadgeColor(): string|array|null
    {
        return static::getModel()::count() < 1 ? "danger" : "success";
    }
}
