<?php

namespace App\Filament\Resources\BelanjawanResource\Pages;

use App\Filament\Resources\BelanjawanResource;
use Filament\Resources\Pages\Page;

class BelanjawanMenu extends Page
{
    protected static string $resource = BelanjawanResource::class;

    protected static string $view = 'filament.resources.belanjawan-resource.pages.belanjawan-menu';

    protected static ?string $title = "Menu Belanjawan";


}
