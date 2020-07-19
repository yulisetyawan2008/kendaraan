<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class OpdModel{
    public static function get_all(){
        $opd = DB::table('perangkat_daerah')->get();
        return $opd;
    }

    public static function save($data){
        $new_opd = DB::table('perangkat_daerah')->insert($data);
        return $new_opd;
    }
}
