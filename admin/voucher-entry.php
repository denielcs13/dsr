<?php include 'include/header.php';

 

 ?>

 <div class="content-wrapper">

    <!-- Content Header (Page header) -->

    <section class="content-header">

      <h1>

        Service Voucher Entry

        <small>Control panel</small>

      </h1>

      <ol class="breadcrumb">

        <li><a href="#"><i class="fa fa-gallery"></i> Home</a></li>

        <li class="active">Voucher Entry</li>

      </ol>

    </section>

	<?php

	

if (isset($_POST['add_voucher'])){	

$file_no=$_POST['file_no'];

$guest_name=$_POST['guest_name'];

$contact_no=$_POST['contact_no'];

$tsd=$_POST['tsd'];

$arrivel_time=$_POST['arrivel_time'];

$departure_time=$_POST['departure_time'];

$destination=$_POST['destination'];

$hotel_name=$_POST['hotel_name'];

if(empty($file_no) || empty($guest_name) || empty($contact_no)  || empty($tsd) || empty($arrivel_time)  || empty($departure_time)  || empty($destination) || empty($hotel_name)){

echo"<script>alert('Required All Field');</script>";

}else{

 $insert="insert  into voucher_details(`file_no`,`guest_name`,`contact_no`,`tsd`,`arrivel_time`,`departure_time`,`destination`,`hotel_name`,`status`,`admin_id`) values('$file_no','$guest_name','$contact_no','$tsd','$arrivel_time','$departure_time','$destination','$hotel_name','1','$admin_id')";

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

				  <label for="username">File Number</label>

				 <input type="text" name="file_no" class="form-control" required/>				 

				</div> 

			</div>

			

		   <div class="col-md-4">

				<div class="form-group">

				  <label for="username">Guest Name</label>

				 <input type="text" name="guest_name" class="form-control" required/>

				</div> 

			</div>

			

			<div class="col-md-4">

				<div class="form-group">

				    <label for="username">Contact No.</label>

				 <input type="text" name="contact_no" class="form-control" required/>				 

				</div> 

			 </div>

			

		    <div class="col-md-4">

				<div class="form-group">

				   <label for="username">TSD</label>

				      <input type="text" name="tsd" class="form-control" required/>

				</div> 

			</div>
			
			<div class="col-md-4">

				<div class="form-group">

				   <label for="username">Arrivel Time</label>

				      <input type="text" name="arrivel_time" class="form-control" required/>

				</div> 

			</div>
			
			
			<div class="col-md-4">

				<div class="form-group">

				   <label for="username">Departure Time</label>

				      <input type="text" name="departure_time" class="form-control" required/>

				</div> 

			</div>

			<div class="col-md-4">

				<div class="form-group">

				   <label for="username">Destination</label>

				      <input type="text" name="destination" class="form-control" required/>

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

				   <label for="username">Check In</label>

				      <input type="text" name="check_in" class="form-control" required/>

				</div> 

			</div>
			
			<div class="col-md-4">

				<div class="form-group">

				   <label for="username">Check Out</label>

				      <input type="text" name="check_out" class="form-control" required/>

				</div> 

			</div>
			
			<div class="col-md-4">

				<div class="form-group">

				   <label for="username">Meal Plan</label>

				      <input type="text" name="meal_plan" class="form-control" required/>

				</div> 

			</div>


		  <div class="col-md-4">

			<div class="form-group">

			 <input type="submit" name="add_voucher" value="Add Voucher Entry" class="btn btn-success" style="margin-top:20px;">

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