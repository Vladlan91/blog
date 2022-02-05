@extends('layouts.admin')
@section('script_header')

@endsection
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
                                                <form method="POST" action="{{ route('admin.company.create') }}"  enctype="multipart/form-data" >
                                                    @csrf
                                                    {{method_field('PUT')}}
                                                    <div data-repeater-list="outer-group" class="outer">
                                                        <div data-repeater-item class="outer">
                                                            <div class="mb-3">
                                                                <label for="formname">Назва компанії :</label>
                                                                <input  class="form-control" id="name" name="name"  value="{{ old('name') }}"  placeholder="Назва компанії..." required>
                                                            </div>

                                                            <div class="mb-3">
                                                                <label for="formemail">Емейл :</label>
                                                                <input type="email" class="form-control"  id="email" name="email"
                                                                       placeholder="Введіть Емейл..." required>
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

                                                            <div class="mb-3 col-lg-2">
                                                                <label for="resume">Логотип компанії</label>
                                                                <input type="file" class="form-control" name="avatar" id="uploadbtn">
                                                            </div>

                                                            <div class="mb-9">
                                                                <label class="d-block mb-3">Соціальні мережі/сайт :</label>

                                                                <div class="col-md-3 col-12 form-check-inline">
                                                                    <input type="text" class="form-control" id="insta" name="insta"
                                                                           placeholder="Введіть посилання на інстаграм..." >
                                                                </div>
                                                                <div class="col-md-3 col-12 form-check-inline">
                                                                    <input type="text" class="form-control" id="face" name="face"
                                                                           placeholder="Введіть посилання на фейсбук" >
                                                                </div>
                                                                <div class="col-md-3 col-12 form-check-inline">
                                                                    <input type="text" class="form-control" id="face" name="face"
                                                                           placeholder="Введіть посилання на сайт" >
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="mb-3">
                                                                <label for="formmessage">Опис :</label>
                                                                <textarea id="title" class="form-control" placeholder="Зазначте, як саме відбулось знайомство з даною компанією, представник відвідав шоурум, чи виїзд менеджера ІВ БУД в офіс компанії." rows="3" name="title"></textarea>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="formmessage">Description :</label>
                                                                <textarea id="description" class="form-control" placeholder="Зазначте, як саме відбулось знайомство з даною компанією, представник відвідав шоурум, чи виїзд менеджера ІВ БУД в офіс компанії." rows="3" name="description"></textarea>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="formmessage">Коментарь :</label>
                                                                <textarea id="comments" class="form-control" placeholder="Зазначте, як саме відбулось знайомство з даною компанією, представник відвідав шоурум, чи виїзд менеджера ІВ БУД в офіс компанії." rows="3" name="comments"></textarea>
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
                </div>
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
                                    <button type="button" class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2" data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl"><i class="mdi mdi-plus me-1"></i> СТВОРИТИ НОВУ</button>
                                </div>
                            </div><!-- end col-->
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <div class="row">
        @foreach ($company as $item)
            <div class="col-xl-4 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="media">
                            <div class="avatar-md me-4">
                                @if(isset($item->logo))
                                    <a href="{{route('admin.company.show', $item)}}">
                                    <span class="avatar-title rounded-circle bg-light text-danger font-size-16">
                                        <img src="{{ asset( $item->logo)}}" alt="" height="90" style="border-radius: 100%;">
                                    </span>
                                    </a>
                                @endif
                            </div>

                            <div class="media-body overflow-hidden">
                                <h5 class="text-truncate font-size-15"><a href="{{route('admin.company.show', $item)}}" class="text-dark">{{ $item->name}}</a></h5>
                                <p class="text-muted mb-4">{{Str::words($item->description, 8)}}</p>
                                <div class="avatar-group">
                                    @if($item->hasWorkers($item->id))
                                        @foreach($item->workers()->orderBy('id')->get() as $user )
                                            @if(!empty($user->avatar))
                                                <div class="avatar-group-item">
                                                    <a href="{{route('admin.client.show', $user)}}" class="d-inline-block">
                                                        <img src="{{asset($user->avatar)}}" alt="" class="rounded-circle avatar-xs">
                                                    </a>
                                                </div>
                                            @else
                                                <div class="avatar-group-item">
                                                    <div class="avatar-xs">
                                                        <span class="avatar-title rounded-circle" style="text-transform: uppercase; text-decoration:white;">
                                                            {{ Illuminate\Support\Str::substr($user->name, 0, 1) }}
                                                        </span>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    @else
                                        <div class="text-center">
                                            <a href="#" class="btn btn-outline-light me-2 w-md">Додати працівника</a>
                                        </div>

                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="px-4 py-3 border-top">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item me-3">
                                <span class="badge bg-success">Проектів - 3 </span>
                            </li>
                            <li class="list-inline-item me-3">
                                <i class="bx bx-comment-dots me-1"></i> Загальна сума - 120273 грн.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection
@section('script')
    <script src="{{asset('Skote/dist/assets/libs/jquery.repeater/jquery.repeater.min.js')}}"></script>
    <script src="{{asset('Skote/dist/assets/libs/select2/js/select2.min.js')}}"></script>
    <script src="{{asset('Skote/dist/assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('Skote/dist/assets/libs/spectrum-colorpicker2/spectrum.min.js')}}"></script>
    <script src="{{asset('Skote/dist/assets/libs/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}}"></script>
    <script src="{{asset('Skote/dist/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js')}}"></script>
    <script src="{{asset('Skote/dist/assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>
    <script src="{{asset('Skote/dist/assets/libs/@chenfengyuan/datepicker/datepicker.min.js')}}"></script>

    <!-- form advanced init -->
    <script src="{{asset('Skote/dist/assets/js/pages/form-advanced.init.js')}}"></script>
@endsection
