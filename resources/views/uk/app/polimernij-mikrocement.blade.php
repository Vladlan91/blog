@extends('layouts.app')
@section('title', 'Полімерний мікроцемент покриття')
@section('meta', 'Полімерний мікроцемент | ІВ БУД')
@section('keywords', 'Полімерний мікроцемент | ІВ БУД')
@section('breadcrumbs')
@endsection
@section('content')
    <div class="header-title ken-burn-out white" data-parallax="scroll" data-natural-height="800" data-natural-width="1920" data-image-src="../header/3.png">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="title-base text-left">
                        <hr class="anima" />
                        <h1>Полімерний мікроцемент</h1>
                        <p>Сучасне і красиве покриття, зробить уют у вашій оселі.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <ol class="breadcrumb b white">
                        <li><a style="color: white;" href="{{route('home')}}">Головна</a></li>
                        <li class="active" style="color: #F5BF23!important;">Полімерний мікроцемент</li>
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
                                <li> <a href="#top">ПОЛІМЕРНИЙ МІКРОЦЕМЕНТ</a></li>
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
                    <h2>РІЗНОВИД ПОКРИТТІВ.</h2>
                    <p>
                        Замовлення по мікроцементу, які ми отримуємо упродовж всього часу, можна умовно розділити на типи:
                    </p>
                    <ul class="fa-ul text-s ul-dots">
                        <li><a style="color: #F5BF23" href="{{route('page','mikrocement')}}">покриття різкої плямистості (LOFT)</a></li>
                        <li>покриття помірної плямистості, однотоноа текстура</li>
                    </ul>
                    <p>
                        Різниця полягає в технології досягнення одного чи іншого варіанту, досягається виключно зміни фінішного шару, а всі підготовчі роботи і нанесення основного шару, який перешкоджає швидкому зношенню покриття чи винекненню тріщин, зелешається незмінним.
                    </p>
                    <hr class="space m" />
                    <a name="top"></a>
                    <hr>
                    <h2>МІКРОЦЕМЕНТНІ ПОКРИТТЯ.</h2>
                    <p>
                        Полімерний мікроцемент - це декоративне покриття на основі цементу, у нашому випадку ще й полімерів на водній основі, добавок і мінеральних пігментів. Чіткі риси -  покриття помірної плямистості, однотоноа текстура. Цей матеріал ідеально підходить як для внутрішніх поверхонь, наноситься на підлоги, стіни, стелі і т.д. І саме головне - це повністю безшовне покриття! Відсутність швів полегшує прибирання та обслуговування. Надає своїм приміщенням унікальний, індивідуальний характер, завдяки різним структурам (великим, середнім або тонким), великій різноманітності кольорів, різних лакових покриттів (матовий, сатиновий або глянець). Текстура даного покриття дає можливість облаштовувати підлоги, які піддаються інтенсивним навантаженням в таких зонах, як магазини, кафе, ресторани, шоу-руми, а також ділянки, які пов'язані з облаштування декоративних покриттів в секторі цивільного будівництва.
                    </p>
                    <hr class="space" />
                    <div class="flexslider carousel outer-navs" data-options="minWidth:150,itemMargin:30,numItems:3,controlNav:false,directionNav:true">
                        <ul class="slides">
                            <li>
                                <a class="img-box lightbox" href="../prodgect/pr-1.png" data-lightbox-anima="fade-right">
                                    <img src="../prodgect/pr-1.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox i-center mfp-iframe" href="https://www.youtube.com/watch?v=77TPxKNqAI4">
                                    <i class="im-play"></i>
                                    <img src="../prodgect/pr-8.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../prodgect/pr-51.png" data-lightbox-anima="fade-right">
                                    <img src="../prodgect/pr-51.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox i-center mfp-iframe" href="https://www.youtube.com/watch?v=dmBBaKTeMHY">
                                    <i class="im-play"></i>
                                    <img src="../prodgect/pr-9.png" alt="">
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
                        Як будь яке покриття, від Компанії ІВ БУД, все починається з підготовки основи, у випадку, якщо основа має дефекти та нерівності ми виконуємо
                        <a  style="color: #F5BF23" href="{{route('page','remont-styazhki')}}">ремонтування та посилення основи</a>, процес нанесення виглядає у такий спосіб, мікроцемент наноситься на основу створюючи текстуру, погоджену замовником, таких етапів нанесення - 3. Між кожним етапом мікроцементне покриття прошліфовується і пропитується гідрофобом, для надання еластичності і стійкості до води. На останньому етапі ми отримуємо ідеально рівне покриття.
                    </p>

                    <hr class="space" />
                    <div class="flexslider carousel outer-navs" data-options="minWidth:150,itemMargin:30,numItems:3,controlNav:false,directionNav:true">
                        <ul class="slides">
                            <li>
                                <a class="img-box lightbox  i-center mfp-iframe"  href="https://www.youtube.com/watch?v=PJFABwWRML8" data-lightbox-anima="fade-right">
                                    <i class="im-play"></i>
                                    <img src="../images/hd-70.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../images/hd-80.png" data-lightbox-anima="fade-right">
                                    <img src="../images/hd-80.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox  i-center mfp-iframe"  href="https://www.youtube.com/watch?v=tgM7YVXTPl8" data-lightbox-anima="fade-right">
                                    <i class="im-play"></i>
                                    <img src="../images/hd-81.png" alt="">
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
                        <li>Грунтування основи </li>
                        <li>Відсипка кварцу </li>
                        <li>Нанесення мікроцементу (3 шари)</li>
                        <li>Нанесення фінішного лаку (2 шари) </li>
                    </ul>
                    <hr>
                    <p>
                        Матеріали:
                    </p>
                    <ul class="fa-ul text-s ul-dots">
                        <li>Фінішний  лак (матовий/напівглянець/глянець)</li>
                        <li>Мікроцемент </li>
                        <li>Eпоксидний грунт </li>
                        <li>Кварцовий пісок </li>
                    </ul>
                    <hr>
                    <p>
                    <p>
                        Загальна вартість робіт, з врахуванням всіх етапів складатиме 1500 грн/м2. Якщо ваш проект не передбачає плінтусів, зароблення демферної стрічки і вирівнювання стик підлоги з стіною - 150грн/м.п. Також можлива знижка до 10%, при площі 350+.
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
