<?php

namespace App\Filament\Resources\CagaranResource\Pages;

use App\Filament\Resources\CagaranResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCagarans extends ListRecords
{
    protected static string $resource = CagaranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
