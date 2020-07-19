<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KendaraanModel;

use App\Kendaraan;

class KendaraanController extends Controller
{
    public function __construct(){
      $this->middleware('auth')->except(['index']);
    }

    public function index(){
        $kendaraans = Kendaraan::all();
        return view('kendaraan.index', compact('kendaraans'));
      }

    public function create(){
      return view('kendaraan.form');
    }

    public function store(Request $request){
      $new_item = new Kendaraan;

      $new_item->nopol = $request["nopol"];
      $new_item->merk = $request["merk"];
      $new_item->tipe = $request["tipe"];
      $new_item->jenis = $request["jenis"];
      $new_item->model = $request["model"];
      $new_item->tahun = $request["tahun"];
      $new_item->jmlCC = $request["jmlCC"];
      $new_item->noRangka = $request["noRangka"];
      $new_item->noMesin = $request["noMesin"];
      $new_item->noBpkb = $request["noBpkb"];
      $new_item->warnaKb = $request["warnaKb"];
      $new_item->warnaTnkb = $request["warnaTnkb"];
      $new_item->kategori = $request["kategori"];
      $new_item->created_at = $request["created_at"];
      $new_item->updated_at = $request["updated_at"];
      
      if ($request->hasfile('photoKb')){
        $file = $request->file('photoKb');
        $extension = $file->getClientOriginalExtension(); // getting image extension
        $filename = time() . '.' . $extension;
        $file->move('uploads/kendaraan/', $filename);
        $new_item->photoKb = $filename;
      }else{
        return $request;
        $new_item->photoKb = '';
      }

      if ($request->hasfile('photoBpkb')){
        $file = $request->file('photoBpkb');
        $extension = $file->getClientOriginalExtension(); // getting image extension
        $filename = time() . '.' . $extension;
        $file->move('uploads/kendaraan/', $filename);
        $new_item->photoBpkb = $filename;
      }else{
        return $request;
        $new_item->photoBpkb = '';
      }

      if ($request->hasfile('photoStnk')){
        $file = $request->file('photoStnk');
        $extension = $file->getClientOriginalExtension(); // getting image extension
        $filename = time() . '.' . $extension;
        $file->move('uploads/kendaraan/', $filename);
        $new_item->photoStnk = $filename;
      }else{
        return $request;
        $new_item->photoStnk = '';
      }
      
      

      $new_item->save();

      return redirect('/kendaraan')->with('new_item', $new_item);
    }

    public function show($id){
      $kendaraan = Kendaraan::where('id',$id)->first();
      return view('kendaraan.show', compact('kendaraan'));
    }

    public function edit($id, Request $request){
      $kendaraan = Kendaraan::find($id);
      return view('kendaraan.edit', compact('kendaraan'));
    }

    public function update($id, Request $request){
      // dd($request->all());
      $new_item = Kendaraan::find($id);

      $new_item->nopol = $request["nopol"];
      $new_item->merk = $request["merk"];
      $new_item->tipe = $request["tipe"];
      $new_item->jenis = $request["jenis"];
      $new_item->model = $request["model"];
      $new_item->tahun = $request["tahun"];
      $new_item->jmlCC = $request["jmlCC"];
      $new_item->noRangka = $request["noRangka"];
      $new_item->noMesin = $request["noMesin"];
      $new_item->noBpkb = $request["noBpkb"];
      $new_item->warnaKb = $request["warnaKb"];
      $new_item->warnaTnkb = $request["warnaTnkb"];
      $new_item->created_at = $request["created_at"];
      $new_item->updated_at = $request["updated_at"];
      
      if ($request->hasfile('photoKb')){
        $file = $request->file('photoKb');
        $extension = $file->getClientOriginalExtension(); // getting image extension
        $filename = time() . '.' . $extension;
        $file->move('uploads/kendaraan/', $filename);
        $new_item->photoKb = $filename;
      }else{
        return $request;
        $new_item->photoKb = '';
      }

      if ($request->hasfile('photoBpkb')){
        $file = $request->file('photoBpkb');
        $extension = $file->getClientOriginalExtension(); // getting image extension
        $filename = time() . '.' . $extension;
        $file->move('uploads/kendaraan/', $filename);
        $new_item->photoBpkb = $filename;
      }else{
        return $request;
        $new_item->photoBpkb = '';
      }

      if ($request->hasfile('photoStnk')){
        $file = $request->file('photoStnk');
        $extension = $file->getClientOriginalExtension(); // getting image extension
        $filename = time() . '.' . $extension;
        $file->move('uploads/kendaraan/', $filename);
        $new_item->photoStnk = $filename;
      }else{
        return $request;
        $new_item->photoStnk = '';
      }
      
      $new_item->kategori = $request["kategori"];

      $new_item->save();

      return redirect('/kendaraan');

    }

    public function destroy($id){
      $kendaraan = Kendaraan::find($id);
      $kendaraan->delete();
      return redirect('/kendaraan');

    }
}
