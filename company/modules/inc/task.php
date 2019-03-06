<script >
$(document).ready(function() {
	$('#example').DataTable();

			
});		
			
</script>			
 <section class="content-header">
      <h1>
       Task List
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo $domain;?>/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Task List</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row" style="margin:10px">
			<!--Add Button--->
			 
		<div class="well clearfix">
			<div class="pull-right"><button type="button" class="btn btn-xs btn-primary" id="command-add" data-row-id="0" onclick="window.location.href='<?php echo $domain;?>/dashboard/addtaskrecord'">
			<span class="glyphicon glyphicon-plus"></span> Record</button></div>
	  
	  
	  
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Driver Name</th>
				<th>Contact Details</th>
                <th>Vehicle</th>
                <th>Assign Location</th>
                <th>Assign Date</th>
                <th>Time</th>
                
				 <th>Action</th>
            </tr>
        </thead>
        <tbody>
		
		<?php
		$gtask=mysql_query("select * from taskList where active='1'");
			
				while($rs=mysql_fetch_assoc($gtask)){
				$rgetRows=mysql_fetch_assoc(mysql_query("select * from driverdetails where DriverId='".$rs['driverId']."' and  status='1'"));
			$rgetssRows=mysql_fetch_assoc(mysql_query("select * from vehicledetails where VehID='".$rs['vehID']."' and  Active='1'"));					
					echo "<tr>
                <td>".$rgetRows['DriverFName']."&nbsp;".$rgetRows['DriverLName']."</td>
                <td>".$rgetRows['DriverEmail']."<br>PH: &nbsp;". $rgetRows['DriverCont']."</td>
                <td>".$rgetssRows['VehName']."</td>
                <td>".$rs['location']."</td>
                <td>".$rs['assiDate']."</td>
                <td>".$rs['time']."</td>
				 
				 <td>";
				 ?>
				 <button type='button' class='btn btn-xs btn-default command-edit' data-row-id='1' onclick="window.location.href='<?php echo $domain;?>/dashboard/updatetask/<?php echo $rs['tId'];?>'"><span class='glyphicon glyphicon-edit'></span></button>
				 
				 <?php
				 echo "<a onclick='javascript:confirmationDelete($(this));return false;' href='".$domain."/dashboard/taskrecord/deltask/".$rs['tId']."' class='btn btn-xs btn-default command-delete'><span class='glyphicon glyphicon-trash'></a>
				 
            </tr>";
					
				}
				//echo "<button type='button' class='btn btn-xs btn-default command-delete' data-row-id='1'><span class='glyphicon glyphicon-trash'></span></button></td>
		?>
            
			
            
        </tbody>
        <tfoot>
            <tr>
				 <th>Driver Name</th>
				<th>Contact Details</th>
                <th>Vehicle</th>
                <th>Assign Location</th>
                <th>Assign Date</th>
                <th>Time</th>
                
				 <th>Action</th>   				
			   </tr>
        </tfoot>
    </table>
	</div>
	</section>
	<div id="add_model" class="modal">
	
<?php include("inc/add_driver.php");?>
</div>
<script>
function confirmationDelete(anchor)
{
   var conf = confirm('Are you sure want to delete this record?');
   if(conf)
      window.location=anchor.attr("href");
}

</script>
