@extends('layout.frontend.master')

@section('content')
<h1 class="header">Sim {{$sim->number}} - Bán sim {{$sim->name}} giá rẻ tại khosim.com</h1>

                        <div class="">



                            <div class="sim-info" style="background-color: #fff;overflow: hidden;">
                                <div class="row">
                                    <div class="col-md-7" style="padding-top:30px;">
                                        <div class="col-xs-4 col-md-4">Số Sim:</div>
                                        <div class="col-xs-8 col-md-8"><strong style="color: red; font-size: 20px;">{{$sim->name}}</strong></div>

                                        <div class="col-xs-4 col-md-4">Giá bán:</div>
                                        <div class="col-xs-8 col-md-8"><strong style="color: #000; font-size: 16px;">
                                            @money($sim->price, 'VND')
                                        </strong>
                                        </div>

                                        <div class="col-xs-4 col-md-4">Mạng:</div>
                                        <div class="col-xs-8 col-md-8">
                                            <img src="{{asset($sim->network->thumbnail)}}" width="50" alt="{{$sim->number}}">
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="phoisim">
                                        <img src="{{$sim->thumbnail}}" alt="" /> </div>

                                    </div>
                                </div>
                            </div>

                            <style type="text/css">
                                .phoisim {
                                    position: relative;
                                }

                                .phoisim .phoi-info {
                                    position: absolute;
                                    top: 60px;
                                    left: 127px;
                                    transform: rotate(-6deg);
                                    -webkit-transform: rotate(-6deg);
                                    -ms-transform: rotate(-6deg);
                                    -moz-transform: rotate(-6deg);
                                    font-weight: bold;
                                }

                                .phoisim .phoi-info p {
                                    margin-bottom: 0;
                                }

                                .phoisim .phoi-info p.price {
                                    font-size: 11px;
                                }
                            </style>

                            <div class="clearfix"></div>
                            <br />
                            <form action="" method="POST" role="form" style="background-color: #DAEEFF; padding:10px;" class="form-horizontal">
                                <input name="phone_buy" value="{{$sim->name}}" type="hidden" class="form-control" required>


                                <div class="form-group">
                                    <label for="" class="col-sm-3 control-label">Họ và tên: (*)</label>
                                    <div class="col-sm-9">
                                        <input name="name" type="text" class="form-control" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="" class="col-sm-3 control-label">Điện thoại: (*)</label>
                                    <div class="col-sm-9">
                                        <input name="phone" type="tel" class="form-control" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="" class="col-sm-3 control-label">Địa chỉ</label>
                                    <div class="col-sm-9">
                                        <textarea name="address" class="form-control" required></textarea>
                                    </div>
                                </div>

                                <div class="form-group text-center"><button type="submit" class="btn btn-primary">Đặt Sim</button></div>
                            </form>


                            <div class="box" style="background-color: #fff;margin: 10px 0; padding:10px;">
                                <h2><strong>Hướng dẫn đặt mua sim {{$sim->name}}:</strong></h2>
                                <p>▪ <strong>C&aacute;ch 1:</strong>&nbsp;Kho Sim giao sim v&agrave; thu tiền tận nh&agrave; miễn ph&iacute; trong ng&agrave;y (&aacute;p dụng H&agrave; Nội, TP.HCM v&agrave; c&aacute;c tỉnh/th&agrave;nh c&oacute; đại l&yacute;)<br
                                    />▪ <strong>C&aacute;ch 2:</strong> Qu&yacute; kh&aacute;ch c&oacute; thể đến cửa h&agrave;ng tại H&agrave; Nội hoặc TP HCM để nhận sim v&agrave; thanh to&aacute;n.<br />▪ <strong>C&aacute;ch 3:</strong>&nbsp;Qu&yacute;
                                    kh&aacute;ch đặt cọc v&agrave; thanh to&aacute;n tiền c&ograve;n lại khi nhận sim (&aacute;p dụng tại c&aacute;c tỉnh kh&ocirc;ng c&oacute; đại l&yacute;), Qu&yacute; kh&aacute;ch đảm bảo việc mua h&agrave;ng bằng c&aacute;ch
                                    đặt cọc tối thiểu 10% gi&aacute; trị sim {{$sim->name}} qua chuyển khoản hoặc thẻ c&agrave;o. Ch&uacute;ng t&ocirc;i sẽ tiến h&agrave;nh gửi chuyển ph&aacute;t nhanh sim đến tay qu&yacute; kh&aacute;ch v&agrave; thu số
                                    tiền c&ograve;n lại&nbsp;<span style="color: #333333;"><em>(Hệ thống&nbsp;chuyển ph&aacute;t&nbsp;tr&ecirc;n cả nước đều cung cấp dịch vụ thu hộ tiền cho người b&aacute;n - gọi tắt l&agrave; COD. Theo đ&oacute;, bưu điện sẽ giao h&agrave;ng (sim) đến tận tay qu&yacute; kh&aacute;ch v&agrave; thu tiền cho ch&uacute;ng t&ocirc;i)</em>&nbsp;</span></p>
                                <p style="text-align: left;"><strong><span class="titlesimcard">THỦ TỤC ĐĂNG K&Yacute; SIM:</span></strong></p>
                                <p style="text-align: left;"><strong>1.</strong> Bản gốc&nbsp;CMND (cấp dưới 15 năm) hoặc Căn cước c&ocirc;ng d&acirc;n (c&ograve;n thời hạn) hoặc Hộ chiếu (c&ograve;n thời hạn) của chủ thu&ecirc; bao.</p>
                                <p style="text-align: left;"><strong>2.</strong> Ảnh ch&acirc;n dung (ảnh người thật) của chủ thu&ecirc; bao tại thời điểm giao dịch.</p>
                                <p style="text-align: left;">Xem th&ecirc;m hướng dẫn đăng k&yacute; th&ocirc;ng tin <strong><a href="../../../huong-dan-dang-ky-thong-tin">tại đ&acirc;y</a></strong></p>
                                <p style="text-align: center;"><em>K&iacute;nh ch&uacute;c qu&yacute; kh&aacute;ch gặp nhiều may mắn khi sở hữu số thu&ecirc; bao&nbsp;<strong>{{$sim->name}}</strong></em></p>
                            </div>

                            <p class="text-center">
                                <h2 style="text-align: center;"><span style="font-size: 14px;"><strong>So dep {{$sim->name}} tai khosim.com, gia sim {{$sim->name}} tai khosim.com,&nbsp;mua sim&nbsp;{{$sim->name}}, ban sim&nbsp;{{$sim->name}}</strong></span></h2>
                            </p>

                            <div align="center" style="margin-top: 25px;"><strong>&lt;&lt; <a href="javascript:history.back(-1)">Về trang trước</a> </strong></div>
                        </div>
@stop