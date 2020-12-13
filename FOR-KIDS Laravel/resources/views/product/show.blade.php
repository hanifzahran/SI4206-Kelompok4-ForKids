@extends('layouts.app')
@section('content')
<div class="container">

    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Foto Product
                </div>
                <div class="card-body">
                    <img src="{{$data->getImage()}}" alt="" class="img-responsive img-fluid">
                </div>
            </div>
        </div>
        <div class="col-md-8">

            <div class="mb-2"></div>
            <div class="card">
                <div class="card-header">
                    Detail Data
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
        </div>
    </div>
</div>
@endsection