<?php
// add_switch.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include connection.php to establish database connection
    include_once('connection.php');

    // Retrieve data from the form
    $jenis_gangguan = $_POST['jenis_gangguan'];
    $lokasi = $_POST['lokasi'];
    $lantai = $_POST['lantai'];
    $nama_switch = $_POST['nama_switch'];
    $deskripsi_gangguan = $_POST['deskripsi_gangguan'];
    $status = $_POST['status'];

    // Validate and sanitize the input data
    $jenis_gangguan = filter_var($jenis_gangguan, FILTER_SANITIZE_STRING);
    $lokasi = filter_var($lokasi, FILTER_SANITIZE_STRING);
    $lantai = filter_var($lantai, FILTER_SANITIZE_STRING);
    $nama_switch = filter_var($nama_switch, FILTER_SANITIZE_STRING);
    $deskripsi_gangguan = filter_var($deskripsi_gangguan, FILTER_SANITIZE_STRING);
    $status = filter_var($status, FILTER_SANITIZE_STRING);

    // Prepare and execute the query to insert data into the database using prepared statements and parameterized queries
    try {
        $sql = "INSERT INTO network_devices (jenis_gangguan, lokasi, lantai, nama_switch, deskripsi_gangguan, status, device_type)
                VALUES (?, ?, ?, ?, ?, ?, 'switch')";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssss", $jenis_gangguan, $lokasi, $lantai, $nama_switch, $deskripsi_gangguan, $status);
        $stmt->execute();
        // If data insertion is successful, redirect back to the switch section with success message
        session_start();
        $_SESSION['success'] = "New switch data added successfully!";
        header("Location: index.php#switch");
    } catch (mysqli_sql_exception $e) {
        // If an error occurs during data insertion, redirect back to the switch section with an error message
        session_start();
        $_SESSION['error'] = "Error: " . $e->getMessage();
        header("Location: index.php#switch");
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>
