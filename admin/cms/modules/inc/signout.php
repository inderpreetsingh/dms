<?php
session_start();
require_once('../../config/function.php');
if(session_destroy())

header("location:".$domain."");

	exit;

?>