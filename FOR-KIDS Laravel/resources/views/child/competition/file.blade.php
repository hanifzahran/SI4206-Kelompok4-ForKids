@extends('layouts.app')
@section('content')
<header style="z-index:9999;position:relative">
    @include('layouts.include.header-top')
</header>

<section class="page-header section-notch" style="margin-top:-20px">
    <div class="overlay">
        <div class="container">
            <h3>Halaman Upload Karya Competition Anak</h3>
            <ul>
                <li><a href="{{url('/')}}">Home</a></li>
                <li><a href="{{url('/child-panel')}}"> - Halaman Anak -</a></li>
                <li>Halaman Upload Karya Competition Anak</li>
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
                    <!-- here  -->
                </div>
                <hr>
                <section class="event event-two " style="margin-top:-80px !important">
                    <div class="container">
                        <form action="{{route('competition.submission.action',Request::segment(2))}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card card-body">
                                <div class="form-group ">
                                    <label for="inputGambar"><b>Upload Karya</b></label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="gambar" name="file">
                                        <label class="custom-file-label" for="customFile">Pilih File</label>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <button class="btn btn-block btn-warning text-white" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div><!-- container -->
                </section><!-- event blog -->
            </div>
        </div><!-- row -->

    </div><!-- container -->
</section>
@endsection
