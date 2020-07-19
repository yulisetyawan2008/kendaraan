<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Jabatan;
use App\Opd;

class JabatanController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except(['index']);
    }

    public function index(){
        $jabatans = Jabatan::all();
        return view('jabatan.index', compact('jabatans'));
    }

    public function create(){
        $opds = Opd::all();
        return view('jabatan.form', compact('opds'));
    }

    public function store(Request $request){
        $new_item = new Jabatan;

        $new_item->opd_id = $request["opd_id"];
        $new_item->nama_jabatan = $request["nama_jabatan"];
        $new_item->eselon = $request["eselon"];
        $new_item->status = $request["status"];

        $new_item->save();

        return redirect('/jabatan');
    }

    public function show($id, Request $request){
        $jabatan = Jabatan::where('id', $id)->first();
        $opd = Opd::where('id', $id)->get();
        return view('jabatan.show', compact('jabatan', 'opd'));
    }

    public function edit($id, Request $request){
        $jabatan = Jabatan::find($id);
        $opds = Opd::all();
        return view('jabatan.edit', compact('jabatan', 'opds'));
    }

    public function update($id, Request $request){
        $jabatan = Jabatan::find($id);

        $jabatan->opd_id = $request->opd_id;
        $jabatan->nama_jabatan = $request->nama_jabatan;
        $jabatan->eselon = $request->eselon;
        $jabatan->status = $request->status;

        $jabatan->save();

        return redirect('/jabatan');
    }

    public function destroy($id){
        $jabatan = Jabatan::find($id);
        $jabatan->delete();
        return redirect('/jabatan');
    }
}
