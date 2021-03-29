@extends('web.layouts.app')

@section('content')
<!-- /Registration Form -->
<div id="nav-registration" class="modal fade">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Register</h4>
            </div>
            <div class="modal-body">
                <form action="#" method="post">
                    <div>
                        <p>Username:</p>
                        <div class="youplay-input">
                            <input type="text" name="user_login" />
                        </div>

                        <p>E-mail:</p>
                        <div class="youplay-input">
                            <input type="text" name="user_email" />
                        </div>

                        <p>
                            <em>A password will be e-mailed to you.</em>
                        </p>
                        <button class="btn ml-3" name="submit">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="content-wrap">
    <section class="youplay-banner banner-top youplay-banner-parallax">
        <div class="banner">
            @foreach ($banners as $banner)
            <div class="image" data-speed="0.4">
                <img src="{{ asset('storage/banner/'. $banner->img) }}" alt="" class="jarallax-img">
            </div>
            <div class="info">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <h1 class="h1">{{$banner->short_text}}</h1>
                            <h5 class="lead">
                                {!!$banner->description!!}
                            </h5>
                            <br>
                            <a href="{{$banner->link}}" class="btn btn-md active">  <i class="fa fa-eye"></i>&nbsp; {{$banner->text_link}}</a>
                            <a class="btn btn-md" href="#">
                                <i class="fa fa-shopping-cart"></i>&nbsp; Purchase
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    <!-- /Banner -->

    <!-- Features -->
    <section class="youplay-features container mt-60 mb-30">
        <div class="col-sm-4">
            <div class="feature angled-bg">
                <i class="fa fa-rss"></i>
                <h3>Blog</h3>
                <div>
                    Youplay can be used for simple blogging, not only full-stack gaming template.
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="feature angled-bg">
                <i class="fa fa-shopping-cart"></i>
                <h3>Store</h3>
                <div>
                    If you want to sale goods, let's do it. This is so easy with Youplay.
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="feature angled-bg">
                <i class="fa fa-users"></i>
                <h3>Social Network</h3>
                <div>
                    Build your gaming social network, or forum for Clan members.
                </div>
            </div>
        </div>
    </section>
    <!-- /Features -->

    <!-- Demo -->
    <h2 class="text-center mt-60 fs-40" id="demo">Youplay Comes with 4 Demo</h2>
    <div class="container mt-60 mb-120">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="row vertical-gutter">
                    <div class="col-sm-6">
                        <a href="dark-index.html" target="_blank"><img src="{{ asset('webs/images/demo-dark.jpg') }}" alt=""></a>
                        <h4 class="text-center mt-20">Dark <small>demo</small></h4>
                    </div>
                    <div class="col-sm-6">
                        <a href="shooter-index.html" target="_blank"><img src="{{ asset('webs/images/demo-shooter.jpg') }}" alt=""></a>
                        <h4 class="text-center mt-20">Shooter <small>demo</small></h4>
                    </div>
                    <div class="col-sm-6">
                        <a href="anime-index.html" target="_blank"><img src="{{ asset('webs/images/demo-anime.jpg') }}" alt=""></a>
                        <h4 class="text-center mt-20">Anime <small>demo</small></h4>
                    </div>
                    <div class="col-sm-6">
                        <a href="light-index.html" target="_blank"><img src="{{ asset('webs/images/demo-light.jpg') }}" alt=""></a>
                        <h4 class="text-center mt-20">Light <small>demo</small></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Demo -->

    <!-- Realistic Battles -->
    <section class="youplay-banner youplay-banner-parallax big">
        <div class="image" data-speed="0.4">
            <img class="jarallax-img" src="{{ asset('webs/images/dark/game-dark-souls-ii-1920x1080.jpg') }}" alt="">
        </div>
        <div class="info">
            <div>
                <div class="container">
                    <h2 class="fs-40 mt-45">A Bit More Features</h2>
                    <br>
                    <div class="youplay-features">
                        <div class="col-sm-4">
                            <div class="feature angled-bg">
                                <i class="fa fa-exclamation-triangle"></i>
                                <h3>Clan Wars</h3>
                                <div>
                                    Manage battles in the games. Add teams and fights.
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="feature angled-bg">
                                <i class="fa fa-clock"></i>
                                <h3>Coming Soon</h3>
                                <div>
                                    Use coming soon page with countdown before release feature or service.
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="feature angled-bg">
                                <i class="fa fa-paper-plane"></i>
                                <h3>AJAX Contact Form</h3>
                                <div>
                                    Everyone can contact you through user friendly ajax form.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Realistic Battles -->

    <!-- The True Emotions -->
    <section class="container mt-120">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="fs-40 mt-0">Have Any Questions?</h2>
                <p class="lead">Youplay comes with documentation. See it here -
                    <a href="#" target="_blank">https://nkdev.info/docs/youplay-html/</a>
                </p>
                <p class="lead">Also we provide support for our users through ticket system -
                    <a href="#" target="_blank">https://nk.ticksy.com/</a>
                </p>
            </div>
        </div>
    </section>
    <!-- /The True Emotions -->

    <!-- Preorder -->
    <section class="youplay-banner youplay-banner-parallax big mt-120">
        <div class="image" data-speed="0.4">
            <img class="jarallax-img" src="assets/images/dark/game-bloodborne-1920x1151.jpg" alt="">
        </div>
        <div class="info container align-center">
            <div>
                <h2>Purchase Today for $23</h2>
                <em class="date">If you interested in WordPress version, see it here -
                    <a href="#">https://themeforest.net/item/youplay-gaming-wordpress-theme/11959042</a></em>
                <br><br><br><br>
                <a class="btn btn-lg" href="#">Purchase</a>
            </div>
        </div>
    </section>
    <!-- /Preorder -->
</div>
@endsection
