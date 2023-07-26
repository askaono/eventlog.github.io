<?php
// add.php

// Print the data from the form
echo "jenis_gangguan: " . $_POST['jenis_gangguan'] . "<br>";
echo "lokasi: " . $_POST['lokasi'] . "<br>";
echo "lantai: " . $_POST['lantai'] . "<br>";
echo "ap_name: " . $_POST['ap_name'] . "<br>";
echo "ap_serial_number: " . $_POST['ap_serial_number'] . "<br>";
echo "new_ap_serial: " . $_POST['new_ap_serial'] . "<br>";
echo "deskripsi_gangguan: " . $_POST['deskripsi_gangguan'] . "<br>";
echo "status: " . $_POST['status'] . "<br>";

// Include connection.php to establish database connection
include_once('connection.php');

// Retrieve data from the form
$jenis_gangguan = $_POST['jenis_gangguan'];
$lokasi = $_POST['lokasi'];
$lantai = $_POST['lantai'];
$ap_name = $_POST['ap_name'];
$ap_serial_number = $_POST['ap_serial_number'];
$new_ap_serial = $_POST['new_ap_serial'];
$deskripsi_gangguan = $_POST['deskripsi_gangguan'];
$status = $_POST['status'];

// Validate and sanitize the input data
$jenis_gangguan = filter_var($jenis_gangguan, FILTER_SANITIZE_STRING);
$lokasi = filter_var($lokasi, FILTER_SANITIZE_STRING);
$lantai = filter_var($lantai, FILTER_SANITIZE_STRING);
$ap_name = filter_var($ap_name, FILTER_SANITIZE_STRING);
$ap_serial_number = filter_var($ap_serial_number, FILTER_SANITIZE_STRING);
$new_ap_serial = filter_var($new_ap_serial, FILTER_SANITIZE_STRING);
$deskripsi_gangguan = filter_var($deskripsi_gangguan, FILTER_SANITIZE_STRING);
$status = filter_var($status, FILTER_SANITIZE_STRING);

// Insert data into the database using prepared statements and parameterized queries
try {
    $sql = "INSERT INTO network_devices (ticket_number, jenis_gangguan, lokasi, lantai, ap_name, ap_serial_number, new_ap_serial, deskripsi_gangguan, status, device_type)
            VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, 'access_point')";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssss", $jenis_gangguan, $lokasi, $lantai, $ap_name, $ap_serial_number, $new_ap_serial, $deskripsi_gangguan, $status);
    $stmt->execute();
    // If data insertion is successful, redirect back to the index page with success message
    session_start();
    $_SESSION['success'] = "New record created successfully";
} catch (mysqli_sql_exception $e) {
    // If an error occurs during data insertion, redirect back to the index page with an error message
    session_start();
    $_SESSION['error'] = "Error: " . $e->getMessage();
}

// Close the statement and connection
$stmt->close();
$conn->close();

header("Location: index.php");
exit();
?>
