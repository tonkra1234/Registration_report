<?php

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:../Login/login_form.php');
}
@include '../include/database/connection.php';
$user_name = $_SESSION['user_name'];
$_SESSION['user_name'] = $user_name;

$month_year = (isset($_GET['month_year']))?$_GET['month_year']:'';
$time  = strtotime($month_year);
$year = date('Y',$time);
$month = date('m',$time);

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

if ($month_year === '') {
    $result_count = mysqli_query($conn,"SELECT COUNT(*) As total_records FROM `medical_renewal`");
    $total_records = mysqli_fetch_array($result_count);
    $total_records = $total_records['total_records'];
    $total_no_of_pages = ceil($total_records / $total_records_per_page);
    $second_last = $total_no_of_pages - 1; 

    $result_medical_renewal = mysqli_query($conn,"SELECT * FROM `medical_renewal` ORDER BY date_fast DESC LIMIT $offset, $total_records_per_page");

}else{
    $result_count = mysqli_query($conn,"SELECT COUNT(*) As total_records FROM `medical_renewal` WHERE MONTH(date_fast) = $month and Year(date_fast) = $year");
    $total_records = mysqli_fetch_array($result_count);
    $total_records = $total_records['total_records'];
    $total_no_of_pages = ceil($total_records / $total_records_per_page);
    $second_last = $total_no_of_pages - 1; 

    $result_medical_renewal = mysqli_query($conn,"SELECT * FROM `medical_renewal` WHERE MONTH(date_fast) = $month and Year(date_fast) = $year ORDER BY date_fast DESC LIMIT $offset, $total_records_per_page");
}

$i = ($total_records_per_page*$page_no)-($total_records_per_page-1);




require '../include/layout/header.php';
?>
<div class="container-fluid">
    <div class="col-sm p-3 min-vh-100">
        <div class="container-fluid p-5">
            <form class="my-lg-3 my-2 shadow p-lg-3 p-2" action="" method="GET" accept-charset="utf-8">
                <div class="row">
                    <div class="col-sm-8 col-12">
                        <input class="border w-100 form-control" type="month" name="month_year" placeholder="Search"
                            aria-label="Search" value="<?php echo $month_year; ?>">
                    </div>
                    <div class="col-sm-2 col-12 d-grid">
                        <button class="btn btn-secondary btn-block" type="submit"
                            style="background-color: #31968B ;">Search Results</button>
                    </div>
                    <div class="col-sm-2 col-12 d-grid">
                        <a class="btn btn-danger px-5 ms-1" role="button" href="./medical_evaluation_table.php">Clear all</a>
                    </div>
                </div>
            </form>
            <div class="card shadow">
                <div class="card-header d-flex justify-content-between">
                    <div class="my-1">
                        <h4 class="pt-1" style="color: #326292 ;">Table of Renewal medical device</h4>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover table-bordered">
                        <thead>
                            <tr class="table-info">
                                <th scope="col">No.</th>
                                <th scope="col">Dossier ID</th>
                                <th scope="col">Generic name</th>
                                <th scope="col">Date of Assessment</th>
                                <th scope="col">Name of Applicant/Market</th>
                                <th scope="col">Name of Manufacturer</th>
                                <th scope="col">Status</th>
                                <th scope="col">Details</th>
                                <th scope="col">Report</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
        if ($result_medical_renewal->num_rows > 0){
            while ($row_medical_renewal = mysqli_fetch_array($result_medical_renewal)){
        ?>
                            <tr>
                                <th scope="row"><?php echo $i;?></th>
                                <td><?php echo $row_medical_renewal["Dossier_ID"]; ?></td>
                                <td><?php echo $row_medical_renewal["Generic_name"]; ?></td>
                                <td><?php echo $row_medical_renewal["date_fast"]; ?></td>
                                <td><?php echo $row_medical_renewal["Name_Applicant_Market"]; ?></td>
                                <td><?php echo $row_medical_renewal["Name_Manufacturer"]; ?></td>
                                <td class="text-center align-middle">
                                    <?php if(((array_key_exists("Show_status",$row_medical_renewal)) ? $row_medical_renewal["Show_status"] : "" ) === "Approve") : ?>
                                    <span class="badge bg-success"><?php echo $row_medical_renewal["Show_status"] ?></span></td>
                                <?php elseif(((array_key_exists("Show_status",$row_medical_renewal)) ? $row_medical_renewal["Show_status"] : "" ) === "Reject") : ?>
                                <span class="badge bg-danger"><?php echo $row_medical_renewal["Show_status"] ?></span></td>
                                <?php else : ?>
                                <span
                                    class="badge bg-warning text-dark"><?php echo (array_key_exists("Show_status",$row_medical_renewal)) ? $row_medical_renewal["Show_status"] : "" ; ?></span>
                                </td>
                                <?php endif; ?></td>
                                <td class="text-center"><a type="button" class="btn btn-primary"
                                        href="./detail.php?id=<?php echo $row_medical_renewal["id"];?>&type=medical_renewal">Click</a>
                                </td>
                                <td class="text-center"><a type="button" class="btn btn-success"
                                        href="./report_show.php?id=<?php echo $row_medical_renewal["id"];?>&type=medical_renewal">Click</a>
                                </td>
                            </tr>
                            <?php
            $i++;
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
                </div>
            </div>
            <?php include './pagination.php'; ?>
        </div>
    </div>
</div>
</div>
</body>

</html>