<?php
require("../../fpdf/fpdf.php");

session_start();
require '../../include/follow_up_assessment/session_get_follow.php';

$pdf=new FPDF();
$pdf->AddPage('L');
  
$pdf->SetFont('Arial','',12);

$image1 = "../../public/image/logo.png";

// Header
$pdf->cell(30,30,$pdf->Image($image1, $pdf->GetX()+2, $pdf->GetY()+2, 25),1,0);
$pdf->cell(244,15,'Follow up assessment form',1,2,'C');
$pdf->cell(61,7.5,'Document Number',1,0);
$pdf->cell(61,7.5,'Effective Date',1,0);
$pdf->cell(61,7.5,'Review Date',1,0);
$pdf->cell(61,7.5,'Version No.',1,1);
$pdf->SetX(40);
$pdf->cell(61,7.5,'DRA-F-D1-01-14',1,0);
$pdf->cell(61,7.5,'27-09-2022',1,0);
$pdf->cell(61,7.5,'27-09-2024',1,0);
$pdf->cell(61,7.5,'00',1,0);

// Information

// Registration Detail
$pdf->Ln('15');
$pdf->SetFont('Arial','B',12);
$pdf->cell(274,10,'Registration Detail',1,2,'C');
$pdf->SetFont('Arial','',12);
$pdf->cell(137,10,'Dossier ID: '.$Dossier_ID,1,0,'L');
$pdf->cell(137,10,"Assessor's name: ".$Assesso_Name,1,1,'L');
$pdf->cell(137,10,'Date of assessment: '.$date_fast,1,0,'L');
$pdf->cell(137,10,'Communication round: '.$Communication_round,1,1,'L');
$pdf->cell(137,10,'Generic_name: '.$Generic_name,1,0,'L');
$pdf->cell(137,10,'Brand_name: '.$Brand_name,1,1,'L');
$pdf->cell(137,10,'Strength: '.$Strength,1,0,'L');
$pdf->cell(137,10,'Manufacturer: '.$Manufacturer,1,2,'L');

// Missing documents
$pdf->Ln('5');
$pdf->SetFont('Arial','B',12);
$pdf->cell(274,10,'List the Missing documents/discrepancies communicated',1,2,'C');
$pdf->SetFont('Arial','',12);
$pdf->Multicell(274,6,$Missing_documents, 1, 1);

// Query_responses
$pdf->Ln('5');
$pdf->SetFont('Arial','B',12);
$pdf->cell(274,10,'Observations in the submitted query responses',1,2,'C');
$pdf->SetFont('Arial','',12);
$pdf->MultiCell(274, 6,$Query_responses, 1, 1);

// Inference
$pdf->Ln('5');
$pdf->SetFont('Arial','B',12);
$pdf->cell(274,10,'Inference',1,2,'C');
$pdf->SetFont('Arial','',12);
$pdf->Multicell(274,6,$Inference, 1, 1);


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