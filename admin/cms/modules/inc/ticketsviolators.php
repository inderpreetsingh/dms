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
        Tickets & Violators 
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo $domain;?>/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"> Tickets & Violators</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row" style="margin:10px">
			<!--Add Button--->
			 
		<div class="well clearfix table-responsive">
			<div class="pull-right"><button type="button" class="btn btn-xs btn-primary" id="command-add" data-row-id="0" onclick="window.location.href='<?php echo $domain;?>/dashboard/add-ticketv'">
			<span class="glyphicon glyphicon-plus"></span> Record</button></div>
	  
	  
	  
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Ticket/Violation Date</th>
				        <th>Driver Name</th>
                <th>Tractor Unit </th>
                <th>Trailer Unit</th>
                 <th>Fine Amount</th>
                  <th>Due Dates</th>
                   <th>Current Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
		
		<?php
    
			$getRows=mysql_query("select * from tickets where isPublished='1' and isDeleted='0'");
      if(mysql_num_rows($getRows)<='0'){
        echo '<tr><td colspan="4" style="text-align:center;">No Data Found</td></tr>';
      }
				while($rs=mysql_fetch_assoc($getRows)){
          $st=explode('-', $rs['ticketdate']);
          $stdt=$st[2]."-".$st[1]."-".$st[0];
					
          $getdr=mysql_query("select * from driverdetails where DriverId='".$rs['DriverName']."'");
          $rsdr=mysql_fetch_assoc($getdr);
          //$expdt=explode('-', $rs['permitexpiry']);
          //$edt=$expdt[2]."-".$expdt[1]."-".$expdt[0];
					echo "<tr>
          <td>".$stdt."</td>
          <td>".$rsdr['DriverFName']."  ". $rsdr['DriverLName']."</td>
                <td>".$rs['TractorUnit']."</td>
                <td>".$rs['TrailerUnit']."</td>
                <td>".$rs['FineAmount']."</td>
                <td>".$rs['DueDates']."</td>
                <td>".$rs['CurrentStatus']."</td>
				 <td>";
				 ?>
				 <button type='button' class='btn btn-xs btn-default command-edit' data-row-id='1' onclick="window.location.href='<?php echo $domain;?>/dashboard/updateticketv/<?php echo $rs['Ticket_id'];?>'"><span class='glyphicon glyphicon-edit'></span></button>
				 
				 <?php
				 echo "<a onclick='javascript:confirmationDelete($(this));return false;' href='".$domain."dashboard/permit/delpermit/".$rs['p_id']."&t=dd' class='btn btn-xs btn-default command-delete'><span class='glyphicon glyphicon-trash'></a>
				 
            </tr>";
					
				}
				//echo "<button type='button' class='btn btn-xs btn-default command-delete' data-row-id='1'><span class='glyphicon glyphicon-trash'></span></button></td>
		?>
            
			
            
        </tbody>
        <!-- <tfoot>
            <tr>
				 <th>Ticket/Violation Date</th>
                <th>Driver Name</th>
                <th>Tractor Unit </th>
                <th>Trailer Unit</th>
                 <th>Fine Amount</th>
                  <th>Due Dates</th>
                   <th>Current Status</th>
                <th>Action</th>
				 				
			   </tr>
        </tfoot> -->
    </table>
	</div>
	</section>
<?php /*
	<div id="add_model" class="modal">
	
<?php include("inc/add_driver.php");?>
</div> */?>
<script>
function confirmationDelete(anchor)
{
   var conf = confirm('Are you sure want to delete this record?');
   if(conf)
      window.location=anchor.attr("href");
}

</script>
