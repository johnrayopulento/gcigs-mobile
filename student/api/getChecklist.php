<?php
require_once("config.php");

if(isset($_REQUEST['degree'])){
    $sem = $_REQUEST['sem'];
    $degree = $_REQUEST['degree'];
    $result = mysqli_query($conn, "SELECT * from tbl_subjects where semester = '$sem' and department = '$degree'");
}
else if(isset($_REQUEST['studno'])){
    $sem = $_REQUEST['sem'];
    $studentid = $_REQUEST['studno'];
    $result = mysqli_query($conn, "select * from tbl_checklist as c left JOIN tbl_subjects as s on c.subject_id = s.id  where c.semester_earned = '$sem' and c.student_no = '$studentid'");
}
else{
    $id = $_REQUEST['studentno'];
    $result = mysqli_query($conn, "select * from tbl_checklist as c left JOIN tbl_subjects as s on c.subject_id = s.id  where c.student_no = '$id'");
}

$info=[];
while($data = mysqli_fetch_assoc($result)){
    array_push($info, $data);
}

echo json_encode($info);
?>