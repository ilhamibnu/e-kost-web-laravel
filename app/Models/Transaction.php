<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $guarded = [];
    // protected $fillable = [
    //     'number',
    //     'user_id',
    //     'kamar_id',
    //     'nama_pemesan',
    //     'durasi_sewa',
    //     'total_price',
    //     'tgl_sewa',
    //     'total_pembayaran',
    //     'status_penyewaan',
    // ];
}
