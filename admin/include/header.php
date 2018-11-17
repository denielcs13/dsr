<?php session_start();

$admin_id=$_SESSION['destinaro_admin_id']; 
if(empty($admin_id) || $admin_id !=1){
header('Location:login.php');	
}
include 'include/database.php';
include 'include/top-menu.php';
include 'include/left-side.php';

?>