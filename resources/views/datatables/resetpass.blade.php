{!! Form::model($model, ['url' => $form_url, 'method' => 'delete', 'class' => 'form-inline js-confirm', 'data-confirm' => $confirm_message]) !!}
<a href="{{ $reset_url }}" class="btn btn-success btn-action ml-2 btn-sm" data-toggle="tooltip" data-placement="top" title="Reset Password">
    <i class="mdi mdi-car-brake-parking"></i>
</a>
<a href="{{ $edit_url }}" class="btn btn-primary btn-action ml-2 btn-sm" data-toggle="tooltip" data-placement="top" title="Edit">
    <i class="fas fa-pencil-alt"></i>
</a>
<a href="{{ $edit_url }}" class="btn btn-danger btn-action ml-2 btn-sm" data-toggle="tooltip" data-placement="top" title="Hapus" type="submit">
    <i class="fas fa-trash"></i></a>
{!! Form::close()!!}
