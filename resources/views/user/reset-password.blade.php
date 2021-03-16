@extends('layouts.backend.app')


@section('page-title')
{{__('Update Password')}}
@endsection

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <h4 class="page-title">Pengguna</h4>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item">Management</li>
                        <li class="breadcrumb-item active"><a href="{{ route('user.index') }}">Pengguna</a></li>
                        <li class="breadcrumb-item active">Reset Password</li>
                    </ol>
                </div>
            </div> <!-- end row -->
        </div>
        <!-- end page-title -->
        <div class="row">
            <div class="col-6">
                <div class="card faq-box border-primary">
                    <div class="card-body">
                        <div class="faq-icon float-right">
                            <i class="fas fa-question-circle font-24 mt-2 text-primary"></i>
                        </div>
                        <h5 class="font-16 mb-3 mt-4">Reset Password</h5>
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>Nama Pengguna</td>
                                    <td>{{$user->name}}</td>
                                </tr>
                                <tr>
                                    <td>Email Pengguna</td>
                                    <td>{{$user->email}}</td>
                                </tr>
                                <tr>
                                    <td>Hak Akses</td>
                                    <td>{{$user->display_name}}</td>
                                </tr>
                            </table>
                            {!! Form::model($user, ['url' => route('reset.password', $user->id), 'method' => 'post']) !!}
                                <div class="form-group xs-pt-10 {{ $errors->has('password') ? ' has-error' : ''}}">
                                    {!! Form::label('password', 'Masukan Password Baru', ['class' => 'control-label'])!!}
                                    {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Masukan Password'])!!}
                                    {!! $errors->first('password', '<p class="text-danger">:message</p>')!!}
                                </div>
                                <div class="col-xs-6">
                                    <p class="text-right">
                                        <button type="submit" class="btn btn-space btn-primary">Simpan</button>
                                        <a href="{{route('user.index')}}" class="btn btn-space btn-secondary">Kembali</a>
                                    </p>
                                </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
