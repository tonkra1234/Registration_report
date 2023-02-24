<?php


$sql = "INSERT IGNORE INTO medical_full ( Dossier_ID, Generic_name, Brand_name, Class, Group_full, 
Name_Applicant_Market, Contact_Details, Name_Manufacturer, date_fast, Letter_of_Authorization, Quality, 
Sale_certificate, Manufacturing_Details, Configurations, Sample_full, Price_structure, Executive_Summary, Essential_Principles, 
Device_description, Performance, Clinical_Evidences, Labelling,Risk,Recommended_issuance,Missing_document, Show_status)
VALUES ('$Dossier_ID', '$Generic_name', '$Brand_name','$Class','$Group_full',
'$Name_Applicant_Market', '$Contact_Details','$Name_Manufacturer','$date_fast','$Letter_of_Authorization','$Quality',
'$Sale_certificate','$Manufacturing_Details','$Configurations','$Sample','$Price_structure','$Executive_Summary','$Essential_Principles',
'$Device_description','$Performance','$Clinical_Evidences','$Labelling','$Risk','$Recommended_issuance','$Missing_document','$Show_status')";

if ($conn->query($sql) === TRUE) {
  echo "<script>Swal.fire(
    'New record created successfully!',
    'Please, click button to continue!',
    'success'
  ).then(function() {
    window.location = '../table.php';
  });
  </script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

?>