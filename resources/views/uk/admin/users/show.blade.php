@extends('layouts.app')
@section('content')
    <div class="d-flex flex-row col-md-3">
        <a href="{{ route('admin.users.edit', $user) }}" class="btn btn-primary mr-1">Edit</a>
        <form method="POST" action="{{route('admin.users.update', $user)}}" class="mr-1">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger">Delete</button>
        </form>
        <form method="POST" action="{{route('admin.users.verify', $user)}}" class="mr-1">
            @csrf
            <button class="btn btn-danger">Verify</button>
        </form>
    </div>

    <table class="table table-bordered table-striped">
        <tbody>
        <tr>
            <th>ID</th><td>{{ $user->id }}</td>
        </tr>
        <tr>
            <th>Name</th><td>{{ $user->name }}</td>
        </tr>
        <tr>
            <th>Email</th><td>{{ $user->email }}</td>
        </tr>
        <tr>
            <th>Status</th>
            <td>
                @if($user->isActive())
                    <span class="badge badge-primary"> Active </span>
                @endif
                @if($user->isWait())
                    <span class="badge badge-secondary"> Wait</span>
                @endif
            </td>
        </tr>
        <tr>
            <th>Role</th>
            <td>

                @if($user->isUser())
                    <span class="badge badge-primary"> Звичайний користувач </span>
                @endif
                @if($user->isManager())
                    <span class="badge badge-primary"> Головний менеджер </span>
                @endif
                @if($user->isManagerRegion())
                    <span class="badge badge-secondary"> Регіональний менеджер</span>
                @endif
                @if($user->isTechnologistRegion())
                    <span class="badge badge-primary"> Регіональний технолог </span>
                @endif
                @if($user->isTechnologist())
                    <span class="badge badge-secondary"> Головний технолог</span>
                @endif
                @if($user->isOwnerRegion())
                    <span class="badge badge-primary"> Регіональний директор </span>
                @endif
                @if($user->isOwner())
                    <span class="badge badge-secondary"> Директор</span>
                @endif
            </td>
        </tr>
        </tbody>
    </table>
@endsection
