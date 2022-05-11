<?php

include('includes/dbconnection.php');
$sql="SELECT * FROM documents";
$res=mysqli_query($con,$sql) or die(mysqli_error($con));
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
        nav, body{
          background: #063146;
        }
        @media only screen and (max-width: 790px) {
     .seen { 
        display: none;
    }
    .see { 
        height:310px;
    }
    </style>
  
</head>
<body>
    <!-- Navigation bar -->
    <?php include_once('includes/nav.php');?>
    <!-- search bar here -->
    
     <div class="hold">
        <div class="input-group mb-3 " style="margin:20px;">
        <input type="text" class="form-control" placeholder="Projects Title" aria-label="Recipient's username" aria-describedby="button-addon2">
        <button class="btn btn-outline-secondary bg-info text-white" type="button" id="">Search</button>
        </div>
     </div>

 
<!-- display the projects here -->

<div class="hold">
    <table class="table table-striped bg-white table-hover seen">
        <tr>
            <th>S No.</th>
            <th>Title</th>
            <th>Description</th>
            
            <th>FileSize</th>
            <th>Author</th>
            <th>Action</th>
        </tr>
<?php
while($row=mysqli_fetch_assoc($res))
{
  
    echo "<div class='soc-track s100 home-soc-100 see'>";
    echo "<h5>".$row['File']."</h5>";
    
    
    echo "<p>".$row['FileSize']."</p>";
   

    echo "<img src='https://www.offensive-security.com/wp-content/uploads/2022/03/SOC-100-icon-white.svg' alt='PEN-200' />";
    echo "<i>".$row['Author']."</i>";

        
    
    // echo "</div>";
echo "</td><td>";
echo $row['id'];
echo "</td><td>";
echo $row['File'];
echo "</td><td>";
echo $row['Description'];
echo "</td><td>";
echo $row['FileSize'];
echo "</td><td>";
echo $row['Author'];
echo "
<td><a href=\"User/delete.php?data=".$row['id']."\">Download</a></td>
</tr>";

    
   
}
mysqli_close($con);
?>  
</div>

  
   




</body>
</html>