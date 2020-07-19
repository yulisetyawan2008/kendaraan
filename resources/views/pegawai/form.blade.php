@extends('layouts.master')

@section('content')
    <div class="jumbotron bg-primary">
        <div class="ml-3 mt-3">
            <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Nama Pegawai</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                        <form role="form" action="/pegawai" method="POST">
                            @csrf
                            <div class="card-body">
                                    <label for="jenisID">Jenis Identitas</label>
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="jenisID">ID</label>
                                            </div>
                                                <select class="custom-select" id="jenisID" name="jenisID">
                                                    <option selected>Pilih...</option>
                                                    <option value="NIP">NIP</option>
                                                    <option value="KTP">KTP</option>
                                                </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="noID">Nomor Identitas</label>
                                        <input type="text" class="form-control" id="noID" name = "noID" placeholder="Nomor Identitas">
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">Nama Pegawai</label>
                                        <input type="text" class="form-control" id="nama" name = "nama" placeholder="Nama Pegawai">
                                    </div>
                                    <div class="form-group">
                                        <label for="ttl">Tempat dan Tanggal Lahir</label>
                                        <input type="text" class="form-control" id="ttl" name = "ttl" placeholder="Tempat dan Tanggal Lahir">
                                    </div>
                                    <label for="jenisKelamin">Jenis Kelamin</label>
                                    <div class="form-group">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text" for="jenisKelamin">Jenis Kelamin</label>
                                                </div>
                                                <select class="custom-select" id="jenisKelamin" name="jenisKelamin">
                                                    <option selected>Pilih...</option>
                                                    <option value="Laki-Laki">Laki-Laki</option>
                                                    <option value="Perempuan">Perempuan</option>
                                                </select>
                                            </div>
                                    </div>
                                    <label for="pangkatGol">Pangkat dan Golongan</label>
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="pangkatGol">Pangkat dan Golongan</label>
                                            </div>
                                            <select class="custom-select" id="pangkatGol" name="pangkatGol">
                                                <option selected>Pilih...</option>
                                                <option value="Pembina Utama (IV/D)">Pembina Utama - IV.D</option>
                                                <option value="Pembina Utama Muda (IV/C)">Pembina Utama Muda - IV.C</option>
                                                <option value="Pembina Tingkat I (IV/B)">Pembina Tingkat I - IV.B</option>
                                                <option value="Pembina (IV/A)">Pembina - IV.A</option>
                                                <option value="Penata Tingkat I (III/D)">Penata Tingkat I - III.D</option>
                                                <option value="Penata (III/C)">Penata - III.C</option>
                                                <option value="Penata Muda Tingkat I (III/B)">Penata Muda Tingkat I - III.B</option>
                                                <option value="Penata Muda (III/A)">Penata Muda - III.A</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">Alamat Pegawai</label>
                                        <input type="text" class="form-control" id="alamat" name = "alamat" placeholder="Alamat Pegawai">
                                    </div>
                                    <div class="form-group">
                                        <label for="noHp">Nomor HP Pegawai</label>
                                        <input type="text" class="form-control" id="noHp" name = "noHp" placeholder="Nomor HP Pegawai">
                                    </div>
                                    <div class="form-group">
                                        <label for="jabatan_id">Menjabat Sebagai</label>
                                        <select name="jabatan_id" id="jabatan_id" class="form-control">
                                        @foreach($jabatans as $key => $jabatan)
                                        <option value="{{$jabatan->id}}">{{$jabatan->nama_jabatan}}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                    <label for="status">Status Pegawai</label>
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text" for="status">Status</label>
                                                </div>
                                                <select class="custom-select" id="status" name="status">
                                                    <option selected>Pilih...</option>
                                                    <option value="Aktif">Aktif</option>
                                                    <option value="Pensiun">Pensiun</option>
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
    </div>
@endsection