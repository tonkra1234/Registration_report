<?php

$Show_status = $_SESSION['Show_status'];
$_SESSION['Show_status'] = $Show_status;

$Product_name = mysqli_real_escape_string($conn,$_SESSION['Product_name']);
$_SESSION['Product_name'] = $Product_name;

$supplement_id = $_SESSION['supplement_id'];
$_SESSION['supplement_id'] = $supplement_id;

$Applicant_Details = mysqli_real_escape_string($conn,$_SESSION['Applicant_Details']);
$_SESSION['Applicant_Details'] = $Applicant_Details;

$Category = $_SESSION['Category'];
$_SESSION['Category'] = $Category;

$Manufacturer_Details = mysqli_real_escape_string($conn,$_SESSION['Manufacturer_Details']);
$_SESSION['Manufacturer_Details'] = $Manufacturer_Details;

$Label_Claim = mysqli_real_escape_string($conn,$_SESSION['Label_Claim']);
$_SESSION['Label_Claim'] = $Label_Claim;

$Title_Evidence = mysqli_real_escape_string($conn,$_SESSION['Title_Evidence']);
$_SESSION['Title_Evidence'] = $Title_Evidence;

for ($i=1; $i < 7; $i++) { 

    ${'check'.$i} = $_SESSION['check'."$i"];
    $_SESSION['check'."$i"] =${'check'.$i};

}

$Verification_Evidence = mysqli_real_escape_string($conn,$_SESSION['Verification_Evidence']);
$_SESSION['Verification_Evidence'] = $Verification_Evidence;

$URL = mysqli_real_escape_string($conn,$_SESSION['URL']);
$_SESSION['URL'] = $URL;

$evidence_support_label = mysqli_real_escape_string($conn,$_SESSION['evidence_support_label']);
$_SESSION['evidence_support_label'] = $evidence_support_label;

$conclusion = mysqli_real_escape_string($conn,$_SESSION['conclusion']);
$_SESSION['conclusion'] = $conclusion;


?>