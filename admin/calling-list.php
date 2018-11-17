<?php include 'include/header.php';
 
 ?>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Calling List
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-gallery"></i> Home</a></li>
        <li class="active">Calling List</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
	 <div class="row"> 
	 <div class="col-md-12"> 
	 <div class="box box-primary"> 
		<form method="post" action="" >
			<div class="box-body">
			<div class="col-md-3">
				<div class="form-group">
				  <label for="companyname">Company Name</label>
				 <input type="search" name="companyname" class="form-control" />
				
				</div> 
			</div>
			<div class="col-md-3">
				<div class="form-group">
				  <label for="username">Tag Id</label>
				 <input type="search" name="search" class="form-control" />
				
				</div> 
			</div>
			<div class="col-md-3">
				<div class="form-group">
				  <label for="username">Agent Name</label>
				 <input type="search" name="search_agent" class="form-control" />
				
				</div> 
			</div>
			<div class="col-md-3">
				<div class="form-group">
				  <label for="username">Mobile</label>
				 <input type="search" name="search_mobile" class="form-control" maxlength="10" />
				
				</div> 
			</div>
			<div class="col-md-3">
				<div class="form-group">
				  <label for="username">City</label>
				 <input type="search" name="search_city" class="form-control" />
				
				</div> 
			</div>
			<div class="col-md-3">
				<div class="form-group">
				 <input type="submit" name="submit" value="Search" class="btn btn-info" style="margin-top:20px;">
				</div>
			</div>	
		</div>
		</form>
		</div>
		</div>
		</div>
     <div class="row"> 
	 <div class="col-md-12"> 
	 <div class="box box-primary table-responsive"> 
	<?php
	if(isset($_POST["submit"])) {
  $tag_id = mysqli_real_escape_string($con,$_POST["search"]);
  $agent_name = mysqli_real_escape_string($con,$_POST["search_agent"]);
  $mobile = mysqli_real_escape_string($con,$_POST["search_mobile"]);
  $city = mysqli_real_escape_string($con,$_POST["search_city"]);
  $company = mysqli_real_escape_string($con,$_POST["companyname"]);
  $sql="SELECT `id`,`tag_id`,`comp_name`,`agent_name`,`address`,`mobile`,`email`,`city`,`website`,`alter_mobile`,`status`,`admin_id` FROM `calling_entry` WHERE admin_id='".$admin_id."' && tag_id like '%".$tag_id."%' And agent_name LIKE '%".$agent_name."%' And mobile LIKE'%".$mobile."%' And comp_name LIKE'%".$company."%' And city LIKE'%".$city."%'";
  $result1= mysqli_query($con,$sql);
	/* }else{
	$sql1="select `id`,`tag_id`,`comp_name`,`agent_name`,`address`,`mobile`,`email`,`city`,`website`,`alter_mobile`,`status`,`admin_id`  from calling_entry where admin_id='".$admin_id."' order by id  desc";
	$result1=mysqli_query($con,$sql1);
	} */
	echo'<table class="table table-striped table-hover"><thead><tr><th colspan="6"></th><th><form action="calling-entry-download" method="post"><input type="submit" name="excel_docket" class="btn btn-info" style="margin-top:20px;" value="Download"></form></th></tr><tr style="background-color:#DF5D58; color:#fff;"><th>#</th><th>Tag Id</th><th>Name</th><th>E-mail</th><th>Mobile</th><th>Website</th><th colspan="2">Action</th></tr></thead>';
	$count= 0;
 while($row1 = mysqli_fetch_array($result1))
	 
 {
	  ++$count;
	echo '<tbody><tr>';
	echo '<td>'.$count.'</td>';
	echo'<td>' . $row1['tag_id'] .'</td>';
	echo'<td>' . $row1['agent_name'] .'</td>';
	echo'<td>' . $row1['email'] .'</td>';
	echo'<td>' . $row1['mobile'] .'</td>';
	echo'<td>' . $row1['website'] .'</td>';
	echo '<td><form method="post">
<button type="button" id="update" name="update"  class="btn btn-success"  data-toggle="modal" data-target="#myModal" data-self_id="'.$row1['id'].'" data-admin_id="'.$row1['admin_id'].'">Update</button>
<button type="button" id="view" name="update"  class="btn btn-info"  data-toggle="modal" data-target="#myModal" data-self_id="'.$row1['id'].'" data-admin_id="'.$row1['admin_id'].'">View</button>
</form>'. "</td>";
	
	echo '</tr></tbody>';
 }
 }
	echo'</table>';
	?>
	</div>
		</div>
	</div>

    </section>
    <!-- /.content -->
  </div>
<div class="modal fade" id="myModal" role="dialog" >
<div class="modal-dialog modal-lg" >
<div class="modal-content" >
</div>
</div>
</div>
<?php
include 'include/footer.php';
?>
<script>
$(document).ready(function(){
	var a_url='ajaxpages/calling-entry.php';
	var a_response=$(".modal-content");
	
	$("body").on("click","#update",function(){ 
	var a_request="update_stucture="+$(this).data("self_id")+"&update_admin_id="+$(this).data("admin_id");
	fetch_data(a_url,a_request,a_response);
	});
	$("body").on("click","#view",function(){ 
	var a_request="view_stucture="+$(this).data("self_id")+"&update_admin_id="+$(this).data("admin_id");
	fetch_data(a_url,a_request,a_response);
	});
	 a_url1='ajaxpages/calling-entry-update.php';
	 $("body").on("click","#update_calling",function(){ 
	 var a_response1=$("#error-msg");
	 var update_from=new FormData($("#form-update-calling")[0])
	 var a_request1=update_from;
	 insert_data(a_url,a_request1,a_response1);
	
	 });
	
});

</script>
<script src="dist/js/function.js" ></script>
  