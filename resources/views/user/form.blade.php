
<div class="form-group row">
    <label class="col-4 col-form-label" for="example-input-normal">Nama Pengguna</label>
    <div class="col-8">
        {!! Form::text('name', null, ['class' => $errors->has('name') ? 'form-control is-invalid' : 'form-control', 'placeholder' => 'Nama Pengguna']) !!}
        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label class="col-4 col-form-label" for="example-input-normal">Email</label>
    <div class="col-8">
        {!! Form::text('email', null, ['class' => $errors->has('email') ? 'form-control is-invalid' : 'form-control', 'placeholder' => 'user@gmail.com']) !!}
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label class="col-4 col-form-label" for="example-input-normal">Hak Akses</label>
    <div class="col-8">
        {!! Form::select('role_id', [''=>'Hak Akses']+App\Role::whereNotIn('name', ['member'])->pluck('name','id')->all(), null, ['class' => 'form-control select2']) !!}
        @error('role_id')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
<div class="text-right">
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="{{ route('user.index') }}" class="btn btn-secondary">Kembali</a>
</div>
