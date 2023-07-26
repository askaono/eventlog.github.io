<?php
session_start();
include_once('connection.php');

if (isset($_POST['delete_ap'])) {
    $delete_id = $_POST['delete_id'];

    // Delete the Access Point data from the database
    $sql = "DELETE FROM network_devices WHERE id = '$delete_id' AND device_type = 'access_point'";

    // Use for MySQLi-OOP
    if ($conn->query($sql)) {
        $_SESSION['success'] = 'Access Point data deleted successfully';
    } else {
        $_SESSION['error'] = 'Something went wrong while deleting Access Point data';
    }
} else {
    $_SESSION['error'] = 'Select Access Point data to delete first';
}

header('location: index.php');
?>
