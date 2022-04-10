@extends('layouts.app2')
@section('title', 'ІВ БУД - промислові та декоративні наливні підлоги - Підлоги Ів буд')
@section('meta', 'Промислові покриття✔ Декоративні наливні підлоги✔ Унікальні кварцові рішення✔ Ремонт бетону та стяжки - Ів Буд, лідер галузі полімерних покриттів.')
@section('keywords', 'Полімерний мікроцемент | ІВ БУД')
@section('breadcrumbs')
@endsection
@section('content')
    <div class="primary-content-area container content-padding">
        <div class="section-padding">
            <div id="homeSlider" class="swiper">
                <div class="swiper-wrapper">
                    <div id="slide-1" class="swiper-slide">
                        <picture>
                            <source type="" srcset="" />
                            <img src="{{asset('HTML-NFTMarketplace/img/banner/1.png')}}" width="940" height="640" alt="Промислові покриття від компанії ІВ БУД" loading="lazy">
                        </picture>

                        <div class="dark-overlay"></div>
                        <div class="slide-content">
                            <div class="item-info">
                                <div class="item-meta">

                                </div>
                                <div class="slide-subtitle">Обирайте конструктивно правильні рішення!</div>
                                <div class="title slide-title">Промислові покриття</div>
                                <div class="item-bid-section">
                                    <div class="bid-item">
                                        <div class="label">Зроблено об'єктів</div>
                                        <div class="value">8.6 ТИС/М2</div>
                                    </div>
                                    <div class="bid-item">
                                        <div class="label">standard haccp</div>
                                    </div>
                                    <div class="gradient-border_white-bg slide-button"><a class="btn btn-normal" href="05-product-page.html">Читати більше!</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="slide-4" class="swiper-slide">
                        <picture>
                            <source type="" srcset="" />
                            <img src="{{asset('HTML-NFTMarketplace/img/banner/4.png')}}" width="940" height="640" alt="Красиві безшовні підлоги, мікроцемент/кварц/наливна пілога від ІВ БУД" loading="lazy">
                        </picture>
                        <div class="dark-overlay"></div>
                        <div class="slide-content">
                            <div class="item-info">
                                <div class="item-meta">

                                </div>
                                <div class="title slide-title">Декоративні покриття</div>
                                <div class="item-bid-section">
                                    <div class="bid-item">
                                        <div class="label">Епоксидні </div>
                                    </div>
                                    <div class="bid-item">
                                        <div class="label">Кварцові Покриття</div>
                                    </div>
                                    <div class="gradient-border_white-bg slide-button"><a class="btn btn-normal" href="{{route('page', 'dekorativni-pokrittya')}}">Читати більше!</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="slide-2" class="swiper-slide slide-content-align-right">
                        <picture>
                            <source type="image" srcset="" />
                            <img src="{{asset('HTML-NFTMarketplace/img/banner/2.png')}}" width="940" height="640" alt="Покриття для медицини, підлога в лікарню">
                        </picture>

                        <div class="dark-overlay"></div>
                        <div class="slide-content">
                            <div class="slide-subtitle">Обирайте конструктивно правильні рішення!</div>
                            <div class="slide-title">Покриття для медицини
                            </div>
                            <div class="gradient-border_white-bg slide-button"><a class="btn btn-normal" href="{{route('page','pidloga-dlya-medychnyh-zakladiv')}}">Читати більше!</a></div>

                        </div>
                    </div>
                    <div id="slide-4" class="swiper-slide">
                        <picture>
                            <source type="" srcset="" />
                            <img src="{{asset('HTML-NFTMarketplace/img/banner/3.png')}}" width="940" height="640" alt="Стеля з бетону від ІВ БУД, шліфування та полірування бетонних елементів" loading="lazy">
                        </picture>
                        <div class="dark-overlay"></div>
                        <div class="slide-content">
                            <div class="item-info">
                                <div class="item-meta">

                                </div>
                                <div class="slide-subtitle">Шліфування та полірування бетонних елементів!</div>
                                <div class="title slide-title">Обробка бетону LOFT</div>
                                <div class="item-bid-section">
                                    <div class="bid-item">
                                        <div class="label">Обробка фінішним покриття</div>
                                        <div class="value">Мат/Сатин/Глянець</div>
                                    </div>
                                    <div class="gradient-border_white-bg slide-button"><a class="btn btn-normal" href="05-product-page.html">Читати більше!</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="homeslider-nav">
                    <div class="swiper-button-next"><svg class="crumina-icon next-button">
                            <use xlink:href="#arrow-right2-icon"></use>
                        </svg></div>
                    <div class="swiper-button-prev"><svg class="crumina-icon prev-button">
                            <use xlink:href="#arrow-left2-icon"></use>
                        </svg></div>
                </div>
            </div>
        </div>
        <div class="container section-padding">
            <div class="section-padding overflow-hidden">
                <div class="collections-carousel">
                    <div class="section-title-wrapper">
                        <div class="section-title"><span class="gradient-text">Типи</span> підлог</div>
                        <div class="title-navigation">
                            <div class="featured-carousel-icon swiper-button-prev"><svg class="crumina-icon">
                                    <use xlink:href="#arrow-left2-icon"></use>
                                </svg></div>
                            <div class="featured-carousel-icon swiper-button-next"><svg class="crumina-icon">
                                    <use xlink:href="#arrow-right2-icon"></use>
                                </svg></div>
                        </div>
                    </div>
                    <div class="featured-carousel">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="collection-item">
                                    <div class="cover-image"><img src="{{asset('HTML-NFTMarketplace/img/typefloor/1.png')}}" alt="Кварцові покриття, сіра підлога в стилі лофт">
                                    </div>
                                    <div class="collection-info">
                                        <div class="title h3">Кварцові покриття</div>
                                        <div class="number">5320 м2 реалізованї плоші</div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="collection-item">
                                    <div class="cover-image"><img src="{{asset('HTML-NFTMarketplace/img/typefloor/2.png')}}" alt="епоксидні безшовні покриття">
                                    </div>
                                    <div class="collection-info">
                                        <div class="title h3">Епоксидний тонкошар</div>
                                        <div class="number">2807 м2 реалізованї плоші</div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="collection-item">
                                    <div class="cover-image"><img src="{{asset('HTML-NFTMarketplace/img/typefloor/3.png')}}" alt="імітація тераццо, епоксидний тонкошар з флоками">
                                    </div>
                                    <div class="collection-info">
                                        <div class="title h3">Епоксидний тонкошар з флоками</div>
                                        <div class="number">590 м2 реалізованї плоші</div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="collection-item">
                                    <div class="cover-image"><img src="{{asset('HTML-NFTMarketplace/img/typefloor/4.png')}}" alt="мікроцемент, стиль лофт">
                                    </div>
                                    <div class="collection-info">
                                        <div class="title h3">Loft Мікроцемент</div>
                                        <div class="number">590 м2 реалізованї плоші</div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="collection-item">
                                    <div class="cover-image"><img src="{{asset('HTML-NFTMarketplace/img/typefloor/5.png')}}" alt="наливна епоксидна підлога мармур">
                                    </div>
                                    <div class="collection-info">
                                        <div class="title h3">Art Наливна</div>
                                        <div class="number">590 м2 реалізованї плоші</div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="collection-item">
                                    <div class="cover-image"><img src="{{asset('HTML-NFTMarketplace/img/typefloor/6.png')}}" alt="мікроцемент, мікроцемент на підлогу">
                                    </div>
                                    <div class="collection-info">
                                        <div class="title h3">Мікроцемент</div>
                                        <div class="number">2590 м2 реалізованї плоші</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container section-padding">
            <div class="section-title-wrapper">
                <div class="section-title">Дизайнерські  <span class="gradient-text">проекти</span></div>
                <div class="title-navigation">
                    <div class="featured-sellers-icon swiper-button-prev"><svg class="crumina-icon">
                            <use xlink:href="#arrow-left2-icon"></use>
                        </svg></div>
                    <div class="featured-sellers-icon swiper-button-next"><svg class="crumina-icon">
                            <use xlink:href="#arrow-right2-icon"></use>
                        </svg></div>
                </div>
            </div>
            <div class="featured-sellers-carousel featured-box-wrapper overflow-hidden">
                <div class="swiper-wrapper">
                    @foreach($companies as $company)
                    <div class="swiper-slide">
                        <div class="seller-card">
                            <div class="about-seller">
                                <div class="seller-info">
                                    <div class="avatar box-64">
                                        <a href="06-profile-page.html">
                                            <img src="{{asset($company->logo)}}" alt="{{$company->name}}"></a><span class="verified"><svg
                                                class="crumina-icon">
                                                        <use xlink:href="#check-icon"></use>
                                                    </svg></span>
                                    </div>
                                    <div class="seller-meta">
                                        <div class="title">{{$company->name}}</div>
                                        <div class="meta">{{$company->slug}}</div>
                                    </div>
                                </div>
                                <div class="seller-stats">
                                    <div class="seller-score">
                                        <div class="number title">179</div>
                                        <div class="label">Total Items</div>
                                    </div>
                                    <div class="seller-score">
                                        <div class="number title">13.5K</div>
                                        <div class="label">Total Sales</div>
                                    </div>
                                    <div class="seller-score">
                                        <div class="number title">4.8 / 5</div>
                                        <div class="label">Avg.Rating</div>
                                    </div>
                                </div>
                            </div>
                            <div class="seller-products">
                                <div class="products-previews">
                                    @foreach($company->project()->get() as $progect)
                                        @if(isset($progect))
                                            <div class="preview-box">
                                                <a href="07-product-page-v3.html"><img src="{{asset($progect->avatar)}}" alt="безшовні підлоги від ів буд" style="width: 100%;height: 100%;"></a>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                                <div class="more-link"><a href="06-profile-page.html">
                                        <svg class="crumina-icon">
                                            <use xlink:href="#dots-icon"></use>
                                        </svg>
                                    </a>
                                </div>
                            </div>


                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="more-section flex-center">
                <a href="{{route('company')}}" class="btn btn-normal btn-dark waves-effect waves-button waves-float waves-light">Колоборація з студіями дизайну</a>
            </div>
        </div>
        <div class="container section-padding">
            <div class="section-title-wrapper">
                <div class="section-title">Соціальні <span class="gradient-text">Мережі</span></div>
                <div class="title-navigation">
                    <div class="items-categories-icon swiper-button-prev"><svg class="crumina-icon">
                            <use xlink:href="#arrow-left2-icon"></use>
                        </svg></div>
                    <div class="items-categories-icon swiper-button-next"><svg class="crumina-icon">
                            <use xlink:href="#arrow-right2-icon"></use>
                        </svg></div>
                </div>
            </div>
            <div class="items-categories-carousel overflow-hidden">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="" class="box-shadow">
                            <div class="category-card youtube-gradient-diagonal">
                                <div class="category-wrapper"
                                     style="background-image: url(HTML-NFTMarketplace/img/typefloor/social/screens-4.png);">
                                    <div class="category-content">
                                        <div class="category-title">YouTube<br>

                                        </div>
                                        <div class="follow-me gradient-border_white-bg">
                                            <button class="btn btn-normal">Стежити!</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="" class="box-shadow">
                            <div class="category-card dark-gradient-diagonal">
                                <div class="category-wrapper"
                                     style="background-image: url(HTML-NFTMarketplace/img/typefloor/social/screens-2.png);">
                                    <div class="category-content">
                                        <div class="category-title">Tik Tok
                                        </div>
                                        <div class="follow-me gradient-border_white-bg">
                                            <button class="btn btn-normal">Стежити!</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="" class="box-shadow">
                            <div class="category-card orange-gradient-diagonal">
                                <div class="category-wrapper"
                                     style="background-image: url(HTML-NFTMarketplace/img/typefloor/social/screens-1.png);">
                                    <div class="category-content">
                                        <div class="category-title">Instagram<br>

                                        </div>
                                        <div class="follow-me gradient-border_white-bg">
                                            <button class="btn btn-normal">Стежити!</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="" class="box-shadow">
                            <div class="category-card facabook-gradient-diagonal">
                                <div class="category-wrapper"
                                     style="background-image: url(HTML-NFTMarketplace/img/typefloor/social/screens-5.png);">
                                    <div class="category-content">
                                        <div class="category-title">Facebook<br>

                                        </div>
                                        <div class="follow-me gradient-border_white-bg">
                                            <button class="btn btn-normal">Стежити!</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="" class="box-shadow">
                            <div class="category-card turquoise-gradient-diagonal">
                                <div class="category-wrapper"
                                     style="background-image: url(HTML-NFTMarketplace/img/typefloor/social/screens-3.png);">
                                    <div class="category-content">
                                        <div class="category-title">Telegram</div>
                                        <div class="follow-me gradient-border_white-bg">
                                            <button class="btn btn-normal">Стежити!</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container section-padding">
            <div class="section-padding overflow-hidden">
                <div class="artworks-carousel swiper-initialized swiper-horizontal swiper-pointer-events">
                    <div class="section-title-wrapper">
                        <div class="section-title"><span class="gradient-text">Ми</span> розміщені</div>
                        <div class="title-navigation">
                            <div class="featured-carousel-icon swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-652c26aafe90eb52"><svg class="crumina-icon">
                                    <use xlink:href="#arrow-left2-icon"></use>
                                </svg></div>
                            <div class="featured-carousel-icon swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-652c26aafe90eb52"><svg class="crumina-icon">
                                    <use xlink:href="#arrow-right2-icon"></use>
                                </svg></div>
                        </div>
                    </div>
                    <div class="swiper-wrapper" id="swiper-wrapper-652c26aafe90eb52" aria-live="polite" style="transform: translate3d(-2680px, 0px, 0px); transition-duration: 0ms;"><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="2" role="group" aria-label="3 / 3" style="width: 1340px;">
                            <div class="artwork-item">
                                <div class="artwork-media">
                                    <a href="07-product-page-v3.html"><img src="img/content/artworks/artwork-7.png" alt=""></a>
                                </div>
                                <div class="artwork-details">
                                    <h3 class="artwork-title">Crimson Planks</h3>
                                    <div class="avatar-block">
                                        <div class="avatar box-42">
                                            <a href="">
                                                <img src="{{asset('HTML-NFTMarketplace/img/logoavatar.png')}}" alt="ivbudfloor icon"><span class="verified"><svg class="crumina-icon">
                                                        <use xlink:href="#check-icon"></use>
                                                    </svg></span></a>
                                        </div>
                                        <div class="avatar-meta">
                                            <div class="avatar-title gradient-text"><a href="">The
                                                    Green Goo</a></div>
                                            <div class="avatar-meta">@daGreenGoo</div>
                                        </div>
                                    </div>
                                    <div class="product-meta-section">
                                        <div class="product-meta-item">
                                            <div class="label">Current bid</div>
                                            <div class="value">3.47 ETH</div>
                                            <div class="caption">134.250 U$D</div>
                                        </div>
                                        <div class="product-meta-item">
                                            <div class="label">AUCTION ENDING IN</div>
                                            <div class="countdown">
                                                <div class="js-countdown" data-timer="104400" data-labels="Days , Hours , Mins , Secs"><div aria-hidden="true" class="countdown__timer"><span class="countdown__item"><span class="countdown__value countdown__value--0 js-countdown__value--0">1</span><span class="countdown__label">Days</span></span><span class="countdown__item"><span class="countdown__value countdown__value--1 js-countdown__value--1">04</span><span class="countdown__label">Hours</span></span><span class="countdown__item"><span class="countdown__value countdown__value--2 js-countdown__value--2">14</span><span class="countdown__label">Mins</span></span><span class="countdown__item"><span class="countdown__value countdown__value--3 js-countdown__value--3">01</span><span class="countdown__label">Secs</span></span></div></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-description">
                                        <p>Crimson Planks was made in a sleek and modern 3D style with a wide range of
                                            elements and techniques that show what can be achieved with the newest
                                            technologies...
                                        </p></div>
                                    <div class="bidding-section">
                                        <div class="place-bid"><button class="btn btn-wide btn-dark waves-effect waves-button waves-float waves-light">Place a
                                                Bid!</button></div>
                                        <div class="product-fav-counter gradient-background"><svg class="crumina-icon">
                                                <use xlink:href="#heart-icon"></use>
                                            </svg><span class="count">112</span>
                                        </div>
                                        <div class="more-link"><a href="#">
                                                <svg class="crumina-icon">
                                                    <use xlink:href="#dots-icon"></use>
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="social-share-box">
                                            <div class="share-icons">
                                                <a href="#">
                                                    <svg class="crumina-icon">
                                                        <use xlink:href="#link-icon"></use>
                                                    </svg>
                                                </a>
                                                <a href="#">
                                                    <svg class="crumina-icon">
                                                        <use xlink:href="#facebook-icon"></use>
                                                    </svg>
                                                </a>
                                                <a href="#"><svg class="crumina-icon">
                                                        <use xlink:href="#twitter-icon"></use>
                                                    </svg>
                                                </a>
                                                <a href=""><svg class="crumina-icon">
                                                        <use xlink:href="#instagram-icon"></use>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="0" role="group" aria-label="1 / 3" style="width: 1340px;">
                            <div class="artwork-item">
                                <div class="artwork-media">
                                    <a href=""><img src="{{asset('HTML-NFTMarketplace/img/typefloor/contact/2.png')}}" alt="ІВ БУД офіс Львів"></a>
                                </div>
                                <div class="artwork-details">
                                    <h3 class="artwork-title">м. Львів</h3>
                                    <div class="avatar-block">
                                        <div class="avatar box-42">
                                            <a href="08-profile-page.html">
                                                <img src="{{asset('HTML-NFTMarketplace/img/logoavatar.png')}}" alt="avatar"><span class="verified"><svg class="crumina-icon">
                                                        <use xlink:href="#check-icon"></use>
                                                    </svg></span></a>
                                        </div>
                                        <div class="avatar-meta">
                                            <div class="avatar-title gradient-text"><a href="08-profile-page.html">ivbudfloor</a></div>
                                            <div class="avatar-meta">@admin</div>
                                        </div>
                                    </div>
                                    <div class="product-meta-section">
                                        <div class="product-meta-item">
                                            <div class="label">Будні дні</div>
                                            <div class="value">10:00 - 17:00</div>
                                            <div class="caption">Вихідні дні</div>
                                            <div class="value">закрито</div>
                                        </div>
                                    </div>
                                    <div class="product-description">
                                        <p>У шоурумі представлено зразки, по яких Ви будете мати змогу зорієнтуватись, який вид покриття імпонує вам більше. Згодом, ми будемо поповняти нашу колекцію, і з впевненістю можемо сказати, що вибір підлоги для Вас вже не буде проблемою.
                                            Ми залюбки зможемо Вас проконсультувати та допомогти втілити Ваші креативні ідеї в реальність.
                                        </p></div>
                                    <div class="bidding-section">
                                        <div class="place-bid"><a href="https://goo.gl/maps/hoEdY1z71jGCujPL6" target="_blank" class="btn btn-wide btn-dark waves-effect waves-button waves-float waves-light">Прокласти маршрут</a></div>

                                        <div class="social-share-box">
                                            <div class="share-icons">
                                                <a href="https://www.instagram.com/ivbudfloor/"><svg class="crumina-icon">
                                                        <use xlink:href="#instagram-icon"></use>
                                                    </svg>
                                                </a>
                                                <a href="https://www.facebook.com/ivbudfloor/"><svg class="crumina-icon">
                                                        <use xlink:href="#facebook-icon"></use>
                                                    </svg>
                                                </a>
                                                <a href="#"><svg class="crumina-icon">
                                                        <use xlink:href="#youtube-icon"></use>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="1" role="group" aria-label="2 / 3" style="width: 1340px;">
                            <div class="artwork-item">
                                <div class="artwork-media">
                                    <a href="07-product-page-v3.html"><img src="{{asset('HTML-NFTMarketplace/img/typefloor/contact/1.png')}}" alt="ІВ БУД офіс Івано-Франківськ"></a>
                                </div>
                                <div class="artwork-details">
                                    <h3 class="artwork-title">м. Івано-Франківськ</h3>
                                    <div class="avatar-block">
                                        <div class="avatar box-42">
                                            <a href="08-profile-page.html">
                                                <img src="{{asset('HTML-NFTMarketplace/img/logoavatar.png')}}" alt="avatar"><span class="verified"><svg class="crumina-icon">
                                                        <use xlink:href="#check-icon"></use>
                                                    </svg></span></a>
                                        </div>
                                        <div class="avatar-meta">
                                            <div class="avatar-title gradient-text"><a href="08-profile-page.html">ivbudfloor</a></div>
                                            <div class="avatar-meta">@admin</div>
                                        </div>
                                    </div>
                                    <div class="product-meta-section">
                                        <div class="product-meta-item">
                                            <div class="label">Будні дні</div>
                                            <div class="value">10:00 - 17:00</div>
                                            <div class="caption">Вихідні дні</div>
                                            <div class="value">закрито</div>
                                        </div>
                                    </div>
                                    <div class="product-description">
                                        <p>Якщо Ви у пошуках сучасного безшовного покриття, то Вам саме до нас.
                                            Для Вашої зручності ми створили виставковий подіум, де Ви будете мати змогу зорієнтуватись, який вид покриття імпонує вам більше.
                                        </p></div>
                                    <div class="bidding-section">
                                        <div class="place-bid"><a href="https://goo.gl/maps/XFkcdBu7b49mhWmB9" target="_blank" class="btn btn-wide btn-dark waves-effect waves-button waves-float waves-light">Прокласти маршрут</a></div>

                                        <div class="social-share-box">
                                            <div class="share-icons">
                                                <a href="https://www.instagram.com/ivbudfloor/"><svg class="crumina-icon">
                                                        <use xlink:href="#instagram-icon"></use>
                                                    </svg>
                                                </a>
                                                <a href="https://www.facebook.com/ivbudfloor/"><svg class="crumina-icon">
                                                        <use xlink:href="#facebook-icon"></use>
                                                    </svg>
                                                </a>
                                                <a href="#"><svg class="crumina-icon">
                                                        <use xlink:href="#youtube-icon"></use>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                </div>
            </div>
        </div>
    </div>
    <!-- MAIN CONTENT AREA -->
@endsection

