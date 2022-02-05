@extends('layouts.app')
@section('title', 'ІВ БУД - промислові та декоративні наливні покриття - Підлоги Ів буд')
@section('meta', 'Промислові покриття✔ Декоративні наливні підлоги✔ Унікальні кварцові рішення✔ Ремонт бетону та стяжки - Ів Буд, лідер галузі полімерних покриттів.')
@section('keywords', 'Полімерний мікроцемент | ІВ БУД')
@section('breadcrumbs')
@endsection
@section('content')
    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                xfbml            : true,
                version          : 'v10.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/ru_RU/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

    <!-- Your Chat Plugin code -->
    <div class="fb-customerchat"
         attribution="setup_tool"
         page_id="338430583383137"
         theme_color="#ffc300"
         logged_in_greeting="Привіт! Чим я можу вам допомогти?"
         logged_out_greeting="Привіт! Чим я можу вам допомогти?">
    </div>
    <div class="section-slider">
        <style>
            .bg-cover:before {
                content: '';
                position: absolute;
                display: block;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background: linear-gradient(
                    87deg, rgb(219 158 23 / 48%) 0%, rgba(0,0,0,0) 100%);
                z-index: 1;
            }
        </style>
        <div class="flexslider slider white" data-options="animation:fade,controlNav:false,slideshowSpeed:4000">
            <ul class="slides" >
                <li>
                    <div class="bg-cover" style="background-image:url('../images/hd-15.png')"></div>
                </li>
                <li>
                    <div class="bg-cover" style="background-image:url('../images/hd-20.png')"></div>
                </li>
                <li>
                    <div class="bg-cover" style="background-image:url('../images/hd-16.png')"></div>
                </li>
                <li>
                    <div class="bg-cover" style="background-image:url('../images/hd-17.png')"></div>
                </li>
                <li>
                    <div class="bg-cover" style="background-image:url('../images/hd-18.png')"></div>
                </li>
                <li>
                    <div class="bg-cover" style="background-image:url('../images/hd-19.png')"></div>
                </li>
            </ul>
        </div>
        <div class="container content overlay-content white">
            <div class="bg"></div>
            <div class="bg bg2"></div>
            <div class="bg bg3"></div>
            <div class="row">
                <div class="col-md-7">
                    <h1 class="text-uppercase"  style="margin-top: 20%;">Створення безшовних<br />покриттів Будь-якої<br />Складності</h1>
                </div>
                <div class="col-md-2 pull-right text-right">
                    <hr class="space space-250" />
                    <a href="{{route('page','contact')}}" class="btn btn-sm btn-yellow nav-justified">Контакти</a>
                </div>
                <div class="col-md-2 pull-right text-right">
                    <hr class="space space-250" />
                    <a href="{{route('page','history')}}" class="btn btn-sm btn-border  nav-justified">Про нас</a>
                </div>
            </div>
        </div>
    </div>
    <div class="section-empty">
        <div class="container content">
            <div class="flexslider carousel outer-navs" data-options="minWidth:200,itemMargin:30,numItems:4,controlNav:true,directionNav:true">
                <ul class="slides">
                    <li>
                        <div class="advs-box advs-box-top-icon boxed-inverse" data-href="">
                            <i class="im-crane icon circle"></i>
                            <h5>ПРОМИСЛОВІСТЬ</h5>
                            <p>
                                Підбір покриттів для харчової промисловості.
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="advs-box advs-box-top-icon boxed-inverse" data-href="">
                            <i class="im-thread icon circle"></i>
                            <h5>СКЛАДСЬКІ ПРИМІЩЕННЯ</h5>
                            <p>
                                Покриття для складських приміщень та закритих ангарів.
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="advs-box advs-box-top-icon boxed-inverse" data-href="">
                            <i class="im-ambulance icon circle"></i>
                            <h5>МЕДИЦИНА</h5>
                            <p>
                                Покриття з антибактеріальними властивостями.
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="advs-box advs-box-top-icon boxed-inverse" data-href="">
                            <i class="im-cake icon circle"></i>
                            <h5>ЗАКЛАДИ</h5>
                            <p>
                                Декоративні покриття для приватного сектору.
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="advs-box advs-box-top-icon boxed-inverse" data-href="">
                            <i class="im-repair icon circle"></i>
                            <h5>АВТОІНДУСТРІЯ</h5>
                            <p>
                                Покриття для сервісного обслуговування автомобілів.
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="advs-box advs-box-top-icon boxed-inverse" data-href="">
                            <i class="im-office-lamp icon circle"></i>
                            <h5>ПРИВАТНИЙ СЕКТОР</h5>
                            <p>
                                Декоративні покриття для приватного сектору.
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
            <hr />
            <table class="grid-table border-table grid-table-xs-12 text-left">
                <tbody>
                <tr>
                    <td>
                        <h2>КАЛЬКУЛЯТОР ВАРТОСТІ.</h2>
                        <p>
                            Ми розробили алгоритм, який дозволить зручно, та доступно кожному, прорахувати покриття для планування вашого бюджету. Отримати комерційну пропозицію стало набагато зручніше.
                        </p>
                        <a href="#" class="btn btn-sm">Обрати покриття</a>
                    </td>
{{--                    <td>--}}
{{--                        <hr class="space visible-sm" />--}}
{{--                        <h2>ФРАНШИЗА.</h2>--}}
{{--                        <p>--}}
{{--                            Інформація про те, як відкрити власний бізнес, ми допоможемо розвинути напрямок безшовних покриттів і стати одним із лідерів у вашому регіоні.--}}
{{--                        </p>--}}
{{--                        <a href="#" class="btn btn-sm">Дізнатись більше</a>--}}
{{--                    </td>--}}
                    <td>
                        <hr class="space visible-sm" />
                        <h2>ЧОМУ САМЕ МИ?.</h2>
                        <p>
                            Наша команда складається з професійних майстрів, які знають свою роботу. Наш досвід базується на основі багатьох років навчання та вдосконалення....
                        </p>
                        <a href="{{route('page','history')}}" class="btn-text"><i class="im-engineering  "></i>Читати більше</a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="section-bg-image parallax-window white" data-natural-height="1080" data-natural-width="1920" data-parallax="scroll" data-image-src="../images/hd-82.png">
        <div class="container content">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="text-uppercase">ВСЕ ПРО БЕЗШОВНІ ПОКРИТТЯ</h2>
                    <h3 class="text-uppercase">тренди / новинки / переваги</h3>
                    <hr class="space l" />
                    <a href="https://www.youtube.com/watch?v=JWaHfJKG4eg" data-lightbox-anima="fade-right" class="btn btn-play lightbox mfp-iframe">Переглянути відео <i></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="section-empty">
        <div class="container content">
            <h2 class="text-center text-left-xs">Оберіть покриття саме для ваших потреб, яке прослужить вам на совість. </h2>
            <hr class="space" />
            <hr class="space" />
            <div class="row">
                <div class="col-md-4">
                    <h2>Реалізуй проект<br />разом з нами!</h2>
                </div>
                <div class="col-md-8">
                    <p>
                        Всі покриття є унікальними рішеннями для певних завдань, основне, правильний підбір покриття під експлуатаційні вимоги проекту, тільки так можна отримати 100% віддачу вкладених коштів.
                    </p>
                </div>
            </div>
            <hr class="space" />
            <div class="tab-box left" data-tab-anima="fade-in">
                <ul class="nav nav-tabs col-md-4">
                    <li><a>Промисловість</a></li>
                    <li><a>Приватний сектор</a></li>
                    <li><a>Комерція</a></li>
                    <li class="active"><a>Медицина</a></li>
                </ul>
                <div class="panel-box col-md-8">
                    <div class="panel">
                        <a class="img-box i-center lightbox mfp-iframe row-9 thumbnail" data-lightbox-anima="fade-top" href="https://www.youtube.com/watch?v=qyMdLycry64">
                            <i class="im-play"></i>
                            <span><img src="../prodgect/pr-2.png" alt="покриття для промисловості / промислові підлоги / підлоги для заводів"></span>
                        </a>
                    </div>
                    <div class="panel ">
                        <a class="img-box i-center lightbox mfp-iframe row-9 thumbnail" data-lightbox-anima="fade-top" href="https://www.youtube.com/watch?v=CEwM5O1bsz8">
                            <i class="im-play"></i>
                            <span><img src="../prodgect/pr-7.png" alt="покриття в будинок / ванну / кухню / квартиру"></span>
                        </a>
                    </div>
                    <div class="panel">
                        <a class="img-box i-center lightbox mfp-iframe row-9 thumbnail" data-lightbox-anima="fade-top" href="https://www.youtube.com/watch?v=26PRbMRD1S0">
                            <i class="im-play"></i>
                            <span><img src="../prodgect/pr-5.png" alt="покриття для кафе / ресторанів / піцерій"></span>
                        </a>
                    </div>
                    <div class="panel active">
                        <a class="img-box i-center lightbox mfp-iframe row-9 thumbnail" data-lightbox-anima="fade-top" href="https://www.youtube.com/watch?v=oxnlK3xYODY">
                            <i class="im-play"></i>
                            <span><img src="../prodgect/pr-4.png" alt="покриття для медецини"></span>
                        </a>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <div class="section-empty bg-white">
        <div class="container content">
            <div class="row vertical-row">
                <div class="col-md-6">
                    <a class="img-box i-center png-over" href="#">
                        <i class="im-record-music"></i>
                        <img src="../images/hd-23.png" alt="Мікроцементи, кварцові та наливні покриття.">
                    </a>
                </div>
                <div class="col-md-6">
                    <hr class="space visible-sm" /><hr class="space visible-sm" />
                    <h2>Завітайте до нас!<br /></h2>
                    <p>
                        Завітайте в наш showroom, та ознайомтесь з унікальними рішеннями для підлоги, <span style="font-weight:bold;">мікроцемент</span>, <span style="font-weight:bold;">наливна підлога</span>, <span style="font-weight:bold;">кварцові покриття</span>, а також безліч рішень для стін та меблевих фасадів. Наші менеджери готові обговорити ваші ідеї за чашечкою кави.
                        <br>
                        Окрім <span style="font-weight:bold;">декоративних підлогових покриттів</span>, компанія ІВ БУД займається і промисловими підлогами. <span style="font-weight:bold;">Промислові підлоги </span>, для харчової промисловісті, дадуть можливість, вашому підприємству, відповідати європейським стандартам.
                    </p>
                    <hr class="space m" />
                </div>
            </div>
        </div>
    </div>
    <div class="section-empty">
        <div class="container content">
            <h2 class="pull-left">РЕАЛІЗОВАНІ ПРОЕКТИ</h2>
            <hr class="space visible-sm" />
            <div class="maso-list">
                <div class="navbar navbar-inner text-right">
                    <div class="navbar-toggle"><i class="fa fa-bars"></i><span>Menu</span><i class="fa fa-angle-down"></i></div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav over inner maso-filters">
                            <li class="current-active active"><a data-filter="maso-item">ВСІ</a></li>
                            <li><a data-filter="cat1">Комерційні об'єкти</a></li>
                            <li><a data-filter="cat2" href="#">Приватні об'єкти</a></li>
                            <li><a class="maso-order" data-sort="asc"><i class="fa fa-arrow-down"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="maso-box row">
                    <div data-sort="2" class="maso-item col-md-3 cat1">
                        <div class="advs-box advs-box-top-icon-img boxed-inverse" data-href="">
                            <a class="img-box lightbox img-scale-up" href="#">
                                <span><img src="../prodgect/pr-2.png" alt="Кварцове покриття"></span>
                            </a>
                            <div class="advs-box-content">
                                <h3>Промисловий кварц</h3>
                                <p>
                                    Виробництво олії ПП "Оліяр", місто Львів.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div data-sort="2" class="maso-item col-md-3 cat2">
                        <div class="advs-box advs-box-top-icon-img boxed-inverse" data-href="">
                            <a class="img-box lightbox img-scale-up" href="#">
                                <span><img src="../prodgect/pr-1.png" alt="мікроцемент Львів"></span>
                            </a>
                            <div class="advs-box-content">
                                <h3>Полімерний мікроцемент</h3>
                                <p>
                                    Квартира в скандинавському стилі, місто Львів.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div data-sort="2" class="maso-item col-md-3 cat1">
                        <div class="advs-box advs-box-top-icon-img boxed-inverse" data-href="">
                            <a class="img-box lightbox img-scale-up" href="#">
                                <span><img src="../prodgect/pr-6.png" alt="Промисловий кварц"></span>
                            </a>
                            <div class="advs-box-content">
                                <h3>Промисловий кварц</h3>
                                <p>
                                    Офісне приміщення "Галицька свіжина", місто Львів.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div data-sort="2" class="maso-item col-md-3 cat2">
                        <div class="advs-box advs-box-top-icon-img boxed-inverse" data-href="">
                            <a class="img-box lightbox img-scale-up" href="#">
                                <span><img src="../prodgect/pr-7.png" alt="Декоративний кварц"></span>
                            </a>
                            <div class="advs-box-content">
                                <h3>Декоративний кварц</h3>
                                <p>
                                    Сучасний будинок, місто Ужгород.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div data-sort="2" class="maso-item col-md-3 cat2">
                        <div class="advs-box advs-box-top-icon-img boxed-inverse" data-href="">
                            <a class="img-box lightbox img-scale-up" href="#">
                                <span><img src="../prodgect/pr-8.png" alt=""></span>
                            </a>
                            <div class="advs-box-content">
                                <h3>Полімерний мікроцемент</h3>
                                <p>
                                    Квартира в скандинавському стилі, місто Львів.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div data-sort="2" class="maso-item col-md-3 cat2">
                        <div class="advs-box advs-box-top-icon-img boxed-inverse" data-href="">
                            <a class="img-box lightbox img-scale-up" href="#">
                                <span><img src="../prodgect/pr-3.png" alt=""></span>
                            </a>
                            <div class="advs-box-content">
                                <h3>Епоксидна підлога</h3>
                                <p>
                                    Епоксидне тонкошарове покриття, місто Львів.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div data-sort="2" class="maso-item col-md-3 cat1">
                        <div class="advs-box advs-box-top-icon-img boxed-inverse" data-href="">
                            <a class="img-box lightbox img-scale-up" href="#">
                                <span><img src="../prodgect/pr-10.png" alt=""></span>
                            </a>
                            <div class="advs-box-content">
                                <h3>Промисловий окрас</h3>
                                <p>
                                    Підприємство, місто Івано-Франківськ.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div data-sort="2" class="maso-item col-md-3 cat1">
                        <div class="advs-box advs-box-top-icon-img boxed-inverse" data-href="">
                            <a class="img-box lightbox img-scale-up" href="#">
                                <span><img src="../prodgect/pr-15.png" alt=""></span>
                            </a>
                            <div class="advs-box-content">
                                <h3>Промисловий окрас</h3>
                                <p>
                                    Епіцентер садовий двір, місто Чернівці.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
                <div data-sort="2" class="maso-item" style="position: absolute; left: 0;">
                    <div class="advs-box " data-href="">
                        <a href="{{route('page','projects')}}"  class="btn btn-sm center">Всі проекти</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-bg-image parallax-window white" data-natural-height="1080" data-natural-width="1920" data-parallax="scroll" data-image-src="../images/hd-22.png">
        <div class="container content">
            <div class="row">
                <div class="col-md-8 col-center text-center">
                    <h4 class="text-color">Створимо проект разом!</h4>
                    <h1 class="text-uppercase">ми завжди раді допомогти та втілити у життя Ваші ідеї!</h1>
                    <hr class="space s" />
                    <a href="{{route('page','contact')}}" class="btn-text text-color">Зв'язатись з нами</a>
                </div>
            </div>
        </div>
    </div>
    <div class="section-empty bg-white">
        <div class="container content">
            <div class="row">
                <div class="col-md-5">
                    <h2>Надіслати  повідомлення</h2>
                    <hr class="space m" />
                    <form method="POST" action="{{ route('massages.create') }}"  enctype="multipart/form-data" >
                        @csrf
                        <input id="name" name="name" placeholder="Ваше ім'я" type="text" class="form-control form-value" required>
                        <hr class="space s" />
                        <div class="row">
                            <div class="col-md-6">
                                <input id="phone" name="phone" placeholder="Телефон" type="text" class="form-control form-value">
                            </div>
                            <div class="col-md-6">
                                <input id="email" name="email" placeholder="Емейл" type="email" class="form-control form-value" required>
                            </div>
                        </div>
                        <hr class="space s" />
                        <textarea id="massages" name="massages" placeholder="Ваше повідомлення" class="form-control form-value" required></textarea>
                        <hr class="space m" />
                        <button class="btn-sm btn" type="submit">Надіслати повідомлення</button>
                    </form>
                </div>
                <div class="col-md-7">
                    <div class="section-empty bg-white">
                        <div class="container content">
                            <div class="row">
                                <div class="col-md-2">
                                    <ul class="fa-ul text-s ul-dots" data-anima="fade-right" data-timeline="asc" data-timeline-time="300">
                                        <li class="anima">Івано-Франківськ</li>
                                        <li class="anima">Волинь</li>
                                        <li class="anima">Житомир</li>
                                        <li class="anima">Кіровоград</li>
                                        <li class="anima">Одеса</li>
                                        <li class="anima">Суми</li>
                                        <li class="anima">Херсон</li>
                                        <li class="anima">Чернівці</li>
                                        <li class="anima">Дніпропетровськ</li>
                                        <li class="anima">Закарпаття</li>
                                        <li class="anima">Рівне</li>
                                        <li class="anima">Харків</li>
                                    </ul>
                                </div>
                                <div class="col-md-2">
                                    <ul class="fa-ul text-s ul-dots" data-anima="fade-right" data-timeline="asc" data-timeline-time="300">
                                        <li class="anima">Київ</li>
                                        <li class="anima">Львів</li>
                                        <li class="anima">Полтава</li>
                                        <li class="anima">Тернопіль</li>
                                        <li class="anima">Хмельницький</li>
                                        <li class="anima">Чернігів</li>
                                        <li class="anima">Вінниця</li>
                                        <li class="anima">Донецьк</li>
                                        <li class="anima">Запоріжжя</li>
                                        <li class="anima">Буковель</li>
                                        <li class="anima">Миколаїв</li>
                                        <li class="anima">Черкаси</li>
                                    </ul>
                                </div>
                                <div class="col-md-3 col-sm-12">
                                    <hr class="space visible-sm" />
                                    <h4>Представництва</h4>
                                    <p>
                                        Перегляньте в яких регіонах доступні послуги від компанії ІВ БУД.
                                    </p>
                                    <a href="#" class="btn btn-sm">Контакти</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
