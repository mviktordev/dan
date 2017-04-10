<?php
/*
Template Name: Capture_page
*/
?>

<?php get_header(); ?>

<section class="first-screen">

    <div class="container-fluid">
        <div class="head">
            <div class="top-nav">
                <a href="#" class="butn1 butn-top">Заказать Звонок</a>
                <span class="number">8 (800) 333-01-01</span>

            </div>
        </div>
        <div class="row">
            <div class="left-side col-6">
                <h1 class="gradient-text">Хотите зарабатывать на маникюре?</h1><br>
                <p>Бесплатно получите 3 видео урока, как зарабатывать на услугах маникюра от <span class="red">150 000</span> ежемесячно. Уроки подготовлены ведущим экспертом в России по ногтевому сервису Александрой Данграс.</p>
                <a href="#" class="butn butn1 " id="butn-left"><img src="<?php echo get_template_directory_uri(); ?>/img/myname/ico-butn.png" alt="2">Скачать</a>
            </div>
            <div class="col-6 right-side"
                 style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/myname/mac.png'); background-repeat: no-repeat; background-position: 0 0;  background-size: 100% auto; min-height: 100vh;">
            </div>
        </div>
</section>

<section class="second-screen">
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 first" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/myname/video.png'); background-repeat: no-repeat;  background-position: 0 0;  background-size: 100% auto; min-height: 100vh;">
<!--                <a href="#" class="purple" style="width: 60px; height: 60px; background-color: #8EEBFF;-->
<!--border-radius: 30%; text-decoration: none; text-align: center; padding: 15px 0; margin-left: 60%;">></a>-->
            </div>

            <div class="col-6 second">
                <div class="row">
                    <h1 class="gradient-text">Обо мне <sup class="gradient-text">1/2</sup></h1><br>
                    <p>Меня зовут <span class="red">Александра Данграс</span>. Я являюсь мастером маникюра,  со стажем работы 3 года. Инструктором и автором обучающей программы для повышения квалификации работающих мастеров « комбинированный маникюр ( аппаратная техника, 2 техники среза кутикулы, скоростное выравнивание ногтевой пластины, покрытие гель лак с глубокой прокраской цвета, визуальная архитектура. Через пол года работы я приняла участие в Дальневосточном чемпионате по моделированию ногтей, заняв второе место.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="third-screen">
    <div class="container-fluid">
        <div class="row">
            <div class="left-side col-6">
                <h1 class="gradient-text">Обо мне <sup class="gradient-text">2/2</sup></h1><br>
                <p>Через пару месяцев после чемпионата открыла свою студию. Через  год работы провела первое повышение квалификации для работающих мастеров. За год работы разработала четкую технику, позволяющую сократить время работы с клиентом до 1.5 часов. Ежедневно работая с клиентами, совершенствую данную технику, открываяновые приемы, тем самым вывожу качество услуги на новый уровень. Последний год успешно поднимаю уровень мастеров в различных регионах страны.</p>

            </div>
            <div class="col-6 right-side"
                 style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/myname/screen3.png'); background-repeat: no-repeat; background-position: 0 0;  background-size: 100% auto; min-height: 100vh;">
            </div>
        </div>
    </div>
</section>




<section class="fourth-screen">
    <div class="container-fluid">
        <div class="row">
            <div class="main col-12">
                <h1 class="gradient-text">Мои достижения</h1><br>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layot.</p>

            </div>

        </div>
    </div>
</section>

<section class="fiveth-screen">
    <div class="container-fluid">
        <div class="row">
            <div class="main col-12">
                <h1 class="gradient-text">Бесплатно получите 3 видео урока</h1><br>
                <p>Вы узнаете, как зарабатывать на услугах маникюра от 150.000 тыс. <br> В свободном доступе ещё:</p>
                <div class="timer">
                    <script src="http://megatimer.ru/s/4d5e6bd578c03372ccb9e5b62c5b862d.js"></script>

                </div>
                <div class="form">
                    <p>Для того, чтобы получить видео, заполните форму</p>

                    <?php echo do_shortcode('[contact-form-7 id="34" title="Contact form 1_copy"]'); ?>

                </div>
                <div class="footer">
                    <div class="soc-ico">
                        <a href="#" title="Мы в Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#" title="Мы в Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a href="#" title="Мы в Linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        <a href="#" title="Мы в Twitter"> <i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#" title="Мы Вконтакте"><i class="fa fa-vk" aria-hidden="true"></i></a>
                    </div>
                    <p>© 2017. All rights reserved.</p>
                </div>
            </div>

        </div>
    </div>
</section>

