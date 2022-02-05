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

                <h3 class="mt-5">КОММЕРЧЕСКОЕ ПРЕДЛОЖЕНИЕ</h3>
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-12">
                            <form method="POST" action="{{ route('comerc.finish', [$id, $floor]) }}">
                                @csrf

                                <div class="card">
                                <div class="card-body">

                                    <h4 class="card-title">Заполните поля формы.</h4>
                                    <p class="card-title-desc"><code>Каждая заполнена позиция влияет на конечную цену проекта.</code>
                                    <div class="card">
                                        <div class="mb-3 row">
                                            <label class="col-md-3 col-form-label">Укажите область расположения</label>
                                            <div class="col-md-3">
                                                <select class="form-select" id="region_id" name="region_id" required>
                                                    <option value="{{null}}">Выбрать</option>
                                                    @foreach($regions as $name)
                                                        <option value="{{$name->id}}">{{$name->name_ru}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-4 text-left">
                                                <p class="text-left" style="text-align: left; margin: 4px;">
                                                    В зависимости от выбранного региона определяется объем транспортных и логистических расходов.
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
                                            <label class="col-md-3 col-form-label">
                                                Укажите город и улицу</label>
                                            <div class="col-md-3">
                                                <input class="form-control" type="search"  id="address"  name="address" placeholder="Львов, улица Валовая 9" value=""
                                                       id="example-search-input" required>
                                            </div>
                                            <div class="col-md-4 text-left">
                                                <p class="text-left" style="text-align: left; margin: 4px;">
                                                    Метка на карте позволит нам более качественно спланировать объект.
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
                                            <label class="col-md-3 col-form-label">Этаж расположения</label>
                                            <div class="col-md-3">
                                                <input id="demo_vertical" type="number" id="top_object" name="top_object" class="form-control" placeholder="2">
                                            </div>
                                            <div class="col-md-4 text-left">
                                                <p class="text-left" style="text-align: left; margin: 4px;">
                                                    Влияет на степень сложности выполнения
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
                                            <label class="col-md-3 col-form-label">Площадь объекта</label>
                                            <div class="col-md-3">
                                                <input id="square" type="number" name="square" class="form-control" placeholder="50" required>
                                            </div>
                                            <div class="col-md-4 text-left">
                                                <p class="text-left" style="text-align: left; margin: 4px;">
                                                    Все цены на сайте указаны с учетом площади 50 м2.
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
                                            <label class="col-md-2 col-form-label">Дополнительные требования к работе</label>
                                            <div class="col-md-5">
                                                <div class="form-check form-switch mb-3">
                                                    <input id='more_info' class="form-check-input" type="checkbox" id="baseboard" name="baseboard" checked>
                                                    <label class="form-check-label" for="flexSwitchCheckDefault">Предусматриваются плинтуса на объекте?</label>
                                                </div>
                                                <div class="form-check form-switch mb-3">
                                                    <input id="more_info2" class="form-check-input" type="checkbox"  id="damfer" name="damfer" checked>
                                                    <label class="form-check-label" for="flexSwitchCheckChecked">Между стяжкой и стеной заложена демферна лента?</label>
                                                </div>
                                            </div>
                                            <div class="col-md-3 text-left">
                                                <p class="text-left" style="text-align: left; margin: 4px;">
                                                    Эти два момента влияют на конечный результат и внешний вид мест примыкания стены и пола.
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
                                            <label class="col-md-2 col-form-label">Количество метров погонных</label>
                                            <div class="col-md-2">
                                                <input id="square2" type="number" name="square2" class="form-control" placeholder="50">
                                            </div>
                                            <div class="col-md-6 text-left">
                                                <p class="text-left" style="text-align: left; margin: 4px;">
                                                    Все зоны примыкания пола и стены, в случае имеющейся демфернои ленты, потребует дополнительных расходов материала и человекочасов, по проведению демонтажных работ демфернои ленты и зарабатыванием отверстий рем смесями.
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
                                            <label class="col-md-2 col-form-label">Условия выполнения работ</label>
                                            <div class="col-md-5">
                                                <div class="form-check form-switch mb-3">
                                                    <input class="form-check-input" type="checkbox" id="light" name="light">
                                                    <label class="form-check-label" for="flexSwitchCheckDefault">Есть освещения на объекте?</label>
                                                </div>
                                                <div class="form-check form-switch mb-3">
                                                    <input class="form-check-input" type="checkbox" id="rosette"  name="rosette" checked>
                                                    <label class="form-check-label" for="flexSwitchCheckChecked">Есть места питания для электрооборудования?</label>
                                                </div>
                                                <div class="form-check form-switch mb-3">
                                                    <input class="form-check-input" type="checkbox" id="toilet" name="toilet" checked>
                                                    <label class="form-check-label" for="flexSwitchCheckChecked">Наличие на объекте временного санузла?</label>
                                                </div>
                                            </div>
                                            <div class="col-md-3 text-left">
                                                <p class="text-left" style="text-align: left; margin: 4px;">
                                                    Для понимания стадии готовности объекта к выполнению работ.
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
                                            <label class="col-md-3 col-form-label">Укажите которая стяжка у вас на объекте</label>
                                            <div class="col-md-3">
                                                <select class="form-select" name="floor_type" id="floor_type" required>
                                                    <option value="{{null}}">Выбрать</option>
                                                    <option value="1">полусухая стяжка</option>
                                                    <option value="2">бетона стяжка</option>
                                                    <option value="3">самонивелир</option>
                                                    <option value="4">на этапе заливки</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 text-left">
                                                <p class="text-left" style="text-align: left; margin: 4px;">
                                                    Для правильного подбора, укриплючих основу, полимерных грунтовок.
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
                                                        <span class="badge badge-pill badge-soft-danger font-size-11">плохое</span>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div>
                                                            <label for="customRange1" class="form-label badge bg-primary font-size-11 m-1">Оцените состояние стяжки</label>
                                                            <input type="range" class="form-range" id="floor_quality" name="floor_quality">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <span class="badge badge-pill badge-soft-success font-size-11">хорошее</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 text-left">
                                                <p class="text-left" style="text-align: left; margin: 4px;">
                                                    Если есть выбоины, трищины, неровности - состояние плохое, если основа идеально ровная и без трещин - состояние хорошее. Для просчета затрат на ремонтные смеси.
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
                                                <h4 class="card-title">Формат формирования коммерческого предложения.</h4>
                                                <p class="card-title-desc">Получить коммерческое предложение с подписью и печатью, для юредичних лиц,<code> необходимо указать полное название вашей компании, </code>
                                                    а также <code>ЄДРПОУ и email </code>, для отправки предложения вам на почту, в случае, если вы физическое лицо, достаточно указать <code> email і номер телефона </code>. </p>
                                                <div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div>
                                                                <label class="form-label">Полное название фирмы</label>
                                                                <input class="form-control" name="name_company" id="name_company"  type="text" placeholder="ТОВ ИБ БУД">
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
                                        <button type="submit" class="btn btn-warning" data-method="destroy">Предварительный просмотр </button>
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



