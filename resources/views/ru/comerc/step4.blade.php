@extends('layouts.comerc')
@section('script_header')
    <link href="{{asset('Skote/dist/assets/libs/magnific-popup/magnific-popup.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{asset('Skote/dist/assets/libs/owl.carousel/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('Skote/dist/assets/libs/owl.carousel/assets/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('Skote/dist/assets/libs/owl.carousel/assets/owl.theme.default.min.css')}}">
@endsection
@section('content')
    <div class="container">
        <div class="container-fluid">
            <div class="row"  style="margin-top: 5%;">
                <div class="col-lg-12">
                    <div class="card"  style="padding: 15px; opacity: 0.8;">
                        <div class="card-body">
                            <div class="invoice-title">
                                <h4 class="float-end font-size-16">№ #{{$comercel->id}}/{{\Carbon\Carbon::now()->format('Y')}}</h4>
                                <div class="mb-4">
                                    <img src="{{asset('images/logo.png')}}" alt="logo" height="30"/>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-6 col-6">
                                    <address>
                                        <strong>От кого:</strong><br>
                                            <i class="bx bx-code font-size-14" style="color: #eea236; margin-right: 5px;"></i>ТОВ "ИВ БУД"<br>
                                            <i class="bx bx-code font-size-14" style="color: #eea236; margin-right: 5px;"></i>Код ЄДРПОУ 43143861<br>
                                            <i class="bx bx-code font-size-14" style="color: #eea236; margin-right: 5px;"></i>ИПН: 431438609037<br>
                                            <i class="bx bx-code font-size-14" style="color: #eea236; margin-right: 5px;"></i>IBAN: UA363366770000026003052553837
                                    </address>
                                    <address class="mt-2 mt-sm-0">
                                        <strong>контактные данные:</strong><br>
                                            <i class="bx bx-sidebar font-size-14" style="color: #eea236; margin-right: 5px;"></i>https://www.ivbudfloor.com<br>
                                            <i class="bx bx-male font-size-14" style="color: #eea236; margin-right: 5px;"></i>ivbudzahid@gmail.com<br>
                                            <i class="bx bx-phone font-size-14" style="color: #eea236; margin-right: 5px;"></i>+38 (096) 456 36 14<br>
                                            <i class="bx bx-map font-size-14" style="color: #eea236; margin-right: 5px;"></i>г. Львов, Наливайка 12<br>
                                    </address>
                                </div>
                                <div class="col-sm-6 col-6 text-end">
                                    <address>
                                        <strong>Кому:</strong><br>
                                        @if($comercel->name_company)
                                        {{$comercel->name_company}} <i class="bx bx-code font-size-14" style="color: #eea236; margin-right: 5px;"></i>
                                        @endif<br>
                                        @if($comercel->usreou)
                                        Код ЄДРПОУ {{$comercel->usreou}} <i class="bx bx-code font-size-14" style="color: #eea236; margin-right: 5px;"></i>
                                        @endif<br>
                                        <br>
                                        <br>
                                    </address>
                                    <address class="mt-2 mt-sm-0">
                                        <strong>контактные данные:</strong><br>
                                        @if($comercel->email)
                                        {{$comercel->email}} <i class="bx bx-male font-size-14" style="color: #eea236; margin-right: 5px;"></i>
                                        @endif<br>
                                        @if($comercel->phone)
                                        {{$comercel->phone}} <i class="bx bx-phone font-size-14" style="color: #eea236; margin-right: 5px;"></i>
                                        @endif<br>
                                        @if($comercel->address)
                                            {{$comercel->region->town}}, {{$comercel->address}}<i class="bx bx-map font-size-14" style="color: #eea236; margin-right: 5px;"></i>
                                        @endif<br>
                                    </address>
                                </div>
                            </div>
                            <div class="py-2 mt-3">
                                <h5 class="font-size-13 font-weight-bold" style="font-weight: bold;">Предоставляет коммерческое предложение на "{{$comercel->floor->name_ru}}".</h5>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-nowrap">
                                    <thead>
                                    <tr>
                                        <th style="width: 70px;">#</th>
                                        <th>тип покрытия</th>
                                        <th class="text-end">цена, грн / м2.</th>
                                        <th class="text-end">площадь</th>
                                        <th class="text-end">всего</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>{{$comercel->floor->name_ru}}</td>
                                        <td class="text-end">{{$comercel->floor->price}}</td>
                                        <td class="text-end">{{$comercel->square}}</td>
                                        <td class="text-end">{{$comercel->price}}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-nowrap">
                                    <thead>
                                    <tr>
                                        <th style="width: 70px;"></th>
                                        <th>дополнительные работы</th>
                                        <th class="text-end"></th>
                                        <th class="text-end"></th>
                                        <th class="text-end"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if($comercel->floor_quality < 50)
                                        <tr>
                                            <td>{{$i += 1}}</td>
                                            <td>Ремонт и выравнивания стяжки</td>
                                            <td class="text-end"></td>
                                            <td class="text-end"></td>
                                            <td class="text-end">0</td>
                                        </tr>
                                    @endif
                                    @if($comercel->damfer !== null)
                                        <tr>
                                            <td>{{$i += 1}}</td>
                                            <td>Демонтаж демфернои ленты</td>
                                            <td class="text-end"></td>
                                            <td class="text-end"></td>
                                            <td class="text-end">{{$comercel->price2}}</td>
                                        </tr>
                                    @endif

                                    <tr>
                                        <td>{{$i += 1}}</td>
                                        <td>Доставка метериалов на объект</td>
                                        <td class="text-end"></td>
                                        <td class="text-end"></td>
                                        <td class="text-end">0</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" class="border-0 text-end">
                                            <strong>В том числе НДС</strong></td>
                                        <td class="border-0 text-end">{{($comercel->price +$comercel->price2) * 0.166667}} грн.</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" class="border-0 text-end">
                                            <strong>Всего с НДС</strong></td>
                                        <td class="border-0 text-end"><h4 class="m-0">{{$comercel->price + $comercel->price2}} грн.</h4></td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <img src="{{asset('images/seal.png')}}" alt="" width="150" height="auto">
                                </div>
                                <div class="d-print-none">
                                    <div class="float-end">
                                        <a href="javascript:window.print()" class="btn btn-success waves-effect waves-light me-1"><i class="fa fa-print"></i> Cохранить в PDF</a>
                                        <a href="{{route('home')}}" class="btn btn-primary waves-effect waves-light me-1"><i class="fa fa-home"></i> На главную</a>
                                    </div>
                                </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

        </div> <!-- container-fluid -->
    </div>
    <div class="page-content">

    </div>

@section('script')

    <script src="{{asset('Skote/dist/assets/libs/owl.carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('Skote/dist/assets/js/pages/timeline.init.js')}}"></script>
    <script src="{{asset('Skote/dist/assets/libs/magnific-popup/jquery.magnific-popup.min.js')}}"></script>

    <!-- lightbox init js-->
    <script src="{{asset('Skote/dist/assets/js/pages/lightbox.init.js')}}"></script>
@endsection
@endsection
