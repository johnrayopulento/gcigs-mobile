<?php
 require_once("config.php");

 $studno = $_POST['studno'];
 $sem = $_POST['sem'];
 $orno = $_POST['orno'];
 $billing =  $_POST['billing'];
 $amount_paid = $_POST['amount_paid'];

$sql = "INSERT into tbl_payment (id,or_no,amount,semester,billing_id,student_no) values ('','$orno','$amount_paid','$sem','$billing','$studno')";
if (mysqli_query($conn, $sql)) {
    echo "inserted";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>