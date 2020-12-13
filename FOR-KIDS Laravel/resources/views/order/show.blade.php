@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <!-- awal card gambar product -->
            <div class="card">
                <div class="card-header">
                    Gambar Product
                </div>
                <div class="card-body">
                    <img src="{{$data->getImage()}}" alt="" class="img-responsive img-fluid">
                </div>
            </div>
            <!-- akhir gambar card -->
        </div>
        <!-- card untuk mengelompokan detail dari product -->
        <div class="col-md-8">
            <div class="mb-2"></div>
            <div class="card">
                <div class="card-header">
                    Detail Product
                </div>
                <div class="card-body">
                    <table class="table table-bordred table-striped">
                        <tr>
                            <td>Name</td>
                            <td>{{$data->name}}</td>
                        </tr>
                        <tr>
                            <td>Price</td>
                            <td>{{$data->getPrice()}}</td>
                        </tr>
                        <tr>
                            <td>Stok</td>
                            <td>{{$data->stok}}</td>
                        </tr>
                        <tr>
                            <td>Description</td>
                            <td>{!! $data->description !!}</td>
                        </tr>
                    </table>
                </div>
            </div>
            <!-- akhir detail product-->
        </div>
    </div>

    <!-- awal informasi customer -->
    <div class="row mt-2">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Informasi Customer
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('order.store')}}">
                        @csrf
                        <!-- awal input nama -->
                        <input type="hidden" name="product_id" value="{{$data->id}}" />
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="buyer_name" placeholder="Nama.." class="form-control" required>
                        </div>
                        <!-- akhir nama -->
                        <!-- awal input contact -->
                        <div class="form-group">
                            <label>Contact</label>
                            <input type="number" name="buyer_contact" placeholder="Contact.." class="form-control"
                                required>
                        </div>
                        <!-- akhir contact -->
                        <!-- awal input quantity -->
                        <div class="form-group">
                            <label>Quantity</label>
                            <input type="number" name="amount" placeholder="Quantity.." class="form-control" required>
                        </div>
                        <!-- akir quantity -->
                        <!-- submit -->
                        <div class="form-group text-right">
                            <button type="submit" class="btn btn-primary btn-md">Submit</button>
                        </div>
                        <!-- akhir submit -->
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- akhir informasi customer -->
</div>
@endsection