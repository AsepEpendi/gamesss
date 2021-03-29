<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    @php
    $logo=asset(Storage::url('logo/'));
    @endphp
    @section('page-title')
    {{__('Login')}}
    @endsection
    @include('web.layouts.head')
</head>
<body>
    @include('web.layouts.navbar')
    <!-- Begin page -->
    {{-- <div class="accountbg"></div>
            <div class="wrapper-page">
                <div class="card card-pages shadow-none">
                    <div class="card-body">
                        <div class="text-center m-t-0 m-b-15">
                            <a href="#" class="logo logo-admin">
                                <span><img class="img-fluid logo-img" src="{{$logo.'/logo.png'}}" alt="image"
    height="80"></span>
    </a>
    </div>
    <h5 class="font-18 text-center">Sign in to continue to focustindo</h5>
    <form method="POST" action="{{ route('login') }}" class="form-horizontal m-t-30">
        @csrf
        <div class="form-group">
            <div class="col-12">
                <label for="email">{{ __('E-Mail Address') }}</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="off" autofocus>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <div class="col-12">
                <label for="password">{{ __('Password') }}</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="current-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="form-group text-center m-t-20">
            <div class="col-12">
                <button class="btn btn-primary btn-block btn-lg waves-effect waves-light" type="submit">Log In</button>
            </div>
        </div>
    </form>
    </div>
    </div>
    </div>"> --}}
<div class="content-wrep">
<section class="youplay-banner banner-top youplay-banner-parallax full">
    <div class="image" data-speed="0.4">
        <img src="{{ asset('webs/images/dark/banner-bg.jpg')}}" alt="" class="jarallax-img">
    </div>
    <div class="info">
            <div class="container">
                <div class="youplay-login">
                    <div class="youplay-form text-center">
                        <h1>Login</h1>
                        <div class="btn-group social-list dib">
                            <a class="btn btn-default" title="Share on Facebook" href="#"><i class="fab fa-facebook"></i></a>
                            <a class="btn btn-default" href="#" title="Share on Twitter"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-default" href="#" title="Share on Google Plus"><i class="fab fa-google-plus"></i></a>
                        </div>

                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="youplay-input">
                                <input type="email" name="email" id="email" placeholder="Email">
                            </div>
                            <div class="youplay-input">
                                <input type="password" name="password" id="password" placeholder="Password">
                            </div>
                            <button class="btn btn-default db">Login</button>
                        </form>
                    </div>
                </div>
            </div>
    </div>
</section>
    @include('web.layouts.footer')
</div>
    <!-- jQuery  -->
    @include('web.layouts.script')
</body>

</html>
