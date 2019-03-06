  <section class="content-header">

      <h1>

      New Company Record

        <small>Control panel</small>

      </h1>

      <ol class="breadcrumb">

        <li><a href="<?php echo $domain;?>/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>

        <li><a href="<?php echo $domain;?>/dashboard/companyrecord"><i class="fa fa-database"></i> Company Records</a></li>

        <li class="active">Add Company</li>

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

                    <label for="name" class="control-label">Company Name:</label>

                    <input type="text" class="form-control" id="cname" name="name"/>

                  </div>

                  <div class="form-group">

                    <label for="salary" class="control-label">Contact No:</label>

                    <input type="text" class="form-control" id="num" name="contno"/>

                  </div>

                  <div class="form-group">

                    <label for="salary" class="control-label">Company Email:</label>

                    <input type="text" class="form-control" id="salary" name="email" value=""/>

                  </div>

                  <div class="form-group">

                    <label for="salary" class="control-label">Owner Name:</label>

                    <input type="text" class="form-control" id="alpha" name="ownernm" value=""/>

                  </div>

				 

                  <div class="form-group">

                    <label for="salary" class="control-label">Company Url:</label>

                    <input type="text" class="form-control" id="urlid" name="companyurl" value="" readonly="readonly" />

                  </div>

				 <div class="form-group">

                    <label for="salary" class="control-label">Upload Logo:</label>

                    <input type="File" class="form-control" id="age" name="attachment"/>

                  </div>

            

            <div class="form-group">

                    <label for="salary" class="control-label">User Name:</label>

                    <input type="text" class="form-control" id="salary" name="username" value=""/>

                  </div>

         <div class="form-group">

                    <label for="salary" class="control-label">Password:</label>

                    <input type="text" class="form-control" id="age" name="pass"/>

                  </div>

				   

				  <div class="form-group">

                    <label for="salary" class="control-label">isPublished</label>

                    <input type="checkbox" id="age" name="active" value="1" checked="checked" />

                  </div>

				  </div>

            <div class="modal-footer">

                <button type="button" class="btn btn-default" data-dismiss="modal" id="closed">Close</button>

                <button type="button" id="btn_add" class="btn btn-primary">Save</button>

            </div>

			<div id="result"></div>

			</form>

        </div>

    

</section>

<?php

$sqlComp=mysql_query("select * from companydetail order by Admin_Id desc");

$rscmp=mysql_fetch_assoc($sqlComp);

$lID=$rscmp['Admin_Id']+1;

$lstID="defgghty".$lID."asdcv";



 ?>













   

              

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

     $("#closed").click(function(){ 

window.location.href="<?php echo $domain;?>/dashboard/companyrecord";

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

            url: "<?php echo $baseurl; ?>/inc/add_comData.php",

            data: data,

            processData: false,

            contentType: false,

            cache: false,

            timeout: 600000,

            success: function (data) {



                $("#result").text(data);

                console.log("SUCCESS : ", data);

				window.location.href="<?php echo $domain;?>/dashboard/companyrecord";

                



            },

            error: function (e) {



                $("#result").text(e.responseText);

                console.log("ERROR : ", e);

                $("#btnSubmit").prop("disabled", false);



            }

        });



    });

    $("#cname").change(function(){

    var link="<?php echo $companyurl;?>";

    var cmpnm=$("#cname").val();

    var id="<?php echo $lstID;?>"; 

    var url=link+"/i/"+id+"/"+cmpnm;

    $("#urlid").val(url);

     

      //alert(url+"helloxx");

    });



});



</script>