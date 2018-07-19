<?php
    require_once("config.php");

    if(isset($_REQUEST['type'])){
    $id = $_REQUEST['studentno'];
    $sem = $_REQUEST['sem'];

    $result = mysqli_query($conn, "select * from tbl_billing where student_no = '$id' and semester = '$sem'");
    }
    else{
        $id = $_REQUEST['studentno'];
        $sem = $_REQUEST['sem'];
    }    $result = mysqli_query($conn, "select p.or_no, p.amount, b.total_fee, p.semester, p.paid_date from tbl_payment as p left JOIN tbl_billing as b on p.billing_id = b.id where p.student_no ='$id' and p.semester='$sem'");


   $info=[];
   while($data = mysqli_fetch_assoc($result)){
      array_push($info, $data);
   }
 
   echo json_encode($info);
?>