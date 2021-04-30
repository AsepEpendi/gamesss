@extends('layouts.backend.app')

@section('page-title')
{{__('Edit E-Sport Team')}}
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
                        <li class="breadcrumb-item active">Ubah</li>
                    </ol>
                </div>
            </div> <!-- end row -->
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card faq-box border-primary m-b-25">
                    <div class="tab-content">
                        <div class="tab-pane active p-3" id="banner" role="tabpanel">
                            <div class="col-lg-10">
                                <div class="card-body">
                                    {!! Form::model($esport_team, ['route' => ['e-sport-team.update', $esport_team->id], 'method'=>'put', 'class' => 'form-horizontal', 'enctype=multipart/form-data']) !!}
                                    <div class="form-group row">
                                        <label class="col-4 col-form-label" for="example-input-normal">E-Sport Category</label>
                                        <div class="col-8">
                                            {!! Form::select('esport_category_id', ['' => '-- eSport Category --']+App\ESportCategory::pluck('name', 'id')->all(), null, ['class' => 'form-control select2', 'required' => 'required']) !!}
                                            @error('esport_category_id')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-4 col-form-label" for="example-input-normal">Name</label>
                                        <div class="col-8">
                                            {!! Form::text('name', null, ['class' => $errors->has('name') ? 'form-control is-invalid' : 'form-control', 'placeholder' => 'Name']) !!}
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-4 col-form-label" for="example-input-normal">Logo</label>
                                        <div class="col-8">
                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail" style="height: 150px;">
                                                    <img src="{{asset('storage/e-sport-team/'.$esport_team->logo)}}">
                                                </div>
                                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 10px;"></div>
                                                <div>
                                                <span class="btn btn-primary btn-file">
                                                    <span class="fileinput-new"> {{__('Pilih Gambar')}} </span>
                                                    <span class="fileinput-exists"> {{__('Ubah')}} </span>
                                                    <input type="hidden">
                                                    <input type="file" name="logo">
                                                </span>
                                                <a href="javascript:;" class="btn btn-danger fileinput-exists" data-dismiss="fileinput"> {{__('Hapus')}} </a>
                                                <p>
                                                    <small class="text-muted">Biarkan Saja jika tidak ingin mengubah gambar</small>
                                                </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                        <a href="{{ route('e-sport-team.index') }}" class="btn btn-secondary">Kembali</a>
                                    </div>
                                    {!! Form::close() !!}
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
