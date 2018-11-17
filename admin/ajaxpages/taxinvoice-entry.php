<?php include '../include/database.php';
 if(isset($_POST["update_stucture"])){
$id=$_POST["update_stucture"];	
$output = '';
$sql=  "select *  from `proforma_details` where id='".$id."'";	
$result=mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
$order_no=$row['order_no'];
$invoice_no=$row['invoice_id'];
$cust_name=$row['cust_name'];
$pax_no=$row['pax_no'];
$total_amount=$row['total_amount'];
$file_number=$row['file_number'];
$admin_id=$row['admin_id'];
$destination=$row['destination'];
$sac_number=$row['sac'];
$gst_value=$row['gst_value'];
$cgst_value=$row['cgst_value'];
$sgst_value=$row['sgst_value'];
$html = '<div class="modal-header" >
Create Tax Invoice
</div>

<div class="modal-body" >';
	$html .= '<div id="error-msg"></div><form method="post"  id="form-update-calling">
			<div class="box-body">	
		<div class="col-md-4">
				<div class="form-group">
				  <label for="username">GSTIN.</label>
				 <input type="text" name="gst_number" class="form-control"  required/>
				</div> 
		</div>';
		
    $html .='<div class="col-md-4">
				<div class="form-group">
				  <label for="username">PAN NO:</label>
				 <input type="text" name="pan_number" id="pan_number" class="form-control"  required/>
				</div> 
				</div>';
 
	$html .='<div class="col-md-4">
				<div class="form-group">
				<input type="hidden" name="order_no" id="order_no" class="form-control" value='.$order_no.'>
				<input type="hidden" name="invoice_no" id="invoice_id" class="form-control" value='.$invoice_no.'>
				<input type="hidden" name="sac_number" id="sac_number" class="form-control" value='.$sac_number.'>
				<input type="hidden" name="gst_value" id="gst_value" class="form-control" value='.$gst_value.'>
				<input type="hidden" name="cgst_value" id="gst_value" class="form-control" value='.$cgst_value.'>
				<input type="hidden" name="sgst_value" id="gst_value" class="form-control" value='.$sgst_value.'>
				<input type="hidden" name="cust_name" id="cust_name" class="form-control" value="'.$cust_name.'">
				<input type="hidden" name="pax_number" id="pax_no" class="form-control" value='.$pax_no.'>
				<input type="hidden" name="total_amount" id="total_amount" class="form-control" value='.$total_amount.'>
				<input type="hidden" name="file_number" id="file_number" class="form-control" value='.$file_number.'>
				<input type="hidden" name="admin_id" id="admin_id" class="form-control" value='.$admin_id.'>
				<input type="hidden" name="destination" id="destination" class="form-control" value='.$destination.'>
				<button href="#" type="button"  name="update_calling" id="update_calling" class="btn btn-success" 
				style="margin-top:20px;">Create TaxInvoice</button>
				</div>
			</div>';
$html .= '</div></div></form>';
			
echo $html;
echo"<div class='modal-footer'><button class='btn btn-info' type='button' data-dismiss='modal'>Close</button></div>";
}
 if(isset($_POST["pan_number"]) && ($_POST["gst_number"])){
	$pan_number=$_POST['pan_number'];
	$gst_number=$_POST['gst_number'];
	$sac_number=$_POST['sac_number'];
	$gst_value=$_POST['gst_value'];
	$cgst_value=$_POST['cgst_value'];
	$sgst_value=$_POST['sgst_value'];
	$order_no=$_POST['order_no'];
	$invoice_number=$_POST['invoice_no'];
	$cust_name=$_POST['cust_name'];
	$pax_number=$_POST['pax_number'];
	$total_amount=$_POST['total_amount'];
	$file_number=$_POST['file_number'];
	$admin_id=$_POST['admin_id'];
	$proforma_date=date('Y-m-d');
	$destination=$_POST['destination'];
	$insert="insert  into tax_invoice(`sac`,`invoice_date`,`order_no`,`invoice_id`,`cust_name`,`pax_no`,`total_amount`,`file_number`,`gst_value`,`cgst_value`,`sgst_value`,`admin_id`,`destination`,`gst_no`,`pan_no`) values('$sac_number','$proforma_date','$order_no','$invoice_number','$cust_name','$pax_number','$total_amount','$file_number','$gst_value','$cgst_value','$sgst_value','$admin_id','$destination','$gst_number','$pan_number')";	
	$ins=mysqli_query($con,$insert);
		if (!empty($ins)){
	echo '<div class="alert alert-success">Invoice created Successfully. </div>';
	 
	  }else {
		 echo '<div class="alert alert-danger">Invoice not created Successfully</div>';
	  }
	}

?>

 