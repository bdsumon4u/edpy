<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class BKashProcessor implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct(private string $message)
    {
        $this->message = "You have received Tk 15.00 from 01831899955. Fee Tk 0.00. Balance Tk 2,133.04. TrxID BFA95R2DQ1 at 10/06/2024 16:23";
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        preg_match('/You have received Tk ([0-9.]+) from ([0-9]+). Fee Tk ([0-9.]+). Balance Tk ([0-9,.]+). TrxID ([A-Z0-9]+) at ([0-9\/]+) ([0-9:]+)/', $this->message, $matches);

        $amount = $matches[1];
        $sender = $matches[2];
        $fee = $matches[3];
        $balance = $matches[4];
        $trxID = $matches[5];
        $date = $matches[6];
        $time = $matches[7];

        info("Received Tk {$amount} from {$sender}. Fee Tk {$fee}. Balance Tk {$balance}. TrxID {$trxID} at {$date} {$time}");
    }
}
