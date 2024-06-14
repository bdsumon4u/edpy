<?php

namespace Database\Seeders;

use App\Models\Provider;
use Illuminate\Database\Seeder;

class ProviderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect(['Stripe', 'Paddle', 'PayPal', 'Visa', 'Mastercard'])->map(function ($name) {
            return Provider::firstOrCreate(['type' => 'Cards'] + compact('name'));
        });

        collect([
            'bKash' => [
                'personal' => ['parse_template' => 'You have received Tk ([0-9.]+) from ([0-9]+). Fee Tk ([0-9.]+). Balance Tk ([0-9,.]+). TrxID ([A-Z0-9]+) at ([0-9\/]+) ([0-9:]+)', 'amount_index' => '', 'sender_index' => '', 'trxid_index' => ''],
                'business' => ['parse_template' => '', 'amount_index' => '', 'sender_index' => '', 'trxid_index' => ''],
            ],
            'Nagad' => [
                'personal' => ['parse_template' => '', 'amount_index' => '', 'sender_index' => '', 'trxid_index' => ''],
                'business' => ['parse_template' => '', 'amount_index' => '', 'sender_index' => '', 'trxid_index' => ''],
            ],
            'Rocket' => [
                'personal' => ['parse_template' => '', 'amount_index' => '', 'sender_index' => '', 'trxid_index' => ''],
                'business' => ['parse_template' => '', 'amount_index' => '', 'sender_index' => '', 'trxid_index' => ''],
            ],
            'Upay' => [
                'personal' => ['parse_template' => '', 'amount_index' => '', 'sender_index' => '', 'trxid_index' => ''],
                'business' => ['parse_template' => '', 'amount_index' => '', 'sender_index' => '', 'trxid_index' => ''],
            ],
            'CellFin' => [
                'personal' => ['parse_template' => '', 'amount_index' => '', 'sender_index' => '', 'trxid_index' => ''],
                'business' => ['parse_template' => '', 'amount_index' => '', 'sender_index' => '', 'trxid_index' => ''],
            ],
            'SureCash' => [
                'personal' => ['parse_template' => '', 'amount_index' => '', 'sender_index' => '', 'trxid_index' => ''],
                'business' => ['parse_template' => '', 'amount_index' => '', 'sender_index' => '', 'trxid_index' => ''],
            ],
            'iPay' => [
                'personal' => ['parse_template' => '', 'amount_index' => '', 'sender_index' => '', 'trxid_index' => ''],
                'business' => ['parse_template' => '', 'amount_index' => '', 'sender_index' => '', 'trxid_index' => ''],
            ],
            'myCash' => [
                'personal' => ['parse_template' => '', 'amount_index' => '', 'sender_index' => '', 'trxid_index' => ''],
                'business' => ['parse_template' => '', 'amount_index' => '', 'sender_index' => '', 'trxid_index' => ''],
            ],
            'mCash' => [
                'personal' => ['parse_template' => '', 'amount_index' => '', 'sender_index' => '', 'trxid_index' => ''],
                'business' => ['parse_template' => '', 'amount_index' => '', 'sender_index' => '', 'trxid_index' => ''],
            ],
            'Pocket' => [
                'personal' => ['parse_template' => '', 'amount_index' => '', 'sender_index' => '', 'trxid_index' => ''],
                'business' => ['parse_template' => '', 'amount_index' => '', 'sender_index' => '', 'trxid_index' => ''],
            ],
            'Tap' => [
                'personal' => ['parse_template' => '', 'amount_index' => '', 'sender_index' => '', 'trxid_index' => ''],
                'business' => ['parse_template' => '', 'amount_index' => '', 'sender_index' => '', 'trxid_index' => ''],
            ],
        ])->mapWithKeys(fn ($meta, $name) => Provider::firstOrCreate([
            'type' => 'Mobile Banking', 'name' => $name
        ], compact('meta')));

        collect([
            'EBL' => ['parse_template' => '', 'amount_index' => '', 'sender_index' => '', 'trxid_index' => ''],
            'DBBL' => ['parse_template' => '', 'amount_index' => '', 'sender_index' => '', 'trxid_index' => ''],
            'Brac' => ['parse_template' => '', 'amount_index' => '', 'sender_index' => '', 'trxid_index' => ''],
            'City' => ['parse_template' => '', 'amount_index' => '', 'sender_index' => '', 'trxid_index' => ''],
        ])->mapWithKeys(fn ($meta, $name) => Provider::firstOrCreate([
            'type' => 'Net Banking', 'name' => $name
        ], compact('meta')));

        collect(['Coinbase', 'Binance', 'Kraken', 'Bitstamp', 'Bitfinex'])->map(function ($name) {
            return Provider::firstOrCreate(['type' => 'Crypto'] + compact('name'));
        });
    }
}
