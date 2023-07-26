<?php
session_start();
include_once('connection.php');

if (isset($_POST['update_ap'])) { // Ganti "edit" menjadi "update_ap"
    $id = $_POST['edit_id']; // Ganti "id" menjadi "edit_id"
    $jenis_gangguan = $_POST['jenis_gangguan'];
    $lokasi = $_POST['lokasi'];
    $lantai = $_POST['lantai'];
    $ap_name = $_POST['ap_name'];
    $ap_serial_number = $_POST['ap_serial_number'];
    $new_ap_serial = $_POST['new_ap_serial'];
    $deskripsi_gangguan = $_POST['deskripsi_gangguan'];
    $status = $_POST['status'];

    $sql = "UPDATE network_devices SET jenis_gangguan = '$jenis_gangguan', lokasi = '$lokasi', lantai = '$lantai', ap_name = '$ap_name', ap_serial_number = '$ap_serial_number', new_ap_serial = '$new_ap_serial', deskripsi_gangguan = '$deskripsi_gangguan', status = '$status' WHERE id = '$id'"; // Ganti "members" menjadi "network_devices"

    // Use for MySQLi OOP
    if ($conn->query($sql)) {
        $_SESSION['success'] = 'Access Point updated successfully'; // Ubah pesan sesuai dengan jenisnya (Access Point, Client, atau Switch)
    } else {
        $_SESSION['error'] = 'Something went wrong in updating Access Point'; // Ubah pesan sesuai dengan jenisnya (Access Point, Client, atau Switch)
    }
} else {
    $_SESSION['error'] = 'Select Access Point to edit first'; // Ubah pesan sesuai dengan jenisnya (Access Point, Client, atau Switch)
}

header('location: index.php');
?>
