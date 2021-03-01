@extends('layouts.backend.app')

@section('content')

<div class="content">
    <div class="content">
        <div class="container-fluid">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h4 class="page-title">Dashboard</h4>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-right">
                            {{-- <li class="breadcrumb-item"><a href="javascript:void(0);">{{(Utility::getValByName('footer_text')) ? Utility::getValByName('footer_text') :  __('Copyright AccountGo') }} {{ date('Y') }}</a></li> --}}
                        </ol>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end page-title -->

            <div class="row">

                <div class="col-sm-6 col-xl-3">
                    <div class="card">
                        <div class="card-heading p-4">
                            <div class="mini-stat-icon float-right">
                                <i class="mdi mdi-cube-outline bg-primary  text-white"></i>
                            </div>
                            <div>
                                <h5 class="font-16">Total Post</h5>
                            </div>
                            {{-- <h3 class="mt-4">{{ $data['post_count'] }}</h3> --}}
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3">
                    <div class="card">
                        <div class="card-heading p-4">
                            <div class="mini-stat-icon float-right">
                                <i class="mdi mdi-briefcase-check bg-success text-white"></i>
                            </div>
                            <div>
                                <h5 class="font-16">Total Produk</h5>
                            </div>
                            {{-- <h3 class="mt-4">{{ $data['product_count'] }}</h3> --}}
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3">
                    <div class="card">
                        <div class="card-heading p-4">
                            <div class="mini-stat-icon float-right">
                                <i class="mdi mdi-tag-text-outline bg-warning text-white"></i>
                            </div>
                            <div>
                                <h5 class="font-16">Views Product</h5>
                            </div>
                            {{-- <h3 class="mt-4">{{ $data['viewed_product'] }}</h3> --}}
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3">
                    <div class="card">
                        <div class="card-heading p-4">
                            <div class="mini-stat-icon float-right">
                                <i class="mdi mdi-account-multiple-outline bg-danger text-white"></i>
                            </div>
                            <div>
                                <h5 class="font-16">Total Pengguna</h5>
                            </div>
                            {{-- <h3 class="mt-4">{{ $data['user_count'] }}</h3> --}}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
