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
        <h6>{{__('Gambar')}}</h6>
        <div class="fileinput fileinput-new" data-provides="fileinput">
            <div class="fileinput-new thumbnail" style="height: 150px;"></div>
            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 10px;"></div>
            <div>
                <span class="btn btn-primary btn-file">
                    <span class="fileinput-new"> {{__('Pilih gambar')}} </span>
                    <span class="fileinput-exists"> {{__('Ubah')}} </span>
                    <input type="hidden">
                    <input type="file" name="logo" id="logo">
                </span>
                <a href="javascript:;" class="btn btn-danger fileinput-exists" data-dismiss="fileinput"> {{__('Hapus')}} </a>
            </div>
        </div>
    </div>
</div>
<div class="text-right">
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="{{ route('e-sport-team.index') }}" class="btn btn-secondary">Kembali</a>
</div>
