<?php
 require_once("config.php");

$student_no = $_REQUEST['student_no'];
$message = $_REQUEST['message']; 


$sql = "INSERT into tbl_evaluation (id,student_no,content) values ('','$student_no','$message')";
if (mysqli_query($conn, $sql)) {
    echo "inserted";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>