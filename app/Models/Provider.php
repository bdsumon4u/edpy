<?php

namespace App\Models;

use Filament\Facades\Filament;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Provider extends Model
{
    use HasFactory;

    protected function casts(): array
    {
        return [
            'meta' => 'array',
        ];
    }

    public function method(): HasOne
    {
        return $this->hasOne(Method::class)->whereBelongsTo(Filament::getTenant());
    }
}
