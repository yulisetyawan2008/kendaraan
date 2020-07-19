<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class KendaraanModel{
    public static function get_all(){
        $mobil = DB::table('kendaraan')->get();
        return $mobil;
    }
}
