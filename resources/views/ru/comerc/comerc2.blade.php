@extends('layouts.comerc2')
@section('title', 'Безшовні покриття - ціна, комерційна.')
@section('meta', 'Ціна мікроцементу чи безшовних покриттів, отримайте швидку кунсультацію від компанії ІВ БУД.')
@section('keywords', 'Прайс цін, безшовні покриття, ціна та комерційна пропозиція від компанії | ІВ БУД')
@section('script_header')

@endsection
@section('content')
    <div class="primary-content-area container content-padding">
        <div class="row justify-content-center flex-center">
            <div class="avatar box-64">
                <a href="08-profile-page.html">
                    <img src="{{asset('HTML-NFTMarketplace/img/logoavatar.png')}}" alt="avatar"><span class="verified"><svg class="crumina-icon">
                        <use xlink:href="#check-icon"></use>
                    </svg></span></a>
            </div>
        </div>
        <h3 class="mt-5  flex-center">КОМЕРЦІЙНА ПРОПОЗИЦІЯ</h3>
        <p class="flex-center">Оберіть тип об'єкту.</p>
        <div class="container section-padding">
            <div class="section-padding overflow-hidden">
                <div class="collections-carousel">
                    <div class="section-title-wrapper">
                        <div class="section-title"><span class="gradient-text">Тип</span> об'єкту</div>
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
                                    <div class="cover-image">
                                        <img src="{{asset('../prodgect/pr-8.png')}}" alt="підлога в будино чи квартиру, безшовні покриття в будинок" style="height: 200px; width: 100%" >
                                    </div>
                                    <div class="collection-info">
                                        <div class="subtitle flex-center" style="font-size: large; font-weight: 900;">ПРИВАТНИЙ СЕКТОР</div>
                                        <div class="more-section flex-center">
                                            <a class="btn btn-normal btn-dark waves-effect waves-button waves-float waves-light" href="{{route('comerc.stepTwo', 6)}}">Обрати</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="collection-item">
                                    <div class="cover-image">
                                        <img src="{{asset('../prodgect/pr-50.png')}}" alt="підлога для закладів, безшовні покриття для кафе/ресторану" style="height: 200px; width: 100%;" >
                                    </div>
                                    <div class="collection-info">
                                        <div class="subtitle flex-center" style="font-size: large; font-weight: 900;">ЗАКЛАДИ</div>
                                        <div class="more-section flex-center">
                                            <a class="btn btn-normal btn-dark waves-effect waves-button waves-float waves-light" href="{{route('comerc.stepTwo', 4)}}">Обрати</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="collection-item">
                                    <div class="cover-image">
                                        <img src="{{asset('../prodgect/pr-18.png')}}" alt="промислова підлога від ІВ БУД" style="height: 200px; width: 100%;" >
                                    </div>
                                    <div class="collection-info">
                                        <div class="subtitle flex-center" style="font-size: large; font-weight: 900;">ПРОМИСЛОВІСТЬ</div>
                                        <div class="more-section flex-center">
                                            <a class="btn btn-normal btn-dark waves-effect waves-button waves-float waves-light" href="{{route('comerc.stepTwo', 1)}}">Обрати</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="collection-item">
                                    <div class="cover-image">
                                        <img src="{{asset('../prodgect/pr-31.png')}}" alt="підлога для складу, епоксидні підлоги" style="height: 200px; width: 100%;" >
                                    </div>
                                    <div class="collection-info">
                                        <div class="subtitle flex-center" style="font-size: large; font-weight: 900;">СКЛАДСЬКІ ПРИМІЩЕННЯ</div>
                                        <div class="more-section flex-center">
                                            <a class="btn btn-normal btn-dark waves-effect waves-button waves-float waves-light" href="{{route('comerc.stepTwo', 2)}}">Обрати</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="collection-item">
                                    <div class="cover-image">
                                        <img src="{{asset('../prodgect/pr-24.png')}}" alt="медичні підлоги, підлоги для медецини" style="height: 200px; width: 100%;" >
                                    </div>
                                    <div class="collection-info">
                                        <div class="subtitle flex-center" style="font-size: large; font-weight: 900;">МЕДИЦИНА</div>
                                        <div class="more-section flex-center">
                                            <a class="btn btn-normal btn-dark waves-effect waves-button waves-float waves-light" href="{{route('comerc.stepTwo', 3)}}">Обрати</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="collection-item">
                                    <div class="cover-image">
                                        <img src="{{asset('../prodgect/pr-23.png')}}" alt="підлоги в автомагазин/автомайстерню" style="height: 200px; width: 100%;" >
                                    </div>
                                    <div class="collection-info">
                                        <div class="subtitle flex-center" style="font-size: large; font-weight: 900;">АВТОІНДУСТРІЯ</div>
                                        <div class="more-section flex-center">
                                            <a class="btn btn-normal btn-dark waves-effect waves-button waves-float waves-light" href="{{route('comerc.stepTwo', 5)}}">Обрати</a>
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

@section('script')

@endsection
@endsection
