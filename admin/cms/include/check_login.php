<?php

session_start();

require_once('../config/function.php');

connectdb();

 $uname = mysql_real_escape_string($_POST["uname"]);

 $password = mysql_real_escape_string($_POST["upass"]);

$pass=md5($password);

If(($uname=='')&& ($password=='')){

	echo "All Fields are Required !!";

}

elseif($uname==''){

	echo "Please enter Valid Username !!";

}

elseif($password==''){

	echo "Please enter Valid Password !!";

}else{

$count = mysql_fetch_array(mysql_query("SELECT count(*),Admin_Id, Admin_Name FROM admin WHERE Admin_Name='".$uname."' and Admin_Password='".$pass."' and status='1' and companyID='0'"));

$_SESSION['companyID']='0';
$_SESSION['Admin_Id']=$count[1];

$_SESSION['Admin_Name']=$count[2];

if($count[0] <= 0){

echo 'Combination of Username And Password is Wrong';

}

else{

	echo "ok";

}





exit();

}

?>