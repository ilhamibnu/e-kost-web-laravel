<?php

namespace App\Providers;

use App\Providers\TransaksiCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class UpdateDataKamarStatus
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(TransaksiCreated $event): void
    {
        //
    }
}
