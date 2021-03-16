@extends('layouts.backend.app')

@section('page-title')
{{__('Edit Module')}}
@endsection

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <h4 class="page-title">Module</h4>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item">Management</li>
                        <li class="breadcrumb-item active"><a href="{{ route('permission.index') }}">Module</a></li>
                        <li class="breadcrumb-item active">Edit</li>
                    </ol>
                </div>
            </div> <!-- end row -->
        </div>
        <!-- end page-title -->
        <div class="row">
            <div class="col-6">
                <div class="card m-b-30">
                    <div class="card-body">
                        {!! Form::model($module, ['route' => ['module.update', $module->id], 'method'=>'put', 'class' => 'form-horizontal']) !!}
                            <div class="form-group row">
                                <label class="col-4 col-form-label" for="example-input-normal">Nama Module</label>
                                <div class="col-8">
                                    {!! Form::text('name', null, ['class' => $errors->has('name') ? 'form-control is-invalid' : 'form-control', 'placeholder' => 'Nama Module'])!!}
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="{{ route ('module.index')}}" class="btn btn-secondary"> Kembali</a>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div> <!-- end col -->
        </div>
        <!-- end row -->
    </div>
</div>
@endsection
