<?php include 'include/header.php';?>
<div class="content-wrapper">

<section class="content-header">
<div class="row">
<div class="col-md-12">
 <h1>
     Destinaro Tourism File No.( <?=$_GET["file"];?> )
       
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
 <form method="post" id="form_post" autocomplete="off">
 <input type="hidden" class="form-control" name="admin_id" id="admin_id" value="<?= $admin_id; ?>">
<div class="col-md-12"><h3>Hotel</h3></div>
<div class="col-md-2">Day<input type="number" class="form-control" name="day"></div>
<div class="col-md-2">Date<input type="text" class="form-control" name="start_date" id="start_date"></div><div class="col-md-2">Sector Code<input type="text" class="form-control" name="sector_code" id="sector_code"/><input type="hidden" class="form-control" name="sector_code_id" id="sector_code_id"/><span id="auto_sector_code"></span></div>
<div class="col-md-2">Hotel Name <input type="text" class="form-control" name="hotel_name" /></div>
<div class="col-md-2">Destination <input type="text" class="form-control" name="destination" /></div><div class="col-md-2">Meal Plan<input type="text" class="form-control" name="mealplan" /> </div><div class="col-md-2">Total Rooms<input type="number"  class="form-control" name="no_rooms" /></div>
<div class="col-md-2">Hotel / Night(DBl Rates)<input type="number" class="form-control" name="double_rate" /> </div>
<div class="col-md-2">No. of Adults<input type="number" class="form-control" name="no_adults" /></div>
<div class="col-md-2">Single Person Rate <input type="number" class="form-control" name="single_rate" /></div><div class="col-md-2">CNB<input type="number" class="form-control" name="cnb" /> </div><div class="col-md-2">CNB Rates<input type="number" class="form-control" name="cnb_rates" /> </div>
<div class="col-md-2">CWB<input type="number" class="form-control" name="cwb" /> </div><div class="col-md-2">CWB Rates <input type="number" class="form-control" name="cwb_rates" /></div>
<div class="col-md-2">EPSR<input type="number" class="form-control" name="ext_bed" /> </div>
<div class="col-md-2">EPSR Rates<input type="number" class="form-control" name="ext_bed_rate" /></div>

<div class="col-md-2">TSD<input type="text" class="form-control" name="tsd" id="start_date"  /></div>
<div class="col-md-2"></div>
<div class="col-md-12"><h3>Vehicle</h3></div>
<div class="col-md-2">Type of Transport<input type="text" class="form-control" name="type_transport" /></div>
<div class="col-md-2"> No. Vehicle <input type="number" class="form-control" name="vehicle_number" /></div><div class="col-md-2">Vehicle Pax<input type="number" class="form-control" name="vehicle_pax" /></div>
<div class="col-md-2">Vehicle Rates <input type="number" class="form-control" name="vehicle_rates" /></div><div class="col-md-2">TPP<input type="text" class="form-control" name="tpp" /></div>
<div class="col-md-2"><br/><a id='calculate' class='btn btn-success'>Calculate</a></div>


  </form>
  <div id="auto_calculator" style="clear: both;"></div>
</div>
</div>
</div>
</div>
</div>
	</section>
	
<?php include 'include/footer.php';?>
<style>.city-dropdown-menu {
    border: thin solid #ff6c26;
    border-radius: 0 0 8px 8px;
}.city-list {
    padding: 3px 12px;
    border-bottom: thin solid #ff6c26;
    font-size: 16px;
    cursor: pointer;
}.hover {
    background: #ff6c26 !important;
    color: #f6f6f6 !important;
}
#auto_sector_code{
	position: absolute;
    z-index: 9;
    background: #fff;
    width: 85%;
}</style>
<script>
var admin_id=$("#admin_id").val();
jQuery('#sector_code').keyup(function(){
		var sector_code = jQuery('#sector_code').val();
		if(sector_code.length > 2){
			jQuery.ajax({
				type		: "POST",
				url			: "ajaxpages/sector-code.php",
				dataType	: "text",
				data		: {"sec_code_list":sector_code,"sc_list_admin_id":admin_id},
				success: function(msg){
					if(msg==1){
					jQuery("#auto_sector_code").html('');
					}else{
						jQuery("#auto_sector_code").html(msg);
						jQuery("#auto_sector_code div div").mouseover(function(){
						jQuery("#auto_sector_code div div").removeClass("hover");
						jQuery(this).addClass("hover");
					});
					jQuery("#auto_sector_code .city-list").click(function(){
						var value = jQuery(this).html();
						var sector_code = jQuery(this).data("sector_code");
						jQuery("#sector_code").val(value);
						jQuery("#sector_code_id").val(sector_code);
						jQuery("#auto_sector_code div").remove();
					});
					}
				}
			})
		}
	});
	jQuery("#sector_code").keydown(function(){
		jQuery("#auto_sector_code").html("");
	});
	jQuery("#auto_sector_code .city-list").click(function(){
		var value = jQuery(this).html();
		var sector_code = jQuery(this).data("sector_code");
		jQuery("#sector_code").val(value);
		jQuery("#sector_code_id").val(sector_code);
		jQuery("#auto_sector_code div").remove();
	});
	jQuery("#calculate").click(function(){
		var returnresponse=true;
		$('form#form_post input').each(function(){
		if($(this).val()==''){
			returnresponse= false;
		}	
		});
		if(returnresponse){
			jQuery.ajax({
				type		: "POST",
				url			: "ajaxpages/report.php",
				dataType	: "text",
				data		: $('form#form_post').serialize(),
				success: function(msg){
				jQuery("#auto_calculator").html(msg);
				}
			});
		}else{
			alert("All Fields are Required");
				
		}
	});	 
jQuery("body").on("keyup","#markup",function(){
	if($(this).val() !=''){
		var total_cost=($("#sub_total").val()+($("#sub_total").val()*$(this).val()/100));
		$("#total_cost").val(total_cost);
		var grand_total=(total_cost+(total_cost*$("#gst_cost").val()/100));
		$("#grand_total").val(grand_total);
	}
});
</script>