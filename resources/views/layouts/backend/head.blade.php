        {{-- <title>{{(Setting::getValByName('title_text')) ? Setting::getValByName('title_text') : config('app.name', 'AccountGo')}} - @yield('page-title')</title> --}}
        <title>Gamesss | @yield('page-title')</title>
        <link rel="icon" href="{{asset(Storage::url('logo')).'/favicon.png'}}" type="image" sizes="16x16">
        <link href="{{ asset('assets-backend/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets-backend/css/metismenu.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets-backend/css/icons.css')}}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets-backend/css/style.css')}}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets-backend/plugins/dropzone/dist/dropzone.css')}}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets-backend/css/bootstrap-fileinput.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('assets-backend/css/bootstrap-chosen.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('assets-backend/css/jquery.fancybox.min.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('assets-backend/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets-backend/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets-backend/css/toastr.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets-backend/css/jquery.toast.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets-backend/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets-backend/plugins/summernote/summernote-bs4.css')}}" rel="stylesheet" />
        <link href="{{ asset('assets-backend/css/yellow.css')}}" rel="stylesheet" />
