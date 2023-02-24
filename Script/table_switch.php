<?php

@include '../include/database/connection.php';

$report = $_POST["title"];
$month_year = $_POST["month"];

$time  = strtotime($month_year);
$year = date('Y',$time);
$month = date('m',$time);


?>
<?php if($report === "fast_track") : ?>
<?php
    if($month_year === ""){
        $sql = "SELECT * FROM fast_track";
        $result_fast = mysqli_query ($conn, $sql);
    }    
    else{
        $sql = "SELECT * FROM fast_track WHERE MONTH(Date_fast) = $month and Year(Date_fast) = $year";
        $result_fast = mysqli_query ($conn, $sql);    
    }
    
        
?>
<table class="table table-hover table-bordered">
    <thead>
        <tr class="table-info">
            <th scope="col">No.</th>
            <th scope="col">Dossier ID</th>
            <th scope="col">Assessor's Name</th>
            <th scope="col">Date of Assessment</th>
            <th scope="col">Status</th>
            <th scope="col">Details</th>
            <th scope="col">Report</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $No =1;
        if ($result_fast->num_rows > 0){
            while ($row_fast = mysqli_fetch_array($result_fast)){
        ?>
        <tr>
            <th scope="row"><?php echo $No;?></th>
            <td><?php echo $row_fast["Dossier_ID"]; ?></td>
            <td><?php echo $row_fast["Assesso_Name"]; ?></td>
            <td><?php echo $row_fast["Date_fast"]; ?></td>
            <td class="text-center align-middle">
                <?php if(((array_key_exists("Show_status",$row_fast)) ? $row_fast["Show_status"] : "" ) === "Approve") : ?>
                <span class="badge bg-success"><?php echo $row_fast["Show_status"] ?></span></td>
            <?php elseif(((array_key_exists("Show_status",$row_fast)) ? $row_fast["Show_status"] : "" ) === "Reject") : ?>
                <span class="badge bg-danger"><?php echo $row_fast["Show_status"] ?></span></td>
            <?php else : ?>
                <span class="badge bg-warning text-dark"><?php echo (array_key_exists("Show_status",$row_fast)) ? $row_fast["Show_status"] : "" ; ?></span>
            </td>
            <?php endif; ?></td>
            <td class="text-center"><a type="button" class="btn btn-primary" href="./detail.php?id=<?php echo $row_fast["id"];?>&type=fast_track">Click</a></td>
            <td class="text-center"><a type="button" class="btn btn-success" href="./report_show.php?id=<?php echo $row_fast["id"];?>&type=fast_track">Click</a></td>
        </tr>
        <?php
            $No++;
            }
        }
        else{
        ?>
        <td colspan="7" class="text-center fs-3 py-5">Not found data</td>
        <?php    
        }
        ?>

    </tbody>
</table>
<?php elseif($report === "full_dossier") : ?>
<?php
        if($month_year === ""){
            $sql = "SELECT * FROM full_track";
            $result_full = mysqli_query ($conn, $sql); 
        }    
        else{  
            $sql = "SELECT * FROM full_track WHERE MONTH(date_fast) = $month and Year(date_fast) = $year";
            $result_full = mysqli_query ($conn, $sql);  
        }    
        
    ?>
<table class="table table-hover table-bordered">
    <thead>
        <tr class="table-info">
            <th scope="col">No.</th>
            <th scope="col">Dossier ID</th>
            <th scope="col">Assessor's Name</th>
            <th scope="col">Date of Assessment</th>
            <th scope="col">Qualification</th>
            <th scope="col">Status</th>
            <th scope="col">Details</th>
            <th scope="col">Report</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $No =1;
        if ($result_full->num_rows > 0){
            while ($row_full = mysqli_fetch_array($result_full)){
        ?>
        <tr>
            <th scope="row"><?php echo $No;?></th>
            <td><?php echo $row_full["Dossier_ID"]; ?></td>
            <td><?php echo $row_full["Assesso_Name"]; ?></td>
            <td><?php echo $row_full["date_fast"]; ?></td>
            <td><?php echo $row_full["Qualification"]; ?></td>
            <td class="text-center align-middle">
                <?php if(((array_key_exists("Show_status",$row_full)) ? $row_full["Show_status"] : "" ) === "Approve") : ?>
                <span class="badge bg-success"><?php echo $row_full["Show_status"] ?></span></td>
            <?php elseif(((array_key_exists("Show_status",$row_full)) ? $row_full["Show_status"] : "" ) === "Reject") : ?>
                <span class="badge bg-danger"><?php echo $row_full["Show_status"] ?></span></td>
            <?php else : ?>
                <span class="badge bg-warning text-dark"><?php echo (array_key_exists("Show_status",$row_full)) ? $row_full["Show_status"] : "" ; ?></span>
            </td>
            <?php endif; ?></td>
            <td class="text-center"><a type="button" class="btn btn-primary" href="./detail.php?id=<?php echo $row_full["id"];?>&type=full_track">Click</a></td>
            <td class="text-center"><a type="button" class="btn btn-success" href="./report_show.php?id=<?php echo $row_full["id"];?>&type=full_track">Click</a></td>
        </tr>
        <?php
            $No++;
            }
        }
        else{
        ?>
        <td colspan="8" class="text-center fs-3 py-5">Not found data</td>
        <?php    
        }
        ?>

    </tbody>
</table>
<?php elseif($report === "Following_up") : ?>
<?php

    if($month_year === ""){ 
        $sql = "SELECT * FROM follow_up";
        $result_follow = mysqli_query ($conn, $sql);
    }    
    else{
        $sql = "SELECT * FROM follow_up WHERE MONTH(date_fast) = $month and Year(date_fast) = $year";
        $result_follow = mysqli_query ($conn, $sql);
    }       
        
    ?>
<table class="table table-hover table-bordered">
    <thead>
        <tr class="table-info">
            <th scope="col">No.</th>
            <th scope="col">Dossier ID</th>
            <th scope="col">Assessor's Name</th>
            <th scope="col">Date of Assessment</th>
            <th scope="col">Communication round</th>
            <th scope="col">Type of assessment</th>
            <th scope="col">Status</th>
            <th scope="col">Details</th>
            <th scope="col">Report</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $No =1;
        if ($result_follow->num_rows > 0){
            while ($row_follow = mysqli_fetch_array($result_follow)){
        ?>
        <tr>
            <th scope="row"><?php echo $No;?></th>
            <td><?php echo $row_follow["Dossier_ID"]; ?></td>
            <td><?php echo $row_follow["Assesso_Name"]; ?></td>
            <td><?php echo $row_follow["date_fast"]; ?></td>
            <td><?php echo $row_follow["Communication_round"]; ?></td>
            <td><?php echo $row_follow["Type_of_assessment"]; ?></td>
            <td class="text-center align-middle">
                <?php if(((array_key_exists("Show_status",$row_follow)) ? $row_follow["Show_status"] : "" ) === "Approve") : ?>
                <span class="badge bg-success"><?php echo $row_follow["Show_status"] ?></span></td>
            <?php elseif(((array_key_exists("Show_status",$row_follow)) ? $row_follow["Show_status"] : "" ) === "Reject") : ?>
                <span class="badge bg-danger"><?php echo $row_follow["Show_status"] ?></span></td>
            <?php else : ?>
                <span class="badge bg-warning text-dark"><?php echo (array_key_exists("Show_status",$row_follow)) ? $row_follow["Show_status"] : "" ; ?></span>
            </td>
            <?php endif; ?></td>
            <td class="text-center"><a type="button" class="btn btn-primary" href="./detail.php?id=<?php echo $row_follow["id"];?>&type=follow_up">Click</a></td>
            <td class="text-center"><a type="button" class="btn btn-success" href="./report_show.php?id=<?php echo $row_follow["id"];?>&type=follow_up">Click</a></td>         
        </tr>
        <?php
            $No++;
            }
        }
        else{
        ?>
        <td colspan="9" class="text-center fs-3 py-5">Not found data</td>
        <?php    
        }
        ?>

    </tbody>
</table>
<?php elseif($report === "Health_supplement") : ?>
<?php

    $sql = "SELECT * FROM health_supplement";
    $result_health = mysqli_query ($conn, $sql);
        
?>
<table class="table table-hover table-bordered">
    <thead>
        <tr class="table-info">
            <th scope="col">No.</th>
            <th scope="col">Product name</th>
            <th scope="col">Supplement id</th>
            <th scope="col">Category</th>
            <th scope="col">Status</th>
            <th scope="col">Details</th>
            <th scope="col">Report</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $No =1;
        if ($result_health->num_rows > 0){
            while ($row_health = mysqli_fetch_array($result_health)){
        ?>
        <tr>
            <th scope="row"><?php echo $No;?></th>
            <td><?php echo $row_health["Product_name"]; ?></td>
            <td><?php echo $row_health["supplement_id"]; ?></td>
            <td><?php echo $row_health["Category"]; ?></td>
            <td class="text-center align-middle">
                <?php if(((array_key_exists("Show_status",$row_health)) ? $row_health["Show_status"] : "" ) === "Approve") : ?>
                <span class="badge bg-success"><?php echo $row_health["Show_status"] ?></span></td>
            <?php elseif(((array_key_exists("Show_status",$row_health)) ? $row_health["Show_status"] : "" ) === "Reject") : ?>
                <span class="badge bg-danger"><?php echo $row_health["Show_status"] ?></span></td>
            <?php else : ?>
                <span class="badge bg-warning text-dark"><?php echo (array_key_exists("Show_status",$row_health)) ? $row_health["Show_status"] : "" ; ?></span>
            </td>
            <?php endif; ?></td>
            <td class="text-center"><a type="button" class="btn btn-primary" href="./detail.php?id=<?php echo $row_health["id"];?>&type=health_supplement">Click</a></td>
            <td class="text-center"><a type="button" class="btn btn-success" href="./report_show.php?id=<?php echo $row_health["id"];?>&type=health_supplement">Click</a></td>         
        </tr>
        <?php
            $No++;
            }
        }
        else{
        ?>
        <td colspan="8" class="text-center fs-3 py-5">Not found data</td>
        <?php    
        }
        ?>

    </tbody>
</table>
<?php elseif($report === "Post_approval") : ?>
<?php
    if($month_year === ""){ 
        $sql = "SELECT * FROM post_approval";
        $result_post = mysqli_query ($conn, $sql);
          
    }    
    else{
        $sql = "SELECT * FROM post_approval WHERE MONTH(date_fast) = $month and Year(date_fast) = $year";
        $result_post = mysqli_query ($conn, $sql);
    }       
        
    ?>
<table class="table table-hover table-bordered">
    <thead>
        <tr class="table-info">
            <th scope="col">No.</th>
            <th scope="col">Dossier ID</th>
            <th scope="col">Assessor's Name</th>
            <th scope="col">Type of change</th>
            <th scope="col">Date of Assessment</th>
            <th scope="col">Type of assessment</th>
            <th scope="col">Status</th>
            <th scope="col">Details</th>
            <th scope="col">Report</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $No =1;
        if ($result_post->num_rows > 0){
            while ($row_post = mysqli_fetch_array($result_post)){
        ?>
        <tr>
            <th scope="row"><?php echo $No;?></th>
            <td><?php echo $row_post["Dossier_ID"]; ?></td>
            <td><?php echo $row_post["Assesso_Name"]; ?></td>
            <td><?php echo $row_post["Type_change"]; ?></td>
            <td><?php echo $row_post["date_fast"]; ?></td>
            <td><?php echo $row_post["Type_of_assessment"]; ?></td>
            <td class="text-center align-middle">
                <?php if(((array_key_exists("Show_status",$row_post)) ? $row_post["Show_status"] : "" ) === "Approve") : ?>
                <span class="badge bg-success"><?php echo $row_post["Show_status"] ?></span></td>
            <?php elseif(((array_key_exists("Show_status",$row_post)) ? $row_post["Show_status"] : "" ) === "Reject") : ?>
                <span class="badge bg-danger"><?php echo $row_post["Show_status"] ?></span></td>
            <?php else : ?>
                <span class="badge bg-warning text-dark"><?php echo (array_key_exists("Show_status",$row_post)) ? $row_post["Show_status"] : "" ; ?></span>
            </td>
            <?php endif; ?></td>
            <td class="text-center"><a type="button" class="btn btn-primary" href="./detail.php?id=<?php echo $row_post["id"];?>&type=post_approval">Click</a></td>
            <td class="text-center"><a type="button" class="btn btn-success" href="./report_show.php?id=<?php echo $row_post["id"];?>&type=post_approval">Click</a></td>         
        </tr>
        <?php
            $No++;
            }
        }
        else{
        ?>
        <td colspan="9" class="text-center fs-3 py-5">Not found data</td>
        <?php    
        }
        ?>

    </tbody>
</table>

<?php elseif($report === "Medical_full") : ?>
<?php
        if($month_year === ""){
            $sql = "SELECT * FROM medical_full";
            $result_full = mysqli_query ($conn, $sql); 
        }    
        else{  
            $sql = "SELECT * FROM medical_full WHERE MONTH(date_fast) = $month and Year(date_fast) = $year";
            $result_full = mysqli_query ($conn, $sql);  
        }    
        
    ?>
<table class="table table-hover table-bordered">
    <thead>
        <tr class="table-info">
            <th scope="col">No.</th>
            <th scope="col">Dossier ID</th>
            <th scope="col">Date of Assessment</th>
            <th scope="col">Brand name</th>
            <th scope="col">Status</th>
            <th scope="col">Details</th>
            <th scope="col">Report</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $No =1;
        if ($result_full->num_rows > 0){
            while ($row_full = mysqli_fetch_array($result_full)){
        ?>
        <tr>
            <th scope="row"><?php echo $No;?></th>
            <td><?php echo $row_full["Dossier_ID"]; ?></td>
            <td><?php echo $row_full["date_fast"]; ?></td>
            <td><?php echo $row_full["Brand_name"]; ?></td>
            <td class="text-center align-middle">
                <?php if(((array_key_exists("Show_status",$row_full)) ? $row_full["Show_status"] : "" ) === "Approve") : ?>
                <span class="badge bg-success"><?php echo $row_full["Show_status"] ?></span></td>
            <?php elseif(((array_key_exists("Show_status",$row_full)) ? $row_full["Show_status"] : "" ) === "Reject") : ?>
                <span class="badge bg-danger"><?php echo $row_full["Show_status"] ?></span></td>
            <?php else : ?>
                <span class="badge bg-warning text-dark"><?php echo (array_key_exists("Show_status",$row_full)) ? $row_full["Show_status"] : "" ; ?></span>
            </td>
            <?php endif; ?></td>
            <td class="text-center"><a type="button" class="btn btn-primary" href="./detail.php?id=<?php echo $row_full["id"];?>&type=medical_full">Click</a></td>
            <td class="text-center"><a type="button" class="btn btn-success" href="./report_show.php?id=<?php echo $row_full["id"];?>&type=medical_full">Click</a></td>
        </tr>
        <?php
            $No++;
            }
        }
        else{
        ?>
        <td colspan="8" class="text-center fs-3 py-5">Not found data</td>
        <?php    
        }
        ?>

    </tbody>
</table>
<?php elseif($report === "Medical_ABR") : ?>
<?php
        if($month_year === ""){
            $sql = "SELECT * FROM medical_abr";
            $result_full = mysqli_query ($conn, $sql); 
        }    
        else{  
            $sql = "SELECT * FROM medical_abr WHERE MONTH(date_fast) = $month and Year(date_fast) = $year";
            $result_full = mysqli_query ($conn, $sql);  
        }    
        
    ?>
<table class="table table-hover table-bordered">
    <thead>
        <tr class="table-info">
            <th scope="col">No.</th>
            <th scope="col">Dossier ID</th>
            <th scope="col">Date of Assessment</th>
            <th scope="col">Brand name</th>
            <th scope="col">Status</th>
            <th scope="col">Details</th>
            <th scope="col">Report</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $No =1;
        if ($result_full->num_rows > 0){
            while ($row_full = mysqli_fetch_array($result_full)){
        ?>
        <tr>
            <th scope="row"><?php echo $No;?></th>
            <td><?php echo $row_full["Dossier_ID"]; ?></td>
            <td><?php echo $row_full["date_fast"]; ?></td>
            <td><?php echo $row_full["Brand_name"]; ?></td>
            <td class="text-center align-middle">
                <?php if(((array_key_exists("Show_status",$row_full)) ? $row_full["Show_status"] : "" ) === "Approve") : ?>
                <span class="badge bg-success"><?php echo $row_full["Show_status"] ?></span></td>
            <?php elseif(((array_key_exists("Show_status",$row_full)) ? $row_full["Show_status"] : "" ) === "Reject") : ?>
                <span class="badge bg-danger"><?php echo $row_full["Show_status"] ?></span></td>
            <?php else : ?>
                <span class="badge bg-warning text-dark"><?php echo (array_key_exists("Show_status",$row_full)) ? $row_full["Show_status"] : "" ; ?></span>
            </td>
            <?php endif; ?></td>
            <td class="text-center"><a type="button" class="btn btn-primary" href="./detail.php?id=<?php echo $row_full["id"];?>&type=medical_abr">Click</a></td>
            <td class="text-center"><a type="button" class="btn btn-success" href="./report_show.php?id=<?php echo $row_full["id"];?>&type=medical_abr">Click</a></td>
        </tr>
        <?php
            $No++;
            }
        }
        else{
        ?>
        <td colspan="8" class="text-center fs-3 py-5">Not found data</td>
        <?php    
        }
        ?>

    </tbody>
</table>
<?php elseif($report === "Medical_renewal") : ?>
<?php
        if($month_year === ""){
            $sql = "SELECT * FROM medical_renewal";
            $result_full = mysqli_query ($conn, $sql); 
        }    
        else{  
            $sql = "SELECT * FROM medical_renewal WHERE MONTH(date_fast) = $month and Year(date_fast) = $year";
            $result_full = mysqli_query ($conn, $sql);  
        }    
        
    ?>
<table class="table table-hover table-bordered">
    <thead>
        <tr class="table-info">
            <th scope="col">No.</th>
            <th scope="col">Dossier ID</th>
            <th scope="col">Date of Assessment</th>
            <th scope="col">Brand name</th>
            <th scope="col">Status</th>
            <th scope="col">Details</th>
            <th scope="col">Report</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $No =1;
        if ($result_full->num_rows > 0){
            while ($row_full = mysqli_fetch_array($result_full)){
        ?>
        <tr>
            <th scope="row"><?php echo $No;?></th>
            <td><?php echo $row_full["Dossier_ID"]; ?></td>
            <td><?php echo $row_full["date_fast"]; ?></td>
            <td><?php echo $row_full["Brand_name"]; ?></td>
            <td class="text-center align-middle">
                <?php if(((array_key_exists("Show_status",$row_full)) ? $row_full["Show_status"] : "" ) === "Approve") : ?>
                <span class="badge bg-success"><?php echo $row_full["Show_status"] ?></span></td>
            <?php elseif(((array_key_exists("Show_status",$row_full)) ? $row_full["Show_status"] : "" ) === "Reject") : ?>
                <span class="badge bg-danger"><?php echo $row_full["Show_status"] ?></span></td>
            <?php else : ?>
                <span class="badge bg-warning text-dark"><?php echo (array_key_exists("Show_status",$row_full)) ? $row_full["Show_status"] : "" ; ?></span>
            </td>
            <?php endif; ?></td>
            <td class="text-center"><a type="button" class="btn btn-primary" href="./detail.php?id=<?php echo $row_full["id"];?>&type=medical_renewal">Click</a></td>
            <td class="text-center"><a type="button" class="btn btn-success" href="./report_show.php?id=<?php echo $row_full["id"];?>&type=medical_renewal">Click</a></td>
        </tr>
        <?php
            $No++;
            }
        }
        else{
        ?>
        <td colspan="8" class="text-center fs-3 py-5">Not found data</td>
        <?php    
        }
        ?>

    </tbody>
</table>

<?php endif; ?>