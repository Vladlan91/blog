@extends('layouts.app')
@section('title', 'Промислове обезпилення')
@section('meta', 'Промислове обезпилення | ІВ БУД')
@section('keywords', 'Промислове обезпилення | ІВ БУД')
@section('breadcrumbs')
@endsection
@section('content')
    <div class="header-title ken-burn-out white" data-parallax="scroll" data-natural-height="800" data-natural-width="1920" data-image-src="../images/hd-66.png">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="title-base text-left">
                        <hr class="anima" />
                        <h1>Промислове обезпилення</h1>
                        <p>В усьому світі бетон захищають від вологи, хімічного впливу та тріщин полімерами, типу епоксидної смоли.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <ol class="breadcrumb b white">
                        <li><a style="color: white;" href="{{route('home')}}">Головна</a></li>
                        <li class="active" style="color: #F5BF23!important;">Промислове обезпилення</li>
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
                                <li> <a href="#top">БЕТОННІ СТЯЖКИ</a></li>
                                <li> <a href="#top2">ПРОМИСЛОВЕ ОБЕЗПИЛЕННЯ</a></li>
                                <li><a href="#top3">ГАРАНТІЙНІ ЗОБОВ'ЯЗАННЯ</a></li>
                                <li><a href="#top4">ЦІНА РОБОТИ</a></li>
                            </ul>
                        </nav>
                    </aside>
                    <hr class="space m" />
                    <div class="row">
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
                    <h2>ПРО ПРОМИСЛОВЕ ОБЕЗПИЛЕННЯ.</h2>
                    <p>
                        Один з самих економічних варіантів отримати міцне покриття, яке витримає хімічні та механічні навантаження. Проте, такий метод захисту доступний лише для нового бетону. В залежності, чи є у вас гідроізоляція чи ні, існують два варіанти посилиння бетону:
                    </p>
                    <ul class="fa-ul text-s ul-dots">
                        <li>посилення епоксидами на водній основі (якщо гідроізоляція відсутня);</li>
                        <li>посилення чистими епоксидами (при наявності гідроізоляції);</li>
                    </ul>
                    <hr class="space m" />
                    <p>
                        Якщо ваше покриття вже було в експлуатації і має дефекти, тріщини, вибоїни, пропонуємо ознайомитись з послугою
                        <a style="color: #F5BF23" href="{{route('page','remont-styazhki')}}">РЕМОНТ БЕТОННИХ СТЯЖОК</a>, після усунення всіх дефектів, фінішним результатом якого - промислове обеспилення.
                    </p>
                    <hr class="space m" />
                    <a name="top"></a>
                    <hr>
                    <h2>БЕТОННІ СТЯЖКИ</h2>
                    <p>
                        Одне з найміцніших покриттів. Славиться своєю надійністю, та довговічністю. Недоліки, її вага, у новобудовах, забудовник не використовує даний вид покриття, оскільки воно суттєво збільшує навантаження на конструкцію. Тому даний вид покриття використовується, виключно, у промисловості. Дане покриття, як і у випадку з напівсухою стяжкою, не стійкий до вологи, солей. Бетонна стяжка може служити десятки років, при умові нанесення поверх захисного покриття. Захисним покриттям можуть бути полімери/кристалізатори.</p>
                    <p>
                        Без захисного покриття, бетон з часом руйнується, починає пилити, утворюються кратери, вибоїни, тріщини.
                    </p>
                    <hr class="space" />
                    <div class="flexslider carousel outer-navs" data-options="minWidth:150,itemMargin:30,numItems:3,controlNav:false,directionNav:true">
                        <ul class="slides">
                            <li>
                                <a class="img-box lightbox" href="../images/hd-45.png" data-lightbox-anima="fade-right">
                                    <img src="../images/hd-45.png" alt="обробка бетону">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../images/hd-46.png" data-lightbox-anima="fade-right">
                                    <img src="../images/hd-46.png" alt="пропітка бетону">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../images/hd-47.png" data-lightbox-anima="fade-right">
                                    <img src="../images/hd-47.png" alt="посилення бетону">
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
                    <hr>
                    <p>
                        Бетона стяжка служить недовго, якщо на об'єкті існують агресивні чинники, такі як:
                    </p>
                    <ul class="fa-ul text-s ul-dots">
                        <li>солі;</li>
                        <li>масла;</li>
                        <li>хімія;</li>
                        <li>вода;</li>
                        <li>не стала температура приміщення;</li>
                    </ul>
                    <hr class="space m" />
                    <p>
                        Захисний фінішний шар обов'зкова умова для збереження бетону.
                    </p>
                    <a name="top2"></a>
                    <hr>
                    <h2>ПРОЦЕС ПРОМИСЛОВОГО ОБЕЗПИЛЕННЯ.</h2>
                    <p>
                        Все розпочинається з шліфування основи, будь який бетон має, так зване, цементне молочко, якого потрібно позбавитись, оскільки воно є крихким і послабить адгезію основи. Після шліфування основи, вся площа обезпилюється промисловими пилососами, для відкриття пор, аби епоксид якомога краще проник в пори бетону.
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
                                    <img src="../images/hd-66.png" alt="обробка бетону">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../images/hd-68.png" data-lightbox-anima="fade-right">
                                    <img src="../images/hd-68.png" alt="бетонний топінг">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <hr class="space m" />
                    <p>
                        Фініш може бути різним, в залежності від вимог замовника. Промислове обезпилення включає в себе прозорий фінішний лак, відповідно, ваше покриття виглядатиме, як мокрий бетон, якщо вам хлтілось аби покриття мало якийсь певний колір, пропонуємо ознайомитись з послогою <a style="color: #F5BF23" href="{{route('page','epoksidnij-okras')}}">ПРОМИСЛОВИЙ ОКРАС</a>.
                    </p>
                    <ul class="fa-ul text-s ul-dots">
                        <li>зручність в прибиранні;</li>
                        <li>відсутність пилу;</li>
                        <li>стійкість до хімії;</li>
                        <li>стійкість до води;</li>
                        <li>підвищену стійкість до механічних навантажень;</li>
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
                        <li>Температура в приміщені в межах 17-20 ℃ ;</li>
                        <li>Температура основи в межах 12-15 ℃</li>
                        <li>Марка бетону 350-400</li>
                        <li>Наявність гідроізоляції основи;</li>
                        <li>Можливість не експлуатувати відремонтовану ділянку в межах 12-14 днів</li>
                    </ul>
                    <p>
                        В інших випадках, навіть при невиконані хоча б одного пункту компанія ІВ БУД надає 1 рік гарантії.
                    </p>
                    <a name="top4"></a>
                    <hr>
                    <h2>ЦІНА РОБІТ.</h2>
                    <p>
                        Перелік робіт і матеріалів, які включає в себе промислове обезпилення.
                    </p>
                    <p>
                        Етапи робіт:
                    </p>
                    <ul class="fa-ul text-s ul-dots">
                        <li>Шліфування основи </li>
                        <li>Обеспилення промисловими пилососами </li>
                        <li>Нанесення епоксидного лаку </li>
                    </ul>
                    <hr>
                    <p>
                        Матеріали:
                    </p>
                    <ul class="fa-ul text-s ul-dots">
                        <li>Eпоксидний лак </li>
                    </ul>
                    <hr>
                    <p>
                        Загальна вартість робіт, з врахуванням всіх етапів складатиме 350 грн/м2. При умові, що ваш бетон, при його нанесені, був провібрований і одного етапу шліфування основи було достатньо.
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
                                    <span><span class="counter" data-to="20" data-trigger="null">100</span> м2</span>
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
