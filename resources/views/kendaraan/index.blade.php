@extends('layouts.master')

@section('content') 

<div class="ml-3 mt-3">
  <div class="card">
      <div class="card-header">
          <h2>Daftar Kendaraan</h2>
      </div>
      <div class="card-body">
          <p>Kendaraan bermotor di lingkungan Pemerintah Kabupaten Paser : </p>
          <a href="/kendaraan/create" class="btn btn-primary">
          Tambah Kendaraan
          </a>
          <table class="table table-bordered mt-3">
        <thead>
          <tr>
            <th>No</th>
            <th>Nopol</th>
            <th>Merk</th>
            <th>Tipe</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        @foreach($kendaraans as $kendaraan)
          <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$kendaraan->nopol}}</td>
            <td>{{$kendaraan->merk}}</td>
            <td>{{$kendaraan->tipe}}</td>
            <td>
                <a href="kendaraan/{{$kendaraan->id}}/edit" class="btn btn-warning">Edit</a>
                <a href="kendaraan/{{$kendaraan->id}}" class="btn btn-success">Lihat</a>
                <form action="kendaraan/{{$kendaraan->id}}" method="POST" style="display:inline">
                    @csrf 
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      </div>
  </div>
</div>

@endsection