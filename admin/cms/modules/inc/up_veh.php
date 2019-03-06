<?php
$link=$_GET['link'];
 $rUp=mysql_fetch_assoc(mysql_query("select * from vehicledetails where VehID='".$link."'"));
 $assD=explode(',',$rUp['assignDate']);
 
 ?>



 <section class="content-header">
      <h1>
       Update Vehicle Record
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo $domain;?>/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo $domain;?>/dashboard/vehiclerecord"><i class="fas fa-database"></i> Vehicles Records</a></li>
        <li class="active">Update Record</li>
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
                    <label for="salary" class="control-label">Unit Number:</label>
                    <input type="text" class="form-control" id="VehMake" name="unitno" value="<?php echo $rUp['UnitNumber'];?>"/>
                  </div>
                  <div class="form-group">
                    <label for="salary" class="control-label">Start Date:</label>
                    <input type="text" class="form-control" id="startdt" name="startdt" value="<?php echo $rUp['StartDate'];?>"/>
                  </div>
                <div class="form-group">
                    <label for="salary" class="control-label">Year:</label>
                    <input type="text" class="form-control" id="VehMake" name="year" value="<?php echo $rUp['Year'];?>"/>
                  </div>

          <div class="form-group">
                    <label for="salary" class="control-label">Vehicle Make:</label>
                    <input type="text" class="form-control" id="VehMake" name="VehMake" value="<?php echo $rUp['VehMake'];?>"/>
                  </div>

                <div class="form-group">
                    <label for="salary" class="control-label">Modal :</label>
                    <input type="text" class="form-control" id="modal" name="modal" value="<?php echo $rUp['Modal'];?>"/>
                  </div>

<div class="form-group">
                    <label for="salary" class="control-label">Color :</label>
                    <input type="text" class="form-control" id="color" name="color" value="<?php echo $rUp['Color'];?>" />
                  </div>

<div class="form-group">
                    <label for="salary" class="control-label">VIN :</label>
                    <input type="text" class="form-control" id="vin" name="vin" value="<?php echo $rUp['VIN'];?>"/>
                  </div>

                  <div class="form-group">
                    <label for="salary" class="control-label">Plate Expiry:</label>
                    <input type="text" class="form-control" id="traingDate" name="plexp" value="<?php echo $rUp['PlateExpiry'];?>"/>
                  </div>
                  <div class="form-group">
                    <label for="salary" class="control-label">Plate State:</label>
                    <input type="text" class="form-control" id="plexp" name="plstate" value="<?php echo $rUp['PlateState'];?>"/>
                  </div>
                  <div class="form-group">
                    <label for="salary" class="control-label">CVIP Date:</label>
                    <input type="text" class="form-control" id="cvipdt" name="cvipdt" value="<?php echo $rUp['CVIPDate'];?>"/>
                  </div>
                   <div class="form-group">
                    <label for="salary" class="control-label">PM Date:</label>
                    <input type="text" class="form-control" id="pmdt" name="pmdt" value="<?php echo $rUp['PMDate'];?>"/>
                  </div>
                  <div class="form-group">
                    <label for="salary" class="control-label">Owner Name:</label>
                    <input type="text" class="form-control" id="pmdtss" name="onrnm" value="<?php echo $rUp['OwnerName'];?>"/>
                  </div>
                  <div class="form-group">
                    <label for="salary" class="control-label">Leased by:</label>
                    <input type="text" class="form-control" id="lsedby" name="lsedby" value="<?php echo $rUp['Leasedby'];?>"/>
                  </div>
                  <div class="form-group">
                    <label for="salary" class="control-label">isPublished:</label>
                    <input type="checkbox"  id="pub" value="1" name="pub" <?php if($rUp['isPublished']==1){ echo 'checked==checked';} ?>/>
                  </div>
                  



        <?php /*
                  <div class="form-group">
                    <label for="name" class="control-label">Vehicle Name:</label>
           <input type="text" class="form-control" id="name" name="vehname" value="<?php echo $rUp['VehName'];?>"/>
                  </div>
				  <div class="form-group">
                    <label for="salary" class="control-label">Vehicle Type:</label>
                    <input type="text" class="form-control" id="salary" name="VehType" value="<?php echo $rUp['VehType'];?>"/>
                  </div>
                  <div class="form-group">
                    <label for="salary" class="control-label">Vehicle No:</label>
                    <input type="text" class="form-control" id="salary" name="VehNo" value="<?php echo $rUp['VehNo'];?>"/>
                  </div>
				  <div class="form-group">
                    <label for="salary" class="control-label">Registeration No:</label>
                    <input type="text" class="form-control" id="salary" name="VehRegoNo" value="<?php echo $rUp['VehRegoNo'];?>"/>
                  </div>
				  <div class="form-group">
                    <label for="salary" class="control-label">Vehicle Make:</label>
                    <input type="text" class="form-control" id="age" name="VehMake" value="<?php echo $rUp['VehMake'];?>"/>
                  </div>
				  <div class="form-group">
                    <label for="salary" class="control-label">Training Date:</label>
                    <input type="text" class="form-control" id="traingDate" name="traingDate" value="<?php echo $rUp['traingDate'];?>"/>
                  </div>
				  
				  
				  <div class="form-group">
                    <label for="salary" class="control-label">Training Expairy Date:</label>
                    <input type="text" class="form-control" id="traingExp" name="traingExp" value="<?php echo $rUp['traingExp'];?>"/>
                  </div>
				  <div class="form-group">
                    <label for="salary" class="control-label">Assigned Date:</label>
                    <input type="text" class="form-control" id="toDate" name="toDate" Placeholder="To" value="<?php echo $assD[0];?>"/>
					<input type="text" class="form-control" id="frmDate" name="frmDate" Placeholder="Till" value="<?php echo $assD[1];?>"/>
                  </div>
				  
				  <div class="form-group">
                    <label for="salary" class="control-label">Select Driver:</label>
                    <select name="driverId" class="form-control">
                      <option value="">------Select Driver Name------</option>
					<?php
						$allDriver=mysql_query("select * from driverdetails where status='1'");
						while($rs=mysql_fetch_assoc($allDriver)){
							
							echo '<option value="'.$rs['DriverId'].'"';  if($rUp['DriverId']==$rs['DriverId']){echo 'selected==selected';} echo  '>'.$rs['DriverFName'].$rs['DriverLName'].'</option>';
						}

					?>
					
					
					</select>
                  </div>*/?>
                <input type="hidden" value="up_veh" name="formTyp">
				<input type="hidden" value="<?php echo $link;?>" name="vid">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" id="btn_add" class="btn btn-primary">Update</button>
            </div>
			<div id="result"></div>
			</form>
        </div>
    
</section>





   
              
<script>
$(document).ready(function () {

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
            url: "<?php echo $baseurl;?>/inc/update_veh.php",
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