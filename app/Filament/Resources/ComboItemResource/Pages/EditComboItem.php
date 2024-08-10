<?php

namespace App\Filament\Resources\ComboItemResource\Pages;

use App\Filament\Resources\ComboItemResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditComboItem extends EditRecord
{
    protected static string $resource = ComboItemResource::class;

    protected ?string $heading = 'Editar Item';

    protected function getSavedNotificationTitle(): ?string
    {
        return 'Item atualizado';
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
                ->modalHeading('Excluir item')
                ->modalDescription('Tem certeza de que deseja excluir esta item? Isto não pode ser desfeito.')
                ->modalSubmitActionLabel('Sim, excluir')
                ->modalCancelActionLabel('Cancelar')
                ->successNotificationTitle('Item excluído'),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
