@extends('layouts.appru')
@section('title', 'Промышленные покрытия ИВ БУД')
@section('meta', 'Промышленные покрытия ИВ БУД')
@section('keywords', 'Промышленные покрытия ИВ БУД')
@section('breadcrumbs')
@endsection
@section('content')
    <div class="header-title ken-burn-out white" data-parallax="scroll" data-natural-height="800" data-natural-width="1920" data-image-src="../images/hd-18.png">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="title-base text-left">
                        <hr class="anima" />
                        <h1>Промышленные покрытия</h1>
                        <p>
                            Каждое покрытие уникальное по своему, понимая эксплуатационные характеристики вашего помещения, можно выбрать покрытие, которое прослужит вам на совесть.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <ol class="breadcrumb b white">
                        <li><a style="color: white;" href="{{route('home')}}">Главная</a></li>
                        <li class="active" style="color: #F5BF23!important;">Промышленные покрытия</li>
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
                                <li><a href="{{route('page','promislove-obezpilennya')}}">Промышленный обеспыл.</a></li>
                                <li><a href="{{route('page','poliuretanova-pidloga')}}">Полиуретановый пол</a></li>
                                {{--                            <li><a href="#">Поліуритан-цемент</a></li>--}}
                                <li><a href="{{route('page','promislove-kvarcove-pokrittya')}}">Промышленный кварц</a></li>
                                <li><a href="{{route('page','epoksidnij-okras')}}">Эпоксидный окрас</a></li>
                                <li><a href="{{route('page','nalivna-pidloga')}}">Наливной пол</a></li>
                            </ul>
                        </nav>
                    </aside>
                    <hr class="space m" />
                    <div class="row">
                        {{--                    <div class="col-md-12 boxed white">--}}
                        {{--                        <h4 class="text-color">Брошура</h4>--}}
                        {{--                        <hr class="space m" />--}}
                        {{--                        <p class="text-s">--}}
                        {{--                            Вся необхідна інформація, для того аби ви могли визначитись з типом покриття, яке вам необхідно.--}}
                        {{--                        </p>--}}
                        {{--                        <a href="#" class="btn-text text-color">Скачати брошуру</a>--}}
                        {{--                    </div>--}}
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
                    <h2>Типы и назначения покрытий.</h2>
                    <p>
                        Промышленные полы от компании ИВ БУД в основном делятся на 5 основных типов, в зависимости от поставленных целей.
                    </p>
                    <ul class="fa-ul text-s ul-dots">
                        <li>Промышленный обеспыл</li>
                        <li>Полиуретановый пол</li>
                        {{--                    <li>Поліуритан-цемент</li>--}}
                        <li>Промышленный кварц</li>
                        <li>Эпоксидный окрас</li>
                        <li>Наливной пол</li>
                    </ul>
                    <hr class="space m" />
                    <p>
                        Все эти виды покрытия мы рассмотрим поэтапно, однако стоит запомнить первый и наверное, самый важный этап для создания любого покрытия это правильная основа. Для любого полимера нужно использовать бетон, минимум марки 300, а еще лучше 400. Далее нужно хорошо вибрировать раствор, предварительно обеспечив гидроизоляцией основу.
                    </p>
                    <hr>
                    <h2># Промышленный обеспыл</h2>
                    <p>
                        Специалисты компании Ив Буд на данном этапе проверяет влажность бетона, которая не должна превышать 3-4% для эпоксидных и кварцевых покрытий и 7% для полиуретановых. Также проверяют основу на отрыв, сила которого в среднем должна быть не ниже 1,5 МПа. Если все эти данные соответствуют требованиям, тогда нужно приступать к этапу шлифовки или дробоструення бетона. На данном этапе забирается цементное молочко, после чего все трещины и выбоины зарабатываются ремонтной смесью.
                    </p>
                    <p>
                        Основа еще раз прошлифовуеться и наступает этап грунтования бетона. На покрытие наносится эпоксидный грунт, укрепляет его и придает ему лучшие характеристики. После грунтовки основания бетон стойки к влажности и механических нагрузок, перестает пилить и удобный в убираемые.
                    </p>
                    <a href="{{route('page','promislove-obezpilennya')}}" class="btn btn-sm">Узнать больше</a>
                    <hr class="space" />
                    <div class="flexslider carousel outer-navs" data-options="minWidth:150,itemMargin:30,numItems:3,controlNav:false,directionNav:true">
                        <ul class="slides">
                            <li>
                                <a class="img-box lightbox" href="../images/hd-25.png" data-lightbox-anima="fade-right">
                                    <img src="../images/hd-25.png" alt="Промышленный обеспыл">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../images/hd-26.png" data-lightbox-anima="fade-right">
                                    <img src="../images/hd-26.png" alt="Промышленные полы">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../images/hd-27.png" data-lightbox-anima="fade-right">
                                    <img src="../images/hd-27.png" alt="Полы для промышленности">
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
                                    <i class="text-xl im-opera-house"></i>
                                </div>
                                <div class="icon-box-cell">
                                    <label class="text-m">Отсутствие пыли</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="icon-box">
                                <div class="icon-box-cell">
                                    <i class="text-xl im-aquarius-2"></i>
                                </div>
                                <div class="icon-box-cell">
                                    <label class="text-m">Удобное в уборке</label>
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
                    <h2># ПРОМЫШЛЕННЫЙ КВАРЦ.</h2>
                    <p>
                        Кварцевый промышленный пол состоит из нескольких слоев кварца и эпоксида. Пол слой за слоем накладывается, предварительно правильно заключив, прошлифувавшы и обезпилившы каждый из слоев.

                        В конечном итоге получается довольно толстое покрытие, которое надежно защищает основу от внешних механических и химических воздействий. Финишный лак наносится для добавления декоративных или иных свойств.
                    </p>
                    <a href="{{route('page','promislove-kvarcove-pokrittya')}}" class="btn btn-sm">Узнать больше</a>
                    <hr class="space" />
                    <div class="flexslider carousel outer-navs" data-options="minWidth:150,itemMargin:30,numItems:3,controlNav:false,directionNav:true">
                        <ul class="slides">
                            <li>
                                <a class="img-box lightbox  i-center mfp-iframe"  href="https://www.youtube.com/watch?v=qyMdLycry64" data-lightbox-anima="fade-right">
                                    <i class="im-play"></i>
                                    <img src="../prodgect/pr-2.png" alt="Промышленный кварц">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../prodgect/pr-17.png" data-lightbox-anima="fade-right">
                                    <img src="../prodgect/pr-17.png" alt="Кварц">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox i-center mfp-iframe" href="https://www.youtube.com/watch?v=26PRbMRD1S0">
                                    <i class="im-play"></i>
                                    <img src="../prodgect/pr-5.png" alt="Кварцевые полы">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../prodgect/pr-15.png" data-lightbox-anima="fade-right">
                                    <img src="../prodgect/pr-15.png" alt="Полы для промышленности">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../prodgect/pr-16.png" data-lightbox-anima="fade-right">
                                    <img src="../prodgect/pr-16.png" alt="Антивандальные полы">
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
                                    <i class="text-xl im-bio-hazard"></i>
                                </div>
                                <div class="icon-box-cell">
                                    <label class="text-m">Устойчивость к кислотам</label>
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
                    <h2># Эпоксидный окрас.</h2>
                    <p>
                        Данный вид пола используется на складах, заводах и в промышленности, где в основном являются пешие нагрузки, ведь эпоксидная пол передает всю свою нагрузку на бетон. Существует много вариантов создания данного покрытия, в зависимости от потребностей, это и химическая стойкость, антистатическая и другие, но мы покажем основной процесс создания.
                        Итак, по готовой прогрунтованную основе наносится несколько слоев эпоксидной краски. Важно помнить, что эпоксидная краска ложится по бетону не так, как обычная, поэтому для выполнения данного покрытия, нужно иметь определенные навыки.</p>
                    <p>

                        Финишным этапом в создании эпоксидной промышленных полов является рисование разметки, когда это нужно и нанесения финишного лака. Финишный лак может быть многих видов в зависимости от потребностей и примесей к нему. Промышленную эпоксидную пол можно эксплуатировать уже через 12 дней, она полностью вступает в своих эксплуатационных свойств через 14 дней.
                    </p>
                    <a href="{{route('page','epoksidnij-okras')}}" class="btn btn-sm">Узнать больше</a>
                    <hr class="space" />
                    <div class="flexslider carousel outer-navs" data-options="minWidth:150,itemMargin:30,numItems:3,controlNav:false,directionNav:true">
                        <ul class="slides">
                            <li>
                                <a class="img-box lightbox  i-center mfp-iframe"  href="https://www.youtube.com/watch?v=yuRjX92kF9Y" data-lightbox-anima="fade-right">
                                    <i class="im-play"></i>
                                    <img src="../prodgect/pr-19.png" alt="Эпоксидный окрас">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../prodgect/pr-18.png" data-lightbox-anima="fade-right">
                                    <img src="../prodgect/pr-18.png" alt="Химстойкие покрытия">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../prodgect/pr-23.png" data-lightbox-anima="fade-right">
                                    <img src="../prodgect/pr-23.png" alt="Химстойкие покрытия">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox i-center mfp-iframe" href="https://www.youtube.com/watch?v=O6anxtWIJv4">
                                    <i class="im-play"></i>
                                    <img src="../prodgect/pr-20.png" alt="Полы в цвете">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox i-center mfp-iframe" href="https://www.youtube.com/watch?v=SeBe8zxJDTo" data-lightbox-anima="fade-right">
                                    <i class="im-play"></i>
                                    <img src="../prodgect/pr-22.png" alt="Полы для пищевой промышленности">
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
                                    <i class="text-xl im-bio-hazard"></i>
                                </div>
                                <div class="icon-box-cell">
                                    <label class="text-m">Устойчивость к кислотам</label>
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
                    <h2># Полиуретановые полы.</h2>
                    <p>
                        Полиуретановые полы используется в основном в медицинских учреждениях, офисах, или в индустрии где возможно растяжение и деформация швов, ведь полиуретан является эластичным и шумоподавляючим и экологически чистым.</p>
                    <p>
                        Полиуретановый пол делается довольно просто по подготовленной основе. Смесь проливается и растягивается специальными Ракель по плоскости, далее наносится полиуретановый финишный лак, который как и в случае с эпоксидами, добавляет полезных свойств покрытию.
                    </p>
                    <a href="{{route('page','poliuretanova-pidloga')}}" class="btn btn-sm">Узнать больше</a>
                    <hr class="space" />
                    <div class="flexslider carousel outer-navs" data-options="minWidth:150,itemMargin:30,numItems:3,controlNav:false,directionNav:true">
                        <ul class="slides">
                            <li>
                                <a class="img-box lightbox  i-center mfp-iframe"  href="https://www.youtube.com/watch?v=oxnlK3xYODY" data-lightbox-anima="fade-right">
                                    <i class="im-play"></i>
                                    <img src="../prodgect/pr-24.png" alt="Полиуретановые полы">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../prodgect/pr-25.png" data-lightbox-anima="fade-right">
                                    <img src="../prodgect/pr-25.png" alt="Підлога для медицини ">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../prodgect/pr-26.png" data-lightbox-anima="fade-right">
                                    <img src="../prodgect/pr-26.png" alt="Пол медицины">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <hr class="space m" />
                    <h5>Властивості покриття</h5>
                    <hr class="space m" />
                    <div class="row text-left">
                        <div class="col-md-4">
                            <div class="icon-box">
                                <div class="icon-box-cell">
                                    <i class="text-xl im-plant"></i>
                                </div>
                                <div class="icon-box-cell">
                                    <label class="text-m">Антибактериальное покрытие</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="icon-box">
                                <div class="icon-box-cell">
                                    <i class="text-xl im-plaster"></i>
                                </div>
                                <div class="icon-box-cell">
                                    <label class="text-m">Сертифицированный для медицины</label>
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
                    <h2># Наливной пол.</h2>
                    <p>
                        Покрытие по своим свойствам такое же, как эпоксидный окрас, однако толщина данного покрытия колеблется в пределах 3-5 мм, а эпоксидный окрас имеет толщину в пределах 0,8 - 1,5 мм. Также, для увеличения толщины покрытия, добавляется кварцевый песок, в пропорциях 1: 2, кварц оседает, соответственно не влияет на эстетический вид.
                    </p>
                    <p>
                        Данное покрытие обладает большим запасом прочности, в сравнение с тонкослойным окрасом, соответственно и долгий срок эксплуатации.
                    </p>
                    <a href="{{route('page','nalivna-pidloga')}}" class="btn btn-sm">Узнать больше</a>
                    <hr class="space" />
                    <div class="flexslider carousel outer-navs" data-options="minWidth:150,itemMargin:30,numItems:3,controlNav:false,directionNav:true">
                        <ul class="slides">
                            <li>
                                <a class="img-box lightbox" href="../prodgect/pr-27.png" data-lightbox-anima="fade-right">
                                    <img src="../prodgect/pr-27.png" alt="Наливна підлога">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../prodgect/pr-28.png" data-lightbox-anima="fade-right">
                                    <img src="../prodgect/pr-28.png" alt="Підлога без стиків">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../prodgect/pr-29.png" data-lightbox-anima="fade-right">
                                    <img src="../prodgect/pr-29.png" alt="Дзеркальна підлога">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../prodgect/pr-30.png" data-lightbox-anima="fade-right">
                                    <img src="../prodgect/pr-30.png" alt="Наливна епоксидна підлога">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../prodgect/pr-31.png" data-lightbox-anima="fade-right">
                                    <img src="../prodgect/pr-31.png" alt="Епоксидні підлоги">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <hr class="space m" />
                    <h5>Властивості покриття</h5>
                    <hr class="space m" />
                    <div class="row text-left">
                        <div class="col-md-4">
                            <div class="icon-box">
                                <div class="icon-box-cell">
                                    <i class="text-xl im-arrow-around"></i>
                                </div>
                                <div class="icon-box-cell">
                                    <label class="text-m">Стійкість до навантажень</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="icon-box">
                                <div class="icon-box-cell">
                                    <i class="text-xl im-bio-hazard"></i>
                                </div>
                                <div class="icon-box-cell">
                                    <label class="text-m">Стійкість до кислот</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="icon-box">
                                <div class="icon-box-cell">
                                    <i class="text-xl im-boot"></i>
                                </div>
                                <div class="icon-box-cell">
                                    <label class="text-m">Стійкість до стирання</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--                <hr>--}}
                    {{--                <h2># ПОЛІУРИТАН-ЦЕМЕНТ.</h2>--}}
                    {{--                <p>--}}
                    {{--                    Поліуритан-цемент поєднує в собі найбільш вимогливі експлуатаційні характеристики, включаючи стійкість до удару, стирання, агресивних хімічних речовин та термічного удару. Отримайте всю систему для найкращих результатів.--}}
                    {{--                </p>--}}
                    {{--                <a href="#" class="btn btn-sm">Дізнатись більше</a>--}}
                    {{--                <hr class="space" />--}}
                    {{--                <div class="flexslider carousel outer-navs" data-options="minWidth:150,itemMargin:30,numItems:3,controlNav:false,directionNav:true">--}}
                    {{--                    <ul class="slides">--}}
                    {{--                        <li>--}}
                    {{--                            <a class="img-box lightbox" href="../prodgect/pr-29.png" data-lightbox-anima="fade-right">--}}
                    {{--                                <img src="../prodgect/pr-32.png" alt="">--}}
                    {{--                            </a>--}}
                    {{--                        </li>--}}
                    {{--                        <li>--}}
                    {{--                            <a class="img-box lightbox" href="../prodgect/pr-30.png" data-lightbox-anima="fade-right">--}}
                    {{--                                <img src="../prodgect/pr-33.png" alt="">--}}
                    {{--                            </a>--}}
                    {{--                        </li>--}}
                    {{--                        <li>--}}
                    {{--                            <a class="img-box lightbox" href="../prodgect/pr-31.png" data-lightbox-anima="fade-right">--}}
                    {{--                                <img src="../prodgect/pr-34.png" alt="">--}}
                    {{--                            </a>--}}
                    {{--                        </li>--}}
                    {{--                    </ul>--}}
                    {{--                </div>--}}
                    {{--                <hr class="space m" />--}}
                    {{--                <h5>Властивості покриття</h5>--}}
                    {{--                <hr class="space m" />--}}
                    {{--                <div class="row text-left">--}}
                    {{--                    <div class="col-md-4">--}}
                    {{--                        <div class="icon-box">--}}
                    {{--                            <div class="icon-box-cell">--}}
                    {{--                                <i class="text-xl im-cable-car"></i>--}}
                    {{--                            </div>--}}
                    {{--                            <div class="icon-box-cell">--}}
                    {{--                                <label class="text-m">Стійкість до темпаратур</label>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    {{--                    <div class="col-md-4">--}}
                    {{--                        <div class="icon-box">--}}
                    {{--                            <div class="icon-box-cell">--}}
                    {{--                                <i class="text-xl im-bio-hazard"></i>--}}
                    {{--                            </div>--}}
                    {{--                            <div class="icon-box-cell">--}}
                    {{--                                <label class="text-m">Стійкість до кислот</label>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    {{--                    <div class="col-md-4">--}}
                    {{--                        <div class="icon-box">--}}
                    {{--                            <div class="icon-box-cell">--}}
                    {{--                                <i class="text-xl im-boot"></i>--}}
                    {{--                            </div>--}}
                    {{--                            <div class="icon-box-cell">--}}
                    {{--                                <label class="text-m">Стійкість до стирання</label>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    {{--                </div>--}}
                    {{--                <hr>--}}
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection



