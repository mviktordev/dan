<?php
/*
Template Name: Shop-page
*/
?>

<?php get_header(); ?>

    <header class="master online">
        <div class="container-fluid">
            <div class="row">
                <div class="header-bg"
                     style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/shop-page/bg-1.png); background-size: cover; min-height: 600px; height: 100vh">
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
                                        Интернет магазин товаров для ногтевого <br>
                                        сервиса по ценам производителя
                                    </h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A asperiores, assumenda atque consequuntur cum cupiditate delectus dolores et facere
                                    </p>
                                </div>

                            </div>

                            <a href="#" class="mouse">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/shop-page/mouse.png"" alt="" width="16px" height="24px">
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="shop-items">
        <div class="container-fluid">
            <div class="row">
                <div class="col-6 first">
                    <div class="content">
                        <h1>Категории товаров</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad alias amet architecto, deleniti doloremque doloribus ea eveniet impedit incidunt ipsum iure nisi nobis pariatur, porro quibusdam sed temporibus totam velit.</p>
                        <ul>
                            <li>Гель лаки(soak-off gel polish)</li>
                            <li>Базы(base coat)</li>
                            <li>Топы(top coat)</li>
                            <li>Инструменты</li>
                            <li>Фрезы</li>
                            <li>Оборудование</li>
                            <li>Дизайны</li>
                            <li>Аксессуары</li>
                            <li>Распродажа</li>
                            <li>Новинки</li>
                        </ul>
                    </div>
                </div>
                <div class="col-6">

                        <div class="row">
                            <div class="col-12 shop-item">
                                <div class="col-6 left-sid">
                                    <div class="top">
                                        <span class="price">549 <small>&#8381;</small></span>
                                    </div>
                                    <div class="bottom">
                                        <h3>Jmen</h3>
                                        <p>Soak-off Gel Polish</p>
                                    </div>
                                </div>
                                <div class="col-6 right-sid">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/shop-page/item-1.png"" alt="" >
                                </div>
                            </div>

                        </div>

                </div>
            </div>
        </div>

    </section>
    <section class="new slider">
        <div class="container-fluid">
            <div class="row">
                <div class="col-6">
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
                <div class="col-6">

                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>