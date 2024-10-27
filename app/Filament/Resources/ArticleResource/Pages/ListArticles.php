<?php

namespace App\Filament\Resources\ArticleResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\ArticleResource;
use App\Filament\Resources\ArticleResource\Widgets\StatsOverview;
use App\Filament\Resources\ArticleResource\Widgets\AdvancedChartWidget;
use App\Filament\Resources\ArticleResource\Widgets\AdvancedStatsOverviewWidget;

class ListArticles extends ListRecords
{
    protected static string $resource = ArticleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
    protected function getHeaderWidgets(): array
    {
        return [
            StatsOverview::class,
            // AdvancedStatsOverviewWidget::class,
        ];
    }
}
