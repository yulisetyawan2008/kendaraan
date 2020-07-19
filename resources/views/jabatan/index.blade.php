@extends('layouts.master')

@section('content') 
  <div class="jumbotron">
    <div class="ml-3 mt-3">
        <h2>Daftar Jabatan</h2>
        <p>Jabatan Eselon di lingkungan Pemerintah Kabupaten Paser : </p>            
        <table class="table table-bordered mt-3">
          <thead>
            <tr>
              <th>No</th>
              <th>Perangkat Daerah</th>
              <th>Nama Jabatan</th>
              <th>Eselon</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($jabatans as $jabatan)
            <tr>
              <td>{{$loop->iteration}}</td>
              <td>{{$jabatan->opd->nama_opd}}</td>
              <td>{{$jabatan->nama_jabatan}}</td>
              <td>{{$jabatan->eselon}}</td>
              <td>
                  <a href="/jabatan/{{$jabatan->id}}/edit" class="btn btn-warning">Edit</a>
                  <a href="/jabatan/{{$jabatan->id}}" class="btn btn-primary">Lihat</a>
                  <form action="/jabatan/{{$jabatan->id}}" method="POST" style="display:inline">
                      @csrf 
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                  </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      <a href="jabatan/create" class="btn btn-primary">
        Tambah Jabatan
      </a>
    </div>
  </div>
@endsection