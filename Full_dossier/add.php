<?php

session_start();

if (isset($_POST['submit'])) 
{
    require '../include/full_dossier/session_full.php';
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
                            <a href="add.php" class="nav-link py-3 px-2" title="Full Dossier Assessment"
                                data-bs-toggle="tooltip" data-bs-placement="right"
                                data-bs-original-title="Full Dossier Assessment">
                                <i class="bi bi-pass fs-3"></i>
                            </a>
                        </li>
                        <li>
                            <a href="../Fast_track/add.php" class="nav-link py-3 px-2" data-bs-toggle="tooltip"
                                data-bs-placement="right" title="Fast Track Registration">
                                <i class="bi bi-fast-forward-fill fs-3"></i>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="col-sm p-3 min-vh-100">
                <div class="container">
                    <h2 class="text-center my-3 bg-gradient rounded-pill p-2" style="background-color: #CBCACA;">Full Dossier Registration</h2>
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
                                    <label for="Assesso_Name" class="form-label">Assessor Name</label>
                                    <input type="text" class="form-control" id="Assesso_Name" name="Assesso_Name">
                                </div>
                                <div class="mb-3">
                                    <label for="Qualification" class="form-label">Qualification</label>
                                    <input type="text" class="form-control" id="Qualification"
                                        name="Qualification"></input>
                                </div>
                                <div class="mb-3">
                                    <label for="Dossier_ID" class="form-label">Dossier ID</label>
                                    <input type="text" class="form-control" id="Dossier_ID" name="Dossier_ID">
                                </div>
                                <div class="mb-5">
                                    <label for="date_fast" class="form-label">Date of Assessment</label>
                                    <input type="date" class="form-control" id="date_fast" name="date_fast">
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <label for="date_fast" class="form-label">
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
                                                    <th scope="col" width='100'>SL number</th>
                                                    <th scope="col">Administrative Documents</th>
                                                    <th scope="col">Choice</th>
                                                    <th scope="col">Remarks</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row" class="text-center">1</th>
                                                    <td>Application Form</td>
                                                    <td><select class="form-select" aria-label="Default select example"
                                                            id='select1' name="select1">
                                                            <option selected>Select one</option>
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
                                                            <option value="Missing">Missing</option>
                                                        </select></td>
                                                    <td width="100"><input type="text"></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-center">2</th>
                                                    <td>Letter of Authorization</td>
                                                    <td><select class="form-select" aria-label="Default select example"
                                                            id='select2' name="select2">
                                                            <option selected>Select one</option>
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
                                                            <option value="Missing">Missing</option>
                                                        </select></td>
                                                    <td width="100"><input type="text"></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-center">3</th>
                                                    <td>Manufacturing License</td>
                                                    <td><select class="form-select" aria-label="Default select example"
                                                            id='select3' name="select3">
                                                            <option selected>Select one</option>
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
                                                            <option value="Missing">Missing</option>
                                                        </select></td>
                                                    <td width="100"><input type="text"></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-center">4</th>
                                                    <td>CGMP License</td>
                                                    <td><select class="form-select" aria-label="Default select example"
                                                            id='select4' name="select4">
                                                            <option selected>Select one</option>
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
                                                            <option value="Missing">Missing</option>
                                                        </select></td>
                                                    <td width="100"><input type="text"></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-center">5</th>
                                                    <td>CoPP</td>
                                                    <td><select class="form-select" aria-label="Default select example"
                                                            id='select5' name="select5">
                                                            <option selected>Select one</option>
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
                                                            <option value="Missing">Missing</option>
                                                        </select></td>
                                                    <td><input type="text"></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-center">6</th>
                                                    <td>Price Structure</td>
                                                    <td><select class="form-select" aria-label="Default select example"
                                                            id='select6' name="select6">
                                                            <option selected>Select one</option>
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
                                                            <option value="Missing">Missing</option>
                                                        </select></td>
                                                    <td width="100"><input type="text"></td>
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
                                        <textarea class="form-control" id="Site_Master" name="Site_Master"
                                            rows="6"></textarea>
                                    </div>
                                    <div class="mb-5 input-group">
                                        <span class="input-group-text" id="Product_Sample_assessment">Product Sample
                                            assessment
                                            Result (DRA-D1-WI-17-01):</h5></span>
                                        <select class="form-select" aria-label="Default select example"
                                            id='Product_Sample' name="Product_Sample">
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
                                        <input type="text" class="form-control" name="Name_of_API" id="Name_of_API">
                                    </div>
                                    <div class="mb-3 input-group">
                                        <span class="input-group-text" id="Pharmacopoeia">Reference
                                            Pharmacopoeia:</span>
                                        <input type="text" class="form-control" name="Pharmacopoeia" id="Pharmacopoeia">
                                    </div>
                                    <div class="mb-3 input-group">
                                        <span class="input-group-text" id="Excipients">Name of Excipients:</span>
                                        <textarea class="form-control" name="Excipients" id="Excipients"
                                            rows="3"></textarea>
                                    </div>
                                    <div class="mb-3 input-group">
                                        <span class="input-group-text" id="Address_of_Manufacturer">Name and address of
                                            Manufacturer:</span>
                                        <input type="text" class="form-control" name="Address_of_Manufacturer"
                                            id="Address_of_Manufacturer">
                                    </div>

                                    <label for="Certificate" class="form-label">
                                        <h5>Certificate of Analysis of API and Excipients:</h5>
                                        Observations and comments:
                                    </label>
                                    <textarea class="form-control mb-3" name="Certificate_Excipients"
                                        id="Certificate_Excipients" rows="6"></textarea>

                                    <label for="DRUG PRODUCT" class="form-label">
                                        <h5>Drug Product</h5>
                                    </label>
                                    <div class="mb-3 input-group">
                                        <span class="input-group-text" id="Brand_Name">Brand Name</span>
                                        <input type="text" class="form-control" name="Brand_Name" id="Brand_Name">
                                    </div>
                                    <div class="mb-3 input-group">
                                        <span class="input-group-text" id="Generic_Name">Generic Name</span>
                                        <input type="text" class="form-control" name="Generic_Name" id="Generic_Name">
                                    </div>
                                    <div class="mb-3 input-group">
                                        <span class="input-group-text" id="Description_drug">Description of the Drug
                                            product</span>
                                        <input type="text" class="form-control" name="Description_drug"
                                            id="Description_drug">
                                    </div>
                                    <div class="mb-3 input-group">
                                        <span class="input-group-text" id="Composition">Composition</span>
                                        <textarea class="form-control" name="Composition" id="Composition"
                                            rows="3"></textarea>
                                    </div>
                                    <div class="mb-3 input-group">
                                        <span class="input-group-text" id="Reference_Pharmacopoeia">Reference
                                            Pharmacopoeia</span>
                                        <select class="form-select" aria-label="Default select example"
                                            name="Reference_Pharmacopoeia" id="Reference_Pharmacopoeia">
                                            <option selected>Select one</option>
                                            <option value="BP">BP</option>
                                            <option value="USP">USP</option>
                                            <option value="IP">IP</option>
                                            <option value="Eu.Ph">Eu.Ph</option>
                                            <option value="IH">IH</option>
                                        </select>
                                    </div>
                                    <label for="In-House Specification" class="form-label">
                                        <h5>In-House Specification</h5>
                                        Observations and comments:
                                    </label>
                                    <textarea class="form-control mb-3" name="In-House_Specification"
                                        id="In-House_Specification" rows="6"></textarea>
                                    <label for="Certificate_of_analysis" class="form-label">
                                        <h5>Certificate of analysis of Drug Product</h5>
                                        Observations and comments:
                                    </label>
                                    <textarea class="form-control mb-3" name="Certificate_of_analysis"
                                        id="Certificate_of_analysis" rows="6"></textarea>
                                    <label for="Container closure System" class="form-label">
                                        <h5>Container closure System</h5>
                                        Observations and comments:
                                    </label>
                                    <textarea class="form-control mb-3" name="Container_closure_System"
                                        id="Container_closure_System" rows="6"></textarea>
                                    <label for="Stability Study Data" class="form-label">
                                        <h5>Stability Study Data</h5>
                                        Observations and comments:
                                    </label>
                                    <textarea class="form-control mb-3" name="Stability_Study_Data"
                                        id="Stability_Study_Data" rows="6"></textarea>
                                    <label for="Product Interchangeability data" class="form-label">
                                        <h5>Product Interchangeability data</h5>
                                        Observations and comments:
                                    </label>
                                    <textarea class="form-control mb-3" name="Product_Interchangeability_data"
                                        id="Product_Interchangeability_data" rows="6"></textarea>
                                    <label for="Summary Assessment Report" class="form-label">
                                        <h5>Summary Assessment Report</h5>
                                        Observations and comments:
                                    </label>
                                    <textarea class="form-control mb-3" name="Summary_Assessment_Report"
                                        id="Summary_Assessment_Report" rows="6"></textarea>
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

<script>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })
</script>

</html>