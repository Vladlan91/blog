@extends('layouts.admin')
@section('breadcrumbs')
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">{{$company->name}}</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{route('admin.company.show')}}">Список</a></li>
                        <li class="breadcrumb-item active">{{$company->name}}</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="media">
                                <div class="me-3">
                                    <img src="{{ asset( $company->logo)}}" alt="" class="avatar-md rounded-circle img-thumbnail">
                                </div>
                                <div class="media-body align-self-center">
                                    <div class="text-muted">
                                        <p class="mb-2">Все про компанію</p>
                                        <h5 class="mb-1">{{$company->name}}</h5>
                                        <p class="mb-0">{{Str::words($company->description, 8)}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 align-self-center">
                            <div class="text-lg-center mt-4 mt-lg-0">
                                <div class="row">
                                    <div class="col-4">
                                        <div>
                                            <p class="text-muted text-truncate mb-2">Загальна сума</p>
                                            <h5 class="mb-0">248 123 грн.</h5>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div>
                                            <p class="text-muted text-truncate mb-2">Проекти</p>
                                            <h5 class="mb-0">40 шт.</h5>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div>
                                            <p class="text-muted text-truncate mb-2">Рекомендації</p>
                                            <h5 class="mb-0">2 шт.</h5>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 align-self-center">
                            <div class="card-footer bg-transparent border-top">
                                <div class="text-center">
                                    <a href="#" class="btn btn-outline-light me-2 w-md">Додати проект</a>
                                    <a href="#" class="btn btn-primary me-2 w-md">Додати працівника</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-xl-4">
            <div class="card bg-primary bg-soft">
                <div>
                    <div class="row">
                        <div class="col-7">
                            <div class="text-primary p-3">
                                <h5 class="text-primary">Працівники !</h5>
                                <p>Команда {{$company->name}}</p>

                                <td>
                                    <div class="avatar-group">
                                        @foreach($company->workers()->orderBy('id')->get() as $user )
                                            <div class="avatar-group-item">
                                                <a href="{{route('admin.client.show', $user)}}" class="d-inline-block">
                                                    <img src="{{asset($user->avatar)}}" alt="" class="rounded-circle avatar-xs">
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                </td>
                            </div>
                        </div>
                        <div class="col-5 align-self-end">
                            <img src="{{asset('Skote/dist/assets/images/profile-img.png')}}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <div class="row">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title rounded-circle bg-primary bg-soft text-primary font-size-18">
                                        <i class="bx bx-copy-alt"></i>
                                    </span>
                                </div>
                                <h5 class="font-size-14 mb-0">Прибутковість, %</h5>
                            </div>
                            <div class="text-muted mt-4">
                                <h4>26 % <i class="mdi mdi-chevron-up ms-1 text-success"></i></h4>
                                <div class="d-flex">
                                    <span class="badge badge-soft-success font-size-12"> + 0.2% </span> <span class="ms-2 text-truncate">від середнього</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title rounded-circle bg-primary bg-soft text-primary font-size-18">
                                        <i class="bx bx-archive-in"></i>
                                    </span>
                                </div>
                                <h5 class="font-size-14 mb-0">Прибутковість, грн.</h5>
                            </div>
                            <div class="text-muted mt-4">
                                <h4> 24 300 грн.<i class="mdi mdi-chevron-up ms-1 text-success"></i></h4>
                                <div class="d-flex">
                                    <span class="badge badge-soft-success font-size-12"> + 0.2% </span> <span class="ms-2 text-truncate">від середнього</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <div class="avatar-xs me-3">
                                                        <span class="avatar-title rounded-circle bg-primary bg-soft text-primary font-size-18">
                                                            <i class="bx bx-purchase-tag-alt"></i>
                                                        </span>
                                </div>
                                <h5 class="font-size-14 mb-0">Завершених проектів</h5>
                            </div>
                            <div class="text-muted mt-4">
                                <h4>3 шт. <i class="mdi mdi-chevron-up ms-1 text-success"></i></h4>

                                <div class="d-flex">
                                    <span class="badge badge-soft-warning font-size-12"> 3% </span> <span class="ms-2 text-truncate">від всіх проектів</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="">
                <div class="table-responsive">
                    <table class="table project-list-table table-nowrap align-middle table-borderless">
                        <thead>
                        <tr>
                            <th scope="col" style="width: 100px">#</th>
                            <th scope="col">Куратор від замовника</th>
                            <th scope="col">Куратор від IV BUD</th>
                            <th scope="col">Статус</th>
                            <th scope="col">Виконавці</th>
                            <th scope="col">Технолог</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td><img src="assets/images/companies/img-1.png" alt="" class="avatar-sm"></td>
                            <td>
                                <h5 class="text-truncate font-size-14"><a href="#" class="text-dark">New admin Design</a></h5>
                                <p class="text-muted mb-0">It will be as simple as Occidental</p>
                            </td>
                                <td><img src="assets/images/companies/img-1.png" alt="" class="avatar-sm"></td>
                            <td><span class="badge bg-success">Completed</span></td>
                            <td>
                                <div class="avatar-group">
                                    <div class="avatar-group-item">
                                        <a href="javascript: void(0);" class="d-inline-block">
                                            <img src="assets/images/users/avatar-4.jpg" alt="" class="rounded-circle avatar-xs">
                                        </a>
                                    </div>
                                    <div class="avatar-group-item">
                                        <a href="javascript: void(0);" class="d-inline-block">
                                            <img src="assets/images/users/avatar-5.jpg" alt="" class="rounded-circle avatar-xs">
                                        </a>
                                    </div>
                                    <div class="avatar-group-item">
                                        <a href="javascript: void(0);" class="d-inline-block">
                                            <div class="avatar-xs">
                                                                        <span class="avatar-title rounded-circle bg-success text-white font-size-16">
                                                                            A
                                                                        </span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="avatar-group-item">
                                        <a href="javascript: void(0);" class="d-inline-block">
                                            <img src="assets/images/users/avatar-2.jpg" alt="" class="rounded-circle avatar-xs">
                                        </a>
                                    </div>
                                </div>
                            </td>
                                <td><img src="assets/images/companies/img-1.png" alt="" class="avatar-sm"></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <!-- apexcharts -->
    <script src="{{asset('Skote/dist/assets/libs/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{asset('Skote/dist/assets/js/pages/saas-dashboard.init.js')}}"></script>
    <script src="{{asset('Skote/dist/assets/js/app.js')}}"></script>
{{--    <script src="{{asset('Skote/dist/assets/libs/bootstrap-editable/js/index.js')}}"></script>--}}
{{--    <script src="{{asset('Skote/dist/assets/libs/moment/min/moment.min.js')}}"></script>--}}
{{--    <script src="{{asset('Skote/dist/assets/js/pages/form-xeditable.init.js')}}"></script>--}}
@endsection
