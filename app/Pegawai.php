<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    public function jabatan(){
        return $this->belongsTo('App\Jabatan');
    }
}
