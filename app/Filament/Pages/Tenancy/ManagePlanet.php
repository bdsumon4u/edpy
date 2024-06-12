<?php

namespace App\Filament\Pages\Tenancy;

use Filament\Forms\Components\Actions\Action;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\Tenancy\EditTenantProfile;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ManagePlanet extends EditTenantProfile
{
    public static function getLabel(): string
    {
        return 'Manage planet';
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make([
                    'md' => 3,
                ])
                    ->schema([
                        Section::make('Planet Settings')
                            ->schema([
                                
                            ])
                            ->columns(2)
                            ->columnSpan(2),
                        Section::make('Planet Informatio')
                            ->schema([
                                TextInput::make('name')
                                    ->required(),
                                TextInput::make('key')
                                    ->disabled()
                                    ->suffixAction(
                                        Action::make('copy')
                                            ->icon('heroicon-s-clipboard-document-check')
                                            ->action(function ($livewire, $state) {
                                                $livewire->js(
                                                    'window.navigator.clipboard.writeText("'.$state.'");
                                                    $tooltip("'.__('Copied to clipboard').'", { timeout: 1500 });'
                                                );
                                            })
                                    ),
                                TextInput::make('secret')
                                    ->disabled()
                                    ->suffixAction(
                                        Action::make('generate')
                                            ->icon('heroicon-o-arrow-path')
                                            ->action(fn ($set) => $set('secret', Str::password(10)))
                                    )
                                    ->suffixAction(
                                        Action::make('copy')
                                            ->icon('heroicon-s-clipboard-document-check')
                                            ->action(function ($livewire, $state) {
                                                $livewire->js(
                                                    'window.navigator.clipboard.writeText("'.$state.'");
                                                    $tooltip("'.__('Copied to clipboard').'", { timeout: 1500 });'
                                                );
                                            })
                                    ),
                                TextInput::make('expires_at')
                                    ->formatStateUsing(function (Model $record): string {
                                        return $record->expires_at->format('d-M-Y');
                                    })
                                    ->disabled(),
                            ])
                            ->columnSpan(1),
                    ]),
            ]);
    }
}
