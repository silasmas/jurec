<?php

namespace App\Filament\Widgets;

use App\Models\article;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class RecentArticlesWidget extends BaseWidget
{

    protected static ?int $sort = 1;
    protected function getStats(): array
    {
        $recentArticles = article::latest()->take(5)->get();
        if ($recentArticles->isEmpty()) {
            return [
                Stat::make('Aucun article récent',0),
            ];
        }
        return $recentArticles->map(function ($article) {
            return Stat::make($article->titre, $article->created_at->format('d M Y'))
                ->description(($article->is_active ? 'Actif' : 'Inactif') . ' | ' . ucfirst($article->is_free ? 'Gratuit' : 'Payant'));
        })->toArray();
    }
}
