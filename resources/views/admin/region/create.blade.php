@extends('layouts.app')
@section('content')
    @include('admin.region._nav')

    <div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
        <div class="panel-body no-padding">
            <form method="POST" action="{{ route('admin.region.store') }}">
                @csrf
                <div class="form-group">
                    <label for="name">Назва</label>
                    <input id="name" name="name" class="form-control{{ $errors->has('name') ? 'is-invalid': '' }}"
                           value="{{ old('name') }}" required>
                    @if( $errors->has('name'))
                        <span class="invalid-feedback"><stron>{{ $errors->first('name') }}</stron></span>
                    @endif
                </div>
                @if($parent)
                <div class="form-group">
                    <label for="name">Регіон</label>
                    <input id="parent" name="parent" class="form-control{{ $errors->has('parent') ? 'is-invalid': '' }}"
                           value="{{$parent->id }}" required>
                    @if( $errors->has('parent'))
                        <span class="invalid-feedback"><stron>{{ $errors->first('parent') }}</stron></span>
                    @endif
                </div>
                @endif
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Зберегти</button>
                </div>
            </form>
        </div>
    </div>
@endsection
