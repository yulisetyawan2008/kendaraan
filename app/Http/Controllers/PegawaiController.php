<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pegawai;
use App\Jabatan;

class PegawaiController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except(['index']);
    }
    
    public function index(){
        $pegawais = Pegawai::all();
        return view('pegawai.index', compact('pegawais'));
    }

    public function create(){
        $jabatans = Jabatan::all();
        return view('pegawai.form', compact('jabatans'));
    }

    public function store(Request $request){
        $new_item = new Pegawai;

        $new_item->jenisID = $request["jenisID"];
        $new_item->noID = $request["noID"];
        $new_item->nama = $request["nama"];
        $new_item->ttl = $request["ttl"];
        $new_item->jenisKelamin = $request["jenisKelamin"];
        $new_item->pangkatGol = $request["pangkatGol"];
        $new_item->alamat = $request["alamat"];
        $new_item->noHp = $request["noHp"];
        $new_item->jabatan_id = $request["jabatan_id"];
        $new_item->status = $request["status"];

        $new_item->save();

        return redirect('/pegawai');
    }

    public function show($id){
        $pegawai = Pegawai::where('id', $id)->first();
        return view('pegawai.show', compact('pegawai'));
    }

    public function edit($id){
        $pegawai = Pegawai::find($id);
        $jabatans = Jabatan::all();
        return view('pegawai.edit', compact('pegawai', 'jabatans'));
    }

    public function update($id, Request $request){
        $pegawai = Pegawai::find($id);

        $pegawai->jenisID = $request->jenisID;
        $pegawai->noID = $request->noID;
        $pegawai->nama = $request->nama;
        $pegawai->ttl = $request->ttl;
        $pegawai->jenisKelamin = $request->jenisKelamin;
        $pegawai->pangkatGol = $request->pangkatGol;
        $pegawai->alamat = $request->alamat;
        $pegawai->noHp = $request->noHp;
        $pegawai->jabatan_id = $request->jabatan_id;
        $pegawai->status = $request->status;
        $pegawai->created_at = $request->created_at;
        $pegawai->updated_at = $request->updated_at;
       
        $pegawai->save();

        return redirect('/pegawai');
    }

    public function destroy($id){
        $pegawai = Pegawai::find($id);
        $pegawai->delete();
        return redirect('/pegawai');
    }
        
}
