<?php
session_start();
include("../../config/function.php");
connectdb();
 $_POST['name'];
$attachments=$_FILES['attachment']['name'];
 $sqlDivers=mysql_query("select * from driverdetails order by DriverId desc");
 $rsdriver=mysql_fetch_assoc($sqlDivers);
 $seqId=$rsdriver['DriverId']+1;
  
     $Kv = 0;

	$_FILES['attachment']['name'];
	$_POST['documentsType'];



	$st=explode('-',$_POST['startdate']);
    $startDt=$st[2].'-'.$st[1].'-'.$st[0];
 $sqlQuery=mysql_query("insert into driverdetails set driverdID='".$_POST['driverID']."',companyID='".$_SESSION['companyID']."',DriverFName='".$_POST['fname']."',DriverLName='".$_POST['lname']."',DriverEmail='".$_POST['email']."',DriverDob='".$_POST['dob']."',DriverAge='".$_POST['age']."',DriverCont='".$_POST['contno']."',EmergencyCon='".$_POST['emer']."',DriverAddress='".$_POST['permadd']."',DriverCurrAddd='".$_POST['curradd']."',DriverCountry='".$_POST['country']."',DiverState='".$_POST['state']."',DriverCity='".$_POST['city']."',postal='".$_POST['postalcode']."',startdate='".$startDt."',DriverLicence='".$_POST['dLic']."',DriverLicenceProv='".$_POST['licprov']."',DriverLceExp='".$_POST['licExpdate']."',driverCate='".$_POST['driverCategory']."',Driver_Corp='".$_POST['dcop']."',Driver_Account='".$_POST['daccountno']."',Driver_Training='".$_POST['dtrainingdate']."',AbstractDate='".$_POST['abdate']."',
 	SinNo='".$_POST['sinno']."',TdgDate='".$_POST['tdgdt']."',DDCTraining='".$_POST['ddctd']."',LCVTraing='".$_POST['lcv']."',JoinDate=now(),DriverDoc='".$filenm."',STATUS='1',isPublished='".$_POST['pub']."',createdON=now(),createdBy='".$_SESSION['Admin_Id']."'");
 
 if($sqlQuery){
	 
	 	$lastID=mysql_insert_id();
	 if($attachments!=''){ 
     $uploads_dir = "../../uploads/driverdocs/"; 
     $_FILES['attachment']["tmp_name"];

     $i=0;$j=0;$m=1;
     for($i;$i<=sizeof($_POST['documentsType']);$i++){
     	$filename=$_FILES['attachment']['name'][$j];
  		$Explfile=explode('.',$filename);
  		$driverID=$_POST['driverID'];
$newfile=$Explfile[0]."_".$driverID.'_'.$m.$seqId.'.'.$Explfile[1];
     	$doctype=$_POST['documentsType'];
      if(move_uploaded_file($_FILES['attachment']["tmp_name"][$j], $uploads_dir.$newfile)){
      	$sqlInsertImage=mysql_query("INSERT into driverdocuments set driverID='".$lastID."',documentType='".$doctype[$i]."',image='".$newfile."',date=now()");

		  //$filenm=$_FILES['attachment']['name'];
                    
      	echo "Record Submitted Successfully";
	   }
		else{
		 echo "There is some prob.";
		}
		$j++;$m++;
	}//attachfile for loop
	 }
 }
?>