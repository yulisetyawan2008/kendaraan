@extends('layouts.master')

@section('content')
    <div class="jumbotron bg-success" >
        <div class="ml-3 mt-3">
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Jabatan ASN</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="/jabatan/{{$jabatan->id}}" method="POST">
              @csrf
              @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama_opd">Nama Perangkat Daerah</label>
                    <select name="opd_id" id="opd_id" class="form-control">
                      @foreach($opds as $opd)
                        @if($opd->id == $jabatan->opd_id)
                            <option value="{{$opd->id}}" selected>{{$opd->nama_opd}}</option>
                        @else
                            <option value="{{$opd->id}}">{{$opd->nama_opd}}</option>
                        @endif
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="nama_jabatan">Nama Jabatan</label>
                    <input type="text" class="form-control" id="nama_jabatan" name = "nama_jabatan" value="{{$jabatan->nama_jabatan}}">
                  </div>
                  <label for="eselon">Tingkat Eselon</label>
                  <div class="form-group">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="eselon">Eselon</label>
                        </div>
                        <select class="custom-select" id="eselon" name="eselon">
                            <option value="{{$jabatan->eselon}}" selected>{{$jabatan->eselon}}</option>
                            <option value="II.A">II.A</option>
                            <option value="II.B">II.B</option>
                            <option value="III.A">III.A</option>
                            <option value="III.B">III.B</option>
                            <option value="IV.A">IV.A</option>
                            <option value="IV.B">IV.B</option>
                            
                        </select>
                        </div>
                  </div>
                  <label for="status">Status Jabatan</label>
                  <div class="form-group">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="status">Status</label>
                        </div>
                        <select class="custom-select" id="status" name="status">
                            <option value="{{$jabatan->status}}" selected>{{$jabatan->status}}</option>
                            <option value="Aktif">Aktif</option>
                            <option value="Tidak Aktif">Tidak Aktif</option>
                        </select>
                        </div>
                  </div>
                  <input hidden name="created_at" value="{{$jabatan->created_at}}">
                  <input hidden name="update_at" value="{{ \Carbon\Carbon::now() }}">
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
        </div>
        </div>
    </div>
@endsection