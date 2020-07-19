@extends('layouts.master')

@section('content') 
<div class="ml-3 mt-3">
  <h2>Daftar Pegawai</h2>
  <p>Pegawai di lingkungan Pemerintah Kabupaten Paser : </p>            
  <table class="table table-bordered mt-3">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Pangkat dan Golongan</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($pegawais as $pegawai)
      <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$pegawai->nama}}</td>
        <td>{{$pegawai->jenisKelamin}}</td>
        <td>{{$pegawai->pangkatGol}}</td>
        <td>{{$pegawai->status}}</td>
        <td>
            <a href="/pegawai/{{$pegawai->id}}/edit" class="btn btn-warning">Edit</a>
            <a href="/pegawai/{{$pegawai->id}}" class="btn btn-primary">Lihat</a>
            <form action="/pegawai/{{$pegawai->id}}" method="POST" style="display:inline">
                @csrf 
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
            </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <a href="/pegawai/create" class="btn btn-primary">
    Tambah Pegawai
  </a>
</div>

@endsection