<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InfoResource\Pages;
use App\Filament\Resources\InfoResource\RelationManagers;
use App\Models\Info;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class InfoResource extends Resource
{
    protected static ?string $model = Info::class;

    protected static ?string $modelLabel = 'Informações';

    protected static ?int $navigationSort = 0;

    protected static ?string $navigationGroup = 'Informações da Loja';

    protected static ?string $navigationIcon = 'heroicon-o-building-storefront';

    public static function canCreate(): bool
    {
        return false;
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Toggle::make('store_open')
                    ->label('Loja Aberta')
                    ->required(),
                Forms\Components\TextInput::make('whatsapp_number')
                    ->required()
                    ->label('Número do Whatsapp'),
                Forms\Components\TextInput::make('address')
                    ->required()
                    ->label('Endereço'),
                Forms\Components\TextInput::make('open_days')
                    ->required()
                    ->label('Dias Abertos'),
                Forms\Components\TextInput::make('opening_hours')
                    ->required()
                    ->label('Horas Abertas'),
                Forms\Components\Repeater::make('social_links')
                    ->schema([
                        Forms\Components\TextInput::make('social')
                            ->label('Rede Social')
                            ->required(),
                        Forms\Components\TextInput::make('link')
                            ->label('Link')
                            ->required(),
                        Forms\Components\TextInput::make('user')
                            ->label('Usuário/@'),
                    ])
                    ->label('Redes Sociais')
                    ->columnSpanFull()
                    ->columns(3)
                    ->reorderableWithButtons()
                    ->reorderable()
                    ->addActionLabel('Adicionar Rede Social'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ToggleColumn::make('store_open')
                    ->label('Loja Aberta'),
                Tables\Columns\TextColumn::make('whatsapp_number')
                    ->searchable()
                    ->label('Número do Whatsapp'),
                Tables\Columns\TextColumn::make('address')
                    ->label('Endereço')
                    ->searchable(),
                Tables\Columns\TextColumn::make('open_days')
                    ->label('Dias Abertos'),
                Tables\Columns\TextColumn::make('opening_hours')
                    ->label('Horas Abertas'),
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
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    //Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListInfos::route('/'),
            'create' => Pages\CreateInfo::route('/create'),
            'view' => Pages\ViewInfo::route('/{record}'),
            'edit' => Pages\EditInfo::route('/{record}/edit'),
        ];
    }
}
