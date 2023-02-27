<?php


$sql = "INSERT IGNORE INTO full_track (Assesso_Name, Qualification, 
                    Dossier_ID, date_fast, 
                    Application_Form_select, Application_Form_text,
                    Letter_of_Authorization_select, Letter_of_Authorization_text, 
                    Manufacturing_License_select, Manufacturing_License_text,
                    cGMP_License_select, cGMP_License_text, 
                    CoPP_select, CoPP_text,
                    Price_Structure_select, Price_Structure_text,
                    Site_Master, Product_Sample,  
                    Name_of_API, Pharmacopoeia_substance,
                    Excipients, Address_of_Manufacturer,
                    Certificate_Excipients, Brand_Name,
                    Generic_Name, Description_drug,
                    Composition, Pharmacopoeia_product,
                    In_House_Specification, Manufacturing_Process,
                    Certificate_of_analysis, Container_closure_System,
                    Stability_Study_Data, Product_Interchangeability_data,
                    Summary_Assessment_Report, Show_status
                    )
VALUES ('$Assesso_Name', '$Qualification', '$Dossier_ID', 
        '$date_fast', '$select1', '$text1',
        '$select2', '$text2',
        '$select3', '$text3',
        '$select4', '$text4',
        '$select5', '$text5',
        '$select6', '$text6',
        '$Site_Master', '$Product_Sample',
        '$Name_of_API', '$Pharmacopoeia_substance',
        '$Excipients', '$Address_of_Manufacturer',
        '$Certificate_Excipients', '$Brand_Name',
        '$Generic_Name', '$Description_drug',
        '$Composition', '$Pharmacopoeia_product',
        '$In_House_Specification ', '$Manufacturing_Process',
        '$Certificate_of_analysis', '$Container_closure_System',
        '$Stability_Study_Data', '$Product_Interchangeability_data',
        '$Summary_Assessment_Report','$Show_status'
        )";

if ($conn->query($sql) === TRUE) {
  echo "<script>Swal.fire(
    'New record created successfully!',
    'Please, click button to continue!',
    'success'
  ).then(function() {
    window.location = '../full_table.php';
  });
  </script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

?>