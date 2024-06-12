<?php

use App\Livewire\MakePayment;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(MakePayment::class)
        ->assertStatus(200);
});
