<?php

include 'data/connect.php';
if (isset($_POST['index'])) {
   $index = $_POST['index'];
   $sql = "SELECT full_day,half_day FROM tb_service where service_id='" . $index . "'";
    $q = mysqli_query($con, $sql);
//    var_dump($sql);
    
    if($q){
        $data = json_encode(mysqli_fetch_all($q));
        echo $data;
    }else{
        echo 'err';
    }

}
?>