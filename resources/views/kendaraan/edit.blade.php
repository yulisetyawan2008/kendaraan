@extends('layouts.master')

@section('content')
    <div class="jumbotron bg-success">
    <div class="ml-3 mt-3">
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Kendaran Pemkab Paser</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="/kendaraan/{{$kendaraan->id}}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="nopol">Nomor Polisi</label>
                    <input type="text" class="form-control" id="nopol" name = "nopol" value="{{$kendaraan->nopol}}">
                  </div>
                    <label for="merk">Merk</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="merk">Merk</label>
                        </div>
                        <select class="custom-select" id="merk" name="merk">
                            <option value="{{$kendaraan->merk}}" selected>{{$kendaraan->merk}}</option>
                            <option value="Toyota">Toyota</option>
                            <option value="Daihatsu">Daihatsu</option>
                            <option value="Honda">Honda</option>
                            <option value="Ford">Ford</option>
                            <option value="Mitsubishi">Mitsubishi</option>
                            <option value="Isuzu">Isuzu</option>
                            <option value="Nissan">Nissan</option>
                            <option value="Suzuki">Suzuki</option>
                            <option value="Mazda">Mazda</option>
                            <option value="Kawasaki">Kawasaki</option>
                            <option value="Yamaha">Yamaha</option>
                            <option value="Viar">Viar</option>
                            <option value="Tossa">Tossa</option>
                            <option value="Hino">Hino</option>
                            <option value="Chevrolet">Chevrolet</option>
                            <option value="Minerva">Minerva</option>
                            <option value="Hyundai">Hyundai</option>
                        </select>
                    </div>
                  <div class="form-group">
                    <label for="tipe">Tipe</label>
                    <input type="text" class="form-control" id="tipe" name = "tipe" value="{{$kendaraan->tipe}}">
                  </div>
                    <label for="jenis">Jenis Kendaraan Bermotor</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="jenis">Jenis</label>
                        </div>
                        <select class="custom-select" id="jenis" name="jenis">
                            <option value="{{$kendaraan->jenis}}" selected>{{$kendaraan->jenis}}</option>
                            <option value="Mobil Penumpang">Mobil Penumpang</option>
                            <option value="Mobil Bus">Mobil Bus</option>
                            <option value="Mobil Barang">Mobil Barang</option>
                            <option value="Sepeda Motor">Sepeda Motor</option>
                            <option value="Kendaraan Khusus">Kendaraan Khusus</option>
                        </select>
                    </div>
                  <div class="form-group">
                    <label for="model">Model</label>
                    <input type="text" class="form-control" id="model" name = "model" value="{{$kendaraan->model}}">
                  </div>
                  <div class="form-group">
                    <label for="tahun">Tahun</label>
                    <input type="text" class="form-control" id="tahun" name = "tahun" value="{{$kendaraan->tahun}}">
                  </div>
                  <div class="form-group">
                    <label for="jmlCC">Jumlah CC</label>
                    <input type="text" class="form-control" id="jmlCC" name = "jmlCC" value="{{$kendaraan->jmlCC}}">
                  </div>
                  <div class="form-group">
                    <label for="noRangka">Nomor Rangka</label>
                    <input type="text" class="form-control" id="noRangka" name = "noRangka" value="{{$kendaraan->noRangka}}">
                  </div>
                  <div class="form-group">
                    <label for="noMesin">Nomor Mesin</label>
                    <input type="text" class="form-control" id="noMesin" name = "noMesin" value="{{$kendaraan->noMesin}}">
                  </div>
                  <div class="form-group">
                    <label for="noBpkb">Nomor BPKB</label>
                    <input type="text" class="form-control" id="noBpkb" name = "noBpkb" value="{{$kendaraan->noBpkb}}">
                  </div>
                  <div class="form-group">
                    <label for="warnaKb">Warna Kendaraan Bermotor</label>
                    <input type="text" class="form-control" id="warnaKb" name = "warnaKb" value="{{$kendaraan->warnaKb}}">
                  </div>
                    <label for="warnaTnkb">Warna Tanda Nomor Kendaraan Bermotor</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="warnaTnkb">Warna TNKB</label>
                        </div>
                        <select class="custom-select" id="warnaTnkb" name="warnaTnkb">
                            <option value="{{$kendaraan->warnaTnkb}}" selected>{{$kendaraan->warnaTnkb}}</option>
                            <option value="Merah">Merah</option>
                            <option value="Hitam">Hitam</option>
                            <option value="Kuning">Kuning</option>
                        </select>
                    </div>
                        <label for="photoKb">Photo Kendaraan Bermotor</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Upload Foto Kendaraan</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="photoKb" name="photoKb" value="{{$kendaraan->photoKb}}">
                                <label class="custom-file-label" for="photoKb">{{$kendaraan->photoKb}}</label>
                            </div>
                        </div>
                        <label for="photoBpkb">Photo Bpkb</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Upload Foto BPKB</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="photoBpkb" name="photoBpkb" value="{{$kendaraan->photoBpkb}}">
                                <label class="custom-file-label" for="photoBpkb">{{$kendaraan->photoBpkb}}</label>
                            </div>
                        </div>
                        <label for="photoStnk">Photo STNK</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Upload Foto STNK</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="photoStnk" name="photoStnk" value="{{$kendaraan->photoStnk}}">
                                <label class="custom-file-label" for="photoStnk">{{$kendaraan->photoStnk}}</label>
                            </div>
                        </div>
                        <label for="warnaTnkb">Kategori</label>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                              <label class="input-group-text" for="kategori">Kategori</label>
                          </div>
                          <select class="custom-select" id="kategori" name="kategori">
                              <option value="{{$kendaraan->kategori}}" selected>{{$kendaraan->kategori}}</option>
                              <option value="Dinas">Dinas</option>
                              <option value="Sewa">Sewa</option>
                          </select>
                        </div>
                  <input hidden name="created_at" value="{{$kendaraan->created_at}}">
                  <input hidden name="updated_at" value="{{ \Carbon\Carbon::now() }}">
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