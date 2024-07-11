@extends('layouts.backend')
@section('content')
<div class="row">
    
    <div class="col-12 col-lg-4 col-xxl-4 d-flex">
        <div class="card rounded-4 w-100 bg ">
            <div class="card-body" style="padding-bottom: 60px">
                <div class="">
                    <div class="d-flex align-items-center gap-2 mb-2">
                        <h5 class="mb-0">Penjualan Hari ini</h5>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="">
                            <h3 class="mb-0 text-indigo">Rp 5.000.000</h3>
                        </div>
                        
                        {{-- <img src="{{asset('backend/assets/images/apps/01.png')}}" width="100" alt=""> --}}
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
                        <h5 class="mb-0">Jumlah Kasir</h5>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="">
                            <h3 class="mb-0 text-indigo">{{$jumlahuser}}</h3>
                            {{-- <button class="btn btn-grd btn-grd-primary rounded-5 border-0 px-4">View Details</button> --}}
                        </div>
                        {{-- <img src="{{asset('backend/assets/images/apps/02.png')}}" width="100" alt=""> --}}
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
                        <h5 class="mb-0">Total Pelanggan</h5>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="">
                            <h3 class="mb-0 text-indigo">{{$jumlahpembayaran}}</h3>
                            {{-- <button class="btn btn-grd btn-grd-primary rounded-5 border-0 px-4">View Details</button> --}}
                        </div>
                        {{-- <img src="{{asset('backend/assets/images/apps/03.png')}}" width="100" alt=""> --}}
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
                        <h5 class="mb-0">Daftar Kasir</h5>
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
                                <th>No</th>
                                <th>Nama kasir</th>
                                <th>Kontrak</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $index => $data)
                                @if ($data->is_admin == '0')
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $data->name }}</td>
                                        <td>{{ $data->kontrak }}</td>
                                    </tr>
                                @endif
                            @endforeach
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
                        <h5 class="mb-0">Menu Terlaris</h5>
                    </div>
                    <div class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle-nocaret options dropdown-toggle" data-bs-toggle="dropdown">
                        </a>
                    </div>
                </div>
                <div class="table-responsive" style="height: 20rem">
                    <table class="table align-middle mb-0 table-striped" >
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Menu</th>
                                <th>Terjual</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($menu as $data)
                            <tr>
                                <th scope="row">{{ $loop->index+1 }}</th>
                                <td>{{$data->menu}}</td>
                                <td>{{$jumlahmenu}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
