<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUser extends EditRecord
{
    protected static string $resource = UserResource::class;

    protected ?string $heading = 'Editar Usuário';

    protected function getSavedNotificationTitle(): ?string
    {
        return 'Usuário atualizado';
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
            //Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
