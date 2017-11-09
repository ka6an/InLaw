$(document).ready(function() {
    /*===============
    navigation menu
    ===============*/
    // hover
    $('.header__link').on('mouseenter mouseleave', function() {
        $(this).toggleClass('hovered');
    });

    $('#header-servises-link').on('mouseenter mouseleave', function() {
        $('#header-serises-subMenu').toggleClass('open');
    });

    $('#header-serises-subMenu').on('mouseenter mouseleave', function() {
        $('#header-servises-link').toggleClass('hovered');
        $('#header-serises-subMenu').toggleClass('open');
    });

    var header_height = 80 > $('.main').innerHeight() ? 80 : $('.main').innerHeight();
    fixedMenu(header_height);
    $(window).scroll(function() {
        fixedMenu(header_height);
    })
});


function fixedMenu(header_height) {
    var top = $(this).scrollTop();
    console.log('top = ' + top);
    console.log('header_height = ' + header_height);
    if (top > header_height)
        $('#header').removeClass();
    else {
        $('#header').addClass('main-page');
    }
}