console.clear();

function TopBar__toggle() {
    var $btn = $(".btn-toggle-top-bar");

    if ($btn.hasClass("active")){
        $btn.removeClass("active");
        $('html').removeClass('top-page-actived');
    } else {
        $btn.addClass("active");
        $('html').addClass('top-page-actived');
    }
}

$(function() {
    $('.btn-toggle-top-bar').click(TopBar__toggle);
});