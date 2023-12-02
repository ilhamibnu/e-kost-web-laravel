<?php

namespace App\Listeners;

use Illuminate\Support\Facades\DB;
use App\Providers\TransaksiCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

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

        $kamarId = $event->kamar_id;

        // Ubah status kamar menjadi 0 (disewakan)
        // Ganti "nama_tabel" dengan nama tabel data_kamar pada skema database Anda
        DB::table('data_kamat')
            ->where('id', $kamarId)
            ->update(['status' => 0]);
    }
}
