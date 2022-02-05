@extends('layouts.admin')
@section('breadcrumbs')
@endsection
@section('content')

    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Нарахування</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Нарахування персоналу IV BUD</a></li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="?" method="GET">
                        <div class="row mb-2">
                            <div class="col-sm-3">
                                <div class="search-box me-2 mb-2 ">
                                    <div class="position-relative">
                                        <select class="form-control" name="type" id="type">
                                            <option value="">Тип зайнятості :</option>
                                            <option value="1" {{ request('type') == 1 ? 'selected': '' }}>Основна діяльність </option>
                                            <option value="2" {{ request('type') == 2 ? 'selected': '' }}>Додаткові роботи</option>
                                            <option value="3" {{ request('type') == 3 ? 'selected': '' }}>Усунення дефектів</option>
                                            <option value="4" {{ request('type') == 4 ? 'selected': '' }}>Інше</option>
                                        </select>
                                        <i class="bx bx-search-alt search-icon"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="search-box me-2 mb-2 ">
                                    <div class="position-relative">
                                        <i class="bx bx-data search-icon"></i>
                                        <select class="form-control" name="months" id="months">
                                            <option value="">Оберіть місяць</option>
                                            <option value="1" {{ request('months') == 1 ? 'selected': '' }}>Січень</option>
                                            <option value="2" {{ request('months') == 2 ? 'selected': '' }}>Лютий</option>
                                            <option value="3" {{ request('months') == 3 ? 'selected': '' }}>Березень</option>
                                            <option value="4" {{ request('months') == 4 ? 'selected': '' }}>Квітень</option>
                                            <option value="5" {{ request('months') == 5 ? 'selected': '' }}>Травень</option>
                                            <option value="6" {{ request('months') == 6 ? 'selected': '' }}>Червень</option>
                                            <option value="7" {{ request('months') == 7 ? 'selected': '' }}>Липень</option>
                                            <option value="8" {{ request('months') == 8 ? 'selected': '' }}>Серпень</option>
                                            <option value="9" {{ request('months') == 9 ? 'selected': '' }}>Вересень</option>
                                            <option value="10" {{ request('months') == 10 ? 'selected': '' }}>Жовтень</option>
                                            <option value="11" {{ request('months') == 11 ? 'selected': '' }}>Листопад</option>
                                            <option value="12" {{ request('months') == 12 ? 'selected': '' }}>Грудень</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="search-box me-2 mb-2 ">
                                    <div class="position-relative">
                                        <i class="bx bx-user search-icon"></i>
                                        <select class="form-control" name="user" id="user">
                                            <option value="">Пошук за працівником</option>
                                            @foreach($users as $user)
                                                <option value="{{ $user->id }}" {{ $user->id == request('user') ? 'selected' : '' }}>{{$user->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-1">
                                <div class="text-sm-end">
                                    <button type="submit" class="btn btn-outline-info btn-rounded waves-effect waves-light mb-2 me-2"><i class="bx bx-search-alt search-icon"></i></button>
                                </div>
                            </div><!-- end col-->
                            <div class="col-sm-2">
                                <div class="text-sm-end">
                                    <button type="button" class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2" data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl"><i class="mdi mdi-plus me-1"></i>Створити</button>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="">
                    <div class="table-responsive">
                        <table class="table project-list-table table-nowrap align-middle table-borderless">
                            <thead>
                            <tr>
                                <th scope="col" style="width: 70px;">#</th>
                                <th scope="col">Проект</th>
                                <th scope="col">Місяць</th>
                                <th scope="col">Кількість днів</th>
                                <th scope="col">Тип зайнятості</th>
                                <th scope="col">Аватар</th>
                                <th scope="col">Ім'я</th>
                                <th scope="col">Редагувати</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($timesheets as $timesheet)
                            <tr>
                                @if($timesheet->hasPortfolio())
                                <td><img src="{{asset('Skote/dist/assets/images/companies/img-3.png')}}" alt="" class="avatar-sm"></td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="#" class="text-dark">{{$timesheet->portfolio->name}}</a></h5>
                                    <p class="text-muted mb-0">{{$timesheet->portfolio->region->town}}</p>
                                </td>
                                @else
                                <td><img src="{{asset('Skote/dist/assets/images/companies/img-1.png')}}" alt="" class="avatar-sm"></td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="#" class="text-dark">Проект не визначено</a></h5>
                                    <p class="text-muted mb-0">За даним видом робіт не закріплено проект</p>
                                </td>
                                @endif
                                <td>
                                    {{$timesheet->months}}
                                </td>
                                <td>
                                    <span class="badge bg-gradient font-size-11">{{$timesheet->count_day}}</span>
                                </td>
                                <td>
                                    @if($timesheet->type == 1)
                                        <span class="badge bg-success font-size-11">Основна діяльність</span>
                                    @elseif($timesheet->type == 2)
                                        <span class="badge bg-warning font-size-11">Додаткові роботи</span>
                                    @elseif($timesheet->type == 3)
                                        <span class="badge bg-danger font-size-11">Усунення дефектів</span>
                                    @else
                                        <span class="badge bg-info font-size-11">Інше</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="avatar-xs">
                                        <span class="avatar-title rounded-circle" style="text-transform: uppercase; text-decoration:white;">
                                            @if(!empty($timesheet->user->avatar))
                                                <img src="{{asset($timesheet->user->avatar)}}" alt="" class="avatar-sm bg-gray"  style="border-radius: 50%">
                                            @else
                                                <div class="avatar-xs">
                                            <span class="avatar-title rounded-circle" style="text-transform: uppercase; text-decoration:white;">
                                                {{ Illuminate\Support\Str::substr($timesheet->user->name, 0, 1) }}
                                            </span>
                                            </div>
                                            @endif
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="font-size-14 mb-1"><a href="{{route('admin.workers.show', $timesheet->user)}}" class="text-dark">{{$timesheet->user->name}}</a></h5>
                                    <p class="text-muted mb-0">{{$timesheet->user->position->position_uk}}</p>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-horizontal font-size-18"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item"  data-bs-toggle="modal" data-bs-target="#myModal{{$timesheet->id}}" >Корегувати</a>
                                            <a class="dropdown-item" href="{{route('admin.workers.timesheet.destroy', $timesheet)}}">Видалити</a>
                                        </div>
                                    </div>
                                </td>
                                    <div id="myModal{{$timesheet->id}}" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title mt-0" id="myModalLabel">Корегування транзакції</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <ul class="nav nav-pills bg-light rounded" role="tablist">
                                                                <li class="nav-item">
                                                                    <a class="nav-link {{$timesheet->type != 3  ? 'active': '' }}" data-bs-toggle="tab" href="#buy-tab{{$timesheet->id}}" role="tab">Основна діяльність</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link {{$timesheet->type == 3 ? 'active': '' }}" data-bs-toggle="tab" href="#sell-tab{{$timesheet->id}}" role="tab">Усунення дефектів</a>
                                                                </li>
                                                            </ul>

                                                            <div class="tab-content mt-4" style="min-height: 340px;">
                                                                <form method="POST" action="{{ route('admin.workers.timesheet.edit', [$timesheet, 1]) }}">
                                                                    @csrf
                                                                    {{method_field('PUT')}}
                                                                    <div class="tab-pane {{$timesheet->type != 3  ? 'active': '' }}" id="buy-tab{{$timesheet->id}}" role="tabpanel">
                                                                        <div class="float-end ms-2">
                                                                            <h5 class="font-size-14"><i class="bx bx-wallet text-primary font-size-16 align-middle me-1"></i> $4235.23</h5>
                                                                        </div>
                                                                        <h5 class="font-size-14 mb-4">Баланс компанії:</h5>

                                                                        <div>

                                                                            <div class="form-group mb-3">
                                                                                <label>Тип зайнятості :</label>
                                                                                <select class="form-select" name="type">
                                                                                    <option>Обрати тип зайнятості</option>
                                                                                    <option value="1" {{ $timesheet->type == 1 ? 'selected': '' }}>Основна діяльність</option>
                                                                                    <option value="2" {{ $timesheet->type == 2 ? 'selected': '' }}>Додаткові роботи</option>
                                                                                    <option value="4" {{ $timesheet->type == 4 ? 'selected': '' }}>Інше</option>
                                                                                </select>
                                                                            </div>

                                                                            <div>
                                                                                <label>Оберіть працівника :</label>
                                                                                <div class="input-group mb-3">
                                                                                    <label class="input-group-text">Працівник</label>
                                                                                    <select id="user_id" class="form-control{{ $errors->has('user_id') ? 'is-invalid':''}}" name="user_id"  required>
                                                                                        <option selected>Оберіть працівника</option>
                                                                                        @foreach($users as $user)
                                                                                            <option value="{{$user->id}}" {{ $timesheet->user_id == $user->id ? 'selected': '' }}>{{$user->name}}</option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>

                                                                                <label>Оберіть замовлення :</label>
                                                                                <div class="input-group mb-3">
                                                                                    <label class="input-group-text">Проект</label>
                                                                                    <select id="portfolio_id" class="form-control{{ $errors->has('user_id') ? 'is-invalid':''}}" name="portfolio_id">
                                                                                        <option selected>Оберіть замовлення</option>
                                                                                        @foreach($portfolios as $portfolio)
                                                                                            <option value="{{$portfolio->id}}" {{ $timesheet->portfolio_id == $portfolio->id ? 'selected': '' }}>{{$portfolio->name}}</option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>

                                                                                <div class="input-group mb-3">
                                                                                    <label class="input-group-text">Кількість, дні.</label>

                                                                                    <input type="text" class="form-control text-sm-end" name="count_day" id="count_day"  value="{{$timesheet->count_day}}" required>

                                                                                    <label class="input-group-text"></label>
                                                                                </div>

                                                                                <div class="input-group mb-3">
                                                                                    <label class="input-group-text">Місяць :</label>
                                                                                    <select id="months" class="form-control{{ $errors->has('months') ? 'is-invalid':''}}" name="months"  required>
                                                                                        <option selected>Оберіть місяць</option>
                                                                                        <option value="1" {{ $timesheet->months == 1 ? 'selected': '' }}>Січень</option>
                                                                                        <option value="2" {{ $timesheet->months == 2 ? 'selected': '' }}>Лютий</option>
                                                                                        <option value="3" {{ $timesheet->months == 3 ? 'selected': '' }}>Березень</option>
                                                                                        <option value="4" {{ $timesheet->months == 4 ? 'selected': '' }}>Квітень</option>
                                                                                        <option value="5" {{ $timesheet->months == 5 ? 'selected': '' }}>Травень</option>
                                                                                        <option value="6" {{ $timesheet->months == 6 ? 'selected': '' }}>Червень</option>
                                                                                        <option value="7" {{ $timesheet->months == 7 ? 'selected': '' }}>Липень</option>
                                                                                        <option value="8" {{ $timesheet->months == 8 ? 'selected': '' }}>Серпень</option>
                                                                                        <option value="9" {{ $timesheet->months == 9 ? 'selected': '' }}>Вересень</option>
                                                                                        <option value="10" {{ $timesheet->months == 10 ? 'selected': '' }}>Жовтень</option>
                                                                                        <option value="11" {{ $timesheet->months == 11 ? 'selected': '' }}>Листопад</option>
                                                                                        <option value="12" {{ $timesheet->months == 12 ? 'selected': '' }}>Грудень</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>

                                                                            <div class="text-center">
                                                                                <button type="submit" class="btn btn-success w-md">Створити</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                                <form method="POST" action="{{ route('admin.workers.timesheet.edit', [$timesheet, 3]) }}">
                                                                    @csrf
                                                                    {{method_field('PUT')}}
                                                                    <div class="tab-pane {{$timesheet->type == 3 ? 'active': '' }}" id="sell-tab{{$timesheet->id}}" role="tabpanel">
                                                                        <div>

                                                                            <div class="form-group mb-3">
                                                                                <label>Причина депреміювання :</label>
                                                                                <textarea type="text"  name="reason_fine" rows="3" class="form-control">{{$timesheet->reason_fine}}</textarea>
                                                                            </div>

                                                                            <label>Оберіть замовлення :</label>
                                                                            <div class="input-group mb-3">
                                                                                <label class="input-group-text">Проект</label>
                                                                                <select id="portfolio_id" class="form-control{{ $errors->has('user_id') ? 'is-invalid':''}}" name="portfolio_id">
                                                                                    <option selected>Оберіть замовлення</option>
                                                                                    @foreach($portfolios as $portfolio)
                                                                                        <option value="{{$portfolio->id}}" {{ $timesheet->portfolio_id == $portfolio->id ? 'selected': '' }}>{{$portfolio->name}}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>

                                                                            <div>
                                                                                <label>Оберіть працівника :</label>
                                                                                <div class="input-group mb-3">
                                                                                    <label class="input-group-text">Працівник</label>

                                                                                    <select id="user_id" class="form-control{{ $errors->has('user_id') ? 'is-invalid':''}}" name="user_id"  required>
                                                                                        <option selected>Оберіть працівника</option>
                                                                                        @foreach($users as $user)
                                                                                            <option value="{{$user->id}}" {{ $timesheet->user_id == $user->id ? 'selected': '' }}>{{$user->name}}</option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                    <input type="text" class="form-control">
                                                                                </div>

                                                                                <div class="input-group mb-3">

                                                                                    <label class="input-group-text">Кількість, днів.</label>

                                                                                    <input type="text" class="form-control text-sm-end" name="count_day" id="count_day" value="{{$timesheet->count_day}}" required>

                                                                                    <label class="input-group-text"></label>
                                                                                </div>

                                                                                <div class="input-group mb-3">
                                                                                    <label class="input-group-text">Місяць :</label>
                                                                                    <select id="months" class="form-control{{ $errors->has('user_id') ? 'is-invalid':''}}" name="months"  required>
                                                                                        <option selected>Оберіть місяць</option>
                                                                                        <option value="1" {{ $timesheet->months == 1 ? 'selected': '' }}>Січень</option>
                                                                                        <option value="2" {{ $timesheet->months == 2 ? 'selected': '' }}>Лютий</option>
                                                                                        <option value="3" {{ $timesheet->months == 3 ? 'selected': '' }}>Березень</option>
                                                                                        <option value="4" {{ $timesheet->months == 4 ? 'selected': '' }}>Квітень</option>
                                                                                        <option value="5" {{ $timesheet->months == 5 ? 'selected': '' }}>Травень</option>
                                                                                        <option value="6" {{ $timesheet->months == 6 ? 'selected': '' }}>Червень</option>
                                                                                        <option value="7" {{ $timesheet->months == 7 ? 'selected': '' }}>Липень</option>
                                                                                        <option value="8" {{ $timesheet->months == 8 ? 'selected': '' }}>Серпень</option>
                                                                                        <option value="9" {{ $timesheet->months == 9 ? 'selected': '' }}>Вересень</option>
                                                                                        <option value="10" {{ $timesheet->months == 10 ? 'selected': '' }}>Жовтень</option>
                                                                                        <option value="11" {{ $timesheet->months == 11 ? 'selected': '' }}>Листопад</option>
                                                                                        <option value="12" {{ $timesheet->months == 12 ? 'selected': '' }}>Грудень</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>

                                                                            <div class="text-center">
                                                                                <button type="submit" class="btn btn-danger w-md">Створити</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-12">
                <div class="text-center my-3">
                    <a href="javascript:void(0);" class="text-success"><i class="bx bx-loader bx-spin font-size-18 align-middle mr-2"></i> Load more </a>
                </div>
            </div> <!-- end col-->
        </div>
        <!-- end row -->
        <div class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content" style="background-color: #161922!important;">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myExtraLargeModalLabel">Створити нарахування</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="float-end">
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-wallet me-1"></i> <span class="d-none d-sm-inline-block">Баланс компанії <i class="mdi mdi-chevron-down"></i></span></button>
                                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-md">
                                                    <div class="dropdown-item-text">
                                                        <div>
                                                            <p class="text-muted mb-2">Загальний баланс</p>
                                                            <h5 class="mb-0">$ 9148.23</h5>
                                                        </div>
                                                    </div>

                                                    <div class="dropdown-divider"></div>

                                                    <a class="dropdown-item" href="#">
                                                        Готівка: <span class="float-end">1.02356</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        Безготівка : <span class="float-end">0.04121</span>
                                                    </a>

                                                    <div class="dropdown-divider"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <h4 class="card-title mb-4">Заробітній фонд</h4>
                                        <div class="crypto-buy-sell-nav">
                                            <ul class="nav nav-tabs nav-tabs-custom" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-bs-toggle="tab" href="#buy" role="tab">
                                                        Нарахування
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#sell" role="tab">
                                                        Утримання
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="tab-content crypto-buy-sell-nav-content p-4">
                                                <div class="tab-pane active" id="buy" role="tabpanel">
                                                    <form method="POST" action="{{ route('admin.workers.timesheet.create', 1) }}"  enctype="multipart/form-data" >
                                                        @csrf
                                                        {{method_field('PUT')}}
                                                        <div class="mb-2">
                                                            <label>Тип зайнятості :</label>
                                                            <div class="row">
                                                                <div class="col-xl-3 col-sm-4">
                                                                    <div class="mb-3">
                                                                        <label class="card-radio-label mb-2">
                                                                            <input type="radio"  value="1" name="type" id="buycurrencyoption1" class="card-radio-input" checked>

                                                                            <div class="card-radio">
                                                                                <div>
                                                                                    <i class="mdi mdi-angularjs font-size-24 text-warning align-middle me-2"></i>
                                                                                    <span>Основна діяльність</span>
                                                                                </div>
                                                                            </div>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-3 col-sm-4">
                                                                    <div class="mb-3">
                                                                        <label class="card-radio-label mb-2">
                                                                            <input type="radio" value="2"  name="type" id="buycurrencyoption2"  class="card-radio-input">

                                                                            <div class="card-radio">
                                                                                <div>
                                                                                    <i class="mdi mdi-timeline-check font-size-24 text-primary align-middle me-2"></i>
                                                                                    <span>Додаткові роботи</span>
                                                                                </div>
                                                                            </div>
                                                                        </label>
                                                                    </div>
                                                                </div>

                                                                <div class="col-xl-3 col-sm-4">
                                                                    <div class="mb-3">
                                                                        <label class="card-radio-label mb-2">
                                                                            <input type="radio"   value="4"  name="type"  id="buycurrencyoption3" class="card-radio-input">

                                                                            <div class="card-radio">
                                                                                <div>
                                                                                    <i class="mdi mdi-head-heart-outline font-size-24 text-info align-middle me-2"></i>
                                                                                    <span>Інше</span>
                                                                                </div>
                                                                            </div>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label>Вкажіть параметри :</label>

                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <div class="input-group mb-2 ">
                                                                        <span class="input-group-text">Проект</span>
                                                                        <select id="portfolio_id" class="form-control{{ $errors->has('user_id') ? 'is-invalid':''}}" name="portfolio_id">
                                                                            <option value="">Оберіть замовлення</option>
                                                                            @foreach($portfolios as $portfolio)
                                                                                <option value="{{$portfolio->id}}">{{$portfolio->name}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="input-group mb-2 currency-value">
                                                                        <span class="input-group-text">Працівник</span>
                                                                        <select id="user_id" class="form-control{{ $errors->has('user_id') ? 'is-invalid':''}}" name="user_id"  required>
                                                                            <option value="">Оберіть працівника</option>
                                                                            @foreach($users as $user)
                                                                                <option value="{{$user->id}}" >{{$user->name}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="input-group mb-2">
                                                                        <input type="text" class="form-control text-sm-end" name="count_day" id="count_day" required>

                                                                        <span class="input-group-text">Кількість, днів.</span>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label>Місяць:</label>
                                                            <select id="months" class="form-control{{ $errors->has('user_id') ? 'is-invalid':''}}" name="months"  required>
                                                                <option selected>Оберіть місяць</option>
                                                                <option value="1" {{ $data === 1 ? 'selected': '' }}>Січень</option>
                                                                <option value="2" {{ $data === 2 ? 'selected': '' }}>Лютий</option>
                                                                <option value="3" {{ $data === 3 ? 'selected': '' }}>Березень</option>
                                                                <option value="4" {{ $data === 4 ? 'selected': '' }}>Квітень</option>
                                                                <option value="5" {{ $data === 5 ? 'selected': '' }}>Травень</option>
                                                                <option value="6" {{ $data === 6 ? 'selected': '' }}>Червень</option>
                                                                <option value="7" {{ $data === 7 ? 'selected': '' }}>Липень</option>
                                                                <option value="8" {{ $data === 8 ? 'selected': '' }}>Серпень</option>
                                                                <option value="9" {{ $data === 9 ? 'selected': '' }}>Вересень</option>
                                                                <option value="10" {{ $data === 10 ? 'selected': '' }}>Жовтень</option>
                                                                <option value="11" {{ $data === 11 ? 'selected': '' }}>Листопад</option>
                                                                <option value="12" {{ $data === 12 ? 'selected': '' }}>Грудень</option>
                                                            </select>
                                                        </div>
                                                        <div class="text-center mt-4">
                                                            <button type="submit" class="btn btn-success">Створити</button>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="tab-pane" id="sell" role="tabpanel">
                                                    <form method="POST" action="{{ route('admin.workers.timesheet.create', 3) }}"  enctype="multipart/form-data" >
                                                        @csrf
                                                        {{method_field('PUT')}}
                                                        <div class="mb-3">
                                                            <label>Причина депреміювання :</label>
                                                            <textarea type="text"  name="reason_fine" rows="3" class="form-control"></textarea>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label>Вкажіть параметри :</label>

                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <div class="input-group mb-2 ">
                                                                        <span class="input-group-text">Проект</span>
                                                                        <select id="portfolio_id" class="form-control{{ $errors->has('user_id') ? 'is-invalid':''}}" name="portfolio_id">
                                                                            <option value="">Оберіть замовлення</option>
                                                                            @foreach($portfolios as $portfolio)
                                                                                <option value="{{$portfolio->id}}">{{$portfolio->name}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="input-group mb-2 currency-value">
                                                                        <span class="input-group-text">Працівник</span>
                                                                        <select id="user_id" class="form-control{{ $errors->has('user_id') ? 'is-invalid':''}}" name="user_id"  required>
                                                                            <option value="">Оберіть працівника</option>
                                                                            @foreach($users as $user)
                                                                                <option value="{{$user->id}}" >{{$user->name}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="input-group mb-2">
                                                                        <input type="text" class="form-control text-sm-end" name="count_day" id="count_day" required>

                                                                        <span class="input-group-text">Кількість, днів.</span>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label>Місяць:</label>
                                                            <select id="months" class="form-control{{ $errors->has('user_id') ? 'is-invalid':''}}" name="months"  required>
                                                                <option selected>Оберіть місяць</option>
                                                                <option value="1" {{ $data === 1 ? 'selected': '' }}>Січень</option>
                                                                <option value="2" {{ $data === 2 ? 'selected': '' }}>Лютий</option>
                                                                <option value="3" {{ $data === 3 ? 'selected': '' }}>Березень</option>
                                                                <option value="4" {{ $data === 4 ? 'selected': '' }}>Квітень</option>
                                                                <option value="5" {{ $data === 5 ? 'selected': '' }}>Травень</option>
                                                                <option value="6" {{ $data === 6 ? 'selected': '' }}>Червень</option>
                                                                <option value="7" {{ $data === 7 ? 'selected': '' }}>Липень</option>
                                                                <option value="8" {{ $data === 8 ? 'selected': '' }}>Серпень</option>
                                                                <option value="9" {{ $data === 9 ? 'selected': '' }}>Вересень</option>
                                                                <option value="10" {{ $data === 10 ? 'selected': '' }}>Жовтень</option>
                                                                <option value="11" {{ $data === 11 ? 'selected': '' }}>Листопад</option>
                                                                <option value="12" {{ $data === 12 ? 'selected': '' }}>Грудень</option>
                                                            </select>
                                                        </div>
                                                        <div class="text-center mt-4">
                                                            <button type="submit" class="btn btn-danger">Створити</button>
                                                        </div>
                                                    </form>
                                                </div>
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
        </div>
    </div>
@endsection
