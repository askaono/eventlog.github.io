<?php
session_start();
include_once('connection.php');

if (isset($_POST['delete_client'])) {
    $delete_id = $_POST['delete_id'];

    // Delete the client data from the database
    $sql = "DELETE FROM network_devices WHERE id = '$delete_id' AND device_type = 'client'";

    // Use for MySQLi-OOP
    if ($conn->query($sql)) {
        $_SESSION['success'] = 'Client data deleted successfully';
    } else {
        $_SESSION['error'] = 'Something went wrong while deleting client data';
    }
} else {
    $_SESSION['error'] = 'Select client data to delete first';
}

header('location: index.php');
?>
