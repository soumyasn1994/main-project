<?php
    include '../user/connect.php';
    $id=$_POST['id'];
    $seq1="select * from tb_coupon where card_num='$id' and status='0'";
    $eq1=mysqli_query($con,$seq1);
    $number=mysqli_num_rows($eq1);

    if($number>0){
        while($row=mysqli_fetch_array($eq1)){
            $amt=$row['amount'];
            echo $amt;
        }
    }else{
        echo "invalid";
    }
?>