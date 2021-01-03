@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-md">
        <div class="card">
            <div class="card-header bg-dark text-white font-weight-bold">
                <i class="fa fa-list"></i> Data Transaksi
            </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered" id="json-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>No TRX</th>
                            <th>User</th>
                            <th>Total Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($list as $data)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$data->no_unik}}</td>
                            <td>{{\App\Models\Transaksi::where('no_unik',$data->no_unik)->first()->user->name}}</td>
                            <td>IDR {{number_format(getTotalHarga($data->no_unik),0,',','.')}}</td>
                            <td><a href="#" class="btn btn-success"><i class="fa fa-check"></i></a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection