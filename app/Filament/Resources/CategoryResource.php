<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CategoryResource\Pages;
use App\Filament\Resources\CategoryResource\RelationManagers;
use App\Models\Category;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CategoryResource extends Resource
{
    protected static ?string $model = Category::class;

    protected static ?string $modelLabel = 'Categorias';

    protected static ?int $navigationSort = 2;

    protected static ?string $navigationGroup = 'Gestão de Loja';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Nome')
                    ->required(),
                Forms\Components\Textarea::make('description')
                    ->label('Descrição')
                    ->required()
                    ->columnSpanFull(),
                //Forms\Components\FileUpload::make('image')
                //    ->image(),
                Forms\Components\TextInput::make('link_image')
                    ->label('Link da Imagem'),
                Forms\Components\TextInput::make('location')
                    ->label('Location')
                    ->readonly(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Nome')
                    ->searchable(),
                //Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\ImageColumn::make('link_image')
                    ->label('Link da Imagem'),
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
                Tables\Actions\ViewAction::make()
                    ->label('Visualizar'),
                Tables\Actions\EditAction::make()
                    ->label('Editar'),
                Tables\Actions\DeleteAction::make()
                    ->label('Excluir')
                    ->modalHeading('Excluir categoria')
                    ->modalDescription('Tem certeza de que deseja excluir esta categoria? Isto não pode ser desfeito.')
                    ->modalSubmitActionLabel('Sim, excluir')
                    ->modalCancelActionLabel('Cancelar')
                    ->successNotification(
                        Notification::make()
                            ->success()
                            ->title('Categoria excluída')
                            ->body('A categoria foi excluída com sucesso'),
                    ),
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
            'index' => Pages\ListCategories::route('/'),
            'create' => Pages\CreateCategory::route('/create'),
            'view' => Pages\ViewCategory::route('/{record}'),
            'edit' => Pages\EditCategory::route('/{record}/edit'),
        ];
    }
}
