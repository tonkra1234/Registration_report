<?php

$Show_status = $_POST['Show_status'];
$_SESSION['Show_status'] = $Show_status;

$Product_name = $_POST['Product_name'];
$_SESSION['Product_name'] = $Product_name;

$supplement_id = $_POST['supplement_id'];
$_SESSION['supplement_id'] = $supplement_id;

$Applicant_Details = $_POST['Applicant_Details'];
$_SESSION['Applicant_Details'] = $Applicant_Details;

$Category = $_POST['Category'];
$_SESSION['Category'] = $Category;

$Manufacturer_Details = $_POST['Manufacturer_Details'];
$_SESSION['Manufacturer_Details'] = $Manufacturer_Details;

$Label_Claim = $_POST['Label_Claim'];
$_SESSION['Label_Claim'] = $Label_Claim;

$Title_Evidence = $_POST['Title_Evidence'];
$_SESSION['Title_Evidence'] = $Title_Evidence;

for ($i=1; $i < 7; $i++) { 

    ${'check'.$i} = $_POST['check'."$i"];
    $_SESSION['check'."$i"] =${'check'.$i};

}

$Verification_Evidence = $_POST['Verification_Evidence'];
$_SESSION['Verification_Evidence'] = $Verification_Evidence;

$URL = $_POST['URL'];
$_SESSION['URL'] = $URL;

$evidence_support_label = $_POST['evidence_support_label'];
$_SESSION['evidence_support_label'] = $evidence_support_label;

$conclusion = $_POST['conclusion'];
$_SESSION['conclusion'] = $conclusion;


?>