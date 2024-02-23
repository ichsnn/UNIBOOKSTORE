<div class="card">
  <div class="card-body">
    <button type="button" class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#modalAdd">Tambah
      Data</button>
    <table class="table table-striped table-hover caption-top">
      <thead class="table-light">
        <tr>
          <th scope="col">ID Buku</th>
          <th scope="col">Kategori</th>
          <th scope="col">Nama Buku</th>
          <th scope="col">Harga</th>
          <th scope="col">Stok</th>
          <th scope="col">Penerbit</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>Otto</td>
          <td>@mdo</td>
          <td>@mdo</td>
          <td>
            <div>
              <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalEdit"><i
                  class="bi bi-pencil-square"></i></button>

              <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalDelete"><i
                  class="bi bi-trash"></i></button>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<!-- Modal Add -->
<div class="modal fade" id="modalAdd" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
  aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Form Add -->
        <!-- Kategori -->
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="floatingInputDisabled" placeholder="Kategori" name="kategori">
          <label for="floatingInputDisabled">Kategori</label>
        </div>
        <!-- Nama Buku -->
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="floatingInputDisabled" placeholder="Nama Buku" name="namaBuku">
          <label for="floatingInputDisabled">Nama Buku</label>
        </div>
        <!-- Harga -->
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="floatingInputDisabled" placeholder="Harga" name="harga">
          <label for="floatingInputDisabled">Harga</label>
        </div>
        <!-- Stok -->
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="floatingInputDisabled" placeholder="Stok" name="stok">
          <label for="floatingInputDisabled">Stok</label>
        </div>
        <!-- Penerbit -->
        <div class="form-floating">
          <select class="form-select" id="floatingSelectDisabled" aria-label="Floating label disabled select example"
            name="penerbit">
            <option selected>Pilih Penerbit</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
          <label for="floatingSelectDisabled">Penerbit</label>
        </div>
        <!-- Form Edit -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline" data-bs-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Edit -->
<div class="modal fade" id="modalEdit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
  aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Ubah Data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Form Edit -->
        <!-- ID Buku -->
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="floatingInputDisabled" placeholder="ID Buku" name="idBuku"
            disabled>
          <label for="floatingInputDisabled">ID Buku</label>
        </div>
        <!-- Kategori -->
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="floatingInputDisabled" placeholder="Kategori" name="kategori">
          <label for="floatingInputDisabled">Kategori</label>
        </div>
        <!-- Nama Buku -->
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="floatingInputDisabled" placeholder="Nama Buku" name="namaBuku">
          <label for="floatingInputDisabled">Nama Buku</label>
        </div>
        <!-- Harga -->
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="floatingInputDisabled" placeholder="Harga" name="harga">
          <label for="floatingInputDisabled">Harga</label>
        </div>
        <!-- Stok -->
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="floatingInputDisabled" placeholder="Stok" name="stok">
          <label for="floatingInputDisabled">Stok</label>
        </div>
        <!-- Penerbit -->
        <div class="form-floating">
          <select class="form-select" id="floatingSelectDisabled" aria-label="Floating label disabled select example"
            name="penerbit">
            <option selected>Pilih Penerbit</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
          <label for="floatingSelectDisabled">Penerbit</label>
        </div>
        <!-- Form Edit -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline" data-bs-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-warning">Simpan</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Delete -->
<div class="modal fade" id="modalDelete" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
  aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Hapus Data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Apakah Anda yakin ingin menghapus data ini?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline" data-bs-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-danger">Hapus</button>
      </div>
    </div>
  </div>
</div>