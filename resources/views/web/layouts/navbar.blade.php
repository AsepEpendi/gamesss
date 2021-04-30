@php
    $logo=asset(Storage::url('logo/'));
    $profile=asset(Storage::url('avatar/'));
    $users=\Auth::user();
@endphp
<nav class="navbar-youplay navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="off-canvas" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{$logo.'/logo.png'}}" alt="">
            </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class=" dropdown dropdown-hover">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> Store
                        <span class="caret"></span>
                        <span class="label">gamesss</span>
                    </a>
                    <div class="dropdown-menu">
                        <ul role="menu">
                            <li>
                                <a href="#">
                                    Store Style 1
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Store Style 2
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Cart
                                </a>
                            </li>

                        </ul>

                        <ul role="menu">
                            <li>
                                <a href="#">
                                    Product Style1
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Product Style 2
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Checkout
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class=" dropdown dropdown-hover">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> Blog
                        <span class="caret"></span>
                        <span class="label">news</span>
                    </a>
                    <div class="dropdown-menu">
                        <ul role="menu">
                            <li>
                                <a href="#">
                                    Blog Style 1
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Blog Style 2
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Blog Style 3
                                </a>
                            </li>
                        </ul>

                        <ul role="menu">
                            <li>
                                <a href="#">
                                    Blog Post 1
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Blog Post 2
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Blog Post 3
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class=" dropdown dropdown-hover">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> Features
                        <span class="caret"></span>
                        <span class="label">full list</span>
                    </a>
                    <div class="dropdown-menu">
                        <ul role="menu">
                            <li>
                                <a href="#">
                                    Forums
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Forums Topics
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Forums Single Topic
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('web.matches') }}">
                                    Matches List
                                </a>
                            </li>
                            {{-- <li>
                                <a href="{{ route('web.match') }}">
                                    Match
                                </a>
                            </li> --}}
                            <li>
                                <a href="#">
                                    Match with Maps
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('login') }}">
                                    Login
                                </a>
                            </li>
                        </ul>

                        <ul role="menu">
                            <li>
                                <a href="#">
                                    Widgets
                                    <span class="badge bg-default">New</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Components
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Coming Soon
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Contact Us
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Search
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    404
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Blank
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li class=" dropdown dropdown-hover">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> Username
                        <span class="badge bg-default">8</span>
                        <span class="caret"></span>
                        <span class="label">user</span>
                    </a>
                    <div class="dropdown-menu">
                        <ul role="menu">
                            <li>
                                <a href="#">
                                    Activity
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Profile
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Messages
                                    <span class="badge bg-default">8</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Messages Compose
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Settings
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Documentation
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Purchase
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a class="search-toggle" href="#">
                        <i class="fa fa-search"></i>
                    </a>
                </li>

                <li class="dropdown dropdown-hover dropdown-cart">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <i class="fa fa-shopping-cart"></i>
                    </a>
                    <div class="dropdown-menu">
                        <div class="row youplay-side-news">
                            <div class="col-xs-3 col-md-4">
                                <a href="#" class="angled-img">
                                    <div class="img">
                                        <img src="{{ asset('webs/images/dark/game-bloodborne-500x375.jpg') }}" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-9 col-md-8">
                                <a href="#" class="pull-right mr-10"><i class="fa fa-times"></i></a>
                                <h4 class="ellipsis"><a href="#">Bloodborne</a></h4>
                                <span class="quantity">1 × <span class="amount">$50.00</span></span>
                            </div>
                        </div>

                        <div class="row youplay-side-news">
                            <div class="col-xs-3 col-md-4">
                                <a href="#" class="angled-img">
                                    <div class="img">
                                        <img src="{{ asset('webs/images/dark/game-kingdoms-of-amalur-reckoning-500x375.jpg') }}" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-9 col-md-8">
                                <a href="#" class="pull-right mr-10"><i class="fa fa-times"></i></a>
                                <h4 class="ellipsis"><a href="#">Kingdoms of Amalur</a></h4>
                                <span class="quantity">1 × <span class="amount">$20.00</span></span>
                            </div>
                        </div>

                        <div class="ml-20 mr-20 pull-right"><strong>Subtotal:</strong>
                            <span class="amount">$70.00</span>
                        </div>

                        <div class="btn-group pull-right m-15">
                            <a href="#" class="btn btn-default btn-sm">View Cart</a>
                            <a href="#" class="btn btn-default btn-sm">Checkout</a>
                        </div>
                    </div>
                </li>

                <li class="dropdown dropdown-hover dropdown-user">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true">
                        <i class="fa fa-user"></i>
                        <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu">
                        <form class="navbar-login-form" action="#" method="post">
                            <p>Email-Address:</p>
                            <div class="youplay-input">
                                <input type="text" name="log">
                            </div>

                            <p>Password:</p>
                            <div class="youplay-input">
                                <input type="password" name="pwd">
                            </div>

                            <div class="youplay-checkbox mb-15 ml-5">
                                <input type="checkbox" name="rememberme" value="forever" id="nav-rememberme">
                                <label for="nav-rememberme">Remember Me</label>
                            </div>

                            <button class="btn btn-sm ml-0 mr-0" name="submit">Log In</button>
                            <br>
                            <p>
                                <a class="no-fade" href="#">Forgot password?</a> |
                                <a href="#" class="no-fade" data-toggle="modal" data-target="#nav-registration">Register</a>
                            </p>
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
