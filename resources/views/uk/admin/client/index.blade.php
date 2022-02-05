@extends('layouts.admin')
@section('breadcrumbs')
@endsection
@section('content')
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
                                    <button type="button" class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2" data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl"><i class="mdi mdi-plus me-1"></i> СТВОРИТИ НОВОГО</button>
                                </div>
                            </div><!-- end col-->
                        </div>
                        <div class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="myExtraLargeModalLabel">Створити нового користувача</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h4 class="card-title mb-4">Основні дані</h4>
                                                        <form method="POST" action="{{ route('admin.client.create') }}"  enctype="multipart/form-data" >
                                                            @csrf
                                                            {{method_field('PUT')}}
                                                            <div data-repeater-list="outer-group" class="outer">
                                                                <div data-repeater-item class="outer">
                                                                    <div class="mb-3">
                                                                        <label for="formname">І'мя/Фамілія :</label>
                                                                        <input  class="form-control" id="name" name="name"  value="{{ old('name') }}"  placeholder="Введіть і'мя/фамілію..." required>
                                                                    </div>

                                                                    <div class="mb-3">
                                                                        <label for="formemail">Емейл :</label>
                                                                        <input type="email" class="form-control"  id="email" name="email"
                                                                               placeholder="Введіть Емейл...">
                                                                    </div>

                                                                    <div class="mb-9">
                                                                        <label class="form-label">Локація &nbsp;&nbsp;&nbsp;&nbsp;</label>
                                                                        <select class="form-control select2" id="region_id" name="region_id">
                                                                            <option>Обрати регіон розташування &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                                            @foreach($regions as $name => $title)
                                                                                <option value="{{$title}}">{{$name}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>

                                                                    <div class="inner-repeater mb-4">
                                                                        <div data-repeater-list="inner-group" class="inner mb-3">
                                                                            <label>Телефон :</label>
                                                                            <div data-repeater-item class="inner mb-3 row">
                                                                                <div class="col-md-10 col-8">
                                                                                    <input type="text" class="inner form-control"  id="phone" name="phone"
                                                                                           placeholder="Введіть телефон..." required/>
                                                                                </div>
                                                                                <div class="col-md-2 col-4">
                                                                                    <div class="d-grid">
                                                                                        <input data-repeater-delete type="button" class="btn btn-primary inner"
                                                                                               value="Видалити" />
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <input data-repeater-create type="button" class="btn btn-success inner"
                                                                               value="Додати номер" />
                                                                    </div>

                                                                    <div class="mb-3">
                                                                        <label class="d-block mb-3">Стать :</label>

                                                                        <div class="form-check form-check-inline">
                                                                            <input class="form-check-input" type="radio" name="sex"
                                                                                   id="sex" value="1">
                                                                            <label class="form-check-label" for="inlineRadio1">Чоловіча</label>
                                                                        </div>
                                                                        <div class="form-check form-check-inline">
                                                                            <input class="form-check-input" type="radio" name="sex"
                                                                                   id="sex" value="2">
                                                                            <label class="form-check-label" for="inlineRadio2">Жіноча</label>
                                                                        </div>
                                                                    </div>

                                                                    <div class="mb-3 col-lg-2">
                                                                        <label for="resume">Аватар користувача</label>
                                                                        <input type="file" class="form-control" name="avatar" id="uploadbtn">
                                                                    </div>

                                                                    <div class="mb-9">
                                                                        <label class="d-block mb-3">Соціальні мережі :</label>

                                                                        <div class="col-md-5 col-12 form-check-inline">
                                                                            <input type="text" class="form-control" id="insta" name="insta"
                                                                                   placeholder="Введіть посилання на інстаграм..." >
                                                                        </div>
                                                                        <div class="col-md-5 col-12 form-check-inline">
                                                                            <input type="text" class="form-control" id="face" name="face"
                                                                                   placeholder="Введіть посилання на фейсбук" >
                                                                        </div>
                                                                    </div>
                                                                    <br>
                                                                    <div class="mb-9">
                                                                        <label class="form-label">Компанія &nbsp;&nbsp;&nbsp;&nbsp;</label>
                                                                        <select class="form-control select2" id="company_id" name="company_id">
                                                                            <option value="{{null}}">Обрати компанію</option>
                                                                            @foreach($company as $name => $title)
                                                                                <option value="{{$title}}">{{$name}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="formmessage">Коментарь :</label>
                                                                        <textarea id="comments" class="form-control" placeholder="Зазначте, як саме відбулось знайомство з даною особою, відвідала шоурум самостійно, чи за запрошенням менеджера ІВ БУД." rows="3" name="comments"></textarea>
                                                                    </div>
                                                                    <button type="submit" class="btn btn-primary">Зберегти</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                            <!-- end card body -->
                                        </div>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                        <div class="table-responsive">
                            <table class="table align-middle table-nowrap table-hover">
                                <thead class="table-light">
                                <tr>
                                    <th scope="col" style="width: 70px;">#</th>
                                    <th scope="col">І'мя</th>
                                    <th scope="col">Емейл</th>
                                    <th scope="col">Послуги</th>
                                    <th scope="col">Куратор проектів</th>
                                    <th scope="col">Соц. мережі</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach ($client as $user)
                                    <tr>
                                        <td>
                                            <div class="avatar-xs">

                                                @if(!empty($user->avatar))
                                                    <img class="rounded-circle avatar-xs" src="{{ asset( $user->avatar)}}" alt="">
                                                @else
                                                <span class="avatar-title rounded-circle" style="text-transform: uppercase; text-decoration:white;">
                                                    {{ Illuminate\Support\Str::substr($user->name, 0, 1) }}
                                                </span>
                                                @endif
                                            </div>
                                        </td>
                                        <td>
                                            <h5 class="font-size-14 mb-1"><a href="{{route('admin.client.show', $user)}}" class="text-dark">{{$user->name}}</a></h5>
                                            @if(isset($user->company))
                                            <p class="text-muted mb-0">{{$user->company->name}}</p>
                                            @endif
                                        </td>
                                        @if(isset($user->email))
                                        <td><i class="bx bxl-android"></i>{{$user->email}}</td>
                                        @else
                                        <td> <i class="bx bxl-product-hunt"></i> {{$user->company->email}}</td>
                                        @endif
                                        <td>
                                            <div>
                                                <a href="#" class="badge badge-soft-primary font-size-11 m-1">Photoshop</a>
                                                <a href="#" class="badge badge-soft-primary font-size-11 m-1">illustrator</a>
                                            </div>
                                        </td>
                                        <td>
                                            125
                                        </td>
                                        <td>
                                            <ul class="list-inline font-size-20 contact-links mb-0">
                                                @if(isset($user->insta))
                                                <li class="list-inline-item px-2">
                                                    <a href="{{$user->insta}}" title="Message"><i class="bx bxl-instagram"></i></a>
                                                </li>
                                                @endif
                                                @if(isset($user->face))
                                                <li class="list-inline-item px-2">
                                                    <a href="{{$user->face}}" title="Profile"><i class="bx bxl-facebook"></i></a>
                                                </li>
                                                @endif
                                            </ul>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                        {{ $client->links() }}
                    </div>
                </div>
            </div>
    </div>
@section('script')
    <script src="{{asset('Skote/dist/assets/libs/jquery.repeater/jquery.repeater.min.js')}}"></script>

    <script src="{{asset('Skote/dist/assets/js/pages/form-repeater.int.js')}}"></script>
@endsection
@endsection
