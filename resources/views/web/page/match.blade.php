@extends('web.layouts.app')

@section('page-title')
{{__('Match')}}
@endsection

@section('content')
<div class="content-wrap">
    <section class="youplay-banner banner-top youplay-banner-parallax">
        <div class="image" data-speed="0.4">
            <img src="webs/images/dark/game-diablo-iii-1400x656.jpg" alt="" class="jarallax-img">
        </div>

        <div class="info">
            <div class="container">
                <div class="pt-40 pb-40">

                    <div class="row">
                        <div class="col-xs-12 text-center">
                            <h1>The International 2015</h1>
                            {{-- @foreach ($schedule as $jadwal) --}}
                            <div class="h5 mnt-10 mb-40">{{$schedule->schedule_date}}</div>
                            {{-- @endforeach --}}
                        </div>
                    </div>
                    {{-- @foreach ($schedule as $item) --}}
                    <div class="row">
                        <div class="col-md-5">
                            <div class="youplay-match-left">
                                <div class="youplay-match">
                                    <div class="youplay-match-data text-right">
                                        <h3>{{$schedule->enemy_team->name}}</h3>
                                    </div>
                                    <div class="angled-img">
                                        <div class="img">
                                            <img src="{{ asset('storage/e-sport-team/'.$schedule->enemy_team->logo)}}" alt="Youplay">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 text-center">
                            <div class="youplay-match-vs">
                                <span>0 : 0</span>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="youplay-match-right">
                                <div class="youplay-match">
                                    <div class="angled-img">
                                        <div class="img">
                                            <img src="{{ asset('storage/e-sport-team/'.$schedule->team_esport->logo)}}" alt="Team Secret">
                                        </div>
                                    </div>
                                    <div class="youplay-match-data">
                                        <h3>{{$schedule->team_esport->name}}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- @endforeach --}}
                </div>
            </div>
        </div>
    </section>
    <!-- /Banner -->
    <div class="container youplay-content">

        <div class="row">

            <div class="col-md-9">
                @foreach ($schedule as $desc)
                <h2 class="mt-0">Description</h2>
                <p>{!! $desc->description !!}</p>
                @endforeach

                <!-- Post Comments -->
                <div class="comments-block">
                    <h3>Comments <small>(1)</small></h3>

                    <!-- Comment Form -->
                    <form action="#" class="comment-form">
                        <div class="comment-avatar pull-left">
                            <img src="webs/images/dark/avatar.png" alt="">
                        </div>
                        <div class="comment-cont clearfix">
                            <div class="youplay-input">
                                <input type="text" name="username" placeholder="Your Name *">
                            </div>
                            <div class="youplay-input">
                                <input type="email" name="email" placeholder="Your Email *">
                            </div>
                            <div class="youplay-textarea">
                                <textarea name="message" rows="5" placeholder="Your Comment..."></textarea>
                            </div>
                            <button class="btn btn-default pull-right">Submit</button>
                        </div>
                    </form>
                    <!-- /Comment Form -->

                    <!-- Comments List -->
                    <ul class="comments-list">
                        <!-- Kristen Bradley comment -->
                        <li>
                            <article>
                                <div class="comment-avatar pull-left">
                                    <img src="webs/images/dark/avatar-user-1.png" alt="">
                                </div>
                                <div class="comment-cont clearfix">
                                    <a class="comment-author h4" href="#">Kristen Bradley</a>
                                    <div class="date"><i class="fa fa-calendar"></i> 25 minutes ago</div>
                                    <div class="comment-text">
                                        Ludum mutavit. Verbum est ex. Et ... sunt occidat. Videtur quod est super omne
                                        oppidum. Quis transfretavit tu iratus es contudit cranium cum dolor apparatus.
                                        Qui
                                        curis! Modo nobis certamen est, qui non credunt at.
                                    </div>
                                    <a href="#" class="pull-right">Reply</a>
                                </div>
                            </article>
                        </li>
                        <!-- /Kristen Bradley comment -->
                    </ul>
                    <!-- /Comments List -->
                </div>
                <!-- /Post Comments -->
            </div>

            <!-- Right Side -->
            <div class="col-md-3">

                <!-- Next Match -->
                <div class="side-block">
                    <h4 class="block-title">Next Match</h4>
                    <div class="block-content">
                        <a class="youplay-match-widget" href="#">
                            <h3 class="youplay-match-title">Game Show GEC</h3>
                            <div class="date mb-15">27th March 2017, 5:30 pm</div>

                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="angled-img">
                                        <div class="img">
                                            <img src="webs/images/dark/clan-navi.jpg" class="op-10" alt="NAVI">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="angled-img">
                                        <div class="img">
                                            <img src="webs/images/dark/clan-ehome.jpg" class="op-10" alt="EHOME">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <h5>NAVI</h5>
                                </div>
                                <div class="col-md-6">
                                    <h5>EHOME</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- /Next Match -->

                <!-- Recent Matches -->
                <div class="side-block">
                    <h4 class="block-title">Recent Matches</h4>
                    <div role="tabpanel">
                        <ul class="nav nav-tabs mt-20" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#widget-match-all" aria-controls="widget-match-all" role="tab"
                                    data-toggle="tab" aria-expanded="true">All</a>
                            </li>
                            <li role="presentation">
                                <a href="#widget-match-cs" aria-controls="widget-match-cs" role="tab" data-toggle="tab"
                                    aria-expanded="true">CS</a>
                            </li>
                            <li role="presentation">
                                <a href="#widget-match-dota2" aria-controls="widget-match-dota2" role="tab"
                                    data-toggle="tab" aria-expanded="true">DOTA2</a>
                            </li>
                            <li role="presentation">
                                <a href="#widget-match-lol" aria-controls="widget-match-lol" role="tab"
                                    data-toggle="tab" aria-expanded="true">LoL</a>
                            </li>
                        </ul>
                        <div class="tab-content">

                            <!-- All Matches -->
                            <div role="tabpanel" class="tab-pane pl-0 pr-0 active" id="widget-match-all">
                                <div class="youplay-matches-list">
                                    <a class="youplay-single-match" title="Game Show GEC" href="#">

                                        <div class="pull-left ml-5">
                                            <div class="angled-img">
                                                <div class="img">
                                                    <img src="webs/images/dark/clan-navi.jpg" alt="NAVI">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="pull-left ml-10 mt-10">
                                            vs
                                        </div>

                                        <div class="pull-left ml-10">
                                            <div class="angled-img">
                                                <div class="img">
                                                    <img src="webs/images/dark/clan-ehome.jpg" alt="EHOME">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="label youplay-match-count">Upcoming</div>

                                        <div class="clearfix"></div>

                                        <div class="date">27th March 2017, 5:30 pm</div>
                                    </a>

                                    <a class="youplay-single-match" title="The International 2015" href="match.html">

                                        <div class="pull-left ml-5">
                                            <div class="angled-img">
                                                <div class="img">
                                                    <img src="webs/images/dark/clan-youplay.jpg" alt="Youplay">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="pull-left ml-10 mt-10">
                                            vs
                                        </div>

                                        <div class="pull-left ml-10">
                                            <div class="angled-img">
                                                <div class="img">
                                                    <img src="webs/images/dark/clan-team-secret.jpg" alt="Team Secret">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="label youplay-match-count">10 : 7</div>

                                        <div class="clearfix"></div>

                                        <div class="date">17th February 2017, 6:00 am</div>
                                    </a>

                                    <a class="youplay-single-match" title="Red Dot Invitational" href="match-2.html">

                                        <div class="pull-left ml-5">
                                            <div class="angled-img">
                                                <div class="img">
                                                    <img src="webs/images/dark/clan-navi.jpg" alt="NAVI">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="pull-left ml-10 mt-10">
                                            vs
                                        </div>

                                        <div class="pull-left ml-10">
                                            <div class="angled-img">
                                                <div class="img">
                                                    <img src="webs/images/dark/clan-fnatic.jpg" alt="fnatic">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="label youplay-match-count">22 : 28</div>

                                        <div class="clearfix"></div>

                                        <div class="date">10th February 2017, 10:30 am</div>
                                    </a>

                                    <a class="youplay-single-match" title="San Jose" href="#">

                                        <div class="pull-left ml-5">
                                            <div class="angled-img">
                                                <div class="img">
                                                    <img src="webs/images/dark/clan-skt-t1.jpg" alt="SKT T1">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="pull-left ml-10 mt-10">
                                            vs
                                        </div>

                                        <div class="pull-left ml-10">
                                            <div class="angled-img">
                                                <div class="img">
                                                    <img src="webs/images/dark/clan-virtus-pro.jpg" alt="Virtus PRO">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="label youplay-match-count">13 : 13</div>

                                        <div class="clearfix"></div>

                                        <div class="date">1st December 2015, 4:30 pm</div>
                                    </a>
                                </div>
                            </div>
                            <!-- /All Matches -->

                            <!-- CS Matches -->
                            <div role="tabpanel" class="tab-pane pl-0 pr-0" id="widget-match-cs">
                                <div class="youplay-matches-list">
                                    <a class="youplay-single-match" title="Red Dot Invitational" href="match-2.html">

                                        <div class="pull-left ml-5">
                                            <div class="angled-img">
                                                <div class="img">
                                                    <img src="webs/images/dark/clan-navi.jpg" alt="NAVI">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="pull-left ml-10 mt-10">
                                            vs
                                        </div>

                                        <div class="pull-left ml-10">
                                            <div class="angled-img">
                                                <div class="img">
                                                    <img src="webs/images/dark/clan-fnatic.jpg" alt="fnatic">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="label youplay-match-count">22 : 28</div>

                                        <div class="clearfix"></div>

                                        <div class="date">10th February 2017, 10:30 am</div>
                                    </a>
                                </div>
                            </div>
                            <!-- /CS Matches -->

                            <!-- DOTA2 Matches -->
                            <div role="tabpanel" class="tab-pane pl-0 pr-0" id="widget-match-dota2">
                                <div class="youplay-matches-list">
                                    <a class="youplay-single-match" title="Game Show GEC" href="#">

                                        <div class="pull-left ml-5">
                                            <div class="angled-img">
                                                <div class="img">
                                                    <img src="webs/images/dark/clan-navi.jpg" alt="NAVI">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="pull-left ml-10 mt-10">
                                            vs
                                        </div>

                                        <div class="pull-left ml-10">
                                            <div class="angled-img">
                                                <div class="img">
                                                    <img src="webs/images/dark/clan-ehome.jpg" alt="EHOME">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="label youplay-match-count">Upcoming</div>

                                        <div class="clearfix"></div>

                                        <div class="date">27th March 2017, 5:30 pm</div>
                                    </a>

                                    <a class="youplay-single-match" title="The International 2015" href="match.html">

                                        <div class="pull-left ml-5">
                                            <div class="angled-img">
                                                <div class="img">
                                                    <img src="webs/images/dark/clan-youplay.jpg" alt="Youplay">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="pull-left ml-10 mt-10">
                                            vs
                                        </div>

                                        <div class="pull-left ml-10">
                                            <div class="angled-img">
                                                <div class="img">
                                                    <img src="webs/images/dark/clan-team-secret.jpg" alt="Team Secret">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="label youplay-match-count">10 : 7</div>

                                        <div class="clearfix"></div>

                                        <div class="date">17th February 2017, 6:00 am</div>
                                    </a>
                                </div>
                            </div>
                            <!-- /DOTA2 Matches -->

                            <!-- LoL Matches -->
                            <div role="tabpanel" class="tab-pane pl-0 pr-0" id="widget-match-lol">
                                <div class="youplay-matches-list">
                                    <a class="youplay-single-match" title="San Jose" href="#">

                                        <div class="pull-left ml-5">
                                            <div class="angled-img">
                                                <div class="img">
                                                    <img src="webs/images/dark/clan-skt-t1.jpg" alt="SKT T1">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="pull-left ml-10 mt-10">
                                            vs
                                        </div>

                                        <div class="pull-left ml-10">
                                            <div class="angled-img">
                                                <div class="img">
                                                    <img src="webs/images/dark/clan-virtus-pro.jpg" alt="Virtus PRO">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="label youplay-match-count">13 : 13</div>
                                        <div class="clearfix"></div>
                                        <div class="date">1st December 2015, 4:30 pm</div>
                                    </a>
                                </div>
                            </div>
                            <!-- /LoL Matches -->
                        </div>
                    </div>
                </div>
                <div class="side-block">
                    <h4 class="block-title">Facebook</h4>
                    <div class="fb-page" data-href="https://www.facebook.com/DarkSoulsGame" data-width="700"
                        data-height="350" data-small-header="false" data-adapt-container-width="true"
                        data-hide-cover="false" data-show-facepile="true" data-show-posts="true"></div>
                </div>
                <!-- /Facebook -->
            </div>
            <!-- Right Side -->
        </div>
    </div>
</div>
@endsection
