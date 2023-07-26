<?php
// add_client.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include connection.php to establish database connection
    include_once('connection.php');

    // Retrieve data from the form
    $jenis_gangguan = $_POST['jenis_gangguan'];
    $lokasi = $_POST['lokasi'];
    $lantai = $_POST['lantai'];
    $user_pn = $_POST['user_pn'];
    $deskripsi_gangguan = $_POST['deskripsi_gangguan'];
    $status = $_POST['status'];

    // Validate and sanitize the input data
    $jenis_gangguan = filter_var($jenis_gangguan, FILTER_SANITIZE_STRING);
    $lokasi = filter_var($lokasi, FILTER_SANITIZE_STRING);
    $lantai = filter_var($lantai, FILTER_SANITIZE_STRING);
    $user_pn = filter_var($user_pn, FILTER_SANITIZE_STRING);
    $deskripsi_gangguan = filter_var($deskripsi_gangguan, FILTER_SANITIZE_STRING);
    $status = filter_var($status, FILTER_SANITIZE_STRING);

    // Prepare and execute the query to insert data into the database using prepared statements and parameterized queries
    try {
        $sql = "INSERT INTO network_devices (jenis_gangguan, lokasi, lantai, user_pn, deskripsi_gangguan, status, device_type)
                VALUES (?, ?, ?, ?, ?, ?, 'client')";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssss", $jenis_gangguan, $lokasi, $lantai, $user_pn, $deskripsi_gangguan, $status);
        $stmt->execute();

        // If data insertion is successful, set a success message in a session variable
        session_start();
        $_SESSION['success'] = "New client data added successfully!";

        // Close the statement and connection
        $stmt->close();
        $conn->close();

        // Redirect back to the client section with the success message
        header("Location: index.php#client");
        exit();
    } catch (mysqli_sql_exception $e) {
        // If an error occurs during data insertion, set an error message in a session variable
        session_start();
        $_SESSION['error'] = "Error: " . $e->getMessage();

        // Close the statement and connection
        $stmt->close();
        $conn->close();

        // Redirect back to the client section with the error message
        header("Location: index.php#client");
        exit();
    }
}
?>
