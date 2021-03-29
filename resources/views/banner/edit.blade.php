@extends('layouts.backend.app')

@section('page-title')
{{__('Edit Banner')}}
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
                                    {!! Form::model($banner, ['route' => ['banner.update', $banner->id], 'method'=>'put', 'class' => 'form-horizontal', 'enctype=multipart/form-data']) !!}
                                    <div class="form-group row">
                                        <label class="col-4 col-form-label" for="example-input-normal">Image</label>
                                        <div class="col-8">
                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail" style="height: 150px;">
                                                    <img src="{{asset('storage/banner/'.$banner->img)}}">
                                                </div>
                                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 10px;"></div>
                                                <div>
                                                <span class="btn btn-primary btn-file">
                                                    <span class="fileinput-new"> {{__('Select image')}} </span>
                                                    <span class="fileinput-exists"> {{__('Change')}} </span>
                                                    <input type="hidden">
                                                    <input type="file" name="img">
                                                </span>
                                                <p>
                                                    <small class="text-muted">Biarkan Kosong jika tidak ingin mengubah gambar</small>
                                                </p>
                                                    <a href="javascript:;" class="btn btn-danger fileinput-exists" data-dismiss="fileinput"> {{__('Remove')}} </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-4 col-form-label" for="example-input-normal">Alt Text</label>
                                        <div class="col-8">
                                            {!! Form::text('alt_text', null, ['class' => $errors->has('alt_text') ? 'form-control is-invalid' : 'form-control', 'placeholder' => 'Alt Text']) !!}
                                            @error('alt_text')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-4 col-form-label" for="example-input-normal">Link</label>
                                        <div class="col-8">
                                            {!! Form::text('link', null, ['class' => $errors->has('link') ? 'form-control is-invalid' : 'form-control', 'placeholder' => 'Link']) !!}
                                            @error('link')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-4 col-form-label" for="example-input-normal">Text Link</label>
                                        <div class="col-8">
                                            {!! Form::text('text_link', null, ['class' => $errors->has('text_link') ? 'form-control is-invalid' : 'form-control', 'placeholder' => 'Text Link']) !!}
                                            @error('text_link')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-4 col-form-label" for="example-input-normal">Highlight Text</label>
                                        <div class="col-8">
                                            {!! Form::text('highlight_text', null, ['class' => $errors->has('highlight_text') ? 'form-control is-invalid' : 'form-control', 'placeholder' => 'Highlight Text']) !!}
                                            @error('highlight_text')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-4 col-form-label" for="example-input-normal">Short Text</label>
                                        <div class="col-8">
                                            {!! Form::text('short_text', null, ['class' => $errors->has('short_text') ? 'form-control is-invalid' : 'form-control', 'placeholder' => 'Short Text']) !!}
                                            @error('short_text')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-4 col-form-label" for="example-input-normal">Status</label>
                                        <div class="col-8">
                                            {!! Form::select('status', ['0' => 'Tidak Aktif', '1' => 'Aktif'], null, ['placeholder' => 'Pilih Status...', 'class' => 'form-control']) !!}
                                            {!! $errors->first('status', '<span class="help-block"><strong>:message</strong></span>') !!}
                                            @error('status')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-4 col-form-label" for="example-input-normal">Urutan</label>
                                        <div class="col-8">
                                            {!! Form::text('urutan', null, ['class' => $errors->has('urutan') ? 'form-control is-invalid' : 'form-control', 'placeholder' => 'Urutan']) !!}
                                            @error('urutan')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-4 col-form-label" for="example-input-normal">Description</label>
                                        <div class="col-8">
                                            {!! Form::textarea('description', null, ['class' => $errors->has('description') ? 'form-control is-invalid' : 'summernote']) !!}
                                            @error('description')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                        <a href="{{ route('banner.index') }}" class="btn btn-secondary">Kembali</a>
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
