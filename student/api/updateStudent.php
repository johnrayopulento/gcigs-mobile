<?php
require_once("config.php");
$studentno = $_POST['studentno'];
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$address = $_POST['address'];
$contact = $_POST['contactno'];
$degree = $_POST['degree'];
$course = $_POST['course'];
$scholarship = $_POST['scholarship'];

//$sql = "update  tbl_student set (id,fname,mname,lname,address,degree,course,contact,scholarship,student_no) values ('','$fname','$mname','$lname','$address','$degree','$course','$contact','$scholarship','$studentno')";


$sql = "update tbl_student set address ='$address', contact = '$contact' where student_no='$studentno'";
if (mysqli_query($conn, $sql)) {
    echo "inserted";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>