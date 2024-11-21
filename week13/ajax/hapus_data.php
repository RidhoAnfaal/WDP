<?php
session_start();
include 'koneksi.php';

$id = $_POST['id'];

$query = "DELETE FROM anggota WHERE id = ?";
$params = array($id);
$stmt = sqlsrv_query($conn, $query, $params);

if ($stmt) {
    echo json_encode(['success' => 'Sukses']);
} else {
    echo json_encode(['error' => sqlsrv_errors()]);
}

sqlsrv_close($conn);
?>
