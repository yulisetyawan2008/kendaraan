@extends('layouts.master')

@section('content')
    <div class="jumbotron">
        <div class="ml-3 mt-3">
            <div class="card card-primary">
                <div class="card-header">
                    <h2 class="card-title">Pengguna Kendaraan</h2>
                </div>
                <form role="form" action="" method="POST">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="noBast">Nomor BAST</label>
                                <input type="text" class="form-control" id="noBast" name = "noBast" placeholder="Nomor BAST">
                            </div>
                            <div class="form-group">
                                <label for="jabatan_id">Jabatan</label>
                                <select name="jabatan_id" id="jabatan_id" class="form-control">
                                    @foreach($jabatans as $key => $jabatan)
                                    <option value="{{$jabatan->id}}"> {{ $jabatan->nama_jabatan}}</option>
                                     @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="kendaraan_id">Nomor Polisi</label>
                                <select name="kendaraan_id" id="kendaraan_id" class="form-control">
                                    @foreach($kendaraans as $key => $kendaraan)
                                    <option value="{{$kendaraan->id}}"> {{ $kendaraan->nopol}}</option>
                                     @endforeach
                                </select>
                            </div>
                            <input hidden name="created_at" value="{{ \Carbon\Carbon::now() }}">
                            <input hidden name="updated_at" value="{{ \Carbon\Carbon::now() }}">
                        </div>
                </form>
            </div>
        
        </div>
    </div>
@endsection