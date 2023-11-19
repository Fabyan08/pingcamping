<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Pingcamping</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('public/assets/landing/img/favicons/apple-touch-icon.png') ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('public/assets/landing/img/favicons/favicon-32x32.png') ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('public/assets/landing/img/favicons/favicon-16x16.png') ?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('public/assets/landing/img/favicons/favicon.ico') ?>">
    <link rel="manifest" href="<?= base_url('public/assets/landing/img/favicons/site.webmanifest') ?>">
    <meta name="msapplication-TileImage" content="<?= base_url('public/assets/landing/img/favicons/mstile-150x150.png') ?>">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="<?= base_url('public/assets/landing/css/theme.css') ?>" rel="stylesheet" />

</head>

<body>


    <main class="main" id="top">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-5 d-block" data-navbar-on-scroll="data-navbar-on-scroll">
            <div class="container"><a class="navbar-brand font-bold" href="index.html">PingCamping</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"> </span></button>
                <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base align-items-lg-center align-items-start">

                        <!-- <li class="nav-item px-3 px-xl-4"><a class="nav-link fw-medium" aria-current="page" href="/Login/register">Register</a></li>
                        <li class="nav-item px-3 px-xl-4"><a class="nav-link fw-medium" aria-current="page" href="#booking">Booking</a></li>
                        <li class="nav-item px-3 px-xl-4"><a class="nav-link fw-medium" aria-current="page" href="#testimonial">Testimonial</a></li> -->
                        <li class="nav-item px-3 px-xl-4"><a class="nav-link fw-medium" aria-current="page" href="Login/login">Login</a></li>
                        <li class="nav-item px-3 px-xl-4"><a class="btn btn-outline-dark order-1 order-lg-0 fw-medium" href="Login/register">Sign Up</a></li>
                        <!-- <li class="nav-item dropdown px-3 px-lg-0"> <a class="d-inline-block ps-0 py-2 pe-3 text-decoration-none dropdown-toggle fw-medium" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">EN</a>
                            <ul class="dropdown-menu dropdown-menu-end border-0 shadow-lg" style="border-radius:0.3rem;" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#!">EN</a></li>
                                <li><a class="dropdown-item" href="#!">BN</a></li>
                            </ul>
                        </li> -->
                    </ul>
                </div>
            </div>
        </nav>
        <section style="padding-top: 7rem;">
            <div class="bg-holder" style="background-image:url(<?= base_url('public/assets/landing/img/hero/hero-bg.svg') ?>);">
            </div>
            <!--/.bg-holder-->

            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-5 col-lg-6 order-0 order-md-1 text-end"><img class="pt-7 pt-md-0 hero-img" src="<?= base_url('public/assets/landing/img/hero/hero-img.png') ?>" alt="hero-header" /></div>
                    <div class="col-md-7 col-lg-6 text-md-start text-center py-6">
                        <h4 class="fw-bold text-danger mb-3">Selamat Datang di Pingcamping</h4>
                        <h1 class="hero-title">Temukan berbagai peralatan camping </h1>
                        <p class="mb-4 fw-medium">untuk petualangan outdoor anda menuju <br> pengalaman yang luar biasa</p>
                        <div class="text-center text-md-start"> <a class="btn btn-primary btn-lg me-md-4 mb-3 mb-md-0 border-0 primary-btn-shadow" href="#!" role="button">Find out more</a>
                            <div class="w-100 d-block d-md-none"></div><a href="#!" role="button" data-bs-toggle="modal" data-bs-target="#popupVideo"><span class="btn btn-danger round-btn-lg rounded-circle me-3 danger-btn-shadow"> <img src="<?= base_url('public/assets/landing/img/hero/play.svg') ?>" width="15" alt="paly" /></span></a><span class="fw-medium">Play Demo</span>
                            <div class="modal fade" id="popupVideo" tabindex="-1" aria-labelledby="popupVideo" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <iframe class="rounded" style="width:100%;max-height:500px;" height="500px" src="https://www.youtube.com/embed/_lhdhL4UDIo" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="allowfullscreen"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="pt-5 pt-md-9" id="service">

            <div class="container">
                <div class="position-absolute z-index--1 end-0 d-none d-lg-block"><img src="<?= base_url('public/assets/landing/img/category/shape.svg') ?>" style="max-width: 200px" alt="service" /></div>
                <div class="mb-7 text-center">
                    <h5 class="text-secondary">Kategori </h5>
                    <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">PingCamping Menawarkan Beberapa Jasa</h3>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-sm-6 mb-6">
                        <div class="card service-card shadow-hover rounded-3 text-center align-items-center">
                            <div class="card-body p-xxl-5 p-4"> <img src="<?= base_url('public/assets/landing/img/category/icon1.png') ?>" width="75" alt="Service" />
                                <h4 class="mb-3">Perhitungan Cuaca</h4>
                                <p class="mb-0 fw-medium">Memastikan kamu aman selama camping di sini.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-6">
                        <div class="card service-card shadow-hover rounded-3 text-center align-items-center">
                            <div class="card-body p-xxl-5 p-4"> <img src="<?= base_url('public/assets/landing/img/category/icon2.png') ?>" width="75" alt="Service" />
                                <h4 class="mb-3">Perjalanan Terbaik</h4>
                                <p class="mb-0 fw-medium">Mulai langkah kamu dengan perjalanan cantik view yang indah.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-6">
                        <div class="card service-card shadow-hover rounded-3 text-center align-items-center">
                            <div class="card-body p-xxl-5 p-4"> <img src="<?= base_url('public/assets/landing/img/category/icon3.png') ?>" width="75" alt="Service" />
                                <h4 class="mb-3">Event Tambahan</h4>
                                <p class="mb-0 fw-medium">Nikmati event gratisan dengan bintang kelas atas yang pastinya asik.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-6">
                        <div class="card service-card shadow-hover rounded-3 text-center align-items-center">
                            <div class="card-body p-xxl-5 p-4"> <img src="<?= base_url('public/assets/landing/img/category/icon4.png') ?>" width="75" alt="Service" />
                                <h4 class="mb-3">Atur Sesuka Kamu</h4>
                                <p class="mb-0 fw-medium">Dengan PingCamping, kamu bisa mengatur jadwal hingga paket sesuka hati!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->




        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="pt-5" id="destination">

            <div class="container">
                <div class="position-absolute start-100 bottom-0 translate-middle-x d-none d-xl-block ms-xl-n4"><img src="<?= base_url('public/assets/landing/img/dest/shape.svg') ?>" alt="destination" /></div>
                <div class="mb-7 text-center">
                    <h5 class="text-secondary">Barang Kami</h5>
                    <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">Apa Yang Kamu Inginkan?</h3>
                </div>
                <div class="row d-flex justify-content-center">
                    <?php foreach ($barang as $key => $value) : ?>

                        <div class="col-md-4 mb-4">
                            <div class="card overflow-hidden shadow"> <img class="card-img-top" style="width: 500px; height: 300px; object-fit: cover" src="<?= base_url('public/assets/img/barang/' . $value['gambar'])  ?>" alt="Rome, Italty" />
                                <div class="card-body py-4 px-3">
                                    <div class="d-flex flex-column flex-lg-row justify-content-between mb-3">
                                        <h4 class="text-secondary fw-medium"><a class="link-900 text-decoration-none stretched-link" href="<?= base_url('Web/detail_barang/' . $value['id_barang'])  ?>"> <?= $value['nama_barang'] ?></a></h4><span class="fs-1 fw-medium">Rp. <?= number_format($value['harga_sewa'], 0, ',', '.')  ?> / Hari</span>
                                    </div>
                                    <div class="d-flex align-items-center"> <img src="<?= base_url('public/assets/landing/img/dest/navigation.svg ') ?>" style="margin-right: 14px" width="20" alt="navigation" /><span class="fs-0 fw-medium"><?= $value['detail_barang'] ?></span></div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>


                </div>
            </div><!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->




        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section id="booking">

            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="mb-4 text-start">
                            <h5 class="text-secondary">Cepat dan Mudah</h5>
                            <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">Booking dengan 3 langkah</h3>
                        </div>
                        <div class="d-flex align-items-start mb-5">
                            <div class="bg-primary me-sm-4 me-3 p-3" style="border-radius: 13px"> <img src="<?= base_url('public/assets/landing//img/steps/selection.svg') ?>" width="22" alt="steps" /></div>
                            <div class="flex-1">
                                <h5 class="text-secondary fw-bold fs-0">Pilih Barangmu</h5>
                                <p>Pilih sesuka hati yang kamu sukai</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-start mb-5">
                            <div class="bg-danger me-sm-4 me-3 p-3" style="border-radius: 13px"> <img src="<?= base_url('public/assets/landing/img/steps/water-sport.svg') ?>" width="22" alt="steps" /></div>
                            <div class="flex-1">
                                <h5 class="text-secondary fw-bold fs-0">Buat Pembayaran</h5>
                                <p>Setelah menemukan yang kamu inginkan, bayar sesuai nominalnya ya!</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-start mb-5">
                            <div class="bg-info me-sm-4 me-3 p-3" style="border-radius: 13px"> <img src="<?= base_url('public/assets/landing/img/steps/taxi.svg') ?>" width="22" alt="steps" /></div>
                            <div class="flex-1">
                                <h5 class="text-secondary fw-bold fs-0">Sukses dan Berhasil</h5>
                                <p>Tak perlu lama, transaksi kamu sukses dan barang akan segera sampai!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex justify-content-center align-items-start">
                        <div class="card position-relative shadow" style="max-width: 370px;">
                            <div class="position-absolute z-index--1 me-10 me-xxl-0" style="right:-160px;top:-210px;"> <img src="<?= base_url('public/assets/landing/img/steps/bg.png') ?>" style="max-width:550px;" alt="shape" /></div>
                            <div class="card-body p-3"> <img class="mb-4 mt-2 rounded-2 w-100" src="<?= base_url('public/assets/landing/img/steps/booking-img.jpg') ?>" alt="booking" />
                                <div>
                                    <h5 class="fw-medium">Camping Terbaik</h5>
                                    <p class="fs--1 mb-3 fw-medium">14-29 June | by Robbin joseph</p>
                                    <div class="icon-group mb-4"> <span class="btn icon-item"> <img src="<?= base_url('public/assets/landing/img/steps/leaf.svg') ?>" alt="" /></span><span class="btn icon-item"> <img src="<?= base_url('public/assets/landing/img/steps/map.svg') ?>" alt="" /></span><span class="btn icon-item"> <img src="<?= base_url('public/assets/landing/img/steps/send.svg') ?>" alt="" /></span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center mt-n1"><img class="me-3" src="<?= base_url('public/assets/landing/img/steps/building.svg') ?>" width="18" alt="building" /><span class="fs--1 fw-medium">24 people going</span></div>
                                        <div class="show-onhover position-relative">
                                            <div class="card hideEl shadow position-absolute end-0 start-xl-50 bottom-100 translate-xl-middle-x ms-3" style="width: 260px;border-radius:18px;">
                                                <div class="card-body py-3">
                                                    <div class="d-flex">
                                                        <div style="margin-right: 10px"> <img class="rounded-circle" src="<?= base_url('public/assets/landing/img/steps/favorite-placeholder.png') ?>" width="50" alt="favorite" /></div>
                                                        <div>
                                                            <p class="fs--1 mb-1 fw-medium">Ongoing </p>
                                                            <h5 class="fw-medium mb-3">Trip to rome</h5>
                                                            <h6 class="fs--1 fw-medium mb-2"><span>40%</span> completed</h6>
                                                            <div class="progress" style="height: 6px;">
                                                                <div class="progress-bar" role="progressbar" style="width: 40%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="btn"> <img src="<?= base_url('public/assets/landing/img/steps/heart.svg') ?>" width="20" alt="step" /></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->




        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section id="testimonial">

            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="mb-8 text-start">
                            <h5 class="text-secondary">Review </h5>
                            <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">Apa Kata Orang Tentang PingCamping?</h3>
                        </div>
                    </div>
                    <div class="col-lg-1"></div>
                    <div class="col-lg-6">
                        <div class="pe-7 ps-5 ps-lg-0">
                            <div class="carousel slide carousel-fade position-static" id="testimonialIndicator" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    <button class="active" type="button" data-bs-target="#testimonialIndicator" data-bs-slide-to="0" aria-current="true" aria-label="Testimonial 0"></button>
                                    <button class="false" type="button" data-bs-target="#testimonialIndicator" data-bs-slide-to="1" aria-current="true" aria-label="Testimonial 1"></button>
                                    <button class="false" type="button" data-bs-target="#testimonialIndicator" data-bs-slide-to="2" aria-current="true" aria-label="Testimonial 2"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item position-relative active">
                                        <div class="card shadow" style="border-radius:10px;">
                                            <div class="position-absolute start-0 top-0 translate-middle"> <img class="rounded-circle fit-cover" src="<?= base_url('public/assets/landing/img/testimonial/author.png') ?>" height="65" width="65" alt="" /></div>
                                            <div class="card-body p-4">
                                                <p class="fw-medium mb-4">&quot;Sangat Keren dan Menarik.&quot;</p>
                                                <h5 class="text-secondary">Mike taylor</h5>
                                                <p class="fw-medium fs--1 mb-0">Lahore, Pakistan</p>
                                            </div>
                                        </div>
                                        <div class="card shadow-sm position-absolute top-0 z-index--1 mb-3 w-100 h-100" style="border-radius:10px;transform:translate(25px, 25px)"> </div>
                                    </div>
                                    <div class="carousel-item position-relative ">
                                        <div class="card shadow" style="border-radius:10px;">
                                            <div class="position-absolute start-0 top-0 translate-middle"> <img class="rounded-circle fit-cover" src="<?= base_url('public/assets/landing/img/testimonial/author2.png') ?>" height="65" width="65" alt="" /></div>
                                            <div class="card-body p-4">
                                                <p class="fw-medium mb-4">&quot;Sangat Keren dan Menarik.&quot;</p>

                                                <h5 class="text-secondary">Thomas Wagon</h5>
                                                <p class="fw-medium fs--1 mb-0">CEO of Red Button</p>
                                            </div>
                                        </div>
                                        <div class="card shadow-sm position-absolute top-0 z-index--1 mb-3 w-100 h-100" style="border-radius:10px;transform:translate(25px, 25px)"> </div>
                                    </div>
                                    <div class="carousel-item position-relative ">
                                        <div class="card shadow" style="border-radius:10px;">
                                            <div class="position-absolute start-0 top-0 translate-middle"> <img class="rounded-circle fit-cover" src="<?= base_url('public/assets/landing/img/testimonial/author3.png') ?>" height="65" width="65" alt="" /></div>
                                            <div class="card-body p-4">
                                                <p class="fw-medium mb-4">&quot;Sangat Keren dan Menarik.&quot;</p>

                                                <h5 class="text-secondary">Kelly Willium</h5>
                                                <p class="fw-medium fs--1 mb-0">Khulna, Bangladesh</p>
                                            </div>
                                        </div>
                                        <div class="card shadow-sm position-absolute top-0 z-index--1 mb-3 w-100 h-100" style="border-radius:10px;transform:translate(25px, 25px)"> </div>
                                    </div>
                                </div>
                                <div class="carousel-navigation d-flex flex-column flex-between-center position-absolute end-0 top-lg-50 bottom-0 translate-middle-y z-index-1 me-3 me-lg-0" style="height:60px;width:20px;">
                                    <button class="carousel-control-prev position-static" type="button" data-bs-target="#testimonialIndicator" data-bs-slide="prev"><img src="<?= base_url('public/assets/landing/img/icons/up.svg') ?>" width="16" alt="icon" /></button>
                                    <button class="carousel-control-next position-static" type="button" data-bs-target="#testimonialIndicator" data-bs-slide="next"><img src="<?= base_url('public/assets/landing/img/icons/down.svg') ?>" width="16" alt="icon" /></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->


        <div class="position-relative pt-9 pt-lg-8 pb-6 pb-lg-8">
            <div class="container">
                <div class="row row-cols-lg-5 row-cols-md-3 row-cols-2 flex-center">
                    <div class="col">
                        <div class="card shadow-hover mb-4" style="border-radius:10px;">
                            <div class="card-body text-center"> <img class="img-fluid" src="<?= base_url('public/asset/landing/img/partner/1.png') ?>" alt="" /></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-hover mb-4" style="border-radius:10px;">
                            <div class="card-body text-center"> <img class="img-fluid" src="<?= base_url('public/asset/landing/img/partner/2.png') ?>" alt="" /></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-hover mb-4" style="border-radius:10px;">
                            <div class="card-body text-center"> <img class="img-fluid" src="<?= base_url('public/asset/landing/img/partner/3.png') ?>" alt="" /></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-hover mb-4" style="border-radius:10px;">
                            <div class="card-body text-center"> <img class="img-fluid" src="<?= base_url('public/asset/landing/img/partner/4.png') ?>" alt="" /></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-hover mb-4" style="border-radius:10px;">
                            <div class="card-body text-center"> <img class="img-fluid" src="<?= base_url('public/asset/landing/img/partner/5.png') ?>" alt="" /></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="pt-6">

            <div class="container">
                <div class="py-8 px-5 position-relative text-center" style="background-color: rgba(223, 215, 249, 0.199);border-radius: 129px 20px 20px 20px;">
                    <div class="position-absolute start-100 top-0 translate-middle ms-md-n3 ms-n4 mt-3"> <img src="<?= base_url('public/assets/landing/img/cta/send.png') ?>" style="max-width:70px;" alt="send icon" /></div>
                    <div class="position-absolute end-0 top-0 z-index--1"> <img src="<?= base_url('public/assets/landing/img/cta/shape-bg2.png') ?>" width="264" alt="cta shape" /></div>
                    <div class="position-absolute start-0 bottom-0 ms-3 z-index--1 d-none d-sm-block"> <img src="<?= base_url('public/assets/landing/img/cta/shape-bg1.png') ?>" style="max-width: 340px;" alt="cta shape" /></div>
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-md-10">
                            <h2 class="text-secondary lh-1-7 mb-7">Subscribe kami dengan mengirimkan email kamu di bawah ini!</h2>
                            <form class="row g-3 align-items-center w-lg-75 mx-auto">
                                <div class="col-sm">
                                    <div class="input-group-icon">
                                        <input class="form-control form-little-squirrel-control" type="email" placeholder="Enter email " aria-label="email" /><img class="input-box-icon" src="<?= base_url('public/assets/landing/img/cta/mail.svg') ?>" width="17" alt="mail" />
                                    </div>
                                </div>
                                <div class="col-sm-auto">
                                    <button class="btn btn-danger orange-gradient-btn fs--1">Subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div><!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->




        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="pb-0 pb-lg-4">

            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-7 col-12 mb-4 mb-md-6 mb-lg-0 order-0">
                        <h2>PingCamping</h2>
                        <p class="fs--1 text-secondary mb-0 fw-medium">Kebutuhan Camping Sesuka Hati Kamu yang Aman dan Terpercaya!</p>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-4 mb-lg-0 order-lg-1 order-md-2">
                        <h4 class="footer-heading-color fw-bold font-sans-serif mb-3 mb-lg-4">Company</h4>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none" href="#!">About</a></li>
                            <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none" href="#!">Careers</a></li>
                            <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none" href="#!">Mobile</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-4 mb-lg-0 order-lg-2 order-md-3">
                        <h4 class="footer-heading-color fw-bold font-sans-serif mb-3 mb-lg-4">Contact</h4>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none" href="#!">Help/FAQ</a></li>
                            <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none" href="#!">Press</a></li>
                            <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none" href="#!">Affiliate</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-4 mb-lg-0 order-lg-3 order-md-4">
                        <h4 class="footer-heading-color fw-bold font-sans-serif mb-3 mb-lg-4">More</h4>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none" href="#!">Airlinefees</a></li>
                            <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none" href="#!">Airline</a></li>
                            <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none" href="#!">Low fare tips</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-5 col-12 mb-4 mb-md-6 mb-lg-0 order-lg-4 order-md-1">
                        <div class="icon-group mb-4"> <a class="text-decoration-none icon-item shadow-social" id="facebook" href="#!"><i class="fab fa-facebook-f"> </i></a><a class="text-decoration-none icon-item shadow-social" id="instagram" href="#!"><i class="fab fa-instagram"> </i></a><a class="text-decoration-none icon-item shadow-social" id="twitter" href="#!"><i class="fab fa-twitter"> </i></a></div>
                        <h4 class="fw-medium font-sans-serif text-secondary mb-3">Discover our app</h4>
                        <div class="d-flex align-items-center"> <a href="#!"> <img class="me-2" src="<?= base_url('public/assets/landing/img/play-store.png') ?>" alt="play store" /></a><a href="#!"> <img src="<?= base_url('public/assets/landing/img/apple-store.png') ?>/" alt="apple store" /></a></div>

                    </div>
                </div>
            </div><!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->


        <div class="py-5 text-center">
            <p class="mb-0 text-secondary fs--1 fw-medium">All rights reserved </p>
        </div>
    </main>
    <!-- ======= Hero Section ======= -->



    <script src="<?= base_url('public/assets/landing/vendors/@popperjs/popper.min.js') ?>"></script>
    <script src="<?= base_url('public/assets/landing/vendors/bootstrap/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('public/assets/landing/vendors/is/is.min.js') ?>"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="<?= base_url('public/assets/landing/vendors/fontawesome/all.min.js') ?>"></script>
    <script src="<?= base_url('public/assets/landing/js/theme.js') ?>"></script>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&amp;family=Volkhov:wght@700&amp;display=swap" rel="stylesheet">
</body>

</html>