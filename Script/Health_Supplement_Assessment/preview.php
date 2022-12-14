<?php
// DRA-F-D1-11-03 version 00
require("../../fpdf/fpdf.php");

session_start();
require '../../include/health_supplement/session_get_health.php';

$pdf=new FPDF();
$pdf->AddPage('L');
  
$pdf->SetFont('Arial','',12);

$image1 = "../../public/image/logo.png";

// Header
$pdf->cell(30,30,$pdf->Image($image1, $pdf->GetX()+2, $pdf->GetY()+2, 25),1,0);
$pdf->cell(244,15,'Health Supplement Scientific Evidence Assessment form',1,2,'C');
$pdf->cell(61,7.5,'Document Number',1,0);
$pdf->cell(61,7.5,'Effective Date',1,0);
$pdf->cell(61,7.5,'Review Date',1,0);
$pdf->cell(61,7.5,'Version No.',1,1);
$pdf->SetX(40);
$pdf->cell(61,7.5,'DRA-F-D1-11-03',1,0);
$pdf->cell(61,7.5,'27-09-2022',1,0);
$pdf->cell(61,7.5,'27-09-2024',1,0);
$pdf->cell(61,7.5,'00',1,0);

// Information

// Registration Detail
$pdf->Ln('15');
$pdf->SetFont('Arial','B',12);
$pdf->cell(274,10,'Registration Detail',1,2,'C');
$pdf->SetFont('Arial','',12);
$pdf->cell(137,10,'Product name: '.$Product_name ,1,0,'L');
$pdf->cell(137,10,'Supplement id:'.$supplement_id,1,1,'L');
$pdf->cell(137,10,'Applicant Details:'.$Applicant_Details,1,0,'L');
$pdf->cell(137,10,'Category:'.$Category,1,1,'L');
$pdf->cell(137,10,'Verification_Evidence:'.$Verification_Evidence,1,0,'L');
$pdf->cell(137,10,'URL:'.$URL,1,1,'L');
$pdf->cell(137,10,'Evidence support label:'.$evidence_support_label,1,0,'L');
$pdf->cell(137,10,'Title Evidence:'.$Title_Evidence,1,1,'L');

// Checklist
$pdf->Ln('5');
$pdf->cell(10,10,'  1',1,0,'L');
$pdf->cell(254,10,'  Authoritative reference texts: reference textbooks, Pharmacopoeia,
Scientific journals (Category-I &II)' ,1,0,'L');
$pdf->SetFont('Arial','',20);
$pdf->cell(10,10,' '.$check1,1,1,'L');
$pdf->SetFont('Arial','',12);

$pdf->cell(10,10,'  2',1,0,'L');
$pdf->cell(254,10,'  Scientific opinion from scientific organizations or regulatory
authorities (Category I & II)' ,1,0,'L');
$pdf->SetFont('Arial','',20);
$pdf->cell(10,10,' '.$check2,1,1,'L');
$pdf->SetFont('Arial','',12);

$pdf->cell(10,10,'  3',1,0,'L');
$pdf->cell(254,10,'  Classical texts, published documents from
scholar or expert that reports the traditional use of the ingredient
concerned.' ,1,0,'L');
// $pdf->Multicell(254,6,"Documented history if use: Classical texts, published documents from scholar or expert that reports the traditional use of the ingredient
// concerned.", 1, 1);
$pdf->SetFont('Arial','',20);
$pdf->cell(10,10,' '.$check3,1,1,'L');
$pdf->SetFont('Arial','',12);


$pdf->cell(10,10,'  4',1,0,'L');
$pdf->cell(254,10,'  Scientific evidence from animal studies-Document history of use,
evidence from published scientific review.' ,1,0,'L');
$pdf->SetFont('Arial','',20);
$pdf->cell(10,10,' '.$check4,1,1,'L');
$pdf->SetFont('Arial','',12);


$pdf->cell(10,10,'  5',1,0,'L');
$pdf->cell(254,10,'  Meta-analysis/peer reviewed/literature reviewed' ,1,0,'L');
$pdf->SetFont('Arial','',20);
$pdf->cell(10,10,' '.$check5,1,1,'L');
$pdf->SetFont('Arial','',12);


$pdf->cell(10,10,'  6',1,0,'L');
$pdf->cell(254,10,'  Scientific evidence from human intervention study on ingredient or
product (Category III)' ,1,0,'L');
$pdf->SetFont('Arial','',20);
$pdf->cell(10,10,' '.$check6,1,1,'L');
$pdf->SetFont('Arial','',12);



$pdf->AddPage('L');
// Manufacturer Details
$pdf->Ln('5');
$pdf->SetFont('Arial','B',12);
$pdf->cell(274,10,'Manufacturer Details',1,2,'C');
$pdf->SetFont('Arial','',12);
$pdf->Multicell(274,6,$Manufacturer_Details, 1, 1);

// Label Claim
$pdf->Ln('5');
$pdf->SetFont('Arial','B',12);
$pdf->cell(274,10,'Label Claim',1,2,'C');
$pdf->SetFont('Arial','',12);
$pdf->MultiCell(274, 6,$Label_Claim, 1, 1);

// Inference
$pdf->Ln('5');
$pdf->SetFont('Arial','B',12);
$pdf->cell(274,10,'Inference',1,2,'C');
$pdf->SetFont('Arial','',12);
$pdf->Multicell(274,6,$conclusion, 1, 1);


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