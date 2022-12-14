<?php

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:./Login/login_form.php');
}

$user_name = $_SESSION['user_name'];
$_SESSION['user_name'] = $user_name;

require '../include/layout/header.php';
?>
<div class="container-fluid">
    <div class="col-sm p-3 min-vh-100">
        <div class="row rounded-pill p-3 m-5 bg-gradient" style="background-color:#70faee ;">
            <div class="col-12 d-flex align-items-center justify-content-center ms-3">
                <h3 class="text-dark">Pharmaceutical medicine</h3>
            </div>
        </div>

        <div class="container d-flex align-items-center justify-content-center h-100">
            <div class="card mx-5" style="width: 18rem;">
                <img src="../public/image/assessment.png" class="card-img-top img-fluid" alt="assessment1">
                <div class="card-body">
                    <h6 class="card-title text-center">Full Dossier Assessment Form</h6>
                    <a href="./Full_dossier/add.php" class="btn btn-success text-white d-grid">Go to report</a>
                </div>
            </div>
            <div class="card mx-5" style="width: 18rem;">
                <img src="../public/image/assessment.jpg" class="card-img-top img-fluid" alt="assessment2">
                <div class="card-body">
                    <h6 class="card-title text-center">Fast Track Assessment Form</h6>
                    <a href="./Fast_track/add.php" class="btn btn-success text-white d-grid">Go to report</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>