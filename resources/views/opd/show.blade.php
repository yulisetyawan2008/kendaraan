@extends('layouts.master')

@section('content')
    <div class="jumbotron bg-success">
        <div class="ml-3 mt-3 white">
            <h1>{{$opd->nama_opd}}</h1>
            <h3>Alamat : {{$opd->alamat_opd}}</h3>
        </div>
        <a href="/opd" class="btn btn-sm btn-primary">Kembali</a>
    </div>
@endsection