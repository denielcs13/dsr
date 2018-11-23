<?php include 'include/header.php';
$tag_id=$_GET["tag_id"];
 ?>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Client Details
        <small>Control panel</small>
      </h1>
        <a href="new-lead.php" style="margin-left: 892px;
                   margin-top: -36px;" class="btn btn-warning">Back</a>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-gallery"></i> Home</a></li>
        <li class="active">Clients Query</li>
        
      </ol>
 </section>
 <section>
 <div class="row">
 <div class="col-md-12" id="error-pick-query">
 <?php
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
echo '<div class="alert alert-success">Your Query is Pick Up Successfully  With File Number <span style="ont-size: 20px;">'.$file_number.'.</span><br/>To Update Itinerary <a href="daily-service-report.php?admin='.$pick_query_admin_id.'&query='.$pick_query_id.'&file='.$file_number.'">Click Here.</a></h3>  </div>';
}else{
echo '<div class="alert alert-danger">Sorry Unable To Generate Query </div>';
}
}else{
	echo '<div class="alert alert-danger">Sorry Unable To Generate Query </div>';
}  
}
	 
	 ?> </div>
 <div class="col-md-12">
 <div class="box box-primary table-responsive"> 
 <?php
	$sql="select id,`tag_id`,`agent_name`,`mobile`,`email`,`city` from calling_entry where admin_id='".$admin_id."' && tag_id='".$tag_id."' order by id";
	
	$result=$con->query($sql);
if($result->num_rows>0){
	echo'<table class="table table-striped table-hover"><thead><tr style="background-color:#DF5D58; color:#fff;"><th>Tag Id</th><th>Name</th><th>E-mail</th><th>Mobile</th><th>City</th></tr></thead>';
$row=$result->fetch_assoc();
$tag_id=$row['tag_id'];
$agent_name=$row['agent_name'];
$email=$row['email'];
$mobile=$row['mobile'];
$city=$row['city'];
	echo '<tbody><tr>';
	echo'<td>' . $tag_id.'</td>';
	echo'<td>' . $agent_name.'</td>';
	echo'<td>' . $email.'</td>';
	echo'<td>' . $mobile.'</td>';
	echo'<td>' . $city.'</td>';
	echo '</tr></tbody>';
	//mysqli_free_result($row);
 	echo'</table>';
	?>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<?php
 $result1=$con->query("select float_query. `id`,float_query.`agent_tag_id`,float_query.admin_id,float_query.`cust_name`,float_query.`mobile`,float_query.`email`,float_query.`city`,float_query.`packages`,float_query.`duration`,float_query.`packages_city`,float_query.`start_date`,float_query.`end_date`,float_query.`total_pax`,float_query.`status` from float_query left outer join calling_entry on calling_entry.id=float_query.agent_tag_id where float_query.admin_id='$admin_id'   && file_number='' && float_query.agent_tag_id='".$tag_id."' order by float_query.id  desc");
 
 echo "<table border='1' class='table table-hover table-bordered table-striped'>
<tr style='background-color:#DF5D58; color:#fff;'>
<th>Agent Id</th>
<th>Customer Name</th>
<th>E-mail Id</th>
<th>Mobile Number</th>
<th>City</th>
<th>Packages</th>
<th>Duration</th>
<th>Packages City</</th>
<th>Start Date</th>
<th>End Date</th>
<th>Total Pax </th>
<th colspan='2'>Action</th>
</tr>";
 
 $count= 0;
 while($row1 = $result1->fetch_assoc())
	 
 {
	 ++$count;
	 echo "<tr class='danger'>"; 
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
}else{
	 echo  '<div class="alert alert-danger"> Result Not Found </div>';
}
 ?>
</div>
</div>

 </section>
 </div>
 <div class="modal fade" id="myModal" role="dialog" >
<div class="modal-dialog modal-lg" >
<div class="modal-content" >
</div>
</div>
</div>
 <?php include 'include/footer.php';
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