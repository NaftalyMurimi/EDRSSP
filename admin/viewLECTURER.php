<?php
session_start();
error_reporting(0);
include('../includes/dbconnection.php');
if (strlen($_SESSION['adminid']==0)) {
  header('location:logout.php');
  } else{}
  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/font-awesome.min.css" rel="stylesheet">
	<link href="../css/datepicker3.css" rel="stylesheet">
	<link href="../css/styles.css" rel="stylesheet">
	
	
</head>
<body>
	<?php include_once('../includes/header.php');?>
	<?php include_once('../includes/sidebarADMIN.php');?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Admin</li>
			</ol>
		</div><!--/.row-->
		<div class="row ">
			<div class="col-lg-12 ">
		<hr/>			
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="modal-title" id="myModalLabel">         
			<div class="panel panel-primary">
			<div class="panel-heading">
			Student List
			<a  href = "activateLECTURER.php"class = "btn btn-info btn-outline pull-right" style = "margin-right:12px;" name = "go"><i class = "fa fa-asterisk fa-spin"></i> Activate All Lecturers Account</a>
			<a  href = "addLECTURER.php"class = "btn btn-success btn-outline pull-right" style = "margin-right:12px;" name = "go"><i class = "fa fa-pencil "></i> Add Lecturer</a>
		</div> 

			</div>
			</h4>
     </div>
     <!-- /.panel-heading -->
         <table class="table table-dark table-hover">
             
            <tr><th>S No.</th>
            <th>Lecturer_name</th>
            <th>Email</th>
            <th>Lec_no</th>
            <th>Date_of_Entry</th>
            <th>Gender</th>
            <th>Account</th>
            <th>Action</th>
                </tr>
            
 <?php 

    $bool = false;
    $query = $con->query("SELECT * FROM lecturer ORDER BY id DESC");
             while($row = $query->fetch_array()){
              $id=$row['id'];
            $cnt=$cnt+1;
               ?>
            
        <tr><td><?php echo $cnt;?></td>
       	<td><?php echo $row ['Lecturer_name'];?></td>
        <td><?php echo $row ['Email'];?></td>
        <td><?php echo $row ['Lec_no'];?></td>
        <td><?php echo $row ['Date_of_Entry'];?></td>
        <td><?php echo $row ['Gender'];?></td>
        <td><?php echo $row ['Account'];?></td>
        <td style="text-align:center">
		<a rel="tooltip"  title="Delete" id="<?php  ?>" href="<?php  ?>" data-target="#delete_user<?php ?>" data-toggle="modal"class="btn btn-danger btn-outline"><i class="fa fa-trash-o"></i> Delete</a>	
		<?php// include ('delete_candidate_modal.php'); ?>
		<a rel="tooltip"  title="Edit" id="<?php?>" href="#edit_candidate<?php  ?>"  data-toggle="modal"class="btn btn-success btn-outline"><i class="fa fa-pencil"></i> Edit</a>	
												
		</td>
                </tr>
<?php 

}?>
                 </table>

                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
              
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

						<div class="col-md-12">
							
   

						</div>
					</div>
				</div><!-- /.panel-->
			</div><!-- /.col-->
			<?php include ('script.php');?>
			
		</div><!-- /.row -->
	</div><!--/.main-->
	</div> <!-- the upload -->
<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
</body>
</html>
