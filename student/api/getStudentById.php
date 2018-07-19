<?php
    require_once("config.php");
    $id = $_REQUEST['studentno'];

    $result = mysqli_query($conn, "SELECT * from tbl_student where student_no = '$id'");

   $info=[];
   while($data = mysqli_fetch_assoc($result)){
      array_push($info, $data);
   }
 
   echo json_encode($info);
?>