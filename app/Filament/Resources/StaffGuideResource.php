<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StaffGuideResource\Pages;
use App\Filament\Resources\StaffGuideResource\RelationManagers;
use App\Models\StaffGuide;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\RichEditor;

class StaffGuideResource extends Resource
{
    protected static ?string $model = StaffGuide::class;

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
            'index' => Pages\ListStaffGuides::route('/'),
            'create' => Pages\CreateStaffGuide::route('/create'),
            'edit' => Pages\EditStaffGuide::route('/{record}/edit'),
        ];
    }
}
