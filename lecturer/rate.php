<?php
    include('../includes/dbconnection.php');
   if(count($_POST)>0) {
mysqli_query($con,"UPDATE documents set id='" . $_POST['id'] . "', Author='" . $_POST['Author'] . "', Title='" . $_POST['Title'] . "', Rating='" . $_POST['Rating'] . "' ,Description='" . $_POST['Description'] . "' WHERE id='" . $_POST['id'] . "'");
header('location:viewfiles.php');
}
$result = mysqli_query($con,"SELECT * FROM documents WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>
<?php
// session_start();
// error_reporting(0);
// include('../includes/dbconnection.php');
// if (strlen($_SESSION['lecuid']==0)) {
//   header('location:logout.php');
//   } else{
    
//   }
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
<body class="container-fluid">
    <?php //include_once('../includes/header.php');?>
    <?php //include_once('../includes/sidebarLEC.php');?>
        
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main ">
        <div class="row">
            <div class="col-md-8">
              <ol class="breadcrumb">
                <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
                <li class="active">Admin / Rating student Projects</li>
            </ol>
            </div>
        </div><!--/.row-->
    <div class="row ">
            <div class="col-lg-12 ">
        
                
    <div class="panel panel-default bg-info">

     <form name="Myform" id="Myform" action="" method="post" >
 <input type="hidden" name="id"  value="<?php echo $row['id']; ?>">
    <div class="col-md-8">
    <label for="name" class="form-label">Author:</label>
    <input type="text" class="form-control"  name="Author" value="<?php echo $row['Author']; ?>"/>
    </div>
  <div class="col-md-8">
    <label for="regno" class="form-label">Title:</label>
    <input type="text" class="form-control"  name="Title" value="<?php echo $row['Title']; ?>"/>
  </div>
 
<div class="col-md-8">
  <label for="phone" class="form-label">Description:</label>
  <input class="form-control" maxlength="300" placeholder="Brief summary of your Project" id="" style="height: 100px" name="Description"value="<?php echo $row['Description']; ?>"/>
  
</div>
 <div class="col-md-8">
    <label for="regno" class="form-label">Rate:</label>
    <input type="text" class="form-control"  name="Rating" value="<?php echo $row['Rating']; ?>"/>
  </div>

   
   



   
  
  
  
  <div class="col-md-6">

      <button type="submit" class="btn btn-primary" name ="submit" style="margin-top: 10px">Submit </button>
  </div>
        
    </form>     
     </div> 

            </div>
   </div>
 </div>
</div>


                       
           

<!-- /.modal-content -->
                                

<script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
     
</body>
</html>
