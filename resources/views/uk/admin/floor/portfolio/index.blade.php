@extends('layouts.admin')
@section('breadcrumbs')
@endsection
@section('content')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Проекти ІВ БУД</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Головна</a></li>
                            <li class="breadcrumb-item active">Проекти ІВ БУД</li>
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
                                <button type="button" class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2" data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl"><i class="mdi mdi-plus me-1"></i> СТВОРИТИ НОВИЙ</button>
                                </div>
                            </div><!-- end col-->
                        </div>
                        <div class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="myExtraLargeModalLabel">Створити проект</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h4 class="card-title mb-4">Основні дані</h4>
                                                        <form method="POST" action="{{ route('admin.portfolio.create') }}"  enctype="multipart/form-data" >
                                                            @csrf
                                                            {{method_field('PUT')}}
                                                            <div data-repeater-list="outer-group" class="outer">
                                                                <div data-repeater-item class="outer">
                                                                    <div class="mb-3">
                                                                        <label for="formname">Назва проекту :</label>
                                                                        <input  class="form-control" id="name" name="name"  value="{{ old('name') }}"  placeholder="Назва проекту" required>
                                                                    </div>

                                                                    <div class="mb-3">
                                                                        <label class="form-label">Регіон &nbsp;&nbsp;&nbsp;&nbsp;</label>
                                                                        <select class="form-control select2" id="region_id" name="region_id" required>
                                                                            <option>Обрати регіон розташування &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                                            @foreach($regions as $name => $title)
                                                                                <option value="{{$title}}">{{$name}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>

                                                                    <div class="mb-3">
                                                                        <label class="form-label">Куратор від замовника &nbsp;&nbsp;&nbsp;&nbsp;</label>
                                                                        <select class="form-control select2" id="id_client" name="id_client" required>
                                                                            <option value="{{null}}">Обрати куратора</option>
                                                                            @foreach($client as $name => $title)
                                                                                <option value="{{$title}}">{{$name}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>

                                                                    <div class="mb-3">
                                                                        <label class="form-label">Куратор від ІВ БУД &nbsp;&nbsp;&nbsp;&nbsp;</label>
                                                                        <select class="form-control select2" id="id_manager" name="id_manager" required>
                                                                            <option value="{{null}}">Обрати компанію</option>
                                                                            @foreach($manager as $name => $title)
                                                                                <option value="{{$title}}">{{$name}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>

                                                                    <div class="mb-3">
                                                                        <label class="form-label">Тип покриття &nbsp;&nbsp;&nbsp;&nbsp;</label>
                                                                        <select class="form-control select2" id="floor_id" name="floor_id" required>
                                                                            <option value="{{null}}">Обрати покриття</option>
                                                                            @foreach($floors as $name => $title)
                                                                                <option value="{{$title}}">{{$name}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="formname">Площа об'єкту :</label>
                                                                        <input  type="number" class="form-control" id="square" name="square"  value="{{ old('square') }}"  placeholder="Площа проекту" required>
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
                        <div class="row">
                    <div class="col-lg-12">
                        <div class="">
                            <div class="table-responsive">
                                <table class="table project-list-table table-nowrap align-middle table-borderless table-hover">
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
                                    @foreach($portfolio as $progect)
                                    <tbody>
                                    <tr>
                                        <td>
                                            @if(!empty($progect->client->avatar))
                                                <img src="{{asset($progect->client->avatar)}}" alt="" class="avatar-sm bg-gray"  style="border-radius: 50%">
                                            @else
                                                <div class="avatar-xs">
                                                <span class="avatar-title rounded-circle" style="text-transform: uppercase; text-decoration:white;">
                                                    {{ Illuminate\Support\Str::substr($progect->client->name, 0, 1) }}
                                                </span>
                                                </div>
                                            @endif
                                        </td>
                                        <td>
                                            <h5 class="text-truncate font-size-14"><a href="{{route('admin.client.show', $progect->client)}}" class="text-dark">{{$progect->client->name}}</a></h5>
                                            <a href="{{route('admin.portfolio.show',$progect)}}"><p class="text-muted mb-0">{{$progect->name}}</p></a>
                                        </td>
                                        <td>
                                            @if(!empty($progect->manager->avatar))
                                                <a href="#"><img src="{{asset($progect->manager->avatar)}}" alt="" class="avatar-sm" style="border-radius: 50%"></a>
                                            @else
                                                <div class="avatar-xs">
                                                <span class="avatar-title rounded-circle" style="text-transform: uppercase; text-decoration:white;">
                                                    {{ Illuminate\Support\Str::substr($progect->manager->name, 0, 1) }}
                                                </span>
                                                </div>
                                            @endif
                                        </td>
                                        <td>
                                            @if($progect->type === 'сompleted')
                                                <span class="badge badge-soft-pink">Завершений</span>
                                            @elseif($progect->type === 'open')
                                                <span class="badge badge-soft-info">Відкритий</span>
                                            @elseif($progect->type === 'ordered_material')
                                                <span class="badge badge-soft-warning">Замовлено матеріал</span>
                                            @elseif($progect->type === 'not_in_work')
                                                <span class="badge badge-soft-dark">Не в роботі</span>
                                            @else
                                                <span class="badge badge-soft-pink">В роботі</span>
                                            @endif
                                        </td>
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
                                        <td>@if(isset($progect->technologist))
                                                @if(!empty($progect->technologist->avatar))
                                                    <a href="#"><img src="{{asset($progect->technologist->avatar)}}" alt="" class="avatar-sm" style="border-radius: 50%"></a>
                                                @else
                                                    <div class="avatar-xs">
                                                    <span class="avatar-title rounded-circle" style="text-transform: uppercase; text-decoration:white;">
                                                        {{ Illuminate\Support\Str::substr($progect->technologist->name, 0, 1) }}
                                                    </span>
                                                    </div>
                                                @endif
                                            @endif
                                        </td>
                                    </tr>
                                    </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
{{--                        {{ $client->links() }}--}}
                    </div>
                </div>
            </div>
    </div>
@section('script')
    <script src="{{asset('Skote/dist/assets/libs/jquery.repeater/jquery.repeater.min.js')}}"></script>

    <script src="{{asset('Skote/dist/assets/js/pages/form-repeater.int.js')}}"></script>
@endsection
@endsection
