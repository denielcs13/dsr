<?php include 'include/header.php';

 
?>

 <div class="content-wrapper">

    <!-- Content Header (Page header) -->

    <section class="content-header">

      <h1>

       Proforma Entry

        <small>Control panel</small>

      </h1>

      <ol class="breadcrumb">

        <li><a href="#"><i class="fa fa-gallery"></i> Home</a></li>

        <li class="active">proforma Entry</li>

      </ol>

    </section>

	<?php

	

if (isset($_POST['add'])){	

$date=date('Y-m-d',strtotime($_POST['date']));

$address = $_POST['address'];

$client_address = $_POST['client_address'];

$client_name = $_POST['client_name'];

$order_number = $_POST['order_number'];

$invoice_number = $_POST['invoice_number'];

$invoice_date = date('Y-m-d',strtotime($_POST['invoice_date']));

$sac = $_POST['sac'];

$description = $_POST['description'];

$unit = $_POST['unit'];

$quantity = $_POST['quantity'];

$rate = $_POST['rate'];

$taxable_value = $_POST['taxable_value'];

if(empty($date) || empty($quantity) || empty($rate)  || empty($unit) || empty($description)  || empty($invoice_date)  || empty($invoice_number) || empty($order_number) || empty($client_name) || empty($client_address) || empty($address) || empty($sac) || empty($taxable_value)){

	

echo"<script>alert('Required All Field');</script>";

}else{

$insert="insert into proforma_details(`office_address`,`client_name`,`client_address`,`order_no`,`invoice_no`,`date`,`invoice_date`,`sac`,`description`,`unit`,`quantity`,`rate`,`admin_id`,`taxable_value`,`status`)values('$address','$client_name','$client_address','$order_number','$invoice_number','$date','$invoice_date','$sac','$description','$unit','$quantity','$rate','$admin_id','$taxable_value','1')";


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

				  <label for="username">Office Address</label>

				 <input type="text" name="address" class="form-control" required/>				

				</div> 

			</div>

			

			<div class="col-md-4">

				<div class="form-group">

				  <label for="username">Client Name</label>

				 <input type="text" name="client_name" class="form-control" required/>			

				</div> 

			</div>

			

			<div class="col-md-4">

				<div class="form-group">

				  <label for="username">Client Address</label>

				 <input type="text" name="client_address" class="form-control" required/>				 

				</div> 

			</div>

			

			<div class="col-md-4">

				<div class="form-group">

				  <label for="username">Order No.</label>

				 <input type="text" name="order_number" class="form-control" required/>				 

				</div> 

			</div>

			

			<div class="col-md-4">

				<div class="form-group">

				  <label for="username">Invoice No.</label>

				 <input type="text" name="invoice_number" class="form-control" required/>				 

				</div> 

			</div>

			

			<div class="col-md-4">

				<div class="form-group">

				  <label for="username">Date</label>

				 <input type="text" name="date"  id="start_date" class="form-control" required/>				 

				</div> 

			</div>

			

			<div class="col-md-4">

				<div class="form-group">

				  <label for="username">Invoice Date</label>

				 <input type="text" name="invoice_date" id="start_date" class="form-control" />				 

				</div> 

			</div>

			

			<div class="col-md-4">

				<div class="form-group">

				  <label for="username">SAC</label>

				 <input type="text" name="sac"  class="form-control"/>

				</div> 

				</div>

 				

			  <div class="col-md-4">

				<div class="form-group">

				  <label for="username">Description</label>

				 <input type="text" name="description" class="form-control" required/>				

				</div> 

			</div>

			

			<div class="col-md-4">

				<div class="form-group">

				  <label for="username">Unit</label>

				 <input type="text" name="unit" class="form-control" required/>				 

				</div> 

			</div>

			

			<div class="col-md-4">

				<div class="form-group">

				  <label for="username">Quantity</label>

				 <input type="text" name="quantity" class="form-control" required/>				 

				</div> 

			</div>

			

			<div class="col-md-4">

				<div class="form-group">

				  <label for="username">Rate</label>

				 <input type="text" name="rate"   class="form-control" required/>			 
				
				<input type="hidden" name="admin_id" />
				</div> 

			</div>
			
			<div class="col-md-4">

				<div class="form-group">

				  <label for="username">Taxable Value</label>

				 <input type="text" name="taxable_value" class="form-control"/>

				</div> 

			</div>


			  <div class="col-md-4">

				<div class="form-group">

				 <input type="submit" name="add" value="Add Proforma Entry" class="btn btn-success" style="margin-top:20px;">

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