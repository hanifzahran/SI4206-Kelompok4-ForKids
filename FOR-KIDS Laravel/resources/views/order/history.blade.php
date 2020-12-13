@extends('layouts.app')
@section('content')
<div class="container">

    <div class="row">
        <div class="col-md-12">
            <a href="{{route('product.index')}}" class="btn btn-md btn-danger mb-2">Add Product</a>
        </div>



        <div class="card-body">
            <table id="table" class="table-striped table-bordered table">
                <!-- awal tabel header -->
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Product</th>
                        <th>Buyer Name</th>
                        <th>Contact</th>
                        <th>Amount</th>
                    </tr>
                </thead>
                <!-- akhir table header -->
                <!-- awal table body -->
                <tbody>
                    @forelse(\App\Models\Order::orderBy('created_at','DESC')->get() as $order)
                    <tr>
                        <th>{{$loop->iteration}}</th>
                        <th>{{$order->product->name}}</th>
                        <th>{{$order->buyer_name}}</th>
                        <th>{{$order->buyer_contact}}</th>
                        <th>{{$order->amount}}</th>
                    </tr>
                    @empty
                    @endforelse
                </tbody>
                <!-- akhir table body -->
            </table>
        </div>
    </div>
</div>
@endsection