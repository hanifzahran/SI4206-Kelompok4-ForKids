@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-dark text-white font-weight-bold">
                <i class="fa fa-list"></i> Data
            </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered" id="json-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($list as $data)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$data->name}}</td>
                            <td>
                                <a href="javascript:;" onclick="form('{{route('video.show',$data->id)}}')"
                                    class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>
                                <a href="javascript:;" onclick="form('{{route('video.edit',$data->id)}}')"
                                    class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                                <a href="{{route('video.delete',$data->id)}}"
                                    onclick="return confirm('Apakah anda yakin ingin hapus data ini ?')"
                                    class="btn btn-sm btn-danger delete"><i class="fa fa-trash"></i></a>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-dark text-white font-weight-bold">
                <i class="fa fa-plus"></i> Tambah Data
            </div>
            <div class="card-body table-responsive">
                <form method="POST" action="{{route('video.store')}}">
                    @csrf
                    <div class="form-group">
                        <label>Name :</label>
                        <input type="text" class="form-control" name="name" required="" placeholder="Name" required>
                    </div>
                    <div class="form-group">
                        <label>Category :</label>
                        <input type="text" class="form-control" name="category" required="" placeholder="Category"
                            required>
                    </div>
                    <div class="form-group">
                        <label>Link :</label>
                        <input type="text" class="form-control" name="link" required="" placeholder="Link" required>
                    </div>
                    <div class="form-group">
                        <label>Foto :</label>
                        <input type="file" class="form-control" name="foto" required="" placeholder="Foto" required>
                    </div>

                    <div class="form-group">
                        <div class="text-right">
                            <button class="btn btn-primary" type="submit">Submit</button>
                            <button class="btn btn-warning" type="reset">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
