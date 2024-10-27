<?php

namespace App\Filament\Resources\ArticleResource\Widgets;

use EightyNine\FilamentAdvancedWidget\AdvancedChartWidget as chart;
use EightyNine\FilamentAdvancedWidget\AdvancedStatsOverviewWidget\Stat;

class AdvancedChartWidget extends chart
{
    protected static ?string $heading = 'Chart';

    protected function getData(): array
    {
        return [
            Stat::make('Unique views', '192.1k'),
            Stat::make('Bounce rate', '21%'),
            Stat::make('Average time on page', '3:12'),
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
