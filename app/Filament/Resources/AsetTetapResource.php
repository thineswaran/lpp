<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AsetTetapResource\Pages;
use App\Filament\Resources\AsetTetapResource\RelationManagers;
use App\Models\AsetTetap;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AsetTetapResource extends Resource
{
    protected static ?string $model = AsetTetap::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Aset Tetap';

    protected static ?int $navigationSort = 9;


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
            'index' => Pages\ListAsetTetaps::route('/'),
            'create' => Pages\CreateAsetTetap::route('/create'),
            'edit' => Pages\EditAsetTetap::route('/{record}/edit'),
        ];
    }
}
