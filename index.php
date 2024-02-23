<?php require_once(__DIR__ . "./views/templates/header.php") ?>

<h1 class="mb-5">Home</h1>

<div class="card">
  <div class="card-body">
    <form class="row g-2 w-full mb-4">
      <div class="col">
        <input type="text" class="form-control w-100" placeholder="Cari Buku" aria-label="Username"
          aria-describedby="search">
      </div>
      <div class="col-auto">
        <button class="btn btn-primary" type="submit">
          <i class="bi bi-search"></i>
        </button>
      </div>
    </form>

    <table class="table table-striped table-hover caption-top">
      <thead class="table-light">
        <tr>
          <th scope="col">Kode Buku</th>
          <th scope="col">Kategori</th>
          <th scope="col">Nama Buku</th>
          <th scope="col">Stok</th>
          <th scope="col">Harga</th>
          <th scope="col">Penerbit</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>Otto</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Jacob</td>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Jacob</td>
          <td>Jacob</td>
          <td>Jacob</td>
          <td>Jacob</td>
          <td>@twitter</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<?php require_once(__DIR__ . "./views/templates/footer.php") ?>