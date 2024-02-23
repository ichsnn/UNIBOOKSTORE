<?php

require_once(__DIR__ ."../../config/db.php");

$method = $_SERVER['REQUEST_METHOD'];

var_dump($method);

switch($method) {
    case "POST":
        $id = $_POST["id"];
        $nama = $_POST["nama"];
        $alamat = $_POST["alamat"];
        $kota = $_POST["kota"];
        $telepon = $_POST["telepon"];

        try {
            $query = "INSERT INTO penerbit (id_penerbit, nama, alamat, kota, telepon) VALUES ('$id', '$nama', '$alamat', '$kota', '$telepon')";
            $result = mysqli_query($connection, $query);   
        } catch (\Throwable $th) {
            
        }
        break;
}