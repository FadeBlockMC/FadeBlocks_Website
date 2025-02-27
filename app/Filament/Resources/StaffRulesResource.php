<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StaffRulesResource\Pages;
use App\Filament\Resources\StaffRulesResource\RelationManagers;
use App\Models\StaffRules;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\RichEditor;
class StaffRulesResource extends Resource
{
    protected static ?string $model = StaffRules::class;

    protected static ?string $navigationGroup = 'Staff';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('category')
                    ->options([
                        'network' => 'Network',
                        'Survival' => 'Survival',
                        'Skyblock' => 'Skyblock',
                    ])
                    ->required(),
    
                RichEditor::make('content')
                    ->required(),
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
            'index' => Pages\ListStaffRules::route('/'),
            'create' => Pages\CreateStaffRules::route('/create'),
            'edit' => Pages\EditStaffRules::route('/{record}/edit'),
        ];
    }
}
