<?php

include 'connection.php';

$sql = "INSERT INTO follow_up (Dossier_ID, Assesso_Name, date_fast, Communication_round, Generic_name, Brand_name, Strength, Manufacturer, Missing_documents, Query_responses, Inference, Show_status, Type_of_assessment)
VALUES ('$Dossier_ID', '$Assesso_Name', '$date_fast','$Communication_round','$Generic_name', '$Brand_name','$Strength','$Manufacturer','$Missing_documents', '$Query_responses','$Inference','$Show_status','$Type_of_assessment')";

if ($conn->query($sql) === TRUE) {
  echo "<script>alert('New record created successfully')</script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

?>