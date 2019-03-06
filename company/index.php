<?php 
session_unset();
session_start();
include("config/function.php");
// $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
connectdb();
$companyID=preg_replace('/[^0-9]/', '',$_GET['ref']);
$companyNm=$_GET['link'];

$sqlCompInfo=mysql_query("select * from companydetail where Admin_Id='".$companyID."'");
$rsComp=mysql_fetch_assoc($sqlCompInfo);
//echo $rsComp['Admin_Name'];
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Driver Management System</title>
  
  
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
<link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900&subset=latin,latin-ext'>

      <link rel="stylesheet" href="dist/css/login.style.css">
<script
  src="https://code.jquery.com/jquery-1.12.4.js"
  integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="
  crossorigin="anonymous"></script>
  <style text="text/css">
  #working{
	  width:300px;float:left;
	  
  }
  </style>
  <link href="<?php echo $companyurl;?>/css/style.css" rel='stylesheet' type='text/css' />
</head>

<body>
  <!---728x90--->

         <!-----start-main---->
        <div class="login-form">
        
          <div class="head">
            <?php 
                  if($rsComp['companylogo']!=''){
                     echo '<img src="'.$fronturl.'/uploads/admindocs/'.$rsComp['companylogo'].'" alt=""/> '; 
                  }else{
            ?>
            <img src="<?php echo $fronturl;?>/uploads/admindocs/demopic.jpg" alt=""/>
          <?php } ?><br />
         <h1> <b style="color:red;font-size: 16px;">Company Name: <?php echo $companyNm;?></b></h1>
            
          </div>
        <form action="" method="post" id="login-form">
          <div id="working12"></div>
          <li>
            <input type="text" class="text" value="USERNAME" name="uname" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'USERNAME';}" ><a href="#" class=" icon user"></a>
          </li>
          <li>
            <input type="password" value="Password" name="upass" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}"><a href="#" class=" icon lock"></a>
          </li>
          <div class="p-container">
                <!--<label class="checkbox"><input type="checkbox" name="checkbox" checked><i></i>Remember Me</label>-->
                <input type="submit" id="submitLogin" value="SIGN IN" >
              <div class="clear"> </div>
              <div id="working"></div>
              <div id="error"></div>
              
          </div>
        </form>
      </div>
      <!--//End-login-form-->
      <!---728x90--->

      <!-----start-copyright---->
            <div class="copy-right">
            <p> Powered by TECHORION<br>
For any query contact us 0161-450-8585</a></p>
          </div>
          <!---728x90--->

        <!-----//end-copyright---->
        
</body>
 </html>
   
<script>
$(document).ready(function () {
  
setTimeout(function(){ 
                $("#load").hide();
           $("#result").show();
      
        }, 2000);

 });

$('document').ready(function()
{ 
$("#submitLogin").click(function(event){

   event.preventDefault();
   var data = $("#login-form").serialize();
   $.ajax({
   type : 'POST',
   url  : '<?php echo $domain;?>/include/check_login.php',
   data : data,
   beforeSend: function()
   { 
    $("#error").fadeOut();
    $("#working").html('<div class="alert alert-info"><h4 class="block" style="font-weight: bold;">  <i class = "fa fa-spinner fa-2x slow-spin"></i>  Validating Your Data.... </h4></div>');
   },
   success :  function(response)
      { 
      //alert(response+"Hello"); 
        if(response=="ok"){
        window.location.href="<?php echo $domain;?>/dashboard";
    }
     else{
      //alert(response);   
      //$("#working").fadeout();      
    $("#error").html('<div class="alert alert-danger"> <i class="fa fa-times"></i> &nbsp; '+response+' !</div>');
           $("#working12").html('<div class="alert alert-danger" style="color:red;width:500px;margin-bottom:20px;">  &nbsp; '+response+' !</div>');
        // });
     }
   return false;
     }
   
   
   
   
   
   
   });
});
});

</script>

