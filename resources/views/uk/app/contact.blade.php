@extends('layouts.app')
@section('title', 'Контакти компанії ІВ БУД')
@section('meta', 'Контакти компанії | ІВ БУД')
@section('keywords', 'Полімерний мікроцемент | ІВ БУД')
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
                            <h2>Слідкувати</h2>
                            <p class="text-left text-s">
                                Знайти нас у соціальних мережах.
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
                                <li>Наливайка 12, Львів</li>
                                <li>вул. Ушинського 1, Івано-Франківськ</li>
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
                <h2>Надіслати  повідомлення</h2>
                <hr class="space m" />
                <form method="POST" action="{{ route('massages.create') }}"  enctype="multipart/form-data" >
                    @csrf
                    <input id="name" name="name" placeholder="Ваше ім'я" type="text" class="form-control form-value" required>
                    <hr class="space s" />
                    <div class="row">
                        <div class="col-md-6">
                            <input id="phone" name="phone" placeholder="Телефон" type="text" class="form-control form-value">
                        </div>
                        <div class="col-md-6">
                            <input id="email" name="email" placeholder="Емейл" type="email" class="form-control form-value" required>
                        </div>
                    </div>
                    <hr class="space s" />
                    <textarea id="massages" name="massages" placeholder="Повідомлення" class="form-control form-value" required></textarea>
                    <hr class="space m" />
                    <button class="btn-sm btn" type="submit">Надіслати повідомлення</button>
                </form>
            </div>
            <div class="col-md-6 col-sm-12">
                <table class="table table-hover text-s">
                    <thead>
                    <tr>
                        <th>Дні</th>
                        <th>До обіду</th>
                        <th>Після обіду</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th>Понеділо</th>
                        <td>9:00 - 13:00</td>
                        <td>14:00 - 18:00</td>
                    </tr>
                    <tr>
                        <th>Вівторок</th>
                        <td>9:00 - 13:00</td>
                        <td>14:00 - 18:00</td>
                    </tr>
                    <tr>
                        <th>Середа</th>
                        <td>9:00 - 13:00</td>
                        <td>14:00 - 18:00</td>
                    </tr>
                    <tr>
                        <th>Четверг</th>
                        <td>9:00 - 13:00</td>
                        <td>14:00 - 18:00</td>
                    </tr>
                    <tr>
                        <th>Пятниця</th>
                        <td>9:00 - 13:00</td>
                        <td>14:00 - 18:00</td>
                    </tr>
                    <tr>
                        <th>Субота</th>
                        <td>10:00 - 14:00</td>
                        <td>15:00 - 17:00</td>
                    </tr>
                    <tr>
                        <th>Неділя</th>
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
                            Отримати консультацію за тел. +38(096) 456 36 14

                        </p>
                        <a href="#" class="btn-text">Читати більше</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
