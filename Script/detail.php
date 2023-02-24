<?php

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:../Login/login_form.php');
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
                            <th class="w-50 text-center">Registration type</th>
                            <td class="w-50 text-center"><?php echo $data['Registration_Type'] ;?></td>
                        </tr>
                        <tr>
                            <th class="w-50 text-center">Dossier ID</th>
                            <td class="w-50 text-center"><?php echo $data['Dossier_ID'];?></td>
                        </tr>
                        <tr>
                            <th class="w-50 text-center">Assessor Name</th>
                            <td class="w-50 text-center"><?php echo $data['Assesso_Name'];?></td>
                        </tr>
                        <tr>
                            <th class="w-50 text-center">Date of assessment</th>
                            <td class="w-50 text-center"><?php echo $data['Date_fast'];?></td>
                        </tr>
                        <tr>
                            <th class="w-50 text-center">Generic name</th>
                            <td class="w-50 text-center"><?php echo $data['Generic_name'];?></td>
                        </tr>
                        <tr>
                            <th class="w-50 text-center">Brand name</th>
                            <td class="w-50 text-center"><?php echo $data['Brand_name'];?></td>
                        </tr>
                        <tr>
                            <th class="w-50 text-center">Strength</th>
                            <td class="w-50 text-center"><?php echo $data['Strength'];?></td>
                        </tr>
                        <tr>
                            <th class="w-50 text-center">Manufacturer</th>
                            <td class="w-50 text-center"><?php echo $data['Manufacturer'];?></td>
                        </tr>
                        <tr>
                            <th class="w-50 text-center">Observation</th>
                            <td class="w-50"><?php echo $data['Observation'];?></td>
                        </tr>
                        <tr>
                            <th class="w-50 text-center">Inference</th>
                            <td class="w-50"><?php echo $data['Inference'];?></td>
                        </tr>
                        <tr>
                            <th class="w-50 text-center">Status</th>
                            <td class="w-50 text-center"><?php echo $data['Show_status'];?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="card-footer text-muted row">
                <div class="col-6 d-grid">
                    <a type="button" class="btn btn-warning"
                        href="./edit.php?id=<?php echo $data["id"];?>&type=fast_track">Edit</a>
                </div>
                <div class="col-6 d-grid">
                    <a type="button" class="btn btn-danger">Delete</a>
                </div>
            </div>
            <?php elseif($type === "full_track") : ?>
            <div class="card-header text-center">
                <?php echo $data['id'] ;?>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-hover">
                    <tbody>
                        <tr>
                            <th class="w-50 text-center">Assessor Name</th>
                            <td class="w-50 text-center"><?php echo $data['Assesso_Name'] ;?></td>
                        </tr>
                        <tr>
                            <th class="w-50 text-center">Qualification</th>
                            <td class="w-50 text-center"><?php echo $data['Qualification'];?></td>
                        </tr>
                        <tr>
                            <th class="w-50 text-center">Dossier ID</th>
                            <td class="w-50 text-center"><?php echo $data['Dossier_ID'];?></td>
                        </tr>
                        <tr>
                            <th class="w-50 text-center">Date of assessment</th>
                            <td class="w-50 text-center"><?php echo $data['date_fast'];?></td>
                        </tr>
                        <tr>
                            <th class="w-50 text-center">Application Form</th>
                            <td class="w-50 text-center"><?php echo $data['Application_Form_select'];?></td>
                        </tr>
                        <tr>
                            <th class="w-50 text-center">Letter of Authorization</th>
                            <td class="w-50 text-center">
                                <?php echo $data['Letter_of_Authorization_select'];?></td>
                        </tr>
                        <tr>
                            <th class="w-50 text-center">Manufacturing License</th>
                            <td class="w-50 text-center"><?php echo $data['Manufacturing_License_select'];?>
                            </td>
                        </tr>
                        <tr>
                            <th class="w-50 text-center">cGMP License</th>
                            <td class="w-50 text-center"><?php echo $data['cGMP_License_select'];?></td>
                        </tr>
                        <tr>
                            <th class="w-50 text-center">CoPP</th>
                            <td class="w-50"><?php echo $data['CoPP_select'];?></td>
                        </tr>
                        <tr>
                            <th class="w-50 text-center">Price Structure Site</th>
                            <td class="w-50"><?php echo $data['Price_Structure_select'];?></td>
                        </tr>
                        <tr>
                            <th class="w-50 text-center">Site Master file</th>
                            <td class="w-50"><?php echo $data['Site_Master'];?></td>
                        </tr>
                        <tr>
                            <th class="w-50 text-center">Product Sample assessment Result</th>
                            <td class="w-50"><?php echo $data['Product_Sample'];?></td>
                        </tr>
                        <tr>
                            <th class="w-50 text-center">Name of API</th>
                            <td class="w-50"><?php echo $data['Name_of_API'];?></td>
                        </tr>
                        <tr>
                            <th class="w-50 text-center">Reference Pharmacopoeia</th>
                            <td class="w-50"><?php echo $data['Pharmacopoeia_substance'];?></td>
                        </tr>
                        <tr>
                            <th class="w-50 text-center">Name of Excipients</th>
                            <td class="w-50"><?php echo $data['Excipients'];?></td>
                        </tr>
                        <tr>
                            <th class="w-50 text-center">Name and address of Manufacturer</th>
                            <td class="w-50"><?php echo $data['Address_of_Manufacturer'];?></td>
                        </tr>
                        <tr>
                            <th class="w-50 text-center">Certificate of Analysis of API and Excipients</th>
                            <td class="w-50"><?php echo $data['Certificate_Excipients'];?></td>
                        </tr>
                        <tr>
                            <th class="w-50 text-center">Brand Name</th>
                            <td class="w-50"><?php echo $data['Brand_Name'];?></td>
                        </tr>
                        <tr>
                            <th class="w-50 text-center">Generic Name</th>
                            <td class="w-50"><?php echo $data['Generic_Name'];?></td>
                        </tr>
                        <tr>
                            <th class="w-50 text-center">Description of the Drug product</th>
                            <td class="w-50"><?php echo $data['Description_drug'];?></td>
                        </tr>
                        <tr>
                            <th class="w-50 text-center">Composition</th>
                            <td class="w-50"><?php echo $data['Composition'];?></td>
                        </tr>
                        <tr>
                            <th class="w-50 text-center">Reference Pharmacopoeia</th>
                            <td class="w-50"><?php echo $data['Pharmacopoeia_product'];?></td>
                        </tr>
                        <tr>
                            <th class="w-50 text-center">In-House Specification Method of Analysis</th>
                            <td class="w-50"><?php echo $data['In_House_Specification'];?></td>
                        </tr>
                        <tr>
                            <th class="w-50 text-center">Manufacturing Process</th>
                            <td class="w-50"><?php echo $data['Manufacturing_Process'];?></td>
                        </tr>
                        <tr>
                            <th class="w-50 text-center">Certificate of analysis of Drug Product</th>
                            <td class="w-50"><?php echo $data['Certificate_of_analysis'];?></td>
                        </tr>
                        <tr>
                            <th class="w-50 text-center">Container closure System</th>
                            <td class="w-50"><?php echo $data['Container_closure_System'];?></td>
                        </tr>
                        <tr>
                            <th class="w-50 text-center">Stability Study Data</th>
                            <td class="w-50"><?php echo $data['Stability_Study_Data'];?></td>
                        </tr>
                        <tr>
                            <th class="w-50 text-center">Product Interchangeability data</th>
                            <td class="w-50"><?php echo $data['Product_Interchangeability_data'];?></td>
                        </tr>
                        <tr>
                            <th class="w-50 text-center">Summary Assessment Report</th>
                            <td class="w-50"><?php echo $data['Summary_Assessment_Report'];?></td>
                        </tr>
                        <tr>
                            <th class="w-50 text-center">Status</th>
                            <td class="w-50 text-center"><?php echo $data['Show_status'];?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="card-footer text-muted row">
                <div class="col-6 d-grid">
                    <a type="button" class="btn btn-warning"
                        href="./edit.php?id=<?php echo $data["id"];?>&type=full_track">Edit</a>
                </div>
                <div class="col-6 d-grid">
                    <a type="button" class="btn btn-danger">Delete</a>
                </div>
            </div>
            <?php elseif($type === "health_supplement") : ?>
            <div class="card-header text-center">
                <?php echo $data['id'] ;?>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-hover">
                    <tbody>
                        <tr>
                            <th class="w-50 text-center">Product name and dosage form</th>
                            <td class="w-50 text-center"><?php echo $data['Product_name'] ;?></td>
                        </tr>
                        <tr>
                            <th class="w-50 text-center">Health supplement Application ID</th>
                            <td class="w-50 text-center"><?php echo $data['supplement_id'];?></td>
                        </tr>
                        <tr>
                            <th class="w-50 text-center">Applicant Details</th>
                            <td class="w-50 text-center"><?php echo $data['Applicant_Details'];?></td>
                        </tr>
                        <tr>
                            <th class="w-50 text-center">Manufacturer Details</th>
                            <td class="w-50 text-center"><?php echo $data['Manufacturer_Details'];?></td>
                        </tr>
                        <tr>
                            <th class="w-50 text-center">Category</th>
                            <td class="w-50 text-center"><?php echo $data['Category'];?></td>
                        </tr>
                        <tr>
                            <th class="w-50 text-center">Label Claim</th>
                            <td class="w-50 text-center">
                                <?php echo $data['Label_Claim'];?></td>
                        </tr>
                        <tr>
                            <th class="w-50 text-center">Title of Evidence</th>
                            <td class="w-50 text-center"><?php echo $data['Title_Evidence'];?>
                            </td>
                        </tr>
                        <tr>
                            <th class="w-80 text-center">Authoritative reference texts</th>
                            <td class="w-20 text-center"><?php echo $data['check1'];?>
                            </td>
                        </tr>
                        <tr>
                            <th class="w-80 text-center">Scientific opinion from scientific organizations
                            </th>
                            <td class="w-20 text-center"><?php echo $data['check2'];?>
                            </td>
                        </tr>
                        <tr>
                            <th class="w-80 text-center">Classical texts, published documents from scholar
                                or expert</th>
                            <td class="w-20 text-center"><?php echo $data['check3'];?>
                            </td>
                        </tr>
                        <tr>
                            <th class="w-80 text-center">Scientific evidence from animal studies-Document
                                history</th>
                            <td class="w-20 text-center"><?php echo $data['check4'];?>
                            </td>
                        </tr>
                        <tr>
                            <th class="w-80 text-center">Meta-analysis/peer reviewed/literature reviewed
                            </th>
                            <td class="w-20 text-center"><?php echo $data['check5'];?>
                            </td>
                        </tr>
                        <tr>
                            <th class="w-80 text-center">Scientific evidence from human intervention study
                                on ingredient</th>
                            <td class="w-20 text-center"><?php echo $data['check6'];?>
                            </td>
                        </tr>
                        <th class="w-50 text-center">Verification of Evidence</th>
                        <td class="w-50 text-center"><?php echo $data['Verification_Evidence'];?></td>
                        </tr>
                        <tr>
                            <th class="w-50 text-center">Does the evidence satisfactorily support label
                                claim</th>
                            <td class="w-50 text-center"><?php echo $data['evidence_support_label'];?></td>
                        </tr>
                        <tr>
                            <th class="w-50 text-center">Mention Briefly the conclusion of evidence</th>
                            <td class="w-50"><?php echo $data['conclusion'];?></td>
                        </tr>
                        <tr>
                            <th class="w-50 text-center">Status</th>
                            <td class="w-50 text-center"><?php echo $data['Show_status'];?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="card-footer text-muted row">
                <div class="col-6 d-grid">
                    <a type="button" class="btn btn-warning"
                        href="./edit.php?id=<?php echo $data["id"];?>&type=health_supplement">Edit</a>
                </div>
                <div class="col-6 d-grid">
                    <a type="button" class="btn btn-danger">Delete</a>
                </div>
            </div>
            <?php elseif($type === "follow_up") : ?>
            <div class="card-header text-center">
                <?php echo $data['id'] ;?>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-hover">
                    <tbody>
                        <tr>
                            <th class="w-50 text-center">Dossier ID</th>
                            <td class="w-50 text-center"><?php echo $data['Dossier_ID'];?></td>
                        </tr>
                        <tr>
                            <th class="w-50 text-center">Assessor Name</th>
                            <td class="w-50 text-center"><?php echo $data['Assesso_Name'];?></td>
                        </tr>
                        <tr>
                            <th class="w-50 text-center">Type of assessment</th>
                            <td class="w-50 text-center"><?php echo $data['Type_of_assessment'];?></td>
                        </tr>
                        <tr>
                            <th class="w-50 text-center">Date of assessment</th>
                            <td class="w-50 text-center"><?php echo $data['date_fast'];?></td>
                        </tr>
                        <tr>
                            <th class="w-50 text-center">Communication round</th>
                            <td class="w-50 text-center"><?php echo $data['Communication_round'];?></td>
                        </tr>
                        <tr>
                            <th class="w-50 text-center">Generic name</th>
                            <td class="w-50 text-center"><?php echo $data['Generic_name'];?></td>
                        </tr>
                        <tr>
                            <th class="w-50 text-center">Brand name</th>
                            <td class="w-50 text-center"><?php echo $data['Brand_name'];?></td>
                        </tr>
                        <tr>
                            <th class="w-50 text-center">Strength</th>
                            <td class="w-50 text-center"><?php echo $data['Strength'];?></td>
                        </tr>
                        <tr>
                            <th class="w-50 text-center">Manufacturer</th>
                            <td class="w-50 text-center"><?php echo $data['Manufacturer'];?></td>
                        </tr>
                        <tr>
                            <th class="w-50 text-center">List the Missing documents/discrepancies
                                communicated</th>
                            <td class="w-50"><?php echo $data['Missing_documents'];?></td>
                        </tr>
                        <tr>
                            <th class="w-50 text-center">Observations in the submitted query responses</th>
                            <td class="w-50"><?php echo $data['Query_responses'];?></td>
                        </tr>
                        <tr>
                            <th class="w-50 text-center">Inference</th>
                            <td class="w-50"><?php echo $data['Inference'];?></td>
                        </tr>
                        <tr>
                            <th class="w-50 text-center">Status</th>
                            <td class="w-50 text-center"><?php echo $data['Show_status'];?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="card-footer text-muted row">
                <div class="col-6 d-grid">
                    <a type="button" class="btn btn-warning"
                        href="./edit.php?id=<?php echo $data["id"];?>&type=follow_up">Edit</a>
                </div>
                <div class="col-6 d-grid">
                    <a type="button" class="btn btn-danger">Delete</a>
                </div>
            </div>
            <?php elseif($type === "post_approval") : ?>
            <div class="card-header text-center">
                <?php echo $data['id'] ;?>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-hover">
                    <tbody>
                        <tr>
                            <th class="w-50 text-center">Dossier ID</th>
                            <td class="w-50 text-center"><?php echo $data['Dossier_ID'];?></td>
                        </tr>
                        <tr>
                            <th class="w-50 text-center">Assessor Name</th>
                            <td class="w-50 text-center"><?php echo $data['Assesso_Name'];?></td>
                        </tr>
                        <tr>
                            <th class="w-50 text-center">Type of assessment</th>
                            <td class="w-50 text-center"><?php echo $data['Type_of_assessment'];?></td>
                        </tr>
                        <tr>
                            <th class="w-50 text-center">Date of assessment</th>
                            <td class="w-50 text-center"><?php echo $data['date_fast'];?></td>
                        </tr>
                        <tr>
                            <th class="w-50 text-center">Type of change</th>
                            <td class="w-50 text-center"><?php echo $data['Type_change'];?></td>
                        </tr>
                        <tr>
                            <th class="w-50 text-center">Generic name</th>
                            <td class="w-50 text-center"><?php echo $data['Generic_name'];?></td>
                        </tr>
                        <tr>
                            <th class="w-50 text-center">Brand name</th>
                            <td class="w-50 text-center"><?php echo $data['Brand_name'];?></td>
                        </tr>
                        <tr>
                            <th class="w-50 text-center">Strength</th>
                            <td class="w-50 text-center"><?php echo $data['Strength'];?></td>
                        </tr>
                        <tr>
                            <th class="w-50 text-center">Manufacturer</th>
                            <td class="w-50 text-center"><?php echo $data['Manufacturer'];?></td>
                        </tr>
                        <tr>
                            <th class="w-50 text-center">List the documents and conditions to be fulfilled for
                                the proposed variation</th>
                            <td class="w-50"><?php echo $data['fulfilled_conditions'];?></td>
                        </tr>
                        <tr>
                            <th class="w-50 text-center">Justification for the variation</th>
                            <td class="w-50"><?php echo $data['Justification'];?></td>
                        </tr>
                        <tr>
                            <th class="w-50 text-center">Inference</th>
                            <td class="w-50"><?php echo $data['Inference'];?></td>
                        </tr>
                        <tr>
                            <th class="w-50 text-center">Status</th>
                            <td class="w-50 text-center"><?php echo $data['Show_status'];?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="card-footer text-muted row">
                <div class="col-6 d-grid">
                    <a type="button" class="btn btn-warning"
                        href="./edit.php?id=<?php echo $data["id"];?>&type=post_approval">Edit</a>
                </div>
                <div class="col-6 d-grid">
                    <a type="button" class="btn btn-danger">Delete</a>
                </div>
            </div>
            <?php endif; ?>

        </div>

    </div>
</div>
</div>
</div>
</body>

</html>