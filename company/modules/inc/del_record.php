<?php
include("../../config/function.php");
connectdb();
$typeg=$_GET['t'];
$id=$_GET['d'];
if($typeg=='dd'){
	$sqlup=mysql_query("update driverdetails set STATUS='0' where DriverId='".$id."'");
	if($sqlup){
		
		
		echo "<script type='text/javascript'>alert('Deleted successfully!')</script>";
		header("Location: ".$baseurl."/dashboard.php?a=drivers_record");
		
		
		
	}
	
}

?>