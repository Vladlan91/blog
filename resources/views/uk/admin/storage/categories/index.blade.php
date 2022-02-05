@extends('layouts.admin')
@section('breadcrumbs')
@endsection
@section('content')
    <div id="myModal1" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form action="{{ route('admin.storage.categories.store') }}" method="POST">
                {{ csrf_field() }}
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title mt-0" id="myModalLabel">Корегування транзакції</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name">Назва</label>
                            <input id="name" name="name" class="form-control{{ $errors->has('name') ? 'is-invalid': '' }}"
                                   value="{{ old('name') }}" required>
                            @if( $errors->has('name'))
                                <span class="invalid-feedback"><stron>{{ $errors->first('name') }}</stron></span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="parent">Батьківська категорія</label>
                            <select id="parent" name="parent" class="form-control{{ $errors->has('parent') ? 'is-invalid': '' }}">
                                <option value=""></option>
                                @foreach($parents as $parent)
                                    <option value="{{ $parent->id }}"{{ $parent->id === old('parent')? 'selected': '' }}>
                                        @for($i = 0; $i < $parent->depth; $i++) &mdash; @endfor
                                        {{ $parent->name }}
                                    </option>
                                @endforeach
                            </select>
                            @if( $errors->has('parent'))
                                <span class="invalid-feedback"><stron>{{ $errors->first('parent') }}</stron></span>
                            @endif
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-secondary waves-effect">Зберегти</button>
                    </div>
                </div>
            </form><!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Склад</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item active">Склад IV BUD</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="d-lg-flex">
        <div class="chat-leftsidebar me-lg-4">
            <div class="">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <h5>Склад IV BUD</h5>
                        </div>
                        <div>

                        </div>
                    </div>

                    <div class="card-body border-top">
                        <div class="row">
                            <div class="col-sm-6">
                                <div>
                                    <p class="fw-medium mb-2">Залишок :</p>
                                    <h4>{{$sum}} ₴</h4>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mt-4 mt-sm-0">
                                    <div class="d-inline-flex align-items-center mt-1" id="tooltip-container">
                                        <a href="{{ url()->previous() }}" class="m-1">
                                            <div class="avatar-xs">
                                                <span class="avatar-title rounded-circle bg-white bg-soft text-primary font-size-18">
                                                    <i class="mdi mdi-arrow-left"></i>
                                                </span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer bg-transparent border-top">
                        <div class="text-center">
                            <a href="{{ route('admin.storage.categories.create') }}" class="btn btn-outline-light me-2 w-md"   data-bs-toggle="modal" data-bs-target="#myModal1" >Створити категорію</a>
                            <a href="#" class="btn btn-primary me-2 w-md" data-bs-toggle="modal" data-bs-target="#myModalZ">Створити матеріал</a>
                        </div>
                    </div>
                </div>

                <div class="chat-leftsidebar-nav">
                    <ul class="nav nav-pills nav-justified">
                        <li class="nav-item">
                            <a href="#chat" data-bs-toggle="tab" aria-expanded="true" class="nav-link active">
                                <i class="bx bx-chat font-size-20 d-sm-none"></i>
                                <span class="d-none d-sm-block">Категорії</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#groups" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                <i class="bx bx-group font-size-20 d-sm-none"></i>
                                <span class="d-none d-sm-block">Історія обліку скада</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content py-4">
                        <div class="tab-pane show active" id="chat">
                            <h5 class="font-size-14 mb-3">Категорія матеріалів</h5>
                            <ul class="list-unstyled chat-list" data-simplebar style="max-height: 410px;">
                                @foreach($categories as $category)
                                    <li>
                                        <a href="{{route('admin.storage.categories.more', $category)}}">
                                            <div class="media align-items-center">
                                                <div class="avatar-xs me-3">
                                                <span class="avatar-title rounded-circle bg-primary bg-soft text-primary">
                                                    G
                                                </span>
                                                </div>

                                                <div class="media-body">
                                                    <h5 class="font-size-14 mb-0">{{$category->name}}</h5>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="tab-pane" id="groups">
                            <div>
                                <h5 class="font-size-14 mb-3">Оприбуткування / Списання</h5>
                                <ul class="list-unstyled chat-list" data-simplebar style="max-height: 410px;">
                                    <li class="active">
                                        <a href="#">
                                            <div class="media">
                                                <div class="align-self-center me-3">
                                                    <i class="mdi mdi-circle font-size-10"></i>
                                                </div>
                                                <div class="align-self-center me-3">
                                                    <img src="assets/images/users/avatar-2.jpg" class="rounded-circle avatar-xs" alt="">
                                                </div>

                                                <div class="media-body overflow-hidden">
                                                    <h5 class="text-truncate font-size-14 mb-1">Steven Franklin</h5>
                                                    <p class="text-truncate mb-0">Hey! there I'm available</p>
                                                </div>
                                                <div class="font-size-11">05 min</div>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <div class="media">
                                                <div class="align-self-center me-3">
                                                    <i class="mdi mdi-circle text-success font-size-10"></i>
                                                </div>
                                                <div class="align-self-center me-3">
                                                    <img src="assets/images/users/avatar-3.jpg" class="rounded-circle avatar-xs" alt="">
                                                </div>
                                                <div class="media-body overflow-hidden">
                                                    <h5 class="text-truncate font-size-14 mb-1">Adam Miller</h5>
                                                    <p class="text-truncate mb-0">I've finished it! See you so</p>
                                                </div>
                                                <div class="font-size-11">12 min</div>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <div class="media">
                                                <div class="align-self-center me-3">
                                                    <i class="mdi mdi-circle text-success font-size-10"></i>
                                                </div>
                                                <div class="avatar-xs align-self-center me-3">
                                                                        <span class="avatar-title rounded-circle bg-primary bg-soft text-primary">
                                                                            K
                                                                        </span>
                                                </div>
                                                <div class="media-body overflow-hidden">
                                                    <h5 class="text-truncate font-size-14 mb-1">Keith Gonzales</h5>
                                                    <p class="text-truncate mb-0">This theme is awesome!</p>
                                                </div>
                                                <div class="font-size-11">24 min</div>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <div class="media">
                                                <div class="align-self-center me-3">
                                                    <i class="mdi mdi-circle text-warning font-size-10"></i>
                                                </div>
                                                <div class="align-self-center me-3">
                                                    <img src="assets/images/users/avatar-4.jpg" class="rounded-circle avatar-xs" alt="">
                                                </div>
                                                <div class="media-body overflow-hidden">
                                                    <h5 class="text-truncate font-size-14 mb-1">Jose Vickery</h5>
                                                    <p class="text-truncate mb-0">Nice to meet you</p>
                                                </div>
                                                <div class="font-size-11">1 hr</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="media">
                                                <div class="align-self-center me-3">
                                                    <i class="mdi mdi-circle font-size-10"></i>
                                                </div>

                                                <div class="avatar-xs align-self-center me-3">
                                                                        <span class="avatar-title rounded-circle bg-primary bg-soft text-primary">
                                                                            M
                                                                        </span>
                                                </div>
                                                <div class="media-body overflow-hidden">
                                                    <h5 class="text-truncate font-size-14 mb-1">Mitchel Givens</h5>
                                                    <p class="text-truncate mb-0">Hey! there I'm available</p>
                                                </div>
                                                <div class="font-size-11">3 hrs</div>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <div class="media">
                                                <div class="align-self-center me-3">
                                                    <i class="mdi mdi-circle text-success font-size-10"></i>
                                                </div>
                                                <div class="align-self-center me-3">
                                                    <img src="assets/images/users/avatar-6.jpg" class="rounded-circle avatar-xs" alt="">
                                                </div>
                                                <div class="media-body overflow-hidden">
                                                    <h5 class="text-truncate font-size-14 mb-1">Stephen Hadley</h5>
                                                    <p class="text-truncate mb-0">I've finished it! See you so</p>
                                                </div>
                                                <div class="font-size-11">5hrs</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="media">
                                                <div class="align-self-center me-3">
                                                    <i class="mdi mdi-circle text-success font-size-10"></i>
                                                </div>
                                                <div class="avatar-xs align-self-center me-3">
                                                                        <span class="avatar-title rounded-circle bg-primary bg-soft text-primary">
                                                                            K
                                                                        </span>
                                                </div>
                                                <div class="media-body overflow-hidden">
                                                    <h5 class="text-truncate font-size-14 mb-1">Keith Gonzales</h5>
                                                    <p class="text-truncate mb-0">This theme is awesome!</p>
                                                </div>
                                                <div class="font-size-11">24 min</div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <div class="w-100 user-chat">
            <div class="card">
                <div class="p-4 border-bottom ">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card mini-stats-wid" style="background-color: rgba(24,23,23,0.18)!important;">
                                <div class="card-body">
                                    <div class="media">
                                        <div class="media-body">
                                            <p class="text-muted fw-medium">Orders</p>
                                            <h4 class="mb-0">1,235</h4>
                                        </div>

                                        <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                                                        <span class="avatar-title">
                                                            <i class="bx bx-copy-alt font-size-24"></i>
                                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mini-stats-wid"  style="background-color: rgba(24,23,23,0.18)!important;">
                                <div class="card-body">
                                    <div class="media">
                                        <div class="media-body">
                                            <p class="text-muted fw-medium">Revenue</p>
                                            <h4 class="mb-0">$35, 723</h4>
                                        </div>

                                        <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                                                        <span class="avatar-title rounded-circle bg-primary">
                                                            <i class="bx bx-archive-in font-size-24"></i>
                                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mini-stats-wid"  style="background-color: rgba(24,23,23,0.18)!important;">
                                <div class="card-body">
                                    <div class="media">
                                        <div class="media-body">
                                            <p class="text-muted fw-medium">Average Price</p>
                                            <h4 class="mb-0">$16.2</h4>
                                        </div>

                                        <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                                                        <span class="avatar-title rounded-circle bg-primary">
                                                            <i class="bx bx-purchase-tag-alt font-size-24"></i>
                                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="chat-conversation p-3">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="search-box chat-search-box py-4">
                                    <div class="position-relative">
                                        <input type="text" class="form-control" placeholder="Швидкий пошук...">
                                        <i class="bx bx-search-alt search-icon"></i>
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
                                                <th scope="col">Залишок, грн</th>
                                                <th scope="col">Залишок</th>
                                                <th scope="col">Дія</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @foreach ($materials2 as $material2)
                                                <tr style="{{ $material2->limit > $material2->count ? 'background-color: rgba(232,62,140,.18)!important;': '' }}}}background-color: rgba(232,62,140,.18)!important;">
                                                    <td>
                                                        <div class="avatar-xs">
                                                                <span class="avatar-title rounded-circle" style="text-transform: uppercase; text-decoration:white;">
                                                                    @if(!empty($material2->avatar))
                                                                        <img src="{{asset($material2->avatar)}}" alt="" class="avatar-sm bg-gray"  style="border-radius: 50%">
                                                                    @else
                                                                        <div class="avatar-xs">
                                                                    <span class="avatar-title rounded-circle" style="text-transform: uppercase; text-decoration:white;">
                                                                        {{ Illuminate\Support\Str::substr($material2->name, 0, 1) }}
                                                                    </span>
                                                                    </div>
                                                                    @endif
                                                                </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <h5 class="font-size-14 mb-1"><a href="" class="text-dark">{{$material2->name}}</a></h5>
                                                        <p class="text-muted mb-0">мінімальний запас <span class="badge badge-pill badge-soft-success font-size-11">{{$material2->limit}}</span></p>
                                                    </td>
                                                    <td><a href="#" class="badge badge-soft-primary font-size-11 m-1">{{$material2->sum}}</a></td>
                                                    <td>
                                                        {{$material2->count}} {{$material2->getUnit()}}
                                                    </td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a href="#" class="dropdown-toggle card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="mdi mdi-dots-horizontal font-size-18"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="{{route('admin.storage.material.destroy', $material2)}}">Видалити</a>
                                                            </div>
                                                        </div>
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
                    <div class="p-3 chat-input-section">
                        <div class="row">
                            <div class="col-auto">
                                <button type="submit" class="btn btn-primary btn-rounded chat-send w-md waves-effect waves-light"><span class="d-none d-sm-inline-block me-2">Оприбуткування</span> <i class="mdi mdi-account"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                                <form method="POST" action="{{ route('admin.storage.material.store') }}"  enctype="multipart/form-data">
                                    @csrf
                                    {{method_field('PUT')}}

                                    <div class="input-group mb-3">
                                        <label class="input-group-text">Назва матеріалу</label>

                                        <input type="text" class="form-control text-sm-end" name="name" id="name" value="" required>

                                        <label class="input-group-text">#</label>
                                    </div>

                                    <div class="input-group mb-3">
                                        <label class="input-group-text">Одиниця виміру</label>
                                        <select id="unit" name="unit" class="form-control">
                                            <option value="1">кг</option>
                                            <option value="2">л</option>
                                            <option value="3">шт</option>
                                        </select>
                                        <label class="input-group-text">#</label>
                                    </div>

                                    <div class="input-group mb-3">
                                        <label class="input-group-text">Мінімальний резерв</label>

                                        <input type="number" class="form-control" name="limit" id="limit" value="">

                                        <label class="input-group-text">#</label>
                                    </div>

                                    <div class="input-group mb-3">
                                        <label class="input-group-text">Зв'язаний товар</label>

                                        <select id="related_goods" name="related_goods" class="form-control">
                                            <option value=""></option>
                                            @foreach($materials as $material)
                                                <option value="{{ $material->id }}"{{ $material->id === old('parent')? 'selected': '' }}>{{$material->name}}</option>
                                            @endforeach
                                        </select>

                                        <label class="input-group-text">#</label>
                                    </div>

                                    <div class="input-group mb-3">
                                        <label class="input-group-text">Категорія товару</label>

                                        <select id="category_id" name="category_id" class="form-control">
                                            <option value=""></option>
                                            @foreach($parents as $parent)
                                                <option value="{{ $parent->id }}">
                                                    {{$parent->name}}
                                                </option>
                                            @endforeach
                                        </select>

                                        <label class="input-group-text">#</label>
                                    </div>

                                    <div class="input-group mb-3">
                                        <label class="input-group-text">Фото</label>
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
