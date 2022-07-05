<!-- fetch sample files -->
<?php
include('includes/dbconnection.php');
$sql="SELECT * FROM sampledoc";
$result=mysqli_query($con,$sql) or die(mysqli_error($con));
  ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDRSSP || projects</title>
    <link rel="css/layout.css" type="text/css" href="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/project.css">
    <style type="text/css">
        a{
        text-decoration: none;
    }
    </style>
  
</head>
<body>
    <!-- Navigation bar -->
    <?php include_once('includes/nav.php');?>
     <!-- switch pages -->
    
    <!-- search bar here -->
    
    

 
<!-- display the projects here -->


<div class="hold">
    <h4 class="text-center"> Sample Project documents</h4>
    <table class="table table-striped bg-white table-hover " style="margin-top: 20px;">

    <tr>
            <!-- <th>S No.</th> -->
            <th>Title</th>
            <th>Author</th>
           
            <th>Description</th>
            
            <th>FileSize</th>
            
            <th>Action</th>
        </tr>
<?php
while($row=mysqli_fetch_assoc($result))
{

echo "</td><td>";
echo $row['File'];
echo "</td><td>";
echo $row['Author'];
echo "</td><td>";
echo $row['Description'];
echo "</td><td>";
echo $row['FileSize'];

echo "
<td><a href='"."download1.php?id=".$row['id']."'>download</a></td>
</tr>";

    
   
}
mysqli_close($con);
?>  
</div>

  
   <div class="hold" style="background-color: orangegray;">
    <h5><i> <form class="row float-start">
        <div class="form-group">
                   <select class="form-control" onchange = "page(this.value)" >
                    <option  value = "#"></option>
                   <option value = "projects.php">Student Projects</option>
                   <option value = "samplePROJECTS.php">Sample Projects</option>

                   </select>
               </div> 
               
               
       </form>
       <br/></h5>
 

</div>

<script type="text/javascript">
        function page (src) {
          window.location = src;
        }
    </script>

</body>
</html>