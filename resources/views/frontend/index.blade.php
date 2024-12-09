<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>DiesCraft</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="{{ asset('front/img/favicon.ico') }}" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap"
        rel="stylesheet" />

    <!-- Icon Font Stylesheet -->
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
        rel="stylesheet" />
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
        rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('front/lib/animate/animate.min.css') }}" rel="stylesheet" />
    <link
        href="{{ asset('front/lib/owlcarousel/assets/owl.carousel.min.css') }}"
        rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('front/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="{{ asset('front/css/style.css') }}" rel="stylesheet" />
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div
            id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div
                class="spinner-border text-primary"
                style="width: 3rem; height: 3rem"
                role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Navbar Start -->
        <div class="container-fluid nav-bar bg-transparent">
            <nav
                class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
                <a
                    href="index.html"
                    class="navbar-brand d-flex align-items-center text-center">
                    <div class="icon p-2 me-2">
                        <img
                            class="img-fluid"
                            src="{{ asset('front/img/icon_diescraft.png') }}"
                            alt="Icon"
                            style="width: 30px; height: 30px" />
                    </div>
                    <h1 class="m-0 text-primary">DiesCraft</h1>
                </a>
                <button
                    type="button"
                    class="navbar-toggler"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a
                            href="index.html"
                            class="nav-item nav-link active">Home</a>
                        <div class="nav-item dropdown">
                            <a
                                href="#"
                                class="nav-link dropdown-toggle"
                                data-bs-toggle="dropdown">Kategori</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                @foreach ($categories as $category)
                                <a href="{{ route('category.show', ['category' => $category->nama_kategori]) }}" class="dropdown-item">
                                    {{ $category->nama_kategori }}
                                </a>
                                @endforeach
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a
                                href="#"
                                class="nav-link dropdown-toggle"
                                data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a
                                    href="testimonial.html"
                                    class="dropdown-item">Testimonial</a>
                                <a href="404.html" class="dropdown-item">404 Error</a>
                            </div>
                        </div>
                        <a href="contact.html" class="nav-item nav-link">Contact</a>
                    
            </nav>
        </div>
        <!-- Navbar End -->

        <!-- Header Start -->
        <div class="container-fluid header bg-white p-0">
            <div
                class="row g-0 align-items-center flex-column-reverse flex-md-row">
                <div class="col-md-6 p-5 mt-lg-5">
                    <h1 class="display-5 animated fadeIn mb-4">
                        Selamat Datang di
                        <span class="text-primary">DiesCraft</span>
                        E-Katalog
                    </h1>
                    <p class="animated fadeIn mb-4 pb-2">
                        Temukan kerajinan manik-manik berkualitas dari UMKM
                        lokal yang penuh kreativitas. Dari aksesoris hingga
                        dekorasi, DiesCraft menghadirkan produk unik dan
                        penuh makna untuk melengkapi gaya hidup Anda. Mari
                        dukung karya anak bangsa!
                    </p>
                    <a
                        href=""
                        class="btn btn-primary py-3 px-5 me-3 animated fadeIn">Get Started</a>
                </div>
                <div class="col-md-6 animated fadeIn">
                    <div class="owl-carousel header-carousel">
                        <div class="owl-carousel-item">
                            <img
                                class="img-fluid"
                                src="/front/img/14.jpg"
                                alt="" />
                        </div>
                        <div class="owl-carousel-item">
                            <img
                                class="img-fluid"
                                src="/front/img/14.jpg"
                                alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->

        <!-- Search Start -->
        <div
            class="container-fluid bg-primary mb-5 wow fadeIn"
            data-wow-delay="0.1s"
            style="padding: 35px">
            <div class="container">
                <div class="row g-2">
                    <div class="col-md-10">
                        <div class="row g-2">
                            <div class="col-md-4">
                            <select class="form-select border-0 py-3" onchange="location = this.value;">
            <option selected disabled>Pilih Kategori</option>
            @foreach ($categories as $category)
                <option value="{{ route('category.show', ['category' => $category->nama_kategori]) }}">
                    {{ $category->nama_kategori }}
                </option>
            @endforeach
        </select>
                            </div>
                            <div class="col-md-4">
                                <select class="form-select border-0 py-3">
                                    <option selected>Location</option>
                                    <option value="1">
                                        Madiun - Stand Sunday Market
                                        Bantaran Kota Madiun
                                    </option>
                                    <option value="2">
                                        Caruban - Stand Sunday Market Alun
                                        Alun Caruban
                                    </option>
                                    <option value="3">
                                        Nganjuk - Stand Sunday Market Alun
                                        Alun Nganjuk
                                    </option>
                                    <option value="4">
                                        Kediri - Stand Sunday Market Alun
                                        Alun Kediri
                                    </option>
                                    <option value="5">
                                        Bandung - Stand Sunday Market
                                        Landasan Pusdik Bandung Barat
                                    </option>
                                    <option value="6">
                                        Jombang - Stand Sunday Market
                                        Jombang
                                    </option>
                                    <option value="7">
                                        Mojokerto - Stand Sunday Market
                                        Mojokerto
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <span class="btn btn-dark border-0 w-100 py-3">
                            Let's get to now
</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search End -->

        <!-- Category Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div
                    class="text-center mx-auto mb-5 wow fadeInUp"
                    data-wow-delay="0.1s"
                    style="max-width: 600px">
                    <h1 class="mb-3">Kategori</h1>
                    <p>
                        Selamat datang di halaman kategori DiesCraft!
                        Temukan berbagai koleksi kerajinan manik-manik
                        berkualitas yang dibuat dengan penuh kreativitas
                        oleh UMKM lokal. Kami menghadirkan beragam pilihan
                        produk unik, mulai dari aksesori fashion, yang
                        dirancang untuk melengkapi gaya hidup Anda.
                    </p>
                </div>

                <div class="row g-4">
                    <div
                        class="col-lg-3 col-sm-6 wow fadeInUp"
                        data-wow-delay="0.1s">
                        <a
                            class="cat-item d-block bg-light text-center rounded p-3"
                            href="">
                            <div class="rounded p-4">
                                <div class="icon mb-3">
                                    <img
                                        class="img-fluid rounded"
                                        src="/front/img/7.jpg"
                                        alt="Icon" />
                                </div>
                                <h6>Gelang</h6>
                                <span>24 Produk</span>
                            </div>
                        </a>
                    </div>
                    <div
                        class="col-lg-3 col-sm-6 wow fadeInUp"
                        data-wow-delay="0.3s">
                        <a
                            class="cat-item d-block bg-light text-center rounded p-3"
                            href="">
                            <div class="rounded p-4">
                                <div class="icon mb-3">
                                    <img
                                        class="img-fluid rounded"
                                        src="/front/img/13.jpg"
                                        alt="Icon" />
                                </div>
                                <h6>Gantungan</h6>
                                <span>12 Produk</span>
                            </div>
                        </a>
                    </div>
                    <div
                        class="col-lg-3 col-sm-6 wow fadeInUp"
                        data-wow-delay="0.5s">
                        <a
                            class="cat-item d-block bg-light text-center rounded p-3"
                            href="">
                            <div class="rounded p-4">
                                <div class="icon mb-3">
                                    <img
                                        class="img-fluid rounded"
                                        src="/front/img/kalung.jpg"
                                        alt="Icon" />
                                </div>
                                <h6>Kalung</h6>
                                <span>30 Produk</span>
                            </div>
                        </a>
                    </div>
                    <div
                        class="col-lg-3 col-sm-6 wow fadeInUp"
                        data-wow-delay="0.7s">
                        <a
                            class="cat-item d-block bg-light text-center rounded p-3"
                            href="">
                            <div class="rounded p-4">
                                <div class="icon mb-3">
                                    <img
                                        class="img-fluid rounded"
                                        src="/front/img/8.jpg"
                                        alt="Icon" />
                                </div>
                                <h6>Cincin</h6>
                                <span>50 Produk</span>
                            </div>
                        </a>
                    </div>
                    <div
                        class="col-lg-3 col-sm-6 wow fadeInUp"
                        data-wow-delay="0.1s">
                        <a
                            class="cat-item d-block bg-light text-center rounded p-3"
                            href="">
                            <div class="rounded p-4">
                                <div class="icon mb-3">
                                    <img
                                        class="img-fluid rounded"
                                        src="/front/img/strap masker.jpg"
                                        alt="Icon" />
                                </div>
                                <h6>Strap Masker</h6>
                                <span>42 Produk</span>
                            </div>
                        </a>
                    </div>
                    <div
                        class="col-lg-3 col-sm-6 wow fadeInUp"
                        data-wow-delay="0.3s">
                        <a
                            class="cat-item d-block bg-light text-center rounded p-3"
                            href="">
                            <div class="rounded p-4">
                                <div class="icon mb-3">
                                    <img
                                        class="img-fluid rounded"
                                        src="/front/img/hijab.jpg"
                                        alt="Icon" />
                                </div>
                                <h6>Hijab</h6>
                                <span>70 Produk</span>
                            </div>
                        </a>
                    </div>
                    <div
                        class="col-lg-3 col-sm-6 wow fadeInUp"
                        data-wow-delay="0.5s">
                        <a
                            class="cat-item d-block bg-light text-center rounded p-3"
                            href="">
                            <div class="rounded p-4">
                                <div class="icon mb-3">
                                    <img
                                        class="img-fluid rounded"
                                        src="/front/img/kacamata.jpg"
                                        alt="Icon" />
                                </div>
                                <h6>Kacamata</h6>
                                <span>15 Produk</span>
                            </div>
                        </a>
                    </div>
                    <div
                        class="col-lg-3 col-sm-6 wow fadeInUp"
                        data-wow-delay="0.7s">
                        <a
                            class="cat-item d-block bg-light text-center rounded p-3"
                            href="">
                            <div class="rounded p-4">
                                <div class="icon mb-3">
                                    <img
                                        class="img-fluid rounded"
                                        src="/front/img/order.jpg"
                                        alt="Icon" />
                                </div>
                                <h6>Custome Order</h6>
                                <span>Bebas Pilih</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Category End -->

        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div
                            class="about-img position-relative overflow-hidden p-5 pe-0">
                            <img
                                class="img-fluid w-100"
                                src="/front/img/14.jpg" />
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <h1 class="mb-4">
                            Tentang DiesCraft
                        </h1>
                        <p class="mb-4">
                            DiesCraft adalah platform yang menjual kerajinan manik-manik unik dan
                            berkualitas dari UMKM lokal,
                            mencakup aksesori hingga dekorasi untuk melengkapi gaya hidup Anda.
                        </p>
                        <p>
                            <i class="fa fa-check text-primary me-3"></i>Kualitas Terbaik
                        </p>
                        <p>
                            <i class="fa fa-check text-primary me-3"></i>kreativitas Tanpa Batas
                        </p>
                        <p>
                            <i class="fa fa-check text-primary me-3"></i>Inovasi Produk
                        </p>
                        <a class="btn btn-primary py-3 px-5 mt-3" href="">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Property List Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-0 gx-5 align-items-end">
                    <div class="col-lg-6">
                        <div
                            class="text-start mx-auto mb-5 wow slideInLeft"
                            data-wow-delay="0.1s">
                            <h1 class="mb-3">Lokasi</h1>
                            <p>
                                Beberapa lokasi Sunday Market tempat DiesCraft hadir.
                            </p>
                        </div>
                    </div>
                    <div
                        class="col-lg-6 text-start text-lg-end wow slideInRight"
                        data-wow-delay="0.1s">
                        <ul
                            class="nav nav-pills d-inline-flex justify-content-end mb-5">
                            <li class="nav-item me-2">
                                <a
                                    class="btn btn-outline-primary active"
                                    data-bs-toggle="pill"
                                    href="#tab-1">CFD/Toko</a>
                        </ul>
                    </div>
                </div>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <div
                                class="col-lg-4 col-md-6 wow fadeInUp"
                                data-wow-delay="0.1s">
                                <div
                                    class="property-item rounded overflow-hidden">
                                    <div
                                        class="position-relative overflow-hidden">
                                        <a href=""><img
                                                class="img-fluid"
                                                src="/front/img/caruban.jpg"
                                                alt="" /></a>
                                        <div
                                            class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                            CFD
                                        </div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <a class="d-block h5 mb-2" href="">Sunday Market Caruban</a>
                                        <p>
                                            <i
                                                class="fa fa-map-marker-alt text-primary me-2"></i>Jl. Mt. Haryono No.58-54, Caruban, Krajan, Kec. Mejayan, Kabupaten Madiun
                                        </p>
                                    </div>

                                </div>
                            </div>
                            <div
                                class="col-lg-4 col-md-6 wow fadeInUp"
                                data-wow-delay="0.3s">
                                <div
                                    class="property-item rounded overflow-hidden">
                                    <div
                                        class="position-relative overflow-hidden">
                                        <a href=""><img
                                                class="img-fluid"
                                                src="/front/img/jombang.jpg"
                                                alt="" /></a>
                                        <div
                                            class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                            CFD
                                        </div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <a class="d-block h5 mb-2" href="">Sunday Market Jombang</a>
                                        <p>
                                            <i
                                                class="fa fa-map-marker-alt text-primary me-2"></i>Jl. KH. Wahid Hasyim No.136 A, Kepanjen, Kec. Jombang, Kab. Jombang
                                        </p>
                                    </div>

                                </div>
                            </div>
                            <div
                                class="col-lg-4 col-md-6 wow fadeInUp"
                                data-wow-delay="0.5s">
                                <div
                                    class="property-item rounded overflow-hidden">
                                    <div
                                        class="position-relative overflow-hidden">
                                        <a href=""><img
                                                class="img-fluid"
                                                src="/front/img/madiun.png"
                                                alt="" /></a>

                                        <div
                                            class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                            Toko
                                        </div>
                                    </div>
                                    <div class="p-4 pb-0">

                                        <a class="d-block h5 mb-2" href="">Dies.craft beads store</a>
                                        <p>
                                            <i
                                                class="fa fa-map-marker-alt text-primary me-2"></i>Jl. Mojopahit No.52, Winongo, Kec. Manguharjo, Kota Madiun, Jawa Timur
                                        </p>
                                    </div>

                                </div>
                            </div>
                            <div
                                class="col-lg-4 col-md-6 wow fadeInUp"
                                data-wow-delay="0.1s">
                                <div
                                    class="property-item rounded overflow-hidden">
                                    <div
                                        class="position-relative overflow-hidden">
                                        <a href=""><img
                                                class="img-fluid"
                                                src="/front/img/nganjuk.jpg"
                                                alt="" /></a>

                                        <div
                                            class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                            CFD
                                        </div>
                                    </div>
                                    <div class="p-4 pb-0">

                                        <a class="d-block h5 mb-2" href="">Sunday Market Nganjuk</a>
                                        <p>
                                            <i
                                                class="fa fa-map-marker-alt text-primary me-2"></i>Alun-Alun Nganjuk Mangundikaran, Mangun Dikaran, Kec. Nganjuk, Kabupaten Nganjuk
                                        </p>
                                    </div>

                                </div>
                            </div>
                            <div
                                class="col-lg-4 col-md-6 wow fadeInUp"
                                data-wow-delay="0.3s">
                                <div
                                    class="property-item rounded overflow-hidden">
                                    <div
                                        class="position-relative overflow-hidden">
                                        <a href=""><img
                                                class="img-fluid"
                                                src="/front/img/mojokerto.jpg"
                                                alt="" /></a>
                                        <div
                                            class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                            CFD
                                        </div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <a class="d-block h5 mb-2" href="">Sunday Market Kediri</a>
                                        <p>
                                            <i
                                                class="fa fa-map-marker-alt text-primary me-2"></i>Taman Hijau
                                            Jl. Raya Kediri - Plosoklaten Jl. Erlangga No.163, Dadapan
                                        </p>
                                    </div>

                                </div>
                            </div>
                            <div
                                class="col-lg-4 col-md-6 wow fadeInUp"
                                data-wow-delay="0.5s">
                                <div
                                    class="property-item rounded overflow-hidden">
                                    <div
                                        class="position-relative overflow-hidden">
                                        <a href=""><img
                                                class="img-fluid"
                                                src="/front/img/mojokerto.jpg"
                                                alt="" /></a>
                                        <div
                                            class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                            CFD
                                        </div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <a class="d-block h5 mb-2" href="">Stand Mojokerto</a>
                                        <p>
                                            <i
                                                class="fa fa-map-marker-alt text-primary me-2"></i>Pasar Sari Jarang Sari, Lolawang, Kec. Ngoro, Kabupaten Mojokerto, Jawa Timur
                                        </p>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div id="tab-2" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-4 col-md-6">
                                <div
                                    class="property-item rounded overflow-hidden">
                                    <div
                                        class="position-relative overflow-hidden">
                                        <a href=""><img
                                                class="img-fluid"
                                                src="img/property-1.jpg"
                                                alt="" /></a>
                                        <div
                                            class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                            For Sell
                                        </div>
                                        <div
                                            class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                            Appartment
                                        </div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">
                                            $12,345
                                        </h5>
                                        <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                        <p>
                                            <i
                                                class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA
                                        </p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small
                                            class="flex-fill text-center border-end py-2"><i
                                                class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                        <small
                                            class="flex-fill text-center border-end py-2"><i
                                                class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                        <small
                                            class="flex-fill text-center py-2"><i
                                                class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div
                                    class="property-item rounded overflow-hidden">
                                    <div
                                        class="position-relative overflow-hidden">
                                        <a href=""><img
                                                class="img-fluid"
                                                src="img/property-2.jpg"
                                                alt="" /></a>
                                        <div
                                            class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                            For Rent
                                        </div>
                                        <div
                                            class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                            Villa
                                        </div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">
                                            $12,345
                                        </h5>
                                        <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                        <p>
                                            <i
                                                class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA
                                        </p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small
                                            class="flex-fill text-center border-end py-2"><i
                                                class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                        <small
                                            class="flex-fill text-center border-end py-2"><i
                                                class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                        <small
                                            class="flex-fill text-center py-2"><i
                                                class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div
                                    class="property-item rounded overflow-hidden">
                                    <div
                                        class="position-relative overflow-hidden">
                                        <a href=""><img
                                                class="img-fluid"
                                                src="img/property-3.jpg"
                                                alt="" /></a>
                                        <div
                                            class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                            For Sell
                                        </div>
                                        <div
                                            class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                            Office
                                        </div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">
                                            $12,345
                                        </h5>
                                        <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                        <p>
                                            <i
                                                class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA
                                        </p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small
                                            class="flex-fill text-center border-end py-2"><i
                                                class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                        <small
                                            class="flex-fill text-center border-end py-2"><i
                                                class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                        <small
                                            class="flex-fill text-center py-2"><i
                                                class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div
                                    class="property-item rounded overflow-hidden">
                                    <div
                                        class="position-relative overflow-hidden">
                                        <a href=""><img
                                                class="img-fluid"
                                                src="img/property-4.jpg"
                                                alt="" /></a>
                                        <div
                                            class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                            For Rent
                                        </div>
                                        <div
                                            class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                            Building
                                        </div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">
                                            $12,345
                                        </h5>
                                        <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                        <p>
                                            <i
                                                class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA
                                        </p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small
                                            class="flex-fill text-center border-end py-2"><i
                                                class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                        <small
                                            class="flex-fill text-center border-end py-2"><i
                                                class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                        <small
                                            class="flex-fill text-center py-2"><i
                                                class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div
                                    class="property-item rounded overflow-hidden">
                                    <div
                                        class="position-relative overflow-hidden">
                                        <a href=""><img
                                                class="img-fluid"
                                                src="img/property-5.jpg"
                                                alt="" /></a>
                                        <div
                                            class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                            For Sell
                                        </div>
                                        <div
                                            class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                            Home
                                        </div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">
                                            $12,345
                                        </h5>
                                        <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                        <p>
                                            <i
                                                class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA
                                        </p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small
                                            class="flex-fill text-center border-end py-2"><i
                                                class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                        <small
                                            class="flex-fill text-center border-end py-2"><i
                                                class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                        <small
                                            class="flex-fill text-center py-2"><i
                                                class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div
                                    class="property-item rounded overflow-hidden">
                                    <div
                                        class="position-relative overflow-hidden">
                                        <a href=""><img
                                                class="img-fluid"
                                                src="img/property-6.jpg"
                                                alt="" /></a>
                                        <div
                                            class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                            For Rent
                                        </div>
                                        <div
                                            class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                            Shop
                                        </div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">
                                            $12,345
                                        </h5>
                                        <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                        <p>
                                            <i
                                                class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA
                                        </p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small
                                            class="flex-fill text-center border-end py-2"><i
                                                class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                        <small
                                            class="flex-fill text-center border-end py-2"><i
                                                class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                        <small
                                            class="flex-fill text-center py-2"><i
                                                class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <a class="btn btn-primary py-3 px-5" href="">Browse More Property</a>
                            </div>
                        </div>
                    </div>
                    <div id="tab-3" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-4 col-md-6">
                                <div
                                    class="property-item rounded overflow-hidden">
                                    <div
                                        class="position-relative overflow-hidden">
                                        <a href=""><img
                                                class="img-fluid"
                                                src="img/property-1.jpg"
                                                alt="" /></a>
                                        <div
                                            class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                            For Sell
                                        </div>
                                        <div
                                            class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                            Appartment
                                        </div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">
                                            $12,345
                                        </h5>
                                        <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                        <p>
                                            <i
                                                class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA
                                        </p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small
                                            class="flex-fill text-center border-end py-2"><i
                                                class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                        <small
                                            class="flex-fill text-center border-end py-2"><i
                                                class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                        <small
                                            class="flex-fill text-center py-2"><i
                                                class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div
                                    class="property-item rounded overflow-hidden">
                                    <div
                                        class="position-relative overflow-hidden">
                                        <a href=""><img
                                                class="img-fluid"
                                                src="img/property-2.jpg"
                                                alt="" /></a>
                                        <div
                                            class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                            For Rent
                                        </div>
                                        <div
                                            class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                            Villa
                                        </div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">
                                            $12,345
                                        </h5>
                                        <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                        <p>
                                            <i
                                                class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA
                                        </p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small
                                            class="flex-fill text-center border-end py-2"><i
                                                class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                        <small
                                            class="flex-fill text-center border-end py-2"><i
                                                class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                        <small
                                            class="flex-fill text-center py-2"><i
                                                class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div
                                    class="property-item rounded overflow-hidden">
                                    <div
                                        class="position-relative overflow-hidden">
                                        <a href=""><img
                                                class="img-fluid"
                                                src="img/property-3.jpg"
                                                alt="" /></a>
                                        <div
                                            class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                            For Sell
                                        </div>
                                        <div
                                            class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                            Office
                                        </div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">
                                            $12,345
                                        </h5>
                                        <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                        <p>
                                            <i
                                                class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA
                                        </p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small
                                            class="flex-fill text-center border-end py-2"><i
                                                class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                        <small
                                            class="flex-fill text-center border-end py-2"><i
                                                class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                        <small
                                            class="flex-fill text-center py-2"><i
                                                class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div
                                    class="property-item rounded overflow-hidden">
                                    <div
                                        class="position-relative overflow-hidden">
                                        <a href=""><img
                                                class="img-fluid"
                                                src="img/property-4.jpg"
                                                alt="" /></a>
                                        <div
                                            class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                            For Rent
                                        </div>
                                        <div
                                            class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                            Building
                                        </div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">
                                            $12,345
                                        </h5>
                                        <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                        <p>
                                            <i
                                                class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA
                                        </p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small
                                            class="flex-fill text-center border-end py-2"><i
                                                class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                        <small
                                            class="flex-fill text-center border-end py-2"><i
                                                class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                        <small
                                            class="flex-fill text-center py-2"><i
                                                class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div
                                    class="property-item rounded overflow-hidden">
                                    <div
                                        class="position-relative overflow-hidden">
                                        <a href=""><img
                                                class="img-fluid"
                                                src="img/property-5.jpg"
                                                alt="" /></a>
                                        <div
                                            class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                            For Sell
                                        </div>
                                        <div
                                            class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                            Home
                                        </div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">
                                            $12,345
                                        </h5>
                                        <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                        <p>
                                            <i
                                                class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA
                                        </p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small
                                            class="flex-fill text-center border-end py-2"><i
                                                class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                        <small
                                            class="flex-fill text-center border-end py-2"><i
                                                class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                        <small
                                            class="flex-fill text-center py-2"><i
                                                class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div
                                    class="property-item rounded overflow-hidden">
                                    <div
                                        class="position-relative overflow-hidden">
                                        <a href=""><img
                                                class="img-fluid"
                                                src="img/property-6.jpg"
                                                alt="" /></a>
                                        <div
                                            class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                            For Rent
                                        </div>
                                        <div
                                            class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                            Shop
                                        </div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">
                                            $12,345
                                        </h5>
                                        <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                        <p>
                                            <i
                                                class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA
                                        </p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small
                                            class="flex-fill text-center border-end py-2"><i
                                                class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                        <small
                                            class="flex-fill text-center border-end py-2"><i
                                                class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                        <small
                                            class="flex-fill text-center py-2"><i
                                                class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <a class="btn btn-primary py-3 px-5" href="">Browse More Property</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Property List End -->

        <!-- Call to Action Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="bg-light rounded p-3">
                    <div
                        class="bg-white rounded p-4"
                        style="border: 1px dashed rgba(0, 185, 142, 0.3)">
                        <div class="row g-5 align-items-center">
                            <div
                                class="col-lg-6 wow fadeIn"
                                data-wow-delay="0.1s">
                                <img
                                    class="img-fluid rounded w-100"
                                    src="img/call-to-action.jpg"
                                    alt="" />
                            </div>
                            <div
                                class="col-lg-6 wow fadeIn"
                                data-wow-delay="0.5s">
                                <div class="mb-4">
                                    <h1 class="mb-3">
                                        Contact With Our Certified Agent
                                    </h1>
                                    <p>
                                        Eirmod sed ipsum dolor sit rebum
                                        magna erat. Tempor lorem kasd vero
                                        ipsum sit sit diam justo sed vero
                                        dolor duo.
                                    </p>
                                </div>
                                <a
                                    href=""
                                    class="btn btn-primary py-3 px-4 me-2"><i class="fa fa-phone-alt me-2"></i>Make A Call</a>
                                <a href="" class="btn btn-dark py-3 px-4"><i class="fa fa-calendar-alt me-2"></i>Get Appoinment</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call to Action End -->

        <!-- Team Start -->

        <!-- Team End -->

        <!-- Testimonial Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div
                    class="text-center mx-auto mb-5 wow fadeInUp"
                    data-wow-delay="0.1s"
                    style="max-width: 600px">
                    <h1 class="mb-3">Our Clients Say!</h1>
                    <p>
                        Eirmod sed ipsum dolor sit rebum labore magna erat.
                        Tempor ut dolore lorem kasd vero ipsum sit eirmod
                        sit. Ipsum diam justo sed rebum vero dolor duo.
                    </p>
                </div>
                <div
                    class="owl-carousel testimonial-carousel wow fadeInUp"
                    data-wow-delay="0.1s">
                    <div class="testimonial-item bg-light rounded p-3">
                        <div class="bg-white border rounded p-4">
                            <p>
                                Tempor stet labore dolor clita stet diam
                                amet ipsum dolor duo ipsum rebum stet dolor
                                amet diam stet. Est stet ea lorem amet est
                                kasd kasd erat eos
                            </p>
                            <div class="d-flex align-items-center">
                                <img
                                    class="img-fluid flex-shrink-0 rounded"
                                    src="img/testimonial-1.jpg"
                                    style="width: 45px; height: 45px" />
                                <div class="ps-3">
                                    <h6 class="fw-bold mb-1">
                                        Client Name
                                    </h6>
                                    <small>Profession</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded p-3">
                        <div class="bg-white border rounded p-4">
                            <p>
                                Tempor stet labore dolor clita stet diam
                                amet ipsum dolor duo ipsum rebum stet dolor
                                amet diam stet. Est stet ea lorem amet est
                                kasd kasd erat eos
                            </p>
                            <div class="d-flex align-items-center">
                                <img
                                    class="img-fluid flex-shrink-0 rounded"
                                    src="img/testimonial-2.jpg"
                                    style="width: 45px; height: 45px" />
                                <div class="ps-3">
                                    <h6 class="fw-bold mb-1">
                                        Client Name
                                    </h6>
                                    <small>Profession</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded p-3">
                        <div class="bg-white border rounded p-4">
                            <p>
                                Tempor stet labore dolor clita stet diam
                                amet ipsum dolor duo ipsum rebum stet dolor
                                amet diam stet. Est stet ea lorem amet est
                                kasd kasd erat eos
                            </p>
                            <div class="d-flex align-items-center">
                                <img
                                    class="img-fluid flex-shrink-0 rounded"
                                    src="img/testimonial-3.jpg"
                                    style="width: 45px; height: 45px" />
                                <div class="ps-3">
                                    <h6 class="fw-bold mb-1">
                                        Client Name
                                    </h6>
                                    <small>Profession</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->

        <!-- Footer Start -->
        <div
            class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn"
            data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Get In Touch</h5>
                        <p class="mb-2">
                            <i class="fa fa-map-marker-alt me-3"></i>123
                            Street, New York, USA
                        </p>
                        <p class="mb-2">
                            <i class="fa fa-phone-alt me-3"></i>+012 345
                            67890
                        </p>
                        <p class="mb-2">
                            <i class="fa fa-envelope me-3"></i>info@example.com
                        </p>
                        <div class="d-flex pt-2">
                            <a
                                class="btn btn-outline-light btn-social"
                                href=""><i class="fab fa-twitter"></i></a>
                            <a
                                class="btn btn-outline-light btn-social"
                                href=""><i class="fab fa-facebook-f"></i></a>
                            <a
                                class="btn btn-outline-light btn-social"
                                href=""><i class="fab fa-youtube"></i></a>
                            <a
                                class="btn btn-outline-light btn-social"
                                href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    

                    
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div
                            class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy;
                            <a class="border-bottom" href="#">Dies Craft</a>

                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            
                            
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('front/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('front/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('front/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('front/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('front/js/main.js') }}"></script>

</body>

</html>