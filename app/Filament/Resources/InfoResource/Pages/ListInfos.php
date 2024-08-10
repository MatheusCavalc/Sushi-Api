<?php

namespace App\Filament\Resources\InfoResource\Pages;

use App\Filament\Resources\InfoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInfos extends ListRecords
{
    protected static string $resource = InfoResource::class;

    protected ?string $heading = 'Informações';

    protected function getHeaderActions(): array
    {
        return [
            //Actions\CreateAction::make(),
        ];
    }
}
