<?php include '../include/database.php';
if(isset($_POST["add_sec_code"]) && !empty($_POST["add_sec_code"])){
	$admin_id=$_POST["add_sec_code"];
	$up_id=$_POST["up_sec_code_id"];
	$result1=$con->query("select `id`,hotel_name,admin_id from hotel where id='".$up_id."'")->fetch_assoc();
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
				  <label for="username"> Hotel Name</label>
				 <input type="text" name="hotel_name" class="form-control" required value="'.$result1["hotel_name"].'">				
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
$hotel_name=$con->real_escape_string($_POST["hotel_name"]);
if( empty($hotel_name)){
echo"<script>alert('Required All Field');</script>";
}else{
	if(!empty($_POST["pq_update_pack_id"]) && $_POST["pq_update_pack_id"]>0){
	$insert=$con->query("update hotel set hotel_name='".$hotel_name."' where id='".$_POST["pq_update_pack_id"]."'");
	$exe='Updated';
	}else{
	$insert=$con->query("insert into hotel (`admin_id`,hotel_name)values('$admin_id','".$hotel_name."')");
	$exe='Inserted';
	} 
if($insert){
echo '<div class="alert alert-success">Hotel Is '.$exe.' Successfully Updated </div>';
}else{
echo '<div class="alert alert-danger">Sorry Unable To '.$exe.' Hotel. </div>';
}
}
}

if(isset($_POST["delete_sec_data"]) && !empty($_POST["delete_sec_data"])){
$delete_sec_data=$_POST["delete_sec_data"];
$result1=$con->query("delete from hotel where id='".$delete_sec_data."'");
if($result1){
echo '1';
}else{
echo '<div class="alert alert-danger">Sorry Unable To Delete Hotel. </div>';
}
}
if(isset($_POST["hotel_name_admin_id"]) && !empty($_POST["hotel_name_admin_id"])){
$admin_id=$_POST["hotel_name_admin_id"];
$hotel_name=$_POST["hotel_name_list"];
$result1=$con->query("select `id`,hotel_name from hotel where hotel_name like '%".$hotel_name."%' && admin_id='".$admin_id."'");
$data_list='';
while($data_show=$result1->fetch_assoc()){
$data_list .='<div class="city-list" data-hotel_name="'.$data_show["id"].'">'.$data_show["hotel_name"].'</div>';	
}
echo '<div class="city-dropdown-menu">'.$data_list.'</div>';
}

?>