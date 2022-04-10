@extends('layouts.app2')
@section('title', 'Медичні підлоги від ІВ БУД')
@section('meta', 'Підлоги в медичні заклади, медичні покриття для підлоги, від компанії | ІВ БУД')
@section('keywords', 'Поліуританова підлога в лікарю, кварцова підлога для медецини, медичні підлоги, підлоги для медецини від компанії | ІВ БУД')
@section('breadcrumbs')
@endsection
@section('content')

    <div class="primary-content-area container content-padding product-page-ds">
        <div class="main-content-area product-ds">
            <div class="product-title-section">
                <h1>Покриття для медицини</h1>
                <p>Наливні покриття, підлоги для стоматології, хірургії,  реанімації,  лабораторії, окремих медичних кабінетів та для холів в лікарні.</p>
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
                <img src="{{asset('HTML-NFTMarketplace/img/med.png')}}" alt="Медичні покриття, підлога для медичних установ від компанії ІВ БУД" style="border-radius: 20px;">
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
                                    <div class="title h6">Унікальність покриття</div>
                                    <p>Завдяки використанню полімерних підлог в медичних установах, можна створити практично незмінне медичне підлогове покриття, стійке до будь-яких хімічних реагентів і механічних навантажень. Щоб забезпечити безпечні та комфортні умови, необхідно правильно підібрати наливні підлоги для медичних установ, які відповідають висунутим вимогам:</p>
                                    <ul class="list-line-height">
                                        <li><svg class="crumina-icon bullet-icon">
                                                <use xlink:href="#circle-icon"></use>
                                            </svg>Наявність сертифікату ISO 22196</li>
                                        <li><svg class="crumina-icon bullet-icon">
                                                <use xlink:href="#circle-icon"></use>
                                            </svg>Підходить для мед закладів</li>
                                        <li><svg class="crumina-icon bullet-icon">
                                                <use xlink:href="#circle-icon"></use>
                                            </svg>Відповідає вимогам НАССР</li>
                                    </ul>
                                    <p>Медичні покриття від компанії <span class="gradient-text">  @ivbudfloor</span> в основному ділиться на 4 основні типи:
                                    </p>
                                    <ul class="list-line-height">
                                        <li><svg class="crumina-icon bullet-icon">
                                                <use xlink:href="#circle-icon"></use>
                                            </svg>Поліуританова підлога</li>
                                        <li><svg class="crumina-icon bullet-icon">
                                                <use xlink:href="#circle-icon"></use>
                                            </svg>Промисловий кварц</li>
                                        <li><svg class="crumina-icon bullet-icon">
                                                <use xlink:href="#circle-icon"></use>
                                            </svg>Епоксидна налавна підлога</li>
                                        <li><svg class="crumina-icon bullet-icon">
                                                <use xlink:href="#circle-icon"></use>
                                            </svg>Епоксидне тонкошарове покриття</li>
                                    </ul>

                                    <h4 class="content-heading">Поліуританова підлога</h4>
                                    <p>
                                        Поліуретанова підлога використовується в основному в медичних закладах, офісах, або на промисловості де є потреба в стерильності покриття, поліуретан є еластичним, шумоподавляючим та екологічно чистим.</p>
                                    <p>
                                        Поліуретанова підлога робиться доволі просто по підготовленій основі. Суміш проливається та розтягується спеціальними ракелями по площині, далі наноситься поліуретановий фінішний лак, який як і у випадку з епоксидами, додає корисних властивостей покриттю.
                                    </p>
                                    <a href="{{route('page','poliuretanova-pidloga')}}" class="read-more-link colored">Дізнатись більше</a>
                                    <h4 class="content-heading">Промисловий кварц</h4>
                                    <p>
                                        Кварцова  підлога складається з декількох шарів кварцу та епоксиду. Підлога шар за шаром накладається, попередньо правильно уклавши, прошліфувавши та обезпиливши кожен із шарів.

                                        В кінцевому результаті отримується доволі товсте покриття, яке надійно захищає основу від зовнішніх механічних та хімічних впливів. Фінішний лак наноситься для додавання декоративних чи інших властивостей.
                                    </p>
                                    <a href="{{route('page','promislove-kvarcove-pokrittya')}}" class="read-more-link colored">Дізнатись більше</a>
                                    <h4 class="content-heading">Епоксидне тонкошарове покриття</h4>
                                    <p>
                                        Даний вид покриття ідеально підходить для сходових пройомів, душевих, лабаротаторій, окремих медичних кабінетів, та для холів лікарень.
                                    <p>
                                        Фінішним етапом в створенні епоксидного окрасу є малювання розмітки, коли це потрібно та нанесення фінішного лаку. Фінішний лак може бути багатьох видів в залежності від потреб та домішок до нього. Епоксидну підлогу можна експлуатувати вже через 12 днів, вона повністю набирає своїх експлуатаційних властивостей через 14 днів.
                                    </p>
                                    <a href="{{route('page','epoksidnij-okras')}}" class="read-more-link colored">Дізнатись більше</a>
                                    <h4 class="content-heading">Епоксидна налавна підлога</h4>
                                    <p>
                                        По своїм хімічним та механічним властивостям, дуже подібна до епоксидного окрасу, єдине, що товщина, збільшує стійкість до ударів і термін її експлуатації 10-15 років. Явною перевагою над іншими покриттями, є її зовнішній вигляд, дзеркальний ефект. Недоліком є нестійкість до царапин, тому глянець в місцях максимальної прохідності зникає.
                                    </p>
                                    <p>
                                        Дані покриття використовуються в мед кабінетах та лабораторіях ,де краса та хімічна стійкість відіграють ключову роль.
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
                            <div class="price">1800/3000</div>
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
                            <li>Типи медичних покриттів</li>
                        </ul>
                        <ul class="details-value">
                            <li>0,2 - 0,7 мм.</li>
                            <li>7-9 днів (при площі 100м2)</li>
                            <li class="tags-list">
                                <span class="colored"><a href="{{route('page','promislove-kvarcove-pokrittya')}}">Промисловий кварц</a></span>, <span
                                    class="colored"><a href="{{route('page','poliuretanova-pidloga')}}"> Поліуританова підлога</a></span>, <span class="colored"><a
                                        href="{{route('page','epoksidnij-okras')}}"> Епоксидне тонкошарове покриття</a></span>,
                                <span class="colored"><a href="{{route('page','nalivna-pidloga')}}"> Епоксидна наливна підлога</a></span>,
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

