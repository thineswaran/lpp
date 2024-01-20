<?php

namespace App\Filament\Resources\KutipanResource\Pages;

use App\Filament\Resources\KutipanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKutipans extends ListRecords
{
    protected static string $resource = KutipanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
