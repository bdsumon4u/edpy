<?php

use App\Livewire\MakePayment;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $baseURL = 'https://sandbox.uddoktapay.com/';
    $apiKEY = "982d381360a69d419689740d9f2e26ce36fb7a50";

    $fields = [
        'full_name' => 'Nazmul',
        'email'     => 'example@gmail.com',
        'amount'    => '100',
        'metadata'  => [
            'user_id'  => '10',
            'order_id' => '50'
        ],
        'redirect_url' => '/redirect',
        'cancel_url'   => '/cancel',
        'webhook_url'  => ''
    ];


    $curl = curl_init();

    curl_setopt_array($curl, [
        CURLOPT_URL => $baseURL . "api/checkout-v2",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode($fields),
        CURLOPT_HTTPHEADER => [
            "RT-UDDOKTAPAY-API-KEY: " . $apiKEY,
            "accept: application/json",
            "content-type: application/json"
        ],
    ]);

    $response = curl_exec($curl);

    curl_close($curl);

    $responseObject = json_decode($response, true);
    dd($responseObject);

    // if ($responseObject['status'] == true && $responseObject['payment_url'] != null) {
    //     return redirect()->away($responseObject['payment_url']);
    // } else {
    //     return redirect()->route('home')->with('error', 'Payment Url Generation Failed!');
    // }
    return view('welcome');
});

// Livewire Route for MakePayment component
Route::get('/make-payment', MakePayment::class)->name('make-payment');