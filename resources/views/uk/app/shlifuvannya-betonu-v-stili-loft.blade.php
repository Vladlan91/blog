@extends('layouts.app')
@section('title', 'Шліфування/шліфовка бетону в стилі loft')
@section('meta', 'Шліфування/шліфовка бетону в стилі loft | ІВ БУД')
@section('keywords', 'Полімерний мікроцемент | ІВ БУД')
@section('breadcrumbs')
@endsection
@section('content')
    <div class="header-title ken-burn-out white" data-parallax="scroll" data-natural-height="800" data-natural-width="1920" data-image-src="../images/hd-58.png">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="title-base text-left">
                        <hr class="anima" />
                        <h1>Шліфування/шліфовка бетону в стилі loft</h1>
                        <p>Лофт це напрямок в архітектурі та дизайні, який раніше був призначений суто для складських приміщень.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <ol class="breadcrumb b white">
                        <li><a style="color: white;" href="{{route('home')}}">Головна</a></li>
                        <li class="active" style="color: #F5BF23!important;">Ремонт  стяжок</li>
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
                                <li> <a href="#top">ШЛІФУВАННЯ БЕТОНУ</a></li>
                                <li> <a href="#top2">ДЕКОРУВАННЯ/ЗМІНА КОЛЬОРУ</a></li>
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
                    <h2>ПРО стиль Loft.</h2>
                    <p>
                        Твердження, що Loft стиль - це економічний варіант ремонту, не відповідає дійсності, адже для того аби досягнути бажаного результату  Loft, потрібно все спланувати, ще на етапі будівництва, від вибору якісного бетону, якісної опалобки і дотримання якісного залиття моноліту. Тільки тоді, ваш монолітний бетон матиме красивий вигляд. Проте, бувають випадки коли замовляють послуги дизайну на етапі завершеного будівництва, а стан бетону не відповідає вимогам, які ставить перед собою замовник, тоді у пригоді стають послуги в професійній обробці і декоруванні бетону. Копманія ІВ БУД надає наступні послуги в обробці бетону:
                    </p>
                    <ul class="fa-ul text-s ul-dots">
                        <li>шліфування;</li>
                        <li>ремонтування, вирівнювання геометрій;</li>
                        <li>колорування бетонних конструкцій;</li>
                        <li>обезпилення/покриття гідрофобами;</li>
                        <li>лакування/матування полімерами;</li>
                    </ul>
                    <p>
                        Комплекс цих робіт дасть змогу досягнути бажаного результату.
                    </p>
                    <div class="flexslider carousel outer-navs" data-options="minWidth:150,itemMargin:30,numItems:3,controlNav:false,directionNav:true">
                        <ul class="slides">
                            <li>
                                <a class="img-box lightbox" href="../images/hd-58.png" data-lightbox-anima="fade-right">
                                    <img src="../images/hd-58.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../images/hd-59.png" data-lightbox-anima="fade-right">
                                    <img src="../images/hd-59.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../images/hd-60.png" data-lightbox-anima="fade-right">
                                    <img src="../images/hd-60.png" alt="">
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
                                    <i class="text-xl im-aquarius-2"></i>
                                </div>
                                <div class="icon-box-cell">
                                    <label class="text-m">Стійкість до води</label>
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
                    <a name="top"></a>
                    <hr>
                    <h2>Шліфування бетону</h2>
                    <p>
                        Всі бетонні конструкції піддаються шліфуванню, підлога і сходи, для прикладу, шліфуються алмазами, стіни та стеля фібрами. Ціна робіт залежить від складності роботи, від стану бетону і від типу шліфування. Шліфування умовно можливо розділити на три напрямки:
                    </p>
                    <ul class="fa-ul text-s ul-dots">
                        <li>шліфування стелі/стін/колок;</li>
                        <li>шліфування сходів;</li>
                        <li>шліфування підлоги;</li>
                    </ul>
                    <hr class="space" />
                    <p>
                       Для того аби зрозуміти, що робота виконана якісно, на бетоні не повинно бути слідів шліфування, а саме царапен від болгарки і тд. Бетон повинен бути очищений від плям та будівельного бруду, проте, якщо є сліди корозії, які просочились через весь бетон, такі дефекти неможливо усунути.
                    </p>
                    <hr class="space m" />
                    <a name="top2"></a>
                    <hr>
                    <h2>ДЕКОРУВАННЯ/ЗМІНА КОЛЬОРУ.</h2>
                    <p>
                        Після шліфування, основа знову обеспилюється і готується до грунтування. На даному етапі в грунт можна додавати колоровочну пасту, яка надає бетону більш привабливого вигляду.
                    </p>
                    <hr class="space" />
                    <div class="flexslider carousel outer-navs" data-options="minWidth:150,itemMargin:30,numItems:3,controlNav:false,directionNav:true">
                        <ul class="slides">
                            <li>
                                <a class="img-box lightbox" href="../images/hd-65.png" data-lightbox-anima="fade-right">
                                    <img src="../images/hd-65.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../images/hd-64.png" data-lightbox-anima="fade-right">
                                    <img src="../images/hd-64.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../images/hd-60.png" data-lightbox-anima="fade-right">
                                    <img src="../images/hd-60.png" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <hr class="space m" />
                    <p>
                        У випадку підлоги та сходів, покриття покривається лаком, який може бути глянцевим чи матовим, для більшої стійкості до механічних навантажень. Покриття здобуває наступні характеристики:
                    </p>
                    <ul class="fa-ul text-s ul-dots">
                        <li>відсутність пилу;</li>
                        <li>стійкість до води;</li>
                        <li>підвищену стійкість до механічних навантажень;</li>
                    </ul>
                    <a name="top4"></a>
                    <hr>
                    <h2>ЦІНА РОБІТ.</h2>
                    <p>
                        Як зазначалось раніше, ціна залежить від стану бетону і кінцевого результату який потрібно досягнути. Нижче перелік послуг які можуть бути необхідними на вашому об'єкті.
                    </p>
                    <hr>
                    <p>
                        Вартість робіт:
                    </p>
                    <ul class="fa-ul text-s ul-dots">
                        <li>Шліфування підлоги - ціна 150 грн/м2</li>
                        <li>Шліфування стелі/стін/колон - ціна 250 грн/м2</li>
                        <li>Шліфування сходів - ціна 450 грн/м2</li>
                        <li>Зароблення вибоїн ремонтними сумішами - ціна 75 грн/кг.</li>
                        <li>Грунтування гідрофобами - ціна 50 грн/м2</li>
                        <li>Колорування бетону  - ціна 50 грн/м2</li>
                        <li>Нанесення епоксидного лаку - ціна 50 грн/м2</li>
                    </ul>
                    <hr>
                    <p>
                        Вартість матеріалів:
                    </p>
                    <ul class="fa-ul text-s ul-dots">
                        <li>Ремонтні суміші - ціна 75 грн/кг.</li>
                        <li>Гідрофоби - ціна 50 грн/м2</li>
                        <li>Колорант для бетону  - ціна 50 грн/м2</li>
                        <li>Епоксидний лак - ціна 120 грн/м2</li>
                    </ul>
                    <hr>
                    <br>
                    * кінцева ціна для стелі/стін/колон - 350 грн/м2, а у випадку зміни кольору - 450 грн/м2;<br>
                    * кінцева ціна для підлоги - 470 грн/м2, а у випадку зміни кольору - 570 грн/м2;<br>
                    * кінцева ціна для сходів - 720 грн/м2, а у випадку зміни кольору - 820 грн/м2;<br>
                    <hr>
                    <p>
                        Якщо бетон має дефекти чи вибоїни і потребує вирівнювання геометрії, ми використовуємо ремонтні суміші, варстість яких складає 150 грн/кг. з урахуванням вартості їх нанесення.
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
