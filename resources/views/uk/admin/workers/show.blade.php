@extends('layouts.admin')
@section('breadcrumbs')
@endsection
@section('content')

    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">{{$user->name}}</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{route('admin.workers')}}">Список працівників</a></li>
                        <li class="breadcrumb-item active">{{$user->name}}</li>
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
                                <h5 class="text-primary">IV BUD</h5>
                                <p>{{$user->name}}</p>
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
                            <div class="avatar-md profile-user-wid mb-4">
                                @if(!empty($user->avatar))
                                    <img src="{{ asset( $user->avatar)}}" alt="" class="img-thumbnail rounded-circle">
                                @else
                                    <img src="{{ asset( 'Skote/dist/assets/images/companies/img-1.png')}}" alt="" class="img-thumbnail rounded-circle">
                                @endif
                            </div>
                            <h5 class="font-size-15 text-truncate">{{$user->position->position_uk}}</h5>
                            @if($user->employed())
                            <p  id="tooltip-container"><i class="fab fa-cc-visa me-1"    data-bs-container="#tooltip-container"   data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="Працевлаштований" ></i> Visa</p>
                            @else
                            @endif
                        </div>

                        <div class="col-sm-8">
                            <div class="pt-4">

                                <div class="row">
                                    <div class="col-6">
                                        <h5 class="font-size-15"> {{$user->daily_rate}}₴</h5>
                                        <p class="text-muted mb-0">Денна ставка</p>
                                    </div>
                                    <div class="col-6">
                                        <h5 class="font-size-15">{{$workers_months_one->wage}}₴</h5>
                                        <p class="text-muted mb-0">Нараховано</p>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <a href="" class="btn btn-primary waves-effect waves-light btn-sm"  data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl">Редагувати <i class="mdi mdi-arrow-right ms-1"></i></a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Нарахування</h4>
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="text-muted">Очікувана зарплата в розмірі </p>
                            <h3>{{$workers_months_one->total}} ₴</h3>
                            <p class="text-muted"><span class="text-success me-2">{{$workers_months_one->wage}} ₴<i class="mdi mdi-arrow-up"></i> </span> Нараховано в поточному місяці</p>
                            <p class="text-muted"><span class="text-danger me-2">{{$fine}} ₴<i class="mdi mdi-arrow-down"></i> </span> Знато в поточному місяці</p>

                            <div class="mt-4">
                                <a href="" class="btn btn-primary waves-effect waves-light btn-sm"  data-bs-toggle="modal" data-bs-target="#exampleModalScrollable">Переглянути <i class="mdi mdi-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mt-4 mt-sm-0">
                                <div id="radialBar-chart" class="apex-charts"></div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <p class="text-muted mb-0">We craft digital, graphic and dimensional thinking.</p>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-4">Персональна картка</h5>

                    <div class="card bg-primary text-white visa-card mb-0">
                        <div class="card-body">
                            <div>
                                <i class="bx bxl-visa visa-pattern"></i>

                                <div class="float-end">
                                    <i class="bx bxl-visa visa-logo display-3"></i>
                                </div>

                                <div>
                                    <i class="bx bx-chip h1 text-warning"></i>
                                </div>
                            </div>

                            <div class="row mt-5">
                                <div class="col-12">
                                    <p style="font-size: 24px;">
                                        <i>{{$user->visa}}</i>
                                    </p>

                                </div>
                            </div>

                            <div class="mt-5">
                                <h5 class="text-white float-end mb-0">12/22</h5>
                                <h5 class="text-white mb-0">{{$user->name}}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <div class="card">
                <div>
                    <div class="row">
                        <div class="col-lg-9 col-sm-8">
                            <div class="p-4">
                                <p>Персональна інформація</p>

                                <div class="text-muted">
                                    <p class="mb-1"><i class="bx bx-mail-send h4 text-primary"></i> {{$user->email}}</p>
                                    <p class="mb-1"><i class="bx bx-phone-call h4 text-primary"></i> {{$user->phone}}</p>
                                    <p class="mb-1"><i class="bx bxl-visa h4 text-primary" ></i> {{$user->visa}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-4 align-self-center">
                            <div>
                                <img src="{{asset('Skote/dist/assets/images/crypto/features-img/img-1.png')}}" alt="" class="img-fluid d-block">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                                <h5 class="font-size-14 mb-0">Кількість виходів</h5>
                            </div>
                            <div class="text-muted mt-4">
                                <h4>{{$workers_months_one->number_of_days}} днів<i class="mdi mdi-chevron-up ms-1 text-success"></i></h4>
                                <div class="d-flex">
                                    <span class="badge badge-soft-success font-size-12"> + 0.2% </span> <span class="ms-2 text-truncate">Серед інших працівників</span>
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
                                <h5 class="font-size-14 mb-0">Очікувана ЗП</h5>
                            </div>
                            <div class="text-muted mt-4">
                                <h4>{{$workers_months_one->total}} ₴<i class="mdi mdi-chevron-up ms-1 text-success"></i></h4>
                                <div class="d-flex">
                                    <span class="badge badge-soft-success font-size-12"> + 0.2% </span> <span class="ms-2 text-truncate">Серед інших працівників</span>
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
                                <h5 class="font-size-14 mb-0">Залишок по ЗП</h5>
                            </div>
                            <div class="text-muted mt-4">
                                <h4>{{$workers_months_one->residual}} ₴<i class="mdi mdi-chevron-up ms-1 text-success"></i></h4>

                                <div class="d-flex">
                                    <span class="badge badge-soft-warning font-size-12"> 0% </span> <span class="ms-2 text-truncate">Вже нараховано</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="card">
                <div class="card-body">
                    <div class="d-sm-flex flex-wrap">
                        <h4 class="card-title mb-4">Заробітна плата протягом року</h4>
                        <div class="ms-auto">

                        </div>
                    </div>

                    <div id="stacked-column-chart" class="apex-charts" dir="ltr"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <div>
                                        <h5>$ 9134.39</h5>
                                        <p class="text-muted text-truncate mb-0">+ 0.0012 ( 0.2 % ) <i class="mdi mdi-arrow-up ms-1 text-success"></i></p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div>
                                        <div id="area-sparkline-chart-1" class="apex-charts"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <div>
                                        <h5>$ 245.44</h5>
                                        <p class="text-muted text-truncate mb-0">- 4.102 ( 0.1 % ) <i class="mdi mdi-arrow-down ms-1 text-danger"></i></p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div>
                                        <div id="area-sparkline-chart-2" class="apex-charts"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <div>
                                        <h5>$ 63.61</h5>
                                        <p class="text-muted text-truncate mb-0">+ 1.792 ( 0.1 % ) <i class="mdi mdi-arrow-up ms-1 text-success"></i></p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div>
                                        <div id="area-sparkline-chart-3" class="apex-charts"></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Звіт по місяцям</h4>
                    <div class="table-responsive">
                        <table class="table align-middle table-nowrap mb-0">
                            <thead class="table-light">
                            <tr>
                                <th class="align-middle">Місяць</th>
                                <th class="align-middle">Виходів</th>
                                <th class="align-middle">Денна ставка</th>
                                <th class="align-middle">Премія</th>
                                <th class="align-middle">Штрафи</th>
                                <th class="align-middle">Очікувана ЗП</th>
                                <th class="align-middle">Вже нараховано</th>
                                <th class="align-middle">Залишок</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach( $workers_months as $workers)
                            <tr>
                                <td><a href="javascript: void(0);" class="text-body fw-bold">{{$workers->months}}</a> </td>
                                <td>
                                    <span class="badge badge-pill badge-soft-dark font-size-11">{{$workers->number_of_days}}</span>
                                </td>
                                <td>
                                    {{$user->daily_rate}}₴
                                </td>
                                <td>
                                    <span class="badge badge-pill badge-soft-success font-size-11">{{$workers->premium}}</span>
                                </td>
                                <td>
                                    <span class="badge badge-pill badge-soft-danger font-size-11">{{$workers->fine}}</span>
                                </td>
                                <td>
                                    <i class="fab fa-cc-mastercard me-1"></i>{{$workers->total}}
                                </td>
                                <td>
                                    {{$workers->wage}}
                                </td>
                                <td>
                                    {{$workers->residual}}
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- end table-responsive -->
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
    </div>
    <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    <div class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <form method="POST" action="{{ route('admin.workers.update', $user) }}"  enctype="multipart/form-data" >
        @csrf
        {{method_field('PUT')}}
        <div class="modal-dialog modal-xl">
            <div class="modal-content" style="background-color: #161922!important;">
                <div class="modal-header">
                    <h5 class="modal-title" id="myExtraLargeModalLabel">Корегування профіля</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="card overflow-hidden">
                                <div class="bg-primary bg-soft">
                                    <div class="row">
                                        <div class="col-7">
                                            <div class="text-primary p-3">
                                                <h5 class="text-primary">IV BUD</h5>
                                                <p>{{$user->name}}</p>
                                            </div>
                                        </div>
                                        <div class="col-5 align-self-end">
                                            <img src="{{asset('Skote/dist/assets/images/profile-img.png')}}" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body pt-0">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="avatar-md profile-user-wid mb-4">
                                                        @if(!empty($user->avatar))
                                                            <img src="{{ asset( $user->avatar)}}" alt="" class="img-thumbnail rounded-circle">
                                                        @else
                                                            <img src="{{ asset( 'Skote/dist/assets/images/companies/img-1.png')}}" alt="" class="img-thumbnail rounded-circle">
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-sm-8">
                                                    <p class="text-muted mb-0">Змінити аватар</p>
                                                    <input type="file" class="form-control" name="avatar" id="uploadbtn">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <p class="text-muted mb-0">Імя користувача</p>
                                                <input  class="form-control" id="name" name="name"  value="{{$user->name}}"  placeholder="Імя користувача" required>
                                            </div>
                                            <p  id="tooltip-container">Посада
                                            <select id="role" class="form-control{{ $errors->has('position') ? 'is-invalid':''}}" id="position" name="position" value="{{ old('position', $user->position) }}" required>
                                                @foreach($positions as $value)
                                                   <option value="{{$value->id}}" {{ $value->id === old('position', $user->position->id) ? 'selected': '' }}>{{$value->position_uk}}</option>
                                                @endforeach
                                            </select>
                                            @if($errors->has('position'))
                                                <span class="invalid-feedback"><strong>{{$errors->first('position')}}</strong></span>
                                            @endif
                                            </p>
                                            <div class="row">
                                                <div class="col-sm-8">
                                                    <p  id="tooltip-container">Офіційне працевлаштування</p>
                                                </div>
                                                <div class="col-sm-4">
                                                    @if($user->employed())
                                                    <div class="form-check font-size-16">
                                                        <input class="form-check-input" type="checkbox"  id="employed" name="employed" checked>
                                                        <label class="form-check-label" for="transactionCheck05"></label>
                                                    </div>
                                                    @else
                                                    <div class="form-check font-size-16">
                                                        <input class="form-check-input" type="checkbox" id="employed" name="employed">
                                                        <label class="form-check-label" for="transactionCheck05"></label>
                                                    </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="row">
                                                <div class="col-12">
                                                    <p class="text-muted mb-0">Денна ставка, ₴</p>
                                                    <input  class="form-control" type="number" id="daily_rate" name="daily_rate" id="daily_rate"  value="{{ $user->daily_rate }}"  placeholder="Денна ставка">
                                                    @if($errors->has('daily_rate'))
                                                        <span class="invalid-feedback"><strong>{{$errors->first('daily_rate')}}</strong></span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <div class="card">
                                <div>
                                    <div class="row">
                                        <div class="col-lg-9 col-sm-8">
                                            <div class="p-4">
                                                <p>Персональна інформація</p>

                                                <div class="text-muted">
                                                    <div class="row">
                                                        <div class="col-sm-1">
                                                           <i class="bx bx-mail-send h4 text-primary"></i>
                                                        </div>
                                                        <div class="col-sm-11">
                                                            <input  class="form-control" id="email" name="email"  value="{{$user->email}}"  placeholder="Емейл">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-1">
                                                            <i class="bx bx-phone-call h4 text-primary"></i>
                                                        </div>
                                                        <div class="col-sm-11">
                                                            <input  class="form-control" id="phone" name="phone"  value="{{$user->phone}}"  placeholder="Телефон" required>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-1">
                                                            <i class="bx bxl-visa h4 text-primary" ></i>
                                                        </div>
                                                        <div class="col-sm-11">
                                                            <input  class="form-control" id="visa" name="visa"  value="{{$user->visa}}"  placeholder="Картка" >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-4 align-self-center">
                                            <div>
                                                <img src="{{asset('Skote/dist/assets/images/crypto/features-img/img-1.png')}}" alt="" class="img-fluid d-block">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Основні дані</h4>
                                    <div data-repeater-list="outer-group" class="outer">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <p class="text-muted mb-0">Новий пароль</p>
                                                <input  class="form-control" id="password" name="password"  value=""  placeholder="Новий пароль">
                                            </div>
                                            <div class="col-sm-6">
                                                <p class="text-muted mb-0">Роль</p>
                                                <select id="role" class="form-control{{ $errors->has('role') ? 'is-invalid':''}}" name="role" value="{{ old('role', $value) }}" required>
                                                    @foreach($role as $value)
                                                        <option value="{{$value}}" {{ $value === old('role', $user->role) ? 'selected': '' }}>{{$value}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <br>
                                        <div data-repeater-item class="outer">
                                            <button type="submit" class="btn btn-primary">Зберегти</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card body -->
            </div>
        </div>
    </form>
    </div><!-- /.modal -->
    <!-- Scrollable modal -->
    <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Нарахування</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body"  style="background-color: #161922!important;">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="">
                                <div class="table-responsive">
                                    <table class="table project-list-table table-nowrap align-middle table-borderless">
                                        <thead class="table-light">
                                        <tr>
                                            <th scope="col">Тип</th>
                                            <th scope="col">Дата створення</th>
                                            <th scope="col">Форма</th>
                                            <th scope="col">Сума</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach ($wages as $wage)
                                            <tr>
                                                <td>
                                                    @if($wage->income_expense == 1)
                                                        <span class="badge badge-pill badge-soft-success font-size-11">Нарахування</span>
                                                        @if($wage->type == 1)
                                                            <span class="badge badge-pill badge-soft-warning font-size-11">Аванс</span>
                                                        @elseif($wage->type == 2)
                                                            <span class="badge badge-pill badge-soft-warning font-size-11">Зарплата</span>
                                                        @else
                                                            <span class="badge badge-pill badge-soft-success font-size-11">Премія</span>
                                                        @endif
                                                    @else
                                                        <span class="badge badge-pill badge-soft-danger font-size-11">Утримання</span>
                                                        <span class="badge badge-pill badge-soft-danger font-size-11">Штраф</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    {{$wage->created_at}}
                                                </td>
                                                <td>
                                                    @if($wage->type_transaction == 1)
                                                        <i class="fas fa-money-bill-alt me-1"></i> Готівка
                                                    @else
                                                        <i class="fab fa-cc-visa me-1"></i> Картка
                                                    @endif
                                                </td>
                                                <td>
                                                    <span class="badge bg-gradient font-size-10">{{$wage->sum}}</span>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Закрити</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection
@section('script')
    <!-- apexcharts -->
    <script src="{{asset('Skote/dist/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

    <!-- dashboard init -->
    @if($workers_months->count() !== 0)
    <script>
        setTimeout(function(){$("#subscribeModal").modal("show")},2e3);var options={chart:{height:360,type:"bar",stacked:!0,toolbar:{show:!1},zoom:{enabled:!0}},plotOptions:{bar:{horizontal:!1,columnWidth:"15%",endingShape:"rounded"}},dataLabels:{enabled:!1},
                series:[
                    {
                        name:"Заробітна плата",data:[
                            @foreach($workers_months as $months)
                            {{$months->total}},
                            @endforeach
                        ]
                    },
                    {
                        name:"Премія",data:[
                            @foreach($workers_months as $months)
                            {{$months->premium}},
                            @endforeach
                        ]
                    },
                    {
                        name:"Штрафи",data:[
                            @foreach($workers_months as $months)
                            {{$months->fine}},
                            @endforeach
                        ]
                    }
                ],xaxis:{categories:["01","02","03","04","05","06","07","08","09","10","11","12"]},
                colors:["#556ee6","#34c38f","#f46a6a"],legend:{position:"bottom"},fill:{opacity:1}},
            chart=new ApexCharts(document.querySelector("#stacked-column-chart"),options);chart.render();options={chart:{height:200,type:"radialBar",offsetY:-10},plotOptions:{radialBar:{startAngle:-135,endAngle:135,dataLabels:{name:{fontSize:"13px",color:void 0,offsetY:60},value:{offsetY:22,fontSize:"16px",color:void 0,formatter:function(e){return e+"%"}}}}},colors:["#556ee6"],fill:{type:"gradient",gradient:{shade:"dark",shadeIntensity:.15,inverseColors:!1,opacityFrom:1,opacityTo:1,stops:[0,50,65,91]}},stroke:{dashArray:4},
            series:[
                {{round(100/$countDays*$day, 0)}}
            ],labels:["Відпрацьовано"]};(chart=new ApexCharts(document.querySelector("#radialBar-chart"),options)).render();
    </script>
    @else
        <script>
            setTimeout(function(){$("#subscribeModal").modal("show")},2e3);var options={chart:{height:360,type:"bar",stacked:!0,toolbar:{show:!1},zoom:{enabled:!0}},plotOptions:{bar:{horizontal:!1,columnWidth:"15%",endingShape:"rounded"}},dataLabels:{enabled:!1},
                    series:[
                        {
                            name:"Заробітна плата",data:[
                                0,0,0,0,0,0,0,0,0,0,0,0
                            ]
                        },
                        {
                            name:"Премія",data:[
                                0,0,0,0,0,0,0,0,0,0,0,0
                            ]
                        },
                        {
                            name:"Штрафи",data:[
                                0,0,0,0,0,0,0,0,0,0,0,0
                            ]
                        }
                    ],xaxis:{categories:["01","02","03","04","05","06","07","08","09","10","11","12"]},
                    colors:["#556ee6","#34c38f","#f46a6a"],legend:{position:"bottom"},fill:{opacity:1}},
                chart=new ApexCharts(document.querySelector("#stacked-column-chart"),options);chart.render();options={chart:{height:200,type:"radialBar",offsetY:-10},plotOptions:{radialBar:{startAngle:-135,endAngle:135,dataLabels:{name:{fontSize:"13px",color:void 0,offsetY:60},value:{offsetY:22,fontSize:"16px",color:void 0,formatter:function(e){return e+"%"}}}}},colors:["#556ee6"],fill:{type:"gradient",gradient:{shade:"dark",shadeIntensity:.15,inverseColors:!1,opacityFrom:1,opacityTo:1,stops:[0,50,65,91]}},stroke:{dashArray:4},
                series:[
                    {{round(100/$countDays*$day, 0)}}
                ],labels:["Відпрацьовано"]};(chart=new ApexCharts(document.querySelector("#radialBar-chart"),options)).render();
        </script>
        @endif
{{--    <script src="{{asset('Skote/dist/assets/js/pages/dashboard.init.js')}}"></script>--}}
    <script src="{{asset('Skote/dist/assets/js/pages/crypto-dashboard.init.js')}}"></script>
@endsection
