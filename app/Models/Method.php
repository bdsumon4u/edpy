<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Method extends Model
{
    use HasFactory;

    protected function casts(): array
    {
        return [
            'meta' => 'array',
        ];
    }

    public function scopeActive($query, bool $is = true) {
        return $query->where('is_active', $is);
    }

    public function provider(): BelongsTo
    {
        return $this->belongsTo(Provider::class);
    }
}
