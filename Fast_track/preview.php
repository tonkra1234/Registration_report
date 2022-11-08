<?php
require("../fpdf/fpdf.php");

session_start();
require '../include/fast_track/session_get_fast.php';

$pdf=new FPDF();
$pdf->AddPage('L');
  
$pdf->SetFont('Arial','',12);

$image1 = "../public/image/logo.png";

// Header
$pdf->cell(30,30,$pdf->Image($image1, $pdf->GetX()+2, $pdf->GetY()+2, 25),1,0);
$pdf->cell(244,15,'Fast Track Registration assessment',1,2,'C');
$pdf->cell(61,7.5,'Document Number',1,0);
$pdf->cell(61,7.5,'Effective Date',1,0);
$pdf->cell(61,7.5,'Review Date',1,0);
$pdf->cell(61,7.5,'Version No.',1,1);
$pdf->SetX(40);
$pdf->cell(61,7.5,'DRA-F-D2-01-02',1,0);
$pdf->cell(61,7.5,'27-09-2022',1,0);
$pdf->cell(61,7.5,'27-09-2024',1,0);
$pdf->cell(61,7.5,'06',1,0);

// Information

// Registration Detail
$pdf->Ln('15');
$pdf->SetFont('Arial','B',12);
$pdf->cell(274,10,'Registration Detail',1,2,'C');
$pdf->SetFont('Arial','',12);
$pdf->cell(137,10,'Registration Type: '.$Registration_Type,1,0,'L');
$pdf->cell(137,10,'Dossier ID: '.$Dossier_ID,1,1,'L');
$pdf->cell(137,10,'Assessor Name: '.$Assesso_Name,1,0,'L');
$pdf->cell(137,10,'Date of Assessment: '.$date_fast,1,2,'L');

// Observation
$pdf->Ln('5');
$pdf->SetFont('Arial','B',12);
$pdf->cell(274,10,'Observation',1,2,'C');
$pdf->SetFont('Arial','',12);
$pdf->Multicell(274,6,'      '.$Observation, 1, 1);

// Inference
$pdf->Ln('5');
$pdf->SetFont('Arial','B',12);
$pdf->cell(274,10,'Inference',1,2,'C');
$pdf->SetFont('Arial','',12);
$pdf->MultiCell(274, 6,'      '.$Inference, 1, 1);


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