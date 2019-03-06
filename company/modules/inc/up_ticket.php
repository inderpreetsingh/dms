<?php
session_start();
include("../../config/function.php");
connectdb();
$issueDate=explode('-',mysql_real_escape_string($_POST['tickdt']));
$issDate=$issueDate[2]."-".$issueDate[1]."-".$issueDate[0];
$expDate=explode('-',mysql_real_escape_string($_POST['permexp']));
$exDate=$expDate[2]."-".$expDate[1]."-".$expDate[0];
	//$tdate=$_POST['toDate'].",".$_POST['frmDate'];
	$sqlQuery=mysql_query("UPDATE tickets set 
		companyID='".$_SESSION['companyID']."',
		DriverName='".mysql_real_escape_string($_POST['driverId'])."',
		ticketdate='".$issDate."',
		TractorUnit='".mysql_real_escape_string($_POST['tractorunit'])."',
		TrailerUnit='".mysql_real_escape_string($_POST['trailerunit'])."',
		Violation='".mysql_real_escape_string($_POST['violation'])."',
		FineAmount='".mysql_real_escape_string($_POST['fineamt'])."',DueDates='".mysql_real_escape_string($_POST['duedt'])."',CurrentStatus='".mysql_real_escape_string($_POST['curstatus'])."',isPublished='".$_POST['pub']."',curdate=now(),isDeleted='0' where Ticket_id='".$_POST['tickid']."'");
	if($sqlQuery){
		echo "Update Successfully";
	}
	
	
	

 
 ?>