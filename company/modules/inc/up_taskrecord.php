<?php
session_start();
include("../../config/function.php");
connectdb();

$taskID=$_POST['taskid'];
	
	$tdate=$_POST['toDate'].",".$_POST['frmDate'];

	

	$sqlQuery=mysql_query("UPDATE taskList set driverId='".$_POST['driverId']."',vehID='".$_POST['vehID']."',assiDate='".$_POST['aDate']."',location='".$_POST['aLoc']."',time='".$_POST['aTime']."',date=now(),active='1' where tId='".$taskID."'");
	if($sqlQuery){
		echo "Updated Successfully";
	}
	
	
	

 
 ?>