<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class DataKost extends Model
{
    use HasFactory;


    protected $table = 'data_kost';

    protected $fillable = [
        'user_id',
        'nama_kost',
        'alamat',
        'deskripsi',
        'foto',
        'status',
        'longitude',
        'latitude',
    ];

    public function dataKamar()
    {
        return $this->hasMany(DataKamar::class, 'kost_id');
    }
    public function user()
    {
        return $this->hasMany(User::class, 'user_id');
    }
}
