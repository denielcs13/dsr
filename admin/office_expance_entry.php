<?php include 'include/header.php'; ?>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Office Expance  Entry
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-gallery"></i> Home</a></li>
        <li class="active">  Office Expance  Entry</li>
      </ol>
    </section>
	<?php
	
if (isset($_POST['add'])){	

$date=date('Y-m-d',strtotime($_POST['date']));
$voucher_no=$_POST['voucher_no'];
$voucher_date=date('Y-m-d',strtotime($_POST['voucher_date']));
$particulers=$_POST['particulers'];
$payto=$_POST['payto'];
$billno=$_POST['billno'];
$payment_mode=$_POST['payment_mode'];
$cheuqe_no=$_POST['cheuqe_no'];
$amount=$_POST['amount'];

if(empty($date) || empty($voucher_no) || empty($voucher_date)  || empty($particulers) || empty($payto)  || empty($billno)  || empty($payment_mode) || empty($cheuqe_no) || empty($amount)){
	
echo"<script>alert('Required All Field');</script>";

}else{
	
$insert="insert  into office_expance(`date`,`voucher_no`,`voucher_date`,`particulers`,`payto`,`billno`,`payment_mode`,`cheuqe_no`,`amount`,`status`,`admin_id`) values('$date','$voucher_no','$voucher_date','$particulers','$payto','$billno','$payment_mode','$cheuqe_no','$amount','1','$admin_id')";

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
				  <label for="username"> Date</label>
				 <input type="text" name="date" id="start_date" class="form-control" required/>				
				</div> 
			</div>
			
			<div class="col-md-4">
				<div class="form-group">
				  <label for="username">Voucher No</label>
				 <input type="text" name="voucher_no" class="form-control" required/>			
				</div> 
			</div>
			
			<div class="col-md-4">
				<div class="form-group">
				  <label for="username">Voucher Date</label>
				 <input type="text" name="voucher_date"  id="start_date" class="form-control" required/>				 
				</div> 
			</div>
			<div class="col-md-4">
				<div class="form-group">
				  <label for="username">Particulers</label>
				 <input type="text" name="particulers" class="form-control" maxlength="10"/>
				</div> 
				</div>
 				
			  <div class="col-md-4">
				<div class="form-group">
				  <label for="username">Pay To</label>
				 <input type="text" name="payto" class="form-control" required/>				
				</div> 
			</div>
			
			<div class="col-md-4">
				<div class="form-group">
				  <label for="username">Bill No</label>
				 <input type="text" name="billno"  class="form-control" required/>			 
				</div> 
			</div>
			
			<div class="col-md-4">
				 <div class="form-group">
				     <label for="username">Payment Mode</label>
				        <select  type="text"name="payment_mode" id="duration" class="form-control"   required/>
										<option value="select">Select</option>
										  <option value="Cash">Cash</option>
										  <option value="Online">Online</option>										
										  <option value="Cheque">Cheque</option>																			
						  </select>
				     </div> 
			   </div>
			
			<div class="col-md-4">
				<div class="form-group">
				  <label for="username">Cheuqe No</label>
				 <input type="text" name="cheuqe_no" class="form-control" required/>				 
				</div> 
			</div>
			
			<div class="col-md-4">
				<div class="form-group">
				  <label for="username">Amount</label>
				 <input type="text" name="amount" class="form-control" required/>
                    <input type="hidden" name="admin_id"/>				 
				</div> 
			</div>
			
			  <div class="col-md-4">
				<div class="form-group">
				 <input type="submit" name="add" value="Add  Office Expance" class="btn btn-success" style="margin-top:20px;">
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