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
    require '../../include/medical_full/session_full.php';
    require '../../include/database/medical_full_Mysql.php';
}

?>
<div class="container-fluid">
    <div class="col-sm p-3 min-vh-100">
        <div class="container mt-5">
            <h2 class="text-center my-3 bg-gradient rounded-pill p-2 border border-3"
                style="background-color: #CBCFFF ;">Evaluation of Medical Device Dossiers (Full)</h2>
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
                            <label for="Group_full" class="form-label">Group</label>
                            <input type="text" class="form-control" id="Group_full" name="Group_full" required>
                        </div>
                        <div class="mb-3">
                            <label for="Name_Applicant_Market" class="form-label">Name of the Applicant/Market
                                Authorization Holder</label>
                            <input type="text" class="form-control" id="Name_Applicant_Market"
                                name="Name_Applicant_Market" required>
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
                            <h3 for="Part1" class="form-label mt-5">Administration Document</h3>
                        </div>
                        <div class="mb-3">
                            <label for="Letter_of_Authorization" class="form-label">1. Dully filled Application form,
                                Letter of Authorization from the manufacturer, Declaration of Conformity</label>
                            <textarea class="form-control" id="Letter_of_Authorization" rows="10"
                                name="Letter_of_Authorization" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="Quality" class="form-label">2. Quality System</label>
                            <textarea class="form-control" id="Quality" rows="10" name="Quality" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="Sale_certificate" class="form-label">3. Free sale certificate</label>
                            <textarea class="form-control" id="Sale_certificate" rows="10"
                                name="Sale_certificate"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="Manufacturing_Details" class="form-label">4. Manufacturing Process
                                Details</label>
                            <textarea class="form-control" id="Manufacturing_Details" rows="10"
                                name="Manufacturing_Details" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="Configurations" class="form-label">5. List of Configurations and/or
                                components</label>
                            <textarea class="form-control" id="Configurations" rows="10" name="Configurations"
                                required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="Sample" class="form-label">6. Sample of Actual Product ( If applicable)</label>
                            <textarea class="form-control" id="Sample" rows="10" name="Sample"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="Price_structure" class="form-label">7. Price structure (Market price in the
                                country of origin)</label>
                            <textarea class="form-control" id="Price_structure" rows="10" name="Price_structure"
                                required></textarea>
                        </div>
                        <div class="mb-3">
                            <h3 for="Part2" class="form-label mt-5">Part B: Technical Document Requirements</h3>
                        </div>
                        <div class="mb-3">
                            <label for="Executive_Summary" class="form-label">1. Executive Summary</label>
                            <textarea class="form-control" id="Executive_Summary" rows="10" name="Executive_Summary"
                                required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="Essential_Principles" class="form-label">2. Relevant Essential Principles and
                                Method Used to Demonstrate Conformity (Checklist) for class C and
                                D</label>
                            <textarea class="form-control" id="Essential_Principles" rows="10"
                                name="Essential_Principles" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="Device_description" class="form-label">3. Device Description</label>
                            <textarea class="form-control" id="Device_description" rows="10" name="Device_description"
                                required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="Performance" class="form-label">4. Performance Report / Certificate of
                                Analysis</label>
                            <textarea class="form-control" id="Performance" rows="10" name="Performance"
                                required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="Clinical_Evidences" class="form-label">5. Clinical Evidences for class C and D (
                                (if applicable)</label>
                            <textarea class="form-control" id="Clinical_Evidences" rows="10" name="Clinical_Evidences"
                                required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="Labelling" class="form-label">6. Device Labelling <br>
                                i. Labels on the device and its packaging.<br>
                                ii. Instructions for use. <br>
                                iii. Physician's manual. <br>
                                iv. Any information and instructions
                                given to the patient, including instructions for any procedure the
                                patient is expected to perform (if applicable).</label>
                            <textarea class="form-control" id="Labelling" rows="10" name="Labelling"
                                required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="Risk" class="form-label">7. Risk Analysis</label>
                            <textarea class="form-control" id="Risk" rows="10" name="Risk" required></textarea>
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