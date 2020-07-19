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
              <form role="form" action="{{route('addimage')}}" method="POST" enctype="multipart/form-data">
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="nopol">Nomor Polisi</label>
                    <input type="text" class="form-control" id="nopol" name = "nopol" placeholder="Nomor Polisi">
                  </div>
                    <label for="merk">Merk</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="merk">Merk</label>
                        </div>
                        <select class="custom-select" id="merk" name="merk">
                            <option selected>Choose...</option>
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
                    <input type="text" class="form-control" id="tipe" name = "tipe" placeholder="Tipe Kendaraan">
                  </div>
                    <label for="jenis">Jenis Kendaraan Bermotor</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="jenis">Jenis</label>
                        </div>
                        <select class="custom-select" id="jenis" name="jenis">
                            <option selected>Choose...</option>
                            <option value="Mobil Penumpang">Mobil Penumpang</option>
                            <option value="Mobil Bus">Mobil Bus</option>
                            <option value="Mobil Barang">Mobil Barang</option>
                            <option value="Sepeda Motor">Sepeda Motor</option>
                            <option value="Kendaraan Khusus">Kendaraan Khusus</option>
                        </select>
                    </div>
                  <div class="form-group">
                    <label for="model">Model</label>
                    <input type="text" class="form-control" id="model" name = "model" placeholder="model Kendaraan">
                  </div>
                  <div class="form-group">
                    <label for="tahun">Tahun</label>
                    <input type="text" class="form-control" id="tahun" name = "tahun" placeholder="Tahun Pembuatan Kendaraan">
                  </div>
                  <div class="form-group">
                    <label for="jmlCC">Jumlah CC</label>
                    <input type="text" class="form-control" id="jmlCC" name = "jmlCC" placeholder="Jumlah CC Kendaraan">
                  </div>
                  <div class="form-group">
                    <label for="noRangka">Nomor Rangka</label>
                    <input type="text" class="form-control" id="noRangka" name = "noRangka" placeholder="Nomor Rangka Kendaraan">
                  </div>
                  <div class="form-group">
                    <label for="noMesin">Nomor Mesin</label>
                    <input type="text" class="form-control" id="noMesin" name = "noMesin" placeholder="Nomor Mesin Kendaraan">
                  </div>
                  <div class="form-group">
                    <label for="noBpkb">Nomor BPKB</label>
                    <input type="text" class="form-control" id="noBpkb" name = "noBpkb" placeholder="Nomor BPKB Kendaraan">
                  </div>
                  <div class="form-group">
                    <label for="warnaKb">Warna Kendaraan Bermotor</label>
                    <input type="text" class="form-control" id="warnaKb" name = "warnaKb" placeholder="Warna Kendaraan">
                  </div>
                    <label for="warnaTnkb">Warna Tanda Nomor Kendaraan Bermotor</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="warnaTnkb">Warna TNKB</label>
                        </div>
                        <select class="custom-select" id="warnaTnkb" name="warnaTnkb">
                            <option selected>Choose...</option>
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
                                <input type="file" class="custom-file-input" id="photoKb" name="photoKb">
                                <label class="custom-file-label" for="photoKb">Choose file</label>
                            </div>
                        </div>
                        <label for="photoBpkb">Photo Bpkb</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Upload Foto BPKB</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="photoBpkb" name="photoBpkb">
                                <label class="custom-file-label" for="photoBpkb">Choose file</label>
                            </div>
                        </div>
                        <label for="photoStnk">Photo STNK</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Upload Foto STNK</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="photoStnk" name="photoStnk">
                                <label class="custom-file-label" for="photoStnk">Choose file</label>
                            </div>
                        </div>
                        <label for="warnaTnkb">Kategori</label>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                              <label class="input-group-text" for="kategori">Kategori</label>
                          </div>
                          <select class="custom-select" id="kategori" name="kategori">
                              <option selected>Choose...</option>
                              <option value="Dinas">Dinas</option>
                              <option value="Sewa">Sewa</option>
                          </select>
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