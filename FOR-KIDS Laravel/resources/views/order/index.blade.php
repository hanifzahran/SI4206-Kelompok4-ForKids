@extends('layouts.app')
@section('content')
<div class="container">
    <h2 class="text-center">Daftar Product</h2>
    <div class="row">
        @forelse(\App\Models\Product::all() as $data)
        <div class="col-md-4">
            <div class="card shadow">
                <div class="card-body">
                    <img src="{{$data->getImage()}}" alt="" class="img-responsive img-fluid w-200">
                    <h2 class="mt-2 mb-2">{{$data->name}}</h2>
                    {!! substr($data->description,0,1000) !!}
                    <a href="{{route('product.slug',['slug' => $data->slug])}}"
                        class="btn btn-md btn-success btn-block mt-2 text-uppercase">order now</a>
                </div>
            </div>
        </div>
        <!-- keitka tidak ada data akan menampilkan fungsi berikut -->
        @empty
        <div class="col-md-12 text-center">
            Tidak Ada Data
        </div>
        @endforelse
    </div>
</div>
@endsection