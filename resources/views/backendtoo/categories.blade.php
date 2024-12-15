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
            <p class="card-title mb-0">Kategori</p>
            <!-- Trigger the modal with a button -->
            <div class="d-flex justify-content-end">
              <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#addNewModel">
                Add New
              </button>
            </div>
            <!-- Modal Add New Kategori -->
            <div class="modal fade" id="addNewModel">
              <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Add New Category</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                    <form class="forms-sample" action="{{ route('categories.create') }}" method="POST">
                      @csrf <!-- Tambahkan CSRF token untuk keamanan -->
                      <div class="form-group">
                        <label for="nama_kategori">Nama Kategori</label>
                        <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" placeholder="Nama Kategori" required>
                      </div>
                      <label class="col-form-label">Status</label>
                      <div class="col-sm-5">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="status" id="status_active" value="active" checked>
                            Active
                          </label>
                        </div>
                      </div>
                      <div class="col-sm-5">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="status" id="status_inactive" value="inactive">
                            Inactive
                          </label>
                        </div>
                      </div>
                      <div class="d-flex justify-content-end mt-3">
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- Modal Edit Kategori-->
            <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form id="editCategoryForm" method="POST" action="">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                      <div class="form-group">
                        <label for="editNamaKategori">Nama Kategori</label>
                        <input type="text" class="form-control" id="editNamaKategori" name="nama_kategori" required>
                      </div>
                      <label class="col-form-label">Status</label>
                      <div class="row">
                        <div class="col-sm-5">
                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="status" id="editStatusActive" value="active">
                              Active
                            </label>
                          </div>
                        </div>
                        <div class="col-sm-5">
                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="status" id="editStatusInactive" value="inactive">
                              Inactive
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>

            <div class="table-responsive">
              <table class="table table-striped table-borderless text-center">
                <thead>
                  <tr>
                    <th class="col-md-2">No.</th>
                    <th class="col-md-3">Nama Kategori</th>
                    <th class="col-md-3">Status</th>
                    <th class="col-md-1">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @php
                  $index = 0; // Inisialisasi variabel index
                  @endphp

                  @foreach ($categories as $category) <!-- Iterasi data dari database -->
                  <tr>
                    <td>{{ $index + 1 }}</td> <!-- Tampilkan ID Kategori -->
                    <td>{{ $category->nama_kategori }}</td> <!-- Tampilkan Nama Kategori -->
                    <td>
                      <!-- Status dengan badge styling -->
                      <div class="badge {{ $category->status == 'active' ? 'badge-success' : 'badge-danger' }}">
                        {{ ucfirst($category->status) }}
                      </div>
                    </td>

                    <!-- Edit Button with SVG Icon -->
                    <td>
                      <div class="action-buttons d-flex align-items-center">
                        <!-- Edit Button with SVG Icon -->
                        <button type="button" class="text-primary d-flex align-items-center btn btn-link editButton" data-toggle="modal" data-target="#editModal"
                          data-id_kategori="{{ $category->id_kategori }}"
                          data-nama_kategori="{{ $category->nama_kategori }}"
                          data-status="{{ $category->status }}"
                          data-action="{{ route('categories.update', $category->id_kategori) }}" style="font-size: 0.875rem;">
                          <svg class="mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="16" height="16" aria-hidden="true">
                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                          </svg>
                          Edit
                        </button>


                        <!-- Delete Button -->
                        <form action="{{ route('categories.destroy', $category->id_kategori) }}" method="POST" style="display:inline;" class="deleteForm">
                          @csrf
                          @method('DELETE')
                          <button type="button" onclick="hapus(this)" class="text-danger d-flex align-items-center" style="font-size: 0.875rem; border: none; background: none; padding: 0;">
                            <svg class="mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="16" height="16" aria-hidden="true">
                              <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                            </svg>
                            Delete
                          </button>
                        </form>
                      </div>
                      <!-- SweetAlert2 Script -->
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
                        $(document).off('click.myNamespace').on('click.myNamespace', '.editButton', function() {
                          var idKategori = $(this).data('id_kategori');
                          var namaKategori = $(this).data('nama_kategori');
                          var status = $(this).data('status');
                          var actionUrl = $(this).data('action');

                          // Isi form modal dengan data yang diambil dari tombol
                          $('#editNamaKategori').val(namaKategori);
                          $('#editCategoryForm').attr('action', actionUrl);

                          // Set radio button sesuai status
                          if (status === 'active') {
                            $('#editStatusActive').prop('checked', true);
                          } else {
                            $('#editStatusInactive').prop('checked', true);
                          }
                        });
                      </script>
                    </td>
                  </tr>
                  @php
        $index++; // Tingkatkan index
    @endphp
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