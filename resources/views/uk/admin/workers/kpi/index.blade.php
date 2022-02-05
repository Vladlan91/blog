@extends('layouts.admin')
@section('breadcrumbs')
@endsection
@section('content')

    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Персонал IV BUD</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Персонал</a></li>
                            <li class="breadcrumb-item active">Список персоналу</li>
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
                                <button type="button" class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2" data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl"><i class="mdi mdi-plus me-1"></i> СТВОРИТИ НОВОГО</button>
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


                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
