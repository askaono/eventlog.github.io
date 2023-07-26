<?php
session_start();
include_once('connection.php');

if (isset($_POST['edit_client'])) {
    $id = $_POST['edit_id'];
    $jenis_gangguan = $_POST['jenis_gangguan'];
    $lokasi = $_POST['lokasi'];
    $lantai = $_POST['lantai'];
    $user_pn = $_POST['user_pn'];
    $deskripsi_gangguan = $_POST['deskripsi_gangguan'];
    $status = $_POST['status'];

    $sql = "UPDATE network_devices SET jenis_gangguan = '$jenis_gangguan', lokasi = '$lokasi', lantai = '$lantai', user_pn = '$user_pn', deskripsi_gangguan = '$deskripsi_gangguan', status = '$status' WHERE id = '$id'";

    // Use for MySQLi-OOP
    if ($conn->query($sql)) {
        $_SESSION['success'] = 'Client data updated successfully';
    } else {
        $_SESSION['error'] = 'Something went wrong in updating client data';
    }
} else {
    $_SESSION['error'] = 'Select client to edit first';
}

header('location: index.php');
?>
