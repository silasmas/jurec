<?php

namespace App\Filament\Widgets;

use App\Models\article;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class ArticlesStatsWidget extends BaseWidget
{
    protected static ?int $sort = 0;
    protected function getStats(): array
    {
        return [
            Stat::make('Articles Totaux', article::count()),
            Stat::make('Articles Récents ', article::where('created_at', '>=', now()->subDays(30))->count())
            ->description('Articles créés au cours des 30 derniers jours'),
            Stat::make('Articles Actifs', article::where('is_active', true)->count()),
            Stat::make('Articles Gratuits', article::where('is_free', true)->count()),
        ];
    }
}
