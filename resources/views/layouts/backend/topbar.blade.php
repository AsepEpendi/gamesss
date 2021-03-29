@php
    $logo=asset(Storage::url('logo/'));
    $profile=asset(Storage::url('avatar/'));
    $users=\Auth::user();
@endphp
<div class="topbar">
    <div class="topbar-left">
        <a href="{{ route('home') }}" class="logo">
            <span class="logo-light">
                <img class="img-fluid" src="{{$logo.'/logo.png'}} " alt="" width="80">
            </span>
            <span class="logo-sm">
                <img class="img-fluid" src="{{$logo.'/small_logo.png'}} " alt="">
            </span>
        </a>
    </div>

    <nav class="navbar-custom">
        <ul class="navbar-right list-inline float-right mb-0">
            <!-- full screen -->
            <li class="dropdown notification-list list-inline-item d-none d-md-inline-block">
                <a class="nav-link waves-effect" href="#" id="btn-fullscreen">
                    <i class="mdi mdi-arrow-expand-all noti-icon"></i>
                </a>
            </li>
            <li class="dropdown notification-list list-inline-item">
                <div class="dropdown notification-list nav-pro-img">
                    <a class="dropdown-toggle nav-link arrow-none nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <img alt="image" src="{{(!empty($users->avatar)? $profile.'/'.$users->avatar : $profile.'/avatar.png')}}" class="rounded-circle mr-1">
                        <div class="d-sm-none d-lg-inline-block">{{__('Hi')}}, {{\Auth::user()->name}}</div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                        <!-- item-->
                        {{-- <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle"></i> Profile</a> --}}
                        {{-- @if(\Auth::guard('operator')->check())
                            <a href="{{route('customer.profile')}}" class="dropdown-item has-icon">
                                <i class="far fa-user"></i> {{__('My profile')}}
                            </a>
                        @elseif(\Auth::guard('vender')->check())
                            <a href="{{route('vender.profile')}}" class="dropdown-item has-icon">
                                <i class="far fa-user"></i> {{__('My profile')}}
                            </a>
                        @else --}}
                            <a href="{{route('profile')}}" class="dropdown-item has-icon">
                                <i class="mdi mdi-account-circle"></i> {{__('My profile')}}
                            </a>
                        {{-- @endif --}}
                        <div class="dropdown-divider"></div>
                        {{-- <a class="dropdown-item text-danger" href="{{ route('logout') }}"><i class="mdi mdi-power text-danger"></i> Logout</a> --}}
                        <a class="dropdown-item text-danger" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <i class="mdi mdi-power text-danger"></i>
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            </li>
        </ul>
        <ul class="list-inline menu-left mb-0">
            <li class="float-left">
                <button class="button-menu-mobile open-left waves-effect">
                    <i class="mdi mdi-menu"></i>
                </button>
            </li>
        </ul>
    </nav>
</div>
