function showFilter(e) {
    "listPriceFilter" == e ? ($("#listPriceFilter").slideToggle(400), $("#listTelcoFilter").slideUp(100), $("#listSortFilter").slideUp(100), $("#listlengthFilter").slideUp(100)) : "listTelcoFilter" == e ? ($("#listTelcoFilter").slideToggle(400), $("#listPriceFilter").slideUp(100), $("#listSortFilter").slideUp(100), $("#listlengthFilter").slideUp(100)) : "listSortFilter" == e ? ($("#listTelcoFilter").slideUp(100), $("#listPriceFilter").slideUp(100), $("#listSortFilter").slideToggle(400), $("#listlengthFilter").slideUp(100)) : "listlengthFilter" == e && ($("#listTelcoFilter").slideUp(100), $("#listPriceFilter").slideUp(100), $("#listSortFilter").slideUp(100), $("#listlengthFilter").slideToggle(400))
}

function set_filter2(e, t, l, i) {
    "" == i && (i = "0"), "" == e && (e = "0"), "" == l && (l = "0"), "" == t && (t = "0"), html = "", "0" != i && (document.getElementById("lF0").className = "all", document.getElementById("lF" + i.replace(",", "")).className = "check", html += '<a href="javascript:;" onclick="lengthFilter(0)">' + document.getElementById("lF" + i.replace(",", "")).textContent + ' <i class="fa fa-times"></i></a>'), "0" != e && (document.getElementById("pF0").className = "all", document.getElementById("pF" + e.replace(",", "")).className = "check", html += '<a href="javascript:;" onclick="priceFilter(0)">' + document.getElementById("pF" + e.replace(",", "")).textContent + ' <i class="fa fa-times"></i></a>'), "0" != t && (document.getElementById("tF").className = "all", document.getElementById("tF" + t.replace(",", "")).className = "check", html += '<a href="javascript:;" onclick="telcoFilter(0)">' + document.getElementById("tF" + t.replace(",", "")).textContent + ' <i class="fa fa-times"></i></a>'), "0" != l && (document.getElementById("sF0").className = "all", document.getElementById("sF" + l.replace(",", "")).className = "check", html += '<a href="javascript:;" onclick="sortFilter(0)">' + document.getElementById("sF" + l.replace(",", "")).textContent + ' <i class="fa fa-times"></i></a>'), document.getElementById("choosedfilter").insertAdjacentHTML("beforebegin", html), document.getElementById("m10so_filter").value = i, document.getElementById("price_filter").value = e, document.getElementById("telco_filter").value = t, document.getElementById("giaban_filter").value = l
}

function priceFilter(e) {
    document.getElementById("price_filter").value = e + "", submit_filter()
}

function telcoFilter(e) {
    document.getElementById("telco_filter").value = e + "", submit_filter()
}

function sortFilter(e) {
    document.getElementById("giaban_filter").value = e + "", submit_filter()
}

function lengthFilter(e) {
    document.getElementById("m10so_filter").value = e + "", submit_filter()
}

function resetFilter() {
    document.getElementById("m10so_filter").value = 0, document.getElementById("price_filter").value = 0, document.getElementById("telco_filter").value = 0, document.getElementById("giaban_filter").value = 0, submit_filter()
}

function submit_filter() {
    document.getElementById("filter_form").submit()
}
ishowPrice = !1, ishowTelco = !1, ishowSort = !1, ishowLength = !1;