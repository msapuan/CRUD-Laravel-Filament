<?php

namespace App\Filament\Resources\PerencanaanResource\Pages;

use App\Filament\Resources\PerencanaanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPerencanaan extends EditRecord
{
    protected static string $resource = PerencanaanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
