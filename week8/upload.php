<?php
if (isset($_POST["submit"])) {
    $targetdir = "uploads/";
    $targetFile = $targetdir . basename($_FILES["myfile"]["name"]);
    $filetype = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    $allowedExtensions = array("txt", "pdf", "doc", "docx");

    $maxFileSize = 3 * 1024 * 1024;

    if (in_array($filetype, $allowedExtensions) && $_FILES["myfile"]["size"] <= $maxFileSize) {
        if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $targetFile)) {
            echo "File berhasil diunggah.";
        } else {
            echo "Gagal mengunggah file.";
        }
    } else {
        echo "File tidak valid atau melebihi ukuran maksimum yang diizinkan.";
    }
}
