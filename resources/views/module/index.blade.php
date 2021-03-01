@extends('layouts.backend.app')

@section('page-title')
{{__('Module')}}
@endsection

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <h4 class="page-title">Module</h4>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Management</a></li>
                        <li class="breadcrumb-item active">Module</li>
                    </ol>
                </div>
            </div> <!-- end row -->
        </div>
        <!-- end page-title -->
        <div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">
                        <table id="module" class="table-sm table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>Nama Module</th>
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
    $('#module').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{ route('module.index')}}',
        columns: [
                { data: 'name', name: 'name' },
                { data: 'action', name: 'action', orderable: false, searchable: false },
            ],
        order: [[ 0, 'desc' ]],
    });
});
</script>
@endsection
