<?php
$pageUri;
if (isset($_SERVER['REQUEST_URI'])) {
  $pageUri = $_SERVER['REQUEST_URI'];
}
?>

<div class="sidebar">
  <h4 class="mb-4">UNIBOOKSTORE</h4>
  <a class="menu-item <?php if ($pageUri == "/")
    echo 'active' ?>" href="/">
      <i class="bi bi-house-door"></i>
      Home
    </a>
    <div class="menu-section">
      <p class="menu-section-title">Admin</p>
      <a class="menu-item <?php if ($pageUri == "/admin.php?p=book")
    echo 'active' ?>" href="/admin.php?p=book">
        <i class="bi bi-book"></i> Kelola Buku
      </a>
      <a class="menu-item <?php if ($pageUri == "/admin.php?p=penerbit")
    echo 'active' ?>" href="/admin.php?p=penerbit">
        <i class="bi bi-card-heading"></i> Kelola Penerbit
      </a>
    </div>
    <a class="menu-item <?php if ($pageUri == "/pengadaan.php")
    echo 'active' ?>" href="/pengadaan.php">
      <i class="bi bi-clipboard-data"></i> Pengadaan
    </a>
  </div>