<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    public function jabatan(){
        return $this->belongsTo('App\Jabatan');
    }

    public function pegawai(){
        return $this->belongsTo('App\Pegawai');
    }

    public function kendaraan(){
        return $this->belongsTo('App\Kendaraan');
    }
}
