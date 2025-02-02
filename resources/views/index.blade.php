<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="keywords" content="SMAN 9 MUKOMUKO" />
        <meta name="author" content="SMAN 9 MUKOMUKO" />
        <meta name="robots" content />
        <meta property="og:title" content="SMAN 9 MUKOMUKO" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SMAN 9 MUKOMUKO</title>
        <link
            href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&family=Rubik:wght@300;400;500;600;700;800;900&display=swap"
            rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="{{ asset('assets/css/homepage/plugin/popup.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/homepage/plugin/swiper.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/homepage/style.css') }}">
        <link rel="stylesheet" type="text/css" class="skin" href="{{ asset('assets/css/homepage/custom-2.css') }}">
        <link rel="stylesheet" type="text/css" class="skin" href="{{ asset('assets/css/homepage/custom-3.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/homepage/jquery.toast.min.css') }}">
        <script src="{{ asset('assets/js/homepage/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/homepage/main.js') }}"></script>
        <script type="text/javascript">
            const ID_LOADING = '#loading-area';
        </script>
    </head>
    <body id="bg" class="theme-rounded">
        <div class="page-wraper">
            <header class="site-header mo-left header style-1">
                <div class="main-bar-wraper navbar-expand-lg sticky-header is-fixed">
                    <div class="main-bar clearfix border-bottom">
                        <div class="container clearfix">
                            <div class="logo-header mostion logo-dark" style="width: 34rem; height: fit-content">
                                <a href="/" class="d-flex align-items-center mt-3">
                                    <img loading="lazy" src="{{ asset('assets/img/logo-1.png') }}" alt="SMAN 9 MUKOMUKO"><h6 class="text-success fw-bold px-3 my-1">SMA N 9 MUKOMUKO</h6>
                                </a>
                            </div>
                            <div class="extra-nav">
                                <div class="extra-cell">
                                    <a href="{{ route('login') }}" class="btn shadow-primary btn-primary btn-xs btn-quote">
                                        <span>Login Akun</span>
                                    </a>
                                </div>
                            </div>
                            <div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
                                <ul class="nav navbar-nav">
                                    <li class="active">
                                        <a href="/" title="Beranda">BERANDA</a>
                                    </li>
                                    <li class="">
                                        <a href="#profil" title="Profil">PROFIL</a>
                                    </li>
                                    <li class="">
                                        <a href="#prestasi-sekolah" title="Prestasi Sekolah">PRESTASI SEKOLAH</a>
                                    </li>
                                    <li class="">
                                        <a href="#data" title="Data">DATA</a>
                                    </li>
                                    <li class="">
                                        <a href="#galeri" title="Galeri">GALERI</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <div class="page-content">
                <div class="swiper-container main-silder-swiper silder-two">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide ">
                            <div class="dz-slide-item overlay-black-light" style="--bgdz-image: url('{{ asset('assets/img/image-1.jpeg') }}')">
                                <div class="container">
                                    <div class="silder-content" data-swiper-parallax="-40%">
                                        <div class="inner-content">
                                            <h1 class="title"><small>&nbsp;</small></h1>
                                            <p class="m-b30">&nbsp;</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide ">
                            <div class="dz-slide-item overlay-black-light"
                                style="--bgdz-image: url('{{ asset('assets/img/image-2.jpeg') }}')">
                                <div class="container">
                                    <div class="silder-content" data-swiper-parallax="-40%">
                                        <div class="inner-content">
                                            <h1 class="title"><small>&nbsp;</small></h1>
                                            <p class="m-b30">&nbsp;</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide ">
                            <div class="dz-slide-item overlay-black-light"
                                style="--bgdz-image: url('{{ asset('assets/img/image-3.jpeg') }}')">
                                <div class="container">
                                    <div class="silder-content" data-swiper-parallax="-40%">
                                        <div class="inner-content">
                                            <h1 class="title"><small>&nbsp;</small></h1>
                                            <p class="m-b30">&nbsp;</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide ">
                            <div class="dz-slide-item overlay-black-light"
                                style="--bgdz-image: url('{{ asset('assets/img/image-4.jpeg') }}')">
                                <div class="container">
                                    <div class="silder-content" data-swiper-parallax="-40%">
                                        <div class="inner-content">
                                            <h1 class="title"><small>PENDIDIKAN BERBASIS BUDAYA</small></h1>
                                            <p class="m-b30">
                                                SMA NEGERI 9 MUKOMUKO sebagai Sekolah yang menerapkan
                                                Pendidikan Berbasis Budaya
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide ">
                            <div class="dz-slide-item overlay-black-light"
                                style="--bgdz-image: url('{{ asset('assets/img/image-5.jpeg') }}')">
                                <div class="container">
                                    <div class="silder-content" data-swiper-parallax="-40%">
                                        {{-- <div class="inner-content">
                                            <h1 class="title"><small>THE RESEARCH SCHOOL OF JOGJA</small></h1>
                                            <p class="m-b30">Sekolah yang berbasis riset atau penelitian yang pertama di
                                                Yogyakarta dan di Indonesia.</p>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-prev swiper-button-prev1"><i class="las la-arrow-left fas fa-chevron-left"></i></div>
                    <div class="btn-next swiper-button-next1"><i class="las la-arrow-right fas fa-chevron-right"></i></div>
                </div>
                <section id="profil" class="content-inner-3 p-0 mt-0 mb-0"
                    style="background-image: url(https://www.sman6yogya.sch.id/views/themes/mazotheme/images/pattern/pt-bg1.png), url(https://www.sman6yogya.sch.id/views/themes/mazotheme/images/pattern/pt-bg2.png);background-size: 50%;background-repeat: no-repeat;background-position: right top, left bottom; ">
                    <div class="container-fluid p-0 " style=" overflow-x: hidden;">
                        <div class="row mb-0 p-3 gap-0">
                            <div class="col-md-3 ">
                                <div class="row p-2 mb-3 mt-3">
                                    <div class="col-12">
                                        <div class="section-head style-1 text-left float-start pb-0 mb-0">
                                            <h5 class="text-primary sub-title mb-0"> Sambutan </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-1 p-4 rounded-lg" data-aos="fade-up" data-aos-duration="800"
                                    data-aos-delay="200"
                                    style="background:#17C2B8; background-image: url('{{ asset('assets/img/background-1.png') }}'); background-size:100%; background-repeat: no-repeat ; background-position:bottom left; padding:25px; ">
                                    <div class="testimonial-text ">
                                        <h6 class="text-white fw-normal"> "
                                            Assalamu&rsquo;alaikum wr. wb.
                                            Pada tahun 2045 merupakan target generasi emas yaitu generasi yang saat ini
                                            sedang mengenyam pendidikan dan diharapkan akan meraih kesuksesan di tahun 2045.
                                            ... " </h6>
                                        <a href="#"
                                            class="text-white"><u>Selengkapnya >></u></a>
                                        <div class="testimonial-detail">
                                            <div class="clearfix ">
                                                <h6 class="testimonial-name">Thirda Putra, S.pd
                                                </h6>
                                                <span class="testimonial-position text-dark fw-bold">Kepala Sekolah</span>
                                            </div>
                                            <div class="testimonial-pic m-3">
                                                <img src="https://www.sman6yogya.sch.id/assets/images/pages/thumb/1622564387-kepala-sman6yogya_thumb.jpg"
                                                    class="img-responsive rounded mb-2" alt="foto sambutan"
                                                    style="width: 100%;object-fit: cover;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9 ">
                                <div class="row  p-2 mb-3 mt-3">
                                    <div class="col-12">
                                        <div class="section-head style-1 text-left float-end pb-0 mb-0">
                                            <h4 class="text-primary sub-title mb-0">Informasi Singkat Sekolah</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="row  p-2 mb-3 mt-3 gap-4">
                                    <div class="align-items-center justify-content-center">
                                        <a href="#" class="button-80"
                                            role="button"> <i class="fa fa-home"></i> Profil Sekolah</a>
                                        <a href="#" class="button-80"
                                            role="button"> <i class="fa fa-balance-scale-left"></i> Visi dan Misi</a>
                                        <a href="#" class="button-80"
                                            role="button"> <i class="fa fa-building"></i> Sarana Prasarana</a>
                                        <a href="#" class="button-80"
                                            role="button"> <i class="fa fa-baseball-ball"></i> Ekstrakurikuler</a>
                                        <ul class="social-list float-end ">
                                            <li>
                                                <a  href="https://www.facebook.com/share/164NezwA4J/?mibextid=wwXIfr" class="btn facebook">
                                                    <i class="fab fa-facebook-f"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a  href="#" class="btn instagram">
                                                    <i class="fab fa-instagram"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a  href="#" class="btn twitter">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn youtube">
                                                    <i class="fab fa-youtube"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="counter-area1-inner m-b30 m-t4">
                                    <div class="counter-inner rounded-lg text-white bg-secondary spno row"
                                        style=" background-image: url('{{ asset('assets/img/pattern-1.png') }}}}'); background-size: cover;  padding:30px;">
                                        <div class="row p-3">
                                            <div class="col-lg-3 col-sm-3  aos-item" data-aos="fade-up"
                                                data-aos-duration="800" data-aos-delay="800">
                                                <div class="icon-bx-wraper left style-7" data-name="2024">
                                                    <div class="icon-md">
                                                        <span class="icon-cell text-white">
                                                            <i class="fa fa-calendar-check"></i>
                                                        </span>
                                                    </div>
                                                    <div class="icon-content">
                                                        <h1 class="dz-title counter">{{ $academic->title }}</h1>
                                                        <h6 class="title text-warning">Tahun<br />Ajaran</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-sm-3 aos-item" data-aos="fade-up"
                                                data-aos-duration="800" data-aos-delay="200">
                                                <div class="icon-bx-wraper left style-7" data-name="866">
                                                    <div class="icon-md">
                                                        <span class="icon-cell text-white">
                                                            <i class="fa fa-users"></i>
                                                        </span>
                                                    </div>
                                                    <div class="icon-content">
                                                        <h1 class="dz-title counter">{{ $students->count() }}</h1>
                                                        <h6 class="title text-warning">Peserta<br />Didik</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-sm-3 aos-item" data-aos="fade-up"
                                                data-aos-duration="800" data-aos-delay="400">
                                                <div class="icon-bx-wraper left style-7" data-name="53">
                                                    <div class="icon-md">
                                                        <span class="icon-cell text-white">
                                                            <i class="fas fa-chalkboard-teacher"></i>
                                                        </span>
                                                    </div>
                                                    <div class="icon-content">
                                                        <h1 class="dz-title counter">{{ $teachers->count() }}</h1>
                                                        <h6 class="title text-warning">Tenaga<br />Pendidik</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-sm-3 aos-item" data-aos="fade-up"
                                                data-aos-duration="800" data-aos-delay="600">
                                                <div class="icon-bx-wraper left style-7" data-name="24">
                                                    <div class="icon-md">
                                                        <span class="icon-cell text-white">
                                                            <i class="fa fa-building"></i>
                                                        </span>
                                                    </div>
                                                    <div class="icon-content">
                                                        <h1 class="counter">{{ $class->count() }}</h1>
                                                        <h4 class="title text-warning">Kelas <br>Rombel</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="prestasi-sekolah" class="content-inner-3 bg-primary-light p-2">
                    <div class="container-fluid p-3">
                        <div class="section-head style-1 text-left">
                            <h4 class="text-primary sub-title">Prestasi Sekolah</h4>
                            <h4 class="title">Prestasi Sekolah SMAN 9 MUKOMUKO</h4>
                        </div>
                        <div class="relative team-swiper-area">
                            <div class="swiper-container team-swiper1 owl-btn-1 owl-btn-primary owl-btn-center-lr">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <a href="#" target="_self">
                                            <div class="dz-team style-1 text-center overlay-shine aos-item" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">
                                                <div class="dz-media">
                                                    <img src="{{ asset('assets/img/image-1.jpeg') }}">
                                                </div>
                                                <div class="dz-content"></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="#" target="_self">
                                            <div class="dz-team style-1 text-center overlay-shine aos-item" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">
                                                <div class="dz-media">
                                                    <img src="{{ asset('assets/img/lomba-1.jpeg') }}">
                                                </div>
                                                <div class="dz-content"></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="#" target="_self">
                                            <div class="dz-team style-1 text-center overlay-shine aos-item" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">
                                                <div class="dz-media">
                                                    <img src="{{ asset('assets/img/lomba-2.jpeg') }}">
                                                </div>
                                                <div class="dz-content"></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="#" target="_self">
                                            <div class="dz-team style-1 text-center overlay-shine aos-item" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">
                                                <div class="dz-media">
                                                    <img src="{{ asset('assets/img/lomba-4.jpeg') }}">
                                                </div>
                                                <div class="dz-content"></div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-prev swiper-button-prev2"><i class="las la-arrow-left"></i></div>
                            <div class="btn-next swiper-button-next2"><i class="las la-arrow-right"></i></div>
                        </div>
                    </div>
                </section>
                <section id="data" class="content-inner-3  p-2">
                    <div class="container-fluid p-3">
                        <div class="section-head style-1 text-left">
                            <h4 class="text-primary sub-title">Informasi & Publikasi Grafis</h4>
                            <h4 class="title">INFOGRAFIS SEKOLAH</h4>
                        </div>
                        <div class="relative team-swiper-area">
                            <div class="swiper-container team-swiper1 owl-btn-1 owl-btn-primary owl-btn-center-lr">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <a href="#" target="_self">
                                            <div class="dz-team style-1 text-center overlay-shine aos-item"
                                                data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">
                                                <div class="dz-media">
                                                    <img src="{{ asset('assets/img/isra.png') }}">
                                                </div>
                                                <div class="dz-content"></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="#" target="_self">
                                            <div class="dz-team style-1 text-center overlay-shine aos-item"
                                                data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">
                                                <div class="dz-media">
                                                    <img src="{{ asset('assets/img/imlek.png') }}">
                                                </div>
                                                <div class="dz-content"></div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-prev swiper-button-prev2"><i class="las la-arrow-left fa fa-chevron-left"></i></div>
                            <div class="btn-next swiper-button-next2"><i class="las la-arrow-right fa fa-chevron-right"></i></div>
                        </div>
                    </div>
                </section>
                <section class="content-inner-3 bg-primary p-2">
                    <div class="container-fluid p-3">
                        <div class=" row  p-0">
                            <div class="col-md-4">
                                <div class="section-head pt-5">
                                    <h2 class="text-white sub-title">Guru & Tenaga Pendidik</h2>
                                    <h6 class="title text-warning">SMAN 9 MUKOMUKO</h6>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="relative team-swiper-area">
                                    <div class="swiper-container team-swiper1 owl-btn-1 owl-btn-primary owl-btn-center-lr">
                                        <div class="swiper-wrapper">
                                            @foreach ($teachers as $teacher)
                                                <div class="swiper-slide">
                                                    <div class="dz-card blog-grid style-4 text-center m-b0" style="height: 400px; border-radius:16px" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                                                        <div class="dz-media" style="border-radius:16px">
                                                            <a href="javascript:void(0);">
                                                                <img src="{{ Storage::url($teacher->user_complements->image) }}" loading="lazy" style="height:270px; object-fit:cover; border-radius:16px">
                                                            </a>
                                                        </div>
                                                        <div class="dz-info">
                                                            <div class="dz-meta ">
                                                                <h6 class="fs-7 text-primary">{{ $teacher->user_complements->name }}</h6>
                                                                <span class="badge bg-warning">GURU MATA PELAJARAN</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </section>
                {{-- <section class="content-inner-3 bg-primary-light ">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-7 col-lg-7 " data-aos="fade-up" data-aos-duration="1500"
                                data-aos-delay="600">
                                <div class="dz-card  blog-single sidebar">
                                    <div class="section-head style-1 text-left">
                                        <h5 class="text-primary sub-title">Video Terbaru</h5>
                                        <h4 class="title">Video Seputar Sekolah</h4>
                                    </div>
                                    <div class="dz-media post-video">
                                        <div class="post-video-icon"><i class="flaticon-play"></i></div>
                                        <a href="https://www.youtube.com/watch?v=4I520ieBKVE" class="popup-youtube">
                                            <img src="https://i.ytimg.com/vi/4I520ieBKVE/hqdefault.jpg" alt
                                                class="rounded-lg">
                                            <div class="post-video-icon"><i class="flaticon-play"></i></div>
                                        </a>
                                    </div>
                                </div>
                                <div class="dz-media about-media">
                                    <div class="dz-media post-video">
                                        <div class="testimonial-swiper2 swiper-container">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="testimonial-5">
                                                        <div class="dz-box service-box-6">
                                                            <div class="dz-media">
                                                                <img src="https://i.ytimg.com/vi/qsRTC0LyIdY/hqdefault.jpg"
                                                                    alt />
                                                            </div>
                                                            <div class="dz-info">
                                                                <div class="icon-bx-xs radius bg-danger m-b40">
                                                                    <a href="https://www.youtube.com/watch?v=qsRTC0LyIdY"
                                                                        class="popup-youtube" class="icon-cell">
                                                                        <i class="flaticon-play"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="testimonial-5">
                                                        <div class="dz-box service-box-6">
                                                            <div class="dz-media">
                                                                <img src="https://i.ytimg.com/vi/qJKIK2zszxA/hqdefault.jpg"
                                                                    alt />
                                                            </div>
                                                            <div class="dz-info">
                                                                <div class="icon-bx-xs radius bg-danger m-b40">
                                                                    <a href="https://www.youtube.com/watch?v=qJKIK2zszxA"
                                                                        class="popup-youtube" class="icon-cell">
                                                                        <i class="flaticon-play"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="testimonial-5">
                                                        <div class="dz-box service-box-6">
                                                            <div class="dz-media">
                                                                <img src="https://i.ytimg.com/vi/BkvTkSTHxnQ/hqdefault.jpg"
                                                                    alt />
                                                            </div>
                                                            <div class="dz-info">
                                                                <div class="icon-bx-xs radius bg-danger m-b40">
                                                                    <a href="https://www.youtube.com/watch?v=BkvTkSTHxnQ"
                                                                        class="popup-youtube" class="icon-cell">
                                                                        <i class="flaticon-play"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="testimonial-5">
                                                        <div class="dz-box service-box-6">
                                                            <div class="dz-media">
                                                                <img src="https://i.ytimg.com/vi/S5zHuLCYntk/hqdefault.jpg"
                                                                    alt />
                                                            </div>
                                                            <div class="dz-info">
                                                                <div class="icon-bx-xs radius bg-danger m-b40">
                                                                    <a href="https://www.youtube.com/watch?v=S5zHuLCYntk"
                                                                        class="popup-youtube" class="icon-cell">
                                                                        <i class="flaticon-play"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="testimonial-5">
                                                        <div class="dz-box service-box-6">
                                                            <div class="dz-media">
                                                                <img src="https://i.ytimg.com/vi/U9vcrPTcDNI/hqdefault.jpg"
                                                                    alt />
                                                            </div>
                                                            <div class="dz-info">
                                                                <div class="icon-bx-xs radius bg-danger m-b40">
                                                                    <a href="https://www.youtube.com/watch?v=U9vcrPTcDNI"
                                                                        class="popup-youtube" class="icon-cell">
                                                                        <i class="flaticon-play"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="testimonial-5">
                                                        <div class="dz-box service-box-6">
                                                            <div class="dz-media">
                                                                <img src="https://i.ytimg.com/vi/7sok_gQYWio/hqdefault.jpg"
                                                                    alt />
                                                            </div>
                                                            <div class="dz-info">
                                                                <div class="icon-bx-xs radius bg-danger m-b40">
                                                                    <a href="https://www.youtube.com/watch?v=7sok_gQYWio"
                                                                        class="popup-youtube" class="icon-cell">
                                                                        <i class="flaticon-play"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-5  aos-item" data-aos="fade-up" data-aos-duration="1500"
                                data-aos-delay="600">
                                <div class="section-head style-1 text-left">
                                    <h5 class="text-primary sub-title">Informasi </h5>
                                    <h4 class="title">PENGUMUMAN & AGENDA</h4>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="p-l20 p-r20 p-t10 p-b10 m-b20 bg-white rounded-lg shadow-sm">
                                            <a
                                                href="https://www.sman6yogya.sch.id/pengumuman/read/90/Technical-Meeting-MPLS-2023">
                                                <h3 class="text-primary sub-title m-b0"> <i
                                                        class="fa fa-bullhorn text-dark"></i> </h3> Pengumuman <h6
                                                    class="title m-b10">Technical Meeting MPLS 2023</h6>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="p-l20 p-r20 p-t10 p-b10 m-b20 bg-white rounded-lg shadow-sm">
                                            <a
                                                href="https://www.sman6yogya.sch.id/pengumuman/read/89/INFORMASI-DAFTAR-ULANG-PESERTA-DIDIK-BARU-SMA-NEGERI-6-YOGYAKARTA-TAHUN-PELAJARAN-20232024">
                                                <h3 class="text-primary sub-title m-b0"> <i
                                                        class="fa fa-bullhorn text-dark"></i> </h3> Pengumuman <h6
                                                    class="title m-b10">INFORMASI DAFTAR ULANG PESERTA DIDIK BARU SMA
                                                    NEGERI 6 YOGYAKARTA TAHUN PELAJARAN 2023/2024</h6>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="p-l20 p-r20 p-t10 p-b10 m-b20 bg-white rounded-lg shadow-sm">
                                            <a
                                                href="https://www.sman6yogya.sch.id/pengumuman/read/86/Pengumuman-Presensi-Siswa">
                                                <h3 class="text-primary sub-title m-b0"> <i
                                                        class="fa fa-bullhorn text-dark"></i> </h3> Pengumuman <h6
                                                    class="title m-b10">Pengumuman Presensi Siswa</h6>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="p-l20 p-r20 p-t10 p-b10 m-b20 bg-white rounded-lg shadow-sm">
                                            <a
                                                href="https://www.sman6yogya.sch.id/pengumuman/read/85/Pengumuman-kelulusan-SMA-Negeri-6-Yogyakarta">
                                                <h3 class="text-primary sub-title m-b0"> <i
                                                        class="fa fa-bullhorn text-dark"></i> </h3> Pengumuman <h6
                                                    class="title m-b10">Pengumuman kelulusan SMA Negeri 6 Yogyakarta</h6>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="p-l20 p-r20 p-t10 p-b10 m-b20 bg-white rounded-lg shadow-sm">
                                            <a
                                                href="https://www.sman6yogya.sch.id/pengumuman/read/19/PENGUMUMAN-KELULUSAN-KELAS-XII-TP-20202021">
                                                <h3 class="text-primary sub-title m-b0"> <i
                                                        class="fa fa-bullhorn text-dark"></i> </h3> Pengumuman <h6
                                                    class="title m-b10">PENGUMUMAN KELULUSAN KELAS XII TP 2020/2021</h6>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="p-l20 p-r20 p-t10 p-b10 m-b20 bg-white rounded-lg shadow-sm">
                                            <a
                                                href="https://www.sman6yogya.sch.id/pengumuman/read/18/NAMCHE-EARTH-DAY-2021-COMPETITION-REGISTRATION-IS-NOW-OPEN">
                                                <h3 class="text-primary sub-title m-b0"> <i
                                                        class="fa fa-bullhorn text-dark"></i> </h3> Pengumuman <h6
                                                    class="title m-b10">[NAMCHE EARTH DAY 2021 COMPETITION REGISTRATION IS
                                                    NOW OPEN]</h6>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center m-b80"><a href="https://www.sman6yogya.sch.id/agenda"
                                        class="btn shadow   btn-primary btn-xs m-r10  btn-sm m-t10"> Semua Agenda </a> <a
                                        href="https://www.sman6yogya.sch.id/pengumuman"
                                        class="btn shadow   btn-primary btn-xs m-t10"> Semua Pengumuman </a> </div>
                            </div>
                        </div>
                    </div>
                </section> --}}
                <section id="galeri" class="content-inner-3 bg-white p-2">
                    <div class="container-fluid p-3">
                        <div class=" row">
                            <div class="col-md-4">
                                <div class="section-head pt-0">
                                    <h2 class="text-primary sub-title">Galeri Foto</h2>
                                    <h6 class="title">SMAN 9 MUKOMUKO</h6>
                                    <span class="text-sm">Lihat lebih banyak foto kegiatan kami.</span> 
                                    <a href="#"><u>Selengkapnya</u></a>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="section-head style-2">
                                    <h6 class="text-primary sub-title"><i class="fas fa-image text-success"></i> 
                                        Foto Terbaru
                                    </h6>
                                </div>
                                <div class="relative team-swiper-area">
                                    <div class="swiper-container team-swiper1 owl-btn-1 owl-btn-primary owl-btn-center-lr">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide swiper-slide-next" role="group"
                                                aria-label="7 / 13" style="width: 368px; margin-right: 30px;"
                                                data-swiper-slide-index="2">
                                                <div class="dz-box overlay style-2 overlay-shine aos-init aos-animate"
                                                    data-aos="fade-up" data-aos-duration="500" data-aos-delay="700">
                                                    <div class="dz-media" style="width:100%">
                                                        <img src="{{ asset('assets/img/image-1.jpeg') }}" alt width="100%">
                                                    </div>
                                                    <div class="dz-info">
                                                        <a href="#" class="view-btn" title=" Penyerahan Penghargaan Adiwiyata mandiri dan talkshow SMA NE"></a>
                                                        <h6 class="title m-b15">
                                                            <a href="https://www.sman6yogya.sch.id/galeri-foto">
                                                                Penyerahan Penghargaan Adiwiyata mandiri dan talkshow
                                                            </a>
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide swiper-slide-next" role="group" aria-label="7 / 13" style="width: 368px; margin-right: 30px;" data-swiper-slide-index="2">
                                                <div class="dz-box overlay style-2 overlay-shine aos-init aos-animate" data-aos="fade-up" data-aos-duration="500" data-aos-delay="700">
                                                    <div class="dz-media" style="width:100%">
                                                        <img src="{{ asset('assets/img/image-2.jpeg') }}" alt width="100%">
                                                    </div>
                                                    <div class="dz-info">
                                                        <a href="https://www.sman6yogya.sch.id/galeri-foto" class="view-btn" title=" Juara 1 Bussiness Plan UII 2021"></a>
                                                        <h6 class="title m-b15">
                                                            <a href="https://www.sman6yogya.sch.id/galeri-foto"> 
                                                                Juara 1 Bussiness Plan UII 2021
                                                            </a>
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <footer class="site-footer style-1" id="footer"
                style="background:#17C2B8; background-image: url('{{ asset('assets/img/background-1.png') }}'); background-size:auto; background-repeat:  no-repeat;background-position:bottom left; ">
                <div class="footer-top">
                    <div class="container-fluid pl-5 pr-5">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-sm-6 aos-item" data-aos="fade-up" data-aos-duration="1000"
                                data-aos-delay="400">
                                <div class="widget widget_about text-white">
                                    <div class="widget-title">
                                        <h4 class="title"><small>SMAN 9 MUKOMUKO</small></h4>
                                        <div class="dz-separator style-1 text-primary mb-0"></div>
                                    </div>
                                    <p class="text-white">SMA Negeri 9 Mukomuko adalah sekolah menengah atas negeri yang
                                        berdiri pada 20 Mei 2010 di Kabupaten Mukomuko.</p>
                                    <ul class="social-list">
                                        <li><a href="https://www.facebook.com/share/164NezwA4J/?mibextid=wwXIfr" class="btn facebook"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#" class="btn instagram"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#" class="btn twitter"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#" class="btn youtube"><i class="fab fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-sm-6 aos-item" data-aos="fade-up" data-aos-duration="1000"
                                data-aos-delay="800">
                                <div class="widget widget_getintuch">
                                    <div class="widget-title">
                                        <h4 class="title">Kontak Kami</h4>
                                        <div class="dz-separator style-1 text-primary mb-0"></div>
                                    </div>
                                    <ul>
                                        <li>
                                            <i class="fas fa-map-marker-alt"></i>
                                            <span class="text-white">Jalan Bendungan Air Manjuto Desa Talang Sepakat Kec. V Koto Kab.Mukomuko Kode pos 38367 </span>
                                        </li>
                                        <li>
                                            <i class="fas fa-phone-alt"></i>
                                            <span class="text-white">Telp: (0274) 513335</span><br>
                                            <span class="text-white">Faxs: 0274-774289</span>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <i class="fas fa-envelope"></i>
                                            <span class="text-white">sman09_mukomuko@yahoo.co.id</span><br>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-sm-6 aos-item" data-aos="fade-up" data-aos-duration="1000"
                                data-aos-delay="600">
                                <div class="widget widget_categories">
                                    <div class="widget-title">
                                        <h4 class="title">Link</h4>
                                        <div class="dz-separator style-1 text-primary mb-0"></div>
                                    </div>
                                    <ul class="list-3">
                                        <li class="cat-item text-white">
                                            <a href="{{ route('dashboard.index') }}" target="_self">Login Dashboard</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom  bg-dark">
                    <div class="container">
                        <div class="row fb-inner">
                            <div class="col-lg-6 text-md-start">
                                <span class="copyright-text">
                                    <small> © Copyright 2023. SMAN 9 MUKOMUKO. All rights reserved.</small> 
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <button class="scroltop style1 white icon-up" type="button"><i class="fa fa-arrow-up"></i></button>
        </div>
        <script src="https://www.sman6yogya.sch.id/views/themes/mazotheme/assets/vendor/bootstrap/js/bootstrap.bundle.min.js">
        </script>
        <script src="https://www.sman6yogya.sch.id/views/themes/mazotheme/assets/vendor/magnific-popup/magnific-popup.js">
        </script>
        <script src="https://www.sman6yogya.sch.id/views/themes/mazotheme/assets/vendor/counter/waypoints-min.js"></script>
        <script src="https://www.sman6yogya.sch.id/views/themes/mazotheme/assets/vendor/counter/counterup.min.js"></script>
        <script src="https://www.sman6yogya.sch.id/views/themes/mazotheme/assets/vendor/masonry/isotope.pkgd.min.js"></script>
        <script src="https://www.sman6yogya.sch.id/views/themes/mazotheme/assets/vendor/imagesloaded/imagesloaded.js"></script>
        <script src="https://www.sman6yogya.sch.id/views/themes/mazotheme/assets/vendor/masonry/masonry-4.2.2.js"></script>
        <script src="https://www.sman6yogya.sch.id/views/themes/mazotheme/assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="https://www.sman6yogya.sch.id/views/themes/mazotheme/assets/js/dz.carousel.js"></script>
        <script src="https://www.sman6yogya.sch.id/views/themes/mazotheme/assets/js/dz.ajax.js"></script>
        <script src="https://www.sman6yogya.sch.id/views/themes/mazotheme/assets/js/custom.js"></script>
        <script type="text/javascript" src="https://www.sman6yogya.sch.id/assets/plugins/toast/jquery.toast.min.js"></script>
        <script type="text/javascript">
            function set_notif_toast(msg, label, toposition = 'bottom-right') {
                if (label == 'success') {
                    var title = 'Success';
                    var icon = 'success';
                    var color = '#7EC857';
                } else if (label == 'info') {
                    var title = 'Info';
                    var icon = 'info';
                    var color = '#00C9E6';
                } else {
                    var title = 'Perhatian';
                    var icon = 'error';
                    var color = '#FF4859';
                }

                $.toast({
                    heading: title,
                    text: msg,
                    showHideTransition: 'slide',
                    icon: icon,
                    hideAfter: 5000,
                    position: toposition,
                    bgColor: color
                });
            }
        </script>
    </body>
</html>
