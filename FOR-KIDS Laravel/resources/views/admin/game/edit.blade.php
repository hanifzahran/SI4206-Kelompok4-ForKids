<form method="POST" action="{{route('game.update',$data->id)}}" >
    @csrf
    @method('PUT')
    <div class="form-group">
        <label>Name :</label>
        <input type="text" class="form-control" name="name" required="" value="{{$data->name}}" placeholder="Name" required>
    </div>
    <div class="form-group">
        <label>Link :</label>
        <input type="text" class="form-control" name="link" required="" value="{{$data->link}}" placeholder="Link" required>
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
