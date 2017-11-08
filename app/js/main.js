$(document).ready(function() {
    $('.header__link').on('mouseenter', function() { // навели курсор
        $(this).addClass('hovered');
        if ($(this).data('name') === "servises") // навели на Услуги
            $('#header-serises-subMenu').addClass('open');
    });

    var fun = {
        test: function() {
            $(this).addClass('hovered');
            $('#header-serises-subMenu').addClass('open');
        }
    };
    $('.header__link').on('mouseleave', function() { // убрали курсор
        $(this).removeClass('hovered');

        $('#header-serises-subMenu').removeClass('open');
        console.log(this);
        $('#header-serises-subMenu').on('mouseenter', $.proxy( fun.test, this) ); // перешли в выпадающий список

        $('#header-serises-subMenu').on('mouseleave', function() { // покинули выпадающий список и пункт меню
            $('#header-serises-subMenu').removeClass('open');
            $('#header-servises-link').removeClass('hovered');
        });
    });
});