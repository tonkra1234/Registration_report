<?php


$update = "UPDATE follow_up SET Dossier_ID='$Dossier_ID', Assesso_Name='$Assesso_Name', date_fast='$date_fast', Communication_round='$Communication_round', 
Generic_name='$Generic_name', Brand_name='$Brand_name', Strength='$Strength', Manufacturer='$Manufacturer', 
Missing_documents='$Missing_documents', Query_responses='$Query_responses', Inference='$Inference', Show_status='$Show_status', Type_of_assessment='$Type_of_assessment' WHERE id=$id ";

if ($conn->query($update) === TRUE) {
    echo "Record updated successfully";
  } else {
    echo "Error updating record: " . $conn->error;
  }

?>