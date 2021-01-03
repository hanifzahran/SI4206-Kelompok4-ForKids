<table class="table table-striped">
    <tr>
        <td>Nama</td>
        <td>{{$data->name ?? ''}}</td>
    </tr>
    <tr>
        <td>Link</td>
        <td>{{ $data->link ?? '' }}</td>
    </tr>
    <tr>
        <td>Description</td>
        <td>{!! $data->description ?? '' !!}</td>
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