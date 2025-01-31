<?php

namespace App\Filament\Admin\Resources\IkanResource\Pages;

use App\Filament\Admin\Resources\IkanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditIkan extends EditRecord
{
    protected static string $resource = IkanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
