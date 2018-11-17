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
<?
if($_GET["file"]==''){
?>
<form method="get">
<div class="col-md-3">
File No.# : <input type="search" class="form-control" /></div><div class="col-md-3">
Tour Exe. Name: <input type="search" name="tour_exe_name" class="form-control"/></div><div class="col-md-3">
Company Name: <input type="search" name="company" class="form-control" /></div><div class="col-md-3"><br/><input type="submit" name="calculate" value="Search" class="btn btn-info"></div>
 </form>
 <?
 
 }
 ?>
<div class="col-md-12"><h3>Hotel</h3></div>
<div class="col-md-2">Sector Code<input type="text" class="form-control" /></div>
<div class="col-md-2">Hotel Name <input type="text" class="form-control" /></div><div class="col-md-2">TSD<input type="text" class="form-control" /></div>
<div class="col-md-2">Destination <input type="text" class="form-control" /></div><div class="col-md-2">Pax<input type="text" class="form-control" /></div>
<div class="col-md-2">Meal Plan<input type="text" class="form-control" /> </div><div class="col-md-2">Total Rooms<input type="text"  class="form-control" /></div>
<div class="col-md-2">DBl Rates<input type="text" class="form-control" /> </div>
<div class="col-md-2">CNB<input type="text" class="form-control" /> </div><div class="col-md-2">CNB Rates<input type="text" class="form-control" /> </div>
<div class="col-md-2">CMB<input type="text" class="form-control" /> </div><div class="col-md-2">CMB Rates <input type="text" class="form-control" /></div>
<div class="col-md-2">Single Person<input type="text" class="form-control" /> </div><div class="col-md-2">Single Rate <input type="text" class="form-control" /></div>
<div class="col-md-2">EPSR<input type="text" class="form-control" /> </div>
<div class="col-md-2">EPSR Rates<input type="text" class="form-control" /></div>
<div class="col-md-4"><br/><input type="submit" class="btn btn-info" value="Add Hotel" /></div>
<div class="col-md-12"><h3>Vehicle</h3></div>
<div class="col-md-2">Type of Transport<input type="text" class="form-control" /></div>
<div class="col-md-2">Vehicle No. <input type="text" class="form-control" /></div><div class="col-md-2">PAX<input type="text" class="form-control" /></div>
<div class="col-md-2">Vehicle Rates <input type="text" class="form-control" /></div><div class="col-md-2">TPP<input type="text" class="form-control" /></div>
<div class="col-md-2"><br/><input type="submit" class="btn btn-info" value="Add Vehicle" /></div>

<div class="col-md-12"><h3>Costing</h3></div>
<div class="col-md-2">CNB<input type="text" class="form-control" /></div>
<div class="col-md-2">CWB <input type="text" class="form-control" /></div><div class="col-md-2">Single Person<input type="text" class="form-control" /></div>
<div class="col-md-2">EPSR <input type="text" class="form-control" /></div><div class="col-md-2">Sub Total<input type="text" class="form-control" /></div>
<div class="col-md-2">Rate of Person<input type="text" class="form-control" /></div>
<div class="col-md-6"></div>
<div class="col-md-2">Markup% <input type="text" class="form-control" /></div><div class="col-md-2">Amount<input type="text" class="form-control" /></div>
<div class="col-md-2"></div>

<div class="col-md-6" style="clear:both;"></div>
<div class="col-md-2">GST% <input type="text" class="form-control" /></div><div class="col-md-2">Total Package Cost<input type="text" class="form-control" /></div>
<div class="col-md-2"><br/>
<input type='submit' name='calculate' value='Calculate' class='btn btn-success'>
  </div>
</div>
</div>
</div>
</div>
</div>
	</section>
	
<?php include 'include/footer.php';?>