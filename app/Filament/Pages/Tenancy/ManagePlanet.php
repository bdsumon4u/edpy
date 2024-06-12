<?php

namespace App\Filament\Pages\Tenancy;

use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\Tenancy\EditTenantProfile;
use Illuminate\Database\Eloquent\Model;

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
                                    ->label('Name')
                                    ->required(),
                                TextInput::make('key')
                                    ->label('Key')
                                    ->disabled(),
                                TextInput::make('expires_at')
                                    ->label('Expires at')
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
