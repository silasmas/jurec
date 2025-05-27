<?php
namespace App\Filament\Widgets;

use App\Models\message;
use App\Models\Partenaire;
use App\Models\projet;
use App\Models\service;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class ExtrasStatsWidget extends StatsOverviewWidget
{
    protected static ?int $sort = 2;
    protected function getStats(): array
    {
        return [
            Stat::make('Partenaires', Partenaire::where("is_active", true)->count())
                ->description('Partenaires actifs')
                ->color("success")
                ->url(route('filament.admin.resources.partenaires.index')),
            Stat::make('Partenaires', Partenaire::where("is_active", false)->count())
                ->description('Partenaires inactifs')
                ->color("danger")
                ->url(route('filament.admin.resources.partenaires.index')),
                Stat::make('Projets', projet::count())
                ->description('Contenus de mission')
                ->url(route('filament.admin.resources.projets.index')),
            Stat::make('Messages', Message::count())
                ->description('Messages reçus')
                ->url(route('filament.admin.resources.messages.index')),
            Stat::make('Services', Service::count())
                ->description('Services disponibles')
                ->url(route('filament.admin.resources.services.index')),
        ];
    }
}
