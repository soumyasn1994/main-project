<?php
session_start();
if (!isset($_SESSION["Log_id"])){
    header('location:index.php');
}

// print_r($_POST);
include '../user/connect.php'; 
//getting id from url
//$id = $_GET['Log_id'];
 $idus = $_SESSION["Log_id"];
// $sid=$_POST['sid'];
// $id=$_POST['empid'];
echo $sid=$_POST['wp'];
$date=$_POST['sdate'];
echo $sche=$_POST['tod'];
$gen=$_POST['toe'];
//fetch category id
$sqlFindCategory = "SELECT `cat_id` FROM `tb_service` WHERE `service_id` = '$sid'";
$category = mysqli_query($con, $sqlFindCategory);
$categoryId = mysqli_fetch_array($category)[0];

//get employees based on category id AND join registration table
//  echo $sqlFindEmployees ="SELECT * FROM  tb_regsuser WHERE  tb_regsuser.Log_id='$idus'";
// $employees = mysqli_query($con, $sqlFindEmployees);
// $empList = mysqli_fetch_array($employees);
$sqlsche="SELECT * FROM  tb_schedule WHERE  schtype='$sche'";
$she = mysqli_query($con, $sqlsche);
$scid = mysqli_fetch_array($she);
 $schid=$scid['schid'];
 

//print_r($empList);
//die();
echo $emp="select * from tb_regsuser as r join tb_empserv as e on r.Log_id=e.Log_id where r.Gender='$gen' and e.cat_id='$categoryId' ";
$b= mysqli_query($con, $emp);
while($e=mysqli_fetch_assoc($b)){
    $log=$e['Log_id'];
    $pid=$e['Pid'];
    echo $ry="select * from `tb_place` JOIN tb_district ON tb_place.Did = tb_district.Did  where Pid='$pid'";
$ryx=mysqli_query($con,$ry);
$ryf=mysqli_fetch_array($ryx);
$dist_id=$ryf['Did'];
$dist=$ryf['District'];
    echo $e1="select * from tb_bookings as b join tb_schedule as s on b.schid=s.schid where b.eid='$log' and b.date='$date'  ";
    $e2=mysqli_query($con,$e1);
    if(mysqli_num_rows($e2)>0)
    {
        while($row=mysqli_fetch_array($e2))
        {
            $sch=$row['schtype'];
            if($sch != 'Full Day')
            {
                if($sch != 'After Noon' || $sch != 'Fore Noon')
                {
                   echo $qs="SELECT * FROM `tb_empserv` JOIN tb_regsuser ON tb_empserv.Log_id = tb_regsuser.Log_id JOIN tb_category 
                    ON tb_empserv.cat_id = tb_category.cat_id JOIN tb_place ON tb_regsuser.Pid = tb_place.Pid 
                    JOIN tb_district ON tb_district.Did = tb_place.Did join tb_bookings on tb_bookings.eid=tb_empserv.Log_id join tb_schedule on tb_bookings.schid=tb_schedule.schid
                     join tb_login on tb_login.Log_id=tb_regsuser.Log_id WHERE tb_empserv.cat_id AND tb_regsuser.Pid = '$pid' 
                     AND tb_empserv.cat_id = '$categoryId'
                         and tb_login.roleid='2'";
                         $record= mysqli_query($con,$qs);
                         while($employee=mysqli_fetch_assoc($record)){

                            ?>
                           
                           
                           <tr>
                           
                           <td><?php echo '<center><img src="'.$employee['Photo'].'" height="10%" width="20%"><center>';?></td>
                           <td>
                           
                           <?php echo $employee['first_name'] ?>
                           
                           <?php echo $employee['last_name'] ?>
                           </br>
                           <?php echo $employee['Place'] ?>
                           </br>
                           <?php echo $employee['District'] ?>
                           </br><?php echo $employee['Mobile'] ?>
                           </br><?php echo $employee['cat_name'] ?>
                           <form action="books.php" method="get">
                           <input type="hidden" name="empid" value="<?php echo $employee['Log_id'] ?>">
                           <input type="hidden" name="sdate" value="<?php echo $date ?>">
                           <input type="hidden" name="tod" value="<?php echo $sche ?>">
                           <input type="hidden" name="sid" value="<?php echo $sid ?>">
                           <?php
                           }
                           
                }
            }
        }
    }
}
?>