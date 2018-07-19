<?php
    require_once("config.php");

    $result = mysqli_query($conn, "SELECT * from tbl_student");

   $info=[];
   while($data = mysqli_fetch_assoc($result)){
      array_push($info, $data);
   }
 
   echo json_encode($info);
?>