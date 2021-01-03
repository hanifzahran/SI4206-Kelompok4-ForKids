@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-xl ">
        <div class="card-box">


            <h4 class="header-title mt-0 mb-2">Jumlah Product</h4>

            <div class="mt-1">
                <div class="float-left" dir="ltr">
                    <i class="la la-shopping-cart text-success la-4x"></i>
                </div>
                <div class="text-right">
                    <h2 class="mt-3 pt-1 mb-1">
                        {{$product_count}} </h2>
                    <p class="text-muted mb-0">Jumlah Product</p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div><!-- end col -->

    <div class="col-xl ">
        <div class="card-box">


            <h4 class="header-title mt-0 mb-2">Jumlah Event</h4>

            <div class="mt-1">
                <div class="float-left" dir="ltr">
                    <i class="la la-shopping-cart text-danger la-4x"></i>
                </div>
                <div class="text-right">
                    <h2 class="mt-3 pt-1 mb-1">
                    {{$event_count}} </h2>
                    <p class="text-muted mb-0">Jumlah Event</p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div><!-- end col -->

</div>
<!-- end row -->
@endsection