<?php
session_start();
error_reporting(0);
include('../includes/dbconnection.php');
if (strlen($_SESSION['studentuid']==0)) {
  header('location:../logout.php');
  } else{

  

  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Doctor's- Dashboard</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/font-awesome.min.css" rel="stylesheet">
	<link href="../css/datepicker3.css" rel="stylesheet">
	<link href="../css/styles.css" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	
	<?php include_once('../includes/header.php');?>
	<?php include_once('../includes/sidebarSTUDENT.php');?>
		
		<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">EDRSSP</li>
			</ol>
		</div><!--/.row-->
		
		
				
		
		<div class="row">
			<div class="col-lg-12">
			
				
				
				<div class="panel panel-default">
				<div class="panel-heading">Upload File</div>
				<div class="panel-body">
					


				<h4 style="background-color: cyan;">Submitted Projects</h4>
				
				<div class="col-xs-6 col-md-3" style="background-color: green; height: 60px; margin: 0px 15px;">
							Here are the craziest submitted projects.>!!!!!!!!!!!!!!!!!!!	
				</div>
				<div class="col-xs-6 col-md-3" style="background-color: green; height: 60px; margin: 0px 15px;">
							Here are the craziest submitted projects.>!!!!!!!!!!!!!!!!!!!	
				</div>
				<div class="col-xs-6 col-md-3" style="background-color: green; height: 60px; margin: 0px 15px;">
							Here are the craziest submitted projects.>!!!!!!!!!!!!!!!!!!!	
				</div>
				
				

				
				</div>
				</div>
				</div>
				</div><!-- /.panel-->
			</div><!-- /.col-->
			<?php include_once('includes/footer.php');?>
		</div><!-- /.row -->
	</div><!--/.main-->
	
		
		<!--/.row-->
	</div>	<!--/.main-->
	<?php include_once('../includes/footer.php');?>
	<script src="../js/jquery-1.11.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/chart.min.js"></script>
	<script src="../js/chart-data.js"></script>
	<script src="../js/easypiechart.js"></script>
	<script src="../js/easypiechart-data.js"></script>
	<script src="../js/bootstrap-datepicker.js"></script>
	<script src="../js/custom.js"></script>
	
		
</body>
</html>
<?php } ?>