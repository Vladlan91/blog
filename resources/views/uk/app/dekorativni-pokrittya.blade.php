@extends('layouts.app')
@section('title', 'Декоративні покриття')
@section('meta', 'Декоративні покриття | ІВ БУД')
@section('keywords', 'Полімерний мікроцемент | ІВ БУД')
@section('breadcrumbs')
@endsection
@section('content')
    <div class="header-title ken-burn-out white" data-parallax="scroll" data-natural-height="800" data-natural-width="1920" data-image-src="../images/hd-16.png">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="title-base text-left">
                        <hr class="anima" />
                        <h1>Декоративні покриття</h1>
                        <p>Кожне покриття унікальне по свому, розуміючи експлуатаційні характеристики вашого приміщення, можна обрати покриття, яке прослужить вам на совість.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <ol class="breadcrumb b white">
                        <li><a style="color: white;" href="{{route('home')}}">Головна</a></li>
                        <li class="active" style="color: #F5BF23!important;">Декоративні покриття</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="section-empty">
        <div class="container content">
            <div class="row">
                <div class="col-md-3 col-sm-4">
                    <h2>Типи покриттів</h2>
                    <hr class="space m" />
                    <aside class="sidebar mi-menu">
                        <nav class="sidebar-nav">
                            <ul class="side-menu">
                                <li><a href="{{route('page','dekorativne-kvarcove-pokrittya')}}">Декоративний кварц</a></li>
                                <li><a href="{{route('page','mikrocement')}}">Мікроцемент </a></li>
                                <li><a href="{{route('page','polimernij-mikrocement')}}">Полімерний мікроцемент</a></li>
                                <li><a href="{{route('page','nalivna-pidloga')}}">Епоксидна наливна підлога</a></li>
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
                    <h2>Унікальність покриття.</h2>
                    <p>
                        Декоративні покриття від компанії Ів Буд в основному ділиться на 4 основні типи, </p>
                    <ul class="fa-ul text-s ul-dots">
                        <li>Декоративний кварц</li>
                        <li>Мікроцемент</li>
                        <li>Полімерний мікроцемент</li>
                        <li>Епоксидна наливна підлога</li>
                    </ul>
                    <hr class="space m" />
                    <p>в залежності від поставлених цілей, додавання до матеріалу різних наповнювачів, таких як кварц, флоки, чіпси і тд, створює велике різноманіття кінцевого результату.
                    </p>
                    <hr>
                    <h2># ДЕКОРАТИВНИЙ КВАРЦ.</h2>
                    <p>
                        Якщо ж стоїть завдання зробити декоративне покриття, яке виконуватиме свої функції десятки років, то знову ж, повертаємося до кварцового покриття. Воно надзвичайно зносостійке, та легко піддається декору, завдяки малюванню фракцій піску. Ваш декор не буде поверхневим і не стиратиметься, адже він буде настільки ж глибоким, як і сама підлога.
                    </p>
                    <p>
                        Колір підлоги можна підібрати по каталогу RAL, методом фарбування піску. Декоративна привабливість – це відмітна риса кварцових покриттів.
                    </p>
                    <a href="{{route('page','dekorativne-kvarcove-pokrittya')}}" class="btn btn-sm">Дізнатись більше</a>
                    <hr class="space" />
                    <div class="flexslider carousel outer-navs" data-options="minWidth:150,itemMargin:30,numItems:3,controlNav:false,directionNav:true">
                        <ul class="slides">
                            <li>
                                <a class="img-box lightbox  i-center mfp-iframe"  href="https://www.youtube.com/watch?v=CEwM5O1bsz8" data-lightbox-anima="fade-right">
                                    <i class="im-play"></i>
                                    <img src="../prodgect/pr-35.png" alt="Декоративний кварц">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../prodgect/pr-40.png" data-lightbox-anima="fade-right">
                                    <img src="../prodgect/pr-40.png" alt="Кварцові підлоги">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../prodgect/pr-36.png" data-lightbox-anima="fade-right">
                                    <img src="../prodgect/pr-36.png" alt="Підлоги для закладів">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox i-center mfp-iframe" href="https://www.youtube.com/watch?v=26PRbMRD1S0">
                                    <i class="im-play"></i>
                                    <img src="../prodgect/pr-5.png" alt="Підлоги для кафе">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../prodgect/pr-37.png" data-lightbox-anima="fade-right">
                                    <img src="../prodgect/pr-37.png" alt="Підлоги в будинок">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../prodgect/pr-38.png" data-lightbox-anima="fade-right">
                                    <img src="../prodgect/pr-38.png" alt="Безшовні кварцові підлоги">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../prodgect/pr-39.png" data-lightbox-anima="fade-right">
                                    <img src="../prodgect/pr-39.png" alt="Епоксидний кварц">
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
                    <h2># Мікроцемент.</h2>
                    <p>
                        Мікроцемент - ідеальне покриття для облаштування декоративних підлог і стін усередині приміщень з чітко вираженим текстурованим ефектом типу «лофт».
                        Завдяки легкості в застосуванні, універсальності і зносостійкості цей матеріал ідеально підходить для облаштування підлогових покриттів, які піддаються інтенсивним навантаженням в таких зонах, як магазини, кафе, ресторани, шоу-руми, а також ділянки, які пов'язані з облаштування декоративних покриттів в секторі цивільного будівництва.
                    </p>
                    <a href="{{route('page','mikrocement')}}" class="btn btn-sm">Дізнатись більше</a>
                    <hr class="space" />
                    <div class="flexslider carousel outer-navs" data-options="minWidth:150,itemMargin:30,numItems:3,controlNav:false,directionNav:true">
                        <ul class="slides">
                            <li>
                                <a class="img-box lightbox i-center mfp-iframe" href="https://www.youtube.com/watch?v=0IQZm5kjrZw">
                                    <i class="im-play"></i>
                                    <img src="../prodgect/pr-9.png" alt="Мікроцемент">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../prodgect/pr-43.png" data-lightbox-anima="fade-right">
                                    <img src="../prodgect/pr-43.png" alt="Полімерний мікроцемент">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox i-center mfp-iframe" href="https://www.youtube.com/watch?v=wOBe3XajaSg">
                                    <i class="im-play"></i>
                                    <img src="../prodgect/pr-41.png" alt="Мікроцемнтні підлоги">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../prodgect/pr-44.png" data-lightbox-anima="fade-right">
                                    <img src="../prodgect/pr-44.png" alt="Підлоги з мікроцементу">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../prodgect/pr-42.png" data-lightbox-anima="fade-right">
                                    <img src="../prodgect/pr-42.png" alt="Мікроцементні покриття">
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
                                    <i class="text-xl im-arrow-inside"></i>
                                </div>
                                <div class="icon-box-cell">
                                    <label class="text-m">Нанесення на стіни</label>
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
                    <h2># Полімерний мікроцемент.</h2>
                    <p>
                        Полімерний мікроцемент - це декоративне покриття на основі цементу, полімерів на водній основі, добавок і мінеральних пігментів. Відрізняється від звичайного мікроцементу, відсутністтю різкої плямистості, потертості і текстури, яку створює шпатель, притаманної лофт стилю. Відмінність досягнута за рахунок зміни фінішного шару покриття.
                    </p>
                    <p>
                        Цей матеріал ідеально підходить як для внутрішніх поверхонь, наноситься на підлоги, стіни, стелі і т.д. І саме головне - це повністю безшовне покриття! Відсутність швів полегшує прибирання та обслуговування.
                        Надає своїм приміщенням унікальний, індивідуальний характер, завдяки різним структурам (великим, середнім або тонким), великій різноманітності кольорів, різних лакових покриттів (матовий, сатиновий або глянець).
                    </p>
                    <a href="{{route('page','polimernij-mikrocement')}}" class="btn btn-sm">Дізнатись більше</a>
                    <hr class="space" />
                    <div class="flexslider carousel outer-navs" data-options="minWidth:150,itemMargin:30,numItems:3,controlNav:false,directionNav:true">
                        <ul class="slides">
                            <li>
                                <a class="img-box lightbox  i-center mfp-iframe"  href="https://www.youtube.com/watch?v=77TPxKNqAI4" data-lightbox-anima="fade-right">
                                    <i class="im-play"></i>
                                    <img src="../prodgect/pr-8.png" alt="Мікроцементі в стилі лофт">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../prodgect/pr-46.png" data-lightbox-anima="fade-right">
                                    <img src="../prodgect/pr-46.png" alt="Мікроцемент на стіни">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox  i-center mfp-iframe"  href="https://www.youtube.com/watch?v=dmBBaKTeMHY" data-lightbox-anima="fade-right">
                                    <i class="im-play"></i>
                                    <img src="../prodgect/pr-45.png" alt="Мікроцемент на стіни">
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
                                    <i class="text-xl im-arrow-inside"></i>
                                </div>
                                <div class="icon-box-cell">
                                    <label class="text-m">Нанесення на стіни</label>
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
                    <h2># НАЛИВНА ПІДЛОГА.</h2>
                    <p>
                        Нанесення полімерного покриття не передбачає стиків або деформаційних швів. Можна використовувати в приміщеннях будь-яких розмірів.</p>
                    <p>
                        Один матеріал і різний результат.
                        Класичний спосіб, дозволяє досягти глянцивої̆ поверхні, але можливий і інший варіант, гладка і в той же час матова структура. Покриття підходить для застосування в приміщеннях з підвищеною вологістю, у ванній кімнаті, в кухні, душовій кабіні, зонах біля басейну.
                    </p>
                    <a href="{{route('page','nalivna-pidloga')}}" class="btn btn-sm">Дізнатись більше</a>
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
                    <hr>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
