@extends('layouts.master')

@section('content')
    <div class="ml-3 mt-3">
        <div class="card">
            <div class="card-header">
                <h2>Data Kendaraan</h2>
            </div>
            <div class="card-body">
                <p>Nomor Polisi : {{$kendaraan->nopol}}</p>
                <p>Merk : {{$kendaraan->merk}}</p>
                <p>Tipe : {{$kendaraan->tipe}}</p>
                <p>Jenis : {{$kendaraan->jenis}}</p>
                <p>Model : {{$kendaraan->model}}</p>
                <p>Jumlah CC : {{$kendaraan->jmlCC}}</p>
                <p>Nomor Rangka : {{$kendaraan->noRangka}}</p>
                <p>Nomor Mesin : {{$kendaraan->noMesin}}</p>
                <p>Nomor BPKB : {{$kendaraan->noBpkb}}</p>
                <p>Warna Kendaraan : {{$kendaraan->warnaKb}}</p>
                <p>Warna Plat : {{$kendaraan->warnaTnkb}}</p>
                <p>Kategori : {{$kendaraan->kategori}}</p>
                <p><img src="{{asset('uploads/kendaraan/'. $kendaraan->photoKb)}}" alt="photoKb" width="100px;" height="100px;"></p>
                
            </div>
            <div class="card-footer">
                <a href="/kendaraan" class="btn btn-primary">Kembali</a>
            </div> 
        </div>
    </div>
@endsection