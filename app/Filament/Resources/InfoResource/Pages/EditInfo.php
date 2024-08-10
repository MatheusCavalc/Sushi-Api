<?php

namespace App\Filament\Resources\InfoResource\Pages;

use App\Filament\Resources\InfoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInfo extends EditRecord
{
    protected static string $resource = InfoResource::class;

    protected ?string $heading = 'Editar Informações';

    protected function getSavedNotificationTitle(): ?string
    {
        return 'Informações atualizadas';
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
            //Actions\DeleteAction::make()->disabled(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
