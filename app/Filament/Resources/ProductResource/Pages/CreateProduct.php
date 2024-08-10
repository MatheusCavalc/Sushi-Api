<?php

namespace App\Filament\Resources\ProductResource\Pages;

use App\Filament\Resources\ProductResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateProduct extends CreateRecord
{
    protected static string $resource = ProductResource::class;

    protected ?string $heading = 'Criar Produto';

    protected function getCreatedNotificationTitle(): ?string
    {
        return 'Produto criado';
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
