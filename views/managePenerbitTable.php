<?php
require_once(__DIR__ . "../../config/db.php");

$dataPenerbit = $connection->query("SELECT id_penerbit, nama, alamat, kota, telepon FROM penerbit");
?>

<div class="card">
  <div class="card-body">
    <button type="button" class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#modalAdd">Tambah
      Data</button>
    <table class="table table-striped table-hover caption-top">
      <thead class="table-light">
        <tr>
          <th scope="col">ID Penerbit</th>
          <th scope="col">Nama</th>
          <th scope="col">Alamat</th>
          <th scope="col">Kota</th>
          <th scope="col">Telepon</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        while ($row = $dataPenerbit->fetch_assoc()) {
        ?>
        <tr>
          <th scope="row"><?php echo $row["id_penerbit"]; ?></th>
          <td><?php echo $row["nama"]; ?></td>
          <td><?php echo $row["alamat"]; ?></td>
          <td><?php echo $row["kota"]; ?></td>
          <td><?php echo $row["telepon"]; ?></td>
          <td>
            <div>
              <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalEdit"><i
                  class="bi bi-pencil-square"></i></button>

              <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalDelete"><i
                  class="bi bi-trash"></i></button>
            </div>
          </td>
        </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
</div>

<!-- Modal Add -->
<div class="modal fade" id="modalAdd" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
  aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <form class="modal-content" method="POST" action="/form/penerbit.php">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Form Add -->
        <div class="form-floating mb-3">
          <input required type="text" class="form-control" id="floatingInputDisabled" placeholder="ID Penerbit" name="id">
          <label for="floatingInputDisabled">ID Penerbit</label>
        </div>
        <!-- Nama -->
        <div class="form-floating mb-3">
          <input required type="text" class="form-control" id="floatingInputDisabled" placeholder="Nama" name="nama">
          <label for="floatingInputDisabled">Nama</label>
        </div>
        <!-- Alamat -->
        <div class="form-floating mb-3">
          <textarea class="form-control" placeholder="Alamat" name="alamat" id="floatingTextarea2Disabled"
            style="height: 100px"></textarea>
          <label for="floatingTextarea2Disabled">Alamat</label>
        </div>
        <!-- Kota -->
        <div class="form-floating mb-3">
          <input required type="text" class="form-control" id="floatingInputDisabled" placeholder="Kota" name="kota">
          <label for="floatingInputDisabled">Kota</label>
        </div>
        <!-- Telepon -->
        <div class="form-floating">
          <input required type="tel" class="form-control" id="floatingInputDisabled" placeholder="Telepon" name="telepon">
          <label for="floatingInputDisabled">Telepon</label>
        </div>
        <!-- Form Add -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline" data-bs-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </form>
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
        <!-- ID Penerbit -->
        <div class="form-floating mb-3">
          <input required type="text" class="form-control" id="floatingInputDisabled" placeholder="ID Penerbit" name="idPenerbit"
            disabled>
          <label for="floatingInputDisabled">ID Penerbit</label>
        </div>
        <!-- Nama -->
        <div class="form-floating mb-3">
          <input required type="text" class="form-control" id="floatingInputDisabled" placeholder="Nama" name="nama">
          <label for="floatingInputDisabled">Nama</label>
        </div>
        <!-- Alamat -->
        <div class="form-floating mb-3">
          <textarea class="form-control" placeholder="Alamat" name="alamat" id="floatingTextarea2Disabled"
            style="height: 100px"></textarea>
          <label for="floatingTextarea2Disabled">Alamat</label>
        </div>
        <!-- Kota -->
        <div class="form-floating mb-3">
          <input required type="text" class="form-control" id="floatingInputDisabled" placeholder="Kota" name="kota">
          <label for="floatingInputDisabled">Kota</label>
        </div>
        <!-- Telepon -->
        <div class="form-floating">
          <input required type="tel" class="form-control" id="floatingInputDisabled" placeholder="Telepon" name="telepon">
          <label for="floatingInputDisabled">Telepon</label>
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