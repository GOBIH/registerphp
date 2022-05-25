<?php
include('connect.php');
if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];
    $sql = "delete from PersonalDetails where id = $id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        // echo "deleted succesfully";
        header('location:display.php');
    } else {
        die(mysqli_error($conn));
    }
}
