<?php
include_once '../includes/dbconnection.php';
$result = mysqli_query($con,"SELECT * FROM documents");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lecturer</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/datepicker3.css" rel="stylesheet">
    <link href="../css/styles.css" rel="stylesheet">
    
    
</head>
<body>
    <?php include_once('../includes/header.php');?>
    <?php include_once('../includes/sidebarLEC.php');?>
        
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
                <li class="active">Lecturer</li>
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
           Project documents List
            
            </div> 

            </div>
            </h4>
     </div>
     <!-- /.panel-heading -->
  <?php
if (mysqli_num_rows($result) > 0) {
    
?>   
         <table class="table table-dark table-hover">
        <tr>
            <th>S No.</th>
            <th>Author</th>
            <th>Title</th>
            <th>Rating</th>
            <th>Description</th>
           
            
            <th>Action</th>
        </tr>

<?php

while($row = mysqli_fetch_array($result)) {
    $id=$row['id'];
    $cnt=$cnt+1; 

  

?>           

            
        <td><?php echo $cnt; ?></td>
        <td><?php echo $row ['Author'];?></td>
        <td><?php echo $row ['Title'];?></td>
        <td><?php echo $row ['Rating'];?></td>
        <td><?php echo $row ['Description'];?></td>
        
        <td style="text-align:center">
        <a href="rate.php?id=<?php echo $row["id"]; ?>" class='btn btn-success btn-outline'>Rating</a>
                      
        </td>
               </tr>
            <?php
            $i++;
            }
            ?>
</table>
 <?php
}
else
{
    echo "No result found";
}
?>

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
            
            
        </div><!-- /.row -->
    </div><!--/.main-->
    </div> <!-- the upload -->
           

<!-- /.modal-content -->
                                

<script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
     <?php include ('script.php');?>
</body>
</html>
