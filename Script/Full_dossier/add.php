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
    require '../../include/full_dossier/session_full.php';
    require '../../include/database/full_Mysql.php';
}

?>
<div class="container-fluid">
            <div class="col-sm p-3 min-vh-100">
                
                <div class="container mt-5">
                    <h2 class="text-center my-3 bg-gradient rounded-pill p-2 border border-3" style="background-color: #FF9E9E;">Full
                        Dossier Registration</h2>
                    <form class="" method="post">
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
                                    <label for="Assesso_Name" class="form-label">Assessor Name</label>
                                    <input type="text" class="form-control" id="Assesso_Name" name="Assesso_Name"
                                        required>
                                </div>
                                <div class="mb-3">
                                    <label for="Qualification" class="form-label">Qualification</label>
                                    <input type="text" class="form-control" id="Qualification" name="Qualification"
                                        required></input>
                                </div>
                                <div class="mb-3">
                                    <label for="Dossier_ID" class="form-label">Dossier ID</label>
                                    <input type="text" class="form-control" id="Dossier_ID" name="Dossier_ID" required>
                                </div>
                                <div class="mb-5">
                                    <label for="date_fast" class="form-label">Date of Assessment</label>
                                    <input type="date" class="form-control" id="date_fast" name="date_fast" required>
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
                                                            <option selected>Select one</option>
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
                                                            <option value="Missing">Missing</option>
                                                        </select></td>
                                                    <td><textarea rows="1" style="width: 100%;" name="text1"
                                                            required></textarea></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-center">2</th>
                                                    <td>Letter of Authorization</td>
                                                    <td><select class="form-select" aria-label="Default select example"
                                                            id='select2' name="select2" required>
                                                            <option selected>Select one</option>
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
                                                            <option value="Missing">Missing</option>
                                                        </select></td>
                                                    <td width="100"><textarea name="text2" rows="1" style="width:100% ;"
                                                            required></textarea></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-center">3</th>
                                                    <td>Manufacturing License</td>
                                                    <td><select class="form-select" aria-label="Default select example"
                                                            id='select3' name="select3" required>
                                                            <option selected>Select one</option>
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
                                                            <option value="Missing">Missing</option>
                                                        </select></td>
                                                    <td width="100"><textarea rows="1" style="width: 100%;" name="text3"
                                                            required></textarea></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-center">4</th>
                                                    <td>cGMP License</td>
                                                    <td><select class="form-select" aria-label="Default select example"
                                                            id='select4' name="select4" required>
                                                            <option selected>Select one</option>
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
                                                            <option value="Missing">Missing</option>
                                                        </select></td>
                                                    <td width="100"><textarea rows="1" style="width: 100%;" name="text4"
                                                            required></textarea></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-center">5</th>
                                                    <td>CoPP</td>
                                                    <td><select class="form-select" aria-label="Default select example"
                                                            id='select5' name="select5" required>
                                                            <option selected>Select one</option>
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
                                                            <option value="Missing">Missing</option>
                                                        </select></td>
                                                    <td><textarea rows="1" style="width: 100%;" name="text5"
                                                            required></textarea></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-center">6</th>
                                                    <td>Price Structure</td>
                                                    <td><select class="form-select" aria-label="Default select example"
                                                            id='select6' name="select6" required>
                                                            <option selected>Select one</option>
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
                                                            <option value="Missing">Missing</option>
                                                        </select></td>
                                                    <td width="100"><textarea rows="1" style="width: 100%;" name="text6"
                                                            required></textarea></td>
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
                                            required></textarea>
                                    </div>
                                    <div class="mb-5 input-group">
                                        <span class="input-group-text" id="Product_Sample_assessment">Product Sample
                                            assessment
                                            Result (DRA-D1-WI-17-01):</h5></span>
                                        <select class="form-select" aria-label="Default select example"
                                            id='Product_Sample' name="Product_Sample" required>
                                            <option selected>Select one</option>
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
                                            required>
                                    </div>
                                    <div class="mb-3 input-group">
                                        <span class="input-group-text" id="Pharmacopoeia">Reference
                                            Pharmacopoeia:</span>
                                        <select class="form-select" aria-label="Default select example"
                                            name="Pharmacopoeia_substance" id="Pharmacopoeia_substance" required>
                                            <option selected>Select one</option>
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
                                            required></textarea>
                                    </div>
                                    <div class="mb-3 input-group">
                                        <span class="input-group-text" id="Address_of_Manufacturer">Name and address of
                                            Manufacturer:</span>
                                        <input type="text" class="form-control" name="Address_of_Manufacturer"
                                            id="Address_of_Manufacturer" required>
                                    </div>

                                    <label for="Certificate" class="form-label">
                                        <h5>Certificate of Analysis of API and Excipients:</h5>
                                        Observations and comments:
                                    </label>
                                    <textarea class="form-control mb-3" name="Certificate_Excipients"
                                        id="Certificate_Excipients" rows="6" required></textarea>

                                    <label for="DRUG PRODUCT" class="form-label">
                                        <h5>Drug Product</h5>
                                    </label>
                                    <div class="mb-3 input-group">
                                        <span class="input-group-text" id="Brand_Name">Brand Name</span>
                                        <input type="text" class="form-control" name="Brand_Name" id="Brand_Name"
                                            required>
                                    </div>
                                    <div class="mb-3 input-group">
                                        <span class="input-group-text" id="Generic_Name">Generic Name</span>
                                        <input type="text" class="form-control" name="Generic_Name" id="Generic_Name"
                                            required>
                                    </div>
                                    <div class="mb-3 input-group">
                                        <span class="input-group-text" id="Description_drug">Description of the Drug
                                            product</span>
                                        <input type="text" class="form-control" name="Description_drug"
                                            id="Description_drug" required>
                                    </div>
                                    <div class="mb-3 input-group">
                                        <span class="input-group-text" id="Composition">Composition</span>
                                        <textarea class="form-control" name="Composition" id="Composition" rows="3"
                                            required></textarea>
                                    </div>
                                    <div class="mb-3 input-group">
                                        <span class="input-group-text" id="Reference_Pharmacopoeia">Reference
                                            Pharmacopoeia</span>
                                        <select class="form-select" aria-label="Default select example"
                                            name="Pharmacopoeia_product" id="Pharmacopoeia_product" required>
                                            <option selected>Select one</option>
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
                                        id="In_House_Specification" rows="6" required></textarea>
                                    <label for="Manufacturing Process" class="form-label">
                                        <h5>Manufacturing Process</h5>
                                        Observations and comments:
                                    </label>
                                    <textarea class="form-control mb-3" name="Manufacturing_Process"
                                        id="Manufacturing_Process" rows="6" required></textarea>
                                    <label for="Certificate_of_analysis" class="form-label">
                                        <h5>Certificate of analysis of Drug Product</h5>
                                        Observations and comments:
                                    </label>
                                    <textarea class="form-control mb-3" name="Certificate_of_analysis"
                                        id="Certificate_of_analysis" rows="6" required></textarea>
                                    <label for="Container closure System" class="form-label">
                                        <h5>Container closure System</h5>
                                        Observations and comments:
                                    </label>
                                    <textarea class="form-control mb-3" name="Container_closure_System"
                                        id="Container_closure_System" rows="6" required></textarea>
                                    <label for="Stability Study Data" class="form-label">
                                        <h5>Stability Study Data</h5>
                                        Observations and comments:
                                    </label>
                                    <textarea class="form-control mb-3" name="Stability_Study_Data"
                                        id="Stability_Study_Data" rows="6" required></textarea>
                                    <label for="Product Interchangeability data" class="form-label">
                                        <h5>Product Interchangeability data</h5>
                                        Observations and comments:
                                    </label>
                                    <textarea class="form-control mb-3" name="Product_Interchangeability_data"
                                        id="Product_Interchangeability_data" rows="6" required></textarea>
                                    <label for="Summary Assessment Report" class="form-label">
                                        <h5>Summary Assessment Report</h5>
                                        Observations and comments:
                                    </label>
                                    <textarea class="form-control mb-3" name="Summary_Assessment_Report"
                                        id="Summary_Assessment_Report" rows="6" required></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="d-grid my-5">
                            <button type="submit" name='submit' class="btn btn-primary">Submit</button>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>
</body>


</html>