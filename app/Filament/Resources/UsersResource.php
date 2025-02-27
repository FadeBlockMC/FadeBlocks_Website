<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UsersResource\Pages;
use App\Filament\Resources\UsersResource\RelationManagers;
use App\Models\User;
use App\Models\Roles;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

// Components
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;


class UsersResource extends Resource
{
    protected static ?string $model = User::class;
    protected static ?string $navigationGroup = 'Users';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            // READ ONLY TO CONFIRM IF USER = USER 
            TextInput::make('id')
                ->label('User ID')
                ->default(fn ($get) => $get('id'))
                ->disabled(), 

            TextInput::make('name')
            ->label('UserName')
            ->default(fn ($get) => $get('name'))
            ->disabled(), 

            // USER CAN CHANGE
            TextInput::make('avatar')
            ->label('Avatar')
            ->default(fn ($get) => $get('avatar')),

            Select::make('role_id')
                ->label('Role')
                ->options(function () {
                    return \App\Models\Roles::pluck('name', 'id')->toArray();
                })
                ->required(),
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
            TextColumn::make('id')->label('ID')->sortable(),
            TextColumn::make('name')->label('Name')->searchable(),
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUsers::route('/create'),
            'edit' => Pages\EditUsers::route('/{record}/edit'),
        ];
    }
}
