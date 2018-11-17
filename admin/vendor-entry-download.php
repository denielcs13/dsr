<?php session_start();



$admin_id=$_SESSION['destinaro_admin_id']; 

if(empty($admin_id) || $admin_id !=1){

header('Location:login.php');	

}

include 'include/database.php';
if(isset($_POST["excel_docket"])){
	$filter =array();
if($_POST["ch"] !=''){
	foreach($_POST["ch"]  as $view_id){
	$filter[] =" id = '".$view_id."'";	
	}
	
}
$search="";
if(!empty($filter)){
$search=" && ( ".implode( " || ",$filter)." )";	
}


$sql1="select *  from vendor_payment  where admin_id='".$admin_id."' ".$search."  order by id  desc";

$result1=mysqli_query($con,$sql1);

if(mysqli_num_rows($result1)>0){

$view = "";

$header='"Vender Date","Hotel Name","Cheque Number","Email Id","Phone Number",';

$view .= $header;

$view .="\n";

while($val=mysqli_fetch_array($result1)){

$view .='"'.$val["date"].'","'.$val["hotel_name"].'","'.$val["cheque_no"].'","'.$val["mail_id"].'","'.$val["phone_no"].'",';

$view .=",\n";

}
 $name = "vendorlist.csv";

header('Content-type: application/csv');

header('Content-Disposition: attachment; filename='.$name);

echo $view;

exit;	

}else{

echo '<script>alert("No Agent is Found");window.location="vendor-list";</script>';

} 

}





?>