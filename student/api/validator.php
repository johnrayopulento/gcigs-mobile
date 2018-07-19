<?php
    require_once("config.php");


    if(isset($_REQUEST['code'])){
        $code = $_REQUEST['code'];
        $result = mysqli_query($conn, "select  * from tbl_schedule where code = '$code'");
            if($result){
                if (mysqli_num_rows($result)){
                    echo "aleardy exist";
                }
            }
    }



 
 
?>