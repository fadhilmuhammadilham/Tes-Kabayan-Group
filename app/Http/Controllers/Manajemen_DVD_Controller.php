<?php

namespace App\Http\Controllers;

use App\Models\Dvd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Manajemen_DVD_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('tambah_dvd');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_dvd' => 'required|string|max:255',
            'judul_film' => 'required|string|max:255',
            'genre' => 'required|string|max:255',
            'stok' => 'required|integer',
            'harga_sewa' => 'required|integer',
            'bahasa' => 'required|string|max:255',
        ]);

        DB::table('dvds')->insert([
            'kode_dvd' => $request->kode_dvd,
            'judul_film' => $request->judul_film,
            'genre' => $request->genre,
            'stok' => $request->stok,
            'harga_sewa' => $request->harga_sewa,
            'bahasa' => $request->bahasa
        ]);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
