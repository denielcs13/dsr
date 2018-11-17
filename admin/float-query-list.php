<?php include 'include/header.php';
 
 ?>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
	<div class="row">
	<div class="col-md-12">
	<div class="col-md-4">
      <h3>Float Query List
        <small>Control Panel</small></h3>
	  </div>
	  <div class="col-md-5">
	  <div class="row">
	  <div class="col-md-9">
	 
<form action="" method="GET">
<input id="search" name="search" type="text" <?= (empty($_GET["search"]))?'placeholder="Type here"':'value="'.$_GET["search"].'"'; ?> class="form-control">
</div>
<div class="col-md-3">
<input id="submit" type="submit" value="Search" class="btn btn-info">
</form>
</div>
</div>
</div>
<div class="col-md-3">
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-gallery"></i> Home</a></li>
        <li class="active">Float Query List</li>		
      </ol>
  </div>
  </div>
  </div>
    </section>

    <!-- Main content -->
    <section class="content">
     <div class="row"> 
	 <div class="col-md-12" id="error-pick-query"> <?php
	 if(isset($_POST["pick_query"])){
$pick_query_id=$_POST["pick_query_id"];
$pick_query_admin_id=$_POST["pick_query_admin_id"];
$data_query="SELECT id,file_number,city FROM float_query where admin_id='$pick_query_admin_id'";
$data_query_file=$data_query." && file_number !='' order by id desc";
$view_data = $con->query($data_query_file);
$top_id=array();
while($view_data_val=$view_data->fetch_assoc()){
	$max_value=explode("0000",$view_data_val["file_number"]);
	$top_id[]=$max_value[1];
}
$insert_id=(max($top_id)+1);
$data_query1=$data_query." && id='".$pick_query_id."'";
$view_data1 = $con->query($data_query1)->fetch_assoc();
$file_number='DT'.strtoupper(substr($view_data1["city"],0,3)).'0000'.($insert_id);
$data_query3=$data_query." && file_number ='$file_number'";
$view_data3 = $con->query($data_query3)->fetch_assoc(); 
if(empty($view_data3)){
$update=$con->query("update  float_query set file_number='$file_number'  where admin_id='$pick_query_admin_id' && id='".$pick_query_id."' && file_number=''");
if($update){
echo '<div class="alert alert-success">Your Query is Pick Up Successfully  With File Number <span style="ont-size: 20px;">'.$file_number.'.</span><br/>To Update Itinerary <a href="report.php?admin='.$pick_query_admin_id.'&query='.$pick_query_id.'&file='.$file_number.'">Click Here.</a></h3>  </div>';
}else{
echo '<div class="alert alert-danger">Sorry Unable To Generate Query </div>';
}
}else{
	echo '<div class="alert alert-danger">Sorry Unable To Generate Query </div>';
}  
}
	 
	 ?></div> <div class="col-md-12"> 
	 <div class="box box-primary table-responsive"> 
<?php
if(!empty($_GET["search"])){
	$result1=mysqli_query($con, "select float_query. `id`,float_query.`agent_tag_id`,float_query.admin_id,float_query.`cust_name`,float_query.`mobile`,float_query.`email`,float_query.`city`,float_query.`packages`,float_query.`duration`,float_query.`packages_city`,float_query.`start_date`,float_query.`end_date`,float_query.`total_pax`,float_query.`status` from float_query left outer join calling_entry on calling_entry.id=float_query.agent_tag_id where float_query.admin_id='$admin_id'  && file_number=''  && float_query.agent_tag_id like '%".$_GET["search"]."%'  order by float_query.id  desc");
}else{
	$result1=mysqli_query($con, "select float_query. `id`,float_query.`agent_tag_id`,float_query.admin_id,float_query.`cust_name`,float_query.`mobile`,float_query.`email`,float_query.`city`,float_query.`packages`,float_query.`duration`,float_query.`packages_city`,float_query.`start_date`,float_query.`end_date`,float_query.`total_pax`,float_query.`status` from float_query left outer join calling_entry on calling_entry.id=float_query.agent_tag_id where float_query.admin_id='$admin_id'  && file_number='' order by float_query.id  desc");
}
 
 
 echo "<table border='1' class='table table-hover table-bordered table-striped'>
<tr style='background-color:#DF5D58; color:#fff;'>
<th>#</th>
<th>Agent Id</th>
<th>Company Name</th>
<th>E-mail Id</th>
<th>Mobile Number</th>
<th>City</th>
<th>Packages</th>
<th>Duration</th>
<th>Packages City</</th>
<th>Start Date</th>
<th>End Date</th>
<th>Total Pax </th>
<th colspan='2'>Update</th>
</tr>";
 
 $count= 0;
 while($row1 = mysqli_fetch_array($result1))
	 
 {
	 ++$count;
	 echo "<tr class='danger'>"; 
	 echo "<td>" .$count  . "</td>";
	 echo "<td>" .$row1['agent_tag_id']. "</td>";
 echo "<td>" . $row1['cust_name'] . "</td>";
echo "<td>" . $row1['email'] . "</td>";
echo "<td>" . $row1['mobile'] . "</td>";
echo "<td>" . $row1['city'] . "</td>";
echo "<td>" . $row1['packages'] . "</td>";
echo "<td>" . $row1['duration']. "-Day</td>";
echo "<td>" . $row1['packages_city'] . "</td>";
echo "<td>" . $row1['start_date'] . "</td>";
echo "<td>" . $row1['end_date'] . "</td>";
echo "<td>" . $row1['total_pax'] . "</td>";
echo '<td><form method="POST"><input type="hidden" name="pick_query_id" value="'.$row1['id'].'" ><input type="hidden" value="'.$row1['admin_id'].'" name="pick_query_admin_id"><input type="submit"  name="pick_query" class="btn btn-success" value="Pick Query"></form></td><td><form method="post">
<button type="button" id="update" name="update" class="btn btn-success" data-toggle="modal" data-target="#myModal" data-self_id="'. $row1['id'] .'"  data-admin_id="'. $row1['admin_id'] .'">Update</button></form>'. "</td>";

echo "</tr>";
}
echo "</table>";
 
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
	var a_url='ajaxpages/float-query-list.php';
	var a_response=$(".modal-content");	
	$("body").on("click","#update",function(){ 
	var a_request="update_stucture="+$(this).data("self_id")+"&update_admin_id="+$(this).data("admin_id");
	fetch_data(a_url,a_request,a_response);	
	});	
	 $("body").on("click","#update_float_query",function(){ 
	 var a_response1=$("#error-fq");
	 var update_from=new FormData($("#form-update-fq")[0])
	 var a_request1=update_from;
	 insert_data(a_url,a_request1,a_response1);	
	 });
});
</script>
<script src="dist/js/function.js" ></script>