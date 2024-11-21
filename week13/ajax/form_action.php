<?php
session_start();
include 'koneksi.php';

$id = htmlspecialchars($_POST['id']);
$nama = htmlspecialchars($_POST['nama']);
$jenis_kelamin = htmlspecialchars($_POST['jenis_kelamin']);
$alamat = htmlspecialchars($_POST['alamat']);
$no_telp = htmlspecialchars($_POST['no_telp']);

if (empty($id)) {
    $query = "INSERT INTO anggota (nama, jenis_kelamin, alamat, no_telp) VALUES (?, ?, ?, ?)";
    $params = array($nama, $jenis_kelamin, $alamat, $no_telp);
} else {
    $query = "UPDATE anggota SET nama = ?, jenis_kelamin = ?, alamat = ?, no_telp = ? WHERE id = ?";
    $params = array($nama, $jenis_kelamin, $alamat, $no_telp, $id);
}

$stmt = sqlsrv_query($conn, $query, $params);

if ($stmt) {
    echo json_encode(['success' => 'Sukses']);
} else {
    echo json_encode(['error' => sqlsrv_errors()]);
}

sqlsrv_close($conn);
?>
