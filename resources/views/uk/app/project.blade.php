@extends('layouts.app')
@section('title', 'Проекти компанії ІВ БУД')
@section('meta', 'Проекти компанії ІВ БУД')
@section('keywords', 'Полімерний мікроцемент | ІВ БУД')
@section('breadcrumbs')
@endsection
@section('content')
    <div class="header-base">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="title-base text-left">
                        <h1>Проекти компанії ІВ БУД</h1>
                        <p>Всі проекти унікальні, кожен об'єкт мав певні технічні і естетичні вимоги, які враховувались при виборі типу покриття.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <ol class="breadcrumb b white">
                        <li><a href="{{route('home')}}">Головна</a></li>
                        <li class="active">Проекти компанії ІВ БУД</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="section-empty">
        <div class="container content">
            <div class="maso-list list-sm-6">
                <div class="navbar navbar-inner">
                    <div class="navbar-toggle"><i class="fa fa-bars"></i><span>MENU</span><i class="fa fa-angle-down"></i></div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav over inner ms-minimal maso-filters">
                            <li class="active"><a data-filter="maso-item">Всі</a></li>
                            <li><a data-filter="cat1">Промисловість</a></li>
                            <li><a data-filter="cat2">Медецина</a></li>
                            <li><a data-filter="cat3">Склади</a></li>
                            <li><a data-filter="cat4">Заклади</a></li>
                            <li><a data-filter="cat5">Приватна оселя</a></li>
                            <li><a class="maso-order" data-sort="asc"><i class="fa fa-arrow-down"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="maso-box row">
                    <div data-sort="2" class="maso-item col-md-6 cat2 cat3">
                        <div class="advs-box advs-box-side boxed-inverse" data-anima="fade-left" data-trigger="hover">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="img-box"><img src="../prodgect/pr-2.png" alt=""></div>
                                </div>
                                <div class="col-md-8">
                                    <h3>Промисловий кварц</h3>
                                    <hr class="anima">
                                    <p>
                                        Сучасне та модернізоване виробництво олії ПП "Оліяр", місто Львів.
                                    </p>
                                    <a class="btn-text" href="#">Більше</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-sort="4" class="maso-item col-md-6 cat2 cat1">
                        <div class="advs-box advs-box-side boxed-inverse" data-anima="fade-left" data-trigger="hover">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="img-box"><img src="../prodgect/pr-1.png" alt=""></div>
                                </div>
                                <div class="col-md-8">
                                    <h3>Мікроцемент для підлоги</h3>
                                    <hr class="anima">
                                    <p>
                                        Сучасна квартира в скандинавському стилі, місто Львів.
                                    </p>
                                    <a class="btn-text" href="#">Більше</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-sort="2" class="maso-item col-md-6 cat1 cat3 cat4 cat5">
                        <div class="advs-box advs-box-side boxed-inverse" data-anima="fade-left" data-trigger="hover">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="img-box"><img src="../prodgect/pr-6.png" alt=""></div>
                                </div>
                                <div class="col-md-8">
                                    <h3>Декоративний кварц</h3>
                                    <hr class="anima">
                                    <p>
                                        Офісне приміщення "Галицька свіжина", місто Львів.
                                    </p>
                                    <a class="btn-text" href="#">Більше</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-sort="3" class="maso-item col-md-6 cat1 cat3 cat4 cat5">
                        <div class="advs-box advs-box-side boxed-inverse" data-anima="fade-left" data-trigger="hover">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="img-box"><img src="../prodgect/pr-7.png" alt=""></div>
                                </div>
                                <div class="col-md-8">
                                    <h3>Декоративний кварц</h3>
                                    <hr class="anima">
                                    <p>
                                        Сучасний будинон та бездоганний дизайн, місто Ужгород.
                                    </p>
                                    <a class="btn-text" href="#">Більше</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-sort="5" class="maso-item col-md-6 cat2 cat1">
                        <div class="advs-box advs-box-side boxed-inverse" data-anima="fade-left" data-trigger="hover">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="img-box"><img src="../prodgect/pr-8.png" alt=""></div>
                                </div>
                                <div class="col-md-8">
                                    <h3>Мікроцемент для підлоги</h3>
                                    <hr class="anima">
                                    <p>
                                        Бездоганна квартира в красивому, скандинавському стилі, місто Львів.
                                    </p>
                                    <a class="btn-text" href="#">Більше</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-sort="6" class="maso-item col-md-6 cat2 cat3 cat4 cat5">
                        <div class="advs-box advs-box-side boxed-inverse" data-anima="fade-left" data-trigger="hover">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="img-box"><img src="../prodgect/pr-9.png" alt=""></div>
                                </div>
                                <div class="col-md-8">
                                    <h3>Мікроцемент для підлоги</h3>
                                    <hr class="anima">
                                    <p>
                                        Цікавий проект, по свому унікальний, будинок в лофт стилі, місто Львів.
                                    </p>
                                    <a class="btn-text" href="#">Більше</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-sort="7" class="maso-item col-md-6 cat1 cat3 cat4 cat5">
                        <div class="advs-box advs-box-side boxed-inverse" data-anima="fade-left" data-trigger="hover">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="img-box"><img src="../prodgect/pr-3.png" alt=""></div>
                                </div>
                                <div class="col-md-8">
                                    <h3>Епоксидна підлога</h3>
                                    <hr class="anima">
                                    <p>
                                        Епоксидне тонкошарове покриття, як альтернатива наливним покриттям, місто Львів.
                                    </p>
                                    <a class="btn-text" href="#">Більше</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-sort="8" class="maso-item col-md-6 cat2 cat3 cat4 cat5">
                        <div class="advs-box advs-box-side boxed-inverse" data-anima="fade-left" data-trigger="hover">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="img-box"><img src="../prodgect/pr-10.png" alt=""></div>
                                </div>
                                <div class="col-md-8">
                                    <h3>Промисловий окрас</h3>
                                    <hr class="anima">
                                    <p>
                                        Підприємство з цікавим дизайнерським рішенням, місто Івано-Франківськ.
                                    </p>
                                    <a class="btn-text" href="#">Більше</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-sort="8" class="maso-item col-md-6 cat2 cat3 cat4 cat5">
                        <div class="advs-box advs-box-side boxed-inverse" data-anima="fade-left" data-trigger="hover">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="img-box"><img src="../prodgect/pr-15.png" alt=""></div>
                                </div>
                                <div class="col-md-8">
                                    <h3>Промисловий окрас</h3>
                                    <hr class="anima">
                                    <p>
                                        Епіцентер, міцне покриття для підвищенної вологи, місто Чернівці.
                                    </p>
                                    <a class="btn-text" href="#">Більше</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-sort="8" class="maso-item col-md-6 cat2 cat3 cat4 cat5">
                        <div class="advs-box advs-box-side boxed-inverse" data-anima="fade-left" data-trigger="hover">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="img-box"><img src="../prodgect/pr-10.png" alt=""></div>
                                </div>
                                <div class="col-md-8">
                                    <h3>Промисловий окрас</h3>
                                    <hr class="anima">
                                    <p>
                                        Підприємство з цікавим дизайнерським рішенням, місто Івано-Франківськ.
                                    </p>
                                    <a class="btn-text" href="#">Більше</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-sort="8" class="maso-item col-md-6 cat2 cat3 cat4 cat5">
                        <div class="advs-box advs-box-side boxed-inverse" data-anima="fade-left" data-trigger="hover">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="img-box"><img src="../prodgect/pr-10.png" alt=""></div>
                                </div>
                                <div class="col-md-8">
                                    <h3>Промисловий окрас</h3>
                                    <hr class="anima">
                                    <p>
                                        Підприємство з цікавим дизайнерським рішенням, місто Івано-Франківськ.
                                    </p>
                                    <a class="btn-text" href="#">Більше</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-sort="8" class="maso-item col-md-6 cat2 cat3 cat4 cat5">
                        <div class="advs-box advs-box-side boxed-inverse" data-anima="fade-left" data-trigger="hover">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="img-box"><img src="../prodgect/pr-10.png" alt=""></div>
                                </div>
                                <div class="col-md-8">
                                    <h3>Промисловий окрас</h3>
                                    <hr class="anima">
                                    <p>
                                        Підприємство з цікавим дизайнерським рішенням, місто Івано-Франківськ.
                                    </p>
                                    <a class="btn-text" href="#">Більше</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-sort="8" class="maso-item col-md-6 cat2 cat3 cat4 cat5">
                        <div class="advs-box advs-box-side boxed-inverse" data-anima="fade-left" data-trigger="hover">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="img-box"><img src="../prodgect/pr-10.png" alt=""></div>
                                </div>
                                <div class="col-md-8">
                                    <h3>Промисловий окрас</h3>
                                    <hr class="anima">
                                    <p>
                                        Підприємство з цікавим дизайнерським рішенням, місто Івано-Франківськ.
                                    </p>
                                    <a class="btn-text" href="#">Більше</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-sort="8" class="maso-item col-md-6 cat2 cat3 cat4 cat5">
                        <div class="advs-box advs-box-side boxed-inverse" data-anima="fade-left" data-trigger="hover">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="img-box"><img src="../prodgect/pr-10.png" alt=""></div>
                                </div>
                                <div class="col-md-8">
                                    <h3>Промисловий окрас</h3>
                                    <hr class="anima">
                                    <p>
                                        Підприємство з цікавим дизайнерським рішенням, місто Івано-Франківськ.
                                    </p>
                                    <a class="btn-text" href="#">Більше</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- INSERT OTHERS GALLERY ITEMS HERE -->
                    <div class="clear"></div>
                </div>
                <div class="list-nav text-left">
                    <a href="#" class="btn btn-sm load-more-maso" data-pagination-anima="fade-bottom" data-page-items="10">
                        Load More prjects
                        <i class="fa fa-arrow-down"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
