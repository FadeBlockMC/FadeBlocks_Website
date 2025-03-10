<?php

namespace App\Filament\Resources\StaffListResource\Pages;

use App\Filament\Resources\StaffListResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStaffList extends EditRecord
{
    protected static string $resource = StaffListResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
