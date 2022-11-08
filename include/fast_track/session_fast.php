<?php

$Registration_Type = $_POST['Registration_Type'];
$_SESSION['Registration_Type'] = $Registration_Type;

$Dossier_ID = $_POST['Dossier_ID'];
$_SESSION['Dossier_ID'] = $Dossier_ID;

$Assesso_Name = $_POST['Assesso_Name'];
$_SESSION['Assesso_Name'] = $Assesso_Name;

$date_fast = $_POST['date_fast'];
$_SESSION['date_fast'] = $date_fast;

$Observation = $_POST['Observation'];
$_SESSION['Observation'] = $Observation;

$Inference = $_POST['Inference'];
$_SESSION['Inference'] = $Inference;


?>