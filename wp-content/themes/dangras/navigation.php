<style>
    /* Body */

    body {
        right: 0;
        margin: 0;
        position: relative;
    }

    /* Menu */

    .menu {
        background: rgba(245, 200, 224, 0.3) none repeat scroll 0 0;
        border-left: 1px solid rgb(245, 200, 224);
        height: 100%;
        padding-top: 26px;
        position: fixed;
        right: -300px;
        width: 300px;
        z-index: 11;
    }

    /* Basic CSS */

    .phone {
        border-bottom: 1px solid #ff9ae0;
        color: #ffffff;
        display: inline-block;
        padding-bottom: 26px;
        padding-left: 40px;
        width: auto;
    }

    .background {
        position: absolute;
        right: 0;
        top: 60px;
        z-index: 0;
    }

    .menu ul {
        border-top: 1px solid #f9c7d6;
        list-style: none;
        margin: 0;
        padding: 120px 0 0 40px;
    }

    .menu li {
        font-family: 'Roboto', sans-serif;
    }

    .menu a:hover {
        cursor: pointer;
        color: #c7f5ff;
        text-decoration: none;
    }

    .menu ul a {
        color: #fff;
        line-height: 15px;
        font-size: 15px;
        padding: 17px 0;
        text-decoration: none;
        text-transform: uppercase;
        display: inline-block;
    }

    .icon-close {
        cursor: pointer;
        padding-left: 100px;
        padding-top: 0px;
        padding-bottom: 6px;
        position: absolute;
        right: 20px;
        top: 20px;
        font-size: 24px;
        color: white;
        font-family: 'R', sans-serif;
        font-weight: 300;
        z-index: 10;

    }

    .icon-menu img {
        margin-right: 5px;
    }
    .menu::before {
        background: rgb(255, 192, 203) none repeat scroll 0 0;
        content: "";
        filter: blur(17px);
        height: 100%;
        left: 0;
        opacity: 0.8;
        position: absolute;
        top: 0;
        width: 100%;
        z-index: -1;
    }
</style>


<div class="tell">
    <div class="hover">
        <i class="fa fa-phone" aria-hidden="true"></i>
        <span class="zakaz">
        <a href="#">
            Заказать звонок
        </a>
    </span>
    </div>
</div>


<div class="menu">
    <a href="tel:88003331111" class="phone">8 (800) 333-11-11</a>
    <div class="icon-close">
        Х
    </div>
    <ul>
        <li><a href="/">Главная</a></li>
        <li><a href="/obuchenie/">Онлайн обучение</a></li>
        <li><a href="/master-klassy/">Живые мастер-классы</a></li>
        <li><a href="/magazin/">Магазин</a></li>
        <li><a href="/sotrudnichestvo/">Сотрудничество</a></li>
        <li><a href="/gallery">Галерея</a></li>
        <li><a href="/blog">Блог</a></li>
    </ul>
</div>

<!-- Main body -->
<div class="background">

    <div class="icon-menu">
        <i class="fa fa-bars" aria-hidden="true"></i>

    </div>
</div>