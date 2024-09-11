<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class KasirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kasirs')->insert([
            [
                'id' => Str::uuid(),
                'nama' => 'Fadhil Muhammad Ilham',
                'no_telp' => '0877303411',
                'alamat' => 'cilame jln.berlian no.9',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
