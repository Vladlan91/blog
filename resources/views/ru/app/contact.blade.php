@extends('layouts.appru')
@section('title', 'Контакты компании ИВ БУД')
@section('meta', 'Контакты компании | ИВ БУД')
@section('keywords', 'Контакты компании | ИВ БУД')
@section('breadcrumbs')
@endsection
@section('content')
<div class="section-map box-middle-container row-20">
    <div class="google-map" data-coords="40.741895,-73.989308" data-zoom="12" data-skin=" " data-marker-pos-top="30" data-marker-pos="col-md-6-right" data-marker="http://templates.framework-y.com/lightflow/images/marker-map-4.png"></div>
    <div class="overlaybox overlaybox-side overlaybox">
        <div class="container content">
            <div class="row">
                <div class="col-md-6 overlaybox-inner box-middle" data-anima="fade-left">
                    <div class="row">
                        <div class="col-md-6">
                            <h2>Следить</h2>
                            <p class="text-left text-s">
                                Найти нас в социальных сетях.
                            </p>
                            <hr class="space s" />
                            <div class="btn-group social-group btn-group-icons social-colors">
                                <a target="_blank" href="https://www.facebook.com/ivbudfloor"><i class="fa fa-facebook text-s circle"></i></a>
                                <a target="_blank" href="https://www.instagram.com/ivbudfloor"><i class="fa fa-instagram text-s circle"></i></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <hr class="space m visible-xs" />
                            <h2>Контакти</h2>
                            <hr class="space m" />
                            <ul class="fa-ul ul-squares no-margins text-s">
                                <li>Львов, Наливайко 12</li>
                                <li>Ивано-Франковск, ул. Ушинского, 1</li>
                                <li>ivbudzahid@gmail.com</li>
                                <li>+38 (096) 456 36 14</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6"></div>
            </div>
        </div>
    </div>
</div>
<div class="section-empty">
    <div class="container content">
        <div class="row">
            <div class="col-md-6">
                <h2>ОТПРАВИТЬ СООБЩЕНИЕ</h2>
                <hr class="space m" />
                <form method="POST" action="{{ route('massages.create') }}"  enctype="multipart/form-data" >
                    @csrf
                    <input id="name" name="name" placeholder="Ваше имя" type="text" class="form-control form-value" required>
                    <hr class="space s" />
                    <div class="row">
                        <div class="col-md-6">
                            <input id="phone" name="phone" placeholder="Телефон" type="text" class="form-control form-value">
                        </div>
                        <div class="col-md-6">
                            <input id="email" name="email" placeholder="Eмейл" type="email" class="form-control form-value" required>
                        </div>
                    </div>
                    <hr class="space s" />
                    <textarea id="messagge" name="messagge" placeholder="
Ваше сообщение" class="form-control form-value" required></textarea>
                    <hr class="space m" />
                    <button class="btn-sm btn" type="submit">Отправить сообщение</button>
                </form>
            </div>
            <div class="col-md-6 col-sm-12">
                <table class="table table-hover text-s">
                    <thead>
                    <tr>
                        <th>Дни</th>
                        <th>К обеду</th>
                        <th>После обеда</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th>Понедило</th>
                        <td>9:00 - 13:00</td>
                        <td>14:00 - 18:00</td>
                    </tr>
                    <tr>
                        <th>Вторник</th>
                        <td>9:00 - 13:00</td>
                        <td>14:00 - 18:00</td>
                    </tr>
                    <tr>
                        <th>Среда</th>
                        <td>9:00 - 13:00</td>
                        <td>14:00 - 18:00</td>
                    </tr>
                    <tr>
                        <th>Четверг</th>
                        <td>9:00 - 13:00</td>
                        <td>14:00 - 18:00</td>
                    </tr>
                    <tr>
                        <th>Пятница</th>
                        <td>9:00 - 13:00</td>
                        <td>14:00 - 18:00</td>
                    </tr>
                    <tr>
                        <th>Суббота</th>
                        <td>10:00 - 14:00</td>
                        <td>15:00 - 17:00</td>
                    </tr>
                    <tr>
                        <th>Воскресенье</th>
                        <td>Закрито</td>
                        <td>Закрито</td>
                    </tr>
                    </tbody>
                </table>
                <hr class="space m" />
                <div class="advs-box advs-box-side-icon boxed-inverse pull-right" data-anima="scale-up" data-trigger="hover">
                    <div class="icon-box">
                        <i class="im-environmental-3 icon anima"></i>
                    </div>
                    <div class="caption-box">
                        <h3>Франшиза</h3>
                        <p>
                            Получить консультацию по тел. +38 (096) 456 36 14
                        </p>
                        <a href="#" class="btn-text">
                            Читать больше</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
