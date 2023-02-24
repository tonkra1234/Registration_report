<?php
require '../../include/database/connection.php';
session_start();

if(!isset($_SESSION['user_name'])){
    header('location:../../Login/login_form.php');
}

require '../../include/layout/header_form.php';
 
$user_name = $_SESSION['user_name'];
$_SESSION['user_name'] = $user_name;

if (isset($_POST['submit'])) 
{
    require '../../include/medical_renewal/session_renewal.php';
    require '../../include/database/medical_renewal_Mysql.php';
}

?>
<div class="container-fluid">
    <div class="col-sm p-3 min-vh-100">
        <div class="container mt-5">
            <h2 class="text-center my-3 bg-gradient rounded-pill p-2 border border-3"
                style="background-color: #CBCFFF ;">Evaluation of Medical Device Dossiers (Renewal)</h2>
            <form class="" method="POST">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="Show_status" class="form-label">Status</label>
                            <select class="form-select" aria-label="Show_status" id="Show_status" name="Show_status"
                                required>
                                <option value="Approve">Approve</option>
                                <option value="Reject">Reject</option>
                                <option value="Query">Query</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="Dossier_ID" class="form-label">Dossier ID</label>
                            <input type="text" class="form-control" id="Dossier_ID" name="Dossier_ID" required>
                        </div>
                        <div class="mb-3">
                            <label for="Generic_name" class="form-label">Generic name</label>
                            <input type="text" class="form-control" id="Generic_name" name="Generic_name" required>
                        </div>
                        <div class="mb-3">
                            <label for="Brand_name" class="form-label">Brand name</label>
                            <input type="text" class="form-control" id="Brand_name" name="Brand_name" required>
                        </div>
                        <div class="mb-3">
                            <label for="Class" class="form-label">Class</label>
                            <input type="text" class="form-control" id="Class" name="Class" required>
                        </div>
                        <div class="mb-3">
                            <label for="Group_renewal" class="form-label">Group</label>
                            <input type="text" class="form-control" id="Group_renewal" name="Group_renewal" required>
                        </div>
                        <div class="mb-3">
                            <label for="Name_Applicant_Market" class="form-label">Name of the Applicant/Market
                                Authorization Holder</label>
                            <input type="text" class="form-control" id="Name_Applicant_Market"
                                name="Name_Applicant_Market" required>
                        </div>
                        <div class="mb-3">
                            <label for="Registration_Number" class="form-label">Registration Number</label>
                            <input type="text" class="form-control" id="Registration_Number" name="Registration_Number"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="Contact_Details" class="form-label">Contact Details</label>
                            <input type="text" class="form-control" id="Contact_Details" name="Contact_Details"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="Name_Manufacturer" class="form-label">Name of the Manufacturer</label>
                            <input type="text" class="form-control" id="Name_Manufacturer" name="Name_Manufacturer"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="date_fast" class="form-label">Application Date</label>
                            <input type="date" class="form-control" id="date_fast" name="date_fast" required>
                        </div>
                        <div class="mb-3">
                            <label for="Receipt_Number" class="form-label">Receipt number with date</label>
                            <input type="text" class="form-control" id="Receipt_Number" name="Receipt_Number" required>
                        </div>
                        <div class="mb-3">
                            <label for="Email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="Email" name="Email" required>
                        </div>
                        <div class="mb-3">
                            <h3 for="Part1" class="form-label mt-5">Document Requirements</h3>
                        </div>
                        <div class="mb-3">
                            <label for="Letter_of_Authorization" class="form-label">1. Dully filled Application form,
                                Letter of Authorization from the manufacturer, Declaration of Conformity</label>
                            <textarea class="form-control" id="Letter_of_Authorization" rows="10"
                                name="Letter_of_Authorization" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="Declaration_Letter" class="form-label">2. Declaration Letter from the company
                                stating that there is no change in all aspects of the registered
                                product.</label>
                            <textarea class="form-control" id="Declaration_Letter" rows="10" name="Declaration_Letter"
                                required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="Initial_Registration" class="form-label">3. Copy of Initial Registration
                                Certificate</label>
                            <textarea class="form-control" id="Initial_Registration" rows="10"
                                name="Initial_Registration"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="Specimen_package" class="form-label">4. Specimen of package, label and insert
                                where applicable(Compare with the specimen submitted during
                                the initial registration)</label>
                            <textarea class="form-control" id="Specimen_package" rows="10" name="Specimen_package"
                                required></textarea>
                        </div>
                        <div class="mb-3">
                            <h3 for="Recommendation" class="form-label mt-5">Recommendations from the Evaluator</h3>
                        </div>
                        <div class="mb-3">
                            <label for="Recommended_issuance" class="form-label">Recommended for issuance of
                                registration certificate</label>
                            <textarea class="form-control" id="Recommended_issuance" rows="10"
                                name="Recommended_issuance"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="Missing_document" class="form-label">Missing Document as stated below</label>
                            <textarea class="form-control" id="Missing_document" rows="10"
                                name="Missing_document"></textarea>
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