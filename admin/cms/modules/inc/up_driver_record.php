 <?php

$d=mysql_real_escape_string($_GET['link']);



 $rUp=mysql_fetch_assoc(mysql_query("select * from driverdetails where DriverId='".$d."'"));

 ?>

 

 <section class="content-header">

      <h1>

       Update Record

        <small>Control panel</small>

      </h1>

      <ol class="breadcrumb">

        <li><a href="<?php echo $baseurl;?>/dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>

        <li><a href="<?php echo $domain;?>/dashboard/driversrecord"><i class="fas fa-database"></i> Driver Records</a></li>

        <li class="active">Update Record</li>

      </ol>

    </section>



    <!-- Main content -->

    <section class="content">

      <!-- Small boxes (Stat box) -->

      <div class="row" style="margin:20px;">

			<!--Add Button--->   

  <form method="post" id="frm_add" enctype="multipart/form-data">

				<input type="hidden" value="add" name="action" id="action">

        <div class="form-group">

                    <label for="name" class="control-label">Driver ID:</label>

                    <?php $drid=$rUp['driverdID']; ?>

                    <input type="text" class="form-control" id="driverID" name="driverID" value="<?php echo $drid;?>" disabled />

                  </div>

                  <div class="form-group">

                    <label for="name" class="control-label">First Name:</label>

                    <input type="text" class="form-control" id="alpha" name="fname" value="<?php echo $rUp['DriverFName'];?>"/>

                  </div>

                  <div class="form-group">

                    <label for="name" class="control-label">Last Name:</label>

                    <input type="text" class="form-control" id="alpha2" name="lname" value="<?php echo $rUp['DriverLName'];?>"/>

                  </div>

                  <div class="form-group">

                    <label for="salary" class="control-label">Email:</label>

                    <input type="text" class="form-control" id="salary" name="email" value="<?php echo $rUp['DriverEmail'];?>"/>

                  </div>

				  <div class="form-group">

                    <label for="salary" class="control-label">Date Of Birth:</label>

                    <input type="text" class="form-control" id="salary" name="dob" value="<?php echo $rUp['DriverDob'];?>"/>

                  </div>

				  <div class="form-group">

                    <label for="salary" class="control-label">Age:</label>

                    <input type="text" class="form-control" id="num" name="age" value="<?php echo $rUp['DriverAge'];?>"/>

                  </div>

				  <div class="form-group">

                    <label for="salary" class="control-label">Contact No:</label>

                    <input type="text" class="form-control" id="num2" name="contno" value="<?php echo $rUp['DriverCont'];?>"/>

                  </div>

				  <div class="form-group">

                    <label for="name" class="control-label">Emergency Contact Number:</label>

                    <input type="text" class="form-control" id="num3" name="emer" value="<?php echo $rUp['EmergencyCon'];?>"/>

                  </div>

				  

				  <div class="form-group">

                    <label for="salary" class="control-label">Permanent Address:</label>

                    <input type="text" class="form-control" id="age" name="permadd" value="<?php echo $rUp['DriverAddress'];?>"/>

                  </div>

				  <div class="form-group">

                    <label for="salary" class="control-label">Current Address:</label>

                    <input type="text" class="form-control" id="age" name="curradd" value="<?php echo $rUp['DriverCurrAddd'];?>"/>

                  </div>

				  <div class="form-group">

                    <label for="salary" class="control-label">Location:</label>

                    <input type="text" class="form-control" id="alpha3" name="country" Placeholder="Country" value="<?php echo $rUp['DriverCountry'];?>"/>&nbsp;

					<input type="text" class="form-control" id="alpha4" name="state" Placeholder="State" value="<?php echo $rUp['DiverState'];?>"/>&nbsp;

					<input type="text" class="form-control" id="alpha5" name="city" Placeholder="City" value="<?php echo $rUp['DriverCity'];?>"/>

                  </div>

                  <div class="form-group">

                    <label for="salary" class="control-label">Postal Code:</label>

                    <input type="text" class="form-control" id="postalcode" name="postalcode" placeholder="Postal Code"  value="<?php echo $rUp['postal'];?>" />

                  </div>

				   <div class="form-group">

                    <label for="salary" class="control-label">Driver Category:</label>

                    <select name="driverCategory" class="form-control">

					<option value="">Select Option</option>

					<option value="Employee"<?php if($rUp['driverCate']=="Employee"){echo 'selected==selected';}?>>Employee</option>

					<option value="Contactor" <?php if($rUp['driverCate']=="Contactor"){echo 'selected==selected';}?>>Contactor</option>

					<option value="Owner Operator" <?php if($rUp['driverCate']=="Owner Operator"){echo 'selected==selected';}?>>Owner Operator</option>

					<option value="Owner Operator Employee" <?php if($rUp['driverCate']=="Owner Operator Employee"){echo 'selected==selected';}?>>Owner Operator Employee</option>

					

					</select>

                  </div>

                   <div class="form-group">

                    <label for="salary" class="control-label">Start Date:</label>

                    <input type="text" class="form-control" id="startdate" name="startdate" value="<?php echo $rUp['startdate'];?>"/>

                  </div>

				  <div class="form-group">

                    <label for="salary" class="control-label">Corporation Name:</label>

          <input type="text" class="form-control" id="age" name="dcop" value="<?php echo $rUp['Driver_Corp'];?>"/>

                  </div>

				  <div class="form-group">

                    <label for="salary" class="control-label">WCB Account No:</label>

                    <input type="text" class="form-control" id="age" name="daccountno" value="<?php echo $rUp['Driver_Account'];?>"/>

                  </div>

				  <div class="form-group">

                    <label for="salary" class="control-label">Training Date:</label>

 <input type="text" class="form-control" id="dtrainingdate" name="dtrainingdate" value="<?php echo $rUp['Driver_Training'];?>"/>

                  </div>

				  <div class="form-group">

                    <label for="salary" class="control-label">Driver Licence No:</label>

          <input type="text" class="form-control" id="age" name="dLic" value="<?php echo $rUp['DriverLicence'];?>"/>

                  </div>

                <div class="form-group">

                    <label for="salary" class="control-label">Licence Expiry Date:</label>

                    <input type="text" class="form-control" id="licExpdate" name="licExpdate" value="<?php echo $rUp['DriverLceExp'];?>"/>

                  </div>

                   <div class="form-group">

                    <label for="salary" class="control-label">Driver license province:</label>

                    <input type="text" class="form-control" id="licprov" name="licprov" value="<?php echo $rUp['DriverLicenceProv'];?>"/>

                  </div>

                  <div class="form-group">

                    <label for="salary" class="control-label">Abstract Date:</label>

                    <input type="text" class="form-control" id="abdate" name="abdate" value="<?php echo $rUp['AbstractDate'];?>"/>

                  </div>

                  <div class="form-group">

                    <label for="salary" class="control-label">SIN Number:</label>

                    <input type="text" class="form-control" id="sinno" name="sinno" value="<?php echo $rUp['SinNo'];?>"/>

                  </div>

                  <div class="form-group">

                    <label for="salary" class="control-label">TDG Date:</label>

                    <input type="text" class="form-control" id="tdgdt" name="tdgdt" value="<?php echo $rUp['TdgDate']; ?>" />

                  </div>

                  <div class="form-group">

                    <label for="salary" class="control-label">DDC Training Date:</label>

                    <input type="text" class="form-control" id="ddctd" name="ddctd" value="<?php echo $rUp['DDCTraining']; ?>"/>

                  </div>

                  <div class="form-group">

                    <label for="salary" class="control-label">LCV Training:</label>

                    <input type="text" class="form-control" id="lcv" name="lcv" value="<?php echo $rUp['LCVTraing']; ?>"/>

                  </div>



				  <div class="form-group">

                    <label for="salary" class="control-label">Documents Upload:</label>

                    <input type="File" class="form-control" id="age" name="attachment"/><br><br><a href="<?php echo $adminurl.'/uploads/driverdocs/'.$rUp['DriverDoc'];?>"><?php echo $rUp['DriverDoc'];?></a>

					<input type="hidden" value="<?php echo $rUp['DriverDoc'];?>" name="fileold">

					<input type="hidden" value="<?php echo $rUp['JoinDate'];?>" name="joindate">

					<input type="hidden" value="<?php echo $d;?>" name="driverid">

                  </div>

                  <div class="form-group">

                    <label for="salary" class="control-label">isPublished:</label>

                    <input type="checkbox" id="lcv" name="pub" value="1" <?php if($rUp['isPublished']==1){echo 'checked=checked';} ?>/>

                  </div>

            </div>

            <div class="modal-footer">

                <button type="button" class="btn btn-default" id="btn_close" data-dismiss="modal">Close</button>

                <button type="button" id="btn_up" class="btn btn-primary">Update</button>

            </div>

			<div id="result"></div>

			</form>

        </div>

    

</section>











   

              

<script>

$(document).ready(function () {

  $('#alpha,#alpha2,#alpha3,#alpha4,#alpha5').bind('keyup blur',function(){ 
    var node = $(this);
    node.val(node.val().replace(/[^a-z,A-Z]/g,'') ); }
);



$('#num,#num2,#num3,#num4').bind('keyup blur',function(){ 
    var node = $(this);
    node.val(node.val().replace(/[^0-9]/g,'') ); }
);

$("#btn_close").click(function (event) {
    window.location.href="<?php echo $domain;?>/dashboard";
   });

    $("#btn_up").click(function (event) {

		//alert("hello");



        //stop submit the form, we will post it manually.

        event.preventDefault();



        // Get form

        var form = $('#frm_add')[0];



		// Create an FormData object 

        var data = new FormData(form);



		// If you want to add an extra field for the FormData

        data.append("sd", "updriver");



		// disabled the submit button

        $("#btnSubmit").prop("disabled", true);



        $.ajax({

            type: "POST",

            enctype: 'multipart/form-data',

            url: "<?php echo $baseurl;?>/inc/up_data.php",

            data: data,

            processData: false,

            contentType: false,

            cache: false,

            timeout: 600000,

            success: function (data) {



                $("#result").text(data);

                console.log("SUCCESS : ", data);

				window.location.href="<?php echo $domain;?>/dashboard/driversrecord";

                



            },

            error: function (e) {



                $("#result").text(e.responseText);

                console.log("ERROR : ", e);

                $("#btnSubmit").prop("disabled", false);



            }

        });



    });



});



</script>

<link type="text/css" href="css/ui-lightness/jquery-ui-1.8.21.custom.css" rel="stylesheet" /> 

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>



<script>

 $(function() 

 {   

 $("#startdate" ).datepicker({dateFormat:"dd-mm-yy" });

 $("#dtrainingdate" ).datepicker({dateFormat:"dd-mm-yy" });

 $("#licExpdate").datepicker({dateFormat:"dd-mm-yy"});

 $("#abdate").datepicker({dateFormat:"dd-mm-yy"});

 $("#ddctd").datepicker({dateFormat:"dd-mm-yy"});

 $("#tdgdt").datepicker({dateFormat:"dd-mm-yy"});

 

 });

 </script>