<div class="col-md-9 col-xs-12">
    <div class="white-box">
        <div class="form-group">
            <label class="col-md-12">Tên thể loại</label>
            <div class="col-md-12">
                <input type="text" name="name" placeholder="Ex: Sim tứ quý" class="form-control form-control-line">
            </div>
        </div>
    </div>
    @include('backend.seo.form-seo')
</div>
<div class="col-md-3">
    <div class="panel panel-default">
        <div class="panel-heading">Public</div>
        <div class="panel-wrapper collapse in">
            <div class="panel-body">
                <button class="btn btn-success waves-effect waves-light" type="submit"><span class="btn-label"><i class="ti-save"></i></span>Save</button>
            </div>
        </div>
    </div>
</div>
@csrf
