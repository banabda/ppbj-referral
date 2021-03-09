<!DOCTYPE html>
<html lang="en" class="light">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <link rel="icon" href="https://www.sekolahpengadaan.id/wp-content/uploads/2018/07/cropped-LOGO-LPKN2-32x32.png"
            sizes="32x32">
        <link rel="icon" href="https://www.sekolahpengadaan.id/wp-content/uploads/2018/07/cropped-LOGO-LPKN2-192x192.png"
            sizes="192x192">
        <link rel="apple-touch-icon"
            href="https://www.sekolahpengadaan.id/wp-content/uploads/2018/07/cropped-LOGO-LPKN2-180x180.png">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Pembelajaran dan pelatihan gratis">
        <meta name="keywords" content="LPKN - Referal registration Pembelajaran dan pelatihan gratis">
        <meta name="author" content="erikwii, z02">
        <title>Referral Registration</title>

        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="{{ asset('mone/css/app.css') }}" />
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.22/datatables.min.css"/>
        <!-- END: CSS Assets-->

        <!-- BEGIN: JS Assets-->
        <script src="{{ asset('jquery/jquery.min.js') }}"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.22/datatables.min.js"></script>

        <!-- toastr -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">

        <!-- SweetAlert2 -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <!-- END: JS Assets-->
    </head>
    <!-- END: Head -->
    <body class="app">
        <!-- BEGIN: Mobile Menu -->
        <div class="mobile-menu md:hidden">
            <div class="mobile-menu-bar">
                <a href="" class="flex mr-auto">
                    <img alt="Midone Tailwind HTML Admin Template" class="w-32" src="{{ asset('pron/img/logo_putih.png') }}">
                </a>
                <a href="javascript:;" id="mobile-menu-toggler"> <i data-feather="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
            </div>
            <ul class="border-t border-theme-24 py-5 hidden">
                <li>
                    <a href="{{ route('admin.dashboard') }}" class="menu menu--active">
                        <div class="menu__icon"> <i data-feather="home"></i> </div>
                        <div class="menu__title"> Dashboard </div>
                    </a>
                </li>
            </ul>
        </div>
        <!-- END: Mobile Menu -->
        <div class="flex">
            @include('layouts.nav.admin')
            
            @yield('content')
        </div>

        {{-- <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=["your-google-map-api"]&libraries=places"></script> --}}
        <script src="{{ asset('mone/js/app.js') }}"></script>
    </body>
</html>