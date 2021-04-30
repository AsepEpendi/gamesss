@extends('layouts.backend.app')

@section('page-title')
{{__('E-Sport Team')}}
@endsection

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <h4 class="page-title">E-Sport Team</h4>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">MENU</a></li>
                        <li class="breadcrumb-item active">E-Sport Team</li>
                    </ol>
                </div>
            </div> <!--end row-->
        </div>
        <!--end page-title-->
        <div class="row">
            <div class="col-sm-12">
                <div class="card m-b-30">
                    <div class="card-body">
                        @permission('create-e-sport-team')
                            <a href="{{ route('e-sport-team.create') }}"><button type="button" class="btn btn-primary waves-effect waves-light">
                                <i class="mdi mdi-gamepad-round"></i> Tambah</button>
                            </a>
                        @endpermission
                        <br/>
                        <br/>
                        <table id="e-sport-team" class="table table-sm table-striped table-bordered" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>E-Sport Category</th>
                                    <th>Name</th>
                                    <th>Logo</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <!--end col-->
        </div><!--end row-->
    </div>
</div>
@endsection
@section('script')
<script src="{{ asset('assets-backend/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('assets-backend/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ asset('assets-backend/plugins/datatables/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('assets-backend/plugins/datatables/responsive.bootstrap4.min.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function(){
    $('#e-sport-team').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{ route('e-sport-team.index') }}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'esport_category.name', name: 'esport_category.name' },
            { data: 'name', name: 'name' },
            { data: 'logo', name: 'logo' },
            { data: 'action', name: 'action', orderable: false, searchable: false },
        ],
        order: [[ 0, 'desc' ]],
        "scrollX": true
    });
});
</script>
@endsection
