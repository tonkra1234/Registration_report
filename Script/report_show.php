<?php

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:./Login/login_form.php');
}

$user_name = $_SESSION['user_name'];
$_SESSION['user_name'] = $user_name;

@include '../include/database/connection.php';

$id = (isset($_GET['id']))?$_GET['id']:'';
$type = (isset($_GET['type']))?$_GET['type']:'';

$sql = "SELECT * FROM $type WHERE id=$id";
$result = mysqli_query ($conn, $sql);
$data = $result->fetch_assoc();

require("../fpdf/fpdf.php");
$image1 = "../public/image/logo.png";

if($type ==='fast_track'){

    $pdf=new FPDF();
    $pdf->AddPage('L');
    
    $pdf->SetFont('Arial','',12);

    // Header
    $pdf->cell(30,30,$pdf->Image($image1, $pdf->GetX()+2, $pdf->GetY()+2, 25),1,0);
    $pdf->cell(244,15,'Fast Track Registration assessment',1,2,'C');
    $pdf->cell(61,7.5,'Document Number',1,0);
    $pdf->cell(61,7.5,'Effective Date',1,0);
    $pdf->cell(61,7.5,'Review Date',1,0);
    $pdf->cell(61,7.5,'Version No.',1,1);
    $pdf->SetX(40);
    $pdf->cell(61,7.5,'DRA-F-D1-01-13',1,0);
    $pdf->cell(61,7.5,'27-09-2022',1,0);
    $pdf->cell(61,7.5,'27-09-2024',1,0);
    $pdf->cell(61,7.5,'00',1,0);

    // Information

    // Registration Detail
    $pdf->Ln('15');
    $pdf->SetFont('Arial','B',12);
    $pdf->cell(274,10,'Registration Detail',1,2,'C');
    $pdf->SetFont('Arial','',12);
    $pdf->cell(137,10,'Registration Type: '.$data['Registration_Type'],1,0,'L');
    $pdf->cell(137,10,'Dossier ID: '.$data['Dossier_ID'],1,1,'L');
    $pdf->cell(137,10,'Assessor Name: '.$data['Assesso_Name'],1,0,'L');
    $pdf->cell(137,10,'Date of Assessment: '.$data['Date_fast'],1,1,'L');
    $pdf->cell(137,10,'Generic name: '.$data['Generic_name'],1,0,'L');
    $pdf->cell(137,10,'Brand name: '.$data['Brand_name'],1,1,'L');
    $pdf->cell(137,10,'Strength: '.$data['Strength'],1,0,'L');
    $pdf->cell(137,10,'Manufacturer: '.$data['Manufacturer'],1,2,'L');

    // Observation
    $pdf->Ln('5');
    $pdf->SetFont('Arial','B',12);
    $pdf->cell(274,10,'Observation',1,2,'C');
    $pdf->SetFont('Arial','',12);
    $pdf->Multicell(274,6,'      '.$data['Observation'], 1, 1);

    // Inference
    $pdf->Ln('5');
    $pdf->SetFont('Arial','B',12);
    $pdf->cell(274,10,'Inference',1,2,'C');
    $pdf->SetFont('Arial','',12);
    $pdf->MultiCell(274, 6,'      '.$data['Inference'], 1, 1);


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
}
elseif ($type ==='full_track') {

    $pdf=new FPDF();
    $pdf->AddPage('L');
    
    $pdf->SetFont('Arial','',12);

    // Header
    $pdf->cell(30,30,$pdf->Image($image1, $pdf->GetX()+2, $pdf->GetY()+2, 25),1,0);
    $pdf->cell(244,15,'Full Dossier Registration assessment',1,2,'C');
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
    $pdf->cell(274,10,'Full Dossier Assessment report',1,2,'C');
    $pdf->SetFont('Arial','',12);
    $pdf->cell(137,10,'Assessor Name: '.$data['Assesso_Name'],1,0,'L');
    $pdf->cell(137,10,'Qualification: '.$data['Qualification'],1,1,'L');
    $pdf->cell(137,10,'Dossier ID: '.$data['Dossier_ID'],1,0,'L');
    $pdf->cell(137,10,'Date of Assessment: '.$data['date_fast'],1,1,'L');

    // Part 1
    // Administrative Documents
    $pdf->Ln('10');
    $pdf->SetFont('Arial','B',12);
    $pdf->cell(274,10,'Administrative Documents',1,2,'C');
    $pdf->SetFont('Arial','',12);
    // select1
    $pdf->cell(67,8,'Application Form',1,0,'L');
    $pdf->cell(20,8,$data['Application_Form_select'],1,0,'L');
    $pdf->Multicell(187,8,'Remarks'.$data['Application_Form_text'],1,1);
    // select2
    $pdf->cell(67,8,'Letter of Authorization',1,0,'L');
    $pdf->cell(20,8,$data['Letter_of_Authorization_select'],1,0,'L');
    $pdf->Multicell(187,8,'Remarks'.$data['Letter_of_Authorization_text'],1,1);
    // select3
    $pdf->cell(67,8,'Manufacturing License',1,0,'L');
    $pdf->cell(20,8,$data['Manufacturing_License_select'],1,0,'L');
    $pdf->Multicell(187,8,'Remarks'.$data['Manufacturing_License_text'],1,1);
    // select4
    $pdf->cell(67,8,'cGMP License',1,0,'L');
    $pdf->cell(20,8,$data['cGMP_License_select'],1,0,'L');
    $pdf->Multicell(187,8,'Remarks'.$data['cGMP_License_text'],1,1);
    // select5
    $pdf->cell(67,8,'CoPP',1,0,'L');
    $pdf->cell(20,8,$data['CoPP_select'],1,0,'L');
    $pdf->Multicell(187,8,'Remarks'.$data['CoPP_text'],1,1);
    // select6
    $pdf->cell(67,8,'Price Structure',1,0,'L');
    $pdf->cell(20,8,$data['Price_Structure_select'],1,0,'L');
    $pdf->Multicell(187,8,'Remarks'.$data['Price_Structure_text'],1,1);


    $pdf->AddPage('L');
    // Site Master file
    $pdf->Ln('5');
    $pdf->SetFont('Arial','B',12);
    $pdf->cell(274,10,'Site Master file',1,2,'C');
    $pdf->SetFont('Arial','',12);
    $pdf->Multicell(274,6,$data['Site_Master'], 1, 1);

    // Product Sample assessment Result
    $pdf->Ln('5');
    $pdf->SetFont('Arial','B',12);
    $pdf->cell(137,10,'Product Sample assessment Result',1,0,'L');
    $pdf->SetFont('Arial','',12);
    $pdf->cell(137,10,$data['Product_Sample'],1,1);

    //QUALITY DOCUMENTS
    $pdf->Ln('5');
    $pdf->SetFont('Arial','B',12);
    $pdf->cell(137,10,'QUALITY DOCUMENTS',0,1,'L');

    // Drug substance
    $pdf->cell(137,10,'Drug substance',0,1,'L');
    $pdf->SetFont('Arial','',12);
    $pdf->Ln('5');
    $pdf->cell(60,10,'Name_of_API',1,0,'L');
    $pdf->cell(214,10,$data['Name_of_API'] ,1,1);

    $pdf->cell(60,10,'Reference Pharmacopoeia',1,0,'L');
    $pdf->cell(214,10,$data['Pharmacopoeia_substance'] ,1,1);

    $pdf->cell(60,10,'Name of Excipients',1,0,'L');
    $pdf->Multicell(214,10,$data['Excipients'],1,1);

    $pdf->cell(80,10,'Name and address of Manufacturer',1,0,'L');
    $pdf->cell(194,10,$data['Address_of_Manufacturer'],1,1);

    // Certificate of Analysis of API and Excipients:
    $pdf->Ln('5');
    $pdf->SetFont('Arial','B',12);
    $pdf->cell(274,10,'Certificate of Analysis of API and Excipients',1,2,'L');
    $pdf->SetFont('Arial','',12);
    $pdf->MultiCell(274, 6,$data['Certificate_Excipients'], 1, 1);

    // Drug product
    $pdf->AddPage('L');
    $pdf->SetFont('Arial','B',12);
    $pdf->cell(137,10,'Drug substance',0,1,'L');
    $pdf->SetFont('Arial','',12);
    $pdf->Ln('5');
    $pdf->cell(70,8,'Brand name',1,0,'L');
    $pdf->cell(204,8,$data['Brand_Name'] ,1,1);
    $pdf->cell(70,8,'Generic name',1,0,'L');
    $pdf->cell(204,8,$data['Generic_Name'] ,1,1);
    $pdf->cell(70,8,'Description of the Drug product',1,0,'L');
    $pdf->cell(204,8,$data['Description_drug'] ,1,1);
    $pdf->cell(70,8,'Composition',1,0,'L');
    $pdf->Multicell(204,8,$data['Composition'],1,1);
    $pdf->cell(70,8,'Reference Pharmacopoeia:',1,0,'L');
    $pdf->cell(204,8,$data['Pharmacopoeia_product'] ,1,1);

    // In-House Specification Method of Analysis
    $pdf->Ln('5');
    $pdf->SetFont('Arial','B',12);
    $pdf->cell(274,10,'In-House Specification Method of Analysis',1,2,'L');
    $pdf->SetFont('Arial','',12);
    $pdf->MultiCell(274, 6,$data['In_House_Specification'], 1, 1);

    $pdf->Ln('5');
    $pdf->SetFont('Arial','B',12);
    $pdf->cell(274,10,'Manufacturing Process',1,2,'L');
    $pdf->SetFont('Arial','',12);
    $pdf->MultiCell(274, 6,$data['Manufacturing_Process'], 1, 1);

    $pdf->Ln('5');
    $pdf->SetFont('Arial','B',12);
    $pdf->cell(274,10,'Certificate of analysis of Drug Product',1,2,'L');
    $pdf->SetFont('Arial','',12);
    $pdf->MultiCell(274, 6,$data['Certificate_of_analysis'], 1, 1);


    $pdf->AddPage('L');

    $pdf->Ln('5');
    $pdf->SetFont('Arial','B',12);
    $pdf->cell(274,10,'Container closure System',1,2,'L');
    $pdf->SetFont('Arial','',12);
    $pdf->MultiCell(274, 6,$data['Container_closure_System'], 1, 1);

    $pdf->Ln('5');
    $pdf->SetFont('Arial','B',12);
    $pdf->cell(274,10,'Stability Study Data',1,2,'L');
    $pdf->SetFont('Arial','',12);
    $pdf->MultiCell(274, 6,$data['Stability_Study_Data'], 1, 1);

    $pdf->Ln('5');
    $pdf->SetFont('Arial','B',12);
    $pdf->cell(274,10,'Product Interchangeability data',1,2,'L');
    $pdf->SetFont('Arial','',12);
    $pdf->MultiCell(274, 6,$data['Product_Interchangeability_data'], 1, 1);

    $pdf->Ln('5');
    $pdf->SetFont('Arial','B',12);
    $pdf->cell(274,10,'Summary Assessment Report Name',1,2,'L');
    $pdf->SetFont('Arial','',12);
    $pdf->MultiCell(274, 6,$data['Summary_Assessment_Report'], 1, 1);


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
}
elseif ($type ==='health_supplement') {

    $pdf=new FPDF();
    $pdf->AddPage('L');
    
    $pdf->SetFont('Arial','',12);

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
    $pdf->cell(137,10,'Product name: '.$data['Product_name'] ,1,0,'L');
    $pdf->cell(137,10,'Supplement id:'.$data['supplement_id'],1,1,'L');
    $pdf->cell(137,10,'Applicant Details:'.$data['Applicant_Details'],1,0,'L');
    $pdf->cell(137,10,'Category:'.$data['Category'],1,1,'L');
    $pdf->cell(137,10,'Verification_Evidence:'.$data['Verification_Evidence'],1,0,'L');
    $pdf->cell(137,10,'URL:'.$data['link'],1,1,'L');
    $pdf->cell(137,10,'Evidence support label:'.$data['evidence_support_label'],1,0,'L');
    $pdf->cell(137,10,'Title Evidence:'.$data['Title_Evidence'],1,1,'L');

    // Checklist
    $pdf->Ln('5');
    $pdf->cell(10,10,'  1',1,0,'L');
    $pdf->cell(254,10,'  Authoritative reference texts: reference textbooks, Pharmacopoeia,
    Scientific journals (Category-I &II)' ,1,0,'L');
    $pdf->SetFont('Arial','',20);
    $pdf->cell(10,10,' '.$data['check1'],1,1,'L');
    $pdf->SetFont('Arial','',12);

    $pdf->cell(10,10,'  2',1,0,'L');
    $pdf->cell(254,10,'  Scientific opinion from scientific organizations or regulatory
    authorities (Category I & II)' ,1,0,'L');
    $pdf->SetFont('Arial','',20);
    $pdf->cell(10,10,' '.$data['check2'],1,1,'L');
    $pdf->SetFont('Arial','',12);

    $pdf->cell(10,10,'  3',1,0,'L');
    $pdf->cell(254,10,'  Classical texts, published documents from
    scholar or expert that reports the traditional use of the ingredient
    concerned.' ,1,0,'L');
    // $pdf->Multicell(254,6,"Documented history if use: Classical texts, published documents from scholar or expert that reports the traditional use of the ingredient
    // concerned.", 1, 1);
    $pdf->SetFont('Arial','',20);
    $pdf->cell(10,10,' '.$data['check3'],1,1,'L');
    $pdf->SetFont('Arial','',12);


    $pdf->cell(10,10,'  4',1,0,'L');
    $pdf->cell(254,10,'  Scientific evidence from animal studies-Document history of use,
    evidence from published scientific review.' ,1,0,'L');
    $pdf->SetFont('Arial','',20);
    $pdf->cell(10,10,' '.$data['check4'],1,1,'L');
    $pdf->SetFont('Arial','',12);


    $pdf->cell(10,10,'  5',1,0,'L');
    $pdf->cell(254,10,'  Meta-analysis/peer reviewed/literature reviewed' ,1,0,'L');
    $pdf->SetFont('Arial','',20);
    $pdf->cell(10,10,' '.$data['check5'],1,1,'L');
    $pdf->SetFont('Arial','',12);


    $pdf->cell(10,10,'  6',1,0,'L');
    $pdf->cell(254,10,'  Scientific evidence from human intervention study on ingredient or
    product (Category III)' ,1,0,'L');
    $pdf->SetFont('Arial','',20);
    $pdf->cell(10,10,' '.$data['check6'],1,1,'L');
    $pdf->SetFont('Arial','',12);



    $pdf->AddPage('L');
    // Manufacturer Details
    $pdf->Ln('5');
    $pdf->SetFont('Arial','B',12);
    $pdf->cell(274,10,'Manufacturer Details',1,2,'C');
    $pdf->SetFont('Arial','',12);
    $pdf->Multicell(274,6,$data['Manufacturer_Details'], 1, 1);

    // Label Claim
    $pdf->Ln('5');
    $pdf->SetFont('Arial','B',12);
    $pdf->cell(274,10,'Label Claim',1,2,'C');
    $pdf->SetFont('Arial','',12);
    $pdf->MultiCell(274, 6,$data['Label_Claim'], 1, 1);

    // Inference
    $pdf->Ln('5');
    $pdf->SetFont('Arial','B',12);
    $pdf->cell(274,10,'Inference',1,2,'C');
    $pdf->SetFont('Arial','',12);
    $pdf->Multicell(274,6,$data['conclusion'], 1, 1);


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
}
elseif ($type ==='follow_up') {
    $pdf=new FPDF();
    $pdf->AddPage('L');
    
    $pdf->SetFont('Arial','',12);

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
    $pdf->cell(137,10,'Dossier ID: '.$data['Dossier_ID'],1,0,'L');
    $pdf->cell(137,10,"Assessor's name: ".$data['Assesso_Name'],1,1,'L');
    $pdf->cell(137,10,'Date of assessment: '.$data['date_fast'],1,0,'L');
    $pdf->cell(137,10,'Communication round: '.$data['Communication_round'],1,1,'L');
    $pdf->cell(137,10,'Generic name: '.$data['Generic_name'],1,0,'L');
    $pdf->cell(137,10,'Brand name: '.$data['Brand_name'],1,1,'L');
    $pdf->cell(137,10,'Strength: '.$data['Strength'],1,0,'L');
    $pdf->cell(137,10,'Manufacturer: '.$data['Manufacturer'],1,2,'L');

    // Missing documents
    $pdf->Ln('5');
    $pdf->SetFont('Arial','B',12);
    $pdf->cell(274,10,'List the Missing documents/discrepancies communicated',1,2,'C');
    $pdf->SetFont('Arial','',12);
    $pdf->Multicell(274,6,$data['Missing_documents'], 1, 1);

    // Query_responses
    $pdf->Ln('5');
    $pdf->SetFont('Arial','B',12);
    $pdf->cell(274,10,'Observations in the submitted query responses',1,2,'C');
    $pdf->SetFont('Arial','',12);
    $pdf->MultiCell(274, 6,$data['Query_responses'], 1, 1);


    $pdf->AddPage('L');
    // Inference
    $pdf->Ln('5');
    $pdf->SetFont('Arial','B',12);
    $pdf->cell(274,10,'Inference',1,2,'C');
    $pdf->SetFont('Arial','',12);
    $pdf->Multicell(274,6,$data['Inference'], 1, 1);

    $pdf->Ln('5');
    $pdf->SetFont('Arial','B',12);
    $pdf->cell(274,10,'Signature',1,2,'C');
    $pdf->SetFont('Arial','',12);
    // Signature
    $pdf->Ln('40');
    $pdf->cell(200,7,'Assessed By (Name, Division)',0,0,'L');
    $pdf->cell(70,7,'Verified By(Name, Division)',0,0,'L');


    $pdf->Output();
}
elseif ($type ==='post_approval') {
    $pdf=new FPDF();
    $pdf->AddPage('L');
    
    $pdf->SetFont('Arial','',12);

    // Header
    $pdf->cell(30,30,$pdf->Image($image1, $pdf->GetX()+2, $pdf->GetY()+2, 25),1,0);
    $pdf->cell(244,15,'Post Approval assessment Form',1,2,'C');
    $pdf->cell(61,7.5,'Document Number',1,0);
    $pdf->cell(61,7.5,'Effective Date',1,0);
    $pdf->cell(61,7.5,'Review Date',1,0);
    $pdf->cell(61,7.5,'Version No.',1,1);
    $pdf->SetX(40);
    $pdf->cell(61,7.5,'DRA-F-D1-02-02',1,0);
    $pdf->cell(61,7.5,'27-09-2022',1,0);
    $pdf->cell(61,7.5,'27-09-2024',1,0);
    $pdf->cell(61,7.5,'00',1,0);

    // Information

    // Registration Detail
    $pdf->Ln('15');
    $pdf->SetFont('Arial','B',12);
    $pdf->cell(274,10,'Registration Detail',1,2,'C');
    $pdf->SetFont('Arial','',12);
    $pdf->cell(137,10,'Dossier ID: '.$data['Dossier_ID'],1,0,'L');
    $pdf->cell(137,10,'Assessor Name: '.$data['Assesso_Name'],1,1,'L');
    $pdf->cell(137,10,'Date of Assessment: '.$data['date_fast'],1,0,'L');
    $pdf->cell(137,10,'Generic name: '.$data['Generic_name'],1,1,'L');
    $pdf->cell(137,10,'Brand name: '.$data['Brand_name'],1,0,'L');
    $pdf->cell(137,10,'Strength: '.$data['Strength'],1,1,'L');
    $pdf->cell(274,10,'Manufacturer: '.$data['Manufacturer'],1,1,'L');
    $pdf->cell(274,10,'Type of change: '.$data['Type_change'],1,2,'L');

    // fulfilled_conditions
    $pdf->Ln('5');
    $pdf->SetFont('Arial','B',12);
    $pdf->cell(274,10,'  List the documents and conditions to be fulfilled for the proposed variation',1,2,'L');
    $pdf->SetFont('Arial','',12);
    $pdf->MultiCell(274, 6,'      '.$data['fulfilled_conditions'], 1, 1);

    // Observation
    $pdf->Ln('5');
    $pdf->SetFont('Arial','B',12);
    $pdf->cell(274,10,'  Justification for the variation',1,2,'L');
    $pdf->SetFont('Arial','',12);
    $pdf->Multicell(274,6,'      '.$data['Justification'], 1, 1);


    $pdf->AddPage('L');
    // Inference
    $pdf->Ln('5');
    $pdf->SetFont('Arial','B',12);
    $pdf->cell(274,10,'  Inference',1,2,'L');
    $pdf->SetFont('Arial','',12);
    $pdf->MultiCell(274, 6,'      '.$data['Inference'], 1, 1);

    $pdf->Ln('5');
    $pdf->SetFont('Arial','B',12);
    $pdf->cell(274,10,'Signature',1,2,'C');
    $pdf->SetFont('Arial','',12);
    // Signature
    $pdf->Ln('40');
    $pdf->cell(200,7,'Assessed By (Name, Division)',0,0,'L');
    $pdf->cell(70,7,'Verified By(Name, Division)',0,0,'L');

    $pdf->Output();
}
elseif ($type ==='medical_full') {

    $pdf=new FPDF();
    $pdf->AddPage('L');
    
    $pdf->SetFont('Arial','',12);

    // Header
    $pdf->cell(30,30,$pdf->Image($image1, $pdf->GetX()+2, $pdf->GetY()+2, 25),1,0);
    $pdf->cell(244,15,'Evaluation of Medical Device Dossiers (Full)',1,2,'C');
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
    $pdf->cell(274,10,'Evaluation of Medical Device Dossiers (Full)',1,2,'C');
    $pdf->SetFont('Arial','',12);
    $pdf->cell(274,10,'Dossier ID: '.$data['Dossier_ID'],1,1,'L');
    $pdf->cell(274,10,'Generic Name: '.$data['Generic_name'],1,1,'L');
    $pdf->cell(274,10,'Brand Name: '.$data['Brand_name'],1,1,'L');
    $pdf->cell(274,10,'Class: '.$data['Generic_name'],1,1,'L');
    $pdf->cell(274,10,'Group: '.$data['Group_full'],1,1,'L');
    $pdf->cell(274,10,'Name of the Applicant/Market Authorization Holder: '.$data['Name_Applicant_Market'],1,1,'L');
    $pdf->cell(274,10,'Contact Details: '.$data['Name_Applicant_Market'],1,1,'L');
    $pdf->cell(274,10,'Name of the Manufacturer: '.$data['Name_Manufacturer'],1,1,'L');
    $pdf->cell(274,10,'Contact Details: '.$data['Contact_Details'],1,1,'L');
    $pdf->cell(274,10,'Application date: '.$data['date_fast'],1,1,'L');


    $pdf->AddPage('L');
    // Part A
    // Administrative Documents
    $pdf->Ln('10');
    $pdf->SetFont('Arial','B',12);
    $pdf->cell(274,10,'Administrative Documents',1,2,'C');
    $pdf->SetFont('Arial','',12);
    $pdf->Ln('5');
    // select1
    $pdf->SetFont('Arial','B',12);
    $pdf->cell(274,8,'Dully filled Application form, Letter of Authorization from the manufacturer, Declaration of Conformity',1,1,'L');
    $pdf->SetFont('Arial','',12);
    $pdf->Multicell(274,8,$data['Letter_of_Authorization'],1,1);
    $pdf->Ln('5');
    // select2
    $pdf->SetFont('Arial','B',12);
    $pdf->cell(274,8,'Quality System',1,1,'L');
    $pdf->SetFont('Arial','',12);
    $pdf->Multicell(274,8,$data['Quality'],1,1);
    $pdf->Ln('5');
    // select3
    $pdf->SetFont('Arial','B',12);
    $pdf->cell(274,8,'Free sale certificate',1,1,'L');
    $pdf->SetFont('Arial','',12);
    $pdf->Multicell(274,8,$data['Sale_certificate'],1,1);
    $pdf->Ln('5');
    // select4
    $pdf->SetFont('Arial','B',12);
    $pdf->cell(274,8,'Manufacturing Process Detail',1,1,'L');
    $pdf->SetFont('Arial','',12);
    $pdf->Multicell(274,8,$data['Manufacturing_Details'],1,1);

    $pdf->AddPage('L');
    $pdf->Ln('5');
    // select5
    $pdf->SetFont('Arial','B',12);
    $pdf->cell(274,8,'List of Configurations and/or components',1,1,'L');
    $pdf->SetFont('Arial','',12);
    $pdf->Multicell(274,8,$data['Configurations'],1,1);
    $pdf->Ln('5');
    // select6
    $pdf->SetFont('Arial','B',12);
    $pdf->cell(274,8,'Sample of Actual Product ( If applicable)',1,1,'L');
    $pdf->SetFont('Arial','',12);
    $pdf->Multicell(274,8,$data['Sample_full'],1,1);
    $pdf->Ln('5');
    // select7
    $pdf->SetFont('Arial','B',12);
    $pdf->cell(274,8,'Price structure (Market price in the country of origin)',1,1,'L');
    $pdf->SetFont('Arial','',12);
    $pdf->Multicell(274,8,$data['Price_structure'],1,1);


    $pdf->AddPage('L');

    // Part B
    $pdf->Ln('5');
    $pdf->SetFont('Arial','B',12);
    $pdf->cell(274,10,'Part B: Technical Document Requirements',1,1,'C');
    $pdf->SetFont('Arial','',12);
    $pdf->Ln('5');
    // select8
    $pdf->SetFont('Arial','B',12);
    $pdf->cell(274,8,'Executive Summary',1,1,'L');
    $pdf->SetFont('Arial','',12);
    $pdf->Multicell(274,8,$data['Executive_Summary'],1,1);
    $pdf->Ln('5');

    // select9
    $pdf->SetFont('Arial','B',12);
    $pdf->cell(274,8,'Relevant Essential Principles and Method Used to Demonstrate Conformity (Checklist) for class C and D',1,1,'L');
    $pdf->SetFont('Arial','',12);
    $pdf->Multicell(274,8,$data['Essential_Principles'],1,1);
    $pdf->Ln('5');

    // select10
    $pdf->SetFont('Arial','B',12);
    $pdf->cell(274,8,'Device Description',1,1,'L');
    $pdf->SetFont('Arial','',12);
    $pdf->Multicell(274,8,$data['Device_description'],1,1);
    $pdf->Ln('5');

    $pdf->AddPage('L');

    // select11
    $pdf->SetFont('Arial','B',12);
    $pdf->cell(274,8,'Performance Report / Certificate of Analysis',1,1,'L');
    $pdf->SetFont('Arial','',12);
    $pdf->Multicell(274,8,$data['Performance'],1,1);
    $pdf->Ln('5');

    // select12
    $pdf->SetFont('Arial','B',12);
    $pdf->cell(274,8,'Clinical Evidences for class C and D ( (if applicable)',1,1,'L');
    $pdf->SetFont('Arial','',12);
    $pdf->Multicell(274,8,$data['Clinical_Evidences'],1,1);
    $pdf->Ln('5');

    // select13
    $pdf->SetFont('Arial','B',12);
    $pdf->cell(274,8,'Device Labelling',1,1,'L');
    $pdf->SetFont('Arial','',12);
    $pdf->Multicell(274,8,$data['Labelling'],1,1);
    $pdf->Ln('5');

    // select14
    $pdf->SetFont('Arial','B',12);
    $pdf->cell(274,8,'Risk Analysis',1,1,'L');
    $pdf->SetFont('Arial','',12);
    $pdf->Multicell(274,8,$data['Risk'],1,1);
    $pdf->Ln('5');

    $pdf->AddPage('L');

    // Part C
    $pdf->Ln('5');
    $pdf->SetFont('Arial','B',12);
    $pdf->cell(274,10,'Recommendations from the Evaluator',0,1,'C');
    $pdf->SetFont('Arial','',12);
    $pdf->Ln('5');

    // Certificate of Analysis of API and Excipients:
    $pdf->Ln('5');
    $pdf->SetFont('Arial','B',12);
    $pdf->cell(274,10,'Recommended for issuance of registration certificate',1,2,'L');
    $pdf->SetFont('Arial','',12);
    $pdf->MultiCell(274, 6,$data['Recommended_issuance'], 1, 1);
    $pdf->Ln('5');

    // Certificate of Analysis of API and Excipients:
    $pdf->Ln('5');
    $pdf->SetFont('Arial','B',12);
    $pdf->cell(274,10,'Missing Document as stated below',1,2,'L');
    $pdf->SetFont('Arial','',12);
    $pdf->MultiCell(274, 6,$data['Missing_document'], 1, 1);

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
}
elseif ($type ==='medical_abr') {

    $pdf=new FPDF();
    $pdf->AddPage('L');
    
    $pdf->SetFont('Arial','',12);

    // Header
    $pdf->cell(30,30,$pdf->Image($image1, $pdf->GetX()+2, $pdf->GetY()+2, 25),1,0);
    $pdf->cell(244,15,'Evaluation of Medical Device Dossiers (Abridged)',1,2,'C');
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
    $pdf->cell(274,10,'Evaluation of Medical Device Dossiers (Abridged)',1,2,'C');
    $pdf->SetFont('Arial','',12);
    $pdf->cell(274,10,'Dossier ID: '.$data['Dossier_ID'],1,1,'L');
    $pdf->cell(274,10,'Generic Name: '.$data['Generic_name'],1,1,'L');
    $pdf->cell(274,10,'Brand Name: '.$data['Brand_name'],1,1,'L');
    $pdf->cell(274,10,'Class: '.$data['Generic_name'],1,1,'L');
    $pdf->cell(274,10,'Group: '.$data['Group_abr'],1,1,'L');
    $pdf->cell(274,10,'Name of the Applicant/Market Authorization Holder: '.$data['Name_Applicant_Market'],1,1,'L');
    $pdf->cell(274,10,'Contact Details: '.$data['Name_Applicant_Market'],1,1,'L');
    $pdf->cell(274,10,'Name of the Manufacturer: '.$data['Name_Manufacturer'],1,1,'L');
    $pdf->cell(274,10,'Contact Details: '.$data['Contact_Details'],1,1,'L');
    $pdf->cell(274,10,'Application date: '.$data['date_fast'],1,1,'L');


    $pdf->AddPage('L');
    // Part A
    // Administrative Documents
    $pdf->Ln('10');
    $pdf->SetFont('Arial','B',12);
    $pdf->cell(274,10,'Administrative Documents',1,2,'C');
    $pdf->SetFont('Arial','',12);
    $pdf->Ln('5');
    // select1
    $pdf->SetFont('Arial','B',12);
    $pdf->cell(274,8,'Dully filled Application form, Letter of Authorization from the manufacturer, Declaration of Conformity',1,1,'L');
    $pdf->SetFont('Arial','',12);
    $pdf->Multicell(274,8,$data['Letter_of_Authorization'],1,1);
    $pdf->Ln('5');
    // select2
    $pdf->SetFont('Arial','B',12);
    $pdf->cell(274,8,'Brief Description of the Quality System',1,1,'L');
    $pdf->SetFont('Arial','',12);
    $pdf->Multicell(274,8,$data['Brief'],1,1);
    $pdf->Ln('5');
    // select3
    $pdf->SetFont('Arial','B',12);
    $pdf->cell(274,8,'Free sale certificate',1,1,'L');
    $pdf->SetFont('Arial','',12);
    $pdf->Multicell(274,8,$data['Sale_certificate'],1,1);
    $pdf->Ln('5');
    // select4
    $pdf->SetFont('Arial','B',12);
    $pdf->cell(274,8,'Documentary evidences for Abridged Registration',1,1,'L');
    $pdf->SetFont('Arial','',12);
    $pdf->Multicell(274,8,$data['Evidences'],1,1);

    $pdf->AddPage('L');
    // select5
    $pdf->SetFont('Arial','B',12);
    $pdf->cell(274,8,'Manufacturing Process Detail',1,1,'L');
    $pdf->SetFont('Arial','',12);
    $pdf->Multicell(274,8,$data['Manufacturing_Details'],1,1);
    $pdf->Ln('5');
    // select6
    $pdf->SetFont('Arial','B',12);
    $pdf->cell(274,8,'List of Configurations and/or components',1,1,'L');
    $pdf->SetFont('Arial','',12);
    $pdf->Multicell(274,8,$data['Configurations'],1,1);
    $pdf->Ln('5');
    // select7
    $pdf->SetFont('Arial','B',12);
    $pdf->cell(274,8,'Sample of Actual Product ( If applicable)',1,1,'L');
    $pdf->SetFont('Arial','',12);
    $pdf->Multicell(274,8,$data['Sample_abr'],1,1);
    $pdf->Ln('5');
    // select8
    $pdf->SetFont('Arial','B',12);
    $pdf->cell(274,8,'Price structure (Market price in the country of origin)',1,1,'L');
    $pdf->SetFont('Arial','',12);
    $pdf->Multicell(274,8,$data['Price_structure'],1,1);


    $pdf->AddPage('L');

    // Part B
    $pdf->Ln('5');
    $pdf->SetFont('Arial','B',12);
    $pdf->cell(274,10,'Part B: Technical Requirements',1,1,'C');
    $pdf->SetFont('Arial','',12);
    $pdf->Ln('5');
    // select9
    $pdf->SetFont('Arial','B',12);
    $pdf->cell(274,8,'Evidence to support abridged registration',1,1,'L');
    $pdf->SetFont('Arial','',12);
    $pdf->Multicell(274,8,$data['Evidence_ABR'],1,1);
    $pdf->Ln('5');

    // select10
    $pdf->SetFont('Arial','B',12);
    $pdf->cell(274,8,'Device Description',1,1,'L');
    $pdf->SetFont('Arial','',12);
    $pdf->Multicell(274,8,$data['Device_description'],1,1);
    $pdf->Ln('5');

    // select11
    $pdf->SetFont('Arial','B',12);
    $pdf->cell(274,8,'Certificate of analysis or performance report for at least three batches/lots',1,1,'L');
    $pdf->SetFont('Arial','',12);
    $pdf->Multicell(274,8,$data['Certificate_analysis'],1,1);
    $pdf->Ln('5');

    $pdf->AddPage('L');

    // Part C
    $pdf->Ln('5');
    $pdf->SetFont('Arial','B',12);
    $pdf->cell(274,10,'Recommendations from the Evaluator',0,1,'C');
    $pdf->SetFont('Arial','',12);
    $pdf->Ln('5');

    // Certificate of Analysis of API and Excipients:
    $pdf->Ln('5');
    $pdf->SetFont('Arial','B',12);
    $pdf->cell(274,10,'Recommended for issuance of registration certificate',1,2,'L');
    $pdf->SetFont('Arial','',12);
    $pdf->MultiCell(274, 6,$data['Recommended_issuance'], 1, 1);
    $pdf->Ln('5');

    // Certificate of Analysis of API and Excipients:
    $pdf->Ln('5');
    $pdf->SetFont('Arial','B',12);
    $pdf->cell(274,10,'Missing Document as stated below',1,2,'L');
    $pdf->SetFont('Arial','',12);
    $pdf->MultiCell(274, 6,$data['Missing_document'], 1, 1);

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
}
elseif ($type ==='medical_renewal') {

    $pdf=new FPDF();
    $pdf->AddPage('L');
    
    $pdf->SetFont('Arial','',12);

    // Header
    $pdf->cell(30,30,$pdf->Image($image1, $pdf->GetX()+2, $pdf->GetY()+2, 25),1,0);
    $pdf->cell(244,15,'Evaluation of Medical Device Dossiers (Renewal)',1,2,'C');
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
    $pdf->cell(274,10,'Evaluation of Medical Device Dossiers (Renewal)',1,2,'C');
    $pdf->SetFont('Arial','',12);
    $pdf->cell(274,10,'Dossier ID: '.$data['Dossier_ID'],1,1,'L');
    $pdf->cell(274,10,'Generic Name: '.$data['Generic_name'],1,1,'L');
    $pdf->cell(274,10,'Brand Name: '.$data['Brand_name'],1,1,'L');
    $pdf->cell(274,10,'Class: '.$data['Generic_name'],1,1,'L');
    $pdf->cell(274,10,'Group: '.$data['Group_renewal'],1,1,'L');
    $pdf->cell(274,10,'Name of the Applicant/Market Authorization Holder: '.$data['Name_Applicant_Market'],1,1,'L');
    $pdf->cell(274,10,'Registration Number: '.$data['Registration_Number'],1,1,'L');
    $pdf->cell(274,10,'Contact Details: '.$data['Contact_Details'],1,1,'L');
    $pdf->cell(274,10,'Name of the Manufacturer: '.$data['Name_Manufacturer'],1,1,'L');
    $pdf->cell(274,10,'Receipt Number with date: '.$data['Receipt_Number'],1,1,'L');
    $pdf->cell(274,10,'Application date: '.$data['date_fast'],1,1,'L');
    $pdf->cell(274,10,'Email Address: '.$data['Email'],1,1,'L');


    $pdf->AddPage('L');
    // Part A
    // Administrative Documents
    $pdf->Ln('10');
    $pdf->SetFont('Arial','B',12);
    $pdf->cell(274,10,'Administrative Documents',1,2,'C');
    $pdf->SetFont('Arial','',12);
    $pdf->Ln('5');
    // select1
    $pdf->SetFont('Arial','B',12);
    $pdf->cell(274,8,'Dully filled Application form, Letter of Authorization from the manufacturer, Declaration of Conformity',1,1,'L');
    $pdf->SetFont('Arial','',12);
    $pdf->Multicell(274,8,$data['Letter_of_Authorization'],1,1);
    $pdf->Ln('5');
    // select2
    $pdf->SetFont('Arial','B',12);
    $pdf->cell(274,8,'Declaration Letter from the company stating that there is no change in all aspects of the registered product.',1,1,'L');
    $pdf->SetFont('Arial','',12);
    $pdf->Multicell(274,8,$data['Declaration_Letter'],1,1);
    $pdf->Ln('5');
    // select3
    $pdf->SetFont('Arial','B',12);
    $pdf->cell(274,8,'Copy of Initial Registration Certificate',1,1,'L');
    $pdf->SetFont('Arial','',12);
    $pdf->Multicell(274,8,$data['Initial_Registration'],1,1);
    $pdf->Ln('5');
    // select4
    $pdf->SetFont('Arial','B',12);
    $pdf->cell(274,8,'Specimen of package, label and insert where applicable(Compare with the specimen submitted during the initial registration)',1,1,'L');
    $pdf->SetFont('Arial','',12);
    $pdf->Multicell(274,8,$data['Specimen_package'],1,1);

    $pdf->AddPage('L');

    // Part C
    $pdf->Ln('5');
    $pdf->SetFont('Arial','B',12);
    $pdf->cell(274,10,'Recommendations from the Evaluator',0,1,'C');
    $pdf->SetFont('Arial','',12);
    $pdf->Ln('5');

    // Certificate of Analysis of API and Excipients:
    $pdf->Ln('5');
    $pdf->SetFont('Arial','B',12);
    $pdf->cell(274,10,'Recommended for issuance of registration certificate',1,2,'L');
    $pdf->SetFont('Arial','',12);
    $pdf->MultiCell(274, 6,$data['Recommended_issuance'], 1, 1);
    $pdf->Ln('5');

    // Certificate of Analysis of API and Excipients:
    $pdf->Ln('5');
    $pdf->SetFont('Arial','B',12);
    $pdf->cell(274,10,'Missing Document as stated below',1,2,'L');
    $pdf->SetFont('Arial','',12);
    $pdf->MultiCell(274, 6,$data['Missing_document'], 1, 1);

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
}

?>