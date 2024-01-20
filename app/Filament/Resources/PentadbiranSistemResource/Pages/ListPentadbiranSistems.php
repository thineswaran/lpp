<?php

namespace App\Filament\Resources\PentadbiranSistemResource\Pages;

use App\Filament\Resources\PentadbiranSistemResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPentadbiranSistems extends ListRecords
{
    protected static string $resource = PentadbiranSistemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
