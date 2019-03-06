<?php
include("../../config/function.php");
connectdb();
$issueDate=explode('-',mysql_real_escape_string($_POST['issuedate']));
$issDate=$issueDate[2]."-".$issueDate[1]."-".$issueDate[0];
$expDate=explode('-',mysql_real_escape_string($_POST['permexp']));
$exDate=$expDate[2]."-".$expDate[1]."-".$expDate[0];
	//$tdate=$_POST['toDate'].",".$_POST['frmDate'];
	$sqlQuery=mysql_query("insert into permitmodule set permitnumber='".mysql_real_escape_string($_POST['pernNo'])."',
		permitissuancedate='".$issDate."',
		permitexpiry='".$exDate."',
		permitissuancestate='".mysql_real_escape_string($_POST['issuestate'])."',
		issuedby='".mysql_real_escape_string($_POST['issueby'])."',permDesp='".mysql_real_escape_string($_POST['perdesp'])."',isPublished='".$_POST['pub']."',curdate=now(),isDeleted='0'");
	if($sqlQuery){
		echo "Inserted Successfully";
	}
	
	
	

 
 ?>