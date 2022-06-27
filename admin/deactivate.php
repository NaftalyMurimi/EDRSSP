<?php
    include('../includes/dbconnection.php');
   if(count($_POST)>0) {
mysqli_query($con,"UPDATE students set Account='" . $_POST['id'] . "', WHERE id='" . $_POST['id'] . "'");
header('location:viewfiles.php');
}
$result = mysqli_query($con,"SELECT * FROM students WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>

<form name="Myform" id="Myform" action="" method="post" >
 <input type="hidden" name="id"  value="inactive">
</form>
