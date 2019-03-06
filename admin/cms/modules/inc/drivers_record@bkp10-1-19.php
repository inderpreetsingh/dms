<script >
$(document).ready(function() {
	  // $('#example').DataTable();
           
           $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'

        ]

    } ); 
           

			
});		
			
</script>			
 <section class="content-header">
      <h1>
        Drivers Record
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo $domain;?>/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"> Drivers Record</li>
      </ol>
    </section>
<?php

$typeg=$_GET['link'];
$id=$_GET['id'];
if($typeg=='deldriverrecord'){
	$sqlup=mysql_query("update driverdetails set STATUS='0',isPublished='0',isDeleted='1' where DriverId='".$id."'");
	if($sqlup){
		
		
		echo "<script type='text/javascript'>alert('Deleted successfully!');
                  window.location.href='".$domain."/dashboard/driversrecord';
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
			<div class="pull-right"><button type="button" class="btn btn-xs btn-primary" id="command-add" data-row-id="0" onclick="window.location.href='<?php echo $domain;?>/dashboard/adddriverrecord'">
			<span class="glyphicon glyphicon-plus"></span> Record</button></div>
	  
	  
	  
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
            	<th>Company Name</th>
                <th>Driver Name</th>
				<th>Contact Details</th>
                <th>Location</th>
                <th>Age</th>
                <th>Licence No</th>
                <th>Driver License Province:</th>
                <th>Joining Date</th>
				 <th>Action</th>
            </tr>
        </thead>
        <tbody>
		
		<?php
			$getRows=mysql_query("select * from driverdetails where isDeleted='0'");
			 if(mysql_num_rows($getRows)<='0'){
                              echo '<tr><td colspan="11" style="text-align:center;">No Data Found</td></tr>';

                                }
				while($rs=mysql_fetch_assoc($getRows)){
					$sqlcompany=mysql_query("select * from companydetail where Admin_Id='".$rs['DriverId']."'");
					$rscom=mysql_fetch_assoc($sqlcompany);
					echo "<tr>
					<td>".$rscom['companyName']."</td>
                <td>".$rs['DriverFName']."&nbsp;".$rs['DriverLName']."</td>
                <td>".$rs['DriverEmail']."<br>PH: &nbsp;". $rs['DriverCont']."</td>
                <td>".$rs['DriverCountry'].'&nbsp; , &nbsp;'.$rs['DriverCity']."</td>
                <td>".$rs['DriverAge']."</td>
                <td>".$rs['DriverLicence']."</td>
                <td>".$rs['DriverLicenceProv']."</td>
				 <td>".$rs['JoinDate']."</td>
				 <td>";
				 ?>
				 <button type='button' class='btn btn-xs btn-default command-edit' data-row-id='1' onclick="window.location.href='<?php echo $domain;?>/dashboard/updatedriverrecord/<?php echo $rs['DriverId'];?>'"><span class='glyphicon glyphicon-edit'></span></button>
				 
				 <?php
				 echo "<a onclick='javascript:confirmationDelete($(this));return false;' href=' ".$domain."/dashboard/driversrecord/deldriverrecord/".$rs['DriverId']."' class='btn btn-xs btn-default command-delete'><span class='glyphicon glyphicon-trash'></a>
				 
            </tr>";
					
				}
				//echo "<button type='button' class='btn btn-xs btn-default command-delete' data-row-id='1'><span class='glyphicon glyphicon-trash'></span></button></td>
		?>
            
			
            
        </tbody>
        <!-- <tfoot>
            <tr>
				<th>Driver Name</th>
				<th>Contact Details</th>
                <th>Location</th>
                <th>Age</th>
                <th>Licence No</th>
                <th>Expiry Date</th>
                <th>Joining Date</th>  
				<th>Action</th>     				
			   </tr>
        </tfoot> -->
    </table>
	</div>
	</section>
<?php /*
	<div id="add_model" class="modal">
	
<?php include("inc/add_driver.php");?>
</div>*/?>
<script>
function confirmationDelete(anchor)
{
   var conf = confirm('Are you sure want to delete this record?');
   if(conf)
      window.location=anchor.attr("href");
}

</script>
