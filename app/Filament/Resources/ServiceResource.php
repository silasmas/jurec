<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\pervice;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
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
use App\Filament\Resources\ServiceResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ServiceResource\RelationManagers;

class ServiceResource extends Resource
{
    protected static ?string $model = service::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Services';
    protected static ?int $navigationSort = 2;
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Info sur le service')->schema([
                    TextInput::make('titre')
                        ->required()
                        ->columnSpan(6)
                        ->maxLength(255)
                        ->live(onBlur: true)
                        ->afterStateUpdated(fn(string $operation, $state, Set $set) =>
                        $operation === 'create'|| $operation === 'edit' ? $set('slug', Str::slug($state)) : null),
                    TextInput::make('slug')
                        ->columnSpan(6)
                        ->disabled()
                        ->dehydrated()
                        ->required()
                        ->maxLength(255)
                        ->unique(service::class, 'slug', ignoreRecord: true),
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
                    FileUpload::make('images')
                        ->columnSpan(6)
                        ->directory('servicesImages')
                        ->multiple()
                        ->imageEditor()
                        ->imageEditorMode(2)
                        ->downloadable()
                        ->visibility('private')
                        ->image()
                        ->maxSize(2024)
                        ->previewable(true),
                    FileUpload::make('couverture')
                        ->columnSpan(6)
                        ->directory('servicesCover')
                        ->imageEditor()
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
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('couverture')
                    ->searchable(),
                TextColumn::make('titre')
                    ->searchable(),
                TextColumn::make('slug')
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
            'index' => Pages\ListServices::route('/'),
            // 'create' => Pages\CreateService::route('/create'),
            // 'edit' => Pages\EditService::route('/{record}/edit'),
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
