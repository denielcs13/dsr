<?php include 'include/header.php';

 

 ?>

 <div class="content-wrapper">

    <!-- Content Header (Page header) -->

    <section class="content-header">

      <h1>

       Invoice Entry

        <small>Control panel</small>

      </h1>

      <ol class="breadcrumb">

        <li><a href="#"><i class="fa fa-gallery"></i> Home</a></li>

        <li class="active">Invoice Entry</li>

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

$phone_no=$_POST['phone_no'];

$branch_name=$_POST['branch_name'];

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

				  <label for="username">Invoice No.</label>

				 <input type="text" name="invoice_no" class="form-control" required/>

				</div> 

			</div>



		   <div class="col-md-4">

				<div class="form-group">

				  <label for="username">Account No.</label>

				 <input type="text" name="account_no" class="form-control" required/>

				</div> 

			</div>

			  <div class="col-md-4">

				<div class="form-group">

				  <label for="username">IFSC Code</label>

				 <input type="text" name="ifsc_code" class="form-control" required/>

				</div> 

			</div>

			

			<div class="col-md-4">

				<div class="form-group">

				    <label for="username">Customer Details</label>

				 <input type="email" name="customer_details" class="form-control" required/>				 

				</div> 

			 </div>

			

		    <div class="col-md-4">

				<div class="form-group">

				   <label for="username">Challan No</label>

				      <input type="text" name="challan_no" class="form-control" required/>

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

				   <label for="username">Order No.</label>

				      <input type="text" name="order_no" class="form-control" required/>

				</div> 

			</div>

            <div class="col-md-4">

				<div class="form-group">

				   <label for="username">Vehicle No.</label>

				      <input type="text" name="vehicle_no" class="form-control" required/>

				</div> 

			</div>

			<div class="col-md-4">

				<div class="form-group">

				   <label for="username">GSTIN</label>

				      <input type="text" name="gstin" class="form-control" required/>

				</div> 

			</div>

			<div class="col-md-4">

				<div class="form-group">

				   <label for="username">PAN NO.</label>

				      <input type="text" name="pan_no" class="form-control" required/>

				</div> 

			</div>

			<div class="col-md-4">

				<div class="form-group">

				   <label for="username">LOCATION</label>

				      <input type="text" name="location" class="form-control" required/>

				</div> 

			</div>

			<div class="col-md-4">

				<div class="form-group">

				   <label for="username">DATE</label>

				      <input type="text" name="date" id="start_date"  class="form-control" required/>

				</div> 

			</div>
			

			  <div class="col-md-4">

				<div class="form-group">

				 <input type="submit" name="add" value="Add  Invoice Entry" class="btn btn-success" style="margin-top:20px;">

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