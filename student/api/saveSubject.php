<?php
require_once("config.php");
$course_code = $_POST['course_code'];
$course_title = $_POST['course_title'];
$units = $_POST['units'];
$semester = $_POST['semester'];
$department = $_POST['department'];
$sql = "INSERT into tbl_subjects (id,course_code,course_title,units,semester,department) values ('','$course_code','$course_title','$units','$semester','$department')";
if (mysqli_query($conn, $sql)) {
    echo "inserted";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>