@extends('layouts.master')

@section('content')
    <div class="ml-3 mt-3">
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Perangkat Daerah / OPD</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="/opd/{{$opd->id}}" method="POST">
              @csrf
              @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama_opd">Nama Perangkat Daerah</label>
                    <input type="text" class="form-control" id="nama_opd" name = "nama_opd" value="{{$opd->nama_opd}}">
                  </div>
                  <div class="form-group">
                    <label for="alamat_opd">Alamat Perangkat Daerah</label>
                    <input type="text" class="form-control" id="alamat_opd" name = "alamat_opd" value="{{$opd->alamat_opd}}">
                  </div>
                  <label for="status_opd">Status</label>
                  <div class="form-group">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="status_opd">Pilih</label>
                        </div>
                        <select class="custom-select" id="status_opd" name="status_opd">
                            <option value="{{$opd->status_opd}}" selected>{{$opd->status_opd}}</option>
                            <option value="Aktif">Aktif</option>
                            <option value="Tidak Aktif">Tidak Aktif</option>
                        </select>
                        </div>
                  </div>
                  <input hidden name="created_at" value="{{$opd->created_at}}">
                  <input hidden name="update_at" value="{{ \Carbon\Carbon::now() }}">
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
        </div>
    </div>
@endsection