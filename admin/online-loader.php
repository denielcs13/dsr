<?php include 'include/header.php';?>
<div class="content-wrapper">

<section class="content-header">
<div class="row">
<div class="col-md-12">
 <h1>
     Destinaro Tourism File No.( <?=$_GET["file"];?> )
       
      </h1>
	  </div>
	  </div>
	  </section>
	  <section class="content">
	  <div class="row">
<div class="col-md-12">
<div class="box box-primary">

<div class="box-body">
 
 <style>
  input{  max-width: 85px;}
   .inp{  max-width: 50px;}
 </style>
<?php	$admin_id=$_GET["admin"];
	$file_id=$_GET["file"];
	$rf_id=$_GET["query"];
	$online_dsr=$con->query("SELECT DISTINCT(dsr_status) FROM `online_dsr` where admin_id1='".$_GET["admin"]."' && query_id1='".$_GET["query"]."' && file_no='".$_GET["file"]."' order by dsr_status desc");
	
	if($online_dsr->num_rows>0){
	echo '<div class="row">';
	echo "<table border='1' class='table table-hover table-bordered table-striped'>
<tr style='background-color:#DF5D58; color:#fff;'>
<th>Online Loader </th><th colspan='2'>Action</th></thead>";	
	$cnt=1;
	while($get_data=$online_dsr->fetch_assoc()){
		echo '<tr><td>Loader '.$get_data["dsr_status"].'</td><td><a href="report-edit.php?admin='.$_GET['admin'].'&query='.$_GET['query'].'&file='.$_GET['file'].'&load='.$get_data["dsr_status"].'" class="btn btn-info" ><i class="fa fa-pencil-square"></i>  Edit Loader</a></td> <td><a href="#" id="view_dsr" class="btn btn-warning" data-revised_status="'.$get_data["dsr_status"].'" data-file_no="'.$file_id.'" data-qid="'.$rf_id.'" data-admin_id="'.$admin_id.'" ><i class="fa fa-eye" ></i> View </a></td></tr>';
		$result_dsr=$con->query("select day,date,sector_code_id,sector_code,sector_code_name,itinerary,itinerary_desc,hotel_name,meal_plan,no_rooms,dbl_rate,ext_bed_rate,cwb_rate,cnb_rate,vehicle1,vehicle1_no,vehicle1_rate,vehicle2,vehicle2_no,vehicle2_rate from online_dsr where   file_no='".$file_id."' && admin_id1='".$admin_id."' && query_id1='".$rf_id."' && dsr_status='".$get_data["dsr_status"]."' order by day asc");
		echo '<tr id="show_data_all" style="display:none;"><td colspan="3" >';
		if($result_dsr->num_rows>0){
	//$result_dsr_rest=$con->query("select no_dbl,no_ext,no_cwb,no_cnb,cpp_dbl,cpp_ext,	cpp_cnb,cpp_cwb,vehicle_pax,cpp_dbl_gst,cpp_ext_gst,cpp_cnb_gst,cpp_cwb_gst,	cpp_dbl_gt,	cpp_ext_gt,cpp_cnb_gt,cpp_cwb_gt,grand_total from online_dsr_rest where file_id='".$file_id."' && admin_id='".$admin_id."' && query_id='".$rf_id."' && online_dsr_status='".$get_data["dsr_status"]."'")->fetch_assoc();
	
	echo '<table border="1" class="table table-hover table-bordered table-striped" id="submit_table"><thead>
 <tr><th >Day</th><th >Date</th><th >Sector Code</th><th >Hotel Name</th><th >MealPlan</th><th >Room</th><th >Dbl Rate</th><th >Ext. Bed Rate</th><th >CWB</th><th >CNB</th><th colspan="3" style="text-align: center;">Option 1<table border="1" class="table table-hover table-bordered table-striped">  <thead><tr ><th>vehicle</th><th>No. of vehicle</th><th>Rate</th></tr> </thead></table></th><th colspan="3" style="text-align: center;">Option 2 <table border="1" class="table table-hover table-bordered table-striped">  <thead><tr ><th>vehicle</th><th>No. of vehicle</th><th>Rate</th></tr> </thead></table></th></tr>
 </thead>';
 
while($data_list=$result_dsr->fetch_assoc()){
 echo '<tr><td>'.$data_list["day"].'</td><td>'.date('d-m-Y',strtotime($data_list["date"])).'</td><td>'.$data_list["sector_code"].'</td><td>'.$data_list["hotel_name"].'</td><td>'.$data_list["meal_plan"].'</td><td>'.$data_list["no_rooms"].'</td><td>'.$data_list["dbl_rate"].'</td><td>'.$data_list["ext_bed_rate"].'</td><td>'.$data_list["cwb_rate"].'</td><td>'.$data_list["cnb_rate"].'</td><td>'.$data_list["vehicle1"].'</td><td>'.$data_list["vehicle1_no"].'</td><td>'.$data_list["vehicle1_rate"].'</td><td>'.$data_list["vehicle2"].'</td><td>'.$data_list["vehicle2_no"].'</td><td>'.$data_list["vehicle2_rate"].'</td></tr>';
 }
echo '</table>';
		}else{
		echo  '<div class="alert alert-danger"> Result Not Found </div>';	
		}
echo '</td></tr>';
		
		
		$cnt++;
	}
	echo '</table>';
	}else{
		 echo  '<div class="alert alert-danger"> Result Not Found </div>';
	}
	
	?>
</div>
</div>
</div>
</div>
</div>
	</section>
	</div>
<?php include 'include/footer.php';?>
<script src="dist/js/function.js" ></script>
<script>$("body").on("click","#view_dsr",function(){
$("tr#show_data_all").css("display","none");	
$(this).parent().parent().next('tr#show_data_all').show();
});
</script>