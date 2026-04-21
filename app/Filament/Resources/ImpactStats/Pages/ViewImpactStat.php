<?php

namespace App\Filament\Resources\ImpactStats\Pages;

use App\Filament\Resources\ImpactStats\ImpactStatResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewImpactStat extends ViewRecord
{
    protected static string $resource = ImpactStatResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
