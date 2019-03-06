 <section class="content-header">
      <h1>
       Tickets & Violators 
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo $domain;?>/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo $domain;?>/dashboard/ticketsviolators"><i class="fa fa-database"></i> Tickets & Violators </a></li>
        <li class="active">Update Record</li>
      </ol>
    </section>
    <?php 
    $link=mysql_real_escape_string($_GET['link']);
    $rssp=mysql_fetch_array(mysql_query("select * from tickets where Ticket_id='".$link."'"));
    $prmdt=explode('-', $rssp['ticketdate']);
    $pDate=$prmdt[2].'-'.$prmdt[1].'-'.$prmdt[0];

    ?>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row" style="margin:20px;">
			<!--Add Button--->   
  <form method="post" id="frm_add" enctype="multipart/">
				<input type="hidden" value="add" name="action" id="action">
                   <div class="form-group">
                    <label for="salary" class="control-label">Ticket/Violation Date:</label>
                    <input type="text" class="form-control" id="issuedate" name="tickdt" value="<?php echo $pDate; ?>" />
                  </div>
                  <div class="form-group">
                    <label for="name" class="control-label">Driver Name:</label>
                     <select name="driverId" class="form-control">
                     <option value="">--------Select Driver Name--------</option>
          <?php
            $allDriver=mysql_query("select * from driverdetails where isPublished='1' and isDeleted='0'");
            while($rs=mysql_fetch_assoc($allDriver)){
              
              echo '<option value="'.$rs['DriverId'].'"'; if($rssp['DriverName']==$rs['DriverId']){ echo 'selected=selected';} echo '>'.ucwords($rs['DriverFName'])."&nbsp; ".ucwords($rs['DriverLName']).'</option>';
            }

          ?>
          
          
          </select>

                  </div>
             
				  <?php /*<div class="form-group">
                    <label for="salary" class="control-label">Permit Issuance State:</label>
                    <input type="text" class="form-control" id="issuestate" name="issuestate"/>
          </div>*/?>
          <div class="form-group">
                    <label for="salary" class="control-label">Tractor Unit:</label>
                    <input type="text" class="form-control" id="issueby" name="tractorunit" value="<?php echo $rssp['TractorUnit']; ?>" />
          </div>
          <div class="form-group">
                    <label for="salary" class="control-label">Trailer Unit:</label>
                    <input type="text" class="form-control" id="issueby" name="trailerunit" value="<?php echo $rssp['TrailerUnit']; ?>"/>
          </div>

          <div class="form-group">
                    <label for="salary" class="control-label">Violation:</label>
                    <input type="text" class="form-control" id="violation" name="violation" value="<?php echo $rssp['Violation']; ?>" />
          </div>
<div class="form-group">
                    <label for="salary" class="control-label">Fine Amount:</label>
                    <input type="text" class="form-control" id="fineamt" name="fineamt" value="<?php echo $rssp['FineAmount']; ?>"/>
          </div>

          <div class="form-group">
                    <label for="salary" class="control-label">Due Dates :</label>
                    <input type="text" class="form-control" id="duedt" name="duedt" value="<?php echo $rssp['DueDates']; ?>" />
          </div>
              
          <div class="form-group">
                    <label for="salary" class="control-label">Current Status:  </label>
                    <input type="text" class="form-control" id="curstatus" name="curstatus" value="<?php echo $rssp['CurrentStatus']; ?>"/>
                  </div>
           <div class="form-group">
                    <label for="salary" class="control-label">isPublished :</label>
                    <input type="checkbox" name="pub" value="1" <?php if($rssp['isPublished']==1){ echo "checked==checked";} ?> />
          </div>
           <div class="form-group">
              <div id="show"></div>
           </div>
				 
            <div class="modal-footer">
                <input type="hidden" name="tickid" value="<?php echo $rssp['Ticket_id']; ?>">
                <button type="button" class="btn btn-default" data-dismiss="modal" id="closed">Close</button>
                <button type="button" id="btn_add" class="btn btn-primary">Save</button>
            </div>
			<div id="result"></div>
			</form>
        </div>
    
</section>





   
              
<script>
$(document).ready(function () {
$("#closed").click(function(){
window.location.href="<?php echo $domain;?>/dashboard/ticketsviolators";
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
            url: "<?php echo $domain; ?>/modules/inc/up_ticket.php",
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            timeout: 600000,
            success: function (data) {
                $("#show").text(data);
                console.log("SUCCESS : ", data);
				        window.location.href="<?php echo $domain;?>/dashboard/ticketsviolators";
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
 {   
 $("#permexp" ).datepicker({dateFormat:"dd-mm-yy" });
 $("#issuedate" ).datepicker({dateFormat:"dd-mm-yy" });
 $("#duedt").datepicker({dateFormat:"dd-mm-yy"});
 
 });
 </script>