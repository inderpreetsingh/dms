<?php
include("../../config/function.php");
connectdb();

 $_POST['issuedate'];
 $_POST['permexp'];
$issueDate=explode('-',$_POST['issuedate']);
$issDate=$issueDate[2]."-".$issueDate[1]."-".$issueDate[0];
$expDate=explode('-',$_POST['permexp']);
$exDate=$expDate[2]."-".$expDate[1]."-".$expDate[0];

	//$tdate=$_POST['toDate'].",".$_POST['frmDate'];
//echo "UPDATE permitmodule set permitnumber='".mysql_real_escape_string($_POST['pernNo'])."',permitissuancedate='".$issDate."',permitexpiry='".$exDate."',permitissuancestate='".$_POST['issuestate']."',issuedby='".mysql_real_escape_string($_POST['issueby'])."',permDesp='".mysql_real_escape_string($_POST['perdesp'])."',isPublished='".$_POST['pub']."',curdate=now(),isDeleted='0' where p_id='".$_POST['pid']."'";



	$sqlQuery=mysql_query("UPDATE permitmodule set permitnumber='".mysql_real_escape_string($_POST['pernNo'])."',permitissuancedate='".$issDate."',permitexpiry='".$exDate."',permitissuancestate='".$_POST['issuestate']."',issuedby='".mysql_real_escape_string($_POST['issueby'])."',permDesp='".mysql_real_escape_string($_POST['perdesp'])."',isPublished='".$_POST['pub']."',curdate=now(),isDeleted='0' where p_id='".$_POST['pid']."'");
	if($sqlQuery){
		echo "Updated Successfully";
	}
	
	
	

 
 ?>