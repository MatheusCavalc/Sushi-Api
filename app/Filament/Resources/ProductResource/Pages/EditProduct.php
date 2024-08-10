<?php

namespace App\Filament\Resources\ProductResource\Pages;

use App\Filament\Resources\ProductResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProduct extends EditRecord
{
    protected static string $resource = ProductResource::class;

    protected ?string $heading = 'Editar Produto';

    protected function getSavedNotificationTitle(): ?string
    {
        return 'Produto atualizado';
    }

    protected function getFormActions(): array
    {
        return [
            $this->getSaveFormAction()->label('Salvar alterações'),
            $this->getCancelFormAction()->label('Cancelar'),
        ];
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make()->label('Visualizar'),
            Actions\DeleteAction::make()->label('Excluir')
                ->modalHeading('Excluir produto')
                ->modalDescription('Tem certeza de que deseja excluir este produto? Isto não pode ser desfeito.')
                ->modalSubmitActionLabel('Sim, excluir')
                ->modalCancelActionLabel('Cancelar'),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
