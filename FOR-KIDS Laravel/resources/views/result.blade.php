@if (session('error'))
<div class="alert alert-danger alert-dismissible">
    {{ session('error') }}
</div>
@endif

@if ($errors->any())
<div class="alert alert-danger alert-dismissible">
    <ul style="margin-bottom:0px;">
        @foreach ($errors->all() as $error)
            <li>{!! $errors->first() !!}</li>
        @endforeach
    </ul>
</div>
@endif
