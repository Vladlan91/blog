@extends('layouts.appru')
@section('title', 'Декоративное кварцевое покрытие')
@section('meta', 'Декоративное кварцевое покрытие | ИВ БУД')
@section('keywords', 'Декоративное кварцевое покрытие | ИВ БУД')
@section('breadcrumbs')
@endsection
@section('content')
    <div class="header-title ken-burn-out white" data-parallax="scroll" data-natural-height="800" data-natural-width="1920" data-image-src="../images/hd-21.png">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="title-base text-left">
                        <hr class="anima" />
                        <h1>Декоративное кварцевое покрытие</h1>
                        <p>Одно из самых прочных покрытий, выдерживает до 4,5 т. на 1см2.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <ol class="breadcrumb b white">
                        <li><a style="color: white;" href="{{route('home')}}">Главная</a></li>
                        <li class="active" style="color: #F5BF23!important;">Декоративный кварц</li>
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
                                <li> <a href="#top">ДЕКОРАТИВНЫЙ КВАРЦ</a></li>
                                <li> <a href="#top2">ПРОЦЕСС СОЗДАНИЯ ПОКРЫТИЯ</a></li>
                                <li><a href="#top3">Гарантийные обязательства</a></li>
                                <li><a href="#top4">ЦЕНА РАБОТЫ</a></li>
                            </ul>
                        </nav>
                    </aside>
                    <hr class="space m" />
                    <div class="row">
                        <div class="col-md-12 boxed white">
                            <h4 class="text-color">брошюра</h4>
                            <hr class="space m" />
                            <p class="text-s">
                                Вся необходимая информация, для того чтобы вы могли определиться с типом покрытия, которое вам необходимо.
                            </p>
                            <a href="#" class="btn-text text-color">Скачать брошюру</a>
                        </div>
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
                    <h2>РАЗНОВИДНОСТЬ КВАРЦЕВЫХ ПОКРЫТИЙ.</h2>
                    <p>
                        Если стоит задача реализовать пол для объекта с повышенными эксплуатационными характеристиками, рекомендуем декоративное кварцевое покрытие. Цвет пола можно подобрать по каталогу RAL, методом окрашивания песка. Декоративная привлекательность - это отличительная черта кварцевых покрытий, вот почему существуют два направления использования покрытия.
                    </p>
                    <ul class="fa-ul text-s ul-dots">
                        <li>декоративные кварцевые покрытия</li>
                        <li><a style="color: #F5BF23" href="{{route('page','promislove-kvarcove-pokrittya')}}">промышленные кварцевые покрытия</a></li>
                    </ul>
                    <hr class="space m" />
                    <a name="top"></a>
                    <hr>
                    <h2>ДЕКОРАТИВНЫЙ КВАРЦ.</h2>
                    <p>
                        Если же стоит задача сделать декоративное покрытие, которое будет выполнять свои функции десятки лет, это именно то покрытие, что вам необходимо. Оно чрезвычайно износостойкое и легко поддается декора, благодаря рисованию фракций песка. Ваш декор не будет поверхностным и не стираться, ведь он будет столь же глубоким, как и сам пол.
                    </p>
                    <hr class="space" />
                    <div class="flexslider carousel outer-navs" data-options="minWidth:150,itemMargin:30,numItems:3,controlNav:false,directionNav:true">
                        <ul class="slides">
                            <li>
                                <a class="img-box lightbox  i-center mfp-iframe"  href="https://www.youtube.com/watch?v=CEwM5O1bsz8" data-lightbox-anima="fade-right">
                                    <i class="im-play"></i>
                                    <img src="../prodgect/pr-35.png" alt="кварцевый пол">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../images/hd-74.png" data-lightbox-anima="fade-right">
                                    <img src="../images/hd-74.png" alt="Пол из кварца">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../prodgect/pr-40.png" data-lightbox-anima="fade-right">
                                    <img src="../prodgect/pr-40.png" alt="Эпоксидный кварцевый пол">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../prodgect/pr-36.png" data-lightbox-anima="fade-right">
                                    <img src="../prodgect/pr-36.png" alt="Кварцевый эпоксидный пол">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox i-center mfp-iframe" href="https://www.youtube.com/watch?v=26PRbMRD1S0">
                                    <i class="im-play"></i>
                                    <img src="../prodgect/pr-5.png" alt="бесшовное покрытие">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../prodgect/pr-37.png" data-lightbox-anima="fade-right">
                                    <img src="../prodgect/pr-37.png" alt="Пол для коммерции">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../prodgect/pr-38.png" data-lightbox-anima="fade-right">
                                    <img src="../prodgect/pr-38.png" alt="Пол в учреждения">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../prodgect/pr-39.png" data-lightbox-anima="fade-right">
                                    <img src="../prodgect/pr-39.png" alt="Пол в дом">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <hr class="space m" />
                    <h5>Свойства покрытия</h5>
                    <hr class="space m" />
                    <div class="row text-left">
                        <div class="col-md-4">
                            <div class="icon-box">
                                <div class="icon-box-cell">
                                    <i class="text-xl im-arrow-around"></i>
                                </div>
                                <div class="icon-box-cell">
                                    <label class="text-m">Устойчивость к нагрузкам</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="icon-box">
                                <div class="icon-box-cell">
                                    <i class="text-xl im-bowling"></i>
                                </div>
                                <div class="icon-box-cell">
                                    <label class="text-m">Устойчивость к ударам</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="icon-box">
                                <div class="icon-box-cell">
                                    <i class="text-xl im-boot"></i>
                                </div>
                                <div class="icon-box-cell">
                                    <label class="text-m">Устойчивость к трению</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <a name="top2"></a>
                    <h2>ПРОЦЕСС СОЗДАНИЯ ПОКРЫТИЯ.</h2>
                    <p>
                    <p>
                        Кварцевый пол состоит из нескольких слоев кварца и эпоксида. Как будь какое покрытие, от Компании ИВ БУД, все начинается с подготовки основания, в случае, если основание имеет дефекты и неровности мы выполняем
                        <a  style="color: #F5BF23" href="{{route('page','remont-styazhki')}}">ремонт и усилении основы</a>, процесс нанесения выглядит следующим образом, пол слой за слоем накладывается, предварительно правильно заключив, прошлифувавшы и обезпилившы каждый из слоев.
                        В конечном итоге получается довольно толстое покрытие, которое надежно защищает основу от внешних механических и химических воздействий. Финишный лак наносится для добавления декоративных или иных свойств.
                    </p>

                    <hr class="space" />
                    <div class="flexslider carousel outer-navs" data-options="minWidth:150,itemMargin:30,numItems:3,controlNav:false,directionNav:true">
                        <ul class="slides">
                            <li>
                                <a class="img-box lightbox  i-center mfp-iframe"  href="https://www.youtube.com/watch?v=nnItSgER67Y" data-lightbox-anima="fade-right">
                                    <i class="im-play"></i>
                                    <img src="../images/hd-72.png" alt="Как создается кварцевая пол">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../images/hd-70.png" data-lightbox-anima="fade-right">
                                    <img src="../images/hd-70.png" alt="Нанесение кварцевого покрытия">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../images/hd-73.png" data-lightbox-anima="fade-right">
                                    <img src="../images/hd-73.png" alt="Прочная бесшовный пол">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <hr class="space m" />
                    <p>
                        Финиш может быть разным, в зависимости от требований заказчика. Существуют три состояния финишного покрытия, а именно:
                    </p>
                    <ul class="fa-ul text-s ul-dots">
                        <li>матовый;</li>
                        <li>полуглянец;</li>
                        <li>глянец;</li>
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
                        <li>Температура в помещении в пределах 17-20 ℃;</li>
                        <li>Температура основания в пределах 12-15 ℃;</li>
                        <li>Марка бетона 350-400;</li>
                        <li>Возможность не эксплуатировать покрытие в пределах 12-14 днів;</li>
                    </ul>
                    <p>
                        В других случаях, даже при невыполненные хотя бы одного пункта компания ИВ БУД предоставляет 1 год гарантии.
                    </p>
                    <a name="top4"></a>
                    <hr>
                    <h2>ЦЕНА РАБОТ.</h2>
                    <p>
                        Перечень работ и материалов, которые включает в себя декоративное покрытие.
                    </p>
                    <p>
                        Этапы работ:
                    </p>
                    <ul class="fa-ul text-s ul-dots">
                        <li>Шлифовка основания - 150 грн/м2</li>
                        <li>Обеспыленным промышленными пылесосами (2 этапа) - цена 25 грн / м2 (за 1 этап)</li>
                        <li>Грунтовка основания (2 слоя) - цена 50 грн / м2 (за 1 слой)</li>
                        <li>Отсыпка кварца (3 слоя) - цена 50 грн / м2 (за 1 слой)</li>
                        <li>Нанесение эпоксидного лака - цена 50 грн / м2</li>
                        <li>Нанесение финишного лака (2 слоя) - цена 100 грн / м2 (за 1 слой)</li>
                    </ul>
                    <hr>
                    <p>
                        Материалы:
                    </p>
                    <ul class="fa-ul text-s ul-dots">
                        <li>Финишный лак (матовый / полуглянец / глянец) - цена 200 грн / м2</li>
                        <li>Эпоксидный лак - цена 120 грн / м2</li>
                        <li>Эпоксидный грунт - цена 380 грн/м2</li>
                        <li>Кварцевый песок - цена 100 грн / м2</li>
                    </ul>
                    <hr>
                    <p>
                    <p>
                        Общая стоимость работ, с учетом всех этапов будет составлять 1500 грн / м2. При условии, что ваш бетон при его нанесены, был провибрований и одного этапа шлифовки основы было достаточно. Также возможна скидка до 15%, при площади 350+.
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
                                    <span><span class="counter" data-to="20" data-trigger="null">50</span> м2</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="section-empty bg-white">
                        <div class="col-md-12">
                            Компания ИВ БУД уже на протяжении нескольких лет, кроме полимерных полов, занимается ремонтом топинговых покрытий, бетонных и полусухих стяжек в таких городах:
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
                                    <h4>представительства</h4>
                                    <p>
                                        Просмотреть в каких регионах доступна данная услуга от компании ИВ БУД.
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
