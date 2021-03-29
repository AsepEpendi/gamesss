@extends('layouts.backend.app')

@section('page-title')
{{__('Profile Account')}}
@endsection

@section('css')
<link href="{{ asset('assets-backend/css/custom.css')}}" rel="stylesheet" type="text/css">
@endsection

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <h4 class="page-title">Profil Akun</h4>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <div class="card faq-box border-success">
                    <div class="card-body">
                        <div class="faq-icon float-right">
                            <i class="fas fa-user font-24 mt-2 text-success"></i>
                        </div>
                        <div class="profile-sidebar">
                            <div class="portlet light profile-sidebar-portlet ">
                                {{-- <div class="profile-userpic">
                                    <img alt="image" src="{{(!empty($userDetail->avatar))? $profile.'/'.$userDetail->avatar : $profile.'/avatar.png'}}" class="img-responsive user-profile" class="img-responsive user-profile">
                                </div> --}}
                                <div class="profile-usertitle">
                                    <div class="profile-usertitle-name font-style"> {{$userDetail->name}}</div>
                                    <div class="profile-usertitle-job"> {{$userDetail->email}}</div>
                                </div>
                            </div>
                        </div>
                        <div class="profile-usermenu"></div>
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="card faq-box border-primary">
                    <div class="card-body">
                        <div class="faq-icon float-right">
                            <i class="fas fa-user font-24 mt-2 text-primary"></i>
                        </div>
                        <h5 class="text-primary">Manajemen Akun</h5>
                        <div class="setting-tab">
                            <ul class="nav nav-pills mb-3" id="myTab3" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab3" data-toggle="tab" href="#personal_info" role="tab" aria-controls="" aria-selected="true">{{__('Informasi Akun')}}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab3" data-toggle="tab" href="#change_password" role="tab" aria-controls="" aria-selected="false">{{__('Ubah Kata sandi')}}</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent2">
                                <div class="tab-pane fade show active" id="personal_info" role="tabpanel" aria-labelledby="home-tab3">
                                    {{Form::model($userDetail,array('route' => array('update.profile'), 'method' => 'put', 'enctype' => "multipart/form-data"))}}
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                {{Form::label('name',__('Nama'),array('class'=>'form-control-label'))}}
                                                {{Form::text('name',null,array('class'=>'form-control font-style','placeholder'=>_('Masukkan Nama')))}}
                                                @error('name')
                                                <span class="invalid-name" role="alert">
                                                        <strong class="text-danger">{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                <br>
                                                {{Form::label('email',__('Email'),array('class'=>'form-control-label'))}}
                                                {{Form::text('email',null,array('class'=>'form-control','placeholder'=>__('Masukkan Email')))}}
                                                @error('email')
                                                <span class="invalid-email" role="alert">
                                                        <strong class="text-danger">{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                    <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt=""></div>
                                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 10px;"></div>
                                                <div>
                                                    <span class="btn btn-primary btn-file">
                                                        <span class="fileinput-new"> {{__('Pilih gambar')}} </span>
                                                        <span class="fileinput-exists"> {{__('Ubah')}} </span>
                                                        <input type="hidden">
                                                        <input type="file" name="profile" id="logo">
                                                    </span>
                                                    <a href="javascript:;" class="btn btn-danger fileinput-exists" data-dismiss="fileinput"> {{__('Hapus')}} </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 text-right">
                                            <a href="{{ route('home') }}" class="btn btn-secondary">{{__('Kembali')}}</a>
                                            {{-- @permission('edit-account') --}}
                                                {{Form::submit('Simpan',array('class'=>'btn btn-primary'))}}
                                            {{-- @endpermission --}}
                                        </div>
                                    </div>
                                    {{Form::close()}}
                                </div>
                                <div class="tab-pane fade" id="change_password" role="tabpanel" aria-labelledby="profile-tab3">
                                    <div class="company-setting-wrap">
                                        {{Form::model($userDetail,array('route' => array('update.password-profile',$userDetail->id), 'method' => 'put'))}}
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    {{Form::label('current_password',__('Kata sandi Lama'),array('class'=>'form-control-label'))}}
                                                    {{Form::password('current_password',null,array('class'=>'form-control','placeholder'=>_('Enter Current Password')))}}
                                                    @error('current_password')
                                                    <span class="invalid-current_password" role="alert">
                                                        <strong class="text-danger">{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    {{Form::label('new_password',__('Kata sandi Baru'),array('class'=>'form-control-label'))}}
                                                    {{Form::password('new_password',null,array('class'=>'form-control','placeholder'=>_('Enter New Password')))}}
                                                    @error('new_password')
                                                    <span class="invalid-new_password" role="alert">
                                                        <strong class="text-danger">{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    {{Form::label('confirm_password',__('Ketik ulang Kata sandi'),array('class'=>'form-control-label'))}}
                                                    {{Form::password('confirm_password',null,array('class'=>'form-control','placeholder'=>_('Enter Re-type New Password')))}}
                                                    @error('confirm_password')
                                                    <span class="invalid-confirm_password" role="alert">
                                                        <strong class="text-danger">{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-12 text-right">
                                                <a href="{{ route('home') }}" class="btn btn-secondary">{{__('Kembali')}}</a>
                                                {{-- @permission('change-password-account') --}}
                                                {{Form::submit('Simpan',array('class'=>'btn btn-primary'))}}
                                                {{-- @endpermission --}}
                                            </div>
                                        </div>
                                        {{Form::close()}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
