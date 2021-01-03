@extends('layouts.app')
@section('content')
<header style="z-index:9999;position:relative">
    @include('layouts.include.header-top')
</header>

<section class="page-header section-notch" style="margin-top:-20px">
    <div class="overlay">
        <div class="container">
            <h3>Halaman Data Competition Anak</h3>
            <ul>
                <li><a href="{{url('/')}}">Home</a></li>
                <li><a href="{{url('/child-panel')}}"> - Halaman Anak -</a></li>
                <li>Halaman Data Competition Anak</li>
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
                        <h4><i class="fa fa-fw fa-bullhorn"></i>My Competition</h4>
                    </div>
                    <!-- <div class="col-md-2 col-xs-12"><a href="{{route('activity.create')}}" class="btn btn-block btn-sm btn-success">Tambah Data</a>
                    </div> -->
                </div>
                <hr>
                <section class="event event-two " style="margin-top:-80px !important">
                    <div class="container">
                        <div class="event-items">
                            <div class="row">
                                @forelse($competition as $data)
                                <div class="col-lg-6 col-sm-6 col-xs-12">
                                    <div class="event-item">
                                        <div class="event-image">
                                            <img src="{{$data->competition->getFoto()}}" alt="{{$data->name}} image"
                                                class="img-responsive">
                                            <div class="date">
                                                <span>{{\Carbon\carbon::parse($data->competition->tanggal)->format('d')}}</span>
                                                <p>{{\Carbon\carbon::parse($data->competition->tanggal)->format('M')}}</p>
                                            </div>
                                        </div>
                                        <div class="event-content" style="width:100% !Important">
                                            <h4>{{$data->competition->name}}</h4>
                                            <ul>
                                                <li><span><i class="fa fa-calendar-o" aria-hidden="true"></i></span>{{$data->competition->tanggal}}</li>
                                               
                                            </ul>     
                                            <p>{{substr($data->competition->description,0,100)}}...</p>
                                            @if($data->foto != NULL OR $data->foto != '')
                                            <a href="{{route('competition.submission',$data->id)}}" class="button-default ml-2"><i class="fa fa-cloud"></i> Upload Karya</a>          
                                            @else
                                            <span class="btn btn-block btn-warning text-white" disabled>
                                            @if($data->nilai == NULL OR $data->nilai == FALSE)
                                            Telah Di Submit 
                                            @else 
                                            Nilai Anda {{$data->nilai}}
                                            @endif
                                            
                                            <i class="fa fa-check text-success"></i></span>
                                            @endif
                       
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
