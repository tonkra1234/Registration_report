<?php

session_start();

if (isset($_POST['submit'])) 
{
    require '../include/fast_track/session_fast.php';
    header("location:./preview.php");
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

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
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-auto bg-light sticky-top">
                <div class="d-flex flex-sm-column flex-row flex-nowrap bg-light align-items-center sticky-top">
                    <a href="../home.php" class="d-block p-3 link-dark text-decoration-none ">
                        <span><img src="../public/image/logo.png" alt="logo" width="50px"></span>
                    </a>
                    <ul
                        class="nav nav-pills nav-flush flex-sm-column flex-row flex-nowrap mb-auto mx-auto text-center align-items-center">
                        <li class="nav-item">
                            <a href="../home.php" class="nav-link py-3 px-2" title="Home" data-bs-toggle="tooltip"
                                data-bs-placement="right" data-bs-original-title="Home">
                                <i class="bi-house fs-3"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link py-3 px-2" title="Dashboard" data-bs-toggle="tooltip"
                                data-bs-placement="right" data-bs-original-title="Dashboard">
                                <i class="bi-speedometer2 fs-3"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link py-3 px-2" title="Table" data-bs-toggle="tooltip"
                                data-bs-placement="right" data-bs-original-title="Table">
                                <i class="bi-table fs-3"></i>
                            </a>
                        </li>
                        <li>
                            <a href="../Full_dossier/add.php" class="nav-link py-3 px-2" title="Full Dossier Assessment"
                                data-bs-toggle="tooltip" data-bs-placement="right"
                                data-bs-original-title="Full Dossier Assessment">
                                <i class="bi bi-pass fs-3"></i>
                            </a>
                        </li>
                        <li>
                            <a href="add.php" class="nav-link py-3 px-2" data-bs-toggle="tooltip"
                                data-bs-placement="right" title="Fast Track Registration">
                                <i class="bi bi-fast-forward-fill fs-3"></i>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="col-sm p-3 min-vh-100">

                <div class="container">
                    <h2 class="text-center my-3 bg-gradient rounded-pill p-2" style="background-color: #CBCACA;">Fast
                        Track Registration</h2>
                    <form class="" method="post">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="Registration_Type" class="form-label">Registration Type</label>
                                    <select class="form-select" aria-label="Default select example"
                                        id="Registration_Type" name="Registration_Type">
                                        <option selected>Select one</option>
                                        <option value="Expedited Registration">Expedited Registration</option>
                                        <option value="Abridged Registration">Abridged Registration</option>
                                        <option value="Company Recognition">Company Recognition</option>
                                        <option value="Renewal Registration">Renewal Registration</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="Dossier_ID" class="form-label">Dossier ID</label>
                                    <input type="text" class="form-control" id="Dossier_ID" name="Dossier_ID">
                                </div>
                                <div class="mb-3">
                                    <label for="Assesso_Name" class="form-label">Assessor Name</label>
                                    <input type="text" class="form-control" id="Assesso_Name" name="Assesso_Name">
                                </div>
                                <div class="mb-3">
                                    <label for="date_fast" class="form-label">Date of Assessment</label>
                                    <input type="date" class="form-control" id="date_fast" name="date_fast">
                                </div>
                                <div class="mb-3">
                                    <label for="Observation" class="form-label">Observation</label>
                                    <textarea class="form-control" id="Observation" rows="10"
                                        name="Observation"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="Inference" class="form-label">Inference</label>
                                    <textarea class="form-control" id="Inference" rows="10" name="Inference"></textarea>
                                </div>

                                <div class="d-grid mt-5 mb-3">
                                    <button type="submit" name='submit' class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>


                    </form>
                </div>

            </div>
        </div>
    </div>
</body>

<script>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })
</script>

</html>