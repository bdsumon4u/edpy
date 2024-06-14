<?php

namespace App\Filament\Resources\MethodResource\Pages;

use App\Filament\Resources\MethodResource;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Arr;

class CreateMethod extends CreateRecord
{
    protected static string $resource = MethodResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        return Arr::only($data, $keys = ['provider_id', 'fee_amount', 'fee_type', 'is_active']) + [
            'meta' => Arr::except($data, $keys),
        ];
    }
}
