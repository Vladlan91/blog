@extends('layouts.admin')
@section('breadcrumbs')
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Projects Overview</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Projects</a></li>
                        <li class="breadcrumb-item active">Projects Overview</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-lg-7">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-9">
                            <img src="{{asset('Skote/dist/assets/images/companies/img-1.png')}}" alt="" class="avatar-sm me-4">

                            <div class="media-body overflow-hidden">
                                <h5 class="text-truncate font-size-15">Skote Dashboard UI</h5>
                                <p class="text-muted">{{$portfolio->name}}</p>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="text-sm-end">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                         <i class="mdi mdi-chevron-down">Внести зміни </i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="margin: 0px;">
                                        <a class="dropdown-item" href="#">Опублікувати проект на сайті</a>
                                        <a class="dropdown-item" href="#">Корегувати проект</a>
                                        <a class="dropdown-item" href="#">Змінити статус проекту</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h5 class="font-size-15 mt-4">Деталі проекту :</h5>

                    <p class="text-muted">To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is. The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc,</p>
                    <div class="row">
                    <div class="col-sm-6">
                        <p><i class="mdi mdi-chevron-right text-primary me-1">Тип - </i><a href="{{route('page', $portfolio->floor->slug)}}" target="_blank" class="badge bg-primary bg-soft text-primary font-size-11">{{ $portfolio->floor->name}}</a></p>
                        <p><i class="mdi mdi-chevron-right text-primary me-1">Регіон - </i> {{ $portfolio->region->name}}</p>
                        <p><i class="mdi mdi-chevron-right text-primary me-1">Статус проекту - </i><span class="badge bg-success">Завершений</span></p>

                    </div>
                    <div class="col-sm-6">
                        <p><i class="mdi mdi-chevron-right text-primary me-1">Площа - </i>{{ $portfolio->square}} м2</p>
                        <p><i class="mdi mdi-chevron-right text-primary me-1">Вартість робіт - </i> {{ $portfolio->price}} грн.</p>
                        <p><i class="mdi mdi-chevron-right text-primary me-1">Вартість доп. робіт - </i><span class="badge badge-pill badge-soft-danger font-size-11">{{$portfolio->price_two}}</span> грн.</p>
                    </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <div class="row task-dates" style="border-bottom: solid 1px; border-bottom-color: #f3f3f9; padding-bottom: 5px;">
                                            <div class="col-sm-6 col-6">
                                                <div class="mt-4">
                                                    <h5 class="font-size-14"><i class="bx bx-calendar me-1 text-primary"></i>Дата стурту</h5>
                                                    <p class="text-muted mb-0">08 Sept, 2019</p>
                                                </div>
                                            </div>

                                            <div class="col-sm-6 col-6">
                                                <div class="mt-4">
                                                    <h5 class="font-size-14"><i class="bx bx-calendar-check me-1 text-primary"></i>Дата фінішу</h5>
                                                    <p class="text-muted mb-0">12 Oct, 2019</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-nowrap align-middle table-hover mb-0">
                                                <tbody>
                                                <tr>
                                                    <td style="width: 45px;">
                                                        <div class="avatar-sm">
                                                            <span class="avatar-title rounded-circle bg-primary bg-soft text-primary font-size-24">
                                                                <i class="bx bxs-file-doc"></i>
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">Комерційна проекту</a></h5>
                                                        <small>PDF</small>
                                                    </td>
                                                    <td>
                                                        <div class="text-center">
                                                            <a href="#" class="text-dark"><i class="bx bx-download h3 m-0"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end col -->
        <div class="col-xl-5">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <h4 class="card-title mb-4">Витрати</h4>
                        </div>
                        <div class="col-lg-6">
                            <div class="text-sm-end">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                        Додати <i class="mdi mdi-chevron-down"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="margin: 0px;">
                                        <a class="dropdown-item" href="#">Транспортні витрати</a>
                                        <a class="dropdown-item" href="#">Людські витрати</a>
                                        <a class="dropdown-item" href="#">Матеріали</a>
                                        <a class="dropdown-item" href="#">Проживання та добові</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="nav nav-pills bg-light rounded" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#car-tab" role="tab" aria-selected="false">Транспортні</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#workers-tab" role="tab" aria-selected="true">Людські</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#materials-tab" role="tab" aria-selected="false">Матеріали</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#transactions-sell-tab" role="tab" aria-selected="false">Добові та житло</a>
                        </li>
                    </ul>
                    <div class="tab-content mt-4">
                        <div class="tab-pane" id="car-tab" role="tabpanel">
                            <div class="table-responsive" data-simplebar="init" style="max-height: 380px;"><div class="simplebar-wrapper" style="margin: 0px;">
                                    <div class="simplebar-height-auto-observer-wrapper">
                                        <div class="simplebar-height-auto-observer"></div>
                                    </div>
                                    <div class="simplebar-mask">
                                        <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                            <div class="simplebar-content-wrapper" style="height: auto; padding-right: 0px; padding-bottom: 0px; overflow: hidden;">
                                                <div class="simplebar-content" style="padding: 0px;">
                                                    <table class="table align-middle table-nowrap">
                                                        <tbody>
                                                        <div class="row" style="margin: 10px;">
                                                            <div class="col-sm-6 col-6">
                                                                <div>
                                                                    <p class="text-muted mb-2">Загальна сума</p>
                                                                    <h5>18300 грн.</h5>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6 col-6">
                                                                <div class="text-sm-end">
                                                                    <p class="text-muted mb-2">Від вартості</p>
                                                                    <h5> 7 позицій<span class="badge bg-success ms-1 align-bottom"> 12 %</span></h5>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <tr>
                                                            <td style="width: 50px;">
                                                                <div class="font-size-22 text-primary">
                                                                    <i class="bx bx-down-arrow-circle"></i>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div>
                                                                    <h5 class="font-size-14 mb-1">Buy BTC</h5>
                                                                    <p class="text-muted mb-0">14 Mar, 2020</p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 mb-0">0.016 BTC</h5>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 text-muted mb-0">$125.20</h5>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                <div class="font-size-22 text-danger">
                                                                    <i class="bx bx-up-arrow-circle"></i>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div>
                                                                    <h5 class="font-size-14 mb-1">Sell ETH</h5>
                                                                    <p class="text-muted mb-0">15 Mar, 2020</p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 mb-0">0.56 ETH</h5>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 text-muted mb-0">$112.34</h5>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                <div class="font-size-22 text-primary">
                                                                    <i class="bx bx-down-arrow-circle"></i>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div>
                                                                    <h5 class="font-size-14 mb-1">Buy LTC</h5>
                                                                    <p class="text-muted mb-0">16 Mar, 2020</p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 mb-0">1.88 LTC</h5>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 text-muted mb-0">$94.22</h5>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                <div class="font-size-22 text-primary">
                                                                    <i class="bx bx-down-arrow-circle"></i>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div>
                                                                    <h5 class="font-size-14 mb-1">Buy ETH</h5>
                                                                    <p class="text-muted mb-0">17 Mar, 2020</p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 mb-0">0.42 ETH</h5>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 text-muted mb-0">$84.32</h5>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                <div class="font-size-22 text-danger">
                                                                    <i class="bx bx-up-arrow-circle"></i>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div>
                                                                    <h5 class="font-size-14 mb-1">Sell BTC</h5>
                                                                    <p class="text-muted mb-0">18 Mar, 2020</p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 mb-0">0.018 BTC</h5>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 text-muted mb-0">$145.80</h5>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td style="width: 50px;">
                                                                <div class="font-size-22 text-primary">
                                                                    <i class="bx bx-down-arrow-circle"></i>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div>
                                                                    <h5 class="font-size-14 mb-1">Buy BTC</h5>
                                                                    <p class="text-muted mb-0">14 Mar, 2020</p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 mb-0">0.016 BTC</h5>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 text-muted mb-0">$125.20</h5>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                <div class="font-size-22 text-danger">
                                                                    <i class="bx bx-up-arrow-circle"></i>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div>
                                                                    <h5 class="font-size-14 mb-1">Sell ETH</h5>
                                                                    <p class="text-muted mb-0">15 Mar, 2020</p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 mb-0">0.56 ETH</h5>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 text-muted mb-0">$112.34</h5>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div>
                                </div>
                                <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                    <div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div>
                                </div>
                                <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                                    <div class="simplebar-scrollbar" style="height: 240px; transform: translate3d(0px, 0px, 0px); display: none;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane active" id="workers-tab" role="tabpanel">
                            <div class="table-responsive" data-simplebar="init" style="max-height: 380px;">
                                <div class="simplebar-wrapper" style="margin: 0px;">
                                    <div class="simplebar-height-auto-observer-wrapper">
                                        <div class="simplebar-height-auto-observer"></div>
                                    </div>
                                    <div class="simplebar-mask"><div class="simplebar-offset" style="right: -20px; bottom: 0px;">
                                            <div class="simplebar-content-wrapper" style="height: auto; padding-right: 20px; padding-bottom: 0px; overflow: hidden scroll;">
                                                <div class="simplebar-content" style="padding: 0px;">
                                                    <table class="table align-middle table-nowrap">
                                                        <tbody>
                                                        <div class="row" style="margin: 10px;">
                                                            <div class="col-sm-6">
                                                                <div>
                                                                    <p class="text-muted mb-2">Загальна сума</p>
                                                                    <h5>27800 грн.</h5>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="text-sm-end">
                                                                    <p class="text-muted mb-2">Від вартості</p>
                                                                    <h5> 7 позицій<span class="badge bg-success ms-1 align-bottom"> 22 %</span></h5>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <tr>
                                                            <td style="width: 50px;">
                                                                <div class="font-size-22 text-danger">
                                                                    <i class="bx bx-up-arrow-circle"></i>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div>
                                                                    <h5 class="font-size-14 mb-1">Sell ETH</h5>
                                                                    <p class="text-muted mb-0">15 Mar, 2020</p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 mb-0">0.56 ETH</h5>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 text-muted mb-0">$112.34</h5>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                <div class="font-size-22 text-primary">
                                                                    <i class="bx bx-down-arrow-circle"></i>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div>
                                                                    <h5 class="font-size-14 mb-1">Buy BTC</h5>
                                                                    <p class="text-muted mb-0">14 Mar, 2020</p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 mb-0">0.016 BTC</h5>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 text-muted mb-0">$125.20</h5>
                                                                </div>
                                                            </td>
                                                        </tr>


                                                        <tr>
                                                            <td>
                                                                <div class="font-size-22 text-primary">
                                                                    <i class="bx bx-down-arrow-circle"></i>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div>
                                                                    <h5 class="font-size-14 mb-1">Buy ETH</h5>
                                                                    <p class="text-muted mb-0">17 Mar, 2020</p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 mb-0">0.42 ETH</h5>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 text-muted mb-0">$84.32</h5>
                                                                </div>
                                                            </td>
                                                        </tr>



                                                        <tr>
                                                            <td>
                                                                <div class="font-size-22 text-primary">
                                                                    <i class="bx bx-down-arrow-circle"></i>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div>
                                                                    <h5 class="font-size-14 mb-1">Buy LTC</h5>
                                                                    <p class="text-muted mb-0">16 Mar, 2020</p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 mb-0">1.88 LTC</h5>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 text-muted mb-0">$94.22</h5>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td style="width: 50px;">
                                                                <div class="font-size-22 text-primary">
                                                                    <i class="bx bx-down-arrow-circle"></i>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div>
                                                                    <h5 class="font-size-14 mb-1">Buy BTC</h5>
                                                                    <p class="text-muted mb-0">14 Mar, 2020</p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 mb-0">0.016 BTC</h5>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 text-muted mb-0">$125.20</h5>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                <div class="font-size-22 text-danger">
                                                                    <i class="bx bx-up-arrow-circle"></i>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div>
                                                                    <h5 class="font-size-14 mb-1">Sell BTC</h5>
                                                                    <p class="text-muted mb-0">18 Mar, 2020</p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 mb-0">0.018 BTC</h5>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 text-muted mb-0">$145.80</h5>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                <div class="font-size-22 text-danger">
                                                                    <i class="bx bx-up-arrow-circle"></i>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div>
                                                                    <h5 class="font-size-14 mb-1">Sell ETH</h5>
                                                                    <p class="text-muted mb-0">15 Mar, 2020</p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 mb-0">0.56 ETH</h5>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 text-muted mb-0">$112.34</h5>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="simplebar-placeholder" style="width: auto; height: 473px;"></div>
                                </div>
                                <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                    <div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div>
                                </div>
                                <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                                    <div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: block; height: 240px;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="materials-tab" role="tabpanel">
                            <div class="table-responsive" data-simplebar="init" style="max-height: 380px;">
                                <div class="simplebar-wrapper" style="margin: 0px;">
                                    <div class="simplebar-height-auto-observer-wrapper">
                                        <div class="simplebar-height-auto-observer"></div>
                                    </div>
                                    <div class="simplebar-mask">
                                        <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                            <div class="simplebar-content-wrapper" style="height: auto; padding-right: 0px; padding-bottom: 0px; overflow: hidden;">
                                                <div class="simplebar-content" style="padding: 0px;">
                                                    <table class="table align-middle table-nowrap">
                                                        <tbody>
                                                        <div class="row" style="margin: 10px;">
                                                            <div class="col-sm-6">
                                                                <div>
                                                                    <p class="text-muted mb-2">Загальна сума</p>
                                                                    <h5>110800 грн.</h5>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="text-sm-end">
                                                                    <p class="text-muted mb-2">Від вартості</p>
                                                                    <h5> 3 позицій<span class="badge bg-success ms-1 align-bottom"> 52 %</span></h5>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <tr>
                                                            <td style="width: 50px;">
                                                                <div class="font-size-22 text-primary">
                                                                    <i class="bx bx-down-arrow-circle"></i>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div>
                                                                    <h5 class="font-size-14 mb-1">Buy BTC</h5>
                                                                    <p class="text-muted mb-0">14 Mar, 2020</p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 mb-0">0.016 BTC</h5>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 text-muted mb-0">$125.20</h5>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                <div class="font-size-22 text-primary">
                                                                    <i class="bx bx-down-arrow-circle"></i>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div>
                                                                    <h5 class="font-size-14 mb-1">Buy LTC</h5>
                                                                    <p class="text-muted mb-0">16 Mar, 2020</p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 mb-0">1.88 LTC</h5>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 text-muted mb-0">$94.22</h5>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                <div class="font-size-22 text-primary">
                                                                    <i class="bx bx-down-arrow-circle"></i>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div>
                                                                    <h5 class="font-size-14 mb-1">Buy ETH</h5>
                                                                    <p class="text-muted mb-0">17 Mar, 2020</p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 mb-0">0.42 ETH</h5>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 text-muted mb-0">$84.32</h5>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="font-size-22 text-danger">
                                                                    <i class="bx bx-up-arrow-circle"></i>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div>
                                                                    <h5 class="font-size-14 mb-1">Sell ETH</h5>
                                                                    <p class="text-muted mb-0">15 Mar, 2020</p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 mb-0">0.56 ETH</h5>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 text-muted mb-0">$112.34</h5>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="font-size-22 text-danger">
                                                                    <i class="bx bx-up-arrow-circle"></i>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div>
                                                                    <h5 class="font-size-14 mb-1">Sell BTC</h5>
                                                                    <p class="text-muted mb-0">18 Mar, 2020</p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 mb-0">0.018 BTC</h5>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 text-muted mb-0">$145.80</h5>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="font-size-22 text-danger">
                                                                    <i class="bx bx-up-arrow-circle"></i>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div>
                                                                    <h5 class="font-size-14 mb-1">Sell ETH</h5>
                                                                    <p class="text-muted mb-0">15 Mar, 2020</p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 mb-0">0.56 ETH</h5>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 text-muted mb-0">$112.34</h5>
                                                                </div>
                                                            </td>
                                                        </tr>



                                                        <tr>
                                                            <td>
                                                                <div class="font-size-22 text-primary">
                                                                    <i class="bx bx-down-arrow-circle"></i>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div>
                                                                    <h5 class="font-size-14 mb-1">Buy BTC</h5>
                                                                    <p class="text-muted mb-0">14 Mar, 2020</p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 mb-0">0.016 BTC</h5>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 text-muted mb-0">$125.20</h5>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div>
                                </div>
                                <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                    <div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div>
                                </div>
                                <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                                    <div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none; height: 240px;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="transactions-sell-tab" role="tabpanel">
                            <div class="table-responsive" data-simplebar="init" style="max-height: 380px;">
                                <div class="simplebar-wrapper" style="margin: 0px;">
                                    <div class="simplebar-height-auto-observer-wrapper">
                                        <div class="simplebar-height-auto-observer"></div>
                                    </div>
                                    <div class="simplebar-mask">
                                        <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                            <div class="simplebar-content-wrapper" style="height: auto; padding-right: 0px; padding-bottom: 0px; overflow: hidden;">
                                                <div class="simplebar-content" style="padding: 0px;">
                                                    <table class="table align-middle table-nowrap">
                                                        <tbody>
                                                        <div class="row" style="margin: 10px;">
                                                            <div class="col-sm-6">
                                                                <div>
                                                                    <p class="text-muted mb-2">Загальна сума</p>
                                                                    <h5>0 грн.</h5>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="text-sm-end">
                                                                    <p class="text-muted mb-2">Від вартості</p>
                                                                    <h5> 0 позицій<span class="badge bg-success ms-1 align-bottom"> 0 %</span></h5>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div>
                                </div>
                                <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                    <div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div>
                                </div>
                                <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                                    <div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none; height: 240px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end col -->
    </div>
    <div class="row">
        <div class="col-xl-7">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <h4 class="card-title mb-3">Фінансові показники</h4>
                        </div>
                        <div class="col-6">
                            @if(\Illuminate\Support\Facades\Auth::user()->isOwner())
                            <div class="text-sm-end">
                                <button type="button" class="btn btn-primary" data-bs-toggle="button" >Затвердити для KPI</button>
                            </div>
                            @else
                                <div class="text-sm-end">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="button" autocomplete="off" disabled="">Закріпити звіт</button>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mt-4">
                                <p>Прибуток</p>
                                <h4>48 210 грн.</h4>

                                <p class="text-muted mb-4"> + 0.0012.23 ( 0.2 % ) <i class="mdi mdi-arrow-up ms-1 text-success"></i></p>

                                <div class="row">
                                    <div class="col-6">
                                        <div>
                                            <p class="mb-2">Загальна вартість</p>
                                            <h5>{{ $portfolio->price + $portfolio->price_two}}</h5>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div>
                                            <p class="mb-2">Загільні витрати</p>
                                            <h5>128 560 грн.</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="col-lg-6">
                            <div>
                                <p class="mb-2"><i class="mdi mdi-circle align-middle font-size-10 me-2 text-primary"></i> Ethereum</p>
                                <h5>4.5701 ETH = <span class="text-muted font-size-14">$ 1123.64</span></h5>
                            </div>

                            <div class="mt-4 pt-2">
                                <p class="mb-2"><i class="mdi mdi-circle align-middle font-size-10 me-2 text-warning"></i> Bitcoin</p>
                                <h5>0.4412 BTC = <span class="text-muted font-size-14">$ 4025.32</span></h5>
                            </div>

                            <div class="mt-4 pt-2">
                                <p class="mb-2"><i class="mdi mdi-circle align-middle font-size-10 me-2 text-info"></i> Litecoin</p>
                                <h5>35.3811 LTC = <span class="text-muted font-size-14">$ 2263.09</span></h5>
                            </div>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Маржа проекту</h4>
                            <p class="card-title-desc">Include multiple progress bars in a progress component if you need.</p>

                            <div class="">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Проектна команда</h4>

                    <div class="table-responsive">
                        <table class="table align-middle table-nowrap">
                            <tbody>
                            <tr>
                                <td>
                                    @if(!empty($portfolio->client->avatar))
                                        <img src="{{asset($portfolio->client->avatar)}}" alt="" class="avatar-xs"  style="border-radius: 50%">
                                    @else
                                        <div class="avatar-xs">
                                                <span class="avatar-title rounded-circle" style="text-transform: uppercase; text-decoration:white;">
                                                    {{ Illuminate\Support\Str::substr($portfolio->client->name, 0, 1) }}
                                                </span>
                                        </div>
                                    @endif
                                </td>
                                <td><h5 class="font-size-14 m-0"><a href="" class="text-dark">{{$portfolio->client->name}}</a></h5></td>
                                <td>
                                    <div>
                                        <a href="#" class="badge bg-primary bg-soft text-primary font-size-11">Куратор від замовника</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    @if(!empty($portfolio->manager->avatar))
                                        <img src="{{asset($portfolio->manager->avatar)}}" alt="" class="avatar-sm"  style="border-radius: 50%">
                                    @else
                                        <div class="avatar-xs">
                                                <span class="avatar-title rounded-circle" style="text-transform: uppercase; text-decoration:white;">
                                                    {{ Illuminate\Support\Str::substr($portfolio->manager->name, 0, 1) }}
                                                </span>
                                        </div>
                                    @endif
                                </td>
                                <td><h5 class="font-size-14 m-0"><a href="" class="text-dark">{{$portfolio->manager->name}}</a></h5></td>
                                <td>
                                    <div>
                                        <a href="#" class="badge bg-primary bg-soft text-primary font-size-11">Куратор від ІВ БУД</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    @if(isset($portfolio->technologist))
                                    @if(!empty($portfolio->technologist->avatar))
                                        <img src="{{asset($portfolio->technologist->avatar)}}" alt="" class="avatar-sm"  style="border-radius: 50%">
                                    @else
                                        <div class="avatar-xs">
                                                <span class="avatar-title rounded-circle" style="text-transform: uppercase; text-decoration:white;">
                                                    {{ Illuminate\Support\Str::substr($portfolio->technologist->name, 0, 1) }}
                                                </span>
                                        </div>
                                    @endif
                                    @endif
                                </td>
                                <td><h5 class="font-size-14 m-0">
                                        @if(isset($portfolio->technologist))
                                        <a href="" class="text-dark">{{$portfolio->technologist->name}}</a>
                                        @endif
                                    </h5></td>
                                <td>
                                    <div>
                                        <a href="#" class="badge bg-primary bg-soft text-primary font-size-11">Технолог ІВ БУД</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="avatar-group">
                                        <div class="avatar-group-item" style="">
                                            <a href="http://127.0.0.1:8000/admin/client/show/25" class="d-inline-block">
                                                <img src="http://127.0.0.1:8000/client/Андрій Нечаєв.jpg" alt="" class="avatar-xs"  style="border-radius: 50%">
                                            </a>
                                        </div>
                                        <div class="avatar-group-item" style="float: left; position: absolute; margin-left: 10px;">
                                            <a href="http://127.0.0.1:8000/admin/client/show/30" class="d-inline-block">
                                                <img src="http://127.0.0.1:8000/client/Христя.jpg" alt="" class="avatar-xs"  style="border-radius: 50%">
                                            </a>
                                        </div>
                                        <div class="avatar-group-item" style="float: left; position: absolute; margin-left: 30px;">
                                            <a href="http://127.0.0.1:8000/admin/client/show/30" class="d-inline-block">
                                                <img src="http://127.0.0.1:8000/client/Христя.jpg" alt="" class="avatar-xs"  style="border-radius: 50%">
                                            </a>
                                        </div>
                                        <div class="avatar-group-item" style="float: left; position: absolute; margin-left: 50px;">
                                            <a href="http://127.0.0.1:8000/admin/client/show/30" class="d-inline-block">
                                                <img src="http://127.0.0.1:8000/client/Христя.jpg" alt="" class="avatar-xs"  style="border-radius: 50%">
                                            </a>
                                        </div>
                                        <div class="avatar-group-item" style="float: left; position: absolute; margin-left: 70px;">
                                            <a href="http://127.0.0.1:8000/admin/client/show/30" class="d-inline-block">
                                                <img src="http://127.0.0.1:8000/client/Христя.jpg" alt="" class="avatar-xs"  style="border-radius: 50%">
                                            </a>
                                        </div>
                                        <div class="avatar-group-item" style="float: left; position: absolute; margin-left: 90px;">
                                            <a href="http://127.0.0.1:8000/admin/client/show/30" class="d-inline-block">
                                                <img src="http://127.0.0.1:8000/client/Христя.jpg" alt="" class="avatar-xs"  style="border-radius: 50%">
                                            </a>
                                        </div>
                                    </div>
                                </td>
                                <td><h5 class="font-size-14 m-0"><a href="" class="text-dark"></a></h5></td>
                                <td>
                                    <div>
                                        <a href="#" class="badge bg-primary bg-soft text-primary font-size-11">Майстри ІВ БУД</a>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-4 col-sm-6">
            <div class="card">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="text-center p-4 border-end">
                            <div class="avatar-sm mx-auto mb-3 mt-1">
                                                    <span class="avatar-title rounded-circle bg-primary bg-soft text-primary font-size-16">
                                                        М
                                                    </span>
                            </div>
                            <h6 class="text-truncate pb-1">Мазур Василь</h6>
                        </div>
                    </div>

                    <div class="col-xl-7">
                        <div class="p-4 text-center text-xl-start">
                            <div class="row">
                                <div class="col-6">
                                    <div class="button-items" id="tooltip-container">
                                        <p class="text-muted mb-2 text-truncate" data-bs-container="#tooltip-container"   data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="Кількість відпрацьованого часу, год." >Кількість відпрацьованого часу, год.</p>
                                        <span class="badge badge-soft-warning font-size-12"> 48.35 год.</span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div>
                                        <p class="text-muted mb-2 text-truncate" data-bs-container="#tooltip-container"   data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="Кількість відпрацьованого часу, грн." >Кількість відпрацьованого часу, грн.</p>
                                        <span class="badge badge-soft-success font-size-12"> 5480 грн. </span>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4">
                                <button type="button" class="btn btn-secondary btn-sm waves-effect waves-light">Корегувати</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-sm-6">
            <div class="card">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="text-center p-4 border-end">
                            <div class="avatar-sm mx-auto mb-3 mt-1">
                                                    <span class="avatar-title rounded-circle bg-primary bg-soft text-primary font-size-16">
                                                        М
                                                    </span>
                            </div>
                            <h6 class="text-truncate pb-1">Яценко Юрій</h6>
                        </div>
                    </div>

                    <div class="col-xl-7">
                        <div class="p-4 text-center text-xl-start">
                            <div class="row">
                                <div class="col-6">
                                    <div class="button-items" id="tooltip-container">
                                        <p class="text-muted mb-2 text-truncate" data-bs-container="#tooltip-container"   data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="Кількість відпрацьованого часу, год." >Кількість відпрацьованого часу, год.</p>
                                        <span class="badge badge-soft-warning font-size-12"> 48.35 год.</span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div>
                                        <p class="text-muted mb-2 text-truncate" data-bs-container="#tooltip-container"   data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="Кількість відпрацьованого часу, грн." >Кількість відпрацьованого часу, грн.</p>
                                        <span class="badge badge-soft-success font-size-12"> 5480 грн. </span>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4">
                                <button type="button" class="btn btn-secondary btn-sm waves-effect waves-light">Корегувати</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-sm-6">
            <div class="card">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="text-center p-4 border-end">
                            <div class="avatar-sm mx-auto mb-3 mt-1">
                                                    <span class="avatar-title rounded-circle bg-primary bg-soft text-primary font-size-16">
                                                        М
                                                    </span>
                            </div>
                            <h6 class="text-truncate pb-1">Фітісов Женя</h6>
                        </div>
                    </div>

                    <div class="col-xl-7">
                        <div class="p-4 text-center text-xl-start">
                            <div class="row">
                                <div class="col-6">
                                    <div class="button-items" id="tooltip-container">
                                        <p class="text-muted mb-2 text-truncate" data-bs-container="#tooltip-container"   data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="Кількість відпрацьованого часу, год." >Кількість відпрацьованого часу, год.</p>
                                        <span class="badge badge-soft-warning font-size-12"> 48.35 год.</span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div>
                                        <p class="text-muted mb-2 text-truncate" data-bs-container="#tooltip-container"   data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="Кількість відпрацьованого часу, грн." >Кількість відпрацьованого часу, грн.</p>
                                        <span class="badge badge-soft-success font-size-12"> 5480 грн. </span>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4">
                                <button type="button" class="btn btn-secondary btn-sm waves-effect waves-light">Корегувати</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-sm-6">
            <div class="card">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="text-center p-4 border-end">
                            <div class="avatar-sm mx-auto mb-3 mt-1">
                                                    <span class="avatar-title rounded-circle bg-primary bg-soft text-primary font-size-16">
                                                        М
                                                    </span>
                            </div>
                            <h6 class="text-truncate pb-1">Мазур Василь</h6>
                        </div>
                    </div>

                    <div class="col-xl-7">
                        <div class="p-4 text-center text-xl-start">
                            <div class="row">
                                <div class="col-6">
                                    <div class="button-items" id="tooltip-container">
                                        <p class="text-muted mb-2 text-truncate" data-bs-container="#tooltip-container"   data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="Кількість відпрацьованого часу, год." >Кількість відпрацьованого часу, год.</p>
                                        <span class="badge badge-soft-warning font-size-12"> 48.35 год.</span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div>
                                        <p class="text-muted mb-2 text-truncate" data-bs-container="#tooltip-container"   data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="Кількість відпрацьованого часу, грн." >Кількість відпрацьованого часу, грн.</p>
                                        <span class="badge badge-soft-success font-size-12"> 5480 грн. </span>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4">
                                <button type="button" class="btn btn-secondary btn-sm waves-effect waves-light">Корегувати</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-sm-6">
            <div class="card">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="text-center p-4 border-end">
                            <div class="avatar-sm mx-auto mb-3 mt-1">
                                                    <span class="avatar-title rounded-circle bg-primary bg-soft text-primary font-size-16">
                                                        М
                                                    </span>
                            </div>
                            <h6 class="text-truncate pb-1">Мазур Василь</h6>
                        </div>
                    </div>

                    <div class="col-xl-7">
                        <div class="p-4 text-center text-xl-start">
                            <div class="row">
                                <div class="col-6">
                                    <div class="button-items" id="tooltip-container">
                                        <p class="text-muted mb-2 text-truncate" data-bs-container="#tooltip-container"   data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="Кількість відпрацьованого часу, год." >Кількість відпрацьованого часу, год.</p>
                                        <span class="badge badge-soft-warning font-size-12"> 48.35 год.</span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div>
                                        <p class="text-muted mb-2 text-truncate" data-bs-container="#tooltip-container"   data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="Кількість відпрацьованого часу, грн." >Кількість відпрацьованого часу, грн.</p>
                                        <span class="badge badge-soft-success font-size-12"> 5480 грн. </span>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4">
                                <button type="button" class="btn btn-secondary btn-sm waves-effect waves-light">Корегувати</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-sm-6">
            <div class="card">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="text-center p-4 border-end">
                            <div class="avatar-sm mx-auto mb-3 mt-1">
                                                    <span class="avatar-title rounded-circle bg-primary bg-soft text-primary font-size-16">
                                                        М
                                                    </span>
                            </div>
                            <h6 class="text-truncate pb-1">Мазур Василь</h6>
                        </div>
                    </div>

                    <div class="col-xl-7">
                        <div class="p-4 text-center text-xl-start">
                            <div class="row">
                                <div class="col-6">
                                    <div class="button-items" id="tooltip-container">
                                        <p class="text-muted mb-2 text-truncate" data-bs-container="#tooltip-container"   data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="Кількість відпрацьованого часу, год." >Кількість відпрацьованого часу, год.</p>
                                        <span class="badge badge-soft-warning font-size-12"> 48.35 год.</span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div>
                                        <p class="text-muted mb-2 text-truncate" data-bs-container="#tooltip-container"   data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="Кількість відпрацьованого часу, грн." >Кількість відпрацьованого часу, грн.</p>
                                        <span class="badge badge-soft-success font-size-12"> 5480 грн. </span>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4">
                                <button type="button" class="btn btn-secondary btn-sm waves-effect waves-light">Корегувати</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection

@section('script')

@endsection
