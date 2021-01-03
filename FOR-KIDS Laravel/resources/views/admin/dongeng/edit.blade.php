<form method="POST" action="{{route('dongeng.update',$data->id)}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label>Name :</label>
        <input type="text" class="form-control" name="name" value="{{$data->name}}" placeholder="Name" required>
    </div>
    <div class="form-group">
        <label>Description :</label>
        <textarea name="description" class="form-control" placeholder="description"
            required>{!! $data->description !!}</textarea>
    </div>
    <div class="form-group text-center">
        <img src="{{$data->getFoto()}}" alt="" width="200" class="img-responsive img-fluid">
    </div>
    <div class="form-group">
        <label>Foto :</label>
        <input type="file" class="form-control" name="foto" required="" >
    </div>
    <div class="form-group">
        <div class="text-right">
            <button class="btn btn-primary" type="submit">Submit</button>
            <button class="btn btn-warning" type="reset">Reset</button>
        </div>
    </div>
</form>
