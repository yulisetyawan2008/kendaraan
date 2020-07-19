@extends('layouts.master')

@section('content')
    <div class="card-header">
        <div class="card-header">
            <h2>Daftar Kendaraan Sewa</h2>
        </div>
        <div class="card-body">
            <div class="ml-3 mt-3">
                <a href="/rent/create" class="btn btn-primary">Tambah Kendaraan Sewa</a>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nomor Polisi</th>
                        <th>Merk</th>
                        <th>Tipe</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>    
                        <td>1</td>
                        <td>KT 1111 E</td>
                        <td>Toyota</td>
                        <td>Avanza</td>
                        <td>
                            <a href="#">Edit</a>
                            <a href="#">Hapus</a>
                            <form action="">
                            
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

@endsection