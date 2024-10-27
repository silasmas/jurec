<?php

namespace App\Filament\Resources\ArticleResource\Widgets;

use App\Models\User;
use Filament\Widgets\StatsOverviewWidget\Stat;
use EightyNine\FilamentAdvancedWidget\AdvancedStatsOverviewWidget as BaseWidget;

class AdvancedStatsOverviewWidget extends BaseWidget
{
    protected static bool $isLazy = false;
    protected function getStats(): array
    {
        return [
            Stat::make('Total Users', User::all()->count())->icon('heroicon-o-user')
                ->backgroundColor('info')
                ->progress(69)
                ->progressBarColor('success')
                ->iconBackgroundColor('success')
                ->chartColor('success')
                ->iconPosition('start')
                ->description('The users in this period')
                ->descriptionIcon('heroicon-o-chevron-up', 'before')
                ->descriptionColor('success')
                ->iconColor('success'),
            Stat::make('Total Posts', "1.2k")->icon('heroicon-o-newspaper')
                ->description('The posts in this period')
                ->descriptionIcon('heroicon-o-chevron-up', 'before')
                ->descriptionColor('primary')
                ->iconColor('warning'),
            Stat::make('Total Comments', "23.4k")->icon('heroicon-o-chat-bubble-left-ellipsis')
                ->description("The comments in this period")
                ->descriptionIcon('heroicon-o-chevron-down', 'before')
                ->descriptionColor('danger')
                ->iconColor('danger')
        ];
    }
}
