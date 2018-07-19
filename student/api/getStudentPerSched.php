<?php
require_once("config.php");

$code = $_REQUEST['code'];
    $result = mysqli_query($conn, "SELECT * FROM `tbl_eform` left JOIN tbl_student on tbl_student.student_no = tbl_eform.student_no WHERE `code` = '$code'");
    
   $info=[];
   while($data = mysqli_fetch_assoc($result)){
   array_push($info, $data);
    
    }
   echo json_encode($info);
?>