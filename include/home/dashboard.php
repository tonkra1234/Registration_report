<?php

// Fast track query
$sql_fast = "SELECT count(*) as number FROM fast_track";
$result_fast = mysqli_query ($conn, $sql_fast);
$data_fast = $result_fast->fetch_assoc();

$sql_fast_a = "SELECT count(*) as number FROM fast_track WHERE Show_status = 'Approval' ";
$result_fast_a = mysqli_query ($conn, $sql_fast_a);
$data_fast_a = $result_fast_a->fetch_assoc();

$sql_fast_r = "SELECT count(*) as number FROM fast_track WHERE Show_status = 'Reject'";
$result_fast_r = mysqli_query ($conn, $sql_fast_r);
$data_fast_r = $result_fast_r->fetch_assoc();

$sql_fast_q = "SELECT count(*) as number FROM fast_track WHERE Show_status = 'Querying'";
$result_fast_q = mysqli_query ($conn, $sql_fast_q );
$data_fast_q = $result_fast_q->fetch_assoc();

// Full track query
$sql_full = "SELECT count(*) as number FROM full_track";
$result_full = mysqli_query ($conn, $sql_full);
$data_full = $result_full->fetch_assoc();

$sql_full_a = "SELECT count(*) as number FROM full_track WHERE Show_status = 'Approval' ";
$result_full_a = mysqli_query ($conn, $sql_full_a);
$data_full_a = $result_full_a->fetch_assoc();

$sql_full_r = "SELECT count(*) as number FROM full_track WHERE Show_status = 'Reject'";
$result_full_r = mysqli_query ($conn, $sql_full_r);
$data_full_r = $result_full_r->fetch_assoc();

$sql_full_q = "SELECT count(*) as number FROM full_track WHERE Show_status = 'Querying'";
$result_full_q = mysqli_query ($conn, $sql_full_q );
$data_full_q = $result_full_q->fetch_assoc();

// Health supplement query
$sql_health = "SELECT count(*) as number FROM health_supplement";
$result_health = mysqli_query ($conn, $sql_health);
$data_health = $result_health->fetch_assoc();

$sql_health_a = "SELECT count(*) as number FROM health_supplement WHERE Show_status = 'Approval' ";
$result_health_a = mysqli_query ($conn, $sql_health_a);
$data_health_a = $result_health_a->fetch_assoc();

$sql_health_r = "SELECT count(*) as number FROM health_supplement WHERE Show_status = 'Reject'";
$result_health_r = mysqli_query ($conn, $sql_health_r);
$data_health_r = $result_health_r->fetch_assoc();

$sql_health_q = "SELECT count(*) as number FROM health_supplement WHERE Show_status = 'Querying'";
$result_health_q = mysqli_query ($conn, $sql_health_q );
$data_health_q = $result_health_q->fetch_assoc();


// Follow up query
$sql_follow = "SELECT count(*) as number FROM follow_up";
$result_follow = mysqli_query ($conn, $sql_follow);
$data_follow = $result_follow->fetch_assoc();

$sql_follow_a = "SELECT count(*) as number FROM follow_up WHERE Show_status = 'Approval' ";
$result_follow_a = mysqli_query ($conn, $sql_follow_a);
$data_follow_a = $result_follow_a->fetch_assoc();

$sql_follow_r = "SELECT count(*) as number FROM follow_up WHERE Show_status = 'Reject'";
$result_follow_r = mysqli_query ($conn, $sql_follow_r);
$data_follow_r = $result_follow_r->fetch_assoc();

$sql_follow_q = "SELECT count(*) as number FROM follow_up WHERE Show_status = 'Querying'";
$result_follow_q = mysqli_query ($conn, $sql_follow_q );
$data_follow_q = $result_follow_q->fetch_assoc();

$sql_follow_fast = "SELECT count(*) as number FROM follow_up WHERE Type_of_assessment = 'Fast Track Assessment' ";
$result_follow_fast = mysqli_query ($conn, $sql_follow_fast);
$data_follow_fast = $result_follow_fast->fetch_assoc();

$sql_follow_full = "SELECT count(*) as number FROM follow_up WHERE Type_of_assessment = 'Full Dossier Assessment' ";
$result_follow_full = mysqli_query ($conn, $sql_follow_full);
$data_follow_full = $result_follow_full->fetch_assoc();

$sql_follow_health = "SELECT count(*) as number FROM follow_up WHERE Type_of_assessment = 'Health Supplement Assessment' ";
$result_follow_health = mysqli_query ($conn, $sql_follow_health);
$data_follow_health = $result_follow_health->fetch_assoc();


// Post approval query
$sql_post = "SELECT count(*) as number FROM post_approval";
$result_post = mysqli_query ($conn, $sql_post);
$data_post = $result_post->fetch_assoc();

$sql_post_a = "SELECT count(*) as number FROM post_approval WHERE Show_status = 'Approval' ";
$result_post_a = mysqli_query ($conn, $sql_post_a);
$data_post_a = $result_post_a->fetch_assoc();

$sql_post_r = "SELECT count(*) as number FROM post_approval WHERE Show_status = 'Reject'";
$result_post_r = mysqli_query ($conn, $sql_post_r);
$data_post_r = $result_post_r->fetch_assoc();

$sql_post_q = "SELECT count(*) as number FROM post_approval WHERE Show_status = 'Querying'";
$result_post_q = mysqli_query ($conn, $sql_post_q );
$data_post_q = $result_post_q->fetch_assoc();

$sql_post_fast = "SELECT count(*) as number FROM post_approval WHERE Type_of_assessment = 'Fast Track Assessment' ";
$result_post_fast = mysqli_query ($conn, $sql_post_fast);
$data_post_fast = $result_post_fast->fetch_assoc();

$sql_post_full = "SELECT count(*) as number FROM post_approval WHERE Type_of_assessment = 'Full Dossier Assessment' ";
$result_post_full = mysqli_query ($conn, $sql_post_full);
$data_post_full = $result_post_full->fetch_assoc();

$sql_post_health = "SELECT count(*) as number FROM post_approval WHERE Type_of_assessment = 'Health Supplement Assessment' ";
$result_post_health = mysqli_query ($conn, $sql_post_health);
$data_post_health = $result_post_health->fetch_assoc();


?>