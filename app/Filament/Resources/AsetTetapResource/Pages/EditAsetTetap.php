<?php

namespace App\Filament\Resources\AsetTetapResource\Pages;

use App\Filament\Resources\AsetTetapResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAsetTetap extends EditRecord
{
    protected static string $resource = AsetTetapResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
