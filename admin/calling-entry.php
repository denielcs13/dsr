<?php include 'include/header.php'; ?>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Calling Entry
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-gallery"></i> Home</a></li>
        <li class="active">Calling Entry</li>
      </ol>
    </section>
	<?php
	// Insert Calling-Entry
if (isset($_POST['add'])){	
$query = "SELECT tag_id,mobile,email FROM calling_entry ORDER BY id DESC";
$result = mysqli_query($con, $query);
$row_count = mysqli_num_rows($result);
$result2=mysqli_fetch_assoc($result);
$mobile1=$result2['mobile'];
$email1=$result2['email'];
//echo $row_count;
$top_id=array();
while($view_data_val=mysqli_fetch_array($result)){
	$max_value=explode("00000",$view_data_val["tag_id"]);
	//print_r($max_value);
	$top_id[]=$max_value[1];
	//print_r($top_id).'<br>';
}
//$insert_id=(max($top_id))+1;
//echo $insert_id;
$insert_id = $row_count + 1;
//echo $insert_id;
$tag_id= "DNT". sprintf("%06d", $insert_id);
$comp_name=$_POST['comp_name'];
$agent_name=$_POST['agent_name'];
$address=$_POST['address'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$city=$_POST['city'];
$website=$_POST['website'];
$alter_mobile=$_POST['alter_mobile'];
if(empty($comp_name) || empty($agent_name) || empty($address)  || empty($mobile) || empty($email)  || empty($city)  || empty($website) ){
echo"<script>alert('Required All Field');</script>";
}else{
	if(($mobile==$mobile1) || ($email==$email1)){
		echo '<div class="alert alert-danger">Email Id Or Mobile Number Is Allready Exists </div>';
	}
	else{
$insert="insert  into calling_entry(`tag_id`,`comp_name`,`agent_name`,`address`,`mobile`,`email`,`city`,`website`,`alter_mobile`,`status`,`admin_id`) values('$tag_id','$comp_name','$agent_name','$address','$mobile','$email','$city','$website','$alter_mobile','1','$admin_id')";
$ins=mysqli_query($con,$insert);
if (!empty($ins)){
echo '<div class="alert alert-success">Your File Is Successfully Added </div>';
}else{
echo '<div class="alert alert-danger">Sorry Unable To Added File </div>';
}
}
}
}

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
				  <label for="username"> Company Name</label>
				   <input type="hidden" name="tag_id"  class="form-control"/>
				 <input type="text" name="comp_name" class="form-control" required/>
				
				</div> 
			</div>
			
			<div class="col-md-4">
				<div class="form-group">
				  <label for="username"> Agent Name</label>
				 <input type="text" name="agent_name" class="form-control" required/>
				
				</div> 
			</div>
			<div class="col-md-4">
				<div class="form-group">
				  <label for="username">Address</label>
				 <input type="text" name="address"class="form-control" required/>
				 
				</div> 
			</div>
			<div class="col-md-4">
				<div class="form-group">
				  <label for="username">Mobile Number</label>
				 <input type="text" name="mobile"class="form-control" maxlength="10"required/>
				 
				</div> 
			</div>
			<div class="col-md-4">
				<div class="form-group">
				  <label for="username">*E-Mail</label>
				 <input type="email" name="email"class="form-control" required/>
				 
				</div> 
			</div>
			<div class="col-md-4">
				<div class="form-group">
				  <label for="username">City</label>
				 <input type="text" name="city"class="form-control" required/>
				 
				</div> 
			</div>
				<div class="col-md-4">
				<div class="form-group">
				  <label for="username">Website</label>
				 <input type="website" name="website"class="form-control" />
				 
				</div> 
			</div>
		
			<div class="col-md-4">
				<div class="form-group">
				  <label for="username">Alternative Mobile Number</label>
				 <input type="text" name="alter_mobile"class="form-control" maxlength="10"/>
				  <input type="hidden" name="admin_id"/>
				</div> 
				</div> 
			
			<div class="col-md-4">
				<div class="form-group">
				 <input type="submit" name="add" value="Add Calling Entry" class="btn btn-success" style="margin-top:20px;">
				</div>
			</div>
			</div>
			</div>
		</form>
		</div>
		</div>

	
 
  
	</section>
    <!-- /.content -->
  </div>

  <?php
include ('include/footer.php');
?>