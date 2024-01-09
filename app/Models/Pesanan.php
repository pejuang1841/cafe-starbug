<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;
    protected $table = 'pesanan';
    protected $fillable = [
        'id_pegawai',
        'id_pelanggan',
        'no_telepon',
        'id_menu',
        'jumlah_pesanan',
        'total_pembayaran',
        'metode_pembayaran',
    ];
}
