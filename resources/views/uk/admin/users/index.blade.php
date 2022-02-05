@extends('layouts.admin')
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
                                <button type="button" class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2"><i class="mdi mdi-plus me-1"></i> СТВОРИТИ НОВОГО</button>
                            </div>
                        </div><!-- end col-->
                    </div>
                    <div class="table-responsive">
                <table class="table align-middle table-nowrap table-hover">
                    <thead class="table-light">
                    <tr>
                        <th scope="col" style="width: 70px;">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Tags</th>
                        <th scope="col">Projects</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>

                        @foreach ($users as $user)
                            <tr>
                                <td>
                                    <div class="avatar-xs">
                                        <span class="avatar-title rounded-circle" style="text-transform: uppercase; text-decoration:white;">
                                            {{ Illuminate\Support\Str::substr($user->name, 0, 1) }}
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="font-size-14 mb-1"><a href="{{route('admin.users.show', $user)}}" class="text-dark">{{$user->name}}</a></h5>
                                    <p class="text-muted mb-0">UI/UX Designer</p>
                                </td>
                                <td>david@skote.com</td>
                                <td>
                                    <div>
                                        <a href="#" class="badge badge-soft-primary font-size-11 m-1">Photoshop</a>
                                        <a href="#" class="badge badge-soft-primary font-size-11 m-1">illustrator</a>
                                    </div>
                                </td>
                                <td>
                                    125
                                </td>
                                <td>
                                    <ul class="list-inline font-size-20 contact-links mb-0">
                                        <li class="list-inline-item px-2">
                                            <a href="" title="Message"><i class="bx bxl-instagram"></i></a>
                                        </li>
                                        <li class="list-inline-item px-2">
                                            <a href="" title="Profile"><i class="bx bxl-facebook"></i></a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
