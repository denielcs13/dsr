<?php include '../include/database.php';
if(isset($_POST["add_sec_code"]) && !empty($_POST["add_sec_code"])){
	$admin_id=$_POST["add_sec_code"];
	$up_id=$_POST["up_sec_code_id"];
	$result1=$con->query("select `id`,inclusion_title,inclusion_desc,inc_rate,admin_id from inclusion where id='".$up_id."'")->fetch_assoc();
	if(!empty($up_id) && $up_id>0){
		$button='Update';
	}else{
		$button='Add';
	}
	echo '<div class="modal-header" >
'.$button.' Inclusion </div>
<div class="modal-body" ><div id="error-pq"></div><form method="post" id="form-update-pq">
			<div class="box-body">
			<div class="col-md-12" id="error-pq"></div>			
			 <input type="hidden" name="pq_admin_id" id="pq_admin_id"  value="'.$admin_id.'">			 
			<input type="hidden" name="pq_update_pack_id" id="pq_update_pack_id" value="'.$up_id.'">	
			<div class="col-md-4">
				<div class="form-group">
				  <label for="username"> Inclusion Title</label>
				 <input type="text" name="inclusion_title" class="form-control" required value="'.$result1["inclusion_title"].'">				
				</div> 
			</div>			
			<div class="col-md-4">
				<div class="form-group">
				  <label for="username">Inclusion Details </label>
				 <input type="text" name="inclusion_desc" class="form-control" required value="'.$result1["inclusion_desc"].'">				
				</div> 
			</div>
			<div class="col-md-4">
				<div class="form-group">
				  <label for="username">Inclusion Rate </label>
				 <input type="number" name="inc_rate" class="form-control" required value="'.$result1["inc_rate"].'">				 
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
$inc_rate=$_POST["inc_rate"];
$inclusion_desc=$con->real_escape_string($_POST["inclusion_desc"]);
$inclusion_title=$con->real_escape_string($_POST["inclusion_title"]);
if( empty($inclusion_title) || empty($inclusion_desc) || empty($inc_rate)){
echo"<script>alert('Required All Field');</script>";
}else{
	if(!empty($_POST["pq_update_pack_id"]) && $_POST["pq_update_pack_id"]>0){
	$insert=$con->query("update inclusion set inc_rate='".$inc_rate."',inclusion_desc='".$inclusion_desc."',inclusion_title='".$inclusion_title."' where id='".$_POST["pq_update_pack_id"]."'");
	$exe='Updated';
	}else{
	$insert=$con->query("insert into inclusion (`admin_id`,inc_rate,inclusion_desc,inclusion_title)values('$admin_id','".$inc_rate."','".$inclusion_desc."','".$inclusion_title."')");
	$exe='Inserted';
	} 
if($insert){
echo '<div class="alert alert-success">Inclusion Is '.$exe.' Successfully Updated </div>';
}else{
echo '<div class="alert alert-danger">Sorry Unable To '.$exe.' Inclusion. </div>';
}
}
}

if(isset($_POST["delete_sec_data"]) && !empty($_POST["delete_sec_data"])){
$delete_sec_data=$_POST["delete_sec_data"];
$result1=$con->query("delete from inclusion where id='".$delete_sec_data."'");
if($result1){
echo '1';
}else{
echo '<div class="alert alert-danger">Sorry Unable To Delete Inclusion. </div>';
}
}
?>