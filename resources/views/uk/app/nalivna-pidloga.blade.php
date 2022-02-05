@extends('layouts.app')
@section('title', 'Наливна підлога')
@section('meta', 'Наливна підлога | ІВ БУД')
@section('keywords', 'Наливна підлога | ІВ БУД')
@section('breadcrumbs')
@endsection
@section('content')
    <div class="header-title ken-burn-out white" data-parallax="scroll" data-natural-height="800" data-natural-width="1920" data-image-src="../prodgect/pr-3.png">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="title-base text-left">
                        <hr class="anima" />
                        <h1>Епоксидна наливна підлога</h1>
                        <p>Мабуть єдине покриття, яке має великий спектр використання у різних типах приміщень.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <ol class="breadcrumb b white">
                        <li><a style="color: white;" href="{{route('home')}}">Головна</a></li>
                        <li class="active" style="color: #F5BF23!important;">Наливна підлога</li>
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
                                <li> <a href="#top">НАЛИВНА ПІДЛОГА</a></li>
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
                    <h2>ПРО ПОКРИТТЯ.</h2>
                    <p>
                        Полімер -  одне із самих стійких матеріалів до хімії, бруду та кислот, а його безшовність спрощує догляд за покриттям. Такі характеристики дають необмежені можливості використання у різних типах приміщень, а саме:
                    </p>
                    <ul class="fa-ul text-s ul-dots">
                        <li><a style="color: #F5BF23" href="{{route('page','promislove-kvarcove-pokrittya')}}">Використання у промисловості</a></li>
                        <li><a style="color: #F5BF23" href="{{route('page','dekorativni-pokrittya')}}">Використання у декорі</a></li>
                        <li><a style="color: #F5BF23" href="{{route('page','pidloga-dlya-medychnyh-zakladiv')}}">Використання у медицині</a></li>
                    </ul>
                    <hr class="space m" />
                    <a name="top"></a>
                    <hr>
                    <h2>НАЛИВНА ПІДЛОГА.</h2>
                    <p>
                        Один матеріал і різний результат. Класичний спосіб, дозволяє досягти глянцивої̆ поверхні, але можливий і інший варіант, гладка і в той же час матова структура. Покриття підходить для застосування в приміщеннях з підвищеною вологістю, у ванній кімнаті, в кухні, душовій кабіні, зонах біля басейну. Нанесення полімерного покриття не передбачає стиків або деформаційних швів. Можна використовувати в приміщеннях будь-яких розмірів.
                    </p>
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
                                    <img src="../prodgect/pr-47.png" alt="Епоксидна наливна підлога">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../prodgect/pr-48.png" data-lightbox-anima="fade-right">
                                    <img src="../prodgect/pr-48.png" alt="Рідка підлога">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../prodgect/pr-26.png" data-lightbox-anima="fade-right">
                                    <img src="../prodgect/pr-26.png" alt="Підлога без стиків">
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
                    <hr class="space" />
                    <a name="top2"></a>
                    <h2>ПРОЦЕС СТВОРЕННЯ ПОКРИТТЯ.</h2>
                    <p>
                    <p>
                        В залежності від вимог використання змінюється і технологія його нанесення. Для прикладу в декорі використовується чистий полімер без наповнювачів, дня досягнення дзеркального ефекту. В промисловості в полімер додається кварцовий пісок для місцності покриття, проте кварцовий наповнювач частково позбавляє покриття ідеального дзеркального ефекту. Процес нанесення епоксидного покриття починається з якісної підготовки основи, саме це впливає на довговічність покриття. Як будь яке покриття, від Компанії ІВ БУД, все починається з підготовки основи, у випадку, якщо основа має дефекти та нерівності ми виконуємо
                        <a  style="color: #F5BF23" href="{{route('page','remont-styazhki')}}">ремонтування та посилення основи</a>, процес нанесення виглядає у такий спосіб, полімер наливається на основу і рівномірно розприділяється ракелем. Повітря яке утворюється в наслідок нанесення покриття на підлогу виганяється голчастим валиком. На фініші ми отримуємо ідеально рівне покриття, з глянцевим ефектом.
                    </p>
                    <hr class="space" />
                    <div class="flexslider carousel outer-navs" data-options="minWidth:150,itemMargin:30,numItems:3,controlNav:false,directionNav:true">
                        <ul class="slides">
                            <li>
                                <a class="img-box lightbox  i-center mfp-iframe"  href="https://www.youtube.com/watch?v=rs0wh4bXtgo" data-lightbox-anima="fade-right">
                                    <i class="im-play"></i>
                                    <img src="../images/hd-77.png" alt="Створення наливної підлоги">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../images/hd-78.png" data-lightbox-anima="fade-right">
                                    <img src="../images/hd-78.png" alt="Як створюється епоксидна підлога">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../images/hd-79.png" data-lightbox-anima="fade-right">
                                    <img src="../images/hd-79.png" alt="Етапи нанесення епоксидної підлоги">
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
                        <li>Наявність гідроізоляції основи (для промислових об'єктів);</li>
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
                        <li>Грунтування основи   </li>
                        <li>Відсипка кварцу   </li>
                        <li>Нанесення епоксидної фарби </li>
                        <li>Нанесення фінішного лаку (2 шари) </li>
                    </ul>
                    <hr>
                    <p>
                        Матеріали:
                    </p>
                    <ul class="fa-ul text-s ul-dots">
                        <li>Фінішний  лак (матовий/напівглянець/глянець) </li>
                        <li>Eпоксидна фарба </li>
                        <li>Eпоксидний грунт </li>
                        <li>Кварцовий пісок </li>
                    </ul>
                    <hr>
                    <p>
                    <p>
                        Загальна вартість робіт, з врахуванням всіх етапів складатиме - 2000 грн/м2. У випадку промислового покриття вартість складатиме - 1800 грн/м2. Також можлива знижка до 15%, при площі 500+.
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
