<?php include '../include/database.php';

 if(isset($_POST["update_stucture"])){
$id=$_POST["update_stucture"];	
$output = '';
$sql=  "select `id`,`invoice_date`,`sac`,`order_no`,`invoice_id`,`cust_name`,`gst_value`,`cgst_value`,`sgst_value`,`total_amount`,`file_number` from `proforma_details` where id='".$id."'";	
$result=mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
$sac=$row['sac'];
$gst_value=$row['gst_value'];
$cgst_value=$row['cgst_value'];
$sgst_value=$row['sgst_value'];
$html = '<div class="modal-header" >
 Update Proforma Details
</div>
<div class="modal-body" >';
	$html .= '<div id="error-msg"></div><form method="post"  id="form-update-proforma">
			<div class="box-body">	
		<div class="col-md-4">
				<div class="form-group">
				  <label for="username">SAC NO.</label>
				 <input type="text" name="sac" class="form-control" value='.$sac.' required/>
				</div> 
		</div>';
		
    $html .='<div class="col-md-4">
				<div class="form-group">
				  <label for="username">IGST Value</label>
				 <input type="text" name="gst_value" id="gst_value" class="form-control" value='.$gst_value.' required/>
				 <input type="hidden" name="updated_id" id="updated_id" value="'.$id.'" class="form-control"/>
				</div> 
				</div>';
				
	 $html .='<div class="col-md-4">
				<div class="form-group">
				  <label for="username">CGST Value</label>
				 <input type="text" name="cgst_value" id="cgst_value" class="form-control" value='.$cgst_value.' required/>
				</div> 
				</div>';

	 $html .='<div class="col-md-4">
				<div class="form-group">
				  <label for="username">SGST Value</label>
				 <input type="text" name="sgst_value" id="sgst_value" class="form-control" value='.$sgst_value.' required/>
				</div> 
				</div>';

	$html .='<div class="col-md-4">
				<div class="form-group">
				 <button href="#" type="button" id="update_proforma_details" name="update_proforma_details" class="btn btn-success" style="margin-top:20px;">Update</button>
				</div>
			</div>';

$html .= '</div></div></form>';
			
echo $html;
echo"<div class='modal-footer'><button class='btn btn-info' type='button' data-dismiss='modal'>Close</button></div>";
}
 if(isset($_POST["updated_id"])){
	$tag_id=$_POST["updated_id"];
	 $qry="select `id`,`invoice_date`,`sac`,`order_no`,`invoice_id`,`cust_name`,`gst_value`,`cgst_value`,`sgst_value`,`total_amount`,`file_number` from `proforma_details` where id='$tag_id'";
  $select=mysqli_query ($con,$qry); 
  $que1=mysqli_fetch_array($select);
  if($que1['id']==""){  
	  echo '<div class="alert alert-danger">Wrong Request</div>';
  }else{
	  $calling=mysqli_query ($con,"update `proforma_details` set gst_value='".$_POST['gst_value']."',cgst_value='".$_POST['cgst_value']."', sgst_value='".$_POST['sgst_value']."',sac='".$_POST['sac']."' where id='".$tag_id."'");
	  if ($calling){
		  echo '<div class="alert alert-success">Proforma Update Successfully</div>';
		  
	  }else {
		 echo '<div class="alert alert-danger">Proforma Not Update Successfully</div>';
	  }
	}
	
}
?>

 
