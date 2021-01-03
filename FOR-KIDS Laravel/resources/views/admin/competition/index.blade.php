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
                            <a href="javascript:;" onclick="form('{{route('competition.show',$data->id)}}')" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>
                            <a href="javascript:;" onclick="form('{{route('competition.edit',$data->id)}}')" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                            <a href="{{route('competition.delete',$data->id)}}" onclick="return confirm('Apakah anda yakin ingin hapus data ini ?')" class="btn btn-sm btn-danger delete"><i class="fa fa-trash"></i></a>
 
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
                <form method="POST" action="{{route('competition.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Name :</label>
                        <input type="text" class="form-control" name="name" required="" placeholder="Name" required>
                    </div>
                    <div class="form-group">
                        <label>Type :</label>
                        <select name="type" id="" class="form-control text-capitalize" required>
                            <option value="" selected hidden>Pilih...</option>
                            <option value="mewarnai">mewarnai</option>
                            <option value="menggambar">menggambar</option>
                            <option value="prakarya">prakarya</option>
                            <option value="cerita pendek">cerita pendek</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>tanggal :</label>
                        <input type="datetime-local" class="form-control" name="tanggal" required="" placeholder="Tanggal" required>
                    </div>
                    <div class="form-group">
                        <label>Foto :</label>
                        <input type="file" class="form-control" style="height:45px" name="foto" placeholder="Foto" required>
                    </div>
                    <div class="form-group">
                        <label>Description :</label>
                        <textarea name="description" class="form-control" required></textarea>
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