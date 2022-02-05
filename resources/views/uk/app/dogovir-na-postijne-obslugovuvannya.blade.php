@extends('layouts.app')
@section('title', 'Договір на постійне обслуговування')
@section('meta', 'Договір на постійне обслуговування | ІВ БУД')
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
                        <h1>Договір на постійне обслуговування</h1>
                        <p>В усьому світі бетон захищають від вологи, хімічного впливу та тріщин полімерами, типу епоксидної смоли.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <ol class="breadcrumb b white">
                        <li><a style="color: white;" href="{{route('home')}}">Головна</a></li>
                        <li class="active" style="color: #F5BF23!important;">договір співпраці</li>
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
                                <li><a href="#top">УМОВИ ДОГОВОРУ</a></li>
                                <li> <a href="#top2">КОЛИ ЦЕ ВИГІДНО</a></li>
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
                    <h2>Чому варто утримувати бетон в належному стані?</h2>
                    <p>
                        Будь-яка тріщина в топінговому покритті призводить до карбонізації бетону, що може потягнути за собою негативні наслідки, корозія арматури, руйнування плити перекриття і тд. Кожна тріщина, навіть на перший погляд, незначна, при інтенсивному навантажені, збільшується і відшаровується, таким чином утворюються кратери, які вже в свою чергу неуможливлюють подальшу експлуатацію основи.
                    </p>
                    <p>
                        Окрім незручностей в експлуатації, дефектні ділянки призводять до збільшення витрат на ремонт і обслуговування вантажної техніки. У випадку, якщо у вас траспорт на гарантійному обслуговуванні, існує ймовірність втрати даних зобов'язань.
                    </p>
                    <hr class="space m" />
                    <a name="top"></a>
                    <hr>
                    <h2>УМОВИ ДОГОВОРУ</h2>
                    <p>
                        Компанія ІВ БУД пропонує вам дієве рішення данної проблеми. Ми проводим дефектацію об'єкту і визначаємо проблемні ділянки вашого покриття, ділячи їх на 2 категорії:</p>
                    <ul class="fa-ul text-s ul-dots">
                        <li>Ділянки, які потребують ремонту;</li>
                        <li>Ділянки, руйнування яких можна зупити на ранніх стадіях;</li>
                    </ul>
                    <hr class="space" />
                    <div class="flexslider carousel outer-navs" data-options="minWidth:150,itemMargin:30,numItems:3,controlNav:false,directionNav:true">
                        <ul class="slides">
                            <li>
                                <a class="img-box lightbox" href="../images/hd-40.png" data-lightbox-anima="fade-right">
                                    <img src="../images/hd-40.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../images/hd-43.png" data-lightbox-anima="fade-right">
                                    <img src="../images/hd-43.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../images/hd-41.png" data-lightbox-anima="fade-right">
                                    <img src="../images/hd-41.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../images/hd-42.png" data-lightbox-anima="fade-right">
                                    <img src="../images/hd-42.png" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <hr class="space" />
                    <p>
                        Формується план-графік виконання робіт і компанія приступає до усунення всіх проблених ділянок, які потрапили в дефектний акт. Після повного усунення всіх пошкоджених ділянок, заключається договір на постійне обслуговування, щорічний платіж якого становить небільше 20% від загальної суми ремонту. Компанія ІВ БУД утримує в належному стані відремонтоване покриття на протязі всього терміну дії договору.
                    </p>
                    <a name="top2"></a>
                    <hr>
                    <h2>КОЛИ ЦЕ ВИГІДНО?</h2>
                    <p>
                        Ремонт топінгового покриття дієве вирішення ваших проблем. Проте ось вам декілька порад, як обрати вірне рішення, між повною заміною і ремонтом топінгового покриття <br>Коли це вигідно:</p>
                    <ul class="fa-ul text-s ul-dots">
                        <li>Проблені ділянки складаю 10% від загальної площі;</li>
                        <li>У випадку, якщо у вас траспорт на гарантійному обслуговуванні;</li>
                        <li>Коли ваше покриття знаходиться на ранній стадаї руйнування;</li>
                    </ul>

                    <hr class="space" />
                    <div class="flexslider carousel outer-navs" data-options="minWidth:150,itemMargin:30,numItems:3,controlNav:false,directionNav:true">
                        <ul class="slides">
                            <li>
                                <a class="img-box lightbox  i-center mfp-iframe"  href="https://www.youtube.com/watch?v=5IvXkIpwzPw" data-lightbox-anima="fade-right">
                                    <i class="im-play"></i>
                                    <img src="../images/hd-31.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../images/hd-32.png" data-lightbox-anima="fade-right">
                                    <img src="../images/hd-32.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../images/hd-38.png" data-lightbox-anima="fade-right">
                                    <img src="../images/hd-38.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../images/hd-33.png" data-lightbox-anima="fade-right">
                                    <img src="../images/hd-33.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox  i-center mfp-iframe"  href="https://www.youtube.com/watch?v=oOhG7IR1zNA" data-lightbox-anima="fade-right">
                                    <i class="im-play"></i>
                                    <img src="../images/hd-39.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="../images/hd-34.png" data-lightbox-anima="fade-right">
                                    <img src="../images/hd-34.png" alt="">
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
                    <p>
                        Компанія ІВ БУД також рекомендує ознайомитись з договором на обслуговування безшовних полімерних покриттів.
                    </p>
                    <hr>
                    <table class="grid-table border-table grid-table-xs-12 text-left">
                        <tbody>
                        <tr>
                            <td>
                                <h3>Договір на обслуговування безшовного полімерного покриття</h3>
                            </td>
                            <td>
                                <hr class="space m visible-xs">
                                <p>
                                    Чому договір на обслуговування безшовного полімерного покриття самий вигідний і доцільний варіант співпраці з нами?
                                </p>
                                <a href="{{route('page','dogovir-na-postijne-obslugovuvannya')}}" class="btn btn-sm">Дізнатись більше</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <hr>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
