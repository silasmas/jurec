<?php

namespace App\Providers;

use App\Models\activite;
use App\Models\categorie;
use App\Models\team;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('pages.*', function ($view) {
            $titre = getTitle(Route::currentRouteName());
            // $team = t::where('is_active', true)->get();
            // $activites = activite::where('is_active', true)->get();
            // $caegories = categorie::where('is_active', true)->get();
            //  dd($titre);
            $view->with('title', $titre);
            // $view->with('team', $team);
            // $view->with('activites', $activites);
            // $view->with('caegories', $caegories);
        });
    }
}
