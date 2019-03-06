<?php
include("../../config/function.php");
connectdb();
$typeg=$_GET['t'];
$id=$_GET['d'];
if($typeg=='dd'){
	$sqlup=mysql_query("update vehicledetails set Active='0' where VehID='".$id."'");
	if($sqlup){
		
		
		echo "<script type='text/javascript'>alert('Deleted successfully!')</script>";
		header("Location: ".$baseurl."/dashboard.php?a=vehicle_record");
		
		
		
	}
	
}

?>