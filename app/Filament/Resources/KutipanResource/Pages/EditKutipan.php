<?php

namespace App\Filament\Resources\KutipanResource\Pages;

use App\Filament\Resources\KutipanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKutipan extends EditRecord
{
    protected static string $resource = KutipanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
