<?php

namespace App\Filament\Resources\PentadbiranSistemResource\Pages;

use App\Filament\Resources\PentadbiranSistemResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPentadbiranSistems extends ListRecords
//class ListPentadbiranSistems
{
    protected static string $resource = PentadbiranSistemResource::class;

    protected static ?string $title = "Pentadbiran Sistem";

    protected function getHeaderActions(): array
    {
        return [
            //Actions\CreateAction::make(),
        ];
    }
}
