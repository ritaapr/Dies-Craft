<x-adminheader />
<!-- partial -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<div class="main-panel">
  <div class="content-wrapper">
  @if (session('success'))
        <script>
            Swal.fire({
                title: "Good job!",
                text: "{{ session('success') }}",
                icon: "success"
            });
        </script>
    @endif
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

            <!-- Modal Edit -->
            <!-- Modal Edit -->
            <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Produk</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form id="editForm" method="POST" action="" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')
                      <div class="form-group">
                        <label for="edit_nama_produk">Nama Produk</label>
                        <input type="text" class="form-control" id="edit_nama_produk" name="nama_produk" required>
                      </div>
                      <div class="form-group">
                        <label for="edit_deskripsi_produk">Deskripsi Produk</label>
                        <textarea class="form-control" id="edit_deskripsi_produk" name="deskripsi_produk" rows="3" required></textarea>
                      </div>
                      <div class="form-group">
                        <label for="edit_harga_produk">Harga Produk</label>
                        <input type="number" class="form-control" id="edit_harga_produk" name="harga_produk" required>
                      </div>
                      <div class="form-group">
                        <label for="edit_foto_produk">Foto Produk</label>
                        <input type="file" class="form-control" id="edit_foto_produk" name="foto_produk">
                        <small>Biarkan kosong jika tidak ingin mengubah foto.</small>
                      </div>
                      <div class="form-group">
                        <label>Gambar Saat Ini:</label>
                        <div>
                          <img id="currentImage" src="" alt="Current Product Image" style="max-width: 100%; height: auto;">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="edit_id_kategori">Kategori</label>
                        <select class="form-control" id="edit_id_kategori" name="id_kategori" required>
                          @foreach ($categories as $category)
                          <option value="{{ $category->id_kategori }}">{{ $category->nama_kategori }}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="edit_status_produk">Status</label>
                        <select class="form-control" id="edit_status_produk" name="status_produk" required>
                          <option value="ada">Ada</option>
                          <option value="tidak ada">Tidak Ada</option>
                        </select>
                      </div>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" form="editForm" class="btn btn-primary">Simpan</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <table class="table table-striped table-borderless text-center">
                <thead>
                  <tr>
                    <th class="col-md-1">No.</th>
                    <th class="col-md-1">Nama Produk</th>
                    <th class="col-md-2">Deskripsi Produk</th>
                    <th class="col-md-1">Harga Produk</th>
                    <th class="col-md-3">Foto Produk</th>
                    <th class="col-md-1">Kategori</th>
                    <th class="col-md-3">Status</th>
                    <th class="col-md-2">Action</th>
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
                      <img src="{{ asset('storage/' . $product->foto_produk) }}" alt="Foto Produk" style="width: 100%; max-width: 250px; height: auto; object-fit: contain; border-radius: 0;">
                    </td>
                    <td>{{ $product->category->nama_kategori ?? 'Tidak Ada' }}</td>
                    <td>
                      <div class="badge {{ $product->status_produk == 'ada' ? 'badge-success' : 'badge-danger' }}">
                        {{ ucfirst($product->status_produk) }}
                      </div>
                    </td>
                    <td>
                      <button type="button" class="text-primary d-flex align-items-center btn btn-link editButton"
                        data-id_produk=" {{ $product->id_produk }}"
                        data-nama_produk="{{ $product->nama_produk }}"
                        data-deskripsi_produk="{{ $product->deskripsi_produk }}"
                        data-harga_produk="{{ $product->harga_produk }}"
                        data-foto_produk="{{ $product->foto_produk }}"
                        data-id_kategori="{{ $product->id_kategori }}"
                        data-status_produk="{{ $product->status_produk }}"
                        data-action="{{ route('products.update', $product->id_produk) }}"
                        data-toggle="modal" data-target="#editModal" style="font-size: 0.875rem;">
                        <svg class="mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="16" height="16" aria-hidden="true">
                          <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                        </svg>
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
                    </td>
                  </tr>
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

            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script>
              $(document).ready(function() {
                // Mengatur header CSRF untuk semua permintaan AJAX
                $.ajaxSetup({
                  headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
                });

                // Menangani klik pada tombol edit
                $('.editButton').on('click', function() {
                  var id_produk = $(this).data('id_produk');
                  var nama_produk = $(this).data('nama_produk');
                  var deskripsi_produk = $(this).data('deskripsi_produk');
                  var harga_produk = $(this).data('harga_produk');
                  var id_kategori = $(this).data('id_kategori');
                  var status_produk = $(this).data('status_produk');
                  var action = $(this).data('action');
                  var foto_produk = $(this).data('foto_produk');

                  // Set gambar saat ini
                  if (foto_produk) {
                    $('#currentImage').attr('src', '/storage/' + foto_produk); // Sesuaikan path sesuai dengan penyimpanan Anda
                  } else {
                    $('#currentImage').attr('src', ''); // Kosongkan jika tidak ada foto
                  }

                  $('#editForm').attr('action', action);
                  $('#edit_nama_produk').val(nama_produk);
                  $('#edit_deskripsi_produk').val(deskripsi_produk);
                  $('#edit_harga_produk').val(harga_produk);
                  $('#edit_id_kategori').val(id_kategori);
                  $('#edit_status_produk').val(status_produk);
                  $('#edit_foto_produk').val('');
                });

                // Menangani pengiriman form
                $('#editForm').on('submit', function(e) {
                  e.preventDefault(); // Mencegah pengiriman form default

                  $.ajax({
                    type: 'POST', // Gunakan POST karena Anda mengirim data
                    url: $(this).attr('action'), // Ambil URL dari action form
                    data: new FormData(this), // Menggunakan FormData untuk mengirim file
                    contentType: false, // Jangan set contentType
                    processData: false, // Jangan proses data
                    success: function(response) {
                      // Tindakan setelah berhasil, misalnya menutup modal dan memperbarui tampilan
                      $('#editModal').modal('hide');
                      location.reload(); // Reload halaman untuk melihat perubahan
                    },
                    error: function(xhr) {
                      console.log(xhr.responseText); // Tampilkan kesalahan di konsol
                    }
                  });
                });
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
</div>
<!-- content-wrapper ends -->
<!-- partial:partials/_footer.html') }} -->

<x-adminfooter />