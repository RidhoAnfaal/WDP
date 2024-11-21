<?php
session_start();
include 'koneksi.php';

$id = $_POST['id'];
$query = "SELECT * FROM anggota WHERE id = ?";
$params = array($id);
$stmt = sqlsrv_query($conn, $query, $params);

if ($stmt) {
    $data = array();
    while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
        $data = $row;
    }
    echo json_encode($data);
} else {
    echo json_encode(['error' => sqlsrv_errors()]);
}

sqlsrv_close($conn);
?>
