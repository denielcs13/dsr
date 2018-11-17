<?php include '../include/database.php';
 if(isset($_POST["update_stucture"])){
	 $id=$_POST["update_stucture"];
$admin_id=$_POST["update_admin_id"];
$result1=$con->query("select float_query. `id`,float_query.`agent_tag_id`,float_query.admin_id,float_query.`cust_name`,float_query.`mobile`,float_query.`email`,float_query.`city`,float_query.`packages`,float_query.`duration`,float_query.`packages_city`,float_query.`start_date`,float_query.`end_date`,float_query.`total_pax`,float_query.`status`,adult,child,infants from float_query left outer join calling_entry on calling_entry.id=float_query.agent_tag_id where float_query.admin_id='$admin_id' && float_query.id='".$id."'order by float_query.id  desc")->fetch_assoc();
	
echo '<div class="modal-header" >
 Update Float Query of '.$result1["agent_tag_id"].'
</div>
<div class="modal-body" ><div id="error-msg"></div><form method="post" id="form-update-fq">
			<div class="box-body">
			<div class="col-md-12" id="error-fq"></div>
			
			 <input type="hidden" name="fq_admin_id" value="'.$admin_id.'">
			 <input type="hidden" name="fq_update_id" value="'.$id.'">
				
			<div class="col-md-4">
				<div class="form-group">
				  <label for="username"> Company Name</label>
				 <input type="text" name="cust_name" class="form-control" required="" value="'.$result1["cust_name"].'">
				
				</div> 
			</div>
			
			<div class="col-md-4">
				<div class="form-group">
				  <label for="username"> Mobile Number</label>
				 <input type="text" name="mobile" class="form-control" maxlength="10" required=""  value="'.$result1["mobile"].'" >
				
				</div> 
			</div>
			<div class="col-md-4">
				<div class="form-group">
				  <label for="username">E-Mail </label>
				 <input type="email" name="email" class="form-control" value="'.$result1["email"].'" required="">
				 
				</div> 
			</div>
			<div class="col-md-4">
				<div class="form-group">
				  <label for="username">city</label>
				 <input type="text" name="city" class="form-control" required="" value="'.$result1["city"].'">
				 
				</div> 
			</div>
			<div class="col-md-4">
				<div class="form-group">
				  <label for="username">Package Name</label>
				 <input type="text" name="packages" class="form-control" required="" value="'.$result1["packages"].'">
				 
				</div> 
			</div>
			<div class="col-md-4">
				<div class="form-group">
				  <label for="username">Duration</label>
				 
				 <select type="text" name="duration" class="form-control" required="">
										<option value="select">Select</option>
										<option value="1" ';
echo ($result1["duration"]=='1')?'selected="selected"':'';
echo '> 2 Days /1 Night</option>
										<option value="2" ';
echo ($result1["duration"]=='2')?'selected="selected"':'';
echo '> 3 Days /2 Night</option>
										<option value="3" ';
echo ($result1["duration"]=='3')?'selected="selected"':'';
echo '> 4 Days /3 Night</option>
										<option value="4" ';
echo ($result1["duration"]=='4')?'selected="selected"':'';
echo '> 5 Days /4 Night</option>
										<option value="5" ';
echo ($result1["duration"]=='5')?'selected="selected"':'';
echo '> 6 Days /5 Night</option>
										<option value="6" ';
echo ($result1["duration"]=='6')?'selected="selected"':'';
echo '> 7 Days /6 Night</option>
										<option value="7" ';
echo ($result1["duration"]=='7')?'selected="selected"':'';
echo '> 8 Days /7 Night</option>
										<option value="8" ';
echo ($result1["duration"]=='8')?'selected="selected"':'';
echo '> 9 Days /8 Night</option>
										<option value="9" ';
echo ($result1["duration"]=='9')?'selected="selected"':'';
echo '> 10 Days /9 Night</option>
										<option value="10" ';
echo ($result1["duration"]=='10')?'selected="selected"':'';
echo '> 11 Days /10 Night</option>
										</select>
				</div> 
			</div>
			<div class="col-md-4">
				<div class="form-group">
				  <label for="username">Packages City</label>
				 <input type="website" name="packages_city" class="form-control" required="" value="'.$result1["packages_city"].'">
				 
				</div> 
			</div>
		
			<div class="col-md-4">
				<div class="form-group">
				  <label for="username">Start Date</label>
				 <input type="text" name="start_date" id="start_date" class="form-control" required="" value="'.$result1["start_date"].'">
				 
				</div> 
			</div> 
			<div class="col-md-4">
				<div class="form-group">
				  <label for="username">End Date</label>
				 <input type="text" name="end_date" id="end_date" class="form-control" required="" value="'.$result1["end_date"].'">
				  
				</div> 
			</div> 
			<div class="col-md-4">
				<div class="form-group">
				  <label for="username">Total Pax</label>
<select type="number" name="total_pax" class="form-control" required="" >
<option value="select">Select</option>';

for($i=1;$i<=20;$i++){
echo '<option value="'.$i.'" ';
echo ($result1["total_pax"]==$i)?'selected="selected"':'';
echo '>'.$i.'</option>';	
}

echo '
				 </select>
				 
				</div> 
			</div> 
			<div class="col-md-4">
				<div class="form-group">
				  <label for="username">No. Adults</label>
				 <input type="number" name="adult" id="adult" class="form-control" required="" value="'.$result1["adult"].'">
				  
				</div> 
			</div> <div class="col-md-4">
				<div class="form-group">
				  <label for="username">No. Children</label>
				 <input type="number" name="child" id="child" class="form-control" required="" value="'.$result1["child"].'">
				  
				</div> 
			</div> 
			<div class="col-md-4">
				<div class="form-group">
				  <label for="username">No. Infants</label>
				 <input type="number" name="infants" id="infants" class="form-control" required="" value="'.$result1["infants"].'">
				  
				</div> 
			</div> 
			
			<div class="col-md-4">
				<div class="form-group">
				 <input type="button" id="update_float_query" name="update_float_query" value="Update Float Entry" class="btn btn-success" style="margin-top:20px;">
				</div>
			</div>
			</form></div>';
echo"<div class='modal-footer'><button class='btn btn-info' type='button' data-dismiss='modal'>Close</button></div>";

 }
  if(isset($_POST["fq_update_id"]) && !empty($_POST["fq_update_id"])){
	 $id=$_POST["fq_update_id"];
$admin_id=$_POST["fq_admin_id"];
$cust_name=$con->real_escape_string($_POST['cust_name']);
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$city=$con->real_escape_string($_POST['city']);
$packages=$con->real_escape_string($_POST['packages']);
$duration=$_POST['duration'];
$adult=$_POST['adult'];
$child=$_POST['child'];
$infants=$_POST['infants'];
$packages_city=$con->real_escape_string($_POST['packages_city']);
//$agent_tag_id=$_POST['agent_tag_id'];
$start_date=date('Y-m-d',strtotime($_POST['start_date']));
$end_date=date('Y-m-d',strtotime($_POST['end_date']));
$total_pax=$_POST['total_pax'];
if( empty($cust_name) || empty($mobile) || empty($email)  || empty($city) || empty($packages)  || empty($duration)  || empty($packages_city) || empty($start_date) || empty($end_date)|| empty($total_pax)){
echo"<script>alert('Required All Field');</script>";
}else{
	//agent_tag_id='$agent_tag_id',
$update=$con->query("update  float_query set cust_name='$cust_name',mobile='$mobile',email='$email',city='$city',packages='$packages',duration='$duration',packages_city='$packages_city',start_date='$start_date',end_date='$end_date',adult='$adult',child='$child',infants='$infants',total_pax='$total_pax'  where admin_id='$admin_id' && id='".$id."'");
if($update){
echo '<div class="alert alert-success">Your Query Is Successfully Updated </div>';
}else{
echo '<div class="alert alert-danger">Sorry Unable To Update Query </div>';
}}
}

?>