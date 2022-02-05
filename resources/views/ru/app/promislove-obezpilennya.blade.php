@extends('layouts.appru')
@section('title', 'Промышленное обеспыливание | ИВ БУД')
@section('meta', 'Промышленное обеспыливание | ИВ БУД')
@section('keywords', 'Промышленное обеспыливание | ИВ БУД')
@section('breadcrumbs')
@endsection
@section('content')
    <div class="header-title ken-burn-out white" data-parallax="scroll" data-natural-height="800" data-natural-width="1920" data-image-src="../images/hd-66.png">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="title-base text-left">
                        <hr class="anima" />
                        <h1>Промышленное обеспыливание</h1>
                        <p>
                            Во всем мире бетон защищают от влаги, химического воздействия и трещин полимерами, типа эпоксидной смолы.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <ol class="breadcrumb b white">
                        <li><a style="color: white;" href="{{route('home')}}">Главная</a></li>
                        <li class="active" style="color: #F5BF23!important;">Промышленное обеспыливание</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="section-empty">
        <div class="container content">
            <div class="row">
                <div class="col-md-3 col-sm-4">
                    <h2>Навигация по странице</h2>
                    <hr class="space m" />
                    <aside class="sidebar mi-menu">
                        <nav class="sidebar-nav">
                            <ul class="side">
                                <li> <a href="#top">Бетонная стяжка</a></li>
                                <li> <a href="#top2">Промышленное обеспыл.</a></li>
                                <li><a href="#top3">Гарантийные обязательства</a></li>
                                <li><a href="#top4">ЦЕНА РАБОТЫ</a></li>
                            </ul>
                        </nav>
                    </aside>
                    <hr class="space m" />
                    <div class="row">
                        <hr class="space l" />
                        <div class="col-md-12 boxed-inverse">
                            <h4>Поможем выбрать!</h4>
                            <hr class="space m" />
                            <ul class="fa-ul ul-dots text-s">
                                <li>ivbudzahid@gmail.com</li>
                                <li>+38 (096) 456 36 14</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 col-sm-8">
                    <hr class="space visible-xs" />
                    <h2>ПРО Промышленное обеспыливание.</h2>
                    <p>
                        Один из самых экономичных вариантов получить прочное покрытие, которое выдержит химические и механические нагрузки. Однако, такой метод защиты доступен только для нового бетона. В зависимости, есть ли у вас гидроизоляция или нет, существуют два варианта посилиння бетона:
                    </p>
                    <ul class="fa-ul text-s ul-dots">
                        <li>усиление эпоксидами на водной основе (если гидроизоляция отсутствует)</li>
                        <li>усиление чистыми эпоксидами (при наличии гидроизоляции);</li>
                    </ul>
                    <hr class="space m" />
                    <p>
                        Если ваше покрытие уже в эксплуатации и имеет дефекты, трещины, выбоины, предлагаем ознакомиться с услугой
                        <a style="color: #F5BF23" href="{{route('page','remont-styazhki')}}">РЕМОНТ БЕТОННЫХ СТЯЖЕК </a>, после устранения всех дефектов, финишным результатом которого - промышленное обеспыливание.
                    </p>
                    <hr class="space m" />
                    <a name="top"></a>
                    <hr>
                    <h2>Бетонная стяжка</h2>
                    <p>
                        Одно из самых прочных покрытий. Славится своей надежностью, и долговечностью. Недостатки, ее вес, в новостройках, застройщик не использует данный вид покрытия, поскольку оно существенно увеличивает нагрузку на конструкцию. Поэтому данный вид покрытия используется исключительно в промышленности. Данное покрытие, как и в случае с полусухой стяжкой, не устойчив к влаге, солей. Бетонная стяжка может служить десятки лет, при условии нанесения поверх защитного покрытия. Защитным покрытием могут быть полимеры / кристаллизаторы.</p>
                    <p>

                        Без защитного покрытия, бетон со временем разрушается, начинает пилить, образуются кратеры, выбоины, трещины.
                    </p>
                    <hr class="space" />
                    <div class="flexslider carousel outer-navs" data-options="minWidth:150,itemMargin:30,numItems:3,controlNav:false,directionNav:true">
                        <ul class="slides">
                            <li>
                                <a class="img-box lightbox" href="../images/hd-45.png" data-lightbox-anima="fade-right">
                                    <img src="../images/hd-45.png" alt="обработка бетона">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../images/hd-46.png" data-lightbox-anima="fade-right">
                                    <img src="../images/hd-46.png" alt="пропитка бетон">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../images/hd-47.png" data-lightbox-anima="fade-right">
                                    <img src="../images/hd-47.png" alt="усиление бетона">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <hr class="space m" />
                    <h5>недостатки покрытия</h5>
                    <hr class="space m" />
                    <div class="row text-left">
                        <div class="col-md-4">
                            <div class="icon-box">
                                <div class="icon-box-cell">
                                    <i class="text-xl im-aquarius-2"></i>
                                </div>
                                <div class="icon-box-cell">
                                    <label class="text-m">Неустойчивость к воде</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="icon-box">
                                <div class="icon-box-cell">
                                    <i class="text-xl im-bio-hazard"></i>
                                </div>
                                <div class="icon-box-cell">
                                    <label class="text-m">Неустойчивость к кислотам</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="icon-box">
                                <div class="icon-box-cell">
                                    <i class="text-xl im-over-time2"></i>
                                </div>
                                <div class="icon-box-cell">
                                    <label class="text-m">Неустойчивость к - темпаратуры</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <p>
                        Бетона стяжка служит недолго, если на объекте существуют агрессивные факторы, такие как:
                    </p>
                    <ul class="fa-ul text-s ul-dots">
                        <li>соли;</li>
                        <li>масла;</li>
                        <li>химия;</li>
                        <li>вода;</li>
                        <li>не стала температура помещения;</li>
                    </ul>
                    <hr class="space m" />
                    <p>
                        Защитный финишный слой обязательное условие для сохранения бетона.
                    </p>
                    <a name="top2"></a>
                    <hr>
                    <h2>ПРОЦЕСС Промышленного обеспыливание.</h2>
                    <p>
                        Все начинается с шлифовки основы, любой бетон имеет так называемое цементное молочко, которого нужно избавиться, поскольку оно является хрупким и ослабит адгезию основания. После шлифовки основы, вся площадь обеспилюеться промышленными пылесосами, для открытия пор, чтобы эпоксид как можно лучше проник в поры бетона.
                    </p>

                    <hr class="space" />
                    <div class="flexslider carousel outer-navs" data-options="minWidth:150,itemMargin:30,numItems:3,controlNav:false,directionNav:true">
                        <ul class="slides">

                            <li>
                                <a class="img-box lightbox" href="../images/hd-67.png" data-lightbox-anima="fade-right">
                                    <img src="../images/hd-67.png" alt="бетона стяжка">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../images/hd-66.png" data-lightbox-anima="fade-right">
                                    <img src="../images/hd-66.png" alt="обработка бетона">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../images/hd-68.png" data-lightbox-anima="fade-right">
                                    <img src="../images/hd-68.png" alt="бетонный топпинг">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <hr class="space m" />
                    <p>
                        Финиш может быть разным, в зависимости от требований заказчика. Промышленное обеспыливания включает в себя прозрачный финишный лак, соответственно, ваше покрытие будет выглядеть, как мокрый бетон, если вам хлтилось чтобы покрытие имело какой-то определенный цвет, предлагаем ознакомиться с послогою <a style="color: #F5BF23" href="{{route('page','epoksidnij-okras')}}">ПРОМЫШЛЕННЫЙ ОКРАС</a>.
                    </p>
                    <ul class="fa-ul text-s ul-dots">
                        <li>удобство в уборке;</li>
                        <li>отсутствие пыли;</li>
                        <li>устойчивость к химии;</li>
                        <li>устойчивость к воде;</li>
                        <li>повышенную устойчивость к механическим нагрузкам;</li>
                    </ul>
                    <a name="top3"></a>
                    <hr>
                    <h2>Гарантийные обязательства.</h2>
                    <p>

                        Существуют 2 варианта содержание вашего покрытия в надлежащем состоянии, которые дадут возможность удобно и беспрепятственно эксплуатировать ваше покрытие:
                    </p>
                    <hr class="space m" />
                    <table class="grid-table border-table full-border-table text-left">
                        <tbody>
                        <tr>
                            <td>
                                <h2 class="text-m">1 год гарантии на работы</h2>
                                <hr class="space s">
                            </td>
                            <td>
                                <h2 class="text-m">2 года гарантии на работы</h2>
                                <hr class="space s">
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <hr>
                    <h5>
                        2 года гарантии на работы
                    </h5>
                    при следующих условиях:
                    <ul class="fa-ul text-s ul-dots">
                        <li>Температура в помещении в пределах 17-20 ℃ ;</li>
                        <li>Температура основания в пределах 12-15 ℃</li>
                        <li>Марка бетона 350-400</li>
                        <li>Наличие гидроизоляции основания;</li>
                        <li>Возможность не эксплуатировать отремонтированный участок в пределах 12-14 дней</li>
                    </ul>
                    <p>

                        В других случаях, даже при невыполненные хотя бы одного пункта компания ИВ БУД предоставляет 1 год гарантии.
                    </p>
                    <a name="top4"></a>
                    <hr>
                    <h2>ЦЕНА РАБОТ.</h2>
                    <p>
                        Перечень работ и материалов, которые включает в себя покрытие.
                    </p>
                    <p>
                        Этапы работ:
                    </p>
                    <ul class="fa-ul text-s ul-dots">
                        <li>Шлифовка основания - 150 грн / м2</li>
                        <li>Обеспыливания промышленными пылесосами - цена 30 грн / м2</li>
                        <li>Нанесение эпоксидного лака - цена 50 грн / м2</li>
                    </ul>
                    <hr>
                    <p>
                        Материалы:
                    </p>
                    <ul class="fa-ul text-s ul-dots">
                        <li>Eпоксидний лак - цена 120 грн / м2</li>
                    </ul>
                    <hr>
                    <p>
                        Общая стоимость работ, с учетом всех этапов будет составлять 350 грн / м2. При условии, что ваш бетон при его нанесены, был провибрований и одного этапа шлифовки основы было достаточно.
                    </p>
                    <hr>
                    <div class="row vertical-row">
                        <div class="col-md-1">
                        </div>
                        <div class="col-md-5">
                            <p class="progress-label">Минимальный заказ</p>
                        </div>
                        <div class="col-md-6">
                            <div class="progress">
                                <div class="progress-bar" data-progress="20" style="width: 20%;" data-trigger="null">
                                    <span><span class="counter" data-to="20" data-trigger="null">100</span> м2</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="section-empty bg-white">
                        <div class="col-md-12">
                            Компания ИВ БУД уже на протяжении нескольких лет, кроме полимерных полов, занимается ремонтом топпинговых покрытий, бетонных и полусухих стяжек в таких городах:
                        </div>
                        <div class="container content">
                            <div class="row">
                                <div class="col-md-1"></div>
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
                                        Смотрите в каких регионах доступна данная услуга от компании ИВ БУД.
                                    </p>
                                    <a href="{{route('page','contact')}}" class="btn btn-sm">Контакты</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
