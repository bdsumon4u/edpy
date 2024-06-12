<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Jobs\BKashProcessor;
use App\Models\Planet;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, Planet $tenant)
    {
        $request->collect('messages')->map(function ($message) use ($request) {
            $key = base64_decode($request->bulkID);

            $decrypt = fn ($encrypted, $key, $iv) => openssl_decrypt(
                base64_decode($encrypted),
                'AES-256-CBC',
                $key,
                OPENSSL_RAW_DATA,
                base64_decode($iv)
            );

            return [
                'sender' => $decrypt($message['senderAddress'], $key, $message['originID']),
                'content' => $decrypt($message['messageBody'], $key, $message['contentID']),
            ];
        })->groupBy('sender')->mapWithKeys(fn ($messages, $sender) => [
            trim($sender) => $messages->pluck('content')->join('')
        ])->each(fn ($content, $sender) => match ($sender) {
            'bKash' => $this->bKashProcessor($tenant, $content),
            // 'Nagad' => NagadProcessor::dispatch($content),
            // 'Rocket' => RocketProcessor::dispatch($content),
            // 'Upay' => UpayProcessor::dispatch($content),
            // 'CellFin' => CellFinProcessor::dispatch($content),
            default => info('Unknown: ' . $content),
        });
    }

    private function bKashProcessor(Planet $tenant, string $message): void
    {
        $pattern = '/You have received Tk ([0-9.]+) from ([0-9]+). Fee Tk ([0-9.]+). Balance Tk ([0-9,.]+). TrxID ([A-Z0-9]+) at ([0-9\/]+) ([0-9:]+)/';

        if(preg_match($pattern, $message, $matches)) {
            $matches[1] = str_replace(',', '', $matches[1]);

            $tenant->transactions()->create([
                'amount' => $matches[1],
                'sender' => $matches[2],
                'trxID' => $matches[5],
            ]);
        }
    }
}
