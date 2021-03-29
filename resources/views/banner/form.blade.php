<div class="form-group row">
    <label class="col-4 col-form-label" for="example-input-normal">Gambar</label>
    <div class="col-8">
        <h6>{{__('Gambar')}}</h6>
        <div class="fileinput fileinput-new" data-provides="fileinput">
            <div class="fileinput-new thumbnail" style="height: 150px;"></div>
            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 10px;"></div>
            <div>
                <span class="btn btn-primary btn-file">
                    <span class="fileinput-new"> {{__('Pilih gambar')}} </span>
                    <span class="fileinput-exists"> {{__('Ubah')}} </span>
                    <input type="hidden">
                    <input type="file" name="img" id="img">
                </span>
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
    <label class="col-4 col-form-label" for="example-input-normal">Konten</label>
    <div class="col-8">
        {!! Form::textarea('description', null, ['class' => $errors->has('description') ? 'form-control is-invalid' : 'summernote']) !!}
        @error('description')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
<br>
<div class="text-right">
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="{{ route('banner.index') }}" class="btn btn-secondary">Kembali</a>
</div>
