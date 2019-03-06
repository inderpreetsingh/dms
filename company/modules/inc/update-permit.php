 <section class="content-header">
      <h1>
       Update Permit Record
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo $domain;?>/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
         <li><a href="<?php echo $domain;?>/dashboard/permit"><i class="fa fa-database"></i> Registerations & Permits</a></li>
        <li class="active">Update Record</li>
      </ol>
    </section>
    <?php
    $link=mysql_real_escape_string($_GET['link']);
    $rssp=mysql_fetch_array(mysql_query("select permitnumber,permitissuancedate,permitexpiry,permitissuancestate,issuedby,permDesp,isPublished from permitmodule where p_id='".$link."'"));
    $prmdt=explode('-', $rssp[1]);
    $pDate=$prmdt[2].'-'.$prmdt[1].'-'.$prmdt[0];

     $expdt=explode('-',$rssp[2]);
     $expDate=$expdt[2].'-'.$expdt[1].'-'.$expdt[0]; 
    ?>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row" style="margin:20px;">
			<!--Add Button--->   
  <form method="post" id="frm_add" enctype="multipart/">
				<input type="hidden" value="add" name="action" id="action">
                  <div class="form-group">
                    <label for="salary" class="control-label">Permit Date:</label>
                    <input type="text" class="form-control" id="issuedate" name="issuedate" value="<?php echo $pDate; ?>"/>
                  </div>
                  <div class="form-group">
                    <label for="name" class="control-label">Permit Number:</label>
                    <input type="text" class="form-control" id="pernNo" name="pernNo" value="<?php echo $rssp[0]; ?>" />
                  </div>
          <!--  <div class="form-group">
                    <label for="salary" class="control-label">Permit Issuance State:</label>
                    <input type="text" class="form-control" id="issuestate" name="issuestate" value="<?php //echo $rssp[3]; ?>"/>
          </div>-->
          <div class="form-group">
                    <label for="salary" class="control-label">Issued By:</label>
                    <input type="text" class="form-control" id="issueby" name="issueby" value="<?php echo $rssp[4]; ?>" />
          </div>
          <div class="form-group">
                    <label for="salary" class="control-label">Permit Description :</label>
                    <textarea class="form-control" id="perdesp" name="perdesp" style="width: 1050px;height: 150px;"><?php echo $rssp[5]; ?></textarea>
          </div>
           <div class="form-group">
                    <label for="salary" class="control-label">Permit Expiry </label>
                    <input type="text" class="form-control" id="permexp" name="permexp" value="<?php echo $expDate; ?>"/>
                  </div>
          <div class="form-group">
                    <label for="salary" class="control-label">isPublished:</label>
                    <input type="checkbox" id="pub" name="pub" value="1" <?php if($rssp[6]=='1'){ echo 'checked==checked';}?>/>
          </div>
           <div class="form-group">
              <div id="show"></div>
           </div>
				 
            <div class="modal-footer">
              <input type="hidden" class="form-control" id="pid" name="pid" value="<?php echo $link; ?>"/>
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
      window.location.href="<?php echo $domain;?>/dashboard/permit";
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
            url: "<?php echo $domain; ?>/modules/inc/up_permit.php",
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            timeout: 600000,
            success: function (data) {
                $("#show").text(data);
                console.log("SUCCESS : ", data);
		          window.location.href="<?php echo $domain;?>/dashboard/permit";
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
 
 });
 </script>