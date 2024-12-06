<x-frontheader/>
<body>
        <div class="container-xxl bg-white p-0">
            <!-- Spinner Start -->
            <div
                id="spinner"
                class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
            >
                <div
                    class="spinner-border text-primary"
                    style="width: 3rem; height: 3rem"
                    role="status"
                >
                    <span class="sr-only">Loading...</span>
                </div>
            </div>

            <!-- Navbar Start -->
            <div class="container-fluid nav-bar bg-transparent">
                <nav
                    class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4"
                >
                    <a
                        href="index.html"
                        class="navbar-brand d-flex align-items-center text-center"
                    >
                        <div class="icon p-2 me-2">
                            <img
                                class="img-fluid"
                                src="{{ asset('front/img/icon_diescraft.png') }}"
                                alt="Icon"
                                style="width: 30px; height: 30px"
                            />
                        </div>
                        <h1 class="m-0 text-primary">DiesCraft</h1>
                    </a>
                    <button
                        type="button"
                        class="navbar-toggler"
                        data-bs-toggle="collapse"
                        data-bs-target="#navbarCollapse"
                    >
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav ms-auto">
                            <a
                                href="index.html"
                                class="nav-item nav-link active"
                                >Home</a
                            >
                            <div class="nav-item dropdown">
                                <a
                                    href="#"
                                    class="nav-link dropdown-toggle"
                                    data-bs-toggle="dropdown"
                                    >Kategori</a
                                >
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
                                    data-bs-toggle="dropdown"
                                    >Pages</a
                                >
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a
                                        href="testimonial.html"
                                        class="dropdown-item"
                                        >Testimonial</a
                                    >
                                    <a href="404.html" class="dropdown-item"
                                        >404 Error</a
                                    >
                                </div>
                            </div>
                            <a href="contact.html" class="nav-item nav-link"
                                >Contact</a
                            >
                        </div>
                        <a href="" class="btn btn-primary px-3 d-none d-lg-flex"
                            >Add Property</a
                        >
                    </div>
                </nav>
            </div>
            <!-- Navbar End -->
            
            

                   <!-- Property List Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-0 gx-5 align-items-end">
                    <div class="col-lg-6">
                        <div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                            <h1 class="mb-3">Strap Masker DiesCraft</h1>
                        </div>
                    <!-- Header Start -->
                    <div class="container-fluid header bg-white p-0">
                        <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
                            <div class="col-md-6 p-5 mt-lg-5">
                                <h1 class="display-5 animated fadeIn mb-4">
                                    {{ $category->nama_kategori }}  <!-- Menampilkan nama kategori -->
                                </h1>
                                @if(isset($category))
                                    <nav aria-label="breadcrumb animated fadeIn">
                                        <ol class="breadcrumb text-uppercase">
                                            <li class="breadcrumb-item">
                                                <a href="#">Kategori</a>  <!-- Home statis -->
                                            </li>
                                            <li class="breadcrumb-item text-body active" aria-current="page">
                                                {{ $category->nama_kategori }}  <!-- Menampilkan nama kategori dari database -->
                                            </li>
                                        </ol>
                                    </nav>
                                @else
                                    <p>Kategori tidak ditemukan.</p>
                                @endif

                            </div>
                            <div class="col-md-6 animated fadeIn">
                                <img class="img-fluid" src="img/1.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                    <!-- Header End -->

                    <!-- Header End -->
                    </div>
                    <div class="col-lg-6 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
                        <ul class="nav nav-pills d-inline-flex justify-content-end mb-5">
                            <li class="nav-item me-2">
                            </li>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" src="/front/img/7.jpg" alt=""></a>
                                        <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Tersisa 5</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">Rp. 10.000</h5>
                                        <a class="d-block h5 mb-2" href="">Bracelet Bright</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" src="/front/img/gelang2.jpg" alt=""></a>
                                        <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Habis</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">Rp. 12.000</h5>
                                        <a class="d-block h5 mb-2" href="">Bracelet Star</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" src="/front/img/gelang3.jpg" alt=""></a>
                                        <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Tersisa 2</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">Rp. 10.000</h5>
                                        <a class="d-block h5 mb-2" href="">Bracelet Mermaid</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" src="/front/img/gelang5.jpg" alt=""></a>
                                        <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Tersisa 7</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">Rp. 15.000</h5>
                                        <a class="d-block h5 mb-2" href="">Bracelet Coral</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" src="/front/img/gelang6.jpg" alt=""></a>
                                        <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Habis</div>                                   </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">Rp. 10.000</h5>
                                        <a class="d-block h5 mb-2" href="">Bracelet LovFly</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" src="/front/img/gelang1.jpg" alt=""></a>
                                        <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Habis</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">Rp. 15.000</h5>
                                        <a class="d-block h5 mb-2" href="">Bracelet Butterfly</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                                <a class="btn btn-primary py-3 px-5" href="">More Product</a>
                            </div>
                        </div>
                    </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Property List End -->


<x-frontfooter/>