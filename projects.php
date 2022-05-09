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
    <style type="text/css">
        nav, body{
          background: #063146;
        }
    </style>
  
</head>
<body>
    <!-- Navigation bar -->
    <nav>
    <ul class="nav justify-content-center">
    <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
    </li>
    
    <li class="nav-item">
    <a class="nav-link" href="projects.php">Projects</a>
    </li>
    
    </ul>
    </nav>
    <!-- search bar here -->
    <div class="d-flex justify-content-center">...</div>
     <div class="col-xs-6 col-md-4 d-flex justify-content-center">
        <div class="input-group mb-3 " style="margin:20px;">
        <input type="text" class="form-control" placeholder="Projects Title" aria-label="Recipient's username" aria-describedby="button-addon2">
        <button class="btn btn-outline-secondary bg-info text-white" type="button" id="">Search</button>
        </div>
     </div>

 
<!-- display the projects here -->
<div class="row justify-content-center justify-content-around" style="margin: 0px 20px;  ">

<?php
while($row=mysqli_fetch_assoc($res))
{
  echo "<div class='card' style='width: 20rem; max-height: 400px; margin-top: 10px;'>";
  echo "<img src='assets/download.jpg' class='card-img-top' alt='...' style='width: 9rem; margin:0 auto;'>";
  echo "<h5>".$row['Title']."</h5>";
  echo "<h5>".$row['Author']."</h5>";
  echo "<p>".$row['File']."</p>";
  echo "<p>".$row['FileSize']."</p>";
  
  echo "<div class='card-body'>";
  echo "<p class='card-text'>".$row['Description']."</p>";
  echo " </div>";
  echo " </div>";
}
mysqli_close($con);
?>  
</div>

  
   




</body>
</html>