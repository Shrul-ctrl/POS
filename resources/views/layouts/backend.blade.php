<!doctype html>
<html lang="en" data-bs-theme="blue-theme">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>POS</title>
    <!--favicon-->
    {{-- <link rel="icon" href="{{asset('backend/assets/images/favicon-32x32.png')}}" type="image/png"> --}}
    <!-- loader-->
    <link href="{{asset('backend/assets/css/pace.min.css')}}" rel="stylesheet">
    <script src="{{asset('backend/assets/js/pace.min.js')}}"></script>

    <!--plugins-->
    <link href="{{asset('backend/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/plugins/metismenu/metisMenu.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/plugins/metismenu/mm-vertical.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/plugins/simplebar/css/simplebar.css')}}">
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
    @yield('css')

</head>

<body>

    <!--start header-->
    @include('include.backend.header')
    <!--end top header-->

    <!--start sidebar-->
   @include('include.backend.sidebar')
    <!--end sidebar-->

    <!--start main wrapper-->
    <main class="main-wrapper">
        <div class="main-content">
           <div class="row">
            @yield('content')
            </div>
        </div>
    </main>
    <!--end main wrapper-->


    <!--start overlay-->
    <div class="overlay btn-toggle"></div>
    <!--end overlay-->


    <!--start footer-->
    @include('include.backend.footer')
    <!--end footer-->

    <!--start switcher-->
    <button class="btn btn-grd btn-grd-primary position-fixed bottom-0 end-0 m-3 d-flex align-items-center gap-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop">
        <i class="material-icons-outlined">tune</i>Customize
    </button>

    <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="staticBackdrop">
        <div class="offcanvas-header border-bottom h-70">
            <div class="">
                <h5 class="mb-0">Theme Customizer</h5>
                <p class="mb-0">Customize your theme</p>
            </div>
            <a href="javascript:;" class="primaery-menu-close" data-bs-dismiss="offcanvas">
                <i class="material-icons-outlined">close</i>
            </a>
        </div>
        <div class="offcanvas-body">
            <div>
                <p>Theme variation</p>
                <div class="row g-3">
                    <div class="col-12 col-xl-6">
                        <input type="radio" class="btn-check" name="theme-options" id="DarkTheme">
                        <label class="btn btn-outline-secondary d-flex flex-column gap-1 align-items-center justify-content-center p-4" for="DarkTheme">
                            <span class="material-icons-outlined">dark_mode</span>
                            <span>Dark</span>
                        </label>
                    </div>
                </div>
                <!--end row-->

            </div>
        </div>
    </div>
    <!--start switcher-->

    <!--bootstrap js-->
    <script src="{{asset('backend/assets/js/bootstrap.bundle.min.js')}}"></script>

    <!--plugins-->
    <script src="{{asset('backend/assets/js/jquery.min.js')}}"></script>
    <!--plugins-->
    <script src="{{asset('backend/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('backend/assets/plugins/metismenu/metisMenu.min.js')}}"></script>
    <script src="{{asset('backend/assets/plugins/apexchart/apexcharts.min.js')}}"></script>
    <script src="{{asset('backend/assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
    <script src="{{asset('backend/assets/plugins/peity/jquery.peity.min.js')}}"></script>
    <script>
        $(".data-attributes span").peity("donut")

    </script>
    <script src="{{asset('backend/assets/js/dashboard2.js')}}"></script>
    <script src="{{asset('backend/assets/js/main.js')}}"></script>

    @yield('js')
    @stack('script')
</body>

</html>
