<div class="form-group row">
    <label class="col-4 col-form-label" for="example-input-normal">Cover</label>
    <div class="col-8">
        <h6>{{__('Gambar')}}</h6>
        <div class="fileinput fileinput-new" data-provides="fileinput">
            <div class="fileinput-new thumbnail" style="height: 150px;"></div>
            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 10px;"></div>
            <div>
                <span class="btn btn-primary btn-file">
                    <span class="fileinput-new"> {{__('Pilih Gambar')}} </span>
                    <span class="fileinput-exists"> {{__('Ubah')}} </span>
                    <input type="hidden">
                    <input type="file" name="cover" id="cover">
                </span>
                <a href="javascript:;" class="btn btn-danger fileinput-exists" data-dismiss="fileinput"> {{__('Hapus')}} </a>
            </div>
        </div>
    </div>
</div>
<div class="form-group row">
    <label class="col-4 col-form-label" for="example-input-normal">Title</label>
    <div class="col-8">
        {!! Form::text('title', null, ['class' => $errors->has('title') ? 'form-control is-invalid' : 'form-control', 'placeholder' => 'Title']) !!}
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
