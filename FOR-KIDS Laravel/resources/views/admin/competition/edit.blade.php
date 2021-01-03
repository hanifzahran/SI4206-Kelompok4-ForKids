<form method="POST" action="{{route('competition.update',$data->id)}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label>Name :</label>
        <input type="text" class="form-control" name="name" value="{{$data->name}}" placeholder="Name" required>
    </div>
    <div class="form-group">
        <label>Type :</label>
        <select name="type" class="form-control text-capitalize" required>
            <option value="{{$data->type}}" selected hidden>{{$data->type}}</option>
            <option value="mewarnai">mewarnai</option>
            <option value="menggambar">menggambar</option>
            <option value="prakarya">prakarya</option>
            <option value="cerita pendek">cerita pendek</option>
        </select>
    </div>
    @if($data->foto == TRUE)
    <div class="form-group text-center">
        <img src="{{$data->getFoto()}}" alt="" class="img-fluid img-responsive">
    </div>
    @endif
    <div class="form-group">
        <label>tanggal :</label>
        <input type="datetime-local" class="form-control" name="tanggal" required="" value="{{$data->tanggal}}"
            placeholder="Tanggal" required>
    </div>
    <div class="form-group">1
        <label>Foto :</label>
        <input type="file" class="form-control" style="height:45px" name="foto" placeholder="Foto">
    </div>
    <div class="form-group">
        <label>Description :</label>
        <textarea name="description" class="form-control" required>{{$data->description}}</textarea>
    </div>
    <div class="form-group">
        <div class="text-right">
            <button class="btn btn-primary" type="submit">Submit</button>
            <button class="btn btn-warning" type="reset">Reset</button>
        </div>
    </div>
</form>
