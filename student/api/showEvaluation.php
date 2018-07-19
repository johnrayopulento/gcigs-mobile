<?php
    require_once("config.php");
    $student_no = $_REQUEST['studentno'];
    $result = mysqli_query($conn, "SELECT * from tbl_evaluation where student_no = '$student_no'");

   $info=[];
   while($data = mysqli_fetch_assoc($result)){
      array_push($info, $data);
   }
 
   echo json_encode($info);
?>