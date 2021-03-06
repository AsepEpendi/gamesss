@extends('web.layouts.app')

@section('page-title')
{{__('Matches List')}}
@endsection

@section('content')
<div class="content-wrap">
    <section class="youplay-banner banner-top youplay-banner-parallax small">
        <div class="image" data-speed="0.4">
            <img src="{{ asset('webs/images/dark/game-diablo-iii-1400x656.jpg')}}" alt="" class="jarallax-img">
        </div>

        <div class="info">
            <div>
                <div class="container">
                    <h1 class="h1">Matches</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- /Banner -->
    <div class="container youplay-content">
        <div class="row">
            <div class="col-md-9">
                <div role="tabpanel">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#tab-all" aria-controls="tab-all" role="tab" data-toggle="tab" aria-expanded="true">All</a>
                        </li>
                        <li role="presentation">
                            <a href="#tab-cs" aria-controls="tab-cs" role="tab" data-toggle="tab" aria-expanded="true">CS</a>
                        </li>
                        <li role="presentation">
                            <a href="#tab-dota2" aria-controls="tab-dota2" role="tab" data-toggle="tab" aria-expanded="true">DOTA2</a>
                        </li>
                        <li role="presentation">
                            <a href="#tab-lol" aria-controls="tab-lol" role="tab" data-toggle="tab" aria-expanded="true">LoL</a>
                        </li>
                    </ul>
                    <div class="tab-content">

                        <!-- All Matches -->
                        <div role="tabpanel" class="tab-pane active" id="tab-all">
                            <div class="youplay-matches-list">
                                <a class="youplay-single-match" href="#">

                                    <div class="pull-left">
                                        <div class="angled-img">
                                            <div class="img">
                                                <img src="webs/images/dark/clan-navi.jpg" alt="NAVI">
                                            </div>
                                        </div>
                                        <h5 class="text-center">NAVI</h5>
                                    </div>

                                    <div class="pull-left ml-30">
                                        <div class="angled-img">
                                            <div class="img">
                                                <img src="webs/images/dark/clan-ehome.jpg" alt="EHOME">
                                            </div>
                                        </div>
                                        <h5 class="text-center">EHOME</h5>
                                    </div>

                                    <div class="pull-left ml-30">
                                        <h3 class="youplay-match-title">Game Show GEC</h3>
                                        <div class="date">27th March 2017, 5:30 pm</div>
                                    </div>
                                    <div class="label youplay-match-count">Upcoming</div>
                                    <div class="clearfix"></div>
                                </a>

                                @foreach ($schedule as $item)
                                <a class="youplay-single-match" href="{{ route('web.match', $item->slug) }}">
                                    <div class="pull-left">
                                        <div class="angled-img">
                                            <div class="img">
                                                <img src="{{asset('storage/e-sport-team/'. $item->enemy_team->logo)}}" alt="Youplay">
                                            </div>
                                        </div>
                                        <h5 class="text-center">{{$item->enemy_team->name}}</h5>
                                    </div>

                                    <div class="pull-left ml-30">
                                        <div class="angled-img">
                                            <div class="img">
                                                <img src="{{('storage/e-sport-team/'. $item->team_esport->logo)}}" alt="Team Secret">
                                            </div>
                                        </div>
                                        <h5 class="text-center">{{$item->team_esport->name}}</h5>
                                    </div>

                                    <div class="pull-left ml-30">
                                        <h3 class="youplay-match-title">The International 2015</h3>
                                        <div class="date">{{$item->schedule_date}}</div>
                                    </div>

                                    <div class="label youplay-match-count">10 : 7</div>
                                    <div class="clearfix"></div>
                                </a>
                                @endforeach
                            </div>
                        </div>
                        <!-- /All Matches -->

                        <!-- CS Matches -->
                        <div role="tabpanel" class="tab-pane" id="tab-cs">
                            <div class="youplay-matches-list">
                                <a class="youplay-single-match" href="match-2.html">
                                    <div class="pull-left">
                                        <div class="angled-img">
                                            <div class="img">
                                                <img src="assets/images/dark/clan-navi.jpg" alt="NAVI">
                                            </div>
                                        </div>
                                        <h5 class="text-center">NAVI</h5>
                                    </div>

                                    <div class="pull-left ml-30">
                                        <div class="angled-img">
                                            <div class="img">
                                                <img src="assets/images/dark/clan-fnatic.jpg" alt="fnatic">
                                            </div>
                                        </div>
                                        <h5 class="text-center">fnatic</h5>
                                    </div>

                                    <div class="pull-left ml-30">
                                        <h3 class="youplay-match-title">Red Dot Invitational</h3>
                                        <div class="date">10th February 2017, 10:30 am</div>
                                    </div>

                                    <div class="label youplay-match-count">22 : 28</div>
                                    <div class="clearfix"></div>
                                </a>
                            </div>
                        </div>
                        <!-- /CS Matches -->

                        <!-- DOTA2 Matches -->
                        <div role="tabpanel" class="tab-pane" id="tab-dota2">
                            <div class="youplay-matches-list">
                                <a class="youplay-single-match" href="#">
                                    <div class="pull-left">
                                        <div class="angled-img">
                                            <div class="img">
                                                <img src="assets/images/dark/clan-navi.jpg" alt="NAVI">
                                            </div>
                                        </div>
                                        <h5 class="text-center">NAVI</h5>
                                    </div>

                                    <div class="pull-left ml-30">
                                        <div class="angled-img">
                                            <div class="img">
                                                <img src="assets/images/dark/clan-ehome.jpg" alt="EHOME">
                                            </div>
                                        </div>
                                        <h5 class="text-center">EHOME</h5>
                                    </div>

                                    <div class="pull-left ml-30">
                                        <h3 class="youplay-match-title">Game Show GEC</h3>
                                        <div class="date">27th March 2017, 5:30 pm</div>
                                    </div>

                                    <div class="label youplay-match-count">Upcoming</div>
                                    <div class="clearfix"></div>
                                </a>
                                <a class="youplay-single-match" href="match.html">
                                    <div class="pull-left">
                                        <div class="angled-img">
                                            <div class="img">
                                                <img src="assets/images/dark/clan-youplay.jpg" alt="Youplay">
                                            </div>
                                        </div>
                                        <h5 class="text-center">Youplay</h5>
                                    </div>

                                    <div class="pull-left ml-30">
                                        <div class="angled-img">
                                            <div class="img">
                                                <img src="assets/images/dark/clan-team-secret.jpg" alt="Team Secret">
                                            </div>
                                        </div>
                                        <h5 class="text-center">Team Secret</h5>
                                    </div>

                                    <div class="pull-left ml-30">
                                        <h3 class="youplay-match-title">The International 2015</h3>
                                        <div class="date">17th February 2017, 6:00 am</div>
                                    </div>

                                    <div class="label youplay-match-count">10 : 7</div>
                                    <div class="clearfix"></div>
                                </a>
                            </div>
                        </div>
                        <!-- /DOTA2 Matches -->

                        <!-- LoL Matches -->
                        <div role="tabpanel" class="tab-pane" id="tab-lol">
                            <div class="youplay-matches-list">
                                <a class="youplay-single-match" href="#">
                                    <div class="pull-left">
                                        <div class="angled-img">
                                            <div class="img">
                                                <img src="assets/images/dark/clan-skt-t1.jpg" alt="SKT T1">
                                            </div>
                                        </div>
                                        <h5 class="text-center">SKT T1</h5>
                                    </div>

                                    <div class="pull-left ml-30">
                                        <div class="angled-img">
                                            <div class="img">
                                                <img src="assets/images/dark/clan-virtus-pro.jpg" alt="Virtus PRO">
                                            </div>
                                        </div>
                                        <h5 class="text-center">Virtus PRO</h5>
                                    </div>

                                    <div class="pull-left ml-30">
                                        <h3 class="youplay-match-title">San Jose</h3>
                                        <div class="date">1st December 2015, 4:30 pm</div>
                                    </div>
                                    <div class="label youplay-match-count">13 : 13</div>
                                    <div class="clearfix"></div>
                                </a>
                            </div>
                        </div>
                        <!-- /LoL Matches -->
                    </div>
                </div>

                <ul class="pagination dib">
                    <li class="active">
                        <span class='page-numbers current'>1</span>
                    </li>
                    <li>
                        <a href='#'>2</a>
                    </li>
                    <li>
                        <a href="#">Next</a>
                    </li>
                </ul>
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
                                            <img src="assets/images/dark/clan-navi.jpg" class="op-10" alt="NAVI">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="angled-img">
                                        <div class="img">
                                            <img src="assets/images/dark/clan-ehome.jpg" class="op-10" alt="EHOME">
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
                                                    <img src="assets/images/dark/clan-navi.jpg" alt="NAVI">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="pull-left ml-10 mt-10">
                                            vs
                                        </div>

                                        <div class="pull-left ml-10">
                                            <div class="angled-img">
                                                <div class="img">
                                                    <img src="assets/images/dark/clan-ehome.jpg" alt="EHOME">
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
                                                    <img src="assets/images/dark/clan-youplay.jpg" alt="Youplay">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="pull-left ml-10 mt-10">
                                            vs
                                        </div>

                                        <div class="pull-left ml-10">
                                            <div class="angled-img">
                                                <div class="img">
                                                    <img src="assets/images/dark/clan-team-secret.jpg"
                                                        alt="Team Secret">
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
                                                    <img src="assets/images/dark/clan-navi.jpg" alt="NAVI">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="pull-left ml-10 mt-10">
                                            vs
                                        </div>

                                        <div class="pull-left ml-10">
                                            <div class="angled-img">
                                                <div class="img">
                                                    <img src="assets/images/dark/clan-fnatic.jpg" alt="fnatic">
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
                                                    <img src="assets/images/dark/clan-skt-t1.jpg" alt="SKT T1">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="pull-left ml-10 mt-10">
                                            vs
                                        </div>

                                        <div class="pull-left ml-10">
                                            <div class="angled-img">
                                                <div class="img">
                                                    <img src="assets/images/dark/clan-virtus-pro.jpg" alt="Virtus PRO">
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
                                                    <img src="assets/images/dark/clan-navi.jpg" alt="NAVI">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="pull-left ml-10 mt-10">
                                            vs
                                        </div>

                                        <div class="pull-left ml-10">
                                            <div class="angled-img">
                                                <div class="img">
                                                    <img src="assets/images/dark/clan-fnatic.jpg" alt="fnatic">
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
                                                    <img src="assets/images/dark/clan-navi.jpg" alt="NAVI">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="pull-left ml-10 mt-10">
                                            vs
                                        </div>

                                        <div class="pull-left ml-10">
                                            <div class="angled-img">
                                                <div class="img">
                                                    <img src="assets/images/dark/clan-ehome.jpg" alt="EHOME">
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
                                                    <img src="assets/images/dark/clan-youplay.jpg" alt="Youplay">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pull-left ml-10 mt-10">
                                            vs
                                        </div>
                                        <div class="pull-left ml-10">
                                            <div class="angled-img">
                                                <div class="img">
                                                    <img src="assets/images/dark/clan-team-secret.jpg"
                                                        alt="Team Secret">
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
                                                    <img src="assets/images/dark/clan-skt-t1.jpg" alt="SKT T1">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="pull-left ml-10 mt-10">
                                            vs
                                        </div>

                                        <div class="pull-left ml-10">
                                            <div class="angled-img">
                                                <div class="img">
                                                    <img src="assets/images/dark/clan-virtus-pro.jpg" alt="Virtus PRO">
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
                <!-- /Recent Matches -->

                <!-- Facebook -->
                <div class="side-block">
                    <h4 class="block-title">Facebook</h4>
                    <div class="fb-page" data-href="https://www.facebook.com/DarkSoulsGame" data-width="700" data-height="350" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"></div>
                </div>
                <!-- /Facebook -->
            </div>
            <!-- Right Side -->
        </div>
    </div>
</div>
@endsection
