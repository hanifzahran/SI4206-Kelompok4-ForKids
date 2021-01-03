<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{config('app.name')}}</title>
    <link href="/logo.png" rel="shortcut icon" type="image/vnd.microsoft.icon" />

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="/template/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font-awesome -->
    <link href="/template/assets/css/font-awesome.min.css" rel="stylesheet">

    <!-- Flaticon -->
    <link href="/template/assets/flaticon/flaticon.css" rel="stylesheet">

    <!-- lightcase -->
    <link href="/template/assets/css/lightcase.css" rel="stylesheet">

    <!-- Swiper -->
    <link href="/template/assets/css/swiper.min.css" rel="stylesheet">

    <!-- quick-view -->
    <link href="/template/assets/css/quick-view.css" rel="stylesheet">

    <!-- nstSlider -->
    <link href="/template/assets/css/jquery.nstSlider.css" rel="stylesheet">

    <!-- flexslider -->
    <link href="/template/assets/css/flexslider.css" rel="stylesheet">

    <!-- Style -->
    <link href="/template/assets/css/rtl.css" rel="stylesheet">

    <!-- Style -->
    <link href="/template/assets/css/style.css" rel="stylesheet">

    <!-- Responsive -->
    <link href="/template/assets/css/responsive.css" rel="stylesheet">

   
</head>


<body id="scroll-top">

    <!-- header End here -->
    @yield('content')
    <!-- Footer Start here -->
    <footer>

        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <p>&copy; {{date('Y')}}. By <a href="{{url('/')}}">{{config('app.name')}}</a></p>
                    </div>
                  
                </div><!-- row -->
            </div><!-- container -->
        </div><!-- footer bottom -->
    </footer>
    <a class="page-scroll scroll-top" href="#scroll-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
    <!-- Footer End here -->


    <!-- jquery -->
    <script src="/template/assets/js/jquery-1.12.4.min.js"></script>

    <!-- Bootstrap -->
    <script src="/template/assets/js/bootstrap.min.js"></script>

    <!-- Isotope -->
    <script src="/template/assets/js/isotope.min.js"></script>

    <!-- lightcase -->
    <script src="/template/assets/js/lightcase.js"></script>

    <!-- counterup -->
    <script src="/template/assets/js/waypoints.min.js"></script>
    <script src="/template/assets/js/jquery.counterup.min.js"></script>

    <!-- Swiper -->
    <script src="/template/assets/js/swiper.jquery.min.js"></script>

    <!--progress-->
    <script src="/template/assets/js/circle-progress.min.js"></script>

    <!--velocity-->
    <script src="/template/assets/js/velocity.min.js"></script>

    <!--quick-view-->
    <script src="/template/assets/js/quick-view.js"></script>

    <!--nstSlider-->
    <script src="/template/assets/js/jquery.nstSlider.js"></script>

    <!--flexslider-->
    <script src="/template/assets/js/flexslider-min.js"></script>

    <!--easing-->
    <script src="/template/assets/js/jquery.easing.min.js"></script>

    <!-- custom -->
    <script src="/template/assets/js/custom.js"></script>
    @yield('js')

    <script>
        $(document).ready(function() {
            cart_show();
        });

        function cart_show() {
            $("#cart-show").load("{{route('ajax.cart.view')}}");
        }

        function cart_action(url) {
            $.ajax({
                url:url,
                type:'GET',
                dataType:'html',
                success:function(data) {
                    cart_show();
                },
                error:function() {
                    console.log('terjadi kesalahan');
                }
            });
        }
    </script>
</body>

</html>
