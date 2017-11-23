$(document).ready(function() {
    /*===============
    navigation menu
    ===============*/
    // hover
    $('.header__link').on('mouseenter mouseleave', function() {
        $(this).toggleClass('hovered');
    });

    $('#header-servises-link').on('mouseenter mouseleave', function() {
        $('#header-services-subMenu').toggleClass('open');
    });

    $('#header-services-subMenu').on('mouseenter mouseleave', function() {
        $('#header-servises-link').toggleClass('hovered');
        $('#header-services-subMenu').toggleClass('open');
    });

    fixedMenu();
});

$(window).scroll(function() {
    fixedMenu();
})

function fixedMenu() {
    var top = $(this).scrollTop();
    if (top > 0)
        $('#header').removeClass();
    else
        $('#header').addClass('main-page');
}

function toggleModal() {
    $('.modal-window').toggleClass('open');
    $('body').toggleClass('no-scroll');
}

/*===============
form
===============*/
function is_checked(checkbox) {
    if ($(checkbox).is(':checked'))
        $(checkbox).parent().removeClass('incorrect');
}