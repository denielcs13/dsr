<?php include '../include/database.php';
 if(isset($_POST["update_stucture"])){
$admin_id=$_POST["update_admin_id"];
$id=$_POST["update_stucture"];	
$output = '';
$sql=  "select `id`,`tag_id`,`comp_name`,`agent_name`,`address`,`mobile`,`email`,`city`,`website`,`alter_mobile`,`status`,`admin_id` from `calling_entry` where id='".$id."'  order by id='$admin_id'  desc";	
$result=mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
$html = '<div class="modal-header" >
 Update Calling Details
</div>
<div class="modal-body" >';
	$html .= '<div id="error-msg"></div><form method="post"  id="form-update-calling">
			<div class="box-body">	
		<div class="col-md-4">
				<div class="form-group">
				  <label for="username">Company Name</label>
				 <input type="hidden" name="tag_id" required class="form-control" />
				 <input type="text" name="comp_name" class="form-control"  value="'.$row['comp_name'].'"required/>
				</div> 
					</div>';
 $html .= '<div class="col-md-4">
				<div class="form-group">
				  <label for="username"> Agent Name</label>
				 <input type="text" name="agent_name" class="form-control" value="'.$row['agent_name'].'" required/>
				
				</div> 
			</div>';
 $html .= '<div class="col-md-4">
				<div class="form-group">
				  <label for="username">Address</label>
				 <input type="text" name="address"class="form-control" value="'.$row['address'].'" required/>
				 
				</div> 
			</div>';
 $html .= 	'<div class="col-md-4">
				<div class="form-group">
				  <label for="username">Mobile Number</label>
				 <input type="text" name="mobile"class="form-control" value="'.$row['mobile'].'" required/>
				 
				</div> 
			</div>';
 $html .= '<div class="col-md-4">
				<div class="form-group">
				  <label for="username">E-Mail</label>
				 <input type="email" name="email"class="form-control"  value="'.$row['email'].'"required/>
				 
				</div> 
			</div>';
 $html .= '<div class="col-md-4">
				<div class="form-group">
				   <label for="username">City</label>
				 <input type="text" name="city"class="form-control" value="'.$row['city'].'" required/>
				</div> 
			</div>';
 $html .= 	'<div class="col-md-4">
				<div class="form-group">
				  <label for="username">Website</label>
				 <input type="website" name="website"class="form-control"value="'.$row['website'].'" required/>
				</div> 
			</div>';
 $html .= '<div class="col-md-4">
				<div class="form-group">
				 <label for="username">Alternative Mobile Number</label>
				 <input type="text" name="alter_mobile"class="form-control" value="'.$row['alter_mobile'].'" required/>
				 <input type="hidden" name="updated_id" id="updated_id" value="'.$id.'" class="form-control"/>
				<input type="hidden" name="update_calling_admin_id" id="update_calling_admin_id" value="'.$admin_id.'" class="form-control"/>
				</div> 
			</div>';
 
	$html .=		'<div class="col-md-4">
				<div class="form-group">
				 <button href="#" type="button" id="update_calling" class="btn btn-success" style="margin-top:20px;">Update</button>
				</div>
			</div>';

$html .= '</div></div></form>';
			
echo $html;
echo"<div class='modal-footer'><button class='btn btn-info' type='button' data-dismiss='modal'>Close</button></div>";
}
 if(isset($_POST["update_calling_admin_id"])){
	$admin_id1=$_POST["update_calling_admin_id"];
	$tag_id=$_POST["updated_id"];
	$qry="select `id`,`tag_id`,`comp_name`,`agent_name`,`address`,`mobile`,`email`,`city`,`website`,`alter_mobile`,`status`,`admin_id` from `calling_entry` where id='$tag_id'";
  $select=mysqli_query ($con,$qry); 
  $que1=mysqli_fetch_array($select);
  if($que1['tag_id']==""){  
	  echo '<div class="alert alert-danger">Wrong Request</div>';
  }else{
	  $calling=mysqli_query ($con,"update `calling_entry` set comp_name='".$_POST['comp_name']."',agent_name='".mysqli_real_escape_string($con,$_POST['agent_name'])."',address='".mysqli_real_escape_string($con,$_POST['address'])."',mobile='".$_POST['mobile']."',email='".$_POST['email']."',city='".$_POST['city']."',website='".$_POST['website']."',alter_mobile='".$_POST['alter_mobile']."' where id='".$tag_id."' && admin_id='".$admin_id1."'");
	  if ($calling){
		  echo '<div class="alert alert-success">Record Update Successfully</div>';
		  
	  }else {
		 echo '<div class="alert alert-danger">Record Not Update Successfully</div>';
	  }
	}
	
}

if(isset($_POST["view_stucture"])){
$admin_id=$_POST["update_admin_id"];
$id=$_POST["view_stucture"];	
$output = '';
$sql=  "select `id`,`tag_id`,`comp_name`,`agent_name`,`address`,`mobile`,`email`,`city`,`website`,`alter_mobile`,`status`,`admin_id` from `calling_entry` where id='".$id."'  order by id='$admin_id'  desc";	
$result=mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
$html = '<div class="modal-header" >
 View Calling Details
</div>
<div class="modal-body" >';
	$html .= '<div id="error-msg"></div><form method="post"  id="form-update-calling">
			<div class="box-body">	
		<div class="col-md-4">
				<div class="form-group">
				  <label for="username">Company Name</label>
				 <input type="hidden" name="tag_id" required class="form-control" />
				 <input type="text" name="comp_name" class="form-control"  value="'.$row['comp_name'].'" readonly/>
				</div> 
					</div>';
 $html .= '<div class="col-md-4">
				<div class="form-group">
				  <label for="username"> Agent Name</label>
				 <input type="text" name="agent_name" class="form-control" value="'.$row['agent_name'].'" readonly/>
				
				</div> 
			</div>';
 $html .= '<div class="col-md-4">
				<div class="form-group">
				  <label for="username">Address</label>
				 <input type="text" name="address"class="form-control" value="'.$row['address'].'" readonly/>
				 
				</div> 
			</div>';
 $html .= 	'<div class="col-md-4">
				<div class="form-group">
				  <label for="username">Mobile Number</label>
				 <input type="text" name="mobile"class="form-control" value="'.$row['mobile'].'" readonly/>
				 
				</div> 
			</div>';
 $html .= '<div class="col-md-4">
				<div class="form-group">
				  <label for="username">E-Mail</label>
				 <input type="email" name="email"class="form-control"  value="'.$row['email'].'" readonly/>
				 
				</div> 
			</div>';
 $html .= '<div class="col-md-4">
				<div class="form-group">
				   <label for="username">City</label>
				 <input type="text" name="city"class="form-control" value="'.$row['city'].'" readonly/>
				</div> 
			</div>';
 $html .= 	'<div class="col-md-4">
				<div class="form-group">
				  <label for="username">Website</label>
				 <input type="website" name="website"class="form-control"value="'.$row['website'].'" readonly/>
				</div> 
			</div>';
 $html .= '<div class="col-md-4">
				<div class="form-group">
				 <label for="username">Alternative Mobile Number</label>
				 <input type="text" name="alter_mobile"class="form-control" value="'.$row['alter_mobile'].'" readonly/>
				 <input type="hidden" name="updated_id" id="updated_id" value="'.$id.'" class="form-control"/>
				<input type="hidden" name="update_calling_admin_id" id="update_calling_admin_id" value="'.$admin_id.'" class="form-control"/>
				</div> 
			</div>';
 
	

$html .= '</div></div></form>';
			
echo $html;
echo"<div class='modal-footer'><button class='btn btn-info' type='button' data-dismiss='modal'>Close</button></div>";
}
?>

 