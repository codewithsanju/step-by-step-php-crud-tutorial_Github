<?php
include('connect.php');
if (isset($_GET['delete'])) {
    $delete_id = $_GET['delete'];
    // echo $delete_id;
    // Delete Query

    $delete_data = mysqli_query($conn, "Delete from `crud` where id = $delete_id") or die("Query Failed");

    if ($delete_data) {
        header('location:display.php');
    } else {
        header('location:display.php');
    }
}
