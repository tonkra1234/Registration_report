<?php

$Show_status = $_SESSION['Show_status'];
$_SESSION['Show_status'] = $Show_status;

$Assesso_Name = $_SESSION['Assesso_Name'];
$_SESSION['Assesso_Name'] = $Assesso_Name;

$Qualification = $_SESSION['Qualification'];
$_SESSION['Qualification'] = $Qualification;

$Dossier_ID = $_SESSION['Dossier_ID'];
$_SESSION['Dossier_ID'] = $Dossier_ID;

$date_fast = $_SESSION['date_fast'];
$_SESSION['date_fast'] = $date_fast;

for ($i=1; $i < 7; $i++) { 

    ${'text'.$i} = $_SESSION['text'."$i"];
    $_SESSION['text'."$i"] =${'text'.$i};
    ${'select'.$i} = $_SESSION['select'."$i"];
    $_SESSION['select'."$i"] = ${'select'.$i};
}

$Site_Master = $_SESSION['Site_Master'];
$_SESSION['Site_Master'] = $Site_Master;

$Product_Sample = $_SESSION['Product_Sample'];
$_SESSION['Product_Sample'] = $Product_Sample;

$Name_of_API = $_SESSION['Name_of_API'];
$_SESSION['Name_of_API'] = $Name_of_API;

$Pharmacopoeia_substance = $_SESSION['Pharmacopoeia_substance'];
$_SESSION['Pharmacopoeia_substance'] = $Pharmacopoeia_substance;

$Excipients = $_SESSION['Excipients'];
$_SESSION['Excipients'] = $Excipients;

$Address_of_Manufacturer = $_SESSION['Address_of_Manufacturer'];
$_SESSION['Address_of_Manufacturer'] = $Address_of_Manufacturer;

$Certificate_Excipients = $_SESSION['Certificate_Excipients'];
$_SESSION['Certificate_Excipients'] = $Certificate_Excipients;

$Brand_Name = $_SESSION['Brand_Name'];
$_SESSION['Brand_Name'] = $Brand_Name;

$Generic_Name = $_SESSION['Generic_Name'];
$_SESSION['Generic_Name'] = $Generic_Name;

$Description_drug = $_SESSION['Description_drug'];
$_SESSION['Description_drug'] = $Description_drug;

$Composition = $_SESSION['Composition'];
$_SESSION['Composition'] = $Composition;

$Pharmacopoeia_product = $_SESSION['Pharmacopoeia_product'];
$_SESSION['Pharmacopoeia_product'] = $Pharmacopoeia_product;

$In_House_Specification = $_SESSION['In_House_Specification'];
$_SESSION['In_House_Specification'] = $In_House_Specification;

$Manufacturing_Process = $_SESSION['Manufacturing_Process'];
$_SESSION['Manufacturing_Process'] = $Manufacturing_Process;

$Certificate_of_analysis = $_SESSION['Certificate_of_analysis'];
$_SESSION['Certificate_of_analysis'] = $Certificate_of_analysis;

$Container_closure_System = $_SESSION['Container_closure_System'];
$_SESSION['Container_closure_System'] = $Container_closure_System;

$Stability_Study_Data = $_SESSION['Stability_Study_Data'];
$_SESSION['Stability_Study_Data'] = $Stability_Study_Data;

$Product_Interchangeability_data = $_SESSION['Product_Interchangeability_data'];
$_SESSION['Product_Interchangeability_data'] = $Product_Interchangeability_data;

$Summary_Assessment_Report = $_SESSION['Summary_Assessment_Report'];
$_SESSION['Summary_Assessment_Report'] = $Summary_Assessment_Report;

?>