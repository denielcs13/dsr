<?php include '../include/database.php';
if(isset($_POST["add_sec_code"]) && !empty($_POST["add_sec_code"])){
	$admin_id=$_POST["add_sec_code"];
	$up_id=$_POST["up_sec_code_id"];
	$result1=$con->query("select `id`,name,admin_id from vehicle where id='".$up_id."'")->fetch_assoc();
	if(!empty($up_id) && $up_id>0){
		$button='Update';
	}else{
		$button='Add';
	}
	echo '<div class="modal-header" >
'.$button.' Hotel</div>
<div class="modal-body" ><div id="error-pq"></div><form method="post" id="form-update-pq">
			<div class="box-body">
			<div class="col-md-12" id="error-pq"></div>			
			 <input type="hidden" name="pq_admin_id" id="pq_admin_id"  value="'.$admin_id.'">			 
			<input type="hidden" name="pq_update_pack_id" id="pq_update_pack_id" value="'.$up_id.'">	
			<div class="col-md-6">
				<div class="form-group">
				  <label for="username"> Vehicle Name</label>
				 <input type="text" name="vehicle_name" class="form-control" required value="'.$result1["name"].'">				
				</div> 
			</div>			
			
			<div class="col-md-6">
				<div class="form-group">
				 <input type="button" id="sector_query" name="sector_query" value="'.$button.'" class="btn btn-success" style="margin-top:20px;">
				</div>
			</div>
			</form></div><div class="modal-footer"><button id="close_pack" class="btn btn-info" type="button">Close</button></div>';
}
if(isset($_POST["pq_admin_id"]) && !empty($_POST["pq_admin_id"])){
$admin_id=$_POST["pq_admin_id"];
$vehicle_name=$con->real_escape_string($_POST["vehicle_name"]);
if( empty($vehicle_name)){
echo"<script>alert('Required All Field');</script>";
}else{
	if(!empty($_POST["pq_update_pack_id"]) && $_POST["pq_update_pack_id"]>0){
	$insert=$con->query("update vehicle set name='".$vehicle_name."' where id='".$_POST["pq_update_pack_id"]."'");
	$exe='Updated';
	}else{
	$insert=$con->query("insert into vehicle (`admin_id`,name)values('$admin_id','".$vehicle_name."')");
	$exe='Inserted';
	} 
if($insert){
echo '<div class="alert alert-success">Vehicle Is '.$exe.' Successfully Updated </div>';
}else{
echo '<div class="alert alert-danger">Sorry Unable To '.$exe.' Hotel. </div>';
}
}
}

if(isset($_POST["delete_sec_data"]) && !empty($_POST["delete_sec_data"])){
$delete_sec_data=$_POST["delete_sec_data"];
$result1=$con->query("delete from vehicle where id='".$delete_sec_data."'");
if($result1){
echo '1';
}else{
echo '<div class="alert alert-danger">Sorry Unable To Delete Vehicle. </div>';
}
}
if(isset($_POST["vehicle_admin_id"]) && !empty($_POST["vehicle_admin_id"])){
$admin_id=$_POST["vehicle_admin_id"];
$vehicle_name=$_POST["vehicle_list"];
//$vehicle_name_detail=(explode(",",$vehicle_name));
$result1=$con->query("select `id`,name,admin_id from vehicle where name like '%".$vehicle_name."%' && admin_id='".$admin_id."'");
$data_list='';
while($data_show=$result1->fetch_assoc()){
$data_list .='<div class="city-list" data-vehicle="'.$data_show["id"].'">'.$data_show["name"].'</div>';	
} 
echo '<div class="city-dropdown-menu">'.$data_list.'</div>';
}

?>