<?php include 'include/header.php';
 $output = NULL;
 ?>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       New Lead
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-gallery"></i> Home</a></li>
        <li class="active">New Lead</li>
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
<?php
if(isset($_POST["submit"])) {
  $tag_id = $con->real_escape_string($_POST["search"]);
  $agent_name = $con->real_escape_string($_POST["search_agent"]);
  $mobile = $con->real_escape_string($_POST["search_mobile"]);
  $city = $con->real_escape_string($_POST["search_city"]);
  $company = $con->real_escape_string($_POST["companyname"]);
  $resultSet= $con->query("SELECT `tag_id`,`comp_name`,`agent_name`,`mobile`,`city`,id,admin_id FROM `calling_entry` WHERE tag_id like '%".$tag_id."%' And agent_name LIKE '%".$agent_name."%' And comp_name LIKE '%".$company."%' And mobile LIKE'%".$mobile."%'And city LIKE'%".$city."%'");
 if($resultSet->num_rows>0){
	   echo "<table border='1' class='table table-hover table-bordered table-striped'>
<tr style='background-color:#DF5D58; color:#fff;'>

<th>Tag Id</th>
<th>Agent Name</th>
<th>Mobile Number</th>
<th>City</</th>
<th>Make A Query</</th>
<th>Details</</th>
</tr>";
$count=0;
	 while($row=$resultSet->fetch_assoc()){
		 $t_id=$row["tag_id"];
		 $ag_n=$row["agent_name"];
		 $mob=$row["mobile"];
		 $city=$row["city"];
	echo "<tr class='danger'><td> $t_id</td>
				<td> $ag_n</td>
				<td>$mob</td>
				<td>$city</td><form method='post'>
				<td><button type='button' id='addlead' name='addlead'  class='btn btn-success'  data-toggle='modal' data-target='#myModal'  data-self_id='".$row['tag_id']."'>Make A Query</button></td>
				<td><a href='view-client.php?tag_id=".$row["tag_id"]."' class='btn btn-info'>View</a></td>
				<input type='hidden' name='admin_id' id='admin_id'value='".$row['admin_id']."'/></form></tr>"; 		
		$count++;	
	 }
echo "</tr></table>";	 
	 
 }else{
	 echo  '<div class="alert alert-danger"> Result Not Found </div>';
 }
}


?>
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
<?php include 'include/footer.php';?>
<script>
$(document).ready(function(){
	var a_url='ajaxpages/addnewlead.php';
	var a_response=$(".modal-content");
	
	$("body").on("click","#addlead",function(){ 
	var a_request="insert_stucture="+$(this).data("self_id")+"&insert_client_id="+$("#admin_id").val();
	fetch_data(a_url,a_request,a_response);
	});
	 
	  $("body").on("click","#insert_newlead",function(){ 
	 var a_response1=$("#error-msg");
	 var update_from=new FormData($("#form-addlead-query")[0])
	 var a_request1=update_from;
	 insert_data(a_url,a_request1,a_response1);
	
	 });
	  $("body").on("click","#add_query",function(){ 
	 var a_response2=$("#error-update");
	 var update_from1=new FormData($("#form-addlead-query-update")[0])
	 var a_request2=update_from1;
	 insert_data(a_url,a_request2,a_response2);
	
	 });
});


</script>
<script src="dist/js/float-query.js"></script>
<script src="dist/js/function.js" ></script>