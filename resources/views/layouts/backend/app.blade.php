<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta content="PT Fucustindo Cemerlang" name="description" />
        @yield('css')
        @include('layouts.backend.head')
    </head>
    <body>
        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">
                @include('layouts.backend.topbar')
            </div>
            <!-- Top Bar End -->

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                @include('layouts.backend.navbar')
                <!-- Sidebar -left -->
            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <!-- Start content -->
                @yield('content')
                <!-- content -->

                @include('layouts.backend.footer')

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

        <!-- jQuery  -->
        <script src="{{ asset('assets-backend/js/jquery.min.js')}}"></script>
        <script src="{{ asset('assets-backend/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ asset('assets-backend/js/metismenu.min.js')}}"></script>
        <script src="{{ asset('assets-backend/js/jquery.slimscroll.js')}}"></script>
        <script src="{{ asset('assets-backend/js/waves.min.js')}}"></script>

        <!-- App js -->
        <script src="{{ asset('assets-backend/js/app.js')}}"></script>
        <script src="{{ asset('assets-backend/js/toastr.min.js')}}"></script>
        <script src="{{ asset('assets-backend/js/jquery.toast.min.js')}}"></script>
        <script src="{{ asset('assets-backend/plugins/dropzone/dist/dropzone.js')}}"></script>
        <script src="{{ asset('assets-backend/js/bootstrap-fileinput.js') }}" type="text/javascript"></script>

        <script src="{{ asset('assets-backend/plugins/alertify/js/alertify.js')}}"></script>
        <script src="{{ asset('assets-backend/plugins/summernote/summernote-bs4.min.js')}}"></script>
        <script src="{{ asset('assets-backend/js/summernote-math.js')}}"></script>
        <script src="{{ asset('assets-backend/pages/alertify-init.js')}}"></script>
        <script src="{{ asset('assets-backend/js/select2.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets-backend/js/chosen.jquery.min.js') }}" type="text/javascript"></script>
        {{-- <script src="{{ asset('assets-backend/js/jquery.fancybox.min.js') }}" type="text/javascript"></script> --}}
        <script src="{{ asset('assets-backend/js/icheck.min.js') }}" type="text/javascript"></script>
            <script>
            @if (Session::has('success'))
            toastr.success("{{ Session::get('success')}}")
            @endif
            </script>
            <script>
            @if (Session::has('error'))
            toastr.error("{{ Session::get('error')}}")
            @endif
            </script>
        @yield('script')
        <script type="text/javascript">
            $(document).ready(function(){
                $('.select2').select2({
                    width: 'resolve'
                });
            });
        </script>
        <script>
            jQuery(document).ready(function(){
                $('.summernote').summernote({
                    height: 300,
                    minHeight: null,
                    maxHeight: null,
                });
            });
        </script>
        <script>
            $(function() {
                $(".chosen-select").chosen();
                $('#edit_publish').click(function(){
                    $('.publish').show();
                    $('#edit_publish').hide();
                });
            });
        </script>
    </body>
</html>
