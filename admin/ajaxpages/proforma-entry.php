<?php include '../include/database.php';
 if(isset($_POST["update_stucture"])){
$admin_id=$_POST["update_admin_id"];
$id=$_POST["update_stucture"];	
$file_id=$_POST['update_file_id'];
$online_stat=$_POST['online_status'];
$output = '';
$sql=  "select `id`,`cust_name`,`mobile`,`agent_tag_id`,`city`,`packages_city` from `float_query` where file_number='".$file_id."'";	
$result=mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
$city=$row['city'];$pac_city=$row['packages_city'];$cust_name=$row['cust_name'];$agent_id=$row['agent_tag_id'];
$city2 = substr($city, 0, 3);$pack_city=substr($pac_city,0,3);
//$order_no=$city2.'/'.$pack_city.'/'.$id;
$order_no=$file_id;
$invoice_id='000'.$id;
$destination=$row['packages_city'];
if($result){
$sql2=  "select `id`,`cpp_dbl`,`file_id`,`admin_id` from `online_dsr_rest` where file_id='".$file_id."' && online_dsr_status='".$online_stat."'";	
$result2=mysqli_query($con,$sql2);
$row2 = mysqli_fetch_array($result2);
$admin_id=$row2['admin_id'];
$file_number=$row2['file_id'];
$total_amount=$row2['cpp_dbl'];
}
if($result2){
	$sql3="select `address` from calling_entry where tag_id='".$agent_id."'";
	$result3=mysqli_query($con,$sql3);
	$row3=mysqli_fetch_array($result3);
	$address=$row3['address'];
}
if($result2){
	$sql4="select `total_pax` from float_query where file_number='".$file_id."'";
	$result4=mysqli_query($con,$sql4);
	$row4=mysqli_fetch_array($result4);
	$pax_no=$row4['total_pax'];
	
}
$html = '<div class="modal-header" >
Create proforma
</div>

<div class="modal-body" >';
	$html .= '<div id="error-msg"></div><form method="post"  id="form-update-calling">
			<div class="box-body">	
		<div class="col-md-4">
				<div class="form-group">
				  <label for="username">SAC NO.</label>
				 <input type="text" name="sac_number" class="form-control" required />
				</div> 
		</div>';
		
    $html .='<div class="col-md-4">
				<div class="form-group">
				  <label for="username">IGST Value</label>
				 <input type="text" name="gst_value" id="gst_value" class="form-control" required  />
				</div> 
				</div>';

	$html .='<div class="col-md-4">
				<div class="form-group">
				  <label for="username">CGST Value</label>
				 <input type="text" name="cgst_value" id="cgst_value" class="form-control"   />
				</div> 
				</div>';
				
 	$html .='<div class="col-md-4">
				<div class="form-group">
				  <label for="username">SGST Value</label>
				 <input type="text" name="sgst_value" id="sgst_value" class="form-control"   />
				</div> 
				</div>';

	$html .='<div class="col-md-4">
				<div class="form-group">
				<input type="hidden" name="order_no" id="order_no" class="form-control" value='.$order_no.'>
				<input type="hidden" name="invoice_id" id="invoice_id" class="form-control" value='.$invoice_id.'>
				<input type="hidden" name="cust_name" id="cust_name" class="form-control" value="'.$cust_name.'">
				<input type="hidden" name="pax_number" id="pax_no" class="form-control" value='.$pax_no.'>
				<input type="hidden" name="total_amount" id="total_amount" class="form-control" value='.$total_amount.'>
				<input type="hidden" name="file_number" id="file_number" class="form-control" value='.$file_number.'>
				<input type="hidden" name="admin_id" id="admin_id" class="form-control" value='.$admin_id.'>
				<input type="hidden" name="destination" id="destination" class="form-control" value='.$destination.'>
				<input type="hidden" name="address" id="address" class="form-control" value="'.$row3['address'].'">
				<button href="#" type="button"  name="update_calling" id="update_calling" class="btn btn-success" 
				style="margin-top:20px;">Create proforma</button>
				</div>
			</div>';
$html.= '</div></div></form>';
			
echo $html;
echo"<div class='modal-footer'><button class='btn btn-info' type='button' data-dismiss='modal'>Close</button></div>";
}


 if((isset($_POST["sac_number"])) && (($_POST["gst_value"]) || ($_POST["cgst_value"]) || ($_POST['sgst_value']))){
	$sac_number=$_POST['sac_number'];
	$address=$_POST['address'];
	$gst_value=$_POST['gst_value'];
	$cgst_value=$_POST['cgst_value'];
	$sgst_value=$_POST['sgst_value'];
	$order_no=$_POST['order_no'];
	$invoice_id=$_POST['invoice_id'];
	$cust_name=$_POST['cust_name'];
	$pax_number=$_POST['pax_number'];
	$total_amount=$_POST['total_amount'];
	$file_number=$_POST['file_number'];
	$admin_id=$_POST['admin_id'];
	$proforma_date=date('Y-m-d');
	$destination=$_POST['destination'];
	$insert="insert  into `proforma_details`(`sac`,`invoice_date`,`order_no`,`invoice_id`,`cust_name`,`pax_no`,`total_amount`,`file_number`,`gst_value`,`cgst_value`,`sgst_value`,`admin_id`,`destination`,`address`) values('$sac_number','$proforma_date','$order_no','$invoice_id','$cust_name','$pax_number','$total_amount','$file_number','$gst_value','$cgst_value','$sgst_value','$admin_id','$destination','$address')";	
	$ins=mysqli_query($con,$insert);
		if (!empty($ins)){
	echo '<div class="alert alert-success">proforma created Successfully. </div>';
	 
	  }else {
		 echo '<div class="alert alert-danger">proforma  not created Successfully</div>';
	  }
	}

?>

 