<?php include 'include/header.php';
 
 ?>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
	<div class="row">
	<div class="col-md-12">
	<div class="col-md-9">
      <h3>Destinaro Tourism
        <small>Control Panel</small></h3>
	  </div>

<div class="col-md-3">
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-gallery"></i> Home</a></li>
        <li class="active">Pick Query</li>		
      </ol>
  </div>
  </div>
  </div>
    </section>

    <!-- Main content -->
    <section class="content">
     <div class="row"> 
	 <div class="col-md-12"> 
	 <div class="box box-primary"> 
 <form method="post">
  <table class="table table-bordered" >
 File No.# : <input type="search" />
Tour Exe. Name: <input type="search" name="tour_exe_name"/>
Company Name: <input type="search" name="company" />
<caption>Hotel</caption>
    <thead>
      <tr >
        <th>Sector Code</th>
        <th>Hotel Name</th>
        <th>TSD</th>
        <th>Destination</th>
        <th>Pax</th>
        <th>Meal Plan</th>
        <th>Total Rooms</th>
        <th>DBl Rates</th>
        <th>CNB</th>
        <th>CNB Rates</th>
        <th>CMB</th>
        <th>CMB Rates</th>
        <th>Single Person</th>
        <th>Single Rate</th>
        <th>EPSR</th>
        <th>EPSR Rates</th>
      </tr>
    </thead>
    <tbody>
     <tr>
	 <?php
	 for ($row=1; $row <=2; $row++){
      echo  '<td><input type="text" /></td>';
				for ($col=1; $col <= 15; $col++) { 
		   
		   echo '<td><input type="text" value=""/></td>';
		   	}
		 echo  "</tr>";
	 }
	 ?>
</tbody> 

<thead>
		<tr>
		<th>Type of Transport</th>
        <th>Vehicle No.</th>
        <th>PAX</th>
        <th>Vehicle Rates</th>
        <th>TPP</th>
      </tr>
    </thead>
	<tbody>
	 <tr>
	<?php 
	 for ($row=1; $row <=2; $row++){
      echo  '<td><input type="text" /></td>';
				for ($col=1; $col <=4; $col++) { 
		   
		   echo '<td><input type="text" /></td>';
		   	}
		 echo  "</tr>";
	 }
	
    ?>
	</tbody>
  </table>
  <table class='table table-bordered'>
  
  <u>Costing</u>
  <tr>
  <th>CNB</th>
  <th>CWB</th>
  <th>Single Person</th>
  <th>EPSR</th>
  <th>Sub Total</th>
  <th>Rate of Person</th>
  </tr>
  
  <tr>
  <td><input type='text' name='cnb'></td>
  <td><input type='text' name='cwb'></td>
  <td><input type='text' name='cwb'></td>
  <td><input type='text' name='cwb'></td>
  <td><input type='text' name='cwb'></td>
  <td><input type='text' name='cwb'></td>
  <td><input type='submit' name='save'value='Save' class='btn btn-success'></td>
  <td><input type='reset' name='quit' value='Quit' class='btn btn-danger'></td>
  <td><input type='reset' name='quit' value='Calculate TPP' class='btn btn-success'></td>
  </tr>
  <tr><th></th><th>Markup%</th><th><input type='text' name='cwb' ></th>
  <th>Amount</th><th><input type='text' name='cwb' ></th>
  
  </tr>
  <tr><th></th><th></th><th></th><th>GST%</th><th><input type='text' name='cwb' ></th></tr>
   <tr><th></th><th></th><th></th><th>Total Package Cost</th><th><input type='text' name='cwb' ></th><th><input type='submit' name='calculate' value='Calculate' class='btn btn-success'></th></tr>
  </table>
   </form>
</div>
</div>
	</div>
		</div>

    </section>
    <!-- /.content -->
  </div>

  <?php
include 'include/footer.php';
?>