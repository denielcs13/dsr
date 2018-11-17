<?php include 'include/header.php';  ?>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1> Office Expance List
      <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-gallery"></i> Home</a></li>
        <li class="active">  Office Expance List</li>
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
				  <label for="username">Voucher No</label>
				 <input type="search" name="search_Voucher" class="form-control" />
				</div> 
			</div>
			<div class="col-md-3">
				<div class="form-group">
				  <label for="username">Cheuqe No</label>
				 <input type="search" name="search_cheuqe" class="form-control" />
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
		
  $voucher_no = mysqli_real_escape_string($con,$_POST["search_Voucher"]);
  
  $cheuqe_no = mysqli_real_escape_string($con,$_POST["search_cheuqe"]);
  
  $sql="SELECT `id`,`date`,`voucher_no`,`voucher_date`,`particulers`,`payto`,`billno`,`payment_mode`,`cheuqe_no`,`amount`,`status`,`admin_id` FROM `office_expance` WHERE admin_id='".$admin_id."' && hotel_name like '%".$hotel_name."%' And file_no LIKE '%".$file_no."%' And phone_no LIKE'%".$phone_no."%'And account_no LIKE'%".$account_no."%'";
  $result1= mysqli_query($con,$sql);
	}else{
	$sql1="select `id`,`date`,`voucher_no`,`voucher_date`,`particulers`,`payto`,`billno`,`payment_mode`,`cheuqe_no`,`amount`,`status`,`admin_id`  from office_expance  where admin_id='".$admin_id."' order by id  desc";
	$result1=mysqli_query($con,$sql1);
	}
	
	echo'<form action="office_expance_download.php" method="post">
	<input type="submit" name="excel_docket" class="btn btn-info" style="margin: 10px;
    float: right;" value="Download"><table class="table table-striped table-hover">
	<thead>
	
	<tr style="background-color:#DF5D58; color:#fff;">
	<th>#</th>
	<th>Select Box</th>
	<th>Date</th>
	<th>Voucher No</th>
	<th>Voucher Date</th>
	<th>Particulers</th>
	<th>Pay To</th>
	<th>Bill No</th>
	<th>Payment Mode</th>
	<th>Cheuqe No</th>
	<th>Amount</th>
	<th colspan="2">Action</th>
	</tr>
	</thead>';
	$count= 0;
 while($row1 = mysqli_fetch_array($result1))
	 
 {
	  ++$count; 
	echo '<tbody><tr>';
	echo '<td>'.$count.'</td>';
	echo '<td><input type="checkbox" name="ch[]" value="'.$row1['id'] .'"></td>';
	echo'<td>' . $row1['date'] .'</td>';
	echo'<td>' . $row1['voucher_no'] .'</td>';
	echo'<td>' . $row1['voucher_date'] .'</td>';
	echo'<td>' . $row1['particulers'] .'</td>';
	echo'<td>' . $row1['payto'] .'</td>';
	echo'<td>' . $row1['billno'] .'</td>';
	echo'<td>' . $row1['payment_mode'] .'</td>';
	echo'<td>' . $row1['cheuqe_no'] .'</td>';
	echo'<td>' . $row1['amount'] .'</td>';
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
	var a_url='ajaxpages/calling-entry.php';
	var a_response=$(".modal-content");
	
	$("body").on("click","#update",function(){ 
	var a_request="update_stucture="+$(this).data("self_id")+"&update_admin_id="+$(this).data("admin_id");
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
  