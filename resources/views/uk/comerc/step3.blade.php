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
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-12">
                            <form method="POST" action="{{ route('comerc.finish', [$id, $floor]) }}">
                                @csrf

                                <div class="card">
                                <div class="card-body">

                                    <h4 class="card-title">Заповніть поля форми.</h4>
                                    <p class="card-title-desc"><code>Кожна заповнена позиція впливає на кінцеву ціну проекту.</code>
                                    <div class="card ">
                                        <div class="mb-3 row">
                                            <label class="col-md-3 col-form-label">Вкажіть область розташування</label>
                                            <div class="col-md-3">
                                                <select class="form-select" id="region_id" name="region_id" required>
                                                    <option value="{{null}}">Обрати</option>
                                                    @foreach($regions as $name)
                                                        <option value="{{$name->id}}">{{$name->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-4 text-left">
                                                <p class="text-left" style="text-align: left; margin: 4px;">
                                                    В залежності від обраного регіону визначається об'єм транспортних та логістичних витрат.
                                                </p>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="avatar-sm rounded-circle bg-gray align-self-center mini-stat-icon" style="float: right; margin-right: 10px;">
                                                    <span class="avatar-title rounded-circle bg-warning"  style="text-align: left; margin: 4px;">
                                                        <i class="bx bx-map font-size-24"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="mb-3 row">
                                            <label class="col-md-3 col-form-label">Вкажіть місто та вулицю</label>
                                            <div class="col-md-3">
                                                <input class="form-control" type="search"  id="address"  name="address" placeholder="Львів, вулиця Валова 9" value=""
                                                       id="example-search-input" required>
                                            </div>
                                            <div class="col-md-4 text-left">
                                                <p class="text-left" style="text-align: left; margin: 4px;">
                                                    Мітка на карті дозволить нам якісніше спланувати об'єкт.
                                                </p>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="avatar-sm rounded-circle bg-gray align-self-center mini-stat-icon" style="float: right; margin-right: 10px;">
                                                    <span class="avatar-title rounded-circle bg-warning"  style="text-align: left; margin: 4px;">
                                                        <i class="bx bx-map-alt font-size-24"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="mb-3 row">
                                            <label class="col-md-3 col-form-label">Поверх розташування</label>
                                            <div class="col-md-3">
                                                <input id="demo_vertical" type="number" id="top_object" name="top_object" class="form-control" placeholder="2">
                                            </div>
                                            <div class="col-md-4 text-left">
                                                <p class="text-left" style="text-align: left; margin: 4px;">
                                                    Впливає на ступінь складності виконання
                                                </p>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="avatar-sm rounded-circle bg-gray align-self-center mini-stat-icon" style="float: right; margin-right: 10px;">
                                                    <span class="avatar-title rounded-circle bg-warning"  style="text-align: left; margin: 4px;">
                                                        <i class="bx bx-building font-size-24"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="mb-3 row">
                                            <label class="col-md-3 col-form-label">Площа об'єкту</label>
                                            <div class="col-md-3">
                                                <input id="square" type="number" name="square" class="form-control" placeholder="50" required>
                                            </div>
                                            <div class="col-md-4 text-left">
                                                <p class="text-left" style="text-align: left; margin: 4px;">
                                                    Всі ціни на сайті вказані з врахуванням площі 50 м2.
                                                </p>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="avatar-sm rounded-circle bg-gray align-self-center mini-stat-icon" style="float: right; margin-right: 10px;">
                                                    <span class="avatar-title rounded-circle bg-warning"  style="text-align: left; margin: 4px;">
                                                        <i class="bx bx-square font-size-24"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="mb-3 row">
                                            <label class="col-md-2 col-form-label">Додаткові вимого до роботи</label>
                                            <div class="col-md-5">
                                                <div class="form-check form-switch mb-3">
                                                    <input id='more_info' class="form-check-input" type="checkbox" id="baseboard" name="baseboard" checked>
                                                    <label class="form-check-label" for="flexSwitchCheckDefault">Чи передбачаються плінтуса на об'єкті?</label>
                                                </div>
                                                <div class="form-check form-switch mb-3">
                                                    <input id="more_info2" class="form-check-input" type="checkbox"  id="damfer" name="damfer" checked>
                                                    <label class="form-check-label" for="flexSwitchCheckChecked">Між стяжкою і стіною закладена демферна стрічка?</label>
                                                </div>
                                            </div>
                                            <div class="col-md-3 text-left">
                                                <p class="text-left" style="text-align: left; margin: 4px;">
                                                    Ці два моменти впливають на кінцевий результат і зовнішній вигляд місць примикання стіни та підлоги.
                                                </p>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="avatar-sm rounded-circle bg-gray align-self-center mini-stat-icon" style="float: right; margin-right: 10px;">
                                                    <span class="avatar-title rounded-circle bg-warning"  style="text-align: left; margin: 4px;">
                                                        <i class="bx bx-folder-open font-size-24"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card" id="conditional_part" style="display:none;">
                                        <div class="mb-3 row">
                                            <label class="col-md-2 col-form-label">Кількість метрів погонних</label>
                                            <div class="col-md-2">
                                                <input id="square2" type="number" name="square2" class="form-control" placeholder="50">
                                            </div>
                                            <div class="col-md-6 text-left">
                                                <p class="text-left" style="text-align: left; margin: 4px;">
                                                    Всі зони примикання підлоги та стіни, у випадку наявної демферної стрічки, потребують додаткових витрат матеріалу і людиногодин, по проведенню демонтажних робіт демферної стрічки і заробленням отворів ремсумішами.
                                                </p>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="avatar-sm rounded-circle bg-gray align-self-center mini-stat-icon" style="float: right; margin-right: 10px;">
                                                    <span class="avatar-title rounded-circle bg-warning"  style="text-align: left; margin: 4px;">
                                                        <i class="bx bx-square font-size-24"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <script>
                                        const checkbox = document.getElementById('more_info');
                                        const checkbox2 = document.getElementById('more_info2');
                                        checkbox.addEventListener('change', () => {
                                            if(checkbox.checked == false && checkbox2.checked == true){
                                                $("#conditional_part").show();
                                            }
                                            else{
                                                $("#conditional_part").hide();
                                            }
                                        })
                                        checkbox2.addEventListener('change', () => {
                                            if(checkbox.checked == false && checkbox2.checked == true){
                                                $("#conditional_part").show();
                                            }
                                            else{
                                                $("#conditional_part").hide();
                                            }
                                        })

                                        // $(document).ready(function(){
                                        //     $('.new_phone select').change(function(){
                                        //         var pnone = $('select#new_phone option:selected').attr('data-phone');
                                        //         if (pnone == 1) {
                                        //             $('#pnones').hide('slow');
                                        //             document.getElementById('phone').name = ''
                                        //         }
                                        //         if (pnone == 2) {
                                        //             $('#pnones').show();
                                        //             document.getElementById('phone').name = 'phone'
                                        //
                                        //             $('input#phone').name('phone');
                                        //         }
                                        //     })
                                        // })
                                    </script>

                                    <div class="card">
                                        <div class="mb-3 row">
                                            <label class="col-md-2 col-form-label">Умови виконання робіт</label>
                                            <div class="col-md-5">
                                                <div class="form-check form-switch mb-3">
                                                    <input class="form-check-input" type="checkbox" id="light" name="light">
                                                    <label class="form-check-label" for="flexSwitchCheckDefault">Чи є освітлення на об'єкті?</label>
                                                </div>
                                                <div class="form-check form-switch mb-3">
                                                    <input class="form-check-input" type="checkbox" id="rosette"  name="rosette" checked>
                                                    <label class="form-check-label" for="flexSwitchCheckChecked">Чи є місця живлення для електрообладнання?</label>
                                                </div>
                                                <div class="form-check form-switch mb-3">
                                                    <input class="form-check-input" type="checkbox" id="toilet" name="toilet" checked>
                                                    <label class="form-check-label" for="flexSwitchCheckChecked">Наявність на об'єкті тимчасового санвузла?</label>
                                                </div>
                                            </div>
                                            <div class="col-md-3 text-left">
                                                <p class="text-left" style="text-align: left; margin: 4px;">
                                                    Для розуміння стадії готовності об'єкту до виконання робіт.
                                                </p>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="avatar-sm rounded-circle bg-gray align-self-center mini-stat-icon" style="float: right; margin-right: 10px;">
                                                    <span class="avatar-title rounded-circle bg-warning"  style="text-align: left; margin: 4px;">
                                                        <i class="bx bx-folder-open font-size-24"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="mb-3 row">
                                            <label class="col-md-3 col-form-label">Вкажіть яка стяжка у вас на об'єкті</label>
                                            <div class="col-md-3">
                                                <select class="form-select" name="floor_type" id="floor_type" required>
                                                    <option value="{{null}}">Обрати</option>
                                                    <option value="1">Напівсуха стяжка</option>
                                                    <option value="2">Бетона стяжка</option>
                                                    <option value="3">Самонівелір</option>
                                                    <option value="4">На етапі залиття</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 text-left">
                                                <p class="text-left" style="text-align: left; margin: 4px;">
                                                    Для правильного підбору, укріплючих основу, полімерних грунтовок.
                                                </p>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="avatar-sm rounded-circle bg-gray align-self-center mini-stat-icon" style="float: right; margin-right: 10px;">
                                                    <span class="avatar-title rounded-circle bg-warning"  style="text-align: left; margin: 4px;">
                                                        <i class="bx bx-pen font-size-24"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="mb-3 row">
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <span class="badge badge-pill badge-soft-danger font-size-11">Погана</span>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div>
                                                            <label for="customRange1" class="form-label badge bg-primary font-size-11 m-1">Оцініть стан стяжки</label>
                                                            <input type="range" class="form-range" id="floor_quality" name="floor_quality">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <span class="badge badge-pill badge-soft-success font-size-11">Хороша</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 text-left">
                                                <p class="text-left" style="text-align: left; margin: 4px;">
                                                    Якщо є вибоїни, трищини, нерівності - стан поганий, акщо основа ідеально рівна і без тріщин - стан хороший. Для прорахунку витрат на ремонтні суміші.
                                                </p>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="avatar-sm rounded-circle bg-gray align-self-center mini-stat-icon" style="float: right; margin-right: 10px;">
                                                    <span class="avatar-title rounded-circle bg-warning"  style="text-align: left; margin: 4px;">
                                                        <i class="bx bx-radar font-size-24"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title"> Формат формування комерційної пропозиції.</h4>
                                                <p class="card-title-desc">Отримати комерційну пропозицію з підписом і печаткою, для юредичних осіб, <code> необхідно вказати повну назву вашої компанії, </code>
                                                    а також <code>ЄДРПОУ і email </code>, для відправки пропозиції вам на пошту, у випадку, якщо ви фізична особа, достатньо вказати <code> email і номер телефону </code>. </p>
                                                <div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div>
                                                                <label class="form-label">Повна назва фірми</label>
                                                                <input class="form-control" name="name_company" id="name_company"  type="text" placeholder="ТОВ ІБ БУД">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div>
                                                                <label class="form-label">ЄДРПОУ</label>
                                                                <input class="form-control" name="usreou" id="usreou" type="number" placeholder="43143861">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div>
                                                                <label class="form-label">Емейл</label>
                                                                <input class="form-control" id="email" name="email" type="email" placeholder="ivbudzahid@gmail.com" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div>
                                                                <label class="form-label">Телефон</label>
                                                                <input class="form-control"  id="phone" name="phone" type="number" placeholder="0964563614" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btn-group mb-3 d-flex float-lg-end" role="group" style="width: 30%;">
                                        <button type="submit" class="btn btn-warning" data-method="destroy">Попередній перегляд </button>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div> <!-- end col -->
                    </div>


                </div> <!-- container-fluid -->
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



