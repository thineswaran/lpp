<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KodGunasamaResource\Pages;
use App\Filament\Resources\KodGunasamaResource\RelationManagers;
use App\Models\KodGunasama;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KodGunasamaResource extends Resource
{
    protected static ?string $model = KodGunasama::class;

    protected static ?string $navigationIcon = 'heroicon-o-command-line';

    protected static ?string $navigationLabel = 'Kod Gunasama';
 
    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListKodGunasamas::route('/'),
            'create' => Pages\CreateKodGunasama::route('/create'),
            'edit' => Pages\EditKodGunasama::route('/{record}/edit'),
        ];
    }
}
