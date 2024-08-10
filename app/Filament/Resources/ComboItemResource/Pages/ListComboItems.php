<?php

namespace App\Filament\Resources\ComboItemResource\Pages;

use App\Filament\Resources\ComboItemResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListComboItems extends ListRecords
{
    protected static string $resource = ComboItemResource::class;

    protected ?string $heading = 'Itens dos Combos';

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label('Criar Item'),
        ];
    }
}
