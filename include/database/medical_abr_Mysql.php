<?php


$sql = "INSERT IGNORE INTO medical_abr ( Dossier_ID, Generic_name, Brand_name, Class, Group_abr, 
Name_Applicant_Market, Contact_Details, Name_Manufacturer, date_fast, Letter_of_Authorization, Brief, 
Sale_certificate, Evidences, Manufacturing_Details, Configurations, Sample_abr, Price_structure, Evidence_ABR, 
Device_description, Certificate_analysis, Recommended_issuance, Missing_document, Show_status)
VALUES ('$Dossier_ID', '$Generic_name', '$Brand_name','$Class','$Group_abr',
'$Name_Applicant_Market', '$Contact_Details','$Name_Manufacturer','$date_fast','$Letter_of_Authorization','$Brief',
'$Sale_certificate','$Evidences','$Manufacturing_Details','$Configurations','$Sample','$Price_structure','$Evidence_ABR',
'$Device_description','$Certificate_analysis','$Recommended_issuance','$Missing_document','$Show_status')";

if ($conn->query($sql) === TRUE) {
  echo "<script>Swal.fire(
    'New record created successfully!',
    'Please, click button to continue!',
    'success'
  ).then(function() {
    window.location = '../medical_abr_table.php';
  });
  </script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

?>