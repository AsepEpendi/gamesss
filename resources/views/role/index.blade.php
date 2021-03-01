@extends('layouts.backend.app')

@section('page-title')
{{__('Role')}}
@endsection

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <h4 class="page-title">Role</h4>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Management</a></li>
                        <li class="breadcrumb-item active">Role</li>
                    </ol>
                </div>
            </div> <!-- end row -->
        </div>
        <!-- end page-title -->
        <div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">
                        {{-- @permission('create-role') --}}
                            <a href="{{ route('role.create') }}"><button type="button" class="btn btn-primary waves-effect waves-light">
                                <i class="mdi mdi-gamepad-round"></i> Tambah</button>
                            </a>
                        {{-- @endpermission() --}}
                        <br/>
                        <br/>
                        <table id="role" class="table table-sm table-striped table-bordered table-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>Nama Role</th>
                                <th>Hak Akses</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- end col -->
        </div>
        <!-- end row -->
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
        $('#role').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ route('role.index')}}',
            columns: [
                { data: 'display_name', name: 'display_name' },
                { data: 'permission_role.', name: 'display_name', searchable: false, orderable: false },
                { data: 'action', name: 'action', orderable: false, searchable: false },
            ],
            order: [[ 0, 'asc' ]],
        });
    });
</script>
@endsection
