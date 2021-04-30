<div class="form-group row">
    <label class="col-4 col-form-label" for="example-input-normal">Enemy Team</label>
    <div class="col-8">
        {!! Form::select('enemy_team_id', ['' =>'-- --']+App\ESportTeam::pluck('name', 'id')->all(), null, ['class' => 'form-control select2', 'required' => 'required']) !!}
        @error('enemy_team_id')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label class="col-4 col-form-label" for="example-input-normal">Sport Team</label>
    <div class="col-8">
        {!! Form::select('team_esport_id', ['' =>'-- --']+App\ESportTeam::pluck('name', 'id')->all(), null, ['class' => 'form-control select2', 'required' => 'required']) !!}
        @error('team_sport_id')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label class="col-4 col-form-label" for="example-input-normal">Channel</label>
    <div class="col-8">
       {!! Form::select('channel_id[]', $channel, old('channel_id'), ['class' => 'chosen-select','data-placeholder' => 'Pilih Channel', 'multiple' => 'multiple', 'tabindex'=>'2']) !!}
		{!! $errors->first('channel_id', '<span class="has-error">:message</span>') !!}
    </div>
</div>
<div class="form-group row">
    <label class="col-4 col-form-label" for="example-input-normal">Meta Desc</label>
    <div class="col-8">
        {!! Form::textarea('meta_desc', null, ['class' => $errors->has('meta_desc') ? 'form-control is-invalid' : 'form-control', 'rows'=>
        '2']) !!}
        @error('meta_desc')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label class="col-4 col-form-label" for="example-input-normal">Image</label>
    <div class="col-8">
        <div class="fileinput fileinput-new" data-provides="fileinput">
            <div class="fileinput-new thumbnail" style="height: 150px;">
                <img src="{{asset('storage/schedule/'.$schedule->cover)}}">
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
                <small class="text-muted">Biarkan Saja jika tidak ingin mengubah gambar</small>
            </p>
            </div>
        </div>
    </div>
</div>
<div class="form-group row">
	{!! Form::label('schedule_date', 'Date', ['class'=>'col-4 form-control-label']) !!}
	<div class="col-sm-8" id="edit_publish">{{ Carbon\Carbon::now()->format('d M Y @ H:i') }} <span class="badge badge-sm badge-primary" style="cursor:pointer">Edit</span></div>
    <div class="publish col-sm-8" style="display: none">
        <div class="row">
            <div class="col-sm-6">
                <div class="input-group">
                    <input type="text" name="hari" class="form-control" placeholder="17"  value="{{ date('d') }}">
                    <span class="input-group-addon">-</span>
                    <select name="bulan" class="form-control" style="padding: 0 0.75rem">
                    @foreach ($months as $num => $name)
                        @if (date('m') == $num )
                        <option value="{{ $num }}" selected>{{ $name }}</option>
                        @else
                        <option value="{{ $num }}">{{ $name }}</option>
                        @endif
                    @endforeach
                    </select>
                    <span class="input-group-addon">-</span>
                    <input type="text" name="tahun" class="form-control" placeholder="1945" value="{{ date('Y') }}">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="input-group">
                    <input type="text" name="jam" class="form-control" placeholder="10" value="{{ date('H') }}">
                    <span class="input-group-addon">:</span>
                    <input type="text" name="menit" class="form-control" placeholder="00" value="{{ date('i') }}">
                </div>
            </div>
        </div>
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
    <a href="{{ route('schedule.index') }}" class="btn btn-secondary">Kembali</a>
</div>
