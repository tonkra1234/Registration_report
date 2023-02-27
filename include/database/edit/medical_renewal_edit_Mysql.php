<?php


$sql = "UPDATE medical_renewal SET Dossier_ID='$Dossier_ID', Generic_name='$Generic_name', Brand_name='$Brand_name', Class='$Class', Group_renewal='$Group_renewal', 
Name_Applicant_Market='$Name_Applicant_Market',Registration_Number='$Registration_Number', Contact_Details='$Contact_Details', Name_Manufacturer='$Name_Manufacturer', date_fast='$date_fast',Receipt_Number='$Receipt_Number', Email='$Email', Letter_of_Authorization='$Letter_of_Authorization', Declaration_Letter='$Declaration_Letter', 
Initial_Registration='$Initial_Registration', Specimen_package='$Specimen_package', Recommended_issuance='$Recommended_issuance', Missing_document='$Missing_document', Show_status='$Show_status' WHERE id=$id ";

if ($conn->query($sql) === TRUE) {
  echo "<script>Swal.fire(
    'Updated data successfully!',
    'Please, click button to continue!',
    'success'
  ).then(function() {
    window.location = './medical_evaluation_table.php';
  });
  </script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

?>