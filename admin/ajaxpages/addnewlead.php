<?php include '../include/database.php';
if(isset($_POST["agent_tag_id"])){
$admin_id=$_POST['admin_id'];
$cust_name=$_POST['cust_name'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$city=$_POST['city'];
$packages=$_POST['packages'];
$duration=$_POST['duration'];
$packages_city=$_POST['packages_city'];
$agent_tag_id=$_POST['agent_tag_id'];
$adult=$_POST['adult'];
$child=$_POST['child'];
$infants=$_POST['infants'];
$start_date=date('Y-m-d',strtotime($_POST['start_date']));
$end_date=date('Y-m-d',strtotime($_POST['end_date']));
$total_pax=$_POST['total_pax'];
if( empty($cust_name) || empty($mobile) || empty($email)  || empty($city) || empty($packages)  || empty($duration)  || empty($packages_city) || empty($start_date) || empty($end_date)|| empty($total_pax) || ($adult<=0)){
echo"<script>alert('Required All Field');</script>";
}else{
$insert="insert into `float_query`(`agent_tag_id`,`cust_name`,`mobile`,`email`,`city`,`packages`,`duration`,`packages_city`,`start_date`,`end_date`,`total_pax`,`status`,`admin_id`,adult,child,infants) values('$agent_tag_id','$cust_name','$mobile','$email','$city','$packages','$duration','$packages_city','$start_date','$end_date','$total_pax','1','$admin_id','$adult','$child','$infants') ";
$ins=mysqli_query($con,$insert);
if(!empty($ins)){
echo '<div class="alert alert-success">Your File Is Successfully Added </div>';
}else{
echo '<div class="alert alert-danger">Sorry Unable To Added File </div>';
}}}
if(isset($_POST["insert_stucture"])){
?>
<div class="modal-header" >
 Insert New Lead Details
</div>
<div class="modal-body" >
	<div id="error-msg"></div><form method="post"  id="form-addlead-query-update">
			<div class="box-body">
<div id="error-update"></div>			
			<div class="col-md-4">
				<div class="form-group">
				  <label for="username"> Agent Id </label>
				<input type="text" name="agent_tag_id" class="form-control" value="<?php echo $_POST["insert_stucture"];?>" readonly />
			
				</div> 
			</div>
		<div class="col-md-4">
				<div class="form-group">
				  <label for="username"> Company Name</label>
				 <input type="text" name="cust_name" class="form-control" required/>
				</div> 
					</div>
 <div class="col-md-4">
				<div class="form-group">
				  <label for="username"> Mobile Number</label>
				 <input type="text" name="mobile" class="form-control" maxlength="10"required/>
				
				</div> 
			</div>
 <div class="col-md-4">
				<div class="form-group">
				   <label for="username">E-Mail </label>
				 <input type="email" name="email"class="form-control" required/>
				 
				</div> 
			</div>
 <div class="col-md-4">
				<div class="form-group">
				 <label for="username">city</label>
				 <input type="text" name="city"class="form-control" required/>
				 
				</div> 
			</div>
 <div class="col-md-4">
				<div class="form-group">
				   <label for="username">Packages Name</label>
				 <input type="text" name="packages"class="form-control" required/>
				 
				</div> 
			</div>
 <div class="col-md-4">
	<div class="form-group">
	<label for="username">Duration</label>
	<select name="duration" id="duration" class="form-control"   required>
	<option value="select">Select</option>
		<option value="select">Select</option>
										<option value="1"> 2 Days /1 Night</option>
										<option value="2"> 3 Days /2 Night</option>
										<option value="3"> 4 Days /3 Night</option>
										<option value="4"> 5 Days /4 Night</option>
										<option value="5"> 6 Days /5 Night</option>
										<option value="6"> 7 Days /6 Night</option>
										<option value="7"> 8 Days /7 Night</option>
										<option value="8"> 9 Days /8 Night</option>
										<option value="9"> 10 Days /9 Night</option>
										<option value="10"> 11 Days /10 Night</option>
										<option value="10"> 12 Days /11 Night</option>
										<option value="10"> 13 Days /12 Night</option>
										<option value="10"> 14 Days /13 Night</option>
										<option value="10"> 15 Days /14 Night</option>
										<option value="10"> 16 Days /15 Night</option>
										<option value="10"> 17 Days /16 Night</option>
										<option value="10"> 18 Days /17 Night</option>
										<option value="10"> 19 Days /18 Night</option>
										<option value="10"> 20 Days /19 Night</option>
										<option value="10"> 21 Days /20 Night</option>
										<option value="10"> 22 Days /21 Night</option>
										<option value="10"> 23 Days /22 Night</option>
										<option value="10"> 24 Days /23 Night</option>
										<option value="10"> 25 Days /24 Night</option>
										<option value="10"> 26 Days /25 Night</option>
										<option value="10"> 27 Days /26 Night</option>
										<option value="10"> 28 Days /27 Night</option>
										<option value="10"> 29 Days /28 Night</option>
										<option value="10"> 30 Days /29 Night</option>
										<option value="10"> 31 Days /30 Night</option>
		</select>
				</div> 
			</div>
 <div class="col-md-4">
				<div class="form-group">
				   <label for="username">Destination City</label>
				 <input type="website" name="packages_city"class="form-control" required/>
				</div> 
			</div>
<div class="col-md-4">
				<div class="form-group">
				  <label for="username">Travel Start Date</label>
				 <input type="text" name="start_date" id="start_date"class="form-control" required/>
				 
				</div> 
			</div> 
			<div class="col-md-4">
				<div class="form-group">
				  <label for="username">Travel End Date</label>
				 <input type="text" name="end_date" id="end_date"class="form-control" required/>
				  
				</div> 
				</div> 
			<div class="col-md-4">
				<div class="form-group">
				  <label for="username">Total Pax</label>
				<select name="total_pax" class="form-control" required>
				<option value="select">Select</option>
				<?php
				for($i=1;$i<=20;$i++){
				echo '<option value="'.$i.'">'.$i.'</option>';	
				}
				?>
				 </select>
				  <input type="hidden" name="admin_id" value="<?php echo $admin_id?>" />
				</div> 
			</div> 
				<div class="col-md-4">
				<div class="form-group">
				  <label for="username">No. Adults</label>
				 <input type="number" name="adult" id="adult" class="form-control" required="">
				  
				</div> 
			</div> <div class="col-md-4">
				<div class="form-group">
				  <label for="username">No. Children</label>
				 <input type="number" name="child" id="child" class="form-control" required="">
				  
				</div> 
			</div> 
			<div class="col-md-4">
				<div class="form-group">
				  <label for="username">No. Infants</label>
				 <input type="number" name="infants" id="infants" class="form-control" required="">
				  
				</div> 
			</div> 
	<div class="col-md-4">
				<div class="form-group">
				 <button type="button" name="add_query"id="add_query" class="btn btn-success" style="margin-top:20px;">Add New Lead</button>
				</div>
			</div>

</div></div></form>
<div class='modal-footer'><button class='btn btn-info' type='button' data-dismiss='modal'>Close</button></div>
<?php
}
?>
