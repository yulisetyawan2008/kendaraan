<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    protected $table= 'jabatans';
    protected $fillable = ['opd_id','nama_jabatan','eselon','status'];

    public function opd(){
        return $this->belongsTo('App\Opd');
    }

    public function pengguna(){
        return $this->belongsTo('App\Pengguna');
    }
}
