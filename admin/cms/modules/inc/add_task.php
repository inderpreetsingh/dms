 <section class="content-header">

      <h1>

       Add Task List

         <small>Control panel</small>

      </h1>

      <ol class="breadcrumb">

        <li><a href="<?php echo $domain;?>/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>

        <li class="active">Add Task List</li>

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

                    <label for="name" class="control-label">Driver Name:</label>

                    <select name="driverId" class="form-control">

                      <option value="">---------Select Driver-------------</option>

					<?php

						$allDriver=mysql_query("select * from driverdetails where status='1'");

						while($rs=mysql_fetch_assoc($allDriver)){

							

							echo '<option value="'.$rs['DriverId'].'">'.$rs['DriverFName'].'&nbsp;'.$rs['DriverLName'].'</option>';

						}



					?>

					

					

					</select>

                  </div>

				  <div class="form-group">

                    <label for="salary" class="control-label">Vehicle :</label>

                    <select name="vehID" class="form-control">

                        <option value="">---------Select Vehicle-------------</option>

					<?php

						$allvriver=mysql_query("select * from vehicledetails where Active='1'");

                                                  if(mysql_num_rows($allvriver)<='0'){

                                                       echo '  <option value="">-----No Data Found------</option>';

                                                     }

						while($rss=mysql_fetch_assoc($allvriver)){

							

							echo '<option value="'.$rss['VehID'].'">'.$rss['VehName'].'</option>';

						}



					?>

					

					

					</select>

                  </div>

                  <div class="form-group">

                    <label for="salary" class="control-label">Location:</label>

                    <input type="text" class="form-control" id="salary" name="aLoc"/>

                  </div>

				  <div class="form-group">

                    <label for="salary" class="control-label">Assign date:</label>

                    <input type="text" class="form-control" id="aDate" name="aDate"/>

                  </div>

				  <div class="form-group">

                    <label for="salary" class="control-label">Assign Time:</label>

                    <input type="text" class="form-control" id="age" name="aTime"/>

                  </div>

				 

                <input type="hidden" value="add_veh" name="formTyp">

            </div>

            <div class="modal-footer">

                <button type="button" class="btn btn-default" id="btn_close" data-dismiss="modal">Close</button>

                <button type="button" id="btn_add" class="btn btn-primary">Save</button>

            </div>

			<div id="show"></div>

			</form>

        </div>

    

</section>











   

              

<script>

$(document).ready(function () {

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

            url: "<?php echo $baseurl; ?>/inc/add_taskrecord.php",

            data: data,

            processData: false,

            contentType: false,

            cache: false,

            timeout: 600000,

            success: function (data) {



                $("#show").text(data);

                console.log("SUCCESS : ", data);

				window.location.href="<?php echo $domain;?>/dashboard/taskrecord";

                



            },

            error: function (e) {



                $("#show").text(e.responseText);

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

 {   $( "#aDate" ).datepicker({dateFormat:"yy-mm-dd" });

 

 });

 </script>