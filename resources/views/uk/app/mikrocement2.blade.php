@extends('layouts.app')
@section('title', 'Мікроцементні покриття')
@section('meta', 'Мікроцементні покриття | ІВ БУД')
@section('keywords', 'Мікроцементні покриття | ІВ БУД')
@section('breadcrumbs')
@endsection
@section('content')
    <div class="header-title ken-burn-out white" data-parallax="scroll" data-natural-height="800" data-natural-width="1920" data-image-src="../header/2.png">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="title-base text-left">
                        <hr class="anima" />
                        <h1>Мікроцементні покриття</h1>
                        <p>Сучасне і красиве покриття, зробить уют у вашій оселі.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <ol class="breadcrumb b white">
                        <li><a style="color: white;" href="{{route('home')}}">Головна</a></li>
                        <li class="active" style="color: #F5BF23!important;">Мікроцементні покриття</li>
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
                                <li> <a href="#top">МІКРОЦЕМЕНТНІ ПОКРИТТЯ</a></li>
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
                        <li>покриття різкої плямистості (LOFT)</li>
                        <li><a style="color: #F5BF23" href="{{route('page','polimernij-mikrocement')}}">покриття помірної плямистості/однотоної текстури</a></li>
                    </ul>
                    <p>
                        Різниця полягає в технології досягнення одного чи іншого варіанту, досягається виключно зміни фінішного шару, а всі підготовчі роботи і нанесення основного шару, який перешкоджає швидкому зношенню покриття чи винекненню тріщин, залишається незмінним.
                    </p>
                    <hr class="space m" />
                    <a name="top"></a>
                    <hr>
                    <h2>МІКРОЦЕМЕНТНІ ПОКРИТТЯ.</h2>
                    <p>
                        Мікроцемент - це декоративне покриття на основі цементу, у нашому випадку ще й полімерів на водній основі, добавок і мінеральних пігментів. Чіткі риси -  різкі плямистості, потертості і текстура, яку створює шпатель, притаманної лофт стилю. Цей матеріал ідеально підходить як для внутрішніх поверхонь, наноситься на підлоги, стіни, стелі і т.д. І саме головне - це повністю безшовне покриття! Відсутність швів полегшує прибирання та обслуговування. Надає своїм приміщенням унікальний, індивідуальний характер, завдяки різним структурам (великим, середнім або тонким), великій різноманітності кольорів, різних лакових покриттів (матовий, сатиновий або глянець). Текстура даного покриття дає можливість облаштовувати підлоги, які піддаються інтенсивним навантаженням в таких зонах, як магазини, кафе, ресторани, шоу-руми, а також ділянки, які пов'язані з облаштування декоративних покриттів в секторі цивільного будівництва.
                    </p>
                    <hr class="space" />
                    <div class="flexslider carousel outer-navs" data-options="minWidth:150,itemMargin:30,numItems:3,controlNav:false,directionNav:true">
                        <ul class="slides">
                            <li>
                                <a class="img-box lightbox" href="../prodgect/pr-43.png" data-lightbox-anima="fade-right">
                                    <img src="../prodgect/pr-43.png" alt="Мікроцемент на стіни">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox i-center mfp-iframe" href="https://www.youtube.com/watch?v=wOBe3XajaSg">
                                    <i class="im-play"></i>
                                    <img src="../prodgect/pr-41.png" alt="Мікроцемент на підлогу">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../prodgect/pr-44.png" data-lightbox-anima="fade-right">
                                    <img src="../prodgect/pr-44.png" alt="Мікроцементні покриття">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../prodgect/pr-42.png" data-lightbox-anima="fade-right">
                                    <img src="../prodgect/pr-42.png" alt="Підлога з мікроцементу">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox i-center mfp-iframe" href="https://www.youtube.com/watch?v=0IQZm5kjrZw">
                                    <i class="im-play"></i>
                                    <img src="../prodgect/pr-9.png" alt="Мікроцемент">
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
                        <a  style="color: #F5BF23" href="{{route('page','remont-styazhki')}}">ремонтування та посилення основи</a>, процес нанесення виглядає у такий спосіб, мікроцемент наноситься на основу, створюючи текстуру, погоджену замовником, таких етапів нанесення - 3. Між кожним етапом мікроцементне покриття прошліфовується і пропитується гідрофобом, для надання еластичності і стійкості до води. На останньому етапі ми отримуємо ідеально рівне покриття.
                    </p>

                    <hr class="space" />
                    <div class="flexslider carousel outer-navs" data-options="minWidth:150,itemMargin:30,numItems:3,controlNav:false,directionNav:true">
                        <ul class="slides">
                            <li>
                                <a class="img-box lightbox  i-center mfp-iframe"  href="https://www.youtube.com/watch?v=PJFABwWRML8" data-lightbox-anima="fade-right">
                                    <i class="im-play"></i>
                                    <img src="../images/hd-70.png" alt="Нанесення мікроцементу">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../images/hd-80.png" data-lightbox-anima="fade-right">
                                    <img src="../images/hd-80.png" alt="Майстри з мікроцементу">
                                </a>
                            </li>
                            <li>
                            <a class="img-box lightbox  i-center mfp-iframe"  href="https://www.youtube.com/watch?v=tgM7YVXTPl8" data-lightbox-anima="fade-right">
                                <i class="im-play"></i>
                                <img src="../images/hd-81.png" alt="Підлога з мікроцементу">
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
                        Всі роботи, які включає в себе декоративне покриття і їхня вартість, вказано окремо.
                    </p>
                    <p>
                        Вартість робіт:
                    </p>
                    <ul class="fa-ul text-s ul-dots">
                        <li>Шліфування основи - 150 грн/м2</li>
                        <li>Обеспилення промисловими пилососами (2 етапи) - ціна 25 грн/м2 (за 1 етап)</li>
                        <li>Грунтування основи - ціна 50 грн/м2</li>
                        <li>Відсипка кварцу - ціна 50 грн/м2</li>
                        <li>Нанесення мікроцементу (3 шари) - ціна 100 грн/м2 (за 1 шар)</li>
                        <li>Нанесення фінішного лаку (2 шари) - ціна 100 грн/м2 (за 1 шар)</li>
                    </ul>
                    <hr>
                    <p>
                        Вартість матеріалів:
                    </p>
                    <ul class="fa-ul text-s ul-dots">
                        <li>Фінішний  лак (матовий/напівглянець/глянець) - ціна 200 грн/м2</li>
                        <li>Мікроцемент - ціна 280 грн/м2</li>
                        <li>Eпоксидний грунт - ціна 120 грн/м2</li>
                        <li>Кварцовий пісок - ціна 100 грн/м2</li>
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
