<?php

include 'connection.php';

$sql = "INSERT INTO fast_track (Registration_Type, Dossier_ID, Assesso_Name, Date_fast, Generic_name, Brand_name, Strength, Manufacturer, Observation, Inference, Show_status)
VALUES ('$Registration_Type', '$Dossier_ID', '$Assesso_Name', '$date_fast','$Generic_name', '$Brand_name','$Strength','$Manufacturer','$Observation', '$Inference','$Show_status')";

if ($conn->query($sql) === TRUE) {
  echo "<script>alert('New record created successfully')</script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

?>