<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Collection;

class Payment extends Model
{
    use HasFactory;
    use HasUuids;

    public function planet(): BelongsTo
    {
        return $this->belongsTo(Planet::class);
    }

    public function methods(): Collection
    {
        return $this->planet->methods()->active()->with('provider')->get()->groupBy('provider.type');
    }
}
