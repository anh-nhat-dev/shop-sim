@extends('layout.backend.master')

@section('title', $category->name)

@section('main')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
    <h4 class="page-title">{{$category->name}}</h4>
    </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <ol class="breadcrumb">
        <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
        <li><a href="{{route('admin.the-loai-sim.index')}}">Danh sách thể loại</a></li>
            <li class="active">{{$category->name}}</li>
        </ol>
    </div>

</div>
<div class="row">
    <form action="{{route('admin.the-loai-sim.update', $category->id)}}" class="form-horizontal form-material" method="POST">
        @include('backend.category._inc.form-edit')
    </form>
</div>
@stop
