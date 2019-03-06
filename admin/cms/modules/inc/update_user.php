<?php 

$link=$_GET['link'];

$sqlAdmin=mysql_query("select * from admin where Admin_Id='".$link."'");

$rss=mysql_fetch_assoc($sqlAdmin);



?>



 <section class="content-header">

      <h1>

      Update User Record

        <small>Control panel</small>

      </h1>

      <ol class="breadcrumb">

        <li><a href="<?php echo $domain;?>/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>

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

                    <label for="name" class="control-label">Name:</label>

                    <input type="text" class="form-control" id="alpha" name="name" value="<?php echo $rss['Name']; ?>" />

                  </div>

                  <div class="form-group">

                    <label for="salary" class="control-label">Contact No:</label>

                    <input type="text" class="form-control" id="num" name="contno" value="<?php echo $rss['Admin_cont']; ?>"/>

                  </div>

                  <div class="form-group">

                    <label for="salary" class="control-label">User Name:</label>

                    <input type="text" class="form-control" id="salary" name="username" value="<?php echo $rss['Admin_Name']; ?>"/>

                  </div>

				 <div class="form-group">

                    <label for="salary" class="control-label">Password:</label>

                    <input type="text" class="form-control" id="age" name="pass" value="<?php echo $rss['Admin_pwd']; ?>"/>

                  </div>

				 <div class="form-group">

                    <label for="salary" class="control-label">Company Name:</label>

                    <select name="companyID" class="form-control">

          <option value="">-------------Select Company--------</option>

          <?php

            $sqlcomp=mysql_query("select * from companydetail where isPublished='1' and isDeleted='0'");

            while($rsComp=mysql_fetch_assoc($sqlcomp)){

              echo '<option value="'.$rsComp['Admin_Id'].'"';if($rss['companyID']==$rsComp['Admin_Id']){ echo 'selected=selected';} echo '>'.$rsComp['companyName'].'</option>';



            }



          ?>

          

          

          

          

          </select>

                  </div>

				   <div class="form-group">

                    <label for="salary" class="control-label">User Type:</label>

                    <select name="adminCategory" class="form-control">

					<option value="">-------------Select User Type--------</option>

					<option value="Employee" <?php if($rss['Admin_Position']=='Employee'){ echo 'selected==selected'; }?>>Employee</option>

					<option value="Admin" <?php if($rss['Admin_Position']=='Admin'){ echo 'selected==selected'; }?>>Admin</option>

					

					

					

					</select>

                  </div>

				  <div class="form-group">

                    <label for="salary" class="control-label">Active</label>

                    <input type="checkbox" id="age" name="active" value="<?php echo $rss['Status']; ?>" <?php if($rss['Status']=='1'){ echo 'checked==checked';} ?> />

                  </div>

				  <div class="form-group">

                    <label for="salary" class="control-label">Upload Picture:</label>

                    <input type="File" class="form-control" id="age" name="attachment"/>

                    <?php if($rss['Admin_Pic']!=''){ ?>

                      <img src="<?php echo $fronturl; ?>/uploads/admindocs/<?php echo $rss['Admin_Pic']; ?>" height="80px" width="80px">



                    <?php } ?>

                  </div>

            </div>

            <div class="modal-footer">

               <input type="hidden" name="oldimg" value="<?php echo $rss['Admin_Pic']; ?>">

              <input type="hidden" name="userID" value="<?php echo $link; ?>">

                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

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

            url: "<?php echo $baseurl; ?>/inc/up_userdata.php",

            data: data,

            processData: false,

            contentType: false,

            cache: false,

            timeout: 600000,

            success: function (data) {



                $("#result").text(data);

                console.log("SUCCESS : ", data);

				window.location.href="<?php echo $domain;?>/dashboard/userrecord";

                



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