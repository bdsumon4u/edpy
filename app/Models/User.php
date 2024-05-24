<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Providers\Socialite\WHMCSProvider;
use Filament\Models\Contracts\FilamentUser;
use Filament\Models\Contracts\HasTenants;
use Filament\Panel;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements FilamentUser, HasTenants, MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function getTenants(Panel $panel): Collection
    {
        return $this->planets;
    }

    public function planets(): BelongsToMany
    {
        return $this->belongsToMany(Planet::class);
    }

    public function syncPlanets(): void
    {
        $data = Arr::map(
            WHMCSProvider::api(['action' => 'getclientsproducts', 'clientid' => $this->id]),
            fn ($product) => [
                'id' => $product['id'],
                'name' => $product['name'],
                'key' => $product['key'],
                'expires_at' => $product['nextduedate'],
            ],
        );

        $this->planets()->upsert($data, ['id']);
    }

    public function canAccessTenant(Model $tenant): bool
    {
        return $this->planets->contains($tenant);
    }

    public function canAccessPanel(Panel $panel): bool
    {
        return true;
    }
}
