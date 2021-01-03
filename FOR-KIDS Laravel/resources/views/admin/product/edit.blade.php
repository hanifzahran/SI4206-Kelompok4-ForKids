
<form method="POST" action="{{route('product.update',$data->id)}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label>Name :</label>
        <input type="text" class="form-control" name="name" required="" value="{{$data->name}}" placeholder="Name" required>
    </div>
    <div class="form-group">
        <label>Price :</label>
        <input type="text" class="form-control" name="price" required="" value="{{$data->price}}" placeholder="Price" required>
    </div>
    @if($data->foto == TRUE)
    <div class="form-group text-center">
        <img src="{{$data->getFoto()}}" alt="" class="img-fluid img-responsive">
    </div>
    @endif
    <div class="form-group">
        <label>Foto :</label>
        <input type="file" class="form-control" style="height:45px" name="foto" placeholder="Foto">
    </div>
    <div class="form-group">
        <div class="text-right">
            <button class="btn btn-primary" type="submit">Submit</button>
            <button class="btn btn-warning" type="reset">Reset</button>
        </div>
    </div>
</form>
