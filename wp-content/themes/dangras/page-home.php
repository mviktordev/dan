<?php
/*
Template Name: Главная
*/
?>
<?php get_header(); ?>
    <header>
        <div class="container-fluid">
            <div class="row ">
                <video autoplay loop>
                    <source src="<?php echo get_template_directory_uri(); ?>/img/video.mp4" type="video/mp4">
                </video>
                <div class="header-bg"
                     style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/video-bg.png); position: relative; z-index: 0;">
                    <?php get_template_part('navigation'); ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png"" alt="" class="logo">
                    <div class="content">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/logo-name-header.png" alt="">
                    </div>
                    <div class="but">
                        <a href="/galereya/" class="butn butn1">
                            Запись на маникюр
                        </a>
                        <a href="/obuchenie/" class="butn butn2">
                            обучение маникюру
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="services">
        <div class="container-fluid">
            <h2><?php echo get_field('service-title'); ?></h2>
            <div class="row bg-hover" style="background-size: cover">
                <div class="col-3">
                    <div class="service">
                        <h5>Услуги маникюра<br>
                            & педикюра</h5>
                        <a href="#" class="arrow">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-serv.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-3">
                    <div class="service">
                        <h5>Онлайн<br>
                            обучение</h5>
                        <a href="http://dangras.ru/obuchenie/" class="arrow">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-serv.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-3">
                    <div class="service">
                        <h5>Живые мастер-<br>
                            классы в городах</h5>
                        <a href="http://dangras.ru/master-klassy/" class="arrow">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-serv.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-3">
                    <div class="service">
                        <h5>Магазин</h5>
                        <a href="http://dangras.ru/magazin/" class="arrow">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-serv.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        $('.services .col-3:nth-child(1)').mouseenter(
            function () {
                $('.services .col-3:nth-child(1)').css('background', 'url(<?php echo get_template_directory_uri(); ?>/img/serv1-1.jpg) no-repeat 0% 0%');
                $('.services .col-3:nth-child(2)').css('background', 'url(<?php echo get_template_directory_uri(); ?>/img/serv1-2.jpg) no-repeat 0% 0%');
                $('.services .col-3:nth-child(3)').css('background', 'white');
                $('.services .col-3:nth-child(4)').css('background', 'white');
                $('.services .col-3:nth-child(1) h5').css('color', 'white');
                $('.services .col-3:nth-child(1) .arrow').css('background', 'white');
                $('.services .col-3:nth-child(2) h5').css('color', '#d89fff');
                $('.services .col-3:nth-child(2) .arrow').css('background', 'transparent');
                $('.services .col-3:nth-child(4) h5').css('color', '#d89fff');
                $('.services .col-3:nth-child(4) .arrow').css('background', 'transparent');
                $('.services .col-3:nth-child(3) h5').css('color', '#d89fff');
                $('.services .col-3:nth-child(3) .arrow').css('background', 'transparent');
            });
        $('.services .col-3:nth-child(2)').mouseenter(
            function () {
                $('.services .col-3:nth-child(1)').css('background', 'white');
                $('.services .col-3:nth-child(2)').css('background', 'url(<?php echo get_template_directory_uri(); ?>/img/serv2-1.jpg) no-repeat 0 0')
                $('.services .col-3:nth-child(3)').css('background', 'url(<?php echo get_template_directory_uri(); ?>/img/serv2-2.jpg) no-repeat 0 0')
                $('.services .col-3:nth-child(4)').css('background', 'white')
                $('.services .col-3:nth-child(2) h5').css('color', 'white');
                $('.services .col-3:nth-child(2) .arrow').css('background', 'white');
                $('.services .col-3:nth-child(1) h5').css('color', '#d89fff');
                $('.services .col-3:nth-child(1) .arrow').css('background', 'transparent');
                $('.services .col-3:nth-child(4) h5').css('color', '#d89fff');
                $('.services .col-3:nth-child(4) .arrow').css('background', 'transparent');
                $('.services .col-3:nth-child(3) h5').css('color', '#d89fff');
                $('.services .col-3:nth-child(3) .arrow').css('background', 'transparent');
            });
        $('.services .col-3:nth-child(3)').mouseenter(
            function () {
                $('.services .col-3:nth-child(1)').css('background', 'white');
                $('.services .col-3:nth-child(2)').css('background', 'white');
                $('.services .col-3:nth-child(3)').css('background', 'url(<?php echo get_template_directory_uri(); ?>/img/serv3-1.jpg) no-repeat 0 0');
                $('.services .col-3:nth-child(4)').css('background', 'url(<?php echo get_template_directory_uri(); ?>/img/serv3-2.jpg) no-repeat 0 0')
                $('.services .col-3:nth-child(1) h5').css('color', '#d89fff');
                $('.services .col-3:nth-child(1) .arrow').css('background', 'transparent');
                $('.services .col-3:nth-child(2) h5').css('color', '#d89fff');
                $('.services .col-3:nth-child(2) .arrow').css('background', 'transparent');
                $('.services .col-3:nth-child(4) h5').css('color', '#d89fff');
                $('.services .col-3:nth-child(4) .arrow').css('background', 'transparent');
                $('.services .col-3:nth-child(3) h5').css('color', 'white');
                $('.services .col-3:nth-child(3) .arrow').css('background', 'white');
            });
        $('.services .col-3:nth-child(4)').mouseenter(
            function () {
                $('.services .col-3:nth-child(1)').css('background', 'white');
                $('.services .col-3:nth-child(2)').css('background', 'url(<?php echo get_template_directory_uri(); ?>/img/serv4-1.jpg) no-repeat 0 0');
                $('.services .col-3:nth-child(3)').css('background', 'url(<?php echo get_template_directory_uri(); ?>/img/serv4-2.jpg) no-repeat 0 0');
                $('.services .col-3:nth-child(4)').css('background', 'url(<?php echo get_template_directory_uri(); ?>/img/serv4-3.jpg) no-repeat 0 0')
                $('.services .col-3:nth-child(1) h5').css('color', '#d89fff');
                $('.services .col-3:nth-child(1) .arrow').css('background', 'transparent');
                $('.services .col-3:nth-child(2) h5').css('color', '#d89fff');
                $('.services .col-3:nth-child(2) .arrow').css('background', 'transparent');
                $('.services .col-3:nth-child(3) h5').css('color', '#d89fff');
                $('.services .col-3:nth-child(3) .arrow').css('background', 'transparent');
                $('.services .col-3:nth-child(4) h5').css('color', 'white');
                $('.services .col-3:nth-child(4) .arrow').css('background', 'white');
            });
    </script>
    <section class="biography">
        <div class="container-fluid">
            <div class="row">
                <div class="col-6 first"
                     style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/precident.png')">
                </div>
                <div class="col-6 second"
                     style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/line-home.png'); background-position: center top;
                             background-repeat: no-repeat;
                             background-size: 100% auto;">
                    <div class="row line">
                        <h2>Моя биография</h2>
                        <p>
                            Меня зовут Александра Данграс. Я являюсь мастером маникюра,
                            со стажем работы 3 года. Инструктором и автором обучающей
                            программы для повышения квалификации работающих мастеров
                            «комбинированный маникюр (аппаратная техника, 2 техники
                            среза кутикулы, скоростное выравнивание ногтевой пластины,
                            покрытие гель лак с глубокой прокраской цвета, визуальная
                            архитектура.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="galery">
        <div class="container-fluid">
            <div class="row">
                <div class="col-3 bg-galery">
                    <div class="galery-hover">
                        <h4>Lorem ipsum</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit, sed do eiusmod tempor
                        </p>
                        <div class="cube"></div>
                    </div>
                </div>
                <div class="col-3 bg-galery">
                    <div class="galery-hover">
                        <h4>Lorem ipsum</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit, sed do eiusmod tempor
                        </p>
                        <div class="cube"></div>
                    </div>
                </div>
                <div class="col-3 bg-galery title">
                    <h2>Галерея</h2>
                </div>
                <div class="col-3 bg-galery">
                    <div class="galery-hover">
                        <h4>Lorem ipsum</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit, sed do eiusmod tempor
                        </p>
                        <div class="cube"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-3 bg-galery">
                    <div class="galery-hover">
                        <h4>Lorem ipsum</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit, sed do eiusmod tempor
                        </p>
                        <div class="cube"></div>
                    </div>
                </div>
                <div class="col-3 bg-galery">
                    <div class="galery-hover">
                        <h4>Lorem ipsum</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit, sed do eiusmod tempor
                        </p>
                        <div class="cube"></div>
                    </div>
                </div>
                <div class="col-3 bg-galery">
                    <div class="galery-hover">
                        <h4>Lorem ipsum</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit, sed do eiusmod tempor
                        </p>
                        <div class="cube"></div>
                    </div>
                </div>
                <div class="col-3 bg-galery">
                    <div class="galery-hover">
                        <h4>Lorem ipsum</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit, sed do eiusmod tempor
                        </p>
                        <div class="cube"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-3 bg-galery">
                    <div class="galery-hover">
                        <h4>Lorem ipsum</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit, sed do eiusmod tempor
                        </p>
                        <div class="cube"></div>
                    </div>
                </div>
                <div class="col-3 bg-galery link">
                    <a href="#">
                        <p>Показать все</p>
                        <a href="/galereya/" class="bounce-btn">
                            <i class="fa fa-arrow-down" aria-hidden="true"></i>
                        </a>
                    </a>
                </div>
                <div class="col-3 bg-galery">
                    <div class="galery-hover">
                        <h4>Lorem ipsum</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit, sed do eiusmod tempor
                        </p>
                        <div class="cube"></div>
                    </div>
                </div>
                <div class="col-3 bg-galery">
                    <div class="galery-hover">
                        <h4>Lorem ipsum</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit, sed do eiusmod tempor
                        </p>
                        <div class="cube"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        section.galery .row:nth-child(1) .bg-galery:nth-child(1) {
            background-image: url("<?php echo get_template_directory_uri(); ?>/img/img01.jpg");
        }
        section.galery .row:nth-child(1) .bg-galery:nth-child(2) {
            background-image: url("<?php echo get_template_directory_uri(); ?>/img/img02.jpg");
        }
        section.galery .row:nth-child(1) .bg-galery:nth-child(3) {
            background-image: url("<?php echo get_template_directory_uri(); ?>/img/title-bg.jpg");
            background-size: 250px 250px;
        }
        section.galery .row:nth-child(1) .bg-galery:nth-child(3):hover {
            background-image: url("<?php echo get_template_directory_uri(); ?>/img/title-bg.jpg");
            background-size: 250px 250px;
        }
        section.galery .row:nth-child(1) .bg-galery:nth-child(4) {
            background-image: url("<?php echo get_template_directory_uri(); ?>/img/img04.jpg");
        }
        section.galery .row:nth-child(2) .bg-galery:nth-child(1) {
            background-image: url("<?php echo get_template_directory_uri(); ?>/img/img05.jpg");
        }
        section.galery .row:nth-child(2) .bg-galery:nth-child(2) {
            background-image: url("<?php echo get_template_directory_uri(); ?>/img/img06.jpg");
        }
        section.galery .row:nth-child(2) .bg-galery:nth-child(3) {
            background-image: url("<?php echo get_template_directory_uri(); ?>/img/img07.jpg");
        }
        section.galery .row:nth-child(2) .bg-galery:nth-child(4) {
            background-image: url("<?php echo get_template_directory_uri(); ?>/img/img08.jpg");
        }
        section.galery .row:nth-child(3) .bg-galery:nth-child(1) {
            background-image: url("<?php echo get_template_directory_uri(); ?>/img/img09.jpg");
        }
        section.galery .row:nth-child(3) .bg-galery:nth-child(2) {
            background-color: #f6fcae;
        }
        section.galery .row:nth-child(3) .bg-galery:nth-child(3) {
            background-image: url("<?php echo get_template_directory_uri(); ?>/img/img11.jpg");
        }
        section.galery .row:nth-child(3) .bg-galery:nth-child(4) {
            background-image: url("<?php echo get_template_directory_uri(); ?>/img/img12.jpg");
        }
    </style>
    <section class="bolls"
             style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/pink-bg.png); background-size: 100% 100%; background-repeat: none">
        <div class="container-fluid">
            <div class="row">
                <div class="col-6 cont">
                    <div class="cont-flex">
                        <div>
                            <h2>Мои достижения</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                nisi ut aliquip ex ea commodo consequat</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 nopaddig">
                    <div class="slider-flex slider-back1">
                        <div class="arrow-slick-cool"></div>
                        <div id="slidr-img">
                            <div>
                                <img data-slidr="one"
                                     src="<?php echo get_template_directory_uri(); ?>/img/sertificate.png"/>
                                <div class="namber-slide">
                                    <p>
                                        0.1/
                                        <span>
                                            10
                                        </span>
                                    </p>
                                </div>
                            </div>
                            <div>
                                <img data-slidr="one"
                                     src="<?php echo get_template_directory_uri(); ?>/img/sertificate.png"/>
                                <div class="namber-slide">
                                    <p>
                                        0.2/
                                        <span>
                                            10
                                        </span>
                                    </p>
                                </div>
                            </div>
                            <div>
                                <img data-slidr="three"
                                <img data-slidr="one"
                                     src="<?php echo get_template_directory_uri(); ?>/img/sertificate.png"/>
                                <div class="namber-slide">
                                    <p>
                                        0.3/
                                        <span>
                                            10
                                        </span>
                                    </p>
                                </div>
                            </div>
                            <div>
                                <img data-slidr="one"
                                     src="<?php echo get_template_directory_uri(); ?>/img/sertificate.png"/>
                                <div class="namber-slide">
                                    <p>
                                        0.4/
                                        <span>
                                            10
                                        </span>
                                    </p>
                                </div>
                            </div>
                            <div>
                                <img data-slidr="one"
                                     src="<?php echo get_template_directory_uri(); ?>/img/sertificate.png"/>
                                <div class="namber-slide">
                                    <p>
                                        0.5/<span>10</span>
                                    </p>
                                </div>
                            </div>
                            <div>
                                <img data-slidr="one"
                                     src="<?php echo get_template_directory_uri(); ?>/img/sertificate.png"/>
                                <div class="namber-slide">
                                    <p>
                                        0.6/
                                        <span>
                                            10
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="dots-slider"></div>
                    </div>
                </div>
                <div class="col-6 nopaddig">
                    <div class="slider-flex slider-back2" style="padding: 0 0 0 30px">
                        <div class="dots-slider2"></div>
                        <div id="slidr-img2">
                            <div>
                                <div class="top-slide">
                                    <div class="avatarka">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/avatar.png"
                                             alt="">
                                        <h5>Наталья Ростовкая</h5>
                                    </div>
                                    <div class="namber-slide">
                                        <p>
                                            0.1/
                                            <span>
                                            10
                                        </span>
                                        </p>
                                    </div>
                                </div>
                                <div class="content-slide">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit, sed do eiusmod tempor incididunt ut labore et
                                        dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex
                                        ea commodo consequat. Duis aute irure dolor in
                                        reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                        non proident, sunt in culpa qui officia deserunt mollit
                                        anim id est laborum.</p>
                                </div>
                            </div>
                            <div>
                                <div class="top-slide">
                                    <div class="avatarka">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/avatar.png"
                                             alt="">
                                        <h5>Наталья Ростовкая</h5>
                                    </div>
                                    <div class="namber-slide">
                                        <p>
                                            0.1/
                                            <span>
                                            10
                                        </span>
                                        </p>
                                    </div>
                                </div>
                                <div class="content-slide">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit, sed do eiusmod tempor incididunt ut labore et
                                        dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex
                                        ea commodo consequat. Duis aute irure dolor in
                                        reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                        non proident, sunt in culpa qui officia deserunt mollit
                                        anim id est laborum.</p>
                                </div>
                            </div>
                        </div>
                        <div class="arrow-slick-cool2"></div>
                    </div>
                </div>
                <div class="col-6 cont">
                    <h2>Отзывы</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                        enim ad minim veniam, quis nostrud exercitation ullamco laboris
                        nisi ut aliquip ex ea commodo consequat</p>
                </div>
            </div>
        </div>
    </section>
    <section class="blog">
        <div class="container-fluid">
            <div class="row">
                <h2>Лучшее из блога</h2>
                <div class="col-6"
                     style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/img-blog1.jpg')"></div>
                <div class="col-6 txt pink">
                    <h3>Заголовок</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                        commodo consequat...</p>
                    <a href="#" class="butn butn1">Читать далее</a>
                </div>
                <div class="col-6 txt white">
                    <h3>Заголовок</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                        commodo consequat...</p>
                    <a href="#" class="butn butn2">Читать далее</a>
                </div>
                <div class="col-6"
                     style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/img-blog2.jpg')"></div>
                <div class="col-6"
                     style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/img-blog3.jpg')"></div>
                <div class="col-6 txt pink">
                    <h3>Заголовок</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                        commodo consequat...</p>
                    <a href="#" class="butn butn1">Читать далее</a>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>