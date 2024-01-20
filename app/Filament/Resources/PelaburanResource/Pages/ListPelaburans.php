<?php

namespace App\Filament\Resources\PelaburanResource\Pages;

use App\Filament\Resources\PelaburanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPelaburans extends ListRecords
{
    protected static string $resource = PelaburanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
