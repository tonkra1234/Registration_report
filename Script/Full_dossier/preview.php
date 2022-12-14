<?php
require("../../fpdf/fpdf.php");

session_start();
require '../../include/full_dossier/session_get_full.php';

$pdf=new FPDF();
$pdf->AddPage('L');
  
$pdf->SetFont('Arial','',12);

$image1 = "../../public/image/logo.png";

// Header
$pdf->cell(30,30,$pdf->Image($image1, $pdf->GetX()+2, $pdf->GetY()+2, 25),1,0);
$pdf->cell(244,15,'Fast Track Registration assessment',1,2,'C');
$pdf->cell(61,7.5,'Document Number',1,0);
$pdf->cell(61,7.5,'Effective Date',1,0);
$pdf->cell(61,7.5,'Review Date',1,0);
$pdf->cell(61,7.5,'Version No.',1,1);
$pdf->SetX(40);
$pdf->cell(61,7.5,'DRA-F-D1-01-12',1,0);
$pdf->cell(61,7.5,'27-09-2022',1,0);
$pdf->cell(61,7.5,'27-09-2024',1,0);
$pdf->cell(61,7.5,'00',1,0);

// Information

// Registration Detail
$pdf->Ln('15');
$pdf->SetFont('Arial','B',12);
$pdf->cell(274,10,'Dossier Assessment report',1,2,'C');
$pdf->SetFont('Arial','',12);
$pdf->cell(137,10,'Assessor Name: '.$Assesso_Name,1,0,'L');
$pdf->cell(137,10,'Qualification: '.$Qualification,1,1,'L');
$pdf->cell(137,10,'Dossier ID: '.$Dossier_ID,1,0,'L');
$pdf->cell(137,10,'Date of Assessment: '.$date_fast,1,1,'L');
$pdf->cell(137,10,'Generic_name: '.$Generic_name,1,0,'L');
$pdf->cell(137,10,'Brand_name: '.$Brand_name,1,1,'L');
$pdf->cell(137,10,'Strength: '.$Strength,1,0,'L');
$pdf->cell(137,10,'Manufacturer: '.$Manufacturer,1,2,'L');

// Part 1
// Administrative Documents
$pdf->Ln('10');
$pdf->SetFont('Arial','B',12);
$pdf->cell(274,10,'Administrative Documents',1,2,'C');
$pdf->SetFont('Arial','',12);
// select1
$pdf->cell(67,10,'Application Form',1,0,'L');
$pdf->cell(20,10,$select1,1,0,'L');
$pdf->cell(187,10,'Remarks'.$text1,1,1,'L');
// select2
$pdf->cell(67,10,'Letter of Authorization',1,0,'L');
$pdf->cell(20,10,$select2,1,0,'L');
$pdf->cell(187,10,'Remarks'.$text2,1,1,'L');
// select3
$pdf->cell(67,10,'Manufacturing License',1,0,'L');
$pdf->cell(20,10,$select3,1,0,'L');
$pdf->cell(187,10,'Remarks'.$text3,1,1,'L');
// select4
$pdf->cell(67,10,'cGMP License',1,0,'L');
$pdf->cell(20,10,$select4,1,0,'L');
$pdf->cell(187,10,'Remarks'.$text4,1,1,'L');
// select5
$pdf->cell(67,10,'CoPP',1,0,'L');
$pdf->cell(20,10,$select5,1,0,'L');
$pdf->cell(187,10,'Remarks'.$text5,1,1,'L');
// select6
$pdf->cell(67,10,'Price Structure',1,0,'L');
$pdf->cell(20,10,$select6,1,0,'L');
$pdf->cell(187,10,'Remarks'.$text6,1,1,'L');


$pdf->AddPage('L');
// Site Master file
$pdf->Ln('5');
$pdf->SetFont('Arial','B',12);
$pdf->cell(274,10,'Site Master file',1,2,'C');
$pdf->SetFont('Arial','',12);
$pdf->Multicell(274,6,$Site_Master, 1, 1);

// Product Sample assessment Result
$pdf->Ln('5');
$pdf->SetFont('Arial','B',12);
$pdf->cell(137,10,'Product Sample assessment Result',1,0,'L');
$pdf->SetFont('Arial','',12);
$pdf->cell(137,10,$Product_Sample,1,1);

//QUALITY DOCUMENTS
$pdf->Ln('5');
$pdf->SetFont('Arial','B',12);
$pdf->cell(137,10,'QUALITY DOCUMENTS',0,1,'L');

// Drug substance
$pdf->cell(137,10,'Drug substance',0,1,'L');
$pdf->SetFont('Arial','',12);
$pdf->Ln('5');
$pdf->cell(60,10,'Name_of_API',1,0,'L');
$pdf->cell(214,10,$Name_of_API ,1,1);

$pdf->cell(60,10,'Reference Pharmacopoeia',1,0,'L');
$pdf->cell(214,10,$Pharmacopoeia_substance ,1,1);

$pdf->cell(60,10,'Name of Excipients',1,0,'L');
$pdf->Multicell(214,10,$Excipients,1,1);

$pdf->cell(80,10,'Name and address of Manufacturer',1,0,'L');
$pdf->cell(194,10,$Address_of_Manufacturer ,1,1);

// Certificate of Analysis of API and Excipients:
$pdf->Ln('5');
$pdf->SetFont('Arial','B',12);
$pdf->cell(274,10,'Certificate of Analysis of API and Excipients',1,2,'L');
$pdf->SetFont('Arial','',12);
$pdf->MultiCell(274, 6,$Certificate_Excipients, 1, 1);

// Drug product
$pdf->AddPage('L');
$pdf->SetFont('Arial','B',12);
$pdf->cell(137,10,'Drug substance',0,1,'L');
$pdf->SetFont('Arial','',12);
$pdf->Ln('5');
$pdf->cell(70,10,'Brand name',1,0,'L');
$pdf->cell(204,10,$Brand_Name ,1,1);
$pdf->cell(70,10,'Generic name',1,0,'L');
$pdf->cell(204,10,$Generic_Name ,1,1);
$pdf->cell(70,10,'Description of the Drug product',1,0,'L');
$pdf->cell(204,10,$Description_drug ,1,1);
$pdf->cell(70,10,'Composition',1,0,'L');
$pdf->Multicell(204,10,$Composition,1,1);
$pdf->cell(70,10,'Reference Pharmacopoeia:',1,0,'L');
$pdf->cell(204,10,$Pharmacopoeia_product ,1,1);

// In-House Specification Method of Analysis
$pdf->Ln('5');
$pdf->SetFont('Arial','B',12);
$pdf->cell(274,10,'In-House Specification Method of Analysis',1,2,'L');
$pdf->SetFont('Arial','',12);
$pdf->MultiCell(274, 6,$In_House_Specification, 1, 1);

$pdf->AddPage('L');
$pdf->SetFont('Arial','B',12);
$pdf->cell(274,10,'Manufacturing Process',1,2,'L');
$pdf->SetFont('Arial','',12);
$pdf->MultiCell(274, 6,$Manufacturing_Process, 1, 1);

$pdf->Ln('5');
$pdf->SetFont('Arial','B',12);
$pdf->cell(274,10,'Certificate of analysis of Drug Product',1,2,'L');
$pdf->SetFont('Arial','',12);
$pdf->MultiCell(274, 6,$Certificate_of_analysis, 1, 1);

$pdf->Ln('5');
$pdf->SetFont('Arial','B',12);
$pdf->cell(274,10,'Container closure System',1,2,'L');
$pdf->SetFont('Arial','',12);
$pdf->MultiCell(274, 6,$Container_closure_System, 1, 1);

$pdf->Ln('5');
$pdf->SetFont('Arial','B',12);
$pdf->cell(274,10,'Stability Study Data',1,2,'L');
$pdf->SetFont('Arial','',12);
$pdf->MultiCell(274, 6,$Stability_Study_Data, 1, 1);

$pdf->Ln('5');
$pdf->SetFont('Arial','B',12);
$pdf->cell(274,10,'Product Interchangeability data',1,2,'L');
$pdf->SetFont('Arial','',12);
$pdf->MultiCell(274, 6,$Product_Interchangeability_data, 1, 1);

$pdf->AddPage('L');
$pdf->SetFont('Arial','B',12);
$pdf->cell(274,10,'Summary Assessment Report Name',1,2,'L');
$pdf->SetFont('Arial','',12);
$pdf->MultiCell(274, 6,$Summary_Assessment_Report, 1, 1);


$pdf->AddPage('L');
$pdf->Ln('10');
$pdf->SetFont('Arial','B',12);
$pdf->cell(274,10,'Signature',1,2,'C');
$pdf->SetFont('Arial','',12);
// Signature
$pdf->Ln('40');
$pdf->cell(200,7,'Assessed By (Name, Division)',0,0,'L');
$pdf->cell(70,7,'Verified By(Name, Division)',0,0,'L');


$pdf->Output();

?>