<?php

namespace App\Filament\Resources\PentadbiranSistemResource\Pages;

use App\Filament\Resources\PentadbiranSistemResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPentadbiranSistem extends EditRecord
{
    protected static string $resource = PentadbiranSistemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
