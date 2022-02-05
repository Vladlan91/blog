@extends('layouts.app')
@section('title', 'Декоративне кварцове покриття')
@section('meta', 'Декоративне кварцове покриття | ІВ БУД')
@section('keywords', 'Декоративне кварцове покриття | ІВ БУД')
@section('breadcrumbs')
@endsection
@section('content')
    <div class="header-title ken-burn-out white" data-parallax="scroll" data-natural-height="800" data-natural-width="1920" data-image-src="../images/hd-21.png">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="title-base text-left">
                        <hr class="anima" />
                        <h1>Декоративне кварцове покриття</h1>
                        <p>Одне з самих міцних покриттів, витримує до 4,5 т. на 1см2.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <ol class="breadcrumb b white">
                        <li><a style="color: white;" href="{{route('home')}}">Головна</a></li>
                        <li class="active" style="color: #F5BF23!important;">Декоративний кварц</li>
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
                                <li> <a href="#top">ДЕКОРАТИВНИЙ КВАРЦ</a></li>
                                <li> <a href="#top2">ПРОЦЕС СТВОРЕННЯ ПОКРИТТЯ</a></li>
                                <li><a href="#top3">ГАРАНТІЙНІ ЗОБОВ'ЯЗАННЯ</a></li>
                                <li><a href="#top4">ЦІНА РОБОТИ</a></li>
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
                    <h2>РІЗНОВИД КВАРЦОВИХ ПОКРИТТІВ.</h2>
                    <p>
                        Якщо стоїть завдання реалізувати підлогу для об’єкту з підвищеними експлуатаційними характеристиками, рекомендуємо декоративне кварцове покриття. Колір підлоги можна підібрати по каталогу RAL, методом фарбування піску. Декоративна привабливість – це відмітна риса кварцових покриттів, ось чому існують два напрямки використання покриття.
                    </p>
                    <ul class="fa-ul text-s ul-dots">
                        <li>декоративні кварцові покриття</li>
                        <li><a style="color: #F5BF23" href="{{route('page','promislove-kvarcove-pokrittya')}}">промислові кварцові покриття</a></li>
                    </ul>
                    <hr class="space m" />
                    <a name="top"></a>
                    <hr>
                    <h2>ДЕКОРАТИВНИЙ КВАРЦ.</h2>
                    <p>
                        Якщо ж стоїть завдання зробити декоративне покриття, яке виконуватиме свої функції десятки років, це саме те покриття, що вам необхідно. Воно надзвичайно зносостійке, та легко піддається декору, завдяки малюванню фракцій піску. Ваш декор не буде поверхневим і не стиратиметься, адже він буде настільки ж глибоким, як і сама підлога.
                    </p>
                    <hr class="space" />
                    <div class="flexslider carousel outer-navs" data-options="minWidth:150,itemMargin:30,numItems:3,controlNav:false,directionNav:true">
                        <ul class="slides">
                            <li>
                                <a class="img-box lightbox  i-center mfp-iframe"  href="https://www.youtube.com/watch?v=CEwM5O1bsz8" data-lightbox-anima="fade-right">
                                    <i class="im-play"></i>
                                    <img src="../prodgect/pr-35.png" alt="Кварцова підлога">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../images/hd-74.png" data-lightbox-anima="fade-right">
                                    <img src="../images/hd-74.png" alt="Підлога з кварцу">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../prodgect/pr-40.png" data-lightbox-anima="fade-right">
                                    <img src="../prodgect/pr-40.png" alt="Епоксидна кварцова підлога">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../prodgect/pr-36.png" data-lightbox-anima="fade-right">
                                    <img src="../prodgect/pr-36.png" alt="Кварцова епоксидна підлога">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox i-center mfp-iframe" href="https://www.youtube.com/watch?v=26PRbMRD1S0">
                                    <i class="im-play"></i>
                                    <img src="../prodgect/pr-5.png" alt="Безшовне покриття">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../prodgect/pr-37.png" data-lightbox-anima="fade-right">
                                    <img src="../prodgect/pr-37.png" alt="Підлога для комерції">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../prodgect/pr-38.png" data-lightbox-anima="fade-right">
                                    <img src="../prodgect/pr-38.png" alt="Підлога в заклади">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../prodgect/pr-39.png" data-lightbox-anima="fade-right">
                                    <img src="../prodgect/pr-39.png" alt="Підлога в будинок">
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
                                    <i class="text-xl im-bowling"></i>
                                </div>
                                <div class="icon-box-cell">
                                    <label class="text-m">Стійкість до ударів</label>
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
                    <hr>
                    <a name="top2"></a>
                    <h2>ПРОЦЕС СТВОРЕННЯ ПОКРИТТЯ.</h2>
                    <p>
                    <p>
                        Кварцова підлога складається з декількох шарів кварцу та епоксиду. Як будь яке покриття, від Компанії ІВ БУД, все починається з підготовки основи, у випадку, якщо основа має дефекти та нерівності ми виконуємо
                        <a  style="color: #F5BF23" href="{{route('page','remont-styazhki')}}">ремонтування та посилення основи</a>, процес нанесення виглядає у такий спосіб, підлога шар за шаром накладається, попередньо правильно уклавши, прошліфувавши та обезпиливши кожен із шарів.

                        В кінцевому результаті отримується доволі товсте покриття, яке надійно захищає основу від зовнішніх механічних та хімічних впливів. Фінішний лак наноситься для додавання декоративних чи інших властивостей.
                    </p>

                    <hr class="space" />
                    <div class="flexslider carousel outer-navs" data-options="minWidth:150,itemMargin:30,numItems:3,controlNav:false,directionNav:true">
                        <ul class="slides">
                            <li>
                                <a class="img-box lightbox  i-center mfp-iframe"  href="https://www.youtube.com/watch?v=nnItSgER67Y" data-lightbox-anima="fade-right">
                                    <i class="im-play"></i>
                                    <img src="../images/hd-72.png" alt="Як створюється кварцова підлога">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../images/hd-70.png" data-lightbox-anima="fade-right">
                                    <img src="../images/hd-70.png" alt="Нанесення кварцового покриття">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../images/hd-73.png" data-lightbox-anima="fade-right">
                                    <img src="../images/hd-73.png" alt="Міцна безшовна підлога">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <hr class="space m" />
                    <p>
                        Фініш може бути різним, в залежності від вимог замовника.  Існують три стани фінішного покриття, а саме:
                    </p>
                    <ul class="fa-ul text-s ul-dots">
                        <li>матовий;</li>
                        <li>напівглянець;</li>
                        <li>глянець;</li>
                    </ul>
                    <a name="top3"></a>
                    <hr>
                    <h2>ГАРАНТІЙНІ ЗОБОВ'ЯЗАННЯ.</h2>
                    <p>
                        Існують 2 варіанти утримання вашого покриття в належному стані, які дадуть можливість зручно та безперешкод експлуатувати ваше покриття:
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
                        </tr>
                        </tbody>
                    </table>
                    <hr>
                    <h5>
                        2 роки гарантії на роботи
                    </h5>
                    при наступних умовах:
                    <ul class="fa-ul text-s ul-dots">
                        <li>Температура в приміщені в межах 17-20 ℃;</li>
                        <li>Температура основи в межах 12-15 ℃;</li>
                        <li>Марка бетону 350-400;</li>
                        <li>Можливість не експлуатувати покриття в межах 12-14 днів;</li>
                    </ul>
                    <p>
                        В інших випадках, навіть при невиконані хоча б одного пункту компанія ІВ БУД надає 1 рік гарантії.
                    </p>
                    <a name="top4"></a>
                    <hr>
                    <h2>ЦІНА РОБІТ.</h2>
                    <p>
                        Перелік робіт і матеріалів, які включає в себе покриття.
                    </p>
                    <p>
                        Етапи робіт:
                    </p>
                    <ul class="fa-ul text-s ul-dots">
                        <li>Шліфування основи </li>
                        <li>Обеспилення промисловими пилососами (2 етапи) </li>
                        <li>Грунтування основи (2 шари) </li>
                        <li>Відсипка кварцу (3 шари) </li>
                        <li>Нанесення епоксидного лаку </li>
                        <li>Нанесення фінішного лаку (2 шари) </li>
                    </ul>
                    <hr>
                    <p>
                        Матеріали:
                    </p>
                    <ul class="fa-ul text-s ul-dots">
                        <li>Фінішний  лак (матовий/напівглянець/глянець) </li>
                        <li>Eпоксидний лак </li>
                        <li>Eпоксидний грунт </li>
                        <li>Кварцовий пісок </li>
                    </ul>
                    <hr>
                    <p>
                    <p>
                        Загальна вартість робіт, з врахуванням всіх етапів складатиме 1500 грн/м2. При умові, що ваш бетон, при його нанесені, був провібрований і одного етапу шліфування основи було достатньо. Також можлива знижка до 15%, при площі 350+.
                    </p>
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
                                    <span><span class="counter" data-to="20" data-trigger="null">50</span> м2</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="section-empty bg-white">
                        <div class="col-md-12">
                            Компанія Ів Буд вже впродовж декількох років, окрім полімерних підлог, займається ремонтом топінгових покриттів, бетонних та напівсухих стяжок в таких містах:
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
