@extends('layouts.backend')
@section('content')
<div class="row">
    <div class="col-12 col-lg-4 col-xxl-4 d-flex">
        <div class="card rounded-4 w-100 bg">
            <div class="card-body">
                <div class="">
                    <div class="d-flex align-items-center gap-2 mb-2">
                        <h5 class="mb-0">Lorem, ipsum dolor.</h5>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="">
                            <h3 class="mb-0 text-indigo">lorem</h3>
                            {{-- <button class="btn btn-grd btn-grd-primary rounded-5 border-0 px-4">View Details</button> --}}
                        </div>
                        <img src="{{asset('backend/assets/images/apps/01.png')}}" width="100" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-4 col-xxl-4 d-flex">
        <div class="card rounded-4 w-100 bg">
            <div class="card-body">
                <div class="">
                    <div class="d-flex align-items-center gap-2 mb-2">
                        <h5 class="mb-0">Lorem, ipsum dolor.</h5>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="">
                            <h3 class="mb-0 text-indigo">lorem</h3>
                            {{-- <button class="btn btn-grd btn-grd-primary rounded-5 border-0 px-4">View Details</button> --}}
                        </div>
                        <img src="{{asset('backend/assets/images/apps/02.png')}}" width="100" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-4 col-xxl-4 d-flex">
        <div class="card rounded-4 w-100 bg">
            <div class="card-body">
                <div class="">
                    <div class="d-flex align-items-center gap-2 mb-2">
                        <h5 class="mb-0">Lorem, ipsum dolor.</h5>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="">
                            <h3 class="mb-0 text-indigo">lorem</h3>
                            {{-- <button class="btn btn-grd btn-grd-primary rounded-5 border-0 px-4">View Details</button> --}}
                        </div>
                        <img src="{{asset('backend/assets/images/apps/03.png')}}" width="100" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 col-xxl-6 d-flex">
        <div class="card rounded-4 w-100">
            <div class="card-body">
                <div class="d-flex align-items-start justify-content-between mb-3">
                    <div class="">
                        <h5 class="mb-0">Transactions</h5>
                    </div>
                    <div class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle-nocaret options dropdown-toggle" data-bs-toggle="dropdown">
                        </a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table align-middle mb-0 table-striped">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Source Name</th>
                                <th>Status</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-xxl-6 d-flex">
        <div class="card rounded-4 w-100">
            <div class="card-body">
                <div class="d-flex align-items-start justify-content-between mb-3">
                    <div class="">
                        <h5 class="mb-0">Transactions</h5>
                    </div>
                    <div class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle-nocaret options dropdown-toggle" data-bs-toggle="dropdown">
                        </a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table align-middle mb-0 table-striped">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Source Name</th>
                                <th>Status</th>
                                <th>Amount</th>
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
@endsection