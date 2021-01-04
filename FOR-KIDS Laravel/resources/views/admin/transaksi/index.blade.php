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
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($list as $data)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$data->no_unik}}</td>
                            <td>{{\App\Models\Transaksi::where('no_unik',$data->no_unik)->first()->user->name}}</td>
                            <td>IDR {{number_format(getTotalHarga($data->no_unik),0,',','.')}}</td>
                            <td>{{\App\Models\Transaksi::where('no_unik',$data->no_unik)->first()->status}}</span>
                            </td>
                            <td>
                                <a href="{{route('transaksi.checkout.update',['no_unik' => $data->no_unik,'status' => 'success'])}}"
                                    class="btn btn-success"><i class="fa fa-check"></i></a>
                                <a href="{{route('transaksi.checkout.update',['no_unik' => $data->no_unik,'status' => 'error'])}}"
                                    class="btn btn-danger"><i class="fa fa-times"></i></a>
                            </td>
                        </tr>
                        @empty
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection