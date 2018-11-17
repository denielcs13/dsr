<?php include 'include/header.php';
 
 ?>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
	<div class="row">
	<div class="col-md-12">
	<div class="col-md-4">
      <h3>Sector Code List
        <small>Control Panel</small></h3>
	  </div>
	  <div class="col-md-5">
	  <div class="row">
	  <div class="col-md-6">
	  	 
<form action="" method="GET">
<input id="search" name="search" type="text" <?= (empty($_GET["search"]))?'placeholder="Type here"':'value="'.$_GET["search"].'"'; ?> class="form-control">
</div>
<div class="col-md-3">
<input id="submit" type="submit" value="Search" class="btn btn-info">
</form>

</div>
<div class="col-md-3">
<button type="button" id="new_sector_query" name="new_sector_query" class="btn btn-success" data-toggle="modal" data-target="#myModal" data-self_id="0" data-admin_id="<?= $admin_id;?>"  data-backdrop="static" data-keyboard="false">Add Code</button>
</div> 
</div>
</div>
<div class="col-md-3">
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-gallery"></i> Home</a></li>
        <li class="active">Sector Code List </li>		
      </ol>
  </div>
  </div>
  </div>
    </section>

    <!-- Main content -->
    <section class="content">
	 <div class="row"> 
	 <div class="col-md-12" id="error-del"></div>
	 <div class="col-md-12"> 
	 <div class="box box-primary table-responsive"> 
<?php
if(!empty($_GET["search"])){
	$result1=$con->query("select `id`,sec_code,sec_name,itinerary,itinerary_desc,admin_id from sector_code where admin_id='$admin_id'  && sec_code like '%".$_GET["search"]."%' order by id  desc");
}else{
	$result1=$con->query("select `id`,sec_code,sec_name,itinerary,itinerary_desc,admin_id from sector_code where admin_id='$admin_id' order by id  desc");
}
 
 if($result1->num_rows>0){
 echo '<table class="table table-hover table-bordered table-striped"><thead><tr style="background-color:#DF5D58; color:#fff;">
<th>#</th> 
<th>Sector Code</th>
<th>Sector (Location)</th>
<th>Itinerary</th>
<th>Itinerary Descption</th>
<th colspan="2">Action</th>
</tr></thead><tbody>';
 
$cnt=1;
while($row_data=$result1->fetch_assoc()){
echo '<tr class="danger"><td>'.$cnt.'</td><td>'.$row_data["sec_code"].'</td><td>'.$row_data["sec_name"].'</td><td>'.$row_data["itinerary"].'</td><td>'.$row_data["itinerary_desc"].'</td><td><a data-toggle="modal" data-target="#myModal" id="edit-sec" data-self_id="'. $row_data['id'] .'"  data-admin_id="'. $row_data['admin_id'] .'" class="btn btn-success">Update</a></td><td><a href="#"  data-backdrop="static" data-keyboard="false" id="del-sec" data-sec_id="'.$row_data["id"].'" Class="btn btn-danger">Delete</a></td></tr> ';
$cnt++;
}
echo "</table>";
 }else{
	 echo '<div style="clear:both" class="alert alert-danger">No Record Found.</div>';
 }
 
  ?> 
  
	</div> 
		</div>
	</div>

    </section>
    <!-- /.content -->
  </div>

  <?php
include 'include/footer.php';
?>
<div class="modal fade" id="myModal" role="dialog" >
<div class="modal-dialog modal-lg" >
<div class="modal-content" >



</div>
</div>
</div>
<script>
$(document).ready(function(){
	var a_response=$(".modal-content");	
	var s_url='ajaxpages/sector-code.php';
	$("body").on("click","#new_sector_query",function(){ 
		var a_request="add_sec_code="+$(this).data("admin_id")+"&up_sec_code_id="+$(this).data("self_id");
		fetch_data(s_url,a_request,a_response);
	});
	$("body").on("click","#edit-sec",function(){ 
		var a_request="add_sec_code="+$(this).data("admin_id")+"&up_sec_code_id="+$(this).data("self_id");
		fetch_data(s_url,a_request,a_response);		 
	});
	$("body").on("click","#del-sec",function(){ 
		var thisval=$(this);
		var d_response=$("#error-del");
		var pack_id ="delete_sec_data="+ thisval.data("sec_id");
		var thisvalue=thisval.parent().parent();
		delete_data(s_url,pack_id,d_response,thisvalue);
	});
	$("body").on("click","#sector_query",function(){ 
	 var a_response1=$("#error-pq");
	 var update_from=new FormData($("#form-update-pq")[0])
	 var a_request1=update_from;
	 insert_data(s_url,a_request1,a_response1);	
	});
	$("body").on("click","#close_pack",function(){ 
	location.reload();
	});	
});
</script>
<script src="dist/js/function.js" ></script>