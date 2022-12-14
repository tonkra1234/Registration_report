<?php

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:./Login/login_form.php');
}

$user_name = $_SESSION['user_name'];
$_SESSION['user_name'] = $user_name;

@include '../include/database/connection.php';

$id = (isset($_GET['id']))?$_GET['id']:'';
$type = (isset($_GET['type']))?$_GET['type']:'';

$sql = "SELECT * FROM $type WHERE id=$id";
$result = mysqli_query ($conn, $sql);
$data = $result->fetch_assoc();

require '../include/layout/header.php';
?>


<div class="col-sm p-3 min-vh-100">
    <div class="container-fluid p-5">
        <div class="card">
            <?php if($type === "fast_track") : ?>
            <div class="card-header text-center">
                <?php echo $data['id'] ;?>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-hover">
                    <tbody>
                        <tr>
                            <th class="w-50 text-center align-middle">Registration type</th>
                            <td class="w-50 text-center">
                                <select class="form-select" aria-label="Default select example" id="Registration_Type"
                                    name="Registration_Type" required>
                                    <option value="<?php echo $data['Registration_Type'] ;?>">
                                        <?php echo $data['Registration_Type'] ;?></option>
                                    <option value="Expedited Registration">Expedited Registration
                                    </option>
                                    <option value="Abridged Registration">Abridged Registration
                                    </option>
                                    <option value="Company Recognition">Company Recognition</option>
                                    <option value="Renewal Registration">Renewal Registration
                                    </option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th class="w-50 text-center align-middle">Dossier ID</th>
                            <td class="w-50 text-center"><input type="text" class="form-control" id="Dossier_ID"
                                    name="Dossier_ID" value="<?php echo $data['Dossier_ID'];?>" required></td>
                        </tr>
                        <tr>
                            <th class="w-50 text-center align-middle">Assessor Name</th>
                            <td class="w-50 text-center"><input type="text" class="form-control" id="Assesso_Name"
                                    name="Assesso_Name" value="<?php echo $data['Assesso_Name'];?>" required></td>
                        </tr>
                        <tr>
                            <th class="w-50 text-center align-middle">Date of assessment</th>
                            <td class="w-50 text-center"><input type="date" class="form-control" id="date_fast"
                                    name="date_fast" value="<?php echo $data['Date_fast'];?>" required></td>
                        </tr>
                        <tr>
                            <th class="w-50 text-center align-middle">Generic name</th>
                            <td class="w-50 text-center"><input type="text" class="form-control" id="Generic_name"
                                    name="Generic_name" value="<?php echo $data['Generic_name'];?>" required></td>
                        </tr>
                        <tr>
                            <th class="w-50 text-center align-middle">Brand name</th>
                            <td class="w-50 text-center"><input type="text" class="form-control" id="Brand_name"
                                    name="Brand_name" value="<?php echo $data['Brand_name'];?>" required></td>
                        </tr>
                        <tr>
                            <th class="w-50 text-center align-middle">Strength</th>
                            <td class="w-50 text-center"><input type="text" class="form-control" id="Strength"
                                    name="Strength" value="<?php echo $data['Strength'];?>" required></td>
                        </tr>
                        <tr>
                            <th class="w-50 text-center align-middle">Manufacturer</th>
                            <td class="w-50 text-center"><input type="text" class="form-control" id="Manufacturer"
                                    name="Manufacturer" value="<?php echo $data['Manufacturer'];?>" required></td>
                        </tr>
                        <tr>
                            <th class="w-50 text-center align-middle">Observation</th>
                            <td class="w-50"><textarea class="form-control" id="Observation" rows="10"
                                    name="Observation" required><?php echo $data['Observation'];?></textarea></td>
                        </tr>
                        <tr>
                            <th class="w-50 text-center align-middle">Inference</th>
                            <td class="w-50"><textarea class="form-control" id="Inference" rows="10" name="Inference"
                                    required><?php echo $data['Inference'];?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <th class="w-50 text-center align-middle">Status</th>
                            <td class="w-50 text-center">
                                <select class="form-select" aria-label="Show_status" id="Show_status" name="Show_status"
                                    required>
                                    <option value="<?php echo $data['Show_status'] ;?>">
                                        <?php echo $data['Show_status'] ;?></option>
                                    <option value="Approval">Approval</option>
                                    <option value="Reject">Reject</option>
                                    <option value="Waiting">Waiting</option>
                                </select>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="card-footer text-muted row">
                <div class="col-12 d-grid">
                    <a type="button" class="btn btn-warning" href="">Save</a>
                </div>
            </div>
            <?php elseif($type === "full_track") : ?>
            <div class="card-header text-center">
                <?php echo $data['id'] ;?>
            </div>

            <form class="" method="post">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="Show_status" class="form-label">Status</label>
                            <select class="form-select" aria-label="Show_status" id="Show_status" name="Show_status"
                                required>
                                <option value="<?php echo $data['Show_status'] ;?>"><?php echo $data['Show_status'] ;?>
                                </option>
                                <option value="Approval">Approval</option>
                                <option value="Reject">Reject</option>
                                <option value="Waiting">Waiting</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="Assesso_Name" class="form-label">Assessor Name</label>
                            <input type="text" class="form-control" id="Assesso_Name" name="Assesso_Name"
                                value="<?php echo $data["Assesso_Name"] ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="Qualification" class="form-label">Qualification</label>
                            <input type="text" class="form-control" id="Qualification" name="Qualification"
                                value="<?php echo $data["Qualification"] ?>" required></input>
                        </div>
                        <div class="mb-3">
                            <label for="Dossier_ID" class="form-label">Dossier ID</label>
                            <input type="text" class="form-control" id="Dossier_ID" name="Dossier_ID"
                                value="<?php echo $data["Dossier_ID"] ?>" required>
                        </div>
                        <div class="mb-5">
                            <label for="date_fast" class="form-label">Date of Assessment</label>
                            <input type="date" class="form-control" id="date_fast" name="date_fast"
                                value="<?php echo $data["date_fast"] ?>" required>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <label for="part1" class="form-label">
                            <h4>PART I (Administrative Document and Product
                                information)</h4>
                        </label>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col" style="width:10% ;">SL number</th>
                                            <th scope="col" width='40'>Administrative Documents</th>
                                            <th scope="col" width='10'>Choice</th>
                                            <th scope="col">Remarks</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row" class="text-center">1</th>
                                            <td>Application Form</td>
                                            <td><select class="form-select" aria-label="Default select example"
                                                    id='select1' name="select1" required>
                                                    <option value="<?php echo $data['Application_Form_select'] ;?>">
                                                        <?php echo $data['Application_Form_select'] ;?></option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                    <option value="Missing">Missing</option>
                                                </select></td>
                                            <td><textarea rows="1" style="width: 100%;" name="text1"
                                                    required><?php echo $data["Application_Form_text"] ?></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="text-center">2</th>
                                            <td>Letter of Authorization</td>
                                            <td><select class="form-select" aria-label="Default select example"
                                                    id='select2' name="select2" required>
                                                    <option
                                                        value="<?php echo $data['Letter_of_Authorization_select'] ;?>">
                                                        <?php echo $data['Letter_of_Authorization_select'] ;?></option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                    <option value="Missing">Missing</option>
                                                </select></td>
                                            <td width="100"><textarea name="text2" rows="1" style="width:100% ;"
                                                    required><?php echo $data["Letter_of_Authorization_text"] ?></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="text-center">3</th>
                                            <td>Manufacturing License</td>
                                            <td><select class="form-select" aria-label="Default select example"
                                                    id='select3' name="select3" required>
                                                    <option
                                                        value="<?php echo $data['Manufacturing_License_select'] ;?>">
                                                        <?php echo $data['Manufacturing_License_select'] ;?></option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                    <option value="Missing">Missing</option>
                                                </select></td>
                                            <td width="100"><textarea rows="1" style="width: 100%;" name="text3"
                                                    required><?php echo $data["Manufacturing_License_text"] ?></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="text-center">4</th>
                                            <td>cGMP License</td>
                                            <td><select class="form-select" aria-label="Default select example"
                                                    id='select4' name="select4" required>
                                                    <option value="<?php echo $data['cGMP_License_select'] ;?>">
                                                        <?php echo $data['cGMP_License_select'] ;?></option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                    <option value="Missing">Missing</option>
                                                </select></td>
                                            <td width="100"><textarea rows="1" style="width: 100%;" name="text4"
                                                    required><?php echo $data["cGMP_License_text"] ?></textarea></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="text-center">5</th>
                                            <td>CoPP</td>
                                            <td><select class="form-select" aria-label="Default select example"
                                                    id='select5' name="select5" required>
                                                    <option value="<?php echo $data['CoPP_select'] ;?>">
                                                        <?php echo $data['CoPP_select'] ;?></option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                    <option value="Missing">Missing</option>
                                                </select></td>
                                            <td><textarea rows="1" style="width: 100%;" name="text5"
                                                    required><?php echo $data["CoPP_text"] ?></textarea></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="text-center">6</th>
                                            <td>Price Structure</td>
                                            <td><select class="form-select" aria-label="Default select example"
                                                    id='select6' name="select6" required>
                                                    <option value="<?php echo $data['Price_Structure_select'] ;?>">
                                                        <?php echo $data['Price_Structure_select'] ;?></option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                    <option value="Missing">Missing</option>
                                                </select></td>
                                            <td width="100"><textarea rows="1" style="width: 100%;" name="text6"
                                                    required><?php echo $data["Price_Structure_text"] ?></textarea></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="mb-3">
                                <label for="Site_Master" class="form-label">
                                    <h5>Site Master file</h5>
                                </label><br>
                                <label for="Site_Master" class="form-label">General Observation of the
                                    information
                                    provided
                                    in the Site Master file:</label>
                                <textarea class="form-control" id="Site_Master" name="Site_Master" rows="6"
                                    required><?php echo $data["Site_Master"] ?></textarea>
                            </div>
                            <div class="mb-5 input-group">
                                <span class="input-group-text" id="Product_Sample_assessment">Product Sample
                                    assessment
                                    Result (DRA-D1-WI-17-01):</h5></span>
                                <select class="form-select" aria-label="Default select example" id='Product_Sample'
                                    name="Product_Sample" required>
                                    <option value="<?php echo $data['Product_Sample'] ;?>">
                                        <?php echo $data['Product_Sample'] ;?></option>
                                    <option value="Testing Required">Testing Required</option>
                                    <option value="No Test Required">No Test Required</option>
                                </select>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <label for="Part 2" class="form-label">
                            <h4>PART II (QUALITY DOCUMENTS)</h4>
                        </label>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="Drug Substance" class="form-label">
                                <h5>Drug Substance</h5>
                            </label>
                            <div class="mb-3 input-group">
                                <span class="input-group-text" id="Name_of_API">Name of API:</span>
                                <input type="text" class="form-control" name="Name_of_API" id="Name_of_API"
                                    value="<?php echo $data["Name_of_API"] ?>" required>
                            </div>
                            <div class="mb-3 input-group">
                                <span class="input-group-text" id="Pharmacopoeia">Reference
                                    Pharmacopoeia:</span>
                                <select class="form-select" aria-label="Default select example"
                                    name="Pharmacopoeia_substance" id="Pharmacopoeia_substance" required>
                                    <option value="<?php echo $data["Pharmacopoeia_substance"] ?>">
                                        <?php echo $data["Pharmacopoeia_substance"] ?></option>
                                    <option value="BP">BP</option>
                                    <option value="USP">USP</option>
                                    <option value="IP">IP</option>
                                    <option value="Eu.Ph">Eu.Ph</option>
                                    <option value="IH">IH</option>
                                </select>
                            </div>
                            <div class="mb-3 input-group">
                                <span class="input-group-text" id="Excipients">Name of Excipients:</span>
                                <textarea class="form-control" name="Excipients" id="Excipients" rows="3"
                                    required><?php echo $data["Excipients"] ?></textarea>
                            </div>
                            <div class="mb-3 input-group">
                                <span class="input-group-text" id="Address_of_Manufacturer">Name and address
                                    of
                                    Manufacturer:</span>
                                <input type="text" class="form-control" name="Address_of_Manufacturer"
                                    id="Address_of_Manufacturer" value="<?php echo $data["Address_of_Manufacturer"] ?>"
                                    required>
                            </div>

                            <label for="Certificate" class="form-label">
                                <h5>Certificate of Analysis of API and Excipients:</h5>
                                Observations and comments:
                            </label>
                            <textarea class="form-control mb-3" name="Certificate_Excipients"
                                id="Certificate_Excipients" rows="6"
                                required><?php echo $data["Certificate_Excipients"] ?></textarea>

                            <label for="DRUG PRODUCT" class="form-label">
                                <h5>Drug Product</h5>
                            </label>
                            <div class="mb-3 input-group">
                                <span class="input-group-text" id="Brand_Name">Brand Name</span>
                                <input type="text" class="form-control" name="Brand_Name" id="Brand_Name"
                                    value="<?php echo $data["Brand_Name"] ?>" required>
                            </div>
                            <div class="mb-3 input-group">
                                <span class="input-group-text" id="Generic_Name">Generic Name</span>
                                <input type="text" class="form-control" name="Generic_Name" id="Generic_Name"
                                    value="<?php echo $data["Generic_Name"] ?>" required>
                            </div>
                            <div class="mb-3 input-group">
                                <span class="input-group-text" id="Description_drug">Description of the Drug
                                    product</span>
                                <input type="text" class="form-control" name="Description_drug" id="Description_drug"
                                    value="<?php echo $data["Description_drug"] ?>" required>
                            </div>
                            <div class="mb-3 input-group">
                                <span class="input-group-text" id="Composition">Composition</span>
                                <textarea class="form-control" name="Composition" id="Composition" rows="3"
                                    required><?php echo $data["Composition"] ?></textarea>
                            </div>
                            <div class="mb-3 input-group">
                                <span class="input-group-text" id="Reference_Pharmacopoeia">Reference
                                    Pharmacopoeia</span>
                                <select class="form-select" aria-label="Default select example"
                                    name="Pharmacopoeia_product" id="Pharmacopoeia_product" required>
                                    <option value="<?php echo $data["Pharmacopoeia_product"] ?>">
                                        <?php echo $data["Pharmacopoeia_product"] ?></option>
                                    <option value="BP">BP</option>
                                    <option value="USP">USP</option>
                                    <option value="IP">IP</option>
                                    <option value="Eu.Ph">Eu.Ph</option>
                                    <option value="IH">IH</option>
                                </select>
                            </div>
                            <label for="In_House Specification" class="form-label">
                                <h5>In-House Specification</h5>
                                Observations and comments:
                            </label>
                            <textarea class="form-control mb-3" name="In_House_Specification"
                                id="In_House_Specification" rows="6"
                                required><?php echo $data["In_House_Specification"] ?></textarea>
                            <label for="Manufacturing Process" class="form-label">
                                <h5>Manufacturing Process</h5>
                                Observations and comments:
                            </label>
                            <textarea class="form-control mb-3" name="Manufacturing_Process" id="Manufacturing_Process"
                                rows="6" required><?php echo $data["Manufacturing_Process"] ?></textarea>
                            <label for="Certificate_of_analysis" class="form-label">
                                <h5>Certificate of analysis of Drug Product</h5>
                                Observations and comments:
                            </label>
                            <textarea class="form-control mb-3" name="Certificate_of_analysis"
                                id="Certificate_of_analysis" rows="6"
                                required><?php echo $data["Certificate_of_analysis"] ?></textarea>
                            <label for="Container closure System" class="form-label">
                                <h5>Container closure System</h5>
                                Observations and comments:
                            </label>
                            <textarea class="form-control mb-3" name="Container_closure_System"
                                id="Container_closure_System" rows="6"
                                required<?php echo $data["Container_closure_System"] ?>></textarea>
                            <label for="Stability Study Data" class="form-label">
                                <h5>Stability Study Data</h5>
                                Observations and comments:
                            </label>
                            <textarea class="form-control mb-3" name="Stability_Study_Data" id="Stability_Study_Data"
                                rows="6" required><?php echo $data["Stability_Study_Data"] ?></textarea>
                            <label for="Product Interchangeability data" class="form-label">
                                <h5>Product Interchangeability data</h5>
                                Observations and comments:
                            </label>
                            <textarea class="form-control mb-3" name="Product_Interchangeability_data"
                                id="Product_Interchangeability_data" rows="6"
                                required><?php echo $data["Product_Interchangeability_data"] ?></textarea>
                            <label for="Summary Assessment Report" class="form-label">
                                <h5>Summary Assessment Report</h5>
                                Observations and comments:
                            </label>
                            <textarea class="form-control mb-3" name="Summary_Assessment_Report"
                                id="Summary_Assessment_Report" rows="6"
                                required><?php echo $data["Summary_Assessment_Report"] ?></textarea>
                        </div>
                    </div>
                    <div class="d-grid m-2">
                        <button type="submit" name='submit' class="btn btn-warning">Save</button>
                    </div>
                </div>
            </form>

            <?php elseif($type === "health_supplement") : ?>
            <div class="card-header text-center">
                <?php echo $data['id'] ;?>
            </div>
            <form class="" method="post">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="Show_status" class="form-label">Status</label>
                            <select class="form-select" aria-label="Show_status" id="Show_status" name="Show_status"
                                required>
                                <option value="<?php echo $data['Show_status'] ;?>"><?php echo $data['Show_status'] ;?>
                                </option>
                                <option value="Approval">Approval</option>
                                <option value="Reject">Reject</option>
                                <option value="Waiting">Waiting</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="Product_name" class="form-label">Product name and dosage
                                form</label>
                            <input type="text" class="form-control" id="Product_name" name="Product_name"
                                value="<?php echo $data["Product_name"] ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="supplement_id" class="form-label">Health supplement Application
                                ID</label>
                            <input type="text" class="form-control" id="supplement_id" name="supplement_id"
                                value="<?php echo $data["supplement_id"] ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="Applicant_Details" class="form-label">Applicant Details</label>
                            <input type="text" class="form-control" id="Applicant_Details" name="Applicant_Details"
                                value="<?php echo $data["Applicant_Details"] ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="Category" class="form-label">Category</label>
                            <select class="form-select" aria-label="Category" name="Category" id="Category" required>
                                <option value="<?php echo $data["Category"] ?>"><?php echo $data["Category"] ?></option>
                                <option value="Category I (Nutrient/General claim product)">Category I
                                    (Nutrient/General claim product)</option>
                                <option value="Category II (Functional claim product)">Category II
                                    (Functional
                                    claim product)</option>
                                <option value="Category III (Disease risk reduction Product )">Category III
                                    (Disease risk reduction Product )</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="Manufacturer_Details" class="form-label">Manufacturer
                                Details</label>
                            <textarea class="form-control" id="Manufacturer_Details" rows="3"
                                name="Manufacturer_Details"
                                required><?php echo $data["Manufacturer_Details"] ?></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="Label_Claim" class="form-label">Label Claim</label>
                            <textarea class="form-control" id="Label_Claim" rows="3" name="Label_Claim"
                                required><?php echo $data["Label_Claim"] ?></textarea>
                        </div>
                        <div class="mb-4">
                            <label for="Title_Evidence" class="form-label">Title of Evidence</label>
                            <input type="text" class="form-control" id="Title_Evidence" name="Title_Evidence"
                                value="<?php echo $data["Title_Evidence"] ?>" required>
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
                                        <td><input class="form-check-input" type="checkbox" value="x" id="check1"
                                                name="check1"></td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Scientific opinion from scientific organizations or
                                            regulatory
                                            authorities (Category I & II)</td>
                                        <td><input class="form-check-input" type="checkbox" value="x" id="check2"
                                                name="check2"></td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Documented history if use: Classical texts,
                                            published
                                            documents from
                                            scholar or expert that reports the traditional use of the
                                            ingredient
                                            concerned.</td>
                                        <td><input class="form-check-input" type="checkbox" value="x" id="check3"
                                                name="check3"></td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Scientific evidence from animal studies-Document
                                            history
                                            of use,
                                            evidence from published scientific review.</td>
                                        <td><input class="form-check-input" type="checkbox" value="x" id="check4"
                                                name="check4"></td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Meta-analysis/peer reviewed/literature reviewed</td>
                                        <td><input class="form-check-input" type="checkbox" value="x" id="check5"
                                                name="check5"></td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Scientific evidence from human intervention study on
                                            ingredient or
                                            product (Category III)</td>
                                        <td><input class="form-check-input" type="checkbox" value="x" id="check6"
                                                name="check6"></td>
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
                                    <option value="<?php echo $data["Verification_Evidence"] ?>">
                                        <?php echo $data["Verification_Evidence"] ?></option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="col-9">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">URL of the website used
                                        to
                                        verify</span>
                                    <input type="text" class="form-control" aria-label="URL"
                                        aria-describedby="basic-addon1" name="URL" id="URL"
                                        value="<?php echo $data["link"] ?>" required>
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
                                    <option value="<?php echo $data["evidence_support_label"] ?>">
                                        <?php echo $data["evidence_support_label"] ?></option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="conclusion" class="form-label">Mention Briefly the conclusion of
                                evidence to support claim (For satisfactory evidence only)</label>
                            <textarea class="form-control" id="conclusion" rows="6" name="conclusion"
                                required><?php echo $data["conclusion"] ?></textarea>
                        </div>

                    </div>


                    <div class="d-grid m-3">
                        <button type="submit" name='submit' class="btn btn-warning">Save</button>
                    </div>
                </div>
        </div>


        </form>

        <?php elseif($type === "follow_up") : ?>
        <div class="card-header text-center">
            <?php echo $data['id'] ;?>
        </div>
        <form class="" method="post">
            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="Show_status" class="form-label">Status</label>
                        <select class="form-select" aria-label="Show_status" id="Show_status" name="Show_status"
                            required>
                            <option value="<?php echo $data['Show_status'] ;?>"><?php echo $data['Show_status'] ;?>
                            </option>
                            <option value="Approval">Approval</option>
                            <option value="Reject">Reject</option>
                            <option value="Waiting">Waiting</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="Type_of_assessment" class="form-label">Type of assessment</label>
                        <select class="form-select" aria-label="Type_of_assessment" id="Type_of_assessment"
                            name="Type_of_assessment" required>
                            <option value="<?php echo $data['Type_of_assessment'] ;?>">
                                <?php echo $data['Type_of_assessment'] ;?></option>
                            <option value="Full Dossier Assessment">Full Dossier Assessment</option>
                            <option value="Fast Tract Assessment">Fast Track Assessment</option>
                            <option value="Health Supplement Assessment">Health Supplement Assessment
                            </option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="Dossier_ID" class="form-label">Dossier ID</label>
                        <input type="text" class="form-control" id="Dossier_ID" name="Dossier_ID"
                            value="<?php echo $data["Dossier_ID"] ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="Assesso_Name" class="form-label">Assessor Name</label>
                        <input type="text" class="form-control" id="Assesso_Name" name="Assesso_Name"
                            value="<?php echo $data["Assesso_Name"] ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="date_fast" class="form-label">Date of Assessment</label>
                        <input type="date" class="form-control" id="date_fast" name="date_fast"
                            value="<?php echo $data["date_fast"] ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="Communication_round" class="form-label">Communication round</label>
                        <select class="form-select" aria-label="Communication_round" name="Communication_round"
                            id="Communication_round" required>
                            <option value="<?php echo $data["Communication_round"] ?>">
                                <?php echo $data["Communication_round"] ?></option>
                            <option value="First">First</option>
                            <option value="Second">Second</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="Generic_name" class="form-label">Generic name</label>
                        <input type="text" class="form-control" id="Generic_name" name="Generic_name"
                            value="<?php echo $data["Generic_name"] ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="Brand_name" class="form-label">Brand name</label>
                        <input type="text" class="form-control" id="Brand_name" name="Brand_name"
                            value="<?php echo $data["Brand_name"] ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="Strength" class="form-label">Strength</label>
                        <input type="text" class="form-control" id="Strength" name="Strength"
                            value="<?php echo $data["Strength"] ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="Manufacturer" class="form-label">Manufacturer</label>
                        <input type="text" class="form-control" id="Manufacturer" name="Manufacturer"
                            value="<?php echo $data["Manufacturer"] ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="Missing_documents" class="form-label">List the Missing
                            documents/discrepancies communicated</label>
                        <textarea class="form-control" id="Missing_documents" rows="10" name="Missing_documents"
                            required><?php echo $data["Missing_documents"] ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="Query_responses" class="form-label">Observations in the submitted query
                            responses</label>
                        <textarea class="form-control" id="Query_responses" rows="10" name="Query_responses"
                            required><?php echo $data["Query_responses"] ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="Inference" class="form-label">Inference</label>
                        <textarea class="form-control" id="Inference" rows="5" name="Inference"
                            required><?php echo $data["Inference"] ?></textarea>
                    </div>

                    <div class="d-grid">
                        <button type="submit" name='submit' class="btn btn-warning">Submit</button>
                    </div>
                </div>
            </div>


        </form>
        <?php elseif($type === "post_approval") : ?>
        <div class="card-header text-center">
            <?php echo $data['id'] ;?>
        </div>
        <form class="" method="post">
            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="Show_status" class="form-label">Status</label>
                        <select class="form-select" aria-label="Show_status" id="Show_status" name="Show_status"
                            required>
                            <option value="<?php echo $data['Show_status'] ;?>"><?php echo $data['Show_status'] ;?>
                            </option>
                            <option value="Approval">Approval</option>
                            <option value="Reject">Reject</option>
                            <option value="Waiting">Waiting</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="Type_of_assessment" class="form-label">Type of assessment</label>
                        <select class="form-select" aria-label="Type_of_assessment" id="Type_of_assessment"
                            name="Type_of_assessment" required>
                            <option value="<?php echo $data['Type_of_assessment'] ;?>">
                                <?php echo $data['Type_of_assessment'] ;?></option>
                            <option value="Full Dossier Assessment">Full Dossier Assessment</option>
                            <option value="Fast Tract Assessment">Fast Track Assessment</option>
                            <option value="Health Supplement Assessment">Health Supplement Assessment
                            </option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="Dossier_ID" class="form-label">Dossier ID</label>
                        <input type="text" class="form-control" id="Dossier_ID" name="Dossier_ID"
                            value="<?php echo $data["Dossier_ID"] ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="Assesso_Name" class="form-label">Assessor Name</label>
                        <input type="text" class="form-control" id="Assesso_Name" name="Assesso_Name"
                            value="<?php echo $data["Assesso_Name"] ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="Type_change" class="form-label">Type of change</label>
                        <input type="text" class="form-control" id="Type_change" name="Type_change"
                            value="<?php echo $data["Type_change"] ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="date_fast" class="form-label">Date of Assessment</label>
                        <input type="date" class="form-control" id="date_fast" name="date_fast"
                            value="<?php echo $data["date_fast"] ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="Generic_name" class="form-label">Generic name</label>
                        <input type="text" class="form-control" id="Generic_name" name="Generic_name"
                            value="<?php echo $data["Generic_name"] ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="Brand_name" class="form-label">Brand name</label>
                        <input type="text" class="form-control" id="Brand_name" name="Brand_name"
                            value="<?php echo $data["Brand_name"] ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="Strength" class="form-label">Strength</label>
                        <input type="text" class="form-control" id="Strength" name="Strength"
                            value="<?php echo $data["Strength"] ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="Manufacturer" class="form-label">Manufacturer</label>
                        <input type="text" class="form-control" id="Manufacturer" name="Manufacturer"
                            value="<?php echo $data["Manufacturer"] ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="fulfilled_conditions" class="form-label">List the documents and
                            conditions to be fulfilled for the proposed variation</label>
                        <textarea class="form-control" id="fulfilled_conditions" rows="10" name="fulfilled_conditions"
                            required><?php echo $data["fulfilled_conditions"] ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="Justification" class="form-label">Justification for the
                            variation</label>
                        <textarea class="form-control" id="Justification" rows="10" name="Justification"
                            required><?php echo $data["Justification"] ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="Inference" class="form-label">Inference</label>
                        <textarea class="form-control" id="Inference" rows="10" name="Inference"
                            required><?php echo $data["Inference"] ?></textarea>
                    </div>

                    <div class="d-grid">
                        <button type="submit" name='submit' class="btn btn-warning">Submit</button>
                    </div>
                </div>
            </div>

        </form>

        <?php endif; ?>

    </div>

</div>

</div>
</div>
</div>
</body>

</html>