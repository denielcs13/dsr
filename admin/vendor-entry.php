<?php include 'include/header.php';
 
 ?>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Vendor Entry
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-gallery"></i> Home</a></li>
        <li class="active">Vendor Entry</li>
      </ol>
    </section>
	<?php
	
if (isset($_POST['add'])){	

$date=date('Y-m-d',strtotime($_POST['date']));
$hotel_name=$_POST['hotel_name'];
$others=$_POST['others'];
$car_vendor_name=$_POST['car_vendor_name'];
$package_vendor_name=$_POST['package_vendor_name'];
$file_no=$_POST['file_no'];
$cheque_no=$_POST['cheque_no'];
$cheque_date=date('Y-m-d',strtotime($_POST['cheque_date']));
$bill_amount=$_POST['bill_amount'];
$advance_amount=$_POST['advance_amount'];
$due_amount=$_POST['due_amount'];
$due_payment_date=date('Y-m-d',strtotime($_POST['due_payment_date']));
$full_paid=$_POST['full_paid'];
$mode_payment=$_POST['mode_payment'];
$rtgs_neht_no=$_POST['rtgs_neht_no'];
$ac_name=$_POST['ac_name'];
$account_no=$_POST['account_no'];
$account_type=$_POST['account_type'];
$bank_name=$_POST['bank_name'];
$ifc_code=$_POST['ifc_code'];
$address=$_POST['address'];
$mail_id=$_POST['mail_id'];
$phone_no=$_POST['phone_no'];$branch_name=$_POST['branch_name'];
$alternate_email=$_POST['alternate_email'];
$alternate_phone=$_POST['alternate_phone'];


if(empty($date) || empty($hotel_name) || empty($others)  || empty($car_vendor_name) || empty($package_vendor_name)  || empty($file_no)  || empty($cheque_no) || empty($cheque_date) || empty($bill_amount) || empty($advance_amount) || empty($due_amount) || empty($due_payment_date) || empty($full_paid) || empty($mode_payment) || empty($rtgs_neht_no) || empty($ac_name) || empty($account_no) || empty($account_type) || empty($bank_name) || empty($ifc_code) || empty($address) || empty($mail_id) || empty($phone_no) || empty($alternate_email) || empty($alternate_phone) || empty($branch_name)){
	
echo"<script>alert('Required All Field');</script>";

}else{
	
$insert="insert  into vendor_payment(`date`,`hotel_name`,`others`,`car_vendor_name`,`package_vendor_name`,`file_no`,`cheque_no`,`cheque_date`,`bill_amount`,`advance_amount`,`due_amount`,`due_payment_date`,`full_paid`,`mode_payment`,`rtgs_neht_no`,`ac_name`,`account_no`,`account_type`,`bank_name`,`ifc_code`,`address`,`mail_id`,`phone_no`,`alternate_email`,`alternate_phone`,`status`,`admin_id`,`branch_name`) values('$date','$hotel_name','$others','$car_vendor_name','$package_vendor_name','$file_no','$cheque_no','$cheque_date','$bill_amount','$advance_amount','$due_amount','$due_payment_date','$full_paid','$mode_payment','$rtgs_neht_no','$ac_name','$account_no','$account_type','$bank_name','$ifc_code','$address','$mail_id','$phone_no','$alternate_email','$alternate_phone','1','$admin_id','$branch_name')";

$ins=mysqli_query($con,$insert);

if (!empty($ins)){
	
echo '<div class="alert alert-success">Your File Is Successfully Added </div>';

}else{
	
echo '<div class="alert alert-danger">Sorry Unable To Added File </div>';

}}}

	
?>

    <!-- Main content -->
    <section class="content">
     <div class="row"> 
	 <div class="col-md-12"> 
	 <div class="box box-primary"> 
 
		<form method="post" >
			<div class="box-body">
			<div class="col-md-4">
				<div class="form-group">				
				  <label for="username">Vender Date</label>
				 <input type="text" name="date" id="start_date" class="form-control" required/>				
				</div> 
			</div>
			
			<div class="col-md-4">
				<div class="form-group">
				  <label for="username">Hotel Name</label>
				 <input type="text" name="hotel_name" class="form-control" required/>			
				</div> 
			</div>
			
			<div class="col-md-4">
				<div class="form-group">
				  <label for="username">Others Details</label>
				 <input type="text" name="others" class="form-control" required/>				 
				</div> 
			</div>
			
			<div class="col-md-4">
				<div class="form-group">
				  <label for="username">Car Vendor Name</label>
				 <input type="text" name="car_vendor_name" class="form-control" maxlength="10"required/>				 
				</div> 
			</div>
			
			<div class="col-md-4">
				<div class="form-group">
				  <label for="username">Package Vendor Name</label>
				 <input type="text" name="package_vendor_name" class="form-control" required/>				 
				</div> 
			</div>
			
			<div class="col-md-4">
				<div class="form-group">
				  <label for="username">File Number</label>
				 <input type="text" name="file_no" class="form-control" required/>				 
				</div> 
			</div>
			
				<div class="col-md-4">
				<div class="form-group">
				  <label for="username">Cheque Number</label>
				 <input type="text" name="cheque_no" class="form-control" />				 
				</div> 
			</div>
			
			<div class="col-md-4">
				<div class="form-group">
				  <label for="username">Cheque Date</label>
				 <input type="text" name="cheque_date"  id="start_date" class="form-control" maxlength="10"/>
				</div> 
				</div>
 				
			  <div class="col-md-4">
				<div class="form-group">
				  <label for="username">Bill  Amount</label>
				 <input type="text" name="bill_amount" class="form-control" required/>				
				</div> 
			</div>
			
			<div class="col-md-4">
				<div class="form-group">
				  <label for="username">Advance Amount</label>
				 <input type="text" name="advance_amount" class="form-control" required/>				 
				</div> 
			</div>
			
			<div class="col-md-4">
				<div class="form-group">
				  <label for="username">Due  Amount</label>
				 <input type="text" name="due_amount" class="form-control" maxlength="10"required/>				 
				</div> 
			</div>
			
			<div class="col-md-4">
				<div class="form-group">
				  <label for="username">Due Payment Date</label>
				 <input type="text" name="due_payment_date"  id="start_date" class="form-control" required/>			 
				</div> 
			</div>
			
			<div class="col-md-4">
				<div class="form-group">
				  <label for="username">Full Paid</label>
				   <select  type="text"name="full_paid" id="duration" class="form-control"   required/>
										<option value="select">Select</option>
										<option value="1">Yes</option>
										<option value="2">No</option>										
					  </select>
				</div> 
			</div>
				<div class="col-md-4">
				 <div class="form-group">
				     <label for="username">Payment  Mode </label>
				        <select  type="text"name="mode_payment" id="duration" class="form-control"   required/>
										<option value="select">Select</option>
										  <option value="1">Cash</option>
										  <option value="2">Online</option>										
										  <option value="3">Cheque</option>																			
						  </select>
				     </div> 
			   </div>
	
			<div class="col-md-4">
				<div class="form-group">
				  <label for="username">RTGS/NEFT NO</label>
				 <input type="text" name="rtgs_neht_no"  class="form-control" maxlength="10"/>
				</div> 
				</div> 
				
			 <div class="col-md-4">
				<div class="form-group">
				  <label for="username">A/C NAME</label>
				 <input type="text" name="ac_name" class="form-control" required/>				
				</div> 
			</div>

			<div class="col-md-4">
				 <div class="form-group">
				     <label for="username">Account Type</label>
				        <select  type="text"name="account_type" id="duration" class="form-control"   required/>
										<option value="select">Select</option>
										  <option value="1">Saving</option>
										  <option value="2">Current</option>										
										  <option value="3">individual current</option>																			
						  </select>
				     </div> 
			   </div>
			   
			<div class="col-md-4">
				<div class="form-group">
				  <label for="username">A/C NO</label>
				 <input type="text" name="account_no" class="form-control" maxlength="10"required/>				 
				</div> 
			</div>
			
			<div class="col-md-4">
				<div class="form-group">
				  <label for="username">Bank Name</label>
				 <input type="text" name="bank_name"  class="form-control" required/>			 
				</div> 
			</div>						<div class="col-md-4">				<div class="form-group">				  <label for="username">Branch Name</label>				 <input type="text" name="branch_name"  class="form-control" required/>			 				</div> 			</div>
			
			<div class="col-md-4">
				<div class="form-group">
				  <label for="username">IFC Code</label>
				 <input type="text" name="ifc_code" class="form-control" required/>				 
				</div> 
			</div>
			
		   <div class="col-md-4">
				<div class="form-group">
				  <label for="username">Address</label>
				 <input type="text" name="address" class="form-control" required/>
				</div> 
			</div>
			
			<div class="col-md-4">
				<div class="form-group">
				    <label for="username">EMail Id</label>
				 <input type="email" name="mail_id" class="form-control" required/>				 
				</div> 
			 </div>
			
		    <div class="col-md-4">
				<div class="form-group">
				   <label for="username">Phone No</label>
				      <input type="text" name="phone_no" class="form-control" required/>
				</div> 
			</div>
			
			 <div class="col-md-4">
				<div class="form-group">
				    <label for="username">Alternate Email</label>
				 <input type="email" name="alternate_email" class="form-control" required/>				 
				</div> 
			 </div>
			
		    <div class="col-md-4">
				<div class="form-group">
				   <label for="username">Alternate Phone</label>
				      <input type="text" name="alternate_phone" class="form-control" required/>
				  <input type="hidden" name="admin_id"/>
				</div> 
			</div>

			  <div class="col-md-4">
				<div class="form-group">
				 <input type="submit" name="add" value="Add  Vendor Entry" class="btn btn-success" style="margin-top:20px;">
				</div>
			  </div>
			 </div>
			</div>
		   </form>
		  </div>
		</div>
	</section>
  </div>
<?php
include 'include/footer.php';
?>