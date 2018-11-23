<?php include '../include/database.php';  

if(isset($_POST['approved_fn'])){

    $file_id=$_POST['approved_fn'];

    $admin_id=$_POST['approved_admin_id'];

    $approved_id=$_POST['approved_qid'];

    $approved_dsr2=$con->query("SELECT DISTINCT(dsr_status) FROM `online_dsr` where admin_id1='".$admin_id."' && query_id1='".$approved_id."' && file_no='".$file_id."' order by dsr_status desc");

}


if(isset($_POST["view_stucture_rf"])){

	$file_id=$_POST["view_stucture_rf"];

	$admin_id=$_POST["view_stucture_rf_admin_id"];

	$rf_id=$_POST["view_stucture_rf_id"];

	$online_dsr=$con->query("SELECT DISTINCT(dsr_status) FROM `online_dsr` where admin_id1='".$admin_id."' && query_id1='".$rf_id."' && file_no='".$file_id."' order by dsr_status desc");

	?>

<div class="modal-header" >

<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>

 Reply Format <?= $file_id; ?>

</div>

<div class="modal-body" >

	<div id="error-msg"></div>
	
	<?php

	if($online_dsr->num_rows>0){

	echo '<div class="row"><div class="col-md-12"><input type="email" required class="form-control" id="guest_email_id" placeholder ="Customer Email Address" /></div>';

	echo "<div class='col-md-12'><table border='1' class='table table-hover table-bordered table-striped'>
	<tr style='background-color:#DF5D58; color:#fff;'>
	<th>Reply Format </th><th colspan='4'>Action</th></thead>";	
	$cnt=1;
	while($get_data=$online_dsr->fetch_assoc()){

		$booking_account=$con->query("SELECT payment_status FROM `booking_account` where admin_id='".$admin_id."' && query_id='".$rf_id."' && filenumber='".$file_id."' && dsr_status='".$get_data["dsr_status"]."' order by dsr_status desc")->fetch_assoc();

		echo '<tr><td>Revised '.$get_data["dsr_status"].'</td><td><a href="#" id="send_mail" class="btn btn-success " data-revised_status="'.$get_data["dsr_status"].'" data-file_no="'.$file_id.'" data-qid="'.$rf_id.'" data-admin_id="'.$admin_id.'">Send Mail</a></td><td><a href="#" id="view_dsr" class="btn btn-warning" style="background-color: #444cdb;border-color: #444cdb;" data-revised_status="'.$get_data["dsr_status"].'" data-file_no="'.$file_id.'" data-qid="'.$rf_id.'" data-admin_id="'.$admin_id.'" >View </a></td>';

		if(!empty($booking_account)){

		$payment_status=($booking_account["payment_status"]=='1')?'<a href="#" class="btn btn-success" id="approved" data-revised_status="'.$get_data["dsr_status"].'" data-file_no="'.$file_id.'" data-qid="'.$rf_id.'" data-admin_id="'.$admin_id.'">Approved':(($booking_account["payment_status"]=='2')?'<a href="#" class="btn btn-danger">Reject':'<a href="#" class="btn btn-info">No Action');

		  echo '<td>'.$payment_status.'</a></td>

		<td></td>';

		}else{

		echo '<td><a href="#" id="dsr_action" class="btn btn-success" style="background-color: #f39c12;border-color: #f39c12;"  data-revised_status="'.$get_data["dsr_status"].'" data-file_no="'.$file_id.'" data-qid="'.$rf_id.'" data-admin_id="'.$admin_id.'" data-action="approved">Approve</a></td>

		<td><a href="#" id="dsr_action" class="btn btn-danger"  data-revised_status="'.$get_data["dsr_status"].'" data-file_no="'.$file_id.'" data-qid="'.$rf_id.'" data-admin_id="'.$admin_id.'" data-action="reject">Rejected</a></td>';

		}
		echo '</tr>';
		$result_dsr=$con->query("select day,date,sector_code_id,sector_code,sector_code_name,itinerary,itinerary_desc,hotel_name,meal_plan,no_rooms,dbl_rate,ext_bed_rate,cwb_rate,cnb_rate,vehicle1,vehicle1_no,vehicle1_rate,vehicle2,vehicle2_no,vehicle2_rate from online_dsr where   file_no='".$file_id."' && admin_id1='".$admin_id."' && query_id1='".$rf_id."' && dsr_status='".$get_data["dsr_status"]."' order by day asc");

		echo '<tr id="show_data_all" style="display:none;"><td colspan="5" >';

		if($result_dsr->num_rows>0){
		echo '<table border="1" class="table table-hover table-bordered table-striped" id="submit_table"><thead>

 <tr><th >Day</th><th >Date</th><th>Sector Code</th><th >Hotel Name</th><th >MealPlan</th><th >Room</th><th >Dbl Rate</th><th >Ext. Bed Rate</th><th >CWB</th><th >CNB</th><th colspan="3" style="text-align: center;">Option 1<table border="1" class="table table-hover table-bordered table-striped">  <thead><tr ><th>vehicle</th><th>No. of vehicle</th><th>Rate</th></tr> </thead></table></th><th colspan="3" style="text-align: center;">Option 2 <table border="1" class="table table-hover table-bordered table-striped">  <thead><tr ><th>vehicle</th><th>No. of vehicle</th><th>Rate</th></tr> </thead></table></th></tr>

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

	echo '</table></div></div>';

	}else{

		 echo  '<div class="alert alert-danger"> Result Not Found </div>';

	}

	

	?>
</div>
	
	

	<?php
}

if(isset($_POST["send_mail_rev_fn"])){

	$file_id=$_POST["send_mail_rev_fn"];

	$admin_id=$_POST["send_mail_rev_admin_id"];

	$rf_id=$_POST["send_mail_rev_qid"];

	$res_status=$_POST["send_mail_rev_status"];

	$email=$_POST["send_mail_email"];

	$online_dsr=$con->query("SELECT * FROM `online_dsr` where admin_id1='".$admin_id."' && query_id1='".$rf_id."' && file_no='".$file_id."' && dsr_status='".$res_status."' order by day asc");

	$body='<div class="row"><div class="col-md-12"><table style="width: 100%;" border="1"><thead><tr><th colspan="3"><img src="http://demo.c2shub.com/destinaro1/admin/dist/img/logo2.png" style="height:100px;"</th><th colspan="3" style="text-align:right">Destinaro Tourism</th></tr><tr><th >Date</th><th >Hotel Name</th><th >MealPlan</th><th >Room</th><th >Itinerary</th></tr></thead>';

	while($data_show=$online_dsr->fetch_assoc()){

	$body .= '<tr><td>'.date("d/M/Y",strtotime($data_show["date"])).'</td><td>'.$data_show["hotel_name"].'</td><td>'.$data_show["meal_plan"].'</td><td>'.$data_show["no_rooms"].'</td><td style="    width: 100%;">Day '.$data_show["day"].' - '.$data_show["itinerary_desc"].'</td></tr>';	

	}

	$online_dsr_rest=$con->query("SELECT * FROM `online_dsr_rest` where admin_id='".$admin_id."' && query_id='".$rf_id."' && file_id='".$file_id."' && online_dsr_status='".$res_status."' ");

	$body .= '<tr><td colspan="5" style="padding: 10px;"></td></tr>';

	while($data_show_rest=$online_dsr_rest->fetch_assoc()){

	$body .= '<tr><td colspan="2">Per Person Cost (Double)<br/>'.$data_show_rest["cpp_dbl_gt"].'</td><td >Per Person Cost (Ext. Bed)'.$data_show_rest["cpp_ext_gt"].'</td><td >Per Person Cost (CNB)<br/>'.$data_show_rest["cpp_cnb_gt"].'</td><td style="width: 25%;">Per Person Cost (CWB)'.$data_show_rest["cpp_cwb_gt"].'</td></tr>';	

	}	

	$body .= '<tfoot><tr><td colspan="5">Thanks & Regards<br/>Destinaro Tourism</td></tr></tfoot></table></div></div>';

	 $body;

	 $sub="Mail From Destinaro Tourism";

	$inputEmail ="info@destinarotourism.com";

	$headers = "MIME-Version: 1.0" . "\r\n";

	$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

	$headers .= 'From: <'.$inputEmail.'>' . "\r\n";

	$headers .= "Reply-To: ".$inputEmail."\r\n";

	$headers .= "Return-Path:  ".$inputEmail."\r\n";

	$headers .= 'Bcc: shwetachaurasiya9@gmail.com' . "\r\n";

	if(mail($email,$sub,$body,$headers)){

		echo '<fieldset><div class="form-group is-empty">

	  <label for="inputName" class="col-md-12 control-label" style="color:green !important;">Mail send successfully</label>

	</div></fieldset>';	

	}else{

		echo '<fieldset><div class="form-group is-empty">

	  <label for="inputName" class="col-md-12 control-label" style="color:red !important;">Mail is not Sended Successfully</label>

	</div></fieldset>';

	}

	

}



if(isset($_POST["account_rf_admin_id"])){

	$file_id=$_POST["account_rf"];

	$admin_id=$_POST["account_rf_admin_id"];

	$rf_id=$_POST["account_rf_id"];

	$status=$_POST["account_revised_status"];

	$account_action=$_POST["account_action"];

	if($account_action=='approved'){

	$insert=$con->query( "insert into booking_account (payment_status	,admin_id,	filenumber,	dsr_status,query_id) value ('1','".$admin_id."','".$file_id."','".$status."','".$rf_id."')");	

	}else if($account_action=='reject'){

	$insert=$con->query("insert into booking_account (payment_status	,admin_id,	filenumber,	dsr_status,query_id) value ('2','".$admin_id."','".$file_id."','".$status."','".$rf_id."')");

	}	

	if($insert){

		echo 1;

	}else{

		 echo  '<div class="alert alert-danger"> Record not Updated Successfully</div>';

	}

} 

?>