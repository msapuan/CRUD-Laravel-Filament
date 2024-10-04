<?php

namespace App\Filament\Resources\PembangunanResource\Pages;

use App\Filament\Resources\PembangunanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPembangunan extends EditRecord
{
    protected static string $resource = PembangunanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
