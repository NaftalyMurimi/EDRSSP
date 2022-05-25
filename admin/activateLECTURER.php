<?php 
	require_once '../includes/dbconnection.php';						
	$con->query("UPDATE lecturer SET Account = 'Active'")or die(mysql_error());
	echo "<script> window.location='viewLECTURER.php' </script>";
?>	