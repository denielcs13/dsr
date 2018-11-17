<?php include 'include/header.php';?>
<div class="content-wrapper">

<section class="content-header">
<div class="row">
<div class="col-md-12">
 <h1>
     Destinaro Tourism 
       
      </h1>
	  </div>
	  </div>
	  </section>
	  <section class="content">
	  <div class="row">
<div class="col-md-12">
<div class="box box-primary">

<div class="box-body">

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
				 <input type="search" name="company_name" class="form-control" />
				
				</div> 
			</div>
			<div class="col-md-3">
				<div class="form-group">
				  <label for="username">Agent Name</label>
				 <input type="search" name="agent_name" class="form-control" />
				
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
<div class="col-md-12"> 
	 <div class="box box-primary table-responsive"> 
<?php
if(isset($_GET["search"])) {
 $file_number = $con->real_escape_string($_GET["search"]);
  $company_name = $con->real_escape_string($_GET["company_name"]);
  $agent_name = $con->real_escape_string($_GET["agent_name"]);
  $filter=array();
  if(!empty($file_number)){
	  $filter[]="file_id like '%".$file_number."%'";
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
  
 $result1=$con->query("select file_id, float_query.`id`,calling_entry.agent_name,float_query.`cust_name`,file_number from online_dsr_rest dsr  left outer join float_query on float_query.file_number=dsr.file_id left outer join calling_entry on calling_entry.tag_id=float_query.agent_tag_id  where dsr.admin_id='$admin_id' ".$filter1." order by dsr.id  desc"); 
 /*  $result1=$con->query("select float_query. `id`,calling_entry.`tag_id`,calling_entry.agent_name,file_number,float_query.admin_id,float_query.`cust_name`,float_query.`mobile`,float_query.`email`,float_query.`city`,float_query.`packages`,float_query.`duration`,float_query.`packages_city`,float_query.`start_date`,float_query.`end_date`,float_query.`total_pax`,float_query.`status` from float_query left outer join calling_entry on calling_entry.tag_id=float_query.agent_tag_id where float_query.admin_id='$admin_id'  && file_number !='' ".$filter1." order by float_query.id  desc"); */
 
if($result1->num_rows>0){
	   echo "<table border='1' class='table table-hover table-bordered table-striped'>
<tr style='background-color:#DF5D58; color:#fff;'>
<th>File Number</th>
<th>Company Name</th>
<th>Agent Name</th>
<th>Mobile Number</th>
<th>Destination</th>
<th>Travel Start Date</th>
<th>MealPlan</th>
<th>Booking Amount</th>
<th>Received Amount</th>
<th>Due Amount</th>
<th>Status</</th>
</tr>";
$count=0;

	 while($row=$result1->fetch_assoc()){
		 $t_id=$row["tag_id"];
		 $ag_n=$row["agent_name"];
		 $mob=$row["mobile"];
		 $city=$row["packages_city"];
		echo "<tr class='danger'><td> ".$row['file_number']."</td><td> ".$row["cust_name"]."</td><td> $ag_n</td><td>$mob</td><td>$city</td><td>".$row['start_date']."</td><td></td><td></td><td></td><td></td><td><a class='btn btn-success' href='report.php?admin=".$row['admin_id']."&query=".$row['id']."&file=".$row['file_number']."'>Update Itinerary</a></td></tr>"; 		
		$count++;	
	 }
echo "</tr></table>";	 
	 
 }else{
	 echo  '<div class="alert alert-danger"> Result Not Found </div>';
 }
}
  ?> 
  
	</div> 
		</div>
	</div>
</div>
</div>
	</section>
	
<?php include 'include/footer.php';?>