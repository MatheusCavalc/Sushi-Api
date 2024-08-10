<?php

namespace App\Filament\Resources\InfoResource\Pages;

use App\Filament\Resources\InfoResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewInfo extends ViewRecord
{
    protected static string $resource = InfoResource::class;

    protected ?string $heading = 'Visualizar Informações';

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make()->label('Editar'),
        ];
    }
}
