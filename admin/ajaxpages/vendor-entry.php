<?php include '../include/database.php';
 if(isset($_POST["update_stucture"])){
$admin_id=$_POST["update_admin_id"];
$id=$_POST["update_stucture"];	
$output = '';
$sql=  "select `hotel_name`,`others`,`car_vendor_name`,`package_vendor_name`,`file_no`,`cheque_no`,`cheque_date`,`bill_amount`,`advance_amount`,`due_amount`,`due_payment_date`,`full_paid`,`mode_payment`,`ac_name`,`account_no`,`account_type`,`bank_name`,`ifc_code`,`address`,`mail_id`,`phone_no`,`alternate_email`,`branch_name`,`alternate_phone` from `vendor_payment` where id='".$id."'  order by id='$admin_id'  desc";	
$result=mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
$html = '<div class="modal-header" >
 Update vendor Details
</div>
<div class="modal-body" >';
	$html .= '<div id="error-msg"></div><form method="post"  id="form-update-vendor">
			<div class="box-body">	
		<div class="col-md-4">
				<div class="form-group">
				  <label for="username">Hotel Name</label>
				 <input type="hidden" name="tag_id" required class="form-control" />
				 <input type="text" name="hotel_name" class="form-control"  value="'.$row['hotel_name'].'"required/>
				</div> 
					</div>';
 $html .= '<div class="col-md-4">
				<div class="form-group">
				  <label for="username"> Car Vendor Name</label>
				 <input type="text" name="car_vendor_name" class="form-control" value="'.$row['car_vendor_name'].'" required/>
				
				</div> 
			</div>';
 $html .= '<div class="col-md-4">
				<div class="form-group">
				  <label for="username">Package_vendor_name</label>
				 <input type="text" name="package_vendor_name"class="form-control" value="'.$row['package_vendor_name'].'" required/>
				 
				</div> 
			</div>';
 $html .= 	'<div class="col-md-4">
				<div class="form-group">
				  <label for="username">File Number</label>
				 <input type="text" name="file_no"class="form-control" value="'.$row['file_no'].'" required/>
				 
				</div> 
			</div>';
 $html .= '<div class="col-md-4">
				<div class="form-group">
				  <label for="username">Cheque Number</label>
				 <input type="email" name="cheque_no"class="form-control"  value="'.$row['cheque_no'].'"required/>
				 
				</div> 
			</div>';
 $html .= '<div class="col-md-4">
				<div class="form-group">
				   <label for="username">Bill Amount</label>
				 <input type="text" name="bill_amount"class="form-control" value="'.$row['bill_amount'].'" required/>
				</div> 
			</div>';
 $html .= 	'<div class="col-md-4">
				<div class="form-group">
				  <label for="username">Advance Amount</label>
				 <input type="website" name="advance_amount"class="form-control"value="'.$row['advance_amount'].'" required/>
				</div> 
			</div>';
			
$html .= 	'<div class="col-md-4">
				<div class="form-group">
				  <label for="username">Due Amount</label>
				 <input type="website" name="due_amount"class="form-control"value="'.$row['due_amount'].'" required/>
				</div> 
			</div>';
			
$html .= 	'<div class="col-md-4">
				<div class="form-group">
				  <label for="username">Account No.</label>
				 <input type="website" name="account_no"class="form-control"value="'.$row['account_no'].'" required/>
				</div> 
			</div>';

$html .= 	'<div class="col-md-4">
				<div class="form-group">
				  <label for="username">Account Name</label>
				 <input type="website" name="ac_name" class="form-control"value="'.$row['ac_name'].'" required/>
				</div> 
			</div>';

$html .= 	'<div class="col-md-4">
				<div class="form-group">
				  <label for="username">Branch Name</label>
				 <input type="website" name="branch_name" class="form-control"value="'.$row['branch_name'].'" required/>
				</div> 
			</div>';
$html .= 	'<div class="col-md-4">
				<div class="form-group">
				  <label for="username">Ifc Code</label>
				 <input type="website" name="ifc_code"class="form-control"value="'.$row['ifc_code'].'" required/>
				</div> 
			</div>';
			
$html .= 	'<div class="col-md-4">
				<div class="form-group">
				  <label for="username">Address</label>
				 <input type="website" name="address"class="form-control"value="'.$row['address'].'" required/>
				</div> 
			</div>';
			
$html .= 	'<div class="col-md-4">
				<div class="form-group">
				  <label for="username">Mail id</label>
				 <input type="website" name="mail_id"class="form-control"value="'.$row['mail_id'].'" required/>
				</div> 
			</div>';
			

$html .= 	'<div class="col-md-4">
				<div class="form-group">
				  <label for="username">phone Number</label>
				 <input type="website" name="phone_no"class="form-control"value="'.$row['phone_no'].'" required/>
				</div> 
			</div>';


$html .= 	'<div class="col-md-4">
				<div class="form-group">
				  <label for="username">Alternate Email</label>
				 <input type="website" name="alternate_email"class="form-control"value="'.$row['alternate_email'].'" required/>
				</div> 
			</div>';
$html .= 	'<div class="col-md-4">
				<div class="form-group">
				  <label for="username">Alternate phone</label>
				 <input type="website" name="alternate_phone"class="form-control"value="'.$row['alternate_phone'].'" required/>
				</div> 
			</div>';
 $html .= '<div class="col-md-4">
				<div class="form-group">
				 <label for="username">Bank Name</label>
				 <input type="text" name="bank_name"class="form-control" value="'.$row['bank_name'].'" required/>
				 <input type="hidden" name="updated_id" id="updated_id" value="'.$id.'" class="form-control"/>
				<input type="hidden" name="update_calling_admin_id" id="update_calling_admin_id" value="'.$admin_id.'" class="form-control"/>
				</div> 
			</div>';
 
	$html .=		'<div class="col-md-4">
				<div class="form-group">
				 <button href="#" type="button" id="update_calling" class="btn btn-success" style="margin-top:20px;">Update</button>
				</div>
			</div>';

$html .= '</div></div></form>';
			
echo $html;
echo"<div class='modal-footer'><button class='btn btn-info' type='button' data-dismiss='modal'>Close</button></div>";
}
 if(isset($_POST["updated_id"])){
	$admin_id1=$_POST["update_calling_admin_id"];
	$tag_id=$_POST["updated_id"];
    $qry= "select `id`,`hotel_name`,`others`,`car_vendor_name`,`package_vendor_name`,`file_no`,`cheque_no`,`cheque_date`,`bill_amount`,`advance_amount`,`due_amount`,`due_payment_date`,`full_paid`,`mode_payment`,`ac_name`,`account_no`,`account_type`,`bank_name`,`ifc_code`,`address`,`mail_id`,`phone_no`,`alternate_email`,`alternate_phone`,`branch_name` from `vendor_payment` where id=$tag_id";
	  $select=mysqli_query ($con,$qry); 
	  $que1=mysqli_fetch_array($select);
	  if($que1['id']==""){  
		  echo '<div class="alert alert-danger">Wrong Request</div>';
	  }else{
		  $calling=mysqli_query ($con,"update `vendor_payment` set hotel_name='".mysqli_real_escape_string($con,$_POST['hotel_name'])."',car_vendor_name='".mysqli_real_escape_string($con,$_POST['car_vendor_name'])."',file_no='".$_POST['file_no']."',cheque_no='".$_POST['cheque_no']."',bill_amount='".$_POST['bill_amount']."',due_amount='".$_POST['due_amount']."',bank_name='".$_POST['bank_name']."',ifc_code='".$_POST['ifc_code']."',address='".mysqli_real_escape_string($con,$_POST['address'])."',mail_id='".$_POST['mail_id']."',phone_no='".$_POST['phone_no']."',branch_name='".$_POST['branch_name']."',alternate_email='".$_POST['alternate_email']."',alternate_phone='".$_POST['alternate_phone']."' where id=$tag_id && admin_id=$admin_id1");
		  if ($calling){
			  echo '<div class="alert alert-success">Record Update Successfully</div>';
		  
	  }else {
		 echo '<div class="alert alert-danger">Record Not Update Successfully</div>';
	  }
	}
	
}
?>

 