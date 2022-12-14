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
    $pdf->cell(137,10,'Generic_name: '.$data['Generic_name'],1,0,'L');
    $pdf->cell(137,10,'Brand_name: '.$data['Brand_name'],1,1,'L');
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
    $pdf->cell(137,10,'Assessor Name: '.$data['Assesso_Name'],1,0,'L');
    $pdf->cell(137,10,'Qualification: '.$data['Qualification'],1,1,'L');
    $pdf->cell(137,10,'Dossier ID: '.$data['Dossier_ID'],1,0,'L');
    $pdf->cell(137,10,'Date of Assessment: '.$data['date_fast'],1,1,'L');
    $pdf->cell(137,10,'Generic_name: '.$data['Generic_name'],1,0,'L');
    $pdf->cell(137,10,'Brand_name: '.$data['Brand_name'],1,1,'L');
    $pdf->cell(137,10,'Strength: '.$data['Strength'],1,0,'L');
    $pdf->cell(137,10,'Manufacturer: '.$data['Manufacturer'],1,2,'L');

    // Part 1
    // Administrative Documents
    $pdf->Ln('10');
    $pdf->SetFont('Arial','B',12);
    $pdf->cell(274,10,'Administrative Documents',1,2,'C');
    $pdf->SetFont('Arial','',12);
    // select1
    $pdf->cell(67,10,'Application Form',1,0,'L');
    $pdf->cell(20,10,$data['Application_Form_select'],1,0,'L');
    $pdf->cell(187,10,'Remarks'.$data['Application_Form_text'],1,1,'L');
    // select2
    $pdf->cell(67,10,'Letter of Authorization',1,0,'L');
    $pdf->cell(20,10,$data['Letter_of_Authorization_select'],1,0,'L');
    $pdf->cell(187,10,'Remarks'.$data['Letter_of_Authorization_text'],1,1,'L');
    // select3
    $pdf->cell(67,10,'Manufacturing License',1,0,'L');
    $pdf->cell(20,10,$data['Manufacturing_License_select'],1,0,'L');
    $pdf->cell(187,10,'Remarks'.$data['Manufacturing_License_text'],1,1,'L');
    // select4
    $pdf->cell(67,10,'cGMP License',1,0,'L');
    $pdf->cell(20,10,$data['cGMP_License_select'],1,0,'L');
    $pdf->cell(187,10,'Remarks'.$data['cGMP_License_text'],1,1,'L');
    // select5
    $pdf->cell(67,10,'CoPP',1,0,'L');
    $pdf->cell(20,10,$data['CoPP_select'],1,0,'L');
    $pdf->cell(187,10,'Remarks'.$data['CoPP_text'],1,1,'L');
    // select6
    $pdf->cell(67,10,'Price Structure',1,0,'L');
    $pdf->cell(20,10,$data['Price_Structure_select'],1,0,'L');
    $pdf->cell(187,10,'Remarks'.$data['Price_Structure_text'],1,1,'L');


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
    $pdf->cell(70,10,'Brand name',1,0,'L');
    $pdf->cell(204,10,$data['Brand_Name'] ,1,1);
    $pdf->cell(70,10,'Generic name',1,0,'L');
    $pdf->cell(204,10,$data['Generic_Name'] ,1,1);
    $pdf->cell(70,10,'Description of the Drug product',1,0,'L');
    $pdf->cell(204,10,$data['Description_drug'] ,1,1);
    $pdf->cell(70,10,'Composition',1,0,'L');
    $pdf->Multicell(204,10,$data['Composition'],1,1);
    $pdf->cell(70,10,'Reference Pharmacopoeia:',1,0,'L');
    $pdf->cell(204,10,$data['Pharmacopoeia_product'] ,1,1);

    // In-House Specification Method of Analysis
    $pdf->Ln('5');
    $pdf->SetFont('Arial','B',12);
    $pdf->cell(274,10,'In-House Specification Method of Analysis',1,2,'L');
    $pdf->SetFont('Arial','',12);
    $pdf->MultiCell(274, 6,$data['In_House_Specification'], 1, 1);

    $pdf->AddPage('L');
    $pdf->SetFont('Arial','B',12);
    $pdf->cell(274,10,'Manufacturing Process',1,2,'L');
    $pdf->SetFont('Arial','',12);
    $pdf->MultiCell(274, 6,$data['Manufacturing_Process'], 1, 1);

    $pdf->Ln('5');
    $pdf->SetFont('Arial','B',12);
    $pdf->cell(274,10,'Certificate of analysis of Drug Product',1,2,'L');
    $pdf->SetFont('Arial','',12);
    $pdf->MultiCell(274, 6,$data['Certificate_of_analysis'], 1, 1);

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
    $pdf->MultiCell(274, 6,$data['Product_Interchangeability_datas'], 1, 1);

    $pdf->AddPage('L');
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
    $pdf->cell(137,10,'Generic_name: '.$data['Generic_name'],1,0,'L');
    $pdf->cell(137,10,'Brand_name: '.$data['Brand_name'],1,1,'L');
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

    // Inference
    $pdf->Ln('5');
    $pdf->SetFont('Arial','B',12);
    $pdf->cell(274,10,'Inference',1,2,'C');
    $pdf->SetFont('Arial','',12);
    $pdf->Multicell(274,6,$data['Inference'], 1, 1);


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
    $pdf->cell(137,10,'Type of change: '.$data['Type_change'],1,0,'L');
    $pdf->cell(137,10,'Date of Assessment: '.$data['date_fast'],1,1,'L');
    $pdf->cell(137,10,'Generic name: '.$data['Generic_name'],1,0,'L');
    $pdf->cell(137,10,'Brand name: '.$data['Brand_name'],1,1,'L');
    $pdf->cell(137,10,'Strength: '.$data['Strength'],1,0,'L');
    $pdf->cell(137,10,'Manufacturer: '.$data['Manufacturer'],1,2,'L');

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

    // Inference
    $pdf->Ln('5');
    $pdf->SetFont('Arial','B',12);
    $pdf->cell(274,10,'  Inference',1,2,'L');
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

?>