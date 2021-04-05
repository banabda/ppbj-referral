<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Title -->
  <title>LPKN | {{ env('JUDUL_2', 0) }}</title>

  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <!--<meta content='https://hypnotherapy.diklatonline.id/pron/img/foto_hypno/foto_01.jpg' property='og:image'/>-->
  <meta content="{{ asset('')}}brosur.jpg" property='og:image'/>
  <meta name="description" content="{{ env('JUDUL_DESCRIPTION', 0) }}">
<!--</b:if>-->
  <!-- Favicon -->
  <link rel="shortcut icon" href="{{ asset('pron')}}/favicon.ico">

  <!-- Google Fonts -->
  <link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="{{ asset('pron')}}/vendor/font-awesome/css/fontawesome-all.min.css">
  <link rel="stylesheet" href="{{ asset('pron')}}/vendor/animate.css/animate.min.css">
  <link rel="stylesheet" href="{{ asset('pron')}}/vendor/hs-megamenu/src/hs.megamenu.css">
  <link rel="stylesheet" href="{{ asset('pron')}}/vendor/fancybox/jquery.fancybox.css">
  <link rel="stylesheet" href="{{ asset('pron')}}/vendor/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="{{ asset('pron')}}/vendor/cubeportfolio/css/cubeportfolio.min.css">

  <!-- CSS Front Template -->
  <link rel="stylesheet" href="{{ asset('pron')}}/css/theme.css">
</head>
<body onload="document.getElementById('myDIV').style.display = 'none';">
  <script type="text/javascript">
    function myFunction(val){
      if(val == 0){
        document.getElementById('myDIV').style.display = 'none';
      }else{
        document.getElementById('myDIV').style.display = 'block';
      }
    }
  </script>
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
              <img style="width: 16.375rem;" src="{{ asset('pron')}}/img/logo_putih.png">
              <!-- <span class="u-header__navbar-brand-text">L<span class="text-danger">P</span>KN</span> -->
            </a>
            <!-- End Logo -->

            <!-- Responsive Toggle Button -->
            <!-- End Responsive Toggle Button -->
          </div>

        </nav>
        <!-- End Nav -->
      </div>
    </div>
  </header>
  <!-- ========== END HEADER ========== -->
<!-- OrderOnline Tracker Code -->
<script>
!function(w, d, e, v, n, t, s) {
if (w.ooq) return;
n = w.ooq = function() { n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments) };
if (!w._ooq) w._ooq = n;
n.push = n;n.loaded = !0;n.version = '2.0';n.queue = [];
t = d.createElement(e);t.async = !0;t.src = v;
s = d.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t, s);
}(window, document, 'script', 'https://public.orderonline.id/js/tracker.js');
ooq('init', 'lpkn', 'belajarmenulis');
ooq('track', 'SalesPageView');
</script>
<noscript><img height="1" width="1" style="display:none" src="https://lpkn.orderonline.id/belajarmenulis/track"/></noscript>
<!-- End OrderOnline Tracker Code -->
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
          <!-- <div class="d-lg-flex align-items-lg-center u-hero-v1__main" style="background-image: url({{ asset('pron')}}/img/1920x800/img2.jpg"> -->
          <div class="d-lg-flex align-items-lg-center u-hero-v1__main" style="background-image:linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0.5,0.5)), url({{ asset('')}}/header.jpg);">
              
            <div class="container space-3 space-top-md-5 space-top-lg-3">
              <div class="row">
                <div class="col-md-12 col-lg-12 position-relative text-center">
                    <br/><br/>
                  <span class="d-block h4 text-white font-weight-light mb-2"
                        data-scs-animation-in="fadeInUp">
                    {{ env('JENIS', 0) }}
                  </span>
                  <span class="d-block h3 text-warning font-weight-light mb-1"
                        data-scs-animation-in="fadeInUp">
                    <span class="font-weight-semi-bold">
                    <i>{{ env('JUDUL_1', 0) }}</i>
                    </span>
                  </span>
                  <h1 class="text-white h4 display-5 font-size-md-down-2 mb-2"
                      data-scs-animation-in="fadeInUp"
                      data-scs-animation-delay="200" style="font-size: 2.0rem;">
                    <span class="font-weight-semi-bold">
                    {{ env('JUDUL_2', 0) }}
                    </span>
                     <!-- <span class="font-weight-semi-bold">Ekonomi & Keuangan</span> Digital Indonesia Tahun 2025 -->
                  </h1>
                  <h5 class="text-warning h4 display-5 font-size-md-down-2 mb-2"
                      data-scs-animation-in="fadeInUp"
                      data-scs-animation-delay="200">
                    <span class="font-weight-semi-bold">
                    {{ env('JUDUL_3', 0) }}
                    </span>
                     <!-- <span class="font-weight-semi-bold">Ekonomi & Keuangan</span> Digital Indonesia Tahun 2025 -->
                  </h5>
                  <span class="d-block h5 text-warning font-weight-light mb-2"
                        data-scs-animation-in="fadeInUp">
                    {{ env('JUDUL_DESCRIPTION', 0) }}
                  </span>
                  <span class="d-block h5 text-white font-weight-light mb-2"
                        data-scs-animation-in="fadeInUp">
                    <span class="font-weight-semi-bold">{{ env('JUMLAH_SESI', 0) }} &nbsp;&nbsp;{{ env('TGL', 0) }} </br>{{ env('WAKTU', 0) }}</br>{{ env('WAKTU_2', 0) }}</span>
                  </span>
                    @if(session("lpkn_ref_email"))
                        <a class="btn btn-sm btn-success transition-3d-hover" href="{{ route('referral.pendaftaran') }}">
                            Affiliate Saya
                        </a>
                    @else
                        <a class="btn btn-sm btn-warning transition-3d-hover" href="#mendaftar">
                            Daftar Sekarang
                        </a>
                    @endif
                </div>
              </div>
            </div>
          </div>
          <!-- End Slide #1 -->
        </div>


      </div>
      <!-- End Hero Carousel Main -->

      <!-- Slick Paging 
      <div class="container position-relative">
        <div id="slickPaging" class="u-slick__paging"></div>
      </div>
       End Slick Paging -->

      <!-- Hero Carousel Secondary -->
      
      <!-- End Hero Carousel Secondary -->
    </div>
    <!-- End Hero v1 Section -->

    <!-- <hr class="my-0"> -->



    <!-- Front in Frames Section -->
    <div class="overflow-hidden">
      <div class="container space-2">
        
            <h2 class="text-danger text-center"><span class="font-weight-semi-bold">LATAR BELAKANG</span></h2>
              <div class="mb-7 text-left">
                <p style="color: #000">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="font-weight-semi-bold">Hadirnya Peraturan Peraturan Presiden No. 12 Tahun 2021</span>, tentang perubahan Perpres 16 tahun 2018, tentang Pengadaan Barang/Jasa Pemerintah serta <span class="font-weight-semi-bold">Peraturan Menteri Dalam Negeri no 77 tahun 2020</span>, tentang Pedoman Teknis Pengelolaan Keuangan Daerah, memberikan dampak perubahan terhadap pelaksanaan Pengadaan Barang/ Jasa Pemerintah, sehingga para pihak yang berkepentingan dalam hal ini perlu mengetahui esensi perubahan, sehingga pelaksanaan pengadaan Barang/jasa tahun anggaran 2021 dapat dilaksanakan sesuai dengan peraturan terbaru.</p>
                <p style="color: #000">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pelatihan ini memberikan Penjelasan dan gambaran mengenai pokok pokok perubahan dalam Pengadaan Barang/Jasa Pemerintah, serta sekaligus memberikan petunjuk terhadap pola kerja Para Pihak yang terlibat didalam prosesnya, sehingga di harapkan nanti mampu menyesuaikan sejak dini berdasarkan peraturan terbaru.</p>
                <p style="color: #000">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pelatihan ini juga dilengkapi dengan materi gambaran Audit Pengadaan dengan hadirnya Perpres 12 tahun 2021 serta Permendari 77 tahun 2020, sehingga kedepan para pihak sudah memiliki gambaran didalam menghadapi audit pengadaan Barang/Jasa Pemerintah yang telah dilaksanakannya.</p>
              </div>
        
        <div class="row justify-content-between align-items-center">
          <div class="col-lg-6 position-relative">
            <!-- Image Gallery -->
            <div class="row mx-gutters-2">

              <div class="col-12 px-2 mb-3">
                <!-- Fancybox -->
                <a class="js-fancybox u-media-viewer" href="javascript:;"
                   data-src="{{ asset('pron')}}/img/presentasi/meeting-inti.png"
                   data-fancybox="lightbox-gallery-hidden"
                   data-caption="Front in frames - image #04"
                   data-speed="700">
                  <img class="img-fluid rounded" src="{{ asset('pron')}}/img/presentasi/meeting-inti.png" alt="Image Description">

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
                <img class="js-svg-injector" src="{{ asset('pron')}}/svg/components/soft-triangle-shape.svg" alt="Image Description"
                     data-parent="#SVGbgShapeID12">
              </figure>
            </div>
            <!-- End SVG Background Shape -->
          </div>

          <div class="col-lg-6 mb-7 mb-lg-0">
            <div class="pr-md-4">
              <!-- Title -->
              <div class="mb-7">
                <!-- <span class="u-label u-label--sm u-label--success mb-2">Tentang Workshop</span> -->
                <!-- <h2 class="text-warning">Workshop ini Akan membekali Anda :  -->
                <!--<p style="color: #000">Dalam Pelatihan ini didukung oleh Tim Narasumber yang berkompten, dimana tim tersebut merupakan kombinasi dari Para regulator dan Praktisi Jasa Konstruksi, sehingga diharapkan dapat memberikan gambaran dan pemahaman yang komprehensif bagi seluruh peserta.</p>-->
                <h2 class="text-danger"><span class="font-weight-semi-bold">MATERI</span>
                  <!-- <span class="font-weight-semi-bold">digital</span> -->
                </h2>
                <!--<p style="color: #000">Pelatihan ini akan memberikan Manfaat bagi para Trainer berupa :</p>-->
                <p style="color: #000">
                  <ol>
                    <li>Penjelasan Ketentuan “Perubahan” Kebijakan Pengadaan</li>
                    <li>Implikasi hadirnya Permendagri No. 77 tahun 2020, (tentang Pedoman Teknis Pengelolaan Keuangan Daerah), dalam Pengadaan Barang/Jasa di Pemerintah Daerah</li>
                    <li>Bagaimana masing masing pihak Bekerja, dengan hadirnya Perpres 12 tahun 2021
                        <ul>
                            <li>PA/KPA/PPK</li>
                            <li>POKJA/PP</li>
                            <li>PPTK/Tim Teknis/Pendukung</li>
                        </ul>
                    </li>
                    <li>Pengaruh Perpres 12 tahun 2021 dan Permendagri No. 77 tahun 2020, terhadap Audit Pengadaan</li>
                  </ol>
                </p>
              </div>
              <!-- End Title -->
              <div class="mb-7">
                <!-- <span class="u-label u-label--sm u-label--success mb-2">Tentang Workshop</span> -->
                <!-- <h2 class="text-warning">Workshop ini Akan membekali Anda :  -->
                <h2 class="text-danger"><span class="font-weight-semi-bold">Landasan Hukum </span>
                  <!-- <span class="font-weight-semi-bold">digital</span> -->
                </h2>
                <p style="color: #000">
                  <ul>
                    <li>PP  No. 12 Tahun 2019 tentang Pengelolaan Keuangan Daerah</li>
                    <li>Perpres 12 Tahun 2021, perubahan Perpres 16 tahun 2018, tentang Pengadaan Barang/Jasa Pemerintah</li>
                    <li>Permendagri No. 77 tahun 2020, tentang Pedoman Teknis Pengelolaan Keuangan Daerah</li>
                  </ul>
                </p>
              </div>
              <!-- End Title -->

              @if(!session("lpkn_ref_email"))
              <div class="text-center">
                <a class="btn btn-sm btn-warning btn-wide transition-3d-hover" href="#mendaftar">Daftar Sekarang <span class="fas fa-angle-right ml-2"></span></a>
              </div>
              @endif
            </div>
          </div>
        </div>
          <!-- <p></p><br/> -->
      </div>
    </div>

<div class="overflow-hidden" style="background-color: #0d1b29 !important;">
      <div class="container space-2">
        <div class="text-center w-md-90 mx-auto mb-3">
          <h2><span class="font-weight-semi-bold text-danger">FASILITAS</span></h2>     
                <!-- <span class="u-label u-label--sm u-label--success mb-2">Tentang Sosialisasi</span> -->
          <!-- <h2 class="text-primary">LATAR BELAKANG</h2> -->
          
        </div>
        <div class="w-md-60 w-lg-70 mx-md-auto">
          <blockquote class="font-weight-light mb-0 text-white">
            <ul>
              <li>Mengikuti 6 sesi Pelatihan secara Daring (webinar)</li>
              <li>Materi Pelatihan</li>
              <li>Format Kertas Kerja Pelaksanaan Pengadaan</li>
              <li>PP No. 12 Tahun 2019 </li>
              <li>Perpres 12 Tahun 2021</li>
              <li>Permendagri No. 77 tahun 2020</li>
              <li>Matriks Perubahan</li>
              <li>Video Rekaman Pelatihan</li>
              <li>E- sertifikat</li>
            </ul>
          </blockquote>
        </div>
        <div class="text-center w-md-90 mx-auto mb-3">
          <h2><span class="font-weight-semi-bold text-danger">Waktu Pelaksanaan </span></h2>     
        </div>
        <div class="w-md-60 w-lg-70 mx-md-auto">
          <blockquote class="font-weight-light mb-0 text-white">
            <ul>
              <li>Senin – Sabtu / 19 – 24 April 2021</li>
              <li>13.00 – 15.00 WIB</li>
              <li>Media Online ZOOM</li>
            </ul>
          </blockquote>
        </div>        <div class="w-md-80 w-lg-50 mx-md-auto text-center">
                    <a class="btn btn-sm btn-danger btn-wide transition-3d-hover" href="#footer">Daftar Sekarang <span class="fas fa-angle-right ml-2"></span></a>
                  </div>
      </div>
    </div>


    <div class="overflow-hidden" style="background-color: #170908 !important;">
      <div class="container space-2 space-md-3" style="padding-bottom: 0rem !important;">
        <div class="row justify-content-between align-items-center">

          <div class="col-lg-6 position-relative">
            <div class="pr-md-4">
              <!-- Title -->
              <div class="mb-7">
                <!-- <span class="u-label u-label--sm u-label--success mb-2">Tentang Workshop</span> -->
                <!-- <h2 class="text-warning">Workshop ini Akan membekali Anda :  -->
                
                <p><img style="width: 100%;" src="{{ asset('')}}brosur.jpg"></p>
              </div>
              <!-- End Title -->

            </div>

          </div>

          <div class="col-lg-6 position-relative">
            <div class="pr-md-4">
              <!-- Title -->
              <div class="mb-7">
                  <div class="text-center text-white">
                    <!-- <h4><strong><strike class="text-danger">Rp. 500.000,-</strike></strong></h4> -->
                    <h3><!--
                        <strong>Harga Normal: <br/>
                       <strong><strike class="text-danger">Rp. 3.750.000,-</strike></strong><br/> -->
                      <strong>Biaya</strong><br/>
                      <strong><span style="font-size: 50px">Rp. {{ number_format(env('HARGA_EVENT', 0), 0 , ",", ".") }},-</span></strong></h3>
<!--                     <h4><strong>Bonus Kelas : </strong></h4>
                    <h4><strong>Smart - Self Healing (2 Sesi Pertemuan)</strong></h4>
                    <h4><strong>Senilai <span class="text-danger">Rp 750.000,-</span></strong></h4>
 -->                            <div class="col-10 offset-1">
                              <!-- <center><a href="https://lpkn.orderonline.id/belajarmenulis" target="blank_" class="btn btn-danger btn-lg btn-block">Daftar Sekarang</a></center> -->
                            </div>
                  </div>
                <h2 class="text-warning text-center" id="mendaftar">Segera <span class="font-weight-semi-bold">Mendaftar</span></h2>

                  @if(!session("lpkn_ref_email"))
                  <div class="row text-white">
                      <div class="col-md-12">
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
                                <div class="form-group col-md-6">
                                    <label for="exampleFormControlInput1">No. Handphone</label>
                                    <div class="input-group input-group-sm mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" style="color:black" id="inputGroup-sizing-sm"><b>+62</b></span>
                                        </div>
                                        <input type="number" name="no_hp" class="form-control" placeholder="821..." required>
                                    </div>
                                </div>                                
                                <div class="form-group col-md-6">
                                    <label for="exampleFormControlInput1">Instansi</label>
                                    <div class="input-group input-group-sm mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" style="color:black" id="inputGroup-sizing-sm"><i class="fas fa-university text-dark"></i></span>
                                        </div>
                                        <input type="text" name="instansi" class="form-control" placeholder="Nama Instansi Anda" required>
                                    </div>
                                </div>
                                
                                <div class="form-group col-md-6">
                                    <label for="exampleFormControlInput1">Pilih Keikut Sertaan</label>
                                    <div class="input-group input-group-sm mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fas fa-dollar-sign text-dark"></i></span>
                                        </div>
                                        <select required class="form-control mb-4" onchange="myFunction(this.value)" name="affiliasi" required id="affiliate">
                                          <option value="0"> Peserta </option>
                                          <option value="1"> Affiliate Marketing</option>
                                        </select>
                                    </div>
                                </div>


                              </div>
                            </div>
                            <div class="col-md-12" id="myDIV">
                                <div class="row">
                                  <div class="form-group col-md-6">
                                      <label for="exampleFormControlInput1">Nama Bank</label>
                                      <div class="input-group input-group-sm mb-3">
                                          <div class="input-group-prepend">
                                              <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fas fa-building text-dark"></i></span>
                                          </div>
                                          <input type="text" name="nama_bank" class="form-control" placeholder="Contoh : BRI">
                                      </div>
                                  </div>
                                  <div class="form-group col-md-6">
                                      <label for="exampleFormControlInput1">No. Rekening</label>
                                      <div class="input-group input-group-sm mb-3">
                                          <div class="input-group-prepend">
                                              <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fas fa-building text-dark"></i></span>
                                          </div>
                                          <input type="number" name="no_rek" class="form-control" placeholder="Masukkan Nomor Rekening Anda">
                                      </div>
                                  </div>
                                  <div class="form-group col-md-6">
                                      <label for="exampleFormControlInput1">Atas Nama</label>
                                      <div class="input-group input-group-sm mb-3">
                                          <div class="input-group-prepend">
                                              <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fas fa-building text-dark"></i></span>
                                          </div>
                                          <input type="text" name="nama_rek" class="form-control" placeholder="Masukkan Nama Kepemilikan Rekening">
                                      </div>
                                  </div>
                                </div>
                              <div>
                              </div>
                            </div>
                            <div class="col-md-8 offset-md-2">
                              <div>
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
                          <!-- </div> -->
                            @isset($ref)
                                <span class="float-left">Referral: <span class="text-danger">{{$ref}}</span></span>
                            @endisset
                            <div class="col-6 offset-3 mt-2">
                              <center><button type="submit" class="btn btn-primary btn-sm btn-block">Daftar</button></center>
                            </div>
                          </form>
                      </div>
                  </div>
                  <div class="text-center" style="width: 100%;">
                    <button type="button" class="btn btn-warning mt-4" data-toggle="modal" data-target="#refModal">
                      Check referral anda.
                    </button>
                  @else
                  <div class="text-center" style="width: 100%;">
                    <a class="btn btn-sm btn-primary transition-3d-hover text-center mb-5" href="{{ route('referral.pendaftaran') }}">
                        Referral Saya
                    </a>
                  @endif
                  
                    <br/><br/>
                    <a class="btn btn-sm btn-secondary transition-3d-hover text-center mb-5" target="blank_" href="{{ asset('') }}surat.pdf">
                        Download Surat
                    </a>
                    
                  </div>



                <!-- </p> -->
              </div>
              <!-- End Title -->


              <!-- End Title -->

            </div>            
          </div>

        </div>

      </div>
      <div class="container">
          <div class="mb-7">
            <div class="text-center text-black">
              <h2><b class=" text-danger">Penyelenggara <span class="font-weight-semi-bold">Kegiatan</span></b></h2>
              <p class="text-white"><b>Lembaga Pengembangan dan Konsultasi Nasional (LPKN)</b> merupakan lembaga Diklat resmi yang berdiri sejak tahun 2005, dan telah <b>Terakreditasi A</b> Oleh Lembaga Kebijakan Pengadaan Barang/ Jasa Pemerintah <b>(LKPP) – RI</b>, untuk kegiatan Pelaksanaan Pelatihan Pengadaan dan Sertifikasi Barang/ Jasa pemerintah.
Saat ini telah memiliki <b>Alumni sebanyak 1.300.580 orang</b>, yang tersebar di seluruh Indonesia, <b>LPKN juga telah medapatkan 2 Rekor MURI</b>, dalam penyelenggaraan Webinar dengan jumlah Peserta lebih dari <b>100.000 orang</b>.</p>
              <p class="text-white">Kunjungi Juga Website <b><a href="https://lpkn.id" target="blank_">www.LPKN.id</a></b> </p>
              <h3><p class="text-white">Kontak Panitia : {{ env('WA_2', 0) }},  {{ env('WA_3', 0) }}<b> <br/>WA CENTER : <a href="https://wa.me/{{ env('WA_1', 0) }}" target="blank_">0{{ substr(env('WA_1', 0),2) }}</a></b> </p></h3>
            </div>
          </div>
      </div>
    </div>


  <!-- ========== FOOTER ========== space-top-2 space-top-md-3 -->
  <footer class="container" id="footer">
    <hr>

    <div class="d-flex justify-content-between align-items-center py-7">
      <!-- Copyright -->
      <p class="small text-muted mb-0">&copy; Lembaga Pengembangan dan Konsultasi Nasional: 2020.</p>
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
    var countDownDate = new Date("Nov 22, 2020 13:00:00").getTime();

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