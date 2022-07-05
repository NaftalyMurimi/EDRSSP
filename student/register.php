<?php 
session_start();
error_reporting(0);
include('../includes/dbconnection.php');
if(isset($_POST['submit']))
  {
    $fname=$_POST['name'];
    $regno=$_POST['regno'];
    $email=$_POST['email'];
    

    $ret=mysqli_query($con, "select Email from students where Email='$email' ");
    $result=mysqli_fetch_array($ret);
    if($result>0){
$msg1="This email  associated with another account";
    }
    else{
    $query=mysqli_query($con, "INSERT INTO `students`(`id`, `FullName`, `Reg_no`, `Email`) VALUES ('null','$fname','$regno','$email')");
    if ($query) {
    $msg="You have successfully registered";
  }
  else
    {
      $msg1="Something Went Wrong. Please try again";
    }
}
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student || Register</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/datepicker3.css" rel="stylesheet">
	<link href="../css/styles.css" rel="stylesheet">
	<style type="text/css">
        body{
           background: #063146;
        }
        h2{
        	color: white;
        }
    </style>
<body>
	<div class="row">
			<h2 align="center">EDRSSP register</h2>
	<hr />
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Student Sign Up</div>
				<div class="panel-body">
					<form role="form" action="" method="post" id="" name="signup" onsubmit="return checkpass();">
						<p style="font-size:16px; color:green" align="center"> <?php if($msg){
  				  echo $msg;}  ?> </p> 
  					<p style="font-size:16px; color:red" align="center"> <?php if($msg1){
            echo $msg1;}  ?> </p>
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Full Name" name="name" type="text" required="true">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="E-mail" name="email" type="email" required="true">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="regnumber" name="regno" placeholder="Reg Number" minlength="5" maxlength="15" required="true">
							</div>
							
							<div class="checkbox">
								<button type="submit" value="submit" name="submit" class="btn btn-primary">Register</button><span style="padding-left:250px">
								<a href="login.php" class="btn btn-primary">Login</a></span>
							</div>
							 </fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	

<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
