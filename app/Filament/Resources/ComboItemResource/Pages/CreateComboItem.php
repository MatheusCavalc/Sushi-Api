<?php

namespace App\Filament\Resources\ComboItemResource\Pages;

use App\Filament\Resources\ComboItemResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateComboItem extends CreateRecord
{
    protected static string $resource = ComboItemResource::class;

    protected ?string $heading = 'Criar Item';

    protected function getCreatedNotificationTitle(): ?string
    {
        return 'Item criado';
    }

    protected function getFormActions(): array
    {
        return [
            $this->getCreateFormAction()->label('Criar'),
            $this->getCancelFormAction()->label('Cancelar'),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
