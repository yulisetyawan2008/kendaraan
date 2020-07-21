@extends('layouts.master')

@section('content')
    <div class="jumbotron">
        <div class="ml-3 mt-3">
            <div class="card card-primary">
                <div class="card-header">
                    <h2 class="card-title">Pengguna Kendaraan</h2>
                </div>
                <form role="form" action="/pengguna" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="noBast">Nomor BAST</label>
                                <input type="text" class="form-control" id="noBast" name = "noBast" placeholder="Nomor BAST">
                            </div>
                            <label for="hari">Hari</label>
                                <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="hari">Hari</label>
                                </div>
                                <select class="custom-select" id="hari" name="hari">
                                    <option selected>Choose...</option>
                                    <option value="Senin">Senin</option>
                                    <option value="Selasa">Selasa</option>
                                    <option value="Rabu">Rabu</option>
                                    <option value="Kamis">Kamis</option>
                                    <option value="Jumat">Jumat</option>
                                </select>
                                </div>
                                    <div class="form-group">
                                            <label class="control-label " for="tanggal">
                                            Tanggal
                                            </label>
                                            <div class="bootstrap-iso">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-calendar">
                                                        </i>
                                                    </div>
                                                    <input class="form-control" id="tanggal" name="tanggal" placeholder="MM/DD/YYYY" type="text"/>
                                                </div>
                                            </div>
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
                                <label for="pegawai_id">Pegawai</label>
                                <select name="pegawai_id" id="pegawai_id" class="form-control">
                                    @foreach($pegawais as $key => $pegawai)
                                    <option value="{{$pegawai->id}}"> {{ $pegawai->nama}}</option>
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
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                </form>
            </div>
        
        </div>
    </div>
@endsection

@push('scripts')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
<script>
    $(document).ready(function(){
        var date_input=$('input[name="tanggal"]'); //our date input has the name "date"
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            format: 'mm/dd/yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true,
        })
    })
</script>
@endpush