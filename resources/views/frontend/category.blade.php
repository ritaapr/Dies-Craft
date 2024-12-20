<x-frontheader :categories="$categories" />


<div class="container-xxl bg-white p-0">
    <div class="container-fluid header bg-white p-0">
        <!-- Property List Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-0 gx-5 align-items-end">
                    <div class="col-lg-6">
                        <div class="display-5 animated fadeIn " data-wow-delay="0.1s">
                            <h1 class="mb-3">{{ $category->nama_kategori }}</h1>
                        </div>

                        <!-- Header Start -->
                        <div class="container-fluid header bg-white p-0">
                            <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
                                <div class="col-md-8 p-5 mt-lg-5">
                                    <h1 class="text-start mx-auto mt-5 mr-2 wow slideInLeft">
                                        {{ $category->nama_kategori }} <!-- Menampilkan nama kategori -->
                                    </h1>
                                    @if(isset($category))
                                    <nav aria-label="breadcrumb animated fadeIn">
                                        <ol class="breadcrumb text-uppercase">
                                            <li class="breadcrumb-item">
                                                <a href="#">Kategori</a> <!-- Home statis -->
                                            </li>
                                            <li class="breadcrumb-item text-body active" aria-current="page">
                                                {{ $category->nama_kategori }} <!-- Menampilkan nama kategori dari database -->
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

                    </div>
                </div>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            @foreach ($products as $product)
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid " src="{{ asset('storage/' . $product->foto_produk) }}" alt=""></a>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">Rp. {{ number_format($product->harga_produk, 0, ',', '.') }}</h5>
                                        <a href="#"
                                            class="d-block h5 mb-2"
                                            data-bs-toggle="modal"
                                            data-bs-target="#productModal"
                                            data-name="{{ $product->nama_produk }}"
                                            data-description="{{ $product->deskripsi_produk }}">{{ $product->nama_produk }}</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="productModalLabel"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p id="productDescription"></p>
                </div>
                
            </div>
        </div>
    </div>

    <!-- SweetAlert2 Script -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        const productModal = document.getElementById('productModal');
        productModal.addEventListener('show.bs.modal', function(event) {
            const button = event.relatedTarget; // Elemen yang diklik untuk membuka modal
            const name = button.getAttribute('data-name'); // Ambil nama produk
            const description = button.getAttribute('data-description'); // Ambil deskripsi produk

            // Isi data ke dalam modal
            const modalTitle = productModal.querySelector('.modal-title');
            const modalBody = productModal.querySelector('.modal-body p');

            modalTitle.textContent = name;
            modalBody.textContent = description;
        });
    </script>


    <!-- Property List End -->

    <x-frontfooter />
    </body>