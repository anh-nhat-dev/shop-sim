<div class="col-md-9 col-xs-12">
    <div class="white-box">
        <div class="form-group">
            <label class="col-md-12">Tên nhà mạng</label>
            <div class="col-md-12">
                <input type="text" name="name" placeholder="Ex: Viettel" class="form-control form-control-line">
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
    <div class="panel panel-default">
            <div class="panel-heading">Thumbnail</div>
            <div class="panel-wrapper collapse in">
                <div class="panel-body">
                    <div class="input-group">
                        <span class="input-group-btn">
                            <a id="lfm" data-result="thumbnail" class="btn btn-primary">
                                <i class="fa fa-picture-o"></i> Choose
                            </a>
                        </span>
                    </div>
                    <div id="thumbnail">
                        
                    </div>
                </div>
            </div>
        </div>
</div>
@csrf
