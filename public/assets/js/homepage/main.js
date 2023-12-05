function platformInfo() {
    let dataResullt = {};
    let ajaxOptions = {
        url: SEKOLAHKITA_CONFIG.authDomain + "services/platform/info",
        type: "get",
        headers: { Authorization: SEKOLAHKITA_CONFIG.authorization },
        data: {},
        dataType: "json",
        success: (res) => {
            if (res.status) {
                SEKOLAHKITA_CONFIG.data = res.data_result;
            }
        },
        error: (request, error) => {
            console.log(request);
        },
    };
    $.ajax(ajaxOptions);
}
platformInfo();
function number_format(number, decimals, dec_point, thousands_sep) {
    number = (number + "").replace(/[^0-9+\-Ee.]/g, "");
    var n = !isFinite(+number) ? 0 : +number,
        prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
        sep = typeof thousands_sep === "undefined" ? "," : thousands_sep,
        dec = typeof dec_point === "undefined" ? "." : dec_point,
        s = "",
        toFixedFix = function (n, prec) {
            var k = Math.pow(10, prec);
            return "" + Math.round(n * k) / k;
        };
    s = (prec ? toFixedFix(n, prec) : "" + Math.round(n)).split(".");
    if (s[0].length > 3) {
        s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
    }
    if ((s[1] || "").length < prec) {
        s[1] = s[1] || "";
        s[1] += new Array(prec - s[1].length + 1).join("0");
    }
    return s.join(dec);
}
function numberWithCommas(num, locale = "id-ID") {
    let floatNumber = parseFloat(num);
    return floatNumber.toLocaleString(locale);
}
function getCookie(key = "") {
    let value = "";
    let keyExist = document.cookie
        .split("; ")
        .find((row) => row.startsWith(key));
    if (keyExist) {
        value = document.cookie
            .split("; ")
            .find((row) => row.startsWith(key + "="))
            .split("=")[1];
    }
    return value;
}
function getHumanTime(seconds, lang = "id") {
    let today = new Date();
    let fetchDate = new Date(seconds * 1000);
    let todayDate = new Date(
        `${today.getFullYear()}/${today.getMonth() + 1}/${today.getDate()}`
    );
    let dtDate = new Date(
        `${fetchDate.getFullYear()}/${
            fetchDate.getMonth() + 1
        }/${fetchDate.getDate()}`
    );
    let yesterday = new Date(todayDate.getTime() - 24 * 60 * 60 * 1000);
    let result = "";
    if (todayDate.getTime() == dtDate.getTime()) {
        result = getDateFormat(seconds, lang, false, true);
    } else if (yesterday.getTime() == dtDate.getTime()) {
        result = lang == "id" ? "Kemarin" : "Yesterday";
    } else if (dtDate.getTime() < todayDate.getTime()) {
        result = getDateFormat(seconds, lang, true, false);
    } else if (dtDate.getTime() > todayDate.getTime()) {
        result = getDateFormat(seconds, lang, true, false);
    }
    return result;
}
function getDateFormat(seconds, lang = "id", date = true, time = false) {
    let dataMonth = [
        "Jan",
        "Feb",
        "March",
        "April",
        "May",
        "Juny",
        "July",
        "Aug",
        "Sept",
        "Oct",
        "Nov",
        "Des",
    ];
    let dataNumMonth = [
        "01",
        "02",
        "03",
        "04",
        "05",
        "06",
        "07",
        "08",
        "09",
        "10",
        "11",
        "12",
    ];
    let d = new Date(seconds * 1000);
    let formatDate;
    if (lang == "id") {
        if (date == true && time == true) {
            formatDate = `${d.getDate()}/${
                dataNumMonth[d.getMonth()]
            }/${d.getFullYear()} ${d.getHours()}:${d.getMinutes()}`;
        } else if (date == true) {
            formatDate = `${d.getDate()}/${
                dataNumMonth[d.getMonth()]
            }/${d.getFullYear()}`;
        } else {
            formatDate = `${d.getHours()}:${d.getMinutes()}`;
        }
    } else {
        if (date == true && time == true) {
            formatDate = `${d.getDate()} ${
                dataMonth[d.getMonth()]
            }, ${d.getFullYear()} ${d.getHours()}:${d.getMinutes()}`;
        } else if (date == true) {
            formatDate = `${d.getDate()} ${
                dataMonth[d.getMonth()]
            }, ${d.getFullYear()}`;
        } else {
            formatDate = `${d.getHours()}:${d.getMinutes()}`;
        }
    }
    return formatDate;
}
