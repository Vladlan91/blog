@extends('layouts.app')
@section('title', 'Історія про компанію ІВ БУД')
@section('meta', 'Історія компанії | ІВ БУД')
@section('keywords', 'Полімерний мікроцемент | ІВ БУД')
@section('breadcrumbs')
@endsection
@section('content')
<div style="background-color: #fff; width: 100%; height: 100%;opacity: 0.3">
    <div class="header-video">
        <div class="videobox"  style="height: 409px;">
            <div data-video-youtube="dhQrsJ0wNhg"></div>
            <div class="mobile-poster" style="background-image:url('../../../images/video-poster.jpg')"></div>
        </div>
    </div>
</div>
<div class="section-empty bg-white">
    <div class="container content">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <h4>Студії дизайну та архітектури</h4>
                <div class="counter-box-simple text-color "><span class="counter text-xl" data-to="3000" data-separator="" data-trigger="null">15</span><span class="text-s"> студій</span></div>
                <hr class="space xs">
                <p class="text-xs text-uppercase">З якими ми співпрацюємо.</p>
            </div>
            <div class="col-md-3 col-sm-6">
                <h4>Загальна площа підлоги,</h4>
                <div class="counter-box-simple text-color  "><span class="counter text-xl" data-to="300" data-trigger="null">12000+</span><span class="text-s"> м2</span></div>
                <hr class="space xs">
                <p class="text-xs text-uppercase">Різних типів покриттів</p>
            </div>
            <div class="col-md-3 col-sm-6">
                <h4>Проекти, які ще в процесі роботи.</h4>
                <div class="counter-box-simple text-color "><span class="counter text-xl" data-to="950" data-trigger="null">12</span><span class="text-s"></span></div>
                <hr class="space xs">
                <p class="text-xs text-uppercase">Проекти, які знаходяться на різних етапах реалізації.</p>
            </div>
            <div class="col-md-3 col-sm-6">
                <h4>Проекти, які вже завершені.</h4>
                <div class="counter-box-simple text-color"><span class="counter text-xl" data-to="2500" data-separator="" data-trigger="null">95</span><span class="text-s"></span></div>
                <hr class="space xs">
                <p class="text-xs text-uppercase">Реалізовані проекти, які вже здані замовникам.</p>
            </div>
        </div>
    </div>
</div>
<div class="section-empty">
    <img src="{{asset('images/в.png')}}" alt="" style="width: auto; height: 100%; opacity: 0.2; position: absolute; margin-top: 5%;">
    <img src="{{asset('images/u.png')}}" alt="" style="width: auto; height: 100%; opacity: 0.2; position: absolute; margin-left: 60%">
    <div class="container content">
        <ul class="timeline">
            <li>
                <div class="timeline-badge"></div>
                <div class="timeline-label"><h4>2017</h4><p>Початок діяльності</p></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="timeline-title">Навчання персоналу</h4>
                    </div>
                    <div class="timeline-body">
                        <p>
                            В 2017 році все розпочалось з навчання персоналу у відомих європейських виробників полімерів. Навчання проводилось як на тереторії України так і в Польщі, Німеччині.
                        </p>
                    </div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-badge"></div>
                <div class="timeline-label"><h4>2018</h4><p>Розвиток та досвід</p></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="timeline-title">Розвиток компанії</h4>
                    </div>
                    <div class="timeline-body">
                        <p>
                            Здобувши практичні та теоретичні навики, компанія починає розвивати та популяризовувати напрямок безшовних покриттів на Західній Україні, як <a style="color: #F5BF23 !important;" href="https://tepluydim.com.ua/">ТЕПЛИЙ ДІМ</a>
                        </p>
                    </div>
                </div>
            </li>
            <li>
                <div class="timeline-badge"></div>
                <div class="timeline-label"><h4>2019</h4><p>Створення ТОВ ІВ БУД</p></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="timeline-title">Реєстрація товариства</h4>
                    </div>
                    <div class="timeline-body">
                        <p>
                            В 2019 році засновується ТОВ ІВ БУД, компанія розпочинає співпрацю з такими відомими компаніями, як Епіцентр, АТБ, Галицька Свіжина, Самбірськи молокозавод, Майола, Галичина і тд.
                        </p>
                    </div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-badge"></div>
                <div class="timeline-label"><h4>2020</h4><p>Сертифікація компанії</p></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="timeline-title">Сертифікований виконавець</h4>
                    </div>
                    <div class="timeline-body">
                        <p>
                            В 2020 розпочато роботу по проходженню навчання, для отримання статусу - Сертифікований виконавець" у таких відомих європейських компаніях як Sika, STO, Mapei, Remmers.
                        </p>
                    </div>
                </div>
            </li>
            <li>
                <div class="timeline-badge"></div>
                <div class="timeline-label"><h4>2021</h4><p>Запуск франшизи</p></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="timeline-title">Цілі на 2021</h4>
                    </div>
                    <div class="timeline-body">
                        <p>
                            В 2021 році відкрито showrooms в місті Львів та Івано-Франківськ, розпочатий юредичний процес по створенню франшизи і запуску філіалів по всій Україні.
                        </p>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
<div class="container content">
    <h2>НАШІ ПАРТНЕРИ</h2>
    <hr class="space l">
    <table  class="grid-table border-table" data-anima="fade-bottom" data-timeline="asc">
        <tbody>
        <tr>
            <td>
                <img class="anima"  src="../images/logos/1-1.png" alt="">
                <hr class="space s">
                <p class="text-s">
                    Remmers Группа була заснована в 1949 році. Підприємство спеціалізується...
                </p>
                <a href="https://www.remmers.ua/" class="btn-text text-s" rel="no-nofollow">веб сайт</a>
            </td>
            <td>
                <img class="anima"  src="../images/logos/1-2.png" alt="">
                <hr class="space s">
                <p class="text-s">
                    Група Sto складається з активних і незалежних компаній, а також партнерів...
                </p>
                <a href="https://sto-ukraine.com/" class="btn-text text-s" rel="no-nofollow" >веб сайт</a>
            </td>
            <td>
                <img class="anima"  src="../images/logos/1-3.png" alt="">
                <hr class="space s">
                <p class="text-s">
                    Матеріали виробляються на заводах в Європі та поставляються безпосередньо...
                </p>
                <a href="https://ukr.sika.com/" class="btn-text text-s" rel="no-nofollow">веб сайт</a>
            </td>
            <td>
                <img class="anima"  src="../images/logos/1-4.png" alt="">
                <hr class="space s">
                <p class="text-s">
                    Mapei - це сімейний бізнес, заснований в Італії, який під керівництвом сім’ї...
                </p>
                <a href="https://www.mapei.com/ua/uk/domashnya-storinka" class="btn-text text-s" rel="no-nofollow" >веб сайт</a>
            </td>
        </tr>
        </tbody>
    </table>
    <hr>
    <h2>НАШІ ПОСТІЙНІ КЛІЄНТИ</h2>
    <hr class="space l">
    <table  class="grid-table border-table" data-anima="fade-bottom" data-timeline="asc">
        <tbody>
        <tr>
            <td><img  class="anima" src="../images/logos/8.png" alt=""></td>
            <td><img  class="anima" src="../images/logos/2.png" alt=""></td>
            <td><img  class="anima" src="../images/logos/10.png" alt=""></td>
            <td><img  class="anima" src="../images/logos/4.png" alt=""></td>
            <td><img  class="anima" src="../images/logos/5.png" alt=""></td>
        </tr>
        <tr>
            <td><img class="anima" src="../images/logos/6.png" alt=""></td>
            <td><img class="anima" src="../images/logos/7.png" alt=""></td>
            <td><img class="anima" src="../images/logos/1.png" alt=""></td>
            <td><img class="anima" src="../images/logos/3.png" alt=""></td>
            <td><img class="anima" src="../images/logos/11.png" alt=""></td>
        </tr>
        </tbody>
    </table>
</div>
@endsection
