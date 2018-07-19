<?php
require_once("config.php");

$result = mysqli_query($conn, "SELECT id,course_code from tbl_subjects");

$info=[];
while($data = mysqli_fetch_assoc($result)){
    array_push($info, $data);
}

echo json_encode($info);
?>