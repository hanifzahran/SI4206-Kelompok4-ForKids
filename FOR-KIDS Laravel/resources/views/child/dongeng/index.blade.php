@extends('layouts.app')
@section('content')
<header style="z-index:9999;position:relative">
    @include('layouts.include.header-top')
</header>

<section class="page-header section-notch" style="margin-top:-20px">
    <div class="overlay">
        <div class="container">
            <h3>Dongeng</h3>
            <ul>
                <li><a href="{{url('/')}}">Home</a></li>
                <li><a href="{{url('/child-panel')}}"> - Halaman Anak -</a></li>
                <li>Dongeng</li>
            </ul>
        </div><!-- container -->
    </div><!-- overlay -->
</section><!-- page header -->
<section class="product padding-120">
    <div class="container">
        <div class="row">
            @include('layouts.include.child.menu')
            <div class="col-lg-9 col-xs-12">
                <div class="row text-left">
                    <div class="col-md">
                        <h4><i class="fa fa-fw fa-bullhorn"></i>My Activity</h4>
                    </div>
                   
                </div>
                <hr>
                <section class="event event-two " style="margin-top:-80px !important">
                    <div class="container">
                        <div class="event-items">
                            <div class="row">
                                @forelse($dongeng as $data)
                                <div class="col-lg-6 col-sm-6 col-xs-12">
                                    <div class="event-item">
                                        <div class="event-image">
                                            <img src="{{$data->getFoto()}}" alt="{{$data->name}} image"
                                                class="img-responsive">
                                        </div>
                                        <div class="event-content">
                                            <h4>{{$data->name}}</h4>
                                            
                                            <p>{{substr($data->description,0,100)}}...</p>
                                            <a href="{{route('dongeng.detail',$data->id)}}" class="button-default">Detail</a> 
                                        </div>
                                    </div>
                                </div>
                                @empty
                                @endforelse


                            </div><!-- row -->
                        </div><!-- event items -->
                    </div><!-- container -->
                </section><!-- event blog -->
            </div>
        </div><!-- row -->

    </div><!-- container -->
</section>
@endsection
