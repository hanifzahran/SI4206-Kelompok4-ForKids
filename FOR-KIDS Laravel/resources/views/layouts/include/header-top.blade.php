<div class="header-top">
    <div class="container">
        <div class="row ht-area">
            <ul class="left">

            </ul>

            <ul class="right">
                @auth
                <li class="border-right pr-2"><a href="#">Hai,
                        <b>{{explode(' ',Auth::user()->name)[0] ?? Auth::user()->name }}</b></a></li>
                @if(Request::segment(1) !="home")
                <li><a href="{{url('/')}}">Halaman Utama</a></li>
                @endif

                @if(Auth::user()->isAdmin == 1 OR Auth::user()->isParent == 1)
                <li><a href="{{route('panel.home')}}">Halaman {{Auth::user()->getRole()}}</a></li>
                @else
                <li><a href="{{route('panel.child')}}">Halaman {{Auth::user()->getRole()}}</a></li>
                @endif
                <!-- <li><a href="/">Setting</a></li> -->
                <li><a href="{{route('logout')}}">Logout</a></li>
                @else
                <li>
                    <a href="{{route('login')}}"><span class="fa fa-sign-in"></span> Login </a>
                </li>
                @endauth
            </ul>
        </div>
    </div>
</div>