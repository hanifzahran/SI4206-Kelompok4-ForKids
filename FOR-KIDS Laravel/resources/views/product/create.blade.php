@extends('layouts.app')
@section('content')

<div class="container">

    <!-- awal card -->
    <div class="card">
        <div class="card-header">Tambah Product</div>
        <div class="card-body table-responsive">
            <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- awal name -->
                <div class="form-group">
                    <label>Name :</label>
                    <input type="text" name="name" placeholder="Name" class="form-control" required>
                </div>
                <!-- akhir name -->
                <!-- awal price -->
                <div class="form-group">
                    <label>Price :</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">IDR</div>
                        </div>
                        <input type="number" name="price" placeholder="Price" class="form-control" required>
                    </div>
                </div>
                <!-- akhir price -->
                <!-- awal stok -->
                <div class="form-group">
                    <label>Stok :</label>
                    <input type="number" name="stok" placeholder="Stok" class="form-control" required>
                </div>
                <!-- akhir stok -->
                <!-- awal deskripsi -->
                <div class="form-group">
                    <label>Description :</label>
                    <textarea name="description" class="form-control" required></textarea>
                </div>
                <!-- akhir deskripsi -->
                <!-- awal input image -->
                <div class="form-group">
                    <label>Image File</label>
                    <input type="file" class="form-control" style="height:40px" name="image_path"
                        accept="image/jpeg,image/jpg,image/png,image/gif" required>
                </div>
                <!-- akhir input image -->
                <!-- submit -->
                <div class="form-group text-right">
                    <button type="submit" class="btn btn-primary btn-md">Add Product</button>
                </div>
                <!-- akhir submit -->
            </form>
        </div>
    </div>
    <!-- akhir card -->
</div>
@endsection