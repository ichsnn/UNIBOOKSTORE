<?php

$connection = mysqli_connect("localhost", "root", "", "unibookstore");

if (!$connection) {
  die("Connection failed: " . mysqli_connect_error());
}