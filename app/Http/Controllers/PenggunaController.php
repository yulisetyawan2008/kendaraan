<?php

namespace App\Http\Controllers;
use \Carbon\Carbon;

use Illuminate\Http\Request;

use App\Jabatan;
use App\Kendaraan;
use App\Pegawai;
use App\Pengguna;

class PenggunaController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except(['index']);
    }
    
    
    public function index(){
        $penggunas = Pengguna::all();
        
        return view('pengguna.index', compact('penggunas'));
    }

    public function create(){
        $jabatans = Jabatan::all();
        $kendaraans = Kendaraan::all();
        $pegawais = Pegawai::all();
        return view('pengguna.form', compact('jabatans', 'kendaraans', 'pegawais'));
    }

    public function store(Request $request){
        // dd($request->all());
        $mytime = Carbon::now();
        $mytime->toDateTimeString();

        $new_pengguna = new Pengguna;

        $new_pengguna->noBast = $request->noBast;
        $new_pengguna->jabatan_id = $request->jabatan_id;
        $new_pengguna->kendaraan_id = $request->kendaraan_id;
        $new_pengguna->pegawai_id = $request->pegawai_id;
        $new_pengguna->created_at = $request->created_at;
        $new_pengguna->updated_at = $request->updated_at;
        $new_pengguna->hari = $request->hari;
        $new_pengguna->tanggal = $request->tanggal;

        $new_pengguna->save();

        return redirect('/pengguna');
    }
}
