@extends('layouts.appru')
@section('title', 'Декоративные покрытия')
@section('meta', 'Декоративные покрытия | ИВ БУД')
@section('keywords', 'Декоративные покрытия | ИВ БУД')
@section('breadcrumbs')
@endsection
@section('content')
    <div class="header-title ken-burn-out white" data-parallax="scroll" data-natural-height="800" data-natural-width="1920" data-image-src="../images/hd-16.png">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="title-base text-left">
                        <hr class="anima" />
                        <h1>Декоративные покрытия</h1>
                        <p>Каждое покрытие уникальное по своему, понимая эксплуатационные характеристики вашего помещения, можно выбрать покрытие, которое прослужит вам на совесть.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <ol class="breadcrumb b white">
                        <li><a style="color: white;" href="{{route('home')}}">Главная</a></li>
                        <li class="active" style="color: #F5BF23!important;">Декоративные покрытия</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="section-empty">
        <div class="container content">
            <div class="row">
                <div class="col-md-3 col-sm-4">
                    <h2>Типы покрытий</h2>
                    <hr class="space m" />
                    <aside class="sidebar mi-menu">
                        <nav class="sidebar-nav">
                            <ul class="side-menu">
                                <li><a href="{{route('page','dekorativne-kvarcove-pokrittya')}}">Декоративный кварц</a></li>
                                <li><a href="{{route('page','mikrocement')}}">Микроцемент </a></li>
                                <li><a href="{{route('page','polimernij-mikrocement')}}">Полимерный микроцемент</a></li>
                                <li><a href="{{route('page','nalivna-pidloga')}}">Наливной пол</a></li>
                            </ul>
                        </nav>
                    </aside>
                    <hr class="space m" />
                    <div class="row">
                        <div class="col-md-12 boxed white">
                            <h4 class="text-color">Брошура</h4>
                            <hr class="space m" />
                            <p class="text-s">
                                Вся необхідна інформація, для того аби ви могли визначитись з типом покриття, яке вам необхідно.
                            </p>
                            <a href="#" class="btn-text text-color">Скачати брошуру</a>
                        </div>
                        <hr class="space l" />
                        <div class="col-md-12 boxed-inverse">
                            <h4>Допоможем обрати!</h4>
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
                    <h2>Уникальность покрытия.</h2>
                    <p>

                        Декоративные покрытия от компании ИВ БУД в основном делится на 4 основных типа, </p>
                    <ul class="fa-ul text-s ul-dots">
                        <li>Декоративный кварц</li>
                        <li>Микроцемент</li>
                        <li>Полимерный микроцемент</li>
                        <li>Наливной пол</li>
                    </ul>
                    <hr class="space m" />
                    <p>в зависимости от поставленных целей, добавление к материалу различных наполнителей, таких как кварц, флоки, чипсы и тд, создает большое разнообразие конечного результата.
                    </p>
                    <hr>
                    <h2># ДЕКОРАТИВНЫЙ КВАРЦ.</h2>
                    <p>

                        Если же стоит задача сделать декоративное покрытие, которое будет выполнять свои функции десятки лет, то опять же, возвращаемся к кварцевому покрытию. Оно чрезвычайно износостойкое и легко поддается декорированию, благодаря рисованию фракций песка. Ваш декор не будет поверхностным и не стираться, ведь он будет столь же глубоким, как и сам пол.
                    </p>
                    <p>
                        Цвет пола можно подобрать по каталогу RAL, методом окрашивания песка. Декоративная привлекательность - это отличительная черта кварцевых покрытий.
                    </p>
                    <a href="{{route('page','dekorativne-kvarcove-pokrittya')}}" class="btn btn-sm">Узнать больше</a>
                    <hr class="space" />
                    <div class="flexslider carousel outer-navs" data-options="minWidth:150,itemMargin:30,numItems:3,controlNav:false,directionNav:true">
                        <ul class="slides">
                            <li>
                                <a class="img-box lightbox  i-center mfp-iframe"  href="https://www.youtube.com/watch?v=CEwM5O1bsz8" data-lightbox-anima="fade-right">
                                    <i class="im-play"></i>
                                    <img src="../prodgect/pr-35.png" alt="Декоративный кварц">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../prodgect/pr-40.png" data-lightbox-anima="fade-right">
                                    <img src="../prodgect/pr-40.png" alt="Кварцевые полы">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../prodgect/pr-36.png" data-lightbox-anima="fade-right">
                                    <img src="../prodgect/pr-36.png" alt="Полы для учреждений">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox i-center mfp-iframe" href="https://www.youtube.com/watch?v=26PRbMRD1S0">
                                    <i class="im-play"></i>
                                    <img src="../prodgect/pr-5.png" alt="Полы для кафе">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../prodgect/pr-37.png" data-lightbox-anima="fade-right">
                                    <img src="../prodgect/pr-37.png" alt="Підлоги в будинок">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../prodgect/pr-38.png" data-lightbox-anima="fade-right">
                                    <img src="../prodgect/pr-38.png" alt="Полы в дом">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../prodgect/pr-39.png" data-lightbox-anima="fade-right">
                                    <img src="../prodgect/pr-39.png" alt="Эпоксидный кварц">
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
                                    <label class="text-m">Устойчивость к стиранию</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h2># Микроцемент.</h2>
                    <p>
                        Микроцемент - идеальное покрытие для обустройства декоративных полов и стен внутри помещений с четко выраженным текстурным эффектом типа «лофт».
                        Благодаря легкости в применении, универсальности и износостойкости этот материал идеально подходит для обустройства напольных покрытий, подвергающихся интенсивным нагрузкам в таких зонах, как магазины, кафе, рестораны, шоу-румы, а также участки, связанные с обустройства декоративных покрытий в секторе гражданского строительства.
                    </p>
                    <a href="{{route('page','mikrocement')}}" class="btn btn-sm">Узнать больше</a>
                    <hr class="space" />
                    <div class="flexslider carousel outer-navs" data-options="minWidth:150,itemMargin:30,numItems:3,controlNav:false,directionNav:true">
                        <ul class="slides">
                            <li>
                                <a class="img-box lightbox i-center mfp-iframe" href="https://www.youtube.com/watch?v=0IQZm5kjrZw">
                                    <i class="im-play"></i>
                                    <img src="../prodgect/pr-9.png" alt="Микроцемент">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../prodgect/pr-43.png" data-lightbox-anima="fade-right">
                                    <img src="../prodgect/pr-43.png" alt="Полимерный микроцемент">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox i-center mfp-iframe" href="https://www.youtube.com/watch?v=wOBe3XajaSg">
                                    <i class="im-play"></i>
                                    <img src="../prodgect/pr-41.png" alt="Микроцементни полы">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../prodgect/pr-44.png" data-lightbox-anima="fade-right">
                                    <img src="../prodgect/pr-44.png" alt="Полы из микроцементу">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../prodgect/pr-42.png" data-lightbox-anima="fade-right">
                                    <img src="../prodgect/pr-42.png" alt="Микроцементни покрытия">
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
                                    <i class="text-xl im-arrow-inside"></i>
                                </div>
                                <div class="icon-box-cell">
                                    <label class="text-m">Нанесение на стены</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="icon-box">
                                <div class="icon-box-cell">
                                    <i class="text-xl im-boot"></i>
                                </div>
                                <div class="icon-box-cell">
                                    <label class="text-m">Устойчивость к стиранию</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h2># Полимерный микроцемент.</h2>
                    <p>
                        Полимерный микроцемент - это декоративное покрытие на основе цемента, полимеров на водной основе, добавок и минеральных пигментов. Отличается от обычного микроцементу, отсутствием резкой пятнистости, потертости и текстуры, которую создает шпатель, присущей лофт стилю. Отличие достигнута за счет изменения финишного слоя покрытия.
                    </p>
                    <p>
                        Этот материал идеально подходит как для внутренних поверхностей, наносится на полы, стены, потолки и т.д. И самое главное - это полностью бесшовное покрытие! Отсутствие швов облегчает уборку и обслуживание.
                        Предоставляет своим помещением уникальный, индивидуальный характер, благодаря различным структурам (крупным, средним или тонким), большом разнообразии цветов, различных лаковых покрытий (матовый, сатиновый или глянец).
                    </p>
                    <a href="{{route('page','polimernij-mikrocement')}}" class="btn btn-sm">Узнать больше</a>
                    <hr class="space" />
                    <div class="flexslider carousel outer-navs" data-options="minWidth:150,itemMargin:30,numItems:3,controlNav:false,directionNav:true">
                        <ul class="slides">
                            <li>
                                <a class="img-box lightbox  i-center mfp-iframe"  href="https://www.youtube.com/watch?v=77TPxKNqAI4" data-lightbox-anima="fade-right">
                                    <i class="im-play"></i>
                                    <img src="../prodgect/pr-8.png" alt="Микроцементи в стиле лофт">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../prodgect/pr-46.png" data-lightbox-anima="fade-right">
                                    <img src="../prodgect/pr-46.png" alt="Микроцемент на стены">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox  i-center mfp-iframe"  href="https://www.youtube.com/watch?v=dmBBaKTeMHY" data-lightbox-anima="fade-right">
                                    <i class="im-play"></i>
                                    <img src="../prodgect/pr-45.png" alt="Микроцемент на стены">
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
                                    <i class="text-xl im-arrow-inside"></i>
                                </div>
                                <div class="icon-box-cell">
                                    <label class="text-m">Нанесение на стены</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="icon-box">
                                <div class="icon-box-cell">
                                    <i class="text-xl im-boot"></i>
                                </div>
                                <div class="icon-box-cell">
                                    <label class="text-m">Устойчивость к стиранию</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h2># НАЛИВНОЙ ПОЛ.</h2>
                    <p>
                        Нанесение полимерного покрытия не предусматривает стыков или деформационных швов. Можно использовать в помещениях любых размеров.</p>
                    <p>
                        Один материал и разный результат.
                        Классический способ, позволяющий достичь глянцивой поверхности, но возможен и другой вариант, гладкая и в то же время матовая структура. Покрытие подходит для применения в помещениях с повышенной влажностью, в ванной комнате, на кухне, душевой кабине, зонах у бассейна.
                    </p>
                    <a href="{{route('page','nalivna-pidloga')}}" class="btn btn-sm">Узнать больше</a>
                    <hr class="space" />
                    <div class="flexslider carousel outer-navs" data-options="minWidth:150,itemMargin:30,numItems:3,controlNav:false,directionNav:true">
                        <ul class="slides">
                            <li>
                                <a class="img-box lightbox  i-center mfp-iframe"  href="https://www.youtube.com/watch?v=dhQrsJ0wNhg" data-lightbox-anima="fade-right">
                                    <i class="im-play"></i>
                                    <img src="../prodgect/pr-3.png" alt="Наливна підлога">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../prodgect/pr-47.png" data-lightbox-anima="fade-right">
                                    <img src="../prodgect/pr-47.png" alt="Безшовна підлога">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../prodgect/pr-48.png" data-lightbox-anima="fade-right">
                                    <img src="../prodgect/pr-48.png" alt="Епоксидна наливна підлога">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../prodgect/pr-26.png" data-lightbox-anima="fade-right">
                                    <img src="../prodgect/pr-26.png" alt="Наливна епоксидна підлога">
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
                                    <label class="text-m">Устойчивость к стиранию</label>
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
