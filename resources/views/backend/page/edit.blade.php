@extends('layout.backend.master')

@section('title', $page->name)

@section('main')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">{{$page->name}}</h4>
    </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <ol class="breadcrumb">
        <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
        <li><a href="{{route('admin.pages.index')}}">Danh sách trang</a></li>
        <li class="active">{{$page->name}}</li>
        </ol>
    </div>

</div>
<div class="row">
    <form action="{{route('admin.pages.update', $page->id)}}" class="form-horizontal form-material" method="POST">
        @include('backend.page._inc.form-edit')
    </form>
</div>
@stop

@section('script')
<script>
jQuery(document).ready(function () {
    if ($("#content").length > 0) {
        tinymce.init({
            selector: "textarea#content",
            theme: "modern",
            height: 300,
            plugins: [
                "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker", "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking", "save table contextmenu directionality emoticons template paste textcolor"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
        });
    }
});
</script>
@stop

