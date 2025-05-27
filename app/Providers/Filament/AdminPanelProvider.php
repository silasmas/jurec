<?php

namespace App\Providers\Filament;

use Filament\Pages;
use Filament\Panel;
use Filament\Widgets;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Awcodes\LightSwitch\Enums\Alignment;
use Awcodes\LightSwitch\LightSwitchPlugin;
use Filament\Http\Middleware\Authenticate;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Cookie\Middleware\EncryptCookies;
use GeoSot\FilamentEnvEditor\FilamentEnvEditorPlugin;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use pxlrbt\FilamentEnvironmentIndicator\EnvironmentIndicatorPlugin;
use Joaopaulolndev\FilamentGeneralSettings\FilamentGeneralSettingsPlugin;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->colors([
                'danger' => Color::Rose,
                'gray' => Color::Gray,
                'info' => Color::Blue,
                'primary' => Color::Green,
                'success' => Color::Emerald,
                'warning' => Color::Orange,
            ])
            ->brandName('Dashboard JUREC')
            // ->viteTheme('resources/css/filament/admin/theme.css')
            ->brandLogo(asset('assets/images/3.png'))
            ->brandLogoHeight(fn() => auth()->check() ? '3rem' : '5rem')
            ->favicon(asset('assets/images/3.png'))
            ->colors([
                'primary' => "#478534",
                // 'primary' => Color::Amber,
            ])
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->widgets([
                // Widgets\AccountWidget::class,
                // Widgets\FilamentInfoWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ])->plugins([
                EnvironmentIndicatorPlugin::make(['title' => 'Mon Indicateur'])
                    ->visible(fn() => auth()->user()?->can('see_indicator') || auth()->user()?->hasRole('super_admin'))
                    ->color(fn() => match (app()->environment()) {
                        'production' => Color::Green,
                        'staging' => Color::Orange,
                        default => Color::Blue,
                    })
                    ->showBadge(showBadge: true)
                    // ->setIcon('indicator-icon')
                    ->showBorder(true),
                \BezhanSalleh\FilamentShield\FilamentShieldPlugin::make()
                    ->gridColumns([
                        'default' => 1,
                        'sm' => 2,
                        'lg' => 2,
                    ])
                    ->sectionColumnSpan(1)
                    ->checkboxListColumns([
                        'default' => 1,
                        'sm' => 2,
                        'lg' => 3,
                    ])
                    ->resourceCheckboxListColumns([
                        'default' => 1,
                        'sm' => 2,
                    ]),
                FilamentGeneralSettingsPlugin::make()
                    ->canAccess(fn() => auth()->user()->id === 1)
                    ->setSort(3)
                    ->setIcon('heroicon-o-cog')
                    ->setNavigationGroup('Paramètres')
                    ->setTitle('Paramètres généraux')
                    ->setNavigationLabel('Paramètres généraux'),
                LightSwitchPlugin::make()
                    ->position(Alignment::TopRight),
            ])->plugin(
                FilamentEnvEditorPlugin::make()
                ->navigationGroup('Outils système')
                ->navigationLabel('My Env')
                ->navigationIcon('heroicon-o-cog-8-tooth')
                ->navigationSort(1)
                ->slug('env-editor')
                ->hideKeys('APP_KEY', 'BCRYPT_ROUNDS')
                // ->authorize(
                //     fn () => auth()->user()->isAdmin()
                // )
            );
    }
}
