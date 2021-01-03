<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8" />
<title>{{config('app.name')}} | Halaman Utama</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="{{env('DESC')}}" name="description" />
<meta content="{{env('AUTHOR')}}" name="author" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<!-- App favicon -->
<link rel="shortcut icon" href="{{env('APP_ICON')}}">

<!-- third party css -->
<link href="/template_admin/assets/libs/datatables/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" />
<link href="/template_admin/assets/libs/datatables/responsive.bootstrap4.css" rel="stylesheet" type="text/css" />
<!-- third party css end -->
<link href="/template_admin/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet"
    type="text/css" />

<!-- App css -->
<link href="/template_admin/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="/template_admin/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
<link href="/template_admin/assets/css/app.min.css" rel="stylesheet" type="text/css" />
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous"></script>

<style>
    .cta-box:hover {
        opacity: .8;
        background: #000;
        background-blend-mode: overlay;
        transition: 1s
    }

    .scroll {
        max-height: 500px;
        overflow-y: auto;
    }

    .blockquote {
        padding: 10px 20px;
        margin-bottom: 20px;
        border-left: 4px solid #dee2e6;
    }

    @media screen and (max-width:780px) {
        .scroll {
            max-height: 400px;
            overflow-y: auto;
        }
    }

</style>
</head>

<body class="left-side-menu-light">

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Topbar Start -->
        <div class="navbar-custom">
            <ul class="list-unstyled topnav-menu float-right mb-0">

                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#"
                        role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="/template_admin/assets/images/users/user-1.jpg" alt="user-image"
                            class="rounded-circle">
                        <span class="pro-user-name ml-1">
                            {{Auth::user()->name ?? ''}}. <i class="mdi mdi-chevron-down"></i>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                        <!-- item-->
                        <div class="dropdown-item noti-title">
                            <h5 class="m-0 text-white">
                                Welcome !
                            </h5>
                        </div>

                        <!-- item-->
                        {{--<a href="{{route('setting')}}" class="dropdown-item notify-item">
                        <i class="fe-settings"></i>
                        <span>Settings</span>
                        </a>

                        <div class="dropdown-divider"></div>--}}

                        <!-- item-->
                        <a href="{{route('logout')}}" class="dropdown-item notify-item">
                            <i class="fe-log-out"></i>
                            <span>Logout</span>
                        </a>

                    </div>
                </li>


            </ul>

            <!-- LOGO -->
            <div class="logo-box">
                <a href="{{route('home')}}" class="logo text-center">
                    <span class="logo-lg">
                        <!-- <img src="/template_admin/assets/images/logo-light.png" alt="" height="24"> -->
                        <span class="logo-lg-text-light">{{config('app.name')}}</span>
                    </span>

                </a>
            </div>

            <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                <li>
                    <button class="button-menu-mobile waves-effect">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </li>

            </ul>
        </div>
        <!-- end Topbar -->

        <!-- ========== Left Sidebar Start ========== -->
        <div class="left-side-menu">

            <div class="slimscroll-menu">

                <!--- Sidemenu -->
                <div id="sidebar-menu">

                    <ul class="metismenu" id="side-menu">

                        <li class="menu-title">Utama</li>

                        <li>
                            <a href="{{url('/panel')}}">
                                <i class="la la-home"></i>
                                <span> Halaman Utama </span>
                            </a>
                        </li>

                        <li class="menu-title mt-2">navigasi</li>
                        <li>
                            <a href="{{route('game.index')}}">
                                <i class="la la-book"></i>
                                <span> Game </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('video.index')}}">
                                <i class="la la-book"></i>
                                <span> Video </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('dongeng.index')}}">
                                <i class="la la-book"></i>
                                <span> Dongeng </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('product.index')}}">
                                <i class="la la-book"></i>
                                <span> Product </span>
                            </a>
                        </li>

                        <li>
                            <a href="{{route('merchandise.index')}}">
                                <i class="la la-book"></i>
                                <span> Merchandise </span>
                            </a>
                        </li>

                        <li>
                            <a href="{{route('event.index')}}">
                                <i class="la la-book"></i>
                                <span> Event </span>
                            </a>
                        </li>

                        <li>
                            <a href="{{route('competition.index')}}">
                                <i class="la la-book"></i>
                                <span> Competition </span>
                            </a>
                        </li>

                        <li>
                            <a href="{{route('competition.evaluation')}}">
                                <i class="la la-book"></i>
                                <span> Evaluation </span>
                            </a>
                        </li>

                        <li>
                            <a href="{{route('transaksi.index')}}">
                                <i class="la la-book"></i>
                                <span> Transaksi </span>
                            </a>
                        </li>

                      

                    </ul>

                </div>
                <!-- End Sidebar -->

                <div class="clearfix"></div>

            </div>
            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a
                                                href="javascript: void(0);">{{config('app.name')}}</a>
                                        </li>
                                        @if(Request::segment(1) == TRUE)
                                        <li class="breadcrumb-item active text-capitalize">
                                            {{Request::segment(1) == "admin" ? "Admin Dashboard" : str_replace('-',' ',Request::segment(1))}}
                                        </li>
                                        @endif
                                        @if(Request::segment(2) == TRUE)
                                        <li class="breadcrumb-item">{{str_replace('-',' ',Request::segment(2))}}</li>
                                        @endif
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>

                    @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <ul style="margin-bottom:0px;">
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        {{ session('success') }}
                    </div>
                    @endif
                    @if (session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        {{ session('error') }}
                    </div>
                    @endif
                    @yield('content')

                    <!-- end row -->

                </div> <!-- container -->

            </div> <!-- content -->
            <div class="modal fade" id="tampil-modal">
                <div class="modal-dialog">
                    <div class="modal-content modal-primary">
                        <div class="modal-header text-capitalize">
                            <h5 class="modal-title">Detail Data</h5>
                            <a href="javascript:;" data-dismiss="modal" class="close"></a><i class="fa fa-times"></i>
                        </div>
                        <div class="modal-body table-responsive" id="tampil-modal-body"></div>
                    </div>
                </div>
            </div>
            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            2020 &copy; {{config('app.name')}}
                        </div>

                    </div>
                </div>
            </footer>
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->


    <!-- Vendor js -->
    <script src="/template_admin/assets/js/vendor.min.js"></script>
    <script src="/template_admin/assets/libs/moment/moment.min.js"></script>
    <script src="/template_admin/assets/libs/chart-js/Chart.bundle.min.js"></script>
    <!-- Third Party js-->
    <script src="/template_admin/assets/libs/jquery-knob/jquery.knob.min.js"></script>
    <script src="/template_admin/assets/libs/peity/jquery.peity.min.js"></script>
    <script src="/template_admin/assets/libs/apexcharts/apexcharts.min.js"></script>
    <script src="/template_admin/assets/libs/datatables/jquery.dataTables.min.js"></script>
    <script src="/template_admin/assets/libs/datatables/dataTables.bootstrap4.js"></script>
    <script src="/template_admin/assets/libs/datatables/dataTables.responsive.min.js"></script>
    <script src="/template_admin/assets/libs/datatables/responsive.bootstrap4.min.js"></script>
    <!-- third party js ends -->

    <!-- Dashboard init -->
    <script src="/template_admin/assets/js/pages/dashboard-2.init.js"></script>
    <script src="/template_admin/assets/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.js"></script>
    <script src="/template_admin/assets/libs/clockpicker/bootstrap-clockpicker.min.js"></script>
    <script src="/template_admin/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="/template_admin/assets/libs/daterangepicker/daterangepicker.js"></script>

    <!-- Init js-->
    <script src="/template_admin/assets/js/pages/form-pickers.init.js"></script>
    <!-- App js -->
    <script src="/template_admin/assets/js/app.min.js"></script>
    <script src="/template_admin/assets/libs/daterangepicker/daterangepicker.js"></script>

    @yield('datatable')
    <script type="text/javascript">
        function form(url) {
            $("#tampil-modal").modal();
            $.ajax({
                url: url,
                type: 'GET',
                dataType: 'html',
                success: function (data) {
                    $("#tampil-modal-body").html(data);
                },
                beforeSend: function () {
                    $("#tampil-modal-body").html("Sedang Memuat...");
                },
                error: function () {
                    $("#tampil-modal-body").html("Terjadi Kesalahan...");
                }

            });
        }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.4/clipboard.min.js"></script>
    <script>
        new ClipboardJS('.btn');
        $("#json-table").DataTable();
    </script>
    @yield('js')

</body>


</html>
