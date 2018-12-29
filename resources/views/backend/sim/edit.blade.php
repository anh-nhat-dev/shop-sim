@extends('layout.backend.master')

@section('title', $sim->name)

@section('main')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
    <h4 class="page-title">{{$sim->name}}</h4>
    </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <ol class="breadcrumb">
        <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
        <li><a href="{{route('admin.sims.index')}}">Danh sách sim</a></li>
            <li class="active">{{$sim->name}}</li>
        </ol>
    </div>

</div>
<div class="row">
    <form action="{{route('admin.sims.update', $sim->id)}}" class="form-horizontal form-material" method="POST">
        @include('backend.sim._inc.form-edit')
    </form>
</div>
@stop

@section('script')
<script src="/vendor/laravel-filemanager/js/lfm.js"></script>
<script>
jQuery(document).ready(function () {
    $('#lfm').filemanager('file');
});
</script>
@stop
@section('style')
<link href="../plugins/bower_components/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
<style>
    .item-img {
        width: 150px;
        height: 150px;
        display: inline-block;
        margin-right: 15px;
        border: 1px solid #ddd;
        padding: 15px;
        background-size: cover;
        position: relative;
        margin-top: 15px;
    }

    .item-img-delete {
        position: absolute;
        top: -10px;
        right: -10px;
        color: red;
        background: #fff;
        border: 1px solid #ddd;
        border-radius: 50%;
    }

</style>
@stop