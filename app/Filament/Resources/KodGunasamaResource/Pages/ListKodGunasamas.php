<?php

namespace App\Filament\Resources\KodGunasamaResource\Pages;

use App\Filament\Resources\KodGunasamaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKodGunasamas extends ListRecords
{
    protected static string $resource = KodGunasamaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
