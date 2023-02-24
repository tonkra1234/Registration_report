<?php


$update = "UPDATE full_track SET Assesso_Name='$Assesso_Name', Qualification='$Qualification', 
                    Dossier_ID='$Dossier_ID', date_fast='$date_fast', 
                    Application_Form_select='$select1', Application_Form_text='$text1',
                    Letter_of_Authorization_select='$select2', Letter_of_Authorization_text='$text2', 
                    Manufacturing_License_select='$select3', Manufacturing_License_text='$text3',
                    cGMP_License_select='$select4', cGMP_License_text='$text4', 
                    CoPP_select='$select5', CoPP_text='$text5',
                    Price_Structure_select='$select6', Price_Structure_text='$text6',
                    Site_Master='$Site_Master', Product_Sample='$Product_Sample',  
                    Name_of_API='$Name_of_API', Pharmacopoeia_substance='$Pharmacopoeia_substance',
                    Excipients='$Excipients', Address_of_Manufacturer='$Address_of_Manufacturer',
                    Certificate_Excipients='$Certificate_Excipients', Brand_Name='$Brand_Name',
                    Generic_Name='$Generic_Name', Description_drug='$Description_drug',
                    Composition='$Composition', Pharmacopoeia_product='$Pharmacopoeia_product',
                    In_House_Specification='$In_House_Specification', Manufacturing_Process='$Manufacturing_Process',
                    Certificate_of_analysis='$Certificate_of_analysis', Container_closure_System='$Container_closure_System',
                    Stability_Study_Data='$Stability_Study_Data', Product_Interchangeability_data='$Product_Interchangeability_data',
                    Summary_Assessment_Report='$Summary_Assessment_Report', Show_status='$Show_status' WHERE id=$id ";

print_r($update);
echo('<br>');
if ($conn->query($update) === TRUE) {
  echo "<script>Swal.fire(
    'Updated data successfully!',
    'Please, click button to continue!',
    'success'
  ).then(function() {
    window.location = './full_table.php';
  });
  </script>";
  } else {
    echo "Error updating record: " . $conn->error;
  }

?>