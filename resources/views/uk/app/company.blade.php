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
                        <h1>Project single two</h1>
                        <p>Success is no accident. It is hard work, perseverance, studying, sacrifice and most of all, love of what you are doing or learning to do.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <ol class="breadcrumb b white">
                        <li><a href="#">Portfolio</a></li>
                        <li class="active">Portfolio single two</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="section-empty section-item">
        <div class="container content">
            <hr class="space l" />
            <div class="row">
                <div class="col-md-8">
                    <p>
                        Lorem ipsum dolor sit amet, cons
                        Utenim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                        in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip ex ea commodo consequat duis aute irure dolorquis nostrud exercitation ullamco laboris   hendrerit incidunt pulvinar litora eleisto.
                        Tincidunt integer eu augue augue nunc elit dolor, luctus placerat scelerisque euismod, iaculis eu lacus nunc mi elit, vehicula ut laoreet acliquamo
                        sit amet justo nunc temporo metus velo.
                    </p>
                    <hr class="space m" />
                    <div class="btn-group  btn-group-icons" role="group">
                        <a data-social="share-facebook" class="btn btn-sm btn-border">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a data-social="share-twitter" class="btn btn-sm btn-border">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                    <hr class="space m" />
                    <hr />
                    <hr class="space m" />
                </div>
                <div class="col-md-4 boxed white">
                    <h2 class="text-color">Details</h2>
                    <hr class="space m" />
                    <ul class="list-texts">
                        <li><b>Client.</b>   Google</li>
                        <li><b>Location.</b>   Mountain View CA 94043</li>
                        <li><b>Surface Area.</b> 450,000 m2</li>
                        <li><b>Year.</b>   2014</li>
                        <li><b>Value.</b> $250.000</li>
                        <li><b>Architect.</b>   Jason & Perry</li>
                    </ul>
                    <hr class="space s" />
                    <a href="#" class="btn-text text-color"> Visit website</a>
                </div>
            </div>
            <hr class="space m" />
            <div class="row" data-anima="" data-timeline="asc">
                <div class="col-md-3 col-sm-12">
                    <h4>Команда {{$company->name}}</h4>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipiscing elitsed do eiusmod tempor incididunte.
                    </p>
                    <hr class="space visible-sm">
                </div>
                <div class="col-md-3 anima fade-left" style="position: relative; animation-duration: 500ms; transition-timing-function: ease; transition-delay: 0ms;" aid="0.318113478349208">
                    <div class="advs-box niche-box-team" data-anima="scale-up" data-trigger="hover">
                        <a class="img-box">
                            <img class="anima" src="../images/users/team-9.jpg" alt="" style="position: relative; animation-duration: 500ms; transition-timing-function: ease; transition-delay: 0ms;" aid="0.6100653588087239">
                        </a>
                        <div class="content-box">
                            <h2>Zarata Afratto</h2>
                            <h4>Media relations</h4>
                            <hr class="e">
                            <div class="btn-group social-group">
                                <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                <a target="_blank" href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                            <p>Lorem ipsum is text of the printing and industry manulo pertus.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 anima fade-left" style="position: relative; animation-duration: 500ms; transition-timing-function: ease; transition-delay: 0ms;" aid="0.318113478349208">
                    <div class="advs-box niche-box-team" data-anima="scale-up" data-trigger="hover">
                        <a class="img-box">
                            <img class="anima" src="../images/users/team-9.jpg" alt="" style="position: relative; animation-duration: 500ms; transition-timing-function: ease; transition-delay: 0ms;" aid="0.6100653588087239">
                        </a>
                        <div class="content-box">
                            <h2>Zarata Afratto</h2>
                            <h4>Media relations</h4>
                            <hr class="e">
                            <div class="btn-group social-group">
                                <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                <a target="_blank" href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                            <p>Lorem ipsum is text of the printing and industry manulo pertus.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 anima fade-left" style="position: relative; animation-duration: 500ms; transition-timing-function: ease; transition-delay: 0ms;" aid="0.318113478349208">
                    <div class="advs-box niche-box-team" data-anima="scale-up" data-trigger="hover">
                        <a class="img-box">
                            <img class="anima" src="../images/users/team-9.jpg" alt="" style="position: relative; animation-duration: 500ms; transition-timing-function: ease; transition-delay: 0ms;" aid="0.6100653588087239">
                        </a>
                        <div class="content-box">
                            <h2>Zarata Afratto</h2>
                            <h4>Media relations</h4>
                            <hr class="e">
                            <div class="btn-group social-group">
                                <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                <a target="_blank" href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                            <p>Lorem ipsum is text of the printing and industry manulo pertus.</p>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="space m" />
            <div class="row" data-anima="" data-timeline="asc">
                <div class="col-md-3 col-sm-12">
                    <h4>Спільні проекти</h4>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipiscing elitsed do eiusmod tempor incididunte.
                    </p>
                    <hr class="space visible-sm">
                </div>
                <div class="col-md-9 col-sm-12">
                <div class="flexslider carousel outer-navs" data-options="numItems:2,controlNav:true,itemMargin:60">
                    <ul class="slides">
                        @foreach($portfolio as $porfol)
                            <li>
                                <div  class="maso-item " style=" visibility: visible;">
                                    <div class="advs-box advs-box-side boxed-inverse" data-trigger="hover" style="visibility: visible; opacity: 1;">
                                        <div class="row" style="opacity: 1;">
                                            <div class="col-md-4">
                                                <div class="img-box"><img src="../prodgect/pr-2.png" alt="" style="max-width: 263px; width: 263px; margin-left: -39px;"></div>
                                            </div>
                                            <div class="col-md-8">
                                                <h5>Промисловий кварц</h5>
                                                <hr class="anima">
                                                <p>
                                                    Сучасне та модернізоване виробництво олії ПП "Оліяр", місто Львів.
                                                </p>
                                                <a class="btn-text" href="{{route('portfolio', $porfol->slug)}}">Більше</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                            @foreach($portfolio as $porfol)
                                <li>
                                    <div  class="maso-item " style=" visibility: visible;">
                                        <div class="advs-box advs-box-side boxed-inverse" data-trigger="hover" style="visibility: visible; opacity: 1;">
                                            <div class="row" style="opacity: 1;">
                                                <div class="col-md-4">
                                                    <div class="img-box"><img src="../prodgect/pr-2.png" alt="" style="max-width: 263px; width: 263px; margin-left: -39px;"></div>
                                                </div>
                                                <div class="col-md-8">
                                                    <h5>Промисловий кварц</h5>
                                                    <hr class="anima">
                                                    <p>
                                                        Сучасне та модернізоване виробництво олії ПП "Оліяр", місто Львів.
                                                    </p>
                                                    <a class="btn-text" href="{{route('portfolio', $porfol->slug)}}">Більше</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                            @foreach($portfolio as $porfol)
                                <li>
                                    <div  class="maso-item " style=" visibility: visible;">
                                        <div class="advs-box advs-box-side boxed-inverse" data-trigger="hover" style="visibility: visible; opacity: 1;">
                                            <div class="row" style="opacity: 1;">
                                                <div class="col-md-4">
                                                    <div class="img-box"><img src="../prodgect/pr-2.png" alt="" style="max-width: 263px; width: 263px; margin-left: -39px;"></div>
                                                </div>
                                                <div class="col-md-8">
                                                    <h5>Промисловий кварц</h5>
                                                    <hr class="anima">
                                                    <p>
                                                        Сучасне та модернізоване виробництво олії ПП "Оліяр", місто Львів.
                                                    </p>
                                                    <a class="btn-text" href="{{route('portfolio', $porfol->slug)}}">Більше</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                    </ul>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection
