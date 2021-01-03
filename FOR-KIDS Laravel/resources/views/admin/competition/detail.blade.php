@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-md">
        <div class="card">
            <div class="card-header bg-dark text-white font-weight-bold">
                <i class="fa fa-list"></i> Data Pengumpulan Karya
            </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered" id="json-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Competition</th>
                            <th>Name</th>
                            <th>File</th>
                            <th>Nilai</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($list as $data)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$data->competition->name}}</td>
                            <td>{{$data->user->name}}</td>
                            <td><a href="{{$data->getFile()}}" target="new">Klik Disini</a></td>
                            <form method="POST" action="{{route('competition.evaluation.action',$data->id)}}">
                            @csrf
                         
                            <td><input type="number" name="nilai" class="form-control" value="{{$data->nilai ?? ''}}"></td>                         
                            <td><button type="submit" class="btn btn-success btn-block"><i class="fa fa-save"></i> Simpan</a></td>
                            </form>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection