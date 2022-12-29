<?php

include 'connection.php';

$sql = "INSERT INTO health_supplement (Product_name, supplement_id, Applicant_Details, Category, Manufacturer_Details, Label_Claim, Title_Evidence, check1, check2, check3, check4, check5, check6, Verification_Evidence, link, evidence_support_label, conclusion, Show_status)
VALUES ('$Product_name', '$supplement_id', '$Applicant_Details','$Category','$Manufacturer_Details', '$Label_Claim','$Title_Evidence','$check1','$check2', '$check3','$check4','$check5', '$check6','$Verification_Evidence','$URL', '$evidence_support_label','$conclusion','$Show_status')";

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