<?php 
	require_once '../includes/dbconnection.php';						
	$con->query("UPDATE students SET Account = 'Active'")or die(mysql_error());
	echo "<script> window.location='viewSTUDENTS.php' </script>";
?>	