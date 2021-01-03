@extends('layouts.app')
@section('content')
<!-- Page Header Start here -->
<header style="z-index:9999;position:relative">
@include('layouts.include.header-top')
</header>
<section class="page-header section-notch" style="margin-top:-20px">
    <div class="overlay">
        <div class="container">
            <h3>Halaman Anak</h3>
            <ul>
                <li><a href="{{url('/')}}">Home</a></li>
                <li>-</li>
                <li>Halaman Anak</li>
            </ul>
        </div><!-- container -->
    </div><!-- overlay -->
</section><!-- page header -->
<!-- Page Header End here -->
<!-- Product start here -->
<section class="product padding-120">
    <div class="container">
        <div class="row">
            @include('layouts.include.child.menu')
            <div class="col-lg-9 col-xs-12">
                <h4><i class="fa fa-fw fa-bullhorn"></i>Dashboard</h4>
                <hr>
                <div class="card card-default card-outline-primary">
                    <div class="card-body">
                        Welcome <b>{{ Auth::user()->name }}</b>
                    </div>
                </div>
            </div>
        </div><!-- row -->

    </div><!-- container -->
</section>
<!-- Product end here -->
@endsection
