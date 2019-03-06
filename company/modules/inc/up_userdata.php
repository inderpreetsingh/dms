<?php
session_start();
include("../../config/function.php");
connectdb();
 $_POST['name'];
  $_FILES['attachment']['name'];

     $Kv = 0; 
     if($_FILES['attachment']['name']!=''){
     $uploads_dir = "../../uploads/admindocs/"; 
     $_FILES['attachment']["tmp_name"];
      if(move_uploaded_file($_FILES['attachment']["tmp_name"], $uploads_dir.$_FILES['attachment']['name'])){
		  $filenm=$_FILES['attachment']['name'];
	   }
		else{
		 echo "There is some prob.";
		}

	}
	else{
		$filenm=$_POST['oldimg'];
	}	
		$sqlQuery=mysql_query("UPDATE admin set Admin_Name='".$_POST['username']."',Name='".$_POST['name']."',Admin_cont='".$_POST['contno']."',Admin_Password='".md5($_POST['pass'])."',Admin_pwd='".$_POST['pass']."',companyID='".$_SESSION['companyID']."',Admin_Position='".$_POST['adminCategory']."',Status='".$_POST['active']."',Created=now(),Last_Updated=now(),Admin_Pic='".$filenm."' where Admin_Id='".$_POST['userID']."'");
		
 
 if($sqlQuery){
	 echo "Record Updated Successfully";
 }
		
		?>