<?php

namespace App\Filament\Resources\NewsRecourceResource\Pages;

use App\Filament\Resources\NewsRecourceResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNewsRecources extends ListRecords
{
    protected static string $resource = NewsRecourceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
