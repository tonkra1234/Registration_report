<?php

$Show_status = $_POST['Show_status'];
$_SESSION['Show_status'] = $Show_status;

$Product_name = mysqli_real_escape_string($conn,$_POST['Product_name']);
$_SESSION['Product_name'] = $Product_name;

$supplement_id = $_POST['supplement_id'];
$_SESSION['supplement_id'] = $supplement_id;

$Applicant_Details = mysqli_real_escape_string($conn,$_POST['Applicant_Details']);
$_SESSION['Applicant_Details'] = $Applicant_Details;

$Category = mysqli_real_escape_string($conn,$_POST['Category']);
$_SESSION['Category'] = $Category;

$Manufacturer_Details = mysqli_real_escape_string($conn,$_POST['Manufacturer_Details']);
$_SESSION['Manufacturer_Details'] = $Manufacturer_Details;

$Label_Claim = mysqli_real_escape_string($conn,$_POST['Label_Claim']);
$_SESSION['Label_Claim'] = $Label_Claim;

$Title_Evidence = mysqli_real_escape_string($conn,$_POST['Title_Evidence']);
$_SESSION['Title_Evidence'] = $Title_Evidence;

for ($i=1; $i < 7; $i++) { 

    ${'check'.$i} = $_POST['check'."$i"];
    $_SESSION['check'."$i"] =${'check'.$i};

}

$Verification_Evidence = mysqli_real_escape_string($conn,$_POST['Verification_Evidence']);
$_SESSION['Verification_Evidence'] = $Verification_Evidence;

$URL = mysqli_real_escape_string($conn,$_POST['URL']);
$_SESSION['URL'] = $URL;

$evidence_support_label = mysqli_real_escape_string($conn,$_POST['evidence_support_label']);
$_SESSION['evidence_support_label'] = $evidence_support_label;

$conclusion = mysqli_real_escape_string($conn,$_POST['conclusion']);
$_SESSION['conclusion'] = $conclusion;


?>