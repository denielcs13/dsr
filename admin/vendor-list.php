<?php include 'include/header.php'; ?>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Vendor  List
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-gallery"></i> Home</a></li>
        <li class="active">Vendor List</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
	 <div class="row"> 
	 <div class="col-md-12"> 
	 <div class="box box-primary"> 
		
			<div class="box-body">
			<form method="post" action="" >
			<div class="col-md-3">
				<div class="form-group">
				  <label for="username">Hotel Name</label>
				 <input type="search" name="search_hotel" class="form-control" />
				
				</div> 
			</div>
			<div class="col-md-3">
				<div class="form-group">
				  <label for="username">File Number</label>
				 <input type="search" name="search_file" class="form-control" />
				
				</div> 
			</div>
			<div class="col-md-3">
				<div class="form-group">
				  <label for="username">Phone No</label>
				 <input type="search" name="search_mobile" class="form-control" maxlength="10" />
				
				</div> 
			</div>
			<div class="col-md-3">
				<div class="form-group">
				  <label for="username">A/C NO</label>
				 <input type="search" name="search_account" class="form-control" />
				
				</div> 
			</div>
			<div class="col-md-3">
				<div class="form-group">
				 <input type="submit" name="submit" value="Search" class="btn btn-info" style="margin-top:20px;">
				</div>
			</div>	
		</form></div>
		
		</div>
		</div>
		</div>
     <div class="row"> 
	 <div class="col-md-12"> 
	 <div class="box box-primary table-responsive"> 
	<?php
	if(isset($_POST["submit"])) {
  $hotel_name = mysqli_real_escape_string($con,$_POST["search_hotel"]);
  $file_no = mysqli_real_escape_string($con,$_POST["search_file"]);
  $phone_no = mysqli_real_escape_string($con,$_POST["search_mobile"]);
  $account_no = mysqli_real_escape_string($con,$_POST["search_account"]);
  
  $sql="SELECT `id`,`hotel_name`,`file_no`,`phone_no`,`account_no`,`mail_id`,`status`,`admin_id`,`branch_name` FROM `vendor_payment` WHERE admin_id='".$admin_id."' && hotel_name like '%".$hotel_name."%' And file_no LIKE '%".$file_no."%' And phone_no LIKE'%".$phone_no."%'And account_no LIKE'%".$account_no."%'";
  $result1= mysqli_query($con,$sql);
	}else{
	$sql1="select `id`,`hotel_name`,`file_no`,`phone_no`,`account_no`,`mail_id`,`status`,`admin_id`,`branch_name`  from vendor_payment  where admin_id='".$admin_id."' order by id  desc";
	$result1=mysqli_query($con,$sql1);
	}
	echo'<form action="vendor-entry-download.php" method="post">
	<input type="submit" name="excel_docket" class="btn btn-info" style="    margin: 10px;
    float: right;" value="Download"><table class="table table-striped table-hover"><thead><tr><th colspan="6"></th><th>
	
	</th>
	</tr>
	<tr style="background-color:#DF5D58; color:#fff;">
	<th>#</th>
	<th>Select Box</th>
	<th>Hotel Name</th>
	<th>File No</th>
	<th>Mobile No</th>
	<th>Account No</th>		<th>Branch</th>
	<th>Email ID</th>
	<th colspan="2">Action </th>
	</tr>
	</thead>';
	
	$count= 0;
 while($row1 = mysqli_fetch_array($result1))
	 
 {
	  ++$count;
	  
	echo '<tbody><tr>';
	echo '<td>'.$count.'</td>';
	echo '<td><input type="checkbox" name="ch[]" value="'.$row1['id'] .'"></td>';
	echo'<td>' . $row1['hotel_name'] .'</td>';
	echo'<td>' . $row1['file_no'] .'</td>';
	echo'<td>' . $row1['phone_no'] .'</td>';
	echo'<td>' . $row1['account_no'] .'</td>';		echo'<td>' . $row1['branch_name'] .'</td>';
	echo'<td>' . $row1['mail_id'] .'</td>';
	echo '<td>
<button type="button" id="update" name="update"  class="btn btn-success"  data-toggle="modal" data-target="#myModal" data-self_id="'.$row1['id'].'" data-admin_id="'.$row1['admin_id'].'">Update</button>'. "</td>";
	
	echo '</tr></tbody>';
 }
	echo'</form></table>';
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
	var a_url='ajaxpages/vendor-entry.php';
	var a_response=$(".modal-content");
	
	$("body").on("click","#update",function(){ 
	var a_request="update_stucture="+$(this).data("self_id")+"&update_admin_id="+$(this).data("admin_id");
	fetch_data(a_url,a_request,a_response);
	});	 $("body").on("click","#update_calling",function(){ 	 	 var a_response1=$("#error-msg");	 	 var update_from=new FormData($("#form-update-vendor")[0])	 	 var a_request1=update_from;	 	 insert_data(a_url,a_request1,a_response1);		 });
});
</script>
<script src="dist/js/function.js" ></script>
  