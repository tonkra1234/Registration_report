<?php


$sql = "UPDATE medical_abr SET Dossier_ID='$Dossier_ID', Generic_name='$Generic_name', Brand_name='$Brand_name', Class='$Class', Group_abr='$Group_abr', 
Name_Applicant_Market='$Name_Applicant_Market', Contact_Details='$Contact_Details', Name_Manufacturer='$Name_Manufacturer', date_fast='$date_fast', Letter_of_Authorization='$Letter_of_Authorization', Brief='$Brief', 
Sale_certificate='$Sale_certificate', Evidences='$Evidences', Manufacturing_Details='$Manufacturing_Details', Configurations='$Configurations', Sample_abr='$Sample', Price_structure='$Price_structure', Evidence_ABR='$Evidence_ABR', 
Device_description='$Device_description', Certificate_analysis='$Certificate_analysis', Recommended_issuance='$Recommended_issuance', Missing_document='$Missing_document', Show_status='$Show_status' WHERE id=$id ";

if ($conn->query($sql) === TRUE) {
  echo "<script>Swal.fire(
    'Updated data successfully!',
    'Please, click button to continue!',
    'success'
  ).then(function() {
    window.location = './medical_abr_table.php';
  });
  </script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

?>