<?php


$sql = "UPDATE medical_full SET Dossier_ID='$Dossier_ID', Generic_name='$Generic_name', Brand_name='$Brand_name', Class='$Class', Group_full='$Group_full', 
Name_Applicant_Market='$Name_Applicant_Market', Contact_Details='$Contact_Details', Name_Manufacturer='$Name_Manufacturer', date_fast='$date_fast', Letter_of_Authorization='$Letter_of_Authorization', Quality='$Quality', 
Sale_certificate='$Sale_certificate', Manufacturing_Details='$Manufacturing_Details', Configurations='$Configurations', Sample_full='$Sample', Price_structure='$Price_structure', Executive_Summary='$Executive_Summary',Essential_Principles='$Essential_Principles', 
Device_description='$Device_description', Performance='$Performance', Clinical_Evidences='$Clinical_Evidences', Labelling='$Labelling',Risk='$Risk',Recommended_issuance='$Recommended_issuance', Missing_document='$Missing_document', Show_status='$Show_status' WHERE id=$id ";

if ($conn->query($sql) === TRUE) {
  echo "<script>Swal.fire(
    'Updated data successfully!',
    'Please, click button to continue!',
    'success'
  ).then(function() {
    window.location = './medical_full_table.php';
  });
  </script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

?>
