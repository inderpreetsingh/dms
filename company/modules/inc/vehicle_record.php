<script >
$(document).ready(function() {
	//$('#example').DataTable();
           $('#example').excelTableFilter();
            $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    } );  
$( "#command-add" ).click(function() {
		//$('#add_model').modal('show'); 
			  //$('#add_model').modal();
			});
			
});		
			
</script>			
 <section class="content-header">
      <h1>
        Vehicle Record
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo $domain;?>/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"> Vehicles Record</li>
      </ol>
    </section>

<?php

$typeg=$_GET['link'];
$id=$_GET['id'];
if($typeg=='delvrecord'){
	$sqlup=mysql_query("update vehicledetails set Active='0',isPublished='0',isDeleted='1' where VehID='".$id."'");
	if($sqlup){
		
		
		echo "<script type='text/javascript'>alert('Deleted successfully!');
                  window.location.href='".$domain."/dashboard/vehiclerecord';
                   </script>";
		
		
		
		
	}
	
}

?>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row" style="margin:10px">
			<!--Add Button--->
			 
		<div class="well clearfix table-responsive">
			<div class="pull-right"><button type="button" class="btn btn-xs btn-primary" id="command-add" data-row-id="0" onclick="window.location.href='<?php echo $domain;?>/dashboard/addvehiclerecord'">
			<span class="glyphicon glyphicon-plus"></span> Record</button></div>
	  
	  
	  
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Unit Number</th>
				<th>Start Date</th>
                <th>Year</th>
                <th>Make</th>
                <th>Modal</th>
                <th>Color</th>
                <th>VIN</th>
				<th>Owner Name</th>
				<th>Leased By</th>
				 <th>Action</th>
            </tr>
        </thead>
        <tbody>
		
		<?php
			$getRows=mysql_query("select * from vehicledetails where isDeleted='0' and companyId='".$_SESSION['companyID']."'");
                           if(mysql_num_rows($getRows)<='0'){
                              echo '<tr><td colspan="11" style="text-align:center;">No Data Found</td></tr>';

                                }
				while($rs=mysql_fetch_assoc($getRows)){
					$rgetUser=mysql_fetch_assoc(mysql_query("select * from driverdetails where DriverId='".$rs['DriverId']."'and  status='1'"));
					$assDate=explode(',',$rs['assignDate']);
					if($rs['traingDate']!=''){
						$td=$rs['traingDate'];
					}else{ $td= 'NA';}
					if($rs['traingExp']!=''){
						$tdp=$rs['traingExp'];
					}else{ $tdp= 'NA';}
					echo "<tr>
                <td>".$rs['UnitNumber']."</td>
                <td>".$rs['StartDate']."</td>
                <td>".$rs['Year']."</td>
                <td>".$rs['VehMake']."</td>
				<td>".$rs['Modal']."</td>
                <td>".$rs['Color']."</td>
                <td>".$rs['VIN']."</td>
				  <td>".$rs['OwnerName']."</td>
				  <td>".$rs['Leasedby']."</td>
				  
				 <td>";?>
				 <button type='button' class='btn btn-xs btn-default command-edit' data-row-id='1' onclick="window.location.href='<?php echo $domain;?>/dashboard/upvehiclerecord/<?php echo $rs['VehID'];?>'"><span class='glyphicon glyphicon-edit'></span></button>
				 
				 
				 
				 <?php 
				 
				 echo "<a onclick='javascript:confirmationDelete($(this));return false;' href='".$domain."/dashboard/vehiclerecord/delvrecord/".$rs['VehID']."' class='btn btn-xs btn-default command-delete'><span class='glyphicon glyphicon-trash'></a>
				 
				 
            </tr>";
					
				}
				//echo "<button type='button' class='btn btn-xs btn-default command-delete' data-row-id='1'><span class='glyphicon glyphicon-trash'></span></button></td>
		?>
            
			
            
        </tbody>
        <!-- <tfoot>
            <tr>
				 <th>Unit Number</th>
				<th>Start Date</th>
                <th>Year</th>
                <th>Make</th>
                <th>Modal</th>
                <th>Color</th>
                <th>VIN</th>
				<th>Owner Name</th>
				<th>Leased By</th>
				 <th>Action</th>				
			   </tr>
        </tfoot> -->
    </table>
	</div>
	</section>
<?php /*	<div id="add_model" class="modal">
	
<?php include("inc/add_driver.php");?>
</div>*/ ?>

