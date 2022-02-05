@extends('layouts.comerc')
@section('script_header')
    <link href="{{asset('Skote/dist/assets/libs/magnific-popup/magnific-popup.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{asset('Skote/dist/assets/libs/owl.carousel/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('Skote/dist/assets/libs/owl.carousel/assets/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('Skote/dist/assets/libs/owl.carousel/assets/owl.theme.default.min.css')}}">
@endsection
@section('content')
    <div class="container">
        <div class="col-12 text-center">
            <div class="home-wrapper">
                <div class="row justify-content-center">
                    <div class="col-sm-4">
                        <div class="maintenance-img">
                            <img src="{{asset('images/logo.png')}}" style="margin-top: 10%" alt="" class="img-fluid mx-auto d-block">
                        </div>
                    </div>
                </div>

                <h3 class="mt-5">КОМЕРЦІЙНА ПРОПОЗИЦІЯ</h3>
                <p>Оберіть тип покриття.</p>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="hori-timeline">
                                        <div class="owl-carousel owl-theme  navs-carousel events" id="timeline-carousel">
                                            @foreach($types as $item )
                                                <div class="item event-list">
                                                    <div>

                                                        <div class="card">
                                                            <div class="card-body">
                                                        <span class="avatar-title rounded-circle" style="background-color: white!important;">
                                                            <img class="img-thumbnail rounded-circle  " style="height: 200px; width: 200px;" src="{{asset($item->avatar)}}" data-holder-rendered="true">
                                                `       </span>
                                                                <br>
                                                                <h4 class="card-title" style="height: 50px;">{{$item->name}}</h4>
                                                                <p><a href="{{route('page', $item->slug)}}" target="_blank">Ознайомитись з покриттям.</a></p>

                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="button-items">
                                                                                <div class="row ">
                                                                                    @if(isset($item->video))
                                                                                    <div class="col-sm-6 col-6">
                                                                                        <a type="button" class="popup-youtube btn btn-warning waves-effect btn-label waves-light " href="{{$item->video}}"><i class="bx bx-video label-icon "></i> Відео</a>
                                                                                    </div>
                                                                                    @endif
                                                                                    <div class="col-sm-6 col-6">
                                                                                        <a type="button" class="btn btn-primary  waves-effect btn-label waves-light" href="{{route('comerc.stepThree',  [$item, $id])}}"><i class="bx bx-smile label-icon"></i> Обрати</a>
                                                                                    </div>
                                                                                </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
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
    <script src="{{asset('Skote/dist/assets/libs/magnific-popup/jquery.magnific-popup.min.js')}}"></script>

    <!-- lightbox init js-->
    <script src="{{asset('Skote/dist/assets/js/pages/lightbox.init.js')}}"></script>
@endsection
@endsection

