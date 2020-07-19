@extends('layouts.master')

@section('content')
    <div class="jumbotron">
        <div>
            <h1>Pegawai</h1>
            <h2>{{$pegawai->nama}}</h2>
            <h3>Identitas : {{$pegawai->jenisID}} {{$pegawai->noID}}</h3>
            <h3>Tempat dan Tanggal Lahir : {{$pegawai->ttl}}</h3>
            <h3>Jenis Kelamin : {{$pegawai->jenisKelamin}}</h3>
            <h3>Pangkat dan Golongan : {{$pegawai->pangkatGol}}</h3>
            <h3>Alamat : {{$pegawai->alamat}}</h3>
            <h3>No Handphone : {{$pegawai->noHp}}</h3>
            <h3>Jabatan : {{$pegawai->jabatan->nama_jabatan}}</h3>
            <h3>Status : {{$pegawai->status}}</h3>
        </div>
        <a href="/jabatan" class="btn btn-sm btn-success">Kembali</a>
    </div>
@endsection