@extends('layouts.master')

@section('content') 
<div class="ml-3 mt-3">
  <div class="card card-primary">
  <div class="card-header">
    <h2>Daftar Perangkat Daerah / OPD</h2>
    <p>Perangkat daerah di lingkungan Pemerintah Kabupaten Paser : </p> 
  </div>
             
  <div class="card-body">
      <a href="/opd/create" class="btn btn-primary">
        Tambah Perangkat Daerah
      </a>
      <table class="table table-bordered mt-3">
        <thead>
          <tr>
            <th>No</th>
            <th>Perangkat Daerah</th>
            <th>Alamat</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        @foreach($opds as $opd)
          <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$opd->nama_opd}}</td>
            <td>{{$opd->alamat_opd}}</td>
            <td>{{$opd->status_opd}}</td>
            <td>
                <a href="/opd/{{$opd->id}}/edit" class="btn btn-warning">Edit</a>
                <a href="/opd/{{$opd->id}}" class="btn btn-primary">Lihat</a>
                <form action="/opd/{{$opd->id}}" method="POST" style="display:inline">
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