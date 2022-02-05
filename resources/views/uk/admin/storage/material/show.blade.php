@extends('layouts.admin')
@section('breadcrumbs')
@endsection
@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Product Detail</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                        <li class="breadcrumb-item active">Product Detail</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="product-detai-imgs">
                                <div class="row">
                                    <div class="col-md-2 col-sm-3 col-4">
                                        <div class="nav flex-column nav-pills " id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                            <a class="nav-link active" id="product-1-tab" data-bs-toggle="pill" href="#product-1" role="tab" aria-controls="product-1" aria-selected="true">
                                                <img src="{{asset($material->avatar)}}" alt="" class="img-fluid mx-auto d-block rounded">
                                            </a>
                                            <a class="nav-link" id="product-2-tab" data-bs-toggle="pill" href="#product-2" role="tab" aria-controls="product-2" aria-selected="false">
                                                <img src="{{asset('Skote/dist/assets/images/product/img-8.png')}}" alt="" class="img-fluid mx-auto d-block rounded">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-7 offset-md-1 col-sm-9 col-8">
                                        <div class="tab-content" id="v-pills-tabContent">
                                            <div class="tab-pane fade show active" id="product-1" role="tabpanel" aria-labelledby="product-1-tab">
                                                <div>
                                                    <img src="{{asset($material->avatar)}}" alt="" class="img-fluid mx-auto d-block" style="border-radius: 10px;">
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="product-2" role="tabpanel" aria-labelledby="product-2-tab">
                                                <div>
                                                    <img src="{{asset('Skote/dist/assets/images/product/img-8.png')}}" alt="" class="img-fluid mx-auto d-block"  style="border-radius: 10px;">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="button" class="btn btn-primary waves-effect waves-light mt-2 me-1">
                                                <i class="bx bx-cart me-2"></i> Add to cart
                                            </button>
                                            <button type="button" class="btn btn-success waves-effect  mt-2 waves-light">
                                                <i class="bx bx-shopping-bag me-2"></i>Buy now
                                            </button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <div class="mt-4 mt-xl-3">
                                <a href="#" class="text-primary">Headphone</a>
                                <h4 class="mt-1 mb-3">Wireless Headphone (Black)</h4>

                                <p class="text-muted float-start me-3">
                                    <span class="bx bxs-star text-warning"></span>
                                    <span class="bx bxs-star text-warning"></span>
                                    <span class="bx bxs-star text-warning"></span>
                                    <span class="bx bxs-star text-warning"></span>
                                    <span class="bx bxs-star"></span>
                                </p>
                                <p class="text-muted mb-4">( 152 Customers Review )</p>

                                <h6 class="text-success text-uppercase">20 % Off</h6>
                                <h5 class="mb-4">Price : <span class="text-muted me-2"><del>$240 USD</del></span> <b>$225 USD</b></h5>
                                <p class="text-muted mb-4">To achieve this, it would be necessary to have uniform grammar pronunciation and more common words If several languages coalesce</p>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div>
                                            <p class="text-muted"><i class="bx bx-unlink font-size-16 align-middle text-primary me-1"></i> Wireless</p>
                                            <p class="text-muted"><i class="bx bx-shape-triangle font-size-16 align-middle text-primary me-1"></i> Wireless Range : 10m</p>
                                            <p class="text-muted"><i class="bx bx-battery font-size-16 align-middle text-primary me-1"></i> Battery life : 6hrs</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div>
                                            <p class="text-muted"><i class="bx bx-user-voice font-size-16 align-middle text-primary me-1"></i> Bass</p>
                                            <p class="text-muted"><i class="bx bx-cog font-size-16 align-middle text-primary me-1"></i> Warranty : 1 Year</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="product-color">
                                    <h5 class="font-size-15">Color :</h5>
                                    <a href="#" class="active">
                                        <div class="product-color-item border rounded">
                                            <img src="assets/images/product/img-7.png" alt="" class="avatar-md">
                                        </div>
                                        <p>Black</p>
                                    </a>
                                    <a href="#">
                                        <div class="product-color-item border rounded">
                                            <img src="assets/images/product/img-7.png" alt="" class="avatar-md">
                                        </div>
                                        <p>Blue</p>
                                    </a>
                                    <a href="#">
                                        <div class="product-color-item border rounded">
                                            <img src="assets/images/product/img-7.png" alt="" class="avatar-md">
                                        </div>
                                        <p>Gray</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="mt-5">
                        <h5 class="mb-3">Specifications :</h5>

                        <div class="table-responsive">
                            <table class="table mb-0 table-bordered">
                                <tbody>
                                <tr>
                                    <th scope="row" style="width: 400px;">Category</th>
                                    <td>Headphone</td>
                                </tr>
                                <tr>
                                    <th scope="row">Brand</th>
                                    <td>JBL</td>
                                </tr>
                                <tr>
                                    <th scope="row">Color</th>
                                    <td>Black</td>
                                </tr>
                                <tr>
                                    <th scope="row">Connectivity</th>
                                    <td>Bluetooth</td>
                                </tr>
                                <tr>
                                    <th scope="row">Warranty Summary</th>
                                    <td>1 Year</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end card -->
        </div>
    </div>
    <!-- end row -->
@endsection

