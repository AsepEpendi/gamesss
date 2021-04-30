@extends('layouts.backend.app')

@section('page-title')
{{__('Edit Channel')}}
@endsection

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <h4 class="page-title">Channel</h4>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item">MENU</li>
                        <li class="breadcrumb-item active"><a href="{{ route('channel.index') }}">Channel</a></li>
                        <li class="breadcrumb-item active">Ubah</li>
                    </ol>
                </div>
            </div> <!-- end row -->
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card faq-box border-primary m-b-25">
                    <div class="tab-content">
                        <div class="tab-pane active p-3" id="channel" role="tabpanel">
                            <div class="col-lg-10">
                                <div class="card-body">
                                    {!! Form::model($channel, ['route' => ['channel.update', $channel->id], 'method'=>'put', 'class' => 'form-horizontal', 'enctype=multipart/form-data']) !!}
                                    <div class="form-group row">
                                        <label class="col-4 col-form-label" for="example-input-normal">Cover</label>
                                        <div class="col-8">
                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail" style="height: 150px;">
                                                    <img src="{{asset('storage/channel/'.$channel->cover)}}">
                                                </div>
                                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 10px;"></div>
                                                <div>
                                                <span class="btn btn-primary btn-file">
                                                    <span class="fileinput-new"> {{__('Pilih Gambar')}} </span>
                                                    <span class="fileinput-exists"> {{__('Ubah')}} </span>
                                                    <input type="hidden">
                                                    <input type="file" name="cover">
                                                </span>
                                                <a href="javascript:;" class="btn btn-danger fileinput-exists" data-dismiss="fileinput"> {{__('Hapus')}} </a>
                                                <p>
                                                    <small class="text-muted">Biarkan Kosong jika tidak ingin mengubah gambar</small>
                                                </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-4 col-form-label" for="example-input-normal">Title</label>
                                        <div class="col-8">
                                            {!! Form::text('title', null, ['class' => $errors->has('title') ? 'form-control is-invalid' : 'form-control', 'placeholder' => 'Alt Text']) !!}
                                            @error('title')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-4 col-form-label" for="example-input-normal">Meta Desc</label>
                                        <div class="col-8">
                                            {!! Form::textarea('meta_desc', null, ['class' => $errors->has('meta_desc') ? 'form-control is-invalid' : 'form-control', 'rows' => 2, 'placeholder' => 'Meta Desc']) !!}
                                            @error('meta_desc')
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
                                        <a href="{{ route('channel.index') }}" class="btn btn-secondary">Kembali</a>
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
