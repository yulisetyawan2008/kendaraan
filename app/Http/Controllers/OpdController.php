<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OpdModel;

use App\Opd;

class OpdController extends Controller
{
    public function __construct(){
      $this->middleware('auth')->except(['index']);
    }

    public function index(){
      $opds = Opd::all();
      return view('opd.index', compact('opds'));
    }

    public function create(){
      return view('opd.form');
    }

    public function store(Request $request){
        $new_item = new Opd;
        $new_item->nama_opd = $request["nama_opd"];
        $new_item->alamat_opd = $request["alamat_opd"];
        $new_item->status_opd = $request["status_opd"];

        $new_item->save();
        
        return redirect('/opd');
    }

    public function show($id){
      $opd = Opd::where('id',$id)->first();
      return view('opd.show', compact('opd'));
    }

    public function edit($id){
      $opd = Opd::find($id);
      return view('opd.edit', compact('opd'));
    }

    public function update($id, Request $request){
      $opd = Opd::find($id);

      $opd->nama_opd = $request->nama_opd;
      $opd->alamat_opd = $request->alamat_opd;
      $opd->status_opd = $request->status_opd;

      $opd->save();

      return redirect('/opd');
    }

    public function destroy($id){
      $opd = Opd::find($id);
      $opd->delete();
      return redirect('/opd');
    }
}
