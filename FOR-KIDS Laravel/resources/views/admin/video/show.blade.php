<table class="table table-striped">
    @if($data->foto)
        <tr>
            <td colspan="2" align="center"><img src="{{$data->getFoto()}}" width="150" alt="" class="img-responsive img-fluid"></td>
           
        </tr>
    @endif
    <tr>
        <td>Nama</td>
        <td>{{$data->name ?? ''}}</td>
    </tr>
    <tr>
        <td>Link</td>
        <td>{{ $data->link ?? '' }}</td>
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