<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Jabatan;
use App\Kendaraan;

class PenggunaController extends Controller
{
    public function index(){
        return view('pengguna.index');
    }

    public function create(){
        $jabatans = Jabatan::all();
        $kendaraans = Kendaraan::all();
        return view('pengguna.form', compact('jabatans', 'kendaraans'));
    }
}
