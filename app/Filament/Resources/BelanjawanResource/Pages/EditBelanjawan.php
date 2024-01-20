<?php

namespace App\Filament\Resources\BelanjawanResource\Pages;

use App\Filament\Resources\BelanjawanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBelanjawan extends EditRecord
{
    protected static string $resource = BelanjawanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
