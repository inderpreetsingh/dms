    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Add Drivers Detail</h4>
            </div>
            <div class="modal-body">
                <form method="post" id="frm_add" enctype="multipart/">
				<input type="hidden" value="add" name="action" id="action">
                  <div class="form-group">
                    <label for="name" class="control-label">Name:</label>
                    <input type="text" class="form-control" id="name" name="name"/>
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
                    <input type="text" class="form-control" id="age" name="age"/>
                  </div>
				  <div class="form-group">
                    <label for="salary" class="control-label">Contact No:</label>
                    <input type="text" class="form-control" id="age" name="contno"/>
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
                    <label for="salary" class="control-label">Location:</label>
                    <input type="text" class="form-control" id="age" name="country" Placeholder="Country"/>&nbsp;
					<input type="text" class="form-control" id="age" name="state" Placeholder="State"/>&nbsp;
					<input type="text" class="form-control" id="age" name="city" Placeholder="City"/>
                  </div>
				  <div class="form-group">
                    <label for="salary" class="control-label">Licence NO:</label>
                    <input type="text" class="form-control" id="age" name="dLic"/>
                  </div>
                <div class="form-group">
                    <label for="salary" class="control-label">Licence Expiry Date:</label>
                    <input type="text" class="form-control" id="age" name="licExpdate"/>
                  </div>
				  <div class="form-group">
                    <label for="salary" class="control-label">Documents Upload:</label>
                    <input type="File" class="form-control" id="age" name="attachment"/>
                  </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" id="btn_add" class="btn btn-primary">Save</button>
            </div>
			<div id="result">HIHIHIIHIIPPP</div>
			</form>
        </div>
    </div>
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
            url: "inc/add_data.php",
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            timeout: 600000,
            success: function (data) {

                $("#result").text(data);
                console.log("SUCCESS : ", data);
                

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