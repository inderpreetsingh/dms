<?php

global $dbhost,$dbuser,$dbpass,$dbname,$con;

         function connect_db(){
            

       $dbname = "i3510527_wp2";
$dbhost = "localhost";
$dbuser = "i3510527_wp2";
$dbpass = "}~WeBlon4O%d";

         $con= mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
   
         if(!$con){
            die('Could not connect: ' . mysqli_error());
         }
return $con;
   }//connect fun closed      //echo 'Connected successfully';
        
//-------------------db connect finish-----
?>