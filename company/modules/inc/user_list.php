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

			
});		
			
</script>			
 <section class="content-header">
      <h1>
        Users Record
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo $domain;?>/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"> Users Record</li>
      </ol>
    </section>
    <?php

$typeg=$_GET['link'];
$id=$_GET['id'];
if($typeg=='deluserrecord'){
	$sqlup=mysql_query("update admin set STATUS='0' where Admin_Id='".$id."'");
	if($sqlup){
		
		
		echo "<script type='text/javascript'>alert('Deleted successfully!');
                  window.location.href='".$domain."/dashboard/userrecord';
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
			<div class="pull-right"><button type="button" class="btn btn-xs btn-primary" id="command-add" data-row-id="0" onclick="window.location.href='<?php echo $domain;?>/dashboard/adduserrecord'">
			<span class="glyphicon glyphicon-plus"></span> Record</button></div>
	  
	  
	  
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>User Name</th>
				<th>Contact Details</th>
                <th>Position</th>
                <th>Status</th>
               	 <th>Action</th>
            </tr>
        </thead>
        <tbody>
		
		<?php
			$getRows=mysql_query("select * from admin where Status='1'");
				while($rs=mysql_fetch_assoc($getRows)){
					if($rs['Status']=='1'){
						 $st='Active';
					}
					else{
						$st='Not Active';
					}
					echo "<tr>
                <td>".$rs['Admin_Name']."</td>
                <td>".$rs['Admin_cont']."</td>
				<td>".$rs['Admin_Position']."</td>
                <td>".$st."</td>
                <td>";
				 ?>
				 <button type='button' class='btn btn-xs btn-default command-edit' data-row-id='1' onclick="window.location.href='<?php echo $domain;?>/dashboard/updateuser/<?php echo $rs['Admin_Id'];?>'"><span class='glyphicon glyphicon-edit'></span></button>
				 
				 <?php
				 echo "<a onclick='javascript:confirmationDelete($(this));return false;' href='".$domain."/dashboard/userrecord/deluserrecord/".$rs['Admin_Id']."' class='btn btn-xs btn-default command-delete'><span class='glyphicon glyphicon-trash'></a>
				 
            </tr>";
					
				}
				//echo "<button type='button' class='btn btn-xs btn-default command-delete' data-row-id='1'><span class='glyphicon glyphicon-trash'></span></button></td>
		?>
            
			
            
       </tbody>
         <!-- <tfoot>
            <tr>
				 <th>User Name</th>
				<th>Contact Details</th>
                <th>Position</th>
                <th>Status</th>
               	 <th>Action</th>    				
			   </tr>
        </tfoot> -->
    </table>
	</div>
	</section>
	
<script>
function confirmationDelete(anchor)
{
   var conf = confirm('Are you sure want to delete this record?');
   if(conf)
      window.location=anchor.attr("href");
}

</script>
