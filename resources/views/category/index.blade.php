@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <h5>Category</h5>
        </div>
        <div class="card-body">
        <a href="/categories/create" class="btn btn-primary mt-3 ml-3">Buat Kategori</a>
        </div>
        <div class="ml-3 mt-3">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Kategori</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $key =>$category)
                    <tr>
                        <td>{{ $key+1}}</td>
                        <td>{{ $category->name}}</td>
                        <td>
                            <a href="/categories/{{$category->id}}/edit" class="btn btn-primary btn-sm">edit</a>
                            <form action="/categories/{{$category->id}}" method='POST' style="display: inline;">
                                @csrf 
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                            
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection