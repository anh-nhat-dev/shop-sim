<div class="col-md-9 col-xs-12">
        <div class="white-box">
            <div class="form-group">
                <label class="col-md-12">Tiêu đề trang</label>
                <div class="col-md-12">
                    <input type="text" value="{{$page->name}}" name="name" placeholder="Ex: Viettel" class="form-control form-control-line">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-12"> Nội dung<span class="help text-danger">*</span></label>
                <div class="col-md-12">
                <textarea id="content" name="content">{{$page->content}}</textarea>
                </div>
            </div>
        </div>
        @include('backend.seo.form-seo-edit', ['seo' => $page->seocontent])
    </div>
    <div class="col-md-3">
        <div class="panel panel-default">
            <div class="panel-heading">Public</div>
            <div class="panel-wrapper collapse in">
                <div class="panel-body">
                    <button class="btn btn-info waves-effect waves-light" type="submit"><span class="btn-label"><i class="ti-save"></i></span>Save</button>
                </div>
            </div>
        </div>
    </div>
    @csrf
    <input type="hidden" name="_method" value="PUT" />
    