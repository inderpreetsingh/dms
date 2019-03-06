<?php
include("../../config/function.php");
connectdb();


if($_POST['formTyp']=='up_veh')
{

$tdate=$_POST['toDate'].",".$_POST['frmDate'];	

$sqlQuery=mysql_query("Update vehicledetails set 
			UnitNumber='".mysql_real_escape_string($_POST['unitno'])."',
			StartDate='".mysql_real_escape_string($_POST['startdt'])."',
			Year='".mysql_real_escape_string($_POST['year'])."',
			Modal='".mysql_real_escape_string($_POST['modal'])."',
			Color='".mysql_real_escape_string($_POST['color'])."',
			VehMake='".mysql_real_escape_string($_POST['VehMake'])."',
			VIN='".mysql_real_escape_string($_POST['vin'])."',
			PlateExpiry='".mysql_real_escape_string($_POST['plexp'])."',
			PlateState='".mysql_real_escape_string($_POST['plstate'])."',
			CVIPDate='".mysql_real_escape_string($_POST['cvipdt'])."',
			PMDate='".mysql_real_escape_string($_POST['pmdt'])."',
			OwnerName='".mysql_real_escape_string($_POST['onrnm'])."',
			Leasedby='".mysql_real_escape_string($_POST['lsedby'])."',
			isPublished='".mysql_real_escape_string($_POST['pub'])."',
			isDeleted='0',
			date=now()
			,Active='1'
			where VehID='".$_POST['vid']."'");
/*$sqlQuery=mysql_query("Update vehicledetails set DriverId='".$_POST['driverId']."',VehName='".$_POST['vehname']."',VehType='".$_POST['VehType']."',VehNo='".$_POST['VehNo']."',VehRegoNo='".$_POST['VehRegoNo']."',VehMake='".$_POST['VehMake']."',traingDate='".$_POST['traingDate']."',traingExp='".$_POST['traingExp']."',assignDate='".$tdate."',date=now(),Active='1' where VehID='".$_POST['vid']."'");	*/

if($sqlQuery){
	
	echo "Updated Successfully";
}
	
}
?>