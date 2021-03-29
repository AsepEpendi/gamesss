@extends('layouts.backend.app')

@section('page-title')
{{__('Tambah Banner')}}
@endsection

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <h4 class="page-title">Banner</h4>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item">MENU</li>
                        <li class="breadcrumb-item active"><a href="{{ route('banner.index') }}">Banner</a></li>
                        <li class="breadcrumb-item active">Tambah</li>
                    </ol>
                </div>
            </div> <!--end row-->
        </div>
        <!--end page-title-->
        <div class="row">
            <div class="col-lg-10">
                <div class="card m-b-30">
                    <div class="card-body">
                        {!! Form::open(['url' => route('banner.store'), 'class' => 'form-horizontal', 'enctype=multipart/form-data']) !!}
                            @include('banner.form')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
