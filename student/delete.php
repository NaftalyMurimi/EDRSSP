<?php
include_once '../includes/dbconnection.php';

$sql2="DELETE FROM documents WHERE id=".$_REQUEST['data'];
$res2=mysqli_query($con,$sql2) or die(mysqli_error($con));
mysqli_close($con);
if($res2)
{
header("location:viewFILES.php?msg=data successfully deleted!");
}
?> 
