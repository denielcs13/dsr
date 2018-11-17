<?php include '../include/database.php';

 if(isset($_POST["update_stucture"])){
$id=$_POST["update_stucture"];	
$output = '';
$sql=  "select `id`,`invoice_date`,`sac`,`order_no`,`gst_no`,`pan_no`,`invoice_id`,`cust_name`,`gst_value`,`total_amount`,`file_number` from `tax_invoice` where id='".$id."'";	
$result=mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
$pan_number=$row['pan_no'];
$gst_number=$row['gst_no'];
$html = '<div class="modal-header" >
 Update Invoice Details
</div>
<div class="modal-body" >';
	$html .= '<div id="error-msg"></div><form method="post"  id="form-update-proforma">
			<div class="box-body">	
		<div class="col-md-4">
				<div class="form-group">
				  <label for="username">PAN NO.</label>
				 <input type="text" name="pan_number" class="form-control" value='.$pan_number.' required/>
				</div> 
		</div>';
		
    $html .='<div class="col-md-4">
				<div class="form-group">
				  <label for="username">IGST No.</label>
				 <input type="text" name="gst_number" id="gst_number" class="form-control" value='.$gst_number.' required/>
				 <input type="hidden" name="updated_id" id="updated_id" value="'.$id.'" class="form-control"/>
				</div> 
				</div>';
				
	
	$html .=		'<div class="col-md-4">
				<div class="form-group">
				 <button href="#" type="button" id="update_proforma_details" name="update_proforma_details" class="btn btn-success" style="margin-top:20px;">Update</button>
				</div>
			</div>';

$html .= '</div></div></form>';
			
echo $html;
echo"<div class='modal-footer'><button class='btn btn-info' type='button' data-dismiss='modal'>Close</button></div>";
}
 if(isset($_POST["updated_id"])){
	$tag_id=$_POST["updated_id"];
	$qry="select `id`,`invoice_date`,`sac`,`gst_no`,`pan_no`,`order_no`,`invoice_id`,`cust_name`,`gst_value`,`total_amount`,`file_number` from `tax_invoice` where id='$tag_id'";
    $select=mysqli_query ($con,$qry); 
    $que1=mysqli_fetch_array($select);
    if($que1['id']==""){  
	  echo '<div class="alert alert-danger">Wrong Request</div>';
    }else{
	  $calling=mysqli_query ($con,"update `tax_invoice` set gst_no='".$_POST['gst_number']."',pan_no='".$_POST['pan_number']."' where id='".$tag_id."'");
	  if ($calling){
		  echo '<div class="alert alert-success">Invoice Updated Successfully</div>';
		  
	  }else {
		 echo '<div class="alert alert-danger">Invoice Not Updated Successfully</div>';
	  }
	}
	
}
?>

 
