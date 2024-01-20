<?php

namespace App\Filament\Resources\PerakaunanResource\Pages;

use App\Filament\Resources\PerakaunanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPerakaunan extends EditRecord
{
    protected static string $resource = PerakaunanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
