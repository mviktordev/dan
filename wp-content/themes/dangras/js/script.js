/* Открытие меню */

var main = function () { //главная функция
    $('.icon-menu').click(function () { /* выбираем класс icon-menu и
     добавляем метод click с функцией, вызываемой при клике */
        $('.menu').animate({ //выбираем класс menu и метод animate
            right: '0px' /* теперь при клике по иконке, меню, скрытое за
             левой границей на 285px, изменит свое положение на 0px и станет видимым */
        }, 200); //скорость движения меню в мс
        $('body').animate({ //выбираем тег body и метод animate
            right: '0' /* чтобы всё содержимое также сдвигалось вправо
             при открытии меню, установим ему положение 285px */
        }, 200); //скорость движения меню в мс
    });
    /* Закрытие меню */
    $('.icon-close').click(function () { //выбираем класс icon-close и метод click
        $('.menu').animate({ //выбираем класс menu и метод animate
            right: '-300px' /* при клике на крестик меню вернется назад в свое
             положение и скроется */
        }, 300); //скорость движения меню в мс
        $('body').animate({ //выбираем тег body и метод animate
            right: '0px' //а содержимое страницы снова вернется в положение 0px
        }, 200); //скорость движения меню в мс
    });
};

$(document).ready(main);
/* как только страница полностью загрузится, будет
 вызвана функция main, отвечающая за работу меню */

$(document).on('ready', function () {
    $(".slick-slider").slick({
        infinite: true,
        dots: false,
        appendArrows: '.arrow-slick',
        speed: 300,
        slidesToShow: 2,
        prevArrow: '<button type="button" class="slick-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',
        nextArrow: '<button type="button" class="slick-next"><i class="fa fa-angle-right" aria-hidden="true"></i></button>'
    });
    $("#slidr-img").slick({
        infinite: true,
        dots: true,
        appendArrows: '.arrow-slick-cool',
        speed: 300,
        slidesToShow: 1,
        prevArrow: '<button type="button" class="slick-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',
        nextArrow: '<button type="button" class="slick-next"><i class="fa fa-angle-right" aria-hidden="true"></i></button>',
        appendDots: '.dots-slider',
        autoplaySpeed: 2000
    });
    $("#slidr-img2").slick({
        infinite: true,
        dots: true,
        appendArrows: '.arrow-slick-cool2',
        speed: 300,
        slidesToShow: 1,
        prevArrow: '<button type="button" class="slick-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',
        nextArrow: '<button type="button" class="slick-next"><i class="fa fa-angle-right" aria-hidden="true"></i></button>',
        appendDots: '.dots-slider2',
        autoplaySpeed: 2000
    });
    $("#what-we-do").slick({
        infinite: true,
        dots: true,
        appendArrows: '.arrow-slick-cool3',
        speed: 300,
        slidesToShow: 1,
        prevArrow: '',
        nextArrow: '',
        appendDots: '.dots-slider3',
        autoplaySpeed: 2000,
        variableWidth: true
    });
    $('.cooperation-slider').slick({
        infinite: true,
        dots: false,
        slidesToShow: 1,
        arrows: false
    });

    $('#slide-1').on('click', function () {
        var slideIndex = $(this).index();
        $('#what-we-do').slick('slickGoTo', 0);
        $('.cooperation-slider').slick('slickGoTo', 0);
    });
    $('#slide-2').on('click', function () {
        var slideIndex = $(this).index();
        $('#what-we-do').slick('slickGoTo', 1);
        $('.cooperation-slider').slick('slickGoTo', 1);
    });
    $('#slide-3').on('click', function () {
        var slideIndex = $(this).index();
        $('#what-we-do').slick('slickGoTo', 2);
        $('.cooperation-slider').slick('slickGoTo', 2);
    });
    $('#slide-4').on('click', function () {
        var slideIndex = $(this).index();
        $('#what-we-do').slick('slickGoTo', 3);
    });
    $('#slide-5').on('click', function () {
        var slideIndex = $(this).index();
        $('#what-we-do').slick('slickGoTo', 4);
    });
    $('#slide-6').on('click', function () {
        var slideIndex = $(this).index();
        $('#what-we-do').slick('slickGoTo', 5);
    });

    $(".wpcf7-form").validate({
        errorClass: 'error',
        validClass: 'success',
        errorElement: '',
        rules: {
            name: {
                required: true,
                minlength: 3
            },
            email: {
                required: true,
                email: true
            },
            telephone: {
                required: true,
                number: true,
                minlength: 7
            },
            city: {
                required: true,
                minlength: 3
            }
        },
        highlight: function (element, errorClass, validClass) {
            $(element).parent('').parent('').addClass('error-label');
            $(element).addClass(errorClass).removeClass(validClass);
            $(element).parent('').parent('').removeClass('label-success');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).parent('').parent('').removeClass('error-label');
            $(element).removeClass(errorClass).addClass(validClass);
            $(element).parent('').parent('').addClass('label-success');
        }

    });

});
$(document).on('ready', function () {
    $('input').focus(function () {
        $(this).parent('').parent('').addClass('hover')
    });

    $('input').blur(function () {
        $(this).parent('').parent('').removeClass('hover')
    });

    $('.fa.fa-bars').click(function () {
            $(this).css('display', 'none');
            $('.fa.fa-phone').css('display', 'none');
        }
    );
    $('.icon-close').click(function () {
            $('.fa.fa-bars').css('display', 'block');
            $('.fa.fa-phone').css('display', 'block');
        }
    );
    $('#submit').click(function () {
            $('this').css('color', 'black')
        }
    )

    $('.name input').focus(function () {
        $('.first-label:nth-child(1)').addClass('active');
    });
    $('.name input').blur(function () {
        $('.first-label:nth-child(1)').removeClass('active');
    });

    $('.telephone input').focus(function () {
        $('.first-label:nth-child(2)').addClass('active');
    });
    $('.telephone input').blur(function () {
        $('.first-label:nth-child(2)').removeClass('active');
    });

    $('.email input').focus(function () {
        $('.first-label:nth-child(3)').addClass('active');
    });
    $('.email input').blur(function () {
        $('.first-label:nth-child(3)').removeClass('active');
    });

    $('.city input').focus(function () {
        $('.first-label:nth-child(4)').addClass('active');
    });
    $('.city input').blur(function () {
        $('.first-label:nth-child(4)').removeClass('active');
    });
});