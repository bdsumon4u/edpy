<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MethodResource\Pages;
use App\Models\Method;
use App\Models\Provider;
use Filament\Facades\Filament;
use Filament\Forms\Components\Actions;
use Filament\Forms\Components\Component;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Support\Colors\Color;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Collection;

class MethodResource extends Resource
{
    protected static ?string $model = Method::class;

    protected static ?string $navigationIcon = 'heroicon-o-square-3-stack-3d';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Tabs::make('Tabs')->tabs(Provider::all()->groupBy('type')->map(function ($providers, $type) {
                $callable = [static::class, 'get'.str_replace(' ', '', $type).'Schema'];

                if (! method_exists(...$callable)) {
                    return Tab::make($type)->schema([
                        Placeholder::make('notice')->helperText('Feature is under development.'),
                    ]);
                }

                return Tab::make($type)->schema(call_user_func_array($callable, [
                    $providers, Filament::getTenant()->methods()->pluck('provider_id'),
                ]));
            })->toArray())
                ->activeTab(2)
                ->columnSpanFull(),
        ]);
    }

    private static function getMobileBankingSchema(Collection $providers, Collection $selected): array
    {
        return [
            Grid::make(3)->schema([
                Section::make('Account INFO')
                    ->headerActions([
                        Actions\Action::make('status')
                            ->size('sm')
                            ->icon(fn ($get) => $get('is_active') ? 'heroicon-o-check-circle' : 'heroicon-o-x-circle')
                            ->color(fn ($get) => $get('is_active') ? Color::Green : Color::Red)
                            ->action(fn ($get, $set) => $set('is_active', ! $get('is_active')))
                            ->label(fn ($get) => $get('is_active') ? 'Enabled' : 'Disabled'),
                    ])
                    ->schema([
                        Hidden::make('is_active')->default(true),
                        Hidden::make('type')->default('Personal'),
                        Hidden::make('fee_type')->default('Percent'),
                        Select::make('provider_id')
                            ->relationship('provider', 'name', fn ($query) => $query->where('type', 'Mobile Banking'))
                            ->disableOptionWhen(function (Component $component, $value) use ($selected) {
                                return $component->getRecord()?->{$component->getName()} != $value && $selected->contains($value);
                            })
                            ->searchable()
                            ->preload()
                            ->required(),
                        TextInput::make('number')->required(),
                        TextInput::make('fee_amount')
                            ->required()
                            ->suffixActions([
                                Actions\Action::make('fixed')
                                    ->icon('heroicon-o-currency-bangladeshi')
                                    ->color(fn ($get) => $get('fee_type') === 'Fixed' ? Color::Blue : Color::Gray)
                                    ->action(fn ($get, $set) => $set('fee_type', $get('fee_type') === 'Fixed' ? 'Percent' : 'Fixed'))
                                    ->label('Fixed'),
                                Actions\Action::make('percent')
                                    ->icon('heroicon-o-receipt-percent')
                                    ->color(fn ($get) => $get('fee_type') !== 'Fixed' ? Color::Blue : Color::Gray)
                                    ->action(fn ($get, $set) => $set('fee_type', $get('fee_type') !== 'Fixed' ? 'Fixed' : 'Percent'))
                                    ->label('Percent'),
                            ]),
                        Radio::make('type')
                            ->options([
                                'Personal' => 'Personal',
                                'Business' => 'Business',
                            ])
                            ->columns(2)
                            ->required(),
                    ])
                    ->columns(2)
                    ->columnSpan(2),
                Section::make('Business INFO')
                    ->schema([
                        Placeholder::make('notice')
                            ->helperText('API feature is under development.'),
                    ])
                    ->columnSpan(1),
            ]),
        ];
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('provider.name'),
                Tables\Columns\TextColumn::make('provider.type'),
                Tables\Columns\TextColumn::make('meta.type'),
                Tables\Columns\TextColumn::make('meta.number'),
                Tables\Columns\ToggleColumn::make('is_active'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMethods::route('/'),
            'create' => Pages\CreateMethod::route('/create'),
            'edit' => Pages\EditMethod::route('/{record}/edit'),
        ];
    }
}
