<?php
session_start();
unset($_SESSION['destinaro_admin_id']);
header('Location:login');	

?>