<?php include 'include/header.php'; ?>

 <div class="content-wrapper">

    <!-- Content Header (Page header) -->

    <section class="content-header">

      <h1>

       Proforma  List

        <small>Control panel</small>

      </h1>

      <ol class="breadcrumb">

        <li><a href="#"><i class="fa fa-gallery"></i> Home</a></li>

        <li class="active">Proforma List</li>

      </ol>

    </section>



    <!-- Main content -->

    <section class="content">

	 <div class="row"> 

	 <div class="col-md-12"> 

	 <div class="box box-primary"> 

		

			<div class="box-body">

			<form method="post" action="" >

			<div class="col-md-3">

				<div class="form-group">

				  <label for="username">Client Name</label>

				 <input type="search" name="search_name" class="form-control" />

				</div> 

			</div>

			<div class="col-md-3">

				<div class="form-group">

				  <label for="username">Invoice Number</label>

				 <input type="search" name="search_invoice" class="form-control" />
				
				</div> 

			</div>

			<div class="col-md-3">

				<div class="form-group">

				  <label for="username">Order Number</label>

				 <input type="search" name="search_order" class="form-control"/>

				</div> 

			</div>
			

			<div class="col-md-3">

				<div class="form-group">

				 <input type="submit" name="submit" value="Search" class="btn btn-info" style="margin-top:20px;">

				</div>

			</div>	

		</form>
		
		</div>

		</div>

		</div>

		</div>

     <div class="row"> 

	 <div class="col-md-12"> 

	 <div class="box box-primary table-responsive"> 

	<?php

	if(isset($_POST["submit"])) {

  $name = mysqli_real_escape_string($con,$_POST["search_name"]);

  $invoice_number = mysqli_real_escape_string($con,$_POST["search_invoice"]);

  $order_number = mysqli_real_escape_string($con,$_POST["search_order"]);

   $sql="SELECT `id`,`invoice_date`,`cust_name`,`sac`,`order_no`,`invoice_id`,`pax_no`,`total_amount`,`file_number` FROM `proforma_details` WHERE  cust_name like '%".$name."%' && invoice_id like '%".$invoice_number."%' && order_no LIKE '%".$order_number."%'";

  $result1= mysqli_query($con,$sql);

	}else{

	$sql1="SELECT `id`,`invoice_date`,`cust_name`,`sac`,`order_no`,`invoice_id`,`pax_no`,`total_amount`,`file_number` FROM proforma_details  order by id  desc";

	$result1=mysqli_query($con,$sql1);

	}

	echo'<form action="vendor-entry-download.php" method="post">
	
	<table style="border:none;" class="table table-striped table-hover"><thead><tr><th colspan="6" style="border:none;"></th><th style="border:none;">

	</th>

	</tr>
	
	<tr style="background-color:#DF5D58; color:#fff;border:none;">

	<th style="border:none;">#</th>

	<th style="border:none;">Select Box</th>

	<th style="border:none;">Client Name</th>
	
	<th style="border:none;">File Number</th>

	<th style="border:none;">Order No</th>

	<th style="border:none;">Invoice No</th>

	<th style="border:none;"> Date</th>
	
	<th style="border:none;">Unit</th>
	
	<th style="border:none;">taxable value</th>

	<th colspan="3" style="border:none;text-align:center;">Action </th>

	</tr>

	</thead>';

	$count= 0;

 while($row1 = mysqli_fetch_array($result1))
	 
 {

	  ++$count;

	echo '<tbody style="border:none;"><tr style="border:none;">';

	echo '<td style="border:none;">'.$count.'</td>';

	echo '<td style="border:none;"><input type="checkbox" name="ch[]" value="'.$row1['id'].'"></td>';

	echo'<td style="border:none;">' . $row1['cust_name'] .'</td>';
	
	echo'<td style="border:none;">' . $row1['file_number'] .'</td>';

	echo'<td style="border:none;">' . $row1['order_no'] .'</td>';

	echo'<td style="border:none;">' . $row1['invoice_id'] .'</td>';

	echo'<td style="border:none;">' . $row1['invoice_date'] .'</td>';
	
	echo'<td style="border:none;">' . $row1['pax_no'] .'</td>';
	
	echo'<td style="border:none;">' . $row1['total_amount'] .'</td>';
	
	echo '<td style="border:none;">
	

    <button type="button" id="view" name="view"  class="btn btn-warning"  data-toggle="modal" data-target="#myModal" data-self_id="'.$row1['id'].'">View </button>'. "</td>";

	echo '<td style="border:none;">
	<button type="button" id="update_proforma" name="update_proforma"  class="btn btn-danger"  data-toggle="modal" data-target="#myModal" data-self_id="'.$row1['id'].'">Edit</button>'. "</td>";
		
	echo'<td style="border:none;">
	 <button type="button" id="tax" name="tax"  class="btn btn-success"  data-toggle="modal" data-target="#myModal" data-self_id="'.$row1['id'].'" >Create Invoice</button>'."</td>";

	echo '</tr></tbody>';

 }
	echo'</form></table>';

	?>

	</div>

	</div>

	</div>

  </section>

    <!-- /.content -->

 </div>

<div class="modal fade" id="myModal" role="dialog" >

<div class="modal-dialog modal-lg" >

<div class="modal-content" >

</div>

</div>

</div>

<?php

include 'include/footer.php';

?>

<script>

$(document).ready(function(){
	
  var a_url1='ajaxpages/taxinvoice-entry.php';
  var a_response=$(".modal-content");
  
  $("body").on("click","#tax",function(){ 
  var a_request="update_stucture="+$(this).data("self_id");
  fetch_data(a_url1,a_request,a_response);
  });
	
   $("body").on("click","#update_calling",function(){ 
   var a_response1=$("#error-msg");
   var update_from=new FormData($("#form-update-calling")[0])
   var a_request1=update_from;
   insert_data(a_url1,a_request1,a_response1);
  
   });

	var a_url='ajaxpages/view-proforma2.php';

	var a_response=$(".modal-content");

	$("body").on("click","#view",function(){ 

	var a_request="update_stucture="+$(this).data("self_id")+"&update_admin_id="+$(this).data("admin_id");

	fetch_data(a_url,a_request,a_response);

	});
	
	var a_url3='ajaxpages/tax-invoice.php';
	$("body").on("click","#tax_invoice",function(){ 

	var a_request="update_stucture="+$(this).data("self_id")+"&update_admin_id="+$(this).data("admin_id");

	fetch_data(a_url3,a_request,a_response);

	});
	
	
	var a_url2='ajaxpages/update_proforma.php';

	$("body").on("click","#update_proforma",function(){ 

	var a_request="update_stucture="+$(this).data("self_id")+"&update_admin_id="+$(this).data("admin_id");

	fetch_data(a_url2,a_request,a_response);

	});
	
	$("body").on("click","#update_proforma_details",function(){ 
	 var a_response1=$("#error-msg");
	 var update_from=new FormData($("#form-update-proforma")[0])
	 var a_request1=update_from;
	 insert_data(a_url2,a_request1,a_response1);
	
	 });

});

</script>

<script src="dist/js/function.js" ></script>

  