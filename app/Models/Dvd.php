<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dvd extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'dvds';

    protected $fillable = [
        'kode_dvd',
        'judul_film',
        'genre',
        'stok',
        'harga_sewa',
        'bahasa',
    ];
}
