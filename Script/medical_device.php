<?php

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:../Login/login_form.php');
}

$user_name = $_SESSION['user_name'];
$_SESSION['user_name'] = $user_name;

require '../include/layout/header.php';
?>
<div class="container-fluid">
    <div class="col-sm p-3 min-vh-100">
        <div class="row rounded-pill p-3 m-5 bg-gradient" style="background-color:#A54600 ;">
            <div class="col-12 d-flex align-items-center justify-content-center ms-3">
                <h2 class="text-white fw-bolder">Medical devices</h2>
            </div>
        </div>

        <div class="container d-flex align-items-center justify-content-center h-100">
            <div class="card mx-5" style="width: 18rem; height:18rem;">
                <img src="../public/image/device1.jpg" class="card-img-top img-fluid" alt="device1" style="height:15rem;">
                <div class="card-body">
                    <h6 class="card-title text-center">Full Dossier Evaluation</h6>
                    <a href="./Medical_full/add.php" class="btn btn-success text-white d-grid">Go to report</a>
                </div>
            </div>
            <div class="card mx-5" style="width: 18rem;height:18rem;">
                <img src="../public/image/device2.jpg" class="card-img-top img-fluid" alt="device2" style="height:15rem;">
                <div class="card-body">
                    <h6 class="card-title text-center">ABR Evaluation</h6>
                    <a href="./Medical_ABR/add.php" class="btn btn-success text-white d-grid">Go to report</a>
                </div>
            </div>
            <div class="card mx-5" style="width: 18rem;height:18rem;">
                <img src="../public/image/device3.jpeg" class="card-img-top img-fluid" alt="device3" style="height:15rem;">
                <div class="card-body">
                    <h6 class="card-title text-center">Evaluation renewal</h6>
                    <a href="./Medical_renewal/add.php" class="btn btn-success text-white d-grid">Go to report</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>