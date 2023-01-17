<?php

$Show_status = $_POST['Show_status'];
$_SESSION['Show_status'] = $Show_status;

$Dossier_ID = $_POST['Dossier_ID'];
$_SESSION['Dossier_ID'] = $Dossier_ID;

$Assesso_Name = $_POST['Assesso_Name'];
$_SESSION['Assesso_Name'] = $Assesso_Name;

$date_fast = $_POST['date_fast'];
$_SESSION['date_fast'] = $date_fast;

$Generic_name = mysqli_real_escape_string($conn,$_POST['Generic_name']);
$_SESSION['Generic_name'] = $Generic_name;

$Brand_name = mysqli_real_escape_string($conn,$_POST['Brand_name']);
$_SESSION['Brand_name'] = $Brand_name;

$Strength = $_POST['Strength'];
$_SESSION['Strength'] = $Strength;

$Manufacturer = mysqli_real_escape_string($conn,$_POST['Manufacturer']);
$_SESSION['Manufacturer'] = $Manufacturer;

$Communication_round = $_POST['Communication_round'];
$_SESSION['Communication_round'] = $Communication_round;

$Missing_documents = mysqli_real_escape_string($conn,$_POST['Missing_documents']);
$_SESSION['Missing_documents'] = $Missing_documents;

$Query_responses = mysqli_real_escape_string($conn,$_POST['Query_responses']);
$_SESSION['Query_responses'] = $Query_responses;

$Inference = mysqli_real_escape_string($conn,$_POST['Inference']);
$_SESSION['Inference'] = $Inference;

$Show_status = $_POST['Show_status'];
$_SESSION['Show_status'] = $Show_status;

$Type_of_assessment = $_POST['Type_of_assessment'];
$_SESSION['Type_of_assessment'] = $Type_of_assessment;


?>