<?php

namespace App\Filament\Resources\PelaburanResource\Pages;

use App\Filament\Resources\PelaburanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPelaburan extends EditRecord
{
    protected static string $resource = PelaburanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
