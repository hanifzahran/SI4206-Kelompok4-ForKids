<!-- Preloader start here -->
<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
<!-- Preloader end here -->
<header>
    @include('layouts.include.header-top')

    <!-- mobile menu start here -->
    <div class="mobile-menu-area">
        <div class="logo-area">
            <a class="logo" href="{{url('/')}}"><img src="/logo.png" alt="logo" width="100" class="img-responsive"></a>
            <button type="button" class="navbar-toggle collapsed d-md-none" data-toggle="collapse"
                data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <div class="mobile-menu">
            <ul class="m-menu">
                <li class="dropdown">
                    <a href="{{url('/')}}">Home</a>
                </li>
                <li class="dropdown">
                    <a href="#packages">Packages</a>
                </li>
                <li class="dropdown">
                    <a href="#event">Event</a>
                </li>
                <li class="dropdown">
                    <a href="#competition">Competition</a>
                </li>
                <li class="dropdown">
                    <a href="#merchandise">Merchandise</a>
                </li>

                @auth
                <li class="dropdown-submenu">
                    <a href="#"><span class="fa fa-user"></span> {{Auth::user()->name}}</a>
                    <ul class="mobile-submenu">
                        @if(Auth::user()->isAdmin == 1 OR Auth::user()->isParent == 1)
                        <li><a href="{{route('panel.home')}}">Halaman {{Auth::user()->getRole()}}</a></li>
                        @endif
                        <li><a href="/">Setting</a></li>
                        <li><a href="{{route('logout')}}">Logout</a></li>
                    </ul>
                </li>
                @else
                <li class="dropdown">
                    <a href="{{route('login')}}">Login</a>
                </li>
                @endauth
            </ul>
        </div>

    </div>
    <!-- mobile menu ending here -->


    <div class="main-menu">
        <div class="container">
            <div class="row no-gutters">
                <nav class="main-menu-area w-100">
                    <div class="logo-area">
                        <a class="" href="{{url('/')}}"><img src="/logo.png" alt="logo" width="100"
                                class="img-responsive"></a>
                        <button type="button" class="navbar-toggle collapsed d-md-none" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <div class="menu-area">
                        <div id="cart-show"></div>

                        <ul class="menu">
                            <li class="dropdown">
                                <a href="{{url('/')}}">Home</a>
                            </li>
                            <li class="dropdown">
                                <a href="#packages">Packages</a>
                            </li>
                            <li class="dropdown">
                                <a href="#event">Event</a>
                            </li>
                            <li class="dropdown">
                                <a href="#competition">Competition</a>
                            </li>
                            <li class="dropdown">
                                <a href="#merchandise">Merchandise </a>
                            </li>
                        </ul>

                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
