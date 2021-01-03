<table class="table table-striped">
    @if($data->foto)
    <tr>
        <td colspan="2" align="center"><img src="{{$data->getFoto()}}" width="150" alt=""
                class="img-responsive img-fluid"></td>

    </tr>
    @endif
    <tr>
        <td>Name</td>
        <td>{{$data->name ?? ''}}</td>
    </tr>
    <tr>
        <td>Description</td>
        <td>{!! $data->description ?? '' !!}</td>
    </tr>
    <tr>
        <td>Price</td>
        <td>{{ $data->getPrice() ?? '' }}</td>
    </tr>
    <tr>
        <td>Date</td>
        <td>{{ $data->tanggal ?? '' }}</td>
    </tr>
    <tr>
        <td>Dibuat</td>
        <td>{{$data->created_at}}</td>
    </tr>
    <tr>
        <td>Diperbaharui</td>
        <td>{{$data->created_at}}</td>
    </tr>
</table>
