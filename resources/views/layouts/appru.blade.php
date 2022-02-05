<!DOCTYPE html>
<!--[if lt IE 10]> <html  lang="en" class="iex"> <![endif]-->
<!--[if (gt IE 10)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('meta')">
    <meta name="keywords" content="@yield('keywords')" />
    <link rel="stylesheet" href="{{ asset('HTWF/scripts/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('HTWF/style.css') }}">
    <link rel="stylesheet" href="{{ asset('HTWF/css/content-box.css') }}">
    <link rel="stylesheet" href="{{ asset('HTWF/scripts/flexslider/flexslider.css') }}">
    <link rel="stylesheet" href="{{ asset('HTWF/scripts/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('HTWF/css/animations.css') }}">
    <link rel="stylesheet" href="{{ asset('HTWF/css/components.css') }}">
    <link rel="stylesheet" href="{{ asset('HTWF/scripts/php/contact-form.css') }}">
    <link rel="icon" href="{{ asset('/images/logo_fa.png') }}">
    <link rel="stylesheet" href="{{ asset('skin.css') }}">
</head>
<body>
<style>
    .active {
        color: #F5BF23!important;
    }
</style>
<div id="preloader"></div>
<header class="fixed-top scroll-change" data-menu-height="139" data-menu-anima="fade-in">
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="navbar-mini scroll-hide">
            <div class="container">
                <div class="nav navbar-nav navbar-left">
                    <span>(096) 456 3614</span>
                    <hr />
                    <span>ivbudzahid@gmail.com</span>
                    <hr />
                    <span>Пон - Суб 9:00 - 18:00</span>
                </div>
                <div class="nav navbar-nav navbar-right">
                    <div class="btn-group navbar-social">
                        <div class="btn-group social-group">
                            <a target="_blank" href="https://www.facebook.com/ivbudfloor"><i class="fa fa-facebook"></i></a>

                            <a target="_blank" href="https://www.instagram.com/ivbudfloor/"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar-main navbar-middle">
            <div class="container">
                <div class="scroll-hide">
                    <div class="container">
                        <a class="navbar-brand center" href="{{route('home')}}">
                            <img class="logo-default" src="../../../images/logo.png" alt="logo" />
                            <img class="logo-retina" src="../../../images/logo-retina.png" alt="logo" />
                        </a>
                    </div>
                </div>
                <div class="navbar-header">
                    <a class="navbar-brand" href="../../index.html">
                        <img class="logo-default" src="../../../images/logo.png" alt="logo" />
                        <img class="logo-retina" src="../../../images/logo-retina.png" alt="logo" />
                    </a>
                    <button type="button" class="navbar-toggle">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="dropdown" >
                            <a href="#" class="dropdown-toggle des" data-toggle="dropdown" style="" role="button">Подбор покрытия <span class="caret"></span></a>
                            <ul class="dropdown-menu multi-level">
                                {{--                                <li class="dropdown dropdown-submenu">--}}
                                {{--                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">За брендом</a>--}}
                                {{--                                    <ul class="dropdown-menu">--}}
                                {{--                                        <li><a href="#">Системи від IV BUD</a></li>--}}
                                {{--                                        <li><a href="#">Системи від Mapei</a></li>--}}
                                {{--                                        <li><a href="#">Системи від Sika</a></li>--}}
                                {{--                                        <li><a href="#">Системи від STO</a></li>--}}
                                {{--                                        <li><a href="#">Системи від Remmers</a></li>--}}
                                {{--                                    </ul>--}}
                                {{--                                </li>--}}
                                {{--                                <li class="dropdown dropdown-submenu">--}}
                                {{--                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">За типом покриття</a>--}}
                                {{--                                    <ul class="dropdown-menu">--}}
                                {{--                                        <li><a href="#">Промислове обезпилення</a></li>--}}
                                {{--                                        <li><a href="#">Поліуританова підлога</a></li>--}}
                                {{--                                        <li><a href="#">Поліуритан-цемент</a></li>--}}
                                {{--                                        <li><a href="#">Промисловий кварц</a></li>--}}
                                {{--                                        <li><a href="#">Декоративний кварц</a></li>--}}
                                {{--                                        <li><a href="#">Епоксидний окрас</a></li>--}}
                                {{--                                        <li><a href="#">Наливна підлога</a></li>--}}
                                {{--                                        <li><a href="#">Мікроцемент ULTRATOP</a></li>--}}
                                {{--                                        <li><a href="#">Мікроцемент-поліуритан</a></li>--}}
                                {{--                                        <li><a href="#">Мікроцемент-епоксид</a></li>--}}
                                {{--                                        <li><a href="#">Терацо</a></li>--}}
                                {{--                                        <li><a href="#">Епоксидне терацо</a></li>--}}
                                {{--                                        <li><a href="#">Мікроцемент-терацо</a></li>--}}
                                {{--                                    </ul>--}}
                                {{--                                </li>--}}
                                {{--                                <li><a href="#">За параметрами</a></li>--}}
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="{{route('page','history')}}" class="dropdown-toggle" data-toggle="dropdown" role="button">О нас <span class="caret"></span></a>
                        </li>
                        <li class="dropdown">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button">
                                НАШИ УСЛУГИ <span class="caret"></span></a>
                            <ul class="dropdown-menu multi-level">
                                <li class="dropdown dropdown-submenu">
                                    <a href="{{route('page','promyslovi-pidlogy')}}" class="dropdown-toggle" data-toggle="dropdown">Промышленные ПОЛЫ</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{route('page','promislove-obezpilennya')}}">ПРОМЫШЛЕННОЕ ОБЕСПЫЛ.</a></li>
                                        <li><a href="{{route('page','promislove-kvarcove-pokrittya')}}">ПРОМЫШЛЕННЫЙ КВАРЦ</a></li>
                                        <li><a href="{{route('page','epoksidnij-okras')}}">ЭПОКСИДНЫЙ ОКРАС</a></li>
                                        <li><a href="{{route('page','poliuretanova-pidloga')}}">ПОЛИУРЕТАНОВЫЕ ПОЛЫ </a></li>
                                        <li><a href="{{route('page','nalivna-pidloga')}}">НАЛИВНОЙ ПОЛ</a></li>
                                        {{--                                        <li><a href="{{route('page','poliuretan-czement')}}">ПОЛІУРИТАН-ЦЕМЕНТ</a></li>--}}
                                    </ul>
                                </li>
                                <li class="dropdown dropdown-submenu">
                                    <a href="{{route('page','dekorativni-pokrittya')}}" class="dropdown-toggle" data-toggle="dropdown">декоративные ПОЛЫ</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{route('page','dekorativne-kvarcove-pokrittya')}}">ДЕКОРАТИВНЫЙ КВАРЦ</a></li>
                                        <li><a href="{{route('page','mikrocement')}}">МИКРОЦЕМЕНТ</a></li>
                                        <li><a href="{{route('page','polimernij-mikrocement')}}">полимерный МИКРОЦЕМЕНТ </a></li>
                                        <li><a href="{{route('page','nalivna-pidloga')}}">НАЛИВНОЙ ПОЛ</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown dropdown-submenu">
                                    <a href="{{route('page','pidloga-dlya-medychnyh-zakladiv')}}" class="dropdown-toggle" data-toggle="dropdown">Медицинские ПОЛЫ</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{route('page','poliuretanova-pidloga')}}">
                                                полиуретановые полы</a></li>
                                        <li><a href="{{route('page','promislove-kvarcove-pokrittya')}}">ПРОМЫШЛЕННЫЙ КВАРЦ</a></li>
                                        <li><a href="{{route('page','epoksidnij-okras')}}">ЭПОКСИДНЫЙ ОКРАС</a></li>
                                        <li><a href="{{route('page','nalivna-pidloga')}}">НАЛИВНОЙ ПОЛ</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown dropdown-submenu">
                                    <a href="{{route('page', 'remont-betonu-ta-betonnyh-pokryttiv')}}" class="dropdown-toggle" data-toggle="dropdown">Ремонт бетона и топпинга</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{route('page','remont-styazhki')}}">РЕМОНТ БЕТОННЫХ стяжек</a></li>
                                        <li><a href="{{route('page','remont-napivsukhikh-styazhok')}}">
                                                РЕМОНТ полусухих стяжек</a></li>
                                        <li><a href="{{route('page','shlifuvannya-betonu-v-stili-loft')}}">
                                                Шлифования бетона / LOFT</a></li>
                                        <li><a href="{{route('page','remont-betonu-ta-toppingu')}}">РЕМОНТ БЕТОНА / Топпинг</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="{{route('page','projects/')}}">Проекты</a></li>
                        {{--                        <li class="dropdown mega-dropdown mega-tabs">--}}
                        {{--                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Системи підлог <span class="caret"></span></a>--}}
                        {{--                            <div class="mega-menu dropdown-menu multi-level row bg-menu">--}}
                        {{--                                <div class="tab-box" data-tab-anima="fade-in">--}}
                        {{--                                    <ul class="nav nav-tabs">--}}
                        {{--                                        <li class="active"><a href="">ПРОМИСЛОВІСТЬ</a></li>--}}
                        {{--                                        <li><a href="">СКЛАДСЬКІ ПРИМІЩЕННЯ</a></li>--}}
                        {{--                                        <li><a href="">МЕДИЦИНА</a></li>--}}
                        {{--                                        <li><a href="">ЗАКЛАДИ</a></li>--}}
                        {{--                                        <li><a href="">АВТОІНДУСТРІЯ</a></li>--}}
                        {{--                                        <li><a href="">ПРИВАТНИЙ СЕКТОР</a></li>--}}
                        {{--                                    </ul>--}}
                        {{--                                    <div class="panel active">--}}
                        {{--                                        <div class="col">--}}
                        {{--                                            <ul class="fa-ul no-icons text-s">--}}
                        {{--                                                <li><a href="features/components/icons.html">Icons</a></li>--}}
                        {{--                                                <li><a href="features/components/counters-countdown.html">Counters</a></li>--}}
                        {{--                                                <li><a href="features/components/counters-countdown.html">Countdowns</a></li>--}}
                        {{--                                                <li><a href="features/components/progress-bars.html">Progress bars</a></li>--}}
                        {{--                                                <li><a href="features/components/progress-bars.html">Circle progress bars</a></li>--}}
                        {{--                                                <li><a href="features/components/timeline.html">Timeline</a></li>--}}
                        {{--                                                <li><a href="features/containers/section-slider.html">Section slider</a></li>--}}
                        {{--                                                <li><a href="features/components/php-contact-form.html">Contact form</a></li>--}}
                        {{--                                            </ul>--}}
                        {{--                                        </div>--}}
                        {{--                                        <div class="col">--}}
                        {{--                                            <ul class="fa-ul no-icons text-s">--}}
                        {{--                                                <li><a href="features/components/buttons.html">Buttons</a></li>--}}
                        {{--                                                <li><a href="features/components/image-boxes.html">Image boxes</a></li>--}}
                        {{--                                                <li><a href="features/components/image-boxes-advanced.html">Advanced image boxes</a></li>--}}
                        {{--                                                <li><a href="features/components/content-box.html">Content boxes</a></li>--}}
                        {{--                                                <li><a href="features/components/social-media.html">Social media</a></li>--}}
                        {{--                                                <li><a href="features/components/lists.html">Lists</a></li>--}}
                        {{--                                                <li><a href="features/components/maps.html">Google maps</a></li>--}}
                        {{--                                                <li><a href="features/components/typography.html">Typography</a></li>--}}
                        {{--                                            </ul>--}}
                        {{--                                        </div>--}}
                        {{--                                        <div class="col">--}}
                        {{--                                            <ul class="fa-ul no-icons text-s">--}}
                        {{--                                                <li><a href="features/components/tables.html">Advanced table</a></li>--}}
                        {{--                                                <li><a href="features/containers/lightbox.html">Lightbox and popups</a></li>--}}
                        {{--                                                <li><a href="features/containers/sliders.html">Sliders and carousels</a></li>--}}
                        {{--                                                <li><a href="features/containers/scroll-box-collapse.html">Scroll box</a></li>--}}
                        {{--                                                <li><a href="features/containers/scroll-box-collapse.html">Collapse box</a></li>--}}
                        {{--                                                <li><a href="features/containers/tabs.html">Tabs</a></li>--}}
                        {{--                                                <li><a href="features/containers/accordions.html">Accordions</a></li>--}}
                        {{--                                                <li><a href="features/containers/list-grid.html">Grid</a></li>--}}
                        {{--                                            </ul>--}}
                        {{--                                        </div>--}}
                        {{--                                        <div class="col">--}}
                        {{--                                            <ul class="fa-ul no-icons text-s">--}}
                        {{--                                                <li><a href="features/containers/list-masonry.html">Masonry</a></li>--}}
                        {{--                                                <li><a href="features/containers/section-background-image.html">Section image</a></li>--}}
                        {{--                                                <li><a href="features/containers/section-background-image-parallax.html">Section parallax</a></li>--}}
                        {{--                                                <li><a href="features/containers/section-background-video.html">Section video</a></li>--}}
                        {{--                                                <li><a href="features/containers/section-animations.html">Section animation</a></li>--}}
                        {{--                                                <li><a href="features/footers/parallax.html">Footer parallax</a></li>--}}
                        {{--                                                <li><a href="features/footers/minimal.html">Footer minimal</a></li>--}}
                        {{--                                                <li><a href="features/footers/base.html">Footer base</a></li>--}}
                        {{--                                            </ul>--}}
                        {{--                                        </div>--}}
                        {{--                                    </div>--}}
                        {{--                                    <div class="panel">--}}
                        {{--                                        <div class="col">--}}
                        {{--                                            <ul class="fa-ul no-icons text-s">--}}
                        {{--                                                <li><a href="features/menus/classic.html">Menu classic</a></li>--}}
                        {{--                                                <li><a href="features/menus/classic-transparent.html">Menu classic transparent</a></li>--}}
                        {{--                                                <li><a href="features/menus/big-logo.html">Menu big logo</a></li>--}}
                        {{--                                                <li><a href="features/menus/subline.html">Menu subline</a></li>--}}
                        {{--                                                <li><a href="features/menus/subtitle.html">Menu subtitle</a></li>--}}
                        {{--                                            </ul>--}}
                        {{--                                        </div>--}}
                        {{--                                        <div class="col">--}}
                        {{--                                            <ul class="fa-ul no-icons text-s">--}}
                        {{--                                                <li><a href="features/menus/middle-logo.html">Menu middle logo</a></li>--}}
                        {{--                                                <li><a href="features/menus/middle-logo-top.html">Menu middle logo top</a></li>--}}
                        {{--                                                <li><a href="features/menus/middle-box.html">Menu middle box</a></li>--}}
                        {{--                                                <li><a href="features/menus/icons.html">Menu icons</a></li>--}}
                        {{--                                                <li><a href="features/menus/icons-top.html">Menu icons top</a></li>--}}
                        {{--                                            </ul>--}}
                        {{--                                        </div>--}}
                        {{--                                        <div class="col">--}}
                        {{--                                            <ul class="fa-ul no-icons text-s">--}}
                        {{--                                                <li><a href="features/menus/side.html">Side classic</a></li>--}}
                        {{--                                                <li><a href="features/menus/side-lateral.html">Side lateral</a></li>--}}
                        {{--                                                <li><a href="features/menus/side-simple.html">Side simple</a></li>--}}
                        {{--                                            </ul>--}}
                        {{--                                        </div>--}}
                        {{--                                    </div>--}}
                        {{--                                    <div class="panel">--}}
                        {{--                                        <div class="col">--}}
                        {{--                                            <ul class="fa-ul no-icons text-s">--}}
                        {{--                                                <li><a href="features/titles/image.html">Image background</a></li>--}}
                        {{--                                                <li><a href="features/titles/image-fullscreen.html">Image full-screen</a></li>--}}
                        {{--                                                <li><a href="features/titles/image-fullscreen-parallax.html">Image full-screen parallax</a></li>--}}
                        {{--                                                <li><a href="features/titles/image-parallax.html">Image parallax</a></li>--}}
                        {{--                                                <li><a href="features/titles/image-parallax-ken-burn.html">Image parallax ken-burn</a></li>--}}
                        {{--                                            </ul>--}}
                        {{--                                        </div>--}}
                        {{--                                        <div class="col">--}}
                        {{--                                            <ul class="fa-ul no-icons text-s">--}}
                        {{--                                                <li><a href="features/titles/video-mp4.html">Video background MP4</a></li>--}}
                        {{--                                                <li><a href="features/titles/video-youtube.html">Video background Youtube</a></li>--}}
                        {{--                                                <li><a href="features/titles/video-fullscreen.html">Video full-screen</a></li>--}}
                        {{--                                                <li><a href="features/titles/video-fullscreen-parallax.html">Video full-screen parallax</a></li>--}}
                        {{--                                                <li><a href="features/titles/video-parallax.html">Video parallax</a></li>--}}
                        {{--                                            </ul>--}}
                        {{--                                        </div>--}}
                        {{--                                        <div class="col">--}}
                        {{--                                            <ul class="fa-ul no-icons text-s">--}}
                        {{--                                                <li><a href="features/titles/base-1.html">Title base 1</a></li>--}}
                        {{--                                                <li><a href="features/titles/base-2.html">Title base 2</a></li>--}}
                        {{--                                                <li><a href="features/titles/animation.html">Animation background</a></li>--}}
                        {{--                                                <li><a href="features/titles/animation-parallax.html">Animation parallax</a></li>--}}
                        {{--                                            </ul>--}}
                        {{--                                        </div>--}}
                        {{--                                        <div class="col">--}}
                        {{--                                            <ul class="fa-ul no-icons text-s">--}}
                        {{--                                                <li><a href="features/titles/slider.html">Slider background</a></li>--}}
                        {{--                                                <li><a href="features/titles/slider-fullscreen.html">Slider full-screen</a></li>--}}
                        {{--                                                <li><a href="features/titles/slider-fullscreen-parallax.html">Slider full-screen parallax</a></li>--}}
                        {{--                                                <li><a href="features/titles/slider-parallax.html">Slider parallax</a></li>--}}
                        {{--                                            </ul>--}}
                        {{--                                        </div>--}}
                        {{--                                    </div>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                        </li>--}}
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Полезное <span class="caret"></span></a>
                            <ul class="dropdown-menu multi-level">
                                <li><a href="{{route('page', 'history/')}}">
                                        о НАС</a></li>
                                {{--                                <li><a href="#">ПРАЙС ЦІН НА РОБОТИ</a></li>--}}
                                {{--                                <li><a href="#">Співпраця з нами</a></li>--}}
                                {{--                                <li><a href="#">Франшиза</a></li>--}}
                                {{--                                <li><a href="{{route('page','projects/')}}">Проекти</a></li>--}}
                                <li><a href="{{route('page','dizajn-ta-arhitektura')}}">Дизайн / архитектура</a></li>
                                <li><a href="{{route('page', 'contact/')}}">Контакты</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="nav navbar-nav navbar-right">
                        <div class="custom-area">
                            <a class="md-trigger btn btn-sm" target="_blank"  href="{{route('comerc')}}" >ПОЛУЧИТЬ коммерческое предложение</a>
                        </div>
                        <form class="navbar-form" role="search">
                            <div class="search-box-menu">
                                <div class="search-box scrolldown">
                                    <input type="text" class="form-control" placeholder="ПОШУК ПО САЙТУ...">
                                </div>
                                <button type="button" class="btn btn-default btn-search">
                                    <span class="fa fa-search"></span>
                                </button>
                            </div>
                        </form>
                        <ul class="nav navbar-nav lan-menu">
                            <li class="dropdown">
                                <a href="{{route('setlocale', ['lang' => 'ru'])}}"  class="{{ App\Http\Middleware\LocaleMiddleware::getLocale() === 'ru' ? 'active' : '' }}"  data-toggle="dropdown" role="button">РУ</a>
                                <a href="{{route('setlocale', ['lang' => 'uk'])}}" class="{{ App\Http\Middleware\LocaleMiddleware::getLocale() === null ? 'active' : '' }}" data-toggle="dropdown" role="button">УК</a>
                                {{--                                <a href="{{route('setlocale', ['lang' => 'en'])}}" class="{{ App\Http\Middleware\LocaleMiddleware::getLocale() === 'en' ? 'active' : '' }}" data-toggle="dropdown" role="button">En</a>--}}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
{{--<div class="md-modal md-effect-14" id="modal-14">--}}
{{--    <div class="md-content">--}}
{{--        <h3>ЗАПОВНІТЬ ЧЕК-ЛИСТ ОБ'ЄКТУ</h3>--}}
{{--        <div>--}}
{{--            <p>This is a modal window. You can do the following things with it:</p>--}}
{{--            <ul>--}}
{{--                <li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>--}}
{{--                <li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>--}}
{{--                <li><strong>Close:</strong> click on the button below to close the modal.</li>--}}
{{--            </ul>--}}
{{--            <button class="md-close btn btn-sm btn-border  nav-justified">Close me!</button>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--@section('breadcrumbs')--}}
{{--{!! Breadcrumbs::render()!!}--}}
{{--@show--}}
@include('flash::message')
@yield('content')
<i class="scroll-top scroll-top-mobile show fa fa-sort-asc"></i>
<footer class="footer-base">
    <div class="container content">
        <div class="row">
            <div class="col-md-4">
                <img class="logo" src="{{asset('/images/logo.png')}}" alt="logo" />
                <hr class="space s" />
                <p class="text-s">
                    ИВ-БУД Качество превыше всего.
                </p>
                <hr class="space s" />
                <div class="btn-group social-group btn-group-icons">
                    <a target="_blank" href="https://www.facebook.com/ivbudfloor"  data-toggle="tooltip" data-placement="top" title="Facebook">
                        <i class="fa fa-facebook text-s circle"></i>
                    </a>
                    <a target="_blank" href="https://www.instagram.com/ivbudfloor/"  data-toggle="tooltip" data-placement="top" title="Instagram">
                        <i class="fa fa-instagram text-s circle"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <h3 class="text-black text-uppercase">КОНТАКТЫ </h3>
                <hr class="space space-30" />
                <ul class="fa-ul text-s ul-squares">
                    <li>Львов, Наливайко 12</li>
                    <li>Ивано-Франковск, ул. Ушинского, 1</li>
                    <li>ivbudzahid@gmail.com</li>
                    <li>+38 (096) 456 36 14</li>
                </ul>
            </div>
            <div class="col-md-4">
                <h3 class="text-black text-uppercase">ВАЖНЫЕ ССЫЛКИ</h3>
                <hr class="space space-30" />
                <div class="footer-menu text-s">
                    <a href="#">НОВОСТИ</a>
                    <a href="{{route('page', 'history')}}">О НАС</a>
                    <a href="#">ПОДПИСКА</a>
                    <a href="{{route('page', 'contact/')}}">КОНТАКТЫ</a>
                </div>
            </div>
        </div>
        <hr class="space hidden-sm" />
        <div class="row copy-row">
            <div class="col-md-12 copy-text">
                © 2017-2021 IV BUD - Decor & Floor  <a href=""></a>
            </div>
        </div>
    </div>
    <script src="{{ asset('HTWF/scripts/jquery.min.js') }}"></script>
    <script src="{{ asset('HTWF/scripts/parallax.min.js') }}"></script>
    <script src="{{ asset('HTWF/scripts/script.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('HTWF/scripts/iconsmind/line-icons.min.css') }}">
    <script src="{{ asset('HTWF/scripts/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('HTWF/scripts/imagesloaded.min.js') }}"></script>
    <script src="{{ asset('HTWF/scripts/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('HTWF/scripts/flexslider/jquery.flexslider-min.js') }}"></script>
    <script src="{{ asset('HTWF/scripts/jquery.tab-accordion.js') }}"></script>
    <script src="{{ asset('HTWF/scripts/isotope.min.js') }}"></script>
    <script src="{{ asset('HTWF/scripts/bootstrap/js/bootstrap.popover.min.js') }}"></script>
    <script src="{{ asset('js/classie.js') }}"></script>
    <script src="{{ asset('js/modalEffects.js') }}"></script>
@yield('script')
<!-- for the blur effect -->
    <!-- by @derSchepp https://github.com/Schepp/CSS-Filters-Polyfill -->
    <script>
        // this is important for IEs
        var polyfilter_scriptpath = '/js/';
    </script>
    {{--    <script src="{{ asset('js/cssParser.js') }}"></script>--}}
    {{--    <script src="{{ asset('js/css-filters-polyfill.js') }}"></script>--}}
    <script src="{{ asset('../HTWF/scripts/php/contact-form.js') }}"></script>
    <script src="{{ asset('../HTWF/scripts/jquery.progress-counter.js') }}"></script>
    <script src="{{ asset('../HTWF/scripts/smooth.scroll.min.js')}}"></script>
</footer>
</body>
</html>
