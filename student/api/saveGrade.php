<?php
 require_once("config.php");

$subject_id = $_REQUEST['s_id'];
$grade = $_REQUEST['grade']; 
$studentno = $_REQUEST['studentno'];
$sem = $_REQUEST['sem'];

$acadyear = $_REQUEST['acadyear'];
$rem = $_REQUEST['rem'];


$sql = "INSERT into tbl_checklist (id,subject_id,semester_earned,final_grade,student_no,academic_year,remarks) values ('','$subject_id','$sem','$grade','$studentno','$acadyear','$rem')";
if (mysqli_query($conn, $sql)) {
    echo "inserted";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>