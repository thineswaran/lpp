<?php

namespace App\Filament\Resources\CagaranResource\Pages;

use App\Filament\Resources\CagaranResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCagaran extends EditRecord
{
    protected static string $resource = CagaranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
