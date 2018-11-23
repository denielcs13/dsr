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

<?php

if($_GET["file"]==''){

?>

<form method="get">

<div class="col-md-3">

File No.# : <input type="search" class="form-control" /></div><div class="col-md-3">

Tour Exe. Name: <input type="search" name="tour_exe_name" class="form-control"/></div><div class="col-md-3">

Company Name: <input type="search" name="company" class="form-control" /></div><div class="col-md-3"><br/><input type="submit" name="calculate" value="Search" class="btn btn-info"></div>

 </form>

 <?php

 

 }

 if(isset($_POST["submit_dsr"])){

	 $insert="insert into online_dsr_rest(no_dbl,no_ext,no_cwb,no_cnb,cpp_dbl,cpp_ext,cpp_cnb,cpp_cwb,vehicle_pax,cpp_dbl_gst,cpp_ext_gst,cpp_cnb_gst,cpp_cwb_gst,cpp_dbl_gt,cpp_ext_gt,cpp_cnb_gt,cpp_cwb_gt,grand_total,online_dsr_status,file_id,query_id,admin_id) values ('".$_POST["no_dbl"]."','".$_POST["no_ext_bed"]."','".$_POST["no_cwb"]."','".$_POST["no_cnb"]."','".$_POST["pp_cost"]."','".$_POST["epsr_cost"]."','".$_POST["cnb_cost"]."','".$_POST["cwb_cost"]."','".$_POST["veh_pax"]."','".$_POST["pp_gst"]."','".$_POST["epsr_gst"]."','".$_POST["cnb_gst"]."','".$_POST["cwb_gst"]."','".$_POST["pp_gt"]."','".$_POST["epsr_gt"]."','".$_POST["cnb_gt"]."','".$_POST["cwb_gt"]."','".$_POST["total_cost"]."','1','".$_POST["file_id"]."','".$_POST["query_id"]."','".$_POST["admin_id"]."')";

	 $ins=mysqli_query($con,$insert);

	 if($ins){

		$dsr_id= mysqli_insert_id($con);

		$sector_code=$_POST["sector_code"];

		$sector_code_id=$_POST["sector_code_id"];

		$date=$_POST["date"];

		$hotel_name=$_POST["hotel_name"];

		$mealplan=$_POST["mealplan"];

		$dbl_rate=$_POST["dbl_rate"];

		$ext_bed=$_POST["ext_bed"];

		$cwb=$_POST["cwb"];

		$cnb=$_POST["cnb"];

		$vehicle=$_POST["vehicle"];

		$no_vehicle=$_POST["no_vehicle"];

		$Vehicle_rate=$_POST["Vehicle_rate"];

		$vehicle1=$_POST["vehicle1"];

		$no_vehicle1=$_POST["no_vehicle1"];

		$vehicle_rate1=$_POST["vehicle_rate1"];

		$no_rooms=$_POST["no_rooms"];

		for($i=0;$i<count($sector_code);$i++){

		if($sector_code[$i] !='' && $sector_code_id[$i] !=''){

		$result1=$con->query("select `id`,sec_code,sec_name,itinerary,itinerary_desc from sector_code where id='".$sector_code_id[$i]."'")->fetch_assoc();

		$insert_dsr="insert into online_dsr(online_dsr_id,day,date,sector_code_id,sector_code,sector_code_name,itinerary,itinerary_desc,hotel_name,meal_plan,no_rooms,dbl_rate,ext_bed_rate,cwb_rate,cnb_rate,vehicle1,vehicle1_no,vehicle1_rate,vehicle2,vehicle2_no,vehicle2_rate,file_no,admin_id1,query_id1,dsr_status) values ('".$dsr_id."','".($i+1)."','".date("Y-m-d",strtotime($date[$i]))."','".$sector_code_id[$i]."','".$sector_code[$i]."','".mysqli_real_escape_string($con,$result1["sec_name"])."','".mysqli_real_escape_string($con,$result1["itinerary"])."','".mysqli_real_escape_string($con,$result1["itinerary_desc"])."','".mysqli_real_escape_string($con,$hotel_name[$i])."','".mysqli_real_escape_string($con,$mealplan[$i])."','".$no_rooms[$i]."','".$dbl_rate[$i]."','".$ext_bed[$i]."','".$cwb[$i]."','".$cnb[$i]."','".mysqli_real_escape_string($con,$vehicle[$i])."','".$no_vehicle[$i]."','".$Vehicle_rate[$i]."','".mysqli_real_escape_string($con,$vehicle1[$i])."','".$no_vehicle1[$i]."','".$vehicle_rate1[$i]."','".$_POST["file_id"]."','".$_POST["admin_id"]."','".$_POST["query_id"]."','1')";

		$ins_dsr=mysqli_query($con,$insert_dsr);		

		}	

		}

		$inclusion=$_POST["inclusion"];

		$inclusion_qty=$_POST["inclusion_qty"];

		$inclusion_rate=$_POST["inclusion_rate"];
                $cnt_loader="";

		for($i=0;$i<count($inclusion);$i++){

			if($inclusion[$i] >0 && $inclusion_qty[$i] >0  && $inclusion_rate[$i]>0){

				
		$result1=$con->query("select `id`,sec_code,sec_name,itinerary,itinerary_desc from sector_code where id='".$sector_code_id[$i]."'")->fetch_assoc();

				$inclu_desc=$con->query("select `id`,`inclusion_title`,`inclusion_desc`,`inc_rate`,`admin_id` from inclusion where admin_id='".$admin_id."' && id='".$inclusion[$i]."'")->fetch_assoc();

				$insert_inclusions="insert into online_dsr_inclusion(dsr1_id,file_id2,query_id2,admin_id2,dsr_status2,inclusion_id,inclusion,inclusion_qty,inclusion_rate,inclusion_desc)
				 values ('".$dsr_id."','".$_POST["file_id"]."','".$_POST["query_id"]."','".$_POST["admin_id"]."','".$cnt_loader."','".$inclusion[$i]."','".mysqli_real_escape_string($con,$inclu_desc["inclusion_title"])."','".$inclusion_qty[$i]."','".$inclusion_rate[$i]."','".mysqli_real_escape_string($con,$inclu_desc["inclusion_desc"])."')";

				$ins_includes=mysqli_query($con,$insert_inclusions);			

			}

		}

		echo '<div class="col-md-12"><div class="alert alert-success">Record Is  Added Successfully </div></div>';

		echo '<script>window.location="online-loader.php?admin='.$_GET["admin"].'&query='.$_GET["query"].'&file='.$_GET["file"].'";</script>';

	 }else{

		 echo '<div class="col-md-12"><div class="alert alert-danger">Record Is not Added Successfully </div></div>';

	 }

 }

 ?>

 

 <style>

  input{  max-width: 85px;}

   .inp{  max-width: 50px;}

 </style>

 <form method="post" id="form_post" autocomplete="off">

 <input type="hidden" class="form-control" name="admin_id" id="admin_id" value="<?= $admin_id; ?>">

  <input type="hidden" class="form-control" name="query_id" id="query_id" value="<?= $_GET["query"]; ?>">

   <input type="hidden" class="form-control" name="file_id" id="file_id" value="<?= $_GET["file"]; ?>"> 

 <table border="1" class="table table-hover table-bordered table-striped" overflow: scroll; id="submit_table">

 <thead>

 <tr><th >Day</th><th >Date</th><th >Sector Code</th><th >Hotel Name</th><th >MealPlan</th><th >Room</th><th >Dbl Rate</th><th >Ext. Bed Rate</th><th >CWB</th><th >CNB</th><th colspan="3" style="text-align: center;">Option 1<table border="1" class="table table-hover table-bordered table-striped">  <thead><tr ><th>vehicle</th><th>No. of vehicle</th><th>Rate</th></tr> </thead></table></th><th colspan="3" style="text-align: center;">Option 2 <table border="1" class="table table-hover table-bordered table-striped">  <thead><tr ><th>vehicle</th><th>No. of vehicle</th><th>Rate</th></tr> </thead></table></th></tr>



 </thead>

 <tbody>

 <?php

 for($i=1;$i<=5;$i++){

 echo '<tr><td>'.$i.'</td><td><input type="text" name="date[]" id="start_date"  /></td><td><input type="text" name="sector_code[]" id="sector_code" />

 <input type="hidden" class="form-control" name="sector_code_id[]" id="sector_code_id"/><span id="auto_sector_code" style="margin-top: 0px;"></span>

 </td><td><input type="text" name="hotel_name[]" id="hotel_name" /><input type="hidden" name="hotel_name_id[]" id="hotel_name_id"/><span id="auto_hotel_name"></span></td><td><input type="text" name="mealplan[]" /></td><td><input type="number" name="no_rooms[]" class="inp" /></td><td><input type="number" name="dbl_rate[]" class="inp" /></td><td><input type="number" name="ext_bed[]" class="inp"/></td><td><input type="number" name="cwb[]" class="inp" /></td><td><input type="number" name="cnb[]" class="inp" /></td><td><input type="text" name="vehicle[]" id="vehicle" /><span id="auto_vehicle"></span></td><td><input type="number" name="no_vehicle[]"  class="inp"/></td><td><input type="number" name="Vehicle_rate[]" class="inp" /></td><td><input type="text" name="vehicle1[]" id="vehicle1" /><span id="auto_vehicle1"></span></td><td><input type="number" name="no_vehicle1[]" class="inp" /></td><td><input type="number" name="vehicle_rate1[]" class="inp"  /></td></tr>';

 }

 ?>

 </tbody>

 </table>

 <table id="tr_clone" border="1" class="table table-hover table-bordered table-striped">

 <thead>

 <tr><th colspan="2"> Inclusions</th><th colspan="2">Qty</th><th colspan="2">Rate</th></tr> 



 </thead>

 <tbody>

 <tr ><td colspan="2">

  <select name="inclusion[]" id="inclusion"><option value='0'>Select Inclusion</option><?php	

 $inclusion_query=$con->query("select `id`,inclusion_title,inclusion_desc,inc_rate,admin_id from inclusion where admin_id='".$admin_id."'");

 while($data_inc=$inclusion_query->fetch_assoc()){

	echo '<option value="'.$data_inc["id"].'" data-rate="'.$data_inc["inc_rate"].'">'.$data_inc["inclusion_title"].'</option>'; 

 }

 ?>

</select>

 </td>

 <td colspan="2"><select id="inclusion_qty" name="inclusion_qty[]"><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option></select></td><td colspan="2"><input type="text" readonly value="0" name="inclusion_rate[]" id="inclusion_rate"></td></tr>

 </body>

 </table>

 <table border="1" class="table table-hover table-bordered table-striped">

 <thead>

 <tr><th>No.  Pax</th><th >No. Ext Bed</th><th >No. CWB</th><th >No. CNB</th><th >No. Vehicle Pax</th><th colspan="3">Action</th></tr> 



 </thead>

 

 <tbody>

 <tr><td><input type="text" name="no_dbl" id="no_dbl"/></td><td><input type="text" name="no_ext_bed" /></td><td><input type="text" name="no_cwb"/></td><td><input type="text" name="no_cnb" /></td><td><input type="text" name="veh_pax" /></td><td><a id='calculate' class='btn btn-info'>Calculate</a></td><td><a id='add_more' class='btn btn-success'>Add More</a></td><td><a id='add_more_inc' class='btn btn-warning'>Add More Inclusions</a></td></tr>

 </tbody>

 </table>

 <div id="auto_calculator" style="clear: both;"></div>

  </form>

 
</div>
</div>

</div>

</div>

</div>

	</section>

	

<?php include 'include/footer.php';?>



 <link rel="stylesheet" href="dist/css/report.css">

<script src="dist/js/report.js"></script>

<script src="dist/js/function.js"></script>

<script>

jQuery("body").on("keyup","#vehicle",function(){

	var thisval=jQuery(this);

		var hotel_name = thisval.val();

		if(hotel_name.length > 1){

			jQuery.ajax({

				type		: "POST",

				url	        : "ajaxpages/vehicle.php",

				dataType	: "text",

				data		: {"vehicle_list":hotel_name,"vehicle_admin_id":admin_id},

				success: function(msg){

					if(msg==1){

					thisval.siblings("#auto_vehicle").html('');

					}else{

						thisval.siblings("#auto_vehicle").html(msg);

						thisval.siblings("#auto_vehicle div div").mouseover(function(){

						thisval.siblings("#auto_vehicle div div").removeClass("hover");

						thisval.addClass("hover");

					});

					jQuery("#auto_vehicle .city-list").click(function(){

						var value = jQuery(this).html();

						var sector_code = jQuery(this).data("hotel_name");

						thisval.val(value);

						//thisval.siblings("#hotel_name_id").val(sector_code);

						thisval.siblings("#auto_vehicle div").remove();

					});

					}

				}

			})

		}

	});

	jQuery("body").on("keydown","#vehicle",function(){

		var thisval=jQuery(this);

		thisval.siblings("#auto_vehicle").html("");

	});

	jQuery("body").on("click","#auto_vehicle .city-list",function(){

		var thisval=jQuery(this);

		var value = thisval.html();

		var sector_code = thisval.data("vehicle");

		thisval.parent().parent().siblings("#vehicle").val(value);

		//thisval.parent().parent().siblings("#hotel_name_id").val(sector_code);

		thisval.parent("#auto_vehicle div").remove();

	});

	jQuery("body").on("keyup","#vehicle1",function(){

	var thisval=jQuery(this);

		var hotel_name = thisval.val();

		if(hotel_name.length > 1){

			jQuery.ajax({

				type		: "POST",

				url		: "ajaxpages/vehicle.php",

				dataType	: "text",

				data		: {"vehicle_list":hotel_name,"vehicle_admin_id":admin_id},

				success: function(msg){

					if(msg==1){

					thisval.siblings("#auto_vehicle1").html('');

					}else{

						thisval.siblings("#auto_vehicle1").html(msg);

						thisval.siblings("#auto_vehicle1 div div").mouseover(function(){

						thisval.siblings("#auto_vehicle1 div div").removeClass("hover");

						thisval.addClass("hover");

					});

					jQuery("#auto_vehicle1 .city-list").click(function(){

						var value = jQuery(this).html();

						var sector_code = jQuery(this).data("vehicle");

						thisval.val(value);

						//thisval.siblings("#hotel_name_id").val(sector_code);

						thisval.siblings("#auto_vehicle1 div").remove();

					});

					}

				}

			})

		}

	});

	jQuery("body").on("keydown","#vehicle1",function(){

		var thisval=jQuery(this);

		thisval.siblings("#auto_vehicle1").html("");

	});

	jQuery("body").on("click","#auto_vehicle1 .city-list",function(){

		var thisval=jQuery(this);

		var value = thisval.html();

		var sector_code = thisval.data("vehicle");

		thisval.parent().parent().siblings("#vehicle1").val(value);

		//thisval.parent().parent().siblings("#hotel_name_id").val(sector_code);

		thisval.parent("#auto_vehicle1 div").remove();

	});



jQuery("body").on("keyup","#hotel_name",function(){

	var thisval=jQuery(this);

		var hotel_name = thisval.val();

		if(hotel_name.length > 1){

			jQuery.ajax({

				type		: "POST",

				url		: "ajaxpages/hotel.php",

				dataType	: "text",

				data		: {"hotel_name_list":hotel_name,"hotel_name_admin_id":admin_id},

				success: function(msg){

					if(msg==1){

					thisval.siblings("#auto_hotel_name").html('');

					}else{

						thisval.siblings("#auto_hotel_name").html(msg);

						thisval.siblings("#auto_hotel_name div div").mouseover(function(){

						thisval.siblings("#auto_hotel_name div div").removeClass("hover");

						thisval.addClass("hover");

					});

					jQuery("#auto_hotel_name .city-list").click(function(){

						var value = jQuery(this).html();

						var sector_code = jQuery(this).data("hotel_name");

						thisval.val(value);

						thisval.siblings("#hotel_name_id").val(sector_code);

						thisval.siblings("#auto_hotel_name div").remove();

					});

					}

				}

			})

		}

	});

	jQuery("body").on("keydown","#hotel_name",function(){

		var thisval=jQuery(this);

		thisval.siblings("#auto_hotel_name").html("");

	});

	jQuery("body").on("click","#auto_hotel_name .city-list",function(){

		var thisval=jQuery(this);

		var value = thisval.html();

		var sector_code = thisval.data("hotel_name");

		thisval.parent().parent().siblings("#hotel_name").val(value);

		thisval.parent().parent().siblings("#hotel_name_id").val(sector_code);

		thisval.parent("#auto_hotel_name div").remove();

	});



$("body").on('click','#add_more_inc',function(){

	var i=($('[name="inclusion[]"]').length+1);

	if(i<=15){

	var $tableBody = $('#tr_clone').find("tbody"),

	$trLast = $tableBody.find("tr:last"),

	$trNew = $trLast.clone();

	$trLast.after($trNew);

	}else{

		alert("Over Limit to Add a package");

	}

});

$("body").on('change','#inclusion',function(){

	var thisvar=$(this);

	if(thisvar.find('option:selected').data('rate') !='' && thisvar.find('option:selected').data('rate') >0){

	var rate=$(this).find('option:selected').data('rate');	

	}else{

	var rate=0;

	}

	var inclusion_qty=thisvar.parents('td').siblings().children('#inclusion_qty').find('option:selected').val();

	calculate_inclusions(thisvar,inclusion_qty,rate)

});

$("body").on('change','#inclusion_qty',function(){

	var thisvar=$(this);

	var inclusion_qty=thisvar.find('option:selected').val();

	var inc_rate=thisvar.parents('td').siblings().children('#inclusion').find('option:selected').data('rate');

	if(inc_rate !='' && inc_rate >0){

	var rate=inc_rate;	

	}else{

	var rate=0;

	}

	calculate_inclusions(thisvar,inclusion_qty,rate)

});

function calculate_inclusions(thisvar,inclusion_qty,rate){

	var inc_cost=(inclusion_qty*rate);

	thisvar.parents('td').siblings().children('#inclusion_rate').val(inc_cost);

	}

</script>