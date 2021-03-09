<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Title -->
  <title>LPKN | Workshop</title>

  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}" />

  <!-- Favicon -->
  <link rel="shortcut icon" href="{{ asset("favicon.ico") }}">

  <!-- Google Fonts -->
 <link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="{{ asset("pron/vendor/font-awesome/css/fontawesome-all.min.css")}}">
  <link rel="stylesheet" href="{{ asset("pron/vendor/animate.css/animate.min.css")}}">
  <link rel="stylesheet" href="{{ asset("pron/vendor/hs-megamenu/src/hs.megamenu.css")}}">
  <link rel="stylesheet" href="{{ asset("pron/vendor/fancybox/jquery.fancybox.css")}}">
  <link rel="stylesheet" href="{{ asset("pron/vendor/slick-carousel/slick/slick.css")}}">
  <link rel="stylesheet" href="{{ asset("pron/vendor/cubeportfolio/css/cubeportfolio.min.css")}}">

  <!-- CSS Front Template -->
  <link rel="stylesheet" href="{{ asset("pron/css/theme.css")}}">
</head>
<body>
  <!-- ========== HEADER ========== -->
  <header id="header" class="u-header u-header-center-aligned-nav u-header--bg-transparent u-header--white-nav-links-md u-header--sub-menu-dark-bg-md u-header--abs-top mt-3"
          data-header-fix-moment="500"
          data-header-fix-effect="slide">
    <div class="u-header__section">
      <div id="logoAndNav" class="container">
        <!-- Nav -->
        <nav class="js-mega-menu navbar navbar-expand-md u-header__navbar u-header__navbar--no-space">
          <div class="u-header-center-aligned-nav__col">
            <!-- Logo -->
            <a class="navbar-brand u-header__navbar-brand u-header__navbar-brand-center u-header__navbar-brand-text-white" href="#" aria-label="Front">
              <img src="{{ asset("pron/img/logo_putih.png")}}">
              <!-- <span class="u-header__navbar-brand-text">L<span class="text-danger">P</span>KN</span> -->
            </a>
            <!-- End Logo -->

            <!-- Responsive Toggle Button -->
            {{-- <button type="button" class="navbar-toggler btn u-hamburger u-hamburger--white"
                    aria-label="Toggle navigation"
                    aria-expanded="false"
                    aria-controls="navBar"
                    data-toggle="collapse"
                    data-target="#navBar">
              <span id="hamburgerTrigger" class="u-hamburger__box">
                <span class="u-hamburger__inner"></span>
              </span>
            </button> --}}
            <!-- End Responsive Toggle Button -->
          </div>

        </nav>
        <!-- End Nav -->
      </div>
    </div>
  </header>
  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN ========== -->
  <main id="content" role="main">
    <!-- Hero v1 Section -->
    <div class="u-hero-v1">
      <!-- Hero Carousel Main -->
      <div id="heroNav" class="js-slick-carousel u-slick"
           data-autoplay="true"
           data-speed="10000"
           data-adaptive-height="true"
           data-arrows-classes="d-none d-lg-inline-block u-slick__arrow-classic u-slick__arrow-centered--y rounded-circle"
           data-arrow-left-classes="fas fa-arrow-left u-slick__arrow-classic-inner u-slick__arrow-classic-inner--left ml-lg-2 ml-xl-4"
           data-arrow-right-classes="fas fa-arrow-right u-slick__arrow-classic-inner u-slick__arrow-classic-inner--right mr-lg-2 mr-xl-4"
           data-numbered-pagination="#slickPaging"
           data-nav-for="#heroNavThumb">
        <div class="js-slide">
          <!-- Slide #1 -->
          <!-- <div class="d-lg-flex align-items-lg-center u-hero-v1__main" style="background-image: url({{ asset("pron/img/1920x800/img2.jpg")}});"> -->
          <div class="d-lg-flex align-items-lg-center u-hero-v1__main" style="background-image: url({{ asset("pron/img/header_menulis.jpg")}});">
            <div class="container space-3 space-top-md-5 space-top-lg-3">
              <div class="row">
                <div class="col-md-12 col-lg-12 position-relative text-center">
                  <span class="d-block h4 text-white font-weight-light mb-2"
                        data-scs-animation-in="fadeInUp">
                    Workshop Online
                  </span>
                  <h1 class="text-white display-1 font-size-md-down-5 mb-0"
                      data-scs-animation-in="fadeInUp"
                      data-scs-animation-delay="200">
                    MENULIS<!--  <span class="font-weight-semi-bold">Ekonomi & Keuangan</span> Digital Indonesia Tahun 2025 -->
                  </h1>
                  <span class="d-block h3 text-white font-weight-light mb-2"
                        data-scs-animation-in="fadeInUp">
                    SEMUDAH TERSENYUM & UPDATE STATUS
                  </span>
                  <span class="d-block h4 text-white font-weight-light mb-2"
                        data-scs-animation-in="fadeInUp">
                    (Strategi Membuat tulisan yang Menarik dan Laris)
                  </span>
                  <span class="d-block h5 text-white font-weight-light mb-2"
                        data-scs-animation-in="fadeInUp">
                    Selasa – Kamis / 24 – 26 November 2020
                  </span>
                  <span class="d-block h4 text-warning font-weight-light mb-2"
                        data-scs-animation-in="fadeInUp">
                    Quota Terbatas
                  </span>
                    @if(session("lpkn_ref_email"))
                        <a class="btn btn-sm btn-warning transition-3d-hover" href="{{ route('referral.pendaftaran') }}">
                            Referral Saya
                        </a>
                    @else
                        <a class="btn btn-sm btn-warning transition-3d-hover" href="#footer">
                            Daftar Sekarang
                        </a>
                    @endif
                </div>
              </div>
            </div>
          </div>
          <!-- End Slide #1 -->
        </div>

        {{-- <div class="js-slide">
          <!-- Slide #2 -->
          <div class="d-lg-flex align-items-lg-center u-hero-v1__main" style="background-image: url({{ asset("pron/img/1920x800/img3.jpg")}});">
            <div class="container space-3 space-top-md-5 space-top-lg-3">
              <div class="row">
                <div class="col-md-8 col-lg-6">
                  <span class="d-block h4 text-white font-weight-light mb-2"
                        data-scs-animation-in="fadeInUp">
                    It is an
                  </span>
                  <h2 class="text-white display-4 font-size-md-down-5 mb-0"
                      data-scs-animation-in="fadeInUp"
                      data-scs-animation-delay="200">
                    <span class="font-weight-semi-bold">Easy</span> business with Front template
                  </h2>
                </div>
              </div>
            </div>
          </div>
          <!-- End Slide #2 -->
        </div> --}}
      </div>
      <!-- End Hero Carousel Main -->

      <!-- Slick Paging 
      <div class="container position-relative">
        <div id="slickPaging" class="u-slick__paging"></div>
      </div>
       End Slick Paging -->

      <!-- Hero Carousel Secondary -->
      <div id="heroNavThumb" class="js-slick-carousel u-slick"
           data-autoplay="true"
           data-speed="10000"
           data-is-thumbs="true"
           data-nav-for="#heroNav">
        <div class="js-slide">
          <!-- Slide #1 -->
          <div class="d-flex align-items-center bg-white u-hero-v1__secondary">
            <div class="container space-2">
              <div class="row">
                <div class="col-lg-6">
                  <h2 class="text-muted">
                    <span class="d-block">Pendaftaran berakhir pada</span>
                    <span class="d-block text-warning" id="countdown"></span>
                  </h2>
                  <!--<h3 class="mt-4 d-block d-md-none">-->
                  <!--  <strong>Jumlah peserta:</strong> <br>-->
                  <!--  <span>{{ isset($total_user) ? number_format($total_user, 0 ,".", ",") : 0 }} orang</span>-->
                  <!--</h3>-->
                  {{-- <p class="mb-0">Modify any aspect of your website or pages with Front.</p> --}}
                </div>
              </div>
            </div>

            <div class="w-100 h-100 d-none d-lg-inline-block u-hero-v1__last" style="background-image: url('{{ asset("pron/img/header_menulis.jpg")}}');">
              <div class="u-hero-v1__last-inner">
                <!--<h3 class="h3 text-white">-->
                <!--  <strong>Jumlah peserta:</strong> <br>-->
                <!--  <span>{{ isset($total_user) ? number_format($total_user, 0 ,".", ",") : 0 }} orang</span>-->
                <!--</h3>-->
                {{-- <p class="text-white-70 mb-0">Let visitors to view your content from their choice of device.</p> --}}
              </div>
            </div>
          </div>
          <!-- End Slide #1 -->
        </div>

        {{-- <div class="js-slide">
          <!-- Slide #2 -->
          <div class="d-flex align-items-center bg-white u-hero-v1__secondary">
            <div class="container space-2">
              <div class="row">
                <div class="col-lg-4">
                  <h3 class="h5 text-muted">
                    <strong class="d-block">02.</strong>
                    <span class="d-block text-danger">Fully responsive</span>
                  </h3>
                  <p class="mb-0">Let visitors to view your content from their choice of device.</p>
                </div>
              </div>
            </div>

            <div class="w-100 h-100 d-none d-lg-inline-block bg-danger u-hero-v1__last">
              <div class="u-hero-v1__last-inner">
                <h3 class="h5 text-white">
                  <strong class="u-hero-v1__last-prev">Prev:</strong> Advanced editing
                </h3>
                <p class="text-white-70 mb-0">Modify any aspect of your website with Front</p>
              </div>
            </div>
          </div>
          <!-- End Slide #2 -->
        </div> --}}
      </div>
      <!-- End Hero Carousel Secondary -->
    </div>
    <!-- End Hero v1 Section -->

    <hr class="my-0">

    <div id="SVGwave1BottomSMShape" class="position-relative gradient-half-primary-v1" style="background-image: linear-gradient(150deg, #d8ae5a 0%, #ffffff 100%);">
      <div class="container space-2 space-md-3">
        <div class="row justify-content-between align-items-center">
          <!-- Testimonials -->
          <div class="col-lg-6 mb-8 mb-lg-0 text-center">
          <!-- <div class="text-center"> -->
  <!--           <div class="u-avatar mx-auto mb-4">
              <img class="img-fluid rounded-circle" src="../../assets/img/100x100/img2.jpg" alt="Image Description">
            </div> -->
            <h1 class="display-5 font-size-md-down-5 mb-0"
                        data-scs-animation-in="fadeInUp"
                        data-scs-animation-delay="200">Apakah Anda ingin :</h1>
            <div class="w-md-80 w-lg-20 text-left mx-md-auto mb-7">
              <blockquote class="h5 font-weight-light mb-0">
                <ul>
                  <li>Menjadi Penulis Buku ?</li>
                  <li>Memiliki Penghasilan Sebagai Penulis ?</li>
                  <li>Menjadi Pembicara di berbagai Event ?</li>
                  <li>Menyalurkan Ilmu anda ke berbagai Pihak ?</li>
                  <li>Menjadi Terkenal ?</li>
                  <li>Menyalurkan Hoby dalam bentuk tulisan ?</li>
                  <li>Mengubah Nilai Kertas Kosong menjadi Nilai Puluhan bahkan Ratusan Juta ?</li>
                  <li>Mendulang Amal melalui Ilmu yang Anda Bagikan ?</li>
                </ul>
                <div class="text-center"><strong>Jika Ya</strong> ...maka anda tepat mengikuti Workshop ini.</div>
              </blockquote>
            </div>
                @if(!session("lpkn_ref_email"))
                  <a class="btn btn-sm btn-warning btn-wide transition-3d-hover" href="#footer">Daftar Sekarang <span class="fas fa-angle-right ml-2"></span></a>
                @endif
            <!-- <h4 class="h5 text-warning mb-0">Maria Muszynska</h4> -->
          </div>
          <!-- End Testimonials -->

          <div class="col-lg-6 position-relative">
            <!-- Image Gallery -->
            <div class="row mx-gutters-2">
            <!--
              <div class="col-5 align-self-end px-2 mb-3">
                
                <a class="js-fancybox u-media-viewer" href="javascript:;"
                   data-src="{{ asset("pron/img/gratis/iso_1.png")}}"
                   data-fancybox="lightbox-gallery-hidden"
                   data-caption="Front in frames - image #01"
                   data-speed="700">
                  <img class="img-fluid rounded" src="{{ asset("pron/img/gratis/iso_1.png")}}" alt="Image Description">

                  <span class="u-media-viewer__container">
                    <span class="u-media-viewer__icon">
                      <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                    </span>
                  </span>
                </a>
                
              </div>
                -->
              <div class="col-12 px-2 mb-1">
                <!-- Fancybox -->
                <a class="js-fancybox u-media-viewer" href="javascript:;"
                   data-src="{{ asset("pron/img/brosur_menulis.png")}}"
                   data-fancybox="lightbox-gallery-hidden"
                   data-caption="Front in frames - image #02"
                   data-speed="700">
                  <img class="img-fluid rounded" src="{{ asset("pron/img/brosur_menulis.png")}}" alt="Image Description">

                  <span class="u-media-viewer__container">
                    <span class="u-media-viewer__icon">
                      <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                    </span>
                  </span>
                </a>
                <!-- End Fancybox -->
              </div>


            </div>
            <!-- End Image Gallery -->
          </div>
        </div>
      </div>

      <!-- SVG Quote -->
      <figure class="w-25 position-absolute top-0 right-0 left-0 left-15x">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 8 8" style="enable-background:new 0 0 8 8;" xml:space="preserve">
          <path class="fill-white" opacity=".075" d="M3,1.3C2,1.7,1.2,2.7,1.2,3.6c0,0.2,0,0.4,0.1,0.5c0.2-0.2,0.5-0.3,0.9-0.3c0.8,0,1.5,0.6,1.5,1.5c0,0.9-0.7,1.5-1.5,1.5
            C1.4,6.9,1,6.6,0.7,6.1C0.4,5.6,0.3,4.9,0.3,4.5c0-1.6,0.8-2.9,2.5-3.7L3,1.3z M7.1,1.3c-1,0.4-1.8,1.4-1.8,2.3
            c0,0.2,0,0.4,0.1,0.5c0.2-0.2,0.5-0.3,0.9-0.3c0.8,0,1.5,0.6,1.5,1.5c0,0.9-0.7,1.5-1.5,1.5c-0.7,0-1.1-0.3-1.4-0.8
            C4.4,5.6,4.4,4.9,4.4,4.5c0-1.6,0.8-2.9,2.5-3.7L7.1,1.3z"></path>
        </svg>
      </figure>
      <!-- End SVG Quote -->

      <!-- SVG Background 
      <figure class="position-absolute right-0 bottom-0 left-0">
        <img class="js-svg-injector" src="" alt="Image Description" data-parent="#SVGwave1BottomSMShape">
      </figure>
       End SVG Background Section -->
    </div>


    <!-- Front in Frames Section -->
    <div class="overflow-hidden">
      <div class="container space-2 space-md-3">
        <div class="text-center w-md-90 mx-auto mb-7">
                <!-- <span class="u-label u-label--sm u-label--success mb-2">Tentang Sosialisasi</span> -->
          <!-- <h2 class="text-primary">LATAR BELAKANG</h2> -->
          <h2>Segera Serap ilmu dan pengalaman dari 4 Penulis Buku yang telah menjadikan Karya tulis sebagai salah satu sumber Amal dan Penghasilan.</h2>     
        </div>
        <div class="row justify-content-between align-items-center">

          <div class="col-lg-6 position-relative">
            <!-- Image Gallery -->
            <div class="row mx-gutters-2">
              <div class="col-5 align-self-end px-2 mb-3">
                <!-- Fancybox -->
                <a class="js-fancybox u-media-viewer" href="javascript:;"
                   data-src="{{ asset("pron/img/buku/buku_1.jpg")}}"
                   data-fancybox="lightbox-gallery-hidden"
                   data-caption="Front in frames - image #01"
                   data-speed="700">
                  <img class="img-fluid rounded" src="{{ asset("pron/img/buku/buku_1.jpg")}}" alt="Image Description">

                  <span class="u-media-viewer__container">
                    <span class="u-media-viewer__icon">
                      <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                    </span>
                  </span>
                </a>
                <!-- End Fancybox -->
              </div>

              <div class="col-7 px-2 mb-3">
                <!-- Fancybox -->
                <a class="js-fancybox u-media-viewer" href="javascript:;"
                   data-src="{{ asset("pron/img/buku/buku_2.jpg")}}"
                   data-fancybox="lightbox-gallery-hidden"
                   data-caption="Front in frames - image #02"
                   data-speed="700">
                  <img class="img-fluid rounded" src="{{ asset("pron/img/buku/buku_2.jpg")}}" alt="Image Description">

                  <span class="u-media-viewer__container">
                    <span class="u-media-viewer__icon">
                      <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                    </span>
                  </span>
                </a>
                <!-- End Fancybox -->
              </div>

              <div class="col-5 offset-1 px-2 mb-3">
                <!-- Fancybox -->
                <a class="js-fancybox u-media-viewer" href="javascript:;"
                   data-src="{{ asset("pron/img/buku/buku_3.jpg")}}"
                   data-fancybox="lightbox-gallery-hidden"
                   data-caption="Front in frames - image #03"
                   data-speed="700">
                  <img class="img-fluid rounded" src="{{ asset("pron/img/buku/buku_3.jpg")}}" alt="Image Description">

                  <span class="u-media-viewer__container">
                    <span class="u-media-viewer__icon">
                      <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                    </span>
                  </span>
                </a>
                <!-- End Fancybox -->
              </div>

              <div class="col-5 px-2 mb-3">
                <!-- Fancybox -->
                <a class="js-fancybox u-media-viewer" href="javascript:;"
                   data-src="{{ asset("pron/img/buku/buku_4.jpg")}}"
                   data-fancybox="lightbox-gallery-hidden"
                   data-caption="Front in frames - image #04"
                   data-speed="700">
                  <img class="img-fluid rounded" src="{{ asset("pron/img/buku/buku_4.jpg")}}" alt="Image Description">

                  <span class="u-media-viewer__container">
                    <span class="u-media-viewer__icon">
                      <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                    </span>
                  </span>
                </a>
                <!-- End Fancybox -->
              </div>
            </div>
            <!-- End Image Gallery -->

            <!-- SVG Background Shape -->
            <div id="SVGbgShapeID12" class="svg-preloader w-100 content-centered-y z-index-n1">
              <figure class="ie-soft-triangle-shape">
                <img class="js-svg-injector" src="{{ asset("pron/svg/components/soft-triangle-shape.svg")}}" alt="Image Description"
                     data-parent="#SVGbgShapeID12">
              </figure>
            </div>
            <!-- End SVG Background Shape -->
          </div>

          <div class="col-lg-5 mb-7 mb-lg-0">
            <div class="pr-md-4">
              <!-- Title -->
              <div class="mb-7">
                <!-- <span class="u-label u-label--sm u-label--success mb-2">Tentang Workshop</span> -->
                <!-- <h2 class="text-warning">Workshop ini Akan membekali Anda :  -->
                <h2 class="text-warning">WORKSHOP INI AKAN MEMBEKALI ANDA : 
                  <!-- <span class="font-weight-semi-bold">digital</span> -->
                </h2>
                <p>
                  <ol>
                    <li>Teknik Branding diri melalui Tulisan</li>
                    <li>Bagaimana Roadmap Menulis Buku</li>
                    <li>Membangun Kreatifitas dan Kepercayaan diri</li>
                    <li>Memahami kerangka Penulisan secara Sistimatis</li>
                    <li>Strategi menyusun kata yang menghipnotis pembaca</li>
                    <li>Membuat Judul Buku yang menarik pembeli</li>
                  </ol>
                </p>
              </div>
              <!-- End Title -->

              @if(!session("lpkn_ref_email"))
                <a class="btn btn-sm btn-warning btn-wide transition-3d-hover" href="#footer">Daftar Sekarang <span class="fas fa-angle-right ml-2"></span></a>
              @endif
            </div>
          </div>

          <div class="col-lg-5 mb-7 mb-lg-0">
            <div class="pr-md-4">
              <!-- Title -->
              <div class="mb-7">
                <!-- <span class="u-label u-label--sm u-label--success mb-2">Tentang Workshop</span> -->
                <h2 class="text-warning">PEMATERI<br/>WORKSHOP ONLINE INI
                  <!-- <span class="font-weight-semi-bold">digital</span> -->
                </h2>
                Workshop ini akan menghadirkan 4 Penulis Buku yang siap memberikan Ilmu dan Pengalamannya kepada Anda. Seluruh pemateri adalah Praktisi dalam Penulisan Buku, sehingga sangat tepat untuk anda ikuti.
                <p>
                  <ul>
                    <li>Andi Arsyil Rahman (Artis ,Penulis 9 Buku Best Seller, Sutradara)</li>
                    <li>Prof. Dr. Wahyudi Siswanto, M.Pd (Penulis 54 Buku, Dosen, Pengusaha)</li>
                    <li>Bayu Aji Prasetyo (Penulis 3 Buku Best-Seller, Professional Coach Pemberdayaan Diri)</li>
                    <li>David MinG (Profesional Ghost Writer, Penerbit)</li>
                  </ul>
                </p>
              </div>
              <!-- End Title -->
              <div class="mb-7">
                <!-- <span class="u-label u-label--sm u-label--success mb-2">Tentang Workshop</span> -->
                <h2 class="text-warning">MATERI YANG ANDA PELAJARI ANTARA LAIN :
                  <!-- <span class="font-weight-semi-bold">digital</span> -->
                </h2>
                <p>
                  <ul>
                    <li>Menjadi Selebritas dan Pengusaha Dari Goresan Pena</li>
                    <li>Membuat Konsep Buku “Writing Goal”</li>
                    <li>Teknik Menulis Semudah Tersenyum</li>
                    <li>Strategi Menulis Buku Yang Menarik Dan Laris Di Pasaran</li>
                  </ul>
                </p>
              </div>
              <!-- End Title -->

              <!-- End Title -->

              @if(!session("lpkn_ref_email"))
                <a class="btn btn-sm btn-warning btn-wide transition-3d-hover" href="#footer">Daftar Sekarang <span class="fas fa-angle-right ml-2"></span></a>
              @endif
            </div>
          </div>


          <div class="col-lg-6 position-relative">
            <!-- Image Gallery -->
            <div class="row mx-gutters-2">
              <div class="col-5 align-self-end px-2 mb-3">
                <!-- Fancybox -->
                <a class="js-fancybox u-media-viewer" href="javascript:;"
                   data-src="{{ asset("pron/img/pemateri/pemateri-01.png")}}"
                   data-fancybox="lightbox-gallery-hidden"
                   data-caption="Front in frames - image #01"
                   data-speed="700">
                  <img class="img-fluid rounded" src="{{ asset("pron/img/pemateri/pemateri-01.png")}}" alt="Image Description">

                  <span class="u-media-viewer__container">
                    <span class="u-media-viewer__icon">
                      <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                    </span>
                  </span>
                </a>
                <!-- End Fancybox -->
              </div>

              <div class="col-5 px-2 mb-3">
                <!-- Fancybox -->
                <a class="js-fancybox u-media-viewer" href="javascript:;"
                   data-src="{{ asset("pron/img/pemateri/pemateri-02.png")}}"
                   data-fancybox="lightbox-gallery-hidden"
                   data-caption="Front in frames - image #02"
                   data-speed="700">
                  <img class="img-fluid rounded" src="{{ asset("pron/img/pemateri/pemateri-02.png")}}" alt="Image Description">

                  <span class="u-media-viewer__container">
                    <span class="u-media-viewer__icon">
                      <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                    </span>
                  </span>
                </a>
                <!-- End Fancybox -->
              </div>

              <div class="col-5 offset-1 px-2 mb-3">
                <!-- Fancybox -->
                <a class="js-fancybox u-media-viewer" href="javascript:;"
                   data-src="{{ asset("pron/img/pemateri/pemateri-03.png")}}"
                   data-fancybox="lightbox-gallery-hidden"
                   data-caption="Front in frames - image #03"
                   data-speed="700">
                  <img class="img-fluid rounded" src="{{ asset("pron/img/pemateri/pemateri-03.png")}}" alt="Image Description">

                  <span class="u-media-viewer__container">
                    <span class="u-media-viewer__icon">
                      <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                    </span>
                  </span>
                </a>
                <!-- End Fancybox -->
              </div>

              <div class="col-5 px-2 mb-3">
                <!-- Fancybox -->
                <a class="js-fancybox u-media-viewer" href="javascript:;"
                   data-src="{{ asset("pron/img/pemateri/pemateri-04.png")}}"
                   data-fancybox="lightbox-gallery-hidden"
                   data-caption="Front in frames - image #04"
                   data-speed="700">
                  <img class="img-fluid rounded" src="{{ asset("pron/img/pemateri/pemateri-04.png")}}" alt="Image Description">

                  <span class="u-media-viewer__container">
                    <span class="u-media-viewer__icon">
                      <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                    </span>
                  </span>
                </a>
                <!-- End Fancybox -->
              </div>
            </div>
            <!-- End Image Gallery -->

            <!-- SVG Background Shape -->
            <div id="SVGbgShapeID1" class="svg-preloader w-100 content-centered-y z-index-n1">
              <figure class="ie-soft-triangle-shape">
                <img class="js-svg-injector" src="{{ asset("pron/svg/components/soft-triangle-shape.svg")}}" alt="Image Description"
                     data-parent="#SVGbgShapeID1">
              </figure>
            </div>
            <!-- End SVG Background Shape -->
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
          </div>
          <!-- <p></p><br/> -->

        <div class="text-center w-md-90 mx-auto mb-7">
                <!-- <span class="u-label u-label--sm u-label--success mb-2">Tentang Sosialisasi</span> -->
          <!-- <h2 class="text-primary">LATAR BELAKANG</h2> -->
          <h2>Berapa Biaya <strong>Investasi Otak</strong> dan <strong>Skill Berharga</strong> ini ?
            <br/>Kelas sejenis biasanya di Harga <strong>Rp. 1.250.000,</strong> tapi kami memberikan Harga Khusus untuk Anda, anda cukup membayar <strong>Rp. 250.000,-</strong> untuk kelas Berharga ini.
            <br/>Dengan Harga tersebut Anda akan memiliki <strong>Modal ilmu</strong> untuk menghasilkan berbagai <strong>Karya yang bernilai.</strong>
</h2>     
        </div>



        </div>
      </div>
    </div>
    <!-- End Front in Frames Section -->



    <!-- Devices v2 Section -->
    <div id="SVGSubscribe" class="svg-preloader bg-primary u-devices-v2" style="background-color: #c99c49 !important;">
      <div class="container space-2 space-md-3 position-relative z-index-2" style="padding-bottom: 0rem !important;">
        <!-- Title -->
        <div class="w-md-80 text-center w-lg-50 mx-md-auto">
          <span class="btn btn-lg btn-icon btn-white rounded-circle mb-4">
            <span class="fas fa-gift text-warning btn-icon__inner"></span>
          </span>
          <h2 class="h1 text-white text-left">Fasilitas yang anda dapatkan :</h2>
        </div>
        <div class="w-md-80 w-lg-50 mx-md-auto">
            <blockquote class="h4 text-white font-weight-light mb-0">
              <ul class="text-white">
                <li>Mengikuti kelas dari 4 Penulis Buku</li>
                <li>Materi Pelatihan</li>
                <li>Video Rekaman Pembelajaran</li>
                <li>E- Sertifikat </li>
              </ul>
            </blockquote>
            </br>

            <!--
            <h4 class="h4 text-white">
            <li>
              Hadiah bagi para peserta yang terbanyak mendapatkan peserta melalui link registrasi
            </h4>
            <blockquote class="h4 text-white font-weight-light mb-0">
              <ul class="text-white">
                <li>Hadiah 1 : 2.000.000,-</li>
                <li>Hadiah 2 : 2.000.000,-</li>
                <li>Hadiah 3 : 500.000,-</li>
              </ul>
            </blockquote>
            </br>
            </li>
          -->
          </ol>
        </div>
        <!-- End Title -->
        <div class="w-md-80 text-center w-lg-50 mx-md-auto">
          <h3 class="text-left text-white font-weight-light">Kami juga berikan Bonus Tambahan Buat Anda, berupa berbagai Template Media Promosi, yang Anda Dapat Manfaatkan, untuk mempromosikan Buku Anda Kelak, Aamin.</h3>
          <h2 class="h1 text-white text-left">Bonus senilai Rp. 450.000,-</h2>
        </div>
        <div class="w-md-80 w-lg-50 mx-md-auto">
            <blockquote class="h4 text-white font-weight-light mb-0">
              <ul class="text-white">
                <li>162 Template Post Instagram</li>
                <li>98 Template FB Ads</li>
                <li>96 Template Story Instagram</li>
                <li>20 Template Quotes</li>
                <li>110 Multi Character Pack</li>
                <li>Video Panduan Photoshop</li>
              </ul>
            </blockquote>
            </br>
          </div>
      </div>



      <!-- Devices v2 -->
      <div class="d-none d-lg-block">
        <!-- SVG Tablet Mockup -->
        <div class="u-devices-v2__tablet">
          <div class="w-75 u-devices-v2__tablet-svg">
            <figure class="ie-devices-v2-tablet">
              <!--
              <img class="js-svg-injector" src="{{ asset("pron/svg/components/tablet.svg")}}" alt="Image Description"
                   data-img-paths='[
                     {"targetId": "#SVGtabletImg1", "newPath": "{{ asset("pron/img/282x500/img1.jpg")}}"}
                   ]'
                   data-parent="#SVGSubscribe">
              -->
            </figure>
          </div>
        </div>
        <!-- End SVG Tablet Mockup -->

        <!-- SVG Phone Mockup -->
        <div class="u-devices-v2__phone">
          <div class="w-75 u-devices-v2__phone-svg">
            <figure class="ie-devices-v2-iphone">
              <!--
              <img class="js-svg-injector" src="{{ asset("pron/svg/components/iphone.svg")}}" alt="Image Description"
                   data-img-paths='[
                     {"targetId": "#SVGiphoneImg1", "newPath": "{{ asset("pron/img/282x500/img1.jpg")}}"}
                   ]'
                   data-parent="#SVGSubscribe">
              -->
            </figure>
          </div>
        </div>
        <!-- End SVG Phone Mockup -->
      </div>
      <!-- End Devices v2 -->

      <!-- SVG Background Shape -->
      <figure class="w-100 content-centered-y position-absolute right-0 bottom-0">
        <img class="js-svg-injector" src="{{ asset("pron/svg/components/process-pointer-1.svg")}}" alt="Image Description"
             data-parent="#SVGSubscribe">
      </figure>
      <!-- End SVG Background Shape -->
    </div>
    <!-- End Devices v2 Section -->

    <!-- Team Section -->
    <div class="container space-top-2 space-top-md-2 text-center" id="daftar_section">
      <!-- Title -->
      <div class="w-md-80 w-lg-50 text-center mx-md-auto mb-9 text-center">
        <span class="u-label u-label--sm u-label--success mb-2">LPKN</span>
        <h2 class="text-primary">Segera <span class="font-weight-semi-bold">Mendaftar</span></h2>
        <p>Ayo kembangkan diri Anda</p>
      </div>
      <!-- End Title -->

      @if(!session("lpkn_ref_email"))
      <div class="row">
          <div class="col-md-8 offset-md-2">
            <form id="acaraForm" action="{{ route("acara.daftar") }}" method="POST">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="exampleFormControlInput1">Nama Lengkap</label>
                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fas fa-user text-dark"></i></span>
                            </div>
                            <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Untuk Sertifikat" required>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleFormControlInput1">Email address</label>
                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fas fa-envelope-open text-dark"></i></span>
                            </div>
                            <input type="text" name="email" class="form-control" placeholder="user@example.com" required>
                        </div>
                    </div>
                    @isset($ref)
                    <div class="form-group col-6 d-none">
                        <label for="exampleFormControlInput1">Referral</label>
                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fas fa-building text-dark"></i></span>
                            </div>
                            <input type="text" name="ref" value="{{ $ref }}" class="form-control" id="ref_field">
                        </div>
                    </div>
                    @endisset
                </div>
                @isset($ref)
                    <span class="float-left">Referral: <span class="text-primary">{{$ref}}</span></span>
                @endisset
                <div class="col-6 offset-3 mt-2">
                  <center><button type="submit" class="btn btn-primary btn-sm btn-block">Daftar</button></center>
                </div>
              </form>
          </div>
      </div>
      <button type="button" class="btn btn-warning mt-4" data-toggle="modal" data-target="#refModal">
          Sudah mendaftar? check referral anda.
        </button>
      @else
        <a class="btn btn-sm btn-primary transition-3d-hover text-center mb-5" href="{{ route('referral.pendaftaran') }}">
            Referral Saya
        </a>
      @endif
      



  <!-- ========== FOOTER ========== space-top-2 space-top-md-3 -->
  <footer class="container" id="footer">
    <hr>

    <div class="d-flex justify-content-between align-items-center py-7">
      <!-- Copyright -->
      <p class="small text-muted mb-0">&copy; Lembaga Pengembangan dan Konsultasi Nasional: {{ date('Y') }}.</p>
      <!-- End Copyright -->

      <!-- Social Networks -->
     <!-- End Social Networks -->
    </div>
    
    <!-- Modal -->
    <div class="modal fade" id="refModal" tabindex="-1" aria-labelledby="refModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Harap masukan email anda..</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form id="refGetForm" action="{{ route('referral.set.sess') }}" method="POST">
          <div class="modal-body">
                <div class="form-group">
                        <label for="exampleFormControlInput1">Email address</label>
                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fas fa-envelope-open text-dark"></i></span>
                            </div>
                            <input type="text" name="email" class="form-control" placeholder="user@example.com" required>
                        </div>
                    </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button class="btn btn-primary">Submit</button>
          </div>
          </form>
        </div>
      </div>
    </div>
  </footer>
  <!-- ========== END FOOTER ========== -->

  <!-- Go to Top -->
  <a class="js-go-to u-go-to" href="#"
    data-position='{"bottom": 15, "right": 15 }'
    data-type="fixed"
    data-offset-top="400"
    data-compensation="#header"
    data-show-effect="slideInUp"
    data-hide-effect="slideOutDown">
    <span class="fas fa-arrow-up u-go-to__inner"></span>
  </a>
  <!-- End Go to Top -->

  <!-- JS Global Compulsory -->
  <script src="{{ asset("pron/vendor/jquery/dist/jquery.min.js")}}"></script>
  <script src="{{ asset("pron/vendor/jquery-migrate/dist/jquery-migrate.min.js")}}"></script>
  <script src="{{ asset("pron/vendor/popper.js/dist/umd/popper.min.js")}}"></script>
  <script src="{{ asset("pron/vendor/bootstrap/bootstrap.min.js")}}"></script>

  <!-- JS Implementing Plugins -->
  <script src="{{ asset("pron/vendor/hs-megamenu/src/hs.megamenu.js")}}"></script>
  <script src="{{ asset("pron/vendor/svg-injector/dist/svg-injector.min.js")}}"></script>
  <script src="{{ asset("pron/vendor/fancybox/jquery.fancybox.min.js")}}"></script>
  <script src="{{ asset("pron/vendor/slick-carousel/slick/slick.js")}}"></script>
  <script src="{{ asset("pron/vendor/jquery-validation/dist/jquery.validate.min.js")}}"></script>
  <script src="{{ asset("pron/vendor/cubeportfolio/js/jquery.cubeportfolio.min.js")}}"></script>

  <!-- JS Front -->
  <script src="{{ asset("pron/js/hs.core.js")}}"></script>
  <script src="{{ asset("pron/js/components/hs.header.js")}}"></script>
  <script src="{{ asset("pron/js/components/hs.unfold.js")}}"></script>
  <script src="{{ asset("pron/js/components/hs.fancybox.js")}}"></script>
  <script src="{{ asset("pron/js/components/hs.slick-carousel.js")}}"></script>
  <script src="{{ asset("pron/js/components/hs.validation.js")}}"></script>
  <script src="{{ asset("pron/js/components/hs.focus-state.js")}}"></script>
  <script src="{{ asset("pron/js/components/hs.cubeportfolio.js")}}"></script>
  <script src="{{ asset("pron/js/components/hs.svg-injector.js")}}"></script>
  <script src="{{ asset("pron/js/components/hs.go-to.js")}}"></script>

  <!-- toastr -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">

  <!-- JS Plugins Init. -->
  <script>
    $(window).on('load', function () {
      // initialization of HSMegaMenu component
      $('.js-mega-menu').HSMegaMenu({
        event: 'hover',
        pageContainer: $('.container'),
        breakpoint: 767.98,
        hideTimeOut: 0
      });

      // initialization of svg injector module
      $.HSCore.components.HSSVGIngector.init('.js-svg-injector');
    });

    $(document).on('ready', function () {
      // initialization of header
      $.HSCore.components.HSHeader.init($('#header'));

      // initialization of unfold component
      $.HSCore.components.HSUnfold.init($('[data-unfold-target]'));

      // initialization of fancybox
      $.HSCore.components.HSFancyBox.init('.js-fancybox');

      // initialization of slick carousel
      $.HSCore.components.HSSlickCarousel.init('.js-slick-carousel');

      // initialization of form validation
      $.HSCore.components.HSValidation.init('.js-validate');

      // initialization of forms
      $.HSCore.components.HSFocusState.init();

      // initialization of cubeportfolio
      $.HSCore.components.HSCubeportfolio.init('.cbp');

      // initialization of go to
      $.HSCore.components.HSGoTo.init('.js-go-to');
    });

    $('#acaraForm').submit(function(e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#ref_field').removeAttr('disabled');

        $.ajax({
            type: 'post',
            url: $(this).attr("action"),
            data: new FormData($('#acaraForm')[0]),
            dataType: 'json',
            processData: false,
            contentType: false,
            success: function(data) {
                if(data.status == "ok"){
                    $('#ref_field').attr('disabled', 'disbled');
                    window.location.href = data.route;
                }
            },
            error: function(data){
                var data = data.responseJSON;
                if(data.status == "fail"){
                     toastr["error"](data.messages);
                }
            }
        });
    });
    
    $('#refGetForm').submit(function(e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: 'post',
            url: $(this).attr("action"),
            data: new FormData($('#refGetForm')[0]),
            dataType: 'json',
            processData: false,
            contentType: false,
            success: function(data) {
                if(data.status == "ok"){
                    window.location.href = data.route;
                }
            },
            error: function(data){
                var data = data.responseJSON;
                if(data.status == "fail"){
                     toastr["error"](data.messages);
                }
            }
        });
    });

    // Set the date we're counting down to
    var countDownDate = new Date("Nov 24, 2020 13:00:00").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

    // Get today's date and time
    var now = new Date().getTime();

    // Find the distance between now and the count down date
    var distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Display the result in the element with id="demo"
    document.getElementById("countdown").innerHTML = days + " hari " + hours + ":"
    + minutes + ":" + seconds;

    // If the count down is finished, write some text
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("countdown").innerHTML = "EXPIRED";
    }
    }, 1000);

    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });

    @if(Session::has('message'))
    var type = "{{ Session::get('alert-type', 'info') }}";
    switch(type){
        case 'info':
            toastr.info("{{ Session::get('message') }}");
            break;

        case 'warning':
            toastr.warning("{{ Session::get('message') }}");
            break;

        case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;

        case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
    }
  @endif
  </script>
</body>
</html>