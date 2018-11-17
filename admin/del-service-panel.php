 <?php
include 'include/header.php';
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Service Panel
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-gallery"></i> Home</a></li>
        <li class="active">Service Panel</li>
      </ol>
    </section>
<section class="content">
     <div class="row"> 
	 <div class="col-md-12"> 
	 <div class="box box-primary table-responsive"> 
	 
		<form method="post" >
			<div class="box-body">
			<div class="col-md-4">
				<div class="form-group">
				  <label for="username">Hotel Categories</label>
				 <input type="text" name="hotel_cat" class="form-control" required/>
				
				</div> 
			</div>
			<div class="col-md-4">
				<div class="form-group">
				  <label for="username">Hotel Name  </label>
				 <input type="text" name="hotel_name"class="form-control" required/>
				 
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
				  <label for="username">Vehicle</label>
				 <input type="text" name="vehicle"class="form-control" required/>
				 
				</div> 
			</div>
			<div class="col-md-4">
				<div class="form-group">
				  <label for="username">Car Details</label>
				 <input type="text" name="car_details"class="form-control" required/>
				 
				</div> 
			</div>
			<div class="col-md-4">
				<div class="form-group">
				  <label for="username">Duration</label>
				 
				 <select  type="text"name="duration" class="form-control"   required/>
										<option value="select">Select</option>
										<option value="1"> 2 Days /1 Night</option>
										<option value="2"> 3 Days /2 Night</option>
										<option value="3"> 4 Days /3 Night</option>
										<option value="4"> 5 Days /4 Night</option>
										<option value="5"> 6 Days /5 Night</option>
										<option value="6"> 7 Days /6 Night</option>
										<option value="7"> 8 Days /7 Night</option>
										<option value="8"> 9 Days /8 Night</option>
										<option value="9"> 10 Days /9 Night</option>
										<option value="10"> 11 Days /10 Night</option>
										</select>
				</div> 
			</div>
			<div class="col-md-4">
				<div class="form-group">
				  <label for="username">Packages City</label>
				 <input type="website" name="packages_city"class="form-control" required/>
				 
				</div> 
			</div>
		
			<div class="col-md-4">
				<div class="form-group">
				  <label for="username">Start Date</label>
				 <input type="date" name="start_date"class="form-control" required/>
				 
				</div> 
			</div> 
			<div class="col-md-4">
				<div class="form-group">
				  <label for="username">End Date</label>
				 <input type="date" name="end_date"class="form-control" required/>
				  
				</div> 
			</div> <div class="col-md-4">
				<div class="form-group">
				  <label for="username">Total Tax</label>
<select type="number" name="total_tax" class="form-control" required/>
<option value="select">Select</option>
<option value="18%"> 18%</option>
<option value="28%"> 28%</option>
				 </select>
				</div> 
			</div> 
			<div class="col-md-4">
				<div class="form-group">
				  <label for="username">File Number*</label>
				 <input type="text" name="file_number"class="form-control" required/>
				  <input type="hidden" name="admin_id"/>
				</div> 
			</div> 
		</div>
			
			
			<div class="col-md-4">
				<div class="form-group">
				 <input type="submit" name="add" value="Add Service Report Entry" class="btn btn-success" style="margin-top:20px;">
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