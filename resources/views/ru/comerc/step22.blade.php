@extends('layouts.comerc2')
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
        <p class="flex-center">Оберіть тип покриття.</p>
        <div class="container section-padding">
            <div class="section-padding overflow-hidden">
                <div class="collections-carousel">
                    <div class="section-title-wrapper">
                        <div class="section-title"><span class="gradient-text">Тип</span> покриття</div>
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
                        <div class="swiper-wrapper featured-box-wrapper grid-6-columns">
                            @foreach($types as $item )
                                <div class="swiper-slide featured-item v6">
                                    <div class="featured-item-wrapper">
                                        <div class="featured-item-content">
                                            <div class="featured-item-image">
                                                <a href="05-product.html">
                                                    <img src="{{asset($item->avatar)}}" alt="{{$item->name}}"></a>
                                            </div>
                                            <div class="featured-item-info">
                                                <div class="item-category social-graphics">
                                                    {{$item->slug}}
                                                </div>
                                                <div class="title"><a href="{{route('page', $item->slug)}}" target="_blank">{{$item->name}}
                                                    </a>
                                                </div>
                                                <div class="more-section flex-center">
                                                    <a class="btn btn-normal btn-dark waves-effect waves-button waves-float waves-light" href="{{route('comerc.stepThree', $item)}}">Обрати</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="featured-item-post-content">
                                            <div class="social-share-box">
                                            </div>
                                            <div class="item-price">ціна - {{$item->price}} грн/m2</div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
