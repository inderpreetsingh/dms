<?php 
session_unset();
session_start();
include("config/function.php");
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
</head>

<body>
  <div class="materialContainer">


   <div class="box">
      <img src="dist/img/logo.png" class="login-logo">
	       <form name="login" id="login-form" method="post">
            <div class="title">LOGIN</div>

       <div class="input">
       <div id="working12" style="text-align: center;color:Red;"></div>
       </div>     
      <div class="input">
         <label for="Enter User Name"></label>
         <input type="text" name="uname" id="uname" required="" Placeholder="Enter User Name">
         <span class="spin"></span>
      </div>

      <div class="input">
         <label for="Enter Password"></label>
         <input type="password" name="upass" id="upass" required="" Placeholder="Enter Password">
         <span class="spin"></span>
      </div>

      <div class="button login">
         <a href="#"><button id="submitLogin"><span>GO</span> <i class="fa fa-check"></i></button></a>
      </div>
</form>
     <?php /* <a href="#" class="pass-forgot">Forgot your password?</a>  */?>
<div id="working"></div>
<div id="error">
<!-- error will be shown here ! -->
</div>
   </div>

   <div class="overbox">
      <?php /*<div class="material-button alt-2"><span class="shape"></span></div>   */?>
<form name="register" id="register_form" method="post">
      <div class="title">
      <img src="dist/img/logo.png" class="login-logo2">
        REGISTER
      </div>

      <div class="input">
         <label for="regname">Username</label>
         <input type="text" name="regname" id="regname">
         <span class="spin"></span>
      </div>

      <div class="input">
         <label for="regpass">Password</label>
         <input type="password" name="regpass" id="regpass">
         <span class="spin"></span>
      </div>

      <div class="input">
         <label for="reregpass">Repeat Password</label>
         <input type="password" name="reregpass" id="reregpass">
         <span class="spin"></span>
      </div>

      <div class="button">
         <button><span>NEXT</span></button>
      </div>


   </div>

</div>
 

    
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
   url  : 'include/check_login.php',
   data : data,
   beforeSend: function()
   { 
    $("#error").fadeOut();
    $("#working").html('<div class="alert alert-info"><h4 class="block" style="font-weight: bold;">  <i class = "fa fa-spinner fa-2x slow-spin"></i>  Validating Your Data.... </h4></div>');
   },
   success :  function(response)
      {  
       	if(response=="ok"){
        window.location.href="<?php echo $domain;?>/dashboard";
	  }
     else{
      //alert(response);   
      //$("#error").fadeIn(1000, function(){      
    $("#error").html('<div class="alert alert-danger"> <i class="fa fa-times"></i> &nbsp; '+response+' !</div>');
           $("#working12").html(response);
        // });
     }
	 return false;
     }
   
   
   
   
   
   
   });
});
});

</script>
</body>
</html>
