<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PentadbiranSistemResource\Pages;
use App\Filament\Resources\PentadbiranSistemResource\RelationManagers;
use App\Models\PentadbiranSistem;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Resources\Tables\Columns;
use Filament\Resources\Tables\Filter;
//use Filament\Resources\Tables\Table;


class PentadbiranSistemResource extends Resource
{
    protected static ?string $model = PentadbiranSistem::class;

    protected static ?string $navigationIcon = 'heroicon-o-key';

    protected static ?string $navigationLabel = 'Pentadbiran Sistem';

    protected static ?string $title = 'Pentadbiran Sistem';
 
    protected static ?int $navigationSort = 1;

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
                //Columns\Text::make('name')->primary(),

            ])
            ->filters([
                //
            ])
            ->actions([
                //Tables\Actions\EditAction::make(),
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
            //'index' => Pages\ListPentadbiranSistems::route('/'),
            'index' => Pages\PentadbiranSistemMenu::route('/'),
            'create' => Pages\CreatePentadbiranSistem::route('/create'),
            'edit' => Pages\EditPentadbiranSistem::route('/{record}/edit'),
        ];
    }
}
