@extends('layouts.app2')
@section('title', 'Контакти компанії ІV BUD | ІВ БУД')
@section('meta', 'Декоративні підлоги, мікроцемент на підлогу, наливні підлоги Львів, найкраща ціна на безшовні покриття | ІВ БУД, підлога в будинок, міцні підлоги, безшовні покриття @ivbudfloor')
@section('keywords', 'Мікроцементи, наливні підлоги, найкраща ціна від | ІВ БУД, підлога в будинок,міцні підлоги, безшовні покриття @ivbudfloor')

@section('content')
    <link rel="stylesheet" href="{{asset('HTML-NFTMarketplace/css/nice-select2.css')}}">
    <div class="primary-content-area container content-padding">
        <div class="page-title">
            <h2><span class="gradient-text">Надіслати </span> повідомлення</h2>
        </div>
        <div class="grid-right-sidebar">
            <div class="main-content-area">
                <!-- CONTACT FORM -->
                <form  class="cryptoki-form validation" id="contact-form" method="POST" action="{{ route('massages.create') }}">
                    @csrf
                    <div class="form-group">
                        <div class="form-field">
                            <label for="name">Ваше ім'я</label>
                            <input type="text" id="name" name="name" placeholder="Ваше ім'я" data-val="\S" data-val-msg="* This is a required field." data-val-msg-id="textMessage" required>
                            <span class="input_error-message" id="textMessage"></span>
                        </div>
                        <div class="form-field">
                            <label for="email">Ваш телефон</label>
                            <input  type="number" id="phone" name="phone" placeholder="Телефон" data-val="\b[a-z0-9._]+@[a-z0-9.-]+\.[a-z]{2,4}\b" data-val-msg="* Please enter a valid email address." data-val-msg-id="emailMessage" required>
                            <span class="input_error-message" id="emailMessage"></span>
                        </div>
                    </div>
                    <div class="form-field">
                        <label for="subject">Тема звернення</label>
                        <select class="select-nice" name="subject" id="subject" data-val="\S" data-val-msg="* Please, select an option." data-val-msg-id="selectMessage" required>
                            <option value="">Обрати тему звернення</option>
                            <option value="Консультація у виборі покриття">Консультація у виборі покриття</option>
                            <option value="Отримати комерційну пропозицію">Отримати комерційну пропозицію</option>
                            <option value="Отримати сертифікат відповідності">Отримати сертифікат відповідності</option>
                            <option value="Спіпраця">Спіпраця</option>
                            <option value="Франшиза">Франшиза</option>
                        </select>
                        <span class="input_error-message" id="selectMessage"></span>
                    </div>
                    <div class="form-field comment-area">
                        <label for="message">Повідомлення</label>
                        <textarea id="massages" name="massages" placeholder="Повідомлення" class="comment-form message" cols="30" rows="10" data-val="\S" data-val-msg="* Please, type a message." data-val-msg-id="textareaMessage" required></textarea>
                        <span class="input_error-message" id="textareaMessage"></span>
                    </div>

                    <button type="submit" class="btn btn-normal btn-dark" data-badge="inline">Надіслати повідомлення</button>
                </form>
                <!-- CONTACT FORM -->
            </div>
            <aside>
                <div class="widgets-list">
                    <div class="widget widget-contact">
                        <div class="widget-title h5">Контакти Львів</div>
                        <div class="widget-body">
                            <div class="email"><a href="mailto:business@cryptoki.com">+38 (096) 456 36 14</a>
                            </div>
                            <div class="email-owner">Наливайка 12, Львів</div>
                        </div>
                    </div>
                    <div class="widget widget-contact">
                        <div class="widget-title h5">Контакти Івано-Франківськ</div>
                        <div class="widget-body">
                            <div class="email"><a href="mailto:partners@cryptoki.com">ivbudzahid@gmail.com</a>
                            </div>
                            <div class="email-owner">вул. Ушинського 1, Івано-Франківськ</div>
                        </div>
                    </div>
                    <div class="widget widget-social">
                        <div class="widget-title h5">Знайти нас у соціальних мережах.</div>
                        <div class="widget-body">
                            <ul class="social-styled-list">
                                <li>
                                    <img src="{{asset('tel.png')}}" alt="" style="width: 17px!important; height: 100%!important; margin-right: 10px!important;">
                                    <a href="https://t.me/ivbudfloors">
                                        @telegram/ivbudfloor
                                        <span class="verified"><svg class="crumina-icon"><use xlink:href="#check-icon"></use></svg></span>
                                    </a>
                                </li>
                                <li>
                                    <img src="{{asset('Tiktok-logo.png')}}" alt="" style="width: 17px!important; height: 100%!important; margin-right: 10px!important;">
                                    <a href="https://vm.tiktok.com/ZMLrB1aML/">
                                        @TikTok/ivbudfloor
                                        <span class="verified"><svg class="crumina-icon"><use xlink:href="#check-icon"></use></svg></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/ivbudfloor/"><span class="marker"><svg class="crumina-icon"><use xlink:href="#instagram-icon"></use></svg></span>
                                        @instagram/ivbudfloor
                                        <span class="verified"><svg class="crumina-icon"><use xlink:href="#check-icon"></use></svg></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/ivbudfloor/"><span class="marker"><svg class="crumina-icon"><use xlink:href="#facebook-icon"></use></svg></span>
                                        @facebook/ivbudfloor
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.youtube.com/channel/UCPsyQilRx9R4uroDTCdJjBQ"><span class="marker"><svg class="crumina-icon"><use xlink:href="#youtube-icon"></use></svg></span>
                                        @youtube/ivbudfloor
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </div>
    <script defer src="{{asset('HTML-NFTMarketplace/js/nice-select2.js')}}"></script>
@endsection
