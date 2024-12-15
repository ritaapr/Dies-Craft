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
                        <a href="#lokasi" class="nav-item nav-link">Lokasi</a>
                        <a href="#contact" class="nav-item nav-link">Contact</a>

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
                        href="#kategori"
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
        <div id=kategori
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

                        </div>
                    </div>
                    <div class="col-md-2">
                        <a href="#about" class="btn btn-dark border-0 w-100 py-3">
                            Let's get to now
                        </a>
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

           


            </div>
        </div>
        <!-- Category End -->

        <!-- About Start -->
        <div class="container-xxl py-5" id="about">
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

                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Property List Start -->
        <div class="container-xxl py-5" id="lokasi">
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
                                        <a class="d-block h5 mb-2" href="https://maps.app.goo.gl/LpHAaVKnhkvbAGdX8"
                                            target="_blank">Sunday Market Caruban</a>
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
                                        <a class="d-block h5 mb-2" href="https://maps.app.goo.gl/7TAdvTge7uqdDW5D9" target="_blank">Sunday Market Jombang</a>
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

                                        <a class="d-block h5 mb-2" href="https://maps.app.goo.gl/QLKiSvgVqYs9KoGh7" target="_blank">Dies.craft beads store</a>
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

                                        <a class="d-block h5 mb-2" href="https://maps.app.goo.gl/Ueq1ruNmKoQxtDFV6" target="_blank">Sunday Market Nganjuk</a>
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
                                        <a class="d-block h5 mb-2" href="https://maps.app.goo.gl/R7D8Tc3tKN5ZqZbG9" target="_blank">Sunday Market Kediri</a>
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
                                        <a class="d-block h5 mb-2" href="https://maps.app.goo.gl/aERYXLsCMKPfTqEq9" target="_blank">Stand Mojokerto</a>
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

        <!-- Contact Start -->
        <div class="container-xxl py-5" id="contact">
            <div class="container">
                <div
                    class="text-center mx-auto mb-5 wow fadeInUp"
                    data-wow-delay="0.1s"
                    style="max-width: 600px">
                    <h1 class="mb-3">Contact Us</h1>

                </div>
                <div class="row g-4">
                    <div class="col-12">
                        <div class="row gy-4">
                            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                                <div class="bg-light rounded p-3">
                                    <div
                                        class="d-flex align-items-center bg-white rounded p-3"
                                        style="border: 1px dashed rgba(0, 185, 142, 0.3);">
                                        <div class="icon me-3" style="width: 45px; height: 45px;">
                                            <i class="fa fa-map-marker-alt text-primary"></i>
                                        </div>
                                        <span>
                                            Jl. Mojopahit No.52, Winongo, Kec. Manguharjo, Kota Madiun,
                                            Jawa Timur 63162
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                                <div class="bg-light rounded p-3">
                                    <a
                                        href="https://www.instagram.com/dies.craft"
                                        target="_blank"
                                        class="d-flex align-items-center bg-white rounded p-3"
                                        style="text-decoration: none; border: 1px dashed rgba(0, 185, 142, 0.3);">
                                        <div class="icon me-3" style="width: 45px; height: 45px;">
                                            <i class="fa fa-envelope-open text-primary"></i>
                                        </div>
                                        <span>dies.craft</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                                <div class="bg-light rounded p-3">
                                    <a
                                        href="https://api.whatsapp.com/send/?phone=62881023911740&text&type=phone_number&app_absent=0"
                                        class="d-flex align-items-center bg-white rounded p-3"
                                        style="text-decoration: none; border: 1px dashed rgba(0, 185, 142, 0.3);">
                                        <div class="icon me-3" style="width: 45px; height: 45px;">
                                            <i class="fa fa-phone-alt text-primary"></i>
                                        </div>
                                        <span>083141744873</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div
                        
                        data-wow-delay="0.1s">
                        <iframe
                            class="position-relative rounded w-100 h-100"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d49979.14984680299!2d111.48303381278191!3d-7.6145795482683285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e79bf7fc573b745%3A0xf4b3efaf37011e86!2sDies.craft%20beads%20store!5e1!3m2!1sid!2sid!4v1734227005451!5m2!1sid!2sid"
                            frameborder="0"
                            style="min-height: 400px; border: 0"
                            allowfullscreen=""
                            aria-hidden="false"
                            tabindex="0"></iframe>
                    </div>
                   
                </div>
            </div>
        </div>
        <!-- Contact End -->


        <!-- Team Start -->

        <!-- Team End -->



        <!-- Footer Start -->
        <div
            class="container-fluid bg-primary text-white-50 footer pt-5 mt-5 wow fadeIn"
            data-wow-delay="0.1s">

            <div class="container">
                <div class="copyright">
                    <div class="row">
                        
                        <div
                            class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy;
                            <a  href="#">Dies Craft</a>

                        
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