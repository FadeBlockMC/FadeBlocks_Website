<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WikiResource\Pages;
use App\Filament\Resources\WikiResource\RelationManagers;
use App\Models\Wiki;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;


use Filament\Forms\Components\Select;
use Filament\Forms\Components\RichEditor;
class WikiResource extends Resource
{
    protected static ?string $model = Wiki::class;

    protected static ?string $navigationGroup = 'Server Information';

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
            'index' => Pages\ListWikis::route('/'),
            'create' => Pages\CreateWiki::route('/create'),
            'edit' => Pages\EditWiki::route('/{record}/edit'),
        ];
    }
}
