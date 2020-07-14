<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OpdController extends Controller
{
    public function index(){
      $opd = ArtikelModel::get_all();
      return view('opd.index', compact('opd'));
    }
}
