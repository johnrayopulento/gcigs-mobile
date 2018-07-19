<?php
 require_once("config.php");
$tuition = $_POST['tuition'];
$registration = $_POST['registration'];
$labfee = $_POST['lab'];
$studno = $_POST['studno'];
$misc = $_POST['misc'];
$energy = $_POST['energy'];
$idcard = $_POST['idcard'];
$library = $_POST['library'];
$medical = $_POST['medical'];
$testing = $_POST['testing'];
$processing = $_POST['processing'];
$residency = $_POST['residency'];
$sem = $_POST['sem'];
$totalFee = $_POST['totalFee'];
$acadyear = $_POST['acadyear'];


$sql = "INSERT into tbl_billing (id,tuition_fee,registration_fee,lab_fee,misc_fee,energy_fee,medical_fee,library_fee,idcard_fee,nonresidence_fee,processing_fee,testing_fee,total_fee,semester,student_no,acad_year) values 
('','$tuition','$registration','$labfee','$misc','$energy','$medical','$library','$idcard','$residency','$processing','$testing','$totalFee','$sem','$studno','$acadyear')";
if (mysqli_query($conn, $sql)) {
    echo "inserted";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>