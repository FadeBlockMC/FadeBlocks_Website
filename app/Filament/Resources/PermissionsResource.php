<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PermissionsResource\Pages;
use App\Filament\Resources\PermissionsResource\RelationManagers;
use App\Models\Permissions;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\TextInput;

class PermissionsResource extends Resource
{
    protected static ?string $model = Permissions::class;

    protected static ?string $navigationGroup = 'Users';


    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('role_id')
                ->label('Role')
                ->options(function () {
                    return \App\Models\Roles::pluck('name', 'id')->toArray();
                }),

                Toggle::make('is_banned')
                ->label('Banned')
                ->required()
                ->default(false), 

                Toggle::make('is_banned')
                ->label('Banned')
                ->required()
                ->default(false), 

                Toggle::make('is_banned')
                ->label('Banned')
                ->required()
                ->default(false), 

                Toggle::make('is_banned')
                ->label('Banned')
                ->required()
                ->default(false), 

                Toggle::make('is_banned')
                ->label('Banned')
                ->required()
                ->default(false), 

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
            'index' => Pages\ListPermissions::route('/'),
            'create' => Pages\CreatePermissions::route('/create'),
            'edit' => Pages\EditPermissions::route('/{record}/edit'),
        ];
    }
}
