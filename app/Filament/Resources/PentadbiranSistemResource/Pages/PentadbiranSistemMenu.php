<?php

namespace App\Filament\Resources\PentadbiranSistemResource\Pages;

use App\Filament\Resources\PentadbiranSistemResource;
use Filament\Resources\Pages\Page;

class PentadbiranSistemMenu extends Page
{
    protected static string $resource = PentadbiranSistemResource::class;

    protected static string $view = 'filament.resources.pentadbiran-sistem-resource.pages.pentadbiran-sistem-menu';

    protected static ?string $title = "Menu Pentadbiran Sistem";

}
