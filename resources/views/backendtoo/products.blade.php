<x-adminheader/>
<!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title mb-0">Produk</p>
                  <!-- Trigger the modal with a button -->
                  <div class="d-flex justify-content-end">
                  <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#addNewModel">
                    Add New
                  </button>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="addNewModel" role="dialog">
                    <div class="modal-dialog">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Add New Category</h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          
                        </div>

                        <div class="modal-body">
                        <form class="forms-sample" action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                          @csrf <!-- Tambahkan CSRF token untuk keamanan -->

                          <!-- Dropdown untuk memilih Kategori -->
                          <div class="form-group">
                            <label for="id_kategori">Kategori</label>
                            <select name="id_kategori" id="id_kategori" class="form-control" required>
                              <option value="">-- Pilih Kategori --</option>
                              @foreach ($categories as $category)
                                <option value="{{ $category->id_kategori }}">{{ $category->nama_kategori }}</option>
                              @endforeach
                            </select>
                          </div>

                          <!-- Input Nama Produk -->
                          <div class="form-group">
                            <label for="nama_produk">Nama Produk</label>
                            <input type="text" class="form-control" id="nama_produk" name="nama_produk" placeholder="Nama Produk" required>
                          </div>

                          <!-- Input Deskripsi Produk -->
                          <div class="form-group">
                            <label for="deskripsi_produk">Deskripsi Produk</label>
                            <textarea class="form-control" id="deskripsi_produk" name="deskripsi_produk" rows="3" placeholder="Deskripsi Produk" required></textarea>
                          </div>

                          <!-- Input Harga Produk -->
                          <div class="form-group">
                            <label for="harga_produk">Harga Produk</label>
                            <input type="number" class="form-control" id="harga_produk" name="harga_produk" placeholder="Harga Produk" required>
                          </div>

                          <!-- Input Foto Produk -->
                          <div class="form-group">
                            <label for="foto_produk">Foto Produk</label>
                            <input type="file" class="form-control" id="foto_produk" name="foto_produk" accept="image/*" required>
                          </div>

                          <!-- Pilihan Status Produk -->
                          <label>Status Produk</label>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="status_produk" id="status_active" value="ada" checked>
                              Ada
                            </label>
                          </div>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="status_produk" id="status_inactive" value="tidak ada">
                              Tidak ada
                            </label>
                          </div>

                          <!-- Tombol Submit dan Cancel -->
                          <div class="d-flex justify-content-end mt-3">
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                          </div>
                        </form>
                      </div>
                        
                      </div>
                      
                    </div>
                  </div>

                  <!-- Modal -->
                  <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <form id="editForm" method="POST" enctype="multipart/form-data">
                          @csrf
                          @method('PUT')
                          <div class="modal-header">
                            <h5 class="modal-title" id="editModalLabel">Edit Produk</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <input type="hidden" name="id_produk" id="edit-id-produk">
                            <div class="form-group">
                              <label for="edit-nama-produk">Nama Produk</label>
                              <input type="text" class="form-control" id="edit-nama-produk" name="nama_produk" required>
                            </div>
                            <div class="form-group">
                              <label for="edit-deskripsi-produk">Deskripsi Produk</label>
                              <textarea class="form-control" id="edit-deskripsi-produk" name="deskripsi_produk" required></textarea>
                            </div>
                            <div class="form-group">
                              <label for="edit-harga-produk">Harga Produk</label>
                              <input type="number" class="form-control" id="edit-harga-produk" name="harga_produk" required>
                            </div>
                            <div class="form-group">
                              <label for="edit-foto-produk">Foto Produk</label>
                              <img id="preview-foto-produk" src="#" alt="Pratinjau Gambar" class="img-thumbnail mb-2" style="display:none; max-width: 100%; height: auto;">
                              <input type="file" class="form-control" id="edit-foto-produk" name="foto_produk">
                            </div>
                            <div class="form-group">
                              <label for="edit-id-kategori">Kategori</label>
                              <select class="form-control" id="edit-id-kategori" name="id_kategori" required>
                                @foreach ($categories as $category)
                                  <option value="{{ $category->id_kategori }}">{{ $category->nama_kategori }}</option>
                                @endforeach
                              </select>
                            </div>
                            <div class="form-group">
                              <label for="edit-status-produk">Status</label>
                              <select class="form-control" id="edit-status-produk" name="status_produk" required>
                                <option value="ada">Ada</option>
                                <option value="tidak ada">Tidak Ada</option>
                              </select>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>



                  <div class="table-responsive">
                  <table class="table table-striped table-borderless text-center">
                    <thead>
                      <tr>
                        <th class="col-md-1">No.</th>
                        <th class="col-md-3">Nama Produk</th>
                        <th class="col-md-4">Deskripsi Produk</th>
                        <th class="col-md-1">Harga Produk</th>
                        <th class="col-md-1">Foto Produk</th>
                        <th class="col-md-1">Kategori</th>
                        <th class="col-md-1">Status</th>
                        <th class="col-md-1">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($products as $product)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $product->nama_produk }}</td>
                      <td>{{ $product->deskripsi_produk }}</td>
                      <td>Rp {{ number_format($product->harga_produk, 0, ',', '.') }}</td>
                      <td>
                        <img src="{{ asset('storage/products/' . $product->foto_produk) }}" alt="Foto Produk" width="100">
                      </td>
                      <td>{{ $product->category->nama_kategori ?? 'Tidak Ada' }}</td>
                      <td>
                        <div class="badge {{ $product->status_produk == 'ada' ? 'badge-success' : 'badge-danger' }}">
                          {{ ucfirst($product->status_produk) }}
                        </div>
                      </td>
                      <td>
                        <button type="button" class="btn btn-primary editButton" 
                                data-id_produk="{{ $product->id_produk }}"     
                                data-nama_produk="{{ $product->nama_produk }}" 
                                data-deskripsi_produk="{{ $product->deskripsi_produk }}"
                                data-harga_produk="{{ $product->harga_produk }}"
                                data-foto_produk="{{ $product->foto_produk }}"
                                data-id_kategori="{{ $product->id_kategori }}"
                                data-status_produk="{{ $product->status_produk }}"
                                data-action="{{ route('products.update', $product->id_produk) }}"
                                data-toggle="modal" data-target="#editModal">
                          Edit
                        </button>
    

                                <!-- Delete Button -->
                                <form action="{{ route('products.destroy', $product->id_produk) }}" method="POST" style="display:inline;" class="deleteForm">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" onclick="hapus(this)" class="text-danger d-flex align-items-center" 
                                        style="font-size: 0.875rem; border: none; background: none; padding: 0;">
                                        <svg class="mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="16" height="16" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                        </svg>
                                        Delete
                                    </button>
                                </form>
                            </div>
                            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                            <script>
                              function hapus(button) {
                                // Ambil elemen form terdekat dari tombol yang diklik
                                const form = button.closest('.deleteForm');
                                
                                // Gunakan SweetAlert untuk konfirmasi
                                Swal.fire({
                                    title: "Are you sure?",
                                    text: "You won't be able to revert this!",
                                    icon: "warning",
                                    showCancelButton: true,
                                    confirmButtonColor: "#3085d6",
                                    cancelButtonColor: "#d33",
                                    confirmButtonText: "Yes, delete it!"
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        // Submit form jika pengguna mengkonfirmasi
                                        form.submit();
                                    }
                                });
                            }
                            </script>
                            
                            <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
                            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
                            <script>
                              $(document).on('click', '.editButton', function () {
    // Ambil data dari atribut data-*
    let id_produk = $(this).data('id_produk');
    let nama_produk = $(this).data('nama_produk');
    let deskripsi_produk = $(this).data('deskripsi_produk');
    let harga_produk = $(this).data('harga_produk');
    let foto_produk = $(this).data('foto_produk');
    let id_kategori = $(this).data('id_kategori');
    let status_produk = $(this).data('status_produk');
    let action = $(this).data('action');
    
    // Set nilai pada modal
    $('#edit-id-produk').val(id_produk);
    $('#edit-nama-produk').val(nama_produk);
    $('#edit-deskripsi-produk').val(deskripsi_produk);
    $('#edit-harga-produk').val(harga_produk);
    $('#edit-id-kategori').val(id_kategori);
    $('#edit-status-produk').val(status_produk);
    $('#editForm').attr('action', action);

    // Tampilkan pratinjau gambar
    if (foto_produk) {
        $('#preview-foto-produk').attr('src', `/storage/products/${foto_produk}`).show();
    } else {
        $('#preview-foto-produk').hide();
    }
});

                            </script>




                        </td>

                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>


                </div>
              </div>
            </div>
            
          </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html') }} -->

<x-adminfooter/>

         