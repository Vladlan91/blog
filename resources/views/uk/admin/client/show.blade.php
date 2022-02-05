@extends('layouts.admin')
@section('breadcrumbs')
@endsection
@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}" />
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Profile</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Contacts</a></li>
                                <li class="breadcrumb-item active">Profile</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-xl-4">
                    <div class="card overflow-hidden">
                        <div class="bg-primary bg-soft">
                            <div class="row">
                                <div class="col-7">
                                    <div class="text-primary p-3">
                                        @if(isset($client->company))
                                            <h5 class="font-size-25 text-truncate">{{$client->company->name}}</h5>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-5 align-self-end">
                                    <img src="{{asset('Skote/dist/assets/images/profile-img.png')}}" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="row">
                                <div class="col-sm-4">
                                    @if(!empty($client->avatar))
                                        <img src="{{asset($client->avatar)}}" alt="" class="img-thumbnail rounded-circle">
                                    @else
                                        <span class="avatar-title rounded-circle" style="text-transform: uppercase; text-decoration:white;">
                                                    {{ Illuminate\Support\Str::substr($client->name, 0, 1) }}
                                        </span>
                                    @endif
                                </div>

                                <div class="col-sm-8">
                                    <div class="pt-4">

                                        <div class="row">
                                            <div class="col-6">
                                                <h5 class="font-size-15">125</h5>
                                                <p class="text-muted mb-0">Проектів</p>
                                            </div>
                                            <div class="col-6">
                                                <h5 class="font-size-15">$1245</h5>
                                                <p class="text-muted mb-0">Виплачено %</p>
                                            </div>
                                        </div>
                                        @if(isset($client->company_id))
                                        <div class="mt-4">
                                            <a href="" class="btn btn-primary waves-effect waves-light btn-sm">Переглянути компанію <i class="mdi mdi-arrow-right ms-1"></i></a>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end card -->

                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Загальна інформація</h4>
                            <p class="text-muted mb-4">
                               {{$client->comments}}
                            </p>
                            <div class="table-responsive">
                                <table class="table table-nowrap mb-0">
                                    <tbody>
                                    <tr>
                                        <th scope="row">Повне і'мя :</th>
                                        <td>{{$client->name}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Телефон :</th>
                                        <td>{{$client->phone}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">E-mail :</th>
                                        <td>{{$client->email}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Розташування :</th>
                                        @if(isset($client->location))
                                        <td>{{$client->location->name}} / {{$client->location->town}}</td>
                                        @endif
                                    </tr>
                                    </tbody>
                                </table>
                                <br>
                                <div class="card-footer bg-transparent border-top">
                                    <div class="text-center">
                                        <a href="#" class="btn btn-outline-light me-2 w-md">Змінити дані</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end card -->

                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-5">Дати співпраці</h4>
                            <div class="">
                                <ul class="verti-timeline list-unstyled">
                                    <li class="event-list active">
                                        <div class="event-timeline-dot">
                                            <i class="bx bx-right-arrow-circle bx-fade-right"></i>
                                        </div>
                                        <div class="media">
                                            <div class="me-3">
                                                <i class="bx bx-server h4 text-primary"></i>
                                            </div>
                                            <div class="media-body">
                                                <div>
                                                    <h5 class="font-size-15"><a href="#" class="text-dark">Дата внесення в базу</a></h5>
                                                    <span class="text-primary">{{$client->created_at}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="event-list">
                                        <div class="event-timeline-dot">
                                            <i class="bx bx-right-arrow-circle"></i>
                                        </div>
                                        <div class="media">
                                            <div class="me-3">
                                                <i class="bx bx-code h4 text-primary"></i>
                                            </div>
                                            <div class="media-body">
                                                <div>
                                                    <h5 class="font-size-15"><a href="#" class="text-dark">Дата першого об'єкту</a></h5>
                                                    <span class="text-primary">2013 - 16</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="event-list">
                                        <div class="event-timeline-dot">
                                            <i class="bx bx-right-arrow-circle"></i>
                                        </div>
                                        <div class="media">
                                            <div class="me-3">
                                                <i class="bx bx-edit h4 text-primary"></i>
                                            </div>
                                            <div class="media-body">
                                                <div>
                                                    <h5 class="font-size-15"><a href="#" class="text-dark">Дата останього об'єкту</a></h5>
                                                    <span class="text-primary">2011 - 13</span>

                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <!-- end card -->
                </div>

                <div class="col-xl-8">

                    <div class="row">
                        <div class="col-md-4">
                            <div class="card mini-stats-wid">
                                <div class="card-body">
                                    <div class="media">
                                        <div class="media-body">
                                            <p class="text-muted fw-medium mb-2">Завершених проектів</p>
                                            <h4 class="mb-0">125</h4>
                                        </div>

                                        <div class="mini-stat-icon avatar-sm align-self-center rounded-circle bg-primary">
                                                        <span class="avatar-title">
                                                            <i class="bx bx-check-circle font-size-24"></i>
                                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mini-stats-wid">
                                <div class="card-body">
                                    <div class="media">
                                        <div class="media-body">
                                            <p class="text-muted fw-medium mb-2">Проекти в роботі</p>
                                            <h4 class="mb-0">12</h4>
                                        </div>

                                        <div class="avatar-sm align-self-center mini-stat-icon rounded-circle bg-primary">
                                                        <span class="avatar-title">
                                                            <i class="bx bx-hourglass font-size-24"></i>
                                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mini-stats-wid">
                                <div class="card-body">
                                    <div class="media">
                                        <div class="media-body">
                                            <p class="text-muted fw-medium mb-2">Сума об'єктів</p>
                                            <h4 class="mb-0">$36,524</h4>
                                        </div>

                                        <div class="avatar-sm align-self-center mini-stat-icon rounded-circle bg-primary">
                                                        <span class="avatar-title">
                                                            <i class="bx bx-package font-size-24"></i>
                                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Куратор проектів</h4>
                            <div class="table-responsive">
                                <table class="table table-nowrap table-hover mb-0">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Проект</th>
                                        <th scope="col">Дата старту</th>
                                        <th scope="col">Дата завершення</th>
                                        <th scope="col">Статус</th>
                                        <th scope="col">Кошторис</th>
                                    </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

        </div> <!-- container-fluid -->
@endsection

@section('script')

@endsection
