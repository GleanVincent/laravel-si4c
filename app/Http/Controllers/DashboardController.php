<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $grafikmhs = DB::select("SELECT prodis.nama_prodi, 
                                COUNT(*) as jumlah_mhs 
                                FROM mahasiswas
                                JOIN prodis 
                                ON mahasiswas.prodi_id = prodis.id
                                GROUP BY prodis.nama_prodi");

        // Grafik 2 — per Tahun Angkatan
        $grafik_angkatan = DB::select("SELECT left(npm, 2) as tahun_angkatan, COUNT(*) as jumlah_mhs FROM mahasiswas GROUP BY left(npm, 2)");

        return view('dashboard', compact('grafikmhs', 'grafik_angkatan'));
    }
}