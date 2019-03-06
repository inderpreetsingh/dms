<?php
session_start();
include("../../config/function.php");
connectdb();

 $_POST['name'];
 
  $_FILES['attachment']['name'];

     $Kv = 0; 
     $uploads_dir = "../../uploads/driverdocs/"; 
     $_FILES['attachment']["tmp_name"];
	 if($_FILES['attachment']['name']==''){
		 $filenm=$_POST['fileold'];
	 }
	 else{
      if(move_uploaded_file($_FILES['attachment']["tmp_name"], $uploads_dir.$_FILES['attachment']['name'])){
		  $filenm=$_FILES['attachment']['name'];
	   }
		else{
		 echo "There is some prob.";
		}
	 	 
	 }

 $sqlQuery=mysql_query("Update driverdetails set 
 	companyID='".$_SESSION['companyID']."',
 	DriverFName='".$_POST['fname']."',DriverLName='".$_POST['lname']."',DriverEmail='".$_POST['email']."',DriverDob='".$_POST['dob']."',DriverAge='".$_POST['age']."',DriverCont='".$_POST['contno']."',EmergencyCon='".$_POST['emer']."',DriverAddress='".$_POST['permadd']."',DriverCurrAddd='".$_POST['curradd']."',DriverCountry='".$_POST['country']."',DiverState='".$_POST['state']."',DriverCity='".$_POST['city']."',postal='".$_POST['postalcode']."',startdate='".$_POST['startdate']."',DriverLicence='".$_POST['dLic']."',DriverLicenceProv='".$_POST['licprov']."',DriverLceExp='".$_POST['licExpdate']."',driverCate='".$_POST['driverCategory']."',Driver_Corp='".$_POST['dcop']."',Driver_Account='".$_POST['daccountno']."',Driver_Training='".$_POST['dtrainingdate']."',JoinDate='".$_POST['joindate']."',AbstractDate='".$_POST['abdate']."',
 	SinNo='".$_POST['sinno']."',TdgDate='".$_POST['tdgdt']."',DDCTraining='".$_POST['ddctd']."',LCVTraing='".$_POST['lcv']."',DriverDoc='".$filenm."',LastUpdated=now(),STATUS='1',isPublished='".$_POST['pub']."' where DriverId='".$_POST['driverid']."'");

 if($sqlQuery){
	 echo "Record Updated Successfully";
 }
?>