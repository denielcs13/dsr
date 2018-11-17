<?php include 'include/header.php';
 
 ?>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Add New DSR
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-gallery"></i> Home</a></li>
        <li class="active">Add New DSR</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
     <div class="row"> 
	 <div class="col-md-12"> 
	 <div class="box box-primary"> 
 
		<form method="post" >
			<div class="box-body">
			<div class="col-md-4">
				<div class="form-group">
				  <label for="username"> Hotel Name</label>
				   <input type="hidden" name="tag_id"  class="form-control"/>
				 <input type="text" name="hotel_name" class="form-control" required/>
				
				</div> 
			</div>
			
			<div class="col-md-4">
				<div class="form-group">
				  <label for="username"> Meal Plan</label>
				 <input type="text" name="meal_plan" class="form-control" required/>
				
				</div> 
			</div>
			<div class="col-md-4">
				<div class="form-group">
				 <label for="username">Number of days</label>				
				 <select class="form-control" id="change_days">				  
				  <option value="1"> 1</option>
				  <option value="2"> 2</option>
				  <option value="3"> 3</option>				  
				</select>
				</div> 
			</div>
			<div id="no_of_days"></div>
			<div class="col-md-4">
				<div class="form-group">
				  <label for="username">Rates</label>
				 <input type="number" name="rates" class="form-control" required/>
				 
				</div> 
			</div>
			<div class="col-md-4">
				<div class="form-group">
				  <label for="username">Total Pax</label>
				 <input type="number" name="pax"class="form-control" maxlength="10" required/>
				 
				</div> 
			</div>
			<div class="col-md-4">
				<div class="form-group">
				  <label for="username">Child with bed</label>
				 <input type="number" name="child_with_bed" class="form-control" maxlength="10" required/>
				 
				</div> 
			</div>
				<div class="col-md-4">
				<div class="form-group">
				  <label for="username">Child without bed</label>
				 <input type="number" name="child_without_bed" class="form-control" maxlength="10" required/>
				 
				</div> 
			</div>
		
			<div class="col-md-4">
				<div class="form-group">
				  <label for="username">Extra Bed</label>
				 <input type="number" name="extra_bed"class="form-control" maxlength="10" required/>				 
				</div> 
				</div> 
			
			<div class="col-md-4">
				<div class="form-group">
				  <label for="username">Per Pax Cost</label>
				 <input type="number" name="per_pax_cost"class="form-control" required/>
				  <input type="hidden" name="admin_id"/>
				</div> 
				</div>

           <div class="col-md-4">
				<div class="form-group">
				  <label for="username">Total Pricing</label>
				 <input type="number" name="total_pricing"class="form-control" required/>
				  <input type="hidden" name="admin_id"/>
				</div> 
				</div>

           <div class="col-md-4">
				<div class="form-group">
				  <label for="username">GST</label>				  
				  <select type="number" name="gst" class="form-control" required="">
					<option value="select">Select</option>
					<option value="18%"> 18%</option>
					<option value="28%"> 28%</option>
				 </select>
				  <input type="hidden" name="admin_id"/>
				</div> 
				</div>

           <div class="col-md-4">
				<div class="form-group">
				  <label for="username">Grand Total</label>
				 <input type="number" name="grand_total"class="form-control" required/>
				  <input type="hidden" name="admin_id"/> 
				</div> 
				</div>   				
				
			</div>
			<div class="col-md-4">
				<div class="form-group">
				 <input type="submit" name="add" value="Add New DSR" class="btn btn-success" style="margin-top:20px;">
				</div>
			</div>
			</div>
		</form>
		</div>
		</div>
 
  
	</section>
    <!-- /.content -->
  </div>

<?php
include 'include/footer.php';
?>
<script>
$(document).ready(function(){	
	
	$("body").on("change","#change_days",function(){ 
	var response='';
	for(var i=1;i<=$(this).val();i++){
		response +='<div class="col-md-4"><div class="form-group"><label for="username">Number of days</label><input type="text" class="form-control" ></div></div>';}
	$("#no_of_days").html(response);
	});
	
});
</script>
