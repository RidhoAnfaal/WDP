<?php
$targetDirectory = "documents/";

if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}

if ($_FILES['files']['name'][0]) {
    $totalFile = count($_FILES['files']['name']);

    // Loop melalui semua file yang diunggah
    for ($i = 0; $i < $totalFile; $i++) {
        $fileName = $_FILES['files']['name'][$i];
        $targetFile = $targetDirectory . $fileName;

        // Pindahkan file yang diunggah ke direktori penyimpanan
        if (move_uploaded_file($_FILES['files']['tmp_name'][$i], $targetFile)) {
            echo "File $fileName berhasil diunggah. <br>";
        } else {
            echo "Gagal mengunggah file $fileName. <br>";
        }
    }
} else {
    echo "Tidak ada file yang diunggah.";
}
