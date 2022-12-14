<?php

session_start();

if(!isset($_SESSION['user_name'])){
    header('location:../../../../Login/login_form.php');
}
 
$user_name = $_SESSION['user_name'];
$_SESSION['user_name'] = $user_name;

if (isset($_POST['submit'])) 
{
    require '../include/health_supplement/session_health.php';
    require '../include/database/health_supplement.php';
    header("location:./preview.php");
}

require '../../include/layout/header_form.php';
?>
<div class="container-fluid">
            <div class="col-sm p-3 min-vh-100">
                
                <div class="container mt-5">
                    <h2 class="text-center my-3 bg-gradient rounded-pill p-2" style="background-color: #BBFC76 ;">Health
                        Supplement Scientific Evidence Assessment form</h2>
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
                                    <label for="Product_name" class="form-label">Product name and dosage form</label>
                                    <input type="text" class="form-control" id="Product_name" name="Product_name"
                                        required>
                                </div>
                                <div class="mb-3">
                                    <label for="supplement_id" class="form-label">Health supplement Application
                                        ID</label>
                                    <input type="text" class="form-control" id="supplement_id" name="supplement_id"
                                        required>
                                </div>
                                <div class="mb-3">
                                    <label for="Applicant_Details" class="form-label">Applicant Details</label>
                                    <input type="text" class="form-control" id="Applicant_Details"
                                        name="Applicant_Details" required>
                                </div>
                                <div class="mb-3">
                                    <label for="Category" class="form-label">Category</label>
                                    <select class="form-select" aria-label="Category" name="Category" id="Category"
                                        required>
                                        <option value="Category I (Nutrient/General claim product)">Category I
                                            (Nutrient/General claim product)</option>
                                        <option value="Category II (Functional claim product)">Category II (Functional
                                            claim product)</option>
                                        <option value="Category III (Disease risk reduction Product )">Category III
                                            (Disease risk reduction Product )</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="Manufacturer_Details" class="form-label">Manufacturer Details</label>
                                    <textarea class="form-control" id="Manufacturer_Details" rows="3"
                                        name="Manufacturer_Details" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="Label_Claim" class="form-label">Label Claim</label>
                                    <textarea class="form-control" id="Label_Claim" rows="3" name="Label_Claim"
                                        required></textarea>
                                </div>
                                <div class="mb-4">
                                    <label for="Title_Evidence" class="form-label">Title of Evidence</label>
                                    <input type="text" class="form-control" id="Title_Evidence" name="Title_Evidence"
                                        required>
                                </div>
                                <div class="mb-4">
                                    <label for="Type of Evidence" class="form-label fs-4">Type of Evidence</label>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">Title</th>
                                                <th scope="col">Check</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td scope="row">Authoritative reference texts: reference textbooks,
                                                    Pharmacopoeia,
                                                    Scientific journals (Category-I &II)</td>
                                                <td><input class="form-check-input" type="checkbox" value="x"
                                                        id="check1" name="check1"></td>
                                            </tr>
                                            <tr>
                                                <td scope="row">Scientific opinion from scientific organizations or
                                                    regulatory
                                                    authorities (Category I & II)</td>
                                                <td><input class="form-check-input" type="checkbox" value="x"
                                                        id="check2" name="check2"></td>
                                            </tr>
                                            <tr>
                                                <td scope="row">Documented history if use: Classical texts, published
                                                    documents from
                                                    scholar or expert that reports the traditional use of the ingredient
                                                    concerned.</td>
                                                <td><input class="form-check-input" type="checkbox" value="x"
                                                        id="check3" name="check3"></td>
                                            </tr>
                                            <tr>
                                                <td scope="row">Scientific evidence from animal studies-Document history
                                                    of use,
                                                    evidence from published scientific review.</td>
                                                <td><input class="form-check-input" type="checkbox" value="x"
                                                        id="check4" name="check4"></td>
                                            </tr>
                                            <tr>
                                                <td scope="row">Meta-analysis/peer reviewed/literature reviewed</td>
                                                <td><input class="form-check-input" type="checkbox" value="x"
                                                        id="check5" name="check5"></td>
                                            </tr>
                                            <tr>
                                                <td scope="row">Scientific evidence from human intervention study on
                                                    ingredient or
                                                    product (Category III)</td>
                                                <td><input class="form-check-input" type="checkbox" value="x"
                                                        id="check6" name="check6"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="mb-3 row">
                                    <label for="Verification_Evidence" class="form-label fs-4">Verification of
                                        Evidence</label><br>
                                    <label for="Verification_Evidence" class="form-label">Is the evidence submitted
                                        genuine? Verify by searching the title of evidence in
                                        various open access journals like PubMed, the Lancet etc.</label>
                                    <div class="col-3">
                                        <select class="form-select" aria-label="Verification_Evidence"
                                            name="Verification_Evidence" id="Verification_Evidence" required>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="col-9">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">URL of the website used to
                                                verify</span>
                                            <input type="text" class="form-control" aria-label="URL"
                                                aria-describedby="basic-addon1" name="URL" id="URL" required>
                                        </div>
                                    </div>

                                </div>

                                <div class="mb-3 row">
                                    <label for="evidence_support_label" class="form-label">Does the evidence
                                        satisfactorily
                                        support label claim?( If the evidence is not satisfactory to support claim,
                                        communicate to the
                                        applicant for additional evidence. )</label>
                                    <div class="col-3">
                                        <select class="form-select" aria-label="evidence_support_label"
                                            name="evidence_support_label" id="evidence_support_label" required>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="conclusion" class="form-label">Mention Briefly the conclusion of
                                        evidence to support claim (For satisfactory evidence only)</label>
                                    <textarea class="form-control" id="conclusion" rows="6" name="conclusion"
                                        required></textarea>
                                </div>

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