<?php

$Registration_Type = $_POST['Registration_Type'];
$_SESSION['Registration_Type'] = $Registration_Type;

$Dossier_ID = $_POST['Dossier_ID'];
$_SESSION['Dossier_ID'] = $Dossier_ID;

$Assesso_Name = $_POST['Assesso_Name'];
$_SESSION['Assesso_Name'] = $Assesso_Name;

$Generic_name = mysqli_real_escape_string($conn,$_POST['Generic_name']);
$_SESSION['Generic_name'] = $Generic_name;

$Brand_name = $_POST['Brand_name'];
$_SESSION['Brand_name'] = $Brand_name;

$Strength = $_POST['Strength'];
$_SESSION['Strength'] = $Strength;

$Manufacturer = mysqli_real_escape_string($conn,$_POST['Manufacturer']);
$_SESSION['Manufacturer'] = $Manufacturer;

$date_fast = $_POST['date_fast'];
$_SESSION['date_fast'] = $date_fast;

$Observation = mysqli_real_escape_string($conn,$_POST['Observation']);
$_SESSION['Observation'] = $Observation;

$Inference = mysqli_real_escape_string($conn,$_POST['Inference']);
$_SESSION['Inference'] = $Inference;

$Show_status = $_POST['Show_status'];
$_SESSION['Show_status'] = $Show_status;


?>