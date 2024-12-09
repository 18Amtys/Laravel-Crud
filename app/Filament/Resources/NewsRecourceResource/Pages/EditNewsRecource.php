<?php

namespace App\Filament\Resources\NewsRecourceResource\Pages;

use App\Filament\Resources\NewsRecourceResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNewsRecource extends EditRecord
{
    protected static string $resource = NewsRecourceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
