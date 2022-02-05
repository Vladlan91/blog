@extends('layouts.app')
@section('title', 'Ремонт бетонних стяжок')
@section('meta', 'Ремонт бетонних стяжок | ІВ БУД')
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
                        <h1>Ремонт бетонних стяжок</h1>
                        <p>В усьому світі бетон захищають від вологи, хімічного впливу та тріщин полімерами, типу епоксидної смоли.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <ol class="breadcrumb b white">
                        <li><a style="color: white;" href="{{route('home')}}">Головна</a></li>
                        <li class="active" style="color: #F5BF23!important;">Ремонт стяжки</li>
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
                                <li> <a href="#top2">РЕМОНТ БЕТОНУ</a></li>
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
                    <h2>ТИПИ СТЯЖОК.</h2>
                    <p>
                        Різновид стяжок, доступний в будівельному ринку, досить різноманітний, такі як цементно-піщані, бетонні, вапняні, гіпсові, керамзитові, арболітові і тд. Розглянемо найбільш популярні типи стяжок:
                    </p>
                    <ul class="fa-ul text-s ul-dots">
                        <li>бетонні стяжки;</li>
                        <li>напівсухі стяжки;</li>
                    </ul>
                    <p>
                        Вони мають свої переваги та недоліки, тому пропонуємо розглянути кожну з них окремо.
                    </p>
                    <hr class="space m" />
                    <a name="top"></a>
                    <hr>
                    <h2>БЕТОННІ СТЯЖКИ</h2>
                    <p>
                        Одне з найміцніших покриттів. Славиться своєю надійністю, та довговічністю. Недоліки, її вага, у новобудовах, забудовник не використовує даний вид покриття, оскільки воно суттєво збільшує навантаження на конструкцію. Тому даний вид покриття використовується, виключно, у промисловості. Дане покриття, як і у випадку з напівсухою стяжкою, не стійкий до вологи, солей. Бетона стяжка може служити десятки років, при умові нанесення поверх захисного покриття. Захисним покриттям можуть бути полімери/кристалізатори.</p>
                    <p>
                        Проте навіть таке покриття з часом руйнується, стирається фінішне захисне покриття, стяжка починає пилити, утворюються кратери, вибоїни, тріщини.
                    </p>
                    <hr class="space" />
                    <div class="flexslider carousel outer-navs" data-options="minWidth:150,itemMargin:30,numItems:3,controlNav:false,directionNav:true">
                        <ul class="slides">
                            <li>
                                <a class="img-box lightbox" href="../images/hd-45.png" data-lightbox-anima="fade-right">
                                    <img src="../images/hd-45.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../images/hd-46.png" data-lightbox-anima="fade-right">
                                    <img src="../images/hd-46.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../images/hd-47.png" data-lightbox-anima="fade-right">
                                    <img src="../images/hd-47.png" alt="">
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
                        Якщо у вас невелика площа, а дефектна ділянка складає не більше 30% від загальної площі, економічнішим варіантом буде провести її ремонт, а не повну заміну, пояснемо чому. Так як з роками відбувся процес карбонізації бетону, заливати нове покриття, поверх староого, не створюючи адгезійного мосту, є неправильним рішенням. Повний демонтаж і заливання нового обійдеться вам в межах 450-550 грн/м2. В такий же кошторис вам обійдеться створення адгезійного мосту і заливання нового бетону поверх, проте потрібно враховувати, що товщина нового шару повина бути не менша 7-10 см., що також не завжди підходить замовнику. Ще потрібно враховувати, що сам по собі бетон служить недовго, якщо на об'єкті існують агресивні чинники для бетону, такі як:
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
                        Захисний фінішний шар вам обійдеться в межах 350 грн/м2, сумарний результат маємо 800 - 900 грн/м2. Зафксували ціну в пам'яті і рухаємось далі, перейдемо до процесу ремонту бетону і його ціни.
                    </p>
                    <a name="top2"></a>
                    <hr>
                    <h2>РЕМОНТ БЕТОННИХ СТЯЖОК.</h2>
                    <p>
                        Все розпочинається з обеспилення основи, вся площа проходиться промисловими пилососами, для відкриття пор. З роками будь який бетон руйнується, від процесу карбонізації він стає крихким, шліфуючи таке покриття створюються ще більші кратери, так як каміння, як потрапляє під алмази шліфувальної машинки, замість того аби зашліфовуватись, навпаки виривається з основи, створюючи за собою кратери. Тому перед шліфуванням ми покриваємо епоксидним грунтом, яке зміцнює покриття, процес шліфування після цього стає більш ефективним.
                    </p>
                    <p>
                        Після шліфування, основа знову обеспилюється і готується до повторного грунтування. Прогрунтувавши основу ми відсипаємо кварцовий пісок, який покривається товщиною 0,5-1,0 мм. перекриваючи собою всі мікротріщини і невеликі кратери. Ось так ми отримуємо основу з якою вже можна приступити до наступного етапу, а саме, ремонтування дефектних місць бетону.
                    </p>
                    <p>
                        Проблемні ділянки мають зазвичаю глубину від 0,5-1,5 см., відповідно, звичайна відсипка кварцового піску тут вже не допоможить, тому, в таких випадка виготовляється ремонтна суміш, на основі полімерів, якою запаковується проблемна зона.
                    </p>
                    <hr class="space" />
                    <div class="flexslider carousel outer-navs" data-options="minWidth:150,itemMargin:30,numItems:3,controlNav:false,directionNav:true">
                        <ul class="slides">

                            <li>
                                <a class="img-box lightbox" href="../images/hd-47.png" data-lightbox-anima="fade-right">
                                    <img src="../images/hd-47.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../images/hd-48.png" data-lightbox-anima="fade-right">
                                    <img src="../images/hd-48.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../images/hd-49.png" data-lightbox-anima="fade-right">
                                    <img src="../images/hd-49.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../images/hd-50.png" data-lightbox-anima="fade-right">
                                    <img src="../images/hd-50.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../images/hd-51.png" data-lightbox-anima="fade-right">
                                    <img src="../images/hd-51.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../images/hd-52.png" data-lightbox-anima="fade-right">
                                    <img src="../images/hd-52.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../images/hd-53.png" data-lightbox-anima="fade-right">
                                    <img src="../images/hd-53.png" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <hr class="space m" />
                    <p>
                        Фініш може бути різним, в залежності від вимог замовника. Якщо зовнішній вигляд - важливий елемент у вашій сфері діяльності, всю ділянку промальовоють полімером, в кольорі, якщо ж ні, то відремонтоване покриття покривається фінішним грунтом, обидва варіанти надають покриттю безліч позитивних властивостеє:
                    </p>
                    <ul class="fa-ul text-s ul-dots">
                        <li>зручність в прибиранні;</li>
                        <li>відсутність пилу;</li>
                        <li>стійкість до хімії;</li>
                        <li>стійкість до води;</li>
                        <li>підвищену стійкість до механічних навантажень;</li>
                    </ul>
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
                        <li>Можливість не експлуатувати відремонтовану ділянку в межах 12-14 днів</li>
                        <li>Без розриву процесу ремонту ділянки (коли ремонтуюча ділянка не робиться частинами)</li>
                    </ul>
                    <p>
                        В інших випадках, навіть при невиконані хоча б одного пункту компанія ІВ БУД надає 1 рік гарантії.
                    </p>
                    <a name="top4"></a>
                    <hr>
                    <h2>ЦІНА РОБІТ.</h2>
                    <p>
                        Оскільки, кожний об'єкт унікальний, а вартість його ремонту залежить від велечини вибоїн і їх кількості, ціна формується на основі трьох складових, кількість ремонтної суміші, якої пішло на ремонтування проблемних ділянок, укріплення самої площі і фінішне покриття, яке обрав замовник.
                    </p>
                    <ul class="fa-ul text-s ul-dots">
                        <li>укріплення бетоної стяжки/<a  style="color: #F5BF23!important;" href="{{route('page','promislove-obezpilennya')}}">ПРОМЕСЛОВЕ ОБЕСПИЛЕННЯ</a> - ціна 350 грн/м2</li>
                        <li>укріплення бетоної стяжки в кольорі/<a style="color: #F5BF23" href="{{route('page','epoksidnij-okras')}}">ПРОМИСЛОВИЙ ОКРАС</a> - ціна 600 грн/м2</li>
                        <li>ремонт бетоної стяжки - вартість за 1 кг. ремонтної суміші з вартістю її нанесення. - ціна 150 грн/кг</li>
                    </ul>
                    <br>
                    * для ремонтування 1 м2, при глубині вибоїни в 1 см. необхідно 10 кг. ремонтної суміші - 1500 грн.;
                    <hr>
                    <p>
                        Якщо проблемні місця вашого об'єкту складають значно більше чим 30%, доцільнішим варіантом буде демонтаж і залиття нового бетону, але не забувайте, якщо хочите щоб воно вам служило не один десяток років, обовязково захистіть його фініш полімером.
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
