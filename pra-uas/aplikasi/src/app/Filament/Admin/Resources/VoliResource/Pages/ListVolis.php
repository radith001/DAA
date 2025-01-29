<?php

namespace App\Filament\Admin\Resources\VoliResource\Pages;

use App\Filament\Admin\Resources\VoliResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListVolis extends ListRecords
{
    protected static string $resource = VoliResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
