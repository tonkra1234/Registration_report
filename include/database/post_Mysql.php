<?php


$sql = "INSERT IGNORE INTO post_approval ( Dossier_ID, Assesso_Name, Type_change, date_fast, Generic_name, Brand_name, Strength, Manufacturer, fulfilled_conditions, Justification, Inference, Show_status, Type_of_assessment)
VALUES ( '$Dossier_ID', '$Assesso_Name','$Type_change', '$date_fast','$Generic_name', '$Brand_name','$Strength','$Manufacturer','$fulfilled_conditions', '$Justification', '$Inference','$Show_status', '$Type_of_assessment')";

if ($conn->query($sql) === TRUE) {  
  echo "<script>Swal.fire(
    'New record created successfully!',
    'Please, click button to continue!',
    'success'
  ).then(function() {
    window.location = '../post_table.php';
  });
  </script>";
} 
else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

?>