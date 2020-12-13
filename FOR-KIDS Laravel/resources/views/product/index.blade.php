@extends('layouts.app')
@section('content')
<div class="container">

    <div class="card-body table-responsive">
        <a href="{{route('product.create')}}" class="btn btn-success btn-sm mb-2">Add Product</a>
        <!-- awal tabel product -->
        <table id="table" class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse(\App\Models\Product::all() as $data)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->price}}</td>
                    <td>
                        <a href="{{route('product.edit',$data->id)}}" class="btn btn-sm btn-primary">Edit</a>
                        <a href="{{route('product.delete',$data->id)}}" class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                </tr>
                <!-- ketika tidak ada produk maka akan menampilkan ini -->
                @empty
                <p>tidak ada produk</p>
                @endforelse
            </tbody>
        </table>
        <!-- akhir table product -->
    </div>
</div>
@endsection