<?php

$update = "UPDATE health_supplement SET Product_name ='$Product_name', supplement_id='$supplement_id', Applicant_Details='$Applicant_Details',
Category='$Category', Manufacturer_Details='$Manufacturer_Details', Label_Claim='$Label_Claim', Title_Evidence='$Title_Evidence', 
check1='$check1', check2='$check2', check3='$check3', check4='$check4', check5='$check5', check6='$check6', 
Verification_Evidence='$Verification_Evidence', link='$URL', evidence_support_label='$evidence_support_label', conclusion='$conclusion', Show_status='$Show_status'
WHERE id=$id ";

if ($conn->query($update) === TRUE) {
    echo "Record updated successfully";
  } else {
    echo "Error updating record: " . $conn->error;
  }

?>