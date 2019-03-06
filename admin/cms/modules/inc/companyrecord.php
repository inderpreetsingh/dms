<script >
$(document).ready(function() {
      // $('#example').DataTable();
         //$('#example').excelTableFilter();  
           $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
        {
          extend:'excelHtml5',
          exportOptions: {
                    columns: ':visible'
                }
              },
            'colvis'//'copyHtml5','excelHtml5','csvHtml5','pdfHtml5'
            ]
    } ); 
});	
			
</script>			
 <section class="content-header">
      <h1>
        Company Record
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo $domain;?>/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"> Company Record</li>
      </ol>
    </section>
    <?php

$typeg=$_GET['link'];
$id=$_GET['id'];
if($typeg=='deluserrecord'){
	$sqlup=mysql_query("update companydetail set STATUS='0',isPublished='0',isDeleted='1'  where Admin_Id='".$id."'");
	if($sqlup){
		
		
		echo "<script type='text/javascript'>alert('Deleted successfully!');
                  window.location.href='".$domain."/dashboard/companyrecord';
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
			<div class="pull-right"><button type="button" class="btn btn-xs btn-primary" id="command-add" data-row-id="0" onclick="window.location.href='<?php echo $domain;?>/dashboard/addcompany'">
			<span class="glyphicon glyphicon-plus"></span> Record</button></div>
	  
	  
	  
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Company Name</th>
                 <th>Owner Name</th>
				<th>Contact Details</th>
				<th>Email</th>
                <th>Company Url</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
		
		<?php
			$getRows=mysql_query("select * from companydetail where isPublished='1' and isDeleted='0'");
			if(mysql_num_rows($getRows)<=0){
				echo '<tr><td colspan="5" style="text-align:center;">No Data Found</td></tr>';
			}
				while($rs=mysql_fetch_assoc($getRows)){
					if($rs['Status']=='1'){
						 $st='Active';
					}
					else{
						$st='Not Active';
					}
					echo "<tr>
					<td>".$rs['companyName']."</td>
                <td>".$rs['ownername']."</td>
                <td>".$rs['Admin_cont']."</td>
                 <td>".$rs['companyEmail']."</td>
				<td>".$rs['companyurl']."</td>
                 <td>";
				 ?>
				 <button type='button' class='btn btn-xs btn-default command-edit' data-row-id='1' onclick="window.location.href='<?php echo $domain;?>/dashboard/updatecompanydata/<?php echo $rs['Admin_Id'];?>'"><span class='glyphicon glyphicon-edit'></span></button>
				 
				 <?php
				 echo "<a onclick='javascript:confirmationDelete($(this));return false;' href='".$domain."/dashboard/companyrecord/deluserrecord/".$rs['Admin_Id']."' class='btn btn-xs btn-default command-delete'><span class='glyphicon glyphicon-trash'></a>
				 
            </tr>";
					
				}
				//echo "<button type='button' class='btn btn-xs btn-default command-delete' data-row-id='1'><span class='glyphicon glyphicon-trash'></span></button></td>
		?>
            
			
            
        </tbody>
        <!-- <tfoot>
            <tr>
				 <th>Company Name</th>
				  <th>Owner Name</th>
				<th>Contact Details</th>
				<th>Email</th>
                <th>Company Url</th>
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
