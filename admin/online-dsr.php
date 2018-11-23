<?php include 'include/header.php';

 ?>

 <div class="content-wrapper">

    <!-- Content Header (Page header) -->

    <section class="content-header">

      <h1>

       Online DSR

        <small>Control panel</small>

      </h1>

      <ol class="breadcrumb">

        <li><a href="#"><i class="fa fa-gallery"></i> Home</a></li>

        <li class="active"> Online DSR</li>

      </ol>

    </section>

	<section class="content">

     <div class="row"> 

	 <div class="col-md-12"> 

	 <div class="box box-primary"> 

		<form method="get" action="" >

			<div class="box-body">

			<div class="col-md-3">

				<div class="form-group">

				  <label for="username">File Number</label>

				 <input type="search" name="search" class="form-control" />

				

				</div> 

			</div>

			<div class="col-md-3">

				<div class="form-group">

				  <label for="username">Company Name</label>

				 <input type="search" name="company_name" class="form-control"  />

				

				</div> 

			</div>

			<div class="col-md-3">

				<div class="form-group">

				  <label for="username">Agent Name</label>

				 <input type="search" name="agent_name" class="form-control"  />

				

				</div> 

			</div>

			<div class="col-md-3">

				<div class="form-group">

				 <input type="submit" value="Search" class="btn btn-info" style="margin-top:20px;">

				</div>

			</div>	

		</div>

		</form>

		</div>

		</div>

		</div>

			<div class="row">

<?php

if(isset($_GET["search"])) {
	
  $file_number = $con->real_escape_string($_GET["search"]);

  $company_name = $con->real_escape_string($_GET["company_name"]);

  $agent_name = $con->real_escape_string($_GET["agent_name"]);

  $filter=array();

  if(!empty($file_number)){

	  $filter[]="file_number like '%".$file_number."%'";

  }

  if(!empty($agent_name)){

	  $filter[]="calling_entry.agent_name like '%".$agent_name."%'";

  }

  if(!empty($company_name)){

	  $filter[]="float_query.cust_name like '%".$company_name."%'";

  }

  if(!empty($filter)){

	 $filter1=  " && (".implode(" || ",$filter).")";

  }

  $result1=$con->query("select float_query. `id`,calling_entry.`tag_id`,calling_entry.agent_name,file_number,float_query.admin_id,float_query.`cust_name`,float_query.`mobile`,float_query.`email`,float_query.`city`,float_query.`packages`,float_query.`duration`,float_query.`packages_city`,float_query.`start_date`,float_query.`end_date`,float_query.`total_pax`,float_query.`status` from float_query left outer join calling_entry on calling_entry.tag_id=float_query.agent_tag_id where float_query.admin_id='$admin_id'  && file_number !='' ".$filter1." order by float_query.id  desc");

 if($result1->num_rows>0){

     echo "<table border='1' class='table table-hover table-bordered table-striped'>

<tr style='background-color:#DF5D58; color:#fff;'>

<th>File Number</th>

<th>Company Name</th>

<th>Agent Name</th>

<th>Mobile Number</th>

<th>Destination</th>

<th>Travel Start Date</th>

<th>Revised</th>

<!--th>MealPlan</th>

<th>Booking Amount</th>

<th>Received Amount</th>

<th>Due Amount</th-->

<th colspan='2'>Status</</th>

</tr>";

$count=0;

	 while($row=$result1->fetch_assoc()){

		 $online_dsr=$con->query("SELECT DISTINCT(dsr_status) FROM `online_dsr` where admin_id1='".$row['admin_id']."' && file_no='".$row['file_number']."' && query_id1='".$row['id']."'")->num_rows;

		 $t_id=$row["tag_id"];

		 $ag_n=$row["agent_name"];

		 $mob=$row["mobile"];

		 $city=$row["packages_city"];


		echo "<tr class='danger'><td> ".$row['file_number']."</td><td> ".$row["cust_name"]."</td><td> $ag_n</td><td>$mob</td><td>$city</td><td>".$row['start_date']."</td><td>".$online_dsr."</td><!--td></td><td></td><td></td-->";

		if($online_dsr>0){

		echo "<td><a class='btn btn-success' data-toggle='modal' data-target='#myModal' id='reply_format' data-admin_id='".$row['admin_id']."' data-self_id='".$row['file_number']."' data-qid='".$row['id']."'>REPLY FORMAT</a></td><td><a class='btn btn-info' href='online-loader.php?admin=".$row['admin_id']."&query=".$row['id']."&file=".$row['file_number']."'>ONLINE LODER</a></td>";	

		}else{

		echo "<td colspan='2'><a class='btn btn-warning' href='report.php?admin=".$row['admin_id']."&query=".$row['id']."&file=".$row['file_number']."'>Update Itinerary</a></td>";

			}

		echo "</tr>"; 		

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

<div class="modal-dialog modal-lg" style="width: 90%;">

<div class="modal-content" >

</div>

</div>

</div>

 

 <?php include 'include/footer.php';?>

 <script>
 var a_url='ajaxpages/online-dsr.php';

 $("body").on("click","#dsr_action",function(){ 

	var response_dsr=$("#error-msg");

	var actiondata=$(this).data("action");

	var conf = confirm("Are you sure you want to "+actiondata+" ?");

    if(conf == true){

	var thisvalue=$(this);

	var sendthisvalue=thisvalue.parent().parent('tr');

	thisvalue.css('display','none');

      var a_request="account_rf="+thisvalue.data("file_no")+"&account_rf_admin_id="+thisvalue.data("admin_id")+"&account_rf_id="+thisvalue.data("qid")+"&account_revised_status="+thisvalue.data("revised_status")+"&account_action="+thisvalue.data("action");

	delete_data(a_url,a_request,response_dsr,sendthisvalue);

	thisvalue.css('display','block');

    }

	});

	var a_response=$(".modal-content");
	
	$("body").on("click","#reply_format",function(){ 

	var a_request="view_stucture_rf="+$(this).data("self_id")+"&view_stucture_rf_admin_id="+$(this).data("admin_id")+"&view_stucture_rf_id="+$(this).data("qid");

	fetch_data(a_url,a_request,a_response);

	});




	$("body").on("click","#send_mail",function(){

		var respon=$("#error-msg");

	if($("#guest_email_id").val()==''){

		respon.html('<div class="alert alert-danger"> Please Put Email ID</div>');

	}else{

	var a_request="send_mail_rev_fn="+$(this).data("file_no")+"&send_mail_rev_admin_id="+$(this).data("admin_id")+"&send_mail_rev_qid="+$(this).data("qid")+"&send_mail_rev_status="+$(this).data("revised_status")+"&send_mail_email="+$("#guest_email_id").val();

	fetch_data(a_url,a_request,respon);

	$("#guest_email_id").val('')

	}

	});

$("body").on("click","#view_dsr",function(){

$("tr#show_data_all").css("display","none");	

$(this).parent().parent().next('tr#show_data_all').show();

});

	</script>

	<script src="dist/js/function.js" ></script>

	<!--script src="dist/js/view-dsr.js" ></script-->