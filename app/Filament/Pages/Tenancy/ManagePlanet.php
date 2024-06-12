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
                        Section::make('Planet information')
                            ->schema([
                                TextInput::make('name')
                                    ->required(),
                                TextInput::make('key')
                                    ->disabled(),
                                TextInput::make('secret')
                                    ->disabled()
                                    ->suffixAction(
                                        Action::make('generate')
                                            ->icon('heroicon-o-arrow-path')
                                            ->action(fn ($set) => $set('secret', Str::password()))
                                    ),
                                TextInput::make('expires_at')
                                    ->formatStateUsing(function (Model $record): string {
                                        return $record->expires_at->format('d-M-Y');
                                    })
                                    ->disabled(),
                            ])
                            ->columns(2)
                            ->columnSpan(2),
                        Section::make('Domain information')
                            ->schema([])
                            ->columnSpan(1),
                    ]),
            ]);
    }
}
