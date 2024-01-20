<?php

namespace App\Filament\Resources\PerakaunanResource\Pages;

use App\Filament\Resources\PerakaunanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPerakaunans extends ListRecords
{
    protected static string $resource = PerakaunanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
