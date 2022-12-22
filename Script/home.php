<?php

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:../Login/login_form.php');
}

$user_name = $_SESSION['user_name'];
$_SESSION['user_name'] = $user_name;

@include '../include/database/connection.php';

@include '../include/home/dashboard.php';

require '../include/layout/header.php';
?>
<div class="container-fluid">
            <div class="col-sm p-3 min-vh-100">
                
                <div class="container mt-5">
                    <div class="row rounded p-3" style="background-color:#1CA60C ;">
                        <div class="col-12 d-flex align-items-center justify-content-start ms-3">
                            <h3 class="text-light">Summary dashboard</h3>
                        </div>
                    </div>
                    <div class="row mt-3 bg-light rounded p-3">
                        <div class="col-12 mb-3">
                            <h4>Total reports</h4>
                        </div>
                        <div class="col-4 mb-3">
                            <div class="card">
                                <div class="card-body row">
                                    <div class="col-9">
                                        <div class="d-flex flex-column">
                                            <span class="badge text-dark fs-6" style="background-color: #D698FE;">Fast
                                                track assessment</span>
                                            <div class="d-flex justify-content-center mt-3">
                                                <div class="text-center bg-light rounded me-1 px-3 pt-2">
                                                    <i class="fa-solid fa-check-to-slot fs-3"></i>
                                                    <p><?php echo $data_fast_a['number'];?></p>
                                                </div>
                                                <div class="text-center bg-light rounded mx-1 px-3 pt-2">
                                                    <i class="fa-solid fa-square-xmark fs-3"></i>
                                                    <p><?php echo $data_fast_r['number'];?></p>
                                                </div>
                                                <div class="text-center bg-light rounded mx-1 px-3 pt-2">
                                                    <i class="fa-solid fa-pen fs-3"></i>
                                                    <p><?php echo $data_fast_q['number'];?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="border border-3 d-flex align-items-center justify-content-center">
                                            <p class="fw-bold" style="font-size:4.5rem ;color:#9d04ff;">
                                                <?php echo $data_fast['number'];?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 mb-3">
                            <div class="card">
                                <div class="card-body row">
                                    <div class="col-9">
                                        <div class="d-flex flex-column">
                                            <span class="badge text-dark fs-6" style="background-color: #F0AD75;">Full
                                                dossier assessment</span>
                                            <div class="d-flex justify-content-center mt-3">
                                                <div class="text-center bg-light rounded me-1 px-3 pt-2">
                                                    <i class="fa-solid fa-check-to-slot fs-3"></i>
                                                    <p><?php echo $data_full_a['number'];?></p>
                                                </div>
                                                <div class="text-center bg-light rounded mx-1 px-3 pt-2">
                                                    <i class="fa-solid fa-square-xmark fs-3"></i>
                                                    <p><?php echo $data_full_r['number'];?></p>
                                                </div>
                                                <div class="text-center bg-light rounded mx-1 px-3 pt-2">
                                                    <i class="fa-solid fa-pen fs-3"></i>
                                                    <p><?php echo $data_full_q['number'];?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="border border-3 d-flex align-items-center justify-content-center">
                                            <p class="fw-bold" style="font-size:4.5rem ;color:#fd7401;">
                                                <?php echo $data_full['number'];?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 mb-3">
                            <div class="card">
                                <div class="card-body row">
                                    <div class="col-9">
                                        <div class="d-flex flex-column">
                                            <span class="badge text-dark fs-6" style="background-color: #BBFC76;">Health
                                                supplement assessment</span>
                                            <div class="d-flex justify-content-center mt-3">
                                                <div class="text-center bg-light rounded me-1 px-3 pt-2">
                                                    <i class="fa-solid fa-check-to-slot fs-3"></i>
                                                    <p><?php echo $data_health_a['number'];?></p>
                                                </div>
                                                <div class="text-center bg-light rounded mx-1 px-3 pt-2">
                                                    <i class="fa-solid fa-square-xmark fs-3"></i>
                                                    <p><?php echo $data_health_r['number'];?></p>
                                                </div>
                                                <div class="text-center bg-light rounded mx-1 px-3 pt-2">
                                                    <i class="fa-solid fa-pen fs-3"></i>
                                                    <p><?php echo $data_health_q['number'];?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="border border-3 d-flex align-items-center justify-content-center">
                                            <p class="fw-bold" style="font-size:4.5rem ;color:#7cdf13;">
                                                <?php echo $data_health['number'];?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 mb-3">
                            <div class="card">
                                <div class="card-body row">
                                    <div class="col-9">
                                        <div class="d-flex flex-column">
                                            <span class="badge fs-5 text-white" style="background-color: #44C3E8;">Follow
                                                up assessment</span>
                                            <div class="d-flex justify-content-center mt-3">
                                                <div class="text-center bg-light rounded me-2 px-3 pt-2">
                                                    <i class="fa-solid fa-check-to-slot fs-3"></i>
                                                    <p><?php echo $data_follow_a['number'];?></p>
                                                </div>
                                                <div class="text-center bg-light rounded me-2 px-3 pt-2">
                                                    <i class="fa-solid fa-square-xmark fs-3"></i>
                                                    <p><?php echo $data_follow_r['number'];?></p>
                                                </div>
                                                <div class="text-center bg-light rounded me-2 px-3 pt-2">
                                                    <i class="fa-solid fa-pen fs-3"></i>
                                                    <p><?php echo $data_follow_q['number'];?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="border border-3 d-flex align-items-center justify-content-center">
                                            <p class="fw-bold" style="font-size:4.5rem ;color:#069ce6;">
                                                <?php echo $data_follow['number'];?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-2">
                                        <div class="d-flex justify-content-end">
                                            <button class="btn btn-primary" id='target1' value="extent1"
                                                onclick="Toggle(this.value)">More detail</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer" id="extent1">
                                    <div class="d-flex">
                                        <div class="col-4 text-center">
                                            <div class="d-flex flex-column">
                                                <span class="badge rounded-pill text-dark mx-1"
                                                    style="background-color: #D698FE;">Fast track</span>
                                                <p><?php echo $data_follow_fast['number']?></p>
                                            </div>
                                        </div>
                                        <div class="col-4 text-center">
                                            <div class="d-flex flex-column">
                                                <span class="badge rounded-pill text-dark mx-1"
                                                    style="background-color: #F0AD75;">Full dossier</span>
                                                <p><?php echo $data_follow_full['number']?></p>
                                            </div>
                                        </div>
                                        <div class="col-4 text-center">
                                            <div class="d-flex flex-column">
                                                <span class="badge rounded-pill text-dark mx-1"
                                                    style="background-color: #BBFC76;">Health supplement</span>
                                                <p><?php echo $data_follow_health['number']?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 mb-3">
                            <div class="card">
                                <div class="card-body row">
                                    <div class="col-9">
                                        <div class="d-flex flex-column ">
                                            <span class="badge text-light fs-5" style="background-color: #D35B5B;">Post
                                                approval assessment</span>
                                            <div class="d-flex justify-content-center mt-3">
                                                <div class="text-center bg-light rounded me-2 px-3 pt-2">
                                                    <i class="fa-solid fa-check-to-slot fs-3"></i>
                                                    <p><?php echo $data_post_a['number'];?></p>
                                                </div>
                                                <div class="text-center bg-light rounded me-2 px-3 pt-2">
                                                    <i class="fa-solid fa-square-xmark fs-3"></i>
                                                    <p><?php echo $data_post_r['number'];?></p>
                                                </div>
                                                <div class="text-center bg-light rounded me-2 px-3 pt-2">
                                                    <i class="fa-solid fa-pen fs-3"></i>
                                                    <p><?php echo $data_post_q['number'];?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="border border-3 d-flex align-items-center justify-content-center">
                                            <p class="fw-bold" style="font-size:4.5rem ;color:#fd1414;">
                                                <?php echo $data_post['number'];?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-2">
                                        <div class="d-flex justify-content-end">
                                            <button class="btn btn-primary" id='target2' value="extent2"
                                                onclick="Toggle(this.value)">More detail</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer" id="extent2">
                                    <div class="d-flex">
                                        <div class="col-4 text-center">
                                            <div class="d-flex flex-column">
                                                <span class="badge rounded-pill text-dark mx-1"
                                                    style="background-color: #D698FE;">Fast track</span>
                                                <p><?php echo $data_post_fast['number']?></p>
                                            </div>
                                        </div>
                                        <div class="col-4 text-center">
                                            <div class="d-flex flex-column">
                                                <span class="badge rounded-pill text-dark mx-1"
                                                    style="background-color: #F0AD75;">Full dossier</span>
                                                <p><?php echo $data_post_full['number']?></p>
                                            </div>
                                        </div>
                                        <div class="col-4 text-center">
                                            <div class="d-flex flex-column">
                                                <span class="badge rounded-pill text-dark mx-1"
                                                    style="background-color: #BBFC76;">Health supplement</span>
                                                <p><?php echo $data_post_health['number']?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script>

    var target1 = document.getElementById("extent1");
    var target2 = document.getElementById("extent2");
    target1.style.display = "none";
    target2.style.display = "none";

    function Toggle(value) {

        var parameter = document.getElementById(value);

        if (parameter.style.display === "none") {
            parameter.style.display = "block";
        } else {
            parameter.style.display = "none";
        }
    }
</script>

</html>