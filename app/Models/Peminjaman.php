<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'peminjaman';

    protected $fillable = [
        'dvd_id',
        'jumlah_pinjam',
        'peminjam',
        'alamat',
        'kontak',
        'lama_pinjam',
        'tanggal_pinjam',
        'metode_pembayaran',
    ];
}
