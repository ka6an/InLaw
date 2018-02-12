$(document).ready(function() {
    /*===============
    navigation menu
    ===============*/
    // hover
    $('.header__link').on('mouseenter mouseleave', function() {
        $(this).toggleClass('hovered');
    });

    $('.header-servises-link').on('mouseenter mouseleave', function() {
        $('.header-services-subMenu').toggleClass('open');
    });

    $('.header-services-subMenu').on('mouseenter mouseleave', function() {
        $('.header-servises-link').toggleClass('hovered');
        $('.header-services-subMenu').toggleClass('open');
    });


    defineActiveLink();

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

function defineActiveLink() {
    let cur_path = window.location.pathname,
        headerLink = $('.header__link');

    headerLink.each(function(i, el) {
        let headerLinkHref = $(el).attr('href');
        if (headerLinkHref != null && headerLinkHref.indexOf(cur_path) !== -1) {
            if (cur_path === '/')
                headerLink.eq(0).addClass('active');
            else
                $(el).addClass('active');
        }
    });
}