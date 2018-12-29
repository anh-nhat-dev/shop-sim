$(function() {
    var menu_with = $('.navigation').width();
    var main_widh = $('#header .container').width();
    if (typeof menu_with != 'undefined') {
        var left = main_widh - menu_with;
        $('.navigation .navbar-nav > li.all_product_category .menu-full').css({
            "width": menu_with - 500,
            "left": -left
        });
    }
    $(window).scroll(function() {
        if ($(this).scrollTop() > 250) {
            $('.nav-container').addClass("fix-nav");
        } else {
            $('.nav-container').removeClass("fix-nav");
        }
    });
    $(window).scroll(function() {
        if ($(this).scrollTop() > 250) {
            $('.quick-access').addClass("fix-header");
        } else {
            $('.quick-access').removeClass("fix-header");
        }
    });
    if (typeof $("#zoom_03").html() != 'undefined') {
        $("#zoom_03").elevateZoom({
            scrollZoom: true,
            gallery: 'gallery_01',
            cursor: 'pointer',
            galleryActiveClass: 'active',
        });
    }
});

function show_message(text, icon) {
    $.toast({
        heading: "Alert",
        text: text,
        position: 'top-left',
        icon: icon,
        hideAfter: 5000,
    });
}

function isset($element) {
    if (typeof $element != 'undefined') return true;
    return false;
}

function vertical(element, interval, item, direction = 'up') {
    $(element).easyTicker({
        direction: 'up',
        easing: 'swing',
        speed: 'slow',
        interval: interval,
        visible: item,
        mousePause: 1,
    });
}

function horizontal(element, interval, item, rep, button = '') {
    var ol = $(element).owlCarousel({
        items: item,
        margin: 10,
        loop: true,
        autoplay: false,
        autoplayTimeout: interval,
        autoplayHoverPause: true,
        smartSpeed: 1000,
        responsive: rep
    });
    if (button != '') {
        $(button + ' .next').click(function() {
            ol.trigger('next.owl.carousel', [1000]);
        })
        $(button + ' .prev').click(function() {
            ol.trigger('prev.owl.carousel', [1000]);
        });
    }
}

function number_format(number, decimals, dec_point, thousands_sep) {
    var n = number,
        c = isNaN(decimals = Math.abs(decimals)) ? 2 : decimals;
    var d = dec_point == undefined ? "," : dec_point;
    var t = thousands_sep == undefined ? "." : thousands_sep,
        s = n < 0 ? "-" : "";
    var i = parseInt(n = Math.abs(+n || 0).toFixed(c)) + "",
        j = (j = i.length) > 3 ? j % 3 : 0;
    return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
}

function closeQVFrame() {
    $('#quickview-bg-block').hide();
    $('.quickview-load-img').hide();
    $('div#quickview-content').hide(600).html('');
}

function ajaxView($id) {
    $('#quickview-bg-block').show();
    $('.quickview-load-img').show();
    var data = {
        'product_id': $id,
    };
    $jqxhr = $.post(domain + 'san-pham/quickview', data, function(data) {}, 'json');
    $jqxhr.done(function(data) {
        if (data.type == 'success') {
            var html = '';
            html += '<div class="page-content product-content-1 products-detail">';
            html += '<div class="row">';
            html += '<div class="col-md-6">';
            html += '<div class="images-content">';
            html += '<div class="gallery-product-img thumbnail">';
            html += '<img src="uploads/source/' + data.data['image'] + '" alt="' + data.data['title'] + '" id="zoom_03" data-zoom-image="uploads/source/' + data.data['image'] + '">';
            html += '<div class="clearfix"></div>';
            html += '</div>';
            html += '<div class="wrapper-img-additional">';
            html += '<div class="gallery-product-thum">';
            html += '<div class="custombutton text-right">';
            html += '<a class="prev"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>';
            html += '<a class="next"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>';
            html += '</div>';
            html += '<div class="gallery-product" id="gallery_02">';
            html += '<a href="#" class="active" data-image="' + data.data['image'] + '" data-zoom-image="' + data.data['image'] + '">';
            html += '<img src="uploads/source/' + data.data['image'] + '" alt="' + data.data['title'] + '"/>';
            html += '</a>';
            if (data.object_gallery.length > 0) {
                $.each(data.object_gallery, function(key, item) {
                    html += '<a href="#" data-image="uploads/source/' + item['value'] + '" data-zoom-image="uploads/source/' + item['value'] + '">';
                    html += '<img src="uploads/source/' + item['value'] + '" alt="' + data.data['title'] + '"/>';
                    html += '</a>';
                });
            }
            html += '</div>';
            html += '</div>';
            html += '</div>';
            html += '</div>';
            html += '</div>';
            html += '<div class="col-md-6" id="product-info">';
            html += '<h1 class="detail-product-name">' + data.data['title'] + '</h1>';
            html += '<ul class="list-unstyled price">';
            if (data.data['price_sale'] != 0) {
                html += '<li><h2 class="prices">' + number_format(data.data['price_sale']) + ' ₫</h2></li>';
                html += '<li><h2 class="prices-old"><del>' + number_format(data.data['price']) + ' ₫</del></h2></li>';
            } else if (data.data['price'] == 0) {
                html += '<li><h2 class="prices">Liên Hệ</h2></li>';
            } else {
                html += '<li><h2 class="prices">' + number_format(data.data['price']) + '₫</h2></li>';
            }
            html += '<hr class="line">';
            html += '</ul>';
            html += '<ul class="list-unstyled">';
            html += '<li>Tình trạng: <span style="font-weight:bold; color:#66aa00">Còn hàng</span></li>';
            html += '</ul>';
            html += '<p class="short-description">';
            if (data.data['excerpt'] != '') {
                html += data.data['excerpt'];
            }
            html += '</p>';
            html += '<div class="box-cart clearfix">';
            html += '<div class="addtocart_quantity">';
            html += '<input id="quantity" type="number" name="quantity" value="1" min="1" class="form-control quantity-selector">';
            html += '</div>';
            html += '<div class="addtocart_button">';
            html += '<button class="btn btn-lg button_cart add_to_cart" data-id="' + data.data['id'] + '">';
            html += '<span>Mua sản phẩm</span>';
            html += '</button>';
            html += '<button class="btn-wishlist" type="button" title="Add to Wish List" onclick="wishlist.add(' + data.data['id'] + ');"><i class="fa fa-heart"></i></button>';
            html += '<button class="btn-compare" type="button" title="Compare this Product" onclick="compare.add(' + data.data['id'] + ');"><i class="fa fa-adjust"></i></button>';
            html += '</div>';
            html += '</div>';
            html += '</div>';
            html += '</div>';
            html += '</div>';
            $('#quickview-content').html(html);
            $('.quickview-load-img').hide();
            $('#quickview-content').show(600, function() {
                var rep = {
                    0: {
                        items: 1
                    },
                    400: {
                        items: 2
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 3
                    }
                }
                var ol = $('.gallery-product').owlCarousel({
                    items: 3,
                    margin: 10,
                    loop: true,
                    autoplay: true,
                    autoplayTimeout: 2000,
                    autoplayHoverPause: true,
                    smartSpeed: 1000,
                    responsive: rep
                });
                $('.gallery-product').trigger('refreshed.owl.carousel');
                $('.gallery-product-thum .next').click(function() {
                    ol.trigger('next.owl.carousel', [1000]);
                })
                $('.gallery-product-thum .prev').click(function() {
                    ol.trigger('prev.owl.carousel', [1000]);
                });
            });
            $('div#quickview-content').prepend("<a href='javascript:void(0);' class='a-qv-close' onclick='closeQVFrame()'>Close</a>");
        } else {
            load.hide();
            $this.find('button[type="submit"]').show();
        }
    });
    return false;
}
$('#cart').mouseenter(function() {
    $(this).find(".dropdown-menu").stop(true, true).slideDown();
});
$('#cart').mouseleave(function() {
    $(this).find(".dropdown-menu").stop(true, true).slideUp();
});
$(document).ready(function() {
    $("#back-top").hide();
    $(function() {
        $(window).scroll(function() {
            if ($(this).scrollTop() > 300) {
                $('#back-top').fadeIn();
                $('#back-top').addClass("show");
            } else {
                $('#back-top').fadeOut();
                $('#back-top').removeClass("show");
            }
        });
        $('#back-top').click(function() {
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
    });
});

function simple_search(tagstr, search_url, extension) {
    var tagstr = new String(tagstr);
    tagstr = tagstr.toLowerCase();
    tagstr = tagstr.replace(/[^0-9^*^x]/g, '');
    tagstr = tagstr.replace(/\*+/g, '*');
    if (tagstr == '') {
        alert("Nhập số cần tìm có ít nhất 2 chữ số!");
        document.timkiem.key.focus();
        return false;
    } else {
        document.timkiem.action = search_url + tagstr;
        ga('send', 'event', 'search', 'search', 'searchstart');
        return true;
    }
}
$('#box-about-sim a.btn_show_more_pt').on('click', function() {
    $('#box-about-sim .aboutsim-inner').removeAttr('style');
    $('#box-about-sim .show_more').remove();
});
$('.box-about-sim a.btn_show_more_pt').on('click', function() {
    $('.box-about-sim .box-content').removeAttr('style');
    $('.box-about-sim .show_more').remove();
});