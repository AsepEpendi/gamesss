@extends('layouts.backend.app')

@section('page-title')
{{__('Create E-Sport Team')}}
@endsection

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <h4 class="page-title">E-Sport Team</h4>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item">MENU</li>
                        <li class="breadcrumb-item active"><a href="{{ route('e-sport-team.index') }}">E-Sport Team</a></li>
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
                        {!! Form::open(['url' => route('e-sport-team.store'), 'class' => 'form-horizontal', 'enctype=multipart/form-data']) !!}
                            @include('e-sport-team.form')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
