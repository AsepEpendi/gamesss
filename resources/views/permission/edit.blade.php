@extends('layouts.backend.layouts.app')

@section('page-title')
{{__('Ubah Permission')}}
@endsection

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <h4 class="page-title">Permission</h4>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item">Management</li>
                        <li class="breadcrumb-item active"><a href="{{ route('permission.index') }}">Permission</a></li>
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
                        {!! Form::model($permission, ['route' => ['permission.update', $permission->id], 'method'=>'put', 'class' => 'form-horizontal']) !!}
                            <div class="form-group row">
                                <label class="col-4 col-form-label" for="example-input-normal">Nama Permission</label>
                                <div class="col-8">
                                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nama Permission', 'disabled'=>'disabled'])!!}
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-4 col-form-label" for="example-input-normal">Display Name</label>
                                <div class="col-8">
                                    {!! Form::text('display_name', null, ['class' => $errors->has('display_name') ? 'form-control is-invalid' : 'form-control', 'placeholder' => 'Display Name'])!!}
                                    @error('display_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-4 col-form-label" for="example-input-normal">Description</label>
                                <div class="col-8">
                                    {!! Form::text('description', null, ['class' => $errors->has('description') ? 'form-control is-invalid' : 'form-control', 'placeholder' => 'Deskripsi'])!!}
                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="{{ route ('permission.index')}}" class="btn btn-secondary"> Kembali</a>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div> <!-- end col -->
        </div>
        <!-- end row -->
    </div>
</div>
@endsection
