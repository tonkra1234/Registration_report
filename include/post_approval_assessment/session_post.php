<?php


$Dossier_ID = $_POST['Dossier_ID'];
$_SESSION['Dossier_ID'] = $Dossier_ID;

$Type_change = $_POST['Type_change'];
$_SESSION['Type_change'] = $Type_change;

$Assesso_Name = $_POST['Assesso_Name'];
$_SESSION['Assesso_Name'] = $Assesso_Name;

$date_fast = $_POST['date_fast'];
$_SESSION['date_fast'] = $date_fast;

$Generic_name = $_POST['Generic_name'];
$_SESSION['Generic_name'] = $Generic_name;

$Brand_name = $_POST['Brand_name'];
$_SESSION['Brand_name'] = $Brand_name;

$Strength = $_POST['Strength'];
$_SESSION['Strength'] = $Strength;

$Manufacturer = $_POST['Manufacturer'];
$_SESSION['Manufacturer'] = $Manufacturer;

$fulfilled_conditions = $_POST['fulfilled_conditions'];
$_SESSION['fulfilled_conditions'] = $fulfilled_conditions;

$Justification = $_POST['Justification'];
$_SESSION['Justification'] = $Justification;

$Inference = $_POST['Inference'];
$_SESSION['Inference'] = $Inference;

$Show_status = $_POST['Show_status'];
$_SESSION['Show_status'] = $Show_status;

$Type_of_assessment = $_POST['Type_of_assessment'];
$_SESSION['Type_of_assessment'] = $Type_of_assessment;


?>