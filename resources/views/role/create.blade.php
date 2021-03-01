@extends('layouts.backend.app')

@section('page-title')
{{__('Tambah Role')}}
@endsection

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <h4 class="page-title">Role</h4>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item">Management</li>
                        <li class="breadcrumb-item active"><a href="{{ route('role.index') }}">Role</a></li>
                        <li class="breadcrumb-item active">Tambah</li>
                    </ol>
                </div>
            </div> <!-- end row -->
        </div>
        <!-- end page-title -->

        <div class="row">
            <div class="col-lg-6">
                <div class="card m-b-30">
                    <div class="card-body">
                        {!! Form::open(['url' => route('role.store'), 'class' => 'form-horizontal']) !!}
                            @include('role.form')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
