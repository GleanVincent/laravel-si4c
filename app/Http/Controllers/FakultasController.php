<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use Illuminate\Http\Request;

class FakultasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // akses model fakultas 
        $result = Fakultas::all(); // select * from fakultas
        //dd($result); // dump data
        // kirim data fakultas ke view menggunakan with
        //return view('fakultas.index')->with('fakultas', $result);
        // atau compect
        return view('fakultas.index', compact('result'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('fakultas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validasi data
        $input = $request->validate([
            'nama' => 'required|unique:fakultas',
            'singkatan' => 'required',
            'dekan' => 'required'
        ]);

        // simpan data ke database
        Fakultas::create($input);


        // rdirect ke halaman index fakultas
        return redirect()->route('fakultas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Fakultas $fakultas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fakultas $fakultas)
    {
        // $fakultas = Fakultas::find($fakultas);
        //dd($fakultas);
        return view('fakultas.edit', compact('fakultas'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Fakultas $fakultas)
    {
        // dd($fakultas0);
        $input = $request->validate([
            'nama' => 'required|unique:fakultas,nama,' . $fakultas->id, //valisasi nama fakultas harus unik di tabel fakultas kecuali data yang sedang diupdate
            'singkatan' => 'required',
            'dekan' => 'required'
        ]);
        // update data ke table database
        $fakultas->update($input);
        return redirect()->route('fakultas.index')->with('success', 'Fakultas a.n. '. $fakultas->nama.' berhasil diperbarui.');
    }

    /** 
     * Remove the specified resource from storage.
     */
    public function destroy(Fakultas $fakultas)
    {
        // $fakultas = Fakultas::find($fakultas);
        $fakultas->delete();
        // redirect ke halaman indekx fakultas
        return redirect()->route('fakultas.index')->with('success', 'Fakultas a.n. '. $fakultas->nama.' berhasil dihapus.');
    }
}
