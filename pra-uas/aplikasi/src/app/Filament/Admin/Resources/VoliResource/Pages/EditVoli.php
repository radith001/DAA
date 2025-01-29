<?php

namespace App\Filament\Admin\Resources\VoliResource\Pages;

use App\Filament\Admin\Resources\VoliResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVoli extends EditRecord
{
    protected static string $resource = VoliResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
