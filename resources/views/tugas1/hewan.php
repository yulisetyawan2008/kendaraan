<?php

class hewan{

    public $nama;
    public $darah;
    public $jumlahKaki;
    public $keahlian;

    public function atraksi(){
    echo 'atraksi elang ... ' . $this->keahlian;
    }

    public function set_jumlahKaki($jumlahKaki){
        $this->jumlahKaki = $jumlahKaki;
    }

    public function get_jumlahKaki(){
        return $this->jumlahKaki;
    }

    public function set_keahlian($keahlian){
    $this->keahlian = $keahlian;
    }

    public function get_keahlian(){
    return $this->keahlian;
    }
}