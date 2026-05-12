<?php

namespace App\Http\Controllers;

use App\Models\fakultas;
use Illuminate\Http\Request;

class FakultasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // akses model falkutas 
        $result = fakultas::all(); // select * from fakultas
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
        fakultas::create($input);


        // rdirect ke halaman index fakultas
        return redirect()->route('fakultas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(fakultas $fakultas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(fakultas $fakultas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, fakultas $fakultas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(fakultas $fakultas)
    {
        //
    }
}
