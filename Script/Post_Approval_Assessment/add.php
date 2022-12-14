<?php

session_start();

if(!isset($_SESSION['user_name'])){
    header('location:../../../../Login/login_form.php');
}

$user_name = $_SESSION['user_name'];
$_SESSION['user_name'] = $user_name;

if (isset($_POST['submit'])) 
{
    require '../include/post_approval_assessment/session_post.php';
    // require '../include/database/post_Mysql.php';
    header("location:./preview.php");
}
require '../../include/layout/header_form.php';
?>
<div class="container-fluid">
            <div class="col-sm p-3 min-vh-100">
                
                <div class="container mt-5">
                    <h2 class="text-center my-3 bg-gradient rounded-pill p-2" style="background-color: #F0AD75;">Post
                        Approval assessment Form</h2>
                    <form class="" method="post">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="Show_status" class="form-label">Status</label>
                                    <select class="form-select" aria-label="Show_status" id="Show_status"
                                        name="Show_status" required>
                                        <option value="Approval">Approval</option>
                                        <option value="Reject">Reject</option>
                                        <option value="Querying">Querying</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="Type_of_assessment" class="form-label">Type of assessment</label>
                                    <select class="form-select" aria-label="Type_of_assessment" id="Type_of_assessment"
                                        name="Type_of_assessment" required>
                                        <option value="Full Dossier Assessment">Full Dossier Assessment</option>
                                        <option value="Fast Tract Assessment">Fast Track Assessment</option>
                                        <option value="Health Supplement Assessment">Health Supplement Assessment
                                        </option>
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
                                    <label for="Type_change" class="form-label">Type of change</label>
                                    <input type="text" class="form-control" id="Type_change" name="Type_change"
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
                                    <label for="fulfilled_conditions" class="form-label">List the documents and
                                        conditions to be fulfilled for the proposed variation</label>
                                    <textarea class="form-control" id="fulfilled_conditions" rows="10"
                                        name="fulfilled_conditions" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="Justification" class="form-label">Justification for the
                                        variation</label>
                                    <textarea class="form-control" id="Justification" rows="10" name="Justification"
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