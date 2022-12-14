<?php

        
$update = "UPDATE fast_track SET Registration_Type='$Registration_Type', Dossier_ID='$Dossier_ID', Assesso_Name='$Assesso_Name', Date_fast='$date_fast', Generic_name='$Generic_name', Brand_name='$Brand_name', Strength='$Strength', Manufacturer='$Manufacturer', Observation='$Observation', Inference='$Inference', Show_status='$Show_status' WHERE id=$id";

if ($conn->query($update) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}



?>