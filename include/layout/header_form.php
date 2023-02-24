<?php 

require '../../include/database/connection.php';
$user_name = $_SESSION['user_name'];
$_SESSION['user_name'] = $user_name;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Internal system</title>

    <link rel="shortcut icon" href="https://dra.gov.bt/wp-content/themes/dratheme/images/favicon.ico">

    <link rel="stylesheet" href="public/css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css"
        integrity="sha512-5PV92qsds/16vyYIJo3T/As4m2d8b6oWYfoqV+vtizRB6KhF1F9kYzWzQmsO6T3z3QG2Xdhrx7FQ+5R1LiQdUA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Sweetalert -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../public/js/fetchdata.js"></script>

    <link rel="stylesheet" href="../../public/css/style.css">
    <style>
        #Mynav {
            background-image: url('../../public/image/Head_Web.png');
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>

<body style="background-color:#F4F4F4 ;">
    <div class="shadow">
        <nav class="navbar navbar" id="Mynav">
            <div class="container">
                <div class="d-flex align-items-center">
                    <div class="d-flex">
                        <a class="navbar-brand" href="./home.php"><img src="../../public/image/logo.png" height="100"
                                alt="DRA logo" loading="lazy" />
                        </a>
                        <div class="d-flex align-items-center">
                            <div class="d-flex flex-column justify-content-start">
                                <span class="fs-5 fw-bold" style="color:#003858 ;">Drug</span>
                                <span class="fs-5 fw-bold" style="color:#003858 ;">Regulatory</span>
                                <span class="fs-5 fw-bold" style="color:#003858 ;">Authority</span>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-column px-3 rounded-3 bg-gradient"
                        style="background-color: transparent; width:40vw;">
                        <span class="fs-5 fst-italic text-center" style="color:#37779C ;"><span
                                class="fs-5 fst-italic fw-bold" style="color:#37779C ;">" </span>The most dynamic,
                            reliable
                            and client-centric model</span>
                        <span class="fs-5 fst-italic text-end me-5" style="color:#37779C ;">
                            regulatory organization<span class="fs-5 fst-italic fw-bold" style="color:#37779C ;">
                                "</span></span>
                    </div>
                </div>
            </div>
        </nav>
        <nav class="navbar navbar-expand-lg navbar-light p-1 shadow" style="background-color: #37779C;">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="container-fluid">
                <div class=" collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ms-5">
                        <li class="nav-item mx-1">
                            <a class="nav-link rounded-3" aria-current="page" href="../home.php"
                                style="font-size: 1.1rem ;">Home</a>
                        </li>
                        <!-- <li class="nav-item mx-1">
                            <a class="nav-link rounded-3" href="../table.php" style="font-size: 1.1rem ;">Table</a>
                        </li> -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle rounded-3" style="font-size: 1.1rem ;" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Table
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="../fast_table.php">Fast track</a></li>
                                <li><a class="dropdown-item" href="../full_table.php">Full dossier</a></li>
                                <li><a class="dropdown-item" href="../health_table.php">Health supplement</a></li>
                                <li><a class="dropdown-item" href="../follow_table.php">Follow up</a></li>
                                <li><a class="dropdown-item" href="../post_table.php">Post approval</a></li>
                            </ul>
                        </li>
                        <li class="nav-item mx-1">
                            <a class="nav-link rounded-3" href="../pharmaceutical_medicine.php"
                                style="font-size: 1.1rem ;">Pharmaceutical medicine</a>
                        </li>
                        <li class="nav-item mx-1">
                            <a class="nav-link rounded-3" href="../health_supplement.php"
                                style="font-size: 1.1rem ;">Health
                                supplement</a>
                        </li>
                        <li class="nav-item mx-1">
                            <a class="nav-link rounded-3" href="../medical_device.php" style="font-size: 1.1rem ;">Medical device</a>
                        </li>
                        <li class="nav-item mx-1">
                            <a class="nav-link rounded-3" href="../Follow_up_assessment/add.php"
                                style="font-size: 1.1rem ;">Follow
                                up</a>
                        </li>
                        <li class="nav-item mx-1">
                            <a class="nav-link rounded-3" href="../Post_Approval_Assessment/add.php"
                                style="font-size: 1.1rem ;">Post
                                approval</a>
                        </li>
                        <li class="nav-item mx-1">
                            <a class="nav-link rounded-3" href="../../../Drug_repository/script/home/home.php"
                                style="font-size: 1.1rem ;">Drug Repository</a>
                        </li>
                    </ul>
                    <div class="d-flex ms-auto me-5">
                            <div class="dropdown text-end">
                                <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle"
                                    id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="../../public/image/login.png" alt="users" height="40" width="40">
                                </a>
                                <ul class="dropdown-menu text-small dropdown-menu-end" aria-labelledby="dropdownUser1">
                                    <li>
                                        <h6 class="dropdown-header">User: <?php echo $user_name;?></h6>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Profile</a></li>
                                    <li><a class="dropdown-item" href="../../Login/logout.php"><i
                                                class="fa-solid fa-right-from-bracket fs-5 me-2"></i>Sign out</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>