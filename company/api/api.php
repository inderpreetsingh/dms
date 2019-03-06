<?php 
include_once("common.php");

if($_GET['ref']=='drivers'){

   echo drivers();
}
elseif($_GET['ref']=="customers"){
echo customers();

}
         function drivers(){
          $con= connect_db();
               
          $sql="select * from driverdetails";
          $gdata=mysqli_query($con,$sql);
          while($rs=mysqli_fetch_assoc($gdata)){
             $rs['DriverName'];
                $rs['DriverEmail'];
                $rs['DriverDob'];
                $rs['DriverAge'];
                $rs['DriverCont'];
                $rs['DriverAddress'];
                $dd=[
                        "Driver Name" => $rs['DriverName'],
                        "Email" => $rs['DriverEmail'],
                        "DOB"=> $rs['DriverDob'],
                        "Age" => $rs['DriverAge'],
                        "Contact Details"=> $rs['DriverCont'],
                        "Address"=> $rs['DriverAddress']


              ];
              //echo $detail=json_encode($dd,JSON_FORCE_OBJECT);
               $detail=json_encode($dd);
               print_r($detail);
               mysqli_close($con);

}
                
          
         }//drivers closed
         function customers(){
          $con= connect_db();
                 
            $sql="select * from users";
            $gdata=mysqli_query($con,$sql);
            if(mysqli_num_rows($gdata)<=0){

               echo "No Data Found";
            }
            while($rs=mysqli_fetch_assoc($gdata)){
               echo $rs['User_Name']."<br>";
               $dd=[
                        "User Name" => $rs['User_Name'],
                        "Address" => $rs['User_Address']
                        


              ];
               $detail=json_encode($dd);
               print_r($detail);
            }
            mysqli_close($con);
         }//customers closed

function driverinsert(){

    $con= connect_db();



$Kv = 0; 
     $uploads_dir = "../../uploads/driverdocs/"; 
     $_FILES['attachment']["tmp_name"];
      if(move_uploaded_file($_FILES['attachment']["tmp_name"], $uploads_dir.$_FILES['attachment']['name'])){
        $filenm=$_FILES['attachment']['name'];
      }
      else{
       echo "There is some prob.";
      }

$sqlQuery=mysqli_query($con,"insert into driverdetails set DriverName='".$_POST['name']."',DriverEmail='".$_POST['email']."',DriverDob='".$_POST['dob']."',DriverAge='".$_POST['age']."',DriverCont='".$_POST['contno']."',DriverAddress='".$_POST['permadd']."',DriverCurrAddd='".$_POST['curradd']."',DriverCountry='".$_POST['country']."',DiverState='".$_POST['state']."',DriverCity='".$_POST['city']."',DriverLicence='".$_POST['dLic']."',DriverLceExp='".$_POST['licExpdate']."',driverCate='".$_POST['driverCategory']."',Driver_Corp='".$_POST['dcop']."',Driver_Account='".$_POST['daccountno']."',Driver_Training='".$_POST['dtrainingdate']."',JoinDate=now(),DriverDoc='".$filenm."',STATUS='1'");
 
 if($sqlQuery){
   echo "Record Submitted Successfully";
 }
 mysqli_close($con);
}//driver_insert closed
function driver_update(){

    $con= connect_db();
$allData = $_POST();

$_FILES['attachment']['name'];

     $Kv = 0; 
     $uploads_dir = "../../uploads/driverdocs/"; 
     $_FILES['attachment']["tmp_name"];
    if($_FILES['attachment']['name']==''){
       $filenm=$_POST['fileold'];
    }
    else{
      if(move_uploaded_file($_FILES['attachment']["tmp_name"], $uploads_dir.$_FILES['attachment']['name'])){
        $filenm=$_FILES['attachment']['name'];
      }
      else{
       echo "There is some prob.";
      }
       
    }

 $sqlQuery=mysql_query("Update driverdetails set DriverName='".$_POST['name']."',DriverEmail='".$_POST['email']."',DriverDob='".$_POST['dob']."',DriverAge='".$_POST['age']."',DriverCont='".$_POST['contno']."',DriverAddress='".$_POST['permadd']."',DriverCurrAddd='".$_POST['curradd']."',DriverCountry='".$_POST['country']."',DiverState='".$_POST['state']."',DriverCity='".$_POST['city']."',DriverLicence='".$_POST['dLic']."',DriverLceExp='".$_POST['licExpdate']."',driverCate='".$_POST['driverCategory']."',Driver_Corp='".$_POST['dcop']."',Driver_Account='".$_POST['daccountno']."',Driver_Training='".$_POST['dtrainingdate']."',JoinDate='".$_POST['joindate']."',DriverDoc='".$filenm."',LastUpdated=now(),STATUS='1' where DriverId='".$_POST['driverid']."'");

 if($sqlQuery){
    echo "Record Updated Successfully";
 }
mysqli_close($con);
}
 function del_driver_record($id){
   $sqlup=mysql_query("update driverdetails set STATUS='0' where DriverId='".$id."'");
   if($sqlup){
      
      
      echo "<script type='text/javascript'>alert('Deleted successfully!')</script>";
      header("Location: ".$baseurl."/dashboard.php?a=drivers_record");
      
      
      
   }
   mysqli_close($con);

 }//del_driver_record closed

//==============================================================================
function vehicle_insert(){

    $con= connect_db();
    $tdate=$_POST['toDate'].",".$_POST['frmDate'];
    
   $sqlQuery=mysql_query("insert into vehicledetails set DriverId='".$_POST['driverId']."',VehName='".$_POST['vehname']."',VehType='".$_POST['VehType']."',VehNo='".$_POST['VehNo']."',VehRegoNo='".$_POST['VehRegoNo']."',VehMake='".$_POST['VehMake']."',traingDate='".$_POST['traingDate']."',traingExp='".$_POST['traingExp']."',assignDate='".$tdate."',date=now(),Active='1'");
  if($sqlQuery){
    echo "Inserted Successfully";
  }
  mysqli_close($con);
}//vehicle_insert closed
function vehicle_update(){

    $con= connect_db();
    
    $tdate=$_POST['toDate'].",".$_POST['frmDate']; 
   
$sqlQuery=mysql_query("Update vehicledetails set DriverId='".$_POST['driverId']."',VehName='".$_POST['vehname']."',VehType='".$_POST['VehType']."',VehNo='".$_POST['VehNo']."',VehRegoNo='".$_POST['VehRegoNo']."',VehMake='".$_POST['VehMake']."',traingDate='".$_POST['traingDate']."',traingExp='".$_POST['traingExp']."',assignDate='".$tdate."',date=now(),Active='1' where VehID='".$_POST['vid']."'");  

if($sqlQuery){
   
   echo "Updated Successfully";
}
mysqli_close($con);
}
function del_vehicle_record($id){
   $sqlup=mysql_query("update vehicledetails set Active='0' where VehID='".$id."'");
   if($sqlup){
      
      
      echo "<script type='text/javascript'>alert('Deleted successfully!')</script>";
      header("Location: ".$baseurl."/dashboard.php?a=vehicle_record");
      
      
      
   }
  mysqli_close($con); 

 }//del_driver_record closed

//==============================================================================
 function task_insert(){

    $con= connect_db();
    $tdate=$_POST['toDate'].",".$_POST['frmDate'];
    $sqlQuery=mysql_query("insert into tasklist set driverId='".$_POST['driverId']."',vehID='".$_POST['vehID']."',assiDate='".$_POST['aDate']."',location='".$_POST['aLoc']."',time='".$_POST['aTime']."',date=now(),active='1'");
  if($sqlQuery){
    echo "Inserted Successfully";
  }
mysqli_close($con);

}//task_insert closed

?>