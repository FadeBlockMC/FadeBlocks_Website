<?php

namespace App\Filament\Resources\StaffRulesResource\Pages;

use App\Filament\Resources\StaffRulesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStaffRules extends EditRecord
{
    protected static string $resource = StaffRulesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
