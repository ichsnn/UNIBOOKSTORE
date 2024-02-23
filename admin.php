<?php
$pageType;

if (isset($_GET["p"])) {
  $pageType = $_GET["p"];
}
?>

<?php require_once(__DIR__ . "./views/templates/header.php") ?>

<h1 class="mb-5">Admin
  <?php
  if ($pageType == "book")
    echo " - Kelola Buku";
  if ($pageType == "penerbit")
    echo " - Kelola Penerbit"; ?>
</h1>

<?php

switch ($pageType) {
  case "book":
    require_once(__DIR__ . "/views/manageBookTable.php");
    break;
  case "penerbit":
    require_once(__DIR__ . "/views/managePenerbitTable.php");
    break;
}

?>

<?php require_once(__DIR__ . "./views/templates/footer.php") ?>