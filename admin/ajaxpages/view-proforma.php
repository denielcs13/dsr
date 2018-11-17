<?php include '../include/database.php';
 if(isset($_POST["update_stucture"])){
$admin_id=$_POST["update_admin_id"];
$id=$_POST["update_stucture"];	
 $sql=  "select * from `proforma_details` where id='".$id."'";	
$result=mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
$customer_name=$row['cust_name'];
$order_no=$row['order_no'];
$invoice_no=$row['invoice_id'];
$sac_no=$row['sac'];
$qty=$row['pax_no'];
$amount=$row['total_amount'];
$gst_value=$row['gst_value'];
$total_value=$qty*$amount;
$tax_value=(($gst_value*$total_value)/100);
$total_tax_value=$total_value+$tax_value;
$round_value=round($total_tax_value);
$date=$row['date'];
}
$html = '<div class="modal-header" >
View Proforma
</div>

<div class="modal-body" >';
	$html .= '<div id="error-msg"></div><form method="post"  id="form-update-calling">
			<div class="box-body">
		<div class="col-md-12">
				<div class="form-group">
				  <label for="username">Customer Name And Address</label>
				 <input type="text" name="cust_name" class="form-control" value='.$customer_name.'  required/>
				</div> 
		</div>';
	$html .='<div class="col-md-6">
				<div class="form-group">
				  <label for="username">Order No.</label>
				 <input type="text" name="order_no" id="order_no" class="form-control" value='.$order_no.' required/>
				</div><div></div> 
				</div>';
 
     $html .='<div class="col-md-6">
				<div class="form-group">
				  <label for="username">Invoice No.</label>
				 <input type="text" name="invoice_no" id="invoice_no" class="form-control" value='.$invoice_no.' required/>
				</div> 
				</div>';
	
	 $html .='<div class="col-md-6">
				<div class="form-group">
				  <label for="username"> Date.</label>
				 <input type="text" name="invoice_date" id="invoice_date" class="form-control" value='.$date.' required/>
				</div> 
				</div>';
				
	 $html .='<div class="col-md-6">
				<div class="form-group">
				  <label for="username">Invoice Date.</label>
				 <input type="text" name="invoice_date" id="invoice_date" class="form-control" value='.$date.' required/>
				</div> 
				</div>';
	
	 $html .='<div class="col-md-2">
				<div class="form-group">
				  <label for="username">Sac No.</label>
				 <input type="text" name="sac_no" id="sac_no" class="form-control" value='.$sac_no.' required/>
				</div> 
				</div>';
	  $html .='<div class="col-md-4">
				<div class="form-group">
				  <label for="username">Description.</label>
				 <input type="text" name="des" id="des" class="form-control" value="PER PERSON RS."'.$amount.' required/>
				</div> 
				</div>';
				
	  $html .='<div class="col-md-2">
				<div class="form-group">
				  <label for="username">Qty.</label>
				 <input type="text" name="qty" id="qty" class="form-control" value='.$qty.' required/>
				</div> 
				</div>';
		
	   $html .='<div class="col-md-2">
				<div class="form-group">
				  <label for="username">Rate.</label>
				 <input type="text" name="rate" id="rate" class="form-control" value='.$amount.' required/>
				</div> 
				</div>';
		
	   $html .='<div class="col-md-2">
				<div class="form-group">
				  <label for="username">Taxable Value.</label>
				 <input type="text" name="total_value" id="total_value" class="form-control" value='.$total_value.' required/>
				</div> 
				</div>';
				
	   $html .='<div class="col-md-8">
				<div class="form-group">
				  
				</div> 
				</div>';
		
	     $html .='<div class="col-md-2">
				<div class="form-group">
				  <label for="username">GST.</label>
				 <input type="number" name="gst_value" id="gst_value" class="form-control" value='.$gst_value.' readonly required/>
				</div> 
				</div>';	
         $html .='<div class="col-md-2">
				<div class="form-group">
				  <label for="username">Total Tax. Value.</label>
				 <input type="number" name="total_tax_value" id="total_tax_value" class="form-control" value='.$round_value.' readonly required/>
				</div> 
				</div>';	
 
$html .= '</div></div></form>';
			
echo $html;
echo"<div class='modal-footer'><button class='btn btn-info' type='button' data-dismiss='modal'>Close</button></div>";

 if(isset($_POST["sac_number"])){
	$sac_number=$_POST['sac_number'];
	$order_no=$_POST['order_no'];
	$invoice_id=$_POST['invoice_id'];
	$cust_name=$_POST['cust_name'];
	$pax_number=$_POST['pax_number'];
	$total_amount=$_POST['total_amount'];
	$file_number=$_POST['file_number'];
	$proforma_date=date('Y-m-d',strtotime($_POST['date']));
	$insert="insert  into proforma_details(`sac`,`date`,`order_no`,`invoice_id`,`cust_name`,`pax_no`,`total_amount`,`file_number`) values('$sac_number','$proforma_date','$order_no','$invoice_id','$cust_name','$pax_number','$total_amount','$file_number')";
	$ins=mysqli_query($con,$insert);
		if (!empty($ins)){
	echo '<div class="alert alert-success">Your File Is Successfully Added </div>';
	 
	  }else {
		 echo '<div class="alert alert-danger">proforma  not created Successfully</div>';
	  }
	}

?>

 