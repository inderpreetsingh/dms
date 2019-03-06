<?php
session_start();
require_once('../../config/function.php');
connectdb();
$rscmp=mysql_fetch_assoc(mysql_query("select * from companydetail where Admin_Id='".$_SESSION['companyID']."'"));
//echo "select * from companydetail where Admin_Id='".$_SESSION['companyID']."'";
if(session_destroy())
//echo $rscmp['companyurl'];
header("location:".$rscmp['companyurl']."");

	exit;

?>