@extends('layouts.backend.app')

@section('page-title')
{{__('Permission')}}
@endsection

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <h4 class="page-title">Permission</h4>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Management</a></li>
                        <li class="breadcrumb-item active">Permission</li>
                    </ol>
                </div>
            </div> <!-- end row -->
        </div>
        <!-- end page-title -->
        <div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">
                        <table id="permission" class="table-sm table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>Module</th>
                                <th>Nama Permission</th>
                                <th>Display</th>
                                <th>Deskripsi</th>
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
    $('#permission').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{ route('permission.index')}}',
        columns: [
                { data: 'module.name', name: 'module.name' },
                { data: 'name', name: 'name' },
                { data: 'display_name', name: 'display_name' },
                { data: 'description', name: 'description' },
                { data: 'action', name: 'action', orderable: false, searchable: false },
            ],
        order: [[ 0, 'desc' ]],
    });
});
</script>
@endsection
