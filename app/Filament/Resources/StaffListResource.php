<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StaffListResource\Pages;
use App\Models\StaffList;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Illuminate\Support\Facades\Http;
use App\Models\Roles;

class StaffListResource extends Resource
{
    protected static ?string $model = StaffList::class;

    protected static ?string $navigationGroup = 'Staff';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('minecraft_username')
                    ->label('Minecraft Username')
                    ->required()
                    ->afterStateUpdated(fn ($state, $set) => 
                        $set('UUID', self::getMinecraftUUID($state))
                    ),

                TextInput::make('UUID')
                    ->label('UUID')
                    ->readOnly() 
                    ->dehydrated(), 

                Select::make('rank')
                    ->options(Roles::all()->pluck('name', 'name'))
                    ->required(),

                TextInput::make('Tasks')
                    ->label('Tasks')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('minecraft_username')->label('Minecraft Username'),
                Tables\Columns\TextColumn::make('UUID')->label('UUID'),
                Tables\Columns\TextColumn::make('rank')->label('Rank'),
                Tables\Columns\TextColumn::make('Tasks')->label('Tasks'),
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
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListStaffLists::route('/'),
            'create' => Pages\CreateStaffList::route('/create'),
            'edit' => Pages\EditStaffList::route('/{record}/edit'),
        ];
    }

    /**
     * Fetch the UUID from Mojang API
     */
    public static function getMinecraftUUID($username)
    {
        $response = Http::get("https://api.mojang.com/users/profiles/minecraft/{$username}");

        return $response->successful() ? $response->json()['id'] : null;
    }
}
