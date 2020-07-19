@extends('layouts.master')

@section('content')
    <div class="ml-3 mt-3">
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Perangkat Daerah / OPD</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="/opd" method="POST">
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama_opd">Nama Perangkat Daerah</label>
                    <input type="text" class="form-control" id="nama_opd" name = "nama_opd" placeholder="Nama OPD">
                  </div>
                  <div class="form-group">
                    <label for="alamat_opd">Alamat Perangkat Daerah</label>
                    <input type="text" class="form-control" id="alamat_opd" name = "alamat_opd" placeholder="Alamat OPD">
                  </div>
                  <label for="status_opd">Status</label>
                  <div class="form-group">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="status_opd">Pilih</label>
                        </div>
                        <select class="custom-select" id="status_opd" name="status_opd">
                            <option selected>Choose...</option>
                            <option value="Aktif">Aktif</option>
                            <option value="Tidak Aktif">Tidak Aktif</option>
                        </select>
                        </div>
                  </div>
                  <input hidden name="created_at" value="{{ \Carbon\Carbon::now() }}">
                  <input hidden name="update_at" value="{{ \Carbon\Carbon::now() }}">
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
        </div>
    </div>
@endsection