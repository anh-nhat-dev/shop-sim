<div class="col-md-9 col-xs-12">
    <div class="white-box">
        <div class="form-group">
            <div class="col-md-6">
                <label class="col-md-12">Tên sim</label>
                <div class="col-md-12">
                    <input type="text" name="name" placeholder="Ex: 0123.456.78" class="form-control form-control-line">
                </div>
            </div>
            <div class="col-md-6">
                <label class="col-md-12">Số sim</label>
                <div class="col-md-12">
                    <input type="number" name="number" placeholder="Ex: 012345678" class="form-control form-control-line">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-6">
                <label class="col-md-12">Loại sim</label>
                <select class="form-control" name="category_id">
                    @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6">
                <label class="col-md-12">Nhà mạng</label>
                <div class="col-md-12">
                    <select class="form-control" name="network_id" >
                        @foreach ($networks as $network)
                        <option value="{{$network->id}}">{{$network->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-12">
                <label class="col-md-12">Giá bán</label>
                <div class="col-md-12">
                    <input type="number" name="price" placeholder="Ex: 1500000" class="form-control form-control-line">
                </div>
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
