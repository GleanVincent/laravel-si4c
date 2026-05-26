<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jumlahMahasiswa = DB::select('
        select singkatan, count(nama) from mahasiswas
        left join prodis on prodis.id = mahasiswas.prodi_id
        group by singkatan
        ');
        return view('dashboard.index', compact('jumlahMahasiswa'));
    }
}
