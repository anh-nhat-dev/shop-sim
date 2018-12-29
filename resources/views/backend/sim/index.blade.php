@extends('layout.backend.master')

@section('title', 'Danh sách nhà mạng')

@section('main')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Danh sách nhà mạng</h4>
    </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <ol class="breadcrumb">
            <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
            <li class="active">Danh sách nhà mạng</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-default block1">
            <div class="panel-heading">
            <a href="{{route('admin.sims.create')}}" class="btn btn-success" id="unblockbtn1"><i class="icon-plus"></i>
                    Create</a>
            </div>
            <div class="panel-wrapper collapse in">
                <div class="panel-body">
                    <div class="table-responsive">
                        <table id="example23" class="display nowrap" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>#STT</th>
                                    <th>Số sim</th>
                                    <th>Ảnh sim</th>
                                    <th>Giá bán</th>
                                    <th>Nhà mạng</th>
                                    <th>Thể loại</th>
                                    <th>Trạng thái</th>
                                    <th>Ngày tạo</th>
                                    <th>Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                @each('backend.sim._inc.item-table', $sims, 'sim')
                            </tbody>
                        </table>
                    </div>
                    
                    {{$sims->links()}}
                </div>
            </div>

        </div>
    </div>
</div>
@stop

@section('script')
<script>
    $(document).ready(function () {
        $('#example23').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
            "paging":   false,
            "ordering": false,
            "info":     false
        });
    })
</script>
@stop