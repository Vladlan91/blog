@extends('layouts.app')
@if(!isset($region))
    @section('title', 'Дизайн та архітектура ')
    @section('meta', 'Дизайн та архітектура | ІВ БУД')
    @section('keywords', 'Дизайн та архітектура | ІВ БУД')
@else
    @section('title', 'Дизайн та архітектура '.'/ '. $region->town . ' / '. $region->name)
    @section('meta', 'Дизайн та архітектура '.'/ '. $region->town . ' / '. $region->name . ' ІВ БУД')
    @section('keywords', 'Дизайн та архітектура '.'/ '. $region->town . ' / '. $region->name . ' ІВ БУД')
@endif
@section('breadcrumbs')
@endsection
@section('content')
    <div class="header-base">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="title-base text-left">
                        @if(isset($region))
                        <h1>Дизайн та архітектура  | {{$region->town . ' / '. $region->name}}</h1>
                            <p>Тут ви знайдете всі студії дизайну та архітектури, з якими нам пощастило реалізувати круті та унікальні ідеї в місті {{$region->town}}.</p>
                        @else
                            <h1>Дизайн та архітектура </h1>
                            <p>Тут ви знайдете всі студії дизайну та архітектури, з якими нам пощастило реалізувати круті та унікальні ідеї по всій Україні.</p>
                        @endif

                    </div>
                </div>
                <div class="col-md-3">
                    <ol class="breadcrumb b white">
                        <li><a href="{{route('home')}}">Головна</a></li>
                        <li class="active">Дизайн та архітектура</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="section-empty bg-white">
        <div class="container content">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <h4>Студії дизайну та архітектури</h4>
                    <div class="counter-box-simple text-color "><span class="counter text-xl" data-to="3000" data-separator="" data-trigger="null">10</span><span class="text-s"> студій</span></div>
                    <hr class="space xs">
                    <p class="text-xs text-uppercase">З якими ми співпрацюємо.</p>
                </div>
                <div class="col-md-3 col-sm-6">
                    <h4>Загальна площа підлоги,</h4>
                    <div class="counter-box-simple text-color  "><span class="counter text-xl" data-to="300" data-trigger="null">2500+</span><span class="text-s"> м2</span></div>
                    <hr class="space xs">
                    <p class="text-xs text-uppercase">Business daily growth</p>
                </div>
                <div class="col-md-3 col-sm-6">
                    <h4>Проекти, які ще в процесі роботи.</h4>
                    <div class="counter-box-simple text-color "><span class="counter text-xl" data-to="950" data-trigger="null">12</span><span class="text-s"></span></div>
                    <hr class="space xs">
                    <p class="text-xs text-uppercase">Проекти, які знаходяться на різних етапах реалізації.</p>
                </div>
                <div class="col-md-3 col-sm-6">
                    <h4>Спільні проекти, які вже завершені.</h4>
                    <div class="counter-box-simple text-color"><span class="counter text-xl" data-to="2500" data-separator="" data-trigger="null">25</span><span class="text-s"></span></div>
                    <hr class="space xs">
                    <p class="text-xs text-uppercase">Реалізовані проекти, які вже здані замовникам.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="section-empty section-item">
        <div class="container content">
            <div class="row">
                <div class="col-md-9">
                    @foreach($comoanies as $company)
                    <div class="advs-box advs-box-side-img advs-box-blog boxed-inverse" data-anima="scale-rotate" data-trigger="hover">
                        <div class="row">
                            <div class="col-md-4">
                                <a class="img-box">
                                    <img class="anima" src="{{asset('../des_logo/1.jpg')}}" alt="" style="max-width: 365px; width: 365px; margin-left: -50px; position: relative; animation-duration: 500ms; transition-timing-function: ease; transition-delay: 0ms;" aid="0.49769640957672445">
                                </a>
                            </div>
                            <div class="col-md-8">
                                <h2><a>ARMZ interior design studio</a></h2>
                                <hr>
                                <div class="tag-row icon-row">
                                    <span style="color: #eea236;"><i class="fa fa-bookmark"></i><a href="#">спільні проекти - </a> 1 </span>
                                    <span style="color: #eea236;"><i class="fa fa-pencil"></i><a>ЗАГАЛЬНА ПЛОЩА - </a> 140 м2 </span>
                                </div>
                                <p>
                                    We started our activity in 2010. We are engaged in the development of interior design, we implement design projects, make kitchen furniture. The basis of our projects is minimalism and conciseness.
                                </p>
                                <a class="btn btn-xs" href="{{route('company', $company->slug)}}">Читати більше</a>
                            </div>
                        </div>
                    </div>
                    <hr class="space m" />
                    @endforeach
                    <hr class="space m" />
                    <div class="list-nav text-left">
                        <ul class="pagination-sm pagination-maso pagination" data-page-items="8" data-pagination-anima="show-scale"><li class="first disabled"><a href="#"><i class="fa fa-angle-double-left"></i> <span>з початку</span></a></li><li class="prev disabled"><a href="#"> <i class="fa fa-angle-left"></i> <span>попередній</span></a></li><li class="page active"><a href="#">1</a></li><li class="page"><a href="#">2</a></li><li class="next"><a href="#"><span>наступний</span> <i class="fa fa-angle-right"></i></a></li><li class="last"><a href="#"><span>в кінець</span> <i class="fa fa-angle-double-right"></i></a></li></ul>
                    </div>
                    <div class="collapse-box" data-height="50" id="collapse-demo-4">
                        <div class="panel" style="display: block; height: 50px;">
                            @if(isset($region))
                                <p>
                                    <span style="font-weight:bold;">Дизайн та архітерктура</span>- все те, що ми з вами так любимо і цінуємо. Як в будь якій справі, тут присутні свої тонкощі, з якими справляться найкраще, фахівці своєї справи. Підлогові покриття - невідємний елемент будь якого дизайну, проте вибір покриттів такий великий, колір, текстура, експлуатаційні властивості, у всьому цьому потрібно розбиратись і відчувати ще на етапі проектування. Ось чому переважна більшість наших замовників користуються послугами <span style="font-weight:bold;">студій дизайну та архітектури.</span> Вони допоможуть вам підібрати саме те покриття, яке ідеально впишиться у ваш інтерєр, а вибір правельної текстури покриття, буде доставляти вам естетичне і експлуатаційне задоволення.<br>
                                    Тут представлені найкріщі студії з дизайну інтерєрів, які надають свої послуги в місті <span style="font-weight:bold;">{{$region->town . ' та '. $region->name}}</span>, з якими нам пощастило познайомитись, багато з яких, також надають послуги і <span style="font-weight:bold;">архітектурного дизайну.</span>
                                </p>
                            @else
                                <p>
                                    <span style="font-weight:bold;">Дизайн та архітерктура</span>- все те, що ми з вами так любимо і цінуємо. Як в будь якій справі, тут присутні свої тонкощі, з якими справляться найкраще, фахівці своєї справи. Підлогові покриття - невідємний елемент будь якого дизайну, проте вибір покриттів такий великий, колір, текстура, експлуатаційні властивості, у всьому цьому потрібно розбиратись і відчувати ще на етапі проектування. Ось чому переважна більшість наших замовників користуються послугами <span style="font-weight:bold;">студій дизайну та архітектури.</span> Вони допоможуть вам підібрати саме те покриття, яке ідеально впишиться у ваш інтерєр, а вибір правельної текстури покриття, буде доставляти вам естетичне і експлуатаційне задоволення.<br>
                                    Тут представлені найкріщі студії з дизайну інтерєрів з всієї України, з якими нам пощастило познайомитись, багато з яких, також надають послуги і <span style="font-weight:bold;">архітектурного дизайну.</span>
                                </p>
                            @endif
                        </div>
                        <div class="text-center">
                            <a class="collapse-button">
                                Більше <span class="caret"></span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <h2>Обрати місто</h2>
                    <hr class="space m" />
                    <aside class="sidebar mi-menu">
                        <nav class="sidebar-nav">
                            <ul class="side-menu">
                                @foreach($regions as $reg)
                                    @if(isset($region))
                                        <li  class="{{$region->name === $reg->name  ? 'active' : ''}}" ><a href="{{route('pageInTown', $page->slag.'/'.$reg->slag)}}">{{$reg->town . ' / та область'}}</a></li>
                                    @else
                                        <li  class=" " ><a href="{{route('pageInTown', $page->slag.'/'.$reg->slag)}}">{{$reg->town . ' / та область'}}</a></li>
                                    @endif
                                @endforeach
                            </ul>
                        </nav>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <div class="section-empty text-center section-doc white">
        <div class="container content">
            <h4 class="text-normal">Переглянути всі проекти компанії ІВ БУД</h4>
            <p>Переглянути всі проекти,<br /> не тільки декор, а й промисловість, комерційю та інше.</p>
            <hr class="space xs" />
            <a href="{{{route('page','projects')}}}" target="_blank" class="btn btn-sm">Переглянути проекти</a>
        </div>
    </div>
@endsection
