@extends('layouts.admin')
@section('breadcrumbs')
@endsection
@section('content')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Комерційні пропозиція</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Головна</a></li>
                            <li class="breadcrumb-item active">Комерційні пропозиція ІВ БУД</li>
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
                                <a role="button" class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2" href="{{route('comerc')}}"><i class="mdi mdi-plus me-1"></i> СТВОРИТИ НОВУ</a>
                                </div>
                            </div><!-- end col-->
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="">
                            <div class="table-responsive">
                                <table class="table project-list-table table-nowrap align-middle table-borderless table-hover">
                                    <thead>
                                    <tr>
                                        <th scope="col" style="width: 100px">#</th>
                                        <th scope="col">Тип покриття</th>
                                        <th scope="col">Площа</th>
                                        <th scope="col">Бюджет</th>
                                        <th scope="col">Проект</th>
                                        <th scope="col">Cтворена</th>
                                    </tr>
                                    </thead>
                                    @foreach($comerc as $item)
                                    <tbody>
                                    <tr>
                                        <td>
                                         @if(!empty($item->floor->avatar))
                                                <a href="#"><img src="{{asset($item->floor->avatar)}}" alt="" class="avatar-sm" style="border-radius: 50%"></a>
                                            @else
                                                <div class="avatar-xs">
                                                    <span class="avatar-title rounded-circle" style="text-transform: uppercase; text-decoration:white;">
                                                        a
                                                    </span>
                                                </div>
                                            @endif
                                        </td>
                                        <td>
                                            <h5 class="text-truncate font-size-14">{{$item->floor->name}}</h5>
                                            <p class="text-muted mb-0">{{$item->address}}</p>
                                        </td>
                                        <td>
                                            {{$item->square}}
                                        </td>
                                        <td><span class="badge bg-warning">{{$item->price}}</span></td>
                                        <td>
                                            @if($item->project)

                                                <a href="" class="me-2 w-md">Переглянути</a>

                                            @else

                                                <a href="#" class="btn btn-outline-danger me-2 w-md">Додати</a>

                                            @endif
                                        </td>
                                        <td>
                                            @if($item->hasManager())
                                                <span class="badge badge-soft-pink">{{$item->user->name}}</span>
                                            @else
                                                <span class="badge badge-soft-secondary">Автоматично</span>
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
                        {{ $comerc->links() }}
                    </div>
                </div>
            </div>
    </div>
@section('script')
    <script src="{{asset('Skote/dist/assets/libs/jquery.repeater/jquery.repeater.min.js')}}"></script>

    <script src="{{asset('Skote/dist/assets/js/pages/form-repeater.int.js')}}"></script>
@endsection
@endsection
