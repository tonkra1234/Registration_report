<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Sweetalert -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Edit</title>
</head>
<body>
<?php
    include '../include/database/connection.php';

    $userId = $_POST['Id'];
    $new_password = md5($_POST['new_password']);
     
    $update = "UPDATE users SET password='$new_password' WHERE id=$userId";
     
    if ($conn->query($update) === TRUE) {
       echo "<script>Swal.fire(
         'Change data successfully!',
         'Please, click button to continue!',
         'success'
       ).then(function() {
         window.location = './admin_page.php';
       });
       </script>";
    }else {
      echo "Error updating record: " . $conn->error;
    }
       
?>    
</body>
</html>
