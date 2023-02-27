<?php


$sql = "INSERT IGNORE INTO medical_renewal ( Dossier_ID, Generic_name, Brand_name, Class, Group_renewal, 
Name_Applicant_Market, Registration_Number, Contact_Details, Name_Manufacturer, date_fast, Receipt_Number, Email, Letter_of_Authorization, Declaration_Letter, 
Initial_Registration, Specimen_package, Recommended_issuance, Missing_document, Show_status)
VALUES ('$Dossier_ID', '$Generic_name', '$Brand_name','$Class','$Group_renewal',
'$Name_Applicant_Market','$Registration_Number', '$Contact_Details','$Name_Manufacturer','$date_fast','$Receipt_Number','$Email','$Letter_of_Authorization','$Declaration_Letter',
'$Initial_Registration','$Specimen_package','$Recommended_issuance','$Missing_document','$Show_status')";

if ($conn->query($sql) === TRUE) {
  echo "<script>Swal.fire(
    'New record created successfully!',
    'Please, click button to continue!',
    'success'
  ).then(function() {
    window.location = '../medical_evaluation_table.php';
  });
  </script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

?>