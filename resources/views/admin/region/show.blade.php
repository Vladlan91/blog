@extends('layouts.app')
@section('content')
    @include('admin.region._nav')
    <p style="padding-bottom: 30px;position: absolute;">
    <div class="d-flex flex-row mb-3">
        <a href="{{ route('admin.region.edit', $region) }}" class="btn btn-primary ">Корегувати</a>
        <form method="POST" action="{{ route('admin.region.destroy', $region) }}">
            {{ csrf_field() }}
            {{method_field('DELETE')}}
            <button class="btn btn-danger left">Видалити</button>
        </form>
    </div>
    <br>
    <div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
        <div class="panel-body no-padding">
            <table class="table table-bordered table-striped pt-2">
                <tbody>
                <tr>
                    <th class="warning">ID</th> <td>{{$region->id}}</td>
                </tr>
                <tr>
                    <th class="warning">Назва</th> <td>{{$region->name}}</td>
                </tr>
                <tr>
                    <th class="warning">Посилання</th> <td>{{$region->slag}}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <a  href="{{ route('admin.region.parent.create', $region->id) }}" class="btn btn-success " style="margin-bottom: 20px;margin-top: 20px;">Cтворити підрегіон</a>
    @include('admin.region._list', ['regions' =>$regions])
@endsection

