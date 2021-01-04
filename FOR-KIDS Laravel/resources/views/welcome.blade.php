@extends('layouts.app')
@section('content')

@include('layouts.include.header')
<!-- Banner Start here -->
<section class="banner section-notch">
    <div class="banner-slider swiper-container">
        <div class="swiper-wrapper">
            <div class="banner-item slide-one swiper-slide">
                <div class="banner-overlay"></div>
                <div class="container">
                    <div class="banner-content">
                        <h3>Welcome to {{config('app.name')}}</h3>
                        <h2>Best For Creativity</h2>
                        <p>Monotonely principle centered ahitectures through and standards magnetic metrics whereas
                            cross functional products.</p>
                        <ul>
                            <li><a href="#about" class="button-default">Read More</a></li>
                            <!-- <li><a href="#" class="button-default">Buy Now</a></li> -->
                        </ul>
                    </div><!-- banner-content -->
                </div><!-- container -->
            </div><!-- slide item -->
            <div class="banner-item slide-two swiper-slide">
                <div class="banner-overlay"></div>
                <div class="container">
                    <div class="banner-content">
                        <h3>Welcome to {{config('app.name')}}</h3>
                        <h2>Best For Creativity</h2>
                        <p>Monotonely principle centered ahitectures through and standards magnetic metrics whereas
                            cross functional products.</p>
                        <ul>
                            <li><a href="#" class="button-default">Read More</a></li>
                            <!-- <li><a href="#" class="button-default">Buy Now</a></li> -->
                        </ul>
                    </div><!-- banner-content -->
                </div><!-- container -->
            </div><!-- slide item -->
            <div class="banner-item slide-three swiper-slide">
                <div class="banner-overlay"></div>
                <div class="container">
                    <div class="banner-content">
                        <h3>Welcome to {{config('app.name')}}</h3>
                        <h2>Best For Creativity</h2>
                        <p>Monotonely principle centered ahitectures through and standards magnetic metrics whereas
                            cross functional products.</p>
                        <ul>
                            <li><a href="#" class="button-default">Read More</a></li>
                            <!-- <li><a href="#" class="button-default">Buy Now</a></li> -->
                        </ul>
                    </div><!-- banner-content -->
                </div><!-- container -->
            </div><!-- slide item -->

        </div><!-- swiper-wrapper -->
        <div class="swiper-pagination"></div>
    </div><!-- swiper-container -->
</section><!-- banner -->
<!-- Banner End here -->


<!-- facility Start here -->
<section class="facility padding-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="facility-item">
                    <span class="icon flaticon-symbols"></span>
                    <h4>Active Learning</h4>
                    <p>Uniquely productivate real time collaboration idea-sharing after awesome quality vectors after
                    </p>
                </div><!-- facility item -->
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="facility-item">
                    <span class="icon flaticon-avatar"></span>
                    <h4>Expert Teachers</h4>
                    <p>Uniquely productivate real time collaboration idea-sharing after awesome quality vectors after
                    </p>
                </div><!-- facility item -->
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="facility-item">
                    <span class="icon flaticon-world"></span>
                    <h4>Strategi Location</h4>
                    <p>Uniquely productivate real time collaboration idea-sharing after awesome quality vectors after
                    </p>
                </div><!-- facility item -->
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="facility-item">
                    <span class="icon flaticon-line-chart"></span>
                    <h4>Full Day Programs</h4>
                    <p>Uniquely productivate real time collaboration idea-sharing after awesome quality vectors after
                    </p>
                </div><!-- facility item -->
            </div>
        </div><!-- row -->
    </div><!-- container -->
</section><!-- facility -->
<!-- facility End here -->


<!-- About Start here -->
<section id="about" class="about section-notch">
    <div class="overlay padding-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-image">
                        <img src="/template/images/about/about.png" alt="about image" class="img-responsive">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <h3>About Our {{config('app.name')}}</h3>
                        <p>Enthusiasticay diseminate competitive oportunitie through transparent an actions Compelngly
                            seize viral schemas through intermandated creative is adiea sources. Enthusiasticay
                            plagiarize clientcentered relationship for the covalent experiences. Distinctively architect
                            24/365 service for wireless is ebusiness ahosfluorescently Efficiently comunicate coperative
                            methods of empowerment awesome athrough Monotonectaly myocardinate cross and functional
                            niche markets and an functional.</p>
                        <ul>
                            <li><a href="#" class="button-default">Read More</a></li>
                            <li><a href="#" class="button-default">Buy Now</a></li>
                        </ul>
                    </div><!-- about content -->
                </div>
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- overlay -->
</section><!-- about -->
<!-- About End here -->

<!-- Classes Start here -->
<section id="packages" class="classes padding-120">
    <div class="container">
        <div class="section-header">
            <h3>Our Popular Packages</h3>

        </div>
        <div class="row">
            @forelse($classes as $data_classess)
            <div class="col-lg-4 col-sm-6 col-xs-12">
                <div class="class-item">
                    <div class="image">
                        <img src="{{$data_classess->getFoto()}}" alt="class image" class="img-responsive">
                    </div>
                    <ul class="schedule">
                        <li style="width:100% !important">
                            <span>Price</span>
                            <span>{{$data_classess->getPrice()}}</span>
                        </li>
                    </ul>
                    <div class="content text-center">
                        <h4><a href="#">{{$data_classess->name}}</a></h4>
                    </div>
                    <div class="address">
                        <a href="javascript:;" onclick="cart_action('{{route('ajax.cart.action',[
								  'type' => 'add',																				
								  'id' => $data_classess->id,
								  'name' => $data_classess->name,
								  'price' => $data_classess->price,
								  'foto' => $data_classess->getFoto()
								  ])}}')" class="btn btn-outline-light btn-block">Buy Now</a>
                    </div>

                </div><!-- class item -->
            </div>


            @empty
            no data
            @endforelse
        </div><!-- row -->


    </div><!-- container -->
</section><!-- classes -->
<!-- Classes End here -->

<!-- Classes Start here -->
<section id="event" class="classes padding-120">
    <div class="container">
        <div class="section-header">
            <h3>Our Popular Event</h3>
        </div>
        <div class="row">
            @forelse($event as $data_event)
            <div class="col-lg-4 col-sm-6 col-xs-12">
                <div class="class-item">
                    <div class="image">
                        <img src="{{$data_event->getFoto()}}" alt="class image" class="img-responsive">
                    </div>
                    <ul class="schedule">
                        <li style="width:100% !important">
                            <span>Price</span>
                            <span>{{$data_event->getPrice()}}</span>
                        </li>
                    </ul>
                    <div class="content text-center">
                        <h4><a href="#">{{$data_event->name}}</a></h4>
                    </div>
                    <div class="address">
                        <a href="javascript:;" onclick="cart_action('{{route('ajax.cart.action',[
								  'type' => 'add',																				
								  'id' => $data_event->id,
								  'name' => $data_event->name,
								  'price' => $data_event->price,
								  'foto' => $data_event->foto,
								  'isEvent' => $data_event->id
								  ])}}')" class="btn btn-outline-light btn-block">Buy Now</a>
                    </div>

                </div><!-- class item -->
            </div>

            @empty
            no data
            @endforelse
        </div><!-- row -->

    </div><!-- container -->
</section><!-- classes -->
<!-- Classes End here -->

<!-- Merchandise Start here -->
<section id="competition" class="classes padding-120">
    <div class="container">
        <div class="section-header">
            <h3>Our Popular Competition</h3>
        </div>
        <div class="row">
            @forelse($competition as $data_competition)
            <div class="col-lg-4 col-sm-6 col-xs-12">
                <div class="class-item">
                    <div class="image">
                        <img src="{{$data_competition->getFoto()}}" alt="class image" class="img-responsive">
                    </div>
                    <ul class="schedule">
                        <li style="width:100% !important">
                            <span>Category</span>
                            <span>{{$data_competition->type}}</span>
                        </li>
                    </ul>
                    <div class="content text-center">
                        <h4><a href="#">{{$data_competition->name}}</a></h4>
                    </div>
                    <div class="address">
                        <a href="{{route('competition.join',$data_competition->id)}}"
                            onclick="return confirm('Apakah anda yakin ingin ?')"
                            class="btn btn-outline-light btn-block">Join Competition</a>
                    </div>
                </div><!-- class item -->
            </div>

            @empty
            no data
            @endforelse
        </div><!-- row -->


    </div><!-- container -->
</section><!-- classes -->
<!-- Merchandise End here -->

<!-- Merchandise Start here -->
<section id="merchandise" class="classes padding-120">
    <div class="container">
        <div class="section-header">
            <h3>Our Popular Merchandise</h3>
        </div>
        <div class="row">
            @forelse($merchandise as $data_merchandise)
            <div class="col-lg-4 col-sm-6 col-xs-12">
                <div class="class-item">
                    <div class="image">
                        <img src="{{$data_merchandise->getFoto()}}" alt="class image" class="img-responsive">
                    </div>
                    <ul class="schedule">
                        <li style="width:100% !important">
                            <span>Price</span>
                            <span>{{$data_merchandise->getPrice()}}</span>
                        </li>
                    </ul>
                    <div class="content text-center">
                        <h4><a href="#">{{$data_merchandise->name}}</a></h4>
                    </div>
                    <div class="address">
                        <a href="javascript:;" onclick="cart_action('{{route('ajax.cart.action',[
								  'type' => 'add',																				
								  'id' => $data_merchandise->id,
								  'name' => $data_merchandise->name,
								  'price' => $data_merchandise->price,
								  'foto' => $data_merchandise->getFoto()
								  ])}}')" class="btn btn-outline-light btn-block">Buy Now</a>
                    </div>

                </div><!-- class item -->
            </div>


            @empty
            no data
            @endforelse
        </div><!-- row -->


    </div><!-- container -->
</section><!-- classes -->
<!-- Merchandise End here -->

<!-- Achievements Start here -->
<section class="achievements section-notch">
    <div class="overlay padding-120">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-12">
                    <div class="achievement-item">
                        <i class="icon flaticon-student"></i>
                        <span class="counter">{{$count_student}}</span><span>+</span>
                        <p>Total Students</p>
                    </div><!-- achievement item -->
                </div>
                <div class="col-md-3 col-sm-3 col-12">
                    <div class="achievement-item">
                        <i class="icon flaticon-construction"></i>
                        <span class="counter">{{$count_product}}</span>
                        <p>Packages</p>
                    </div><!-- achievement item -->
                </div>
                <div class="col-md-3 col-sm-3 col-12">
                    <div class="achievement-item">
                        <i class="icon flaticon-calendar"></i>
                        <span class="counter">{{$count_event}}</span>
                        <p>Event</p>
                    </div><!-- achievement item -->
                </div>
                <div class="col-md-3 col-sm-3 col-12">
                    <div class="achievement-item">
                        <i class="icon flaticon-people"></i>
                        <span class="counter">{{$count_activity}}</span>
                        <p>Activity</p>
                    </div><!-- achievement item -->
                </div>
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- overlay -->
</section><!-- achievements -->
<!-- Achievements End here -->
@endsection