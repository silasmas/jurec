<?php

namespace App\Filament\Widgets;

use App\Models\domaine;
use App\Models\thematique;
use Filament\Widgets\BarChartWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class DomainesChartWidget extends BarChartWidget
{
    protected static ?int $sort = 4;
    protected function getData(): array
    {
        $thematique = thematique::withCount('categorie')->get();

        return [
            'datasets' => [
                [
                    'label' => 'Nombre de thématiques',
                    'data' => $thematique->pluck('nom')->toArray(),
                ],
            ],
            'labels' => $thematique->pluck('titre')->toArray(),
        ];
    }
}

