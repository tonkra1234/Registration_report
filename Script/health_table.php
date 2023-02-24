<?php

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:../Login/login_form.php');
}
@include '../include/database/connection.php';
$user_name = $_SESSION['user_name'];
$_SESSION['user_name'] = $user_name;

// variable to store number of rows per page
$total_records_per_page = 10;

// update the active page number
if (isset($_GET['page_no']) && $_GET['page_no']!="") {
    $page_no = $_GET['page_no'];
} else {
    $page_no = 1;
}

// get the initial page number
$offset = ($page_no-1) * $total_records_per_page;
$previous_page = $page_no - 1;
$next_page = $page_no + 1;
$adjacents = "2";

$result_count = mysqli_query($conn,"SELECT COUNT(*) As total_records FROM `health_supplement`");
$total_records = mysqli_fetch_array($result_count);
$total_records = $total_records['total_records'];
$total_no_of_pages = ceil($total_records / $total_records_per_page);
$second_last = $total_no_of_pages - 1; 

$result_health = mysqli_query($conn,"SELECT * FROM `health_supplement` LIMIT $offset, $total_records_per_page");

$i = ($total_records_per_page*$page_no)-($total_records_per_page-1);




require '../include/layout/header.php';
?>
<div class="container-fluid">
    <div class="col-sm p-3 min-vh-100">

        <div class="container-fluid p-5">
            <div class="card shadow">
                <div class="card-header d-flex justify-content-between">
                    <div class="my-1">
                        <h4 class="pt-1" style="color: #326292 ;">Table of health supplement</h4>
                    </div>
                </div>
                <div class="table-responsive">
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
        if ($result_health->num_rows > 0){
            while ($row_health = mysqli_fetch_array($result_health)){
        ?>
                            <tr>
                                <th scope="row"><?php echo $i;?></th>
                                <td><?php echo $row_health["Product_name"]; ?></td>
                                <td><?php echo $row_health["supplement_id"]; ?></td>
                                <td><?php echo $row_health["Category"]; ?></td>
                                <td class="text-center align-middle">
                                    <?php if(((array_key_exists("Show_status",$row_health)) ? $row_health["Show_status"] : "" ) === "Approve") : ?>
                                    <span class="badge bg-success"><?php echo $row_health["Show_status"] ?></span></td>
                                <?php elseif(((array_key_exists("Show_status",$row_health)) ? $row_health["Show_status"] : "" ) === "Reject") : ?>
                                <span class="badge bg-danger"><?php echo $row_health["Show_status"] ?></span></td>
                                <?php else : ?>
                                <span
                                    class="badge bg-warning text-dark"><?php echo (array_key_exists("Show_status",$row_health)) ? $row_health["Show_status"] : "" ; ?></span>
                                </td>
                                <?php endif; ?></td>
                                <td class="text-center"><a type="button" class="btn btn-primary"
                                        href="./detail.php?id=<?php echo $row_health["id"];?>&type=health_supplement">Click</a>
                                </td>
                                <td class="text-center"><a type="button" class="btn btn-success"
                                        href="./report_show.php?id=<?php echo $row_health["id"];?>&type=health_supplement">Click</a>
                                </td>
                            </tr>
                            <?php
            $i++;
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
                </div>
            </div>
            <?php include './pagination.php'; ?>
        </div>
    </div>
</div>
</div>
</body>

</html>