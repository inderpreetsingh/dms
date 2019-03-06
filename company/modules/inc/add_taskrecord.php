<?php
include("../../config/function.php");
connectdb();


	
	$tdate=$_POST['toDate'].",".$_POST['frmDate'];


	$sqlQuery=mysql_query("insert into taskList set driverId='".$_POST['driverId']."',vehID='".$_POST['vehID']."',assiDate='".$_POST['aDate']."',location='".$_POST['aLoc']."',time='".$_POST['aTime']."',date=now(),active='1'");
	if($sqlQuery){
		echo "Inserted Successfully";
	}
	
	
	

 
 ?>