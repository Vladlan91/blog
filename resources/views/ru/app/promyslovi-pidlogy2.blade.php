@extends('layouts.app2')
@section('title', 'Промислові покриття')
@section('meta', 'Промислові покриття | ІВ БУД, підлога для промисловості, підлога для складів, вимоги до підлоги в харчовій промисловості')
@section('keywords', 'Склідські приміщення, харчова промисловість, промислова підлога від компанії | ІВ БУД')
@section('breadcrumbs')
@endsection
@section('content')

    <div class="primary-content-area container content-padding product-page-ds">
        <div class="main-content-area product-ds">
            <div class="product-title-section">
                <h1>Промислові підлоги</h1>
                <p>Промислова підлога від компанії  <span class="gradient-text">  @ivbudfloor</span>  в основному ділиться на 5 основних типів, в залежності від поставлених цілей.</p>
                <div class="product-subtitle">
                    <div class="avatar-block">
                        <div class="avatar box-42">
                            <a href="">
                                <img src="{{asset('HTML-NFTMarketplace/img/logoavatar.png')}}" alt="avatar"><span class="verified"><svg class="crumina-icon">
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
                <img src="{{asset('HTML-NFTMarketplace/img/prom.png')}}" alt="Промислова підлога від компанії ІВ БУД" style="border-radius: 20px;">
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
                        <li class="swiper-slide"><a href="#tab2">Відео</a></li>
                        <li class="swiper-slide"><a href="#tab2">Фото</a></li>
                    </ul>
                    <div class="tabs-content-wrapper">
                        <div id="tab1" class="tab active">
                            <div class="tab-content">
                                <div class="product-description">
                                    <div class="title h6">Загальна інформація!</div>
                                    <p> Декоративні покриття від компанії  <span class="gradient-text">  @ivbudfloor</span>  в основному ділиться на 4 основні типи:</p>
                                    <ul class="list-line-height">
                                        <li><svg class="crumina-icon bullet-icon">
                                                <use xlink:href="#circle-icon"></use>
                                            </svg>Промислове обезпилення</li>
                                        <li><svg class="crumina-icon bullet-icon">
                                                <use xlink:href="#circle-icon"></use>
                                            </svg>Поліуританова підлога</li>
                                        <li><svg class="crumina-icon bullet-icon">
                                                <use xlink:href="#circle-icon"></use>
                                            </svg>Промисловий кварц</li>
                                        <li><svg class="crumina-icon bullet-icon">
                                                <use xlink:href="#circle-icon"></use>
                                            </svg>Епоксидна наливна підлога</li>
                                        <li><svg class="crumina-icon bullet-icon">
                                                <use xlink:href="#circle-icon"></use>
                                            </svg>Епоксидне тонкошарове покриття</li>
                                    </ul>
                                    <p>
                                        Всі ці види покриття ми розглянемо поетапно, проте варто запам’ятати перший і напевно, самий важливий етап для створення будь-якого покриття це правильна основа. Для будь-якого полімеру потрібно використовувати бетон, мінімум марки 300, а ще краще 400. Далі потрібно добре вібрувати розчин, попередньо забезпечивши гідроізоляцією основу.
                                    </p>
                                    <h4 class="content-heading">Промислове обезпилення</h4>
                                    <p>
                                        Спеціалісти компанії  <span class="gradient-text">  @ivbudfloor</span>  на даному етапі перевіряють вологість бетону, яка не повинна перевищувати 3-4% для епоксидних та кварцових покриттів і 7% для поліуретанових. Також перевіряють основу на відрив, показник якого, в середньому, повинен бути не нижче 1,5 МПа. Якщо ці всі дані відповідають вимогам, тоді потрібно приступати до етапу шліфування чи дробоструєння бетону. На даному етапі забирається цементне молочко, після чого всі тріщини та вибоїни заробляються ремонтною сумішшю.

                                    </p>
                                    <p>
                                        Основа ще раз прошліфовується і настає етап грунтування бетону. На покриття наноситься епоксидний грунт, що зміцнює його і надає йому кращі характеристики. Після грунтування основи бетон стійки до вологості і механічних навантажень, перестає пилити і зручний в прибирані.
                                    </p>
                                    <a href="{{route('page','promislove-obezpilennya')}}" class="read-more-link colored">Дізнатись більше</a>
                                    <h4 class="content-heading">Промисловий кварц</h4>
                                    <p>
                                        Кварцова промислова підлога складається з декількох шарів кварцу та епоксиду. Підлога шар за шаром накладається, попередньо правильно уклавши, прошліфувавши та обезпиливши кожен із шарів.

                                        В кінцевому результаті отримується доволі товсте покриття, яке надійно захищає основу від зовнішніх механічних та хімічних впливів. Фінішний лак наноситься для додавання декоративних чи інших властивостей.
                                    </p>
                                    <a href="{{route('page','promislove-kvarcove-pokrittya')}}" class="read-more-link colored">Дізнатись більше</a>
                                    <h4 class="content-heading">Полімерний мікроцемент</h4>
                                    <p>
                                        Даний вид покриття використовується на складах, заводах та промисловості, де в основному є піше навантаження, адже епоксидна підлога передає все своє навантаження на бетон. Існує багато варіантів створення даного покриття, в залежності від потреб, це і хімічна стійкість, антистатична та інші, але ми покажемо основний процес створення (базу) для пішого навантаження.
                                        Отже, по готовій прогрунтованій основі наноситься декілька шарів епоксидної фарби. Важливо пам’ятати, що епоксидна фарба лягає по бетону не так, як звичайна, тому для виконання даного покриття, потрібно мати певні навики.</p>
                                    <p>
                                        Фінішним етапом в створенні епоксидної промислової підлоги є малювання розмітки, коли це потрібно та нанесення фінішного лаку. Фінішний лак може бути багатьох видів в залежності від потреб та домішок до нього. Промислову епоксидну підлогу можна експлуатувати вже через 12 днів, вона повністю набирає своїх експлуатаційних властивостей через 14 днів.
                                    </p>
                                    <a href="{{route('page','polimernij-mikrocement')}}" class="read-more-link colored">Дізнатись більше</a>
                                    <h4 class="content-heading">Епоксидне тонкошарове покриття</h4>
                                    <p>
                                        Нанесення полімерного покриття не передбачає стиків або деформаційних швів. Можна використовувати в приміщеннях будь-яких розмірів.</p>
                                    <p>
                                        Один матеріал і різний результат.
                                        Класичний спосіб, дозволяє досягти глянцивої̆ поверхні, але можливий і інший варіант, гладка і в той же час матова структура. Покриття підходить для застосування в приміщеннях з підвищеною вологістю, у ванній кімнаті, в кухні, душовій кабіні, зонах біля басейну.
                                    </p>
                                    <a href="{{route('page','epoksidnij-okras')}}" class="read-more-link colored">Дізнатись більше</a>
                                    <h4 class="content-heading">Поліуретанова підлога</h4>
                                    <p>
                                        Поліуретанова підлога використовується в основному в медичних закладах, офісах, або на промисловості де можливе розтягнення та деформація швів, адже поліуретан є еластичнішим та шумоподавляючим та екологічно чистим.</p>
                                    <p>
                                        Поліуретанова підлога робиться доволі просто по підготовленій основі. Суміш проливається та розтягується спеціальними ракелями по площині, далі наноситься поліуретановий фінішний лак, який як і у випадку з епоксидами, додає корисних властивостей покриттю.
                                    </p>
                                    <a href="{{route('page','poliuretanova-pidloga')}}" class="read-more-link colored">Дізнатись більше</a>
                                    <h4 class="content-heading">Епоксидна наливна підлога</h4>
                                    <p>
                                        Покриття за своїми властивостями таке ж, як епоксидний окрас, проте товщинна даного покриття коливається в межах 3-5 мм, а епоксидний окрас має товщину в межах 0,8 - 1,5 мм. Також, для збільшення товщини покриття, додається кварцовий пісок, в пропорціях 1 : 2, кварц осідає, відповідно не впливає на естетичний вигляд.
                                    </p>
                                    <p>
                                        Дане покриття має більший запас міцності, в порівняння з тонкошаровим окрасом, відповідно і довший термін експлуатації.
                                    </p>
                                    <a href="{{route('page','nalivna-pidloga')}}" class="read-more-link colored">Дізнатись більше</a>

                                </div>
                            </div>
                        </div>
                        <div id="tab2" class="tab">
                            <div class="tab-content">
                                <div class="news-feed grid-3-columns">
                                    <div class="news-item video-post-format">
                                        <a class="post-format-icon" data-fslightbox data-type="youtube" href="https://www.youtube.com/watch?v=dhQrsJ0wNhg">
                                            <svg class="crumina-icon">
                                                <use xlink:href="#play-icon"></use>
                                            </svg>
                                        </a>
                                        <div class="news-thumb">
                                            <a href="14-blog-post-centered.html">
                                                <img src="{{asset('HTML-NFTMarketplace/img/video5.png')}}" alt="Епоксидне тонкошарове покриття"></a>
                                        </div>
                                        <div class="news-content">
                                            <div class="news-tags">
                                                <span class="tag-item"><a href="{{route('page','epoksidnij-okras')}}" >Епоксидне тонкошарове покриття</a></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="news-item video-post-format">
                                        <a class="post-format-icon" data-fslightbox data-type="youtube" href="https://www.youtube.com/watch?v=26PRbMRD1S0">
                                            <svg class="crumina-icon">
                                                <use xlink:href="#play-icon"></use>
                                            </svg>
                                        </a>
                                        <div class="news-thumb">
                                            <a href="14-blog-post-centered.html">
                                                <img src="{{asset('HTML-NFTMarketplace/img/video7.png')}}" alt="Промислові кварцові покриття"></a>
                                        </div>
                                        <div class="news-content">
                                            <div class="news-tags">
                                                <span class="tag-item"><a href="{{route('page','promislove-kvarcove-pokrittya')}}" >Промислові кварцові покриття</a></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="news-item video-post-format">
                                        <a class="post-format-icon" data-fslightbox data-type="youtube" href="https://www.youtube.com/watch?v=0IQZm5kjrZw">
                                            <svg class="crumina-icon">
                                                <use xlink:href="#play-icon"></use>
                                            </svg>
                                        </a>
                                        <div class="news-thumb">
                                            <a href="14-blog-post-centered.html">
                                                <img src="{{asset('HTML-NFTMarketplace/img/video11.png')}}" alt="Поліуретанова підлога"></a>
                                        </div>
                                        <div class="news-content">
                                            <div class="news-tags">
                                                <span class="tag-item"><a href="{{route('page','poliuretanova-pidloga')}}" >Поліуретанова підлога</a></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="news-item video-post-format">
                                        <a class="post-format-icon" data-fslightbox data-type="youtube" href="https://www.youtube.com/watch?v=qyMdLycry64">
                                            <svg class="crumina-icon">
                                                <use xlink:href="#play-icon"></use>
                                            </svg>
                                        </a>
                                        <div class="news-thumb">
                                            <a href="14-blog-post-centered.html">
                                                <img src="{{asset('HTML-NFTMarketplace/img/video12.png')}}" alt="Промислові кварцові покриття"></a>
                                        </div>
                                        <div class="news-content">
                                            <div class="news-tags">
                                                <span class="tag-item"><a href="{{route('page','promislove-kvarcove-pokrittya')}}" >Промислові кварцові покриття</a></span>
                                            </div>
                                        </div>
                                    </div>
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
                            <div class="price">800/2000</div>
                            <div class="label">вартість м2</div>
                        </div>
                        <div class="pricing-plans">
                            <div class="plan">
                                <div class="license-description">Кінцева вартість залежить від типу покриття та площі. У разі виникнення будь-яких запитань, ви можете замовити дзвінок, або скористатись
                                    <a href="#">автоматизованим розрахунком</a> вартості вашого об'єкта.
                                </div>
                            </div>
                        </div>
                        <a class="btn btn-fullwidth  btn-dark" href="{{route('comerc')}}">Замовити комерційну!</a>
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
                            <li>Товщина покриття</li>
                            <li>Час виконання</li>
                            <li>Типи декоративних покриттів</li>
                        </ul>
                        <ul class="details-value">
                            <li>0,2 - 0,7 мм.</li>
                            <li>7-9 днів (при площі 100м2)</li>
                            <li class="tags-list">
                                <span class="colored"><a href="{{route('page','promislove-obezpilennya')}}">Промислове обезпилення</a></span>, <span
                                    class="colored"><a href="{{route('page','poliuretanova-pidloga')}}">Поліуританова підлога</a></span>,<span class="colored"><a href="{{route('page','promislove-kvarcove-pokrittya')}}">Промисловий кварц</a></span>, <span class="colored"><a
                                        href="{{route('page','epoksidnij-okras')}}"> Епоксидне тонкошарове покриття</a></span>,
                                <span class="colored"><a href="{{route('page','nalivna-pidloga')}}"> Епоксидна наливна підлога</a></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </aside>
    </div>
    <div class="cryptoki-modal" id="review-modal4">
        <div class="modal-bg modal-exit"></div>
        <div class="modal-container">
            <form class="cryptoki-form review-form">
                <div class="review-form-title">Review: Cryptoki NFT and DIgital Market
                    PSD Template</div>
                <div class="rating-box">
                    <div class="title">Your rating <span class="colored">*</span></div>
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
                <div class="form-field">
                    <label>Review Title <span
                            class="colored">*</span></label>
                    <input type="text">
                </div>
                <div class="form-field">
                    <label>Your Review</label>
                    <textarea cols="30" rows="7"></textarea>
                </div>
                <input class="btn btn-fullwidth gradient-background" type="submit"
                       value="Post review">
            </form>
            <button class="modal-close modal-exit"><svg class="crumina-icon">
                    <use xlink:href="#cross-icon"></use>
                </svg></button>
        </div>
    </div>
@endsection
