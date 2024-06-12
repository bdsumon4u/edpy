<?php

namespace App\Livewire;

use Livewire\Component;

class MakePayment extends Component
{
    public $gateways = [
        'Mobile Banking' => [
            'bKash' => [
                'image' => 'bkash.png',
                'fee' => '1.85%',
                'color' => 'bg-bkash',
            ],
            'Nagad' => [
                'image' => 'nagad.png',
                'fee' => '1.45%',
                'color' => 'bg-nagad',
            ],
            'Rocket' => [
                'image' => 'rocket.png',
                'fee' => '1.85%',
                'color' => 'bg-rocket',
            ],
            'Upay' => [
                'image' => 'upay.png',
                'fee' => '1.85%',
                'color' => 'bg-upay',
            ],
            'CellFin' => [
                'image' => 'cellfin.png',
                'fee' => '1.85%',
                'color' => 'bg-cellfin',
            ],
        ],
        'Net Banking' => [
            'AB Bank' => [
                'image' => 'ABBank.png',
                'fee' => '1.85%',
                'color' => 'bg-ab-bank',
            ],
            'Brac Bank' => [
                'image' => 'BracBank.png',
                'fee' => '1.85%',
                'color' => 'bg-brac-bank',
            ],
            'City Bank' => [
                'image' => 'CityBank.png',
                'fee' => '1.85%',
                'color' => 'bg-city-bank',
            ],
            'DBBL' => [
                'image' => 'DBBL.png',
                'fee' => '1.85%',
                'color' => 'bg-dbbl',
            ],
            'EBL' => [
                'image' => 'EBL.png',
                'fee' => '1.85%',
                'color' => 'bg-ebl',
            ],
        ],
    ];

    public function render()
    {
        return tap(view('livewire.make-payment'))->layout('layouts.payment');
    }
}
