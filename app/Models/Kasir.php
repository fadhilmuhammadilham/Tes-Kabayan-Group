<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kasir extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'kasirs';

    protected $fillable = [
        'nama',
        'no_telp',
        'alamat',
    ];
}
