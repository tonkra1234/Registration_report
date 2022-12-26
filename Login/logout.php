<?php

@include '../include/database/connection.php';
session_start();

$user_name = $_SESSION['user_name'];
$update = "UPDATE status_user SET status_u = 'Inactive' WHERE username = '$user_name' ";
$up = mysqli_query($conn,  $update);
session_unset();
session_destroy();

header('location:login_form.php');

?>