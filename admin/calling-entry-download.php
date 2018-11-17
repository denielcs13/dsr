<?php session_start();

$admin_id=$_SESSION['destinaro_admin_id']; 
if(empty($admin_id) || $admin_id !=1){
header('Location:login.php');	
}
include 'include/database.php';
if(isset($_POST["excel_docket"])){
$search="";
$sql1="select `id`,`tag_id`,`comp_name`,`agent_name`,`address`,`mobile`,`email`,`city`,`website`,`alter_mobile`,`status`,`admin_id`  from calling_entry where admin_id='".$admin_id."' order by id  desc";
$result1=mysqli_query($con,$sql1);
if(mysqli_num_rows($result1)>0){
$view = "";
$header='"Tag ID","Name","Email","Mobile","Website",';
$view .= $header;
$view .="\n";
while($val=mysqli_fetch_array($result1)){
$view .='"'.$val["tag_id"].'","'.$val["agent_name"].'","'.$val["email"].'","'.$val["mobile"].'","'.$val["website"].'",';
$view .=",\n";
}
$name = "agentlist.csv";
header('Content-type: application/csv');
header('Content-Disposition: attachment; filename='.$name);
echo $view;
exit;	
}else{
echo '<script>alert("No Agent is Found");window.location="calling-list";</script>';

}

}


?>