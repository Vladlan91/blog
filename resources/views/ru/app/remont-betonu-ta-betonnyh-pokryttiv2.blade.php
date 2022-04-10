@extends('layouts.app2')
@section('title', 'Ремонт бетону та декорування бетонних покриттів | ІВ БУД')
@section('meta', 'Ремонт бетону, полірування бетонних покриттів, наливні підлоги Львів, найкраща ціна на безшовні покриття | ІВ БУД, підлога в будинок, міцні підлоги, безшовні покриття @ivbudfloor')
@section('keywords', 'Мікроцементи, наливні підлоги, найкраща ціна від | ІВ БУД, підлога в будинок,міцні підлоги, безшовні покриття @ivbudfloor')
@section('breadcrumbs')
@endsection
@section('content')

    <div class="primary-content-area container content-padding product-page-ds">
        <div class="main-content-area product-ds">
            <div class="product-title-section">
                <h1>Ремонт бетону та декорування бетонних покриттів</h1>
                <p>Саме міцне покриття, на виробництві чи в складах, це бетон, проте, щоб прослужити Вам декілька десятків років, він повинен бути захищеним. В усьому світі бетон захищають від вологи, хімічного впливу та тріщин полімерами, типу епоксидної смоли. Багато хто на виробництві економить на цій стадії, або купує приміщення вже із зруйнованим бетоном, що тоді? Рішення є.</p>
                <div class="product-subtitle">
                    <div class="avatar-block">
                        <div class="avatar box-42">
                            <a href="">
                                <img src="{{asset('HTML-NFTMarketplace/img/logoavatar.png')}}" alt="ivbudfloor"><span class="verified"><svg class="crumina-icon">
                                                        <use xlink:href="#check-icon"></use>
                                                    </svg></span></a>
                        </div>
                        <div class="avatar-meta">
                            <div class="avatar-title gradient-text"><a href="">ivbudfloor</a></div>
                            <div class="avatar-meta">@admin</div>
                        </div>
                    </div>
                    <div class="item-category social-graphics">
                        {{$page->slug}}
                    </div>
                    <div class="item-rating">
                                <span class="filled"><svg class="crumina-icon">
                                        <use xlink:href="#star2-icon"></use>
                                    </svg></span>
                        <span class="filled"><svg class="crumina-icon">
                                        <use xlink:href="#star2-icon"></use>
                                    </svg></span>
                        <span class="filled"><svg class="crumina-icon">
                                        <use xlink:href="#star2-icon"></use>
                                    </svg></span>
                        <span class="filled"><svg class="crumina-icon">
                                        <use xlink:href="#star2-icon"></use>
                                    </svg></span>
                        <span><svg class="crumina-icon">
                                        <use xlink:href="#star2-icon"></use>
                                    </svg></span>
                    </div>
                </div>
            </div>
            <div class="product-image">
                <img src="{{asset('HTML-NFTMarketplace/img/bet.png')}}" alt="Декоративна підлога в будинок/заклад, безшовні пілоги від ІВ БУД" style="border-radius: 20px;">
            </div>
            <div class="product-info">
                <div class="tabs-block swiper-container">
                    <div class="swiper-nav">
                        <div class="swiper-button-next">
                            <svg class="crumina-icon next-button">
                                <use xlink:href="#arrow-right2-icon"></use>
                            </svg>
                        </div>
                        <div class="swiper-button-prev">
                            <svg class="crumina-icon prev-button">
                                <use xlink:href="#arrow-left2-icon"></use>
                            </svg>
                        </div>
                    </div>
                    <ul class="tabs-list swiper-wrapper">
                        <li class="swiper-slide active"><a href="#tab1">Опис</a></li>
                        <li class="swiper-slide"><a href="#tab2">Фото</a></li>
                    </ul>
                    <div class="tabs-content-wrapper">
                        <div id="tab1" class="tab active">
                            <div class="tab-content">
                                <div class="product-description">
                                    <div class="title h6">Загальна інформація!</div>
                                    <p> Компанія <span class="gradient-text">  @ivbudfloor</span>, вже впродовж декількох років, окрім полімерних підлог, займається декількома супутніми напрямками. Для себе умовно, поділемо їх на 4 основні категорії:</p>
                                    <ul class="list-line-height">
                                        <li><svg class="crumina-icon bullet-icon">
                                                <use xlink:href="#circle-icon"></use>
                                            </svg>Ремонт бетонних стяжок;</li>
                                        <li><svg class="crumina-icon bullet-icon">
                                                <use xlink:href="#circle-icon"></use>
                                            </svg>Ремонт напівсухих стяжок;</li>
                                        <li><svg class="crumina-icon bullet-icon">
                                                <use xlink:href="#circle-icon"></use>
                                            </svg>Шліфування та обробка бетонних конструкцій;</li>
                                        <li><svg class="crumina-icon bullet-icon">
                                                <use xlink:href="#circle-icon"></use>
                                            </svg>Ремонт бетонного топінгу;</li>
                                    </ul>
                                    <h4 class="content-heading">Ремонт бетонних стяжок</h4>
                                    <p>
                                        Бетонна стяжка – надійне рішення для приміщення. Але під дією механічних навантажень, навіть міцний і якісний шар бетону, з часом приходить в непридатність. Поява тріщин, вибоїн і відколів не є приводом для повної заміни стяжки, і навіть якщо пошкоджено більше третини площі, така стяжка може прослужити ще довго, після правильно виконаного ремонту. Для цього, часто використовують епоксидну смолу, яка є найбільш доступним матеріалом для даного завдання.</p>
                                    <a href="{{route('page','remont-styazhki')}}" class="read-more-link colored">Дізнатись більше</a>
                                    <h4 class="content-heading">Ремонт напівсухих стяжок</h4>
                                    <p>
                                        Напівсухі стяжки популярні за рахунок низької ціни і швидкості виготовлення. Мабуть одна із головних переваг - це час її висихання, відповідно не заморожує процес будівництва. Ідеально підходить під плитку, проте не підходить під лінолеум, вініл, паркет та ламінат. Швидко приходить в непридатний стан для експлуатації, якщо ви не встигли вчасно зробити фінішне покриття.</p>

                                    <a href="{{route('page','remont-napivsukhikh-styazhok')}}" class="read-more-link colored">Дізнатись більше</a>
                                    <h4 class="content-heading">Шліфування обробка бетону</h4>
                                    <p>
                                        Твердження, що Loft стиль це економічний варіант ремонту - не відповідає дійсності, адже для того аби досягнути бажаного результату  Loft, потрібно все спланувати, ще на етапі будівництва, від вибору якісного бетону, якісної опалобки і дотримання якісного залиття моноліту. Тільки тоді, ваш монолітний бетон матиме красивий вигляд. Проте, бувають випадки коли замовляють послуги дизайну на етапі завершеного будівництва, а стан бетону не відповідає вимогам, які ставить перед собою замовник, тоді у пригоді стають послуги в професійній обробці і декоруванні бетону.
                                    </p>
                                    <a href="{{route('page','shlifuvannya-betonu-v-stili-loft')}}" class="read-more-link colored">Дізнатись більше</a>
                                    <h4 class="content-heading">Ремонт бетонного топінгу</h4>
                                    <p>
                                        Бетонний топінг відрізняється від бетонних стяжок, тим, що на фініші додається кристалізатор і затирається машинками, так званими, вертольотами, утворюючи своєрідний міцніший верхній шар в 3-5 мм. Це робиться для того, щоб покриття стало міцніше та гладкіше. За кордоном, практично, не використовують таке покриття, тому, що воно фінансово тільки трішки дешевше за захищений полімерами бетон, проте термін експлуатації значно нижчий.
                                    </p>
                                    <a href="{{route('page','remont-betonu-ta-toppingu')}}" class="read-more-link colored">Дізнатись більше</a>
                                </div>
                            </div>
                        </div>
                        <div id="tab2" class="tab">
                            <div class="tab-content">
                                <div class="news-feed grid-3-columns">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <aside>
            <div class="product-additional-info">
                <div class="product-fav-counter"><svg class="crumina-icon">
                        <use xlink:href="#heart-icon"></use>
                    </svg><span class="count">105</span>
                </div>
                <div class="product-purchase-info">
                    <form class="cryptoki-form" id="purchase-form">
                        <div class="product-price">
                            <div class="price">550/3500</div>
                            <div class="label">вартість м2</div>
                        </div>
                        <div class="pricing-plans">
                            <div class="plan">
                                <div class="license-description">Кінцева вартість залежить від типу покриття та площі. У разі виникнення будь-яких запитань, ви можете замовити дзвінок, або скористатись
                                    <a href="#">автоматизованим розрахунком</a> вартості вашого об'єкта.
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="product-score">
                    <div class="score-item">
                        <div class="value">1 рік</div>
                        <div class="label">гарантійний термін</div>
                    </div>
                    <div class="score-item">
                        <div class="value">50 м2</div>
                        <div class="label">мінімальне замовлення</div>
                    </div>
                </div>
                <div class="product-details">
                    <div class="small-title">Деталі</div>
                    <div class="product-details-wrapper">
                        <ul class="details-title">
                            <li>Час виконання</li>
                            <li>Послуги</li>
                        </ul>
                        <ul class="details-value">
                            <li>0,2 - 0,7 мм.</li>
                            <li>7-9 днів (при площі 100м2)</li>
                            <li class="tags-list">
                                <span class="colored"><a href="{{route('page','remont-styazhki')}}"> Ремонт бетонних стяжок</a></span>, <span
                                    class="colored"><a href="{{route('page','remont-napivsukhikh-styazhok')}}"> Ремонт напівсухих стяжок</a></span>, <span class="colored"><a
                                        href="{{route('page','shlifuvannya-betonu-v-stili-loft')}}"> Шліфування обробка бетону</a></span>,
                                <span class="colored"><a href="{{route('page','remont-betonu-ta-toppingu')}}"> Ремонт бетонного топінгу</a></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </aside>
    </div>
@endsection

