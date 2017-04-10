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
                        <a href="#" class="butn butn1">
                            Запись на маникюр
                        </a>
                        <a href="#" class="butn butn2">
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
                        <a href="#" class="arrow">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-serv.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-3">
                    <div class="service">
                        <h5>Живые мастер-<br>
                            классы в городах</h5>
                        <a href="#" class="arrow">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-serv.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-3">
                    <div class="service">
                        <h5>Магазин</h5>
                        <a href="#" class="arrow">
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


    <section class="biography"
             style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/bio-bg-all.jpg')">
        <div class="container-fluid">
            <div class="row">
                <div class="col-6 first">
                    <!--                style="background-image: url('-->
                    <?php //echo get_template_directory_uri(); ?><!--/img/boi-bg.jpg')"-->
                </div>

                <div class="col-6 second">
                    <!--                style="background-image: url('-->
                    <?php //echo get_template_directory_uri(); ?><!--/img/line.jpg')"-->
                    <div class="row line">
                        <!--                    style="background-image: url('-->
                        <?php //echo get_template_directory_uri(); ?><!--/img/boi-bg2.jpg')"-->
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
                        <a href="#" class="bounce-btn">
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
                    <h2>Мои достижения</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                        enim ad minim veniam, quis nostrud exercitation ullamco laboris
                        nisi ut aliquip ex ea commodo consequat</p>
                </div>
                <div class="col-6 nopaddig"
                     style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/bg-slider1.jpg');">
                    <div class="slider-flex">
                        <div class="arrow-slick-cool"></div>
                        <div id="slidr-img">
                            <div>
                                <img data-slidr="one" src="<?php echo get_template_directory_uri(); ?>/img/img01.jpg"/>
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
                                <img data-slidr="two" src="<?php echo get_template_directory_uri(); ?>/img/img02.jpg"/>
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
                                <img data-slidr="three"
                                     src="<?php echo get_template_directory_uri(); ?>/img/img04.jpg"/>
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
                                <img data-slidr="four" src="<?php echo get_template_directory_uri(); ?>/img/img04.jpg"/>
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
                                <img data-slidr="five" src="<?php echo get_template_directory_uri(); ?>/img/img04.jpg"/>
                                <div class="namber-slide">
                                    <p>
                                        0.1/<span>10</span>
                                    </p>
                                </div>
                            </div>
                            <div>
                                <img data-slidr="six" src="<?php echo get_template_directory_uri(); ?>/img/img04.jpg"/>
                                <div class="namber-slide">
                                    <p>
                                        0.1/
                                        <span>
                                            10
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="dots-slider"></div>
                    </div>

                    <!--                    <script>-->
                    <!--                        slidr.create('slidr-img', {-->
                    <!--                            after: function (e) {-->
                    <!--                                console.log('in: ' + e.in.slidr);-->
                    <!--                            },-->
                    <!--                            before: function (e) {-->
                    <!--                                console.log('out: ' + e.out.slidr);-->
                    <!--                            },-->
                    <!--                            breadcrumbs: true,-->
                    <!--                            controls: 'border',-->
                    <!--                            direction: 'horizontal',-->
                    <!--                            fade: true,-->
                    <!--                            keyboard: true,-->
                    <!--                            overflow: true,-->
                    <!--                            theme: '#222',-->
                    <!--                            timing: {'linear': '0.5s ease-in'},-->
                    <!--                            touch: true,-->
                    <!--                            pause: true,-->
                    <!--                            transition: 'linear'-->
                    <!--                        }).start();-->
                    <!--                    </script>-->

                </div>
                <div class="col-6">
                    <div id="slidr-img2"
                         style="display: inline-block; width: 100% !important; height: 100% !important; background-image: url('<?php echo get_template_directory_uri(); ?>/img/bg-slider2.jpg'); background-repeat: no-repeat; background-size: 100% 100%; height: 500px">
                        <div data-slidr="one" style="padding: 80px 150px">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/img01.jpg"/>
                            <h5>Наталья Ростовкая</h5>
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
                        <div data-slidr="three" style="padding: 80px 150px">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/img01.jpg"/>
                            <h5>Наталья Ростовкая</h5>
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
                        <div data-slidr="four" style="padding: 80px 150px">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/img01.jpg"/>
                            <h5>Наталья Ростовкая</h5>
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
                        <div data-slidr="five" style="padding: 80px 150px">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/img01.jpg"/>
                            <h5>Наталья Ростовкая</h5>
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
                        <div data-slidr="six" style="padding: 80px 150px">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/img01.jpg"/>
                            <h5>Наталья Ростовкая</h5>
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


                    <script>
                        slidr.create('slidr-img2', {
                            after: function (e) {
                                console.log('in: ' + e.in.slidr);
                            },
                            before: function (e) {
                                console.log('out: ' + e.out.slidr);
                            },
                            breadcrumbs: true,
                            controls: 'border',
                            direction: 'horizontal',
                            fade: true,
                            keyboard: true,
                            overflow: true,
                            theme: '#222',
                            timing: {'linear': '0.5s ease-in'},
                            touch: true,
                            pause: true,
                            transition: 'linear'
                        }).start();
                    </script>
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