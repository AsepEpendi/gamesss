@extends('layouts.backend.app')

@section('page-title')
{{__('Schedule')}}
@endsection

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <h4 class="page-title">Schedule</h4>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">MENU</a></li>
                        <li class="breadcrumb-item active">Schedule</li>
                    </ol>
                </div>
            </div> <!--end row-->
        </div>
        <!--end page-title-->
        <div class="row">
            <div class="col-sm-12">
                <div class="card m-b-30">
                    <div class="card-body">
                        @permission('create-schedule')
                            <a href="{{ route('schedule.create') }}"><button type="button" class="btn btn-primary waves-effect waves-light">
                                <i class="mdi mdi-gamepad-round"></i> Tambah</button>
                            </a>
                        @endpermission
                        <br/>
                        <br/>
                        <table id="schedule" class="table table-sm table-striped table-bordered" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Cover</th>
                                    <th>Date</th>
                                    <th>Description</th>
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
    $('#schedule').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{ route('schedule.index') }}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'cover', name: 'cover' },
            { data: 'schedule_date', name: 'schedule_date' },
            { data: 'description', name: 'description' },
            { data: 'action', name: 'action', orderable: false, searchable: false },
        ],
        order: [[ 0, 'desc' ]],
        "scrollX": true
    });
});
</script>
@endsection
