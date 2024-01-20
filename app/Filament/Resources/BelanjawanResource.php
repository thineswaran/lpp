<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BelanjawanResource\Pages;
use App\Filament\Resources\BelanjawanResource\RelationManagers;
use App\Models\Belanjawan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BelanjawanResource extends Resource
{
    protected static ?string $model = Belanjawan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Belanjawan';
 
    protected static ?int $navigationSort = 3;

    //protected static bool $shouldRegisterNavigation = false; //MAKES IT HIDDEN

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
            'index' => Pages\ListBelanjawans::route('/'),
            'create' => Pages\CreateBelanjawan::route('/create'),
            'edit' => Pages\EditBelanjawan::route('/{record}/edit'),
        ];
    }

    public static function label()
    {
        return 'Belanjawan';
    }

    public static function singularLabel()
    {
        return 'Belanjawan';
    }

}
