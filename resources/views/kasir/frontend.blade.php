<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>POS</title>
    <!--favicon-->
    {{-- <link rel="icon" href="{{asset('backend/assets/images/favicon-32x32.png')}}" type="image/png"> --}}
    <!-- loader-->
    <link href="    assets/css/pace.min.css')}}" rel="stylesheet">
    <script src="{{asset('backend/assets/js/pace.min.js')}}"></script>

    <!--plugins-->
    <link href="{{asset('backend/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/plugins/metismenu/metisMenu.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/plugins/metismenu/mm-vertical.css')}}">
    <link href="{{asset('backend/assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet">
    <!--bootstrap css-->
    <link href="{{asset('backend/assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined" rel="stylesheet">
    <!--main css-->
    <link href="{{asset('backend/assets/css/bootstrap-extended.css')}}" rel="stylesheet">
    <link href="{{asset('backend/sass/main.css')}}" rel="stylesheet">
    <link href="{{asset('backend/sass/dark-theme.css')}}" rel="stylesheet">
    <link href="{{asset('backend/sass/blue-theme.css')}}" rel="stylesheet">
    <link href="{{asset('backend/sass/semi-dark.css')}}" rel="stylesheet">
    <link href="{{asset('backend/sass/bordered-theme.css')}}" rel="stylesheet">
    <link href="{{asset('backend/sass/responsive.css')}}" rel="stylesheet">

</head>

<body>
    <div class="main-content">
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-lg-row flex-column align-items-start align-items-lg-center justify-content-between gap-3">
                    <div class="flex-grow-1" style="margin-left: 20px">
                        <h1 class="fw-bold pl">KASIR</h1>
                    </div>
                    <h5 class="user-name mb-0 fw-bold">{{ Auth::user()->name}}</h5>
                    <img src="https://placehold.co/110x110/png" class="rounded-circle" width="45" height="45" alt="">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-lg-8 d-flex">
                <div class="card w-100 ml-5">
                    <div class="card-body">
                        <nav class="navbar navbar-expand align-items-center gap-4">
                            <h2 class="fw-bold">Kategori</h2>
                            <div class="search-bar flex-grow-1">
                                <div class="position-relative">
                                    <input class="form-control rounded-5 px-5 search-control d-lg-block d-none" type="text" placeholder="Search">
                                    <span class="material-icons-outlined position-absolute d-lg-block d-none ms-3 translate-middle-y start-0 top-50">search</span>
                                    <span class="material-icons-outlined position-absolute me-3 translate-middle-y end-0 top-50 search-close">close</span>
                        </nav>
                        <div class="product-table">
                            <div class="table-responsive">
                                <div style=" overflow-x: hidden; overflow-y: scroll; width:100%px; height:410px; padding:50px; border:1px solid white">
                                    <div class="row row-cols-1 row-cols-xl-4">
                                        @foreach ($menu as $data)
                                        <a href="{{ route('kasirshow' , $data->id) }}" type="button" class="btn px-4" data-bs-toggle="modal" data-bs-target="#BasicModal">
                                            <div class="img-hover-zoom">
                                                <img src="{{ asset('images/menu/' . $data->gambar) }}" style="object-fit: cover;" alt="" class="card-img-top" alt="...">
                                            </div>


                                            <div class=" pt-2">
                                                <p class="fw-bold">{{$data->menu}}</p>
                                                <p class="fw-bold">Rp.{{$data->harga}}</p>
                                            </div>
                                        </a>
                                        <!-- Modal -->
                                        @endforeach
                                        @include('kasir.show')
                                    </div>
                                </div>
                                <hr>
                                <div class="card-body">
                                    <div class="row row-cols-auto g-4 justify-content-space-between">
                                        {{-- <form method="GET" action="{{route('kasir')}}">
                                            <select class="form-control" name="kategori" id="putih" id="exampleSelectGender">
                                                <option value="" {{ is_null(request()->get('id')) ? 'selected' : ''}}>Tampilkan Semua Kategori</option>
                                            @foreach ($kategori as $data)
                                                <option value="{{$data->id}}" {{request()->get('id') == $data->id ? 'selected' : ''}}>{{$data->nama_kategori}}</option>
                                            @endforeach
                                        </select>
                                        </form> --}}
                                        @foreach ($kategori as $data)
                                        <div class="col">
                                            <button type="button" class="btn btn-secondary px-5 p-4">{{$data->nama_kategori}}</button>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 d-flex">
                <div class="w-100">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4 fw-bold">Order Status</h4>
                            <div style=" overflow-x: hidden; overflow-y: scroll; width:100%px; height:230px; border:1px solid white">
                                <table class="table align-middle">
                                    <thead class="table-light">
                                        <tr>
                                            <th>
                                                <input class="form-check-input ms-0" type="checkbox">
                                            </th>
                                            <th>Product Name</th>
                                            <th>Quantity</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td> <input class="form-check-input ms-0" type="checkbox"></td>
                                            <td>Women Pink Floral Printed</td>
                                            <td>2</td>
                                            <td>$59</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <hr>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <button type="button" class="btn btn-secondary px-5" style="margin-left: 350px">Batal</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div>
                                <div class="d-flex justify-content-between">
                                    <p class="fw-semi-bold">Subtotal :</p>
                                    <p class="fw-semi-bold">$891</p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <p class="fw-semi-bold">Tax :</p>
                                    <p class="fw-semi-bold">$156.70</p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between border-top pt-4">
                                <h5 class="mb-0 fw-bold">Total :</h5>
                                <h5 class="mb-0 fw-bold">$925.44</h5>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="row row-cols-auto g-4 justify-content-space-between">
                                <div class="col">
                                    <button type="button" class="btn btn-secondary px-5">Baru</button>
                                </div>
                                <div class="col">
                                    <button type="button" class="btn btn-secondary px-5">Rekapan</button>
                                </div>
                                <div class="col">
                                    <button type="button" class="btn btn-secondary px-5">Bayar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>




    </div>
    </main>
 

    <!--bootstrap js-->
    <script src="{{asset('backend/assets/js/bootstrap.bundle.min.js')}}"></script>

    <!--plugins-->
    <script src="{{asset('backend/assets/js/jquery.min.js')}}"></script>
    <!--plugins-->
    <script src="{{asset('backend/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('backend/assets/plugins/metismenu/metisMenu.min.js')}}"></script>
    <script src="{{asset('backend/assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
    <script>
        new PerfectScrollbar(".user-list")

    </script>
    <script src="{{asset('backend/assets/js/main.js')}}"></script>


</body>

</html>
