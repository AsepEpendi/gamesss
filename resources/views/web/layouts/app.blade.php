<!DOCTYPE html>
<html lang="en">

<head>
    @include('web.layouts.head')
</head>

<body>

    <!-- Preloader -->
    {{-- <div class="page-preloader preloader-wrapp">
        <img src="{{ asset('webs/images/logo-light.png') }}" alt="">
        <div class="preloader"></div>
    </div> --}}
    <!-- /Preloader -->

    <!-- Navbar -->
    @include('web.layouts.navbar')
    <!-- /Navbar -->
    @yield('content')
    <!-- Footer -->
    @include('web.layouts.footer')
    <!-- /Footer -->

    <!-- Search Block -->
    <div class="search-block">
        <a href="#" class="search-toggle">
            <i class="fa fa-times"></i>
        </a>
        <form action="search.html">
            <div class="youplay-input">
                <input type="text" name="search" placeholder="Search...">
            </div>
        </form>
    </div>
    <!-- /Search Block -->

    <!-- START: Scripts -->
    @include('web.layouts.script')
    <!-- END: Scripts -->
</body>
</html>
