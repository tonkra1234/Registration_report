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
        <div class="row rounded-pill p-3 m-5 bg-gradient" style="background-color:#BBFC76 ;">
            <div class="col-12 d-flex align-items-center justify-content-center ms-3">
                <h3 class="text-dark">Health supplement</h3>
            </div>
        </div>
        <div class="container d-flex align-items-center justify-content-center h-100">
            <div class="card mx-5" style="width: 18rem;">
                <img src="../public/image/medicine.png" class="card-img-top img-fluid " alt="assessment1">
                <div class="card-body">
                    <h6 class="card-title text-center">Health supplement assessment</h6>
                    <a href="./Health_Supplement_Assessment/add.php" class="btn btn-success text-white d-grid">Go to
                        report</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>