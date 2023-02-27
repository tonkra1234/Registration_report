<?php

$Dossier_ID = mysqli_real_escape_string($conn,$_POST['Dossier_ID']);
$_SESSION['Dossier_ID'] = $Dossier_ID;

$Generic_name = mysqli_real_escape_string($conn,$_POST['Generic_name']);
$_SESSION['Generic_name'] = $Generic_name;

$Brand_name = mysqli_real_escape_string($conn,$_POST['Brand_name']);
$_SESSION['Brand_name'] = $Brand_name;

$Class = mysqli_real_escape_string($conn,$_POST['Class']);
$_SESSION['Class'] = $Class;

$Group_renewal = mysqli_real_escape_string($conn,$_POST['Group_renewal']);
$_SESSION['Group_renewal'] = $Group_renewal;

$Name_Applicant_Market = mysqli_real_escape_string($conn,$_POST['Name_Applicant_Market']);
$_SESSION['Name_Applicant_Market'] = $Name_Applicant_Market;

$Registration_Number = mysqli_real_escape_string($conn,$_POST['Registration_Number']);
$_SESSION['Registration_Number'] = $Registration_Number;

$Contact_Details = mysqli_real_escape_string($conn,$_POST['Contact_Details']);
$_SESSION['Contact_Details'] = $Contact_Details;

$Name_Manufacturer = mysqli_real_escape_string($conn,$_POST['Name_Manufacturer']);
$_SESSION['Name_Manufacturer'] = $Name_Manufacturer;

$date_fast = mysqli_real_escape_string($conn,$_POST['date_fast']);
$_SESSION['date_fast'] = $date_fast;

$Receipt_Number = mysqli_real_escape_string($conn,$_POST['Receipt_Number']);
$_SESSION['Receipt_Number'] = $Receipt_Number;

$Email = mysqli_real_escape_string($conn,$_POST['Email']);
$_SESSION['Email'] = $Email;

$Letter_of_Authorization = mysqli_real_escape_string($conn,$_POST['Letter_of_Authorization']);
$_SESSION['Letter_of_Authorization'] = $Letter_of_Authorization;

$Declaration_Letter = mysqli_real_escape_string($conn,$_POST['Declaration_Letter']);
$_SESSION['Declaration_Letter'] = $Declaration_Letter;

$Initial_Registration = mysqli_real_escape_string($conn,$_POST['Initial_Registration']);
$_SESSION['Initial_Registration'] = $Initial_Registration;

$Specimen_package = mysqli_real_escape_string($conn,$_POST['Specimen_package']);
$_SESSION['Specimen_package'] = $Specimen_package;

$Recommended_issuance = mysqli_real_escape_string($conn,$_POST['Recommended_issuance']);
$_SESSION['Recommended_issuance'] = $Recommended_issuance;

$Missing_document = mysqli_real_escape_string($conn,$_POST['Missing_document']);
$_SESSION['Missing_document'] = $Missing_document;

$Show_status = mysqli_real_escape_string($conn,$_POST['Show_status']);
$_SESSION['Show_status'] = $Show_status;


?>