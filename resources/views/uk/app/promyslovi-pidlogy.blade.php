@extends('layouts.app')
@section('title', 'Промислові покриття')
@section('meta', 'Промислові покриття | ІВ БУД')
@section('keywords', 'Полімерний мікроцемент | ІВ БУД')
@section('breadcrumbs')
@endsection
@section('content')
<div class="header-title ken-burn-out white" data-parallax="scroll" data-natural-height="800" data-natural-width="1920" data-image-src="../images/hd-18.png">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="title-base text-left">
                    <hr class="anima" />
                    <h1>Промислові покриття</h1>
                    <p>Кожне покриття унікальне по свому, розуміючи експлуатаційні характеристики вашого приміщення, можна обрати покриття, яке прослужить вам на совість.</p>
                </div>
            </div>
            <div class="col-md-3">
                <ol class="breadcrumb b white">
                    <li><a style="color: white;" href="{{route('home')}}">Головна</a></li>
                    <li class="active" style="color: #F5BF23!important;">Промислові покриття</li>
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
                            <li><a href="{{route('page','promislove-obezpilennya')}}">Промислове обезпилення</a></li>
                            <li><a href="{{route('page','poliuretanova-pidloga')}}">Поліуританова підлога</a></li>
{{--                            <li><a href="#">Поліуритан-цемент</a></li>--}}
                            <li><a href="{{route('page','promislove-kvarcove-pokrittya')}}">Промисловий кварц</a></li>
                            <li><a href="{{route('page','epoksidnij-okras')}}">Епоксидний окрас</a></li>
                            <li><a href="{{route('page','nalivna-pidloga')}}">Епоксидна наливна підлога</a></li>
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
                <h2>Типи і призначення покриттів.</h2>
                <p>
                    Промислова підлога від компанії Ів Буд в основному ділиться на 5 основних типів, в залежності від поставлених цілей.
                </p>
                <ul class="fa-ul text-s ul-dots">
                    <li>Промислове обезпилення</li>
                    <li>Поліуританова підлога</li>
{{--                    <li>Поліуритан-цемент</li>--}}
                    <li>Кварцова підлога</li>
                    <li>Епоксидний окрас</li>
                    <li>Епоксидна наливна підлога</li>
                </ul>
                <hr class="space m" />
                <p>
                    Всі ці види покриття ми розглянемо поетапно, проте варто запам’ятати перший і напевно, самий важливий етап для створення будь-якого покриття це правильна основа. Для будь-якого полімеру потрібно використовувати бетон, мінімум марки 300, а ще краще 400. Далі потрібно добре вібрувати розчин, попередньо забезпечивши гідроізоляцією основу.
                </p>
                <hr>
                <h2># Промислове обезпилення</h2>
                <p>
                    Спеціалісти компанії Ів Буд на даному етапі перевіряє вологість бетону, яка не повинна перевищувати 3-4% для епоксидних та кварцових покриттів і 7% для поліуретанових. Також перевіряють основу на відрив, сила якого в середньому повинна бути не нижче 1,5 МПа. Якщо ці всі дані відповідають вимогам, тоді потрібно приступати до етапу шліфування чи дробоструєння бетону. На даному етапі забирається цементне молочко, після чого всі тріщини та вибоїни заробляються ремонтною сумішшю.

                </p>
                <p>
                    Основа ще раз прошліфовується і настає етап грунтування бетону. На покриття наноситься епоксидний грунт, що зміцнює його і надає йому кращі характеристики. Після грунтування основи бетон стійки до вологості і механічних навантажень, перестає пилити і зручний в прибирані.
                </p>
                <a href="{{route('page','promislove-obezpilennya')}}" class="btn btn-sm">Дізнатись більше</a>
                <hr class="space" />
                <div class="flexslider carousel outer-navs" data-options="minWidth:150,itemMargin:30,numItems:3,controlNav:false,directionNav:true">
                    <ul class="slides">
                        <li>
                            <a class="img-box lightbox" href="../images/hd-25.png" data-lightbox-anima="fade-right">
                                <img src="../images/hd-25.png" alt="Промислове обеспилення">
                            </a>
                        </li>
                        <li>
                            <a class="img-box lightbox" href="../images/hd-26.png" data-lightbox-anima="fade-right">
                                <img src="../images/hd-26.png" alt="Промислове підлоги">
                            </a>
                        </li>
                        <li>
                            <a class="img-box lightbox" href="../images/hd-27.png" data-lightbox-anima="fade-right">
                                <img src="../images/hd-27.png" alt="Підлоги для промисловості">
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
                                <i class="text-xl im-opera-house"></i>
                            </div>
                            <div class="icon-box-cell">
                                <label class="text-m">Відсутність пилу</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="icon-box">
                            <div class="icon-box-cell">
                                <i class="text-xl im-aquarius-2"></i>
                            </div>
                            <div class="icon-box-cell">
                                <label class="text-m">Зручне в прибиранні</label>
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
                <h2># ПРОМИСЛОВИЙ КВАРЦ.</h2>
                <p>
                    Кварцова промислова підлога складається з декількох шарів кварцу та епоксиду. Підлога шар за шаром накладається, попередньо правильно уклавши, прошліфувавши та обезпиливши кожен із шарів.

                    В кінцевому результаті отримується доволі товсте покриття, яке надійно захищає основу від зовнішніх механічних та хімічних впливів. Фінішний лак наноситься для додавання декоративних чи інших властивостей.
                </p>
                <a href="{{route('page','promislove-kvarcove-pokrittya')}}" class="btn btn-sm">Дізнатись більше</a>
                <hr class="space" />
                <div class="flexslider carousel outer-navs" data-options="minWidth:150,itemMargin:30,numItems:3,controlNav:false,directionNav:true">
                    <ul class="slides">
                        <li>
                            <a class="img-box lightbox  i-center mfp-iframe"  href="https://www.youtube.com/watch?v=qyMdLycry64" data-lightbox-anima="fade-right">
                                <i class="im-play"></i>
                                <img src="../prodgect/pr-2.png" alt="Промисловий кварц">
                            </a>
                        </li>
                        <li>
                            <a class="img-box lightbox" href="../prodgect/pr-17.png" data-lightbox-anima="fade-right">
                                <img src="../prodgect/pr-17.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a class="img-box lightbox i-center mfp-iframe" href="https://www.youtube.com/watch?v=26PRbMRD1S0">
                                <i class="im-play"></i>
                                <img src="../prodgect/pr-5.png" alt="Кварцові підлоги">
                            </a>
                        </li>
                        <li>
                            <a class="img-box lightbox" href="../prodgect/pr-15.png" data-lightbox-anima="fade-right">
                                <img src="../prodgect/pr-15.png" alt="Підлоги для промисловості">
                            </a>
                        </li>
                        <li>
                            <a class="img-box lightbox" href="../prodgect/pr-16.png" data-lightbox-anima="fade-right">
                                <img src="../prodgect/pr-16.png" alt="Антивандальні підлоги">
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
                <hr>
                <h2># Епоксидний окрас.</h2>
                <p>
                    Даний вид покриття використовується на складах, заводах та промисловості, де в основному є піше навантаження, адже епоксидна підлога передає все своє навантаження на бетон. Існує багато варіантів створення даного покриття, в залежності від потреб, це і хімічна стійкість, антистатична та інші, але ми покажемо основний процес створення (базу) для пішого навантаження.
                    Отже, по готовій прогрунтованій основі наноситься декілька шарів епоксидної фарби. Важливо пам’ятати, що епоксидна фарба лягає по бетону не так, як звичайна, тому для виконання даного покриття, потрібно мати певні навики.</p>
                <p>
                    Фінішним етапом в створенні епоксидної промислової підлоги є малювання розмітки, коли це потрібно та нанесення фінішного лаку. Фінішний лак може бути багатьох видів в залежності від потреб та домішок до нього. Промислову епоксидну підлогу можна експлуатувати вже через 12 днів, вона повністю набирає своїх експлуатаційних властивостей через 14 днів.
                </p>
                <a href="{{route('page','epoksidnij-okras')}}" class="btn btn-sm">Дізнатись більше</a>
                <hr class="space" />
                <div class="flexslider carousel outer-navs" data-options="minWidth:150,itemMargin:30,numItems:3,controlNav:false,directionNav:true">
                    <ul class="slides">
                        <li>
                            <a class="img-box lightbox  i-center mfp-iframe"  href="https://www.youtube.com/watch?v=yuRjX92kF9Y" data-lightbox-anima="fade-right">
                                <i class="im-play"></i>
                                <img src="../prodgect/pr-19.png" alt="Епоксидний окрас">
                            </a>
                        </li>
                        <li>
                            <a class="img-box lightbox" href="../prodgect/pr-18.png" data-lightbox-anima="fade-right">
                                <img src="../prodgect/pr-18.png" alt="Хімстійкі покриття">
                            </a>
                        </li>
                        <li>
                            <a class="img-box lightbox" href="../prodgect/pr-23.png" data-lightbox-anima="fade-right">
                                <img src="../prodgect/pr-23.png" alt="Хімстійкі пілоги">
                            </a>
                        </li>
                        <li>
                            <a class="img-box lightbox i-center mfp-iframe" href="https://www.youtube.com/watch?v=O6anxtWIJv4">
                                <i class="im-play"></i>
                                <img src="../prodgect/pr-20.png" alt="Підлоги в кольорі">
                            </a>
                        </li>
                        <li>
                            <a class="img-box lightbox i-center mfp-iframe" href="https://www.youtube.com/watch?v=SeBe8zxJDTo" data-lightbox-anima="fade-right">
                                <i class="im-play"></i>
                                <img src="../prodgect/pr-22.png" alt="Підлоги для харчової промисловості">
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
                <hr>
                <h2># Поліуретанова підлога.</h2>
                <p>
                    Поліуретанова підлога використовується в основному в медичних закладах, офісах, або на промисловості де можливе розтягнення та деформація швів, адже поліуретан є еластичнішим та шумоподавляючим та екологічно чистим.</p>
                <p>
                    Поліуретанова підлога робиться доволі просто по підготовленій основі. Суміш проливається та розтягується спеціальними ракелями по площині, далі наноситься поліуретановий фінішний лак, який як і у випадку з епоксидами, додає корисних властивостей покриттю.
                </p>
                <a href="{{route('page','poliuretanova-pidloga')}}" class="btn btn-sm">Дізнатись більше</a>
                <hr class="space" />
                <div class="flexslider carousel outer-navs" data-options="minWidth:150,itemMargin:30,numItems:3,controlNav:false,directionNav:true">
                    <ul class="slides">
                        <li>
                            <a class="img-box lightbox  i-center mfp-iframe"  href="https://www.youtube.com/watch?v=oxnlK3xYODY" data-lightbox-anima="fade-right">
                                <i class="im-play"></i>
                                <img src="../prodgect/pr-24.png" alt="Поліуретанова підлога">
                            </a>
                        </li>
                        <li>
                            <a class="img-box lightbox" href="../prodgect/pr-25.png" data-lightbox-anima="fade-right">
                                <img src="../prodgect/pr-25.png" alt="Підлога для медицини ">
                            </a>
                        </li>
                        <li>
                            <a class="img-box lightbox" href="../prodgect/pr-26.png" data-lightbox-anima="fade-right">
                                <img src="../prodgect/pr-26.png" alt="Медичні покриття">
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
                                <label class="text-m">Антибактеріальне покриття</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="icon-box">
                            <div class="icon-box-cell">
                                <i class="text-xl im-plaster"></i>
                            </div>
                            <div class="icon-box-cell">
                                <label class="text-m">Сертифікований для медицини</label>
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
                <h2># Епоксидна наливна.</h2>
                <p>
                    Покриття за своїми властивостями таке ж, як епоксидний окрас, проте товщинна даного покриття коливається в межах 3-5 мм, а епоксидний окрас має товщину в межах 0,8 - 1,5 мм. Також, для збільшення товщини покриття, додається кварцовий пісок, в пропорціях 1 : 2, кварц осідає, відповідно не впливає на естетичний вигляд.
                </p>
                <p>
                    Дане покриття має більший запас міцності, в порівняння з тонкошаровим окрасом, відповідно і довший термін експлуатації.
                </p>
                <a href="{{route('page','nalivna-pidloga')}}" class="btn btn-sm">Дізнатись більше</a>
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


