<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RolesResource\Pages;
use App\Filament\Resources\RolesResource\RelationManagers;
use App\Models\Roles;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;


use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;


class RolesResource extends Resource
{
    protected static ?string $model = Roles::class;

    protected static ?string $navigationGroup = 'Users';


    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                ->label('Role name')
                ->default(fn ($get) => $get('name')),

                ColorPicker::make('Color')
                ->default('000000') 
                ->required(),
  

                // staff
                Toggle::make('staff_channels')
                ->label('Can view staff channels')
                ->required()
                ->default(false),
                
                Toggle::make('edit_staff_channels')
                    ->label('Can edit staff channels')
                    ->required()
                    ->default(false),


                // edit website
                Toggle::make('edit_rules')
                    ->label('Can edit rules')
                    ->required()
                    ->default(false),

                Toggle::make('edit_wiki')
                    ->label('Can edit wiki')
                    ->required()
                    ->default(false),

                Toggle::make('edit_faq')
                    ->label('Can edit FAQ')
                    ->required()
                    ->default(false),


                // edit users
                Toggle::make('edit_permissions')
                    ->label('Can edit permissions')
                    ->required()
                    ->default(false),

                Toggle::make('edit_roles')
                    ->label('Can edit roles')
                    ->required()
                    ->default(false),

                Toggle::make('edit_users')
                    ->label('Can edit users')
                    ->required()
                    ->default(false),
                // website wise
                Toggle::make('send_announcements')
                ->label('Can send announcements')
                ->required()
                ->default(false),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
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
            'index' => Pages\ListRoles::route('/'),
            'create' => Pages\CreateRoles::route('/create'),
            'edit' => Pages\EditRoles::route('/{record}/edit'),
        ];
    }
}
