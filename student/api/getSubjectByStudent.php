<?php
require_once("config.php");

if(isset($_REQUEST['sem'])){
    $sem = $_REQUEST['sem'];
    $degree = $_REQUEST['degree'];
    $result = mysqli_query($conn, "SELECT * from tbl_subjects where semester = '$sem' and department = '$degree'");
}

else{
    $id = $_REQUEST['studentno'];
    $result = mysqli_query($conn, "SELECT * from tbl_checklist where student_no = '$id'");
}

$info=[];
while($data = mysqli_fetch_assoc($result)){
    array_push($info, $data);
}

echo json_encode($info);
?>