@extends('layouts.app')
@section('content')
    @include('admin.region._nav')
    <div class="d-flex flex-row col-md-3">
        <a href="{{ route('admin.region.create', $id = null) }}" class="btn btn-primary mr-1">Create</a>
    </div>
  @include('admin.region._list', ['regions' => $regions])

@endsection
