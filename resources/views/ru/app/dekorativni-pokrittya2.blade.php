@extends('layouts.app2')
@section('title', 'Декоративні покриття | ІВ БУД')
@section('meta', 'Декоративні підлоги, мікроцемент на підлогу, наливні підлоги Львів, найкраща ціна на безшовні покриття | ІВ БУД, підлога в будинок, міцні підлоги, безшовні покриття @ivbudfloor')
@section('keywords', 'Мікроцементи, наливні підлоги, найкраща ціна від | ІВ БУД, підлога в будинок,міцні підлоги, безшовні покриття @ivbudfloor')
@section('breadcrumbs')
@endsection
@section('content')

    <div class="primary-content-area container content-padding product-page-ds">
        <div class="main-content-area product-ds">
            <div class="product-title-section">
                <h1>Декоративні покриття</h1>
                <p>Кожне покриття унікальне по свому, розуміючи експлуатаційні характеристики вашого приміщення, можна обрати покриття, яке прослужить вам на совість.</p>
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
                <img src="{{asset('HTML-NFTMarketplace/img/dec.png')}}" alt="Декоративна підлога в будинок/заклад, безшовні пілоги від ІВ БУД" style="border-radius: 20px;">
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
                                            </svg>Декоративний кварц</li>
                                        <li><svg class="crumina-icon bullet-icon">
                                                <use xlink:href="#circle-icon"></use>
                                            </svg>Мікроцемент</li>
                                        <li><svg class="crumina-icon bullet-icon">
                                                <use xlink:href="#circle-icon"></use>
                                            </svg>Епоксидна наливна підлога</li>
                                        <li><svg class="crumina-icon bullet-icon">
                                                <use xlink:href="#circle-icon"></use>
                                            </svg>Епоксидне тонкошарове покриття</li>
                                    </ul>
                                    <p>Залежно від поставлених завдань, додавання до матеріалу різних наповнювачів, таких як кварц, флоки, чіпси і тд, створює велике різноманіття кінцевого результату.
                                    </p>
                                    <h4 class="content-heading">Декоративний кварц</h4>
                                    <p>
                                        Якщо ж стоїть завдання зробити декоративне покриття, яке виконуватиме свої функції десятки років, то знову ж, повертаємося до кварцового покриття. Воно надзвичайно зносостійке, та легко піддається декору, завдяки малюванню фракцій піску. Ваш декор не буде поверхневим і не стиратиметься, адже він буде настільки ж глибоким, як і сама підлога.
                                    </p>
                                    <p>
                                        Колір підлоги можна підібрати по каталогу RAL, методом фарбування піску. Декоративна привабливість – це відмітна риса кварцових покриттів.
                                    </p>
                                    <a href="{{route('page','dekorativne-kvarcove-pokrittya')}}" class="read-more-link colored">Дізнатись більше</a>
                                    <h4 class="content-heading">Мікроцемент</h4>
                                    <p>
                                        Мікроцемент - ідеальне покриття для облаштування декоративних підлог і стін усередині приміщень з чітко вираженим текстурованим ефектом типу «лофт».
                                        Завдяки легкості в застосуванні, універсальності і зносостійкості цей матеріал ідеально підходить для облаштування підлогових покриттів, які піддаються інтенсивним навантаженням в таких зонах, як магазини, кафе, ресторани, шоу-руми, а також ділянки, які пов'язані з облаштування декоративних покриттів в секторі цивільного будівництва.
                                    </p>
                                    <a href="{{route('page','mikrocement')}}" class="read-more-link colored">Дізнатись більше</a>
                                    <h4 class="content-heading">Полімерний мікроцемент</h4>
                                    <p>
                                        Полімерний мікроцемент - це декоративне покриття на основі цементу, полімерів на водній основі, добавок і мінеральних пігментів. Відрізняється від звичайного мікроцементу, відсутністтю різкої плямистості, потертості і текстури, яку створює шпатель, притаманної лофт стилю. Відмінність досягнута за рахунок зміни фінішного шару покриття.
                                    </p>
                                    <p>
                                        Цей матеріал ідеально підходить як для внутрішніх поверхонь, наноситься на підлоги, стіни, стелі і т.д. І саме головне - це повністю безшовне покриття! Відсутність швів полегшує прибирання та обслуговування.
                                        Надає своїм приміщенням унікальний, індивідуальний характер, завдяки різним структурам (великим, середнім або тонким), великій різноманітності кольорів, різних лакових покриттів (матовий, сатиновий або глянець).
                                    </p>
                                    <a href="{{route('page','polimernij-mikrocement')}}" class="read-more-link colored">Дізнатись більше</a>
                                    <h4 class="content-heading">Наливна підлога</h4>
                                    <p>
                                        Нанесення полімерного покриття не передбачає стиків або деформаційних швів. Можна використовувати в приміщеннях будь-яких розмірів.</p>
                                    <p>
                                        Один матеріал і різний результат.
                                        Класичний спосіб, дозволяє досягти глянцивої̆ поверхні, але можливий і інший варіант, гладка і в той же час матова структура. Покриття підходить для застосування в приміщеннях з підвищеною вологістю, у ванній кімнаті, в кухні, душовій кабіні, зонах біля басейну.
                                    </p>
                                    <a href="{{route('page','nalivna-pidloga')}}" class="read-more-link colored">Дізнатись більше</a>
                                    <a href="{{route('page','polimernij-mikrocement')}}" class="read-more-link colored">Дізнатись більше</a>
                                    <h4 class="content-heading">Епоксидне тонкошарове покриття</h4>
                                    <p>
                                        Мабуть єдине покриття, яке має великий спектр використання у різних типах приміщень.</p>
                                    <p>
                                        Епоксидні тонкошарові покриття витримують легкі і середні механічні навантаження, запобігають пилоутворенню і часто є оптимальним рішенням у виборі підлогової поверхні. Покриття стійке до навантажень, не стираются і стійке до водних розчинів, жирів та інших речовин. Можливе прибирання миючими засобами. Застосовуються у виробничих і побутових приміщеннях. Термін служби таких покриттів складає не менше 10 років.
                                    </p>
                                    <a href="{{route('page','epoksidnij-okras')}}" class="read-more-link colored">Дізнатись більше</a>
                                </div>
                            </div>
                        </div>
                        <div id="tab2" class="tab">
                            <div class="tab-content">
                                <div class="news-feed grid-3-columns">
                                    <div class="news-item video-post-format">
                                        <a class="post-format-icon" data-fslightbox data-type="youtube" href="https://www.youtube.com/watch?v=pmRGVl8PNBU">
                                            <svg class="crumina-icon">
                                                <use xlink:href="#play-icon"></use>
                                            </svg>
                                        </a>
                                        <div class="news-thumb">
                                            <a href="14-blog-post-centered.html">
                                                <img src="{{asset('HTML-NFTMarketplace/img/video1.png')}}" alt="Декоративне кварцове покриття IV BUD"></a>
                                        </div>
                                        <div class="news-content">
                                            <div class="news-tags">
                                                <span class="tag-item"><a href="{{route('page','dekorativne-kvarcove-pokrittya')}}" >Декоративний кварц</a></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="news-item video-post-format">
                                        <a class="post-format-icon" data-fslightbox data-type="youtube" href="https://www.youtube.com/watch?v=0W4zZgEeFxg">
                                            <svg class="crumina-icon">
                                                <use xlink:href="#play-icon"></use>
                                            </svg>
                                        </a>
                                        <div class="news-thumb">
                                            <a href="14-blog-post-centered.html">
                                                <img src="{{asset('HTML-NFTMarketplace/img/video2.png')}}" alt="Кварцова підлога від ivbudfloor"></a>
                                        </div>
                                        <div class="news-content">
                                            <div class="news-tags">
                                                <span class="tag-item"><a href="{{route('page','dekorativne-kvarcove-pokrittya')}}" >Декоративний кварц</a></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="news-item video-post-format">
                                        <a class="post-format-icon" data-fslightbox data-type="youtube" href="https://www.youtube.com/watch?v=CEwM5O1bsz8">
                                            <svg class="crumina-icon">
                                                <use xlink:href="#play-icon"></use>
                                            </svg>
                                        </a>
                                        <div class="news-thumb">
                                            <a href="14-blog-post-centered.html">
                                                <img src="{{asset('HTML-NFTMarketplace/img/video3.png')}}" alt="Саме міцне покриття на підлогу - Декоративний кварц"></a>
                                        </div>
                                        <div class="news-content">
                                            <div class="news-tags">
                                                <span class="tag-item"><a href="{{route('page','dekorativne-kvarcove-pokrittya')}}" >Декоративний кварц</a></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="news-item video-post-format">
                                        <a class="post-format-icon" data-fslightbox data-type="youtube" href="https://www.youtube.com/watch?v=2APc-5Xw--0">
                                            <svg class="crumina-icon">
                                                <use xlink:href="#play-icon"></use>
                                            </svg>
                                        </a>
                                        <div class="news-thumb">
                                            <a href="14-blog-post-centered.html">
                                                <img src="{{asset('HTML-NFTMarketplace/img/video4.png')}}" alt="Кварц на підлогу від ІВ БУД"></a>
                                        </div>
                                        <div class="news-content">
                                            <div class="news-tags">
                                                <span class="tag-item"><a href="{{route('page','dekorativne-kvarcove-pokrittya')}}" >Декоративний кварц</a></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="news-item video-post-format">
                                        <a class="post-format-icon" data-fslightbox data-type="youtube" href="https://www.youtube.com/watch?v=dhQrsJ0wNhg">
                                            <svg class="crumina-icon">
                                                <use xlink:href="#play-icon"></use>
                                            </svg>
                                        </a>
                                        <div class="news-thumb">
                                            <a href="14-blog-post-centered.html">
                                                <img src="{{asset('HTML-NFTMarketplace/img/video5.png')}}" alt="Безшовна підлога від ІВ БУД"></a>
                                        </div>
                                        <div class="news-content">
                                            <div class="news-tags">
                                                <span class="tag-item"><a href="{{route('page','epoksidnij-okras')}}" >Епоксидне тонкошарове покриття</a></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="news-item video-post-format">
                                        <a class="post-format-icon" data-fslightbox data-type="youtube" href="https://www.youtube.com/watch?v=dhQrsJ0wNhg">
                                            <svg class="crumina-icon">
                                                <use xlink:href="#play-icon"></use>
                                            </svg>
                                        </a>
                                        <div class="news-thumb">
                                            <a href="14-blog-post-centered.html">
                                                <img src="{{asset('HTML-NFTMarketplace/img/video6.png')}}" alt="Мікроцемент на підлогу, мікроцементи від ІВ БУД"></a>
                                        </div>
                                        <div class="news-content">
                                            <div class="news-tags">
                                                <span class="tag-item"><a href="{{route('page','mikrocement')}}" >Мікроцемент</a></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="news-item video-post-format">
                                        <a class="post-format-icon" data-fslightbox data-type="youtube" href="https://www.youtube.com/watch?v=dmBBaKTeMHY">
                                            <svg class="crumina-icon">
                                                <use xlink:href="#play-icon"></use>
                                            </svg>
                                        </a>
                                        <div class="news-thumb">
                                            <a href="14-blog-post-centered.html">
                                                <img src="{{asset('HTML-NFTMarketplace/img/video8.png')}}" alt="Мікроцемент, саме міцне рішення від ІВ БУД"></a>
                                        </div>
                                        <div class="news-content">
                                            <div class="news-tags">
                                                <span class="tag-item"><a href="{{route('page','mikrocement')}}" >Мікроцемент</a></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="news-item video-post-format">
                                        <a class="post-format-icon" data-fslightbox data-type="youtube" href="https://www.youtube.com/watch?v=wOBe3XajaSg">
                                            <svg class="crumina-icon">
                                                <use xlink:href="#play-icon"></use>
                                            </svg>
                                        </a>
                                        <div class="news-thumb">
                                            <a href="14-blog-post-centered.html">
                                                <img src="{{asset('HTML-NFTMarketplace/img/video9.png')}}" alt="Підлога в стилі лофт від компанії ivbudfloor"></a>
                                        </div>
                                        <div class="news-content">
                                            <div class="news-tags">
                                                <span class="tag-item"><a href="{{route('page','mikrocement')}}" >Мікроцемент</a></span>
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
                                                <img src="{{asset('HTML-NFTMarketplace/img/video10.png')}}" alt="Мікроцемент на підлогу, сучасне рішення в інтерєрі"></a>
                                        </div>
                                        <div class="news-content">
                                            <div class="news-tags">
                                                <span class="tag-item"><a href="{{route('page','mikrocement')}}" >Мікроцемент</a></span>
                                            </div>
                                        </div>
                                    </div>

{{--                                    <div class="news-item video-post-format">--}}
{{--                                        <a class="post-format-icon" data-fslightbox data-type="youtube" href="https://www.youtube.com/watch?v=pmRGVl8PNBU">--}}
{{--                                            <svg class="crumina-icon">--}}
{{--                                                <use xlink:href="#play-icon"></use>--}}
{{--                                            </svg>--}}
{{--                                        </a>--}}
{{--                                        <div class="news-thumb">--}}
{{--                                            <a href="14-blog-post-centered.html">--}}
{{--                                                <img src="{{asset('HTML-NFTMarketplace/img/video1.png')}}" alt="Декоративне кварцове покриття IV BUD"></a>--}}
{{--                                        </div>--}}
{{--                                        <div class="news-content">--}}
{{--                                            <div class="news-tags">--}}
{{--                                                <span class="tag-item"><a href="{{route('page','dekorativne-kvarcove-pokrittya')}}" >Декоративний кварц</a></span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="news-item video-post-format">--}}
{{--                                        <a class="post-format-icon" data-fslightbox data-type="youtube" href="https://www.youtube.com/watch?v=0W4zZgEeFxg">--}}
{{--                                            <svg class="crumina-icon">--}}
{{--                                                <use xlink:href="#play-icon"></use>--}}
{{--                                            </svg>--}}
{{--                                        </a>--}}
{{--                                        <div class="news-thumb">--}}
{{--                                            <a href="14-blog-post-centered.html">--}}
{{--                                                <img src="{{asset('HTML-NFTMarketplace/img/video2.png')}}" alt="Кварцова підлога від ivbudfloor"></a>--}}
{{--                                        </div>--}}
{{--                                        <div class="news-content">--}}
{{--                                            <div class="news-tags">--}}
{{--                                                <span class="tag-item"><a href="{{route('page','dekorativne-kvarcove-pokrittya')}}" >Декоративний кварц</a></span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="news-item video-post-format">--}}
{{--                                        <a class="post-format-icon" data-fslightbox data-type="youtube" href="https://www.youtube.com/watch?v=CEwM5O1bsz8">--}}
{{--                                            <svg class="crumina-icon">--}}
{{--                                                <use xlink:href="#play-icon"></use>--}}
{{--                                            </svg>--}}
{{--                                        </a>--}}
{{--                                        <div class="news-thumb">--}}
{{--                                            <a href="14-blog-post-centered.html">--}}
{{--                                                <img src="{{asset('HTML-NFTMarketplace/img/video3.png')}}" alt="Саме міцне покриття на підлогу - Декоративний кварц"></a>--}}
{{--                                        </div>--}}
{{--                                        <div class="news-content">--}}
{{--                                            <div class="news-tags">--}}
{{--                                                <span class="tag-item"><a href="{{route('page','dekorativne-kvarcove-pokrittya')}}" >Декоративний кварц</a></span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="news-item video-post-format">--}}
{{--                                        <a class="post-format-icon" data-fslightbox data-type="youtube" href="https://www.youtube.com/watch?v=2APc-5Xw--0">--}}
{{--                                            <svg class="crumina-icon">--}}
{{--                                                <use xlink:href="#play-icon"></use>--}}
{{--                                            </svg>--}}
{{--                                        </a>--}}
{{--                                        <div class="news-thumb">--}}
{{--                                            <a href="14-blog-post-centered.html">--}}
{{--                                                <img src="{{asset('HTML-NFTMarketplace/img/video4.png')}}" alt="Кварц на підлогу від ІВ БУД"></a>--}}
{{--                                        </div>--}}
{{--                                        <div class="news-content">--}}
{{--                                            <div class="news-tags">--}}
{{--                                                <span class="tag-item"><a href="{{route('page','dekorativne-kvarcove-pokrittya')}}" >Декоративний кварц</a></span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="news-item video-post-format">--}}
{{--                                        <a class="post-format-icon" data-fslightbox data-type="youtube" href="https://www.youtube.com/watch?v=dhQrsJ0wNhg">--}}
{{--                                            <svg class="crumina-icon">--}}
{{--                                                <use xlink:href="#play-icon"></use>--}}
{{--                                            </svg>--}}
{{--                                        </a>--}}
{{--                                        <div class="news-thumb">--}}
{{--                                            <a href="14-blog-post-centered.html">--}}
{{--                                                <img src="{{asset('HTML-NFTMarketplace/img/video5.png')}}" alt="Безшовна підлога від ІВ БУД"></a>--}}
{{--                                        </div>--}}
{{--                                        <div class="news-content">--}}
{{--                                            <div class="news-tags">--}}
{{--                                                <span class="tag-item"><a href="{{route('page','epoksidnij-okras')}}" >Епоксидне тонкошарове покриття</a></span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="news-item video-post-format">--}}
{{--                                        <a class="post-format-icon" data-fslightbox data-type="youtube" href="https://www.youtube.com/watch?v=dhQrsJ0wNhg">--}}
{{--                                            <svg class="crumina-icon">--}}
{{--                                                <use xlink:href="#play-icon"></use>--}}
{{--                                            </svg>--}}
{{--                                        </a>--}}
{{--                                        <div class="news-thumb">--}}
{{--                                            <a href="14-blog-post-centered.html">--}}
{{--                                                <img src="{{asset('HTML-NFTMarketplace/img/video6.png')}}" alt="Мікроцемент на підлогу, мікроцементи від ІВ БУД"></a>--}}
{{--                                        </div>--}}
{{--                                        <div class="news-content">--}}
{{--                                            <div class="news-tags">--}}
{{--                                                <span class="tag-item"><a href="{{route('page','mikrocement')}}" >Мікроцемент</a></span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="news-item video-post-format">--}}
{{--                                        <a class="post-format-icon" data-fslightbox data-type="youtube" href="https://www.youtube.com/watch?v=26PRbMRD1S0">--}}
{{--                                            <svg class="crumina-icon">--}}
{{--                                                <use xlink:href="#play-icon"></use>--}}
{{--                                            </svg>--}}
{{--                                        </a>--}}
{{--                                        <div class="news-thumb">--}}
{{--                                            <a href="14-blog-post-centered.html">--}}
{{--                                                <img src="{{asset('HTML-NFTMarketplace/img/video7.png')}}" alt="Промисловий кварц, підлога на промисловість"></a>--}}
{{--                                        </div>--}}
{{--                                        <div class="news-content">--}}
{{--                                            <div class="news-tags">--}}
{{--                                                <span class="tag-item"><a href="{{route('page','promislove-kvarcove-pokrittya')}}" >Промислові кварцові покриття</a></span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="news-item video-post-format">--}}
{{--                                        <a class="post-format-icon" data-fslightbox data-type="youtube" href="https://www.youtube.com/watch?v=dmBBaKTeMHY">--}}
{{--                                            <svg class="crumina-icon">--}}
{{--                                                <use xlink:href="#play-icon"></use>--}}
{{--                                            </svg>--}}
{{--                                        </a>--}}
{{--                                        <div class="news-thumb">--}}
{{--                                            <a href="14-blog-post-centered.html">--}}
{{--                                                <img src="{{asset('HTML-NFTMarketplace/img/video8.png')}}" alt="Мікроцемент, саме міцне рішення від ІВ БУД"></a>--}}
{{--                                        </div>--}}
{{--                                        <div class="news-content">--}}
{{--                                            <div class="news-tags">--}}
{{--                                                <span class="tag-item"><a href="{{route('page','mikrocement')}}" >Мікроцемент</a></span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="news-item video-post-format">--}}
{{--                                        <a class="post-format-icon" data-fslightbox data-type="youtube" href="https://www.youtube.com/watch?v=wOBe3XajaSg">--}}
{{--                                            <svg class="crumina-icon">--}}
{{--                                                <use xlink:href="#play-icon"></use>--}}
{{--                                            </svg>--}}
{{--                                        </a>--}}
{{--                                        <div class="news-thumb">--}}
{{--                                            <a href="14-blog-post-centered.html">--}}
{{--                                                <img src="{{asset('HTML-NFTMarketplace/img/video9.png')}}" alt="Підлога в стилі лофт від компанії ivbudfloor"></a>--}}
{{--                                        </div>--}}
{{--                                        <div class="news-content">--}}
{{--                                            <div class="news-tags">--}}
{{--                                                <span class="tag-item"><a href="{{route('page','mikrocement')}}" >Мікроцемент</a></span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="news-item video-post-format">--}}
{{--                                        <a class="post-format-icon" data-fslightbox data-type="youtube" href="https://www.youtube.com/watch?v=0IQZm5kjrZw">--}}
{{--                                            <svg class="crumina-icon">--}}
{{--                                                <use xlink:href="#play-icon"></use>--}}
{{--                                            </svg>--}}
{{--                                        </a>--}}
{{--                                        <div class="news-thumb">--}}
{{--                                            <a href="14-blog-post-centered.html">--}}
{{--                                                <img src="{{asset('HTML-NFTMarketplace/img/video10.png')}}" alt="Мікроцемент на підлогу, сучасне рішення в інтерєрі"></a>--}}
{{--                                        </div>--}}
{{--                                        <div class="news-content">--}}
{{--                                            <div class="news-tags">--}}
{{--                                                <span class="tag-item"><a href="{{route('page','mikrocement')}}" >Мікроцемент</a></span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="news-item video-post-format">--}}
{{--                                        <a class="post-format-icon" data-fslightbox data-type="youtube" href="https://www.youtube.com/watch?v=0IQZm5kjrZw">--}}
{{--                                            <svg class="crumina-icon">--}}
{{--                                                <use xlink:href="#play-icon"></use>--}}
{{--                                            </svg>--}}
{{--                                        </a>--}}
{{--                                        <div class="news-thumb">--}}
{{--                                            <a href="14-blog-post-centered.html">--}}
{{--                                                <img src="{{asset('HTML-NFTMarketplace/img/video11.png')}}" alt="Поліуретанова підлога, безшовне та еластичне покриття"></a>--}}
{{--                                        </div>--}}
{{--                                        <div class="news-content">--}}
{{--                                            <div class="news-tags">--}}
{{--                                                <span class="tag-item"><a href="{{route('page','poliuretanova-pidloga')}}" >Поліуретанова підлога</a></span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="news-item video-post-format">--}}
{{--                                        <a class="post-format-icon" data-fslightbox data-type="youtube" href="https://www.youtube.com/watch?v=qyMdLycry64">--}}
{{--                                            <svg class="crumina-icon">--}}
{{--                                                <use xlink:href="#play-icon"></use>--}}
{{--                                            </svg>--}}
{{--                                        </a>--}}
{{--                                        <div class="news-thumb">--}}
{{--                                            <a href="14-blog-post-centered.html">--}}
{{--                                                <img src="{{asset('HTML-NFTMarketplace/img/video12.png')}}" alt="Промислові кварцові покриття"></a>--}}
{{--                                        </div>--}}
{{--                                        <div class="news-content">--}}
{{--                                            <div class="news-tags">--}}
{{--                                                <span class="tag-item"><a href="{{route('page','promislove-kvarcove-pokrittya')}}" >Промислові кварцові покриття</a></span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
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
                            <li>Типи декоративних покриттів</li>
                        </ul>
                        <ul class="details-value">
                            <li>0,2 - 0,7 мм.</li>
                            <li>7-9 днів (при площі 100м2)</li>
                            <li class="tags-list">
                                <span class="colored"><a href="{{route('page','dekorativne-kvarcove-pokrittya')}}"> Декоративний кварц</a></span>, <span
                                    class="colored"><a href="{{route('page','mikrocement')}}"> Мікроцемент</a></span>,<span class="colored"><a href="{{route('page','polimernij-mikrocement')}}"> Полімерний мікроцемент</a></span>, <span class="colored"><a
                                        href="{{route('page','epoksidnij-okras')}}"> Епоксидне тонкошарове покриття</a></span>,
                                <span class="colored"><a href="{{route('page','nalivna-pidloga')}}"> Епоксидна наливна підлога</a></span>,<span class="colored"><a href="{{route('page','nalivna-pidloga-art')}}"> Епоксидна наливна підлога (Art)</a></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </aside>
    </div>
@endsection
