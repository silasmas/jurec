<?php

namespace App\Filament\Resources\ArticleResource\Widgets;

use App\Models\User;
use App\Models\article;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Articles', value: article::all()->count())->icon('heroicon-o-globe-alt'),

            Stat::make('Articles non publié', article::where("is_active", false)->get()->count()),
            Stat::make('Article Publié', article::where("is_active", true)->get()->count()),
        ];
    }
}
