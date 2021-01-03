@extends('layouts.app')
@section('content')
<header style="z-index:9999;position:relative">
    @include('layouts.include.header-top')
</header>
<!-- Page Header Start here -->
<section class="page-header section-notch" style="margin-top:-20px">
    <div class="overlay">
        <div class="container">
            <h3>{{$data->name}}</h3>
            <ul>
                <li><a href="{{url('/')}}">Home</a></li>
                <li>- Dongeng -</li>
                <li>{{$data->name}}</li>
            </ul>
        </div><!-- container -->
    </div><!-- overlay -->
</section><!-- page header -->
<!-- Page Header End here -->


<!-- Blog Post Start here -->
<section class="singel-class padding-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="single-post">
                    <div class="post-image">
                        <img src="{{$data->getFoto()}}" alt="post image" class="img-responsive">
                    </div>
                    <div class="post-content">
                        <h3>{{$data->name}}</h3>

                        <p>{!! nl2br($data->description) !!}</p>

                    </div>
                </div><!-- single post -->
            </div>

        </div>
    </div>
</section>
<!-- Blog Post End here -->
@endsection
