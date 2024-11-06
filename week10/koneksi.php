<?php
$koneksi = mysqli_connect("localhost", "root", "anfaal", "prakwebdb");
if (mysqli_connect_errno()) {
    die("koneksi database gagal: " . mysqli_connect_error());
}