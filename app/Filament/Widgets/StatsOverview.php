<?php

namespace App\Filament\Widgets;

use App\Models\ImpactStat;
use App\Models\PortfolioItem;
use App\Models\Service;
use App\Models\Sponsor;
use App\Models\TeamMember;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Portfolio Companies', PortfolioItem::count()),
            Stat::make('Services', Service::count()),
            Stat::make('Team Members', TeamMember::count()),
            Stat::make('Sponsors', Sponsor::count()),
            Stat::make('Impact Stats', ImpactStat::count()),
        ];
    }
}
