@php
    $logo=asset(Storage::url('logo/'));
    $profile=asset(Storage::url('avatar/'));
    $users=\Auth::user();
@endphp
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Gamesss - @yield('page-title')</title>

    <meta name="description" content="Gamesss - Gaming HTML Template based on Bootstrap">
    <meta name="keywords" content="gaming, game, community, template, html, bootstrap, webpack">
    <meta name="author" content="nK">

    <link rel="icon" type="image/png" href="{{$logo.'/small_logo.png'}}">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- START: Styles -->

    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('webs/vendor/bootstrap/dist/css/bootstrap.min.css') }}" />

    <!-- Flickity -->
    <link rel="stylesheet" href="{{ asset('webs/vendor/flickity/dist/flickity.min.css') }}" />

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('webs/vendor/magnific-popup/dist/magnific-popup.css') }}" />

    <!-- Revolution Slider -->
    <link rel="stylesheet" href="{{ asset('webs/vendor/slider-revolution/css/settings.css') }}">
    <link rel="stylesheet" href="{{ asset('webs/vendor/slider-revolution/css/layers.css') }}">
    <link rel="stylesheet" href="{{ asset('webs/vendor/slider-revolution/css/navigation.css') }}">

    <!-- Bootstrap Sweetalert -->
    <link rel="stylesheet" href="{{ asset('webs/vendor/bootstrap-sweetalert/dist/sweetalert.css') }}" />

    <!-- Social Likes -->
    <link rel="stylesheet" href="{{ asset('webs/vendor/social-likes/dist/social-likes_flat.css') }}" />

    <!-- FontAwesome -->
    
    <!-- Youplay -->
    <link rel="stylesheet" href="{{ asset('webs/css/youplay.css') }}">

    <!-- RTL (uncomment this to enable RTL support) -->
    <!-- <link rel="stylesheet" href="assets/css/youplay-rtl.min.css" /> -->

    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{ asset('webs/css/custom.css') }}">

    <!-- END: Styles -->

    <!-- jQuery -->

