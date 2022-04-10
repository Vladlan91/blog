@extends('layouts.app2')
@section('title', 'ІВ БУД - промислові та декоративні наливні підлоги - Підлоги Ів буд')
@section('meta', 'Промислові покриття✔ Декоративні наливні підлоги✔ Унікальні кварцові рішення✔ Ремонт бетону та стяжки - Ів Буд, лідер галузі полімерних покриттів.')
@section('keywords', 'Полімерний мікроцемент | ІВ БУД')
@section('breadcrumbs')
@endsection
@section('content')
    <div class="primary-content-area container content-padding grid-small-sidebar-left">
        <aside>
            <!--     dahsboard menu -->
            <div class="user-db-menu-ds">
                <div class="item-meta border-bottom"  style="padding-bottom: 10px;">
                        <span class="avatar box-42">
                          <a href="#">
                            <picture>
                              <img src="{{asset($company->logo)}}" alt="avatar" loading="lazy" width="100" height="100">
                            </picture>
                          </a>
                          <span class="verified"><svg class="crumina-icon">
                              <use xlink:href="#check-icon"></use>
                            </svg></span>
                        </span>
                    <div class="user-meta">
                        <div class="user_name">{{ $company->name }}</div>
                        <div class="user_score" style="font-weight: var(--heading-font-weight);
    color: var(--primary-accent-color);">балів : 0</div>
                    </div>
                </div>
                <ul class="profile-menu-ds">
                    <li><a href="!#"><svg class="crumina-icon">
                                <use xlink:href="#settings-icon"></use>
                            </svg>Налаштування профілю</a></li>
                    <li><a href="!#"><svg class="crumina-icon">
                                <use xlink:href="#slide-filter-icon"></use>
                            </svg>Cповіщень</a></li>
                    <li><a href="!#"><svg class="crumina-icon active">
                                <use xlink:href="#dashboard-icon"></use>
                            </svg>Аналітика інвайтів</a></li>
                </ul>
                <div style="width: 100%;" class="qr">
                    {!! \SimpleSoftwareIO\QrCode\Facades\QrCode::size(100)->generate('https://ivbudfloor.com.ua/refClient/'. $company->token); !!}
                    <style>
                        .qr svg {
                            border-radius: 10px!important;
                            width: 100%!important;
                            height: 100%!important;
                        }
                    </style>
                </div>
                <br>
                <div class="profile-author-info"  onclick="copyToClipboard()">
                    <div class="download-file cryptoki-form validation">
                        <input type="text"  value="https://ivbudfloor.com.ua/refClient/{{$company->token}}"  id="myInput" style="font-size: 9px;">
                        <svg class="crumina-icon">
                            <use xlink:href="#copy-icon"></use>
                        </svg>
                    </div>
                </div>
                <script>
                    function copyToClipboard(text) {
                        var copyText = document.getElementById('myInput')
                        copyText.select();
                        document.execCommand('copy')
                        console.log('Copied Text')
                    }
                </script>
            </div>
        </aside>
        <div class="main-content-area">
            <div class="page-title-section">
                <h2>Аналітика моїх рекомендацій <span class="gradient-text">NFC/Qr</span></h2>
            </div>
            <div class="tabs-block swiper-container">
                <div class="swiper-nav">
                    <div class="swiper-button-next"><svg class="crumina-icon next-button">
                            <use xlink:href="#arrow-right2-icon"></use>
                        </svg></div>
                    <div class="swiper-button-prev"><svg class="crumina-icon prev-button">
                            <use xlink:href="#arrow-left2-icon"></use>
                        </svg></div>
                </div>
                <!--TAB TITLE-->
                <ul class="tabs-list swiper-wrapper">
                    <li class="swiper-slide active"><a href="#tab1">Список</a></li>
                    <li class="swiper-slide"><a href="#tab2">Правила партнерсва</a></li>
                    <li class="swiper-slide"><a href="#tab3">База телефонів</a></li>
                    <li class="swiper-slide"><a href="#tab4">Графіки</a></li>
                </ul>
                <div id="tab1" class="tab active">
                    <div class="collectors-box">
                        <table class="content-table">
                            <thead>
                            <tr>
                                <th scope="col" class="heading-label">Регіон</th>
                                <th scope="col" class="heading-label">Дата</th>
                                <th scope="col" class="heading-label">ip адрес</th>
                                <th scope="col" class="heading-label">Замовив дзвінок</th>
                                <th scope="col" class="heading-label">Був в мережі</th>
                                <th scope="col" class="heading-label">Створено замовленя</th>
                            </tr>
                            </thead>
                        </table>
                        <div class="infinite-scroll"  id="post-data">
                            @include('data')

                        </div>
                        <div class="ajax-load"  onclick = 'load(); return false;'>
                            <div class="load-more_bars">
                                <div class="load-more_bar"></div>
                                <div class="load-more_bar"></div>
                                <div class="load-more_bar"></div>
                                <div class="load-more_bar"></div>
                                <div class="load-more_bar"></div>
                                <div class="load-more_bar"></div>
                                <div class="load-more_bar"></div>
                                <div class="load-more_bar"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tab2" class="tab" style="background-image: url('/HTML-NFTMarketplace/img/nfc.png'); background-repeat: no-repeat; background-attachment: fixed; background-position: center; opacity: 0.3; padding-bottom: 100px;">
                    <div class="tab-content">
                        <div class="product-description">
                            <p>I am a self-taught digital artist who specializes in 3d art and motion
                                graphics. Most of my works are inspired by nature and biomechanic themes.
                            </p>
                            <p>What does it mean? Biomechanics is the study of the structure, function and
                                motion of the mechanical aspects of biological systems, at any level from
                                whole organisms to organs, cells and cell organelles, using the methods of
                                mechanics. Biomechanics is a branch of biophysics.</p>
                        </div>
                    </div>
                </div>
                <!--TAB DETAILS-->
                <div id="tab3" class="tab">
                    <div class="tab-content">
                        <!-- Detailed description-->
                        <div class="product-description">
                            <ul class="details-list">
                                @foreach($data as $item)
                                    @if(isset($item->phone))
                                        <li><svg class="crumina-icon bullet-icon">
                                                <use xlink:href="#circle-icon"></use>
                                            </svg><span class="detail-label">Телефон - {{$item->phone}}</span><span class="bold">  ім'я - </span><span style="font-weight: var(--heading-font-weight);color: var(--primary-accent-color);">{{$item->name}}</span>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                        <!-- /Detailed description-->
                    </div>
                </div>
                <!--/TAB DETAILS-->
                <!--TAB ACTIVITY-->
                <div id="tab4" class="tab">
                    <div class="tab-content">
                        <div class="dashboard-wrapper">
                        <!--   user stats -->
                        <div class="user-stats-section">
                            <div class="stat-item blue-gradient-diagonal">
                                <div class="stat-icon"><svg class="crumina-icon">
                                        <use xlink:href="#face-id-icon"></use>
                                    </svg></div>
                                <div class="stat-info">
                                    <div class="stat-number">{{$data->count()}}</div>
                                    <div class="stat-description">Відвідувань сайту</div>
                                </div>
                            </div>
                            <div class="stat-item yellow-gradient-diagonal">
                                <div class="stat-icon"><svg class="crumina-icon">
                                        <use xlink:href="#dollar-icon"></use>
                                    </svg></div>
                                <div class="stat-info">
                                    <div class="stat-number">{{$data->where('order', 1)->count()}}</div>
                                    <div class="stat-description">Запитів на дзвінок</div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script>
                        <div class="tab-content">
                            <div style="width: 40%">
                                <div style="width:75%; float: left;">
                                    {!! $chartjs->render() !!}
                                </div>
                            </div>
                            <div style="width:15%; float: left;">

                            </div>
                            <div style="width:60%; float: left;">
                                {!! $chartjs2->render() !!}
                            </div>
                        </div>
                    </div>
                </div>
                <!--/TAB ACTIVITY-->
            </div>
            
        </div>
    </div>
    <script type="text/javascript">
        var page = 1;
        function load(){
            page++;
            loadMoreData(page);
        }

        function loadMoreData(page){
            $.ajax(
                {
                    url: '?page=' + page,
                    type: "get",
                    beforeSend: function()
                    {
                        $('.ajax-load').show();
                    }
                })
                .done(function(data)
                {
                    if(data.html == " "){
                        $('.ajax-load').hide();
                        return;
                    }
                    $('.ajax-load').show();

                    $("#post-data").append(data.html);
                })
                .fail(function(jqXHR, ajaxOptions, thrownError)
                {
                    $('.ajax-load').hide();
                });
        }
    </script>

@endsection


