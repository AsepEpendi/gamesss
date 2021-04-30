@permission($can_edit)
<a href="javascript:void(0)" data-toggle="tooltip"  data-id="{{$row_id}}" data-original-title="Edit" class="edit btn btn-primary btn-sm edit">
<i class="fas fa-pencil-alt"></i> Ubah</a>
@endpermission
@permission($can_delete)
<a href="javascript:void(0)" data-toggle="tooltip"  data-id="{{$row_id}}" data-original-title="Delete" class="btn btn-danger btn-sm delete">
<i class="fas fa-trash"></i> Hapus</a>
@endpermission
