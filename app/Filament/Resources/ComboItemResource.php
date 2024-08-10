<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ComboItemResource\Pages;
use App\Filament\Resources\ComboItemResource\RelationManagers;
use App\Models\ComboItem;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ComboItemResource extends Resource
{
    protected static ?string $model = ComboItem::class;

    protected static ?string $modelLabel = 'Itens dos Combos';

    protected static ?int $navigationSort = 4;

    protected static ?string $navigationGroup = 'Gestão de Loja';

    protected static ?string $navigationIcon = 'heroicon-o-bars-3-center-left';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Nome')
                    ->required(),
                Forms\Components\TextInput::make('price')
                    ->label('Preço')
                    ->required()
                    ->numeric()
                    ->prefix('$'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Nome')
                    ->searchable(),
                Tables\Columns\TextColumn::make('price')
                    ->label('Preço')
                    ->money()
                    ->sortable(),
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
                    ->modalHeading('Excluir item')
                    ->modalDescription('Tem certeza de que deseja excluir esta item? Isto não pode ser desfeito.')
                    ->modalSubmitActionLabel('Sim, excluir')
                    ->modalCancelActionLabel('Cancelar')
                    ->successNotification(
                        Notification::make()
                            ->success()
                            ->title('Item excluído')
                            ->body('O item foi excluído com sucesso'),
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
            'index' => Pages\ListComboItems::route('/'),
            'create' => Pages\CreateComboItem::route('/create'),
            'view' => Pages\ViewComboItem::route('/{record}'),
            'edit' => Pages\EditComboItem::route('/{record}/edit'),
        ];
    }
}
