@extends('layouts.app')
@section('content')
    <form method="POST" action="{{ route('admin.users.store') }}">
        @csrf
        {{method_field('PUT')}}
        <div class="form-group">
            <label for="name" class="col-form-label">Name</label>
            <input id="name" class="form-control{{ $errors->has('name') ? 'is-invalid':''}}" name="name" value="{{ old('name') }}" required>
            @if($errors->has('name'))
                <span class="invalid-feedback"><strong>{{$errors->first('name')}}</strong></span>
            @endif
        </div>
        <div class="form-group">
            <label for="email" class="col-form-label">Email</label>
            <input id="email" class="form-control{{ $errors->has('email') ? 'is-invalid':''}}" name="email" value="{{ old('email') }}" required>
            @if($errors->has('email'))
                <span class="invalid-feedback"><strong>{{$errors->first('email')}}</strong></span>
            @endif
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
@endsection
