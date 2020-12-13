<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>For Kids</title>

    <!-- Scripts -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />

    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css" />

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

</head>

<body style="background-color: yellow" ;>
    <!-- Awal navbar -->
    <nav class="navbar navbar-expand-md navbar-black bg-white shadow-sm">
        <div class="container">
            <!-- navbar brand -->
            <a class="navbar-brand" href="{{ url('/') }}">

                <b>Admin For-KIDS</b>
            </a>
            <!-- akhir navbar brand -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav ml-auto">

                    <li>
                        <a href="/" class="nav-link">Home</a>
                    </li>
                    <li>
                        <a href="{{route('product.index')}}" class="nav-link">Add Package</a>
                    </li>
                    <li>
                        <a href="{{route('order.index')}}" class="nav-link">View Order</a>
                    </li>
                    <!-- <li>
                        <a href="{{route('order.history')}}" class="nav-link">History</a>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- akhir navbar -->
    <main class="py-4">
        <div class="container">
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
        </div>
        @yield('content')
    </main>
    <script src="/ckeditor/ckeditor.js"></script>
    <script src="/ckeditor/adapters/jquery.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>

    <script>
    $("#table").DataTable();
    $(document).ready(function() {

        $('textarea').ckeditor();

    });
    </script>

</body>

</html>