<?php
require_once("config.php");

// if(isset($_REQUEST['semester'])){
//     $id = $_REQUEST['studentno'];
//     $semester = $_REQUEST['semester'];
//     $result = mysqli_query($conn, "SELECT * from tbl_eform where student_no = '$id' and academic_year = '$semester'");
    
// }
// else{

//     $code = $_REQUEST['code'];
//     $result = mysqli_query($conn, "SELECT * from tbl_schedule left join tbl_subjects on tbl_schedule.subject_id = tbl_subjects.id  where code = '$code'");
    
// }
    $reg = $_REQUEST['reg'];
    $student_no = $_REQUEST['student_no'];
    $result = mysqli_query($conn, "SELECT * from tbl_eform  left join tbl_subjects on tbl_eform.subject_id = tbl_subjects.id where date_registration = '$reg'");
    
   $info=[];
   while($data = mysqli_fetch_assoc($result)){
   array_push($info, $data);
    
    }
   echo json_encode($info);
?>