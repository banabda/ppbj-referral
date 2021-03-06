<!DOCTYPE html>
<!--
Template Name: Midone - HTML Admin Dashboard Template
Author: Left4code
Website: http://www.left4code.com/
Contact: muhammadrizki@left4code.com
Purchase: https://themeforest.net/user/left4code/portfolio
Renew Support: https://themeforest.net/user/left4code/portfolio
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en" class="light">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="{{asset('mone/images/logo.svg')}}" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Midone admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Midone admin template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="LEFT4CODE">
        <title>Referral</title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="{{asset('mone/css/app.css')}}" />
        <link rel="stylesheet" href="{{asset('mone/css/perfect-scrollbar.css')}}" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/rrssb@1.14.0/css/rrssb.css" integrity="sha256-s4zpIQ3pRcSZ1dlTRAD+Rwi4lJWJGm8BuPJY6WeogTY=" crossorigin="anonymous">
        <!-- END: CSS Assets-->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.min.js"></script>
        <script src="{{ asset('jquery/jquery.min.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/rrssb@1.14.0/js/rrssb.min.js" integrity="sha256-xrFsHw7ZJJpMLC2mt+vC4lrvWZjduLMR4xKpz+ICR7Q=" crossorigin="anonymous"></script>
        <script src="{{ asset('mone/js/perfect-scrollbar.min.js') }}"></script>
    </head>
    <!-- END: Head -->
    <body class="app">
        <!-- BEGIN: Mobile Menu -->
        <div class="mobile-menu md:hidden">
            <div class="mobile-menu-bar">
                <a href="{{ route("landing") }}" class="flex mr-auto">
                    <img alt="Midone Tailwind HTML Admin Template" class="w-32" src="{{ asset('pron/img/logo_putih.png') }}">
                </a>
                <a href="javascript:;" id="mobile-menu-toggler"> <i data-feather="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
            </div>
            <ul class="border-t border-theme-24 py-5 hidden">
                <li>
                    <a href="javascript:;.html" class="menu menu--active">
                        <div class="menu__icon"> <i data-feather="link"></i> </div>
                        <div class="menu__title">Referral</div>
                    </a>
                </li>
            </ul>
        </div>
        <!-- END: Mobile Menu -->
        <div class="flex">
            <!-- BEGIN: Side Menu -->
            <nav class="side-nav">
                <a href="{{ route("landing") }}" class="intro-x flex items-center pl-5 pt-4">
                    <img alt="Midone Tailwind HTML Admin Template" class="w-56" src="{{ asset('pron/img/logo_putih.png') }}">
                    <!--<span class="hidden xl:block text-white text-lg ml-3"> LPKN </span>-->
                </a>
                <div class="side-nav__devider my-6"></div>
                <ul>
                    <li>
                        <a href="javascript:;.html" class="side-menu side-menu--active">
                            <div class="side-menu__icon"> <i data-feather="link"></i> </div>
                            <div class="side-menu__title">Referral</div>
                        </a>
                    </li>
                    <li class="side-nav__devider my-6"></li>
                </ul>
            </nav>
            <!-- END: Side Menu -->
            <!-- BEGIN: Content -->
            <div class="content">

                @yield('content')
                
            </div>
            <!-- END: Content -->
        </div>
        <!-- END: Dark Mode Switcher-->
        <!-- BEGIN: JS Assets-->
        <script src="{{asset('mone/js/app.js')}}"></script>
        <!-- END: JS Assets-->
    </body>
</html>