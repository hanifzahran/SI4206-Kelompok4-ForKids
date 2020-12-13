@extends('layouts.app')
@section('content')
<div class="container">
    <a href="{{route('product.index')}}" class="btn btn-md btn-danger mb-2">Kembali</a>
    <div class="card">
        <div class="card-header">Tambah Product</div>
        <div class="card-body table-responsive">
            <form action="{{route('product.update',$data->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group d-flex justify-content-center">
                    <img src="{{$data->getImage()}}" alt="{{$data->name}}" class="img-fluid img-responsive" width="250">
                </div>
                <div class="form-group">
                    <label>Name :</label>
                    <input type="text" name="name" placeholder="Name" value="{{$data->name}}" class="form-control"
                        required>
                </div>
                <!-- awal price -->
                <div class="form-group">
                    <label>Price :</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">IDR</div>
                        </div>
                        <input type="number" name="price" value="{{$data->price}}" placeholder="Price"
                            class="form-control" required>
                    </div>
                </div>
                <!-- akhir price -->
                <!-- awal stok -->
                <div class="form-group">
                    <label>Stok :</label>
                    <input type="number" name="stok" placeholder="Stok" value="{{$data->stok}}" class="form-control"
                        required>
                </div>
                <!-- akhir stok -->
                <!-- awal deskripsi -->
                <div class="form-group">
                    <label>Description :</label>
                    <textarea name="description" class="form-control">{!! $data->description !!}</textarea>
                </div>
                <!-- akhir deskripsi -->
                <!-- awal input file -->
                <div class="form-group">
                    <label>Image File</label>
                    <input type="file" class="form-control" style="height:40px" name="image_path"
                        accept="image/jpeg,image/jpg,image/png,image/gif" required>
                </div>
                <!-- akhir input file -->
                <div class="form-group text-right">
                    <button type="submit" class="btn btn-primary btn-md">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection