<?php
require_once("config.php");
$subject_id = $_POST['subject_id'];
$code = $_POST['code'];
$sched_day = $_POST['day'];
$sched_time = $_POST['time'];
$room = $_POST['room'];
$academic = $_POST['academic'];

$sql = "INSERT into tbl_schedule (id,subject_id,code,sched_day,sched_time,room,academic_year) values ('','$subject_id','$code','$sched_day','$sched_time','$room','$academic')";
if (mysqli_query($conn, $sql)) {
    echo "inserted";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>