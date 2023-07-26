<?php
session_start();
include_once('connection.php');

if (isset($_POST['delete_switch'])) {
    $delete_id = $_POST['delete_id'];

    // Delete the client data from the database
    $sql = "DELETE FROM network_devices WHERE id = '$delete_id' AND device_type = 'switch'";

    // Use for MySQLi-OOP
    if ($conn->query($sql)) {
        $_SESSION['success'] = 'Switch data deleted successfully';
    } else {
        $_SESSION['error'] = 'Something went wrong while deleting Switch data';
    }
} else {
    $_SESSION['error'] = 'Select Switch data to delete first';
}

header('location: index.php');
?>
