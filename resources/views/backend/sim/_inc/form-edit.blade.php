<div class="col-md-9 col-xs-12">
    <div class="white-box">
        <div class="form-group">
            <div class="col-md-6">
                <label class="col-md-12">Tên sim</label>
                <div class="col-md-12">
                <input type="text" name="name" value="{{$sim->name}}" placeholder="Ex: 0123.456.78" class="form-control form-control-line">
                </div>
            </div>
            <div class="col-md-6">
                <label class="col-md-12">Số sim</label>
                <div class="col-md-12">
                    <input type="text" value="{{$sim->number}}" name="number" placeholder="Ex: 012345678" class="form-control form-control-line">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-6">
                <label class="col-md-12">Loại sim</label>
                <select class="form-control" name="category_id">
                    @foreach ($categories as $category)
                    <option @if ($sim->category_id == $category->id) selected @endif value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6">
                <label class="col-md-12">Nhà mạng</label>
                <div class="col-md-12">
                    <select class="form-control" name="network_id" >
                        @foreach ($networks as $network)
                        <option @if ($sim->network_id == $network->id) selected @endif value="{{$network->id}}">{{$network->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-12">
                <label class="col-md-12">Giá bán</label>
                <div class="col-md-12">
                    <input type="text" value="{{$sim->price}}"" name="price" placeholder="Ex: 1500000" class="form-control form-control-line">
                </div>
            </div>
        </div>
    </div>
    @include('backend.seo.form-seo-edit', ['seo' => $sim->seocontent])
</div>
<div class="col-md-3">
    <div class="panel panel-default">
        <div class="panel-heading">Public</div>
        <div class="panel-wrapper collapse in">
            <div class="panel-body">
                <button class="btn btn-warning waves-effect waves-light" type="submit"><span class="btn-label"><i class="ti-save"></i></span>Save</button>
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">Tình trạng</div>
        <div class="panel-wrapper collapse in">
            <div class="panel-body">
                <select class="form-control" name="status" >
                    <option @if ($sim->status == 'selling') selected @endif value="selling">Đang bán</option>
                    <option @if ($sim->status == 'sold') selected @endif value="sold">Đã bán</option>
                </select>
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">Ảnh sim</div>
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
                    <div class="item-img" style="background: url({{asset($sim->thumbnail)}}) no-repeat center; background-size: cover">
                        <input type="hidden" name="thumbnail" value="{{$sim->thumbnail}}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@csrf
<input type="hidden" value="PUT" name="_method" />
    