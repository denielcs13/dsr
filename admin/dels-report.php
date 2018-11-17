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
<div class="col-md-12"><h3>Costing Details File No.( <?=$_GET["file"];?> )</h3></div>
<div class="col-md-2">Day<input type="text" class="form-control" /></div>
<div class="col-md-2">Date<input type="text" class="form-control" /></div>
<div class="col-md-2">Sector Code<input type="text" class="form-control" /></div>
<div class="col-md-2">Hotel Name <input type="text" class="form-control" /></div>
<div class="col-md-2">Destination <input type="text" class="form-control" /></div>
<div class="col-md-2">Meal Plan<input type="text" class="form-control" /> </div>
<div class="col-md-2">Hotel Per Night (Double)<input type="text" class="form-control" /></div>
<div class="col-md-2">Vehicle <input type="text" class="form-control" /></div><div class="col-md-2">Rate<input type="text" class="form-control" /></div>
<div class="col-md-2">No. of Vehicle<input type="text" class="form-control" /></div>
<div class="col-md-2">No. of Adults<input type="text"  class="form-control" /></div>
<div class="col-md-2">Single Rates<input type="text" class="form-control" /> </div>
<div class="col-md-2">No. of Ext. Person <input type="text" class="form-control" /></div>
<div class="col-md-2">Ext. Matres<input type="text" class="form-control" /> </div>
<div class="col-md-2">CWB<input type="text" class="form-control" /> </div>
<div class="col-md-2">CWB Rates<input type="text" class="form-control" /></div>
<div class="col-md-2">CNB<input type="text" class="form-control" /> </div>
<div class="col-md-2">CNB Rates<input type="text" class="form-control" /></div>
<div class="col-md-2">No. of Double <input type="text" class="form-control" /></div>
<div class="col-md-2">Sub Total<input type="text" class="form-control" /></div>
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