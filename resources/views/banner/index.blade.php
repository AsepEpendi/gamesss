@extends('layouts.backend.app')

@section('page-title')
{{__('Banner')}}
@endsection

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <h4 class="page-title">Banner</h4>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">MENU</a></li>
                        <li class="breadcrumb-item active">Banner</li>
                    </ol>
                </div>
            </div> <!--end row-->
        </div>
        <!--end page-title-->
        <div class="row">
            <div class="col-sm-12">
                <div class="card m-b-30">
                    <div class="card-body">
                        @permission('create-banner')
                            <a href="{{ route('banner.create') }}"><button type="button" class="btn btn-primary waves-effect waves-light">
                                <i class="mdi mdi-gamepad-round"></i> Tambah</button>
                            </a>
                        @endpermission
                        <br/>
                        <br/>
                        <table id="banner" class="table table-sm table-striped table-bordered" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>Alt Text</th>
                                    <th>Link</th>
                                    <th>Text Link</th>
                                    <th>Highlight Text</th>
                                    <th>Sort Text</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>Urutan</th>
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
    $('#banner').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{ route('banner.index') }}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'img', name: 'img' },
            { data: 'alt_text', name: 'alt_text' },
            { data: 'link', name: 'link' },
            { data: 'text_link', name: 'text_link' },
            { data: 'highlight_text', name: 'highlight_text' },
            { data: 'short_text', name: 'short_text' },
            { data: 'description', name: 'description' },
            { data: 'status', name: 'status' },
            { data: 'urutan', name: 'urutan' },
            { data: 'action', name: 'action', orderable: false, searchable: false },
        ],
        order: [[ 0, 'desc' ]],
        "scrollX": true
    });
});
</script>
@endsection
