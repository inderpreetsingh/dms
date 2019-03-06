 <section class="content-header">

      <h1>

       Add Vehicle Record

        <small>Control panel</small>

      </h1>

      <ol class="breadcrumb">

        <li><a href="<?php echo $domain;?>/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>

        <li><a href="<?php echo $domain;?>/dashboard/vehiclerecord"><i class="fas fa-database"></i> Vehicles Records</a></li>

        <li class="active">Add New Record</li>

      </ol>

    </section>



    <!-- Main content -->

    <section class="content">

      <!-- Small boxes (Stat box) -->

      <div class="row" style="margin:20px;">

			<!--Add Button--->   

  <form method="post" id="frm_add" enctype="multipart/">

				<input type="hidden" value="add" name="action" id="action">

               <?php /*   <div class="form-group">

                    <label for="name" class="control-label">Vehicle Name:</label>

                    <input type="text" class="form-control" id="name" name="vehname"/>

                  </div>

				  <div class="form-group">

                    <label for="salary" class="control-label">Vehicle Type:</label>

                    <input type="text" class="form-control" id="salary" name="VehType"/>

                  </div>

                  <div class="form-group">

                    <label for="salary" class="control-label">Vehicle No:</label>

                    <input type="text" class="form-control" id="VehNo" name="VehNo"/>

                  </div>

				  <div class="form-group">

                    <label for="salary" class="control-label">Registeration No:</label>

                    <input type="text" class="form-control" id="VehRegoNo" name="VehRegoNo"/>

                  </div>*/?>

                  <div class="form-group">

                    <label for="salary" class="control-label">Unit Number:</label>

                    <input type="text" class="form-control" id="VehMake" name="unitno"/>

                  </div>

                  <div class="form-group">

                    <label for="salary" class="control-label">Start Date:</label>

                    <input type="text" class="form-control" id="startdt" name="startdt"/>

                  </div>

                <div class="form-group">

                    <label for="salary" class="control-label">Year:</label>

                    <input type="text" class="form-control" id="num" name="year"/>

                  </div>



				  <div class="form-group">

                    <label for="salary" class="control-label">Vehicle Make:</label>

                    <input type="text" class="form-control" id="alpha" name="VehMake"/>

                  </div>



                <div class="form-group">

                    <label for="salary" class="control-label">Modal :</label>

                    <input type="text" class="form-control" id="modal" name="modal"/>

                  </div>



<div class="form-group">

                    <label for="salary" class="control-label">Color :</label>

                    <input type="text" class="form-control" id="alpha2" name="color"/>

                  </div>



<div class="form-group">

                    <label for="salary" class="control-label">VIN :</label>

                    <input type="text" class="form-control" id="vin" name="vin"/>

                  </div>



                  <div class="form-group">

                    <label for="salary" class="control-label">Plate Expiry:</label>

                    <input type="text" class="form-control" id="traingDate" name="plexp"/>

                  </div>

                  <div class="form-group">

                    <label for="salary" class="control-label">Plate State:</label>

                    <input type="text" class="form-control" id="plexp" name="plstate"/>

                  </div>

                  <div class="form-group">

                    <label for="salary" class="control-label">CVIP Date:</label>

                    <input type="text" class="form-control" id="cvipdt" name="cvipdt"/>

                  </div>

                   <div class="form-group">

                    <label for="salary" class="control-label">PM Date:</label>

                    <input type="text" class="form-control" id="pmdt" name="pmdt"/>

                  </div>

                  <div class="form-group">

                    <label for="salary" class="control-label">Owner Name:</label>

                    <input type="text" class="form-control" id="alpha3" name="onrnm"/>

                  </div>

                  <div class="form-group">

                    <label for="salary" class="control-label">Leased by:</label>

                    <input type="text" class="form-control" id="lsedby" name="lsedby"/>

                  </div>

                  <div class="form-group">

                    <label for="salary" class="control-label">isPublished:</label>

                    <input type="checkbox" checked="checked" value="1" id="pub" name="pub"/>

                  </div>

                  

               <?php /*   

				  <div class="form-group">

                    <label for="salary" class="control-label">Training Date:</label>

                    <input type="text" class="form-control" id="traingDate" name="traingDate"/>

                  </div>

				  

				  

				  <div class="form-group">

                    <label for="salary" class="control-label">Training Expairy Date:</label>

                    <input type="text" class="form-control" id="traingExp" name="traingExp"/>

                  </div>

				  <div class="form-group">

                    <label for="salary" class="control-label">Assigned Date:</label>

                    <input type="text" class="form-control" id="toDate" name="toDate" Placeholder="To"/>

					<input type="text" class="form-control" id="frmDate" name="frmDate" Placeholder="Till"/>

                  </div>

				  

				  <div class="form-group">

                    <label for="salary" class="control-label">Select Driver:</label>

                    <select name="driverId" class="form-control">

                     <option value="">--------Select Driver Name--------</option>

					<?php

						$allDriver=mysql_query("select * from driverdetails where status='1'");

						while($rs=mysql_fetch_assoc($allDriver)){

							

							echo '<option value="'.$rs['DriverId'].'">'.$rs['DriverFName'].$rs['DriverLName'].'</option>';

						}



					?>

					

					

					</select>

                  </div>

                

            </div>*/?>

            <div class="modal-footer">

              <input type="hidden" value="add_veh" name="formTyp">

                <button type="button" class="btn btn-default" data-dismiss="modal" id="closepg">Close</button>

                <button type="button" id="btn_add" class="btn btn-primary">Save</button>

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

  $("#closepg").click(function(){ 

window.location.href="<?php echo $domain;?>/dashboard/vehiclerecord";



  });



    $("#btn_add").click(function (event) {



        //stop submit the form, we will post it manually.

        event.preventDefault();



        // Get form

        var form = $('#frm_add')[0];



		// Create an FormData object 

        var data = new FormData(form);



		// If you want to add an extra field for the FormData

        data.append("CustomField", "This is some extra data, testing");



		// disabled the submit button

        $("#btnSubmit").prop("disabled", true);



        $.ajax({

            type: "POST",

            enctype: 'multipart/form-data',

            url: "<?php echo $baseurl;?>/inc/add_veh.php",

            data: data,

            processData: false,

            contentType: false,

            cache: false,

            timeout: 600000,

            success: function (data) {



                $("#result").text(data);

                console.log("SUCCESS : ", data);

				window.location.href="<?php echo $domain;?>/dashboard/vehiclerecord";

                



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

 {   $( "#frmDate" ).datepicker({dateFormat:"dd-mm-yy" });

 $( "#toDate" ).datepicker({dateFormat:"dd-mm-yy" });

 $( "#traingDate" ).datepicker({dateFormat:"dd-mm-yy" });

 $( "#cvipdt" ).datepicker({dateFormat:"dd-mm-yy" });

 $( "#startdt" ).datepicker({dateFormat:"dd-mm-yy" });

 $("#pmdt").datepicker({dateFormat:"dd-mm-yy"});

 });

 </script>