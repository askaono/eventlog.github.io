<?php
session_start();
include_once('connection.php');

if (isset($_POST['edit_id'])) {
    $id = $_POST['edit_id'];

    // Check if the switch exists in the database before attempting to edit
    $check_query = "SELECT * FROM network_devices WHERE id = '$id' AND device_type = 'switch'";
    $result = $conn->query($check_query);
    if ($result->num_rows > 0) {
        // Switch exists, perform the edit operation
        $jenis_gangguan = $_POST['jenis_gangguan'];
        $lokasi = $_POST['lokasi'];
        $lantai = $_POST['lantai'];
        $nama_switch = $_POST['nama_switch'];
        $deskripsi_gangguan = $_POST['deskripsi_gangguan'];
        $status = $_POST['status'];

        $edit_query = "UPDATE network_devices SET jenis_gangguan = '$jenis_gangguan', lokasi = '$lokasi', lantai = '$lantai', nama_switch = '$nama_switch', deskripsi_gangguan = '$deskripsi_gangguan', status = '$status' WHERE id = '$id'";
        if ($conn->query($edit_query)) {
            $_SESSION['success'] = 'Switch data updated successfully';
        } else {
            $_SESSION['error'] = 'Something went wrong in updating switch data';
        }
    } else {
        $_SESSION['error'] = 'Switch does not exist or cannot be edited';
    }
} else {
    $_SESSION['error'] = 'Select switch to edit first';
}

header('location: index.php#switch');
?>
