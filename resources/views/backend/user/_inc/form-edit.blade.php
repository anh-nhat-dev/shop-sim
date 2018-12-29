<div class="col-md-9 col-xs-12">
        <div class="white-box">
            <div class="form-group">
                <label class="col-md-12">Full Name</label>
                <div class="col-md-12">
                <input type="text" name="fullname" placeholder="Johnathan Doe" value="{{$user->fullname}}" class="form-control form-control-line">
                </div>
            </div>
            <div class="form-group">
                <label for="example-email" class="col-md-12">Email</label>
                <div class="col-md-12">
                    <input type="email" disabled value="{{$user->email}}" class="form-control form-control-line"
                        id="example-email"> </div>
            </div>
            <div class="form-group">
                <label class="col-md-12">Password</label>
                <div class="col-md-12">
                    <input type="password" value="" name="password" class="form-control form-control-line"> </div>
            </div>
            @csrf
            <input name="_method" type="hidden" value="PUT">
        </div>
    </div>
    <div class="col-md-3">
        <div class="panel panel-default">
            <div class="panel-heading">Public</div>
            <div class="panel-wrapper collapse in">
                <div class="panel-body">
                    <button class="btn btn-info waves-effect waves-light" type="submit"><span class="btn-label"><i
                                class="ti-save"></i></span>Save</button>
                </div>
            </div>
        </div>
    </div>