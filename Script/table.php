<?php

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:../Login/login_form.php');
}

$user_name = $_SESSION['user_name'];
$_SESSION['user_name'] = $user_name;

// variable to store number of rows per page
$total_records_per_page = 5;   

// update the active page number
if (isset($_GET['page_no']) && $_GET['page_no']!="") {
    $page_no = $_GET['page_no'];
} else {
    $page_no = 1;
}

// get the initial page number
$offset = ($page_no-1) * $total_records_per_page;


@include '../include/database/connection.php';

$sql = "SELECT * FROM fast_track";
$result_fast = mysqli_query ($conn, $sql);

require '../include/layout/header.php';
?>
<div class="container-fluid">
            <div class="col-sm p-3 min-vh-100">
                
                <div class="container-fluid p-5">
                    <div class="card shadow">
                        <div class="card-header d-flex justify-content-between">
                            <div class="my-1">
                                <h4 class="pt-1" style="color: #326292 ;">Table of resgistration</h4>
                            </div>
                            <div class="d-flex">
                                <input type="month" value="" id="monthPicker"
                                    class="monthPicker form-control align-middle mx-2" onchange="selectReport()">
                                <select class="form-select mx-2" aria-label="Default select example" id="report"
                                    onchange="selectReport()">
                                    <option value="fast_track">Fast tracking</option>
                                    <option value="full_dossier">Full dossier</option>
                                    <option value="Following_up">Following up</option>
                                    <option value="Health_supplement">Health supplement</option>
                                    <option value="Post_approval">Post approval</option>
                                    <option value="Medical_full">Medical full</option>
                                    <option value="Medical_ABR">Medical ABR</option>
                                    <option value="Medical_renewal">Medical renewal</option>
                                </select>
                            </div>
                        </div>
                        <div class="" id="switch_table">
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
                                            <span class="badge bg-success"><?php echo $row_fast["Show_status"] ?></span>
                                        </td>
                                        <?php elseif(((array_key_exists("Show_status",$row_fast)) ? $row_fast["Show_status"] : "" ) === "Reject") : ?>
                                            <span class="badge bg-danger"><?php echo $row_fast["Show_status"] ?></span></td>
                                        <?php else : ?>
                                            <span
                                                class="badge bg-warning text-dark"><?php echo (array_key_exists("Show_status",$row_fast)) ? $row_fast["Show_status"] : "" ; ?></span>
                                        </td>
                                        <?php endif; ?></td>
                                        <td class="text-center"><a type="button" class="btn btn-primary"
                                                href="./detail.php?id=<?php echo $row_fast["id"];?>&type=fast_track">Click</a>
                                        </td>
                                        <td class="text-center"><a type="button" class="btn btn-success"
                                                href="./report_show.php?id=<?php echo $row_fast["id"];?>&type=fast_track">Click</a>
                                        </td>

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
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</body>
<script>
    function selectReport() {
    var select_value = document.getElementById("report").value;
    var select_month = $("#monthPicker").val();
   
    $.ajax({
            url: "./table_switch.php",
            method: "POST",
            data:{
                title:select_value,
                month:select_month, 
            },
            success: function(page){
                $('#switch_table').html(page);
            }
        })
    }
</script>

</html>