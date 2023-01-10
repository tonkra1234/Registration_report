<?php

session_start();

if(!isset($_SESSION['user_name'])){
    header('location:../../Login/login_form.php');
}

require '../../include/layout/header_form.php';
 
$user_name = $_SESSION['user_name'];
$_SESSION['user_name'] = $user_name;

if (isset($_POST['submit'])) 
{
    require '../../include/fast_track/session_fast.php';
    require '../../include/database/fast_Mysql.php';
}

?>
<div class="container-fluid">
            <div class="col-sm p-3 min-vh-100">
                <div class="container mt-5">
                    <h2 class="text-center my-3 bg-gradient roundsed-pill p-2" style="background-color: #76DEFC;">Fast
                        Track Registration</h2>
                    <form class="" method="POST">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="Show_status" class="form-label">Status</label>
                                    <select class="form-select" aria-label="Show_status" id="Show_status"
                                        name="Show_status" required>
                                        <option value="Approve">Approve</option>
                                        <option value="Reject">Reject</option>
                                        <option value="Query">Query</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="Registration_Type" class="form-label">Registration Type</label>
                                    <select class="form-select" aria-label="Default select example"
                                        id="Registration_Type" name="Registration_Type" required>
                                        <option selected>Select one</option>
                                        <option value="Expedited Registration">Expedited Registration</option>
                                        <option value="Abridged Registration">Abridged Registration</option>
                                        <option value="Company Recognition">Company Recognition</option>
                                        <option value="Renewal Registration">Renewal Registration</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="Dossier_ID" class="form-label">Dossier ID</label>
                                    <input type="text" class="form-control" id="Dossier_ID" name="Dossier_ID" required>
                                </div>
                                <div class="mb-3">
                                    <label for="Assesso_Name" class="form-label">Assessor Name</label>
                                    <input type="text" class="form-control" id="Assesso_Name" name="Assesso_Name"
                                        required>
                                </div>
                                <div class="mb-3">
                                    <label for="date_fast" class="form-label">Date of Assessment</label>
                                    <input type="date" class="form-control" id="date_fast" name="date_fast" required>
                                </div>
                                <div class="mb-3">
                                    <label for="Generic_name" class="form-label">Generic name</label>
                                    <input type="text" class="form-control" id="Generic_name" name="Generic_name"
                                        required>
                                </div>
                                <div class="mb-3">
                                    <label for="Brand_name" class="form-label">Brand name</label>
                                    <input type="text" class="form-control" id="Brand_name" name="Brand_name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="Strength" class="form-label">Strength</label>
                                    <input type="text" class="form-control" id="Strength" name="Strength" required>
                                </div>
                                <div class="mb-3">
                                    <label for="Manufacturer" class="form-label">Manufacturer</label>
                                    <input type="text" class="form-control" id="Manufacturer" name="Manufacturer"
                                        required>
                                </div>
                                <div class="mb-3">
                                    <label for="Observation" class="form-label">Observation</label>
                                    <textarea class="form-control" id="Observation" rows="10" name="Observation"
                                        required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="Inference" class="form-label">Inference</label>
                                    <textarea class="form-control" id="Inference" rows="10" name="Inference"
                                        required></textarea>
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

</html>