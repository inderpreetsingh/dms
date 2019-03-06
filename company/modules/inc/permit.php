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
        Registrations & Permits
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo $domain;?>/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"> Registrations & Permits</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row" style="margin:10px">
			<!--Add Button--->
			 
		<div class="well clearfix table-responsive">
			<div class="pull-right"><button type="button" class="btn btn-xs btn-primary" id="command-add" data-row-id="0" onclick="window.location.href='<?php echo $domain;?>/dashboard/add-permit'">
			<span class="glyphicon glyphicon-plus"></span> Record</button></div>
	  
	  
	  
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Permit Number</th>
				        <th>Permit Issuance Date</th>
                <th>Permit Expiry </th>
                <th>Issued By</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
		
		<?php
    
			$getRows=mysql_query("select * from permitmodule where isDeleted='0' and companyID='".$_SESSION['companyID']."'");
      if(mysql_num_rows($getRows)<='0'){
        echo '<tr><td colspan="4" style="text-align:center;">No Data Found</td></tr>';
      }
				while($rs=mysql_fetch_assoc($getRows)){
          $st=explode('-', $rs['permitissuancedate']);
          $stdt=$st[2]."-".$st[1]."-".$st[0];
					
          $expdt=explode('-', $rs['permitexpiry']);
          $edt=$expdt[2]."-".$expdt[1]."-".$expdt[0];
					echo "<tr>
                <td>".$rs['permitnumber']."</td>
                <td>".$stdt."</td>
                <td>".$edt."</td>
                <td>".$rs['issuedby']."</td>
                
				 <td>";
				 ?>
				 <button type='button' class='btn btn-xs btn-default command-edit' data-row-id='1' onclick="window.location.href='<?php echo $domain;?>/dashboard/updatepermit/<?php echo $rs['p_id'];?>'"><span class='glyphicon glyphicon-edit'></span></button>
				 
				 <?php
				 echo "<a onclick='javascript:confirmationDelete($(this));return false;' href='".$domain."dashboard/permit/delpermit/".$rs['p_id']."&t=dd' class='btn btn-xs btn-default command-delete'><span class='glyphicon glyphicon-trash'></a>
				 
            </tr>";
					
				}
				//echo "<button type='button' class='btn btn-xs btn-default command-delete' data-row-id='1'><span class='glyphicon glyphicon-trash'></span></button></td>
		?>
            
			
            
        </tbody>
        <!-- <tfoot>
            <tr>
				<th>Permit Number</th>
                <th>Permit Issuance Date</th>
                <th>Permit Expiry </th>
                <th>Issued By</th>
                <th>Action</th>
				 				
			   </tr>
        </tfoot> -->
    </table>
	</div>
	</section>
<?php /*
	<div id="add_model" class="modal">
	
<?php include("inc/add_driver.php");?>
</div>
*/?>
<script>
function confirmationDelete(anchor)
{
   var conf = confirm('Are you sure want to delete this record?');
   if(conf)
      window.location=anchor.attr("href");
}

</script>
