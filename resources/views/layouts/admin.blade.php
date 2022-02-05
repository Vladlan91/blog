<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Dashboard | Skote - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('Skote/dist/assets/images/favicon.ico')}}">

    <!-- Bootstrap Css -->
    <link href="{{asset('Skote/dist/assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('Skote/dist/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('Skote/dist/assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />
</head>

<body data-sidebar="dark">

<div id="layout-wrapper">


    <header id="page-topbar">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="{{ asset('Skote/dist/assets/images/logo1.png')}}" alt="" height="22">
                                </span>
                        <span class="logo-lg">
                                    <img src="{{ asset('Skote/dist/assets/images/logo2.png')}}" alt="" height="32">
                                </span>
                    </a>

                    <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="{{ asset('Skote/dist/assets/images/logo1.png')}}" alt="" height="22">
                                </span>
                        <span class="logo-lg">
                                    <img src="{{ asset('Skote/dist/assets/images/logo2.png')}}" alt="" height="32">
                                </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                    <i class="fa fa-fw fa-bars"></i>
                </button>

                <!-- App Search-->
                <form class="app-search d-none d-lg-block">
                    <div class="position-relative">
                        <input type="text" class="form-control" placeholder="Пошук...">
                        <span class="bx bx-search-alt"></span>
                    </div>
                </form>

                <div class="dropdown dropdown-mega d-none d-lg-block ms-2">
                    <button type="button" class="btn header-item waves-effect" data-bs-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                        <span key="t-megamenu">IV BUD Академія</span>
                        <i class="mdi mdi-chevron-down"></i>
                    </button>
                    <div class="dropdown-menu dropdown-megamenu">
                        <div class="row">
                            <div class="col-sm-8">

                                <div class="row">
                                    <div class="col-md-4">
                                        <h5 class="font-size-14 mt-0" key="t-ui-components">Админ-панель</h5>
                                        <ul class="list-unstyled megamenu-list">
                                            <li>
                                                <a href="javascript:void(0);" key="t-lightbox">Управління складом</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" key="t-range-slider">Финанси</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" key="t-sweet-alert">Персонал та права доступу</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" key="t-rating">Управління проектами</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" key="t-forms">Постачальники</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="col-md-4">
                                        <h5 class="font-size-14 mt-0" key="t-applications">Підлогові покриття</h5>
                                        <ul class="list-unstyled megamenu-list">
                                            <li>
                                                <a href="javascript:void(0);" key="t-ecommerce">Підготовка основи</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" key="t-calendar">Типи покриттів</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" key="t-email">Підбір покриття</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" key="t-projects">Підбір фінішнього лаку</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" key="t-tasks">Лакування</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" key="t-contacts">Ремонт та обслуговування</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="col-md-4">
                                        <h5 class="font-size-14 mt-0" key="t-extra-pages">Ведення проектів</h5>
                                        <ul class="list-unstyled megamenu-list">
                                            <li>
                                                <a href="javascript:void(0);" key="t-light-sidebar">Основні етапи</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" key="t-compact-sidebar">Виготовлення взірців</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" key="t-horizontal">Ведення перемов</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" key="t-maintenance">Виконання робіт</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" key="t-coming-soon">Здача обєкту</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" key="t-timeline">Гарантійні зобовязання</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h5 class="font-size-14 mt-0" key="t-ui-components">Робота з партерами</h5>
                                        <ul class="list-unstyled megamenu-list">
                                            <li>
                                                <a href="javascript:void(0);" key="t-lightbox">Робота з партерами</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" key="t-range-slider">Умови співпраці</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" key="t-sweet-alert">Менеджмент</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" key="t-rating">Ведення бази партнерів</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" key="t-forms">Статистика</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="col-sm-5">
                                        <div>
                                            <img src="{{ asset('Skote/dist/assets/images/megamenu-img.png')}}" alt="" class="img-fluid mx-auto d-block">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="d-flex">

                <div class="dropdown d-inline-block d-lg-none ms-2">
                    <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="mdi mdi-magnify"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                         aria-labelledby="page-header-search-dropdown">

                        <form class="p-3">
                            <div class="form-group m-0">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item waves-effect"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img id="header-lang-img" src="{{ asset('Skote/dist/assets/images/flags/ua.jpg')}}" alt="Header Language" height="16">
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ru">
                            <img src="{{ asset('Skote/dist/assets/images/flags/russia.jpg')}}" alt="user-image" class="me-1" height="12"> <span class="align-middle">Russian</span>
                        </a>
                    </div>
                </div>

                <div class="dropdown d-none d-lg-inline-block ms-1">
                    <button type="button" class="btn header-item noti-icon waves-effect"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bx bx-customize"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                        <div class="px-lg-2">
                            <div class="row g-0">
                                <div class="col">
                                    <a class="dropdown-icon-item" href="#">
                                        <img src="{{ asset('Skote/dist/assets/images/brands/facebook.png')}}" alt="Facebook">
                                        <span>Facebook</span>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="dropdown-icon-item" href="#">
                                        <img src="{{ asset('Skote/dist/assets/images/brands/Instagram.png')}}" alt="Instagram">
                                        <span>Instagram</span>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="dropdown-icon-item" href="#">
                                        <img src="{{ asset('Skote/dist/assets/images/brands/YouTube.png')}}" alt="YouTube">
                                        <span>YouTube</span>
                                    </a>
                                </div>
                            </div>

                            <div class="row g-0">
                                <div class="col">
                                    <a class="dropdown-icon-item" href="#">
                                        <img src="{{ asset('Skote/dist/assets/images/brands/telegram.png')}}" alt="telegram">
                                        <span>Telegram</span>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="dropdown-icon-item" href="#">
                                        <img src="{{ asset('Skote/dist/assets/images/brands/tiktok.png')}}" alt="tiktok">
                                        <span>TikTok</span>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="dropdown-icon-item" href="#">
                                        <img src="{{ asset('Skote/dist/assets/images/brands/ivbud.png')}}" alt="ivbud">
                                        <span>IV BUD Site</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="dropdown d-none d-lg-inline-block ms-1">
                    <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                        <i class="bx bx-fullscreen"></i>
                    </button>
                </div>

                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bx bx-bell bx-tada"></i>
                        <span class="badge bg-danger rounded-pill">3</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                         aria-labelledby="page-header-notifications-dropdown">
                        <div class="p-3">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h6 class="m-0" key="t-notifications"> Notifications </h6>
                                </div>
                                <div class="col-auto">
                                    <a href="#!" class="small" key="t-view-all"> View All</a>
                                </div>
                            </div>
                        </div>
                        <div data-simplebar style="max-height: 230px;">
                            <a href="" class="text-reset notification-item">
                                <div class="media">
                                    <div class="avatar-xs me-3">
                                                <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                    <i class="bx bx-cart"></i>
                                                </span>
                                    </div>
                                    <div class="media-body">
                                        <h6 class="mt-0 mb-1" key="t-your-order">Your order is placed</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-1" key="t-grammer">If several languages coalesce the grammar</p>
                                            <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-min-ago">3 min ago</span></p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="" class="text-reset notification-item">
                                <div class="media">
                                    <img src="assets/images/users/avatar-3.jpg"
                                         class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                    <div class="media-body">
                                        <h6 class="mt-0 mb-1">James Lemire</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-1" key="t-simplified">It will seem like simplified English.</p>
                                            <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-hours-ago">1 hours ago</span></p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="" class="text-reset notification-item">
                                <div class="media">
                                    <div class="avatar-xs me-3">
                                                <span class="avatar-title bg-success rounded-circle font-size-16">
                                                    <i class="bx bx-badge-check"></i>
                                                </span>
                                    </div>
                                    <div class="media-body">
                                        <h6 class="mt-0 mb-1" key="t-shipped">Your item is shipped</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-1" key="t-grammer">If several languages coalesce the grammar</p>
                                            <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-min-ago">3 min ago</span></p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="" class="text-reset notification-item">
                                <div class="media">
                                    <img src="assets/images/users/avatar-4.jpg"
                                         class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                    <div class="media-body">
                                        <h6 class="mt-0 mb-1">Salena Layfield</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-1" key="t-occidental">As a skeptical Cambridge friend of mine occidental.</p>
                                            <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-hours-ago">1 hours ago</span></p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="p-2 border-top d-grid">
                            <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                                <i class="mdi mdi-arrow-right-circle me-1"></i> <span key="t-view-more">View More..</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                            @if(!empty(\Illuminate\Support\Facades\Auth::user()->avatar))
                                <img class="rounded-circle header-profile-user" src="{{ asset(\Illuminate\Support\Facades\Auth::user()->avatar)}}" alt="">
                            @else
                                <img class="rounded-circle header-profile-user" src="{{ asset( 'Skote/dist/assets/images/companies/img-1.png')}}">
                            @endif
                        <span class="d-none d-xl-inline-block ms-1" key="t-henry">{{ Illuminate\Support\Str::substr(\Illuminate\Support\Facades\Auth::user()->name, 0, 10) }}</span>
                        <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <a class="dropdown-item" href="#"><i class="bx bx-user font-size-16 align-middle me-1"></i> <span key="t-profile">Profile</span></a>
                        <a class="dropdown-item" href="#"><i class="bx bx-wallet font-size-16 align-middle me-1"></i> <span key="t-my-wallet">My Wallet</span></a>
                        <a class="dropdown-item d-block" href="#"><span class="badge bg-success float-end">11</span><i class="bx bx-wrench font-size-16 align-middle me-1"></i> <span key="t-settings">Settings</span></a>
                        <a class="dropdown-item" href="#"><i class="bx bx-lock-open font-size-16 align-middle me-1"></i> <span key="t-lock-screen">Lock screen</span></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger" href="#"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span key="t-logout">Logout</span></a>
                    </div>
                </div>

                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                        <i class="bx bx-cog bx-spin"></i>
                    </button>
                </div>

            </div>
        </div>
    </header>

    <!-- ========== Left Sidebar Start ========== -->
    <div class="vertical-menu">

        <div data-simplebar class="h-100">

            <!--- Sidemenu -->
            <div id="sidebar-menu">
                <!-- Left Menu Start -->
                <ul class="metismenu list-unstyled" id="side-menu">
                    <li class="menu-title" key="t-menu">Менеджмент</li>

                    <li>
                        <a href="javascript: void(0);" class="waves-effect">
                            <i class="bx bx-home-circle"></i><span class="badge rounded-pill bg-info float-end">04</span>
                            <span key="t-dashboards">Статистика</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="index.html" key="t-default">Загальний звіт</a></li>
                            <li><a href="dashboard-crypto.html" key="t-crypto">Фінанси</a></li>
                            <li><a href="dashboard-crypto.html" key="t-crypto">Витрата матеріалів</a></li>
                            <li><a href="index.html" key="t-default">Замовлення</a></li>
                            <li><a href="dashboard-saas.html" key="t-saas">Відвідування сайту</a></li>
                            <li><a href="dashboard-blog.html" key="t-blog">Склад</a></li>
                            <li><a href="dashboard-blog.html" key="t-blog">Персонал</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-layout"></i>
                            <span key="t-layouts">Замовлення</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="{{route('admin.comercial.index')}}" key="t-default">Комерційні пропозиції</a></li>
                            <li><a href="{{route('admin.portfolio.index')}}" key="t-saas">Замовлення</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-layout"></i>
                            <span key="t-layouts">База клієнтів</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="{{route('admin.comercial.index')}}" key="t-default">Дзвінки</a></li>
                            <li><a href="{{route('admin.portfolio.index')}}" key="t-saas">Відвідувачі</a></li>
                            <li><a href="dashboard-crypto.html" key="t-crypto">Статистика</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-layout"></i>
                            <span key="t-layouts">Клієнти</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="index.html" key="t-default">Замовники</a></li>
                            <li><a href="{{route('admin.company.index')}}" key="t-saas">Партнери</a></li>
                            <li><a href="dashboard-crypto.html" key="t-crypto">Постачальники</a></li>
                        </ul>
                    </li>

                    <li class="menu-title" key="t-apps">Операційна діяльність</li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-store"></i>
                            <span key="t-ecommerce">Фінанси</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="ecommerce-products.html" key="t-products">Прихід</a></li>
                            <li><a href="ecommerce-product-detail.html" key="t-product-detail">Розхід</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-store"></i>
                            <span key="t-ecommerce">Склад</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="{{route('admin.storage.categories.index')}}" key="t-products">Облік матеріалів</a></li>
                            <li><a href="{{route('admin.storage.categories.index')}}" key="t-products">Основні засоби</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-store"></i>
                            <span key="t-ecommerce">Персонал</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="{{route('admin.workers')}}" key="t-products">Список працівників</a></li>
                            <li><a href="{{route('admin.workers.wage')}}" key="t-product-detail">Нарахування</a></li>
                            <li><a href="{{route('admin.workers.timesheet')}}" key="product">Табель роботи</a></li>
                            <li><a href="{{route('admin.workers.kpi')}}" key="t-orders">Встановлення КПЕ</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-bitcoin"></i>
                            <span key="t-crypto">Постачальники</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="{{route('admin.storage.provider')}}" key="t-wallet">Список постачальників</a></li>
                            <li><a href="{{route('admin.storage.provider')}}" key="t-wallet">Звірка по постачальникам</a></li>
                        </ul>
                    </li>
                    <li class="menu-title" key="t-apps">Маркетинг</li>
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-envelope"></i>
                            <span key="t-email">Qr code</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="email-inbox.html" key="t-inbox">Згенерувати Qr code</a></li>
                            <li><a href="email-read.html" key="t-read-email">Статистика по Qr code </a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-receipt"></i>
                            <span key="t-invoices">Smart link</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="invoices-list.html" key="t-invoice-list">Згенерувати Smart link</a></li>
                            <li><a href="invoices-detail.html" key="t-invoice-detail">Статистика по Smart link</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-receipt"></i>
                            <span key="t-invoices">Smart link</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="invoices-list.html" key="t-invoice-list">Згенерувати Smart link</a></li>
                            <li><a href="invoices-detail.html" key="t-invoice-detail">Статистика по Smart link</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-briefcase-alt-2"></i>
                            <span key="t-projects">Реферальні силки</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="projects-grid.html" key="t-p-grid">Список рефералів</a></li>
                            <li><a href="projects-list.html" key="t-p-list">Статистика</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
            <!-- Sidebar -->
        </div>
    </div>
    <!-- Left Sidebar End -->



    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                @yield('content')
            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <!--Transaction Modal -->
        <div class="modal fade transaction-detailModal" tabindex="-1" role="dialog" aria-labelledby="transaction-detailModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="transaction-detailModalLabel">Order Details</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p class="mb-2">Product id: <span class="text-primary">#SK2540</span></p>
                        <p class="mb-4">Billing Name: <span class="text-primary">Neal Matthews</span></p>

                        <div class="table-responsive">
                            <table class="table align-middle table-nowrap">
                                <thead>
                                <tr>
                                    <th scope="col">Product</th>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Price</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">
                                        <div>
                                            <img src="{{ asset('Skote/dist/assets/images/product/img-7.png')}}" alt="" class="avatar-sm">
                                        </div>
                                    </th>
                                    <td>
                                        <div>
                                            <h5 class="text-truncate font-size-14">Wireless Headphone (Black)</h5>
                                            <p class="text-muted mb-0">$ 225 x 1</p>
                                        </div>
                                    </td>
                                    <td>$ 255</td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div>
                                            <img src="{{ asset('Skote/dist/assets/images/product/img-4.png')}}" alt="" class="avatar-sm">
                                        </div>
                                    </th>
                                    <td>
                                        <div>
                                            <h5 class="text-truncate font-size-14">Phone patterned cases</h5>
                                            <p class="text-muted mb-0">$ 145 x 1</p>
                                        </div>
                                    </td>
                                    <td>$ 145</td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <h6 class="m-0 text-right">Sub Total:</h6>
                                    </td>
                                    <td>
                                        $ 400
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <h6 class="m-0 text-right">Shipping:</h6>
                                    </td>
                                    <td>
                                        Free
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <h6 class="m-0 text-right">Total:</h6>
                                    </td>
                                    <td>
                                        $ 400
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- end modal -->



        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>document.write(new Date().getFullYear())</script> © IVBUD.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Design & Develop by ivbudfloor
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<!-- Right Sidebar -->
<div class="right-bar">
    <div data-simplebar class="h-100">
        <div class="rightbar-title d-flex align-items-center px-3 py-4">

            <h5 class="m-0 me-2">Settings</h5>

            <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                <i class="mdi mdi-close noti-icon"></i>
            </a>
        </div>

        <!-- Settings -->
        <hr class="mt-0" />
        <h6 class="text-center mb-0">Choose Layouts</h6>

        <div class="p-4">
            <div class="mb-2">
                <img src="{{ asset('Skote/dist/assets/images/layouts/layout-1.jpg')}}" class="img-fluid img-thumbnail" alt="">
            </div>

            <div class="form-check form-switch mb-3">
                <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch" checked>
                <label class="form-check-label" for="light-mode-switch">Light Mode</label>
            </div>

            <div class="mb-2">
                <img src="{{ asset('Skote/dist/assets/images/layouts/layout-2.jpg')}}" class="img-fluid img-thumbnail" alt="">
            </div>
            <div class="form-check form-switch mb-3">
                <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch" data-bsStyle="http://127.0.0.1:8000/Skote/dist/assets/css/bootstrap-dark.min.css" data-appStyle="http://127.0.0.1:8000/Skote/dist/assets/css/app-dark.min.css">
                <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
            </div>

            <div class="mb-2">
                <img src="{{ asset('Skote/dist/assets/images/layouts/layout-3.jpg')}}" class="img-fluid img-thumbnail" alt="">
            </div>
            <div class="form-check form-switch mb-5">
                <input class="form-check-input theme-choice" type="checkbox" id="rtl-mode-switch" data-appStyle="{{asset('Skote/dist/assets/css/app-rtl.min.css')}}">
                <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
            </div>


        </div>

    </div> <!-- end slimscroll-menu-->
</div>
<!-- /Right-bar -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- JAVASCRIPT -->
<script src="{{asset('Skote/dist/assets/libs/jquery/jquery.min.js')}}"></script>
<script src="{{asset('Skote/dist/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('Skote/dist/assets/libs/metismenu/metisMenu.min.js')}}"></script>
<script src="{{asset('Skote/dist/assets/libs/simplebar/simplebar.min.js')}}"></script>
@yield('script')
<script src="{{asset('Skote/dist/assets/libs/node-waves/waves.min.js')}}"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.js"></script>
<script src="{{asset('Skote/dist/assets/js/app.js')}}"></script>
</body>

</html>
