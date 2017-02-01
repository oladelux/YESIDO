/**
 * Created by OLADELE on 13/01/2017.
 */
function topbar_relocate() {
    var window_top = $(window).scrollTop();
    var div_top = $('#sticky_topbar').offset().top;
    if (window_top > div_top) {
        $('.topbar').addClass('tb');
        $('#sticky_topbar').height($('.topbar').outerHeight());
    } else {
        $('.topbar').removeClass('tb');
        $('#sticky_topbar').height(0);
    }
}

$(function() {
    $(window).scroll(topbar_relocate);
    topbar_relocate();
});


//function div_relocate() {
//    var window_top = $(window).scrollTop();
//    var div_top = $('#sticky-anchor').offset().top;
//    if (window_top > div_top) {
//        $('.menu_container').addClass('menu_con');
//        $('#sticky-anchor').height($('.menu_container').outerHeight());
//    } else {
//        $('.menu_container').removeClass('menu_con');
//        $('#sticky-anchor').height(0);
//    }
//}
//
//$(function() {
//    $(window).scroll(div_relocate);
//    div_relocate();
//});