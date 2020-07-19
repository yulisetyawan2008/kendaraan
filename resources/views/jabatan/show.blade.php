@extends('layouts.master')

@section('content')
    <div class="jumbotron bg-success">
        <div class="ml-3 mt-3 white">
            <h1>{{$jabatan->nama_jabatan}}</h1>
            <h3>Eselon : {{$jabatan->eselon}}</h3>
            <h3>Status : {{$jabatan->status}}</h3>
            <h3>Perangkat Daerah : {{$jabatan->opd->nama_opd}}</h3>
        </div>
        <a href="/jabatan" class="btn btn-sm btn-primary">Kembali</a>
    </div>
@endsection