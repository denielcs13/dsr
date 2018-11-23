<?php include '../include/database.php';

//print_r($_POST);

if(isset($_POST["admin_id"]) && !empty($_POST["admin_id"])){

$admin_id=$_POST["admin_id"];

$sector_code=$_POST["sector_code"];

$sector_code_id=$_POST["sector_code_id"];

$sec_cod_len=count($sector_code);



// if(!is_numeric($_POST["sector_code_id"]) || !is_numeric($_POST["double_rate"]) || !is_numeric($_POST["no_adults"]) || !is_numeric($_POST["cnb_rates"]) || !is_numeric($_POST["ext_bed_rate"])|| !is_numeric($_POST["cwb_rates"]) || !is_numeric($_POST["tpp"])){

	// echo '<div class="col-md-12"><div class="alert alert-danger">Input Type Found Wrong </div></div>';

// }else{ 

$esprpp_cost=0;

$cwbpp_cost=0;

$cnbpp_cost=0;

$vehicle_cost=0;

$pp_cost=0;

$dbl_rate1=0;

$dbl_rate=$_POST["dbl_rate"];

$no_rooms=$_POST["no_rooms"];

$vehicle_cost=0;
$v_rate=0;
$v_rate1=0;

if(!empty($_POST["veh_pax"]) or $_POST["veh_pax"]>0){

	$Vehicle_rate=$_POST["Vehicle_rate"];

	$no_vehicle=$_POST["no_vehicle"];

	foreach($Vehicle_rate as $key=>$val){

	if(!empty($Vehicle_rate[$key]) && !empty($no_vehicle[$key])){

	$v_rate +=	($Vehicle_rate[$key]*$no_vehicle[$key]);

	}	

	}

	//$v_rate=array_sum($_POST["Vehicle_rate"]);

	$vehicle_rate1=$_POST["vehicle_rate1"];

	$no_vehicle1	=$_POST["no_vehicle1"];

	foreach($vehicle_rate1 as $key1=>$val1){

	if(!empty($vehicle_rate1[$key1]) && !empty($no_vehicle1[$key1])){

	$v_rate1 +=	($vehicle_rate1[$key1]*$no_vehicle1[$key1]);

	}	

	} 

	//$v_rate1=array_sum($_POST["vehicle_rate1"]);

	$vehicle_cost=round(($v_rate+$v_rate1)/$_POST["veh_pax"]);

}

if(!empty($_POST["no_dbl"]) or $_POST["no_dbl"]>0){

	for($i=0;$i<count($dbl_rate);$i++){

		if(!empty($no_rooms[$i])){

		$dbl_rate1 +=$no_rooms[$i]*$dbl_rate[$i];	

		}

	}

	$pp_cost=round($dbl_rate1/$_POST["no_dbl"]);

	$ppcost=($pp_cost+$vehicle_cost);

	$pp=$pp_cost.' + '.$vehicle_cost.' = '.($ppcost);

}

$esprppcost=0;

$exb=0;

if(!empty($_POST["no_ext_bed"]) or $_POST["no_ext_bed"]>0){

	$epsr_cost=array_sum($_POST["ext_bed"]);

	$esprpp_cost=round($epsr_cost/$_POST["no_ext_bed"]);

	$esprppcost=($esprpp_cost+$vehicle_cost);

	$exb=$esprpp_cost.' + '.$vehicle_cost .'= '.($esprppcost);

}

if(!empty($_POST["no_cwb"]) or $_POST["no_cwb"]>0){

	$cwb_cost=array_sum($_POST["cwb"]);

	$cwbpp_cost=round($cwb_cost/$_POST["no_cwb"]);

}

if(!empty($_POST["no_cnb"]) or $_POST["no_cnb"]>0){

	$cnb_cost=array_sum($_POST["cnb"]);

	$cnbpp_cost=round($cnb_cost/$_POST["no_cnb"]);

}







echo '<table border="1" class="table table-hover table-bordered table-striped"><tr><th>Costing</th><th>Pricing</th><th>Profit ( % )</th><th>GST ( % )</th><th>GRAND TOTAL</th></thead>

<tr><td>Cost per person ( Double )</td><td>'.$pp.'<input type="hidden" name="pp_cost" VALUE="'.$ppcost.'" id="pp_cost" /></td>
<td><input type="number" name="pp_pro1" id="pp_pro1" VALUE="0"/></td>
<td><input type="number" name="pp_gst" id="pp_gst" VALUE="0"/></td><td><input type="number" name="pp_gt" id="pp_gt" VALUE="'.($ppcost).'" readonly/></td></tr><tr><td>Cost per person ( Extra bed )</td><td>'.$exb.'<input type="hidden" name="epsr_cost" id="epsr_cost" VALUE="'.$esprppcost.'" /></td>
<td><input type="number" name="pp_pro2" id="pp_pro2" VALUE="0"/></td>
<td><input type="number" name="epsr_gst" id="epsr_gst" VALUE="0"/></td><td><input type="number" name="epsr_gt" id="epsr_gt" VALUE="'.($esprppcost).'" readonly/></tr>

<tr><td>Cost per person ( CWB )</td><td> '.$cwbpp_cost.' <input type="hidden" name="cwb_cost" id="cwb_cost" VALUE="'.$cwbpp_cost.'" /></td><td><input type="number" name="pp_pro3" id="pp_pro3" VALUE="0"/></td><td><input type="number" name="cwb_gst"  id="cwb_gst"  VALUE="0"/></td><td><input type="number" name="cwb_gt"  id="cwb_gt" VALUE="'.$cwbpp_cost.'" readonly/></tr><tr><td>Cost per person ( CNB )</td><td>'.$cnbpp_cost.'<input type="hidden" name="cnb_cost" id="cnb_cost" VALUE="'.$cnbpp_cost.'"  /></td>
<td><input type="number" name="pp_pro4" id="pp_pro4" VALUE="0"/></td>
<td><input type="number" name="cnb_gst" id="cnb_gst" VALUE="0"/></td><td><input type="number" name="cnb_gt" id="cnb_gt" VALUE="'.$cnbpp_cost.'" readonly/></tr>

<input type="hidden" name="total_cost" id="total_cost" VALUE=""  readonly/>

<!--tr><td>Cost per person ( Vehicle )</td><td>'.$vehicle_cost.'<input type="hidden" name="vehicle_cost" VALUE="'.$vehicle_cost.'"  /></td><td>Total Cost</td><td><input type="number" name="total_cost" id="total_cost" VALUE="'.($ppcost+$esprppcost+$cwbpp_cost+$cnbpp_cost).'"  readonly/></td></tr--></table>

<div class="col-md-10"></div>

<div class="col-md-2"><br/>

<input type="submit" id="form_submit" name="submit_dsr" class="btn btn-info" value="Submit" />



  </div>';

//}

}

?>