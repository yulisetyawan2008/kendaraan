@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <h2>Pengguna Kendaraan</h2>
        </div>
        <div class="card-body">
            <a href="/pengguna/create" class="btn btn-sm btn-primary ml-3 mt-3">Tambah Pengguna</a>
            <table class="table table-bordered mt-3">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Jabatan</th>
                        <th>Nama</th>
                        <th>Nopol</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($penggunas as $pengguna)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$pengguna->jabatan->nama_jabatan}}</td>
                        <td>{{$pengguna->pegawai->nama}}</td>
                        <td>{{$pengguna->kendaraan->nopol}}</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning">Edit</a>
                            <a href="#" class="btn btn-sm btn-primary">Lihat</a>
                            <form action="">

                            </form>
                        </td>
                    </tr>
                   
                        
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection