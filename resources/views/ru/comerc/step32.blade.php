@extends('layouts.comerc2')
@section('script_header')
    <link rel="stylesheet" href="{{asset('HTML-NFTMarketplace/css/nice-select2.css')}}">
@section('title', 'Безшовні покриття - ціна, комерційна.')
@endsection
@section('content')
    <style>
        .cryptoki-form input[type="text"], .cryptoki-form input[type="number"], .cryptoki-form input[type="email"], .cryptoki-form input[type="button"], .cryptoki-form input[type="password"], .cryptoki-form input[type="url"], .cryptoki-form input[type="submit"], .cryptoki-form input[type="reset"], .cryptoki-form select, .cryptoki-form .select-nice {
            padding: max(0.87vw, 12px) max(1.5vw, 18px);
            border: 1px solid var(--border-color);
            background-color: var(--body-background);
            color: var(--main-font-color);
            border-radius: var(--input-border-radius);
            margin-bottom: 20px;
            position: relative;
        }
        .nice-select {
            float: none;
        }
    </style>

    <div class="primary-content-area container content-padding">
        <div class="row justify-content-center flex-center">
            <div class="avatar box-64">
                <a href="08-profile-page.html">
                    <img src="{{asset('HTML-NFTMarketplace/img/logoavatar.png')}}" alt="avatar"><span class="verified"><svg class="crumina-icon">
                        <use xlink:href="#check-icon"></use>
                    </svg></span></a>
            </div>
        </div>
        <h3 class="mt-5  flex-center">КОМЕРЦІЙНА ПРОПОЗИЦІЯ</h3>
        <p class="gradient-text flex-center">Кожна заповнена позиція впливає на кінцеву ціну проекту.</p>
        <div class="primary-content-area container content-padding">
            <div class="main-content-area sales-statement">
                <div class="dashboard-wrapper">
                    <div class="statement-list">
                        <div class="user-db-content-area">
                            <form   class="" id="" method="POST" action="{{ route('comerc.finish', $floor) }}">
                                @csrf
                                <div class="statement">
                                    <table class="content-table">
                                        <thead>
                                        <tr>
                                            <th scope="col" class="heading-label">#</th>
                                            <th scope="col" class="heading-label">Назва поля</th>
                                            <th scope="col" class="heading-label">Оберіть запропоновані варіанти</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td data-label="#">
                                                <div class="date">1</div>
                                            </td>
                                            <td data-label="">
                                                <div class="item-title gradient-text"><a href="05-product.html">Вкажіть область розташування?</a>
                                                </div>
                                                <div class="license-details">Залежно від  регіону визначається об'єм транспортних та логістичних витрат.</div>
                                            </td>
                                            <td data-label="" class="stat-value">
                                                <div class="form-group">
                                                    <div class="form-field">
                                                        <select class="select-nice" id="region_id" name="region_id" required>
                                                            <option value="{{null}}">Обрати</option>
                                                            @foreach($regions as $name)
                                                                <option value="{{$name->id}}">{{$name->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td data-label="#">
                                                <div class="date">1</div>
                                            </td>
                                            <td data-label="">
                                                <div class="item-title gradient-text"><a href="05-product.html">Вкажіть місто та вулицю?</a>
                                                </div>
                                                <div class="license-details">Мітка на карті дозволить нам якісніше спланувати об'єкт.</div>
                                            </td>
                                            <td data-label="" class="stat-value">
                                                <div class="form-group">
                                                    <div class="form-field cryptoki-form">
                                                        <input type="text" id="address"  name="address" placeholder="Львів, вулиця Валова 9" value=""
                                                        required>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td data-label="#">
                                                <div class="date">2</div>
                                            </td>
                                            <td data-label="">
                                                <div class="item-title gradient-text"><a href="05-product.html">Поверх розташування?</a>
                                                </div>
                                                <div class="license-details">Впливає на ступінь складності виконання</div>
                                            </td>
                                            <td data-label="" class="stat-value">
                                                <div class="form-group">
                                                    <div class="form-field cryptoki-form">
                                                        <input type="number" id="top_object" name="top_object" class="form-control" placeholder="2">
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="">
                                            <td data-label="#">
                                                <div class="date">3</div>
                                            </td>
                                            <td data-label="">
                                                <div class="item-title gradient-text"><a href="05-product.html">Площа об'єкту?</a>
                                                </div>
                                                <div class="license-details"> Всі ціни на сайті вказані з врахуванням площі 50 м2</div>
                                            </td>
                                            <td data-label="" class="stat-value ">
                                                <div class="form-group ">
                                                    <div class="form-field cryptoki-form">
                                                        <input  id="square" type="number" name="square" class="form-control" placeholder="50" required>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="form-group">
                                            <td data-label="#">
                                                <div class="date">4</div>
                                            </td>
                                            <td data-label="">
                                                <div class="item-title gradient-text"><a href="05-product.html">Умови виконання робіт?</a>
                                                </div>
                                                <div class="license-details">  Для розуміння стадії готовності об'єкту до виконання робіт.</div>
                                            </td>
                                            <td data-label="" class="stat-value form-list-wrapper">
                                                <div class="payment-method" style="margin-top: 0px!important;">
                                                    <input  type="checkbox" id="light" name="light" class="cryptoki-checkbox">
                                                    <label for="paypal">Чи є освітлення на об'єкті?</label>
                                                </div>
                                                <div class="payment-method" style="margin-top: 0px!important;">
                                                    <input id="more_info2"  class="cryptoki-checkbox" type="checkbox" id="rosette"  name="rosette" >
                                                    <label for="all-items">Чи є місця живлення для електрообладнання?</label>
                                                </div>

                                                <div class="payment-method" style="margin-top: 0px!important;">
                                                    <input id="more_info2"  class="cryptoki-checkbox" type="checkbox" id="toilet" name="toilet" >
                                                    <label for="paypal">Наявність на об'єкті тимчасового санвузла?</label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td data-label="#">
                                                <div class="date">5</div>
                                            </td>
                                            <td data-label="">
                                                <div class="item-title gradient-text"><a href="05-product.html">Вкажіть яка стяжка у вас на об'єкті</a>
                                                </div>
                                                <div class="license-details">Для правильного підбору, укріплючих основу, полімерних грунтовок.</div>
                                            </td>
                                            <td data-label="" class="stat-value">
                                                <div class="form-group">
                                                    <div class="form-field">
                                                        <select class="select-nice" name="floor_type" id="floor_type" required>
                                                            <option value="{{null}}">Обрати</option>
                                                            <option value="1">Напівсуха стяжка</option>
                                                            <option value="2">Бетона стяжка</option>
                                                            <option value="3">Самонівелір</option>
                                                            <option value="4">На етапі залиття</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td data-label="#">
                                                <div class="date">6</div>
                                            </td>
                                            <td data-label="">
                                                <div class="item-title gradient-text"><a href="05-product.html">Оцініть стан стяжки</a>
                                                </div>
                                                <div class="license-details">Якщо є вибоїни, трищини, нерівності - стан поганий, акщо основа ідеально рівна і без тріщин - стан хороший. Для прорахунку витрат на ремонтні суміші.</div>
                                            </td>
                                            <td data-label="" class="stat-value">
                                                <div class="form-group">
                                                    <div class="form-field">
                                                        <span class="badge badge-pill badge-soft-danger font-size-11" style="margin-right: 10px;">Погана</span>
                                                        <input type="range" class="form-range" id="floor_quality" name="floor_quality">
                                                        <span class="badge badge-pill badge-soft-success font-size-11" style="margin-left: 10px;">Хороша</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        </tbody>
                                    </table>
                                    <div class="user-db-content-area">
                                            <div class="user-db-title">Персональна інформація</div>
                                            <p class="gradient-text flex-center">Отримати комерційну пропозицію з підписом і печаткою, для юредичних осіб, необхідно вказати повну назву вашої компанії,
                                                а також ЄДРПОУ і email, для відправки пропозиції вам на пошту, у випадку, якщо ви фізична особа, достатньо вказати email і номер телефону. </p>
                                            <div class="form-group">
                                                <div class="cryptoki-form">
                                                    <label for="name" style="margin-right: 10px;">Повна назва фірми </label>
                                                    <input type="text" name="name_company" id="name_company" placeholder="Приклад - ТОВ ІБ БУД">
                                                </div>
                                                <div class="cryptoki-form">
                                                    <label for="email" style="margin-right: 10px;">ЄДРПОУ</label>
                                                    <input name="usreou" id="usreou" type="number" placeholder="43143861">
                                                </div>
                                                <div class="cryptoki-form">
                                                    <label for="username" style="margin-right: 10px;">Емейл</label>
                                                    <input type="text"  id="email" name="email" type="email" placeholder="ivbudzahid@gmail.com" required>
                                                </div>
                                                <div class="cryptoki-form">
                                                    <label for="phone" style="margin-right: 10px;">Телефон</label>
                                                    <input id="phone" name="phone" type="number" placeholder="0964563614" required>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <button class="btn btn-wide btn-dark">Згенерувати комерційну пропозицію</button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

