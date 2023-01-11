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
    require '../../include/medical_abr/session_abr.php';
    require '../../include/database/medical_abr_Mysql.php';
}

?>
<div class="container-fluid">
            <div class="col-sm p-3 min-vh-100">
                <div class="container mt-5">
                    <h2 class="text-center my-3 bg-gradient rounded-pill p-2 border border-3" style="background-color: #CBCFFF ;">Evaluation of Medical Device Dossiers (Abridged)</h2>
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
                                    <label for="Dossier_ID" class="form-label">Dossier ID</label>
                                    <input type="text" class="form-control" id="Dossier_ID" name="Dossier_ID" required>
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
                                    <label for="Class" class="form-label">Class</label>
                                    <input type="text" class="form-control" id="Class" name="Class"
                                        required>
                                </div>
                                <div class="mb-3">
                                    <label for="Group_abr" class="form-label">Group</label>
                                    <input type="text" class="form-control" id="Group_abr" name="Group_abr"
                                        required>
                                </div>
                                <div class="mb-3">
                                    <label for="Name_Applicant_Market" class="form-label">Name of the Applicant/Market Authorization Holder</label>
                                    <input type="text" class="form-control" id="Name_Applicant_Market" name="Name_Applicant_Market" required>
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
                                    <h3 for="Part1" class="form-label mt-5">PART A: Administrative Document Requirements</h3>
                                </div>
                                <div class="mb-3">
                                    <label for="Letter_of_Authorization" class="form-label">1. Dully filled Application form, Letter of Authorization from the manufacturer, Declaration of Conformity</label>
                                    <textarea class="form-control" id="Letter_of_Authorization" rows="10" name="Letter_of_Authorization"
                                        required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="Brief" class="form-label">2. Brief Description of the Quality System</label>
                                    <textarea class="form-control" id="Brief" rows="10" name="Brief"
                                        required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="Sale_certificate" class="form-label">3. Free sale certificate (If applicable)</label>
                                    <textarea class="form-control" id="Sale_certificate" rows="10" name="Sale_certificate"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="Evidences" class="form-label">4. Documentary evidences for Abridged Registration(WHO prequalified; Refer WHO website or
Registered in one of the referenced SRAs (Listed by WHO))</label>
                                    <textarea class="form-control" id="Evidences" rows="10" name="Evidences"
                                        required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="Manufacturing_Details" class="form-label">5. Manufacturing Process Details</label>
                                    <textarea class="form-control" id="Manufacturing_Details" rows="10" name="Manufacturing_Details"
                                        required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="Configurations" class="form-label">6. List of Configurations and/or components</label>
                                    <textarea class="form-control" id="Configurations" rows="10" name="Configurations"
                                        required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="Sample" class="form-label">7. Sample of Actual Product ( If applicable)</label>
                                    <textarea class="form-control" id="Sample" rows="10" name="Sample"
                                        ></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="Price_structure" class="form-label">8. Price structure (Market price in the country of origin)</label>
                                    <textarea class="form-control" id="Price_structure" rows="10" name="Price_structure"
                                        required></textarea>
                                </div>
                                <div class="mb-3">
                                    <h3 for="Part2" class="form-label mt-5">Part B: Technical Requirements</h3>
                                </div>
                                <div class="mb-3">
                                    <label for="Evidence_ABR" class="form-label">1. Evidence to support abridged registration</label>
                                    <textarea class="form-control" id="Evidence_ABR" rows="10" name="Evidence_ABR"
                                        required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="Device_description" class="form-label">2. Device Description</label>
                                    <textarea class="form-control" id="Device_description" rows="10" name="Device_description"
                                        required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="Certificate_analysis" class="form-label">3. Certificate of analysis or performance report for at least three batches/lots.</label>
                                    <textarea class="form-control" id="Certificate_analysis" rows="10" name="Certificate_analysis"
                                        required></textarea>
                                </div>
                                <div class="mb-3">
                                    <h3 for="Recommendation" class="form-label mt-5">Recommendations from the Evaluator</h3>
                                </div>
                                <div class="mb-3">
                                    <label for="Recommended_issuance" class="form-label">Recommended for issuance of registration certificate</label>
                                    <textarea class="form-control" id="Recommended_issuance" rows="10" name="Recommended_issuance"
                                        ></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="Missing_document" class="form-label">Missing Document as stated below</label>
                                    <textarea class="form-control" id="Missing_document" rows="10" name="Missing_document"
                                        ></textarea>
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