var $window = $(window);
var $html = $("html");

function Loader__init() {
    $(".loader >.start>a").click(function () {
        $(".loader").fadeOut(3000);

        var href = $(this).attr('href');

        setTimeout(function() {
            location.href = href;
        }, 3000);

        // 바로 이동되는 것을 막는다.
        return false;
    });
}


$(function () {
    Loader__init();
});