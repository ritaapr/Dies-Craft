<x-adminheader/>
<!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
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
                          <img src="{{ asset('storage/' . $product->foto_produk) }}" alt="Foto Produk" width="50">
                        </td>
                        <td>{{ $product->kategori->nama_kategori ?? 'Tidak Ada' }}</td>
                        <td>
                          <div class="badge {{ $product->status_produk == 'active' ? 'badge-success' : 'badge-danger' }}">
                            {{ ucfirst($product->status_produk) }}
                          </div>
                        </td>
                        <td>
                          <!-- Tombol Edit dan Delete -->
                          <a href="{{ route('products.edit', $product->id_produk) }}" class="btn btn-primary btn-sm">Edit</a>
                          <form action="{{ route('products.destroy', $product->id_produk) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                          </form>
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

         