<form method="POST" action="{{route('event.update',$data->id)}}" enctype="multipart/form-data">
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
    @if($data->foto == TRUE)
    <div class="form-group text-center">
        <img src="{{$data->getFoto()}}" alt="" class="img-fluid img-responsive">
    </div>
    @endif
    <div class="form-group">
        <label>Foto :</label>
        <input type="file" class="form-control" name="foto" required>
    </div>
    <div class="form-group">
        <label>Price :</label>
        <input type="text" class="form-control" name="price" value="{{$data->price}}" required="" placeholder="Price"
            required>
    </div>
    <div class="form-group">
        <label>Date :</label>
        <input type="date" class="form-control" name="tanggal" value="{{$data->tanggal}}" placeholder="Date" required>
    </div>
    <div class="form-group">
        <div class="text-right">
            <button class="btn btn-primary" type="submit">Submit</button>
            <button class="btn btn-warning" type="reset">Reset</button>
        </div>
    </div>
</form>
