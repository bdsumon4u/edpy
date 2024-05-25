<?php

namespace App\Http\Responses;

use Filament\Facades\Filament;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\RedirectResponse;

class LogoutResponse implements Responsable
{
    public function toResponse($request): RedirectResponse
    {
        return redirect()->to(Filament::getUrl());
    }
}
