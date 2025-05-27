<?php

namespace App\Filament\Widgets;

use App\Models\User;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class UsersByRoleWidget extends BaseWidget
{
    protected static ?string $heading = 'Utilisateurs par rôle';

    protected static ?int $sort = 1;

    protected function getStats(): array
    {

        return [
            Stat::make('Nombre total des agents', User::count()),
        ];
    }
}
