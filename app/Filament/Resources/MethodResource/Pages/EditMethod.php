<?php

namespace App\Filament\Resources\MethodResource\Pages;

use App\Filament\Resources\MethodResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Arr;

class EditMethod extends EditRecord
{
    protected static string $resource = MethodResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeFill(array $data): array
    {
        return Arr::except($data, ['meta']) + Arr::get($data, 'meta', []);
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        return Arr::only($data, $keys = ['provider_id', 'fee_amount', 'fee_type', 'is_active']) + [
            'meta' => Arr::except($data, $keys),
        ];
    }
}
