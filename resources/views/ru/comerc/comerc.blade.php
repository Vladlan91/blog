@extends('layouts.comerc')
@section('script_header')
    <link rel="stylesheet" href="{{asset('Skote/dist/assets/libs/owl.carousel/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('Skote/dist/assets/libs/owl.carousel/assets/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('Skote/dist/assets/libs/owl.carousel/assets/owl.theme.default.min.css')}}">
@endsection
@section('content')
    <div class="container">
        <div class="col-12 text-center">
            <div class="home-wrapper">
                <div class="mb-5">
                    <a href="index.html" class="d-block auth-logo">
                        <img src="assets/images/logo-dark.png" alt="" class="auth-logo-dark mx-auto" height="20">
                        <img src="assets/images/logo-light.png" alt="" class="auth-logo-light mx-auto" height="20">
                    </a>
                </div>


                <div class="row justify-content-center">
                    <div class="col-sm-4">
                        <div class="maintenance-img">
                            <img src="{{asset('images/logo.png')}}" alt="" class="img-fluid mx-auto d-block">
                        </div>
                    </div>
                </div>

                <h3 class="mt-5">КОММЕРЧЕСКОЕ ПРЕДЛОЖЕНИЕ</h3>
                <p>Выберите тип объекта.</p>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">

                                    <div class="hori-timeline">
                                        <div class="owl-carousel owl-theme  navs-carousel events" id="timeline-carousel">
                                            <div class="item event-list">
                                                <div>
                                                    <div class="">
                                                <span class="avatar-title rounded-circle" style="background-color: white!important;">
                                                       <img class="img-thumbnail rounded-circle  " style="height: 200px; width: 200px;" src="{{asset('../prodgect/pr-8.png')}}" data-holder-rendered="true">
                                                `</span>
                                                    </div>
                                                    <br>
                                                    <div class="event-date">
                                                        <h5 class="mb-4">ЧАСТНЫЙ СЕКТОР</h5>
                                                    </div>
                                                    <div class="event-down-icon">
                                                        <i class="bx bx-down-arrow-circle h1 text-warning down-arrow-icon"></i>
                                                    </div>

                                                    <div class="mt-3 px-3">
                                                        <p class="text-muted">Декоративные и уникальные покрытия для частных домов и квартир.</p>
                                                    </div>
                                                    <div class="gap-2">
                                                        <a  href="{{route('comerc.stepTwo', 6)}}" type="button" class="btn  btn-warning btn-sm waves-effect waves-light">Выбрать</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="item event-list active">
                                                <div>
                                                    <div class="">
                                                <span class="avatar-title rounded-circle" style="background-color: white!important;">
                                                       <img class="img-thumbnail rounded-circle  " style="height: 200px; width: 200px;" src="{{asset('../prodgect/pr-50.png')}}" data-holder-rendered="true">
                                                `</span>
                                                    </div>
                                                    <br>
                                                    <div class="event-date">

                                                        <h5 class="mb-4">ЗАВЕДЕНИЯ</h5>
                                                    </div>
                                                    <div class="event-down-icon">
                                                        <i class="bx bx-down-arrow-circle h1 text-warning down-arrow-icon"></i>
                                                    </div>

                                                    <div class="mt-3 px-3">
                                                        <p class="text-muted">Декоративные покрытия с повышенной устойчивостью к пешим нагрузкам.</p>
                                                    </div>
                                                    <div class="gap-2">
                                                        <a  href="{{route('comerc.stepTwo', 4)}}" type="button" class="btn  btn-warning btn-sm waves-effect waves-light">Выбрать</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="item event-list">
                                                <div>
                                                    <div class="">
                                                <span class="avatar-title rounded-circle" style="background-color: white!important;">
                                                       <img class="img-thumbnail rounded-circle  " style="height: 200px; width: 200px;" src="{{asset('../prodgect/pr-18.png')}}" data-holder-rendered="true">
                                                `</span>
                                                    </div>
                                                    <br>
                                                    <div class="event-date">
                                                        <h5 class="mb-4">ПРОМЫШЛЕННОСТЬ</h5>
                                                    </div>
                                                    <div class="event-down-icon">
                                                        <i class="bx bx-down-arrow-circle h1 text-warning down-arrow-icon"></i>
                                                    </div>

                                                    <div class="mt-3 px-3">
                                                        <p class="text-muted">Покрытие для пищевой и тяжелой промышленности.</p>
                                                    </div>
                                                    <div class="gap-2">
                                                        <a  href="{{route('comerc.stepTwo', 1)}}" type="button" class="btn  btn-warning btn-sm waves-effect waves-light">Выбрать</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="item event-list">
                                                <div>
                                                    <div class="">
                                                <span class="avatar-title rounded-circle" style="background-color: white!important;">
                                                       <img class="img-thumbnail rounded-circle  " style="height: 200px; width: 200px;" src="{{asset('../prodgect/pr-31.png')}}" data-holder-rendered="true">
                                                `</span>
                                                    </div>
                                                    <br>
                                                    <div class="event-date">
                                                        <h5 class="mb-4">СКЛАДСКИЕ ПОМЕЩЕНИЯ</h5>
                                                    </div>
                                                    <div class="event-down-icon">
                                                        <i class="bx bx-down-arrow-circle h1 text-warning down-arrow-icon"></i>
                                                    </div>

                                                    <div class="mt-3 px-3">
                                                        <p class="text-muted">Покрытие для складских помещений и закрытых ангаров.</p>
                                                    </div>
                                                    <div class="gap-2">
                                                        <a  href="{{route('comerc.stepTwo', 2)}}" type="button" class="btn  btn-warning btn-sm waves-effect waves-light">Выбрать</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="item event-list">
                                                <div>
                                                    <div class="">
                                                <span class="avatar-title rounded-circle" style="background-color: white!important;">
                                                       <img class="img-thumbnail rounded-circle  " style="height: 200px; width: 200px;" src="{{asset('../prodgect/pr-24.png')}}" data-holder-rendered="true">
                                                `</span>
                                                    </div>
                                                    <br>
                                                    <div class="event-date">

                                                        <h5 class="mb-4">МЕДИЦИНА</h5>
                                                    </div>
                                                    <div class="event-down-icon">
                                                        <i class="bx bx-down-arrow-circle h1 text-warning down-arrow-icon"></i>
                                                    </div>

                                                    <div class="mt-3 px-3">
                                                        <p class="text-muted">Покрытие с антибактериальными свойствами для медицины.</p>
                                                    </div>
                                                    <div class="gap-2">
                                                        <a  href="{{route('comerc.stepTwo', 3)}}" type="button" class="btn  btn-warning btn-sm waves-effect waves-light">Выбрать</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="item event-list">
                                                <div>
                                                    <div class="">
                                                <span class="avatar-title rounded-circle" style="background-color: white!important;">
                                                       <img class="img-thumbnail rounded-circle  " style="height: 200px; width: 200px;" src="{{asset('../prodgect/pr-23.png')}}" data-holder-rendered="true">
                                                `</span>
                                                    </div>
                                                    <br>
                                                    <div class="event-date">
                                                        <h5 class="mb-4">АВТОИНДУСТРИЯ</h5>
                                                    </div>
                                                    <div class="event-down-icon">
                                                        <i class="bx bx-down-arrow-circle h1 text-warning down-arrow-icon"></i>
                                                    </div>

                                                    <div class="mt-3 px-3">
                                                        <p class="text-muted">
                                                            Паркинги, автомоек, сервисных центров по обслуживанию авто.</p>
                                                    </div>
                                                    <div class="gap-2">
                                                        <a  href="{{route('comerc.stepTwo', 5)}}" type="button" class="btn  btn-warning btn-sm waves-effect waves-light">Выбрать</a>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
        </div>
    </div>

@section('script')

    <script src="{{asset('Skote/dist/assets/libs/owl.carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('Skote/dist/assets/js/pages/timeline.init.js')}}"></script>
@endsection
@endsection
