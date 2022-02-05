@extends('layouts.app')
@section('title', 'Ремонт бетонного топінгу')
@section('meta', 'Ремонт бетонного топінгу | ІВ БУД')
@section('keywords', 'Полімерний мікроцемент | ІВ БУД')
@section('breadcrumbs')
@endsection
@section('content')
    <div class="header-title ken-burn-out white" data-parallax="scroll" data-natural-height="800" data-natural-width="1920" data-image-src="../images/hd-24.png">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="title-base text-left">
                        <hr class="anima" />
                        <h1>Ремонт бетонного топінгу</h1>
                        <p>В усьому світі бетон захищають від вологи, хімічного впливу та тріщин полімерами, типу епоксидної смоли.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <ol class="breadcrumb b white">
                        <li><a style="color: white;" href="{{route('home')}}">Головна</a></li>
                        <li class="active" style="color: #F5BF23!important;">Ремонт топінгу</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="section-empty">
        <div class="container content">
            <div class="row">
                <div class="col-md-3 col-sm-4">
                    <h2>Навігація по сторінці</h2>
                    <hr class="space m" />
                    <aside class="sidebar mi-menu">
                        <nav class="sidebar-nav">
                            <ul class="side">
                                <li> <a href="#top">ЩО ТАКЕ ТОПІНГ</a></li>
                                <li> <a href="#top2">ОСНОВНІ ЕТАПИ</a></li>
                                <li><a href="#top3">ГАРАНТІЙНІ ЗОБОВ'ЯЗАННЯ</a></li>
                                <li><a href="#top4">ЦІНА РОБОТИ</a></li>
                            </ul>
                        </nav>
                    </aside>
                    <hr class="space m" />
                    <div class="row">
{{--                        <div class="col-md-12 boxed white">--}}
{{--                            <h4 class="text-color">Брошура</h4>--}}
{{--                            <hr class="space m" />--}}
{{--                            <p class="text-s">--}}
{{--                                Вся необхідна інформація, для того аби ви могли визначитись з типом покриття, яке вам необхідно.--}}
{{--                            </p>--}}
{{--                            <a href="#" class="btn-text text-color">Скачати брошуру</a>--}}
{{--                        </div>--}}
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
                    <h2>Слабкі місця бетону.</h2>
                    <p>
                        Саме міцне покриття на виробництві чи в складах, це бетон, проте щоб прослужити Вам декілька десятків років, він повинен бути захищеним. В усьому світі бетон захищають від вологи, хімічного впливу та тріщин полімерами, типу епоксидної смоли. Багато хто на виробництві економить на цій стадії, або купує приміщення вже із зруйнованим бетоном, що тоді? Рішення є.
                    </p>
                    <hr class="space m" />
                    <a name="top"></a>
                    <hr>
                    <h2>ЩО ТАКЕ ТОПІНГ?</h2>
                    <p>
                        Бетонний топінг відрізняється від бетонних стяжок, тим, що на фініші додається кристалізатор і затирається машинками, так званими, вертольотами, утворюючи своєрідний міцніший верхній шар в 3-5 мм. Це робиться для того, щоб покриття стало міцніше та гладкіше. За кордоном практично вже не використовують таке покриття, тому, що воно фінансово тільки трішки дешевше за захищений полімерами бетон, проте термін експлуатації значно нижчий.</p>
                    <hr class="space" />
                    <div class="flexslider carousel outer-navs" data-options="minWidth:150,itemMargin:30,numItems:3,controlNav:false,directionNav:true">
                        <ul class="slides">
                            <li>
                                <a class="img-box lightbox" href="../images/hd-35.png" data-lightbox-anima="fade-right">
                                    <img src="../images/hd-35.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../images/hd-36.png" data-lightbox-anima="fade-right">
                                    <img src="../images/hd-36.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../images/hd-37.png" data-lightbox-anima="fade-right">
                                    <img src="../images/hd-37.png" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <hr class="space m" />
                    <h5>Недоліки покриття</h5>
                    <hr class="space m" />
                    <div class="row text-left">
                        <div class="col-md-4">
                            <div class="icon-box">
                                <div class="icon-box-cell">
                                    <i class="text-xl im-aquarius-2"></i>
                                </div>
                                <div class="icon-box-cell">
                                    <label class="text-m">Нестійкість до води</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="icon-box">
                                <div class="icon-box-cell">
                                    <i class="text-xl im-bio-hazard"></i>
                                </div>
                                <div class="icon-box-cell">
                                    <label class="text-m">Нестійкість до кислот</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="icon-box">
                                <div class="icon-box-cell">
                                    <i class="text-xl im-over-time2"></i>
                                </div>
                                <div class="icon-box-cell">
                                    <label class="text-m">Нестійкість до - темпаратур</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a name="top2"></a>
                    <hr>
                    <h2>ОСНОВНІ ЕТАПИ.</h2>
                    <p>
                       Компанія ІВ БУД розпочинає свою роботу з аналізу стану бетону і дефектації об'єму робіт. Після чого формується план-графік виконання, оскільки зупинка роботи складського приміщення може призвести до втрат коштів підприємства. Після узгодження всіх моментів ми приступаємо до виконання. <br>Коротко про технологію ремонту:</p>
                    <ul class="fa-ul text-s ul-dots">
                        <li>вирізання дефектів штраборізами;</li>
                        <li>обезпилення;</li>
                        <li>грунтування спеціальним епоксидом;</li>
                        <li>нанесення піску для адгезії;</li>
                        <li>закладання (трамбування) ремонтної суміші;</li>
                        <li>лакування, або замальовування епоксидними сполуками;</li>
                        <li>нарізання деформаційних швів, там де це необхідно;</li>
                        <li>заповнення швів герметиком;</li>
                    </ul>

                    <hr class="space" />
                    <div class="flexslider carousel outer-navs" data-options="minWidth:150,itemMargin:30,numItems:3,controlNav:false,directionNav:true">
                        <ul class="slides">
                            <li>
                                <a class="img-box lightbox  i-center mfp-iframe"  href="https://www.youtube.com/watch?v=5IvXkIpwzPw" data-lightbox-anima="fade-right">
                                    <i class="im-play"></i>
                                    <img src="../images/hd-31.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../images/hd-32.png" data-lightbox-anima="fade-right">
                                    <img src="../images/hd-32.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../images/hd-38.png" data-lightbox-anima="fade-right">
                                    <img src="../images/hd-38.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../images/hd-33.png" data-lightbox-anima="fade-right">
                                    <img src="../images/hd-33.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox  i-center mfp-iframe"  href="https://www.youtube.com/watch?v=oOhG7IR1zNA" data-lightbox-anima="fade-right">
                                    <i class="im-play"></i>
                                    <img src="../images/hd-39.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../images/hd-34.png" data-lightbox-anima="fade-right">
                                    <img src="../images/hd-34.png" alt="">
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
                    <a name="top3"></a>
                    <hr>
                    <h2>ГАРАНТІЙНІ ЗОБОВ'ЯЗАННЯ.</h2>
                    <p>
                        Існують 3 варіанти утримання вашого покриття в належному стані, які дадуть можливість зручно та безперешкод експлуатувати ваше покриття:
                    </p>
                    <hr class="space m" />
                    <table class="grid-table border-table full-border-table text-left">
                        <tbody>
                        <tr>
                            <td>
                                <h2 class="text-m">1 рік гарантії на роботи</h2>
                                <hr class="space s">
                            </td>
                            <td>
                                <h2 class="text-m">2 роки гарантії на роботи</h2>
                                <hr class="space s">
                            </td>
                            <td>
                                <h2 class="text-m">Договір на постійне обслуговування</h2>
                                <hr class="space s">
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <hr>
                    <h5>
                        2 роки гарантії на роботи
                    </h5>
                    при наступних умовах:
                    <ul class="fa-ul text-s ul-dots">
                        <li>Температура в приміщені в межах 17-20 ℃ ;</li>
                        <li>Температура основи в межах 12-15 ℃</li>
                        <li>Можливість не експлуатувати відремонтовану ділянку в межах 12-14 днів</li>
                        <li>Без розриву процесу ремонту ділянки (коли ремонтуюча ділянка не робиться частинами)</li>
                    </ul>
                    <p>
                        В інших випадках, навіть при невиконані хоча б одного пункту, компанія ІВ БУД надає 1 рік гарантії.
                    </p>
                    <hr>
                    <table class="grid-table border-table grid-table-xs-12 text-left">
                        <tbody>
                        <tr>
                            <td>
                                <h3>Договір на постійне обслуговування</h3>
                            </td>
                            <td>
                                <hr class="space m visible-xs">
                                <p>
                                    Чому договір на постійне обслуговування вашого топінгово покриття самий вигідний і доцільний варіант співпраці з нами?
                                </p>
                                <a href="{{route('page','dogovir-na-postijne-obslugovuvannya')}}" class="btn btn-sm">Дізнатись більше</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <a name="top4"></a>
                    <hr>
                    <h2>ЦІНА РОБІТ.</h2>
                    <p>
                        Ремонт топінгового покриття має два підходи по калькуляції робіт, оплата робіт за 1 метр погонний і 1 метр квадратний.
                    </p>
                    <ul class="fa-ul text-s ul-dots">
                        <li>1 метр погонний - ширина ремонтуючої ділянки менша 30 см. - ціна 1400 грн/м.п</li>
                        <li>1 метр квадратний - ширина ремонтуючої ділянки більше 30 см. - ціна 3000 грн/м2</li>
                    </ul>
                    <hr>
                    <div class="row vertical-row">
                        <div class="col-md-1">
                        </div>
                        <div class="col-md-5">
                            <p class="progress-label">Мінімальне замовлення</p>
                        </div>
                        <div class="col-md-6">
                            <div class="progress">
                                <div class="progress-bar" data-progress="20" style="width: 20%;" data-trigger="null">
                                    <span><span class="counter" data-to="20" data-trigger="null">50</span> м2/м.п</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="section-empty bg-white">
                        <div class="col-md-12">
                            Компанія Ів Буд вже впродовж декількох років, окрім полімерних підлог, займається ремонтом топінгових покриттів, в таких містах:
                        </div>
                        <div class="container content">
                            <div class="row">
                                <div class="col-md-1"></div>
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
                                        Перегляньте в яких регіонах доступна дана послуга від компанії ІВ БУД.
                                    </p>
                                    <a href="{{route('page','contact')}}" class="btn btn-sm">Контакти</a>
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
