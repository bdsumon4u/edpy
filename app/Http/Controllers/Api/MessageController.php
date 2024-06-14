<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Planet;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    private array $patterns = [
        'bKash' => '/You have received Tk ([0-9.]+) from ([0-9]+). Fee Tk ([0-9.]+). Balance Tk ([0-9,.]+). TrxID ([A-Z0-9]+) at ([0-9\/]+) ([0-9:]+)/',
        'Nagad' => '/Money Received. Amount: Tk ([0-9,.]+) Sender: ([0-9]+) Ref: ([A-Z0-9]+) at ([0-9\/]+) ([0-9:]+)/',
    ];

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
            trim($sender) => $messages->pluck('content')->join(''),
        ])->each(fn ($content, $sender) => match (true) {
            in_array($sender, array_keys($this->patterns)) => $this->processMFS($tenant, $content, $sender),
            default => info('Unknown: '.$content),
        });
    }

    private function processMFS(Planet $tenant, string $message, string $sender): void
    {
        if (preg_match($this->patterns[$sender], $message, $matches)) {
            $matches[1] = str_replace(',', '', $matches[1]);

            $tenant->transactions()->create([
                'amount' => $matches[1],
                'sender' => $matches[2],
                'trxID' => $matches[5],
            ]);
        }
    }
}
