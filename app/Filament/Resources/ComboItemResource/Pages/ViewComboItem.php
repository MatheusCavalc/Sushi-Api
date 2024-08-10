<?php

namespace App\Filament\Resources\ComboItemResource\Pages;

use App\Filament\Resources\ComboItemResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewComboItem extends ViewRecord
{
    protected static string $resource = ComboItemResource::class;

    protected ?string $heading = 'Visualizar Item';

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make()->label('Editar'),
        ];
    }
}
