<?php

namespace App\Filament\Resources\AsetTetapResource\Pages;

use App\Filament\Resources\AsetTetapResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAsetTetaps extends ListRecords
{
    protected static string $resource = AsetTetapResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
