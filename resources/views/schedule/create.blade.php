@extends('layouts.backend.app')

@section('page-title')
{{__('Create Schedule')}}
@endsection

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <h4 class="page-title">Schedule</h4>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item">MENU</li>
                        <li class="breadcrumb-item active"><a href="{{ route('schedule.index') }}">Schedule</a></li>
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
                        {!! Form::open(['url' => route('schedule.store'), 'class' => 'form-horizontal', 'enctype=multipart/form-data']) !!}
                            @include('schedule.form')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
