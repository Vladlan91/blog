@extends('layouts.admin')
@section('breadcrumbs')
@endsection
@section('content')
    <div class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
        <form method="POST" action="{{ route('admin.workers.store') }}"  enctype="multipart/form-data" >
            @csrf
            {{method_field('PUT')}}
            <div class="modal-dialog modal-xl">
                <div class="modal-content" style="background-color: #161922!important;">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myExtraLargeModalLabel">Створення користувача</h5>
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
                                                    <p></p>
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
                                                                <img src="{{ asset( 'Skote/dist/assets/images/companies/img-1.png')}}" alt="" class="img-thumbnail rounded-circle">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <p class="text-muted mb-0">Змінити аватар</p>
                                                        <input type="file" class="form-control" name="avatar" id="uploadbtn">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <p class="text-muted mb-0">Імя користувача</p>
                                                    <input  class="form-control" id="name" name="name"  value=""  placeholder="Імя користувача" required>
                                                </div>
                                                <p  id="tooltip-container">Посада
                                                    <select id="role" class="form-control{{ $errors->has('position') ? 'is-invalid':''}}" id="position" name="position" value="" required>
                                                        @foreach($positions as $value)
                                                            <option value="{{$value->id}}" {{ $value->id === old('position', $value->id) ? 'selected': '' }}>{{$value->position_uk}}</option>
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
                                                            <div class="form-check font-size-16">
                                                                <input class="form-check-input" type="checkbox" id="employed" name="employed">
                                                                <label class="form-check-label" for="transactionCheck05"></label>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-12">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <p class="text-muted mb-0">Денна ставка, ₴</p>
                                                        <input  class="form-control" type="number" id="daily_rate" name="daily_rate" id="daily_rate"  value=""  placeholder="Денна ставка">
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
                                                                <input  class="form-control" id="email" name="email"  value=""  placeholder="Емейл">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-1">
                                                                <i class="bx bx-phone-call h4 text-primary"></i>
                                                            </div>
                                                            <div class="col-sm-11">
                                                                <input  class="form-control" id="phone" name="phone"  value=""  placeholder="Телефон" required>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-1">
                                                                <i class="bx bxl-visa h4 text-primary" ></i>
                                                            </div>
                                                            <div class="col-sm-11">
                                                                <input  class="form-control" id="visa" name="visa"  value=""  placeholder="Картка" >
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
                                                    <p class="text-muted mb-0">Пароль</p>
                                                    <input  class="form-control" id="password" name="password"  value=""  placeholder="Новий пароль">
                                                </div>
                                                <div class="col-sm-6">
                                                    <p class="text-muted mb-0">Роль</p>
                                                    <select id="role" class="form-control{{ $errors->has('role') ? 'is-invalid':''}}" name="role" value="" required>
                                                        @foreach($role as $value)
                                                            <option value="{{$value}}" {{ $value === old('role', $value) ? 'selected': '' }}>{{$value}}</option>
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
    </div><!-- /.modal-content -->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Персонал IV BUD</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Персонал</a></li>
                            <li class="breadcrumb-item active">Список персоналу</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-sm-4">
                            <div class="search-box me-2 mb-2 d-inline-block">
                                <div class="position-relative">
                                    <input type="text" class="form-control" placeholder="Пошук...">
                                    <i class="bx bx-search-alt search-icon"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="text-sm-end">
                                <button type="button" class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2" data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl"><i class="mdi mdi-plus me-1"></i> Створити</button>
                            </div>
                        </div><!-- end col-->
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="">
                    <div class="table-responsive">
            <table class="table project-list-table table-nowrap align-middle table-borderless">
        <thead class="table-light">
        <tr>
            <th scope="col" style="width: 70px;">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Телефон</th>
            <th scope="col">Картка</th>
            <th scope="col">Дія</th>
        </tr>
        </thead>
        <tbody>

            @foreach ($users as $user)
                <tr>
                    <td>
                        <div class="avatar-xs">
                            <span class="avatar-title rounded-circle" style="text-transform: uppercase; text-decoration:white;">
                                @if(!empty($user->avatar))
                                    <img src="{{asset($user->avatar)}}" alt="" class="avatar-sm bg-gray"  style="border-radius: 50%">
                                @else
                                    <div class="avatar-xs">
                                <span class="avatar-title rounded-circle" style="text-transform: uppercase; text-decoration:white;">
                                    {{ Illuminate\Support\Str::substr($user->name, 0, 1) }}
                                </span>
                                </div>
                                @endif
                            </span>
                        </div>
                    </td>
                    <td>
                        <h5 class="font-size-14 mb-1"><a href="{{route('admin.workers.show', $user)}}" class="text-dark">{{$user->name}}</a></h5>
                        <p class="text-muted mb-0">{{$user->position->position_uk}}</p>
                    </td>
                    <td>{{$user->email}}</td>
                    <td><a href="#" class="badge badge-soft-primary font-size-11 m-1">{{$user->phone}}</a></td>
                    <td>
                        {{$user->visa}}
                    </td>
                    <td>
                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-dots-horizontal font-size-18"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="{{route('admin.workers.destroy', $user)}}">Видалити</a>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
</div>
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
