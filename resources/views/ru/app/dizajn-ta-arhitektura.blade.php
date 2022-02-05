@extends('layouts.appru')
@if(!isset($region))
    @section('title', 'Дизайн и архитектура')
    @section('meta', 'Дизайн и архитектура | ИВ БУД')
    @section('keywords', 'Дизайн и архитектура | ИВ БУД')
@else
    @section('title', 'Дизайн и архитектура '.'/ '. $region->town_ru . ' / '. $region->name_ru)
    @section('meta', 'Дизайн и архитектура '.'/ '. $region->town_ru . ' / '. $region->name_ru . ' ИВ БУД')
    @section('keywords', 'Дизайн и архитектура '.'/ '. $region->town_ru . ' / '. $region->name_ru . ' ИВ БУД')
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
                        <h1>Дизайн и архитектура  | {{$region->town_ru . ' / '. $region->name_ru}}</h1>
                            <p>Здесь вы найдете все студии дизайна и архитектуры, с которыми нам удалось реализовать крутые и уникальные идеи в городе {{$region->town_ru}} и {{$region->name_ru}}.</p>
                        @else
                            <h1>Дизайн и архитектура </h1>
                            <p>Здесь вы найдете все студии дизайна и архитектуры, с которыми нам удалось реализовать крутые и уникальные идеи по всей Украине.</p>
                        @endif

                    </div>
                </div>
                <div class="col-md-3">
                    <ol class="breadcrumb b white">
                        <li><a href="{{route('home')}}">Главная</a></li>
                        <li class="active">Дизайн и архитектура</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="section-empty bg-white">
        <div class="container content">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <h4>
                        Студии дизайна и архитектуры</h4>
                    <div class="counter-box-simple text-color "><span class="counter text-xl" data-to="3000" data-separator="" data-trigger="null">15</span><span class="text-s"> студій</span></div>
                    <hr class="space xs">
                    <p class="text-xs text-uppercase">
                        С которыми мы сотрудничаем.</p>
                </div>
                <div class="col-md-3 col-sm-6">
                    <h4>Общая площадь полов</h4>
                    <div class="counter-box-simple text-color  "><span class="counter text-xl" data-to="300" data-trigger="null">12000+</span><span class="text-s"> м2</span></div>
                    <hr class="space xs">
                    <p class="text-xs text-uppercase">Различных типов покрытий</p>
                </div>
                <div class="col-md-3 col-sm-6">
                    <h4>Проекты, которые еще в процессе работы</h4>
                    <div class="counter-box-simple text-color "><span class="counter text-xl" data-to="950" data-trigger="null">12</span><span class="text-s"></span></div>
                    <hr class="space xs">
                    <p class="text-xs text-uppercase">Проекты, которые находятся на разных этапах реализации.</p>
                </div>
                <div class="col-md-3 col-sm-6">
                    <h4>Проекты, которые уже завершены</h4>
                    <div class="counter-box-simple text-color"><span class="counter text-xl" data-to="2500" data-separator="" data-trigger="null">95</span><span class="text-s"></span></div>
                    <hr class="space xs">
                    <p class="text-xs text-uppercase">
                        Реализованные проекты, которые уже сданы заказчикам</p>
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
                        <ul class="pagination-sm pagination-maso pagination" data-page-items="8" data-pagination-anima="show-scale"><li class="first disabled"><a href="#"><i class="fa fa-angle-double-left"></i><span>с начала</span></a></li><li class="prev disabled"><a href="#"> <i class="fa fa-angle-left"></i> <span>предыдущий</span></a></li><li class="page active"><a href="#">1</a></li><li class="page"><a href="#">2</a></li><li class="next"><a href="#"><span>следующий</span> <i class="fa fa-angle-right"></i></a></li><li class="last"><a href="#"><span>в конец</span> <i class="fa fa-angle-double-right"></i></a></li></ul>
                    </div>
                    <div class="collapse-box" data-height="50" id="collapse-demo-4">
                        <div class="panel" style="display: block; height: 50px;">
                            @if(isset($region))
                                <p>
                                    <span style="font-weight:bold;">Дизайн и архитерктура</span>- все то, что мы с вами так любим и ценим. Как в любом деле, здесь присутствуют свои тонкости, с которыми справятся лучше, специалисты своего дела. Напольные покрытия - неотъемлемый элемент любого дизайна, однако выбор покрытий такой большой, цвет, текстура, эксплуатационные свойства, в этом нужно разбираться и чувствовать еще на этапе проектирования. Вот почему  большинство наших заказчиков пользуются услугами<span style="font-weight:bold;">студий дизайна и архитектуры.</span> Они помогут вам подобрать именно то покрытие, которое идеально впишиться в ваш интерьер, а выбор правельно текстуры покрытия, будет доставлять вам эстетическое и эксплуатационное удовольствие.<br>

                                    Здесь представлены найкрищи студии по дизайну интерьеров, которые предоставляют свои услуги в городе <span style="font-weight:bold;">{{$region->town_ru . ' та '. $region->name_ru}}</span>, с которыми нам посчастливилось познакомиться, многие из которых, также предоставляют услуги и <span style="font-weight:bold;">архитектурного дизайна.</span>
                                </p>
                            @else
                                <p>
                                    <span style="font-weight:bold;">Дизайн и архитерктура</span>- все то, что мы с вами так любим и ценим. Как в любом деле, здесь присутствуют свои тонкости, с которыми справятся лучше, специалисты своего дела. Напольные покрытия - неотъемлемый элемент любого дизайна, однако выбор покрытий такой большой, цвет, текстура, эксплуатационные свойства, в этом нужно разбираться и чувствовать еще на этапе проектирования. Вот почему  большинство наших заказчиков пользуются услугами<span style="font-weight:bold;">студий дизайна и архитектуры.</span> Они помогут вам подобрать именно то покрытие, которое идеально впишиться в ваш интерьер, а выбор правельно текстуры покрытия, будет доставлять вам эстетическое и эксплуатационное удовольствие.<br>

                                    Здесь представлены найкрищи студии по дизайну интерьеров с всей Украине, с которыми нам посчастливилось познакомиться, многие из которых, также предоставляют услуги и <span style="font-weight:bold;">архитектурного дизайна.</span>
                                </p>
                            @endif
                        </div>
                        <div class="text-center">
                            <a class="collapse-button">
                                Больше <span class="caret"></span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <h2>Выбрать город</h2>
                    <hr class="space m" />
                    <aside class="sidebar mi-menu">
                        <nav class="sidebar-nav">
                            <ul class="side-menu">
                                @foreach($regions as $reg)
                                    @if(isset($region))
                                        <li  class="{{$region->name_ru === $reg->name_ru  ? 'active' : ''}}" ><a href="{{route('pageInTown', $page->slag.'/'.$reg->slag)}}">{{$reg->town_ru . ' / та область'}}</a></li>
                                    @else
                                        <li  class=" " ><a href="{{route('pageInTown', $page->slag.'/'.$reg->slag)}}">{{$reg->town_ru . ' / та область'}}</a></li>
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
            <h4 class="text-normal">Посмотреть все проекты компании ИВ БУД</h4>
            <p>Посмотреть все проекты,<br /> не только декор, но и промышленность, комерцийю и прочее.</p>
            <hr class="space xs" />
            <a href="{{{route('page','projects')}}}" target="_blank" class="btn btn-sm">
                Посмотреть проекты</a>
        </div>
    </div>
@endsection
