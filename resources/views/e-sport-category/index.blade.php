@extends('layouts.backend.app')

@section('page-title')
{{__('E-Sport Category')}}
@endsection

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <h4 class="page-title">E-Sport Category</h4>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">MENU</a></li>
                        <li class="breadcrumb-item active">E-Sport Category</li>
                    </ol>
                </div>
            </div> <!--end row-->
        </div>
        <!--end page-title-->
        <div class="row">
            <div class="col-sm-12">
                <div class="card m-b-30">
                    <div class="card-body">
                        @permission('create-e-sport-category')
                            <a href="javascript:void(0)" id="createNewSport" class="btn btn-primary waves-effect waves-light">
                                <i class="mdi mdi-gamepad-round"></i> Tambah</button>
                            </a>
                        @endpermission
                        <br/>
                        <br/>
                        <table class="table-sm table-striped table-bordered dt-responsive nowrap e-sport-category" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>Name E-Sport Category</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
                <div class="modal fade" id="ajaxModel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="modelHeading"></h4>
                            </div>
                            <div class="modal-body">
                                <form id="e-sport-categoryForm" name="e-sport-categoryForm" class="form-horizontal">
                                    <input type="hidden" name="id" id="id">
                                    <div class="form-group">
                                        <label for="name" class="col-sm-8 control-label">Name E-Sport Category</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Name E-Sport">
                                        </div>
                                    </div>
                                    <div class="text-right col-12">
                                        <button type="submit" class="btn btn-primary" id="saveBtn" value="create">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!--end col-->
        </div>
        <!--end row-->
    </div>
</div>
@endsection
@section('script')
<script src="{{ asset('assets-backend/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('assets-backend/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ asset('assets-backend/plugins/datatables/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('assets-backend/plugins/datatables/responsive.bootstrap4.min.js')}}"></script>
<script type="text/javascript">
$(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    toastr.options = {
        "closeButton": true,
        "newestOnTop": true,
        "positionClass": "toast-top-right"
    };
    var table = $('.e-sport-category').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('e-sport-category.index') }}",
        columns: [
            {data: 'name', name: 'name'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
    $('#createNewSport').click(function () {
        $('#saveBtn').val("create-e-sport-category");
        $('#id').val('');
        $('#productForm').trigger("reset");
        $('#modelHeading').html("Create E-Sport Category");
        $('#ajaxModel').modal('show');
    });
    $('body').on('click', '.edit', function () {
    var id = $(this).data('id');
        $.get("{{ route('e-sport-category.index') }}" +'/' + id +'/edit', function (data) {
            $('#modelHeading').html("Edit E-Sport Category");
            $('#ajaxModel').modal('show');
            $('#id').val(data.id);
            $('#name').val(data.name);
        })
    });
    $('#saveBtn').click(function (e) {
        e.preventDefault();
        $(this).html('<span class="spinner-grow spinner-grow-sm"></span> Loading . . .');
        $.ajax({
            data: $('#e-sport-categoryForm').serialize(),
            url: "{{ route('e-sport-category.store') }}",
            type: "POST",
            dataType: 'json',
                success: function(data) {
                toastr.success(data.success);
                $('#ajaxModel').modal('hide');
                table.draw();
            },
            error: function (err) {
            if (err.status == 422) {
                    console.log(err.responseJSON);
                    console.warn(err.responseJSON.errors);
                    $.each(err.responseJSON.errors, function (i, error) {
                        var el = $(document).find('[name="'+i+'"]');
                        el.after($('<span style="color: red;">'+error[0]+'</span>'));
                    });
                }
            }
        });
    });
    $('body').on('click', '.delete', function () {
        var id = $(this).data("id");
        confirm("Are You sure want to delete !");
        $.ajax({
            type: "DELETE",
            url: "{{ route('e-sport-category.store') }}"+'/'+id,
            success: function(res) {
            toastr.success(res.success);
            table.draw();
            }
        });
    });
});
</script>
@endsection
