<?php

namespace App\Providers\Filament;

use App\Filament\Pages\Tenancy\ManagePlanet;
use App\Filament\Pages\Tenancy\RegisterPlanet;
use App\Models\Planet;
use Filament\Facades\Filament;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Rupadana\ApiService\ApiServicePlugin;

class AppPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('app')
            ->path('app')
            ->login()
            // ->registration()
            ->passwordReset()
            ->emailVerification()
            ->profile()
            ->colors([
                'primary' => Color::Neutral,
            ])
            ->font('Poppin')
            ->sidebarCollapsibleOnDesktop()
            ->sidebarWidth('18rem')
            ->plugins([
                ApiServicePlugin::make(),
                \Awcodes\Curator\CuratorPlugin::make()
                    ->label('Media')
                    ->pluralLabel('Media')
                    ->navigationIcon('heroicon-o-photo')
                    ->navigationGroup('Content')
                    ->navigationSort(3)
                    ->navigationCountBadge()
                    ->registerNavigation(true)
                    ->defaultListView('grid' || 'list')
                    ->resource(\Awcodes\Curator\Resources\MediaResource::class)
            ])
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([
                // Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->widgets([
                Widgets\AccountWidget::class,
                Widgets\FilamentInfoWidget::class,
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
            ])
            ->tenant(Planet::class, slugAttribute: 'key')
            ->tenantRegistration(RegisterPlanet::class)
            ->tenantProfile(ManagePlanet::class)
            ->viteTheme('resources/css/filament/app/theme.css')
            ->spa();
    }

    public function register(): void
    {
        parent::register();
        Model::resolveRelationUsing(
            ($panel = Filament::getCurrentPanel())->getTenantOwnershipRelationshipName(),
            fn (Model $model): BelongsTo => $model->belongsTo(
                $tenantModel = $panel->getTenantModel(),
                app($tenantModel)->getForeignKey(),
            ),
        );
    }
}
