<?php include '../include/database.php';
if(isset($_POST["add_sec_code"]) && !empty($_POST["add_sec_code"])){
	$admin_id=$_POST["add_sec_code"];
	$up_id=$_POST["up_sec_code_id"];
	$result1=$con->query("select `id`,sec_code,sec_name,itinerary,itinerary_desc,admin_id from sector_code where id='".$up_id."'")->fetch_assoc();
	if(!empty($up_id) && $up_id>0){
		$button='Update';
	}else{
		$button='Add';
	}
	echo '<div class="modal-header" >
'.$button.' Sector Code </div>
<div class="modal-body" ><div id="error-pq"></div><form method="post" id="form-update-pq">
			<div class="box-body">
			<div class="col-md-12" id="error-pq"></div>			
			 <input type="hidden" name="pq_admin_id" id="pq_admin_id"  value="'.$admin_id.'">			 
			<input type="hidden" name="pq_update_pack_id" id="pq_update_pack_id" value="'.$up_id.'">	
			<div class="col-md-4">
				<div class="form-group">
				  <label for="username"> Sector Code</label>
				 <input type="text" name="sec_code" class="form-control" required value="'.$result1["sec_code"].'">				
				</div> 
			</div>			
			<div class="col-md-4">
				<div class="form-group">
				  <label for="username">Sector (Location) </label>
				 <input type="text" name="sec_loc" class="form-control" required value="'.$result1["sec_name"].'">				
				</div> 
			</div>
			<div class="col-md-4">
				<div class="form-group">
				  <label for="username">Itinerary </label>
				 <input type="text" name="itinerary" class="form-control" required value="'.$result1["itinerary"].'">				 
				</div> 
			</div>
			<div class="col-md-8">
				<div class="form-group">
				  <label for="username">Itinerary Description</label>
				 <textarea name="itinerary_desc" class="form-control" required >'.$result1["itinerary_desc"].'	</textarea>			 
				</div> 
			</div>
			<div class="col-md-4">
				<div class="form-group">
				 <input type="button" id="sector_query" name="sector_query" value="'.$button.'" class="btn btn-success" style="margin-top:20px;">
				</div>
			</div>
			</form></div><div class="modal-footer"><button id="close_pack" class="btn btn-info" type="button">Close</button></div>';
}
if(isset($_POST["pq_admin_id"]) && !empty($_POST["pq_admin_id"])){
$admin_id=$_POST["pq_admin_id"];
$sec_code=$_POST["sec_code"];
$sec_loc=$_POST["sec_loc"];
$itinerary=$con->real_escape_string($_POST["itinerary"]);
$itinerary_desc=$con->real_escape_string($_POST["itinerary_desc"]);
if( empty($sec_code) || empty($sec_loc) || empty($itinerary)){
echo"<script>alert('Required All Field');</script>";
}else{
	if(!empty($_POST["pq_update_pack_id"]) && $_POST["pq_update_pack_id"]>0){
	$insert=$con->query("update sector_code set sec_code='".$sec_code."',sec_name='".$sec_loc."',itinerary='".$itinerary."',itinerary_desc='".$itinerary_desc."' where id='".$_POST["pq_update_pack_id"]."'");
	$exe='Updated';
	}else{
	$insert=$con->query("insert into sector_code (`admin_id`,sec_code,sec_name,itinerary)values('$admin_id','".$sec_code."','".$sec_loc."','".$itinerary."')");
	$exe='Inserted';
	} 
if($insert){
echo '<div class="alert alert-success">Sector Code Is '.$exe.' Successfully Updated </div>';
}else{
echo '<div class="alert alert-danger">Sorry Unable To Insert Sector Code. </div>';
}
}
}

if(isset($_POST["delete_sec_data"]) && !empty($_POST["delete_sec_data"])){
$delete_sec_data=$_POST["delete_sec_data"];
$result1=$con->query("delete from sector_code where id='".$delete_sec_data."'");
if($result1){
echo '1';
}else{
echo '<div class="alert alert-danger">Sorry Unable To Delete Sector Code. </div>';
}
}
if(isset($_POST["sc_list_admin_id"]) && !empty($_POST["sc_list_admin_id"])){
$admin_id=$_POST["sc_list_admin_id"];
$sec_code=$_POST["sec_code_list"];
$result1=$con->query("select `id`,sec_code,sec_name,itinerary,itinerary_desc,admin_id from sector_code where sec_code like '%".$sec_code."%' && admin_id='".$admin_id."'");
$data_list='';
while($data_show=$result1->fetch_assoc()){
$data_list .='<div class="city-list" data-sector_code="'.$data_show["id"].'">'.$data_show["sec_code"].'</div>';	
}


echo '<div class="city-dropdown-menu">'.$data_list.'</div>';
}

?>