<?php

namespace App\Filament\Resources\StaffGuideResource\Pages;

use App\Filament\Resources\StaffGuideResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListStaffGuides extends ListRecords
{
    protected static string $resource = StaffGuideResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
