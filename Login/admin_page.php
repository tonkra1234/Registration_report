<?php

@include '../include/database/connection.php';
session_start();
$user_name = $_SESSION['user_name'];
$_SESSION['user_name'] = $user_name;

// Fast track query
$sql_fast = "SELECT count(*) as number FROM fast_track";
$result_fast = mysqli_query ($conn, $sql_fast);
$data_fast = $result_fast->fetch_assoc();

// Full track query
$sql_full = "SELECT count(*) as number FROM full_track";
$result_full = mysqli_query ($conn, $sql_full);
$data_full = $result_full->fetch_assoc();

// Health supplement query
$sql_health = "SELECT count(*) as number FROM health_supplement";
$result_health = mysqli_query ($conn, $sql_health);
$data_health = $result_health->fetch_assoc();

// Follow up query
$sql_follow = "SELECT count(*) as number FROM follow_up";
$result_follow = mysqli_query ($conn, $sql_follow);
$data_follow = $result_follow->fetch_assoc();

// Post approval query
$sql_post = "SELECT count(*) as number FROM post_approval";
$result_post = mysqli_query ($conn, $sql_post);
$data_post = $result_post->fetch_assoc();

$total = $data_fast['number']+$data_full['number']+$data_health['number']+$data_follow['number']+$data_post['number'];


session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

$query_status= "SELECT * FROM status_user ";
$all_users_status = mysqli_query ($conn, $query_status);

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin page</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
   </script>
   <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

   <style>
      .pop-up:hover {
         transform: scale(1.02);
      }
   </style>
</head>

<body style="background-color:#EBF5FB ;">
   <div class="container">
      <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
         <div class="container-fluid">
            <a class="navbar-brand ms-3" href="#">Drug Regulatory Authority</a>
            <div class="d-flex ms-auto me-5">
               <a class="btn btn-info mx-3" href="./register_form.php" role="button">Registrater</a>
               <a role="button" class="btn btn-danger" href="./logout.php">Logout</a>
            </div>
         </div>
      </nav>
      <div class="container">
         <div class="row mt-5">
            <div class="col-9 mt-5 pop-up">
               <div class="rounded-pill bg-gradient bg-white d-flex py-2">
                  <img class="rounded-pill" src="../public/image/presentation.jpeg" alt="presentation" height="150">
                  <div class="d-flex flex-column justify-content-start align-self-center ms-5">
                     <div class="text-start text-primary ">
                        <h1>Hello <?php echo $_SESSION['user_name'] ?>, Welcome back</h1>
                     </div>
                     <div class="">
                        <p class="fs-6">
                           Promoting availability of quality, safe and efficacious medicinal products for customers.
                        </p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-3 mt-5 pop-up">
               <div class="rounded-pill bg-gradient bg-white">
                  <div class="d-flex flex-column justify-content-center">
                     <img src="../public/image/All-logo.png" alt="" height="61" width="60" class="mx-auto d-block mt-2">
                     <h2 class="text-primary text-center">Total report</h2>
                     <div class="d-flex justify-content-center">
                        <h1><?php echo $total ;?></h1>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-12 mt-5 pop-up">
               <div class="bg-gradient bg-white rounded-3 p-3">
                  <h2 class="text-primary mb-3">Number of generated report</h2>
                  <canvas id="report_chart" height="60"></canvas>
               </div>
            </div>
            <div class="col-12 mt-5 bg-white bg-gradient rounded-3 p-3">
               <h2 class="text-primary mb-3">All users & Status</h2>
               <table class="table table-striped table-hover rounded-3">
                  <thead>
                     <tr class="table-success">
                        <th scope="col">No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                        <th scope="col">Change</th>
                        <th scope="col">Status</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php
               $No =1;
               while ($status = mysqli_fetch_array($all_users_status)){
               ?>
                     <tr>
                        <th scope="row"><?php echo $No;?></th>
                        <td><?php echo $status["username"]; ?></td>
                        <td><?php echo $status["email"]; ?></td>
                        <td><?php echo $status["user_type"]; ?></td>
                        <td><button type="button" class="btn btn-warning" data-bs-toggle="modal"
                           data-bs-target="#changeModal<?php echo $status['id'];?>">
                           Change
                        </button></td>
                        <td class="text-center align-middle">
                           <?php if(((array_key_exists("status_u",$status)) ? $status["status_u"] : "" ) === "Active") : ?>
                           <span class="badge bg-success"><?php echo $status["status_u"]; ?></span></td>
                        <?php elseif(((array_key_exists("status_u",$status)) ? $status["status_u"] : "" ) === "Inactive") : ?>
                        <span class="badge bg-danger"><?php echo $status["status_u"]; ?></span></td>
                        <?php else : ?>
                        <span
                           class="badge bg-warning text-dark">N/A</span>
                        </td>
                        <?php endif; ?></td>
                        
                        <?php
                        include './change_password.php';
                     $No++;
                  }
                  ?>
                     </tr>
                  </tbody>
               </table>
            </div>
         </div>

      </div>

   </div>
   <footer class="p-2 rounded mt-5 bg-white">
      <div class="text-center">
         <div class="copyright">
            <p>developed and maintained by <a href="#" target="_blank">DRA</a></p>
         </div>
      </div>
   </footer>
   <script>
      const bar_chart = document.getElementById('report_chart');
      var data_fast = <?php echo $data_fast['number']; ?>;
      var data_full = <?php echo $data_full['number']; ?>;
      var data_health = <?php echo $data_health['number']; ?>;
      var data_follow = <?php echo $data_follow['number']; ?>;
      var data_post = <?php echo $data_post['number']; ?>;


      new Chart(bar_chart, {
         type: 'bar',
         data: {
            labels: ['Fast track', 'Full dossier', 'Health supplement', 'follow dossier', 'Post dossier'],
            datasets: [{
               label: 'Number of report generated',
               data: [data_fast, data_full, data_health, data_follow, data_post],
               backgroundColor: [
                  'rgb(255, 99, 132)',
                  'rgb(54, 162, 235)',
                  'rgb(255, 205, 86)',
                  'rgb(26, 188, 156 )',
                  'rgb(164, 128, 255 )',
                  'rgb(74, 123, 214 )',
                  'rgb(74, 214, 112 )',
                  'rgb(100, 254, 205 )'
               ],
               borderWidth: 1
            }]
         },
         options: {
            scales: {
               y: {
                  beginAtZero: true
               }
            }
         }
      });
   </script>

</body>

</html>