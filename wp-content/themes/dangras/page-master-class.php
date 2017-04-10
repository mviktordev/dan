<?php
/*
Template Name: Мастер-класс
*/
?>

<?php get_header(); ?>

    <header class="master">
        <div class="container-fluid">
            <div class="row">
                <div class="header-bg"
                     style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/master-class-bg.png); background-size: cover; min-height: 600px">

                    <?php get_template_part('navigation'); ?>
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <a href="/">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo-white.png"" alt=""
                                    class="logo">
                                </a>
                                <div class="content">
                                    <h1>
                                        Живые мастер-классы в вашем <br>
                                        городе по комбинированному маникюру
                                    </h1>
                                    <p>Повышение квалификации мастеров ногтевого сервиса от ведущего
                                        эксперта, по авторской технологии Александры Данграсс
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="biography"
             style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/master-classes.png')">
        <div class="container-fluid">
            <div class="row">
                <div class="col-6 first">
                </div>

                <div class="col-6 second">
                    <div class="row line">
                        <h2>Посмотрите как проходят <br>
                            наши мероприятия</h2>
                        <p>
                            It is a long established fact that a reader will be distracted by the readable content of a
                            page when looking at its layout. The point of using Lorem Ipsum is that it has a
                            more-or-less normal distribution of letters, as opposed to using 'Content here, content
                            here', making it look like readable English. Many desktop publishing packages and web page
                            editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will
                            uncover many web sites still in their infancy.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="new slider">
        <div class="container-fluid">
            <div class="row">
                <div class="col-6 text-slider">
                    <h2>Чему мы обучаем</h2>
                    <ul>
                        <li><a href="#">Привлечение клиентов</a></li>
                        <li><a href="#">Сокращение времени на клиента</a></li>
                        <li><a href="#">Повышение качества</a></li>
                        <li><a href="#">Сокращение затрат на материалы</a></li>
                        <li><a href="#">Обучаем работать с любыми материалами и инструментами</a></li>
                        <li><a href="#">Правильным до продажам</a></li>
                    </ul>
                </div>
                <div class="col-6 nopadding">
                    <div class="hover-img"
                         style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/img-edu-1.jpg)">
                        <div class="number-img">
                            <p>0.1/<span>0.6</span></p>
                        </div>
                        <div class="next-img"
                             style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/img-edu-2.jpg)">
                            <div class="filter-img"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>