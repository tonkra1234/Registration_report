<?php

$Dossier_ID = mysqli_real_escape_string($conn,$_POST['Dossier_ID']);
$_SESSION['Dossier_ID'] = $Dossier_ID;

$Generic_name = mysqli_real_escape_string($conn,$_POST['Generic_name']);
$_SESSION['Generic_name'] = $Generic_name;

$Brand_name = mysqli_real_escape_string($conn,$_POST['Brand_name']);
$_SESSION['Brand_name'] = $Brand_name;

$Class = mysqli_real_escape_string($conn,$_POST['Class']);
$_SESSION['Class'] = $Class;

$Group_full = mysqli_real_escape_string($conn,$_POST['Group_full']);
$_SESSION['Group_full'] = $Group_full;

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

$Quality = mysqli_real_escape_string($conn,$_POST['Quality']);
$_SESSION['Quality'] = $Quality;

$Sale_certificate = mysqli_real_escape_string($conn,$_POST['Sale_certificate']);
$_SESSION['Sale_certificate'] = $Sale_certificate;

$Manufacturing_Details = mysqli_real_escape_string($conn,$_POST['Manufacturing_Details']);
$_SESSION['Manufacturing_Details'] = $Manufacturing_Details;

$Configurations = mysqli_real_escape_string($conn,$_POST['Configurations']);
$_SESSION['Configurations'] = $Configurations;

$Sample = mysqli_real_escape_string($conn,$_POST['Sample']);
$_SESSION['Sample'] = $Sample;

$Price_structure = mysqli_real_escape_string($conn,$_POST['Price_structure']);
$_SESSION['Price_structure'] = $Price_structure;

$Executive_Summary = mysqli_real_escape_string($conn,$_POST['Executive_Summary']);
$_SESSION['Executive_Summary'] = $Executive_Summary;

$Essential_Principles = mysqli_real_escape_string($conn,$_POST['Essential_Principles']);
$_SESSION['Essential_Principles'] = $Essential_Principles;

$Device_description = mysqli_real_escape_string($conn,$_POST['Device_description']);
$_SESSION['Device_description'] = $Device_description;

$Performance = mysqli_real_escape_string($conn,$_POST['Performance']);
$_SESSION['Performance'] = $Performance;

$Clinical_Evidences = mysqli_real_escape_string($conn,$_POST['Clinical_Evidences']);
$_SESSION['Clinical_Evidences'] = $Clinical_Evidences;

$Labelling = mysqli_real_escape_string($conn,$_POST['Labelling']);
$_SESSION['Labelling'] = $Labelling;

$Risk = mysqli_real_escape_string($conn,$_POST['Risk']);
$_SESSION['Risk'] = $Risk;

$Recommended_issuance = mysqli_real_escape_string($conn,$_POST['Recommended_issuance']);
$_SESSION['Recommended_issuance'] = $Recommended_issuance;

$Missing_document = mysqli_real_escape_string($conn,$_POST['Missing_document']);
$_SESSION['Missing_document'] = $Missing_document;

$Show_status = mysqli_real_escape_string($conn,$_POST['Show_status']);
$_SESSION['Show_status'] = $Show_status;


?>