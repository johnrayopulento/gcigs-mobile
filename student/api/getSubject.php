<?php


require_once("config.php");

if(isset($_REQUEST['course_code'])){
    $code = $_REQUEST['course_code'];
    
    $result = mysqli_query($conn, "SELECT * from tbl_subjects where course_code = '$code'");
    
}
else{
    $result = mysqli_query($conn, "SELECT * from tbl_subjects");
    
}


   $info=[];
   while($data = mysqli_fetch_assoc($result)){
      array_push($info, $data);
   }
 
   echo json_encode($info);
?>