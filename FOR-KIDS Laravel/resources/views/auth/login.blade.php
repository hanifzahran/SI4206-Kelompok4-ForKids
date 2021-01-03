@extends('layouts.app')
@section('content')

    <!-- Page Header Start here -->
    <section class="page-header section-notch">
      <div class="overlay">
        <div class="container">
          <h3>Login</h3>
          <ul>
            <li><a href="{{url('/')}}">Home</a></li>
            <li>-</li>
            <li>Login</li>
          </ul>
        </div><!-- container -->
      </div><!-- overlay -->
    </section><!-- page header -->
      <!-- Page Header End here -->
      
<div class="d-flex justify-content-center mt-5">
    <div class="card w-50 shadow">
        <!-- <img class="card-img-top shadow" src="/template/img/gambar1.jpg" alt="gambar 1" style="width:100%"> -->
        <hr>
        <!-- Awal card login -->
        <center>
            <h3 style="color: goldenrod;">Login</h3>
            <h6 style>FOR-KIDS</h6>
        </center>
        <div class="card-body">
            <form action="{{route('login')}}" method="POST">
                @csrf
                <div class="rapikanform" style="padding: 10px;">
                    <div class="form-group">
                        <label for="email">Email address :</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                            placeholder="masukan email anda" id="email" name="email">
                        @error('email')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password :</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                            placeholder="masukan password anda" id="pwd" name="password">
                        @error('password')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="remember"> Remember me?
                        </label>
                    </div>
                </div>
                <center><button type="submit" class="btn btn-primary" name="login">Login</button></center>
                <br>
                <center>
                    <p>Belum punya akun? <a href="{{route('register')}}">Registrasi</a></p>
                </center>
            </form>
        </div>
        <!-- AKhir card login -->
    </div>
</div>
<div class="pb-4"></div>
@endsection
