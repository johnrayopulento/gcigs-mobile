<?php
require_once("config.php");
$tcode = $_POST['tcode'];
$tsubject_id = $_POST['tsubject_id'];
$tstudent_no = $_POST['studentno'];
$reg = $_POST['reg'];
$sem = $_POST['sem'];
$acad_year = $_POST['acad_year'];

$sql = "INSERT into tbl_eform (id,subject_id,code,student_no,date_registration,semester,acad_year) values ('','$tsubject_id','$tcode','$tstudent_no','$reg','$sem','$acad_year')";
if (mysqli_query($conn, $sql)) {
    echo "inserted";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>