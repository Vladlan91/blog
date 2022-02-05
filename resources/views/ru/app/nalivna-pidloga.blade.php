@extends('layouts.appru')
@section('title', 'Наливной пол')
@section('meta', 'Наливной пол | ИВ БУД')
@section('keywords', 'Наливной пол | ИВ БУД')
@section('breadcrumbs')
@endsection
@section('content')
    <div class="header-title ken-burn-out white" data-parallax="scroll" data-natural-height="800" data-natural-width="1920" data-image-src="../prodgect/pr-3.png">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="title-base text-left">
                        <hr class="anima" />
                        <h1>Эпоксидный наливной пол</h1>
                        <p>Пожалуй единственное покрытие, которое имеет большой спектр использования в различных типах помещений.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <ol class="breadcrumb b white">
                        <li><a style="color: white;" href="{{route('home')}}">Главная</a></li>
                        <li class="active" style="color: #F5BF23!important;">Наливной пол</li>
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
                                <li> <a href="#top">Наливные полы</a></li>
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
                            <a href="#" class="btn-text text-color">скачать брошюру</a>
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
                    <h2>все о покрытии.</h2>
                    <p>

                        Полимер - одно из самых устойчивых материалов к химии, грязи и кислот, а его бесшовность упрощает уход за покрытием. Такие характеристики дают неограниченные возможности использования в различных типах помещений, а именно:
                    </p>
                    <ul class="fa-ul text-s ul-dots">
                        <li><a style="color: #F5BF23" href="{{route('page','promislove-kvarcove-pokrittya')}}">Использование в промышленности</a></li>
                        <li><a style="color: #F5BF23" href="{{route('page','dekorativni-pokrittya')}}">Использование в декоре</a></li>
                        <li><a style="color: #F5BF23" href="{{route('page','pidloga-dlya-medychnyh-zakladiv')}}">Использование в медицине</a></li>
                    </ul>
                    <hr class="space m" />
                    <a name="top"></a>
                    <hr>
                    <h2>Наливные полы.</h2>
                    <p>
                        Один материал и разный результат. Классический способ, позволяющий достичь глянцивой поверхности, но возможен и другой вариант, гладкая и в то же время матовая структура. Покрытие подходит для применения в помещениях с повышенной влажностью, в ванной комнате, на кухне, душевой кабине, зонах у бассейна. Нанесение полимерного покрытия не предусматривает стыков или деформационных швов. Можно использовать в помещениях любых размеров.
                    </p>
                    <hr class="space" />
                    <div class="flexslider carousel outer-navs" data-options="minWidth:150,itemMargin:30,numItems:3,controlNav:false,directionNav:true">
                        <ul class="slides">
                            <li>
                                <a class="img-box lightbox  i-center mfp-iframe"  href="https://www.youtube.com/watch?v=dhQrsJ0wNhg" data-lightbox-anima="fade-right">
                                    <i class="im-play"></i>
                                    <img src="../prodgect/pr-3.png" alt="Наливные полы">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../prodgect/pr-47.png" data-lightbox-anima="fade-right">
                                    <img src="../prodgect/pr-47.png" alt="Эпоксидный наливной пол">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../prodgect/pr-48.png" data-lightbox-anima="fade-right">
                                    <img src="../prodgect/pr-48.png" alt="жидкий пол">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../prodgect/pr-26.png" data-lightbox-anima="fade-right">
                                    <img src="../prodgect/pr-26.png" alt="Пол без стыков">
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
                                    <i class="text-xl im-aquarius-2"></i>
                                </div>
                                <div class="icon-box-cell">
                                    <label class="text-m">Устойчивость к воде</label>
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
                    <hr class="space" />
                    <a name="top2"></a>
                    <h2>ПРОЦЕСС СОЗДАНИЯ ПОКРЫТИЯ.</h2>
                    <p>
                    <p>
                        В зависимости от требований использования меняется и технология его нанесения. Для примера в декоре используется чистый полимер без наполнителей, дня достижения зеркального эффекта. В промышленности в полимер добавляется кварцевый песок для мисцности покрытия, однако кварцевый наполнитель частично лишает покрытия идеального зеркального эффекта. Процесс нанесения эпоксидного покрытия начинается с качественной подготовки основания, именно это влияет на долговечность покрытия. Как будь какое покрытие, от Компании ИВ БУД, все начинается с подготовки основания, в случае, если основание имеет дефекты и неровности мы выполняем
                        <a  style="color: #F5BF23" href="{{route('page','remont-styazhki')}}">ремонте и усилении основы</a>, процесс нанесения выглядит следующим образом, полимер наливается на основание и равномерно распределяется ракелем. Воздух которое образуется в результате нанесения покрытия на пол изгоняется игольчатым валиком. На финише мы получаем идеально ровное покрытие, с глянцевым эффектом.
                    </p>
                    <hr class="space" />
                    <div class="flexslider carousel outer-navs" data-options="minWidth:150,itemMargin:30,numItems:3,controlNav:false,directionNav:true">
                        <ul class="slides">
                            <li>
                                <a class="img-box lightbox  i-center mfp-iframe"  href="https://www.youtube.com/watch?v=rs0wh4bXtgo" data-lightbox-anima="fade-right">
                                    <i class="im-play"></i>
                                    <img src="../images/hd-77.png" alt="Создание наливного пола">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../images/hd-78.png" data-lightbox-anima="fade-right">
                                    <img src="../images/hd-78.png" alt="Как создается эпоксидный пол">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../images/hd-79.png" data-lightbox-anima="fade-right">
                                    <img src="../images/hd-79.png" alt="Этапы нанесения эпоксидного пола">
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
                        <li>Наличие гидроизоляции основания (для промышленных объектов);</li>
                        <li>Марка бетона 350-400;</li>
                        <li>Возможность не эксплуатировать покрытие в пределах 12-14 дней;</li>
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
                        <li>Обеспыленным промышленными пылесосами (2 этапа) - цена 25 грн / м2 (за 1 этап)</li>
                        <li>Грунтовка основания - цена 50 грн / м2 </li>
                        <li>Отсыпка кварца - цена 50 грн / м2 </li>
                        <li>Нанесение эпоксидной краски - цена 350 грн / м2</li>
                        <li>Нанесение финишного лака (2 слоя) - цена 100 грн / м2 (за 1 слой)</li>
                    </ul>
                    <hr>
                    <p>
                        Материалы:
                    </p>
                    <ul class="fa-ul text-s ul-dots">
                        <li>Финишный лак (матовый / полуглянец / глянец) - цена 200 грн / м2</li>
                        <li>Эпоксидный краска - цена 570 грн / м2 (в случае промышленности) - цена 370 грн / м2</li>
                        <li>Эпоксидный грунт - цена 380 грн / м2</li>
                        <li>Кварцевый песок - цена 100 грн / м2</li>
                    </ul>
                    <hr>
                    <p>
                    <p>
                        Общая стоимость работ, с учетом всех этапов будет составлять - 2000 грн / м2. В случае промышленного покрытия стоимость будет составлять - 1800 грн / м2. Также возможна скидка до 15%, при площади 500+.
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
