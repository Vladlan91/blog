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

            <h3 class="mt-5">КОМЕРЦІЙНА ПРОПОЗИЦІЯ</h3>
            <p>Оберіть тип об'єкту.</p>
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
                                                <h5 class="mb-4">ПРИВАТНИЙ СЕКТОР</h5>
                                            </div>
                                            <div class="event-down-icon">
                                                <i class="bx bx-down-arrow-circle h1 text-warning down-arrow-icon"></i>
                                            </div>

                                            <div class="mt-3 px-3">
                                                <p class="text-muted">Декоративні та унікальні покриття для приватних будинків та квартир.</p>
                                            </div>
                                            <div class="gap-2">
                                                <a  href="{{route('comerc.stepTwo', 6)}}" type="button" class="btn  btn-warning btn-sm waves-effect waves-light">Обрати</a>
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

                                                <h5 class="mb-4">ЗАКЛАДИ</h5>
                                            </div>
                                            <div class="event-down-icon">
                                                <i class="bx bx-down-arrow-circle h1 text-warning down-arrow-icon"></i>
                                            </div>

                                            <div class="mt-3 px-3">
                                                <p class="text-muted">Декоративні покриття з підвищеною стійкістю до піших навантажень.</p>
                                            </div>
                                            <div class="gap-2">
                                                <a  href="{{route('comerc.stepTwo', 4)}}" type="button" class="btn  btn-warning btn-sm waves-effect waves-light">Обрати</a>
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
                                                <h5 class="mb-4">ПРОМИСЛОВІСТЬ</h5>
                                            </div>
                                            <div class="event-down-icon">
                                                <i class="bx bx-down-arrow-circle h1 text-warning down-arrow-icon"></i>
                                            </div>

                                            <div class="mt-3 px-3">
                                                <p class="text-muted">Покриття для харчової та важкої промисловості.</p>
                                            </div>
                                            <div class="gap-2">
                                                <a  href="{{route('comerc.stepTwo', 1)}}" type="button" class="btn  btn-warning btn-sm waves-effect waves-light">Обрати</a>
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
                                                <h5 class="mb-4">СКЛАДСЬКІ ПРИМІЩЕННЯ</h5>
                                            </div>
                                            <div class="event-down-icon">
                                                <i class="bx bx-down-arrow-circle h1 text-warning down-arrow-icon"></i>
                                            </div>

                                            <div class="mt-3 px-3">
                                                <p class="text-muted">Покриття для складських приміщень та закритих ангарів.</p>
                                            </div>
                                            <div class="gap-2">
                                                <a  href="{{route('comerc.stepTwo', 2)}}" type="button" class="btn  btn-warning btn-sm waves-effect waves-light">Обрати</a>
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
                                                <p class="text-muted">Покриття з антибактеріальними властивостями для медицини.</p>
                                            </div>
                                            <div class="gap-2">
                                                <a  href="{{route('comerc.stepTwo', 3)}}" type="button" class="btn  btn-warning btn-sm waves-effect waves-light">Обрати</a>
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
                                                <h5 class="mb-4">АВТОІНДУСТРІЯ</h5>
                                            </div>
                                            <div class="event-down-icon">
                                                <i class="bx bx-down-arrow-circle h1 text-warning down-arrow-icon"></i>
                                            </div>

                                            <div class="mt-3 px-3">
                                                <p class="text-muted">Паркінги, автомийок, сервісних центрів з обслуговування авто.</p>
                                            </div>
                                            <div class="gap-2">
                                                <a  href="{{route('comerc.stepTwo', 5)}}" type="button" class="btn  btn-warning btn-sm waves-effect waves-light">Обрати</a>
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
