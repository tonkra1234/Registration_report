<?php

$update = "UPDATE post_approval SET Dossier_ID='$Dossier_ID', Assesso_Name='$Assesso_Name', Type_change='$Type_change', date_fast='$date_fast', 
Generic_name='$Generic_name',Brand_name='$Brand_name', Strength='$Strength', 
Manufacturer='$Manufacturer', fulfilled_conditions='$fulfilled_conditions', Justification='$Justification', Inference='$Inference', 
Show_status='$Show_status', Type_of_assessment='$Type_of_assessment' WHERE id=$id";

if ($conn->query($update) === TRUE) {
    echo "Record updated successfully";
  } else {
    echo "Error updating record: " . $conn->error;
  }

?>