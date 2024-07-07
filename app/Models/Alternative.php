<?php

namespace App\Models;

use Carbon\Traits\Timestamp;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alternative extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'luas_bangunan',
        'jumlah_penerangan',
        'pendapatan',
        'jumlah_anggota_keluarga'
    ];

    public $timestamps = false;
}
