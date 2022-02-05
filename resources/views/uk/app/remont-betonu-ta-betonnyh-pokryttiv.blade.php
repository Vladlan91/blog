@extends('layouts.app')
@section('title', 'Ремонт бетону і топінгу')
@section('meta', 'Ремонт бетону і топінгу | ІВ БУД')
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
                        <h1>Ремонт бетону і топінгу</h1>
                        <p>В усьому світі бетон захищають від вологи, хімічного впливу та тріщин полімерами, типу епоксидної смоли.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <ol class="breadcrumb b white">
                        <li><a style="color: white;" href="{{route('home')}}">Головна</a></li>
                        <li class="active" style="color: #F5BF23!important;">Ремонт бетону і топінгу</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="section-empty">
        <div class="container content">
            <div class="row">
                <div class="col-md-3 col-sm-4">
                    <h2>НАВІГАЦІЯ ПО СТОРІНЦІ</h2>
                    <hr class="space m" />
                    <aside class="sidebar mi-menu">
                        <nav class="sidebar-nav">
                            <ul class="side">
                                <li><a  href="#top1">РЕМОНТ БЕТОННИХ СТЯЖОК</a></li>
                                <li><a  href="#top2">РЕМОНТ НАПІВСУХИХ СТЯЖОК</a></li>
                                <li><a  href="#top3">ШЛІФУВАННЯ/ОБРОБКА БЕТОНУ</a></li>
                                <li><a  href="#top4">РЕМОНТ БЕТОНУ/ТОПІНГУ</a></li>
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
                    <h2>Слабкі місця бетону.</h2>
                    <p>
                        Саме міцне покриття, на виробництві чи в складах, це бетон, проте, щоб прослужити Вам декілька десятків років, він повинен бути захищеним. В усьому світі бетон захищають від вологи, хімічного впливу та тріщин полімерами, типу епоксидної смоли. Багато хто на виробництві економить на цій стадії, або купує приміщення вже із зруйнованим бетоном, що тоді? Рішення є.
                    </p>
                    <hr class="space m" />
                    <p>
                        Компанія Ів Буд, вже впродовж декількох років, окрім полімерних підлог, займається декількома супутніми напрямками. Для себе умовно, поділемо їх на 4 основні категорії:
                    </p>
                    <ul class="fa-ul text-s ul-dots">
                        <li>Ремонт бетонних стяжок;</li>
                        <li>Ремонт напівсухих стяжок;</li>
                        <li>Шліфування та обробка бетонних конструкцій;</li>
                        <li>Ремонт бетонного топінгу;</li>
                    </ul>
                    <a name="top1"></a>
                    <hr>
                    <h2># Ремонт бетонних стяжок.</h2>
                    <p>
                        Бетонна стяжка – надійне рішення для приміщення. Але під дією механічних навантажень, навіть міцний і якісний шар бетону, з часом приходить в непридатність. Поява тріщин, вибоїн і відколів не є приводом для повної заміни стяжки, і навіть якщо пошкоджено більше третини площі, така стяжка може прослужити ще довго, після правильно виконаного ремонту. Для цього, часто використовують епоксидну смолу, яка є найбільш доступним матеріалом для даного завдання.</p>
                    <a href="{{route('page','remont-styazhki')}}" class="btn btn-sm">Дізнатись більше</a>
                    <hr class="space" />
                    <div class="flexslider carousel outer-navs" data-options="minWidth:150,itemMargin:30,numItems:3,controlNav:false,directionNav:true">
                        <ul class="slides">

                            <li>
                                <a class="img-box lightbox" href="../images/hd-47.png" data-lightbox-anima="fade-right">
                                    <img src="../images/hd-47.png" alt="Ремонт бетонних стяжок">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../images/hd-48.png" data-lightbox-anima="fade-right">
                                    <img src="../images/hd-48.png" alt="Ремонт бетону">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../images/hd-49.png" data-lightbox-anima="fade-right">
                                    <img src="../images/hd-49.png" alt="Ремонт промислових підлог">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../images/hd-50.png" data-lightbox-anima="fade-right">
                                    <img src="../images/hd-50.png" alt="Ремонт полу">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../images/hd-51.png" data-lightbox-anima="fade-right">
                                    <img src="../images/hd-51.png" alt="Ремонт топінгу">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../images/hd-52.png" data-lightbox-anima="fade-right">
                                    <img src="../images/hd-52.png" alt="Ремонт топінгу">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../images/hd-53.png" data-lightbox-anima="fade-right">
                                    <img src="../images/hd-53.png" alt="Ремонт топінгу">
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
                    <a name="top2"></a>
                    <hr>
                    <h2># Ремонт напівсухих стяжок.</h2>
                    <p>
                        Напівсухі стяжки популярні за рахунок низької ціни і швидкості виготовлення. Мабуть одна із головних переваг - це час її висихання, відповідно не заморожує процес будівництва. Ідеально підходить під плитку, проте не підходить під лінолеум, вініл, паркет та ламінат.</p>
                    <a href="{{route('page','remont-napivsukhikh-styazhok')}}" class="btn btn-sm">Дізнатись більше</a>
                    <hr class="space" />
                    <div class="flexslider carousel outer-navs" data-options="minWidth:150,itemMargin:30,numItems:3,controlNav:false,directionNav:true">
                        <ul class="slides">
                            <li>
                                <a class="img-box lightbox" href="../images/hd-28.png" data-lightbox-anima="fade-right">
                                    <img src="../images/hd-28.png" alt="Ремонт стяжки">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../images/hd-29.png" data-lightbox-anima="fade-right">
                                    <img src="../images/hd-29.png" alt="Усунення тріжин стяжки">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../images/hd-30.png" data-lightbox-anima="fade-right">
                                    <img src="../images/hd-30.png" alt="Шліфування стяжки">
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
                    <h2># ШЛІФУВАННЯ ТА ОБРОБКА БЕТОНУ.</h2>
                    <p>
                        Твердження, що Loft стиль це економічний варіант ремонту - не відповідає дійсності, адже для того аби досягнути бажаного результату  Loft, потрібно все спланувати, ще на етапі будівництва, від вибору якісного бетону, якісної опалобки і дотримання якісного залиття моноліту. Тільки тоді, ваш монолітний бетон матиме красивий вигляд. Проте, бувають випадки коли замовляють послуги дизайну на етапі завершеного будівництва, а стан бетону не відповідає вимогам, які ставить перед собою замовник, тоді у пригоді стають послуги в професійній обробці і декоруванні бетону.
                    </p>
                    <a href="{{route('page','shlifuvannya-betonu-v-stili-loft')}}" class="btn btn-sm">Дізнатись більше</a>
                    <hr class="space" />
                    <div class="flexslider carousel outer-navs" data-options="minWidth:150,itemMargin:30,numItems:3,controlNav:false,directionNav:true">
                        <ul class="slides">
                            <li>
                                <a class="img-box lightbox" href="../images/hd-58.png" data-lightbox-anima="fade-right">
                                    <img src="../images/hd-58.png" alt="Обробка бетону лофт">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../images/hd-59.png" data-lightbox-anima="fade-right">
                                    <img src="../images/hd-59.png" alt="Шліфування стелі">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../images/hd-60.png" data-lightbox-anima="fade-right">
                                    <img src="../images/hd-60.png" alt="Шліфовка">
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
                    <a name="top4"></a>
                    <hr>
                    <h2># Ремонт бетонного топінгу.</h2>
                    <p>
                        Бетонний топінг відрізняється від бетонних стяжок, тим, що на фініші додається кристалізатор і затирається машинками, так званими, вертольотами, утворюючи своєрідний міцніший верхній шар в 3-5 мм. Це робиться для того, щоб покриття стало міцніше та гладкіше. За кордоном, практично, не використовують таке покриття, тому, що воно фінансово тільки трішки дешевше за захищений полімерами бетон, проте термін експлуатації значно нижчий.
                    </p>
                    <a href="{{route('page','remont-betonu-ta-toppingu')}}" class="btn btn-sm">Дізнатись більше</a>
                    <hr class="space" />
                    <div class="flexslider carousel outer-navs" data-options="minWidth:150,itemMargin:30,numItems:3,controlNav:false,directionNav:true">
                        <ul class="slides">
                            <li>
                                <a class="img-box lightbox  i-center mfp-iframe"  href="https://www.youtube.com/watch?v=5IvXkIpwzPw" data-lightbox-anima="fade-right">
                                    <i class="im-play"></i>
                                    <img src="../images/hd-31.png" alt="ремонт бетону">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../images/hd-32.png" data-lightbox-anima="fade-right">
                                    <img src="../images/hd-32.png" alt="ремонт топінгу">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../images/hd-33.png" data-lightbox-anima="fade-right">
                                    <img src="../images/hd-33.png" alt="Топінг ремонт">
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
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
