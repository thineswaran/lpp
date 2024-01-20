<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PerakaunanResource\Pages;
use App\Filament\Resources\PerakaunanResource\RelationManagers;
use App\Models\Perakaunan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PerakaunanResource extends Resource
{
    protected static ?string $model = Perakaunan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Perakaunan';
 
    protected static ?int $navigationSort = 8;


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
            'index' => Pages\ListPerakaunans::route('/'),
            'create' => Pages\CreatePerakaunan::route('/create'),
            'edit' => Pages\EditPerakaunan::route('/{record}/edit'),
        ];
    }
}
