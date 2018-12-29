@extends('layout.frontend.master')

@section('content') 
<div class="box-list-sim">
    <h1>
        <strong>Sim số đẹp</strong>
    </h1>
    <div class="content-ex">
        <p>
            <em>
                <strong>Sim so dep</strong>
            </em>
            gi&aacute; rẻ c&aacute;c mạng Viettel, Mobi, Vina. B&aacute;n
            <em>Sim số đẹp</em>
            gi&aacute; gốc, đăng k&yacute; th&ocirc;ng tin ch&iacute;nh chủ. Giao sim miễn
            ph&iacute; to&agrave;n quốc.</p>
        </div> <input style="display: none;" id='price_filter1' value="">
            <input style="display: none;" id='telco_filter1' value="">
            <input style="display: none;" id='giaban_filter1' value="">
            <input style="display: none;" id='m10so_filter1' value="">

            <ul class="filter" id="filter">
                <li class="frange" onclick="showFilter('listlengthFilter')">
                    <span class="criteria">&nbsp;&nbsp;&nbsp;&nbsp;Đầu số</span>
                    <div id="listlengthFilter" class="listprice">
                        <i class="closefilter fa fa-times"></i>

                        <label id="lF0" onclick="lengthFilter(0);" class="all check">Tất cả</label>
                        <label id="lF10" onclick="lengthFilter('10');">Sim đầu số cũ
                        </label>
                        <label id="lF11" onclick="lengthFilter('11');">Sim đầu số mới
                        </label>
                    </div>
                    </li> <li class="frange" onclick="showFilter('listTelcoFilter')">
                        <span class="criteria">
                            <span class="hide480">Nhà
                            </span> Mạng</span>
                        <div id="listTelcoFilter" class="listprice"> <i class="closefilter fa fa-times"></i>

                            <label id="tF" onclick="telcoFilter()" class="all check">Tất các mạng</label>
                            <label id="tFviettel" onclick="telcoFilter('viettel')">Viettel</label>
                            <label id="tFvinaphone" onclick="telcoFilter('vinaphone')">Vinaphone</label>
                            <label id="tFmobifone" onclick="telcoFilter('mobifone')">Mobifone</label>
                            <label id="tFvietnamobile" onclick="telcoFilter('vietnamobile')">Vietnamobile</label>
                            <label id="tFgmobile" onclick="telcoFilter('gmobile')">Gmobile</label>
                            </div> </li>
                <li class="frange" onclick="showFilter('listPriceFilter');var objDiv = document.getElementById('listPriceFilter');objDiv.scrollTop = objDiv.scrollHeight;">
                    <span class="criteria">
                        <span class="hide480">Khoảng
                        </span>Giá</span>
                    <div id="listPriceFilter" class="listprice">
                        <i class="closefilter fa fa-times"></i>

                        <label id="pF0" onclick="priceFilter(0);" class="all check">Tất cả mức giá</label>
                        <label id="pF01" onclick="priceFilter('0,1');">Dưới 1 triệu</label>
                        <label id="pF13" onclick="priceFilter('1,3');">1 - 3 triệu</label>
                        <label id="pF35" onclick="priceFilter('3,5');">3 - 5 triệu</label>
                        <label id="pF510" onclick="priceFilter('5,10');">5 - 10 triệu</label>
                        <label id="pF1020" onclick="priceFilter('10,20');">10 - 20 triệu</label>
                        <label id="pF2050" onclick="priceFilter('20,50');">20 - 50 triệu</label>
                        <label id="pF50100" onclick="priceFilter('50,100');">50 - 100 triệu</label>
                        <label id="pF1000" onclick="priceFilter('100,0');">Trên 100 triệu</label>
                    </div>
                </li>

                <li class="frange" onclick="showFilter('listSortFilter')">
                    <span class="criteria">Sắp xếp</span>
                    <div id="listSortFilter" class="listprice">
                        <i class="closefilter fa fa-times"></i>

                        <label id="sF0" onclick="sortFilter(0)" class="all check">Ngẫu nhiên</label>
                        <label id="sF1" onclick="sortFilter(1)">Giá thấp đến cao</label>
                        <label id="sF2" onclick="sortFilter(2)">Giá cao đến thấp</label>

                    </div>
                </li>
                </ul> <form style="margin-bottom: 0px;" id="filter_form" name="filter_form" method="get" action="">
                    <div class="box-list-sim-top">
                        <div class="row" style="display: none;">
                            <div class="col-md-3">
                                <select name="m10so_filter" id="m10so_filter" onchange="submit_filter();" class="form-control">
                                    <option value="0">10/11 số</option>
                                    <option value="10"> 10 số</option>
                                        <option value="11"> 11 số</option>
                                            </select> </div>
                                                <div class="col-md-3">
                                                    <select name="price_filter" id="price_filter" onchange="submit_filter();"
                                                        class="form-control">
                                                        <option value="0">Mức giá</option>
                                                        <option value="0,1">Dưới 1 triệu</option>
                                                        <option value="1,3">1 - 3 triệu</option>
                                                        <option value="3,5">3 - 5 triệu</option>
                                                        <option value="5,10">5 - 10 triệu</option>
                                                        <option value="10,20">10 - 20 triệu</option>
                                                        <option value="20,50">20 - 50 triệu</option>
                                                        <option value="50,100">50 - 100 triệu</option>
                                                        <option value="100,0">Trên 100 triệu</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-3">
                                                    <select name="telco_filter" id="telco_filter" onchange="submit_filter();"
                                                        class="form-control">
                                                        <option value="">Mạng</option>
                                                        <option value="viettel">Viettel</option>
                                                        <option value="vinaphone">Vinaphone</option>
                                                        <option value="mobifone">Mobifone</option>
                                                        <option value="vietnamobile">Vietnamobile</option>
                                                        <option value="gmobile">Gmobile</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-3">
                                                    <select name="giaban_filter" id="giaban_filter" onchange="submit_filter();"
                                                        class="form-control">
                                                        <option value="0">Sắp xếp</option>
                                                        <option value="1">Giá thấp đến cao</option>
                                                        <option value="2">Giá cao đến thấp</option>

                                                    </select>
                                                </div>
                                                </div> </div>
                                                    </form>
                                                    <div class="choosedfilter"> <a id="choosedfilter" class="reset"
                                                            href="javascript:resetFilter();">Xóa tất cả <i class="ic-clearfil">
                                                                </i>
                                                        </a>
                                                        </div> <div class="box-list-sim-content">
                                                            <table class="table table-bordered">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="hidden-xs">#</th>
                                                                        <th>SỐ SIM</th>
                                                                        <th>GIÁ BÁN</th>
                                                                        <th class="loai-mang">MẠNG</th>
                                                                        <th class="hidden-xs">LOẠI SIM</th>
                                                                        <th>ĐẶT MUA</th>
                                                                        </tr> </thead>
                                                                <tbody>
                                                                    @each('frontend._inc.item-sim', $sims, 'sim') 
                                                                </tbody>
                                                            </table>
                            </div>
                            <nav class="text-center">
                                <nav>
                                    <ul class="pagination">
                                        {{$sims->links()}}
                                    </ul>
                                </nav>
                                </nav> </div>
                                    <div class="box box-about-sim col-xs-0 col-sm-0 col-md-0">
                                        <div class="box-content" style="height: 400px;overflow: hidden;">

                                            <p>Bạn c&oacute; thể xem nhanh phần m&igrave;nh quan t&acirc;m trong
                                                b&agrave;i
                                                viết:</p>
                                            <ul>
                                                <li>
                                                    <span style="color: #3366ff;">
                                                        <strong>
                                                            <a style="color: #3366ff;" href="https://goo.gl/kFfBC9#sim_so_dep">SIM
                                                                số đẹp phải c&oacute; số lặp lại, dễ nhớ</a>
                                                        </strong>
                                                    </span>
                                                </li>
                                                <li>
                                                    <span style="color: #3366ff;">
                                                        <strong>
                                                            <a style="color: #3366ff;" href="https://goo.gl/kFfBC9#luu_y_khi_mua_sim">SIM
                                                                số đẹp phải c&oacute; c&aacute;c chữ số cuối
                                                                tr&ugrave;ng nhau</a>
                                                        </strong>
                                                    </span>
                                                </li>
                                                <li>
                                                    <span style="color: #3366ff;">
                                                        <strong>
                                                            <a style="color: #3366ff;" href="https://goo.gl/kFfBC9#sim_so_dep_mobi">SIM
                                                                số đẹp phải c&oacute; số may mắn</a>
                                                        </strong>
                                                    </span>
                                                </li>
                                                <li>
                                                    <span style="color: #3366ff;">
                                                        <strong>
                                                            <a style="color: #3366ff;" href="https://goo.gl/kFfBC9#kho_sim">Những
                                                                lưu &yacute; khi mua SIM số đẹp</a>
                                                        </strong>
                                                    </span>
                                                </li>
                                                <li>
                                                    <span style="color: #3366ff;">
                                                        <strong>
                                                            <a style="color: #3366ff;" href="https://goo.gl/kFfBC9#mua_sim_uy_tin">SIM
                                                                số đẹp kh&ocirc;ng hề rẻ</a>
                                                        </strong>
                                                    </span>
                                                </li>
                                                <li>
                                                    <span style="color: #3366ff;">
                                                        <strong>
                                                            <a style="color: #3366ff;" href="https://goo.gl/kFfBC9#sim_chat_luong">T&igrave;m
                                                                hiểu th&ocirc;ng tin về người b&aacute;n, nơi
                                                                b&aacute;n</a>
                                                        </strong>
                                                    </span>
                                                </li>
                                                <li>
                                                    <span style="color: #3366ff;">
                                                        <strong>
                                                            <a style="color: #3366ff;" href="https://goo.gl/kFfBC9#dai_ly_ban_sim">C&oacute;
                                                                n&ecirc;n chuyển tiền trước khi nhận sim kh&ocirc;ng?</a>
                                                        </strong>
                                                    </span>
                                                </li>
                                                <li>
                                                    <span style="color: #3366ff;">
                                                        <strong>
                                                            <a style="color: #3366ff;" href="https://goo.gl/kFfBC9#sim_so_dep_viettel_">Phải
                                                                đảm bảo th&ocirc;ng tin bảo mật của SIM</a>
                                                        </strong>
                                                    </span>
                                                </li>
                                                <li>
                                                    <span style="color: #3366ff;">
                                                        <strong>
                                                            <a style="color: #3366ff;" href="https://goo.gl/kFfBC9#sim_than_tai">Đăng
                                                                k&yacute; trả sau cho những SIM số đắt tiền</a>
                                                        </strong>
                                                    </span>
                                                </li>
                                                <li>
                                                    <span style="color: #3366ff;">
                                                        <strong>
                                                            <a style="color: #3366ff;" href="https://goo.gl/kFfBC9#sim_de_nho">Nơi
                                                                b&aacute;n sim n&agrave;o uy t&iacute;n v&agrave; chất
                                                                lượng ?</a>
                                                        </strong>
                                                    </span>
                                                </li>
                                                <li>
                                                    <span style="color: #3366ff;">
                                                        <a style="color: #3366ff;" href="https://goo.gl/kFfBC9#sim_tu_chon">
                                                            <strong>Gợi &yacute; một số SIM đẹp</strong>
                                                        </a>
                                                    </span>
                                                </li>
                                            </ul>
                                            <p>&nbsp;</p>
                                            <p>
                                                <em>
                                                    <span style="font-weight: 400;">Theo quan niệm, sở hữu được một
                                                        <a href="../../">
                                                            <strong>SIM số đẹp</strong>
                                                        </a>
                                                        sẽ gi&uacute;p mang lại những may mắn, t&agrave;i lộc v&agrave;
                                                        th&agrave;nh
                                                        c&ocirc;ng trong c&ocirc;ng việc, cuộc sống. Tuy nhi&ecirc;n,
                                                        mỗi số lại mang
                                                        một &yacute; nghĩa kh&aacute;c nhau, do vậy, tổng hợp
                                                        c&aacute;c th&ocirc;ng tin
                                                        bạn cần biết về
                                                    </span>
                                                </em>
                                                <strong>
                                                    <em>SIM số đẹp</em>
                                                </strong>
                                                <em>
                                                    <span style="font-weight: 400;">
                                                        sẽ gi&uacute;p c&aacute;c bạn c&oacute; thể lựa chọn được số
                                                        điện thoại
                                                        ph&ugrave; hợp để lu&ocirc;n đạt được nguyện vọng của
                                                        m&igrave;nh.
                                                    </span>
                                                </em>
                                            </p>
                                            <h2>&nbsp;</h2>
                                            <h2 id="sim_so_dep">
                                                <strong>SIM số đẹp phải c&oacute; số lặp lại, dễ nhớ</strong>
                                            </h2>
                                            <p>
                                                <span style="font-weight: 400;">Hầu hết c&aacute;c nh&atilde;n
                                                    h&agrave;ng,
                                                    thương hiệu, hotline chăm s&oacute;c kh&aacute;ch h&agrave;ng cho
                                                    đến c&aacute;c
                                                    nghề dịch vụ như taxi, cho thu&ecirc; đồ, b&aacute;n
                                                    h&agrave;ng,&hellip; đều sở
                                                    hữu một số điện thoại dễ nhớ. Điều n&agrave;y kh&ocirc;ng những thể
                                                    hiện mong
                                                    muốn may mắn sẽ đến với thương hiệu của họ m&agrave; c&ograve;n
                                                    gi&uacute;p
                                                    kh&aacute;ch h&agrave;ng của họ c&oacute; thể nhớ được số điện
                                                    thoại một
                                                    c&aacute;ch dễ d&agrave;ng. V&agrave; đ&acirc;y cũng l&agrave; một
                                                    trong những
                                                    c&aacute;ch gi&uacute;p nhận diện thương hiệu m&agrave; nhiều doanh
                                                    nghiệp đang
                                                    x&acirc;y dựng.</span>
                                            </p>
                                            <p>&nbsp;</p>
                                            <p>
                                                <span style="font-weight: 400;"><img src="../../uploads/source/entity/kho%20sim%20so%20dep.png" /></span>
                                            </p>
                                            <p>&nbsp;</p>
                                            <p>
                                                <span style="font-weight: 400;">Th&ocirc;ng thường, số điện thoại dễ
                                                    nhớ
                                                    l&agrave; c&aacute;c số c&oacute; c&aacute;c cặp số lặp lại hoặc
                                                    theo cấp số
                                                    tăng dần, giảm dần. V&iacute; dụ, số 0971 20 30 30 c&oacute; cặp
                                                    &ldquo;30&rdquo; lặp lại. Hoặc SIM lục qu&yacute; 016 9999 9999,
                                                    SIM ngũ
                                                    qu&yacute; 0936 6 88888,&hellip; Quan niệm SIM số đẹp sẽ c&ograve;n
                                                    t&ugrave;y
                                                    thuộc v&agrave;o từng người, độ tuổi, ng&agrave;y kỷ niệm hoặc
                                                    c&oacute; thể
                                                    kh&aacute;c biệt t&ugrave;y theo v&ugrave;ng sinh sống Nam hay Bắc.
                                                </span>
                                            </p>
                                            <h2 id="gia_re">&nbsp;</h2>
                                            <h2 id="luu_y_khi_mua_sim">
                                                <strong>SIM số đẹp phải c&oacute; c&aacute;c chữ số cuối tr&ugrave;ng
                                                    nhau</strong>
                                            </h2>
                                            <p>
                                                <span style="font-weight: 400;">Nếu như c&oacute; người cho rằng SIM số
                                                    đẹp phải
                                                    dễ nhớ th&igrave; cũng c&oacute; người quan niệm, một SIM đẹp bắt
                                                    buộc phải
                                                    c&oacute; c&aacute;c chữ số cuối tr&ugrave;ng nhau. Quan niệm
                                                    n&agrave;y đặc
                                                    biệt quan trọng đối với những ai hay chơi xe, người kinh doanh như
                                                    SIM ngũ
                                                    qu&yacute; 11111, 22222, 88888, 99999,&hellip;, c&aacute;c con số
                                                    n&agrave;y sẽ
                                                    gi&uacute;p đem lại may mắn, t&agrave;i lộc cho chủ sở hữu. Tuy
                                                    nhi&ecirc;n,
                                                    những SIM số ngũ, tứ qu&yacute; lại rất hiếm v&agrave; nếu
                                                    c&oacute; cũng
                                                    c&oacute; mức gi&aacute; kh&aacute; cao, tuy nhi&ecirc;n,
                                                    ch&uacute;ng lại
                                                    &ldquo;săn l&ugrave;ng&rdquo; bởi theo quan niệm, ch&uacute;ng sẽ
                                                    sinh ra những
                                                    may mắn gấp nhiều lần so với số tiền bỏ ra ban đầu.</span>
                                            </p>
                                            <p>&nbsp;</p>
                                            <p><img src="../../uploads/source/entity/mua%20sim%20so%20dep.png" alt="mua sim so dep" /></p>
                                            <h2 id="de_nho">&nbsp;</h2>
                                            <h2 id="sim_so_dep_mobi">
                                                <strong>SIM số đẹp phải c&oacute; số may mắn</strong>
                                            </h2>
                                            <p>
                                                <span style="font-weight: 400;">Mỗi con số sẽ thể hiện được một
                                                    &yacute; nghĩa
                                                    ri&ecirc;ng. Trong đ&oacute;, theo văn h&oacute;a người Trung Hoa,
                                                    số
                                                </span>
                                                <strong>86, 68</strong>
                                                <span style="font-weight: 400;">
                                                    mang &yacute; nghĩa Ph&aacute;t lộc &ndash; Lộc ph&aacute;t,
                                                    v&igrave; vậy,
                                                    nhiều người cho rằng, một SIM số đẹp bắt buộc phải c&oacute; hai số
                                                    n&agrave;y
                                                    v&agrave; số lượng cặp đ&ocirc;i c&agrave;ng nhiều trong số,
                                                    gi&aacute; trị của
                                                    SIM c&agrave;ng tăng. Sự kết hợp giữa hai con số sẽ mang lại lộc
                                                    l&aacute;,
                                                    thăng tiến, gi&uacute;p người sở hữu l&agrave;m ăn thuận lợi.</span>
                                            </p>
                                            <p>
                                                <span style="font-weight: 400;">Con
                                                </span>
                                                <strong>số 5</strong>
                                                <span style="font-weight: 400;">
                                                    lại thể hiện được sự huyền b&iacute; xuất ph&aacute;t từ thuyết Ngũ
                                                    H&agrave;nh,
                                                    nghĩa l&agrave; mọi thứ được sinh s&ocirc;i, nảy nở sẽ bắt đầu từ
                                                    con số 5
                                                    m&agrave; ra. Trời đất c&oacute; ngũ h&agrave;nh (Kim, Mộc, Thủy,
                                                    Hỏa, Thổ),
                                                    cuộc sống c&oacute; ngũ ph&uacute;c (Ph&uacute;, Qu&yacute;, Thọ,
                                                    Khang, Ninh),
                                                    ngũ lu&acirc;n (Vua t&ocirc;i, cha con, vợ chồng, anh em, bạn
                                                    b&egrave;),&hellip;.</span>
                                            </p>
                                            <p>
                                                <strong>Số 7</strong>
                                                <span style="font-weight: 400;">
                                                    cũng l&agrave; một con số được nhiều người quan t&acirc;m khi chọn
                                                    mua SIM với
                                                    &yacute; mang lại năng lượng mạnh mẽ nhất. Theo quan niệm của đạo
                                                    Phật, số 7
                                                    tượng trung c&oacute; th&agrave;nh tựu của vũ trụ kh&ocirc;ng gia
                                                    đem lại sức
                                                    sống, &aacute;nh s&aacute;ng v&agrave; sự hi vọng cho lo&agrave;i
                                                    người,&hellip;</span>
                                            </p>
                                            <p>
                                                <span style="font-weight: 400;">Trong khi đ&oacute;,
                                                </span>
                                                <strong>số 9</strong>
                                                <span style="font-weight: 400;">
                                                    lại thể hiện được sức mạnh v&agrave; quyền uy, gắn liền với sự
                                                    ho&agrave;n
                                                    thiện. Từ xưa, vua ch&uacute;a Trung Quốc, Việt Nam đ&atilde;
                                                    d&ugrave;ng số 9
                                                    (Cửu) để x&acirc;y dựng những c&ocirc;ng tr&igrave;nh quan trọng
                                                    trong cung điện
                                                    như Cửu Long Trụ, Cửu Long B&ocirc;i, Cửu Đ&agrave;o Hồ,&hellip;.</span>
                                            </p>
                                            <p>&nbsp;</p>
                                            <p>
                                                <span style="font-weight: 400;"><img src="../../uploads/source/entity/sim%20dep%20gia%20re.png"
                                                        alt="sim dep gia re" /></span>
                                            </p>
                                            <p>&nbsp;</p>
                                            <p>
                                                <span style="font-weight: 400;">B&ecirc;n cạnh đ&oacute;, SIM số đẹp
                                                    c&ograve;n
                                                    phải thể hiện được gi&aacute; trị c&aacute; nh&acirc;n của chủ sở
                                                    hữu như năm
                                                    sinh, ng&agrave;y sinh, đ&aacute;nh dấu một mốc quan trọng hay vận
                                                    mệnh,&hellip;
                                                    Trong thực tế, c&oacute; những số SIM thể hiện được &yacute; nghĩa
                                                    đồng thời của
                                                    c&aacute;c gi&aacute; trị, v&iacute; dụ, bạn sinh ng&agrave;y 11,
                                                    th&aacute;ng
                                                    11, sở hữu số SIM 1111 vừa l&agrave; SIM tứ qu&yacute; vừa thể hiện
                                                    được
                                                    ng&agrave;y sinh.</span>
                                            </p>
                                            <p>
                                                <span style="font-weight: 400;">Một số đu&ocirc;i SIM được nhiều người
                                                    quan
                                                    t&acirc;m như &ldquo;6789&rdquo; (san bằng tất cả),
                                                    &ldquo;1102&rdquo; (độc nhất
                                                    v&ocirc; nhị), &ldquo;3899&rdquo; (ph&aacute;t t&agrave;i
                                                    m&atilde;i
                                                    m&atilde;i), &ldquo;4078&rdquo; (bốn m&ugrave;a kh&ocirc;ng thất
                                                    b&aacute;t),&hellip; v&agrave; nhiều con số kết hợp mang lại một
                                                    &yacute; nghĩa
                                                    ri&ecirc;ng.
                                                </span>
                                            </p>
                                            <p>
                                                <span style="font-weight: 400;">Nhu cầu sử dụng số SIM đẹp ng&agrave;y
                                                    c&agrave;ng tăng, đ&oacute; ch&iacute;nh l&agrave; yếu tố đẩy
                                                    gi&aacute; SIM số
                                                    đẹp l&ecirc;n h&agrave;ng chục triệu, trăm triệu, thậm ch&iacute;
                                                    cả chục tỷ
                                                    đồng. Tuy nhi&ecirc;n, SIM số đẹp vẫn được nhiều người t&igrave;m
                                                    kiếm, thậm
                                                    ch&iacute;, nhiều người c&oacute; tiền cũng kh&ocirc;ng thể sở hữu
                                                    được con số
                                                    m&agrave; m&igrave;nh mong muốn do số đ&atilde; c&oacute; người
                                                    đăng k&yacute;
                                                    sử dụng trước.
                                                </span>
                                            </p>
                                            <h2 id="than_tai">&nbsp;</h2>
                                            <h2 id="kho_sim">
                                                <strong>Những lưu &yacute; khi mua SIM số đẹp</strong>
                                            </h2>
                                            <p>
                                                <span style="font-weight: 400;">Với thị trường SIM số đẹp ng&agrave;y
                                                    c&agrave;ng trở n&ecirc;n &ldquo;hỗn loạn&rdquo; như hiện nay,
                                                    nhiều người
                                                    kh&ocirc;ng khỏi lo lắng l&agrave;m sao để c&oacute; thể mua được
                                                    một SIM số
                                                    đẹp, hợp phong thủy, tr&aacute;nh được những rủi ro về tranh chấp
                                                    số về
                                                    sau,&hellip; V&igrave; vậy, một số lưu &yacute; khi mua SIM số đẹp
                                                    sẽ
                                                    gi&uacute;p c&aacute;c bạn c&oacute; thể sở hữu được một số SIM đẹp
                                                    ưng &yacute;
                                                    v&agrave; loại bỏ nguy cơ bị lừa đảo.</span>
                                            </p>
                                            <p>&nbsp;</p>
                                            <p>
                                                <span style="font-weight: 400;"><img src="../../uploads/source/entity/sim%20so%20dep.jpg"
                                                        alt="sim so dep" /></span>
                                            </p>
                                            <h2>&nbsp;</h2>
                                            <h2 id="mua_sim_uy_tin">
                                                <strong>SIM số đẹp kh&ocirc;ng hề rẻ</strong>
                                            </h2>
                                            <p>
                                                <span style="font-weight: 400;">Nguy&ecirc;n tắc quan trọng bạn cần nhớ
                                                    khi mua
                                                    SIM số đẹp, đ&oacute; l&agrave; mức gi&aacute; b&aacute;n sẽ
                                                    kh&ocirc;ng hề rẻ.
                                                    Sẽ chẳng bao giờ c&oacute; số SIM tứ qu&yacute;, ngũ qu&yacute; hay
                                                    SIM tiến,
                                                    SIM chứa cặp &ldquo;86 &ndash; 68&rdquo; m&agrave; mức gi&aacute;
                                                    b&aacute;n chỉ
                                                    c&oacute; v&agrave;i trăm hay v&agrave;i triệu đồng cả. V&igrave;
                                                    vậy, d&ugrave;
                                                    người bạn họ đưa ra những l&yacute; do kh&aacute; ch&acirc;n thực
                                                    như &ldquo;hết
                                                    tiền ti&ecirc;u n&ecirc;n cần b&aacute;n gấp&rdquo;,
                                                    &ldquo;b&aacute;n hộ
                                                    ch&uacute; ở qu&ecirc;&rdquo; hay &ldquo;d&ugrave;ng ch&aacute;n
                                                    muốn
                                                    b&aacute;n&rdquo;, &ldquo;c&oacute; số đẹp hơn n&ecirc;n b&aacute;n
                                                    số
                                                    n&agrave;y&rdquo;,...., bạn tuyệt đối kh&ocirc;ng n&ecirc;n tin.</span>
                                            </p>
                                            <h2>&nbsp;</h2>
                                            <h2 id="sim_chat_luong">
                                                <strong>T&igrave;m hiểu th&ocirc;ng tin về người b&aacute;n, nơi
                                                    b&aacute;n</strong>
                                            </h2>
                                            <p>
                                                <span style="font-weight: 400;">SIM số đẹp c&oacute; mức gi&aacute;
                                                    kh&ocirc;ng
                                                    hề rẻ, v&igrave; vậy, để tr&aacute;nh t&igrave;nh trạng mất trắng
                                                    một số tiền
                                                    lớn, bạn cần phải hết sức thận trọng khi mua. Ngay cả khi mua
                                                    online hay mua tại
                                                    cửa h&agrave;ng, bạn cũng cần phải biết r&otilde; người b&aacute;n
                                                    l&agrave; ai,
                                                    ở đ&acirc;u, t&igrave;m hiểu về sự uy t&iacute;n của cửa
                                                    h&agrave;ng,... Trong
                                                    một số trường hợp, người mua đ&atilde; bị lừa đảo bởi c&aacute;c
                                                    địa chỉ
                                                    m&atilde; v&agrave; số kh&ocirc;ng c&oacute; thực hoặc đ&atilde;
                                                    c&oacute; người
                                                    đăng k&yacute; ch&iacute;nh chủ.</span>
                                            </p>
                                            <p>&nbsp;</p>
                                            <p>
                                                <span style="font-weight: 400;"><img src="../../uploads/source/entity/sim%20s%E1%BB%91%20%C4%91%E1%BA%B9p.jpg"
                                                        alt="sim số đẹp" /></span>
                                            </p>
                                            <h2>&nbsp;</h2>
                                            <h2 id="dai_ly_ban_sim">
                                                <strong>C&oacute; n&ecirc;n chuyển tiền trước khi nhận sim kh&ocirc;ng?</strong>
                                            </h2>
                                            <div>
                                                <blockquote id="kho-sim" cite="https://khosim.com/#sim-dep">Trước khi
                                                    chuyển
                                                    tiền cho b&ecirc;n b&aacute;n, bạn cần kiểm tra kỹ lưỡng
                                                    th&ocirc;ng tin SIM mới
                                                    mua v&agrave; th&ocirc;ng tin người nhận. Chắc chắn số mới mua sẽ
                                                    thuộc quyền sở
                                                    hữu của bạn rồi mới chuyển tiền.</blockquote>
                                            </div>
                                            <h2 id="sim_so_dep_viettel_">
                                                <strong>Phải đảm bảo th&ocirc;ng tin bảo mật của SIM</strong>
                                            </h2>
                                            <p>
                                                <span style="font-weight: 400;">Một số SIM đ&atilde; được đăng
                                                    k&yacute;
                                                    ch&iacute;nh chủ từ trước đ&oacute; nhưng v&igrave; l&yacute; do
                                                    c&aacute;
                                                    nh&acirc;n, họ kh&ocirc;ng sử dụng trong một thời gian, một số cửa
                                                    h&agrave;ng
                                                    đ&atilde; lợi dụng điểm sơ hở n&agrave;y để &ldquo;hack&rdquo;
                                                    th&ocirc;ng tin
                                                    v&agrave; l&agrave;m số giả. Do vậy, để chắc chắn SIM chưa được
                                                    đăng k&yacute;
                                                    ch&iacute;nh chủ, bạn cần phải nhắn tin để tổng đ&agrave;i để kiểm
                                                    tra.
                                                    B&ecirc;n cạnh đ&oacute;, để khẳng định SIM số đẹp thuộc quyền sở
                                                    hữu của
                                                    m&igrave;nh, bạn cần phải đến c&aacute;c quầy giao dịch để thực
                                                    hiện những bước
                                                    bảo mật quan trọng đ&oacute; l&agrave; đăng k&yacute; ch&iacute;nh
                                                    chủ.
                                                </span>
                                            </p>
                                            <p>&nbsp;</p>
                                            <h2 id="sim_than_tai">
                                                <strong>Đăng k&yacute; trả sau cho những SIM số đắt tiền</strong>
                                            </h2>
                                            <p>
                                                <span style="font-weight: 400;">Những SIM số đắt tiền c&oacute;
                                                    gi&aacute; trị
                                                    l&ecirc;n đến h&agrave;ng chục tỷ đồng, v&igrave; vậy, bạn
                                                    n&ecirc;n đăng
                                                    k&yacute; trả sau cho số điện thoại n&agrave;y bởi h&igrave;nh thức
                                                    n&agrave;y
                                                    đ&ograve;i hỏi người d&ugrave;ng phải khai b&aacute;o đầy đủ
                                                    th&ocirc;ng tin
                                                    c&aacute; nh&acirc;n để l&agrave;m cơ sở thanh to&aacute;n.
                                                    Ch&iacute;nh
                                                    c&aacute;c bước n&agrave;y sẽ l&agrave; bằng chứng quan trọng
                                                    tr&aacute;nh được
                                                    tranh chấp, khiếu nại trong trường hợp mất SIM.</span>
                                            </p>
                                            <p>&nbsp;</p>
                                            <p>
                                                <span style="font-weight: 400;">
                                                    <iframe src="https://www.youtube.com/embed/hvkU13trUtU" width="560"
                                                        height="315" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
                                                </span>
                                            </p>
                                            <h2>&nbsp;</h2>
                                            <h2 id="sim_de_nho">
                                                <strong>Nơi b&aacute;n sim n&agrave;o uy t&iacute;n v&agrave; chất
                                                    lượng ?<br /></strong>
                                            </h2>
                                            <p>
                                                <span style="font-weight: 400;">Chọn mua SIM đẹp tại c&aacute;c nơi
                                                    b&aacute;n
                                                    uy t&iacute;n ch&iacute;nh l&agrave; yếu tố quan trọng cốt
                                                    l&otilde;i để
                                                    gi&uacute;p bạn tr&aacute;nh được t&igrave;nh trạng mất trắng tiền
                                                    khi đi mua
                                                    SIM số đẹp. Tuy nhi&ecirc;n, tr&ecirc;n thị trường hiện nay xuất
                                                    hiện
                                                    tr&agrave;n lan c&aacute;c địa chỉ, cửa h&agrave;ng b&aacute;n SIM
                                                    số đẹp, điều
                                                    n&agrave;y đ&atilde; g&acirc;y ra sự hoang mang nhất định cho những
                                                    người đang
                                                    &ldquo;săn l&ugrave;ng&rdquo; một số SIM như mong muốn.
                                                </span>
                                            </p>
                                            <p>
                                                <span style="font-weight: 400;">Ti&ecirc;u ch&iacute; chọn cửa
                                                    h&agrave;ng mua
                                                    SIM đ&oacute; l&agrave; chọn một cửa h&agrave;ng c&oacute; đầy đủ
                                                    th&ocirc;ng
                                                    tin về địa chỉ, trang web, giấy ph&eacute;p kinh doanh hay địa chỉ
                                                    c&aacute;c
                                                    văn ph&ograve;ng giao dịch. Nhắc đến địa chỉ mua SIM số đẹp uy
                                                    t&iacute;n, giới
                                                    chơi SIM sẽ lựa chọn
                                                </span>
                                                <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fkhosim.com%2F&amp;h=AT0gvsENB9O2bWivBHK-l0uY5aFAQ8ITxuVwD8Km_WA24PJZ3TLhGU-jc-ho-gy_7Ctg6mNXiat7DbbgManMVqhiWozLFA11nH9skdDBNxFmYhn95ontUggC7_ye2sMVodyM9IVtFpA3d_w9l6_HnLOf"
                                                    rel="doffolow">
                                                    <span style="font-weight: 400;">https://khosim.com/</span>
                                                </a>
                                                <span style="font-weight: 400;">
                                                    đầu ti&ecirc;n v&igrave; đ&acirc;y vừa l&agrave; nơi b&aacute;n
                                                    c&oacute; đầy đủ
                                                    những th&ocirc;ng tin về văn ph&ograve;ng giao dịch, giấy
                                                    ph&eacute;p kinh
                                                    doanh, đồng thời, nơi đ&acirc;y lại l&agrave; nơi sở hữu kho SIM số
                                                    đẹp khổng lồ
                                                    gi&aacute; rẻ lớn nhất tại Việt Nam.
                                                </span>
                                            </p>
                                            <p>&nbsp;</p>
                                            <h2 id="sim_tu_chon">
                                                <strong>
                                                    Gợi &yacute; một số SIM đẹp
                                                </strong>
                                            </h2>
                                            <p>
                                                <span style="font-weight: 400;">Hiện nay,
                                                </span>
                                                <span style="font-weight: 400;">https://khosim.com/</span>
                                                <span style="font-weight: 400;">
                                                    cung cấp SIM của c&aacute;c nh&agrave; mạng tại Việt Nam (Viettel,
                                                    Vinaphone,
                                                    Mobifone, Vietnamobile,...), c&aacute;c loại SIM sẽ được ph&acirc;n
                                                    loại theo
                                                    từng nh&oacute;m như SIM lục qu&yacute;, ngũ qu&yacute;, tứ
                                                    qu&yacute;, SIM tam
                                                    hoa, lộc ph&aacute;t, thần t&agrave;i, SIM theo năm sinh, SIM
                                                    tiến,... với mức
                                                    gi&aacute;&nbsp;b&aacute;n được c&ocirc;ng khai trực tiếp
                                                    tr&ecirc;n trang web,
                                                    gi&uacute;p người mua c&oacute; thể chủ động t&agrave;i
                                                    ch&iacute;nh để sở hữu
                                                    được số điện thoại đẹp như mong muốn.
                                                </span>
                                            </p>
                                            <p>
                                                <span style="font-weight: 400;">Trong đ&oacute;, cửa h&agrave;ng đang
                                                    sở hữu
                                                    những SIM số cao cấp nhất c&oacute; thể kể đến như SIM lục
                                                    qu&yacute; &ldquo;016
                                                    9999 9999&rdquo;, SIM ngũ qu&yacute; 096 66 88888&rdquo;,
                                                    c&aacute;c loại SIM
                                                    đặc biệt c&oacute; mức gi&aacute; h&agrave;ng trăm tỷ đồng như
                                                    &ldquo;088888
                                                    1368&rdquo;, &ldquo;088888 1102&rdquo;, &ldquo;093 68 68 68
                                                    3&rdquo;,....</span>
                                            </p>
                                            <p>&nbsp;</p>
                                            <p>
                                                <span style="font-weight: 400;"><img src="../../uploads/source/entity/sim%20%C4%91%E1%BA%B9p.jpg"
                                                        alt="sim đẹp" /></span>
                                            </p>
                                            <p>&nbsp;</p>
                                            <p>
                                                <span style="font-weight: 400;">Cửa h&agrave;ng đưa ra những cam kết
                                                    như
                                                    nh&acirc;n vi&ecirc;n sẽ c&oacute; tr&aacute;ch nhiệm kiểm tra
                                                    v&agrave;
                                                    th&ocirc;ng b&aacute;o ch&iacute;nh x&aacute;c cho kh&aacute;ch
                                                    h&agrave;ng
                                                    t&igrave;nh trạng SIM trước khi thực hiện giao dịch, cam kết
                                                    ho&agrave;n tiền
                                                    100% nếu SIM thất lạc do sai s&oacute;t, hỗ trợ đăng k&yacute;
                                                    ch&iacute;nh chủ
                                                    cho kh&aacute;ch h&agrave;ng, đảm bảo được quyền sở hữu thu&ecirc;
                                                    bao theo
                                                    đ&uacute;ng quy định mới nhất của c&aacute;c nh&agrave; mạng
                                                    v&agrave; đảm bảo
                                                    giữ b&iacute; mật tuyệt đối th&ocirc;ng tin kh&aacute;ch
                                                    h&agrave;ng nhằm
                                                    tr&aacute;nh t&igrave;nh trạng mất cắp th&ocirc;ng tin,...</span>
                                            </p>
                                            <p>
                                                <span style="font-weight: 400;">Để mua SIM số ph&ugrave; hợp với quan
                                                    niệm may
                                                    mắn của m&igrave;nh, bạn c&oacute; thể truy cập trực tiếp
                                                    v&agrave;o trang web,
                                                    v&agrave;o k&ecirc;nh &ldquo;</span>
                                                <strong>Đặt mua</strong>
                                                <span style="font-weight: 400;">&rdquo; tương ứng với từng số SIM để
                                                    đặt
                                                    h&agrave;ng, sau đ&oacute;, hotline của cửa h&agrave;ng sẽ gọi trực
                                                    tiếp đến để
                                                    x&aacute;c nhận một số th&ocirc;ng tin giao h&agrave;ng. Hoặc
                                                    c&aacute;c bạn
                                                    c&oacute; thể gọi trực tiếp đến Hotline của cửa h&agrave;ng:
                                                </span>
                                                <strong>0987 059 059 &ndash; 0911 059 059</strong>
                                                <span style="font-weight: 400;">. Hiện nay, Kho SIM cung cấp c&aacute;c
                                                    loại
                                                    dịch vụ kh&aacute;c nhau như b&aacute;n SIM số đẹp, thu mua SIM,
                                                    cầm cố SIM, hỗ
                                                    trợ mua SIM trả g&oacute;p bằng c&aacute;ch thanh to&aacute;n trước
                                                    30%
                                                    v&agrave; nhận SIM ngay trong ng&agrave;y,...</span>
                                            </p>
                                            <p>
                                                <span style="font-weight: 400;">Với tổng hợp c&aacute;c th&ocirc;ng tin
                                                    bạn cần
                                                    biết về SIM số đẹp, c&aacute;c bạn đ&atilde; c&oacute; th&ecirc;m
                                                    cho
                                                    m&igrave;nh những th&ocirc;ng tin hữu &iacute;ch để mua được SIM số
                                                    đẹp như mong
                                                    muốn, mang về may mắn, th&agrave;nh c&ocirc;ng trong c&ocirc;ng
                                                    việc, cuộc sống.</span>
                                            </p>
                                        </div>
                                        <div class="show_more">
                                            <a class="btn_show_more_pt" href="javascript:;">Xem Thêm</a>
                                        </div>
                                    </div>
                                    @stop