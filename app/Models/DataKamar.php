<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataKamar extends Model
{
    use HasFactory;


    protected $table  = 'data_kamar';


    protected $fillable = [
        'kost_id',
        'jenis_kamar',
        'no_kamar',
        'harga',
        'img_pertama',
        'img_kedua',
        'img_ketiga',
        'img_keempat',
        'status',
        'images',
        'deskripsi',
    ];


    public function datakost()
    {
        return $this->belongsTo(DataKost::class, 'kost_id', 'id');
    }
}
