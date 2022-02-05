@extends('layouts.appru')
@section('title', 'ИВ БУД - промышленные и декоративные наливные покрытия - Полы ИВ БУД')
@section('meta', 'Промышленные полы✔ Декоративные наливные покрытия✔ Уникальные кварцевые ришення✔ Ремонт бетона и стяжки - ИВ БУД, лидер отрасли полимерных покрытий.')
@section('keywords', 'Полимерный микроцемент | ИВ БУД')
@section('breadcrumbs')
@endsection
@section('content')
    <style>
        .bg {
            animation:slide 6s ease-in-out infinite alternate;
            background-image: linear-gradient(-60deg, #020202 50%, #f8f6f6 50%);
            bottom:0;
            left:-50%;
            opacity:.1;
            position:fixed;
            right:-50%;
            top:0;
            z-index:-1;
        }

        .bg2 {
            background-image: linear-gradient(-60deg, #545353 50%, #353434 50%);
            animation-direction:alternate-reverse;
            animation-duration:7s;
        }

        .bg3 {
            animation-duration:8s;
        }

        @keyframes slide {
            0% {
                transform:translateX(-25%);
            }
            100% {
                transform:translateX(25%);
            }
        }
    </style>
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

        <div class="flexslider slider white" data-options="animation:fade,controlNav:false,slideshowSpeed:4000">
            <ul class="slides">
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
                <div class="col-md-6">
                    <h1 class="text-uppercase"  style="">Создание<br />бесшовных<br />покрытий<br />Любой<br />Сложности</h1>
                </div>
                <div class="col-md-2 pull-right text-right">
                    <hr class="space space-250" />
                    <a href="{{route('page','contact')}}" class="btn btn-sm btn-yellow nav-justified">Контакты</a>
                </div>
                <div class="col-md-2 pull-right text-right">
                    <hr class="space space-250" />
                    <a href="{{route('page','history')}}" class="btn btn-sm btn-border  nav-justified">О НАС</a>
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
                            <h5>ПРОМЫШЛЕННОСТЬ</h5>
                            <p>
                                Подбор покрытий для пищевой промышленности.
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="advs-box advs-box-top-icon boxed-inverse" data-href="">
                            <i class="im-thread icon circle"></i>
                            <h5>СКЛАДСКИЕ ПОМЕЩЕНИЯ</h5>
                            <p>
                                Покрытие для складских помещений и закрытых ангаров.
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="advs-box advs-box-top-icon boxed-inverse" data-href="">
                            <i class="im-ambulance icon circle"></i>
                            <h5>МЕДИЦИНА</h5>
                            <p>
                                Покрытие с антибактериальным свойством.
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="advs-box advs-box-top-icon boxed-inverse" data-href="">
                            <i class="im-cake icon circle"></i>
                            <h5>
                                ЗАВЕДЕНИЯ</h5>
                            <p>
                                Декоративные покрытия для частного сектора.
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="advs-box advs-box-top-icon boxed-inverse" data-href="">
                            <i class="im-repair icon circle"></i>
                            <h5>АВТОИНДУСТРИЯ </h5>
                            <p>
                                Покрытие для сервисного обслуживания автомобилей.
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="advs-box advs-box-top-icon boxed-inverse" data-href="">
                            <i class="im-office-lamp icon circle"></i>
                            <h5>ЧАСТНЫЙ СЕКТОР</h5>
                            <p>
                                Декоративные покрытия для частного сектора.
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
                        <h2>КАЛЬКУЛЯТОР СТОИМОСТИ.</h2>
                        <p>
                            Мы разработали алгоритм, который позволит удобно и доступно каждому, просчитать покрытие для планирования вашего бюджета. Получить коммерческое предложение стало гораздо проще.
                        </p>
                        <a href="#" class="btn btn-sm">Выбрать покрытие</a>
                    </td>
{{--                    <td>--}}
{{--                        <hr class="space visible-sm" />--}}
{{--                        <h2>ФРАНШИЗА.</h2>--}}
{{--                        <p>--}}
{{--                            Информация о том, как открыть собственный бизнес, мы поможем развить направление бесшовных покрытий и стать одним из лидеров в вашем регионе.--}}
{{--                        </p>--}}
{{--                        <a href="#" class="btn btn-sm">Узнать больше</a>--}}
{{--                    </td>--}}
                    <td>
                        <hr class="space visible-sm" />
                        <h2>О НАС.</h2>
                        <p>
                            Наша команда состоит из профессиональных мастеров, которые знают свою работу. Наш опыт базируется на основе многих лет обучения и совершенствования ....

                        </p>
                        <a href="{{route('page','history')}}" class="btn-text"><i class="im-engineering  "></i>Читать больше</a>
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
                    <h2 class="text-uppercase">все о бесшовних покрытиях пола</h2>
                    <h3 class="text-uppercase">ТРЕНДЫ / НОВИНКИ / ПРЕИМУЩЕСТВА
                    </h3>
                    <hr class="space l" />
                    <a href="https://www.youtube.com/watch?v=JWaHfJKG4eg" data-lightbox-anima="fade-right" class="btn btn-play lightbox mfp-iframe">Посмотреть видео <i></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="section-empty">
        <div class="container content">
            <h2 class="text-center text-left-xs">
                Выберите покрытие именно для ваших потребностей, которое прослужит вам на совесть. </h2>
            <hr class="space" />
            <hr class="space" />
            <div class="row">
                <div class="col-md-4">
                    <h2>Реализуй проект<br />вместе с нами!</h2>
                </div>
                <div class="col-md-8">
                    <p>
                        Все покрытия являются уникальными решениями для определенных задач, главное, правильный подбор, под эксплуатационные требования проекта, только так можно получить 100% отдачу вложенных средств.
                    </p>
                </div>
            </div>
            <hr class="space" />
            <div class="tab-box left" data-tab-anima="fade-in">
                <ul class="nav nav-tabs col-md-4">
                    <li><a>Промышленность</a></li>
                    <li><a>Частный сектор</a></li>
                    <li><a>Коммерция</a></li>
                    <li class="active"><a>Медицина</a></li>
                </ul>
                <div class="panel-box col-md-8">
                    <div class="panel">
                        <a class="img-box i-center lightbox mfp-iframe row-9 thumbnail" data-lightbox-anima="fade-top" href="https://www.youtube.com/watch?v=qyMdLycry64">
                            <i class="im-play"></i>
                            <span><img src="../prodgect/pr-2.png" alt="покрытия для промышленности / промышленные полы / полы для заводов"></span>
                        </a>
                    </div>
                    <div class="panel ">
                        <a class="img-box i-center lightbox mfp-iframe row-9 thumbnail" data-lightbox-anima="fade-top" href="https://www.youtube.com/watch?v=CEwM5O1bsz8">
                            <i class="im-play"></i>
                            <span><img src="../prodgect/pr-7.png" alt="покрытия в дом / ванну / кухню / квартиру"></span>
                        </a>
                    </div>
                    <div class="panel">
                        <a class="img-box i-center lightbox mfp-iframe row-9 thumbnail" data-lightbox-anima="fade-top" href="https://www.youtube.com/watch?v=26PRbMRD1S0">
                            <i class="im-play"></i>
                            <span><img src="../prodgect/pr-5.png" alt="покрытие для кафе / ресторанов / пиццерий"></span>
                        </a>
                    </div>
                    <div class="panel active">
                        <a class="img-box i-center lightbox mfp-iframe row-9 thumbnail" data-lightbox-anima="fade-top" href="https://www.youtube.com/watch?v=oxnlK3xYODY">
                            <i class="im-play"></i>
                            <span><img src="../prodgect/pr-4.png" alt="покрытия для медецини"></span>
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
                        <img src="../images/hd-23.png" alt="Микроцементы, кварцевые и наливные полы.">
                    </a>
                </div>
                <div class="col-md-6">
                    <hr class="space visible-sm" /><hr class="space visible-sm" />
                    <h2>
                        Приходите!<br /></h2>
                    <p>
                        Посетите наш showroom, и ознакомьтесь с уникальными решениями для пола, <span style="font-weight:bold;">микроцемент</span>, <span style="font-weight:bold;">наливной пол</span>, <span style="font-weight:bold;">кварцевые покрытия</span>, а также множество решений для стен и мебельных фасадов. Наши менеджеры готовы обсудить ваши идеи за чашечкой кофе.
                        <br>
                        Кроме <span style="font-weight:bold;">декоративных напольных покрытий</span>, компания ИВ БУД занимается и промышленными полами. <span style="font-weight:bold;">Промышленные полы </span>, для пищевой промышленности, дадут возможность, вашему предприятию, соответствовать европейским стандартам.
                    </p>
                    <hr class="space m" />
                </div>
            </div>
        </div>
    </div>
    <div class="section-empty">
        <div class="container content">
            <h2 class="pull-left">РЕАЛИЗОВАННЫЕ ПРОЕКТЫ</h2>
            <hr class="space visible-sm" />
            <div class="maso-list">
                <div class="navbar navbar-inner text-right">
                    <div class="navbar-toggle"><i class="fa fa-bars"></i><span>Menu</span><i class="fa fa-angle-down"></i></div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav over inner maso-filters">
                            <li class="current-active active"><a data-filter="maso-item">ВСЕ</a></li>
                            <li><a data-filter="cat1">Коммерческие объекты</a></li>
                            <li><a data-filter="cat2" href="#">Частные объекты</a></li>
                            <li><a class="maso-order" data-sort="asc"><i class="fa fa-arrow-down"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="maso-box row">
                    <div data-sort="2" class="maso-item col-md-3 cat1">
                        <div class="advs-box advs-box-top-icon-img boxed-inverse" data-href="">
                            <a class="img-box lightbox img-scale-up" href="#">
                                <span><img src="../prodgect/pr-2.png" alt="кварцевое покрытие"></span>
                            </a>
                            <div class="advs-box-content">
                                <h3>
                                    Промышленный кварц</h3>
                                <p>
                                    Производство масла ЧП "Олияр", город Львов.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div data-sort="2" class="maso-item col-md-3 cat2">
                        <div class="advs-box advs-box-top-icon-img boxed-inverse" data-href="">
                            <a class="img-box lightbox img-scale-up" href="#">
                                <span><img src="../prodgect/pr-1.png" alt="микроцемент Львов"></span>
                            </a>
                            <div class="advs-box-content">
                                <h3>Полимерный микроцемент</h3>
                                <p>
                                    Квартира в скандинавском стиле, город Львов.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div data-sort="2" class="maso-item col-md-3 cat1">
                        <div class="advs-box advs-box-top-icon-img boxed-inverse" data-href="">
                            <a class="img-box lightbox img-scale-up" href="#">
                                <span><img src="../prodgect/pr-6.png" alt="Промышленный кварц"></span>
                            </a>
                            <div class="advs-box-content">
                                <h3>Промышленный кварц</h3>
                                <p>
                                    Офисное помещение "Галицкая свежина", город Львов.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div data-sort="2" class="maso-item col-md-3 cat2">
                        <div class="advs-box advs-box-top-icon-img boxed-inverse" data-href="">
                            <a class="img-box lightbox img-scale-up" href="#">
                                <span><img src="../prodgect/pr-7.png" alt="Декоративный кварц"></span>
                            </a>
                            <div class="advs-box-content">
                                <h3>Декоративный кварц</h3>
                                <p>
                                    Современный дом, город Ужгород.
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
                                <h3>Полимерный микроцемент</h3>
                                <p>
                                    Квартира в скандинавском стиле, город Львов.
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
                        <a href="{{route('page','projects')}}"  class="btn btn-sm center">Все проекты</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-bg-image parallax-window white" data-natural-height="1080" data-natural-width="1920" data-parallax="scroll" data-image-src="../images/hd-22.png">
        <div class="container content">
            <div class="row">
                <div class="col-md-8 col-center text-center">
                    <h4 class="text-color">Создадим проект вместе!</h4>
                    <h1 class="text-uppercase">Мы всегда рады помочь и воплотить в жизнь Ваши идеи!</h1>
                    <hr class="space s" />
                    <a href="{{route('page','contact')}}" class="btn-text text-color">Связаться с нами</a>
                </div>
            </div>
        </div>
    </div>
    <div class="section-empty bg-white">
        <div class="container content">
            <div class="row">
                <div class="col-md-5">
                    <h2>ОТПРАВИТЬ СООБЩЕНИЕ</h2>
                    <hr class="space m" />
                    <form method="POST" action="{{ route('massages.create') }}"  enctype="multipart/form-data" >
                        @csrf
                        <input id="name" name="name" placeholder="Ваше имя" type="text" class="form-control form-value" required>
                        <hr class="space s" />
                        <div class="row">
                            <div class="col-md-6">
                                <input id="phone" name="phone" placeholder="Телефон" type="text" class="form-control form-value">
                            </div>
                            <div class="col-md-6">
                                <input id="email" name="email" placeholder="Eмейл" type="email" class="form-control form-value" required>
                            </div>
                        </div>
                        <hr class="space s" />
                        <textarea id="messagge" name="messagge" placeholder="
Ваше сообщение" class="form-control form-value" required></textarea>
                        <hr class="space m" />
                        <button class="btn-sm btn" type="submit">Отправить сообщение</button>
                    </form>
                </div>
                <div class="col-md-7">
                    <div class="section-empty bg-white">
                        <div class="container content">
                            <div class="row">
                                <div class="col-md-2">
                                    <ul class="fa-ul text-s ul-dots" data-anima="fade-right" data-timeline="asc" data-timeline-time="300">
                                        <li class="anima">Ивано-Франковск</li>
                                        <li class="anima">Волынь</li>
                                        <li class="anima">Житомир</li>
                                        <li class="anima">Кировоград</li>
                                        <li class="anima">Одесса</li>
                                        <li class="anima">Суммы</li>
                                        <li class="anima">Херсон</li>
                                        <li class="anima">Черновцы</li>
                                        <li class="anima">Днепропетровск</li>
                                        <li class="anima">Закарпатье</li>
                                        <li class="anima">Ровно</li>
                                        <li class="anima">Харьков</li>
                                    </ul>
                                </div>
                                <div class="col-md-2">
                                    <ul class="fa-ul text-s ul-dots" data-anima="fade-right" data-timeline="asc" data-timeline-time="300">
                                        <li class="anima">Киев</li>
                                        <li class="anima">Львов</li>
                                        <li class="anima">Полтава</li>
                                        <li class="anima">Тернополь</li>
                                        <li class="anima">Хмельницкий</li>
                                        <li class="anima">Чернигов</li>
                                        <li class="anima">Винница</li>
                                        <li class="anima">Донецк</li>
                                        <li class="anima">Запорожье</li>
                                        <li class="anima">Буковель</li>
                                        <li class="anima">Николаев</li>
                                        <li class="anima">Черкассы</li>
                                    </ul>
                                </div>
                                <div class="col-md-3 col-sm-12">
                                    <hr class="space visible-sm" />
                                    <h4>Представительства</h4>
                                    <p>
                                        Смотрите в каких регионах доступны услуги от компании ИВ БУД.
                                    </p>
                                    <a href="#" class="btn btn-sm">
                                        Контакты</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
