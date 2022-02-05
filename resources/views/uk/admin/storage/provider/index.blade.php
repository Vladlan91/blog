@extends('layouts.admin')
@section('breadcrumbs')
@endsection
@section('content')

    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Постачальники</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Постачальники IV BUD</a></li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="text-sm-end">
                            <button type="button" class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2" data-bs-toggle="modal" data-bs-target="#myModalZ"><i class="mdi mdi-plus me-1"></i> Створити</button>
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
                                <th scope="col">Назва</th>
                                <th scope="col">Емейл</th>
                                <th scope="col">Телефон</th>
                                <th scope="col">ЄДРПОУ</th>
                                <th scope="col">Редагувати</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach ($providers as $provider)
                                <tr>
                                    <td>
                                        <div class="avatar-xs">
                                        <span class="avatar-title rounded-circle" style="text-transform: uppercase; text-decoration:white;">
                                             @if(!empty($provider->avatar))
                                                <img src="{{asset($provider->avatar)}}" alt="" class="avatar-sm bg-gray"  style="border-radius: 50%">
                                            @else
                                                <div class="avatar-xs">
                                                    <span class="avatar-title rounded-circle" style="text-transform: uppercase; text-decoration:white;">
                                                        {{ Illuminate\Support\Str::substr($provider->name_company, 0, 1) }}
                                                    </span>
                                                </div>
                                            @endif
                                        </span>
                                        </div>
                                    </td>
                                    <td>
                                        <h5 class="font-size-14 mb-1"><a href="" class="text-dark">{{$provider->name_company}}</a></h5>
                                    </td>

                                    <td>
                                        {{$provider->email}}
                                    </td>
                                    <td>
                                        {{$provider->phone}}
                                    </td>
                                    <td>
                                        {{$provider->usreou}}
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-horizontal font-size-18"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item"  data-bs-toggle="modal" data-bs-target="#myModal{{$provider->id}}" >Корегувати</a>
                                                <a class="dropdown-item" href="{{route('admin.storage.provider.destroy', $provider)}}">Видалити</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <div id="myModal{{$provider->id}}" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title mt-0" id="myModalLabel">Корегування постачальника</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class=" mt-4" style="min-height: 240px;">
                                                            <form method="POST" action="{{ route('admin.storage.provider.edit', $provider) }}"  enctype="multipart/form-data">
                                                                @csrf
                                                                {{method_field('PUT')}}

                                                                <div class="input-group mb-3">
                                                                    <label class="input-group-text">Назва компанії</label>

                                                                    <input type="text" class="form-control text-sm-end" name="name_company" id="name_company" value="{{$provider->name_company}}" required>

                                                                    <label class="input-group-text">#</label>
                                                                </div>

                                                                <div class="input-group mb-3">
                                                                    <label class="input-group-text">ЄДРПОУ</label>

                                                                    <input type="text" class="form-control text-sm-end" name="usreou" id="usreou" value="{{$provider->usreou}}">

                                                                    <label class="input-group-text">#</label>
                                                                </div>

                                                                <div class="input-group mb-3">
                                                                    <label class="input-group-text">Емейл</label>

                                                                    <input type="text" class="form-control text-sm-end" name="email" id="email" value="{{$provider->email}}">

                                                                    <label class="input-group-text">#</label>
                                                                </div>

                                                                <div class="input-group mb-3">
                                                                    <label class="input-group-text">Телефон</label>

                                                                    <input type="text" class="form-control text-sm-end" name="phone" id="phone" value="{{$provider->phone}}" required>

                                                                    <label class="input-group-text">#</label>
                                                                </div>

                                                                <div class="input-group mb-3">
                                                                    <label class="input-group-text">Змінити аватар</label>
                                                                    <input type="file" class="form-control" name="avatar" id="uploadbtn"  value="{{$provider->avatar}}">
                                                                    <label class="input-group-text">#</label>
                                                                </div>

                                                                <div class="text-center">
                                                                    <button type="submit" class="btn btn-success w-md">Зберегти</button>
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
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="text-center my-3">
                    <a href="javascript:void(0);" class="text-success"><i class="bx bx-loader bx-spin font-size-18 align-middle mr-2"></i> Load more </a>
                </div>
            </div> <!-- end col-->
        </div>
    </div>
    <div id="myModalZ" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myModalLabel">Створити постачальника</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <div class=" mt-4" style="min-height: 240px;">
                                <form method="POST" action="{{ route('admin.storage.provider.store') }}"  enctype="multipart/form-data">
                                    @csrf
                                    {{method_field('PUT')}}

                                    <div class="input-group mb-3">
                                        <label class="input-group-text">Назва компанії</label>

                                        <input type="text" class="form-control text-sm-end" name="name_company" id="name_company" value="" required>

                                        <label class="input-group-text">#</label>
                                    </div>

                                    <div class="input-group mb-3">
                                        <label class="input-group-text">ЄДРПОУ</label>

                                        <input type="text" class="form-control text-sm-end" name="usreou" id="usreou" value="">

                                        <label class="input-group-text">#</label>
                                    </div>

                                    <div class="input-group mb-3">
                                        <label class="input-group-text">Емейл</label>

                                        <input type="text" class="form-control text-sm-end" name="email" id="email" value="">

                                        <label class="input-group-text">#</label>
                                    </div>

                                    <div class="input-group mb-3">
                                        <label class="input-group-text">Телефон</label>

                                        <input type="text" class="form-control text-sm-end" name="phone" id="phone" value="" required>

                                        <label class="input-group-text">#</label>
                                    </div>

                                    <div class="input-group mb-3">
                                        <label class="input-group-text">Аватар</label>
                                        <input type="file" class="form-control" name="avatar" id="uploadbtn">
                                        <label class="input-group-text">#</label>
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-success w-md">Зберегти</button>
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

@endsection
