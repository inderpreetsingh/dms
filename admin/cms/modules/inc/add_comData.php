<?php
include("../../config/function.php");
connectdb();
 $_POST['name'];
  $_FILES['attachment']['name'];

     $Kv = 0; 
     $uploads_dir = "../../../../uploads/admindocs/"; 
     $_FILES['attachment']["tmp_name"];
      if(move_uploaded_file($_FILES['attachment']["tmp_name"], $uploads_dir.$_FILES['attachment']['name'])){
		  $filenm=$_FILES['attachment']['name'];
	   }
		else{
		 echo "There is some prob.";
		}
		$sqlQuery=mysql_query("insert into companydetail set
									companyName='".$_POST['name']."',Admin_cont='".$_POST['contno']."',Status='".$_POST['active']."',companyEmail='".$_POST['email']."',Admin_Name='".$_POST['username']."',Admin_Password='".md5($_POST['pass'])."',Admin_pwd='".$_POST['pass']."',Admin_Position='Company Admin',companyurl='".$_POST['companyurl']."',ownername='".$_POST['ownernm']."',isPublished='".$_POST['active']."',isDeleted='0',Created=now(),Last_Updated=now(),companylogo='".$filenm."'");
		
 
 if($sqlQuery){
 	$lstID=mysql_insert_id();
 	$sqlQuery=mysql_query("insert into admin set Admin_Name='".$_POST['username']."',companyID='".$lstID."',Name='".$_POST['ownernm']."',Admin_cont='".$_POST['contno']."',companyName='".$_POST['name']."',companylogo='".$filenm."',Admin_Password='".md5($_POST['pass'])."',Admin_pwd='".$_POST['pass']."',Admin_Position='Company Admin',Status='".$_POST['active']."',Created=now(),Last_Updated=now(),Admin_Pic=''");
		
	 echo "Record Submitted Successfully";
 }
		
		?>