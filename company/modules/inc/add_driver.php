 <section class="content-header">

      <h1>

       Add New Driver Record

        <small>Control panel</small>

      </h1>

      <ol class="breadcrumb">

        <li><a href="<?php echo $domain;?>/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>

        <li><a href="<?php echo $domain;?>/dashboard/driversrecord"><i class="fas fa-database"></i> Drivers Records</a></li>

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

        <div class="form-group">

                    <label for="name" class="control-label">Driver ID:</label>

                    <?php $drid="DMS".rand(); ?>

                    <input type="text" class="form-control" id="driverID" name="driverID" value="<?php echo $drid;?>" readonly />

                  </div>

                   

                  <div class="form-group">

                    <label for="name" class="control-label">First Name:</label>

                    <input type="text" class="form-control" id="txtOnly" name="fname"/>

                  </div>

                   <div class="form-group">

                    <label for="name" class="control-label">Last Name:</label>

                    <input type="text" class="form-control" id="txtOnly2" name="lname"/>

                  </div>

                  <div class="form-group">

                    <label for="salary" class="control-label">Email:</label>

                    <input type="text" class="form-control" id="salary" name="email"/>

                  </div>

				  <div class="form-group">

                    <label for="salary" class="control-label">Date Of Birth:</label>

                    <input type="text" class="form-control" id="salary" name="dob"/>

                  </div>

				  <div class="form-group">

                    <label for="salary" class="control-label">Age:</label>

                    <input type="text" class="form-control" id="quantity" name="age"/><span id="errmsg"></span>

                  </div>

				  <div class="form-group">

                    <label for="salary" class="control-label">Contact No:</label>

                    <input type="text" class="form-control" id="quantity2" name="contno"/><span id="errmsg2"></span>

                  </div>

				  				  

            <div class="form-group">

                    <label for="name" class="control-label">Emergency Contact Number:</label>

                    <input type="text" class="form-control" id="quantity3" name="emer2"/><span id="errmsg3"></span>

                  </div>



				  <div class="form-group">

                    <label for="salary" class="control-label">Permanent Address:</label>

                    <input type="text" class="form-control" id="age" name="permadd"/>

                  </div>

				  <div class="form-group">

                    <label for="salary" class="control-label">Current Address:</label>

                    <input type="text" class="form-control" id="age" name="curradd"/>

                  </div>

				  <div class="form-group">

                    <label for="salary" class="control-label">Location:</label><br />

                    <label for="salary" class="control-label">Country:</label>

                    <input type="text" class="form-control" id="txtOnly3" name="country" Placeholder="Country"/>&nbsp;<label for="salary" class="control-label">Province:</label>

					<input type="text" class="form-control" id="txtOnly4" name="state" Placeholder="Province"/>&nbsp;

          <label for="salary" class="control-label">City:</label>

					<input type="text" class="form-control" id="txtOnly5" name="city" Placeholder="City"/>

                  </div>

                  <div class="form-group">

                    <label for="salary" class="control-label">Postal Code:</label>

                    <input type="text" class="form-control" id="quantity4" name="postalcode" placeholder="Postal Code" />

                  </div>

				   <div class="form-group">

                    <label for="salary" class="control-label">Driver Category:</label>

                    <select name="driverCategory" class="form-control">

					<option value="">Select Option</option>

					<option value="Employee">Employee</option>

					<option value="Contactor">Contactor</option>

					<option value="Owner Operator">Owner Operator</option>

					<option value="Owner Operator Employee">Owner Operator Employee</option>

					

					</select>

                  </div>

                  <div class="form-group">

                    <label for="salary" class="control-label">Start Date:</label>

                    <input type="text" class="form-control" id="startdate" name="startdate"/>

                  </div>

				   <div class="form-group">

                    <label for="salary" class="control-label">Corporation Name:</label>

                    <input type="text" class="form-control" id="age" name="dcop"/>

                  </div>

				  <div class="form-group">

                    <label for="salary" class="control-label">WCB Account Number:</label>

                    <input type="text" class="form-control" id="age" name="daccountno"/>

                  </div>

				  <div class="form-group">

                    <label for="salary" class="control-label">Training Date:</label>

                    <input type="text" class="form-control" id="dtrainingdate" name="dtrainingdate"/>

                  </div>

				  <div class="form-group">

                    <label for="salary" class="control-label">Driver Licence NO:</label>

                    <input type="text" class="form-control" id="age" name="dLic"/>

                  </div>

                <div class="form-group">

                    <label for="salary" class="control-label">Licence Expiry Date:</label>

                    <input type="text" class="form-control" id="licExpdate" name="licExpdate"/>

                  </div>

                  <div class="form-group">

                    <label for="salary" class="control-label">Driver license province:</label>

                    <input type="text" class="form-control" id="licprov" name="licprov"/>

                  </div>

                   <div class="form-group">

                    <label for="salary" class="control-label">Abstract Date:</label>

                    <input type="text" class="form-control" id="abdate" name="abdate"/>

                  </div>

                  <div class="form-group">

                    <label for="salary" class="control-label">SIN Number:</label>

                    <input type="text" class="form-control" id="sinno" name="sinno"/>

                  </div>

                  <div class="form-group">

                    <label for="salary" class="control-label">TDG Date:</label>

                    <input type="text" class="form-control" id="tdgdt" name="tdgdt"/>

                  </div>

                  <div class="form-group">

                    <label for="salary" class="control-label">DDC Training Date:</label>

                    <input type="text" class="form-control" id="ddctd" name="ddctd"/>

                  </div>

                  <div class="form-group">

                    <label for="salary" class="control-label">LCV Training:</label>

                    <input type="text" class="form-control" id="lcv" name="lcv"/>

                  </div>



				  <div class="form-group">

                    <label for="salary" class="control-label">Documents Upload:</label>

                    <input type="File" class="form-control" id="age" name="attachment"/>

                  </div>

                  <div class="form-group">

                    <label for="salary" class="control-label">isPublished:</label>

                    <input type="checkbox" id="lcv" name="pub" value="1" checked="checked"/>

                  </div>

            </div>

            <div class="modal-footer">

                <button type="button" class="btn btn-default" id="btn_close" data-dismiss="modal">Close</button>

                <button type="button" id="btn_add" class="btn btn-primary">Save</button>

            </div>

			<div id="result"></div>

			</form>

        </div>

    

</section>











   

              

<script>

$(document).ready(function () {



$('#txtOnly,#txtOnly2,#txtOnly3,#txtOnly4,#txtOnly4,#txtOnly5').bind('keyup blur',function(){ 
    var node = $(this);
    node.val(node.val().replace(/[^a-z,A-Z]/g,'') ); }
);

$('#quantity,#quantity2,#quantity3,#quantity4').bind('keyup blur',function(){ 
    var node = $(this);
    node.val(node.val().replace(/[^0-9]/g,'') ); }
);



   $("#btn_close").click(function (event) {

    window.location.href="<?php echo $domain;?>/dashboard";

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

            url: "<?php echo $baseurl;?>/inc/add_data.php",

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

<link type="text/css" href="<?php echo $companyurl; ?>/css/ui-lightness/jquery-ui-1.8.21.custom.css" rel="stylesheet" /> 

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">





<script>

 $(function() 

 {   

 $("#startdate" ).datepicker({dateFormat:"dd-mm-yy" });

 $("#dtrainingdate" ).datepicker({dateFormat:"dd-mm-yy" });

 $("#licExpdate").datepicker({dateFormat:"dd-mm-yy"});

 $("#abdate").datepicker({dateFormat:"dd-mm-yy"});

 $("#ddctd").datepicker({dateFormat:"dd-mm-yy"});

 $("#tdgdt").datepicker({dateFormat:"dd-mm-yy"});

 //$("#abdate").datepicker({dateFormat:"dd-mm-yy"});

 });

 </script>