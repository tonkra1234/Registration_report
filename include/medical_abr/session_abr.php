<?php

$Dossier_ID = mysqli_real_escape_string($conn,$_POST['Dossier_ID']);
$_SESSION['Dossier_ID'] = $Dossier_ID;

$Generic_name = mysqli_real_escape_string($conn,$_POST['Generic_name']);
$_SESSION['Generic_name'] = $Generic_name;

$Brand_name = mysqli_real_escape_string($conn,$_POST['Brand_name']);
$_SESSION['Brand_name'] = $Brand_name;

$Class = mysqli_real_escape_string($conn,$_POST['Class']);
$_SESSION['Class'] = $Class;

$Group_abr = mysqli_real_escape_string($conn,$_POST['Group_abr']);
$_SESSION['Group_abr'] = $Group_abr;

$Name_Applicant_Market = mysqli_real_escape_string($conn,$_POST['Name_Applicant_Market']);
$_SESSION['Name_Applicant_Market'] = $Name_Applicant_Market;

$Contact_Details = mysqli_real_escape_string($conn,$_POST['Contact_Details']);
$_SESSION['Contact_Details'] = $Contact_Details;

$Name_Manufacturer = mysqli_real_escape_string($conn,$_POST['Name_Manufacturer']);
$_SESSION['Name_Manufacturer'] = $Name_Manufacturer;

$date_fast = mysqli_real_escape_string($conn,$_POST['date_fast']);
$_SESSION['date_fast'] = $date_fast;

$Letter_of_Authorization = mysqli_real_escape_string($conn,$_POST['Letter_of_Authorization']);
$_SESSION['Letter_of_Authorization'] = $Letter_of_Authorization;

$Brief = mysqli_real_escape_string($conn,$_POST['Brief']);
$_SESSION['Brief'] = $Brief;

$Sale_certificate = mysqli_real_escape_string($conn,$_POST['Sale_certificate']);
$_SESSION['Sale_certificate'] = $Sale_certificate;

$Evidences = mysqli_real_escape_string($conn,$_POST['Evidences']);
$_SESSION['Evidences'] = $Evidences;

$Manufacturing_Details = mysqli_real_escape_string($conn,$_POST['Manufacturing_Details']);
$_SESSION['Manufacturing_Details'] = $Manufacturing_Details;

$Configurations = mysqli_real_escape_string($conn,$_POST['Configurations']);
$_SESSION['Configurations'] = $Configurations;

$Sample = mysqli_real_escape_string($conn,$_POST['Sample']);
$_SESSION['Sample'] = $Sample;

$Price_structure = mysqli_real_escape_string($conn,$_POST['Price_structure']);
$_SESSION['Price_structure'] = $Price_structure;

$Evidence_ABR = mysqli_real_escape_string($conn,$_POST['Evidence_ABR']);
$_SESSION['Evidence_ABR'] = $Evidence_ABR;

$Device_description = mysqli_real_escape_string($conn,$_POST['Device_description']);
$_SESSION['Device_description'] = $Device_description;

$Certificate_analysis = mysqli_real_escape_string($conn,$_POST['Certificate_analysis']);
$_SESSION['Certificate_analysis'] = $Certificate_analysis;

$Recommended_issuance = mysqli_real_escape_string($conn,$_POST['Recommended_issuance']);
$_SESSION['Recommended_issuance'] = $Recommended_issuance;

$Missing_document = mysqli_real_escape_string($conn,$_POST['Missing_document']);
$_SESSION['Missing_document'] = $Missing_document;

$Show_status = mysqli_real_escape_string($conn,$_POST['Show_status']);
$_SESSION['Show_status'] = $Show_status;


?>